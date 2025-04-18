<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Frontend\FrontendController;
use App\Http\Controllers\Frontend\ProductController;
use App\Http\Controllers\Frontend\CartController;
use App\Http\Controllers\Frontend\CheckoutController;
use App\Http\Controllers\Frontend\UserController;
use App\Http\Controllers\Frontend\AuthController;
use App\Http\Controllers\Frontend\WishlistController;
use App\Http\Controllers\Frontend\ProfileController;
use App\Http\Controllers\Frontend\ForgotPasswordController;
use App\Http\Controllers\Admin\InvoiceController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [FrontendController::class, 'home'])->name('home');
Route::get('/about', [FrontendController::class, 'about'])->name('about-us');

Route::get('/services', [FrontendController::class, 'services'])->name('services.index');
Route::get('/services/{slug}', [FrontendController::class, 'showService'])->name('services.show');
Route::get('/load-more-services', [FrontendController::class, 'loadMoreService'])->name('services.loadMore');

Route::get('/blogs/', [FrontendController::class, 'blogs'])->name('blog');
Route::get('/load-more-blogs', [FrontendController::class, 'loadMoreBlogs'])->name('blog.loadMore');
Route::get('/blog/{slug}', [FrontendController::class, 'showBlog'])->name('blog.details');

Route::get('/contact', [FrontendController::class, 'contact'])->name('contact');
Route::post('/contact-submit', [FrontendController::class, 'submitContactForm'])->name('contact.submit');

Route::post('/subscribe', [FrontendController::class, 'subscribe'])->name('newsletter.subscribe');

Route::get('/products', [ProductController::class, 'index'])->name('products.index');
Route::get('/load-more-products', [ProductController::class, 'loadMoreProducts'])->name('product.loadMore');
Route::get('/product/{slug}', [ProductController::class, 'productDetails'])->name('products.show');
Route::get('/search-suggestions', [ProductController::class, 'searchSuggestions'])->name('search.suggestions');

Route::get('/terms-conditions', [FrontendController::class, 'terms'])->name('terms-conditions');
Route::get('/privacy-policy', [FrontendController::class, 'privacy'])->name('privacy-policy');
Route::get('/return-policy', [FrontendController::class, 'returnPolicy'])->name('return-policy');

Route::get('/brands', [FrontendController::class, 'brands'])->name('brand-listing');

Route::get('register', [AuthController::class, 'showRegistrationForm'])->name('register');
Route::post('register', [AuthController::class, 'register']);

Route::get('login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('login', [AuthController::class, 'login']);

Route::get('forgot-password', [ForgotPasswordController::class, 'showForgotForm'])->name('forgot-password');
Route::post('/forgot-password', [ForgotPasswordController::class, 'sendResetLink'])->name('password.sendResetLink');
Route::get('/password/reset/{email}/{token}', [ForgotPasswordController::class, 'showResetPasswordForm'])->name('password.reset.form');
Route::post('/password/reset', [ForgotPasswordController::class, 'resetPassword'])->name('password.reset');

// Cart
Route::post('/cart/add', [CartController::class, 'addToCart'])->name('cart.add');
Route::get('cart/list', [CartController::class, 'index'])->name('cart.index');
Route::delete('/cart/{id}', [CartController::class, 'removeCartItem'])->name('cart.remove');
Route::get('/cart', [CartController::class, 'getCartDetails'])->name('cart');
Route::post('cart/change_quantity', [CartController::class, 'changeQuantity']);
Route::post('coupon-apply', [CheckoutController::class, 'apply_coupon_code'])->name('coupon-apply');
Route::post('coupon-remove', [CheckoutController::class, 'remove_coupon_code'])->name('coupon-remove');

Route::get('/checkout', [CheckoutController::class, 'index'])->name('checkout');
Route::post('checkout.process', [CheckoutController::class, 'placeOrder'])->name('checkout.process');

Route::get('/order/success/{order_id}', [CheckoutController::class, 'success'])->name('order.success');
Route::get('/order/failed', [CheckoutController::class, 'failed'])->name('order.failed');

Route::get('/faq', [FrontendController::class, 'faq'])->name('faq');






Route::post('/recently-viewed', [CommonController::class, 'addRecentlyViewed']);
Route::get('/recently-viewed', [CommonController::class, 'getRecentlyViewed']);
Route::get('related-products', [ProductController::class, 'relatedProducts'])->name('related.products');

Route::get('/category/{category_slug}', [SearchController::class, 'listingByCategory'])->name('products.category');


Route::get('cart/count', [CartController::class, 'getCount']);

Route::get('/check-login-status', [UserController::class, 'checkLoginStatus'])->name('check.login.status');


Route::group(['middleware' => ['auth']], function () {

    Route::get('logout', [AuthController::class, 'logout'])->name('logout');

    Route::get('wishlists', [WishlistController::class, 'index'])->name('wishlist.index');
    Route::post('/wishlist/store', [WishlistController::class, 'store'])->name('wishlist/store');
    Route::get('wishlists/count', [WishlistController::class, 'getCount']);
    Route::post('/wishlist/delete', [WishlistController::class, 'delete'])->name('wishlist.delete');
    Route::post('wishlist/remove', [WishlistController::class, 'removeWishlistItem']);

    Route::get('orders', [ProfileController::class, 'orderList'])->name('orders.index');
    Route::get('order-details', [ProfileController::class, 'orderDetails'])->name('order-details');
    Route::get('invoice-download/{order_id}', [InvoiceController::class, 'invoice_download'])->name('download-invoice');
    Route::get('order/returns', [ProfileController::class, 'orderReturnList'])->name('orders.returns');
    
    Route::post('cancel-order', [CheckoutController::class, 'cancelOrderRequest'])->name('order.cancel');
    Route::post('/order/return', [CheckoutController::class, 'returnOrderRequest'])->name('order.return');

    Route::get('account', [ProfileController::class, 'getUserAccountInfo'])->name('account');
    Route::post('/account/update', [ProfileController::class, 'update'])->name('account.update'); 

    Route::get('update-password', [ProfileController::class, 'updatePassword'])->name('update-password');
    Route::post('/change-password', [ProfileController::class, 'changePassword'])->name('account.changePassword');

    Route::get('my-address', [ProfileController::class, 'getUserAddressInfo'])->name('my-address');
    Route::get('add-address', [ProfileController::class, 'addAddress'])->name('add-address');
    Route::post('save-address', [ProfileController::class, 'saveAddress'])->name('save-address');
    Route::delete('/address/delete', [ProfileController::class, 'deleteAddress'])->name('address.delete');
    Route::get('edit-address/{id}', [ProfileController::class, 'editAddress'])->name('edit-address');
});

Route::post('/subscribe', [FrontendController::class, 'subscribe'])->name('newsletter.subscribe');











