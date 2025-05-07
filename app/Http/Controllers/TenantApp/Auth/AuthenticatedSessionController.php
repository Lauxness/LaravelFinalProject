<?php

namespace App\Http\Controllers\TenantApp\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\TenantLoginRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AuthenticatedSessionController extends Controller
{
    public function create(): View|RedirectResponse
    {
        $tenant = tenant();
        if (version_compare($tenant->version, 'v2.0.0', '>=')) {
            return view('tenants.auth.tenant-login-v2');
        } else {
            return view('tenants.auth.tenant-login');
        }
    }
    /**
     * Handle an incoming authentication request.
     */
    public function store(TenantLoginRequest $request): RedirectResponse
    {
        $request->authenticate();

        $user = Auth::user();

        $request->session()->regenerate();
        if ($user->role === 'admin') {
            return redirect()->route('dashboard');
        } else {
            return redirect()->route('profile.edit');
        }
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
