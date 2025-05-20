@extends('tenants.layouts.dashboard-layout')
@section('content')

<div class="pc-container">
    <div class="pc-content">
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Pricing </h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="../dashboard/index.html">Home</a></li>
                            <li class="breadcrumb-item"><a href="javascript: void(0)">Other</a></li>
                            <li class="breadcrumb-item" aria-current="page">Pricing </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-6">
                <div class="card price-card">
                    <div class="card-body">
                        <div class="price-icon">
                            <img src="../assets/images/pages/img-price-standard.svg" alt="img" class="img-fluid">
                            <h4 class="mb-0">Standard</h4>
                        </div>
                        <p class="mt-4">Create one end product for a client, transfer that end product to your client, charge them
                            for your services. The license is then transferred to the client.</p>
                        <div class="price-price my-4">$100 <span class="text-muted">Per Month</span></div>
                        <form class="d-grid" action="{{route('plan-requests.store')}}" method="POST">
                            @csrf
                            <input type="hidden" name="plan" value="standard">
                            <button class="btn btn-outline-primary bg-light text-primary mb-4" href="#"
                                role="button">Request Now</button>
                        </form>
                        <ul class="list-group list-group-flush product-list">
                            <li class="list-group-item enable">5 Maximum cars can be listed</li>
                            <li class="list-group-item enable">Layout customizations</li>
                            <li class="list-group-item enable">Download Report</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="card price-card">
                    <div class="card-body">
                        <div class="price-icon">
                            <img src="../assets/images/pages/img-price-standardplus.svg" alt="img" class="img-fluid">
                            <h4 class="mb-0">Premium</h4>
                        </div>
                        <p class="mt-4">Create one end product for a client, transfer that end product to your client, charge them
                            for your services. The license
                            is then transferred to the client.</p>
                        <div class="price-price my-4">$200 <span class="text-muted">Per Month</span></div>
                        <form class="d-grid" action="{{route('plan-requests.store')}}" method="POST">
                            @csrf
                            <input type="hidden" name="plan" value="premium">

                            <button class="btn btn-primary mb-4" href="#" type="submit" role="button">Request
                                Now</button>
                        </form>
                        <ul class="list-group list-group-flush product-list">
                            <li class="list-group-item enable">10 Maximum cars can be listed</li>
                            <li class="list-group-item enable">Layout customizations</li>
                            <li class="list-group-item enable">Download Report</li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>

    </div>
</div>

@endsection