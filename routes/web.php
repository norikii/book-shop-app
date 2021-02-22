<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ShopController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [ShopController::class, 'index'])->name('home');

// displays the view where all shop will be shown
Route::get('/shop', function () {
    return view('shop.index');
});

// Product endpoints and view routes
//Route::resource('book', BookController::class);
// displays the product create form
Route::get('/dashboard/product/create', [BookController::class, 'create'])->name('create_product');
// displays the product edit form
Route::get('/dashboard/product/{id}/edit', [BookController::class, 'edit'])->name('edit_product');
// endpoint for creating the product/book
Route::post('/dashboard/product', [BookController::class, 'store'])->name('store_product');
// endpoint for getting just one product item from the databases
Route::get('/dashboard/product/{id}', [BookController::class, 'show'])->name('show_product');
// endpoint for editing the product/book
Route::patch('/dashboard/product/{id}', [BookController::class, 'update'])->name('update_product');
// endpoint for deleting the product/book from the database
Route::delete('/dashboard/product/{id}', [BookController::class, 'destroy'])->name('destroy_product');


Route::get('/dashboard', [BookController::class, 'index'])->name('dashboard');

Route::post('/logout', [LogoutController::class, 'logout'])->name('logout');

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'signIn']);

Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store']);

Route::post('/shop', [RegisterController::class, 'store'])->name('shop');



