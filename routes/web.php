<?php

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




Route::middleware(['auth'])->group(function () {
    Route::get('/', function () {
        return view('dashboard');
    });
    Route::get('/dashboard', function () {
        return view('dashboard');
    });
    Route::get('/stok', function () {
        return view('stok');
    });
    Route::get('/barang-masuk', function () {
        return view('barang-masuk');
    });
    Route::get('/barang-keluar', function () {
        return view('barang-keluar');
    });
    Route::get('/transaksi', function () {
        return view('transaksi');
    });
    Route::get('/logout', 'LogoutController@perform')->name('logout.perform');
});
require __DIR__.'/auth.php';
