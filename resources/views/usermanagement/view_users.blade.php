@section('title', 'Users')
<link rel="shortcut icon" type="image/png" href="{{ URL::to('assets/images/logo/logo.png') }}">
@extends('layouts.master')
@section('menu')
    @extends('sidebar.dashboard')
@endsection
@section('content')
    <div id="main">
        <style>
            .avatar.avatar-im .avatar-content,
            .avatar.avatar-xl img {
                width: 40px !important;
                height: 40px !important;
                font-size: 1rem !important;
            }

            .form-group[class*=has-icon-].has-icon-lefts .form-select {
                padding-left: 2rem;
            }

        </style>

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
                        <h3>Update User Record</h3>
                    </div>
                    <div class="col-12 col-md-6 order-md-2 order-first">
                        <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}">Dashboard</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Update User Record</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <!-- <h4 class="card-title">User View Detial</h4> -->
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <form class="form form-horizontal" action="{{ route('maintenance/user-management/detail/update') }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="id" value="{{ $data[0]->id }}">
                                <div class="form-body">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label><b>Full Name</b></label>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="form-group has-icon-left">
                                                <div class="position-relative">
                                                    <input type="text" class="form-control" placeholder="Name"
                                                        id="first-name-icon" name="fullName" value="{{ $data[0]->name }}" required>
                                                    <div class="form-control-icon">
                                                        <i class="bi bi-person"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <label><b>Photo</b></label>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="form-group has-icon-lefts">
                                                <div class="position-relative">
                                                    <input type="file" class="form-control" placeholder="Name"
                                                        id="first-name-icon" name="image" />
                                                    <div class="form-control-icon avatar avatar.avatar-im">
                                                        <img src="{{ URL::to('/images/' . $data[0]->avatar) }}">
                                                    </div>
                                                    <input type="hidden" name="hidden_image"
                                                        value="{{ $data[0]->avatar }}">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <label><b>Email Address</b></label>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="form-group has-icon-left">
                                                <div class="position-relative">
                                                    <input type="email" class="form-control" placeholder="Email"
                                                        id="first-name-icon" name="email" value="{{ $data[0]->email }}" required>
                                                    <div class="form-control-icon">
                                                        <i class="bi bi-envelope"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <label><b>Mobile Number</b></label>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="form-group has-icon-left">
                                                <div class="position-relative">
                                                    <input type="text" class="form-control" placeholder="Mobile"
                                                        name="phone_number" value="{{ $data[0]->phone_number }}" maxlength="13" 
                                                        oninput='formatPhoneNumber(this)' required>
                                                    <div class="form-control-icon">
                                                        <i class="bi bi-phone"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <label><b>Status</b></label>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="form-group position-relative has-icon-left mb-4">
                                                <fieldset class="form-group">
                                                    <select class="form-select" name="status" id="status" style="padding-left: 40px" required>
                                                        @foreach ($userStatus as $key => $value)
                                                            <option value="{{ $value->type_name }}">
                                                                {{ $value->type_name }}</option>
                                                        @endforeach
                                                    </select>
                                                    <div class="form-control-icon">
                                                        <i class="bi bi-bag-check"></i>
                                                    </div>
                                                </fieldset>
                                            </div>
                                        </div>


                                        <div class="col-md-4">
                                            <label><b>Role Name</b></label>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="form-group position-relative has-icon-left mb-4">
                                                <fieldset class="form-group">
                                                    <select class="form-select" name="role_name" id="role_name" style="padding-left: 40px" required>
                                                        @foreach ($roleName as $key => $value)
                                                            <option value="{{ $value->role_type }}">
                                                                {{ $value->role_type }}</option>
                                                        @endforeach
                                                    </select>
                                                    <div class="form-control-icon">
                                                        <i class="bi bi-bag-check"></i>
                                                    </div>
                                                </fieldset>
                                            </div>
                                        </div>

                                        <div class="col-12 d-flex justify-content-end">
                                            <button type="submit" class="btn btn-primary">Save</button>                                            
                                            <button type="button" class="btn btn-secondary ml-2" data-dismiss="modal" fdprocessedid="xsucm" style="margin-left: 10px">
                                            <a href="{{ route('maintenance/user-management') }}" style="color: white; text-decoration: none;">
                                            Back</a></button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
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
    
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script>
    $(document).ready(function() {
        $('#status').val('{{ $data[0]->status }}');
        $('#role_name').val('{{ $data[0]->role_name }}');
    });
    function formatPhoneNumber(element) {
        element.value = element.value.replace(/[^0-9]+/g, '')
        i = 1;
        var numbervalue = '';
        for(var x of element.value){
            numbervalue += x;
            if (i == 4 || i == 7 ) {
                numbervalue += ' ';
            }
        i++;
        }
        return element.value = numbervalue;
    }
</script>
@endsection