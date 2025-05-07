<?php

namespace App\Jobs;

use App\Mail\Mailer;
use App\Models\Tenant;
use App\Models\User;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;


class SeedTenantAdminJob implements ShouldQueue
{
    use Queueable;

    protected Tenant $tenant;
    /**
     * Create a new job instance.
     */
    public function __construct(Tenant $tenant)
    {
        $this->tenant = $tenant;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        $this->tenant->run(function () {

            $password = Str::random(10);
            $user =  User::create([
                'name' => $this->tenant->name,
                'email' => $this->tenant->email,
                'address' => $this->tenant->address,
                'role' => 'admin',

                'password' => Hash::make($password)
            ]);
            Mail::to($this->tenant->email)->send(new Mailer($this->tenant, $password));
        });
    }
}
