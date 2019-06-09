<?php

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
    return view('pages.index');
});

Route::get('/profil/{id}','EoController@show');

Route::get('/dashboard', function(){
    return view('pages.dashboard');
});

Route::get('/paket/detail', function(){
    return view('pages.detail_paket');
});
Auth::routes();


Route::get('/notifikasi', function(){
    return view('pages.notifikasi');
});

Route::get('/transaksi/detail', function(){
    return view('pages.detail_transaksi');
});

Route::get('/pemesanan', function(){
    return view('pages.pemesanan');
});

Route::get('/pembayaran', function(){
    return view('pages.pembayaran');
});

Route::get('/mitra', function(){
    return view('pages.mitra');
});