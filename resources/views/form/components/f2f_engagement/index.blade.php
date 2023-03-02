@section('title', 'F2F RECORD')
<link rel="shortcut icon" type="image/png" href="{{ URL::to('assets/images/logo/logo.png') }}">
<link rel="stylesheet" href="{{ URL::to('css/custom.css') }}">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
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
                        <h3>F2F Engagement Record</h3>
                        {{-- <p class="text-subtitle text-muted">Budget information list</p> --}}
                    </div>
                    {{-- <div class="col-12 col-md-6 order-md-2 order-first">
                        <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                            <ol class="breadcrumb"></ol>
                                <li class="breadcrumb-item"><a href="{{ route('home') }}">Dashboard</a></li>
                                <li class="breadcrumb-item active" aria-current="page">F2F Engagement</li>
                            </ol>
                        </nav>
                    </div> --}}
                    <div class="col-12 col-md-6 order-md-2 order-first">
                        <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                            <ol class="breadcrumb bg-transparent">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}">Dashboard</a></li>
                                <li class="breadcrumb-item active" aria-current="page">F2F Engagement</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>

            {{-- message --}}
            {!! Toastr::message() !!}

            <section class="section">
                <div class="card mb-5 mt-5">
                    <div class="card-header col-12 d-flex justify-content-left mt-3 mb-3">
                        <a class="btn btn-primary mt-2 mb-2" href="{{ route('form/f2f_engagement/new') }}">
                            <span><i class="fa-solid fa-file-circle-plus"></i> &nbsp; New Record</span>
                        </a>
                    </div>
                    <div class="card-body table-responsive">
                        <table class="table display dt-responsive nowrap" id="f2f-table">
                            <thead class="table-secondary">
                                <tr class="text-dark">
                                    <th class="text-center" hidden></th>
                                    <th class="text-center">ID</th>
                                    <th class="text-center">STATUS</th>
                                    <th class="text-center">COMPANY NAME</th>
                                    <th class="text-center">ENGAGEMENT TYPE</th>
                                    <th class="text-center">ENGAGEMENT TITLE</th>
                                    <th class="text-center">NUMBER OF PAX</th>
                                    {{-- <th class="text-center">SCHEDULED DATES</th>
                                    <th class="text-center">SCHEDULED TIME</th> --}}
                                    <th class="text-center">DATE ADDED</th>
                                    <th class="text-center">Modify</th>
                                </tr>
                            </thead>

                            <tbody>
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

@section('script')
{{-- <script src="https://cdn.datatables.net/plug-ins/1.13.3/dataRender/datetime.js"></script> --}}
<script>
    $(document).ready(function (){
        fetchRecord();
        function fetchRecord(){
            $.ajax({
                type: "GET",
                url: "/form/f2f_engagement/fetch",
                dataType: "json",
                success: function (response) {
                    //EACH F2F RECORD
                    $.each(response.data, function (key, item) {
                        // Declare and store the date into a variable
                        const currDate = item.created_at;

                        // Converts timestamp into Date Object
                        const dt = new Date(currDate)

                        // Print the Date string
                        console.log(dt.toDateString())

                        // Declare and store the data into a variable
                        var body = "<tr>";
                        body    += '<td hidden class="budget_number">'+item.cstmzd_eng_form_id+'</td>';
                        body    += '<td class="id text-center text-uppercase fw-bold">'+item.id+'</td>';
                        body    += '<td class="text-center"><span id="status" class="badge">'+item.status+'</span></td>';
                        body    += '<td class="name text-center fw-bold">'+item.client.company_name+'</td>';
                        body    += '<td class="name text-center fw-bold">'+item.customized_type+'</td>';
                        body    += '<td class="email text-center fw-bold">'+item.engagement_title+'</td>';
                        body    += '<td class="fw-bold text-center">'+item.pax_number+'</td>';
                        body    += '<td class="fw-bold text-center">'+dt.toDateString().split(' ').slice(1).join(' ')+'</td>';
                        body    += '<td class="text-center fw-bold text-center"><a href="#">\
                            <span class="badge bg-success"><i class="bi bi-pencil-square"></i></span></a>\
                            <a href="#"> <span class="badge bg-danger"><i class="bi bi-trash"></i></span> </a></td>';
                        body    += "</tr>";

                        $( "#f2f-table tbody" ).append(body);
                    });

                    //INITIALIZE DATATABLE
                    $( "#f2f-table" ).DataTable();

                    //STATUS BADGE
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
                },
                error: function() {
                    alert('Fail!');
                }
            });
        }
    });
</script>
@endsection

