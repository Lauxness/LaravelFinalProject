<?php

declare(strict_types=1);

use App\Http\Controllers\PlanReqestModelController;
use App\Http\Controllers\SocialateController;
use App\Http\Controllers\TenantApp\BookingController;
use App\Http\Controllers\TenantApp\CarsController;
use App\Http\Controllers\TenantApp\DashboardController;
use App\Http\Controllers\TenantApp\HomeController;
use App\Http\Controllers\TenantApp\InvoiceController;
use App\Http\Controllers\TenantApp\SupportController;
use App\Http\Controllers\TenantApp\TenantProfileController;
use App\Http\Controllers\TenantApp\TenantUserController;
use App\Http\Controllers\TenantApp\TenantsLayoutController;
use App\Http\Controllers\TenantApp\TenantVersionController;
use App\Http\Middleware\AdminMiddelware;
use App\Http\Middleware\SubDomainPauseChecker;
use Illuminate\Support\Facades\Route;
use Stancl\Tenancy\Middleware\InitializeTenancyByDomain;
use Stancl\Tenancy\Middleware\PreventAccessFromCentralDomains;


Route::middleware([
    'web',
    InitializeTenancyByDomain::class,
    PreventAccessFromCentralDomains::class,
    SubDomainPauseChecker::class
])->group(function () {
    Route::get("/", [HomeController::class, 'getCars'])->name('index');
    Route::get("/contact/support", [SupportController::class, 'index'])->name("contact.support");
    Route::post("/contact/support", [SupportController::class, 'submit'])->name("contact.support");

    Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth', AdminMiddelware::class])->name('dashboard');
    Route::get('/prices', function () {
        return view('tenants.pages.subscriptions');
    })->middleware(['auth', AdminMiddelware::class])->name('subscriptions');

    Route::post('/tenant/update-version', [TenantVersionController::class, 'update'])->name('tenant.update.version');
    Route::controller(SocialateController::class)->group(function () {
        Route::get('/auth/google', [SocialateController::class, 'googleLogin'])->name('google.login');
        Route::get('/auth/google/callback', [SocialateController::class, 'googleAuth'])->name('google.callback');
    });
    Route::patch('tenants_layout', [TenantsLayoutController::class, 'update'])->middleware(['auth', AdminMiddelware::class])->name('update_layout');
    Route::resource('cars', CarsController::class)->middleware(['auth']);
    Route::resource('booking', BookingController::class)->middleware(['auth']);
    Route::patch('booking/{booking}/update_status', [BookingController::class, 'approveBooking'])
        ->middleware(['auth', AdminMiddelware::class])
        ->name('booking.approve');

    Route::get('/booking/create/{car}', [BookingController::class, 'create'])->name('booking.create');
    Route::get('/users', [TenantUserController::class, 'index'])
        ->middleware(['auth', AdminMiddelware::class])
        ->name('users');
    Route::get('/test', function () {
        return "Updated aghdsfjkahsfjkahsfkashfjkashdf";
    });

    Route::resource('plan-requests', PlanReqestModelController::class)->only(['store']);

    Route::get('/generate_report', [InvoiceController::class, 'generate'])->middleware(['auth', AdminMiddelware::class])->name('generate');
    Route::middleware('auth')->group(function () {
        Route::get('/profile', [TenantProfileController::class, 'edit'])->name('profile.edit');
        Route::patch('/profile', [TenantProfileController::class, 'update'])->name('profile.update');
        Route::delete('/profile', [TenantProfileController::class, 'destroy'])->name('profile.destroy');
    });
    require __DIR__ . '/tenant_app_auth.php';
});
