<?php

namespace App\Http\Controllers\TenantApp;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\File;

class TenantVersionController extends Controller
{
    public function update(Request $request)
    {

        $xmlPath = base_path('run-update-file.xml');

        if (!File::exists($xmlPath)) {
            return redirect()->back()->with('error', 'run-update-file.xml not found');
        }

        $xml = simplexml_load_file($xmlPath);
        $output = [];

        foreach ($xml->step as $step) {
            $command = (string) $step['command'];
            $fullCommand = "cd " . base_path() . " && $command 2>&1";
            $result = shell_exec($fullCommand);
            $output[] = [
                'command' => $command,
                'output' => trim($result),
            ];
        }
        $summary = collect($output)->map(function ($entry) {
            return $entry['command'] . ': ' . strtok($entry['output'], "\n");
        })->implode("\n");
        $latestVersion = $this->getLatestGitHubReleaseVersion();
        $this->updateEnvValue('APP_VERSION', $latestVersion);
        return redirect()->back()->with('success', 'Updated to latest');
    }
    private function getLatestGitHubReleaseVersion()
    {
        $response = Http::get('https://api.github.com/repos/Lauxness/LaravelFinalProject/releases/latest');
        return $response->json()['tag_name'];
    }
    protected function updateEnvValue($key, $value)
    {
        $envPath = base_path('.env');

        if (!file_exists($envPath)) {
            return false;
        }

        $envContent = file_get_contents($envPath);
        if (preg_match("/^{$key}=.*/m", $envContent)) {
            $envContent = preg_replace("/^{$key}=.*/m", "{$key}={$value}", $envContent);
        } else {
            $envContent .= "\n{$key}={$value}\n";
        }

        file_put_contents($envPath, $envContent);

        return true;
    }
}
