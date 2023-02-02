@section('title', 'CUSTOMIZED RECORD')
<link rel="shortcut icon" type="image/png" href="{{ URL::to('assets/images/logo/logo.png') }}">
<link rel="stylesheet" href="{{ URL::to('css/custom.css') }}">
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
{{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> --}}
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
                        <h3>Customized Engagement Record</h3>
                        {{-- <p class="text-subtitle text-muted">Budget information list</p> --}}
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

            @if (session('success'))
            <script>
                $( document ).ready(function() {
                    $('#exampleModal{{ session()->get('mother_id') }}').modal('show');
                    $('.modal-close').click(function(){
                        $('#exampleModal{{ session()->get('mother_id') }}').modal('hide');
                    });
                });
            </script>
            @endif


            <section class="section">
                <div class="card mb-5 mt-5 mh-75">
                    <div class="card-header col-12 d-flex justify-content-left mt-3 mb-3">
                        <a class="btn btn-primary mt-2 mb-2" href="{{ route('form/customizedEngagement/new') }}">
                            <span><i class="fa-solid fa-file-circle-plus"></i> &nbsp; New Record</span>
                        </a>
                    </div>

                    <div class="card-body table-responsive">
                        <table class="table table-light display dt-responsive nowrap" id="table1">
                            <thead>
                                <tr class="table-secondary">
                                    <th hidden></th>
                                    <th hidden></th>
                                    {{-- <th></th> --}}
                                    <th class="text-center">ID</th>
                                    <th class="text-center">STATUS</th>
                                    <th class="text-center">COMPANY NAME</th>
                                    <th class="text-center">ENGAGEMENT TYPE</th>
                                    <th class="text-center">ENGAGEMENT TITLE</th>
                                    <th class="text-center">NUMBER OF PAX</th>
                                    <th class="text-center">ENGAGEMENT FEES</th>
                                    {{-- <th class="text-center">SCHEDULED DATES</th>
                                    <th class="text-center">SCHEDULED TIME</th> --}}
                                    <th class="text-center">DATE ADDED</th>
                                    <th class="text-center">Modify</th>
                                    <th class="text-center"></th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($data as $key => $item)
                                    <tr id="{{ ++$table }}">
                                        <td hidden class="ids">{{ $item->id }}</td>
                                        <td hidden class="budget_number">{{ $item->cstmzd_eng_form_id }}</td>
                                        <td class="id text-center text-uppercase fw-bold">{{ $item->cstmzd_eng_form_id }}</td>
                                        <td class="text-center fw-bold py-3" role="button" data-toggle="modal" data-target="#exampleModal{{ $item->id }}">
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
                                        <td class="text-center fw-bold" role="button" data-toggle="modal" data-target="#exampleModal{{ $item->id }}">
                                            {{ $item->client->company_name }}
                                        </td>
                                        <td class="text-center fw-bold" role="button" data-toggle="modal" data-target="#exampleModal{{ $item->id }}">
                                            {{ $item->customized_type }}
                                        </td>
                                        <td class="text-center fw-bold" role="button" data-toggle="modal" data-target="#exampleModal{{ $item->id }}">
                                            {{ $item->engagement_title }}
                                        </td>
                                        <td class="text-center fw-bold" role="button" data-toggle="modal" data-target="#exampleModal{{ $item->id }}">
                                            {{ $item->pax_number }}
                                        </td>
                                        <td class="text-center fw-bold" role="button" data-toggle="modal" data-target="#exampleModal{{ $item->id }}">
                                            {{ $item->Engagement_fees_total }}
                                        </td>
                                        <td class="text-center fw-bold" role="button" data-toggle="modal" data-target="#exampleModal{{ $item->id }}">
                                            {{ \Carbon\Carbon::parse($item->created_at)->toFormattedDateString()}}
                                        </td>
                                        <td class="text-center fw-bold">
                                            {{-- buttons --}}
                                            <a href="{{ url('form/customizedEngagement/detail/'.$item->cstmzd_eng_form_id.'/'.$item->id) }}">
                                                <span class="badge bg-success"><i class="bi bi-pencil-square"></i></span>
                                            </a>

                                            <a href="#" class="delete"  data-toggle="modal" data-target="#delete_estimate{{ $item->id }}">
                                                <span class="badge bg-danger">
                                                    <i class="bi bi-trash"></i>
                                                </span>
                                            </a>

                                            <!-- Delete Customized Engagement Modal -->
                                            <div class="modal custom-modal fade" id="delete_estimate{{ $item->id }}" role="dialog">
                                                <div class="modal-dialog modal-dialog-centered">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h3 class="mb-2 text-center">Delete Customized Engagement</h3>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="form-header">
                                                                <h4 class="text-center mx-5">Are you sure want to delete
                                                                    <b>{{$item->engagement_title}}</b>?
                                                                </h4>
                                                            </div>
                                                            <form action="{{ route('deleteRecord') }}" method="POST">
                                                                @csrf
                                                                <input type="hidden" name="id" class="e_id" value="">
                                                                <input type="hidden" name="cstmzd_eng_form_id" class="budget_number" value="">
                                                                <input type="hidden" name="engagement_title" value="{{ $item->engagement_title }}" readonly>
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
                                            <!-- END -->
                                        </td> {{-- end --}}

                                        <td> {{-- modal --}}
                                            <div class="modal fade" id="exampleModal{{ $item->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-lg">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title text-uppercase fw-bold">Batches</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>

                                                        <div class="modal-body">
                                                            <table class="table display" id="tables{{ $table }}">
                                                                <thead>
                                                                    <tr class="table-secondary">
                                                                        <th class="text-center">ID</th>
                                                                        <th class="text-center">Batch Name</th>
                                                                        <th class="text-center">Sessions</th>
                                                                        <th class="text-center">Status</th>
                                                                        <th class="text-center">Program date</th>
                                                                        <th class="text-center">Contract Price</th>
                                                                        <th class="text-center">Modify</th>
                                                                        <th></th>
                                                                    </tr>
                                                                </thead>

                                                                <tbody class="text-center appendBatch">
                                                                    @foreach ($data2 as $key => $item2)
                                                                        @if($item->id == $item2->customized_engagement_forms_id)
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
                                                                                        {{
                                                                                            number_format(
                                                                                                floatval(
                                                                                                    //remove comma
                                                                                                    str_replace(',', '', $item2->customized_engagement_form->Engagement_fees_total)
                                                                                                ) /
                                                                                                (
                                                                                                    $item2->customized_engagement_form->batch_number *
                                                                                                    $item2->customized_engagement_form->session_number
                                                                                                )
                                                                                                , 2, '.', ','
                                                                                            )
                                                                                         }}
                                                                                    </label>
                                                                                </td>
                                                                                <td>
                                                                                    <a href="{{ url('form/customizedEngagement/sub-fee/' . $item2->id) }}" class="text-success font-18 px-0" title="Add" id="edit">
                                                                                        <i class="fa-regular fa-pen-to-square"></i>
                                                                                    </a>
                                                                                </td>
                                                                                <td></td>
                                                                            </tr>
                                                                        @endif
                                                                    @endforeach
                                                                </tbody>
                                                            </table>
                                                        </div>

                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary modal-close" data-dismiss="modal">Close</button>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </td>{{-- end --}}

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
