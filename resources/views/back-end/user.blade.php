@section('title')
    Theta - Form Date Picker
@endsection
@extends('layouts.main')
@section('style')
    <!-- Datepicker css -->
    <link href="{{ asset('assets/plugins/datepicker/datepicker.min.css') }}" rel="stylesheet" type="text/css">
@endsection
@section('rightbar-content')
    <!-- Start Breadcrumbbar -->
    <div class="breadcrumbbar">
        <div class="row align-items-center">
            <div class="col-md-8 col-lg-8">
                <h4 class="page-title">Insert a new question with answer</h4>
                <div class="breadcrumb-list">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Advanced UI Kits</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Image Crop</li>
                    </ol>
                </div>
            </div>
            <div class="col-md-4 col-lg-4">
                <div class="widgetbar">
                    <a href="{{ route('CertificateControllerIndex') }}" target="_blank" class="btn btn-primary">Go to frontend</a>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumbbar -->
    <!-- Start Contentbar -->
    <div class="contentbar">
        <!-- Start row -->
        <form action="{{ route('BackendControllerInsertUser') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <!-- *Offer info -->
                <div class="col-lg-12">
                    <div class="card m-b-30">
                        <div class="row">
                            <div class="col-lg-12 col-md-12">
                                <hr>
                                  <div class="form-group">
                                      <div class="input-group mb-3">
                                          <div class="input-group-prepend">
                                              <span class="input-group-text" id="basic-addon3">Name :</span>
                                          </div>
                                          <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" required placeholder="Your Name" name="name" value="{{ old('name') }}">
                                      </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon3">Email :</span>
                                        </div>
                                        <input type="email" class="form-control" id="basic-url" aria-describedby="basic-addon3" required placeholder="you@mail.com" name="email" value="{{ old('email') }}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon3">Phone:</span>
                                        </div>
                                        <input type="tel" class="form-control" id="basic-url" aria-describedby="basic-addon3" required placeholder="Your Phone" name="phone" value="{{ old('phone') }}">
                                    </div>
                                </div>
                                <hr>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon3">Password :</span>
                                        </div>
                                        <input type="password" class="form-control" id="basic-url" aria-describedby="basic-addon3" required placeholder="12345678" name="password" value="{{ old('password') }}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon3">Confirm Password :</span>
                                        </div>
                                        <input type="password" class="form-control" id="basic-url" aria-describedby="basic-addon3" required placeholder="12345678" name="password_confirm" value="{{ old('password_confirm') }}">
                                    </div>
                                </div>
                                <hr>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End col -->
                <button type="submit" class="btn btn-primary btn-lg btn-block">Add User</button>
                <!-- End col -->
            </div>
        </form>
        <hr>
        <div class="contentbar">
            <!-- Start row -->
            <div class="row">
                <!-- Start col -->
                <div class="col-lg-12">
                    <div class="card m-b-30">
                        <div class="card-header">
                            <h5 class="card-title">All user list</h5>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="datatable-buttons" class="table table-striped table-bordered">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Image</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($user as $user)
                                        <tr>
                                            <td class="@if($user->id==Auth::user()->id) success-rgba @endif">{{ $user->id }}</td>
                                            <td class="@if($user->avatar==Auth::user()->avatar) success-rgba @endif">
                                                <img src="{{ $user->avatar }}" alt="" style="border-radius: 50%; width:50px"> </td>
                                            <td class="@if($user->name==Auth::user()->name) success-rgba @endif">{{ $user->name }}</td>
                                            <td class="@if($user->email==Auth::user()->email) success-rgba @endif">{{ $user->email }}</td>
                                            <td class="@if($user->phone==Auth::user()->phone) success-rgba @endif">{{ $user->phone }}</td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End col -->
            </div>
            <!-- End row -->
        </div>
    </div>
@endsection
@section('script')

@endsection
