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
                    <h3>UPDATE CLIENTS</h3>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">UPDATE CLIENTS</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>

            {{-- Start Insert Client --}}
            <div class="col-12">
                <div class="card">
                    <div class="card-content">
                        <div class="card-body">
                            <form method="POST" action="{{ route('update') }}" class="form form-horizontal"
                                enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="id" value="{{ $dataClnt[0]->id }}">
                                <div class="form-body">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label>Company Name</label>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="form-group has-icon-left">
                                                <div class="position-relative">
                                                    <input type="text" class="form-control" placeholder="Company Name"
                                                        id="first-name-icon" name="company_name" value="{{ $dataClnt[0]->company_name }}">
                                                    <div class="form-control-icon">
                                                        <i class="bi bi-building"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <label>ID Number</label>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="form-group has-icon-left">
                                                <div class="position-relative">
                                                    <input type="TEXT" class="form-control" placeholder="Old ID Number"
                                                        id="first-name-icon" name="cstmzd_eng_form_id" value="{{ $dataClnt[0]->cstmzd_eng_form_id}}">
                                                    <div class="form-control-icon">
                                                        <i class="bi bi-123"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <label>Status</label>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="form-group position-relative has-icon-left mb-4">
                                                <fieldset class="form-group">
                                                    <select class="form-select" name="status" id="status">
                                                        <option value="{{ $dataClnt[0]->status }}"
                                                            {{ $dataClnt[0]->status == $dataClnt[0]->status ? 'selected' : '' }}>
                                                            {{ $dataClnt[0]->status }}
                                                        </option>
                                                        <option value="ACTIVE">ACTIVE</option>
                                                        <option value="INACTIVE">INACTIVE</option>
                                                    </select>
                                                    <div class="form-control-icon">
                                                        <i class="bi bi-activity"></i>
                                                    </div>
                                                </fieldset>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <label>Industry</label>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="form-group has-icon-left">
                                                <div class="position-relative">
                                                    <input type="text" class="form-control" placeholder="Industry"
                                                        name="industry" value="{{ $dataClnt[0]->industry }}">
                                                    <div class="form-control-icon">
                                                        <i class="bi bi-people-fill"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <label>Old/ New</label>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="form-group position-relative has-icon-left mb-4">
                                                <fieldset class="form-group">
                                                    <select class="form-select" name="old_new" id="" value="">
                                                        <option value="{{ $dataClnt[0]->old_new }}"
                                                            {{ $dataClnt[0]->old_new == $dataClnt[0]->old_new ? 'selected' : '' }}>
                                                            {{ $dataClnt[0]->old_new }}
                                                        </option>
                                                        <option value="OLD">OLD</option>
                                                        <option value="NEW">NEW</option>
                                                        {{-- @foreach ($roleName as $key => $value)
                                                            <option value="{{ $value->role_type }}">
                                                                {{ $value->role_type }}</option>
                                                        @endforeach --}}
                                                    </select>
                                                    <div class="form-control-icon">
                                                        <i class="bi bi-archive"></i>
                                                    </div>
                                                </fieldset>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <label>First Engagement</label>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="form-group has-icon-left">
                                                <div class="position-relative">
                                                    <input type="date" class="form-control" placeholder="First Engagement"
                                                        name="first_eng" value="{{ $dataClnt[0]->first_eng }}">
                                                    <div class="form-control-icon">
                                                        <i class="bi bi-calendar-event-fill"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <label>Latest Engagement</label>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="form-group has-icon-left">
                                                <div class="position-relative">
                                                    <input type="date" class="form-control" placeholder="Second Engagement"
                                                        name="latest_eng" value="{{ $dataClnt[0]->latest_eng }}">
                                                    <div class="form-control-icon">
                                                        <i class="bi bi-calendar-event-fill"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 d-flex justify-content-end">
                                            <button type="submit" class="btn btn-primary mr-2">Update</button>
                                            <br>
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">
                                                <a href="{{ route('clients') }}" style="color: white; text-decoration: none;">
                                                Back</a></button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
