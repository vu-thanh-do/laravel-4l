<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

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
Route::get('/', function () {
    $products = App\Models\Product::all(); // Lấy tất cả sản phẩm
    return view('client.index', compact('products'));
});
Route::get('/product/{id}', [ProductController::class, 'show'])->name('product.show');


Route::get('shop-single', function () {
    return view('client.shop-single');
});

Route::get('about', function () {
    return view('client.about');
});

Route::get('shop', function () {
    return view('client.shop');
});

Route::get('cart', function () {
    return view('client.cart');
});

Route::get('checkout', function () {
    return view('client.checkout');
});

Route::get('contact', function () {
    return view('client.contact');
});

Route::get('thankyou', function () {
    return view('client.thankyou');
});

Route::get('products', function () {
    return view('admin.products');
});

Route::get('product-detail', function () {
    return view('admin.product-detail');
});

Route::get('create-product', function () {
    return view('admin.create-product');
});

Route::get('users', function () {
    return view('admin.users');
});

Route::get('orders', function () {
    return view('admin.orders');
});

Route::get('order-detail', function () {
    return view('admin.order-detail');
});
// Route::get('/featured-products', [ProductController::class, 'showProducts']);
Route::get('/featured-products', [ProductController::class, 'seeMore']);
