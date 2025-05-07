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
                            <li class="breadcrumb-item"><a href="javascript: void(0)">Listing</a></li>
                            <li class="breadcrumb-item" aria-current="page">Update Car</li>
                        </ul>
                    </div>
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h2 class="mb-0">Update Car</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <form class="row" action="{{ route('cars.update', $car) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label class="form-label">Car Name</label>
                                            <input type="text" class="form-control" name="car_name" placeholder="Enter car name" value="{{$car->car_name}}">
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label">Car Description</label>
                                            <input type="text" class="form-control" name="car_description" value="{{$car->car_description}}" placeholder="Enter car description">
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label">Category</label>
                                            <input type="text" class="form-control" value="{{$car->car_category}}" name="car_category" placeholder="Enter car category">
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label">Rates</label>
                                            <select class="form-select" name="rates">
                                                <option value="100" {{ $car->rates == '100' ? 'selected' : '' }}>$ 100</option>
                                                <option value="200" {{ $car->rates == '200' ? 'selected' : '' }}>$ 200</option>
                                                <option value="300" {{ $car->rates == '300' ? 'selected' : '' }}>$ 300</option>
                                                <option value="400" {{ $car->rates == '400' ? 'selected' : '' }}>$ 400</option>
                                                <option value="500" {{ $car->rates == '500' ? 'selected' : '' }}>$ 500</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label class="form-label">Seats</label>
                                            <select class="form-select" name="seats">
                                                <option value="1" {{ $car->seats == 1 ? 'selected' : '' }}>1</option>
                                                <option value="2" {{ $car->seats == 2 ? 'selected' : '' }}>2</option>
                                                <option value="3" {{ $car->seats == 3 ? 'selected' : '' }}>3</option>
                                                <option value="4" {{ $car->seats == 4 ? 'selected' : '' }}>4</option>
                                                <option value="5" {{ $car->seats == 5 ? 'selected' : '' }}>5</option>
                                            </select>

                                        </div>
                                        <div class="form-group">
                                            <label class="form-label">Status</label>
                                            <select class="form-select" name="status">
                                                <option value="Available" {{ $car->status == 'Available' ? 'selected' : '' }}>Available</option>
                                                <option value="Rented" {{ $car->status == 'Rented' ? 'selected' : '' }}>Rented</option>
                                            </select>

                                        </div>
                                        <div class="form-group">
                                            <p><span class="text-danger">*</span> Recommended resolution is 640*640 with file size</p>
                                            <label class="btn btn-outline-secondary" for="flupld"><i class="ti ti-upload me-2"></i> Click to Upload new Image</label>
                                            <input type="file" id="flupld" class="d-none" name="car_image">
                                        </div>
                                        <div class="text-end btn-page mb-0 mt-4">
                                            <a class="btn btn-outline-secondary" href="/cars">Cancel</a>
                                            <button class="btn btn-primary" type="submit">Update car</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection