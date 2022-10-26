@section('title', 'Update Record')
@extends('layouts.master')
@section('menu')
    @extends('sidebar.dashboard')
@endsection
@section('content')
    <div id="main">
        <header class="mb-3">
            <a href="#" class="burger-btn d-block d-xl-none">
                <i class="bi bi-justify fs-3"></i>
            </a>
        </header>
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
                                <li class="breadcrumb-item active" aria-current="page">Customized Engagement</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>

            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Dispay Information</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <form class="form form-horizontal" action="{{ route('form/view/update') }}" method="POST">
                                @csrf
                                <div class="container">
                                    <input type="hidden" name="id" value="{{ $data[0]->id }}">
                                    <div class="form-body">
                                        <div class="row">
                                            {{-- <div class="col-md-4">
                                                <label>ID</label>
                                            </div>
                                            <div class="col-md-8">
                                                <div class="form-group has-icon-left">
                                                    <div class="position-relative">
                                                        <input type="text" class="form-control"
                                                            placeholder="Enter user id" id="first-name-icon"
                                                            name="deal_number" value="{{ $data[0]->deal_number }}"
                                                            readonly>
                                                        <div class="form-control-icon">
                                                            <i class="fa-solid fa-id-card"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> --}}

                                            <div class="col-md-4">
                                                <label class="fw-bold required">Company Name</label>
                                            </div>
                                            <div class="col-md-8">
                                                <div class="form-group has-icon-left">
                                                    <div class="position-relative">
                                                        <input type="text"
                                                            class="form-control @error('fullName') is-invalid @enderror"
                                                            placeholder="Enter Comany Name" id="first-name-icon"
                                                            name="fullName" value="{{ $data[0]->full_name }}">
                                                        <div class="form-control-icon">
                                                            <i class="fa-solid fa-building"></i>
                                                        </div>
                                                        @error('fullName')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                <label class="fw-bold required">Engagement Type</label>
                                            </div>
                                            <div class="col-md-8">
                                                <div class="form-group has-icon-left">
                                                    <div class="position-relative">
                                                        <fieldset class="form-group">
                                                            <select class="form-select" name="engagement_type"
                                                                id="engagementType">
                                                                <option selected disabled>-- Select Engagement Type --
                                                                </option>
                                                                <option value="Strategy"
                                                                    {{ $data[0]->engagement_type == 'Strategy' ? 'selected="selected"' : '' }}>
                                                                    Strategy</option>
                                                                <option value="Leadership"
                                                                    {{ $data[0]->engagement_type == 'Leadership' ? 'selected="selected"' : '' }}>
                                                                    Leadership</option>
                                                                <option value="Teams"
                                                                    {{ $data[0]->engagement_type == 'Teams' ? 'selected="selected"' : '' }}>
                                                                    Teams</option>
                                                                <option value="Capability"
                                                                    {{ $data[0]->engagement_type == 'Capability' ? 'selected="selected"' : '' }}>
                                                                    Capability</option>
                                                            </select>
                                                            <div class="form-control-icon">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                    height="16" fill="currentColor"
                                                                    class="bi bi-envelope-paper" viewBox="0 0 16 16">
                                                                    <path
                                                                        d="M4 0a2 2 0 0 0-2 2v1.133l-.941.502A2 2 0 0 0 0 5.4V14a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V5.4a2 2 0 0 0-1.059-1.765L14 3.133V2a2 2 0 0 0-2-2H4Zm10 4.267.47.25A1 1 0 0 1 15 5.4v.817l-1 .6v-2.55Zm-1 3.15-3.75 2.25L8 8.917l-1.25.75L3 7.417V2a1 1 0 0 1 1-1h8a1 1 0 0 1 1 1v5.417Zm-11-.6-1-.6V5.4a1 1 0 0 1 .53-.882L2 4.267v2.55Zm13 .566v5.734l-4.778-2.867L15 7.383Zm-.035 6.88A1 1 0 0 1 14 15H2a1 1 0 0 1-.965-.738L8 10.083l6.965 4.18ZM1 13.116V7.383l4.778 2.867L1 13.117Z" />
                                                                </svg>
                                                            </div>
                                                        </fieldset>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                <label class="fw-bold required">Webinar Title</label>
                                            </div>
                                            <div class="col-md-8">
                                                <div class="form-group has-icon-left">
                                                    <div class="position-relative">
                                                        <fieldset class="form-group">
                                                            <select class="form-select" name="webinar_title"
                                                                id="webinarTitle">
                                                                <option selected disabled>-- Select Webinar Title --
                                                                </option>
                                                                <option value="Re:Think Mental Wellness"
                                                                    {{ $data[0]->webinar_title == 'Re:Think Mental Wellness' ? 'selected="selected"' : '' }}>
                                                                    Think Mental
                                                                    Wellness
                                                                </option>
                                                                <option value="Making Emotional Intelligence Visible"
                                                                    {{ $data[0]->webinar_title == 'Making Emotional Intelligence Visible' ? 'selected="selected"' : '' }}>
                                                                    Making
                                                                    Emotional Intelligence Visible</option>
                                                                <option value="From Burnout to Balance"
                                                                    {{ $data[0]->webinar_title == 'From Burnout to Balance' ? 'selected="selected"' : '' }}>
                                                                    From Burnout to Balance</option>
                                                                <option value="Power of Yet"
                                                                    {{ $data[0]->webinar_title == 'Power of Yet' ? 'selected="selected"' : '' }}>
                                                                    Power of Yet</option>
                                                                <option value="Leading Virtual Teams"
                                                                    {{ $data[0]->webinar_title == 'Leading Virtual Teams' ? 'selected="selected"' : '' }}>
                                                                    Leading Virtual Teams</option>
                                                                <option value="Secret Ingredient to High Performing Teams"
                                                                    {{ $data[0]->webinar_title == 'Secret Ingredient to High Performing Teams' ? 'selected="selected"' : '' }}>
                                                                    Secret Ingredient to High Performing Teams</option>
                                                                <option value="Creating Digital Bonds"
                                                                    {{ $data[0]->webinar_title == 'Creating Digital Bonds' ? 'selected="selected"' : '' }}>
                                                                    Creating Digital Bonds</option>
                                                            </select>
                                                            <div class="form-control-icon">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                    height="16" fill="currentColor" class="bi bi-display"
                                                                    viewBox="0 0 16 16">
                                                                    <path
                                                                        d="M0 4s0-2 2-2h12s2 0 2 2v6s0 2-2 2h-4c0 .667.083 1.167.25 1.5H11a.5.5 0 0 1 0 1H5a.5.5 0 0 1 0-1h.75c.167-.333.25-.833.25-1.5H2s-2 0-2-2V4zm1.398-.855a.758.758 0 0 0-.254.302A1.46 1.46 0 0 0 1 4.01V10c0 .325.078.502.145.602.07.105.17.188.302.254a1.464 1.464 0 0 0 .538.143L2.01 11H14c.325 0 .502-.078.602-.145a.758.758 0 0 0 .254-.302 1.464 1.464 0 0 0 .143-.538L15 9.99V4c0-.325-.078-.502-.145-.602a.757.757 0 0 0-.302-.254A1.46 1.46 0 0 0 13.99 3H2c-.325 0-.502.078-.602.145z" />
                                                                </svg>
                                                            </div>
                                                        </fieldset>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row justify-content-center g-3 gx-5">
                                                <h6 class="text-center mt-3 fst-italic">Dates Covered by Engagement</h3>
                                                    <div class="col-md-3">
                                                        <div class="form-group has-icon-left">
                                                            <label class="fw-bold required">Number of Pax</label>
                                                            <div class="position-relative">
                                                                <input type="number" class="form-control"
                                                                    placeholder="Enter pax number" name="pax_number"
                                                                    value="{{ $data[0]->pax_number }}">
                                                                <div class="form-control-icon">
                                                                    <i class="bi bi-people"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-3">
                                                        <div class="form-group has-icon-left">
                                                            <label class="fw-bold required">Date</label>
                                                            <div class="position-relative">
                                                                <input type="date" class="form-control"
                                                                    placeholder="Enter date" name="doe"
                                                                    value="{{ $data[0]->doe }}">
                                                                <div class="form-control-icon">
                                                                    <i class="bi bi-calendar"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-3">
                                                        <div class="form-group has-icon-left">
                                                            <label class="fw-bold required">Time</label>
                                                            <div class="position-relative">
                                                                <input type="time" class="form-control"
                                                                    placeholder="Enter time" name="dot"
                                                                    value="{{ $data[0]->dot }}">
                                                                <div class="form-control-icon">
                                                                    <i class="bi bi-clock"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                            </div>

                                            {{-- <div class="col-12 d-flex justify-content-end">
                                                    <button type="submit" class="btn btn-primary me-1 mb-1">Save</button>
                                                    <a href="{{ route('form/view/detail') }}"
                                                        class="btn btn-light-secondary me-1 mb-1">Back</a>
                                                </div> --}}
                                        </div>
                                    </div>
                                    {{-- end of container --}}
                                </div>
                                @include('view_record.viewfees')
                                @include('view_record.viewcost')
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
@endsection
