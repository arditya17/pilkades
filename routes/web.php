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
    return view('landing');
});

Auth::routes();


//Calon Kades
Route::get('/home', 'KotakSuaraController@voting')->name('adminHome');
Route::get('/homee', 'HomeController@adminHome')->name('home');
Route::get('admin/home', 'HomeController@admin')->name('admin.home')->middleware('is_admin');
Route::get('/admin/tambah', 'AdminController@tambahCalon')->middleware('is_admin');
Route::get('/admin/list', 'AdminController@list')->middleware('is_admin');
Route::get('/admin/calon/edit/{id}', 'AdminController@edit')->middleware('is_admin');
Route::get('/admin/calon/details/{id}', 'AdminController@details')->middleware('is_admin');
Route::get('/admin/calon/hapus/{id}', 'AdminController@hapus')->middleware('is_admin');;
Route::get('/admin/kotak', 'AdminController@KotakSuara')->middleware('is_admin');
Route::post('/admin/upload', 'AdminController@upload');
Route::post('/admin/update', 'AdminController@update');

//Pemilih
Route::get('/admin/pemilih/tambah', 'AdminController@tambahPemilih')->middleware('is_admin');
Route::post('/admin/pemilih/store', 'AdminController@updatePemilih');
Route::post('/admin/pemilih/add', 'AdminController@store');
Route::get('/admin/pemilih/list', 'AdminController@listPemilih')->middleware('is_admin');
Route::get('/admin/pemilih/edit/{id}', 'AdminController@editPemilih')->middleware('is_admin');
Route::get('/admin/pemilih/details/{id}', 'AdminController@detailsPemilih')->middleware('is_admin');
Route::get('/admin/pemilih/hapus/{id}', 'AdminController@hapusPemilih')->middleware('is_admin');;

//Kotak Suara

Route::post('/pemilih/vote', 'KotakSuaraController@vote');
