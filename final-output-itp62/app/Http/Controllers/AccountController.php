<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Account;
use Illuminate\Support\Facades\Session;


class AccountController extends Controller
{
    public function login(Request $request)
    {
        $user = Account::where('email', $request->email)->first();

        if ($user && password_verify($request->password, $user->password)) {
            Session::put('user', $user);
            return redirect('/home');
        }

        return back()->with('error', 'Invalid credentials');
    }

    public function register(Request $request)
    {
        Account::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        return redirect('/')->with('success', 'Account created!');
    }

    public function logout()
    {
        Session::forget('user');
        return redirect('/');
    }
}
