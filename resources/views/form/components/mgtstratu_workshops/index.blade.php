@section('title', 'MGTSTRAT-U RECORD')
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
                        <h3>MgtStrat-U Workshops Record</h3>
                    </div>
                    <div class="col-12 col-md-6 order-md-2 order-first">
                        <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                            <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page"><a href="{{ route('form/mgtstratu_workshops/index') }}">MgtStrat-U Workshops</a></li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>

            {{-- message --}}
            {!! Toastr::message() !!}

            <section class="section">
                <div class="card mb-5 mt-5 mh-75">
                    <div class="card-header col-12 d-flex justify-content-left mt-3 mb-3">
                        <a class="btn btn-primary mt-2 mb-2" href="{{ route('form/mgtstratu_workshops/new') }}">
                            <span><i class="fa-solid fa-file-circle-plus"></i> &nbsp; New Record</span>
                        </a>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped" id="table1">
                            <thead>
                                <tr class="text-dark">
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
                                    <th hidden></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $key => $item)
                                    <tr>
                                        <td hidden class="ids">1</td>
                                        <td class="id text-center text-uppercase fw-bold">{{ $item->workshop_id }}</td>
                                        @foreach ($companyList as $company)
                                            <td class="name text-center text-uppercase fw-bold">{{ $company->company_name }}</td>
                                        @endforeach
                                        <td class="name text-center fw-bold">{{ ucfirst($item->engagement_title) }}</td>
                                        <td class="name text-center fw-bold">{{ $item->workshop_title }}</td>
                                        <td class="fw-bold text-center">{{ $item->cluster }}</td>
                                        <td class="fw-bold text-center">{{ $item->intelligence }}</td>
                                        <td class="fw-bold text-center">{{ $item->pax_number }}</td>
                                        <td class="fw-bold text-center">{{ $item->program_dates ? $item->program_dates : 'To be announced' }}</td>
                                        <td class="fw-bold text-center">{{ \Carbon\Carbon::parse($item->created_at)->toFormattedDateString()}}</td>
                                        <td class="text-center fw-bold text-center">

                                            {{-- UPDATE --}}
                                            <a href="{{ url('form/mgtstratu_workshops/update/'.$item->workshop_id.'/'.$item->id) }}">
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
                                                                <h5 class="text-center mx-5">Are you sure want to delete
                                                                    <b>{{ $item->engagement_title }}</b>?</h5>
                                                            </div>
                                                            <form action="{{ route('deleteRecord') }}" method="POST">
                                                                @csrf
                                                                <input type="hidden" name="id" class="e_id" value="{{ $item->id }}" readonly>
                                                                <input type="hidden" name="workshop_id" class="budget_number" value="{{ $item->workshop_id }}" readonly>
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
                                            <!-- /Delete Customized Engagement Modal -->

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