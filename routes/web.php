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

Route::get('/', 'IndexController@index');

// Route::get('/profil/{id}','EoController@show');

Route::get('/user', 'UserController@index')->name('user');

Route::get('/paket/detail', function(){
    return view('pages.detail_paket');
});

Route::get('/notifikasi', function(){
    return view('pages.notifikasi');
});

Route::get('/transaksi/detail', function(){
    return view('pages.detail_transaksi');
});

Route::get('/pemesanan', function(){
    return view('pages.pemesanan');
});

Route::get('/cart', function(){
    return view('pages.cart');
});

Route::get('/about', function(){
    return view('pages.about');
});

Auth::routes();
Route::resource('eo','EoController');
Route::resource('paket', 'PaketController');
Route::post('/paket/{paket}/removeAvailability', ['as'=>'paket.remove', 'uses'=> 'PaketController@removeAvailability']);
Route::post('/paket/{paket}/addAvailability', ['as'=>'paket.add', 'uses'=> 'PaketController@addAvailability']);

// CART
Route::post('/cart/{nama_paket}', ['as'=> 'cart.store', 'uses' =>'CartController@store']);
Route::get('/cart', ['as'=>'cart', 'uses'=> 'CartController@index']);
Route::get('/cart/{id}', ['as'=>'cart.destroy', 'uses'=> 'CartController@destroy']);

Route::resource('transaction', 'TransactionController');
Route::resource('booking','BookingController');

Route::get('/konfirmasi', function(){
    return view('pages.konfirmasi');
});

Route::resource('transfer', 'ManualTransactionController');
Route::get('/approval/{id}', 'UserController@update');
Route::get('/notifikasi', 'NotifikasiController@index');

Route::resource('kategori', 'KategoriController');
