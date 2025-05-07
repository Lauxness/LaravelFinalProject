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
                            <li class="breadcrumb-item" aria-current="page">Account Profile</li>
                        </ul>
                    </div>
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h2 class="mb-0">Account Profile</h2>
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
                    <div class="card-header pb-0">
                        <ul class="nav nav-tabs profile-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="profile-tab-1" data-bs-toggle="tab" href="#profile-1" role="tab"
                                    aria-selected="true">
                                    <i class="ti ti-user me-2"></i>Profile
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="profile-tab-2" data-bs-toggle="tab" href="#profile-2" role="tab"
                                    aria-selected="true">
                                    <i class="ti ti-file-text me-2"></i>Edit Profile
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="profile-tab-3" data-bs-toggle="tab" href="#profile-3" role="tab"
                                    aria-selected="true">
                                    <i class="ti ti-id me-2"></i>My Account
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="profile-tab-4" data-bs-toggle="tab" href="#profile-4" role="tab"
                                    aria-selected="true">
                                    <i class="ti ti-lock me-2"></i>Change Password
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" id="profile-tab-6" data-bs-toggle="tab" href="#profile-6" role="tab"
                                    aria-selected="true">
                                    <i class="ti ti-settings me-2"></i>Settings
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <div class="tab-content">
                            <div class="tab-pane show active" id="profile-1" role="tabpanel" aria-labelledby="profile-tab-1">
                                <div class="row">
                                    <div class="col-lg-5 col-xxl-3">
                                        <div class="card">
                                            <div class="card-body position-relative">

                                                <div class="text-center mt-3">
                                                    <div class="chat-avtar d-inline-flex mx-auto">
                                                        <img
                                                            class="rounded-circle img-fluid wid-70"
                                                            style="width: 70px; height: 70px; object-fit: cover;"
                                                            src="{{ $user->profile_picture ? asset($user->profile_picture) : asset('assets/images/user/avatar-5.jpg') }}"
                                                            alt="User image">
                                                    </div>
                                                    <h5 class="mb-0">{{$user->name}}</h5>
                                                    <p class="text-muted text-sm">{{$user->role}}</p>

                                                    <hr class="my-3">
                                                    <div class="d-inline-flex align-items-center justify-content-between w-100 mb-3">
                                                        <i class="ti ti-mail"></i>
                                                        <p class="mb-0">{{$user->email}}</p>
                                                    </div>
                                                    <div class="d-inline-flex align-items-center justify-content-between w-100 mb-3">
                                                        <i class="ti ti-phone"></i>
                                                        <p class="mb-0">(+1-876) 8654 239 581</p>
                                                    </div>
                                                    <div class="d-inline-flex align-items-center justify-content-between w-100 mb-3">
                                                        <i class="ti ti-map-pin"></i>
                                                        <p class="mb-0">{{$user->address}}</p>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-lg-7 col-xxl-9">
                                        <div class="card">
                                            <div class="card-header">
                                                <h5>About me</h5>
                                            </div>
                                            <div class="card-body">
                                                <p class="mb-0">Hello, I’m Anshan Handgun Creative Graphic Designer & User Experience Designer
                                                    based in Website, I create digital Products a more Beautiful and usable place. Morbid
                                                    accusant ipsum. Nam nec tellus at.</p>
                                            </div>
                                        </div>
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
                                                                <p class="mb-0">Anshan Handgun</p>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <p class="mb-1 text-muted">Father Name</p>
                                                                <p class="mb-0">Mr. Deepen Handgun</p>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="list-group-item px-0">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <p class="mb-1 text-muted">Phone</p>
                                                                <p class="mb-0">(+1-876) 8654 239 581</p>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <p class="mb-1 text-muted">Country</p>
                                                                <p class="mb-0">New York</p>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="list-group-item px-0">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <p class="mb-1 text-muted">Email</p>
                                                                <p class="mb-0">anshan.dh81@gmail.com</p>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <p class="mb-1 text-muted">Zip Code</p>
                                                                <p class="mb-0">956 754</p>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="list-group-item px-0 pb-0">
                                                        <p class="mb-1 text-muted">Address</p>
                                                        <p class="mb-0">Street 110-B Kalians Bag, Dewan, M.P. New York</p>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>


                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="profile-2" role="tabpanel" aria-labelledby="profile-tab-2">
                                <form class="row" action="{{route('profile.update')}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('PATCH')
                                    <input type="text" class="form-control" hidden name="id" value="{{$user->id}}">
                                    <div class="col-lg-6">
                                        <div class="card">
                                            <div class="card-header">
                                                <h5>Personal Information</h5>
                                            </div>
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-sm-12 text-center mb-3">
                                                        <div class="user-upload wid-75">
                                                            <img src="{{ $user->profile_picture ? asset($user->profile_picture) :' assets/images/user/avatar-5.jpg' }}" alt="img" class="img-fluid">
                                                            <label for="uplfile" class="img-avtar-upload">
                                                                <i class="ti ti-camera f-24 mb-1"></i>
                                                                <span>Upload</span>
                                                            </label>
                                                            <input type="file" id="uplfile" class="d-none" name="profile_picture">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12">
                                                        <div class="form-group">
                                                            <label class="form-label">Name</label>
                                                            <input type="text" class="form-control" name="name" value="{{$user->name  ?? null }}">
                                                        </div>


                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label class="form-label">Country</label>
                                                            <input type="text" name="country" class="form-control" value="{{$user->country  ?? '' }}">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label class="form-label">Zip code</label>
                                                            <input name="zipcode" type="text" class="form-control" value="{{$user->zipcode  ?? null }}">
                                                        </div>
                                                    </div>


                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">

                                        <div class="card">
                                            <div class="card-header">
                                                <h5>Contact Information</h5>
                                            </div>
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label class="form-label">Contact Phone</label>
                                                            <input type="text" class="form-control" name="mobile_number" value="{{ $user->mobile_number ?? null }}">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label class="form-label">Email <span class="text-danger">*</span></label>
                                                            <input type="text" name="email" class="form-control" value="{{$user->email  ?? null }}">
                                                        </div>
                                                    </div>

                                                    <div class="col-sm-12">
                                                        <div class="form-group">
                                                            <label class="form-label">Address</label>
                                                            <textarea
                                                                class="form-control" name="address">{{$user->address}}</textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 text-end btn-page">
                                        <div class="btn btn-outline-secondary">Cancel</div>
                                        <button class="btn btn-primary" type="submit">Update Profile</button>
                                    </div>
                                </form>
                            </div>
                            <div class="tab-pane" id="profile-3" role="tabpanel" aria-labelledby="profile-tab-3">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="card">
                                            <div class="card-header">
                                                <h5>General Settings</h5>
                                            </div>
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label class="form-label">Username <span class="text-danger">*</span></label>
                                                            <input type="text" class="form-control" value="Ashoka_Tano_16">
                                                            <small class="form-text text-muted">Your Profile URL:
                                                                https://pc.com/Ashoka_Tano_16</small>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label class="form-label">Account Email <span class="text-danger">*</span></label>
                                                            <input type="text" class="form-control" value="demo@sample.com">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label class="form-label">Language</label>
                                                            <select class="form-control">
                                                                <option>Washington</option>
                                                                <option>India</option>
                                                                <option>Africa</option>
                                                                <option>New York</option>
                                                                <option>Malaysia</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label class="form-label">Sign in Using</label>
                                                            <select class="form-control">
                                                                <option>Password</option>
                                                                <option>Face Recognition</option>
                                                                <option>Thumb Impression</option>
                                                                <option>Key</option>
                                                                <option>Pin</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="card">
                                            <div class="card-header">
                                                <h5>Advance Settings</h5>
                                            </div>
                                            <div class="card-body">
                                                <ul class="list-group list-group-flush">
                                                    <li class="list-group-item px-0 pt-0">
                                                        <div class="d-flex align-items-center justify-content-between">
                                                            <div>
                                                                <p class="mb-1">Secure Browsing</p>
                                                                <p class="text-muted text-sm mb-0">Browsing Securely ( https ) when it's necessary</p>
                                                            </div>
                                                            <div class="form-check form-switch p-0">
                                                                <input class="form-check-input h4 position-relative m-0" type="checkbox" role="switch"
                                                                    checked="">
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="list-group-item px-0">
                                                        <div class="d-flex align-items-center justify-content-between">
                                                            <div>
                                                                <p class="mb-1">Login Notifications</p>
                                                                <p class="text-muted text-sm mb-0">Notify when login attempted from other place</p>
                                                            </div>
                                                            <div class="form-check form-switch p-0">
                                                                <input class="form-check-input h4 position-relative m-0" type="checkbox" role="switch"
                                                                    checked="">
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="list-group-item px-0 pb-0">
                                                        <div class="d-flex align-items-center justify-content-between">
                                                            <div>
                                                                <p class="mb-1">Login Approvals</p>
                                                                <p class="text-muted text-sm mb-0">Approvals is not required when login from
                                                                    unrecognized devices.</p>
                                                            </div>
                                                            <div class="form-check form-switch p-0">
                                                                <input class="form-check-input h4 position-relative m-0" type="checkbox" role="switch"
                                                                    checked="">
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="card">
                                            <div class="card-header">
                                                <h5>Recognized Devices</h5>
                                            </div>
                                            <div class="card-body">
                                                <ul class="list-group list-group-flush">
                                                    <li class="list-group-item px-0 pt-0">
                                                        <div class="d-flex align-items-center justify-content-between">
                                                            <div class="me-2">
                                                                <p class="mb-2">Celt Desktop</p>
                                                                <p class="mb-0 text-muted">4351 Deans Lane</p>
                                                            </div>
                                                            <div class="">
                                                                <div class="text-success d-inline-block me-2">
                                                                    <i class="fas fa-circle f-8 me-2"></i>
                                                                    Current Active
                                                                </div>
                                                                <a href="#!" class="text-danger"><i class="feather icon-x-circle"></i></a>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="list-group-item px-0">
                                                        <div class="d-flex align-items-center justify-content-between">
                                                            <div class="me-2">
                                                                <p class="mb-2">Imco Tablet</p>
                                                                <p class="mb-0 text-muted">4185 Michigan Avenue</p>
                                                            </div>
                                                            <div class="">
                                                                <div class="text-muted d-inline-block me-2">
                                                                    <i class="fas fa-circle f-8 me-2"></i>
                                                                    Active 5 days ago
                                                                </div>
                                                                <a href="#!" class="text-danger"><i class="feather icon-x-circle"></i></a>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="list-group-item px-0 pb-0">
                                                        <div class="d-flex align-items-center justify-content-between">
                                                            <div class="me-2">
                                                                <p class="mb-2">Albs Mobile</p>
                                                                <p class="mb-0 text-muted">3462 Fairfax Drive</p>
                                                            </div>
                                                            <div class="">
                                                                <div class="text-muted d-inline-block me-2">
                                                                    <i class="fas fa-circle f-8 me-2"></i>
                                                                    Active 1 month ago
                                                                </div>
                                                                <a href="#!" class="text-danger"><i class="feather icon-x-circle"></i></a>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="card">
                                            <div class="card-header">
                                                <h5>Active Sessions</h5>
                                            </div>
                                            <div class="card-body">
                                                <ul class="list-group list-group-flush">
                                                    <li class="list-group-item px-0 pt-0">
                                                        <div class="d-flex align-items-center justify-content-between">
                                                            <div class="me-2">
                                                                <p class="mb-2">Celt Desktop</p>
                                                                <p class="mb-0 text-muted">4351 Deans Lane</p>
                                                            </div>
                                                            <button class="btn btn-link-danger">Logout</button>
                                                        </div>
                                                    </li>
                                                    <li class="list-group-item px-0 pb-0">
                                                        <div class="d-flex align-items-center justify-content-between">
                                                            <div class="me-2">
                                                                <p class="mb-2">Moon Tablet</p>
                                                                <p class="mb-0 text-muted">4185 Michigan Avenue</p>
                                                            </div>
                                                            <button class="btn btn-link-danger">Logout</button>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 text-end">
                                        <button class="btn btn-outline-dark ms-2">Clear</button>
                                        <button class="btn btn-primary">Update Profile</button>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="profile-4" role="tabpanel" aria-labelledby="profile-tab-4">
                                <form class="card" action="{{route('password.update')}}" method="post">
                                    @csrf
                                    @method('put')
                                    <div class="card-header">
                                        <h5>Change Password</h5>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label class="form-label">Old Password</label>
                                                    <input type="password" class="form-control" name="current_password">
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-label">New Password</label>
                                                    <input type="password" class="form-control" name="password">
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-label">Confirm Password</label>
                                                    <input type="password" class="form-control" name="password_confirmation">
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <h5>New password must contain:</h5>
                                                <ul class="list-group list-group-flush">
                                                    <li class="list-group-item"><i class="ti ti-minus me-2"></i> At least 8 characters</li>
                                                    <li class="list-group-item"><i class="ti ti-minus me-2"></i> At least 1 lower letter (a-z)
                                                    </li>
                                                    <li class="list-group-item"><i class="ti ti-minus me-2"></i> At least 1 uppercase letter
                                                        (A-Z)</li>
                                                    <li class="list-group-item"><i class="ti ti-minus me-2"></i> At least 1 number (0-9)</li>
                                                    <li class="list-group-item"><i class="ti ti-minus me-2"></i> At least 1 special characters
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer text-end btn-page">
                                        <a class="btn btn-outline-secondary" href="#">Cancel</a>
                                        <button class="btn btn-primary" type="submit">Update Profile</button>
                                    </div>
                                </form>
                            </div>

                            <div class="tab-pane" id="profile-6" role="tabpanel" aria-labelledby="profile-tab-6">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="card">
                                            <div class="card-header">
                                                <h5>Email Settings</h5>
                                            </div>
                                            <div class="card-body">
                                                <h6 class="mb-4">Setup Email Notification</h6>
                                                <div class="d-flex align-items-center justify-content-between mb-1">
                                                    <div>
                                                        <p class="text-muted mb-0">Email Notification</p>
                                                    </div>
                                                    <div class="form-check form-switch p-0">
                                                        <input class="m-0 form-check-input h5 position-relative" type="checkbox" role="switch" checked="">
                                                    </div>
                                                </div>
                                                <div class="d-flex align-items-center justify-content-between mb-1">
                                                    <div>
                                                        <p class="text-muted mb-0">Send Copy To Personal Email</p>
                                                    </div>
                                                    <div class="form-check form-switch p-0">
                                                        <input class="m-0 form-check-input h5 position-relative" type="checkbox" role="switch">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header">
                                                <h5>Updates from System Notification</h5>
                                            </div>
                                            <div class="card-body">
                                                <h6 class="mb-4">Email you with?</h6>
                                                <div class="d-flex align-items-center justify-content-between mb-1">
                                                    <div>
                                                        <p class="text-muted mb-0">News about PCT-themes products and feature updates</p>
                                                    </div>
                                                    <div class="form-check p-0">
                                                        <input class="m-0 form-check-input h5 position-relative" type="checkbox" role="switch" checked="">
                                                    </div>
                                                </div>
                                                <div class="d-flex align-items-center justify-content-between mb-1">
                                                    <div>
                                                        <p class="text-muted mb-0">Tips on getting more out of PCT-themes</p>
                                                    </div>
                                                    <div class="form-check p-0">
                                                        <input class="m-0 form-check-input h5 position-relative" type="checkbox" role="switch" checked="">
                                                    </div>
                                                </div>
                                                <div class="d-flex align-items-center justify-content-between mb-1">
                                                    <div>
                                                        <p class="text-muted mb-0">Things you missed since you last logged into PCT-themes</p>
                                                    </div>
                                                    <div class="form-check  p-0">
                                                        <input class="m-0 form-check-input h5 position-relative" type="checkbox" role="switch">
                                                    </div>
                                                </div>
                                                <div class="d-flex align-items-center justify-content-between mb-1">
                                                    <div>
                                                        <p class="text-muted mb-0">News about products and other services</p>
                                                    </div>
                                                    <div class="form-check p-0">
                                                        <input class="m-0 form-check-input h5 position-relative" type="checkbox" role="switch">
                                                    </div>
                                                </div>
                                                <div class="d-flex align-items-center justify-content-between mb-1">
                                                    <div>
                                                        <p class="text-muted mb-0">Tips and Document business products</p>
                                                    </div>
                                                    <div class="form-check p-0">
                                                        <input class="m-0 form-check-input h5 position-relative" type="checkbox" role="switch">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="card">
                                            <div class="card-header">
                                                <h5>Activity Related Emails</h5>
                                            </div>
                                            <div class="card-body">
                                                <h6 class="mb-4">When to email?</h6>
                                                <div class="d-flex align-items-center justify-content-between mb-1">
                                                    <div>
                                                        <p class="text-muted mb-0">Have new notifications</p>
                                                    </div>
                                                    <div class="form-check form-switch p-0">
                                                        <input class="m-0 form-check-input h5 position-relative" type="checkbox" role="switch" checked="">
                                                    </div>
                                                </div>
                                                <div class="d-flex align-items-center justify-content-between mb-1">
                                                    <div>
                                                        <p class="text-muted mb-0">You're sent a direct message</p>
                                                    </div>
                                                    <div class="form-check form-switch p-0">
                                                        <input class="m-0 form-check-input h5 position-relative" type="checkbox" role="switch">
                                                    </div>
                                                </div>
                                                <div class="d-flex align-items-center justify-content-between mb-1">
                                                    <div>
                                                        <p class="text-muted mb-0">Someone adds you as a connection</p>
                                                    </div>
                                                    <div class="form-check form-switch p-0">
                                                        <input class="m-0 form-check-input h5 position-relative" type="checkbox" role="switch" checked="">
                                                    </div>
                                                </div>
                                                <hr class="my-4">
                                                <h6 class="mb-4">When to escalate emails?</h6>
                                                <div class="d-flex align-items-center justify-content-between mb-1">
                                                    <div>
                                                        <p class="text-muted mb-0">Upon new order</p>
                                                    </div>
                                                    <div class="form-check form-switch p-0">
                                                        <input class="m-0 form-check-input h5 position-relative" type="checkbox" role="switch" checked="">
                                                    </div>
                                                </div>
                                                <div class="d-flex align-items-center justify-content-between mb-1">
                                                    <div>
                                                        <p class="text-muted mb-0">New membership approval</p>
                                                    </div>
                                                    <div class="form-check form-switch p-0">
                                                        <input class="m-0 form-check-input h5 position-relative" type="checkbox" role="switch">
                                                    </div>
                                                </div>
                                                <div class="d-flex align-items-center justify-content-between mb-1">
                                                    <div>
                                                        <p class="text-muted mb-0">Member registration</p>
                                                    </div>
                                                    <div class="form-check form-switch p-0">
                                                        <input class="m-0 form-check-input h5 position-relative" type="checkbox" role="switch" checked="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 text-end btn-page">
                                        <div class="btn btn-outline-secondary">Cancel</div>
                                        <div class="btn btn-primary">Update Profile</div>
                                    </div>
                                </div>
                            </div>
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