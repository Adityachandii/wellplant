<?php

use App\Http\Controllers\IndexController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;
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

Route::get('/login', function() {
    return view('login.login', ['routeName' => Route::currentRouteName()]);
})->name('login');

Route::get('/login/buyer', function() {
    return view('login.buyer', ['routeName' => Route::currentRouteName()]);
})->name('login.buyer');

Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/', [IndexController::class, 'index'])->name('index');
Route::get('/home', [IndexController::class, 'home'])->name('home');
Route::get('/home/seller', [IndexController::class, 'home'])->name('seller.home');
Route::get('/about-us', function() {
    return view('about_us', ['routeName' => Route::currentRouteName()]);
})->name('about-us');
Route::get('/product/{categoryId}', [ProductController::class, 'showByCategoryId'])->name('showByCategoryId');
