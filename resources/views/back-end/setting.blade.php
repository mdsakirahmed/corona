@section('title')
    Theta - My Account
@endsection
@extends('layouts.main')
@section('style')
@section('style')
    <!-- Font Awesomr CDN by sakir -->
    <script src="https://use.fontawesome.com/eb6c3d0f96.js"></script>
    <!-- Color Picker css -->
    <link href="{{ asset('assets/plugins/colorpicker/bootstrap-colorpicker.css') }}" rel="stylesheet" type="text/css">
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
        <div class="row">
            <!-- Start col -->
            <div class="col-lg-5 col-xl-3">
                <div class="card m-b-30">
                    <div class="card-header">
                        <h5 class="card-title mb-0">My Account</h5>
                    </div>
                    <div class="card-body">
                        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                            <a class="nav-link mb-2 active" id="v-pills-general-tab" data-toggle="pill" href="#v-pills-general" role="tab" aria-controls="v-pills-general" aria-selected="true"><i class="feather icon-grid mr-2"></i>General</a>
                            <a class="nav-link mb-2" id="v-pills-social-tab" data-toggle="pill" href="#v-pills-social" role="tab" aria-controls="v-pills-social" aria-selected="false"><i class="feather icon-package mr-2"></i>Social Link</a>
                            <a class="nav-link mb-2" id="v-pills-number-tab" data-toggle="pill" href="#v-pills-number" role="tab" aria-controls="v-pills-number" aria-selected="false"><i class="feather icon-map-pin mr-2"></i>Number</a>
                            <a class="nav-link mb-2" id="v-pills-email-tab" data-toggle="pill" href="#v-pills-email" role="tab" aria-controls="v-pills-email" aria-selected="false"><i class="feather icon-heart mr-2"></i>Email</a>
                            <a class="nav-link mb-2" id="v-pills-office-tab" data-toggle="pill" href="#v-pills-office" role="tab" aria-controls="v-pills-office" aria-selected="true"><i class="feather icon-credit-card mr-2"></i>Office</a>
                             <a class="nav-link mb-2" id="v-pills-mailer-tab" data-toggle="pill" href="#v-pills-mailer" role="tab" aria-controls="v-pills-mailer" aria-selected="false"><i class="feather icon-bell mr-2"></i>Mailer</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End col -->
            <!-- Start col -->
            <div class="col-lg-7 col-xl-9">
                <div class="tab-content" id="v-pills-tabContent">
                    <!-- My General Start -->
                    <div class="tab-pane fade show active" id="v-pills-general" role="tabpanel" aria-labelledby="v-pills-general-tab">
                        <form action="{{ route('CommonInformationOfWebsiteEdit') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="card m-b-30">
                                <div class="card-header">
                                    <h5 class="card-title mb-0">General Information</h5>
                                </div>
                                <div class="card-body">
                                    <!--Power-->
                                    <div class="col-md-12 text-center">
                                        <div class="form-group">
                                            <h4 class="card-title">Power Status</h4>
                                            <div class="btn-group" data-toggle="buttons">
                                                <label class="btn btn-primary active">
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" id="customRadio4" name="status" value="1" class="custom-control-input" @if($c_information->status==1)checked @endif>
                                                        <label class="custom-control-label" for="time_date1">Enable</label>
                                                    </div>
                                                </label>
                                                <label class="btn btn-primary">
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" id="customRadio5" name="status" value="0" class="custom-control-input" @if($c_information->status==0)checked @endif>
                                                        <label class="custom-control-label" for="time_date2">Disable</label>
                                                    </div>
                                                </label>
                                            </div>
                                            <br>
                                            <small style="color: red">*All frontend site will be off/on</small>
                                        </div>
                                    </div>
                                    <!--Image-->
                                    <div class="profilebox pt-4 text-center">
                                        <ul class="list-inline">
                                            <li class="list-inline-item">
                                                @if($c_information->logo != null)
                                                    <img src="{{ asset('uploads/images/'.$c_information->logo) }}" class="img-fluid" alt="profile">
                                                @endif
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="{{ route('BackEndControllerSetting') }}" class="btn btn-success-rgba font-18"><i class="feather icon-crosshair"></i></a>
                                            </li>
                                            <li class="list-inline-item">
                                                @if($c_information->favicon != null)
                                                    <img src="{{ asset('uploads/images/'.$c_information->favicon) }}" class="img-fluid" alt="profile">
                                                @endif
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <h6 class="card-subtitle">Try to use good image for this logo & fav</h6>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="inputGroupFileAddon01">Favicon</span>
                                        </div>
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01" name="favicon" value="{{ $c_information->favicon }}">
                                            <label class="custom-file-label" for="inputGroupFile01">Choose image</label>
                                        </div>
                                    </div>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="inputGroupFileAddon01">#Logo</span>
                                        </div>
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01" name="logo" value="{{ $c_information->logo }}">
                                            <label class="custom-file-label" for="inputGroupFile01">Choose image</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card m-b-30">
                                <div class="card-header">
                                    <h5 class="card-title mb-0">Edit Profile Information</h5>
                                </div>
                                <div class="card-body">

                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="name">Website Name</label>
                                            <input type="text" class="form-control" id="name" name="name" value="{{ $c_information->name }}">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="domain">Domain</label>
                                            <input type="text" class="form-control" id="domain" name="domain" value="{{ $c_information->domain }}">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-12">
                                            <label for="copyright">Copy Right</label>
                                            <input type="text" class="form-control" id="copyright" name="copy_right" value="{{ $c_information->copy_right }}">
                                        </div>
                                    </div>
                                    <!-- Start row color-->
                                    <div class="row">
                                        <!-- End col -->
                                        <div class="col-lg-6">
                                            <div class="card m-b-30">
                                                <div class="card-header">
                                                    <h5 class="card-title">Background Color</h5>
                                                </div>
                                                <div class="card-body">
                                                    <h6 class="card-subtitle">Most simple example, with any options or color information.</h6>
                                                    <input id="default-color" type="text" class="form-control input-lg" name="background_color" value="{{ $c_information->background_color }}"/>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End col -->
                                        <!-- Start col -->
                                        <div class="col-lg-6">
                                            <div class="card m-b-30">
                                                <div class="card-header">
                                                    <h5 class="card-title">Support Bar Color</h5>
                                                </div>
                                                <div class="card-body">
                                                    <h6 class="card-subtitle">Most simple example, with any options or color information.</h6>
                                                    <input id="rgb-color" type="text" class="form-control input-lg" name="support_bar_color" value="{{ $c_information->support_bar_color }}"/>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End col -->
                                        <!-- Start col -->
                                        <div class="col-lg-6">
                                            <div class="card m-b-30">
                                                <div class="card-header">
                                                    <h5 class="card-title">Nav Bar Color</h5>
                                                </div>
                                                <div class="card-body">
                                                    <h6 class="card-subtitle">Usage input <code>data-color</code> attribute, colopicker element <code>data-color</code> attribute.</h6>
                                                    <div id="initial-color" class="input-group" title="Using input value">
                                                        <input type="text" class="form-control input-lg" name="nav_bar_color" value="{{ $c_information->nav_bar_color }}"/>
                                                        <span class="input-group-append">
                        <span class="input-group-text colorpicker-input-addon"><i></i></span>
                      </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End col -->
                                        <!-- Start col -->
                                        <div class="col-lg-6">
                                            <div class="card m-b-30">
                                                <div class="card-header">
                                                    <h5 class="card-title">Banner Background</h5>
                                                </div>
                                                <div class="card-body">
                                                    <h6 class="card-subtitle">Usage input <code>data-color</code> attribute, colopicker element <code>data-color</code> attribute.</h6>
                                                    <div id="initial-rgb-color" class="input-group" title="Using input value">
                                                        <input type="text" class="form-control input-lg" name="banner_color" value="{{ $c_information->banner_color }}"/>
                                                        <span class="input-group-append">
                        <span class="input-group-text colorpicker-input-addon"><i></i></span>
                      </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End col -->
                                        <!-- Start col -->
                                        <div class="col-lg-6">
                                            <div class="card m-b-30">
                                                <div class="card-header">
                                                    <h5 class="card-title">Footer Color</h5>
                                                </div>
                                                <div class="card-body">
                                                    <h6 class="card-subtitle">In this mode the hue and alpha bars are horizontal instead of vertical.</h6>
                                                    <div id="horizontal-color" class="input-group" title="Using input value">
                                                        <input type="text" class="form-control input-lg" name="footer_color" value="{{ $c_information->footer_color }}"/>
                                                        <span class="input-group-append">
                        <span class="input-group-text colorpicker-input-addon"><i></i></span>
                      </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End col -->
                                        <!-- Start col -->
                                        <div class="col-lg-6">
                                            <div class="card m-b-30">
                                                <div class="card-header">
                                                    <h5 class="card-title">Special Color</h5>
                                                </div>
                                                <div class="card-body">
                                                    <h6 class="card-subtitle">Example showing the <code>transparent</code> named color support.</h6>
                                                    <div id="transparent-color" class="input-group" title="Using input value">
                                                        <input type="text" class="form-control input-lg" name="special_color" value="{{ $c_information->special_color }}"/>
                                                        <span class="input-group-append">
                        <span class="input-group-text colorpicker-input-addon"><i></i></span>
                      </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End col -->
                                    </div>
                                    <!-- End row color-->
                                    <button type="submit" class="btn btn-primary btn-lg btn-block">SUBMIT STYLE SETTING </button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- My General End -->
                    <!-- My Social Start -->
                    <div class="tab-pane fade" id="v-pills-social" role="tabpanel" aria-labelledby="v-pills-social-tab">
                        <div class="card m-b-30">
                            <div class="card-header">
                                <h5 class="card-title mb-0">My Orders</h5>
                            </div>
                            <div class="card-body">
                                <form action="{{ route('SocialMediaLinkOfWebsiteControllerStore') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <!--###############SOCIAL MEDIA, NAME ICON LINK ##################-->
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group has-success">
                                                <h4 class="card-title">NAME</h4>
                                                <input type="text" id="firstName" class="form-control" placeholder="Facebook" name="name" value="{{ old('name') }}">
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="form-group has-success">
                                                <h4 class="card-title">ICON</h4>
                                                <input type="text" id="firstName" class="form-control" placeholder="fa fa-android" name="icon" value="{{ old('icon') }}">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group has-success">
                                                <h4 class="card-title">LINK</h4>
                                                <input type="text" id="firstName" class="form-control" placeholder="https://www.facebook.com/datatechbdltd/" name="link" value="{{ old('link') }}">
                                            </div>
                                        </div>
                                    </div>
                                    <!--###############SUBMIT##################-->
                                    <div class="row">
                                        <!--/Facebook-->
                                        <div class="col-md-3">
                                        </div>
                                        <div class="col-md-6 text-center">
                                            <button type="submit" class="col-4 btn waves-effect waves-light btn-lg btn-primary">SUBMIT</button>
                                            <button type="button" class="col-4 btn waves-effect waves-light btn-lg btn-secondary">CANCEL</button>
                                        </div>
                                        <div class="col-md-3">
                                        </div>
                                    </div>
                                    <hr>
                                </form>
                            </div>
                            <!-- Start col -->
                            <div class="col-lg-12">
                                <div class="card m-b-30">
                                    <div class="card-body">
                                        <h6 class="card-subtitle">Export data to Copy, CSV, Excel & Note.</h6>
                                        <div class="table-responsive">
                                            <table class="table table-striped table-bordered">
                                                <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Name</th>
                                                    <th>Icon</th>
                                                    <th>Social Link</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach ($social as $social)
                                                    <tr class="@if ($social->id % 2 ==  0) {{'table-success'}} @else {{'table-info'}} @endif ">
                                                        <td scope="row">{{ $social->id }}</td>
                                                        <td>{{ $social->name }}</td>
                                                        <td><i class="{{ $social->icon }}"></i></td>
                                                        <td>{{ $social->link }}</td>
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
                    </div>
                    <!-- My Social End -->
                    <!-- My Number Start -->
                    <div class="tab-pane fade" id="v-pills-number" role="tabpanel" aria-labelledby="v-pills-number-tab">
                        <div class="card m-b-30">
                            <div class="card-header">
                                <h5 class="card-title mb-0">My Addresses</h5>
                            </div>
                            <div class="card-body">
                                <form action="{{ route('ContactNumberOfWebsiteControllerStore') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <!--###############SOCIAL MEDIA, NAME ICON LINK ##################-->
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group has-success">
                                                <h4 class="card-title">NAME</h4>
                                                <input type="text" id="firstName" class="form-control" placeholder="Official" name="name" value="{{ old('name') }}">
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="form-group has-success">
                                                <h4 class="card-title">ICON</h4>
                                                <input type="text" id="firstName" class="form-control" placeholder="fa fa-phone" name="icon" value="{{ old('icon') }}">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group has-success">
                                                <h4 class="card-title">CONTACT NUMBER</h4>
                                                <input type="text" id="firstName" class="form-control" placeholder="+880 1304 734623" name="number" value="{{ old('link') }}">
                                            </div>
                                        </div>
                                    </div>
                                    <!--###############SUBMIT##################-->
                                    <div class="row">
                                        <!--/Facebook-->
                                        <div class="col-md-3">
                                        </div>
                                        <div class="col-md-6 text-center">
                                            <button type="submit" class="col-4 btn waves-effect waves-light btn-lg btn-primary">SUBMIT</button>
                                            <button type="button" class="col-4 btn waves-effect waves-light btn-lg btn-secondary">CANCEL</button>
                                        </div>
                                        <div class="col-md-3">
                                        </div>
                                    </div>
                                    <hr>
                                </form>
                            </div>
                            <!-- Start col -->
                            <div class="col-lg-12">
                                <div class="card m-b-30">
                                    <div class="card-body">
                                        <h6 class="card-subtitle">Export data to Copy, CSV, Excel & Note.</h6>
                                        <div class="table-responsive">
                                            <table class="table table-striped table-bordered">
                                                <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Name</th>
                                                    <th>Icon</th>
                                                    <th>Number</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach ($number as $number)
                                                    <tr class="@if ($number->id % 2 ==  0) {{'table-success'}} @else {{'table-info'}} @endif ">
                                                        <td scope="row">{{ $number->id }}</td>
                                                        <td>{{ $number->name }}</td>
                                                        <td><i class="{{ $number->icon }}"></i></td>
                                                        <td>{{ $number->number }}</td>
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
                    </div>
                    <!-- My Number End -->
                    <!-- My Email Start -->
                    <div class="tab-pane fade" id="v-pills-email" role="tabpanel" aria-labelledby="v-pills-email-tab">
                        <div class="card m-b-30">
                            <div class="card-header">
                                <h5 class="card-title mb-0">Email</h5>
                            </div>
                            <div class="card-body">
                                <form action="{{ route('EmailAddressOfWebsiteControllerStore') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <!--###############SOCIAL MEDIA, NAME ICON LINK ##################-->
                                    <div class="row">
                                        <!--*************DOMAIN Start-->
                                        <div class="col-md-6">
                                            <div class="form-group has-success">
                                                <h4 class="card-title">NAME</h4>
                                                <input type="text" id="firstName" class="form-control" placeholder="Official" name="name" value="{{ old('name') }}">
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="form-group has-success">
                                                <h4 class="card-title">ICON</h4>
                                                <input type="text" id="firstName" class="form-control" placeholder="fa fa-phone" name="icon" value="{{ old('icon') }}">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group has-success">
                                                <h4 class="card-title">Email</h4>
                                                <input type="email" id="firstName" class="form-control" placeholder="info@datatechbd.com" name="email" value="{{ old('email') }}">
                                            </div>
                                        </div>
                                    </div>
                                    <!--###############SUBMIT##################-->
                                    <div class="row">
                                        <div class="col-md-3">
                                        </div>
                                        <div class="col-md-6 text-center">
                                            <button type="submit" class="col-4 btn waves-effect waves-light btn-lg btn-primary">SUBMIT</button>
                                            <button type="button" class="col-4 btn waves-effect waves-light btn-lg btn-secondary">CANCEL</button>
                                        </div>
                                        <div class="col-md-3">
                                        </div>
                                    </div>
                                    <hr>
                                </form>
                            </div>
                            <!-- Start col -->
                            <div class="col-lg-12">
                                <div class="card m-b-30">
                                    <div class="card-body">
                                        <h6 class="card-subtitle">Export data to Copy, CSV, Excel & Note.</h6>
                                        <div class="table-responsive">
                                            <table class="table table-striped table-bordered">
                                                <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Name</th>
                                                    <th>Icon</th>
                                                    <th>Contact Email</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach ($email as $email)
                                                    <tr class="@if ($email->id % 2 ==  0) {{'table-success'}} @else {{'table-info'}} @endif ">
                                                        <td scope="row">{{ $email->id }}</td>
                                                        <td>{{ $email->name }}</td>
                                                        <td><i class="{{ $email->icon }}"></i></td>
                                                        <td>{{ $email->email }}</td>
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
                    </div>
                    <!-- My Email End -->
                    <!-- My Office Start -->
                    <div class="tab-pane fade" id="v-pills-office" role="tabpanel" aria-labelledby="v-pills-office-tab">
                        <div class="card m-b-30">
                            <div class="card-header">
                                <h5 class="card-title mb-0">My Addresses</h5>
                            </div>
                            <div class="card-body">
                                <form action="{{ route('OfficialAddressOfWebsiteControllerStore') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <!--###############SOCIAL MEDIA, NAME ICON LINK ##################-->
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group has-success">
                                                <h4 class="card-title">NAME</h4>
                                                <input type="text" id="firstName" class="form-control" placeholder="Official" name="name" value="{{ old('name') }}">
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="form-group has-success">
                                                <h4 class="card-title">ICON</h4>
                                                <input type="text" id="firstName" class="form-control" placeholder="fa fa-phone" name="icon" value="{{ old('icon') }}">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group has-success">
                                                <h4 class="card-title">Address</h4>
                                                <input type="text" id="firstName" class="form-control" placeholder="42/1 Segunbagicha, Dhaka-1000" name="address" value="{{ old('address') }}">
                                            </div>
                                        </div>
                                    </div>
                                    <!--###############SUBMIT##################-->
                                    <div class="row">
                                        <div class="col-md-3">
                                        </div>
                                        <div class="col-md-6 text-center">
                                            <button type="submit" class="col-4 btn waves-effect waves-light btn-lg btn-primary">SUBMIT</button>
                                            <button type="button" class="col-4 btn waves-effect waves-light btn-lg btn-secondary">CANCEL</button>
                                        </div>
                                        <div class="col-md-3">
                                        </div>
                                    </div>
                                    <hr>
                                </form>
                            </div>
                            <!-- Start col -->
                            <div class="col-lg-12">
                                <div class="card m-b-30">
                                    <div class="card-body">
                                        <h6 class="card-subtitle">Export data to Copy, CSV, Excel & Note.</h6>
                                        <div class="table-responsive">
                                            <table class="table table-striped table-bordered">
                                                <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Name</th>
                                                    <th>Icon</th>
                                                    <th>Address</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach ($address as $address)
                                                    <tr class="@if ($address->id % 2 ==  0) {{'table-success'}} @else {{'table-info'}} @endif ">
                                                        <td scope="row">{{ $address->id }}</td>
                                                        <td>{{ $address->name }}</td>
                                                        <td><i class="{{ $address->icon }}"></i></td>
                                                        <td>{{ $address->address }}</td>
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
                    </div>
                    <!-- My Office End -->
                    <!-- My Mailer Start -->
                    <div class="tab-pane fade" id="v-pills-mailer" role="tabpanel" aria-labelledby="v-pills-mailer-tab">
                        <div class="card m-b-30">
                            <div class="card-header">
                                <h5 class="card-title mb-0">My Addresses</h5>
                            </div>
                            <div class="card-body">
                                <form action="{{ route('CommonInformationOfWebsiteEdit') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <!--###############WEBSITE STATUS##################-->
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <h4 class="card-title">Email Notification</h4>
                                                <div class="btn-group" data-toggle="buttons">
                                                    <label class="btn btn-primary active">
                                                        <div class="custom-control custom-radio">
                                                            <input type="radio" id="customRadio4" name="receive_status" value="1" class="custom-control-input" @if($info_sender->receive_status==1)checked @endif>
                                                            <label class="custom-control-label" for="time_date1">Enable</label>
                                                        </div>
                                                    </label>
                                                    <label class="btn btn-primary">
                                                        <div class="custom-control custom-radio">
                                                            <input type="radio" id="customRadio5" name="receive_status" value="0" class="custom-control-input" @if($info_sender->receive_status==0)checked @endif>
                                                            <label class="custom-control-label" for="time_date2">Disable</label>
                                                        </div>
                                                    </label>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="form-group has-success">
                                                <h4 class="card-title">Notification Receiver Email</h4>
                                                <input type="text" id="firstName" class="form-control" placeholder="you@gmail.com" name="receiver_email" value="{{ $info_sender->receiver_email }}">
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <!--############### NAME, DOMAIN .. ##################-->
                                    <div class="row">
                                        <!--*************Website Name Start-->
                                        <div class="col-md-4">
                                            <div class="form-group has-success">
                                                <h4 class="card-title">Driver</h4>
                                                <input type="text" id="firstName" class="form-control" placeholder="smtp" name="driver" value="{{ $info_sender->driver }}">
                                            </div>
                                        </div>
                                        <!--*************Website Name End-->
                                        <!--*************DOMAIN Start-->
                                        <div class="col-md-4">
                                            <div class="form-group has-success">
                                                <h4 class="card-title">Host</h4>
                                                <input type="text" id="firstName" class="form-control" placeholder="smtp.datatechbd.com" name="host" value="{{ $info_sender->host }}">
                                            </div>
                                        </div>
                                        <!--*************DOMAIN End-->
                                        <!--*************COPY RIGHT Start-->
                                        <div class="col-md-4">
                                            <div class="form-group has-success">
                                                <h4 class="card-title">Port</h4>
                                                <input type="text" id="firstName" class="form-control" placeholder="465" name="port" value="{{ $info_sender->port }}">
                                            </div>
                                        </div>
                                        <!--*************COPY RIGHT End-->

                                        <!--*************COPY RIGHT Start-->
                                        <div class="col-md-6">
                                            <div class="form-group has-success">
                                                <h4 class="card-title">User Name</h4>
                                                <input type="text" id="firstName" class="form-control" placeholder="info@datatechbd.com" name="user_name" value="{{ $info_sender->user_name }}">
                                            </div>
                                        </div>
                                        <!--*************COPY RIGHT End-->

                                        <!--*************COPY RIGHT Start-->
                                        <div class="col-md-6">
                                            <div class="form-group has-success">
                                                <h4 class="card-title">Password</h4>
                                                <input type="password" id="firstName" class="form-control" placeholder="********" name="copy_right" value="{{ $info_sender->password }}">
                                            </div>
                                        </div>
                                        <!--*************COPY RIGHT End-->

                                        <!--*************COPY RIGHT Start-->
                                        <div class="col-md-6">
                                            <div class="form-group has-success">
                                                <h4 class="card-title">Encryption</h4>
                                                <input type="text" id="firstName" class="form-control" placeholder="tls" name="encryption" value="{{ $info_sender->encryption }}">
                                            </div>
                                        </div>
                                        <!--*************COPY RIGHT End-->

                                        <!--*************COPY RIGHT Start-->
                                        <div class="col-md-6">
                                            <div class="form-group has-success">
                                                <h4 class="card-title">No Reply</h4>
                                                <input type="text" id="firstName" class="form-control" placeholder="noreply@datatechbd.com" name="no_reply" value="{{ $info_sender->no_reply }}">
                                            </div>
                                        </div>
                                        <!--*************COPY RIGHT End-->

                                        <!--###############COLOR##################-->


                                        <!--Website special_color Picker end-->
                                        <!--/span-->
                                    </div>
                                    <!--###############LOGO##################-->
                                    <hr>
                                    <!--###############SUBMIT##################-->
                                    <div class="row">
                                        <!--/Facebook-->
                                        <div class="col-md-3">
                                        </div>
                                        <div class="col-md-6 text-center">
                                            <button type="submit" class="col-4 btn waves-effect waves-light btn-lg btn-primary">SUBMIT</button>
                                            <button type="button" class="col-4 btn waves-effect waves-light btn-lg btn-secondary">CANCEL</button>
                                        </div>
                                        <div class="col-md-3">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- My Mailer End -->
                </div>
            </div>
            <!-- End col -->
        </div>
        <!-- End row -->
    </div>
    <!-- End Contentbar -->
@endsection
@section('script')
    <!-- eCommerce My Account Page js -->
    <script src="{{ asset('assets/js/custom/custom-ecommerce-myaccount.js') }}"></script>
    <!-- Color Picker js -->
    <script src="{{ asset('assets/plugins/colorpicker/bootstrap-colorpicker.js') }}"></script>
    <script src="{{ asset('assets/js/custom/custom-form-colorpicker.js') }}"></script>
    <!-- Tabledit js -->
    <script src="{{ asset('assets/plugins/tabledit/jquery.tabledit.js') }}"></script>
    <script src="{{ asset('assets/js/custom/custom-table-editable.js') }}"></script>
@endsection
