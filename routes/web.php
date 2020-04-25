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

Route::get('/404', function () {
    return view('404');
});

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::get('/shop', 'ShopController@index')->name('shop');

Route::get('/blog', 'BlogController@index')->name('blog');

Route::get('/contacts', 'ContactController@index')->name('contacts');