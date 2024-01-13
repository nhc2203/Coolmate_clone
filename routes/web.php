<?php

use App\Http\Controllers\Admin\ProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\UploadController;
use App\Http\Controllers\User\FrontendController;

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
//admin
Route::get('/admin', function (){
    return view('admin.home');
});
//User
Route::get('/', [FrontendController::class, 'home']);
Route::get('/home', [FrontendController::class, 'home']);
Route::get('/home/product_detail/{id}', [FrontendController::class, 'product_detail']);
//Cart
Route::get('/cart', [FrontendController::class, 'show_cart']);
Route::post('/cart/add', [FrontendController::class, 'cart_add']);
//Order
Route::get('/order/success', function (){
    return view('user.order.order_success');
});
Route::get('/order/confirm', function (){
    return view('user.order.order_confirm');
});
//Product
Route::post('/admin/product/add', [ProductController::class, 'insert_product']);
Route::get('/admin/product/create', [ProductController::class, 'product_add_view']);
Route::get('/admin/product/list', [ProductController::class, 'product_list_view']);
Route::get('/admin/product/delete', [ProductController::class, 'product_delete']);
Route::get('/admin/product/edit/{id}', [ProductController::class, 'product_edit']);
Route::post('/admin/product/edit/{id}', [ProductController::class, 'product_update']);


Route::get('/admin/order-list', function (){
    return view('admin.order_list');
});
Route::get('/admin/order-detail', function (){
    return view('admin.order_detail');
});


Route::post('/upload',[UploadController::class,'upload']);

Route::post('/uploads',[UploadController::class,'uploads']);