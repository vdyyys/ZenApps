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

Route::get('/paket', function(){
    return view('pages.paket');
});

Route::get('/dashboard', function(){
    return view('pages.dashboard');
});

Route::get('/paket/detail', function(){
    return view('pages.detail_paket');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
