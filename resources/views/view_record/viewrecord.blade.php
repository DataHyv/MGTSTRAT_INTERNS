@section('title', 'Webinar Record')
<link rel="shortcut icon" type="image/png" href="{{ URL::to('assets/images/logo/logo.png') }}">
@extends('layouts.master')
@section('menu')
    @extends('sidebar.viewrecord')
@endsection
@section('content')
    <div id="main">
        {{-- <header class="mb-3">
            <a href="#" class="burger-btn d-block d-xl-none">
                <i class="bi bi-justify fs-3"></i>
            </a>
        </header> --}}
        @include('headers.header')
        <div class="page-heading">
            <div class="page-title">
                <div class="row">
                    <div class="col-12 col-md-6 order-md-1 order-last">
                        <h3>View Budget Record</h3>
                        <p class="text-subtitle text-muted">budget information list</p>
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
                    <div class="card-header">
                        Webinar Budget list
                    </div>
                    <div class="card-body">
                        <table class="table table-striped" id="table1">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Status</th>
                                    <th>Company Name</th>
                                    <th width="10%">Engagement Type</th>
                                    <th width="20%">Webinar Title</th>
                                    <th>Number of Pax</th>
                                    <th>Engagament Fee</th>
                                    <th>Start Date</th>
                                    <th>Time</th>
                                    {{-- <th>Salary</th> --}}
                                    <th class="text-center">Modify</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $key => $item)
                                    <tr>
                                        <td class="id">{{ ++$key }}</td>
                                        <td class="status">
                                            <span class="badge bg-success">Active</span>
                                        </td>
                                        <td class="name">{{ $item->full_name }}</td>
                                        <td class="name">{{ $item->engagement_type }}</td>
                                        <td class="email">{{ $item->webinar_title }}</td>
                                        <td class="phone_number">{{ $item->pax_number }}</td>
                                        <td class="engagement-fee">&#8369;{{ $item->ef_total }}</td>
                                        <td class="phone_number">{{ date('M d, Y',strtotime($item->doe)) }}</td>
                                        <td class="phone_number">{{ date('h:i a',strtotime($item->dot)) }}</td>
                                        {{-- <td class="phone_number">{{ $item->salary }}</td> --}}
                                        <td class="text-center">
                                            <a href="{{ route('form/budget/new') }}">
                                                <span class="badge bg-info"><i class="bi bi-person-plus-fill"></i></span>
                                            </a>
                                            <a href="{{ url('form/view/detail/' . $item->id) }}">
                                                <span class="badge bg-success"><i class="bi bi-pencil-square"></i></span>
                                            </a>
                                            <a href="{{ url('delete/' . $item->id) }}"
                                                onclick="return confirm('Are you sure to want to delete it?')"><span
                                                    class="badge bg-danger"><i class="bi bi-trash"></i></span></a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>
        </div>
        <footer>
            <div class="footer clearfix mb-0 text-muted ">
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
@endsection
