<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    { 
        return view('welcome');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'date_in' => 'required|date',
            'date_out' => 'required|date',
            'visitor' => 'required|numeric'
        ]);

        Booking::create($request->except('_token'));
        return redirect()->back()->withSuccess(__('We have received your booking request. our admin will check and notify you as soon as possible. Thank you'));
    }
}
