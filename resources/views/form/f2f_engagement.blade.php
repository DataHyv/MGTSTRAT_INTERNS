    @section('title', 'F2F Engagement Form')
{{-- <link rel="shortcut icon" type="image/png" href="{{ URL::to('assets/images/logo/logo.png') }}"> --}}
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.css">
<link rel="stylesheet" href="{{ URL::asset('css/custom.css') }}">
@extends('layouts.master')
@section('menu')
    @extends('sidebar.dashboard')
@endsection
@section('content')
    <div id="main">
        @include('headers.header')
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>F2F Engagement</h3>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">F2F Engagement</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>

        {{-- message --}}
        {!! Toastr::message() !!}
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

        {{-- card body --}}
        <div class="col-12">
            {{-- card --}}
            <div class="card">
                {{-- card content --}}
                <div class="card-content">
                    {{-- card body --}}
                    <div class="card-body">

                        {{-- Budget form --}}
                        <form class="form form-horizontal multisteps-form__form"
                            action="{{ route('form/f2f_engagement/new') }}" method="POST" autocomplete="off">
                            @csrf

                            {{-- INFORMATION --}}
                            <div class="multisteps-form__panel js-active" data-animation="slideHorz">
                                @include('form.components.f2f_engagement.f2f_information')
                                {{-- next button --}}
                                <div class="col-12 d-flex justify-content-center mt-3">
                                    <button class="btn btn-primary ml-auto js-btn-next" type="button"
                                        title="Next">Next</button>
                                </div>
                            </div>

                            {{-- ENGAGEMENT FEES --}}
                            <div class="multisteps-form__panel" data-animation="slideHorz">
                                @include('form.components.f2f_engagement.f2f_engagementFees')
                                {{-- next and prev button --}}
                                <div class="button-row d-flex justify-content-center mt-3">
                                    <button class="btn btn-secondary mx-2 js-btn-prev" type="button"
                                        title="Prev">Prev</button>
                                    <button class="btn btn-primary mx-2 js-btn-next" type="button"
                                        title="Next">Next</button>
                                </div>
                            </div>

                            {{-- ENGAGEMENT COST --}}
                            <div class="multisteps-form__panel" data-animation="slideHorz">
                                @include('form.components.f2f_engagement.f2f_engagementCost')
                                {{-- next and prev button --}}
                                <div class="col-12 d-flex justify-content-center mt-3">
                                    <button class="btn btn-secondary mx-2 js-btn-prev" type="button"
                                        title="Prev">Prev</button>
                                    <button class="btn btn-primary mx-2 js-btn-next" type="button"
                                        title="Next">Next</button>
                                </div>
                            </div>

                            {{-- PROFIT FORECAST --}}
                            <div class="multisteps-form__panel" data-animation="slideHorz">
                                @include('form.components.f2f_engagement.f2f_profit_forecast')
                                {{-- prev and submit button --}}
                                <div class="col-12 d-flex justify-content-center mt-3">
                                    <button class="btn btn-secondary mx-2 js-btn-prev" type="button"
                                        title="Prev">Prev</button>
                                    {{-- <button class="btn btn-success mx-2 js-btn-next" type="submit" title="Submit">Submit</button> --}}
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>


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

    </div>

    {{-- F2F ENGAGEMENT SCRIPT --}}
    <script type="text/javascript" src="/js/f2fform.js"></script>
    <script type="text/javascript" src="/js/MultiStep.js"></script>
    <script type="text/javascript" src="/js/currencyFormat.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.js"></script>
@endsection
