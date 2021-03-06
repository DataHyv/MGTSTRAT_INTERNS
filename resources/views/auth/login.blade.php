@extends('layouts.app')
@section('content')
    <div id="auth">
        <div class="row justify-content-md-center h-100">
            <section>
                <div class="container py-5 h-100">
                    <div class="row d-flex justify-content-center align-items-center h-100">
                        <div class="col col-xl-10">
                            <div class="card" style="border-radius: 1rem;">
                                <div class="row g-0">
                                    <div class="col-md-6 col-lg-5 d-none d-md-block">
                                        <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/img1.webp"
                                            alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
                                    </div>
                                    <div class="col-md-6 col-lg-7 d-flex align-items-center">
                                        <div class="card-body p-4 p-lg-5 text-black">
                                            {{-- message --}}
                                            {!! Toastr::message() !!}
                                            @if (session()->has('error'))
                                                <div class="text-danger text-center text-bold">
                                                    {{ session()->get('error') }}
                                                </div>
                                            @endif
                                            {{-- <br> --}}
                                            <form method="POST" action="{{ route('login') }}">
                                                @csrf
                                                <div class="d-flex align-items-center mb-3">
                                                    {{-- <i class="fas fa-cubes fa-2x me-3" style="color: #ff6219;"></i>
                                                    <span class="h1 fw-bold mb-0">Logo</span> --}}
                                                    <img class="img-fluid" src="{{ asset('assets/images/logo/main-logo.png') }}" alt="">
                                                </div>

                                                <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Sign into your
                                                    account</h5>

                                                <div class="form-outline mb-3">
                                                    <label class="form-label" for="form2Example17">Email address</label>
                                                    <input type="email"
                                                        class="form-control form-control-lg @error('email') is-invalid @enderror"
                                                        name="email" value="{{ old('email') }}"
                                                        placeholder="Enter email" />
                                                    @error('email')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>

                                                <div class="form-outline mb-3">
                                                    <label class="form-label" for="form2Example27">Password</label>
                                                    <input type="password" id="form2Example27"
                                                        class="form-control form-control-lg @error('password') is-invalid @enderror"
                                                        name="password" placeholder="Enter Password" />
                                                    @error('password')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>

                                                <div class="form-check form-check-lg d-flex align-items-end mb-3">
                                                    <input class="form-check-input me-2" type="checkbox" value="remember_me"
                                                        id="remember_me" name="remember_me">
                                                    <label class="form-check-label text-gray-600" for="flexCheckDefault">
                                                        Keep me logged in
                                                    </label>
                                                </div>

                                                <div class="pt-1 mb-4">
                                                    <button class="btn btn-primary btn-lg btn-block">Login</button>
                                                </div>

                                                <a class="small text-muted" href="{{ route('forget-password') }}">Forgot
                                                    password?</a>
                                                <p class=" pb-lg-2" style="color: #393f81;">Don't have an account? <a
                                                        href="{{ route('register') }}" style="color: #393f81;">Register
                                                        here</a></p>
                                                {{-- <a href="#!" class="small text-muted">Terms of use.</a>
                                                <a href="#!" class="small text-muted">Privacy policy</a> --}}
                                            </form>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
@endsection
