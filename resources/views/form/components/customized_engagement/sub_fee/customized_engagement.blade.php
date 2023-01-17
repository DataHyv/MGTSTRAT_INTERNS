@section('title', 'NEW RECORD')
<link rel="shortcut icon" type="image/png" href="{{ URL::to('assets/images/logo/logo.png') }}">
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.css">
<link rel="stylesheet" href="{{ URL::asset('css/custom.css') }}">
{{-- <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" /> --}}
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2-bootstrap-theme/0.1.0-beta.10/select2-bootstrap.min.css" integrity="sha512-kq3FES+RuuGoBW3a9R2ELYKRywUEQv0wvPTItv3DSGqjpbNtGWVdvT8qwdKkqvPzT93jp8tSF4+oN4IeTEIlQA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" integrity="sha512-nMNlpuaDPrqlEls3IX/Q56H36qvBASwb3ipuo3MxeWbsQB1881ox0cRv7UPTgBlriqoynt35KjEwgGUeUXIPnw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>

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
                    <h3>Customized Engagement Sub Fee</h3>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Customized Engagement</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>

        {{-- message --}}
        {!! Toastr::message() !!}

        <!-- PROGRESS BAR -->
        <div class="multisteps-form">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-8 ml-auto mr-auto mb-4">
                    <div class="multisteps-form__progress">
                        <button class="multisteps-form__progress-btn js-active" type="button" title="Engagement Fees">
                            Engagement Fees
                        </button>

                        <button class="multisteps-form__progress-btn" type="button" title="Engagement Cost">
                            Engagement Cost
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <!-- END -->

        <!------------ CARD BODY ------------>
            <div class="col-12">
                {{-- card --}}
                <div class="card">
                    {{-- card content --}}
                    <div class="card-content">
                        {{-- card body --}}
                        <div class="card-body">

                            <!------------ BUDGET FORM ------------>
                                <form class="form form-horizontal multisteps-form__form" action="{{ route('updateBatch') }}"
                                    method="POST" autocomplete="off" onsubmit="submitForm(event)">
                                    @csrf
                                    @method('PUT')

                                    <input class="form-control" type="hidden" id="id" name="mother_id" value="{{$data->customized_engagement_forms_id}}">
                                    <input class="form-control" type="hidden" id="id" name="id" value="{{$data->id}}">
                                    <input class="form-control" type="hidden" id="id" name="batch_name" value="{{$data->batch_number}}">
                                    <input class="form-control" type="hidden" id="id" name="session_number" value="{{$data->session_number}}">
                                    {{-- <input class="form-control" type="hidden" id="sub_informations_id" name="sub_informations_id" value="{{$data2->sub_informations_id}}"> --}}

                                    <!------------ ENGAGEMENT FEES ------------>
                                    <div class="multisteps-form__panel js-active" data-animation="slideHorz">
                                        @include('form.components.customized_engagement.sub_fee.engagement_fees')

                                        {{-- next and prev button --}}
                                        <div class="button-row d-flex justify-content-center mt-3">
                                            {{-- <button class="btn btn-secondary mx-2 js-btn-prev" type="button" title="Prev">Prev</button> --}}
                                            <button class="btn btn-primary mx-2 js-btn-next" type="button" title="Next">Next</button>
                                        </div>

                                    </div>
                                    <!------------ END ------------>

                                    <!------------ ENGAGEMENT COST ------------>
                                    <div class="multisteps-form__panel" data-animation="slideHorz">
                                        @include('form.components.customized_engagement.sub_fee.engagement_cost')

                                        {{-- next and prev button --}}
                                        <div class="button-row d-flex justify-content-center mt-3">
                                            <button class="btn btn-secondary mx-2 js-btn-prev" type="button" title="Prev">Prev</button>
                                            <button class="btn btn-success mx-2 js-btn-next submit" type="submit" title="Submit" sub-id="{{$data->id}}">Submit</button>
                                            {{-- <button class="btn btn-primary mx-2 js-btn-next" type="button" title="Next">Next</button> --}}
                                        </div>

                                    </div>
                                    <!------------ END ------------>

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

    {{-- CUSTOMIZED ENGAGEMENT SCRIPT --}}
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
        }

        //ENTER KEY NOT TO SUBMIT
        document.addEventListener('keypress', function (e) {
            if (e.keyCode === 13 || e.which === 13) {
                e.preventDefault();
                return false;
            }
        });

        //INFORMATION
        $("document").ready(function () {
            /*************************************STATUS**************************************/
            //DEFAULT COLOR
            var statusLoad = document.getElementById("status").value;
            if(statusLoad == "Confirmed"){
                $('#status').css('background-color', '#007bff')
                $('#status').css('color', 'white')
                $('#status option').css('background-color', 'white')
                $('#status option').css('color', 'black')
            }
            else if(statusLoad == "In-progress"){
                $('#status').css('background-color', '#ffc107')
                $('#status').css('color', 'black')
                $('#status option').css('background-color', 'white')
                $('#status option').css('color', 'black')
            }
            else if(statusLoad == "Completed"){
                $('#status').css('background-color', '#28a745')
                $('#status').css('color', 'white')
                $('#status option').css('background-color', 'white')
                $('#status option').css('color', 'black')
            }
            else if(statusLoad == "Lost"){
                $('#status').css('background-color', '#dc3545')
                $('#status').css('color', 'white')
                $('#status option').css('background-color', 'white')
                $('#status option').css('color', 'black')
            }
            else if(statusLoad == "Trial"){
                $('#status').css('background-color', '#17a2b8')
                $('#status').css('color', 'white')
                $('#status option').css('background-color', 'white')
                $('#status option').css('color', 'black')
            }

            //ASSIGN EVENT LISTENER IN STATUS
            document.getElementById("status").addEventListener("change", status);
            window.addEventListener("load", status);

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
        });
    </script>

    <script type="text/javascript" src="/js/ceform.js"></script>
    <script type="text/javascript" src="/js/roster.js"></script>
    {{-- <script type="text/javascript" src="/js/ceFormAdd.js"></script> --}}
    <script type="text/javascript" src="/js/MultiStep.js"></script>
    <script type="text/javascript" src="/js/currencyFormat.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js" integrity="sha512-2ImtlRlf2VVmiGZsjm9bEyhjGW4dU7B6TNwh/hx/iSByxNENtj3WVE6o/9Lj4TJeVXPi4bnOIMXFIJJAeufa0A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.full.min.js" integrity="sha512-RtZU3AyMVArmHLiW0suEZ9McadTdegwbgtiQl5Qqo9kunkVg1ofwueXD8/8wv3Af8jkME3DDe3yLfR8HSJfT2g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
@endsection
