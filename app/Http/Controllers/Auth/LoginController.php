<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }


    public function authenticate(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        if (!Auth::attempt($validated)) {
            return back()
                ->with('alert', [
                    'type' => 'danger',
                    'message' => 'Something is wrong, please try again.'
                ])
                ->withInput();
        }

        $request->session()->regenerate();

        return redirect()->route('admin.index')->with('alert', [
            'type' => 'success',
            'message' => 'You have successfully logged in.',
        ]);
    }

    public function destroy(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('home');
    }
}
