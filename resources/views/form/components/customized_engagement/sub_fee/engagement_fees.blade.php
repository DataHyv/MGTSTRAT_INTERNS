<!------------ CARD HEADER ------------>
    <div class="card-header">
        <h4 class="card-title">Engagement Fees</h4>
    </div>

<!------------ FORM BODY ------------>
    <div class="form-body container">
        <section>
            <!------------ DATE COVERED BY ENGAGEMENT ------------>
                <div class="row justify-content-center mb-5" id="dcbe">
                    <h5 class="text-center mt-5 fst-italic">Sessions</h5>
                    <div class="d-flex justify-content-center mt-4" id="dateRows1">

                        <div class="flex-column">
                            <div>
                                <fieldset class="row justify-content-center" id="dateRows">
                                    <div class="col-lg-1 col-md-1">
                                        <div class="px-0">
                                                <label class="fw-bold invisible overflow-hidden mb-4">Add</label>
                                                <a href="javascript:void(0)" class="text-success font-18 px-0" title="Add"
                                                id="addDates"><i class="fa fa-plus"></i></a>
                                        </div>
                                    </div>

                                    <div class="col-lg-2 col-md-2">
                                        <div class="form-group has-icon-left">
                                            <label class="fw-bold required">Date</label>
                                            <div class="position-relative">
                                                <input type="text" class="form-control date datepicker @error('doe') is-invalid @enderror"
                                                    value="{{ old('doe') }}" placeholder="Enter Date" name="program_dates[]" id="datepicker"
                                                    size="30">
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

                                    <div class="col-lg-2 col-md-2">
                                        <div class="form-group has-icon-left">
                                            <label class="fw-bold required">Start Time</label>
                                            <div class="position-relative">
                                                <input type="text" class="form-control start-time timepicker @error('dot') is-invalid @enderror"
                                                    value="{{ old('dot') }}" placeholder="Enter Time" id="program_start_time" name="program_start_time[]">
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

                                    <div class="col-lg-2 col-md-2">
                                        <div class="form-group has-icon-left">
                                            <label class="fw-bold required">End Time</label>
                                            <div class="position-relative">
                                                <input type="text" class="form-control end-time timepicker @error('dot') is-invalid @enderror"
                                                    value="{{ old('dot') }}" placeholder="Enter Time" id="program_end_time" name="program_end_time[]">
                                                <div class="form-control-icon">
                                                    <i class="fa-solid fa-hourglass-end"></i>
                                                </div>
                                                @error('dot')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                    @include('form.components.reference.cluster')
                                </fieldset>
                            </div>
                        </div>

                    </div>
                </div>
            <!------------------- END ----------------------->
            <div class="table-responsive" id="no-more-tables" data-animation="slideHorz">
                <table class="table table-bordered" id="ec_tableEngagementFees1">
                <!------------------- TABLE HEADING ------------------------->
                    <thead class="table-dark">
                        <b>
                            <tr class="text-center">
                                <th class="title-th" scope="col" width=20%></th>
                                <th class="title-middle" scope="col" style="font-size: 0.9rem;">NUMBER OF CONSULTANTS</th>
                                <th class="title-middle px-4" width=15% scope="col">HOURLY FEES</th>
                                <th class="title-middle" scope="col" style="font-size: 0.9rem;">NUMBER OF HOURS</th>
                                <th class="title-middle" scope="col" style="font-size: 0.9rem;" width=10%>
                                    <label for="Night Shift, Weekends and Holidays">NSWH</label>
                                    @foreach ($data2 as $key=>$fee_type)
                                        @if ($fee_type->type === 'Night Shift, Weekends and Holidays')
                                            <input type="hidden" value="Night Shift, Weekends and Holidays" name="fee_type[]">
                                            <input type="hidden" value="" name="fee_consultant_num[]">
                                            <input type="hidden" value="" name="fee_hour_fee[]">
                                            <input type="hidden" value="" name="fee_hour_num[]">
                                            <input type="hidden" value="" name="fee_nswh[]">
                                            <input type="hidden" value="" name="fee_notes[]">
                                            <select class="input js-mytooltip form-select form-select-sm engagement-fee nswh-percent @error('') is-invalid @enderror select" name="nswh_percent[]" id="nswh">
                                                <option value="0.1" {{ $fee_type->nswh_percent == '0.1' ? 'selected="selected"' : '' }}>
                                                    &#8369;10%
                                                </option>
                                                <option value="0.15" {{ $fee_type->nswh_percent == '0.15' ? 'selected="selected"' : '' }}>
                                                    &#8369;15%
                                                </option>
                                                <option value="0.2" {{ $fee_type->nswh_percent == '0.2' ? 'selected="selected"' : '' }} selected>
                                                    &#8369;20%
                                                </option>
                                                <option value="0.25" {{ $fee_type->nswh_percent == '0.25' ? 'selected="selected"' : '' }}>
                                                    &#8369;25%
                                                </option>
                                            </select>
                                        @endif
                                    @endforeach
                                </th>
                                <th class="title-th" scope="col" width=15%>TOTAL FEE</th>
                                <th class="title-th" scope="col" width=15%>NOTES</th>
                                <td class="add-row border border-white"> </td>
                            </tr>
                        </b>
                    </thead>
                <!------------------- END ----------------------->

                <!------------------- CONSULTING ------------------------->
                    <tr class="">
                        <th class="px-4 title table-light">
                            <b>1. CONSULTING</b>
                        </th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th class="table-light total-td"></th>
                        <th class="table-light total-td"></th>
                        <td class="border border-white"> </td>
                    </tr>

                    <tbody id="tableLeadconsultant">
                        @foreach ($data2 as $key=>$fee_type)
                        @if ($fee_type->type === 'Lead Consultant')
                        <tr class="table-warning">
                            <td class="title table-light">
                                <input type="text" class="d-none" value="{{ $fee_type->type }}" name="fee_type[]" readonly>
                                {{ $fee_type->type }}
                            </td>
                            <td data-title="# OF CONSULTANTS">
                                <input type="text"
                                    class="input js-mytooltip input-table form-control commanumber @error('') is-invalid @enderror"
                                    value="{{ $fee_type->consultant_num }}" name="fee_consultant_num[]" id="ef_LeadconsultantNoc1"
                                    title="" max="100" data-type="currency"
                                    data-mytooltip-content="<i>Includes in depth needs analysis (i.e. surveys, interviews, FGDs),
                                    special research (i.e. to study client materials or client -required materials, industry
                                    or function specific content), creation of client-specific learning aids/tools
                                    (i.e. assessments, c</i>"
                                    data-mytooltip-theme="dark" data-mytooltip-action="focus"
                                    data-mytooltip-direction="bottom">
                            </td>
                            <td>
                                <fieldset>
                                    <select class="form-select input js-mytooltip @error('') is-invalid @enderror" name="fee_hour_fee[]" id="ef_LeadconsultantHf" data-mytooltip-content="<i> &#8369;7,000 - Consultants<br> &#8369;9,000 - Senior Consultants </i>" data-mytooltip-theme="dark" data-mytooltip-action="focus" data-mytooltip-direction="right" style="background-color:#ffcccc; color:red;">
                                        <option value="7000" {{ $fee_type->hour_fee == '7000' ? 'selected="selected"' : '' }}>
                                            &#8369;7,000
                                        </option>
                                        <option value="9000" {{ $fee_type->hour_fee == '9000' ? 'selected="selected"' : '' }}>
                                            &#8369;9,000
                                        </option>
                                    </select>
                                    @error('')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </fieldset>
                            </td>
                            <td>
                                <input type="text" class="form-control input-table input js-mytooltip commanumber @error('') is-invalid @enderror" value="{{ $fee_type->hour_num }}" name="fee_hour_num[]" id="ef_LeadconsultantNoh1" data-type="currency" data-mytooltip-content="<i>Number of Hours</i>" data-mytooltip-theme="dark" data-mytooltip-action="focus" data-mytooltip-direction="bottom">
                            </td>
                            <td>
                                <input type="text" class="form-control input-table commanumber @error('') is-invalid @enderror" value="{{ $fee_type->nswh }}" name="fee_nswh[]" id="ef_LeadconsultantNwh1" data-type="currency">
                                <input type="text" class="nswh-percent-value" name="nswh_percent[]" hidden>
                            </td>
                            <td class="total-td table-light">
                                <h4 class="text-center lead" id="leadTotal">-</h4>
                            </td>
                            <td class="total-td table-light">
                                <textarea class="form-control input-table @error('') is-invalid @enderror" name="fee_notes[]" id="" rows="2" cols="55">{{ $fee_type->notes }}</textarea>
                            </td>
                            <td style="background-color: #FFFFFF;" class="border border-white">
                                {{-- <a href="javascript:void(0)" class="text-success font-18" title="Add" id="addBtn" onclick="$('#CeAddBtn').trigger('click')">
                                    <i class="fa fa-plus"></i>
                                </a> --}}
                            </td>
                        </tr>
                        @endif
                        @endforeach
                    </tbody>

                    <tbody id="tableAnalyst">
                        @foreach ($data2 as $key=>$fee_type)
                            @if ($fee_type->type === 'Analyst')
                                <tr class="table-warning">
                                    <td class="title table-light">
                                        <input type="text" class="d-none" value="{{ $fee_type->type }}" name="fee_type[]" readonly>
                                        {{ $fee_type->type }}
                                    </td>
                                    <td>
                                        <input type="text"
                                            class="input js-mytooltip form-control input-table commanumber @error('') is-invalid @enderror"
                                            value="{{ $fee_type->consultant_num }}" name="fee_consultant_num[]" id="ef_AnalystNoc1" max="100" data-type="currency"
                                            data-mytooltip-content="<i>Includes in depth needs analysis (i.e. surveys, interviews, FGDs),
                                            special research (i.e. to study client materials or client -required materials, industry
                                            or function specific content), creation of client-specific learning aids/tools
                                            (i.e. assessments, c</i>"
                                            data-mytooltip-theme="dark" data-mytooltip-action="focus"
                                            data-mytooltip-direction="bottom">
                                    </td>
                                    <td>
                                        <input type="text" class="form-control input-table commanumber @error('') is-invalid @enderror"
                                            value="{{ $fee_type->hour_fee }}" name="fee_hour_fee[]" id="ef_AnalystHf" data-type="currency">
                                    </td>
                                    <td>
                                        <input type="text"
                                            class="input js-mytooltip form-control input-table commanumber @error('') is-invalid @enderror"
                                            value="{{ $fee_type->hour_num }}" name="fee_hour_num[]" id="ef_AnalystNoh1" data-type="currency"
                                            data-mytooltip-content="<i>Number of Hours</i>" data-mytooltip-theme="dark"
                                            data-mytooltip-action="focus" data-mytooltip-direction="bottom">
                                    </td>
                                    <td>
                                        <input type="text" class="form-control input-table commanumber @error('') is-invalid @enderror"
                                            value="{{ $fee_type->nswh }}" name="fee_nswh[]" id="ef_AnalystNwh1" data-type="currency">
                                        <input type="text" class="nswh-percent-value" value="{{ old('') }}" name="nswh_percent[]" hidden>
                                    </td>
                                    <td class="total-td table-light">
                                        <h4 class="text-center lead" id="analyst-total">-</h4>
                                    </td>
                                    <td class="total-td table-light">
                                        <textarea class="form-control input-table @error('') is-invalid @enderror"
                                            name="fee_notes[]" id="" rows="2" cols="55">{{ $fee_type->notes }}</textarea>
                                    </td>
                                    <td style="background-color: #FFFFFF;" class="border border-white">
                                        {{-- <a href="javascript:void(0)" class="text-success font-18" title="Add" id="addBtn2" onclick="$('#CeAddBtn2').trigger('click')">
                                            <i class="fa fa-plus"></i>
                                        </a> --}}
                                    </td>
                                </tr>
                            @endif
                        @endforeach
                    </tbody>

                    <tr class="">
                        <td class="title fw-bold text-dark fst-italic table-light">Subtotal</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td class="total-td" style="background-color: rgba(146, 146, 146, 0.727)">
                            <h4 class="text-center" id="subtotal-consulting">-</h4>
                        </td>
                        <td class="total-td table-light"></td>
                        <td class="add-row border border-white"></td>
                    </tr>
                <!------------------- END ----------------------->

                <!-------------------DESIGN------------------------->
                    <tr class="">
                        <th class="title px-4 text-dark table-light">
                            <b>2. DESIGN</b>
                        </th>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td class="table-light total-td"></td>
                        <td class="table-light total-td"></td>
                    </tr>

                    <tbody id="tableDesigner">
                        @foreach ($data2 as $key=>$fee_type)
                            @if ($fee_type->type === 'Designer')
                                <tr class="table-warning">
                                    <td class="title table-light">
                                        <input type="text" class="d-none" value="{{ $fee_type->type }}" name="fee_type[]" readonly>
                                        {{ $fee_type->type }}
                                    </td>
                                    <td>
                                        <input type="text"
                                            class="input js-mytooltip form-control input-table commanumber @error('') is-invalid @enderror"
                                            value="{{ $fee_type->consultant_num }}" name="fee_consultant_num[]" id="ef_DesignerNoc1" data-type="currency"
                                            data-mytooltip-content="<i>Includes in depth needs analysis (i.e. surveys, interviews, FGDs),
                                                special research (i.e. to study client materials or client -required materials, industry
                                                or function specific content), creation of client-specific learning aids/tools
                                                (i.e. assessments, c</i>"
                                            data-mytooltip-theme="dark" data-mytooltip-action="focus"
                                            data-mytooltip-direction="bottom">
                                    </td>
                                    <td>
                                        <fieldset>
                                            <select class="input js-mytooltip form-select @error('') is-invalid @enderror select"
                                                name="fee_hour_fee[]" id="ef_DesignerHf"
                                                data-mytooltip-content="<i>Consulting - &#8369;6,000 - Consultants<br>
                                                    &#8369;8,000 - Senior Consultants</i>"
                                                data-mytooltip-theme="dark" data-mytooltip-action="focus"
                                                data-mytooltip-direction="right" style="background-color:#ffcccc; color:red;">
                                                <option value="6000" {{ $fee_type->hour_fee == '6000' ? 'selected="selected"' : '' }}>
                                                    &#8369;6,000
                                                </option>
                                                <option value="8000" {{ $fee_type->hour_fee == '8000' ? 'selected="selected"' : '' }}>
                                                    &#8369;8,000
                                                </option>
                                            </select>
                                            @error('')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </fieldset>
                                    </td>
                                    <td>
                                        <input type="text" class="input js-mytooltip form-control input-table commanumber @error('') is-invalid @enderror" value="{{ $fee_type->hour_num }}" name="fee_hour_num[]" id="ef_DesignerNoh1" data-type="currency" data-mytooltip-content="<i>Number of Hours</i>" data-mytooltip-theme="dark" data-mytooltip-action="focus" data-mytooltip-direction="bottom">
                                    </td>
                                    <td>
                                        <input type="text" class="form-control input-table commanumber @error('') is-invalid @enderror" value="{{ $fee_type->nswh }}" name="fee_nswh[]" id="ef_DesignerNwh1" data-type="currency">
                                        <input type="text" class="nswh-percent-value" name="nswh_percent[]" hidden>
                                    </td>
                                    <td class="table-light total-td" style="background-color: rgba(146, 146, 146, 0.727)">
                                        <h4 class="text-center" id="subtotal-design">-</h4>
                                    </td>
                                    <td class="table-light total-td">
                                        <textarea class="form-control input-table @error('') is-invalid @enderror" name="fee_notes[]" id="" rows="2" cols="55">{{ $fee_type->notes }}</textarea>
                                    </td>
                                    <td style="background-color: #FFFFFF;" class="border border-white">
                                       {{-- <a href="javascript:void(0)" class="text-success font-18" title="Add" id="addBtn3" onclick="$('#CeAddBtn3').trigger('click')">
                                            <i class="fa fa-plus"></i>
                                        </a> --}}
                                    </td>
                                </tr>
                            @endif
                        @endforeach
                    </tbody>
                <!------------------- END ----------------------->

                <!-------------------PROGRAM------------------------->
                    <tr class="">
                        <th class="title px-4 text-dark table-light">
                            <b>3. PROGRAM</b>
                        </th>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td class="table-light total-td"></td>
                        <td class="table-light total-td"></td>
                    </tr>

                    <tbody id="tableLeadfaci">
                        @foreach ($data2 as $key=>$fee_type)
                            @if ($fee_type->type === 'Lead Facilitator')
                                <tr class="table-warning">
                                    <td class="title table-light">
                                        <input type="text" class="d-none" value="{{ $fee_type->type }}" name="fee_type[]" readonly>
                                        {{ $fee_type->type }}
                                    </td>
                                    <td>
                                        <input type="text" class="form-control input-table commanumber @error('') is-invalid @enderror"
                                            value="{{ $fee_type->consultant_num }}" name="fee_consultant_num[]" id="ef_LeadfacilitatorNoc1" data-type="currency">
                                    </td>
                                    <td>
                                        <div class="form-group has-icon-right mb-0" id="inputLeadfaci1" style="display:none">
                                            <div class="position-relative">
                                                <input type="text" class="form-control input-table commanumber @error('') is-invalid @enderror" value="{{ $fee_type->hour_fee }}"
                                                    name="fee_hour_fee[]" id="ef_InputLeadFaciHf1" data-type="currency" disabled>
                                                <div class="form-control-icon">
                                                    <a href="javascript:void(0)" class="deleteIcon" id="deleteIcon1">
                                                        <i class="fa-solid fa-square-xmark text-danger"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>

                                        <fieldset>
                                            <select
                                                class="input js-mytooltip form-select engagement-fee @error('') is-invalid @enderror select"
                                                name="fee_hour_fee[]" id="ef_LeadfacilitatorHf1"
                                                data-mytooltip-content="<i>&#8369;10,000 - For Key Accounts w/ 2021 contract <br>
                                                    &#8369;11,000 - For Key Accounts with minimum guaranteed 50 sessions w/in 6 months <br>
                                                    &#8369;12,000 - all else</i>"
                                                data-mytooltip-theme="dark" data-mytooltip-action="focus"
                                                data-mytooltip-direction="right" style="background-color:#ffcccc; color:red;">
                                                <option value="10000" {{ $fee_type->hour_fee == '10000' ? 'selected="selected"' : '' }}>
                                                    &#8369;10,000
                                                </option>
                                                <option value="11000" {{ $fee_type->hour_fee == '11000' ? 'selected="selected"' : '' }}>
                                                    &#8369;11,000
                                                </option>
                                                <option value="12000" {{ $fee_type->hour_fee == '12000' ? 'selected="selected"' : '' }} selected>
                                                    &#8369;12,000
                                                </option>
                                                <option value="others" {{ $fee_type->hour_fee == 'others' ? 'selected="selected"' : '' }}
                                                id="others1" onclick="document.getElementById('ef_InputLeadFaciHf1').focus()">
                                                    Others
                                                </option>
                                            </select>

                                            @error('ef_customFee')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </fieldset>
                                    </td>
                                    <td>
                                        <input type="text"
                                            class="input js-mytooltip form-control input-table commanumber @error('') is-invalid @enderror"
                                            value="{{ $fee_type->hour_num }}" name="fee_hour_num[]" id="ef_LeadfacilitatorNoh1" data-type="currency"
                                            data-mytooltip-content="<i>Number of Hours</i>" data-mytooltip-theme="dark"
                                            data-mytooltip-action="focus" data-mytooltip-direction="bottom">
                                    </td>
                                    <td>
                                        <input type="text" class="form-control input-table commanumber @error('') is-invalid @enderror"
                                            value="{{ $fee_type->nswh }}" name="fee_nswh[]" id="ef_LeadfacilitatorNwh1" data-type="currency">
                                        <input type="text" class="nswh-percent-value" name="nswh_percent[]" hidden>
                                    </td>
                                    <td class="table-light total-td">
                                        <h4 class="text-center lead" id="subtotal-lead">-</h4>
                                    </td>
                                    <td class="table-light total-td">
                                        <textarea class="form-control input-table @error('') is-invalid @enderror"
                                            name="fee_notes[]" id="" rows="2" cols="55">{{  $fee_type->notes }}</textarea>
                                    </td>
                                    <td style="background-color: #FFFFFF;" class="border border-white">
                                        {{-- <a href="javascript:void(0)" class="text-success font-18" title="Add" id="addBtn4" onclick="$('#CeAddBtn4').trigger('click')">
                                            <i class="fa fa-plus"></i>
                                        </a> --}}
                                    </td>
                                </tr>
                            @endif
                        @endforeach
                    </tbody>

                    <tbody id="tableCofaci">
                        @foreach ($data2 as $key=>$fee_type)
                            @if ($fee_type->type === 'Co-facilitator / Resource Speaker')
                                <tr class="table-warning">
                                    <td class="title table-light">
                                        <input type="text" class="d-none" value="{{ $fee_type->type }}" name="fee_type[]" readonly>
                                        {{ $fee_type->type }}
                                    </td>
                                    <td>
                                        <input type="text" class="form-control input-table commanumber @error('') is-invalid @enderror"
                                            value="{{ $fee_type->consultant_num }}" name="fee_consultant_num[]" id="ef_CofaciNoc1" data-type="currency">
                                    </td>
                                    <td>
                                        <input type="text" class="form-control input-table commanumber @error('') is-invalid @enderror"
                                            value="{{ $fee_type->hour_fee }}" name="fee_hour_fee[]" id="ef_CofaciHf" data-type="currency">
                                    </td>
                                    <td>
                                        <input type="text"
                                            class="input js-mytooltip form-control input-table commanumber @error('') is-invalid @enderror"
                                            value="{{ $fee_type->hour_num }}" name="fee_hour_num[]" id="ef_CofaciNoh1" data-type="currency"
                                            data-mytooltip-content="<i>Number of Hours</i>" data-mytooltip-theme="dark"
                                            data-mytooltip-action="focus" data-mytooltip-direction="bottom">
                                    </td>
                                    <td>
                                        <input type="text" class="form-control input-table commanumber @error('') is-invalid @enderror"
                                            value="{{ $fee_type->nswh }}" name="fee_nswh[]" id="ef_CofaciNwh1" data-type="currency">
                                        <input type="text" class="nswh-percent-value" name="nswh_percent[]" hidden>
                                    </td>
                                    <td class="table-light total-td">
                                        <h4 class="text-center lead" id="subtotal-coFacilitator">-</h4>
                                    </td>
                                    <td class="table-light total-td">
                                        <textarea class="form-control input-table @error('') is-invalid @enderror"
                                            name="fee_notes[]" id="" rows="2" cols="55">{{ $fee_type->notes }}</textarea>
                                    </td>
                                    <td style="background-color: #FFFFFF;" class="border border-white">
                                        {{-- <a href="javascript:void(0)" class="text-success font-18" title="Add" id="addBtn5" onclick="$('#CeAddBtn5').trigger('click')">
                                            <i class="fa fa-plus"></i>
                                        </a> --}}
                                    </td>
                                </tr>
                            @endif
                        @endforeach
                    </tbody>

                    <tbody id="tableModerator">
                        <tr class="table-warning">
                            @foreach ($data2 as $key=>$fee_type)
                                @if ($fee_type->type === 'Moderator')
                                    <td class="title table-light">
                                        <input type="text" class="d-none" value="{{ $fee_type->type }}" name="fee_type[]" readonly>
                                        {{ $fee_type->type }}
                                    </td>
                                    <td>
                                        <input type="text" class="form-control input-table commanumber @error('') is-invalid @enderror"
                                            value="{{ $fee_type->consultant_num }}" name="fee_consultant_num[]" id="ef_ModeratorNoc1" data-type="currency">
                                    </td>
                                    <td>
                                        <input type="text" class="form-control input-table commanumber @error('') is-invalid @enderror"
                                            value="{{ $fee_type->hour_fee }}" name="fee_hour_fee[]" id="ef_ModeratorHf"
                                            data-type="currency">
                                    </td>
                                    <td>
                                        <input type="text"
                                            class="input js-mytooltip form-control input-table commanumber @error('') is-invalid @enderror"
                                            value="{{ $fee_type->hour_num }}" name="fee_hour_num[]" id="ef_ModeratorNoh1" data-type="currency"
                                            data-mytooltip-content="<i>Number of Hours</i>" data-mytooltip-theme="dark"
                                            data-mytooltip-action="focus" data-mytooltip-direction="bottom">
                                    </td>
                                    <td>
                                        <input type="text" class="form-control input-table commanumber @error('') is-invalid @enderror"
                                            value="{{ $fee_type->nswh }}" name="fee_nswh[]" id="ef_ModeratorNwh1" data-type="currency">
                                        <input type="text" class="nswh-percent-value" name="nswh_percent[]" hidden>
                                    </td>
                                    <td class="table-light total-td">
                                        <h4 class="text-center lead" id="subtotal-moderator">-</h4>
                                    </td>
                                    <td class="table-light total-td">
                                        <textarea class="form-control input-table @error('') is-invalid @enderror"
                                            name="fee_notes[]" id="" rows="2" cols="55">{{ $fee_type->notes }}</textarea>
                                    </td>
                                    <td style="background-color: #FFFFFF;" class="border border-white">
                                        {{-- <a href="javascript:void(0)" class="text-success font-18" title="Add" id="addBtn6" onclick="$('#CeAddBtn6').trigger('click')">
                                            <i class="fa fa-plus"></i>
                                        </a> --}}
                                    </td>
                                </tr>
                            @endif
                        @endforeach
                    </tbody>

                    <tbody id="tableProducer">
                        @foreach ($data2 as $key=>$fee_type)
                            @if ($fee_type->type === 'Producer')
                                <tr class="table-warning">
                                    <td class="title table-light">
                                        <input type="text" class="d-none" value="{{ $fee_type->type }}" name="fee_type[]" readonly>
                                        {{ $fee_type->type }}
                                    </td>
                                    <td>
                                        <input type="text" class="form-control input-table commanumber @error('') is-invalid @enderror"
                                            value="{{ $fee_type->consultant_num }}" name="fee_consultant_num[]" id="ef_ProducerNoc1" data-type="currency">
                                    </td>
                                    <td>
                                        <input type="text" class="form-control input-table commanumber @error('') is-invalid @enderror"
                                            value="{{ $fee_type->hour_fee }}" name="fee_hour_fee[]" id="ef_ProducerHf" data-type="currency">
                                    </td>
                                    <td>
                                        <input type="text"
                                            class="input js-mytooltip form-control input-table commanumber @error('') is-invalid @enderror"
                                            value="{{ $fee_type->hour_num }}" name="fee_hour_num[]" id="ef_ProducerNoh1" data-type="currency"
                                            data-mytooltip-content="<i>Number of Hours</i>" data-mytooltip-theme="dark"
                                            data-mytooltip-action="focus" data-mytooltip-direction="bottom">
                                    </td>
                                    <td>
                                        <input type="text" class="form-control input-table commanumber @error('') is-invalid @enderror"
                                            value="{{ $fee_type->nswh }}" name="fee_nswh[]" id="ef_ProducerNwh1" data-type="currency">
                                        <input type="text" class="nswh-percent-value" name="nswh_percent[]" hidden>
                                    </td>
                                    <td class="table-light total-td">
                                        <h4 class="text-center lead" id="subtotal-producer">-</h4>
                                    </td>
                                    <td class="table-light total-td">
                                        <textarea class="form-control input-table @error('') is-invalid @enderror"
                                            name="fee_notes[]" id="" rows="2" cols="55">{{ $fee_type->notes }}</textarea>
                                    </td>
                                    <td style="background-color: #FFFFFF;" class="border border-white">
                                        {{-- <a href="javascript:void(0)" class="text-success font-18" title="Add" id="addBtn7" onclick="$('#CeAddBtn7').trigger('click')">
                                            <i class="fa fa-plus"></i>
                                        </a> --}}
                                    </td>
                                </tr>
                            @endif
                        @endforeach
                    </tbody>

                    <tr class="">
                        <td class="title fw-bold text-dark fst-italic table-light">Subtotal</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td class="table-light total-td" style="background-color: rgba(146, 146, 146, 0.727)">
                            <h4 class="text-center" id="program-subtotal">-</h4>
                        </td>
                        <td class="table-light total-td"></td>
                        <td class="border border-white add-row"></td>
                    </tr>
                <!------------------- END ----------------------->

                <!-------------------OTHER ROLES------------------------->
                    <tr class="">
                        <th class="title px-4 text-dark table-light">
                            <b>4. OTHER ROLES</b>
                        </th>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td class="table-light total-td"></td>
                        <td class="table-light total-td"></td>
                    </tr>

                    <tbody id="tableDocumentor">
                        @foreach ($data2 as $key=>$fee_type)
                            @if ($fee_type->type === 'Documentor')
                                <tr class="table-warning">
                                    <td class="table-light title">
                                        <input type="text" class="d-none" value="{{ $fee_type->type }}" name="fee_type[]" readonly>
                                        {{ $fee_type->type }}
                                    </td>
                                    <td>
                                        <input type="text" class="form-control input-table commanumber @error('') is-invalid @enderror"
                                            value="{{ $fee_type->consultant_num }}" name="fee_consultant_num[]" id="ef_DocumentorNoc1" data-type="currency">
                                    </td>
                                    <td>
                                        <input type="text" class="form-control input-table commanumber @error('') is-invalid @enderror"
                                            value="{{ $fee_type->hour_fee }}" name="fee_hour_fee[]" id="ef_DocumentorHf"
                                            data-type="currency">
                                    </td>
                                    <td>
                                        <input type="text"
                                            class="input js-mytooltip form-control input-table commanumber @error('') is-invalid @enderror"
                                            value="{{ $fee_type->hour_num }}" name="fee_hour_num[]" id="ef_DocumentorNoh1" data-type="currency"
                                            data-mytooltip-content="<i>Number of Hours</i>" data-mytooltip-theme="dark"
                                            data-mytooltip-action="focus" data-mytooltip-direction="bottom">
                                    </td>
                                    <td>
                                        <input type="text" class="form-control input-table commanumber @error('') is-invalid @enderror"
                                            value="{{ $fee_type->nswh }}" name="fee_nswh[]" id="ef_DocumentorNwh1" data-type="currency">
                                        <input type="text" class="nswh-percent-value" name="nswh_percent[]" hidden>
                                    </td>
                                    <td class="table-light total-td" style="background-color: rgba(146, 146, 146, 0.727">
                                        <h4 class="text-center" id="subtotal-documentor">-</h4>
                                    </td>
                                    <td class="table-light total-td">
                                        <textarea class="form-control input-table @error('') is-invalid @enderror"
                                            name="fee_notes[]" id="" rows="2" cols="55">{{ $fee_type->notes }}</textarea>
                                    </td>
                                    <td style="background-color: #FFFFFF;" class="border border-white">
                                        {{-- <a href="javascript:void(0)" class="text-success font-18" title="Add" id="addBtn8" onclick="$('#CeAddBtn8').trigger('click')">
                                            <i class="fa fa-plus"></i>
                                        </a> --}}
                                    </td>
                                </tr>
                            @endif
                        @endforeach
                    </tbody>
                <!------------------- END ----------------------->

                <!-------------------TOTAL PACKAGE------------------------->
                    <tr class="table-active overall-total">
                        <td class="table-light text-uppercase text-dark fst-italic fw-bold overall-total-start">
                            <b>TOTAL STANDARD FEES</b>
                        </td>
                        <td class="overall-total-middle"></td>
                        <td class="overall-total-middle"></td>
                        <td class="overall-total-middle"></td>
                        <td class="overall-total-middle"></td>
                        <td class="overall-total-end" style="background-color: rgba(146, 146, 146, 0.727)">
                            <h4 class="text-center fw-bold text-danger" id="total-standard">-</h4>
                        </td>
                        <td class="overall-total-end"></td>
                    </tr>

                    @foreach ($data2 as $key=>$fee_type )
                        @if ($fee_type->type === 'Discounts')
                            <tr class="table-active">
                                <td class="table-light fw-bold text-dark text-uppercase fst-italic overall-total-start">
                                    <input type="text" class="d-none" value="{{ $fee_type->type }}" name="fee_type[]" readonly>
                                    <b>Discount given (if any)</b>
                                </td>
                                <td class="overall-total-middle">
                                    <input type="text" class="d-none" value=" " name="fee_consultant_num[]" readonly>
                                </td>
                                <td class="overall-total-middle table-warning">
                                    <input type="text"
                                        class="hf-c32 form-control input-table text-center @error('') is-invalid @enderror"
                                        value="{{ $fee_type->hour_fee }}" name="fee_hour_fee[]" id="input-discount" readonly>
                                </td>
                                <td class="overall-total-middle">
                                    <input type="text" class="d-none" value=" " name="fee_hour_num[]" readonly>
                                </td>
                                <td class="overall-total-middle">
                                    <input type="text" class="d-none" value=" " name="fee_nswh[]" readonly>
                                <input type="text" class="" value=" " name="nswh_percent[]" hidden>
                                </td>
                                <td class="overall-total-end"></td>
                                <td class="overall-total-end">
                                    <textarea class="form-control input-table @error('') is-invalid @enderror"
                                        name="fee_notes[]" id="" rows="2" cols="55"></textarea>
                                </td>
                            </tr>
                        @endif
                    @endforeach

                    <tr class="table-active">
                        <td class="table-light fw-bold text-uppercase text-dark fst-italic overall-total-start">
                            <b>Total Package</b>
                        </td>
                        <td class="overall-total-middle"></td>
                        <td class="overall-total-middle"></td>
                        <td class="overall-total-middle"></td>
                        <td class="overall-total-middle"></td>
                        <td class="overall-total-end table-warning">
                            <input type="text"
                                class="tf-f34 form-control text-center text-danger fw-bolder input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="engagement_fees_total" id="ef_Totalpackage" data-type="currencyTotal" style="font-size: 22px;">
                        </td>
                        <td class="overall-total-end"></td>
                    </tr>
                    </tbody>
                <!------------------- END ----------------------->

                </table>
            </div>
        </section>
    </div>
<!---------- END OF FORM BODY ---------->

<!---------- JS SCRIPT ---------->
@include('form.components.customized_engagement.add.script.ce_engagement_fees')
<script>
    //DYNAMIC BATCH
    $(document).ready(function() {
        //DROPDOWN WITH SEARCH INPUT FUNCTION
        $('.select2-hidden-accessible').select2({
            theme: 'bootstrap',
            width: 'resolve',
        });
    });

    //DYNAMIC PROGRAM DATES
    $(document).ready(function() {
        //DATE OF ENGAGEMENT
        var dates = 1;
        $("#addDates").on("click", function() {
            // Adding a row inside the tbody.
            $("#dcbe").append(`
            <fieldset class="d-flex justify-content-center mt-4" id="dateRows${++dates}">
                <div class="flex-column">
                    <div>
                        <div class="row justify-content-center">
                            <div class="col-lg-1 col-md-1">
                                <div class="px-0">
                                    <label class="fw-bold invisible overflow-hidden mb-4">Add</label>
                                    <a href="javascript:void(0)" class="text-danger font-18 remove px-0" title="Remove">
                                        <i class="fa fa-trash-o"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-2">
                                <div class="form-group has-icon-left">
                                    <label class="fw-bold required">Date</label>
                                    <div class="position-relative">
                                        <input type="text" class="form-control date datepicker @error('doe') is-invalid @enderror"
                                            value="{{ old('doe') }}" placeholder="Enter Date" name="program_dates[]" id="datepicker${dates}"
                                            size="30">
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
                            <div class="col-lg-2 col-md-2">
                                <div class="form-group has-icon-left">
                                    <label class="fw-bold required">Start Time</label>
                                    <div class="position-relative">
                                        <input type="text" class="form-control start-time timepicker @error('dot') is-invalid @enderror"
                                            value="{{ old('dot') }}" placeholder="Enter Time" id="program_start_time" name="program_start_time[]">
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
                            <div class="col-lg-2 col-md-2">
                                <div class="form-group has-icon-left">
                                    <label class="fw-bold required">End Time</label>
                                    <div class="position-relative">
                                        <input type="text" class="form-control end-time timepicker @error('dot') is-invalid @enderror"
                                            value="{{ old('dot') }}" placeholder="Enter Time" id="program_end_time" name="program_end_time[]">
                                        <div class="form-control-icon">
                                            <i class="fa-solid fa-hourglass-end"></i>
                                        </div>
                                        @error('dot')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            @include('form.components.reference.append_cluster')
                        </div>
                    </div>

                </div>


            </fieldset>`);
            $('.timepicker').timepicker({
                timeFormat: 'h:mm p',
                interval: 30,
                minTime: '06',
                maxTime: '10:00pm',
                // defaultTime: '06',
                startTime: '06:00',
                dynamic: false,
                dropdown: true,
                scrollbar: true
            });
        });

        $("#dcbe").on("click", ".remove", function () {
            // Getting all the rows next to the row
            // containing the clicked button
            var child = $(this).closest('.d-flex').nextAll();

            // Iterating across all the rows
            // obtained to change the index
            child.each(function () {
                // Getting <tr> id.
                var id = $(this).attr("id");

                // Getting the <input> inside the .noc, .noh, .nwh class.
                // var noc = $(this).children(".noc").children("input");
                // var noh = $(this).children(".noh").children("input");
                // var nwh = $(this).children(".nwh").children("input");

                // Gets the row number from <tr> id.
                var dig = parseInt(id.substring(8));

                // Modifying row id.
                $(this).attr("id", `dateRows${dig - 1}`);

                // Modifying row index.
                // noc.attr("id", `ec_LeadfacilitatorNoc${dig - 1}`);
                // noh.attr("id", `ec_LeadfacilitatorNoh${dig - 1}`);
                // nwh.attr("id", `ec_LeadfacilitatorNwh${dig - 1}`);
            });

            // Removing the current row.
            $(this).closest('.d-flex').remove();

            // Decreasing total number of rows by 1.
            dates--;
        });

        $('.timepicker').timepicker({
            timeFormat: 'h:mm p',
            interval: 30,
            minTime: '06',
            maxTime: '10:00pm',
            // defaultTime: '06',
            startTime: '06:00',
            dynamic: false,
            dropdown: true,
            scrollbar: true
        });
    });
</script>
