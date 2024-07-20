<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\produkController;
use App\Models\produk;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::controller(AuthController::class)->group(function () {
    Route::get('register', 'register')->name('register');
});

Route::controller(AuthController::class)->group(function () {
    Route::get('/', 'login')->name('login');
});

Route::controller(dashboardController::class)->group(function () {
    Route::get('dashboard', 'dashboard')->name('dashboard');
});

Route::post('/registerAction', [AuthController::class, 'registerAction'])->name("registerAction");
Route::post('/loginAction', [AuthController::class, 'loginAction'])->name("loginAction");
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');


Route::get('/action-deleteProduk/{id}', [produkController::class, 'destroy'])->name('action-deleteProduk');
Route::get('/tambahBarang', [produkController::class, 'produk'])->name('tambahBarang');
Route::post('/tambahBarang', [produkController::class, 'tambahBarang'])->name('tambah');

Route::get('/editBarang/{id}', [produkController::class, 'produkEdit'])->name('editBarang');
Route::post('/editBarang/{id}', [produkController::class, 'editBarang'])->name('edit');

Route::get('/dashboard', [produkController::class, 'produk'])->name('dashboard');



// Route::get('/search', [DashboardController::class, 'search'])->name('search');



