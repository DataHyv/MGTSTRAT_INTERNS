@section('title', 'CUSTOMIZED RECORD')
<link rel="shortcut icon" type="image/png" href="{{ URL::to('assets/images/logo/logo.png') }}">
<link rel="stylesheet" href="{{ URL::to('css/custom.css') }}">
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
                <div class="card mb-5 mt-5">
                    <div class="card-header col-12 d-flex justify-content-left mt-3 mb-3 mx-3">
                        <a class="btn btn-primary mt-2 mb-2" href="{{ route('form/customizedEngagement/new') }}">
                            <span><i class="fa-solid fa-file-circle-plus"></i> &nbsp; New Record</span>
                        </a>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped" id="table1">
                            <thead>
                                <tr class="text-dark">
                                    <th class="text-center">ID</th>
                                    <th class="text-center">STATUS</th>
                                    <th class="text-center">COMPANY NAME</th>
                                    <th class="text-center">ENGAGEMENT TYPE</th>
                                    <th class="text-center">ENGAGEMENT TITLE</th>
                                    <th class="text-center">NUMBER OF PAX</th>
                                    <th class="text-center">SCHEDULED DATES</th>
                                    <th class="text-center">SCHEDULED TIME</th>
                                    <th class="text-center">DATE ADDED</th>
                                    <th class="text-center">Modify</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $key => $item)
                                    <tr>
                                        <td hidden class="ids">{{ $item->id }}</td>
                                        <td hidden class="budget_number">{{ $item->cstmzd_eng_form_id }}</td>
                                        {{-- <input type="hidden" name="id" data-id="{{ $item->id }}">
                                        <input type="hidden" name="cstmzd_eng_form_id" cstmzd-id="{{ $item->cstmzd_eng_form_id }}"> --}}
                                        <td class="id text-center text-uppercase fw-bold">{{ $item->cstmzd_eng_form_id }}</td>
                                        <td class="text-center">
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
                                        <td class="name text-center fw-bold">{{ $item->client->company_name }}</td>
                                        <td class="name text-center fw-bold">{{ $item->customized_type }}</td>
                                        <td class="email text-center fw-bold">{{ $item->engagement_title }}</td>
                                        <td class="fw-bold text-center">{{ $item->pax_number }}</td>
                                        {{-- <td class="fw-bold text-center">{{ Str::limit(str_replace (array('[', '"', ']'), ' ' , $item->program_dates),'14') }}</td>
                                        <td class="fw-bold text-center">{{ Str::limit(str_replace (array('[', '"', ']'), ' ' , $item->program_start_time),'10') }}</td> --}}
                                        <td class="fw-bold text-center">
                                            @if($item->program_dates)
                                                @foreach($item->program_dates as $dates)
                                                    {{$dates.', '}}
                                                @endforeach
                                            @endif
                                        </td>
                                        <td class="fw-bold text-center">
                                            @if($item->program_start_time)
                                                @foreach($item->program_start_time as $time)
                                                    {{$time}}
                                                @endforeach
                                            @endif
                                        </td>
                                        <td class="fw-bold text-center">{{ \Carbon\Carbon::parse($item->created_at)->toFormattedDateString()}}</td>
                                        <td class="text-center fw-bold text-center">
                                            <a href=".bd-example-modal-lg" data-toggle="modal" data-target=".bd-example-modal-lg">
                                                <span class="badge bg-info"><i class="bi bi-person-plus-fill"></i></span>
                                            </a>
                                            {{-- <button type="button" data-toggle="modal" data-target=".bd-example-modal-lg">
                                                <span class="badge bg-info"><i class="bi bi-person-plus-fill"></i></span>
                                            </button> --}}
                                            <a href="{{ url('form/customizedEngagement/detail/' . $item->cstmzd_eng_form_id) }}">
                                                <span class="badge bg-success"><i class="bi bi-pencil-square"></i></span>
                                            </a>
                                            {{-- <a href="{{ url('delete/' . $item->id) }}"
                                                onclick="return confirm('Are you sure to want to delete {{$item->client->company_name}}?')"><span
                                                    class="badge bg-danger"><i class="bi bi-trash"></i></span>
                                            </a> --}}
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
                                        </td>
                                        
                                    </tr>
                                    <!-- BATCHES -->
                                    <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                  <h5 class="modal-title">Add Batches</h5>
                                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                  </button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="batch" id="batch">
                                                        <div class="form-group row justify-content-center batches" id="batches">
                                                            <div class="col-md-3">
                                                                <label class="mb-2" for="formGroupClientInput">Client Name</label>
                                                                <input class="input form-control @error('client_id') is-invalid @enderror" id="" name="" value="{{ $item->client->company_name }}" readonly>
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
                                                                    <label class="fw-bold invisible overflow-hidden mb-3">Add</label>
                                                                    <a href="javascript:void(0)" class="text-success font-18 px-0" title="Add"
                                                                    id="addBatch"><i class="fa fa-plus"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="modal-footer">
                                                  <button type="button" class="btn btn-primary">Save changes</button>
                                                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>
        </div>
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
@endsection
<script src="https://code.jquery.com/jquery-3.5.0.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<script>
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

