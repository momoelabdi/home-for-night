<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Models\User;
class UserController extends Controller
{
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

        return redirect('/')->with('message', 'You logged out');
    }

    public function login()
    {
        // return view('users.login'); //
    }

    public function authenticate(Request $request)
    {
        $formFiled = $request->validate([
            'email' => ['email', 'required'],
            'password' => 'required',
        ]);
        if (auth()->attempt($formFiled)) {
            $request->session()->regenerate();
            return redirect('/')->with('message', 'You logged in');
        } else {
            return back()
                ->withErrors(['email' => 'Invalid email or password'])
                ->onlyInput('email');
        }
    }
}
