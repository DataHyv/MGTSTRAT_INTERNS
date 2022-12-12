@section('title', 'CUSTOMIZED RECORD')
<link rel="shortcut icon" type="image/png" href="{{ URL::to('assets/images/logo/logo.png') }}">
<link rel="stylesheet" href="{{ URL::to('css/custom.css') }}">
{{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> --}}
@extends('layouts.master')
@section('menu')
    @extends('sidebar.dashboard')
@endsection
@section('content')
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

            <section class="section">
                <div class="card mb-5 mt-5 h-75">
                    <div class="card-header col-12 d-flex justify-content-left mt-3 mb-3 mx-3">
                        <a class="btn btn-primary mt-2 mb-2" href="{{ route('form/customizedEngagement/new') }}">
                            <span><i class="fa-solid fa-file-circle-plus"></i> &nbsp; New Record</span>
                        </a>
                        {{-- <a class="btn btn-primary mt-2 mb-2 mx-5" href="{{ route('form/customizedEngagement/sub-fee') }}">
                            <span><i class="fa-solid fa-file-circle-plus"></i> &nbsp; TEST SUB FEE</span>
                        </a> --}}
                    </div>

                    <div class="card-body">
                        <table class="table table-light" id="table1">
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
                                    {{-- <th class="text-center">SCHEDULED DATES</th>
                                    <th class="text-center">SCHEDULED TIME</th> --}}
                                    <th class="text-center">DATE ADDED</th>
                                    <th class="text-center" colspan="2">Modify</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($data as $key => $item)
                                    <tr>
                                        <td hidden class="ids">{{ $item->id }}</td>
                                        <td hidden class="budget_number">{{ $item->cstmzd_eng_form_id }}</td>
                                        {{-- <td class="text-center">
                                            <button type="button" class="btn btn-light mx-3" data-toggle="modal" data-target="#exampleModal{{ $item->id }}">
                                                <i class="fa-regular fa-folder-open"></i>
                                            </button>
                                        </td> --}}
                                        <td class="id text-center text-uppercase fw-bold" role="button" data-toggle="modal" data-target="#exampleModal{{ $item->id }}">{{ $item->cstmzd_eng_form_id }}</td>
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
                                        {{-- <td class="text-center fw-bold" role="button" data-toggle="modal" data-target="#exampleModal{{ $item->id }}">
                                            @if($item->program_dates)
                                                @foreach($item->program_dates as $dates)
                                                    {{$dates.', '}}
                                                @endforeach
                                            @endif
                                        </td>
                                        <td class="fw-bold text-center" role="button" data-toggle="modal" data-target="#exampleModal{{ $item->id }}">
                                            @if($item->program_start_time)
                                                @foreach($item->program_start_time as $time)
                                                    {{$time}}
                                                @endforeach
                                            @endif
                                        </td> --}}
                                        <td class="text-center fw-bold" role="button" data-toggle="modal" data-target="#exampleModal{{ $item->id }}">
                                            {{ \Carbon\Carbon::parse($item->created_at)->toFormattedDateString()}}
                                        </td>
                                        <td class="text-center fw-bold"> {{-- buttons --}}
                                            <a href=".bd-example-modal-lg" data-toggle="modal" data-target=".bd-example-modal-lg">
                                                <span class="badge bg-info"><i class="bi bi-person-plus-fill"></i></span>
                                            </a>

                                            <a href="{{ url('form/customizedEngagement/detail/' . $item->cstmzd_eng_form_id) }}">
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
                                                                <h5 class="text-center mx-5">Are you sure want to delete
                                                                    <b>{{$item->client->company_name}}</b>?</h5>
                                                            </div>
                                                            <form action="{{ route('deleteRecord') }}" method="POST">
                                                                @csrf
                                                                <input type="hidden" name="id" class="e_id" value="">
                                                                <input type="hidden" name="cstmzd_eng_form_id" class="budget_number" value="">
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
                                                            <table class="table display" id="table2">
                                                                <thead>
                                                                    <tr class="table-secondary">
                                                                        <th class="text-center">ID</th>
                                                                        <th class="text-center">Batch Name</th>
                                                                        <th class="text-center">Sessions</th>
                                                                        <th class="text-center">Amount</th>
                                                                        <th class="text-center">Modify</th>
                                                                    </tr>
                                                                </thead>

                                                                <tbody class="text-center">
                                                                    @foreach ($data2 as $key => $item2)
                                                                        @if($item->id == $item2->customized_engagement_forms_id)
                                                                            <tr>
                                                                                <td>
                                                                                    <label class="fw-bold " for="formGroupBatchInput">{{ $item2->id }}</label>
                                                                                </td>
                                                                                <td>
                                                                                    <label class="fw-bold" for="">Batch {{ $item2->batch_number }}</label>
                                                                                </td>
                                                                                <td>
                                                                                    <label class="fw-bold" for="">{{ $item2->session_number }}</label>
                                                                                </td>
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
                                                                            </tr>

                                                                        @elseif ($loop->last)
                                                                            <tr>
                                                                                <td colspan="5">
                                                                                    <button type="button" class="btn btn-primary add-batch">
                                                                                        <i class="fa-solid fa-square-plus"></i> Add Batch
                                                                                    </button>
                                                                                </td>
                                                                            </tr>

                                                                        @endif
                                                                    @endforeach
                                                                    <tr>
                                                                        <td colspan="5">
                                                                            <button type="button" class="btn btn-primary"><i class="fa-solid fa-square-plus"></i> Add Batch</button>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>

                                                        <div class="modal-footer">
                                                            {{-- <button type="button" class="btn btn-primary">Save changes</button> --}}
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
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
<script>
    //deletion of tbl row
    $(document).on('click','.delete',function()
    {
        var _this = $(this).parents('tr');
        $('.e_id').val(_this.find('.ids').text());
        $('.budget_number').val(_this.find('.budget_number').text());
    });

    $(document).ready(function() {
        // $('.select2-hidden-accessible').select2({
        //     theme: 'bootstrap',
        //     width: 'resolve',
        // });

        var batch = 1;
        $("#addBatch").on("click", function() {
            // Adding a row inside the tbody.
            $("#batch").append(`
            <div class="form-group row justify-content-center batches" id="batches${batch}">
                <div class="col-md-3">
                    <label class="mb-2" for="formGroupClientInput">Client Name</label>
                    <input class="input form-control @error('client_id') is-invalid @enderror" id="" name="" value="MGT_STRAT" readonly>
                    @error('client_id')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="col-md-3">
                    <label class="mb-2" for="formGroupBatchInput">Batch Name</label>
                    <input type="text" class="form-control" id="formGroupBatchInput">
                </div>

                <div class="col-md-3">
                    <label class="mb-2" for="formGroupSessionInput">Session</label>
                    <input type="text" class="form-control" id="formGroupSessionInput">
                </div>

                <div class="col-md-2 mt-4 pt-3">
                    <div class="form-group">
                        <input class="form-check-input" type="checkbox" id="gridCheck">
                        <label class="form-check-label" for="gridCheck">
                            Same Data
                        </label>
                    </div>
                </div>

                <div class="col-lg-1 col-md-1">
                    <div class="px-0">
                        <label class="fw-bold invisible overflow-hidden mb-4">Add</label>
                        <a href="javascript:void(0)" class="text-danger font-18 remove px-0" title="Remove">
                            <i class="fa fa-trash-o"></i>
                        </a>
                    </div>
                </div
            </div>
            `);
        });

        $("#batches").on("click", ".remove", function () {
            // Getting all the rows next to the row
            // containing the clicked button
            var child = $(this).closest('.d-flex').nextAll();

            // Iterating across all the rows
            // obtained to change the index
            child.each(function () {
                // Getting <tr> id.
                var id = $(this).attr("id");

                // Gets the row number from <tr> id.
                var dig = parseInt(id.substring(7));

                // Modifying row id.
                $(this).attr("id", `batch${dig - 1}`);
            });

            // Removing the current row.
            $(this).closest('.d-none').remove();

            // Decreasing total number of rows by 1.
            dates--;
        });
    });
</script>

@section('script')
    <script>
        //datatble of batch
        // let table2 = document.querySelector('#table2');
        // let dataTable2 = new simpleDatatables.DataTable('#table2');
        new simpleDatatables.DataTable('#table2');
    </script>
@endsection
