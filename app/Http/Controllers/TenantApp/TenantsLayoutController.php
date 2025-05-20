<?php

namespace App\Http\Controllers\TenantApp;

use App\Http\Controllers\Controller;
use App\Models\TenantsLayout;
use App\Http\Requests\StoreTenantsLayoutRequest;
use App\Http\Requests\UpdateTenantsLayoutRequest;

class TenantsLayoutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTenantsLayoutRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(TenantsLayout $tenantsLayout)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TenantsLayout $tenantsLayout)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTenantsLayoutRequest $request, TenantsLayout $tenantsLayout)
    {
        $tenant = tenant();
        if ($tenant->plan == "free") {
            return redirect()->back()->with('error', 'Sorry, you cant save customization in free plan!');
        }
        $validated = $request->validated();

        if ($request->hasFile('company_logo')) {
            $logoPath = $request->file('company_logo')->store('company_logo', 'public');
            $validated['company_logo'] = $logoPath;
        }
        $tenantsLayout = TenantsLayout::first();
        if ($tenantsLayout) {
            $tenantsLayout->update($validated);
            return redirect()->back()->with('success', 'Layout updated successfully.');
        } else {
            return redirect()->back()->with('error', 'No layout found to update.');
        }
    }



    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TenantsLayout $tenantsLayout)
    {
        //
    }
}
