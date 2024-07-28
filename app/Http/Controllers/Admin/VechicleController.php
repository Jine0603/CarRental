<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Brand;
use App\Models\CarModel;

class VechicleController extends Controller
{
    public function brand()
    {
        return view('admin.brand');
    }

    public function model()
    {
        return view('admin.model');
    }
    public function newbrand(Request $request)
    {

        $brand_name = $request->input('brand');
        
        $messages = [];

        Brand::create(['make' => $brand_name]);

        if (empty($messages)) {
            return redirect()->route('add_brand.brand')->with('success', 'Brand and Model created successfully!');
        } else {
            return redirect()->back()->with('error', implode(' ', $messages));
        }
    }

    public function newmodel(Request $request)
    {
        $model_name = $request->input('model');

        $messages = [];

        CarModel::create(['models' => $model_name]);

        if (empty($messages)) {
            return redirect()->route('add_brand.brand')->with('success', 'Brand and Model created successfully!');
        } else {
            return redirect()->back()->with('error', implode(' ', $messages));
        }

    }

    public function makelist(Request $request)
    {
        $make1 = Brand::all();

        return view('admin.brandlist')->with([
            'make1' => $make1
        ]);
    }
    public function modellist(Request $request)
    {
        $model1 = CarModel::all();

        return view('admin.modelist')->with([
            'model1' => $model1
        ]);
    }

    public function cars()
    {
        $fetch_make = Brand::all();
        $fetch_model = CarModel::all();

        return view('admin.newcar', compact('fetch_make', 'fetch_model'));

    }
}
