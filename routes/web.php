<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\BookingResourceController;
use App\Http\Controllers\Admin\EventResourceController;
use App\Http\Controllers\Admin\UserResourceController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\ProductController;
use App\Models\Event;
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

Route::get('/events', function () {
    return view('events', [
        'events' => Event::paginate(12)
    ]);
});

Route::get('/contact-us', function () {
    return view('contact-us');
});

Route::get('/products', function () {
    return view('products');
});

Route::get('/products/original-check/{code}', [ProductController::class, 'originalCheck']);

Route::get('/bookings', function() {
    return redirect()->route('home');
});
Route::post('/bookings', [BookingController::class, 'store'])->name('bookings.store');

Route::middleware(['guest'])->group(function () {
    Route::get('/login', [LoginController::class, 'index'])->name('login');
    Route::post('/login', [LoginController::class, 'authenticate']);

    Route::get('/register', [RegisterController::class, 'index'])->name('register');
    Route::post('/register', [RegisterController::class, 'store']);
});

Route::middleware(['auth'])->group(function () {
    Route::post('/logout', [LoginController::class, 'destroy'])->name('logout');

    Route::prefix('admin')->name('admin.')->group(function () {
        Route::get('/', [AdminController::class, 'index'])->name('index');

        Route::resource('/users', UserResourceController::class)->names('users');

        Route::put('/bookings/{booking}/approve', [BookingResourceController::class, 'approve'])->name('bookings.approve');
        Route::put('/bookings/{booking}/reject', [BookingResourceController::class, 'reject'])->name('bookings.reject');
        Route::resource('/bookings', BookingResourceController::class)->names('bookings');

        Route::resource('/events', EventResourceController::class)->names('events');
    });
});
