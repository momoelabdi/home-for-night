<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Models\User;
class UserController extends Controller
{
    //

    public function create()
    {
        return view('users.register');
    }

    public function store(Request $request)
    {
        $formFiled = $request->validate([
            'name' => 'required|min:3',
            'email' => ['email', 'required', Rule::unique('users', 'email')],
            'password' => 'required|confirmed|min:6',
        ]);
        # Hash password
        $formFiled['password'] = bcrypt($formFiled['password']);

        // create user
        $user = User::create($formFiled);

        // Login
        auth()->login($user);
        return redirect('/')->with('message', 'You logged in');
    }

    public function logout(Request $request)
    {
        auth()->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
    }

    
    public function login()
    {
        return view('users.login');
    }

    public function authenticate(Request $request) 
    {
        $formFiled = $request->validare([
            'email' => ['email', 'required'],
            'password' => 'required'
        ]);
        if(auth()->attempt($formFiled)) 
        {
            $request->session()->generate();
            return redirect('/')->with('message', 'You logged in');
        }else {
            return back()->withErrors(['email' => 'Invalid credentials']);
        }
    }
}
