<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Brand;
use App\Models\CarModel;

class VechicleController extends Controller
{
    public function newbrand(Request $request)
    {

        $brand_name = $request->input('brand');
        $model_name = $request->input('model');

        $messages = [];

        if ($brand_name) {
            $brand_insert = Brand::create(['make' => $brand_name]);
            if (!$brand_insert) {
                $messages[] = 'Failed to create brand. Please try again.';
            }
        }

        if ($model_name) {
            $model_insert = CarModel::create(['models' => $model_name]);
            if (!$model_insert) {
                $messages[] = 'Failed to create model. Please try again.';
            }
        }

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
}
