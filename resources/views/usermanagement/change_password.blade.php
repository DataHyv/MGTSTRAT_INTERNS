@section('title', 'Change Password')
<link rel="shortcut icon" type="image/png" href="{{ URL::to('assets/images/logo/logo.png') }}">
@extends('layouts.master')
@section('menu')
    @extends('sidebar.dashboard')
@endsection
@section('content')
    <div id="main">
        {{-- <header class="mb-3">
            <a href="#" class="burger-btn d-block d-xl-none">
                <i class="bi bi-justify fs-3"></i>
            </a>
        </header> --}}
        @include('headers.header')
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Change Password</h3>
                    <p class="text-subtitle text-muted">Change Password</p>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Change Password</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>

        {{-- message --}}
        {!! Toastr::message() !!}
        <div class="card">
            {{-- card content --}}
            <div class="card-content">
                {{-- card body --}}
                <div class="card-body">
                    <div id="auth">
                        <div class="row h-100">
                            <div class="col-lg-5 col-12">
                                <div id="auth-left">
                                    <br>
                                    <form method="POST" action="{{ route('change/password/db') }}"
                                        class="md-float-material" id="changePasswordForm">
                                        @csrf
                                        <div class="form-group position-relative has-icon-left mb-4">
                                            <input type="password"
                                                class="form-control form-control-lg @error('current_password') is-invalid @enderror"
                                                name="current_password" value="{{ old('current_password') }}"
                                                placeholder="Enter Old Password" required>
                                            <div class="form-control-icon">
                                                <i class="bi bi-shield-lock"></i>
                                            </div>
                                            @error('current_password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror                                            
                                        </div>

                                        <div class="form-group position-relative has-icon-left mb-0">
                                            <input type="password"
                                                class="form-control form-control-lg @error('new_password') is-invalid @enderror"
                                                name="new_password" id="new_password" placeholder="Enter New Password" oninput="validatePassword(this)" required>
                                            <div class="form-control-icon">
                                                <i class="bi bi-shield-lock"></i>
                                            </div>

                                            @error('new_password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                            <span class="invalid-feedback" role="alert">
                                                <strong id="passwordErrMsg"></strong>
                                            </span>
                                        </div>

                                        <p class="text-secondary text-right text-sm mb-0"><i>Password must contain alphabets (uppercase and lowercase), numbers and speacial characters. Must be greater than 7 characters</i></p>
                                        <div class="progress mb-4" style="height: 10px">
                                            <div id="passwordProgress" class="progress-bar" style="; height: 20px"></div>
                                        </div> 

                                        <div class="form-group position-relative has-icon-left mb-4">
                                            <input type="password" class="form-control form-control-lg"
                                                name="new_confirm_password" placeholder="Choose Confirm Password" required>
                                            <div class="form-control-icon">
                                                <i class="bi bi-shield-lock"></i>
                                            </div>
                                        </div>
                                        <button type="button" class="btn btn-primary btn-block btn-lg shadow-lg mt-3" onclick="validate_fields()">Change
                                            Password</button>
                                    </form>
                                </div>
                            </div>
                            <div class="col-lg-7 d-none d-lg-block">
                                <div id="auth-right">
                                </div>
                            </div>
                        </div>
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
@endsection
<script>
    var passwordProgress = 0;    

    function validatePassword(element) {
        passwordProgress = 0;
        var elementValue = element.value;

        $('#passwordProgress').removeClass('bg-danger');
        $('#passwordProgress').removeClass('bg-warning');
        $('#passwordProgress').removeClass('bg-success');

        if(elementValue.search(/[a-z]/g) != -1) {
            passwordProgress = 20;
        }

        if(elementValue.search(/[0-9]/g) != -1) {
            passwordProgress += 20;
        }

        if(elementValue.search(/[A-Z]/g) != -1) {
            passwordProgress += 20;
        }

        if(elementValue.search(/[^0-9a-zA-Z]/g) != -1) {
            passwordProgress += 20;
        }

        if(elementValue.length > 7) {
            passwordProgress += 20;
        }

        if (passwordProgress <= 40) {
            $('#passwordProgress').addClass('bg-danger');
        } else if (passwordProgress <= 60) {
            $('#passwordProgress').addClass('bg-warning');
        } else if (passwordProgress >= 80) {
            $('#passwordProgress').addClass('bg-success');
            $('#new_password').css({'border-color': ''});    
            $('#new_password').removeClass('is-invalid');   
        }

        document.getElementById('passwordProgress').style.width = passwordProgress + '%';
    }

    function validate_fields() {
        // Get the forms we want to add validation styles to
        console.log(passwordProgress);
        var forms = document.getElementById('changePasswordForm');
        if (forms.checkValidity() == false || passwordProgress <= 79) {
            forms.classList.add('was-validated');     
            $('#passwordErrMsg').html('Weak Password'); 
            $('#new_password').css({'border-color': '#dc3545'});    
            $('#new_password').addClass('is-invalid');        
            event.preventDefault();
            event.stopPropagation();
        } else {
            forms.submit();
        }
    }

</script>