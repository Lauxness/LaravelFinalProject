<?php

namespace App\Http\Controllers\TenantApp;

use App\Http\Controllers\Controller;
use App\Models\Cars;
use App\Http\Requests\StoreCarsRequest;
use App\Http\Requests\UpdateCarsRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class CarsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tenant = tenant();
        $plan = $tenant->plan ?? 'free';
        $limit = match ($plan) {
            'free' => 3,
            'standard' => 5,
            'premium' => 10,
            default => 3,
        };
        $cars = Cars::latest()->take($limit)->get();

        if (Auth::user()->role == 'admin') {
            return view('tenants.pages.cars-list', compact('cars'));
        } else {
            return view('tenants.pages.users.cars_list', compact('cars'));
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tenants.pages.list-car');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCarsRequest $request)
    {
        $tenant = tenant();


        $limits = [
            'free' => 3,
            'standard' => 5,
            'premium' => 10,
        ];


        $plan = $tenant->plan ?? 'free';
        $limit = $limits[$plan] ?? 3;


        $carCount = Cars::count();

        if ($carCount >= $limit) {
            return redirect()->back()->with('error', 'You have reached the maximum allowed cars for your plan.');
        }


        $validated = $request->validated();

        if ($request->hasFile('car_image')) {
            $path = $request->file('car_image')->store('car_image', 'public');
            $validated['car_image'] = $path;
        }

        Cars::create($validated);

        return redirect()->back()->with('success', 'Car created successfully!');
    }
    /**
     * Display the specified resource.
     */
    public function show(Cars $cars) {}

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cars $car)
    {
        return view('tenants.pages.update-car', compact('car'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCarsRequest $request, Cars $car)
    {
        $validated = $request->validated();

        if ($request->hasFile('car_image')) {
            // Delete the old image if it exists
            if ($car->car_image && Storage::disk('public')->exists($car->car_image)) {
                Storage::disk('public')->delete($car->car_image);
            }

            $path = $request->file('car_image')->store('car_image', 'public');
            $validated['car_image'] = $path;
        }

        $car->fill($validated)->save();

        return redirect()->back()->with('success', 'Car updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cars $car)
    {
        if ($car->car_image && Storage::disk('public')->exists($car->car_image)) {
            Storage::disk('public')->delete($car->car_image);
        }
        $car->delete();

        return redirect()->back()->with('success', 'Car deleted successfully!');
    }
}
