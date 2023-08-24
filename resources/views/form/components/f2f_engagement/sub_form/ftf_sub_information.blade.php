@section('title', 'UPDATE RECORD')
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
                    <h3>F2F Engagement Sub Fee</h3>
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

        <div class="card m-0">
            <div class="card-body">
                <div class="alert alert-light" role="alert" style="border-left: 3px solid #818182;">
                    <div class="form-group row m-0">
                        <div class="col-lg-6 col-md-6"> 
                            <span style="font-size:10pt">Customized Type</span>
                            <h5 id="custType">{{ $parentData[0]->customized_type }}</h5>

                            <span style="font-size:10pt">Client</span>
                            <h5 id="clientName">{{ $getClient[0]->company_name }}</h5>
                            
                            <span style="font-size:10pt">Engagement Title</span>
                            <h5 id="engType">{{ $parentData[0]->engagement_title }}</h5>
                        </div>
                        <div class="col-lg-6 col-md-6"> 
                            <span style="font-size:10pt">Number of Pax</span>
                            <h5 id="paxhNo">{{ $parentData[0]->pax_number }}</h5>
                            
                            <span style="font-size:10pt">Batch Number</span>
                            <h5 id="batchNo">{{$subInfoList[0]->batch_number}}</h5>
                            
                            <span style="font-size:10pt">Session Number</span>
                            <h5 id="sessionNo">{{$subInfoList[0]->session_number}}</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div> 

        {{-- message --}}
        {!! Toastr::message() !!}

        <!-- PROGRESS BAR -->
        <div class="multisteps-form mt-5">
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
                            <form class="form form-horizontal multisteps-form__form" action="{{ route('form/ftfEngagement/sub-form/save_editSubForm') }}"
                                method="POST" autocomplete="off" onsubmit="submitForm(event)" name="sub_ftf_engagement_form">
                                @csrf
                                @method('PUT')       
                                
                                <input class="form-control" type="hidden" id="id" name="parent_id" value="{{$parentData[0]->id}}">
                                <input class="form-control" type="hidden" id="id" name="id" value="{{$subInfoList[0]->id}}">
                                <input class="form-control" type="hidden" id="id" name="batch_name" value="{{$subInfoList[0]->batch_number}}">
                                <input class="form-control" type="hidden" id="id" name="session_number" value="{{$subInfoList[0]->session_number}}">
                                <input class="form-control" type="hidden" id="customized_type" name="customized_type" value="{{$parentData[0]->customized_type}}">

                                <!------------ ENGAGEMENT FEES ------------>
                                <div class="multisteps-form__panel js-active" data-animation="slideHorz">
                                    @include('form.components.f2f_engagement.sub_form.engagement_fees')

                                    {{-- next and prev button --}}
                                    <div class="button-row d-flex justify-content-center mt-3">
                                        {{-- <button class="btn btn-secondary mx-2 js-btn-prev" type="button" title="Prev">Prev</button> --}}
                                        <button class="btn btn-primary mx-2 js-btn-next" type="button" title="Next">Next</button>
                                    </div>

                                </div>
                                <!------------ END ------------>

                                <!------------ ENGAGEMENT COST ------------>
                                <div class="multisteps-form__panel" data-animation="slideHorz">
                                    @include('form.components.f2f_engagement.sub_form.engagement_cost')

                                    {{-- next and prev button --}}
                                    <div class="button-row d-flex justify-content-center mt-3">
                                        <button class="btn btn-secondary mx-2 js-btn-prev" type="button" title="Prev">Prev</button>
                                        <button class="btn btn-success mx-2 js-btn-next submit" type="submit" title="Submit">Save</button>
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

    <script type="text/javascript" src="/js/f2fform.js"></script>
    <script type="text/javascript" src="/js/MultiStep.js"></script>
    <script type="text/javascript" src="/js/currencyFormat.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js" integrity="sha512-2ImtlRlf2VVmiGZsjm9bEyhjGW4dU7B6TNwh/hx/iSByxNENtj3WVE6o/9Lj4TJeVXPi4bnOIMXFIJJAeufa0A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.full.min.js" integrity="sha512-RtZU3AyMVArmHLiW0suEZ9McadTdegwbgtiQl5Qqo9kunkVg1ofwueXD8/8wv3Af8jkME3DDe3yLfR8HSJfT2g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script>       
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

    @endsection