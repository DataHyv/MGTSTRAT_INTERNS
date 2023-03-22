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

            <div id="success_message"></div>

            <div class="card mb-5 mt-5">
                <div id="success_message"></div>
                <div class="card-header col-12 d-flex justify-content-left mt-3 mb-3 mx-3">
                    <button type="button" class="btn btn-primary me-1 mb-1" data-toggle="modal" data-target="#ConsultantFeesModal">
                        <span><i class="fa-solid fa-user-plus mr-2"></i> New Consultant Fees</span>
                    </button>
                </div>

                <div class="card-body table-responsive">

                    {{-- Delete Modal --}}
                    <div class="modal fade" id="DeleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Delete Consultant</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <h4>Confirm to Delete Consultant ?</h4>
                                    <input type="hidden" id="deleteing_id">
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary delete_consultant">Yes Delete</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- End - Delete Modal --}}

                    <table class="table display dt-responsive nowrap" id="consultant-table">
                        <thead class="table-secondary" style="font-family:-apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif">
                            <tr class="text-dark text-center">
                                <th hidden class="text-center text-uppercase">#</th>
                                <th class="text-center text-uppercase">id</th>
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
                    $('#consultant-table tbody').append('');
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
                        body    += '<td class="fw-bold text-dark">'+item.id+'</td>';
                        body    += '<td class="id fw-bold">'+item.first_name+' '+item.last_name+'</td>';
                        body    += '<td class="fw-bold">'+dt.toDateString().split(' ').slice(1).join(' ').replace(/(\d{2})(?=\s)/, "$1,")+'</td>';
                        body    += '<td class="fw-bold"><button class="edit_consultant btn btn-success" value="'+item.id+'">\
                                    <i class="bi bi-pencil-square"></i></button>\
                                    <button class="delete_btn btn btn-danger" value="'+item.id+'"><i class="bi bi-trash"></i></button></td>';
                        body    += "</tr>";

                        $( "#consultant-table tbody" ).append(body);
                    });

                    // INITIALIZE DATATABLE
                   var table = $("#consultant-table").dataTable({
                        stateSave: true,
                        responsive: true,
                        "processing": true,
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

        $(document).on('click', '.add_consultant', function (e) {
            e.preventDefault();
            $("#ConsultantFeesModal").modal("hide");
            var data = {
                'first_name': $('.first_name').val(),
                'last_name': $('.last_name').val(),
                'lead_faci': $('.lead_faci').val(),
                'co_lead': $('.co_lead').val(),
                'co_lead_f2f': $('.co_lead_f2f').val(),
                'co_faci': $('.co_faci').val(),
                'lead_consultant': $('.lead_consultant').val(),
                'consulting': $('.consulting').val(),
                'designer': $('.designer').val(),
                'moderator': $('.moderator').val(),
                'producer': $('.producer').val(),
            };

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                type: "POST",
                url: "/consultant-fees",
                data: data,
                dataType: "json",
                success: function (response) {
                    if(response.status == 400)
                    {
                        $('#save_errList').html("");
                        $('#save_errList').addClass("alert alert-danger");
                        $.each(response.errors, function (key, err_values) {
                            $('#save_errList').append('<li>'+err_values+'</li>')
                        });
                    }
                    else
                    {
                        $('#save_errList').html("");
                        $('#ConsultantFeesModal').trigger('click');
                        $('#ConsultantFeesModal').find('input').val("");
                        Swal.fire({
                            title: 'Successfully Added!',
                            // text: 'Do you want to continue',
                            icon: 'success',
                            confirmButtonText: 'Cool',
                            timer: 1000
                        })
                        .then(function(){
                            location.reload();
                        });
                    }

                }
            });

        });

        $(document).on('click', '.edit_consultant', function (e) {
            var consultant_id = $(this).val();
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
                        $('#edit_consultant_id').val(consultant_id);
                    }
                }
            });
        });

        $(document).on('click','.update_consultant', function (e) {
            e.preventDefault();
            var id = $('#edit_consultant_id').val();
            var data = {
                'first_name' : $('#edit_fname').val(),
                'last_name' : $('#edit_lname').val(),
                'lead_faci' : $('#edit_lead_facilitator').val(),
                'co_lead' : $('#edit_co_lead').val(),
                'co_lead_f2f' : $('#edit_co_lead_f2f').val(),
                'co_faci' : $('#edit_co_faci').val(),
                'lead_consultant' : $('#edit_lead_consultant').val(),
                'consulting' : $('#edit_consulting').val(),
                'designer' : $('#edit_designer').val(),
                'moderator' : $('#edit_moderator').val(),
                'producer' : $('#edit_producer').val(),
            }

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                type: "PUT",
                url: "/update-consultant/" + id,
                data: data,
                dataType: "json",
                success: function (response) {
                    // console.log(response)
                    if(response.status == 400)
                    {
                        $('#save_errList').html("");
                        $('#save_errList').addClass("alert alert-danger");
                        $.each(response.errors, function (key, err_values) {
                            $('#save_errList').append('<li>'+err_values+'</li>')
                        });
                    }
                    else
                    {
                        $('#save_errList').html("");
                        $('#ConsultantFeesModal').trigger('click');
                        $('#ConsultantFeesModal').find('input').val("");
                        Swal.fire({
                            title: 'Updated Successfully!',
                            icon: 'success',
                            confirmButtonText: 'Cool',
                            timer: 1000
                        })
                        .then(function(){
                            location.reload();
                        });
                    }
                }
            });
        });

        $(document).on('click', '.delete_btn', function () {
            var consultant_id = $(this).val();
            $('#DeleteModal').modal('show');
            $('#deleteing_id').val(consultant_id);
        });

        $(document).on('click', '.delete_consultant', function (e) {
            e.preventDefault();

            $(this).text('Deleting..');
            var id = $('#deleteing_id').val();

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                type: "DELETE",
                url: "/delete-consultant/" + id,
                dataType: "json",
                success: function (response) {
                    // console.log(response);
                    if (response.status == 404) {
                        $('#success_message').addClass('alert alert-success');
                        $('#success_message').text(response.message);
                        $('.delete_student').text('Yes Delete');
                    } else {
                        $('#success_message').html("");
                        $('#success_message').addClass('alert alert-success');
                        $('#success_message').text(response.message);
                        $('.delete_student').text('Yes Delete');
                        $('#DeleteModal').modal('hide');
                        Swal.fire({
                            title: 'Deleted Successfully!',
                            icon: 'success',
                            confirmButtonText: 'Cool',
                            timer: 1000
                        })
                        .then(function(){
                            location.reload();
                        });
                    }
                }
            });
        });

    } );
    </script>
    @endsection
@endsection
