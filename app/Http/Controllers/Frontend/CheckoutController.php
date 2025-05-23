<?php


namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Frontend\CartController;
use App\Models\Coupon;
use App\Models\CouponUsage;
use App\Models\OrderTracking;
use App\Models\Address;
use App\Models\CombinedOrder;
use App\Models\Product;
use App\Models\Order;
use App\Models\User;
use App\Models\OrderDetail;
use App\Models\ProductStock;
use App\Models\OrderReturn;
use App\Models\OrderPayments;
use Illuminate\Http\Request;
use App\Utility\NotificationUtility;
use App\Utility\SendSMSUtility;
use Illuminate\Support\Facades\Auth;
use App\Notifications\NewOrderNotification;
use App\Models\Cart;
use App\Mail\EmailManager;
use Mail;

class CheckoutController
{
    public function index()
    {
        $lang = getActiveLanguage();
        $addresses = [];
        $user = Auth::user();
        $cartController = new CartController();
        $response = $cartController->index();
        if(auth()->check()){
            $addresses = Address::where('user_id', auth()->user()->id)->get();
        }
        
        return view('pages.checkout', compact('response','addresses', 'user','lang'));
    }

    public function apply_coupon_code(Request $request)
    {
        $user = getUser();
        // print_r($user);
        if($user['users_id'] != ''){
            $cart_items = Cart::where([$user['users_id_type'] => $user['users_id']])->get();
            $cartCount = count($cart_items);
            $coupon = Coupon::where('code', $request->coupon)->first();

            if ($cart_items->isEmpty()) {
                return response()->json([
                    'success' => false,
                    'message' => trans('messages.cart_empty')
                ], 200);
            }

            if ($coupon == null) {
                return response()->json([
                    'success' => false,
                    'message' => trans('messages.invalid_coupon') 
                ], 200);
            }

            $in_range = strtotime(date('d-m-Y')) >= $coupon->start_date && strtotime(date('d-m-Y')) <= $coupon->end_date;

            if (!$in_range) {
                return response()->json([
                    'success' => false,
                    'message' => trans('messages.coupon_expired') 
                ], 200);
            }

            if($coupon->one_time_use == 1){
                if($user['users_id_type'] == 'temp_user_id'){
                    $is_used = CouponUsage::where('guest_token', $user['users_id'])->where('coupon_id', $coupon->id)->first() != null;
                }else{
                    $is_used = CouponUsage::where('user_id', $user['users_id'])->where('coupon_id', $coupon->id)->first() != null;
                }
                
                if ($is_used) {
                    return response()->json([
                        'success' => false,
                        'message' => trans('messages.already_used_coupon') 
                    ], 200);
                }
            }

            $coupon_details = json_decode($coupon->details);

            if ($coupon->type == 'cart_base') {
                $subtotal = 0;
                $tax = 0;
                $shipping = 0;
                foreach ($cart_items as $key => $cartItem) {
                    $subtotal += $cartItem['offer_price'] * $cartItem['quantity'];
                    $tax += $cartItem['tax'];
                    $shipping += $cartItem['shipping_cost'];
                }
                $sum = $subtotal + $tax ;
                // echo 'subtotal  =  '.$subtotal;
                // echo '<br>tax   ==  '.$tax;
                // echo '<br>shipping  == '.$shipping;
                // die;
                if ($sum >= $coupon_details->min_buy) {
                    if ($coupon->discount_type == 'percent') {
                        $coupon_discount = ($sum * $coupon->discount) / 100;
                        if ($coupon_discount > $coupon_details->max_discount) {
                            $coupon_discount = $coupon_details->max_discount;
                        }
                    } elseif ($coupon->discount_type == 'amount') {
                        $coupon_discount = $coupon->discount;
                    }
                   

                    Cart::where($user['users_id_type'], $user['users_id'])->update([
                        'discount' => $coupon_discount / $cartCount,
                        'coupon_code' => $request->coupon,
                        'coupon_applied' => 1
                    ]);
                    return response()->json([
                        'success' => true,
                        'message' => trans('messages.coupon_applied')
                    ], 200);
                }else{
                    return response()->json([
                        'success' => false,
                        'message' => trans('messages.coupon_cannot_applied')
                    ], 200);
                }
            } elseif ($coupon->type == 'product_base') {
                $coupon_discount = 0;

                foreach ($cart_items as $key => $cartItem) {
                    foreach ($coupon_details as $key => $coupon_detail) {
                        if ($coupon_detail->product_id == $cartItem['product_id']) {
                            if ($coupon->discount_type == 'percent') {
                                $coupon_discount += ($cartItem['offer_price'] * $coupon->discount / 100) * $cartItem['quantity'];
                            } elseif ($coupon->discount_type == 'amount') {
                                $coupon_discount += $coupon->discount * $cartItem['quantity'];
                            }
                        }
                    }
                }

                if($coupon_discount != 0){
                    Cart::where($user['users_id_type'], $user['users_id'])->update([
                        'discount' => $coupon_discount / $cartCount,
                        'coupon_code' => $request->coupon,
                        'coupon_applied' => 1
                    ]);
    
                    return response()->json([
                        'success' => true,
                        'message' => trans('messages.coupon_applied')
                    ], 200);
                }else{
                    return response()->json([
                        'status' => false,
                        'message' => 'Sorry, this coupon cannot be applied to this order'
                    ], 200);
                }
            }
        }else{
            return response()->json([
                'success' => false,
                'message' => trans('messages.user_not_found')
            ], 200);
        }
    }

