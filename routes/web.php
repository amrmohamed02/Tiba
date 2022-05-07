<?php

use App\Http\Controllers\ProductController;
use App\Models\Product;
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

Route::get('/products', [ProductController::class, 'show']);

Route::get('/singleproduct', function () {
    return view('productdetails');
});
Route::get('/contact', function () {
    return view('contact-us');
});

// Admin routes
Route::any('/admin/add', [ProductController::class, 'add'] );
Route::post('/admin/addcat', [ProductController::class, 'addcat'] );