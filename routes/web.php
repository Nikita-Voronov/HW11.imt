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

Route::get('/aboutus', function () {
    return view('aboutus');
});

Route::get('/categories', function () {
    return view('categories');
});
Route::get('/products', function () {
    return view('products');
});
Route::get('/trusiki', function () {
    return view('trusiki');
});
Route::get('/nosochki', function () {
    return view('nosochki');
});
Route::get('/platechki', function () {
    return view('platechki');
});
