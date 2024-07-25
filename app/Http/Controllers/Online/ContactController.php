<?php

namespace App\Http\Controllers\Online;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('online_website/contact');
    }
}
