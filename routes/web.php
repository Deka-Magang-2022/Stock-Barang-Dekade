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

Route::get('/', function () {
    return view('welcome');
});

Route::get('login', function () {
    return view('login');
});

Route::get('dashboard', function () {
    return view('dashboard');
});

Route::get('test', function () {
    return view('test');
});

Route::get('register', function () {
    return view('register');
});
Route::get('stok', function () {
    return view('stok');
});
Route::get('transaksi', function () {
    return view('transaksi');
});
Route::get('barang-masuk', function () {
    return view('barang-masuk');
});
