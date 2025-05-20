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
                            <li class="breadcrumb-item"><a href="javascript: void(0)">Dashboard</a></li>
                            <li class="breadcrumb-item" aria-current="page">Analytics</li>
                        </ul>
                    </div>
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h2 class="mb-0">Analytics</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->

        <!-- [ Main Content ] start -->
        <div class="row">
            <div class="col-md-6 col-xl-3">
                <div class="card">
                    <div class="card-body">
                        <h6 class="mb-2 f-w-400 text-muted">Total Users</h6>
                        <h4 class="mb-0">{{$userCount}}</h4>
                    </div>
                    <div id="total-value-graph-1"></div>
                </div>
            </div>
            <div class="col-md-6 col-xl-3">
                <div class="card">
                    <div class="card-body">
                        <h6 class="mb-2 f-w-400 text-muted">Total Booking</h6>
                        <h4 class="mb-0">{{$bookingCount}}</h4>
                    </div>
                    <div id="total-value-graph-2"></div>
                </div>
            </div>
            <div class="col-md-6 col-xl-3">
                <div class="card">
                    <div class="card-body">
                        <h6 class="mb-2 f-w-400 text-muted">Total Revenue</h6>
                        <h4 class="mb-0">$ {{$total}}</h4>
                    </div>
                    <div id="total-value-graph-3"></div>
                </div>
            </div>
            <div class="col-md-6 col-xl-3">
                <div class="card">
                    <div class="card-body">
                        <h6 class="mb-2 f-w-400 text-muted">Total Cars</h6>
                        <h4 class="mb-0">{{$carCount}}</h4>
                    </div>
                    <div id="total-value-graph-4"></div>
                </div>
            </div>

            <div class="col-md-12 col-xl-12">
                <h5 class="mb-3">Bookings per month</h5>
                <div class="card">
                    <div class="card-body">
                        <div class="row mb-3 align-items-center">
                            <div class="col">

                            </div>


                            <div class="col-auto">
                                <a href="{{route('generate')}}" class="avtar avtar-s btn btn-outline-secondary">
                                    <i class="ti ti-download f-18"></i>
                                </a>
                            </div>
                        </div>
                        <div class="tab-content" id="income-tab-tabContent">
                            <div class="tab-pane show active" id="income-tab-profile" role="tabpanel"
                                aria-labelledby="income-tab-profile-tab" tabindex="0">
                                <div id="income-overview-tab-chart"></div>
                            </div>
                            <div class="tab-pane" id="income-tab-home" role="tabpanel" aria-labelledby="income-tab-home-tab"
                                tabindex="0">
                                <div id="income-overview-tab-chart-1"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- [ sample-page ] end -->
        </div>
        <!-- [ Main Content ] end -->
    </div>
    <script>
        window.chartData = {
            monthly: JSON.parse('{!! json_encode($monthlyData) !!}'),

        };
    </script>
</div>


@endsection