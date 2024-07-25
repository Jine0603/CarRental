<?php

namespace App\Http\Controllers\Online;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\RegisterRequest;

class RegisterController extends Controller
{
    public function index(){
        return view('online_website/register');
    }

    public function register(RegisterRequest $request)
    {
        $user = User::create($request->all());
        
        Auth::login($user);
        return redirect()->route('online_login.index');
    }
}
