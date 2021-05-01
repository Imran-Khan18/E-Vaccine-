<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login()
    {
        return view('backend.login');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }

    public function register()
    {
        return view('backend.register');
    }

    public function make_register(Request $request)
    {
        $validator = $request->validate([
			'email' => 'required|email|unique:users',
			'password' => 'required'
		]);
		
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password)
        ]);

        return redirect()->back();
    }

    public function make_login(Request $request)
    {
    	$validator = $request->validate([
			'email' => 'required|email',
			'password' => 'required'
		]);
		
        $credentials = $request->only(['email', 'password']);

        if(!Auth::attempt($credentials)) {
            return back()->withErrors([
                'email' => 'The provided credentials do not match our records.',
            ]);
        }
        
        $request->session()->regenerate();
        return redirect()->route('dashboard');

    }
}
