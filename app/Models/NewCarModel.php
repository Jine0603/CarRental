<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewCarModel extends Model
{
    protected $table = 'car_tbl';

    protected $fillable = [
        'car_id',
        'car_name',
        'brand',
        'model',
        'model_year',
        'fuel_type',
        'seating_capacity',
        'price',
        'discount',
        'car_details',
        'airconditioner',
        'powerdoorlocks',
        'antilockbrakingsys',
        'brakeassist',
        'powersteering',
        'driverairbag',
        'passengerairbag',
        'powerwindow',
        'cdplayer',
        'centrallocking',
        'crashcensor',
        'leatherseats',
        'img1',
        'img2',
        'img3',
        'img4',
    ];

    public function images()
    {
        return $this->hasMany(ImgModel::class, 'car_id');
    }
}