    public function remove_coupon_code(Request $request)
    {
        $user = getUser();
        Cart::where([$user['users_id_type'] => $user['users_id']])->update([
            'discount' => 0.00,
            'coupon_code' => "",
            'coupon_applied' => 0
        ]);

        return response()->json([
            'success' => true,
            'message' => trans('messages.coupon_removed')
        ], 200);
    }

    public function placeOrder(Request $request){

        $validatedData = $request->validate([
            'billing_name' => 'required|string|max:255',
            'billing_address' => 'required|string|max:255',
            'billing_city' => 'required|string|max:255',
            'billing_state' => 'required|string|max:255',
            'billing_country' => 'required|string|max:255',
            'billing_zipcode' => 'nullable|string',
            'billing_phone' => 'required|string|min:10',  // Add phone validation
            'billing_email' => 'required|email|max:255', // Add email validation
            'shipping_name' => 'nullable|string|max:255',
            'shipping_address' => 'nullable|string|max:255',
            'shipping_city' => 'nullable|string|max:255',
            'shipping_zipcode' => 'nullable|string',
            'shipping_phone' => 'nullable|string|min:10', 
            'shipping_state' => 'nullable|string|max:255',
            'shipping_country' => 'nullable|string|max:255', 
        ],[
            'billing_name.required' => 'This field is required.',
            'billing_address.required' => 'This field is required.',
            'billing_city.required' => 'This field is required.',
            'billing_state.required' => 'This field is required.',
            'billing_country.required' => 'This field is required.',
            'billing_zipcode.required' => 'This field is required.',
            'billing_phone.required' => 'This field is required.',
            'billing_phone.min' => 'The phone number must be at least 10 digits.',
            'billing_email.required' => 'This field is required.',
            'billing_email.email' => 'The email address must be a valid email.',
            'billing_email.max' => 'The email address must not exceed 255 characters.',
            'shipping_phone.min' => 'The phone number must be at least 10 digits.',
        ]);

        // $address_id = $request->address_id ?? null;
        $billing_shipping_same = $request->same_as_billing ?? null;

        $shipping_address = [];
        $billing_address = [];

        $user_id = NULL;
        $guest_token = request()->cookie('guest_token') ?? uniqid('guest_', true);
        
        $billing_address['name']        = $request->billing_name;
        $billing_address['email']       = $request->billing_email;
        $billing_address['address']     = $request->billing_address;
        $billing_address['zipcode']     = $request->billing_zipcode;
        $billing_address['city']        = $request->billing_city;
        $billing_address['state']       = $request->billing_state;
        $billing_address['country']     = $request->billing_country;
        $billing_address['phone']       = $request->billing_phone;

        if ($billing_shipping_same != 'on') {
            $shipping_address['name']        = $request->shipping_name ?? $request->billing_name;
            $shipping_address['email']       = $request->billing_email;
            $shipping_address['address']     = $request->shipping_address ?? $request->billing_address;
            $shipping_address['zipcode']     = $request->shipping_zipcode ?? $request->billing_zipcode;
            $shipping_address['city']        = $request->shipping_city ?? $request->billing_city;
            $shipping_address['state']       = $request->shipping_state ?? $request->billing_state;
            $shipping_address['country']     = $request->shipping_country ?? $request->billing_country;;
            $shipping_address['phone']       = $request->shipping_phone ?? $request->billing_phone;
        } else {
            $shipping_address = $billing_address;
        }

        $shipping_address_json = json_encode($billing_address);  // check forntend billing section changed to shipping section 
        $billing_address_json = json_encode($shipping_address);

        if(auth()->user() && $request->address_id == ''){
            $addressNew                = new Address;
            $addressNew->user_id       = auth()->user()->id;
            $addressNew->address       = $request->billing_address ?? null;
            $addressNew->name          = $request->billing_name ?? null;
            $addressNew->city          = $request->billing_city ?? null;
            $addressNew->state_name    = $request->billing_state ?? null;
            $addressNew->country_name  = $request->billing_country ?? null;
            $addressNew->postal_code   = $request->billing_zipcode ?? null;
            $addressNew->type          = 'other';
            $addressNew->phone         = $request->billing_phone;
            $addressNew->save();
        }

        if (auth()->user()) {
            $user_id = auth()->user()->id;
            $carts = Cart::where('user_id', $user_id)->orderBy('id','asc')->get();
        } else {
            $temp_user_id = $guest_token;
            $carts = ($temp_user_id != null) ? Cart::where('temp_user_id', $temp_user_id)->orderBy('id','asc')->get() : [];
        }

        if(!empty($carts[0])){
            $carts->load(['product', 'product_stock']);

            $sub_total = $discount = $coupon_applied = $total_coupon_discount = $grand_total = $total_shipping = $total_tax = 0;
            $coupon_code = '';

            $order = Order::create([
                'user_id' => $user_id,
                'shipping_address' => $shipping_address_json,
                'billing_address' => $billing_address_json,
                'order_notes' => $request->order_note ?? '',
                'shipping_type' => 'free_shipping',
                'shipping_cost' => 0,
                'delivery_status' => 'pending',
                'payment_type' => $request->payment_method ?? '',
                'payment_status' => 'un_paid',
                'grand_total' =>  0,
                'tax' => 0,
                'sub_total' => 0,
                'offer_discount' => 0,
                'coupon_discount' => 0,
                'code' => date('Ymd-His') . rand(10, 99),
                'date' => strtotime('now'),
                'delivery_viewed' => 0
            ]);

            $track = new OrderTracking;
            $track->order_id = $order->id;
            $track->status = 'pending';
            $track->description = "The order has been placed successfully";
            $track->status_date = date('Y-m-d H:i:s');
            $track->save();

            $orderItems = $productQuantities = [];

            foreach($carts as $data){
                $sub_total = $sub_total + ($data->price * $data->quantity);
                $total_tax = $total_tax + $data->tax;
                $total_shipping = $total_shipping + $data->shipping_cost;
                $discount = $discount + (($data->price * $data->quantity) - ($data->offer_price * $data->quantity)) + $data->offer_discount;
                $coupon_code = $data->coupon_code;
                $coupon_applied = $data->coupon_applied;
                if($data->coupon_applied == 1){
                    $total_coupon_discount += $data->discount;
                }
                $orderItems[] = [
                    'order_id' => $order->id,
                    'product_id' => $data->product_id,
                    'product_stock_id' => $data->product_stock->id,
                    'og_price' => $data->price,
                    'tax' => $data->tax,
                    'shipping_cost' => $data->shipping_cost,
                    'offer_price' => $data->offer_price,
                    'price' => $data->offer_price * $data->quantity,
                    'quantity' => $data->quantity,
                ];
                $productQuantities[$data->product_id] = $data->quantity;

                $product = Product::find($data->product_id);
                $product->num_of_sale += $data->quantity;
                $product->save();
            }
            OrderDetail::insert($orderItems);
            $grand_total = ($sub_total + $total_tax + round($total_shipping))  - ($discount + $total_coupon_discount);

            $order->grand_total         = $grand_total;
            $order->sub_total           = $sub_total;
            $order->offer_discount      = $discount;
            $order->tax                 = $total_tax;
            $order->shipping_cost       = round($total_shipping);
            $order->shipping_type       = ($total_shipping == 0) ? 'free_shipping' : 'flat_rate';
            $order->coupon_discount     = round($total_coupon_discount);
            $order->coupon_code         = $coupon_code;
            $order->save();

            if($coupon_code != ''){
                $coupon_usage = new CouponUsage;
                if($user_id != NULL){
                    $coupon_usage->user_id = $user_id;
                }else{
                    $coupon_usage->guest_token = $temp_user_id;
                }
                $coupon_usage->coupon_id = Coupon::where('code', $coupon_code)->first()->id;
                $coupon_usage->save();
            }
            reduceProductQuantity($productQuantities);

            if($user_id != NULL){
                Cart::where('user_id', $user_id)->delete();
            }elseif($temp_user_id != NULL){
                Cart::where('temp_user_id', $temp_user_id)->delete();
            }
            
            NotificationUtility::sendOrderPlacedNotification($order);
            $admin = User::where('user_type', 'admin')->get();  // or however you identify the admin
            $admin->each(function ($admin) use ($order) {
                $admin->notify(new NewOrderNotification($order));
            });
        
            return redirect()->route('order.success', $order->id);
        }else{
            return redirect()->route('order.failed');
        }
    }
   
