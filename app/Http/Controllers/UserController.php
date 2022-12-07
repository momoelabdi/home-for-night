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
}
