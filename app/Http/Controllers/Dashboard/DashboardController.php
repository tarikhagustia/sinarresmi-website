<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use App\Models\Event;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard.index', [
            'productsCount' => Product::count(),
            'eventsCount' => Event::count(),
            'bookingsCount' => Booking::count(),
            'usersCount' => User::count(),
        ]);
    }
}