    public function cancelOrderRequest(Request $request){

        $request->validate([
            'order_id' => 'required|exists:orders,id',
            'cancel_reason' => 'required|string|max:255'
        ]);

        $order_id = $request->order_id ?? '';
        $reason   = $request->cancel_reason ?? '';
        
        if($order_id != ''){
            $order = Order::find($order_id);
            if($order){
                if($order->cancel_request == 0 && $order->delivery_status == "pending"){
                    $order->cancel_request = 1;
                    $order->cancel_request_date = date('Y-m-d H:i:s');
                    $order->cancel_reason = $reason;
                    $order->save();

                    $array['view'] = 'emails.commonmail';
                    $array['subject'] = "New Order Cancel Request - ".$order->code;
                    $array['from'] = env('MAIL_FROM_ADDRESS');
                    $array['content'] = "<p>Hi,</p>
                                    <p style='line-height: 25px;'>We have received a new order cancel request. Below are the details of the order:</p>
                                    <p><b>Order Code : </b>".$order->code."</p>
                                    <p><b>Customer Name : </b>".$order->user->name ."</p>
                                    <p style='line-height: 25px;'><b>Reason for cancel: </b>".$reason ."</p>
                                    <p><b>Cancel Request Date: </b>".date('d-M-Y H:i a')."</p><br>
                                    <p>Thank you for your cooperation.</p>
                                    <p>Best regards,</p>
                                    <p>Team ".env('APP_NAME')."</p>";
                    Mail::to(env('MAIL_ADMIN'))->queue(new EmailManager($array));
                    
                    return response()->json([
                        'status' => true,
                        'message' => trans('messages.request_success')
                    ], 200);
                }else{
                    return response()->json([
                        'status' => false,
                        'message' => trans('messages.request_already_send')
                    ], 200);
                }
            }else{
                return response()->json([
                    'status' => false,
                    'message' => trans('messages.not_found')
                ], 200);
            }
        }else{
            return response()->json([
                'status' => false,
                'message' => trans('messages.not_found')
            ], 200);
        }
    }

