@section('title', 'NO RECORD FOUND')
<link rel="shortcut icon" type="image/png" href="{{ URL::to('assets/images/logo/logo.png') }}">
<link rel="stylesheet" href="{{ URL::to('css/custom.css') }}">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
@extends('layouts.master')
@section('menu')
    @extends('sidebar.dashboard')
@endsection
@section('content')
@php
    $table = 0;
@endphp
    <div id="main">
        @include('headers.header')
        <div class="page-heading">     
            <section class="section">
                <div class="card mb-5 mt-5" style="min-height: 500px; border-left: 3px solid #ffc107;">
                    <div class="card-body table-responsive text-center p-5">
                        <i class='fas fa-folder-open text-warning mt-5' style='font-size:100px'></i>
                        <h1 class="mt-5 text-warning" style="text-shadow: 2px 2px 4px #000000">No Record Found!</h1>
                        <p> The record you trying to access is not available. </p>
                    </div>
                </div>
            </section>
        </div>
    </div>
@endsection
<script src="https://code.jquery.com/jquery-3.5.0.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>