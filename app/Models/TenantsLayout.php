<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TenantsLayout extends Model
{
    /** @use HasFactory<\Database\Factories\TenantsLayoutFactory> */
    use HasFactory;
    protected $fillable = [
        'isRTL',
        'preset',
        'box_container',
        'font',
        'company_logo'
    ];
}