    public function returnOrderRequest(Request $request)
    {
        // Validate the input
        $request->validate([
            'order_id' => 'required|exists:orders,id',
            'return_reason' => 'required|string|max:255',
            'return_qty' => 'required|array',
            'return_qty.*' => 'integer|min:1',
        ]);

        // Get the order
        $order = Order::findOrFail($request->order_id);
        if($order && $order->delivery_status == "delivered"){
            // Loop through selected products and save return details
            foreach ($request->return_qty as $orderDetailId => $qty) {
                $orderDetail = OrderDetail::find($orderDetailId);

                $alreadyReturnedQty = $orderDetail->returns->sum('return_qty');
                $remainingQty = $orderDetail->quantity - $alreadyReturnedQty;

                if ($orderDetail && $qty <= $remainingQty) {
                    OrderReturn::create([
                        'order_id' => $order->id,
                        'order_detail_id' => $orderDetail->id,
                        'product_id' => $orderDetail->product_id,
                        'return_qty' => $qty,
                        'return_reason' => $request->return_reason,
                        'status' => 'Pending', // Default status
                    ]);
                }
            }
        }

        return response()->json(['success' => true, 'message' => 'Return request submitted successfully.']);
    }

    public function success($order_id)
    {
        $lang = getActiveLanguage();
        $order = Order::findOrFail($order_id);
        return view('pages.order-success', compact('order','lang'));
    }

    // Handle the failed page
    public function failed()
    {
        $lang = getActiveLanguage();
        return view('pages.order-failed',compact('lang'));
    }
}
