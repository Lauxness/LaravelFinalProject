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

        $xmlPath = base_path('update-script.xml');

        if (!File::exists($xmlPath)) {
            return redirect()->back()->with('error', 'update-script.xml not found');
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

        return redirect()->back()->with('success', "Update completed.\n\n" . $summary);
    }
    private function getLatestGitHubReleaseVersion()
    {
        $response = Http::get('https://api.github.com/repos/Lauxness/LaravelFinalProject/releases/latest');
        return $response->json()['tag_name'];
    }
}
