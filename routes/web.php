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
    $product = Product::all();
    $categories = Category::all();
    $recommended = $product->where('rating', '>', 3);
    return view('pages/welcome', compact("product", "categories", "recommended"));
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('products', 'ProductsController');

Route::get('/categories', function () {
    $categories = Category::all();

    return view('pages/categories', compact("categories"));
});

Route::get('/product', function () {
    $categories = Category::all();

    return view('pages/product', compact("categories"));
});
