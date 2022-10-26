@section('title', 'Customized Engagement Form')
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.css">
<link rel="shortcut icon" type="image/png" href="{{ URL::to('assets/images/logo/logo.png') }}">
{{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> --}}
<link rel="stylesheet" href="{{ URL::asset('css/custom.css') }}">
@extends('layouts.master')
@section('menu')
    @extends('sidebar.dashboard')
@endsection
@section('content')
    <div class="customized-engagement" id="main">
        @include('headers.header')
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Customized Engagement</h3>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{ route('home') }}">Dashboard</a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="{{ route('form/customizedEngagement/detail') }}">View</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                <a href="">Customized Engagement</a>
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>

        {{-- message --}}
        {!! Toastr::message() !!}
        <!--progress bar-->
        <div class="multisteps-form">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-8 ml-auto mr-auto mb-4">
                    <div class="multisteps-form__progress">
                        <button class="multisteps-form__progress-btn js-active" type="button"
                            title="User Info">Information</button>
                        <button class="multisteps-form__progress-btn" type="button" title="Engagement Fees">Engagement
                            Fees</button>
                        <button class="multisteps-form__progress-btn" type="button" title="Engagement Cost">Engagement
                            Cost</button>
                        <button class="multisteps-form__progress-btn" type="button" title="Profit Forecast">Profit Forecast
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!------------ CARD BODY ------------>
            <div class="col-12 col-md-12 col-sm-12">
                {{-- card --}}
                <div class="card">

                    {{-- testing tabs --}}
                    {{-- <div class="d-flex flex-row">
                        <ul class="nav nav-tabs" id="ceTabs" role="tablist">

                            <li class="nav-item js-btn-next">
                            <a class="nav-link active" id="batch1" data-bs-toggle="tab" href="#batches1" role="tab"  aria-controls="batches1" aria-selected="true">Batch 1</a>
                            </li>

                        </ul>
                        <ul class="nav nav-tabs">
                            <li class="nav-item">
                                <a href="javascript:void(0)" class="text-success nav-link font-18 px-3" title="Add" tabindex="-1"
                                id="AddTabs"><i class="fa fa-plus mt-1"></i></a>
                            </li>
                        </ul>
                    </div> --}}
                    {{-- end testing tabs --}}

                    {{-- card content --}}
                    {{-- <div class="tab-content"> --}}
                        {{-- <div class="card-content tab-pane fade show active" id="batches1" role="tabpanel" aria-labelledby="batch1"> --}}
                            {{-- card body --}}
                            <div class="card-body">

                                <!------------ BUDGET FORM ------------>
                                    <form class="form form-horizontal multisteps-form__form" action="{{ route('update') }}"
                                        method="POST" autocomplete="off">
                                        @csrf
                                        @method('PUT')

                                        <input class="form-control" type="hidden" id="id" name="id" value="{{$data->id}}">
                                        <input class="form-control" type="hidden" id="cstmzd_eng_form_id" name="cstmzd_eng_form_id" value="{{$data->cstmzd_eng_form_id}}">
                                        <!------------ INFORMATION ------------>
                                            <div class="multisteps-form__panel js-active" data-animation="slideHorz">
                                                @include('form.components.customized_engagement.update.ce_update_information')
                                                {{-- next button --}}
                                                <div class="col-12 d-flex justify-content-center mt-3">
                                                    <button class="btn btn-primary ml-auto js-btn-next" type="button" title="Next">Next</button>
                                                </div>
                                            </div>

                                        <!------------ ENGAGEMENT FEES ------------>
                                            <div class="multisteps-form__panel" data-animation="slideHorz">
                                                @include('form.components.customized_engagement.update.ce_update_engagementFees')
                                                {{-- next and prev button --}}
                                                <div class="button-row d-flex justify-content-center mt-3">
                                                    <button class="btn btn-secondary mx-2 js-btn-prev" type="button" title="Prev">Prev</button>
                                                    <button class="btn btn-primary mx-2 js-btn-next" type="button" title="Next">Next</button>
                                                </div>
                                            </div>

                                        <!------------ ENGAGEMENT COST ------------>
                                            <div class="multisteps-form__panel" data-animation="slideHorz">
                                                @include('form.components.customized_engagement.update.ce_update_engagementCost')
                                                {{-- next and prev button --}}
                                                <div class="col-12 d-flex justify-content-center mt-3">
                                                    <button class="btn btn-secondary mx-2 js-btn-prev" type="button" title="Prev">Prev</button>
                                                    <button class="btn btn-primary mx-2 js-btn-next" type="button" title="Next">Next</button>
                                                </div>
                                            </div>

                                        <!------------ PROFIT FORECAST ------------>
                                            <div class="multisteps-form__panel" data-animation="slideHorz">
                                                @include('form.components.customized_engagement.update.ce_update_profitForecast')
                                                {{-- prev and submit button --}}
                                                <div class="col-12 d-flex justify-content-center mt-3">
                                                    <button class="btn btn-secondary mx-2 js-btn-prev" type="button" title="Prev">Prev</button>
                                                    <button class="btn btn-success mx-2 js-btn-next" type="submit" title="Submit">Submit</button>
                                                </div>
                                            </div>
                                    </form>
                            </div>
                        </div>

                        {{-- <div class="card-content tab-pane fade" id="batches2" role="tabpanel" aria-labelledby="batch2">
                            <div class="card-body">
                                <h1>hello batch 2</h1>
                            </div>
                        </div> --}}
                    {{-- </div> --}}
                </div>
            </div>
        <!------------ END OF CARD BODY ------------>

        <!------------ FOOTER ------------>
            <footer>
                <div class="footer clearfix mb-0 text-muted">
                    <div class="float-end">
                        <p><script>document.write(new Date().getFullYear());</script> Copyright &copy MGT-STRAT</p>
                    </div>
                    {{-- <div class="float-end">
                        <p>Crafted with <span class="text-danger"><i class="bi bi-heart"></i></span> by <a
                                href="#">MGT-STRAT</a></p>
                    </div> --}}
                </div>
            </footer>
        <!------------ END OF FOOTER ------------>
    </div>

    {{-- AJAX DELETE ROW SCRIPT --}}
    <script>
    $(".remove").on("click", function(e){
        var id = $(this).attr("data-id");
        $.ajax({
            url: "{{ route('delete') }}",
            data: {"id": id,"_token": "{{ csrf_token() }}"},
            type: 'post',
            success: function(result){
            toastr.warning('Data deleted successfully','Success');
            }
        });
    });

    // $('document').ready(function() {
    //     var tabs = 1;
    //     $("#AddTabs").on("click", function() {
    //         // Adding a row inside the tbody.
    //         $("#ceTabs").append(`
    //             <li class="nav-item">
    //                 <a class="nav-link"
    //                 href="#batches${++tabs}"
    //                 id="batch${tabs}"
    //                 data-bs-toggle="tab"
    //                 role="tab"
    //                 aria-controls="batches${tabs}"
    //                 aria-selected="false">
    //                     Batch ${tabs}
    //                 </a>
    //             </li>
    //         `);
    //     });
    // });
    </script>

    <script type="text/javascript" src="/js/ceform.js"></script>
    <script type="text/javascript" src="/js/ceFormUpdate.js"></script>
    <script type="text/javascript" src="/js/MultiStep.js"></script>
    <script type="text/javascript" src="/js/currencyFormat.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.js"></script>
@endsection
