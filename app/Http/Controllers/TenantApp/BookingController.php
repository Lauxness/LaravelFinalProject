<?php

namespace App\Http\Controllers\TenantApp;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use App\Http\Requests\StoreBookingRequest;
use App\Http\Requests\UpdateBookingRequest;
use App\Models\Cars;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index()
    {
        $user = Auth::user();

        if ($user->role === 'admin') {
            $bookings = Booking::with('car')
                ->latest()
                ->get();

            return view('tenants.pages.booking-list', compact('bookings'));
        } else {
            $bookings = Booking::with('car')
                ->where('user_id', $user->id)
                ->latest()
                ->get();
            return view('tenants.pages.users.booking-list', compact('bookings'));
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Cars $car,)
    {
        $booking = null;

        return view('tenants.pages.users.booking-form', compact('car', 'booking'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBookingRequest $request)
    {

        $validated = $request->validated();

        $carId = $validated['car_id'];
        $date = $validated['date'];
        $time = $validated['time'];

        $bookingDateTime = Carbon::parse("$date $time");
        if ($bookingDateTime->isPast()) {
            return redirect()->back()->withErrors(['time' => 'You cannot book a car in the past.']);
        }
        $exactMatch = Booking::where('car_id', $carId)
            ->where('date', $date)
            ->where('time', $time)
            ->exists();

        if ($exactMatch) {
            return redirect()->back()->withErrors(['time' => 'This car is already booked at that exact time.']);
        }
        $windowStart = $bookingDateTime->copy()->subHours(12);
        $windowEnd = $bookingDateTime->copy()->addHours(12);

        $conflict = Booking::where('car_id', $carId)
            ->whereRaw("STR_TO_DATE(CONCAT(date, ' ', time), '%Y-%m-%d %H:%i:%s') BETWEEN ? AND ?", [
                $windowStart,
                $windowEnd
            ])
            ->exists();

        if ($conflict) {
            return redirect()->back()->withErrors(['time' => 'This car is already booked within 12 hours of the selected time.']);
        }
        Booking::create($validated);

        return redirect()->back()->with('success', 'Your schedule has been recorded!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Booking $booking) {}

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Booking $booking)
    {
        $car = $booking->car; // Make sure the relationship exists in Booking model
        return view('tenants.pages.users.booking-form', compact('booking', 'car'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBookingRequest $request, Booking $booking)
    {
        $validated = $request->validated();

        $carId = $validated['car_id'];
        $date = $validated['date'];
        $time = $validated['time'];

        $bookingDateTime = Carbon::parse("$date $time");
        if ($bookingDateTime->isPast()) {
            return redirect()->back()->withErrors(['time' => 'You cannot book a car in the past.']);
        }
        $exactMatch = Booking::where('car_id', $carId)
            ->where('date', $date)
            ->where('time', $time)
            ->where('id', '!=', $booking->id)
            ->exists();

        if ($exactMatch) {
            return redirect()->back()->withErrors(['time' => 'This car is already booked at that exact time.']);
        }
        $windowStart = $bookingDateTime->copy()->subHours(12);
        $windowEnd = $bookingDateTime->copy()->addHours(12);

        $conflict = Booking::where('car_id', $carId)
            ->where('id', '!=', $booking->id)
            ->whereRaw("STR_TO_DATE(CONCAT(date, ' ', time), '%Y-%m-%d %H:%i:%s') BETWEEN ? AND ?", [
                $windowStart,
                $windowEnd
            ])
            ->exists();

        if ($conflict) {
            return redirect()->back()->withErrors(['time' => 'This car is already booked within 12 hours of the selected time.']);
        }

        $booking->update($validated);

        return redirect()->back()->with('success', 'Booking updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Booking $booking)
    {
        $booking->delete();

        return redirect()->back()->with('success', 'Booking deleted successfully.');
    }
    public function approveBooking(Booking $booking)
    {
        if ($booking->status == 'pending') {
            $booking->status = "reserved";
            $booking->save();

            return redirect()->back()->with('success', 'Car has been set to reserved status.');
        } elseif ($booking->status == 'reserved') {
            $booking->status = "returned";
            $booking->save();

            return redirect()->back()->with('success', 'Car has been set to returned status.');
        }

        return redirect()->back()->with('info', 'No changes made to the booking status.');
    }
}
