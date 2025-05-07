<?php

namespace App\Http\Controllers\TenantApp;

use App\Http\Controllers\Controller;
use App\Models\Cars;

class HomeController extends Controller
{
    public function getCars()
    {
        $cars = Cars::latest()->take(4)->get();
        return view('tenants.pages.index', compact('cars'));
    }
    public function getDashboard() {}
}
