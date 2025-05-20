@extends('tenants.layouts.user_layout')
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
                            <li class="breadcrumb-item" aria-current="page">Book</li>
                        </ul>
                    </div>
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h2 class="mb-0">Book</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">

            <div class="col-md-6 col-xxl-4">
                <div class="pc-component">
                    <div class="card mb-3">
                        <img class="img card-img-center" src="{{ asset($car->car_image) }}"
                            alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title"> {{$car->car_name}}</h5>
                            <p class="card-text mute-text">
                                {{$car->car_description}}
                            </p>
                            <hr>
                            <div class="d-flex  mb-2" style="justify-content: space-between;">
                                <h5 class="card-title">
                                    Rates
                                </h5>
                                <h5 class="card-title ">
                                    ${{$car->rates}}/day
                                </h5>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xxl-8">
                <div class="pc-component">
                    <form class="card" method="POST" action="{{ $booking ? route('booking.update', $booking->id) : route('booking.store') }}">
                        @csrf
                        @if ($booking)
                        @method('PUT')
                        @endif
                        <div class="card-header">
                            <h5>{{ $booking ? 'Edit Booking' : 'Book a Car' }}</h5>
                        </div>
                        <div class="card-body">
                            <input type="hidden" name="car_id" value="{{ $car->id ?? ($booking ? $booking->car->id : '') }}">
                            <input type="hidden" name="status" value="pending">
                            <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">

                            <div class="form-group">
                                <label for="email-input" class="form-label">Email Address*</label>
                                <input type="email" class="form-control" name="email" id="email-input"
                                    value="{{ Auth::user()->email }}" required>
                            </div>

                            <div class="form-group">
                                <label for="date-input" class="form-label">Date</label>
                                <input type="date" class="form-control" name="date" id="date-input"
                                    value="{{ $booking->date ?? '' }}" required>
                            </div>

                            <div class="form-group">
                                <label for="time-input" class="form-label">Time (Hour Only)</label>
                                <input type="time" class="form-control" name="time" id="time-input" step="3600"
                                    value="{{ $booking->time ?? '' }}" required>
                            </div>

                        </div>
                        <div class="card-footer">
                            <button class="btn btn-primary me-2" type="submit">{{ $booking ? 'Update' : 'Submit' }}</button>
                            <button type="button" class="btn btn-secondary" onclick="window.history.back();">Cancel</button>
                        </div>
                    </form>



                </div>
            </div>
        </div>
    </div>
</div>
@endsection