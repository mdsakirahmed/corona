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
                <h4 class="page-title">All marks history</h4>
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
        <div class="contentbar">
            <!-- Start row -->
            <div class="row">
                <!-- Start col -->
                <div class="col-lg-12">
                    <div class="card m-b-30">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="datatable-buttons" class="table table-striped table-bordered">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Image</th>
                                        <th>Date</th>
                                        <th>Total Marks</th>
                                        <th>Got Marks</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($mark as $mark)
                                        <tr>
                                            <td class="">{{ $mark->id }}</td>
                                            <td class="">
                                                <img src="{{ $mark->user_image }}" alt="" style="border-radius: 50%; width:50px">
                                            </td>
                                            <td class="">{{ $mark->user_name }}</td>
                                            <td class="">{{ $mark->exam_time }}</td>
                                            <td class="">{{ $mark->total_marks }}</td>
                                            <td class="">{{ $mark->got_mark }}</td>
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
