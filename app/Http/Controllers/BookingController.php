<?php

namespace App\Http\Controllers;

use App\Http\Requests\Booking\StoreBookingRequest;
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
    public function store(StoreBookingRequest $request)
    {
        $validatedData = $request->validated();

        Booking::create($validatedData, [
            'status' => 'pending',
        ]);

        return redirect()->route('home')->with('success', 'Booking created successfully');
    }
}
