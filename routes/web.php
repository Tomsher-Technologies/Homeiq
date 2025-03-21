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
Route::get('/product-detail/{slug}', [ProductController::class, 'productDetails'])->name('products.show');



Route::get('/terms', [FrontendController::class, 'terms'])->name('terms');
Route::get('/privacy', [FrontendController::class, 'privacy'])->name('privacy');



Route::post('/recently-viewed', [CommonController::class, 'addRecentlyViewed']);
Route::get('/recently-viewed', [CommonController::class, 'getRecentlyViewed']);
Route::get('related-products', [ProductController::class, 'relatedProducts'])->name('related.products');

Route::post('/language_change', [FrontendController::class, 'changeLanguage'])->name('language.change');

Route::get('/category/{category_slug}', [SearchController::class, 'listingByCategory'])->name('products.category');

Route::post('/cart/add', [CartController::class, 'addToCart'])->name('cart.add');
Route::get('cart/count', [CartController::class, 'getCount']);
Route::post('cart/change_quantity', [CartController::class, 'changeQuantity']);
Route::delete('/cart/{id}', [CartController::class, 'removeCartItem'])->name('cart.remove');
Route::apiResource('cart', CartController::class)->only('index', 'store', 'destroy');

Route::get('cart/items', [CartController::class, 'getCartDetails'])->name('cart.items');
Route::post('coupon-apply', [CheckoutController::class, 'apply_coupon_code'])->name('coupon-apply');
Route::post('coupon-remove', [CheckoutController::class, 'remove_coupon_code'])->name('coupon-remove');

Route::get('/check-login-status', [UserController::class, 'checkLoginStatus'])->name('check.login.status');


Route::group(['middleware' => ['auth']], function () {
    Route::get('/checkout', [CheckoutController::class, 'index'])->middleware('auth')->name('checkout');
    Route::post('checkout.process', [CheckoutController::class, 'placeOrder'])->name('checkout.process');

    Route::get('/order/success/{order_id}', [CheckoutController::class, 'success'])->name('order.success');
    Route::get('/order/failed', [CheckoutController::class, 'failed'])->name('order.failed');
    
    Route::get('logout', [AuthController::class, 'logout'])->name('logout');

    Route::get('wishlists', [WishlistController::class, 'index'])->name('wishlist.index');
    Route::post('/wishlist/store', [WishlistController::class, 'store'])->name('wishlist/store');
    Route::get('wishlists/count', [WishlistController::class, 'getCount']);
    Route::post('/wishlist/delete', [WishlistController::class, 'delete'])->name('wishlist.delete');
    Route::post('wishlist/remove', [WishlistController::class, 'removeWishlistItem']);

    Route::get('orders', [ProfileController::class, 'orderList'])->name('orders.index');
    Route::get('order-details', [ProfileController::class, 'orderDetails'])->name('order-details');
    Route::get('order/returns', [ProfileController::class, 'orderReturnList'])->name('orders.returns');
    
    Route::post('cancel-order', [CheckoutController::class, 'cancelOrderRequest'])->name('cancel-order');
    Route::post('return-order', [CheckoutController::class, 'returnOrderRequest'])->name('return-order');

    Route::get('account', [ProfileController::class, 'getUserAccountInfo'])->name('account');
    Route::post('/account/update', [ProfileController::class, 'update'])->name('account.update'); 
    Route::post('/change-password', [ProfileController::class, 'changePassword'])->name('account.changePassword');
});

Route::post('/subscribe', [FrontendController::class, 'subscribe'])->name('newsletter.subscribe');

Route::get('register', [AuthController::class, 'showRegistrationForm'])->name('register');
Route::post('register', [AuthController::class, 'register']);

Route::get('login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('login', [AuthController::class, 'login']);

Route::post('/forgot-password', [ForgotPasswordController::class, 'sendResetLink'])->name('password.sendResetLink');
Route::get('/password/reset/{email}/{token}', [ForgotPasswordController::class, 'showResetPasswordForm'])->name('password.reset.form');
Route::post('/password/reset', [ForgotPasswordController::class, 'resetPassword'])->name('password.reset');







