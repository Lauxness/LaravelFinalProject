<?php

namespace App\Jobs;

use App\Models\Tenant;
use App\Models\TenantsLayout;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;

class SeedStylesJob implements ShouldQueue
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

            $style = TenantsLayout::create([
                'isRTL' => false,
                'preset' => "preset-1",
                'box_container' => false,
                'font' => "Arial",
            ]);
        });
    }
}
