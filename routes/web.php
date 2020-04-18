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

Route::get('/', 'PageController@welcome')->name('home');
Route::get('/message', 'PageController@message')->name('messages');
Route::get('/loginpage', 'PageController@login')->name('loginpage');
Route::get('/putmessage', 'PageController@putmessage')->name('putmessage');
Route::get('/registerpage', 'PageController@register')->name('registerpage');

Route::post('/insert', 'PageController@insertmessage')->name('insertmessage');

Auth::routes();