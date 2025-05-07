<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TenantController;
use App\Mail\Mailer;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

// Loop over each central domain (like 'localhost')
foreach (config('tenancy.central_domains') as $domain) {
    Route::domain($domain)->middleware('web')->group(function () {

        Route::get('/', function () {
            return view('landingPage');
        });
        Route::get('/dashboard', function () {
            return view('dashboard');
        })->middleware(['auth', 'verified'])->name('dashboard');
        // Apply middleware to all tenant resource routes
        Route::resource('tenants', TenantController::class)->middleware(['auth', 'verified']);
        Route::get('tenants/create', [TenantController::class, 'create'])->name('tenants.create')->withoutMiddleware(['auth', 'verified']);
        Route::post('tenants', [TenantController::class, 'store'])->name('tenants.store')->withoutMiddleware(['auth', 'verified']);

        Route::post('/tenants/{id}/accept', [TenantController::class, 'accept'])->name('tenants.accept');
        Route::middleware('auth')->group(function () {
            Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
            Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
            Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
        });
        require __DIR__ . '/auth.php';
    });
}
