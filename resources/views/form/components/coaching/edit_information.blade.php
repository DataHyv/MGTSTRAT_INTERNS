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
                    data-mytooltip-content="<i>Please Choose Status</i>"
                    data-mytooltip-theme="dark" data-mytooltip-action="focus" data-mytooltip-direction="right">
                    <option value="Trial" {{ $coachings->status == 'Trial' ? 'selected="selected"' : '' }}>
                        Trial
                    </option>
                    <option value="Confirmed" {{ $coachings->status == 'Confirmed' ? 'selected="selected"' : '' }}>
                        Confirmed
                    </option>
                    <option value="In-progress" {{ $coachings->status == 'In-progress' ? 'selected="selected"' : '' }}>
                        In-progress
                    </option>
                    <option value="Completed" {{ $coachings->status == 'Completed' ? 'selected="selected"' : '' }}>
                        Completed
                    </option>
                    <option value="Lost" {{ $coachings->status == 'Lost' ? 'selected="selected"' : '' }}>
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
                            aria-hidden="true" id="client" name="client" disabled>
                            <option value="{{ $coachings->client }}">{{ $coachings->client }}</option>
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
                        <input type="text" class="form-control @error('') is-invalid @enderror" value="{{ $coachings->engagement_title }}" name="engagement_title" id="">
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
                            <option value="Capability" {{ $coachings->engagement_type == 'Trial' ? 'selected="selected"' : '' }}>Capability</option>
                            <option value="Culture" {{ $coachings->engagement_type == 'Culture' ? 'selected="selected"' : '' }}>Culture</option>
                            <option value="Leadership" {{ $coachings->engagement_type == 'Leadership' ? 'selected="selected"' : '' }}>Leadership</option>
                            <option value="Society" {{ $coachings->engagement_type == 'Society' ? 'selected="selected"' : '' }}>Society</option>
                            <option value="Strategy" {{ $coachings->engagement_type == 'Strategy' ? 'selected="selected"' : '' }}>Strategy</option>
                            <option value="Teams" {{ $coachings->engagement_type == 'Teams' ? 'selected="selected"' : '' }}>Teams</option>
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
                        <input type="number" class="form-control @error('doe') is-invalid @enderror" placeholder="Enter # of Pax" name="number_of_pax" size="30" value="{{ ($coachings->number_of_pax !== 'To Be Announced') ? $coachings->number_of_pax : '' }}">
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
                        <input type="text" class="form-control date datepicker @error('doe') is-invalid @enderror" value="{{ ($coachings->date !== 'To Be Announced') ? $coachings->date : '' }}" placeholder="Enter Date" name="date" id="datepicker" size="30">
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
                        <input type="time" class="form-control @error('dot') is-invalid @enderror" value="{{ ($coachings->time !== 'To Be Announced') ? $coachings->time : '' }}" placeholder="Enter Time" name="time">
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
