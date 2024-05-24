<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AllController;
use App\Http\Controllers\KontakController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
    return view('home');})->name('_home');

Route::get('/profile', [App\Http\Controllers\AllController::class, 'index'])->name('_profile');
Route::get('/produk', [App\Http\Controllers\AllController::class, 'produk'])->name('_produk');
Route::get('/cara-pemesanan', [App\Http\Controllers\AllController::class, 'pesan'])->name('_pesan');
Route::get('/kontak', [App\Http\Controllers\KontakController::class, 'index'])->name('_kontak');
Route::post('/kontak', [KontakController::class, 'submit'])->name('kontak.submit');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('login');

