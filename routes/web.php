<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Online\LoginController;
use App\Http\Controllers\Online\RegisterController;
use App\Http\Controllers\Online\OnlinewebController;
use App\Http\Controllers\Online\CarController;
use App\Http\Controllers\Online\QuickbookingController;
use App\Http\Controllers\Online\NewsController;
use App\Http\Controllers\Online\AboutusController;
use App\Http\Controllers\Online\ContactController;
use App\Http\Controllers\Admin\AdminLoginController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\VechicleController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('online_website/index');
});

Route::get('/home', [OnlinewebController::class, 'index'])->name('home.index');
//login
Route::get('/online_login', [LoginController::class, 'index'])->name('online_login.index');
Route::post('/online_login', [LoginController::class, 'login'])->name('online_login.login');
//register
Route::get('/online_register', [RegisterController::class, 'index'])->name('online_register.index');
Route::post('/online_register', [RegisterController::class, 'register'])->name('online_register.register');

Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/cars', [CarController::class, 'index'])->name('cars.index');
Route::get('/cars_info', [CarController::class, 'carinfo'])->name('cars_info.carinfo');
Route::get('/quickbooking', [QuickbookingController::class, 'index'])->name('quickbooking.index');
Route::get('/news', [NewsController::class, 'index'])->name('news.index');
Route::get('/aboutus', [AboutusController::class, 'index'])->name('aboutus.index');
Route::get('/contact', [ContactController::class, 'index'])->name('contact.index');


//ADMIN
Route::get('/admin_login', [AdminLoginController::class, 'index'])->name('admin_login.index');
Route::post('/admin_login', [AdminLoginController::class, 'login'])->name('admin_login.login');
Route::get('/logout', [AdminLoginController::class, 'logout'])->name('logout');
Route::middleware(['auth.user'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');
    // MAKE & MODEL
    Route::get('/add_brand', [VechicleController::class, 'brand'])->name('add_brand.brand');
    Route::post('/add_brand', [VechicleController::class, 'newbrand'])->name('add_brand.newbrand');
    Route::get('/add_model', [VechicleController::class, 'model'])->name('add_model.model');
    Route::post('/add_model', [VechicleController::class, 'newmodel'])->name('add_model.newmodel');
    Route::get('/brand_list', [VechicleController::class, 'makelist'])->name('brand_list.makelist');
    Route::get('/model_list', [VechicleController::class, 'modellist'])->name('model_list.modellist');

    // CARS
    Route::get('/add_vehicle', [VechicleController::class, 'cars'])->name('add_vehicle.cars');
    Route::post('/add_vehicle', [VechicleController::class, 'new_car'])->name('add_vehicle.new_car');

    // Route::get('/add_vehicle', [DashboardController::class, 'vehicle'])->name('add_vehicle.vehicle');
    Route::get('/vehicle_list', [VechicleController::class, 'details_car'])->name('vehicle_list.details_car');
    Route::get('/bookings', [DashboardController::class, 'booking'])->name('bookings.booking');
});
