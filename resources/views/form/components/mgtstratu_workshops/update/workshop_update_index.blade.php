@section('title', 'UPDATE RECORD')
<link rel="shortcut icon" type="image/png" href="{{ URL::to('assets/images/logo/logo.png') }}">
<link rel="stylesheet" href="{{ URL::asset('css/custom.css') }}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2-bootstrap-theme/0.1.0-beta.10/select2-bootstrap.min.css" integrity="sha512-kq3FES+RuuGoBW3a9R2ELYKRywUEQv0wvPTItv3DSGqjpbNtGWVdvT8qwdKkqvPzT93jp8tSF4+oN4IeTEIlQA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" integrity="sha512-nMNlpuaDPrqlEls3IX/Q56H36qvBASwb3ipuo3MxeWbsQB1881ox0cRv7UPTgBlriqoynt35KjEwgGUeUXIPnw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
{{-- datepicker css --}}
<link rel="stylesheet" href="//code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css">
{{-- timepicker css --}}
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.css">
{{-- tooltip css --}}
<link rel="stylesheet" href="{{ url('css/tooltip-css/jquery.mytooltip.min.css') }}">

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
                    <h3>MGTSTRAT-U WORKSHOPS</h3>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page"><a href="{{ route('form/mgtstratu_workshops/index') }}">MgtStrat-U Workshops</a></li>
                            <li class="breadcrumb-item active" aria-current="page">
                                <a href="">Update</a>
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>

        {{-- message --}}
        {!! Toastr::message() !!}

        {{-- progress bar --}}
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

                    @foreach ($data as $key => $item)

                        {{-- Budget form --}}
                        <form class="workshop form form-horizontal multisteps-form__form"
                            action="{{ route('update') }}"
                            method="POST"
                            autocomplete="off" onsubmit="submitForm(event)">
                            @csrf
                            @method('PUT')

                            <input class="form-control" type="hidden" id="id" name="id" value="{{$item->id}}">
                            <input class="form-control" type="hidden" id="workshop_id" name="workshop_id" value="{{$item->workshop_id}}">

                            {{-- INFORMATION --}}
                            <div class="multisteps-form__panel js-active" data-animation="slideHorz">
                                @include('form.components.mgtstratu_workshops.update.workshop_update_information')
                                {{-- next button --}}
                                <div class="col-12 d-flex justify-content-center mt-3">
                                    <button class="btn btn-primary ml-auto js-btn-next" type="button"
                                        title="Next">Next</button>
                                </div>
                            </div>

                            {{-- ENGAGEMENT FEES --}}
                            <div class="multisteps-form__panel" data-animation="slideHorz">
                                @include('form.components.mgtstratu_workshops.update.workshop_update_Efee')
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
                                @include('form.components.mgtstratu_workshops.update.workshop_update_Ecost')
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
                                @include('form.components.mgtstratu_workshops.update.workshop_update_profitForecast')
                                {{-- prev and submit button --}}
                                <div class="col-12 d-flex justify-content-center mt-3">
                                    <button class="btn btn-secondary mx-2 js-btn-prev" type="button"
                                        title="Prev">Prev</button>  
                                    <button class="btn btn-success mx-2 js-btn-next" type="submit" 
                                        title="Submit">Submit</button>
                                </div>
                            </div>
                        </form>

                    @endforeach
                    
                    </div>
                </div>
            </div>
        </div>


        <footer>
            <div class="footer clearfix mb-0 text-muted">
                <div class="float-start">
                    <p>2022 &copy; MGT-STRAT</p>
                </div>
                <div class="float-end">
                    <p>Crafted with <span class="text-danger"><i class="bi bi-heart"></i></span> by <a
                            href="#">MGT-STRAT</a></p>
                </div>
            </div>
        </footer>

    </div>

    {{-- datepicker js --}}
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>
    {{-- timepicker js --}}
    <script src="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.js"></script>
    {{-- tooltip js --}}
    <script src="{{ url('js/tooltipJs/jquery.mytooltip.js') }}"></script>
    <script src="{{ url('js/tooltipJs/demo/script.js') }}"></script>

    {{-- F2F ENGAGEMENT SCRIPT --}}
    <script type="text/javascript" src="/js/workshop.js"></script>
    <script type="text/javascript" src="/js/MultiStep.js"></script>
    <script type="text/javascript" src="/js/currencyFormat.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js" integrity="sha512-2ImtlRlf2VVmiGZsjm9bEyhjGW4dU7B6TNwh/hx/iSByxNENtj3WVE6o/9Lj4TJeVXPi4bnOIMXFIJJAeufa0A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.full.min.js" integrity="sha512-RtZU3AyMVArmHLiW0suEZ9McadTdegwbgtiQl5Qqo9kunkVg1ofwueXD8/8wv3Af8jkME3DDe3yLfR8HSJfT2g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
@endsection