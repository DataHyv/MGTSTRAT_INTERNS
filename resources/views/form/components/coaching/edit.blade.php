@section('title', 'EDIT RECORD')
{{--
<link rel="shortcut icon" type="image/png" href="{{ URL::to('assets/images/logo/logo.png') }}"> --}}
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.css">
<link rel="stylesheet" href="{{ URL::asset('css/custom.css') }}">
{{--
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" /> --}}
<link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/select2-bootstrap-theme/0.1.0-beta.10/select2-bootstrap.min.css"
    integrity="sha512-kq3FES+RuuGoBW3a9R2ELYKRywUEQv0wvPTItv3DSGqjpbNtGWVdvT8qwdKkqvPzT93jp8tSF4+oN4IeTEIlQA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css"
    integrity="sha512-nMNlpuaDPrqlEls3IX/Q56H36qvBASwb3ipuo3MxeWbsQB1881ox0cRv7UPTgBlriqoynt35KjEwgGUeUXIPnw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

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
                <h3>Coaching</h3>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Coaching</li>
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
    <div class="col-12">
        {{-- card --}}
        <div class="card">
            {{-- card content --}}
            <div class="card-content">
                {{-- card body --}}
                <div class="card-body">

                    <!------------ BUDGET FORM ------------>
                    <!--<form class="form form-horizontal multisteps-form__form" action="{{ route('save') }}" method="POST"-->
                    <form class="form form-horizontal multisteps-form__form" action="{{ url('form/coaching/confirm-edit') }}" method="POST"
                        autocomplete="off" onsubmit="submitForm(event)">
                        @csrf

                        <!------------ INFORMATION ------------>
                        <input type="hidden" name="id" value="{{ $coachings->id }}">
                        <div class="multisteps-form__panel js-active" data-animation="slideHorz">
                            @include('form.components.coaching.edit_information')
                            {{-- next button --}}
                            <div class="col-12 d-flex justify-content-center mt-5">
                                <button class="btn btn-primary ml-auto js-btn-next" type="button"
                                    title="Next">Next</button>
                            </div>
                        </div>

                        <!------------ ENGAGEMENT FEES ------------>
                        <div class="multisteps-form__panel" data-animation="slideHorz">
                            @include('form.components.coaching.edit_engagement_fees')
                            {{-- next and prev button --}}
                            <div class="button-row d-flex justify-content-center mt-3">
                                <button class="btn btn-secondary mx-2 js-btn-prev" type="button"
                                    title="Prev">Prev</button>
                                <button class="btn btn-primary mx-2 js-btn-next" type="button"
                                    title="Next">Next</button>
                            </div>
                        </div>

                        <!------------ ENGAGEMENT COST ------------>
                        <div class="multisteps-form__panel" data-animation="slideHorz">
                            @include('form.components.coaching.edit_engagement_cost')
                            {{-- next and prev button --}}
                            <div class="col-12 d-flex justify-content-center mt-3">
                                <button class="btn btn-secondary mx-2 js-btn-prev" type="button"
                                    title="Prev">Prev</button>
                                <button class="btn btn-primary mx-2 js-btn-next" type="button"
                                    title="Next">Next</button>
                            </div>
                        </div>

                        <!------------ PROFIT FORECAST ------------>
                        <div class="multisteps-form__panel" data-animation="slideHorz">
                            @include('form.components.coaching.edit_profit_forecast')
                            {{-- prev and submit button --}}
                            <div class="col-12 d-flex justify-content-center mt-3">
                                <button class="btn btn-secondary mx-2 js-btn-prev" type="button"
                                    title="Prev">Prev</button>
                                <button class="btn btn-success mx-2 js-btn-next" type="submit"
                                    title="Submit">Submit</button>
                            </div>
                        </div>
                    </form>
                    <!------------ END OF BUDGET FORM ------------>
                </div>
            </div>
        </div>
    </div>
    <!------------ END OF CARD BODY ------------>

    <!------------ FOOTER ------------>
    <footer>
        <div class="footer clearfix mb-0 text-muted">
            <div class="float-end">
                <p>
                    <script>
                        document.write(new Date().getFullYear());
                    </script> Copyright &copy MGT-STRAT
                </p>
            </div>
            {{-- <div class="float-end">
                <p>Crafted with <span class="text-danger"><i class="bi bi-heart"></i></span> by <a
                        href="#">MGT-STRAT</a></p>
            </div> --}}
        </div>
    </footer>
    <!------------ END OF FOOTER ------------>
</div>

{{-- CUSTOMIZED ENGAGEMENT SCRIPT --}}
<script>
    function submitForm(e) {
        $('.commanumber').each((index, input) => { //1st way
            const $input = $(input);
            $input.val($input.val().replace(/,/g, ''));
        });
        }

        //datepicker
        $(document).on("click change focus", "#dcbe", function() {
            $(".datepicker").each(function () {
                $(this).datepicker();
                $(this).on("change", function () {
                    $(this).datepicker("option", "dateFormat", "M d, yy");
                });
            });
        });

        $('input[type="number"]').on("input", function () {
            this.value =
                !!this.value && Math.abs(this.value) >= 0 ? Math.abs(this.value) : null;
        });
        $('input[type="number"]').attr("min", "0");

        $(document).on("load change keyup click", "#main", function () {
            let currency = Intl.NumberFormat("en-US");
            sum = 0;
            subtotal = 0;

            $("#engagement-fees > .sum").each(function () {
                // COMMISSION SUM
                engagementFees = ($(this).find(`.number-coaches`).val().replace(/,/g, "") * $(this).find(`.daily-fees`).val().replace(/,/g, "") * $(this).find(`.number-session`).val().replace(/,/g, ""))
                 + ($(this).find(`.nswh`).val().replace(/,/g, "") * ($(this).find(`.number-coaches`).val().replace(/,/g, "") * $(this).find(`.daily-fees`).val().replace(/,/g, "") * $(this).find(`.number-session`).val().replace(/,/g, "") * 0.2));

                // TOTAL FEE
                $(this)
                    .find(".total")
                    .text(currency.format(Math.ceil(+engagementFees)));

                // TOTAL FEE SUM
                 subtotal += parseInt($(this).find(".total").text().replace(/,/g, ""));

                // SUBTOTAL
            });
            $("#CDSubtotal").html($("#CDTotal").html());
            $("#CSubtotal").html(currency.format(Math.ceil(subtotal) - parseInt($("#CDTotal").html().replace(/,/g, ""))));
            if($("#ef_Totalpackage").val() === $("#total-standard").html().replace(/,/g, "")) $("#ef_Totalpackage").val(Math.ceil(subtotal));
            $("#total-standard").html(currency.format(Math.ceil(subtotal)));
            let inputDiscount = Math.ceil((100 - ((parseInt($("#ef_Totalpackage").val()) / parseInt($("#total-standard").html().replace(/,/g, ""))) * 100)));
            isFinite(inputDiscount) ? $("#input-discount").val(inputDiscount + '%') : $("#input-discount").val('');
            subtotal = 0; //clear the subtotal assignment operator to 0

            if($('#ef_Totalpackage').val() !== ''){
                $('#total1').html(currency.format(Math.ceil(parseInt($('#ef_Totalpackage').val()) * (parseInt($('#SF1').val()) / 100))));
                if($('#mg_input_totalPackages').val() === $('#ec_subtotal').html().replace(/,/g, "")) $('#mg_input_totalPackages').val(Math.ceil(parseInt($('#total1').html().replace(/,/g, '')) + parseInt($('#total2').html().replace(/,/g, '')) + parseInt($('#total3').html().replace(/,/g, ''))));
                $('#ec_subtotal').html(currency.format(Math.ceil(parseInt($('#total1').html().replace(/,/g, '')) + parseInt($('#total2').html().replace(/,/g, '')) + parseInt($('#total3').html().replace(/,/g, '')))));
                $('#total2').html(currency.format(Math.ceil(parseInt($('#ef_Totalpackage').val()) * (parseInt($('#ef_LeadconsultantHf').val()) / 100))));
                if($('#mg_input_totalPackages').val() === $('#ec_subtotal').html().replace(/,/g, "")) $('#mg_input_totalPackages').val(Math.ceil(parseInt($('#total1').html().replace(/,/g, '')) + parseInt($('#total2').html().replace(/,/g, '')) + parseInt($('#total3').html().replace(/,/g, ''))));
                $('#ec_subtotal').html(currency.format(Math.ceil(parseInt($('#total1').html().replace(/,/g, '')) + parseInt($('#total2').html().replace(/,/g, '')) + parseInt($('#total3').html().replace(/,/g, '')))));
                $('#total3').html(currency.format(Math.ceil(parseInt($('#ef_Totalpackage').val()) * (parseInt($('#SF3').val()) / 100))));
                if($('#mg_input_totalPackages').val() === $('#ec_subtotal').html().replace(/,/g, "")) $('#mg_input_totalPackages').val(Math.ceil(parseInt($('#total1').html().replace(/,/g, '')) + parseInt($('#total2').html().replace(/,/g, '')) + parseInt($('#total3').html().replace(/,/g, ''))));
                $('#ec_subtotal').html(currency.format(Math.ceil(parseInt($('#total1').html().replace(/,/g, '')) + parseInt($('#total2').html().replace(/,/g, '')) + parseInt($('#total3').html().replace(/,/g, '')))));
            }
            $('#ef_Totalpackage').val() !== '' && $('#mg_input_totalPackages').val() !== '' ? $('#Profit').html(currency.format(Math.ceil(parseInt($('#ef_Totalpackage').val()) - parseInt($('#mg_input_totalPackages').val())))) : $('#Profit').html('-');
            $('#ef_Totalpackage').val() !== '' ? $('#LessContributionToOverhead').html(currency.format(Math.ceil(parseInt($('#ef_Totalpackage').val()) * (parseInt($('#LessCTO_NOC').val()) / 100)))) : $('#LessContributionToOverhead').html('-');
            $('#Profit').html() !== '-' && $('#LessContributionToOverhead').html() !== '-' ? $('#NetProfit').html(currency.format(Math.ceil(parseInt($('#Profit').html().replace(/,/g, '')) - parseInt($('#LessContributionToOverhead').html().replace(/,/g, ''))))) : $('#NetProfit').html('-');
            $('#NetProfit').html() !== '-' && $('#NetProfit').html() !== '0' ? $('#ProfitMargin').html(Math.ceil(((parseInt($('#NetProfit').html().replace(/,/g, '')) / parseInt($('#ef_Totalpackage').val())) * 100)) + '%') : $('#ProfitMargin').html('-');
        });
        $('document').ready(function() {
        /*************************************STATUS**************************************/
        //ASSIGN EVENT LISTENER IN STATUS
        document.getElementById("status").addEventListener("change", status);

        //EVENT OF STATUS
        function status() {
            var status = document.getElementById("status").value;
            if(status == "Confirmed"){
                $('#status').css('background-color', '#007bff')
                $('#status').css('color', 'white')
                $('#status option').css('background-color', 'white')
                $('#status option').css('color', 'black')
            } else if(status == "In-progress"){
                $('#status').css('background-color', '#ffc107')
                $('#status').css('color', 'black')
                $('#status option').css('background-color', 'white')
                $('#status option').css('color', 'black')
            } else if(status == "Completed"){
                $('#status').css('background-color', '#28a745')
                $('#status').css('color', 'white')
                $('#status option').css('background-color', 'white')
                $('#status option').css('color', 'black')
            } else if(status == "Lost"){
                $('#status').css('background-color', '#dc3545')
                $('#status').css('color', 'white')
                $('#status option').css('background-color', 'white')
                $('#status option').css('color', 'black')
            } else if(status == "Trial"){
                $('#status').css('background-color', '#17a2b8')
                $('#status').css('color', 'white')
                $('#status option').css('background-color', 'white')
                $('#status option').css('color', 'black')
            }
        };
        status();
    });
</script>
<script type="text/javascript" src="/js/MultiStep.js"></script>
<script type="text/javascript" src="/js/currencyFormat.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"
    integrity="sha512-2ImtlRlf2VVmiGZsjm9bEyhjGW4dU7B6TNwh/hx/iSByxNENtj3WVE6o/9Lj4TJeVXPi4bnOIMXFIJJAeufa0A=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.full.min.js"
    integrity="sha512-RtZU3AyMVArmHLiW0suEZ9McadTdegwbgtiQl5Qqo9kunkVg1ofwueXD8/8wv3Af8jkME3DDe3yLfR8HSJfT2g=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
@endsection
