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

Route::get('/', 'PagesController@index');
Route::get('/about', 'PagesController@about');
Route::get('/diensten', 'PagesController@diensten');
Route::get('/projecten', 'PagesController@projecten');
Route::get('/contact', 'PagesController@contact');

Route::post('/send-message', 'PagesController@message');
