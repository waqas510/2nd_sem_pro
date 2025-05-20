<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthenicatedSessionController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            "email"=> ['required', 'string','email'],
            "password"=> ['required','string'],
        ]);

        if(Auth::attempt($request->only('email','password')))
        {
            $user = Auth::user();
            if($user->role=='admin')
            {
                return redirect()->route('adminpenal');
            }
            else{
                return redirect()->route('index');
            }
        }
        return back()->withErrors(['email' => 'Invalid credentials.']);
    }

    public function destroy()
    {
        Auth::logout();
        return redirect()->route('login');
    }
    
}
