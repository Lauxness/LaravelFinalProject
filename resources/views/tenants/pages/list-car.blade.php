@extends('tenants.layouts.dashboard-layout')
@section('content')
<div class="pc-container">
    <div class="pc-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="../dashboard/index.html">Home</a></li>
                            <li class="breadcrumb-item"><a href="javascript: void(0)">Listing</a></li>
                            <li class="breadcrumb-item" aria-current="page">List New Car</li>
                        </ul>
                    </div>
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h2 class="mb-0">List New Car</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->
        <!-- [ Main Content ] start -->
        <div class="row">
            <!-- [ sample-page ] start -->
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <form class="row" action="{{ route('cars.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label class="form-label">Car Name</label>
                                            <input type="text" class="form-control" name="car_name" placeholder="Enter car name">
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label">Car Description</label>
                                            <input type="text" class="form-control" name="car_description" placeholder="Enter car description">
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label">Category</label>
                                            <input type="text" class="form-control" name="car_category" placeholder="Enter car category">
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label">Rates</label>
                                            <select class="form-select" name="rates">
                                                <option value="100">$ 100</option>
                                                <option value="200">$ 200</option>
                                                <option value="300">$ 300</option>
                                                <option value="400">$ 400</option>
                                                <option value="500">$ 500</option>
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
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label">Status</label>
                                            <select class="form-select" name="status">
                                                <option>Available</option>
                                                <option>Rented</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <p><span class="text-danger">*</span> Recommended resolution is 640*640 with file size</p>
                                            <label class="btn btn-outline-secondary" for="flupld"><i class="ti ti-upload me-2"></i> Click to Upload</label>
                                            <input type="file" id="flupld" class="d-none" name="car_image">
                                        </div>
                                        <div class="text-end btn-page mb-0 mt-4">
                                            <button class="btn btn-outline-secondary">Cancel</button>
                                            <button class="btn btn-primary" type="submit">List car</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- [ sample-page ] end -->
        </div>
        <!-- [ Main Content ] end -->
    </div>
</div>

@endsection