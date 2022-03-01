<?php

use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Dashboard\BookingResourceController;
use App\Http\Controllers\Dashboard\EventResourceController;
use App\Http\Controllers\Dashboard\ProductResourceController;
use App\Http\Controllers\Dashboard\SerialNumberResourceController;
use App\Http\Controllers\Dashboard\UserResourceController;
use App\Http\Controllers\Dashboard\ProductSerialResourceController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Dashboard\NewsResourceController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\FacilityController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ProductController;
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

Route::group(
[
	'prefix' => LaravelLocalization::setLocale(),
	'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
], function(){

    Route::get('/', function () {
        return view('welcome');
    })->name('home');


    Route::get('/about-us', function () {
        return view('about');
    });

    Route::get('/events', [EventController::class, 'index'])->name('events.index');

    Route::get('/news', [NewsController::class, 'index'])->name('news.index');
    Route::get('/news/{slug}', [NewsController::class, 'show'])->name('news.show');

    Route::get('/contact-us', function () {
        return view('contact-us');
    });

    Route::get('/facility', [FacilityController::class, 'index'])->name('facility.index');
    Route::get('/facility/{name}', [FacilityController::class, 'show'])->name('facility.show');

    Route::post('/contact-us', [ContactController::class, 'store']);

    Route::get('/products', [ProductController::class, 'index'])->name('products.index');

    Route::get('/products/original-check/{code}', [ProductController::class, 'originalCheck'])->name('original.check');

    Route::get('/bookings', function() {
        return redirect()->route('home');
    });
    Route::post('/bookings', [BookingController::class, 'store'])->name('bookings.store');

    Route::group(['middleware' => ['auth:sanctum', 'verified']], function () {
        // UI Template routes

        Route::prefix('dashboard')->name('dashboard.')->group(function () {
            Route::get('/', [DashboardController::class, 'index'])->name('index');

            Route::resource('/users', UserResourceController::class)->names('users');

            Route::put('/bookings/{booking}/approve', [BookingResourceController::class, 'approve'])->name('bookings.approve');
            Route::put('/bookings/{booking}/reject', [BookingResourceController::class, 'reject'])->name('bookings.reject');
            Route::resource('/bookings', BookingResourceController::class)->names('bookings');
            Route::resource('/news', NewsResourceController::class)->names('news');

            Route::resource('/events', EventResourceController::class)->names('events');

            Route::resource('/products', ProductResourceController::class)->names('products');

            Route::get('product-serials/qr-code/print', function() {
                return response(QRCode::url(request()->get('label'))->png(), 200, ['Content-Type' => 'image/png']);
            })->name('product-serial.qr');
            Route::resource('product-serials', ProductSerialResourceController::class)->names('product-serials');
            Route::get('product-serials/{serial}/print', [ProductSerialResourceController::class, 'print'])->name('product-serials.print');
        
            Route::resource('/serial-numbers', SerialNumberResourceController::class)->except(['create', 'store'])->names('serial-numbers');
        });
    });

});