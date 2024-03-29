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
                    <h3>CLIENTS</h3>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Clients</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>

@include('form.components.clients_register.modal')
@include('form.components.clients_register.view_contract')

        {{-- message --}}
        {!! Toastr::message() !!}
        <section class="section">
            <div class="card">
                <br>
                <div class="card-header col-12 d-flex justify-content-left">
                    <button type="" class="btn btn-primary me-1 mb-1" data-toggle="modal" data-target="#exampleModal"><i class="bi bi-plus-square-dotted"> New Client</i></button>
                </div>
                {{-- <div class="card-header">
                    User Datatable
                </div> --}}
                <div class="card-body table-responsive">
                    <table class="table table-light display dt-responsive compact" id="clients_table">
                        <thead>
                            <tr>
                                <th>ID Number</th>
                                <th>Company Name</th>
                                <th>Status</th>
                                <th>Sales Person</th>
                                <th>Industry</th>
                                <th>Old/ New</th>
                                {{-- <th class="text-center">Total Contract</th> --}}
                                <th>Latest Engagement</th>
                                <th class="text-center">Modify</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $key => $client)
                                <tr>
                                    <td class="name"> {{$client->cstmzd_eng_form_id}} </td>
                                    <td class="name"> {{$client->company_name}} </td>
                                    <td class="name"> {{$client->status}} </td>
                                    <td class="status">{{$client->sales_person}}</td>
                                    <td class="status">{{$client->industry}}</td>
                                    <td class="status">{{$client->old_new}}</td>
                                    {{-- <td class="status text-center">
                                        <a data-toggle="modal" href="#contractModal">
                                            <span class="badge bg-success">
                                                <i class="fa-solid fa-book"></i> VIEW CONTRACTS
                                            </span>
                                        </a>
                                    </td> --}}
                                    <td class="status">{{$client->latest_eng}}</td>
                                    <td class="text-center">
                                        <a href="{{ url('clients/view/detail/' . $client->id) }}" >
                                            <span class="badge bg-success"><i class="bi bi-pencil-square" data-target="#exampleModal"></i></span>
                                        </a>

                                        <a href="#" data-toggle="modal" data-target="#delete_client{{$client->id}}"><span
                                            class="badge bg-danger"><i class="bi bi-trash"></i></span>
                                        </a>

                                        <!-- Modal -->
                                        <div class="modal custom-modal fade" id="delete_client{{$client->id}}" role="dialog">
                                            <div class="modal-dialog modal-dialog-centered modal-md">
                                                <div class="modal-content">
                                                    <div class="modal-header" style="display: block">
                                                        <h3 class="mb-2 text-center">Clients</h3>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="form-header">
                                                            <h5 class="text-center">Are you sure want to delete <br>
                                                                <b>{{$client->company_name}}</b>?
                                                            </h5>
                                                        </div>
                                                        <form action="{{ url('deleteClients/' . $client->id) }}" method="GET">
                                                            @csrf
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
                                    </td>
                                </tr>
                            @endforeach
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
    {{-- <script type="text/javascript" src="/js/f2fform.js"></script> --}}
    {{-- <script type="text/javascript" src="/js/MultiStep.js"></script> --}}
    {{-- <script type="text/javascript" src="/js/currencyFormat.js"></script> --}}
    {{-- <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script> --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    @section('script')
    <script>
        $(document).ready( function () {
            $.fn.dataTable.moment( 'HH:mm MMM D, YY' );
            $.fn.dataTable.moment( 'dddd, MMMM Do, YYYY' );
            $('#clients_table').dataTable( {
                responsive: true,
                stateSave: true,
                "bScrollCollapse": true,
                "autoWidth": false,
                "order": [ 0, 'desc' ],
                // "columnDefs": [
                //     { "type": "date", "targets":2 }
                // ],
            } );
        } );
    </script>
    @endsection
@endsection
