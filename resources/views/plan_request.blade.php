@extends('layouts.layout')
@section('content')

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">

                <div class="col-md-12">
                    <div class="card card-plain table-plain-bg">
                        <div class="card-header ">
                            <h4 class="card-title">Plan Requests Table</h4>

                        </div>
                        <div class="card-body table-full-width table-responsive">
                            <table class="table table-hover">

                                <thead>
                                    <th>Name</th>
                                    <th>Company Name</th>
                                    <th>Plan</th>

                                    <th>Sub Domain</th>
                                    <th class="text-center">Action</th>
                                </thead>
                                <tbody>
                                    @foreach($planRequests as $planRequest)
                                    <tr>
                                        <td style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis; max-width: 100px;">{{$planRequest->tenant->name}}</td>
                                        <td style="white-space: nowrap;">{{$planRequest->tenant->companyName}}</td>
                                        <td style="white-space: nowrap;">{{$planRequest->plan}}</td>
                                        <td style="white-space: nowrap;">{{$planRequest->tenant->domain}}</td>
                                        <td style="white-space: nowrap;">

                                            <form action="{{route('plan-requests.update',$planRequest )}}" method="POST" style="display: inline;">

                                                @csrf
                                                @method('PATCH')
                                                <button type="submit" title="Accept" class="btn btn-primary" style="color: green; cursor: pointer; color: green; border: none;  "><i class="fa fa-check"></i></button>
                                            </form>

                                            <a type="btn" title="Edit" href="" style=" border: none; " class="btn btn-primary"><i class="fa fa-edit"></i></a>
                                        </td>
                                    </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @if(\Session::has('success'))
    <script>
        Swal.fire({
            title: "Success",
            text: "{{\Session::get('success')}}",
            icon: "success",

        });
    </script>
    @endif
    @if ($errors->any())
    <script>
        Swal.fire({
            title: "Validation Error",
            html: "{!! implode('<br>', $errors->all()) !!}",
            icon: "error",
            confirmButtonText: "OK"
        });
    </script>
    @endif
</div>


@endsection