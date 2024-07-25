<?php

namespace App\Http\Controllers\Online;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Auth\Events\Login;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\RegisterRequest;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    public function index()
    {
        return view('online_website/login');
    }

    public function login(Request $request)
{
    // $request->validate([
    //     'username' => 'required|string',
    //     'password' => 'required|string',
    // ]);

    // $credentials = $request->only('username', 'password');

    // if (Auth::attempt($credentials)) {
    //     session(['username' => Auth::user()->username]);

    //     if (Auth::user()->user_type === 'admin') {
    //         return redirect()->route('dashboard.index')->with('message', 'Welcome to the admin dashboard!');
    //     } else {
    //         return redirect()->route('home.index')->with('message', 'Login successful!');
    //     }
    // }

    $credentials = $request->validate([
        'username' => 'required|string',
        'password' => 'required|string',
    ]);

    if (Auth::attempt($credentials)) {
        $request->session()->regenerate();

        $user = Auth::user();

        if ($user->user_type === 'user') {
            return redirect()->intended(route('home.index'));
        } else {
            Auth::logout();
            return back()->withErrors([
                'username' => 'Only users with user\_type "user" are allowed to log in.',
            ]);
        }
    } else {
        return back()->withErrors([
            'username' => 'The provided Username do not match our records.',
            'password' => 'The provided Password do not match our records.',
        ]);
    }

    // if (Auth::attempt($credentials)) {
    //     $request->session()->regenerate();

    //     // if (Auth::check()) {
    //     //     dd(Auth::user());
    //     // }

    //     $user = Auth::user();

    //     if ($user->user_type === 'admin') {
    //         return redirect()->intended(route('dashboard.index'));
    //     } else {
    //         return redirect()->intended(route('home.index'));
    //     }
    // }

    // return back()->withErrors([
    //     'username' => 'The provided credentials do not match our records.',
    // ]);
}
    
    

    public function register(RegisterRequest $request)
    {
        $user = User::create($request->all());
        
        Auth::login($user);
        return redirect()->route('home.index');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->flush();
        $request->session()->regenerate();
        return redirect()->route('online_login.index');
    }
}
