<?php

use App\Product;
use App\Category;

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
    $product = Product::all()->take(6);
    $categories = Category::all();
    $recommended = Product::all()->where('rate', '>', 3)->take(6);
    return view('pages/welcome', compact("product", "categories", "recommended"));
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('products', 'ProductsController');

Route::get('/categorie/{categorie?}', function ($categorie = 'DEPORTES') {
    $categories = Category::all();
    $items = Product::all()->where('section', $categorie);

    return view('pages/categories', compact("categories", "items"));
})->name('categorie');


Route::get('/product/{item_code}', 'ProductsController@show')->name('product');

Route::get('/cart', 'OrdersController@show')->name('order');

Route::get('/purchased', function () {
    return view('pages/purchased');
});

Route::post('/order/{item_code}', 'OrdersController@insert')->name('order');
