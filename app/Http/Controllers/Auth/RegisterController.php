<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email:dns|max:255|unique:users',
            'password' => 'required|string|min:5|max:255',
        ]);

        $validated['password'] = Hash::make($validated['password']);

        User::create($validated);
        
        return redirect()->route('login')->with('alert', [
            'type' => 'success',
            'message' => 'You have successfully registered!',
        ]);
    }
}
