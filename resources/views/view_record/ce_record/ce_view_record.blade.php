@section('title', 'Webinar Record')
<link rel="shortcut icon" type="image/png" href="{{ URL::to('assets/images/logo/logo.png') }}">
<link rel="stylesheet" href="{{ URL::to('css/custom.css') }}">
@extends('layouts.master')
@section('menu')
    @extends('sidebar.viewrecord')
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
                                <li class="breadcrumb-item active" aria-current="page">View</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>

            {{-- message --}}
            {!! Toastr::message() !!}

            <section class="section">
                <div class="card">
                    {{-- <div class="card-header">
                        Customized Engagement Record
                    </div> --}}
                    <div class="card-body">
                        <table class="table table-striped" id="table1">
                            <thead>
                                <tr class="text-dark">
                                    <th class="text-center">BATCH NUMBER</th>
                                    <th class="text-center">STATUS</th>
                                    <th class="text-center">COMPANY NAME</th>
                                    <th class="text-center">ENGAGEMENT TYPE</th>
                                    <th class="text-center">WEBINAR TITLE</th>
                                    <th class="text-center">NUMBER OF PAX</th>
                                    <th class="text-center">SCHEDULED DATES</th>
                                    <th class="text-center">SCHEDULED TIME</th>
                                    <th class="text-center">DATE ADDED</th>
                                    <th class="text-center">Modify</th>
                                    {{-- <th class="none">Age</th>
                                    <th class="none">Start date</th>
                                    <th class="none">Salary</th> --}}
                                </tr>
                            </thead>
                            <tbody>
                                {{-- {{ $companyList->company_name }} --}}
                                @foreach ($data as $key => $item)
                                    <tr>
                                        <td hidden class="ids">{{ $item->id }}</td>
                                        <td hidden class="budget_number">{{ $item->cstmzd_eng_form_id }}</td>
                                        <td class="id text-center text-uppercase fw-bold">{{ $item->batch_number }}</td>
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
                                        {{-- <td class="name text-center fw-bold">{{ $item->clients_id }}</td> --}}
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
                                            <a href="">
                                                <span class="badge bg-info"><i class="bi bi-person-plus-fill"></i></span>
                                            </a>
                                            <a href="{{ url('form/customizedEngagement/detail/' . $item->cstmzd_eng_form_id) }}">
                                                <span class="badge bg-success"><i class="bi bi-pencil-square"></i></span>
                                            </a>
                                            {{-- <a href="{{ url('delete/' . $item->id) }}"
                                                onclick="return confirm('Are you sure to want to delete it?')"><span
                                                    class="badge bg-danger"><i class="bi bi-trash"></i></span>
                                            </a> --}}
                                            <a href="#" class="delete"  data-toggle="modal" data-target="#delete_estimate">
                                                <span class="badge bg-danger">
                                                    <i class="bi bi-trash"></i>
                                                </span>
                                            </a>
                                        </td>
                                    </tr>
                                    <!-- Delete Customized Engagement Modal -->
                                    <div class="modal custom-modal fade" id="delete_estimate" role="dialog">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h3 class="mb-2 text-center">Delete Customized Engagement</h3>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="form-header">
                                                        <h5 class="text-center mx-5">Are you sure want to delete <br>
                                                            <b>{{$item->batch_number}}</b> of <b>{{$item->client->company_name}}</b>?</h5>
                                                    </div>
                                                    <form action="{{ route('deleteRecord') }}" method="POST">
                                                        @csrf
                                                        <input type="hidden" name="id" class="e_id" value="">
                                                        <input type="hidden" name="cstmzd_eng_form_id" class="budget_number" value="">
                                                        <div class="modal-footer">
                                                            <div class="">
                                                                <button type="submit" class="btn btn-primary continue-btn submit-btn">Delete</button>
                                                            </div>
                                                            {{-- <div class=""></div> --}}
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
</script>

