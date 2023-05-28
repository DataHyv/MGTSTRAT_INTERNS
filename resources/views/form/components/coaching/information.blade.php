{{-- p --}}
<div class="card-header mb-5">
    <h4 class="card-title">Information</h4>
</div>

<div class="form-body container">
    <div class="form-group row">

        <div class="form-group row mb-4">
            <div class="col-md-2">
                <label class="fw-bold required">Status: </label>
            </div>

            <div class="col-md-2" id="">
                <select class="input js-mytooltip form-select @error('') is-invalid @enderror" name="status" id="status"
                    value="{{ old('') }}" data-mytooltip-content="<i>Please Choose Status</i>"
                    data-mytooltip-theme="dark" data-mytooltip-action="focus" data-mytooltip-direction="right">
                    <option value="Trial" {{ old('') == 'Trial' ? 'selected="selected"' : '' }}>
                        Trial
                    </option>
                    <option value="Confirmed" {{ old('') == 'Confirmed' ? 'selected="selected"' : '' }} selected>
                        Confirmed
                    </option>
                    <option value="In-progress" {{ old('') == 'In-progress' ? 'selected="selected"' : '' }}>
                        In-progress
                    </option>
                    <option value="Completed" {{ old('') == 'Completed' ? 'selected="selected"' : '' }}>
                        Completed
                    </option>
                    <option value="Lost" {{ old('') == 'Lost' ? 'selected="selected"' : '' }}>
                        Lost
                    </option>
                </select>
            </div>
        </div>

        <div class="form-group row">
            <div class="col-md-2">
                <label class="fw-bold required">Client: </label>
            </div>
            <div class="col-md-6">
                <div class="form-group has-icon-left">
                    <div class="position-relative">
                        <select class="select select2s-hidden-accessible" style="width: 100%;" tabindex="-1"
                            aria-hidden="true" id="client" name="client">
                            <option value="">-- Select --</option>
                            @foreach ($companyList as $key => $clients)
                                <option value="{{ $clients->company_name }}" data-first_eng={{ $clients->first_eng }}>
                                    {{ $clients->company_name }}</option>
                            @endforeach
                        </select>
                        <div class="form-control-icon">
                            <i class="fa-solid fa-clients"></i>
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
                        <input type="text" class="form-control @error('') is-invalid @enderror" value="{{ old('') }}" name="engagement_title" id="">
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
                        <select class="input js-mytooltip form-select @error('') is-invalid @enderror" name="engagement_type" id="">
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
                    <input class="form-check-input" type="checkbox" role="switch" id="dcbeCheck" onclick="(()=>{if(document.querySelector('#dcbeCheck').checked){document.querySelector('#dcbe').style.display='none';document.querySelector('#tba').value='yes';}else{document.querySelector('#dcbe').style.display='';document.querySelector('#tba').value='';}})()">
                    <label class="form-check-label" for="dcbeCheck">To Be Announced</label>
                    <input type="hidden" id="tba" name="tba">
                </div>
            </div>
        </div>

        <div class="row justify-content-center g-3 gx-5 mt-5" id="dcbe">
            <h6 class="text-center mt-5 fst-italic">Date Covered by Engagement</h3>

            <div class="col-md-3">
                <div class="form-group has-icon-left">
                    <label class="fw-bold required text-uppercase">for programs, # of pax:</label>
                    <div class="position-relative">
                        <input type="number" class="form-control @error('doe') is-invalid @enderror" value="{{ old('doe') }}" placeholder="Enter # of Pax" name="number_of_pax" size="30">
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
                        <input type="text" class="form-control date datepicker @error('doe') is-invalid @enderror" value="{{ old('doe') }}" placeholder="Enter Date" name="date" id="datepicker" size="30">
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
                        <input type="time" class="form-control @error('dot') is-invalid @enderror" value="{{ old('dot') }}" placeholder="Enter Time" name="time">
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
