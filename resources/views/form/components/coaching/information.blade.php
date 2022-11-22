{{-- p --}}
<div class="card-header mb-5">
    <h4 class="card-title">Information</h4>
</div>

<div class="form-body container">
    <div class="form-group row">

        <div class="row">
            <div class="col-md-3">
                <label class="fw-bold required">Client: </label>
            </div>

            <div class="col-md-7">
                <div class="form-group has-icon-left">
                    <div class="position-relative">
                        <input type="text" class="form-control @error('') is-invalid @enderror" value="{{ old('') }}" name="" id="fourth" title="asdasdasd">
                        <div class="form-control-icon">
                            <i class="fa-solid fa-user"></i>
                        </div>
                        @error('')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
            </div>

        </div>

        <div class="row">
            <div class="col-md-3">
                <label class="fw-bold required">Engagement Title: </label>
            </div>

            <div class="col-md-7">
                <div class="form-group has-icon-left">
                    <div class="position-relative">
                        <input type="text" class="form-control @error('') is-invalid @enderror" value="{{ old('') }}" name="" id="">
                        <div class="form-control-icon">
                            <i class="fa-solid fa-t"></i>
                        </div>
                        @error('')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-3">
                <label class="fw-bold required">Engagement Type: </label>
            </div>

            <div class="col-md-3">
                <div class="form-group has-icon-left">
                    <div class="position-relative">
                        <select class="input js-mytooltip form-select @error('') is-invalid @enderror" name="" id="">
                            <option value="Capability">Capability</option>
                            <option value="Culture">Culture</option>
                            <option value="Leadership">Leadership</option>
                            <option value="Society">Society</option>
                            <option value="Strategy">Strategy</option>
                            <option value="Teams">Teams</option>
                        </select>
                        <div class="form-control-icon">
                            <i class="fa-solid fa-gear"></i>
                        </div>
                        @error('')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-md-3">
                <label class="fw-bold required">Date Covered by Engagement </label>
            </div>

            <div class="col-md-3">
                <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" role="switch" id="dcbeCheck">
                    <label class="form-check-label" for="dcbeCheck">To Be Announced</label>
                </div>
            </div>
        </div>

        <div class="row justify-content-center g-3 gx-5 mt-5" id="dcbe">
            <h6 class="text-center mt-5 fst-italic">Date Covered by Engagement</h3>

            <div class="col-md-3">
                <div class="form-group has-icon-left">
                    <label class="fw-bold required text-uppercase">for programs, # of pax:</label>
                    <div class="position-relative">
                        <input type="number" class="form-control @error('doe') is-invalid @enderror" value="{{ old('doe') }}" placeholder="Enter # of Pax" name="doe" id="datepicker" size="30">
                        <div class="form-control-icon">
                            <i class="fa-solid fa-hashtag"></i>
                        </div>
                        @error('doe')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="form-group has-icon-left">
                    <label class="fw-bold required text-uppercase">for programs, Date/s:</label>
                    <div class="position-relative">
                        <input type="text" class="form-control date datepicker @error('doe') is-invalid @enderror" value="{{ old('doe') }}" placeholder="Enter Date" name="doe" id="datepicker" size="30">
                        <div class="form-control-icon">
                            <i class="bi bi-calendar"></i>
                        </div>
                        @error('doe')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="form-group has-icon-left">
                    <label class="fw-bold required text-uppercase">for programs, Time:</label>
                    <div class="position-relative">
                        <input type="time" class="form-control @error('dot') is-invalid @enderror" value="{{ old('dot') }}" placeholder="Enter Time" name="dot">
                        <div class="form-control-icon">
                            <i class="bi bi-clock"></i>
                        </div>
                        @error('dot')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
