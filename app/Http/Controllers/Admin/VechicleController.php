<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Brand;
use Illuminate\Support\Str;
use App\Models\CarModel;
use App\Models\NewCarModel;

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

    public function new_car(Request $request){

        $car['car_name']           = $request->input('car_name');
        $car['brand']              = $request->input('brand_car');
        // dd($car['brand']);
        $car['model']              = $request->input('model');
        $car['model_year']         = $request->input('model_year');
        $car['fuel_type']          = $request->input('fuel');
        $car['seating_capacity']   = $request->input('seating');
        $car['price']              = $request->input('car_price');
        $car['discount']           = $request->input('discount');
        $car['car_details']        = $request->input('details');
        $car['airconditioner']     = $request->input('airconditioner');
        $car['powerdoorlocks']     = $request->input('powerdoorlocks');
        $car['antilockbrakingsys'] = $request->input('antilockbrakingsys');
        $car['brakeassist']        = $request->input('brakeassist');
        $car['powersteering']      = $request->input('powersteering');
        $car['driverairbag']       = $request->input('driverairbag');
        $car['passengerairbag']    = $request->input('passengerairbag');
        $car['powerwindow']        = $request->input('powerwindow');
        $car['cdplayer']           = $request->input('cdplayer');
        $car['centrallocking']     = $request->input('centrallocking');
        $car['crashcensor']        = $request->input('crashcensor');
        $car['leatherseats']       = $request->input('leatherseats');

        $add_car = NewCarModel::create($car);
        $images = [];

        if ($request->hasFile('img_file')) {
            foreach ($request->file('img_file') as $key => $file) {
                $randomName = uniqid() . '_' . Str::random(10);
                $extension = $file->getClientOriginalExtension();
                $imageName = $randomName . '.' . $extension;

                $file->move(public_path('images'), $imageName);

                $images[] = [
                    'car_id' => $add_car->id,
                    'img' => 'images/' . $imageName
                ];
            }
        }

    $g = $add_car->images()->createMany($images);

    $fetch_make = Brand::all();
    $fetch_model = CarModel::all();

    return view('admin.newcar', compact('fetch_make', 'fetch_model'));

    }

    public function details_car()
    {
        $cars = NewCarModel::leftJoin('img_tbl', 'img_tbl.id', '=', 'car_tbl.car_id')
        ->select('car_tbl.*', 'img_tbl.img')
        ->get();
// dd($cars);
        return view('admin.vechiclelist', compact('cars'));
    }
}
