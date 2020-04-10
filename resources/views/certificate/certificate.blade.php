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
        <!-- End row -->
        <!-- End col -->
        <div class="col-lg-12">
            <div class="card m-b-30">
                <div class="card-header">
                </div>
                <div class="card-body">
                    <div class="row justify-content-center">
                        <div class="col-lg-10 col-xl-10">
                            <form id="basic-form-wizard" action="#">
                                <div>
                                    <h3>Q1</h3>
                                    <section>
                                        <h1>Question 1</h1>
                                    </section>

                                    <h3>Q2</h3>
                                    <section>
                                        <h1>Question 2</h1>
                                    </section>

                                    <h3>Q3</h3>
                                    <section>
                                        <h1>Question 3</h1>
                                    </section>
                                    <h3>Q4</h3>
                                    <section>
                                        <h1>Question 4</h1>
                                    </section>
                                    <h3>Q5</h3>
                                    <section>
                                        <h4 class="font-22 mb-3">Let's Finished !!!</h4>
                                        <!-- Start col -->
                                        <div class="row justify-content-center">
                                            <!-- Start col -->
                                            <div class="col-md-12 col-lg-10 col-xl-10">
                                                <div class="card m-b-30">
                                                    <div class="card-body">
                                                        <div class="invoice">
                                                            <link href="https://fonts.googleapis.com/css?family=Satisfy" rel="stylesheet">
                                                            <div class="crt_container">
                                                                <div class="crt_logo">
                                                                    <img src="https://www.davidbenrimon.com/files-wide/uploads/logo-placeholder@2x.png">
                                                                </div>
                                                                <div class="crt_content">
                                                                    <h1 class="crt_title">Cehhhhrtificate Of Completion
                                                                    </h1>
                                                                    <h2>This Certificate is awarded to</h2>
                                                                    <h1 class="colorGreen crt_user">Sohrab Zia</h1>

                                                                    <h3 class="afterName">For his/her completion of  HSE Awareness session
                                                                    </h3>

                                                                    <h3><span class="colorGrey">Awarded on</span> 1st March 2018 </h3>

                                                                    <div class="signLeft">
                                                                        <img src="https://camo.githubusercontent.com/805e05b94844e39d7edd518f492c8599c71835b3/687474703a2f2f692e696d6775722e636f6d2f646e5873344e442e706e67" alt="">
                                                                        <h3>Person Name </h3>
                                                                        <h3>Learning Lead</h3>
                                                                        <h3>Department Name</h3>
                                                                    </div>
                                                                    <div class="signRight">
                                                                        <img src="https://camo.githubusercontent.com/805e05b94844e39d7edd518f492c8599c71835b3/687474703a2f2f692e696d6775722e636f6d2f646e5873344e442e706e67" alt="">
                                                                        <h3>Person Name </h3>
                                                                        <h3>Learning Lead</h3>
                                                                        <h3>Department Name</h3>
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
                                                                            <a href="#" class="btn btn-success-rgba py-1 font-16"><i class="feather icon-send mr-2"></i>Submit</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End col -->
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
