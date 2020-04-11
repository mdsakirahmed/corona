@section('title')
    {{ $c_information->name }}
@endsection

@extends('layouts.orginal')
@section('style')

    <style>
        .myButton {
            box-shadow: 18px 25px 12px 19px #8a2a21;
            background:linear-gradient(to bottom, #c62d1f 5%, #f24437 100%);
            background-color:#c62d1f;
            border-radius:20px;
            display:inline-block;
            cursor:pointer;
            color:#ffffff;
            font-family:Arial;
            text-decoration-style: b;
            padding:32px 32px;
            text-decoration:none;
            text-shadow:0px 4px 0px #810e05;
            font-weight: bold;
        }
        .myButton:hover {
            background:linear-gradient(to bottom, #f24437 5%, #c62d1f 100%);
            background-color:#f24437;
        }
        .myButton:active {
            position:relative;
            top:1px;
        }
    </style>
@endsection
@section('rightbar-content')
    <!-- Start Breadcrumbbar -->
    <!-- End Breadcrumbbar -->
    <!-- Start Contentbar -->
    <div class="">
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
                <div class="card-body" style="background-color: {{ $c_information->background_color }}">
                    <div class="row justify-content-center" style="background-color: {{ $c_information->background_color }}">
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
                                    <h3>*</h3>
                                    <section>
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="card m-b-30">
                                                        <div class="card-body">
                                                            <div class="example-row">
                                                                <div class="grid-example">
                                                                    <div class="row text-center">
                                                                        <!--1of 1st line-->
                                                                        <div class="col-sm-6">
                                                                            <div class="col-sm-12">
                                                                                <input required type="text"class=" text-center" name="user_name" style="  border: none;  border-bottom: 4px solid #8842d5; width: 100%;" value="{{ old('user_name') }}" placeholder="Your Name">
                                                                            </div>
                                                                        </div>
                                                                        <!--2of 1st line-->
                                                                        <div class="col-sm-6">
                                                                            <div class="col-sm-12">
                                                                                <input required type="text"class="text-center" name="user_phone" style="  border: none;  border-bottom: 4px solid #8842d5; width: 100%;" value="{{ old('user_phone') }}" placeholder="Your Phone">
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-12" class="row justify-content-center">
                                                            <input type="submit" href="#" class="myButton text-center" style="width: 100%;" value="Certificate">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End col -->
                                    </section>

                                        <h3>#</h3>
                                    <section>
                                        <h4 class="font-22 mb-3"> </h4>
                                            <div class="row">
                                                <div class="col-sm-12" class="row justify-content-center">
                                                    <input type="submit" href="#" class="myButton text-center" style="width: 100%;" value="Certificate">
                                                </div>
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
