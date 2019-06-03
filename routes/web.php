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

Route::get('/profil/eo', function(){
    return view('pages.profil_eo');
});

Route::get('/dashboard', function(){
    return view('pages.dashboard');
});

Route::get('/paket/detail', function(){
    return view('pages.detail_paket');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/notifications', function(){
    return view('pages.notifications');
});

Route::get('/transactions/detail', function(){
    return view('pages.detail_transaction');
});
