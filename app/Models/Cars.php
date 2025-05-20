<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cars extends Model
{
    /** @use HasFactory<\Database\Factories\CarsFactory> */
    use HasFactory;
    protected $fillable = [
        'car_name',
        'car_description',
        'car_category',
        'rates',
        'seats',
        'status',
        'car_image',
    ];
}
