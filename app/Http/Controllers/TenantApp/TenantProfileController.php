<?php

namespace App\Http\Controllers\TenantApp;

use App\Http\Controllers\Controller;
use App\Http\Requests\TenantProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class TenantProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        if ($request->user()->role == 'admin') {
            return view('tenants.pages.user-account', [
                'user' => $request->user(),
            ]);
        } else {
            return view('tenants.pages.users.user-account', [
                'user' => $request->user(),
            ]);
        }
    }

    /**
     * Update the user's profile information.
     */
    public function update(TenantProfileUpdateRequest $request): RedirectResponse
    {
        $validated = $request->validated();

        if ($request->hasFile('profile_picture')) {
            $path = $request->file('profile_picture')->store('profile_picture', 'public');
            $validated['profile_picture'] = $path;
        }
        $request->user()->fill($validated)->save();
        return redirect()->back()->with('success', 'Profile updated successfully!');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
}
