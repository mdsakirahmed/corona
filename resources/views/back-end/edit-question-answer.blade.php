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
                    <button class="btn btn-primary">Add Widget</button>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumbbar -->
    <!-- Start Contentbar -->
    <div class="contentbar">
        <!-- Start row -->
        <form action="{{ route('BackendControllerEditQuestionAnswer', $qa->id) }}" method="post" enctype="multipart/form-data">
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
                                              <span class="input-group-text" id="basic-addon3">Question:</span>
                                          </div>
                                          <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" required placeholder="What is capital of bangladesh ?" name="question" value="{{ $qa->question }}">
                                      </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon3">Option 1:</span>
                                        </div>
                                        <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" required placeholder="Dhaka" name="option1" value="{{ $qa->option1 }}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon3">Option 2:</span>
                                        </div>
                                        <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" required placeholder="Khulna" name="option2" value="{{ $qa->option2 }}">
                                    </div>
                                </div>
                                <hr>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon3">Option 3:</span>
                                        </div>
                                        <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" required placeholder="Chittagong" name="option3" value="{{ $qa->option3 }}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon3">Option 4:</span>
                                        </div>
                                        <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" required placeholder="Rajshahi" name="option4" value="{{ $qa->option4 }}">
                                    </div>
                                </div>
                                <hr>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- End col -->

                <!-- *Status -->
                <div class="col-md-12 text-center">
                    <div class="form-group has-success">
                        <div class="btn-group" data-toggle="buttons">
                            <label class="btn btn-primary ">
                                <div class="custom-control custom-radio ">
                                    <input type="radio" id="customRadio4" name="answer" value="1" class="custom-control-input" @if($qa->answer == 1) checked @endif>
                                    <label class="custom-control-label" for="website_type1">Option 1</label>
                                </div>
                            </label>
                            <label class="btn btn-primary">
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="customRadio5" name="answer" value="2" class="custom-control-input" @if($qa->answer == 2) checked @endif>
                                    <label class="custom-control-label" for="website_type2">Option 2</label>
                                </div>
                            </label>
                            <label class="btn btn-primary">
                                <div class="custom-control custom-radio ">
                                    <input type="radio" id="customRadio4" name="answer" value="3" class="custom-control-input" @if($qa->answer == 3) checked @endif>
                                    <label class="custom-control-label" for="website_type1">Option 3</label>
                                </div>
                            </label>
                            <label class="btn btn-primary">
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="customRadio5" name="answer" value="4" class="custom-control-input" @if($qa->answer == 4) checked @endif>
                                    <label class="custom-control-label" for="website_type2">Option 4</label>
                                </div>
                            </label>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary btn-lg btn-block">Update This One</button>
                </div>
                <!-- End col -->
            </div>
        </form>
    </div>
@endsection
@section('script')
    <!-- Datepicker JS -->
    <script src="{{ asset('assets/plugins/datepicker/datepicker.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datepicker/i18n/datepicker.en.js') }}"></script>
    <script src="{{ asset('assets/js/custom/custom-form-datepicker.js') }}"></script>
@endsection
