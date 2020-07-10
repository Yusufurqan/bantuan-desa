<?php

use Illuminate\Support\Facades\Auth;
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


// Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();
Route::group(['middleware'=>'auth'],function()
{
    // Route::get('/home', 'HomeController@index')->name('home');
    // Route::get('/index', 'IndexController@index')->name('index');
    // Route::get('/index/tambah_index','IndexController@create')->name('index.tambahindex');
    // Route::post('/index/tambah_index','IndexController@store')->name('index.tambahindex');
    // Route::get('/index/edit_index/{id}', 'IndexController@edit')->name('index.editindex');
    // Route::post('/index/edit_index/{id}', 'IndexController@update')->name('index.editindex');
    // Route::get('/index/delete/{id}', 'IndexController@destroy')->name('index.delete');
    Route::resource('index','IndexController');
});
