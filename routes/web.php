<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\AdminController;

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

Route::get('Admin',[AdminController::class, 'dashboard'])->name('dashboard');

Route::get('Auth/login',[LoginController::class,'login'])->name('login');
Route::post('Auth/login/proses',[LoginController::class, 'proseslogin'])->name('proseslogin');
Route::post('/logout',[LoginController::class, 'logout'])->name('logout');

Route::get('Auth/register',[RegisterController::class, 'register'])->name('register.index');
Route::post('Auth/register',[RegisterController::class, 'store'])->name('register.store');


    Route::get('/',[DashboardController::class,'dashboard'])->name('dashboard');
    Route::get('shop',[ShopController::class,'shopping'])->name('shop.shopping');
    Route::get('shop/detail/{id}',[ShopController::class,'gian'])->name('shop.detail');
    
    Route::get('contact',[ContactController::class,'contact'])->name('contact.contact');
    
//Route::group([ 'middleware'=> ['userlogin']], function() {
//});
