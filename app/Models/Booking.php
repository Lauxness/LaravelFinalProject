<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    /** @use HasFactory<\Database\Factories\BookingFactory> */
    use HasFactory;
    protected $fillable = [
        'car_id',
        'user_id',
        'email',
        'status',
        'date',
        'time',

    ];
    public function car()
    {
        return $this->belongsTo(Cars::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
