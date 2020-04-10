@section('title')
    {{ $c_information->name }}
@endsection

@extends('layouts.orginal')
@section('style')
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
