@extends('tenants.layouts.dashboard-layout')
@section('content')
<section class="pc-container">
    <div class="pc-content">
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="../dashboard/index.html">Home</a></li>
                            <li class="breadcrumb-item"><a href="javascript: void(0)">Contact</a></li>
                            <li class="breadcrumb-item" aria-current="page">Support</li>
                        </ul>
                    </div>
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h2 class="mb-0">Contact support</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <form class="card" action="{{route('contact.support')}}" method="POST">
                    @csrf

                    <div class="card-header">
                        <h5>Contact support</h5>
                    </div>
                    <div class="card-body">
                        <div class="alert alert-primary">
                            <div class="media align-items-center">
                                <i class="ti ti-info-circle h2 f-w-400 mb-0"></i>
                                <div class="media-body ms-3"> Please fill up the form</div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="form-label">Email address</label>
                            <input type="email" class="form-control form-control" name="email" value="{{ tenant('companyName') }}" placeholder="email@company.com">
                        </div>
                        <div class="form-group mb-0">
                            <label class="form-label" for="exampleTextarea">Concern</label>
                            <textarea class="form-control" id="exampleTextarea" rows="3" name="concern"></textarea>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button class="btn btn-primary me-2" type="submit">Submit</button>
                    </div>
                </form>


            </div>

        </div>
        <!-- [ Main Content ] end -->
    </div>
</section>

@endsection