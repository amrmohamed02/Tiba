<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CharacteristicController;
use App\Http\Controllers\DosingController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SupplierController;
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

Route::get('/contact', function () {
    return view('contact-us');
});

Route::get('/about', function () {
    return view('about-us-option2');
});

Route::get('/products', [ProductController::class, 'show']);
Route::post('/bycategory', [ProductController::class, 'bycat']);
Route::get('/products/{name}', [ProductController::class, 'productdetails']);



// Admin routes
Route::prefix('admin')->group(function () {
    Route::any('/add', [ProductController::class, 'add'] );
    Route::any('/addcategory', [CategoryController::class, 'addcat'] );
    Route::any('/addchar', [CharacteristicController::class, 'addchar'] );
    Route::any('/addsupplier', [SupplierController::class, 'addsupplier'] );
    Route::any('/adddosing', [DosingController::class, 'adddosing'] );
    //user routes    
    Route::any('/login', [UserController::class,'login']);
    Route::get('/logout', [UserController::class,'logout']);
    Route::any('/register', [UserController::class,'register']);
    Route::any('/profile', [UserController::class,'profile']);
    Route::get('/welcome', [UserController::class,'welcome']);
    //end of Admin routes
});