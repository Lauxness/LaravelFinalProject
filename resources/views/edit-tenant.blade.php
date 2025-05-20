@extends('layouts.layout')
@section('content')

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Edit Tenant</h4>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{route('tenants.update', $tenant1)}}">
                            @csrf
                            @method('PATCH')
                            <div class="row">
                                <div class="col-md-5 pr-1">
                                    <div class="form-group">
                                        <label>Company name</label>
                                        <input type="text" class="form-control" placeholder="Company" name="companyName" value="{{$tenant1->companyName}}">
                                    </div>
                                </div>
                                <div class="col-md-3 px-1">
                                    <div class="form-group">
                                        <label>Name</label>
                                        <input type="text" class="form-control" placeholder="Username" name="name" value="{{$tenant1->name}}">
                                    </div>
                                </div>
                                <div class="col-md-4 pl-1">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Email address</label>
                                        <input type="email" class="form-control" placeholder="Email" name="email" value="{{$tenant1->email}}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 pr-1">
                                    <div class="form-group">
                                        <label>Domain name</label>
                                        <input type="text" class="form-control" placeholder="Domain" name="domain" value="{{$tenant1->domain}}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Address</label>
                                        <input type="text" class="form-control" placeholder="Address" name="address" value="{{$tenant1->address}}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 pr-1">
                                    <div class="form-group">
                                        <label>Plan</label>
                                        <select name="plan" class="form-control">

                                            <option value="free" @selected($tenant1->plan === 'free')>Free</option>
                                            <option value="standard" @selected($tenant1->plan === 'standard')>Standard</option>
                                            <option value="premium" @selected($tenant1->plan === 'premium')>Premium</option>



                                        </select>
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-md-12 pr-1">
                                    <div class="form-group">
                                        <label>Lock Domain</label>
                                        <select name="isPaused" class="form-control">
                                            <option value="1" {{ $tenant1->isPaused ? 'selected' : '' }}>Locked</option>
                                            <option value="0" {{ !$tenant1->isPaused ? 'selected' : '' }}>Unlocked</option>
                                        </select>

                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-info btn-fill pull-right">Update Tenant</button>
                            <div class="clearfix"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection