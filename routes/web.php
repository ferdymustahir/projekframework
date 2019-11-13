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
    return view('welcome');
});

// Route::get('/login','loginController@login');

Route::get('/pemasukan','pemasukanController@pemasukan')->name('pemasukan');
Route::get('/pemasukan/entry','pemasukanController@inputpemasukan');
Route::post('/pemasukan/store','pemasukanController@store');
Route::get('/pemasukan/edit/{id}','pemasukanController@edit');
Route::post('/pemasukan/update','pemasukanController@update');
Route::get('/pemasukan/delete/{id}','pemasukanController@delete');


Route::get('/pengeluaran','pengeluaranController@pengeluaran');
Route::get('/pengeluaran/entry','pengeluaranController@inputpengeluaran');
Route::post('/pengeluaran/store','pengeluaranController@store');
Route::get('/pengeluaran/edit/{id}','pengeluaranController@edit');
Route::post('/pengeluaran/update','pengeluaranController@update');
Route::get('/pengeluaran/delete/{id}','pengeluaranController@delete');

Route::get('/inventaris','inventarisController@index');
Route::get('/inventaris/create','inventarisController@create');
Route::post('/inventaris/store','inventarisController@store');
Route::get('/inventaris/edit/{id}','inventarisController@edit');
Route::put('inventaris/update/{id}','inventarisController@update');
Route::get('/inventaris/delete/{id}','inventarisController@destroy');

Route::get('/pemasukan/infaq','pemasukanController@infaq');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
