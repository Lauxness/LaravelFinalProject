<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlanReqestModel extends Model
{
    /** @use HasFactory<\Database\Factories\PlanReqestModelFactory> */
    use HasFactory;
    protected $connection = 'mysql';
    protected $fillable = [
        'tenant_id',
        'plan'

    ];
    public function tenant()
    {
        return $this->belongsTo(Tenant::class);
    }
}
