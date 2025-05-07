<?php

namespace App\Http\Controllers\TenantApp;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Http;

class TenantVersionController extends Controller
{
    public function update(Request $request)
    {

        $tenant = tenant();

        $latestVersion = $this->getLatestGitHubReleaseVersion();
        $tenant->update(['version' => $latestVersion]);
        Artisan::call('tenants:migrate', [
            '--tenants' => [$tenant->id],
            '--force' => true,
        ]);
        return redirect()->back()->with('success', 'Updated to '  . $latestVersion);
    }
    private function getLatestGitHubReleaseVersion()
    {
        $response = Http::get('https://api.github.com/repos/Lauxness/LaravelFinalProject/releases/latest');
        return $response->json()['tag_name'];
    }
}
