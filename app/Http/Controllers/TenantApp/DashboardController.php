<?php

namespace App\Http\Controllers\TenantApp;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use App\Models\Cars;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        $userCount = User::count();
        $bookingCount = Booking::count();
        $carCount = Cars::count();
        $rawBookingData = DB::table('bookings')
            ->select(DB::raw('MONTH(created_at) as month'), DB::raw('COUNT(*) as total'))
            ->groupBy(DB::raw('MONTH(created_at)'))
            ->pluck('total', 'month')
            ->toArray();

        $monthlyData = array_fill(1, 12, 0);
        foreach ($rawBookingData as $month => $count) {
            $monthlyData[$month] = $count;
        }
        $monthlyData = array_values($monthlyData);

        $bookings = Booking::select('car_id', DB::raw('COUNT(*) as total_bookings'))
            ->groupBy('car_id')
            ->with('car')
            ->get();

        $total = $bookings->reduce(function ($carry, $booking) {
            $rates = $booking->car->rates ?? 0;
            return $carry + ($rates * $booking->total_bookings);
        }, 0);


        return view('tenants.pages.dashboard', compact('userCount', 'bookingCount', 'carCount', 'monthlyData', 'total'));
    }
}
