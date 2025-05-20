<?php

namespace App\Http\Controllers;

use App\Models\PlanReqestModel;
use App\Http\Requests\StorePlanReqestModelRequest;
use App\Http\Requests\UpdatePlanReqestModelRequest;
use App\Models\Tenant;

class PlanReqestModelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $planRequests = PlanReqestModel::all();

        return view('plan_request', compact('planRequests'));
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
    public function store(StorePlanReqestModelRequest $request)
    {
        $validated = $request->validated();
        $tenant = tenant();

        // Check if tenant is already on the requested plan
        if ($tenant->plan === $validated['plan']) {
            return redirect()->back()->with('error', 'You are already on this plan.');
        }

        // Either update the existing request or create a new one
        PlanReqestModel::updateOrCreate(
            ['tenant_id' => $tenant->id], // Search by tenant
            ['plan' => $validated['plan']] // Update or set this
        );

        return redirect()->back()->with('success', 'Plan request submitted successfully.');
    }


    /**
     * Display the specified resource.
     */
    public function show(PlanReqestModel $planReqestModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PlanReqestModel $planReqestModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePlanReqestModelRequest $request, PlanReqestModel $planRequest)
    {
        $tenant = Tenant::findOrFail($planRequest->tenant_id);

        $tenant->update([
            'plan' => $planRequest->plan
        ]);
        $planRequest->delete();

        return redirect()->back()
            ->with('success', 'Tenant plan updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PlanReqestModel $planReqestModel)
    {
        //
    }
}
