@section('title', 'UPDATE RECORD')
<link rel="shortcut icon" type="image/png" href="{{ URL::to('assets/images/logo/logo.png') }}">
<link rel="stylesheet" href="{{ URL::asset('css/custom.css') }}">

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.css">

{{-- datepicker css --}}
<link rel="stylesheet" href="//code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css">
{{-- timepicker css --}}
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.css">
{{-- tooltip css --}}
<link rel="stylesheet" href="{{ url('css/tooltip-css/jquery.mytooltip.min.css') }}">

{{-- <link rel="stylesheet" href="{{ url('css/tooltip-css/demo/style.css') }}"> --}}
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2-bootstrap-theme/0.1.0-beta.10/select2-bootstrap.min.css" integrity="sha512-kq3FES+RuuGoBW3a9R2ELYKRywUEQv0wvPTItv3DSGqjpbNtGWVdvT8qwdKkqvPzT93jp8tSF4+oN4IeTEIlQA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" integrity="sha512-nMNlpuaDPrqlEls3IX/Q56H36qvBASwb3ipuo3MxeWbsQB1881ox0cRv7UPTgBlriqoynt35KjEwgGUeUXIPnw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

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
                    <h3>MGTSTRAT-U WORKSHOPS</h3>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{ route('home') }}">Dashboard</a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="{{ route('form/mgtstratu_workshops/index') }}">MgtStrat-U Workshops</a>
                            </li>
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

                    <div class="card-body">

                        <!------------ BUDGET FORM ------------>
                        <form class="form form-horizontal multisteps-form__form" action="{{ route('updateWorkshop') }}"
                            method="POST" autocomplete="off" onsubmit="submitForm(event)">
                            @csrf
                            @method('PUT')

                            <input class="form-control" type="hidden" id="id" name="id" value="{{$data->id}}">
                            <input class="form-control" type="hidden" id="workshop_id" name="workshop_id" value="{{$data->workshop_id}}">


                            <!------------ INFORMATION ------------>
                                <div class="multisteps-form__panel js-active" data-animation="slideHorz">
                                    @include('form.components.mgtstratu_workshops.update.workshop_update_information')
                                    {{-- next button --}}
                                    <div class="col-12 d-flex justify-content-center mt-3">
                                        <button class="btn btn-primary ml-auto js-btn-next" type="button" title="Next">Next</button>
                                    </div>
                                </div>

                            <!------------ ENGAGEMENT FEES ------------>
                                <div class="multisteps-form__panel" data-animation="slideHorz">
                                    @include('form.components.mgtstratu_workshops.update.workshop_update_Efee')
                                    {{-- next and prev button --}}
                                    <div class="button-row d-flex justify-content-center mt-3">
                                        <button class="btn btn-secondary mx-2 js-btn-prev" type="button" title="Prev">Prev</button>
                                        <button class="btn btn-primary mx-2 js-btn-next" type="button" title="Next">Next</button>
                                    </div>
                                </div>

                            <!------------ ENGAGEMENT COST ------------>
                                <div class="multisteps-form__panel" data-animation="slideHorz">
                                    @include('form.components.mgtstratu_workshops.update.workshop_update_Ecost')
                                    {{-- next and prev button --}}
                                    <div class="col-12 d-flex justify-content-center mt-3">
                                        <button class="btn btn-secondary mx-2 js-btn-prev" type="button" title="Prev">Prev</button>
                                        <button class="btn btn-primary mx-2 js-btn-next" type="button" title="Next">Next</button>
                                    </div>
                                </div>

                            <!------------ PROFIT FORECAST ------------>
                                <div class="multisteps-form__panel" data-animation="slideHorz">
                                    @include('form.components.mgtstratu_workshops.update.workshop_update_profitForecast')
                                    {{-- prev and submit button --}}
                                    <div class="col-12 d-flex justify-content-center mt-3">
                                        <button class="btn btn-secondary mx-2 js-btn-prev" type="button" title="Prev">Prev</button>
                                        <button class="btn btn-success mx-2 js-btn-next" type="submit" title="Submit">Submit</button>
                                    </div>
                                </div>
                        </form>
                    </div>

                </div>
            </div>
        <!------------ END OF CARD BODY ------------>

        <!------------ FOOTER ------------>
            <footer>
                <div class="footer clearfix mb-0 text-muted">
                    <div class="float-end">
                        <p><script>document.write(new Date().getFullYear());</script> Copyright &copy MGT-STRAT</p>
                    </div>
                </div>
            </footer>
        <!------------ END OF FOOTER ------------>
    </div>
    <script type="text/javascript" src="/js/ceform.js"></script>
    <script type="text/javascript" src="/js/ceFormUpdate.js"></script>
    <script type="text/javascript" src="/js/MultiStep.js"></script>
    <script type="text/javascript" src="/js/currencyFormat.js"></script>
    <script type="text/javascript" src="/js/workshop-update.js"></script>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    
    {{-- datepicker js --}}
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>

    {{-- timepicker js --}}
    <script src="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.js"></script>
    {{-- tooltip js --}}
    {{-- <script src="{{ url('js/tooltipJs/jquery-1.11.3.min.js') }}"></script> --}}
    <script src="{{ url('js/tooltipJs/jquery.mytooltip.js') }}"></script>
    <script src="{{ url('js/tooltipJs/demo/script.js') }}"></script>

    {{-- TOOLTIP JS --}}
    <script src="{{ url('js/tooltipJs/jquery.mytooltip.js') }}"></script>
    <script src="{{ url('js/tooltipJs/demo/script.js') }}"></script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js" integrity="sha512-2ImtlRlf2VVmiGZsjm9bEyhjGW4dU7B6TNwh/hx/iSByxNENtj3WVE6o/9Lj4TJeVXPi4bnOIMXFIJJAeufa0A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.full.min.js" integrity="sha512-RtZU3AyMVArmHLiW0suEZ9McadTdegwbgtiQl5Qqo9kunkVg1ofwueXD8/8wv3Af8jkME3DDe3yLfR8HSJfT2g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

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
        function submitForm(e) {
            // e.preventDefault();
            $('.commanumber').each((index, input) => { //1st way
                const $input = $(input);
                $input.val($input.val().replace(/,/g, ''));
            });
        };

        
        $(document).ready(function() {
        $('.select2s-hidden-accessible').select2({
            // closeOnSelect: false
            placeholder: 'Enter Client',
            tags: true,
        });
        });
        
        // This will help with displaying the date
        $(document).ready(function() {
        $('.date').datepicker();
        $('#ui-datepicker-div').css('clip', 'auto');

        $('.timepicker').timepicker({
            timeFormat: 'h:mm p',
            interval: 30,
            minTime: '06',
            maxTime: '10:00pm',
            // defaultTime: '06',
            startTime: '06:00',
            dynamic: false,
            dropdown: true,
            scrollbar: true
        });
    });

        $('.timepicker').timepicker({
            timeFormat: 'h:mm p',
            interval: 30,
            minTime: '06',
            maxTime: '10:00pm',
            // defaultTime: '06',
            startTime: '06:00',
            dynamic: false,
            dropdown: true,
            scrollbar: true
        });
    </script>
@endsection