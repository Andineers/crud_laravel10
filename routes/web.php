<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\dashboardController;

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
    return view('welcome');
});

Route::controller(AuthController::class)->group(function () {
    Route::get('register', 'register')->name('register');
});

Route::controller(AuthController::class)->group(function () {
    Route::get('login', 'login')->name('login');
});

Route::controller(dashboardController::class)->group(function () {
    Route::get('dashboard', 'dashboard')->name('dashboard');
});

Route::post('/registerAction', [AuthController::class, 'registerAction'])->name("registerAction");
Route::post('/loginAction', [AuthController::class, 'loginAction'])->name("loginAction");
