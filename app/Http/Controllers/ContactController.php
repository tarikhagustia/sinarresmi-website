<?php

namespace App\Http\Controllers;

use App\Mail\ContactUsMail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'question' => 'required'
        ]);

        User::all()->each(function($user) use($request) {
            Mail::to($user)->send(new ContactUsMail($request->all()));
        });

        return redirect()->back()->with(['success' => 'We have received tour inquiry, we will response your inquiry as soon as possible']);
    }
}
