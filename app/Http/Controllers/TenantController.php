<?php

namespace App\Http\Controllers;

use App\Http\Requests\TenantStoreRequest;
use App\Http\Requests\TenantUpdateRequest;
use App\Models\Tenant;


class TenantController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tenants = Tenant::all();

        return view('tenants-table', compact('tenants'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('apply-tenant');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TenantStoreRequest $request)
    {
        $tenant = Tenant::create($request->validated());
        return redirect()->back()->with('success', 'Tenant Application has been Submitted!.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $tenant1 = Tenant::findOrFail($id);
        return view('edit-tenant', compact('tenant1'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TenantUpdateRequest $request, Tenant $tenant)
    {
        $validated = $request->validated();

        $tenant->update($validated);
        return redirect()->back()->with('success', 'Tenant updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
    public function accept(string $id)
    {
        $tenant = Tenant::findOrFail($id);
        $subdomain = $tenant->domain;
        $fullDomain = "{$subdomain}.localhost";

        $existingDomain = $tenant->domains()->where('domain', $fullDomain)->exists();

        if ($existingDomain) {
            return back()->with('error', "The domain {$fullDomain} already exists.");
        }
        $tenant->domains()->create(['domain' => $fullDomain]);
        return back()->with('success', "Tenant accepted and domain created: {$fullDomain}");
    }
}
