<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        return view('admin.dashboard');
    }

    public function brand()
    {
        return view('admin.brand');
    }

    public function brandlist()
    {
        return view('admin.brandlist');
    }

    public function vehicle()
    {
        return view('admin.newcar');
    }

    public function vechiclelist()
    {
        return view('admin.vechiclelist');
    }

    public function booking()
    {
        return view('admin.booking');
    }
}
