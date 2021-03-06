<hr>
<div class="card-header">
    <h4 class="card-title">Engagement Cost</h4>
</div>
<div class="form-body container" id="engagement-cost">
    <h5 class="mt-5">Commision</h5>
    <div class="ml-2" style="margin-left: 1%">
        <div class="form-group row">
            <div class="col-md-3">
                <label class="fw-bold required">Sales</label>
                <div class="form-group position-relative has-icon-left">
                    <fieldset>
                        <select class="form-select engagement-cost @error('ec_sales') is-invalid @enderror"
                            name="ec_sales" id="ec-sales" title="Search title or description...">
                            <optgroup>
                                <option value="0" {{ old('ec_sales') == '0' ? 'selected="selected"' : '' }} selected>
                                    0%
                                </option>
                            </optgroup>

                            <optgroup label="For large engagements, with EMs:">
                                <option value="4" {{ old('ec_sales') == '4' ? 'selected="selected"' : '' }}>4%
                                </option>
                                <option value="6" {{ old('ec_sales') == '6' ? 'selected="selected"' : '' }}>6%
                                </option>
                            </optgroup>

                            <optgroup label="For regular engagements:">
                                <option value="5" {{ old('ec_sales') == '5' ? 'selected="selected"' : '' }}>5%
                                </option>
                                <option value="7" {{ old('ec_sales') == '7' ? 'selected="selected"' : '' }}>7%
                                </option>
                            </optgroup>

                        </select>
                        <div class="form-control-icon">
                            <i class="fa-solid fa-wand-magic-sparkles"></i>
                        </div>
                        @error('ec_sales')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </fieldset>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-3">
                <label class="fw-bold">Referral</label>
                <div class="form-group position-relative has-icon-left">
                    <fieldset>
                        <select class="form-select engagement-cost @error('ec_refferal') is-invalid @enderror"
                            name="ec_refferal" id="ec-refferal">
                            <option value="0" {{ old('ec_refferal') == '0' ? 'selected="selected"' : '' }} selected>
                                0%</option>
                            <option value="2" {{ old('ec_refferal') == '2' ? 'selected="selected"' : '' }}>
                                2%</option>
                            <option value="3" {{ old('ec_refferal') == '3' ? 'selected="selected"' : '' }}>
                                3%</option>
                            <option value="10" {{ old('ec_refferal') == '10' ? 'selected="selected"' : '' }}>
                                10%</option>
                        </select>
                        <div class="form-control-icon">
                            <i class="fa-solid fa-user-group"></i>
                        </div>
                        @error('ec_refferal')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </fieldset>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-3">
                <label class="fw-bold">Engagement Manager</label>
                <div class="form-group position-relative has-icon-left">
                    <fieldset>
                        <select class="form-select engagement-cost @error('ec_engagementManager') is-invalid @enderror"
                            name="ec_engagementManager" id="ec-engagementManager">
                            <option value="0" {{ old('ec_engagementManager') == '0' ? 'selected="selected"' : '' }}
                                selected>
                                0%</option>
                            <option value="2" {{ old('ec_engagementManager') == '2' ? 'selected="selected"' : '' }}>
                                2%</option>
                            <option value="3" {{ old('ec_engagementManager') == '3' ? 'selected="selected"' : '' }}>
                                3%</option>
                            <option value="4" {{ old('ec_engagementManager') == '4' ? 'selected="selected"' : '' }}>
                                4%</option>
                        </select>
                        <div class="form-control-icon">
                            <i class="fa-solid fa-user-tie"></i>
                        </div>
                        @error('ec_engagementManager')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </fieldset>
                </div>
            </div>
        </div>

        <div class="form-group row">
            <div class="col-md-3">
                <div class="form-group has-icon-left">
                    <label class="fw-bold">Customization Fee</label>
                    <div class="position-relative">
                        <input type="number" class="form-control custom-fee @error('ec_customFee') is-invalid @enderror"
                            value="{{ old('ec_customFee') }}" id="ec-customFee" name="ec_customFee">
                        <div class="form-control-icon">
                            <i class="fa-solid fa-gear"></i>
                        </div>
                        @error('ec_customFee')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="form-group has-icon-left">
                    <label class="fw-bold">Number of Hours</label>
                    <div class="form-group position-relative has-icon-left">
                        <fieldset>
                            <select class="form-select custom-hours @error('ec_hours') is-invalid @enderror"
                                name="ec_hours" id="ec-hours">
                                <option value="0" {{ old('ec_hours') == '0' ? 'selected="selected"' : '' }} selected>
                                    0</option>
                                <option value="2" {{ old('ec_hours') == '2' ? 'selected="selected"' : '' }}>
                                    2</option>
                            </select>
                            <div class="form-control-icon">
                                <i class="fa-solid fa-hourglass-start"></i>
                            </div>
                            @error('ec_hours')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </fieldset>
                    </div>
                </div>
            </div>
        </div>

        <div class="form-group row">
            <div class="col-md-3">
                <div class="form-group has-icon-left">
                    <label class="fw-bold">Creators Fees</label>
                    <div class="position-relative">
                        <fieldset class="form-group">
                            <select
                                class="form-select creators-fees @error('ec_creatorsFee') is-invalid @enderror select"
                                name="ec_creatorsFee" id="ec-creatorsFee" onclick="input_discount()">
                                <option value="0" selected>
                                    &#8369;0</option>
                                <option value="500"
                                    {{ old('ec_creatorsFee') == '500' ? 'selected="selected"' : '' }}>
                                    &#8369;500</option>
                                <option value="1000"
                                    {{ old('ec_creatorsFee') == '1000' ? 'selected="selected"' : '' }}>
                                    &#8369;1,000</option>
                            </select>
                            <div class="form-control-icon">
                                <i class="bi bi-person-square"></i>
                            </div>
                            @error('ec_creatorsFee')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </fieldset>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="form-group has-icon-left">
                    <label class="fw-bold">Number of Hours</label>
                    <div class="form-group position-relative has-icon-left">
                        <fieldset>
                            <input type="number"
                                class="form-control creator-hour @error('creators_hours') is-invalid @enderror"
                                name="creators_hours" value="{{ old('creators_hours') }}" id="creators-hours"
                                onkeyup="myFunction()">
                            <div class="form-control-icon">
                                <i class="fa-solid fa-hourglass-start"></i>
                            </div>
                            @error('creators_hours')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </fieldset>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <h5 class="mt-5">Program</h5>
    <div class="mb-3" style="margin-left:1%">
        <div class="form-group row">
            <div class="col-md-3">
                <div class="form-group has-icon-left">
                    <label class="fw-bold">Lead</label>
                    <div class="position-relative">
                        <input type="number" class="form-control program-lead select" value="{{ old('ec_lead') }}"
                            name="ec_lead" id="ec-lead">
                        <div class="form-control-icon">
                            <i class="fa-solid fa-users"></i>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="form-group has-icon-left">
                    <label class="fw-bold">Number of Hours</label>
                    <div class="form-group position-relative has-icon-left">
                        <input type="number" class="form-control lead-hour" name="lead_hours"
                            value="{{ old('lead_hours') }}" id="lead-hours">
                        <div class="form-control-icon">
                            <i class="fa-solid fa-hourglass-start"></i>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="form-group has-icon-left">
                    <label class="fw-bold">Night shift / Weekends / Holidays</label>
                    <div class="form-group position-relative has-icon-left">
                        <input type="number" class="form-control lead-nonovertime " name="lead_nonovertime"
                            value="{{ old('lead_nonovertime') }}" id="lead-nonovertime">
                        <div class="form-control-icon">
                            <i class="fa-solid fa-calendar-day"></i>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="form-group row">
            <div class="col-md-3">
                <div class="form-group has-icon-left">
                    <label class="fw-bold">Moderator</label>
                    <div class="position-relative">
                        <fieldset class="form-group">
                            <select class="form-select program-moderator select" name="ec_moderator" id="ec_moderator"
                                onclick="input_discount()">
                                <option selected disabled>-- Select Moderator Price --</option>
                                <option value="750" {{ old('ec_moderator') == '750' ? 'selected="selected"' : '' }}>
                                    &#8369;750</option>
                                <option value="1000"
                                    {{ old('ec_moderator') == '1000' ? 'selected="selected"' : '' }}>
                                    &#8369;1,000</option>
                                <option value="1250"
                                    {{ old('ec_moderator') == '1250' ? 'selected="selected"' : '' }}>
                                    &#8369;1,250</option>
                            </select>
                            <div class="form-control-icon">
                                <i class="fa-solid fa-crown"></i>
                            </div>
                        </fieldset>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="form-group has-icon-left">
                    <label class="fw-bold">Number of Hours</label>
                    <div class="form-group position-relative has-icon-left">
                        <input type="number" class="form-control moderator-hour" name="moderator_hour"
                            value="{{ old('moderator_hour') }}" id="moderator-hour">
                        <div class="form-control-icon">
                            <i class="fa-solid fa-hourglass-start"></i>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="form-group has-icon-left">
                    <label class="fw-bold">Night shift / Weekends / Holidays</label>
                    <div class="form-group position-relative has-icon-left">
                        <input type="number" class="form-control moderator-nonovertime" name="moderator_nonovertime"
                            value="{{ old('moderator_nonovertime') }}" id="moderator-nonovertime">
                        <div class="form-control-icon">
                            <i class="fa-solid fa-calendar-day"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="form-groum row">
            <div class="col-md-3">
                <div class="form-group has-icon-left">
                    <label class="fw-bold">Producer</label>
                    <div class="position-relative">
                        <input type="number" class="form-control program-producer" value="{{ old('ec_producer') }}"
                            placeholder="" id="ec-producer" name="ec_producer">
                        <div class="form-control-icon">
                            <i class="fa-solid fa-person-chalkboard"></i>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="form-group has-icon-left">
                    <label class="fw-bold">Number of Hours</label>
                    <div class="form-group position-relative has-icon-left">
                        <fieldset>
                            <input type="number" class="form-control producer-hour" name="producer_hour"
                                value="{{ old('producer_hour') }}" id="producer-hour">
                            <div class="form-control-icon">
                                <i class="fa-solid fa-hourglass-start"></i>
                            </div>
                        </fieldset>
                    </div>
                </div>
            </div>
            {{-- old('title', $dog->title --}}

            <div class="col-md-3">
                <div class="form-group has-icon-left">
                    <label class="fw-bold">Night shift / Weekends / Holidays</label>
                    <div class="form-group position-relative has-icon-left">
                        <fieldset>
                            <input type="number"
                                class="form-control producer-nonovertime  @error('producer_nonovertime') is-invalid @enderror"
                                name="producer_nonovertime" value="{{ old('producer_nonovertime') }}"
                                id="producer-nonovertime">
                            <div class="form-control-icon">
                                <i class="fa-solid fa-calendar-day"></i>
                            </div>
                            @error('producer_nonovertime')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </fieldset>
                    </div>
                </div>
            </div>
        </div>


    </div>

    <div class="form-group row">
        <div class="row">
            <div class="col-md-3">
                <div class="form-group has-icon-left">
                    <label class="fw-bold">Program Expenses</label>
                    <div class="position-relative">
                        <div class="input-group">
                            <input type="text" class="form-control @error('ec_programExpense') is-invalid @enderror"
                                name="ec_programExpense" value="{{ old('ec_programExpense') }}"
                                id="ec_programExpense" onkeypress="isInputNumber(event)"
                                onkeyup="input_expense(this.value)" min="0" max="100">
                            <div class="input-group-append">
                                <span class="input-group-text">%</span>
                            </div>
                            @error('ec_programExpense')
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

    <div class="form-group row">
        <div class="col-md-3">
            <div class="form-group has-icon-left">
                <label class="fw-bold text-uppercase">Total</label>
                <div class="position-relative">
                    <input type="text" id="total" name="ec_total" value="{{ old('ec_total') }}"
                        class="form-control tot @error('ec_total') is-invalid @enderror" readonly>
                    <div class="form-control-icon">
                        <i class="fa-solid fa-file-invoice-dollar"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<hr>
<div class="form-body container">
    <div class="form-group row justify-content-center">
        <div class="col-md-3">
            <div class="form-group has-icon-left">
                <label class="fw-bold text-uppercase">Profit</label>
                <div class="position-relative">
                    <input type="text" id="profit" name="profit" value="{{ old('profit') }}"
                        class="form-control profit @error('profit') is-invalid @enderror" readonly>
                    <div class="form-control-icon">
                        <i class="fa-solid fa-file-invoice-dollar"></i>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="form-group has-icon-left">
                <label class="fw-bold text-uppercase">LESS: 35% CONTRIBUTION TO OVERHEAD</label>
                <div class="position-relative">
                    <input type="text" id="less-percent" name="less_percent" value="{{ old('less_percent') }}"
                        class="form-control less_percent @error('less_percent') is-invalid @enderror" readonly>
                    <div class="form-control-icon">
                        <i class="fa-solid fa-file-invoice-dollar"></i>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="form-group has-icon-left">
                <label class="fw-bold text-uppercase">Net Profit</label>
                <div class="position-relative">
                    <input type="text" id="net-profit" name="net_profit" value="{{ old('net_profit') }}"
                        class="form-control net_profit @error('net_profit') is-invalid @enderror" readonly>
                    <div class="form-control-icon">
                        <i class="fa-solid fa-file-invoice-dollar"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-md-3">
            <div class="form-group has-icon-left">
                <label class="fw-bold text-uppercase">Profit Margin</label>
                <div class="position-relative">
                    <input type="text" id="profit-margin" name="profit_margin" value="{{ old('profit_margin') }}"
                        class="form-control profit_margin @error('profit_margin') is-invalid @enderror" readonly>
                    <div class="form-control-icon">
                        <i class="fa-solid fa-file-invoice-dollar"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="col-12 d-flex justify-content-center mt-3">
    <button type="submit" class="btn btn-primary me-1 mb-1">Save</button>
    <button type="reset" class="btn btn-light-secondary me-1 mb-1">Reset</button>
</div>
