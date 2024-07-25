<?php

namespace App\Http\Controllers\Online;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class CarController extends Controller
{
    public function index(){
        return view('online_website/car');
    }

    public function carinfo(){
        return view('online_website/car_info');
    }
}
