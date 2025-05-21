<?php

namespace App\Http\Controllers\TenantApp;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class TenantUserController extends Controller
{
    public function index()
    {
        $users = User::latest()->get();
        return view('tenants.pages.user-list', compact('users'));
    }
    public function promote(Request $request, User $user)
    {

        $user->role = 'admin';
        $user->save();
        return redirect()->back()->with('success', 'User promoted to admin');
    }
}
