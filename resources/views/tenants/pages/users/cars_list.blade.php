@extends('tenants.layouts.user_layout')
@section('content')
<div class="pc-container">
    <div class="pc-content">
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Car</a></li>
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
        <div class="row">
            @foreach($cars as $index => $car)
            <div class="col-md-6 col-xxl-4 d-flex mb-3">
                <div class="card mb-3 w-100 d-flex flex-column" style="height: 100%;">
                    <img
                        class="img card-img-top img-fluid"
                        src="{{ asset($car->car_image) }}"
                        alt="Car image"
                        style="height: 200px; width: 100%; object-fit: cover;">
                    <div class="card-body d-flex flex-column flex-grow-1">
                        <h5 class="card-title">{{ $car->car_name }}</h5>
                        <p class="card-text mute-text">
                            {{ $car->car_description }}
                        </p>
                        <hr>
                        <div class="d-flex mb-2 justify-content-between">
                            <h5 class="card-title">Rates</h5>
                            <h5 class="card-title">${{ $car->rates }}/day</h5>
                        </div>
                        <hr>
                        <div class="mt-auto">
                            <a href="#!" class="btn btn-warning mb-1 w-100">Details</a>
                            <a href="{{ route('booking.create', $car) }}" class="btn btn-primary w-100">Book now</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</div>
@endsection