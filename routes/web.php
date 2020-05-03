<?php

use Illuminate\Database\Eloquent\Collection;
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

Route::get('/test', function () {
    $items = App\Product::take(3)->get();
    // $items->withPath(url('/'));
    // dd($items);
    return view('test', compact('items'));
});

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::get('/shop', 'ProductController@index')->name('shop');
Route::get('/shop/{product}', 'ProductController@show')->name('shop.show');

Route::get('/blog', 'BlogController@index')->name('blog');

Route::get('/contacts', 'ContactController@index')->name('contacts');
