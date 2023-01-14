<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CartController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/registration', [AuthController::class, 'registrationGet'])->name('registration.get');
Route::post('/regpost', [AuthController::class, 'registrationPost'])->name('registration.post');

Route::get('/login', [AuthController::class, 'loginGet'])->name('login.get');
Route::post('/loginpost', [AuthController::class, 'loginPost'])->name('login.post');

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/cart', [CartController::class, 'cartGet'])->name('cart.get')->middleware('auth');
Route::post('/cart', [CartController::class, 'redeem'])->name('redeem')->middleware('auth');
Route::post('/pay', [CartController::class, 'pay'])->name('cart.pay');


// admins route
Route::get('/dashboard', [AdminController::class, 'DashboardGet'])->name('admin.dashboard');
Route::get('/codechange/{id}', [AdminController::class, 'CodeStatusChange'])->name('code.status.change');
Route::post('/addpromo', [AdminController::class, 'AddPromo'])->name('add.promo');