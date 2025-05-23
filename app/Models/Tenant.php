<?php

namespace App\Models;

use Illuminate\Support\Arr;
use Stancl\Tenancy\Database\Models\Tenant as BaseTenant;
use Stancl\Tenancy\Contracts\TenantWithDatabase;
use Stancl\Tenancy\Database\Concerns\HasDatabase;
use Stancl\Tenancy\Database\Concerns\HasDomains;

class Tenant extends BaseTenant implements TenantWithDatabase
{
    use HasDatabase, HasDomains;

    protected $fillable = [
        'id',
        'name',
        'email',
        'address',
        'domain',
        'companyName',
        'data',
        'isPaused',
        'plan',
        'version'
    ];
    protected $casts = [
        'data' => 'array',
    ];
}
