<?php

use App\Http\Resources\CartResource;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Resources\ProductResource;
use Illuminate\Database\Eloquent\Collection;

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
    $cart = new CartResource(App\Cart::find(1));
    // return view('test', compact('cart'));
    // dd($cart);
    return $cart['products'];
});

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::get('/shop', 'ProductController@index')->name('shop');
Route::get('/shop/{product}', 'ProductController@show')->name('shop.show');

Route::get('/blog', 'BlogController@index')->name('blog');

Route::get('/contacts', 'ContactController@index')->name('contacts');
