<?php

namespace App\Http\Controllers;

use App\Http\Requests\SignupRequest;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class SignupController extends Controller
{
    // Show the sign-up form
    public function signupForm()
    {
        return view('signup'); // Ensure this matches your Blade template name
    }

    // Handle form submission
    public function signup(SignupRequest $request)
    {
        // Create a new user
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);


        // Log in the user (optional)
        auth()->login($user);

        // Redirect to a specific page
        return redirect()->route('userdashboard')->with('success', 'Account created successfully!');
    }
}

