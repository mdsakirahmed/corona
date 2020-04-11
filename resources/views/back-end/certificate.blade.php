@section('title')
    {{ $c_information->name }}
@endsection
@extends('layouts.main')
@section('style')
    <!-- Color Picker css -->
    <link href="{{ asset('assets/plugins/colorpicker/bootstrap-colorpicker.css') }}" rel="stylesheet" type="text/css">
    <style>
        .crt_container{
            background-color: {{ $certificate->background_color }};
        }
        .crt_container{
            overflow:hidden;
            font-family:arial;
            width:600px;
            height:auto;
            border:15px solid {{ $certificate->site_bar_color }};
            border-right:15px solid {{ $certificate->site_bar_color }};
            border-left:15px solid {{ $certificate->site_bar_color }};
            margin:auto;
            display:table;
            padding:25px 10px;
            position:relative;
        }

        .crt_logo{
            margin:auto;
            display:inline-block;
            width:100%;
            padding:10px;
            text-align:center;
        }
        .crt_logo img{
            width:100px;

        }
        .crt_user{
            display:inline-block;
            width:80%;
            padding:5px 25px;
            margin-bottom:0px;
            padding-bottom:0px;
            font-family: 'Satisfy', cursive;
            font-size:40px;
            border-bottom:1px dashed #cecece;
        }
        .crt_title{
            margin-top:40px;
            font-family: 'Satisfy', cursive;
            font-size:40px;
            letter-spacing:1px;
        }
        .crt_content{
            text-align:center;
        }
        .crt_content h1{
            color:#0072c6;
        }
        h1.colorGreen{
            color:#27ae60;
        }
        .crt_content h3 .colorGrey{
            color:grey;
        }
        .crt_content h2{
            color:#383737;
        }
        .crt_content h3{
            font-weight:100;
        }
        h3.afterName{
            font-weight:100;
            color:#383737;


        }
        .signLeft{
            float:left;
        }
        .signLeft,.signRight{
            width:48%;
            margin-top:40px;
        }
        .signLeft img,.signRight img{
            width:150px;
            margin-bottom:10px;
        }
        .signRight{
            float:right;
        }
        .signLeft h3,.signRight h3{
            margin:0px;
            margin-bottom:5px;
            font-size:16px;

        }

        .printCrt{
            position:fixed;
            right:10px;
            top:10px;
            z-index:999;
            border:0px solid red;
            background-color:#0072c6;
            color:white;
            width:100PX;
            height:50px;
            border-radius:100px;
            transition:all 0.3s ease;
            font-size:18px;
            letter-spacing:1px;
        }
        .printCrt:hover{
            cursor:pointer;
            background-color:#135688;
            box-shadow:2px 2px 10px 1px rgba(0, 0, 0, 0.25);
        }
    </style>
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
        <form action="{{ route('CertificateSetupControllerCertificateEdit') }}" method="post" enctype="multipart/form-data">
            @csrf
                <!-- *Offer info -->
                <div class="col-sm-12 text-center">
                    <hr>
                    <div class="card-body ">
                        <link href="https://fonts.googleapis.com/css?family=Satisfy" rel="stylesheet">
                        <div class="crt_container">
                            <div class="crt_logo">
                                <img src="https://www.davidbenrimon.com/files-wide/uploads/logo-placeholder@2x.png">
                            </div>
                            <div class="crt_content">
                                <h1 class="crt_title">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon3">Certificate</span>
                                        </div>
                                        <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" placeholder="Certificate Of Completion" value="{{ $certificate->certificate }}" name="certificate">
                                    </div>
                                </h1>
                                <h2>
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" placeholder="This Certificate is awarded to" value="{{ $certificate->which_certificate }}" name="which_certificate">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon3">Which Certificate</span>
                                        </div>
                                    </div>
                                </h2>
                                <h1 class="colorGreen crt_user">Md. Sakir Ahmed</h1>

                                <h3 class="afterName">
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" placeholder=" For his/her completion of  HSE Awareness session" value="{{ $certificate->summary }}" name="summary">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon3">Summary</span>
                                        </div>
                                    </div>
                                </h3>

                                <h3><span class="colorGrey">
                                         <div class="input-group col-sm-6">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon3">Under</span>
                                            </div>
                                            <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" placeholder="Awarded on" value="{{ $certificate->award }}" name="award">
                                        </div>
                                    </span> DD MM YYYY </h3>

                                <div class="signLeft">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="inputGroupFileAddon01">Signature</span>
                                        </div>
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01" value="{{ $certificate->signature1 }}" name="signature1">
                                            <label class="custom-file-label" for="inputGroupFile01">Choose signature</label>
                                        </div>
                                    </div>
                                     <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon3">Name</span>
                                        </div>
                                        <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" placeholder="Cosmic" value="{{ $certificate->name1 }}" name="name1">
                                    </div>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon3">Designation</span>
                                        </div>
                                        <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" placeholder="CEO SoftCare IT" value="{{ $certificate->designation1 }}" name="designation1">
                                    </div>
                                </div>
                                <div class="signRight">
                                    <div class="input-group mb-3">

                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01" value="{{ $certificate->signature2 }}" name="signature2">
                                            <label class="custom-file-label" for="inputGroupFile01">Choose signature</label>
                                        </div>
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="inputGroupFileAddon01">Signature</span>
                                        </div>
                                    </div>
                                     <div class="input-group mb-3">
                                        <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" placeholder="Sakir Ahmed" value="{{ $certificate->name2 }}" name="name2">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon3">Name</span>
                                        </div>
                                    </div>
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" placeholder="CEO DataTEch" value="{{ $certificate->designation2 }}" name="designation2">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon3">Designation</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Start col -->
                    <div class="row">
                    <div class="col-lg-6">
                        <div class="card m-b-30">
                            <div class="card-header">
                                <h5 class="card-title">Certificate background color</h5>
                            </div>
                            <div class="card-body">
                                <h6 class="card-subtitle">Example showing the <code>transparent</code> named color support.</h6>
                                <div id="transparent-color" class="input-group" title="Using input value">
                                    <input type="text" class="form-control input-lg" name="background_color" value="{{ $certificate->background_color }}"/>
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
                                <h5 class="card-title">Certificate site bar color</h5>
                            </div>
                            <div class="card-body">
                                <h6 class="card-subtitle">Usage input <code>data-color</code> attribute, colopicker element <code>data-color</code> attribute.</h6>
                                <div id="initial-rgb-color" class="input-group" title="Using input value">
                                    <input type="text" class="form-control input-lg" name="site_bar_color" value="{{ $certificate->site_bar_color }}"/>
                                    <span class="input-group-append">
                        <span class="input-group-text colorpicker-input-addon"><i></i></span>
                      </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End col -->
                    </div>
                    <hr>
                </div>
                <!-- End col -->
                <button type="submit" class="btn btn-danger btn-lg btn-block">Update Certificate Templete</button>
                <!-- End col -->
        </form>
        <hr>
    </div>



@endsection
@section('script')
    <!-- Color Picker js -->
    <script src="{{ asset('assets/plugins/colorpicker/bootstrap-colorpicker.js') }}"></script>
    <script src="{{ asset('assets/js/custom/custom-form-colorpicker.js') }}"></script>
@endsection
