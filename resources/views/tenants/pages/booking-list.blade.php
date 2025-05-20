@extends('tenants.layouts.dashboard-layout')
@section('content')
<div class="pc-container">
    <div class="pc-content">
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="../dashboard/index.html">Home</a></li>
                            <li class="breadcrumb-item"><a href="javascript: void(0)">Car</a></li>
                            <li class="breadcrumb-item" aria-current="page">Bookings</li>
                        </ul>
                    </div>
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h2 class="mb-0">Booking List</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ Main Content ] start -->
        <div class="row">
            <!-- [ sample-page ] start -->
            <div class="col-sm-12">
                <div class="card table-card">
                    <div class="card-body">

                        <div class="table-responsive">
                            <table class="table table-hover" id="pc-dt-simple">
                                <thead>
                                    <tr>
                                        <th class="text-center">#</th>
                                        <th>Car Details</th>
                                        <th>Rates</th>
                                        <th class="text-center">Date</th>
                                        <th class="text-center">Time</th>
                                        <th>Status</th>
                                        <th class="text-center">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($bookings as $index => $booking)
                                    <tr>
                                        <td class="text-center">{{ $index + 1 }}</td>

                                        <td>
                                            <div class="row">
                                                <div class="col-auto pe-0">
                                                    <img src="{{ asset($booking->car->car_image ?? 'default.jpg') }}" alt="car-image"
                                                        class="rounded-circle img-fluid wid-40"
                                                        style="width: 40px; height: 40px; object-fit: cover;">
                                                </div>
                                                <div class="col">
                                                    <h6 class="mb-1">{{ $booking->car->car_name ?? 'N/A' }}</h6>
                                                    <p class="text-muted f-12 mb-0">{{ $booking->car->car_description ?? 'N/A' }}</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>{{ $booking->car->rates ?? 'N/A' }}</td>
                                        <td class="text-center">{{ $booking->date ?? 'N/A' }}</td>
                                        <td class="text-center">{{ $booking->time ?? 'N/A' }}</td>

                                        <td>
                                            <span class="badge {{ $booking->status == 'pending' ? 'bg-light-warning' : ($booking->status == 'reserved' ? 'bg-light-success' : 'bg-light-danger') }} f-12">
                                                {{ ucfirst($booking->status) }}
                                            </span>
                                        </td>
                                        <td class="text-center">
                                            <ul class="list-inline me-auto mb-0">
                                                <li class="list-inline-item align-bottom" data-bs-toggle="tooltip" title="Aprrove">
                                                    <form action="{{ route('booking.approve', $booking) }}" method="POST" style="display:inline;">
                                                        @csrf
                                                        @method('PATCH')
                                                        <button type="submit" class="avtar avtar-xs btn-link-success" style="border: none; background: none;">
                                                            <i class="ti ti-checkbox f-18"></i>
                                                        </button>
                                                    </form>
                                                </li>
                                                <li class="list-inline-item align-bottom" data-bs-toggle="tooltip" title="Edit">
                                                    <a href="{{ route('booking.edit', $booking) }}" class="avtar avtar-xs btn-link-primary">
                                                        <i class="ti ti-edit-circle f-18"></i>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item align-bottom" data-bs-toggle="tooltip" title="Delete">
                                                    <form action="{{ route('booking.destroy', $booking) }}" method="POST" style="display:inline;">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="avtar avtar-xs btn-link-danger" style="border: none; background: none;">
                                                            <i class="ti ti-trash f-18"></i>
                                                        </button>
                                                    </form>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>

                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- [ sample-page ] end -->
        </div>
        <!-- [ Main Content ] end -->
    </div>
</div>
@endsection