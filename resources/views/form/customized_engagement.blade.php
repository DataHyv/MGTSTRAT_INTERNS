@section('title', 'Customized Engagement Form')
@extends('layouts.master')
@section('menu')
    @extends('sidebar.customizedEng')
@endsection
@section('content')
    <div id="main">
        @include('headers.header')
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Customized Engagement</h3>
                    {{-- <p class="text-subtitle text-muted">budget form information</p> --}}
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

        {{-- card body --}}
        <div class="col-12">
            {{-- card --}}
            <div class="card">
                {{-- card content --}}
                <div class="card-content">
                    {{-- card body --}}
                    <div class="card-body">

                        <form class="form form-horizontal" action="{{ route('form/save') }}" method="POST">
                            @csrf
                            {{-- information --}}
                            @include(
                                'form.components.customized_engagement.information'
                            )

                            {{-- Engagement fees --}}
                            @include(
                                'form.components.customized_engagement.engagement_fees'
                            )

                            {{-- Engagement fees --}}
                            @include(
                                'form.components.customized_engagement.engagement_cost'
                            )

                            {{-- Engagement Cost --}}
                            {{-- @include('form.components.engmntcost') --}}

                            {{-- <div class="col-12 d-flex justify-content-center mt-3">
                                <button type="submit" class="btn btn-primary me-1 mb-1">Save</button>
                                <button type="reset" class="btn btn-light-secondary me-1 mb-1">Reset</button>
                            </div> --}}
                        </form>

                    </div>
                </div>
            </div>
        </div>

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
    {{-- budget forms --}}
    <script src="{{ url('js/bdgtform.js') }}"></script>
@endsection
