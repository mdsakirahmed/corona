@section('title')
    Theta - Invoice
@endsection
@extends('layouts.orginal')
@section('style')
    <style>
        .crt_container{
            overflow:hidden;
            font-family:arial;
            width:600px;
            height:auto;
            border:15px solid #0072c6;
            border-right:15px solid #0894fb;
            border-left:15px solid #0894fb;
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
    <!-- End Breadcrumbbar -->
    <!-- Start Contentbar -->
    <div class="contentbar">
    <?php
    $TempValue=0;
    ?>
    <!--Validation error show -->
        <div class="text-center">
            @if ($errors->any())
                <div class="alert badge-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            #{{ $error }}
                        @endforeach
                    </ul>
                </div>
            @endif
        <!--Check session message--->
            @if(session()->has('message'))
                <div class="badge badge-pill badge-{{ session('type') }}">
                    {{ session('message') }}
                </div>
            @endif
        </div>
        <!--End-->
        <!-- End row -->
        <!-- End col -->
        <div class="col-lg-12">
            <div class="card m-b-30">
                <div class="card-body">
                    <div class="row justify-content-center">
                        <div class="col-lg-10 col-xl-10">
                            <form id="basic-form-wizard" action="{{ route('CertificateControllerStore') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div>
                                    @foreach($qa as $qa)
                                        <?php
                                        $TempValue++;
                                        ?>
                                    <h3>Q{{ $TempValue }}</h3>
                                    <section>
                                        <div class="custom-radio-button mt-3">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title mt-0"><b>{{ $TempValue }} &nbsp; {{ $qa->question }}</b></h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">(Question)</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="card m-b-30">
                                                            <div class="card-body">
                                                                <div class="example-row">
                                                                    <div class="grid-example">
                                                                        <div class="row text-center">
                                                                            <!--1of 1st line-->
                                                                            <div class="col-sm-1">
                                                                                <div class="form-check-inline radio-success">
                                                                                    <input type="radio" id="customRadioInline7" name="YouNeedToAnswerQuestionNumber{{ $qa->id }}" class="" value="1">
                                                                                    <label for="YouNeedToAnswerQuestionNumber{{ $qa->id }}"></label>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-sm-5">
                                                                                <div class="col-sm-12"><button type="button" class="btn btn-primary btn-lg btn-block">{{ $qa->option1 }}</button></div>
                                                                            </div>
                                                                            <!--2of 1st line-->
                                                                            <div class="col-sm-1">
                                                                                <div class="form-check-inline radio-warning">
                                                                                    <input type="radio" id="customRadioInline9" name="YouNeedToAnswerQuestionNumber{{ $qa->id }}" class="" value="2">
                                                                                    <label for="YouNeedToAnswerQuestionNumber{{ $qa->id }}"></label>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-sm-5">
                                                                                <div class="col-sm-12"><button type="button" class="btn btn-primary btn-lg btn-block">{{ $qa->option2 }}</button></div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <!--1of 1st 2ine-->
                                                                            <div class="col-sm-1">
                                                                                <div class="form-check-inline radio-info">
                                                                                    <input type="radio" id="customRadioInline10" name="YouNeedToAnswerQuestionNumber{{ $qa->id }}" class="" value="3">
                                                                                    <label for="YouNeedToAnswerQuestionNumber{{ $qa->id }}"></label>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-sm-5">
                                                                                <div class="col-sm-12"><button type="button" class="btn btn-primary btn-lg btn-block">{{ $qa->option3 }}</button></div>
                                                                            </div>
                                                                            <!--2of 2st line-->
                                                                            <div class="col-sm-1">
                                                                                <div class="form-check-inline radio-dark">
                                                                                    <input type="radio" id="customRadioInline12" name="YouNeedToAnswerQuestionNumber{{ $qa->id }}" class="" value="4">
                                                                                    <label for="YouNeedToAnswerQuestionNumber{{ $qa->id }}"></label>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-sm-5">
                                                                                <div class="col-sm-12"><button type="button" class="btn btn-primary btn-lg btn-block">{{ $qa->option4 }}</button></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        </div>
                                    </section>
                                    @endforeach
                                    <h3>#</h3>
                                    <section>
                                        <h4 class="font-22 mb-3"> <b>Get a certificate</b> </h4>
                                            <div class="row">
                                                <div class="col-sm-12"><button type="submit" class="btn btn-primary btn-lg btn-block">Certificate</button></div>
                                            </div>
                                        <!-- End col -->
                                    </section>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Contentbar -->
@endsection
@section('script')
    <!-- Form Step js -->
    <script src="{{ asset('assets/plugins/jquery-step/jquery.steps.min.js') }}"></script>
    <script src="{{ asset('assets/js/custom/custom-form-wizard.js') }}"></script>
@endsection
