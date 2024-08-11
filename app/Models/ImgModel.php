<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImgModel extends Model
{
    protected $table = 'img_tbl';

    protected $fillable = [
        'car_id',
        'img',
    ];

    public function images()
    {
        return $this->belongsTo(NewCarModel::class, 'car_id', 'car_id');
    }
}
