@section('title', 'MGTSTRAT-U RECORD')
<link rel="shortcut icon" type="image/png" href="{{ URL::to('assets/images/logo/logo.png') }}">
<link rel="stylesheet" href="{{ URL::to('css/custom.css') }}">
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
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
                    <h3>MgtStrat-U Workshops Record</h3>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb bg-transparent">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page"><a href="{{ route('workshop.index') }}">MgtStrat-U Workshops</a></li>                        </ol>
                    </nav>
                </div>
            </div>
        </div>

        {{-- message --}}
        {!! Toastr::message() !!}

        <section class="section">
            <div class="card mb-5 mt-5 mh-75">
                <div class="card-header col-12 d-flex justify-content-left mt-3 mb-3">
                    <a class="btn btn-primary mt-2 mb-2" href="{{ route('workshop.new') }}">
                        <span><i class="fa-solid fa-file-circle-plus"></i> &nbsp; New Record</span>
                    </a>
                </div>

                <div class="card-body table-responsive">
                    {{-- <table class="table table-light display dt-responsive nowrap" id="table1"> --}}
                    <table class="table table-light display dt-responsive compact" id="cetable1">
                        <thead style="font-family:-apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif">
                            <tr class="table-active">
                                <th hidden></th>
                                <th hidden></th>
                                <th class="text-center">ID</th>
                                <th class="text-center">COMPANY NAME</th>
                                <th class="text-center">ENGAGEMENT TITLE</th>
                                <th class="text-center">WORKSHOP TITLE</th>
                                <th class="text-center">CLUSTER</th>
                                <th class="text-center">INTELLIGENCE</th>
                                <th class="text-center">NUMBER OF PAX</th>
                                <th class="text-center">SCHEDULED DATES</th>
                                <th class="text-center">DATE ADDED</th>
                                <th class="text-center">Modify</th>
                                <th class="text-center"></th>
                            </tr>
                        </thead>

                        <tbody style="font-family:Arial, Helvetica, sans-serif">
                            @foreach ($data as $key => $item)
                                <tr id="{{ ++$table }}">
                                    <td hidden class="ids">{{ $item->id }}</td>
                                    <td hidden class="budget_number">{{ $item->workshop_id }}</td>
                                    <td class="text-center fw-bold py-3" role="button" data-toggle="modal" data-target="#exampleModal{{ $item->id }}">
                                    @foreach ($companyList as $company)
                                        {{ $company->company_name }}
                                    @endforeach
                                    </td>
                                    <td class="text-center fw-bold" role="button" data-toggle="modal" data-target="#exampleModal{{ $item->id }}">{{ ucfirst($item->engagement_title) }}</td>
                                    <td class="text-center fw-bold" role="button" data-toggle="modal" data-target="#exampleModal{{ $item->id }}">{{ $item->workshop_title }}</td>
                                    <td class="text-center fw-bold" role="button" data-toggle="modal" data-target="#exampleModal{{ $item->id }}">{{ $item->cluster }}</td>
                                    <td class="text-center fw-bold" role="button" data-toggle="modal" data-target="#exampleModal{{ $item->id }}">{{ $item->intelligence }}</td>
                                    <td class="text-center fw-bold" role="button" data-toggle="modal" data-target="#exampleModal{{ $item->id }}">{{ $item->pax_number }}</td>
                                    <td class="text-center fw-bold" role="button" data-toggle="modal" data-target="#exampleModal{{ $item->id }}">{{ $item->program_dates }}</td>
                                    <td class="text-center fw-bold" role="button" data-toggle="modal" data-target="#exampleModal{{ $item->id }}">{{ \Carbon\Carbon::parse($item->created_at)->toFormattedDateString()}}</td>
                                    <td class="text-center fw-bold text-center">
                                        {{-- buttons --}}
                                        <a href="{{ url('form/mgtstratu_workshops/'.$item->workshop_id.'/'.$item->id) }}">
                                            <span class="badge bg-success"><i class="bi bi-pencil-square"></i></span>
                                        </a>
                                        <a href="#" class="delete"  data-toggle="modal" data-target="#delete_estimate{{ $item->id }}">
                                            <span class="badge bg-danger">
                                                <i class="bi bi-trash"></i>
                                            </span>
                                        </a>
                                        <!-- Delete MgtStrat-U Workshops Record Modal -->
                                        <div class="modal custom-modal fade" id="delete_estimate{{ $item->id }}" role="dialog">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h3 class="mb-2 text-center">Delete MgtStrat-U Workshops Record</h3>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="form-header">
                                                            <h4 class="text-center mx-5">Are you sure want to delete
                                                                <b>{{$item->engagement_title}}</b>?
                                                            </h4>
                                                        </div>
                                                        @include('form.components.mgtstratu_workshops.delete')
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- END -->
                                    </td> {{-- end --}}
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
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

<script>
    //deletion of tbl row
    $(document).on('click','.delete',function()
    {
        var _this = $(this).parents('tr');
        $('.e_id').val(_this.find('.ids').text());
        $('.budget_number').val(_this.find('.budget_number').text());
    });
</script>

@section('script')
    <script>
        // Automatic change the status color
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

        $(document).ready( function () {
            $.fn.dataTable.moment( 'HH:mm MMM D, YY' );
            $.fn.dataTable.moment( 'dddd, MMMM Do, YYYY' );
            $('#cetable1').dataTable( {
                responsive: true,
                stateSave: true,
                "bScrollCollapse": true,
                "autoWidth": false,
                "order": [ 9, 'desc' ],
                "columnDefs": [
                    {
                        'type': 'date',
                        'targets': 9,

                    },
                    {
                        'searchable'    : false,
                        'targets'       : 11
                    },
                ],
                stateSaveCallback: function(settings,data) {
                    localStorage.setItem( 'DataTables_' + settings.sInstance, JSON.stringify(data) )
                    },
                stateLoadCallback: function(settings) {
                    return JSON.parse( localStorage.getItem( 'DataTables_' + settings.sInstance ) )
                    },
            } );
        } );

        //datatble of batch
        for (let i = 1; i < 1000; i++) {
            // console.log(i);
            // let table1 = document.querySelector(`#tables${i}`);
            // new simpleDatatables.DataTable(`#tables${i}`);
            $(`#tables${i}`).dataTable( {
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
        }
    </script>
@endsection