@section('title', 'MGTSTRAT-U Webinar RECORD')
<link rel="shortcut icon" type="image/png" href="{{ URL::to('assets/images/logo/logo.png') }}">
<link rel="stylesheet" href="{{ URL::to('css/custom.css') }}">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
@extends('layouts.master')
@section('menu')
    @extends('sidebar.dashboard')
@endsection
@section('content')
@php
    $table = 0;
@endphp
    <div id="main">
        @include('headers.header')
        <div class="page-heading">
            <div class="page-title">
                <div class="row">
                    <div class="col-12 col-md-6 order-md-1 order-last">
                        <h3>MGTSTRAT-U Webinar Record</h3>
                    </div>
                    <div class="col-12 col-md-6 order-md-2 order-first">
                        <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                            <ol class="breadcrumb bg-transparent">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}">Dashboard</a></li>
                                <li class="breadcrumb-item active" aria-current="page">MGTSTRAT-U Webinar Engagement</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>

            {{-- message --}}           

            <section class="section">
                <div class="card mb-5 mt-5">
                    <div class="card-header col-12 d-flex justify-content-left mt-3 mb-3">
                        <a class="btn btn-primary mt-2 mb-2" href="{{ route('form/mgtstratu_webinar/newrecord') }}">
                            <span><i class="fa-solid fa-file-circle-plus"></i> &nbsp; New Record</span>
                        </a>
                    </div>
                    <div class="card-body table-responsive">
                        <table class="table display dt-responsive nowrap text-dark" id="table1">
                            <thead class="table-secondary">
                                <tr class="text-dark text-sm">
                                    <th class="text-center" style="width:10%">ID</th>
                                    <th class="text-center" style="width:5%">STATUS</th>
                                    <th class="text-center" style="width:15%">COMPANY NAME</th>
                                    <th class="text-center" style="width:8%">ENGAGEMENT TYPE</th>
                                    <th class="text-center" style="width:15%">ENGAGEMENT TITLE</th>
                                    <th class="text-center" style="width:5%">NUMBER OF PAX</th>
                                    <th class="text-center" style="width:10%">ENGAGEMENT FEES</th>
                                    <th class="text-center" style="width:10%">DATE ADDED</th>
                                    <th class="text-center" style="width:10%">Modify</th>
                                    <th class="text-center"></th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($webinarList as $key => $item)
                                    <tr id="{{ ++$table }}">
                                        <td class="id text-center text-uppercase fw-bold" role="button" data-toggle="modal" data-target="#bigbudgetlist{{ $item->id }}"> {{ $item->webinar_eng_form_id }} </td>
                                        <td class="text-center" role="button" data-toggle="modal" data-target="#bigbudgetlist{{ $item->id }}">
                                            <span id="status" class="badge">{{ $item->status }}</span>
                                            {{-- Automatic change the status color --}}
                                            <script>
                                                $( ".badge" ).each(function() {
                                                    if($(this).html() === 'Trial'){
                                                        $(this).addClass( "bg-info" );
                                                    }
                                                    else if($(this).html() === 'Confirmed'){
                                                        $(this).addClass( "bg-primary" );
                                                    }
                                                    else if($(this).html() === 'In-progress'){
                                                        $(this).addClass( "bg-warning" );
                                                    }
                                                    else if($(this).html() === 'Completed'){
                                                        $(this).addClass( "bg-success" );
                                                    }
                                                    else if($(this).html() === 'Lost'){
                                                        $(this).addClass( "bg-danger" );
                                                    }
                                                });
                                            </script>
                                        </td>
                                        <td class="name text-center fw-bold" role="button" data-toggle="modal" data-target="#bigbudgetlist{{ $item->id }}">{{ $item->company_name }}</td>
                                        <td class="name text-center fw-bold" role="button" data-toggle="modal" data-target="#bigbudgetlist{{ $item->id }}">{{ $item->customized_type }}</td>
                                        <td class="email text-center fw-bold" role="button" data-toggle="modal" data-target="#bigbudgetlist{{ $item->id }}">
                                            {{ ($item->engagement_title == '- NOT LISTED -') ? $item->engagement_title_not_listed : $item->engagement_title; }}
                                        </td>
                                        <td class="fw-bold text-center" role="button" data-toggle="modal" data-target="#bigbudgetlist{{ $item->id }}">{{ $item->pax_number }}</td>
                                        <td class="fw-bold text-center" role="button" data-toggle="modal" data-target="#bigbudgetlist{{ $item->id }}">{{ $item->Engagement_fees_total }}</td>
                                        <td class="fw-bold text-center" role="button" data-toggle="modal" data-target="#bigbudgetlist{{ $item->id }}">{{ \Carbon\Carbon::parse($item->created_at)->toFormattedDateString()}}</td>
                                        <td class="text-center fw-bold text-center">
                                            <a href="{{ url('update_webinar_eng/'.$item->id) }}">
                                                <span class="badge bg-success"><i class="bi bi-pencil-square"></i></span>
                                            </a>

                                            <a href="#" class="delete"  data-toggle="modal" data-target="#delete_estimate{{ $item->id }}"><span
                                                    class="badge bg-danger"><i class="bi bi-trash"></i></span>
                                            </a>

                                            <!-- Delete MGTSTRAT-U Webinar Engagement Modal -->
                                            <div class="modal custom-modal fade" id="delete_estimate{{ $item->id }}" role="dialog">
                                                <div class="modal-dialog modal-dialog-centered modal-md">
                                                    <div class="modal-content">
                                                        <div class="modal-header" style="justify-content: center;">
                                                            <h3 class="mb-2 text-center">MGTSTRAT-U Webinar</h3>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="form-header">
                                                                <h5 class="text-center">Are you sure want to delete <br>
                                                                    <b>{{ ($item->engagement_title == '- NOT LISTED -') ? $item->engagement_title_not_listed : $item->engagement_title; }}</b>?
                                                                </h5>
                                                            </div>
                                                            <form action="{{ route('webinar_deleteRecord') }}" method="POST">
                                                                @csrf
                                                                <input type="hidden" name="id" class="e_id" value="">
                                                                <input type="hidden" name="webinar_engagement_forms_id" class="budget_number" value="{{ $item->id }}">
                                                                <input type="hidden" name="engagement_title" value="{{ ($item->engagement_title == '- NOT LISTED -') ? $item->engagement_title_not_listed : $item->engagement_title; }}" readonly>
                                                                <div class="modal-footer">
                                                                    <div class="">
                                                                        <button type="submit" class="btn btn-primary continue-btn submit-btn">Delete</button>
                                                                    </div>
                                                                    <div class="">
                                                                        <a href="javascript:void(0);" data-dismiss="modal" class="btn btn-secondary cancel-btn">Cancel</a>
                                                                    </div>
                                                                </div>  
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /Delete Customized Engagement Modal -->
                                        </td>
                                        <td>
                                            <div class="modal fade" id="bigbudgetlist{{ $item->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-lg">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title text-uppercase fw-bold">Batches</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>

                                                        <div class="modal-body table-responsive">
                                                            <table class="table table-light display dt-responsive nowrap tables" id="tables{{ $table }}">
                                                                <thead style="font-family:-apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif">
                                                                    <tr class="table-secondary">
                                                                        <th class="text-center">ID</th>
                                                                        <th class="text-center">Batch Name</th>
                                                                        <th class="text-center">Sessions</th>
                                                                        <th class="text-center">Status</th>
                                                                        <th class="text-center">Program date</th>
                                                                        <th class="text-center">Contract Price</th>
                                                                        <th class="text-center">Modify</th>
                                                                        <th hidden></th>
                                                                    </tr>
                                                                </thead>

                                                                <tbody class="text-center appendBatch" style="font-family:Arial, Helvetica, sans-serif">
                                                                    @foreach ($subInfoList as $key => $item2)
                                                                        @if($item->id == $item2->webinar_engagement_forms_id)
                                                                            <tr>
                                                                                <td>
                                                                                    <label class="fw-bold " for="formGroupBatchInput">{{ ++$key }}</label>
                                                                                </td>
                                                                                <td>
                                                                                    <label class="fw-bold" for="">
                                                                                        Batch {{ $item2->batch_number }}
                                                                                    </label>
                                                                                </td>
                                                                                <td>
                                                                                    <label class="fw-bold" for="">{{ $item2->session_number }}</label>
                                                                                </td>
                                                                                <td>
                                                                                    <label class="fw-bold" for="">{{ $item2->status }}</label>
                                                                                </td>
                                                                                @if ($item2->date == null)
                                                                                <td>
                                                                                    <label class="fw-bold" for="">TBA</label>
                                                                                </td>
                                                                                @else
                                                                                <td>
                                                                                    <label class="fw-bold" for="">{{ $item2->date }}</label>
                                                                                </td>
                                                                                @endif
                                                                                <td>
                                                                                    <label class="fw-bold" for="">
                                                                                        {{ str_replace(',', '', $item2->sub_fees_total) }}
                                                                                    </label>
                                                                                </td>
                                                                                <td>
                                                                                    <a href="{{ url('form/webinarEngagement/sub-form/' . $item2->id) }}" class="text-success font-18 px-0" title="Add" id="edit">
                                                                                        <i class="fa-regular fa-pen-to-square"></i>
                                                                                    </a>
                                                                                </td>
                                                                                <td hidden></td>
                                                                            </tr>
                                                                        @endif
                                                                    @endforeach
                                                                </tbody>
                                                            </table>
                                                        </div>

                                                        <div class="modal-footer">                                                           
                                                            <a href="{{ url('form/webinarEngagement/sub-form/modify-sessions/' . $item->id) }}" class="btn btn-success active" role="button">
                                                                Modify All <i class="bi bi-pencil-square"></i>
                                                            </a>
                                                            <button type="button" class="btn btn-secondary modal-close" data-dismiss="modal">Close</button>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>
        </div>
    </div>
@endsection
<script src="https://code.jquery.com/jquery-3.5.0.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script>
$(document).ready(function() {
    //datatble of batch
    // for (let i = 1; i < 1000; i++) {
        // let table1 = document.querySelector(`#tables${i}`);
        // new simpleDatatables.DataTable(`#tables${i}`);
        $(`.tables`).dataTable( {
        // $(`#tables${i}`).dataTable( {
            responsive: true,
            stateSave: true,
            "bScrollCollapse": true,
            "autoWidth": false,
            stateSaveCallback: function(settings,data) {
                localStorage.setItem( 'DataTables_' + settings.sInstance, JSON.stringify(data) )
                },
            stateLoadCallback: function(settings) {
                return JSON.parse( localStorage.getItem( 'DataTables_' + settings.sInstance ) )
                },
        } );
    // }
});
</script>