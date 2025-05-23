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
                            <li class="breadcrumb-item"><a href="javascript: void(0)">Users</a></li>
                            <li class="breadcrumb-item" aria-current="page">List</li>
                        </ul>
                    </div>
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h2 class="mb-0">Users List</h2>
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
                <div class="card table-card">
                    <div class="card-body">

                        <div class="table-responsive">
                            <table class="table table-hover" id="pc-dt-simple">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Contact No.</th>
                                        <th>Address</th>
                                        <th>Country</th>
                                        <th>Zip Code</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($users as $index => $user)
                                    <tr>
                                        <td>{{$user->id}}</td>
                                        <td>
                                            <div class="row">
                                                <div class="col-auto">
                                                    <img src="{{ $user->profile_picture ? asset($user->profile_picture) :' assets/images/user/avatar-5.jpg' }}" alt="user-image"
                                                        style="width: 40px; height: 40px; object-fit: cover;"
                                                        class="wid-40 rounded-circle">
                                                </div>
                                                <div class="col">
                                                    <h6 class="mb-0">{{$user->name}}</h6>
                                                    <p class="text-muted f-12 mb-0">{{$user->email}}</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>{{$user->mobile_number}}</td>
                                        <td>{{$user->address}}</td>
                                        <td>{{$user->country}} </td>
                                        <td><span>{{$user->zipcode}}</span> </td>

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
<div class="modal fade" id="customer-modal" data-bs-keyboard="false" tabindex="-1"
    aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header border-0 pb-0">
                <h5 class="mb-0">Customer Details</h5>
                <a href="#" class="avtar avtar-s btn-link-danger btn-pc-default" data-bs-dismiss="modal">
                    <i class="ti ti-x f-20"></i>
                </a>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-body position-relative">
                                <div class="position-absolute end-0 top-0 p-3">
                                    <span class="badge bg-primary">Single</span>
                                </div>
                                <div class="text-center mt-3">
                                    <div class="chat-avtar d-inline-flex mx-auto">
                                        <img class="rounded-circle img-fluid wid-60" src="../assets/images/user/avatar-5.jpg"
                                            alt="User image">
                                    </div>
                                    <h5 class="mb-0">Aaron Poole</h5>
                                    <p class="text-muted text-sm">Manufacturing Director</p>
                                    <hr class="my-3 border border-secondary-subtle">
                                    <div class="row g-3">
                                        <div class="col-4">
                                            <h5 class="mb-0">45</h5>
                                            <small class="text-muted">Age</small>
                                        </div>
                                        <div class="col-4 border border-top-0 border-bottom-0">
                                            <h5 class="mb-0">86%</h5>
                                            <small class="text-muted">Progress</small>
                                        </div>
                                        <div class="col-4">
                                            <h5 class="mb-0">7634</h5>
                                            <small class="text-muted">Visits</small>
                                        </div>
                                    </div>
                                    <hr class="my-3 border border-secondary-subtle">
                                    <div class="d-inline-flex align-items-center justify-content-between w-100 mb-3">
                                        <i class="ti ti-mail"></i>
                                        <p class="mb-0">bo@gmail.com</p>
                                    </div>
                                    <div class="d-inline-flex align-items-center justify-content-between w-100 mb-3">
                                        <i class="ti ti-phone"></i>
                                        <p class="mb-0">+1 (247) 849-6968</p>
                                    </div>
                                    <div class="d-inline-flex align-items-center justify-content-between w-100 mb-3">
                                        <i class="ti ti-map-pin"></i>
                                        <p class="mb-0">Lesotho</p>
                                    </div>
                                    <div class="d-inline-flex align-items-center justify-content-between w-100">
                                        <i class="ti ti-link"></i>
                                        <a href="#" class="link-primary">
                                            <p class="mb-0">https://anshan.dh.url</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="card">
                            <div class="card-header">
                                <h5>Personal Details</h5>
                            </div>
                            <div class="card-body">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item px-0 pt-0">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <p class="mb-1 text-muted">Full Name</p>
                                                <h6 class="mb-0">Aaron Poole</h6>
                                            </div>
                                            <div class="col-md-6">
                                                <p class="mb-1 text-muted">Father Name</p>
                                                <h6 class="mb-0">Mr. Ralph Sabatini</h6>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item px-0">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <p class="mb-1 text-muted">Country</p>
                                                <h6 class="mb-0">Lesotho</h6>
                                            </div>
                                            <div class="col-md-6">
                                                <p class="mb-1 text-muted">Zip Code</p>
                                                <h6 class="mb-0">247 849</h6>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item px-0 pb-0">
                                        <p class="mb-1 text-muted">Address</p>
                                        <h6 class="mb-0">507 Sulnek Grove, Tudzovgeh, United States - 37173</h6>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <h5>About me</h5>
                            </div>
                            <div class="card-body">
                                <p class="mb-0">Hello, I’m Aaron Poole Manufacturing Director based in international company, Void
                                    jiidki me na fep juih ced gihhiwi launke cu mig tujum peodpo.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="customer-edit_add-modal" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="mb-0">Edit Customer</h5>
                <a href="#" class="avtar avtar-s btn-link-danger btn-pc-default" data-bs-dismiss="modal">
                    <i class="ti ti-x f-20"></i>
                </a>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-3 text-center">
                        <div class="chat-avtar d-inline-flex mx-auto">
                            <img class="rounded-circle img-fluid wid-70" src="../assets/images/user/avatar-5.jpg"
                                alt="User image">
                        </div>
                    </div>
                    <div class="col-sm-9">
                        <div class="form-group">
                            <label class="form-label">Name</label>
                            <input type="text" class="form-control" placeholder="Name">
                        </div>
                        <div class="form-group">
                            <label class="form-label">Email</label>
                            <input type="text" class="form-control" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <label class="form-label">Status</label>
                            <select class="form-select">
                                <option>Select Status</option>
                                <option>Complicated</option>
                                <option>Single</option>
                                <option>Relationship</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Location</label>
                            <textarea class="form-control" rows="3" placeholder="Enter Location"></textarea>
                        </div>
                        <div class="form-check form-switch d-flex align-items-center justify-content-between p-0">
                            <label class="form-check-label h5 pe-3 mb-0" for="customSwitchemlnot1">Make Contact Info Public
                                <span class="text-muted w-75 d-block text-sm f-w-400 mt-2">Means that anyone viewing your profile will be able to see your contacts details</span>
                            </label>
                            <input class="form-check-input h4 m-0 position-relative flex-shrink-0" type="checkbox" id="customSwitchemlnot1" checked="">
                        </div>
                        <hr class="my-3 border border-secondary-subtle">
                        <div class="form-check form-switch d-flex align-items-center justify-content-between p-0">
                            <label class="form-check-label h5 pe-3 mb-0" for="customSwitchemlnot2">Available to hire
                                <span class="text-muted w-75 d-block text-sm f-w-400 mt-2">Toggling this will let your teammates know that you are available for acquiring new projects</span>
                            </label>
                            <input class="form-check-input h4 m-0 position-relative flex-shrink-0" type="checkbox" id="customSwitchemlnot2" checked="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer justify-content-between">
                <ul class="list-inline me-auto mb-0">
                    <li class="list-inline-item align-bottom">
                        <a href="#" class="avtar avtar-s btn-link-danger btn-pc-default w-sm-auto" data-bs-toggle="tooltip" title="Delete">
                            <i class="ti ti-trash f-18"></i>
                        </a>
                    </li>
                </ul>
                <div class="flex-grow-1 text-end">
                    <button type="button" class="btn btn-link-danger btn-pc-default" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Save</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection