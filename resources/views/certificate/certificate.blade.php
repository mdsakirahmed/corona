@section('title')
    {{ $c_information->name }}
@endsection
@extends('layouts.orginal')
@section('style')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="https://files.codepedia.info/files/uploads/iScripts/html2canvas.js"></script>
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
    <!-- End Breadcrumbbar -->
    <!-- Start Contentbar -->
    <div class="contentbar" >
        <section>
            <h4 class="font-22 mb-3 text-center"></h4>
            <div class="row justify-content-center" >
                <!-- Start col-->
                <div class="col-md-12 col-lg-10 col-xl-10" >
                    <div class="card m-b-30">
                        <div class="card-body"  id="html-content-holder" style="background-color: {{ $c_information->background_color }}">
                            <div class="invoice">
                                <link href="https://fonts.googleapis.com/css?family=Satisfy" rel="stylesheet">
                                <div class="crt_container">
                                    <div class="crt_logo">

                                        <img src="">

                                    </div>
                                    <div class="crt_content">
                                        <h1 class="crt_title">
                                            {{ $certificate->certificate }}
                                        </h1>
                                        <h2>{{ $certificate->which_certificate }}</h2>
                                        <h1 class="colorGreen crt_user"> {{ $new_mark->user_name }} </h1>

                                        <h3 class="afterName">
                                           <b>{{ $new_mark->got_mark }}/ {{ $new_mark->total_marks }}</b> {{ $certificate->summary }}
                                        </h3>

                                        <h3>
                                            <span class="colorGrey">
                                                {{ $certificate->award }}
                                            </span>
                                           {{ $new_mark->exam_time }}
                                        </h3>

                                        <div class="signLeft">
                                            @if($certificate->signature1 != null)
                                            <img src="{{ asset('uploads/images/'.$certificate->signature1) }}" alt="signature">
                                            @endif
                                            <h3>{{ $certificate->name1 }}</h3>
                                            <h3>{{ $certificate->designation1 }}</h3>
                                        </div>
                                        <div class="signRight">
                                            @if($certificate->signature2 != null)
                                                <img src="{{ asset('uploads/images/'.$certificate->signature2) }}" alt="signature">
                                            @endif
                                            <h3>{{ $certificate->name2 }}</h3>
                                            <h3>{{ $certificate->designation2 }}</h3>
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>
                        <div class="invoice-footer">
                            <div class="row align-items-center">
                                <div class="col-md-6">
                                    <p class="mb-0"></p>
                                </div>
                                <div class="col-md-6">
                                    <div class="invoice-footer-btn">
                                        <a href="javascript:window.print()" class="btn btn-primary-rgba py-1 font-16"><i class="feather icon-printer mr-2"></i>Print</a>
                                        <a href="#" id="btn-Convert-Html2Image" class="btn btn-success-rgba py-1 font-16"><i class="feather icon-send mr-2"></i>Download</a>
                                        <input id="btn-Preview-Image" type="button" onclick="myFunction()" value="Convert ti image"  class="btn btn-success-rgba py-1 font-16">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="previewImage" class="row">
                        </div>
                    </div>
                </div>
                <!-- End col-->
            </div>
            <!-- End col -->
        </section>
    </div>


@endsection
@section('script')
    <script !src="">
        document.getElementById("btn-Convert-Html2Image").style.visibility = "hidden";
        function myFunction() {
            document.getElementById("btn-Convert-Html2Image").style.visibility = "visible";
        }
    </script>
    <script>
        $(document).ready(function(){


            var element = $("#html-content-holder"); // global variable
            var getCanvas; // global variable

            $("#btn-Preview-Image").on('click', function () {
                html2canvas(element, {
                    onrendered: function (canvas) {
                        $("#previewImage").append(canvas);
                        getCanvas = canvas;
                    }
                });
            });

            $("#btn-Convert-Html2Image").on('click', function () {
                var imgageData = getCanvas.toDataURL("image/png");
                // Now browser starts downloading it instead of just showing it
                var newData = imgageData.replace(/^data:image\/png/, "data:application/octet-stream");
                $("#btn-Convert-Html2Image").attr("download", "Certificate.png").attr("href", newData);
            });

        });

    </script>
@endsection
