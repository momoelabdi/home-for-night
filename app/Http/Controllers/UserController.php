<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Models\User;
use Socialite;
class UserController extends Controller
{
    public function create()
    {   
        // replaced register with model check in web.php && layout.blade.php
        // return view('users.register');
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

    public function redirect()
    {
        return Socialite::driver('google')->redirect('/');
    }

    public function callBackGoogle()
    {

        try {
            $google_user = Socialite::driver('google')->user();
            $user = User::where('google_id', $google_user->getId())->first();
            if ($user) {
                auth()->login($user);
                return redirect('/')->with('message', 'You logged in');
            } else {
                $user = User::create([
                    'name' => $google_user->getName(),
                    'email' => $google_user->getEmail(),
                    'google_id' => $google_user->getId(),
                    'password' => bcrypt('123456789')
                ]);
                auth()->login($user);
                return redirect('/')->with('message', 'You logged in');
            }
        } catch (\Throwable $th) {
            dd("somthing went wrong !" .$th->getMessage());
        }
    }
}
