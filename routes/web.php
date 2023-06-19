<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\User\HomeController;
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

Route::get('login', [AuthController::class, 'index'])->name('index');
Route::group(['prefix' => 'customer'], function () {
    Route::post('login-request', [AuthController::class, 'login'])->name('login.customer');
    Route::post('signin-request', [AuthController::class, 'signup'])->name('signup.customer');
    Route::get('Home', [HomeController::class, 'index'])->name('customer.home');
});