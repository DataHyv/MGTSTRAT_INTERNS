@section('title', 'Add Users')
<link rel="shortcut icon" type="image/png" href="{{ URL::to('assets/images/logo/logo.png') }}">
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
                            <h3>Add User Record</h3>
                        </div>
                        <div class="col-12 col-md-6 order-md-2 order-first">
                            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Dashboard</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Add User Record</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>

                <div class="col-12">
                    <div class="card">                        
                        <div class="card-content">
                            <div class="card-body">
                            <form method="POST" action="{{ route('user/add/save') }}" class="md-float-material" id="registerUserForm" enctype="multipart/form-data">
                                @csrf
                                <div class="row mt-5">
                                    <div class="col-md-4">
                                        <label><b>Full Name</b></label>
                                    </div>

                                    <div class="col-md-8">
                                        <div class="form-group position-relative has-icon-left">
                                            <input type="text" class="form-control @error('name') is-invalid @enderror" 
                                            name="name" value="{{ old('name') }}" placeholder="Enter Your Name" required>
                                            <div class="form-control-icon">
                                                <i class="bi bi-person"></i>
                                            </div>
                                            @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <label><b>Photo</b></label>
                                    </div>

                                    <div class="col-md-8">
                                        <div class="form-group position-relative has-icon-left">
                                            <input class="form-control @error('image') is-invalid @enderror" name="image" type="file" id="image" multiple="" required>
                                            <div class="form-control-icon">
                                                <i class="bi bi-person-square"></i>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <label><b>Email Address</b></label>
                                    </div>
                                    
                                    <div class="col-md-8">
                                        <div class="form-group position-relative has-icon-left">
                                            <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" 
                                            value="{{ old('email') }}" 
                                            placeholder="sample@gmail.com" required>
                                            <div class="form-control-icon">
                                                <i class="bi bi-envelope"></i>
                                            </div>
                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <label><b>Mobile Number</b></label>
                                    </div>

                                    <div class="col-md-8">
                                        <div class="form-group position-relative has-icon-left">
                                            <input type="tel" class="form-control @error('phone') is-invalid @enderror" name="phone" 
                                            value="{{ old('phone') }}" placeholder="0900 000 000"
                                            maxlength="13" oninput='formatPhoneNumber(this)' required>
                                            <div class="form-control-icon">
                                                <i class="bi bi-phone"></i>
                                            </div>
                                            @error('phone')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <label><b>Role Name</b></label>
                                    </div>                                    
                                    
                                    <div class="col-md-8">
                                        <div class="form-group position-relative has-icon-left">
                                            <fieldset class="form-group">
                                                <select class="form-select @error('role_name') is-invalid @enderror" name="role_name" id="role_name" 
                                                style="padding-left: 40px" required>
                                                    @foreach ($roleName as $key => $value)
                                                        <option value="{{ $value->role_type }}">
                                                            {{ $value->role_type }}</option>
                                                    @endforeach
                                                </select>
                                                <div class="form-control-icon">
                                                    <i class="bi bi-person"></i>
                                                </div>
                                            </fieldset>
                                            @error('role_name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <label><b>Password</b></label>
                                    </div> 

                                    <div class="col-md-8 mb-3">
                                        <div class="form-group position-relative has-icon-left mb-0">
                                            <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" 
                                            placeholder="*****" oninput="validatePassword(this)" id="password" required>
                                            <div class="form-control-icon">
                                                <i class="bi bi-shield-lock"></i>
                                            </div>
                                                @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                                <span class="invalid-feedback" role="alert">
                                                    <strong id="passwordErrMsg"></strong>
                                                </span>
                                            </div>
                                        <p class="text-secondary text-right text-sm mb-0"><i>Password must contain alphabets (uppercase and lowercase), numbers and speacial characters. Must be greater than 7 characters</i></p>
                                        <div class="progress" style="height: 10px">
                                            <div id="passwordProgress" class="progress-bar" style="; height: 20px"></div>
                                        </div>                                        
                                    </div>

                                    <div class="col-md-4">
                                        <label><b>Confirm Password</b></label>
                                    </div> 

                                    <div class="col-md-8">
                                        <div class="form-group position-relative has-icon-left">
                                            <input type="password" class="form-control @error('password') is-invalid @enderror" name="password_confirmation" placeholder="*****" required>
                                            <div class="form-control-icon">
                                                <i class="bi bi-shield-check"></i>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12 d-flex justify-content-end mt-5">
                                        <button type="button" class="btn btn-primary shadow-lg" onclick="validate_fields()">Submit</button>
                                    </div>                                
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>  
    </div>
@endsection
<script>
    var passwordProgress = 0;
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
            $('#password').css({'border-color': ''});    
            $('#password').removeClass('is-invalid');   
        }

        document.getElementById('passwordProgress').style.width = passwordProgress + '%';
    }

    function validate_fields() {
        // Get the forms we want to add validation styles to
        var forms = document.getElementById('registerUserForm');
        console.log(passwordProgress);
        if (forms.checkValidity() == false || passwordProgress <= 79) {
            forms.classList.add('was-validated');     
            if (passwordProgress <= 79) {
                $('#passwordErrMsg').html('Weak Password'); 
                $('#password').css({'border-color': '#dc3545'});    
                $('#password').addClass('is-invalid');  
            }                  
            event.preventDefault();
            event.stopPropagation();
        } else {
            forms.submit();
        }
    }

</script>