<?php

namespace App\Http\Controllers;

use App\Http\Requests\Booking\StoreBookingRequest;
use App\Mail\AdminEmail;
use App\Mail\VisitorMail;
use App\Models\Booking;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

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

        $booking = Booking::create($validatedData, [
            'status' => 'pending',
        ]);
        Mail::to($validatedData['email'])->send(new VisitorMail($booking));
        User::all()->each(function ($admin) use ($booking) {
            Mail::to($admin)->send(new AdminEmail($booking));
        });
        return redirect()->route('home')->with('success', 'Booking created successfully');
    }
}
