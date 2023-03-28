<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SignUpController extends Controller
{
    function showSignUpForm()
    {
        return view('signup');
    }

    function signup(Request $request)
    {
        $validatedUser = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);
        $user = User::create([
            'name' => $validatedUser['name'],
            'email' => $validatedUser['email'],
            'password' => bcrypt($validatedUser['password']),
        ]);
        if ($user) {
            Auth::login($user);
            return redirect('/');
        } else {
            return back()->withErrors(['message' => 'Failed to create user. Please try again.']);
        }
    }
}
