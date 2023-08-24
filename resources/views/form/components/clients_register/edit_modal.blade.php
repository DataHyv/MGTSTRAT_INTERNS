@section('title', 'CLIENTS')
<link rel="stylesheet" href="{{ URL::asset('css/custom.css') }}">
<link rel="shortcut icon" type="image/png" href="{{ URL::to('assets/images/logo/logo.png') }}">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
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
                    <h3>UPDATE CLIENTS</h3>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">UPDATE CLIENTS</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>

            {{-- Start Insert Client --}}
            <div class="col-12">
                <div class="card">
                    <div class="card-content">
                        <div class="card-body">
                            <form method="POST" action="{{ route('update') }}" class="form form-horizontal" id="registerIndustry"
                                enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="id" value="{{ $dataClnt[0]->id }}">
                                <div class="form-body">
                                    <div class="row">
                                        <div class="col-md-4 font-weight-bold">
                                            <label>Company Name</label>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="form-group has-icon-left">
                                                <div class="position-relative">
                                                    <input type="text" class="form-control" placeholder="Company Name"
                                                        id="first-name-icon" name="company_name" value="{{ $dataClnt[0]->company_name }}" required>
                                                    <div class="form-control-icon">
                                                        <i class="bi bi-building"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 font-weight-bold">
                                            <label>ID Number</label>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="form-group has-icon-left">
                                                <div class="position-relative">
                                                    <input type="TEXT" class="form-control" placeholder="Old ID Number"
                                                        id="first-name-icon" name="cstmzd_eng_form_id" value="{{ $dataClnt[0]->cstmzd_eng_form_id}}" readonly>
                                                    <div class="form-control-icon">
                                                        <i class="bi bi-123"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 font-weight-bold">
                                            <label>Status</label>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="form-group position-relative has-icon-left mb-4">
                                                <fieldset class="form-group">
                                                    <select class="form-select" name="status" id="status">                                                        
                                                        <option value="ACTIVE">ACTIVE</option>
                                                        <option value="INACTIVE">INACTIVE</option>
                                                    </select>
                                                    <div class="form-control-icon">
                                                        <i class="bi bi-activity"></i>
                                                    </div>
                                                </fieldset>
                                            </div>
                                        </div>
                                        <div class="col-md-4 font-weight-bold">
                                            <label>Sales Person</label>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="form-group has-icon-left">
                                                <div class="position-relative">
                                                    <input type="text" class="form-control" placeholder=""
                                                        name="sales_person" id="sales_person" value="{{ $dataClnt[0]->sales_person }}"
                                                        oninput="filterConsultant('sales_person');"
                                                        list="filtered_consultant_list" autocomplete="off">
                                                    <input  type="hidden" value="{{ $dataClnt[0]->consultant_id }}" name="sales_person_id" id="sales_person_id">
                                                    <div class="form-control-icon">
                                                        <i class="bi bi-people"></i>
                                                    </div>
                                                    <div class="invalid-feedback">Unknown Sales Person</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 font-weight-bold">
                                            <label>Industry</label>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="form-group position-relative has-icon-left">
                                                <input type="text" class="form-control" placeholder=""
                                                        name="industry" id="industry" value="{{ $dataClnt[0]->industry }}"
                                                        oninput="filterIndustry('industry')"
                                                        list="filtered_industry_list" autocomplete="off">
                                                <input  type="hidden" value="{{ $dataClnt[0]->industry_id }}" name="industry_id" id="industry_id">
                                                <div class="form-control-icon">
                                                    <i class="bi bi-building"></i>
                                                </div>
                                                <div class="invalid-feedback">Unknown Industry</div>
                                            </div>                                            
                                        </div>
                                        <div class="col-md-4 font-weight-bold">
                                            <label>Old/ New</label>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="form-group position-relative has-icon-left mb-4">
                                                <fieldset class="form-group">
                                                    <select class="form-select" name="old_new" id="old_new" value="">
                                                        <option value="OLD">OLD</option>
                                                        <option value="NEW">NEW</option>
                                                    </select>
                                                    <div class="form-control-icon">
                                                        <i class="bi bi-archive"></i>
                                                    </div>
                                                </fieldset>
                                            </div>
                                        </div>
                                        <div class="col-md-4 font-weight-bold">
                                            <label>First Engagement</label>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="form-group has-icon-left">
                                                <div class="position-relative">
                                                    <input type="date" class="form-control" placeholder="First Engagement"
                                                        name="first_eng" value="{{ $dataClnt[0]->first_eng }}">
                                                    <div class="form-control-icon">
                                                        <i class="bi bi-calendar-event-fill"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 font-weight-bold">
                                            <label>Latest Engagement</label>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="form-group has-icon-left">
                                                <div class="position-relative">
                                                    <input type="date" class="form-control" placeholder="Second Engagement"
                                                        name="latest_eng" value="{{ $dataClnt[0]->latest_eng }}">
                                                    <div class="form-control-icon">
                                                        <i class="bi bi-calendar-event-fill"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 d-flex justify-content-end">
                                            <button type="submit" class="btn btn-primary mr-2" onclick="validate_register_required_field()">Save</button>
                                            <br>
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">
                                                <a href="{{ route('clients') }}" style="color: white; text-decoration: none;">
                                                Back</a></button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <!-- AUTO COMPLETE -->
            <datalist id="filtered_consultant_list">
             @foreach ($consultantFee as $key => $feeData)
                    <option value="{{ $feeData->first_name }} {{ $feeData->last_name }}" data-id="{{$feeData->id}}">
                        {{ $feeData->first_name }} {{ $feeData->last_name }}
                    </option>
                @endforeach
            </datalist>          
            <datalist id="filtered_industry_list">
                @foreach ($industryList as $key => $data)
                    <option value="{{ $data->name }}" data-id="{{$data->id}}">
                        {{ $data->name }}
                    </option>
                @endforeach
            </datalist>
            <!-- END AUTO COMPLETE -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script>

    $(document).ready(function() {
        $('#old_new').val('{{ $dataClnt[0]->old_new }}');
        $('#status').val('{{ $dataClnt[0]->status }}');
    });
    
    function filterConsultant(consultantField) {       
        var rosterValue = document.querySelector('#' + consultantField);
        var getFee = $('#filtered_consultant_list option[value="' + rosterValue.value + '"]');
        $('#' + consultantField + '_id').val(getFee.data('id'));
    }

    function filterIndustry(industryField) {        
        var industryValue = document.querySelector('#' + industryField);
        var getFee = $('#filtered_industry_list option[value="' + industryValue.value + '"]');
        $('#' + industryField + '_id').val(getFee.data('id'));
    }

    function validate_register_required_field() {
        // Get the forms we want to add validation styles to
        $('#sales_person_id').removeAttr('required');
        $('#industry_id').removeAttr('required');

        if ($('#sales_person').val() != ''  && $('#sales_person_id').val() == ''){
            $('#sales_person').val('');
            $('#sales_person').attr('required', '');
        }

        if ($('#industry').val() != '' && $('#industry_id').val() == ''){
            $('#industry').val('');
            $('#industry').attr('required', '');
        }
        
        var forms = document.getElementById('registerIndustry');
        if (forms.checkValidity() === false) {
            forms.classList.add('was-validated');
            event.preventDefault();
            event.stopPropagation();
        } else {
            forms.submit();
        }
    }
</script>