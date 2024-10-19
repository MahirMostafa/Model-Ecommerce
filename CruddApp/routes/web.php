<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogOutController;
use App\Http\Controllers\SignUpController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashBoardController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [ProductController::class, 'home']);

Route::get('/login', [LoginController::class, 'login']);
Route::post('/login-user', [LoginController::class, 'loginuser'])->name('login-user');
Route::get('/dashboard', [DashBoardController::class, 'dashboard']);
Route::get('/signup', [SignUpController::class, 'signup']);
Route::post('/store', [SignUpController::class, 'ourfilestore'])->name('store');
Route::get('/edit/{id}', [DashBoardController::class, 'edit'])->name('edit');
Route::post('/update/{id}', [DashBoardController::class, 'updateData'])->name('update');
Route::delete('/delete/{id}', [DashBoardController::class, 'deleteData'])->name('delete');
Route::get('/logout', [LogOutController::class, 'logoutUser'])->name('logout');
Route::get('/products', [ProductController::class, 'products']);
Route::post('/product-store', [ProductController::class, 'productstore'])->name('product-store');
Route::get('/viewproducts', [ProductController::class, 'viewproducts']);
Route::get('/category', [CategoryController::class, 'category']);
Route::get('/addcategory', [CategoryController::class, 'viewcategory'])->name('addcategory');
Route::post('/addcategory', [CategoryController::class, 'addcategory'])->name('addcategory');
Route::get('/editcategory/{id}', [CategoryController::class, 'edit'])->name('editcategory');
Route::post('/updatecategory/{id}', [CategoryController::class, 'update'])->name('updatecategory');
Route::delete('/deletecategory/{id}', [CategoryController::class, 'deleteData'])->name('deletecategory');
Route::get('/brand', [BrandController::class, 'brand'])->name('brand');
Route::get('/addbrand', [BrandController::class, 'viewbrand'])->name('addbrand');
Route::post('/addbrand', [BrandController::class, 'addbrand'])->name('addbrand');
Route::delete('/deletebrand/{id}', [BrandController::class, 'deleteData'])->name('deletebrand');
Route::get('/editbrand/{id}', [BrandController::class, 'edit'])->name('editbrand');
Route::post('/updatebrand/{id}', [BrandController::class, 'update'])->name('updatebrand');


// Cart Routes
Route::get('/cart', [CartController::class, 'viewCart'])->name('cart.view');
Route::post('/cart/add', [CartController::class, 'addToCart'])->name('cart.add');
Route::post('/cart/remove/{id}', [CartController::class, 'removeFromCart'])->name('cart.remove');
Route::post('/cart/update/{id}', [CartController::class, 'updateCart'])->name('cart.update');
