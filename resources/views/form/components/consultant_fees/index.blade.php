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
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Consultant Fees</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>

        @include('form.components.consultant_fees.create')
        @include('form.components.consultant_fees.edit')

        {{-- message --}}
        {{-- {!! Alert::message() !!} --}}
        {{-- @if(session('status'))
            <div class="alert alert-success">{{ session('status') }}</div>
        @endif --}}
        <section class="section">
            <div class="card">
                <br>
                <div class="card-header col-12 d-flex justify-content-left">
                    <button type="" class="btn btn-primary me-1 mb-1" data-toggle="modal" data-target="#ConsultantFeesModal">
                        <i class="bi bi-plus-square-dotted"> New Consultant Fees</i>
                    </button>
                </div>

                <div class="card-body">
                    <table class="table table-striped" id="table1">
                        <thead>
                            <tr>
                                <th class="text-center text-uppercase">#</th>
                                <th class="text-center">Name</th>
                                <th class="text-center">Lead Facilitator</th>
                                <th class="text-center">Co-lead</th>
                                <th class="text-center">Co-lead f2f</th>
                                <th class="text-center">Co-facilitator</th>
                                <th class="text-center">Lead Consultant</th>
                                <th class="text-center">Consulting</th>
                                <th class="text-center">Designer</th>
                                <th class="text-center">Moderator</th>
                                <th class="text-center">Producer</th>
                                <th class="text-center">Date Added</th>
                                <th class="text-center text-uppercase">Modify</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($consultantFee as $key => $data)
                                <tr>
                                    <td class="font-weight-bold text-center">{{++$key}}</td>
                                    <td class="text-center">
                                        {{$data->first_name}} {{$data->last_name}}
                                    </td>
                                    <td class="text-center">
                                        {{number_format($data->lead_faci, 2)}}
                                    </td>
                                    <td class="text-center">
                                        {{number_format($data->co_lead, 2)}}
                                    </td>
                                    <td class="text-center">
                                        {{number_format($data->co_lead_f2f, 2)}}
                                    </td>
                                    <td class="text-center">
                                        {{number_format($data->co_faci, 2)}}
                                    </td>
                                    <td class="text-center">
                                        {{number_format($data->lead_consultant, 2)}}
                                    </td>
                                    <td class="text-center">
                                        {{number_format($data->consulting, 2)}}
                                    </td>
                                    <td class="text-center">
                                        {{number_format($data->designer, 2)}}
                                    </td>
                                    <td class="text-center">
                                        {{number_format($data->moderator, 2)}}
                                    </td>
                                    <td class="text-center">
                                        {{number_format($data->producer, 2)}}
                                    </td>
                                    <td class="text-center">
                                        {{ \Carbon\Carbon::parse($data->created_at)->toFormattedDateString()}}
                                    </td>
                                    <td class="text-center">
                                        {{-- <a href="{{ url('form/consultant-fees/'.$data->id.'/edit') }}" > --}}
                                        <a href="#editModal"  data-toggle="modal" data-target="#editModal" >
                                            <span class="badge bg-success"><i class="bi bi-pencil-square"></i></span>
                                        </a>

                                        <a href="#"
                                            onclick="return confirm('Are you sure to want to delete it?')"><span
                                                class="badge bg-danger"><i class="bi bi-trash"></i></span>
                                        </a>
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
    <script type="text/javascript" src="/js/currencyFormat.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
@endsection
