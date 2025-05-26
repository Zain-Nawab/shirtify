<?php

namespace App\Http\Controllers;

use App\Mail\VerifyEmail;
use App\Models\email_verify;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class AuthController extends Controller
{


    public function loginForm()
    {

        return view("auth.loginform");
    }


    public function login(Request $request)
    {

        // validate data
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        // login user and redirect to dashboard
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->route('admin.main');
        }

        // error redirect
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }

    public function signupForm()
    {

        return view("auth.signupform");
    }


    public function register(Request $request)
    {

        // validate data
        $request->validate([
            'name' => ['required'],
            'email' => ['required', 'email', 'unique:users,email'],
            'password' => ['required', 'confirmed', 'min:6'],
            'email_veridied' => 0,
        ]);


        // create a new user
       $user = User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password'))
        ]);

        $token = email_verify::generateToekn($user->id);

        Mail::to($user->email)->send(new VerifyEmail($user, $token->token));

        // Todo 

        return redirect()->route('loginForm');

        dd($request->all());
    }
}