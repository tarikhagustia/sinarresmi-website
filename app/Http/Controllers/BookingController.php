<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'date_in' => 'required|date',
            'date_out' => 'required|date|after_or_equal:date_in',
            'visitors' => 'required|numeric|min:1',
        ]);

        Booking::create($validatedData, [
            'status' => 'pending',
        ]);

        return redirect()->route('home')->with('success', 'Booking created successfully');
    }
}
