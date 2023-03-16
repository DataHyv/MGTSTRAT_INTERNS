@section('title', 'CLIENTS')
<link rel="stylesheet" href="{{ URL::asset('css/custom.css') }}">
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
                    <h3>Consultant Fees</h3>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb bg-transparent">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Consultant Fees</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>

        {{-- <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Customized Engagement</h3>
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
        </div> --}}

        @include('form.components.consultant_fees.create')
        @include('form.components.consultant_fees.edit')

        {{-- message --}}
        {{-- {!! Alert::message() !!} --}}
        {{-- @if(session('status'))
            <div class="alert alert-success">{{ session('status') }}</div>
        @endif --}}
        <section class="section">
            <div class="card mb-5 mt-5">
                <div id="success_message"></div>
                <div class="card-header col-12 d-flex justify-content-left mt-3 mb-3 mx-3">
                    <button type="button" class="btn btn-primary me-1 mb-1" data-toggle="modal" data-target="#ConsultantFeesModal">
                        <span><i class="fa-solid fa-user-plus mr-2"></i> New Consultant Fees</span>
                    </button>
                </div>

                <div class="card-body table-responsive">
                    <table class="table display dt-responsive nowrap" id="consultant-table">

                        <thead class="table-secondary" style="font-family:-apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif">
                            <tr class="text-dark text-center">
                                <th hidden class="text-center text-uppercase">#</th>
                                <th class="text-center text-uppercase">#</th>
                                <th class="text-center">Full Name</th>
                                <th class="text-center">Date Added</th>
                                <th class="text-center text-uppercase">Modify</th>
                            </tr>
                        </thead>

                        <tbody class="text-center">
                        </tbody>

                    </table>
                </div>
            </div>
        </section>

        <footer>
            <div class="footer clearfix mb-0 text-muted">
                <div class="float-start">
                    <p>2022 &copy; MGT-STRAT</p>
                </div>
                <div class="float-end">
                    <p>Crafted with <span class="text-danger"><i class="bi bi-heart"></i></span> by <a
                            href="#">MGT-STRAT</a></p>
                </div>
            </div>
        </footer>

    </div>

    {{-- F2F ENGAGEMENT SCRIPT --}}
    <script type="text/javascript" src="/js/currencyFormat.js"></script>
    {{-- <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script> --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    @section('script')
    <script>
    $(document).ready( function () {

        fetchConsultantFees();
        function fetchConsultantFees(){
            $.ajax({
                type: "GET",
                url: "/consultant-fetch",
                dataType: "json",
                success: function (response) {
                    //EACH F2F RECORD
                    $.each(response.data, function (key, item) {
                        // Declare and store the date into a variable
                        const currDate = item.created_at;
                        const keys = key++;

                        // Converts timestamp into Date Object
                        const dt = new Date(currDate)

                        // Declare and store the data into a variable
                        var body = "<tr>";
                        body    += '<td hidden class="budget_number">'+item.id+'</td>';
                        body    += '<td class="fw-bold text-dark">'+keys+'</td>';
                        body    += '<td class="id fw-bold">'+item.first_name+' '+item.last_name+'</td>';
                        // body    += '<td class="fw-bold">'+dt.toDateString().split(' ').slice(1).join(' ')+'</td>';
                        body    += '<td class="fw-bold">'+dt.toDateString().split(' ').slice(1).join(' ').replace(/(\d{2})(?=\s)/, "$1,")+'</td>';
                        body    += '<td class="fw-bold"><button class="edit_consultant btn btn-success" value="'+item.id+'">\
                                    <i class="bi bi-pencil-square"></i></button>\
                                    <button class="delete_consultant btn btn-danger" value="'+item.id+'"><i class="bi bi-trash"></i></button></td>';
                        body    += "</tr>";

                        $( "#consultant-table tbody" ).append(body);
                    });

                    //INITIALIZE DATATABLE
                    $.fn.dataTable.moment( 'HH:mm MMM D, YY' );
                    $.fn.dataTable.moment( 'dddd, MMMM Do, YYYY' );
                    $("#consultant-table").dataTable({
                        stateSave: true,
                        responsive: true,
                        "bScrollCollapse": true,
                        "autoWidth": false,
                        "order": [ 3, 'desc' ],
                        "columnDefs": [
                            { "type": "date", "targets":3, }
                        ]
                    });
                },
                error: function() {
                    alert('Fail to load record!');
                }
            });
        };

        $(document).on('click', '.edit_consultant', function (e) {
            var consultant_id = $(this).val();
            console.log(consultant_id);
            $('#editModal').modal('show');
            $.ajax({
                type: "GET",
                url: "/edit-consultant/"+consultant_id,
                success: function (response) {
                    // console.log(response);
                    if (response.status == 404) {
                        $('#success_message').html('')
                        $('#success_message').addClass('alert alert-danger')
                        $('#success_message').text(response.message)
                    }
                    else {
                        $('#edit_consultant_id').val(consultant_id);
                        $('#edit_fname').val(response.consultant_fees.first_name);
                        $('#edit_lname').val(response.consultant_fees.last_name);
                        $('#edit_lead_facilitator').val(response.consultant_fees.lead_faci);
                        $('#edit_co_lead').val(response.consultant_fees.co_lead);
                        $('#edit_co_lead_f2f').val(response.consultant_fees.co_lead_f2f);
                        $('#edit_co_faci').val(response.consultant_fees.co_faci);
                        $('#edit_lead_consultant').val(response.consultant_fees.lead_consultant);
                        $('#edit_consulting').val(response.consultant_fees.consulting);
                        $('#edit_designer').val(response.consultant_fees.designer);
                        $('#edit_moderator').val(response.consultant_fees.moderator);
                        $('#edit_producer').val(response.consultant_fees.producer);
                    }
                }
            });
        });

    } );
    </script>
    @endsection
@endsection
