<?php

use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Dashboard\BookingResourceController;
use App\Http\Controllers\Dashboard\EventResourceController;
use App\Http\Controllers\Dashboard\ProductResourceController;
use App\Http\Controllers\Dashboard\SerialNumberResourceController;
use App\Http\Controllers\Dashboard\UserResourceController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\EventController;
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

Route::get('/', function () {
    return view('welcome');
})->name('home');


Route::get('/about-us', function () {
    return view('about');
});

Route::get('/events', [EventController::class, 'index'])->name('events.index');

Route::get('/contact-us', function () {
    return view('contact-us');
});

Route::get('/products', [ProductController::class, 'index'])->name('products.index');

Route::get('/products/original-check/{code}', [ProductController::class, 'originalCheck']);

Route::get('/bookings', function() {
    return redirect()->route('home');
});
Route::post('/bookings', [BookingController::class, 'store'])->name('bookings.store');

Route::group(['middleware' => ['auth:sanctum', 'verified']], function () {
    // UI Template routes
    // Route::view('forms', 'dashboard.__templates__.forms')->name('forms');
    // Route::view('cards', 'dashboard.__templates__.cards')->name('cards');
    // Route::view('charts', 'dashboard.__templates__.charts')->name('charts');
    // Route::view('buttons', 'dashboard.__templates__.buttons')->name('buttons');
    // Route::view('modals', 'dashboard.__templates__.modals')->name('modals');
    // Route::view('tables', 'dashboard.__templates__.tables')->name('tables');
    // Route::view('calendar', 'dashboard.__templates__.calendar')->name('calendar');

    Route::prefix('dashboard')->name('dashboard.')->group(function () {
        Route::get('/', [DashboardController::class, 'index'])->name('index');

        Route::resource('/users', UserResourceController::class)->names('users');

        Route::put('/bookings/{booking}/approve', [BookingResourceController::class, 'approve'])->name('bookings.approve');
        Route::put('/bookings/{booking}/reject', [BookingResourceController::class, 'reject'])->name('bookings.reject');
        Route::resource('/bookings', BookingResourceController::class)->names('bookings');

        Route::resource('/events', EventResourceController::class)->names('events');

        Route::get('/products/{product}/generate-sn', [ProductResourceController::class, 'generateSn'])->name('products.generate-sn');
        Route::resource('/products', ProductResourceController::class)->names('products');

        Route::resource('/serial-numbers', SerialNumberResourceController::class)->names('serial-numbers');
    });
});
