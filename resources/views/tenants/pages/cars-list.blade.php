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
                            <li class="breadcrumb-item" aria-current="page">List</li>
                        </ul>
                    </div>
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h2 class="mb-0">Cars List</h2>
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
                        <div class="text-end p-4 pb-0 gap-2">
                            <div style="display: inline-block; background-color:rgb(187, 187, 187); color: white; padding: 0.5em 1em; border-radius: 0.375rem;">
                                @php
                                $plan = tenant('plan');
                                if ($plan === 'free') {
                                $carLimit = $cars->count() . '/ 3';
                                } elseif ($plan === 'standard') {
                                $carLimit = $cars->count() . '/ 5';
                                } else {
                                $carLimit = $cars->count() . ' / 10';
                                }
                                @endphp

                                {{ $carLimit }}
                            </div>
                            <div style="display: inline-block; background-color:rgb(187, 187, 187); color: white; padding: 0.5em 1em; border-radius: 0.375rem; text-transform: capitalize;">
                                {{ tenant('plan') }} Plan
                            </div>

                            <a href="/cars/create" class="btn btn-primary ">
                                <i class="ti ti-plus f-18"></i> List new car
                            </a>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-hover" id="pc-dt-simple">
                                <thead>
                                    <tr>

                                        <th class="text-center">#</th>
                                        <th>Car Detail</th>
                                        <th>Categories</th>
                                        <th class="text-center">Rates</th>
                                        <th class="text-center">Seats</th>
                                        <th>Status</th>
                                        <th class="text-center">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($cars as $index => $car)
                                    <tr>

                                        <td class="text-center">{{ $index + 1 }}</td>
                                        <td>
                                            <div class="row">
                                                <div class="col-auto pe-0">
                                                    <img src="{{ asset($car->car_image) }}" alt="car-image"
                                                        class="rounded-circle img-fluid wid-40"
                                                        style="width: 40px; height: 40px; object-fit: cover;">

                                                </div>
                                                <div class="col">
                                                    <h6 class="mb-1">{{ $car->car_name }}</h6>
                                                    <p class="text-muted f-12 mb-0">{{ $car->car_description }}</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>{{ $car->car_category }}</td>
                                        <td class="text-center">{{ $car->rates }}</td>
                                        <td class="text-center">{{ $car->seats }}</td>
                                        <td>
                                            <span class="badge {{ $car->status == 'available' ? 'bg-light-success' : 'bg-light-danger' }} f-12">
                                                {{ ucfirst($car->status) }}
                                            </span>
                                        </td>
                                        <td class="text-center">
                                            <ul class="list-inline me-auto mb-0">

                                                <li class="list-inline-item align-bottom" data-bs-toggle="tooltip" title="Edit">
                                                    <a href="{{ route('cars.edit', $car->id) }}" class="avtar avtar-xs btn-link-primary">
                                                        <i class="ti ti-edit-circle f-18"></i>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item align-bottom" data-bs-toggle="tooltip" title="Delete">
                                                    <form id="deleteForm" action="{{ route('cars.destroy', $car) }}" method="POST" style="display:inline;">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="button" onclick="confirmDelete()" class="avtar avtar-xs btn-link-danger" style="border: none; background: none;">
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
        </div>
    </div>
</div>
<script>
    function confirmDelete() {
        Swal.fire({
            title: "Confirm Update",
            text: "Are you sure you want to delete this car?",
            icon: "warning",
            showCancelButton: true,
            confirmButtonText: "Confirm",
            cancelButtonText: "Cancel"
        }).then((result) => {
            if (result.isConfirmed) {
                document.getElementById('deleteForm').submit();
            }
        });
    }
</script>
@endsection