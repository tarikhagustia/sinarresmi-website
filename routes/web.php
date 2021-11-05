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
    return view('welcome');
});


Route::get('/about-us', function () {
    return view('about');
});

Route::get('/events', function () {
    return view('events');
});

Route::get('/contact-us', function () {
    return view('contact-us');
});

Route::get('/products', function () {
    return view('products');
});


Route::get('/products/original-check/{code}', [\App\Http\Controllers\ProductController::class, 'originalCheck']);
