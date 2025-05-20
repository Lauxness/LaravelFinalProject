<?php

namespace App\Http\Controllers\TenantApp;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use App\Models\Cars;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class InvoiceController extends Controller
{
    public function generate()
    {


        $tenant = tenant();


        if ($tenant->plan == "free") {
            return redirect()->back()->with('error', 'Sorry you cant download report in your current plan!');
        }

        $tenantInfo = [
            'name' =>  $tenant->name,
            'companyName' =>  $tenant->companyName,
            'address' =>  $tenant->address,
            'email' =>  $tenant->email
        ];

        $bookings = Booking::select('car_id', DB::raw('COUNT(*) as total_bookings'))
            ->groupBy('car_id')
            ->with('car')
            ->get();

        $total = $bookings->reduce(function ($carry, $booking) {
            $rates = $booking->car->rates ?? 0;
            return $carry + ($rates * $booking->total_bookings);
        }, 0);

        $currentDate = \Carbon\Carbon::now()->format('d F Y');

        // Pass all data together as an associative array
        $pdf = Pdf::loadView('tenants.pdfReport.invoice', [
            'tenantInfo' => $tenantInfo,
            'bookings' => $bookings,
            'total' => $total,
            'currentDate' => $currentDate
        ]);

        # return $pdf->stream();
        return $pdf->download('booking_report.pdf');
    }
}
