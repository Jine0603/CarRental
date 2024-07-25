<?php

namespace App\Http\Controllers\Online;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class QuickbookingController extends Controller
{
    public function index()
    {
        return view('online_website/quick_booking');
    }
}
