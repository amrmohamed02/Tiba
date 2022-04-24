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
    return view('newhome');
});

Route::get('/about', function () {
    return view('about-us-option2');
});
Route::get('/products', function () {
    return view('productlist');
});
Route::get('/singleproduct', function () {
    return view('productdetails');
});
Route::get('/contact', function () {
    return view('contact-us');
});
