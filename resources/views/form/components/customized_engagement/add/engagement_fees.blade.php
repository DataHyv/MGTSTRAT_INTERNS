<!------------ CARD HEADER ------------>
    <div class="card-header">
        <h4 class="card-title">Engagement Fees</h4>
    </div>

<!------------ FORM BODY ------------>
    <div class="form-body container">
        <section>
            <!------------ DATE COVERED BY ENGAGEMENT ------------>
                <div class="row justify-content-center mb-5" id="dcbe">
                    <h5 class="text-center fst-italic">Date Covered by Engagement</h5>
                    <div class="d-flex justify-content-center" id="dateRows1">

                        <div class="flex-column mt-3">
                            <div>
                                <fieldset class="row justify-content-center" id="dateRows">
                                    {{-- <div class="col-lg-2 col-md-2">
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
                                    </div> --}}

                                    <div class="col-lg-2 col-md-2">
                                        <div class="form-group has-icon-left">
                                            <label class="fw-bold required">Start Time</label>
                                            <div class="position-relative">
                                                <input type="text" class="form-control start-time timepicker @error('program_start_time') is-invalid @enderror"
                                                    value="{{ old('program_start_time') }}" placeholder="Enter Time" id="program_start_time" name="program_start_time">
                                                <div class="form-control-icon">
                                                    <i class="bi bi-clock"></i>
                                                </div>
                                                @error('program_start_time')
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
                                                <input type="text" class="form-control end-time timepicker @error('program_end_time') is-invalid @enderror"
                                                    value="{{ old('program_end_time') }}" placeholder="Enter Time" id="program_end_time" name="program_end_time">
                                                <div class="form-control-icon">
                                                    <i class="fa-solid fa-hourglass-end"></i>
                                                </div>
                                                @error('program_end_time')
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
                <table class="table table-bordered" id="ec_tableEngagementFees">

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
                                    <input type="hidden" value="Night Shift, Weekends and Holidays" name="fee_type[]">
                                    <input type="hidden" value="" name="fee_consultant_num[]">
                                    <input type="hidden" value="" name="fee_hour_fee[]">
                                    <input type="hidden" value="" name="fee_hour_num[]">
                                    <input type="hidden" value="" name="fee_nswh[]">
                                    <input type="hidden" value="" name="fee_notes[]">
                                    <select class="input js-mytooltip form-select form-select-sm engagement-fee nswh-percent @error('') is-invalid @enderror select" name="nswh_percent[]" id="nswh">
                                        <option value="0.1" {{ old('') == '0.1' ? 'selected="selected"' : '' }}>
                                            10%
                                        </option>
                                        <option value="0.15" {{ old('') == '0.15' ? 'selected="selected"' : '' }}>
                                            15%
                                        </option>
                                        <option value="0.2" {{ old('') == '0.2' ? 'selected="selected"' : '' }} selected>
                                            20%
                                        </option>
                                        <option value="0.25" {{ old('') == '0.25' ? 'selected="selected"' : '' }}>
                                            25%
                                        </option>
                                    </select>
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
                        <tr class="table-warning">
                            <td class="title table-light">
                                <input type="text" class="d-none" value="Lead Consultant" name="fee_type[]" readonly>
                                Lead Consultant
                            </td>
                            <td data-title="# OF CONSULTANTS">
                                <input type="text"
                                    class="input js-mytooltip input-table form-control commanumber @error('fee_consultant_num.1') is-invalid @enderror"
                                    value="{{ old('fee_consultant_num.1') }}" name="fee_consultant_num[]" id="ef_LeadconsultantNoc1"
                                    title="" data-type="currency"
                                    data-mytooltip-content="<i>Includes in depth needs analysis (i.e. surveys, interviews, FGDs),
                                    special research (i.e. to study client materials or client -required materials, industry
                                    or function specific content), creation of client-specific learning aids/tools
                                    (i.e. assessments, c</i>"
                                    data-mytooltip-theme="dark" data-mytooltip-action="focus"
                                    data-mytooltip-direction="bottom">
                            </td>
                            <td>
                                <fieldset>
                                    <select class="form-select input js-mytooltip @error('fee_hour_fee.1') is-invalid @enderror" name="fee_hour_fee[]" id="ef_LeadconsultantHf" data-mytooltip-content="<i> 7,000 - Consultants<br> 9,000 - Senior Consultants </i>" data-mytooltip-theme="dark" data-mytooltip-action="focus" data-mytooltip-direction="right" style="background-color:#ffcccc; color:red;">
                                        <option value="7000" {{ old('fee_hour_fee.1') == '7000' ? 'selected="selected"' : '' }}>
                                            7,000
                                        </option>
                                        <option value="9000" {{ old('fee_hour_fee.1') == '9000' ? 'selected="selected"' : '' }}>
                                            9,000
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
                                <input type="text" class="form-control input-table input js-mytooltip commanumber @error('fee_hour_num.1') is-invalid @enderror" value="{{ old('fee_hour_num.1') }}" name="fee_hour_num[]" id="ef_LeadconsultantNoh1" data-type="currency" data-mytooltip-content="<i>Number of Hours</i>" data-mytooltip-theme="dark" data-mytooltip-action="focus" data-mytooltip-direction="bottom">
                            </td>
                            <td>
                                <input type="text" class="form-control input-table commanumber @error('fee_nswh.1') is-invalid @enderror" value="{{ old('fee_nswh.1') }}" name="fee_nswh[]" id="ef_LeadconsultantNwh1" data-type="currency">
                                <input type="text" class="nswh-percent-value" name="nswh_percent[]" hidden>
                            </td>
                            <td class="total-td table-light">
                                <h4 class="text-center lead" id="leadTotal">-</h4>
                            </td>
                            <td class="total-td table-light">
                                <textarea class="form-control input-table @error('fee_notes.1') is-invalid @enderror" name="fee_notes[]" id="" rows="2" cols="55">{{ old('fee_notes.1') }}</textarea>
                            </td>
                            {{-- <td style="background-color: #FFFFFF;" class="border border-white">
                                <a href="javascript:void(0)" class="text-success font-18" title="Add" id="addBtn" onclick="$('#CeAddBtn').trigger('click')">
                                    <i class="fa fa-plus"></i>
                                </a>
                            </td> --}}
                        </tr>
                    </tbody>

                    <tbody id="tableAnalyst">
                        <tr class="table-warning">
                            <td class="title table-light">
                                <input type="text" class="d-none" value="Analyst" name="fee_type[]" readonly>
                                Analyst
                            </td>
                            <td>
                                <input type="text"
                                    class="input js-mytooltip form-control input-table commanumber @error('fee_consultant_num.2') is-invalid @enderror"
                                    value="{{ old('fee_consultant_num.2') }}" name="fee_consultant_num[]" id="ef_AnalystNoc1" data-type="currency"
                                    data-mytooltip-content="<i>Includes in depth needs analysis (i.e. surveys, interviews, FGDs),
                                    special research (i.e. to study client materials or client -required materials, industry
                                    or function specific content), creation of client-specific learning aids/tools
                                    (i.e. assessments, c</i>"
                                    data-mytooltip-theme="dark" data-mytooltip-action="focus"
                                    data-mytooltip-direction="bottom">
                            </td>
                            <td>
                                <input type="text" class="form-control input-table commanumber @error('fee_hour_fee.2') is-invalid @enderror"
                                    value="{{ old('fee_hour_fee.2') }}" name="fee_hour_fee[]" id="ef_AnalystHf" data-type="currency">
                            </td>
                            <td>
                                <input type="text"
                                    class="input js-mytooltip form-control input-table commanumber @error('fee_hour_num.2') is-invalid @enderror"
                                    value="{{ old('fee_hour_num.2') }}" name="fee_hour_num[]" id="ef_AnalystNoh1" data-type="currency"
                                    data-mytooltip-content="<i>Number of Hours</i>" data-mytooltip-theme="dark"
                                    data-mytooltip-action="focus" data-mytooltip-direction="bottom">
                            </td>
                            <td>
                                <input type="text" class="form-control input-table commanumber @error('fee_nswh.2') is-invalid @enderror"
                                    value="{{ old('fee_nswh.2') }}" name="fee_nswh[]" id="ef_AnalystNwh1" data-type="currency">
                                <input type="text" class="nswh-percent-value" value="{{ old('') }}" name="nswh_percent[]" hidden>
                            </td>
                            <td class="total-td table-light">
                                <h4 class="text-center lead" id="analyst-total">-</h4>
                            </td>
                            <td class="total-td table-light">
                                <textarea class="form-control input-table @error('fee_notes.2') is-invalid @enderror"
                                    name="fee_notes[]" id="" rows="2" cols="55">{{ old('fee_notes.2') }}</textarea>
                            </td>
                            {{-- <td style="background-color: #FFFFFF;" class="border border-white"><a
                                    href="javascript:void(0)" class="text-success font-18" title="Add"
                                    id="addBtn2" onclick="$('#CeAddBtn2').trigger('click')"><i class="fa fa-plus"></i></a>
                            </td> --}}
                        </tr>
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
                        <td class="border border-white add-row"></td>
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
                        <tr class="table-warning">
                            <td class="title table-light">
                                <input type="text" class="d-none" value="Designer" name="fee_type[]" readonly>
                                Designer
                            </td>
                            <td>
                                <input type="text"
                                    class="input js-mytooltip form-control input-table commanumber @error('fee_consultant_num.3') is-invalid @enderror"
                                    value="{{ old('fee_consultant_num.3') }}" name="fee_consultant_num[]" id="ef_DesignerNoc1" data-type="currency"
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
                                        data-mytooltip-content="<i>Consulting - 6,000 - Consultants<br>
                                            8,000 - Senior Consultants</i>"
                                        data-mytooltip-theme="dark" data-mytooltip-action="focus"
                                        data-mytooltip-direction="right" style="background-color:#ffcccc; color:red;">
                                        <option value="6000" {{ old('') == '6000' ? 'selected="selected"' : '' }}>
                                            6,000
                                        </option>
                                        <option value="8000" {{ old('') == '8000' ? 'selected="selected"' : '' }}>
                                            8,000
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
                                <input type="text" class="input js-mytooltip form-control input-table commanumber @error('fee_hour_num.3') is-invalid @enderror" value="{{ old('fee_hour_num.3') }}" name="fee_hour_num[]" id="ef_DesignerNoh1" data-type="currency" data-mytooltip-content="<i>Number of Hours</i>" data-mytooltip-theme="dark" data-mytooltip-action="focus" data-mytooltip-direction="bottom">
                            </td>
                            <td>
                                <input type="text" class="form-control input-table commanumber @error('fee_nswh.3') is-invalid @enderror" value="{{ old('fee_nswh.3') }}" name="fee_nswh[]" id="ef_DesignerNwh1" data-type="currency">
                                <input type="text" class="nswh-percent-value" name="nswh_percent[]" hidden>
                            </td>
                            <td class="table-light total-td" style="background-color: rgba(146, 146, 146, 0.727)">
                                <h4 class="text-center" id="subtotal-design">-</h4>
                            </td>
                            <td class="table-light total-td">
                                <textarea class="form-control input-table @error('fee_notes.3') is-invalid @enderror" name="fee_notes[]" id="" rows="2" cols="55">{{ old('fee_notes.3') }}</textarea>
                            </td>
                            {{-- <td style="background-color: #FFFFFF;" class="border border-white"><a
                                    href="javascript:void(0)" class="text-success font-18" title="Add"
                                    id="addBtn3" onclick="$('#CeAddBtn3').trigger('click')"><i class="fa fa-plus"></i></a>
                            </td> --}}
                        </tr>
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
                        <tr class="table-warning">
                            <td class="title table-light">
                                <input type="text" class="d-none" value="Lead Facilitator" name="fee_type[]" readonly>
                                Lead Facilitator</td>
                            <td>
                                <input type="text" class="form-control input-table commanumber @error('fee_consultant_num.4') is-invalid @enderror"
                                    value="{{ old('fee_consultant_num.4') }}" name="fee_consultant_num[]" id="ef_LeadfacilitatorNoc1" data-type="currency">
                            </td>
                            <td>
                                <div class="form-group has-icon-right mb-0" id="inputLeadfaci1" style="display:none">
                                    <div class="position-relative">
                                        <input type="text" class="form-control input-table commanumber @error('fee_hour_fee.4') is-invalid @enderror" value="{{ old('fee_hour_fee.4') }}"
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
                                        class="input js-mytooltip form-select engagement-fee @error('fee_hour_fee.4') is-invalid @enderror select"
                                        name="fee_hour_fee[]" id="ef_LeadfacilitatorHf1"
                                        data-mytooltip-content="<i>10,000 - For Key Accounts w/ 2021 contract <br>
                                            11,000 - For Key Accounts with minimum guaranteed 50 sessions w/in 6 months <br>
                                            12,000 - all else</i>"
                                        data-mytooltip-theme="dark" data-mytooltip-action="focus"
                                        data-mytooltip-direction="right" style="background-color:#ffcccc; color:red;">
                                        <option value="10000" {{ old('fee_hour_fee.4') == '10000' ? 'selected="selected"' : '' }}>
                                            10,000
                                        </option>
                                        <option value="11000" {{ old('fee_hour_fee.4') == '11000' ? 'selected="selected"' : '' }}>
                                            11,000
                                        </option>
                                        <option value="12000" {{ old('fee_hour_fee.4') == '12000' ? 'selected="selected"' : '' }}
                                            selected>
                                            12,000
                                        </option>
                                        <option value="others" {{ old('fee_hour_fee.4') == 'others' ? 'selected="selected"' : '' }}
                                        id="others1" onclick="document.getElementById('ef_InputLeadFaciHf1').focus()">
                                            Others
                                        </option>
                                    </select>

                                    @error('fee_hour_fee.4')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </fieldset>
                            </td>
                            <td>
                                <input type="text"
                                    class="input js-mytooltip form-control input-table commanumber @error('fee_hour_num.4') is-invalid @enderror"
                                    value="{{ old('fee_hour_num.4') }}" name="fee_hour_num[]" id="ef_LeadfacilitatorNoh1" data-type="currency"
                                    data-mytooltip-content="<i>Number of Hours</i>" data-mytooltip-theme="dark"
                                    data-mytooltip-action="focus" data-mytooltip-direction="bottom">
                            </td>
                            <td>
                                <input type="text" class="form-control input-table commanumber @error('fee_nswh.4') is-invalid @enderror"
                                    value="{{ old('fee_nswh.4') }}" name="fee_nswh[]" id="ef_LeadfacilitatorNwh1" data-type="currency">
                                <input type="text" class="nswh-percent-value" name="nswh_percent[]" hidden>
                            </td>
                            <td class="table-light total-td">
                                <h4 class="text-center lead" id="subtotal-lead">-</h4>
                            </td>
                            <td class="table-light total-td">
                                <textarea class="form-control input-table @error('') is-invalid @enderror"
                                    name="fee_notes[]" id="" rows="2" cols="55">{{ old('fee_notes.4') }}</textarea>
                            </td>
                            {{-- <td style="background-color: #FFFFFF;" class="border border-white"><a
                                    href="javascript:void(0)" class="text-success font-18" title="Add"
                                    id="addBtn4" onclick="$('#CeAddBtn4').trigger('click')"><i class="fa fa-plus"></i></a>
                            </td> --}}
                        </tr>
                    </tbody>

                    <tbody id="tableCofaci">
                        <tr class="table-warning">
                            <td class="title table-light">
                                <input type="text" class="d-none" value="Co-facilitator / Resource Speaker" name="fee_type[]" readonly>
                                Co-facilitator / Resource Speaker
                            </td>
                            <td>
                                <input type="text" class="form-control input-table commanumber @error('fee_consultant_num.5') is-invalid @enderror"
                                    value="{{ old('fee_consultant_num.5') }}" name="fee_consultant_num[]" id="ef_CofaciNoc1" data-type="currency">
                            </td>
                            <td>
                                <input type="text" class="form-control input-table commanumber @error('fee_hour_fee.5') is-invalid @enderror"
                                    value="{{ old('fee_hour_fee.5') }}" name="fee_hour_fee[]" id="ef_CofaciHf" data-type="currency">
                            </td>
                            <td>
                                <input type="text"
                                    class="input js-mytooltip form-control input-table commanumber @error('fee_hour_num.5') is-invalid @enderror"
                                    value="{{ old('fee_hour_num.5') }}" name="fee_hour_num[]" id="ef_CofaciNoh1" data-type="currency"
                                    data-mytooltip-content="<i>Number of Hours</i>" data-mytooltip-theme="dark"
                                    data-mytooltip-action="focus" data-mytooltip-direction="bottom">
                            </td>
                            <td>
                                <input type="text" class="form-control input-table commanumber @error('fee_nswh.5') is-invalid @enderror"
                                    value="{{ old('fee_nswh.5') }}" name="fee_nswh[]" id="ef_CofaciNwh1" data-type="currency">
                                <input type="text" class="nswh-percent-value" name="nswh_percent[]" hidden>
                            </td>
                            <td class="table-light total-td">
                                <h4 class="text-center lead" id="subtotal-coFacilitator">-</h4>
                            </td>
                            <td class="table-light total-td">
                                <textarea class="form-control input-table @error('fee_notes.5') is-invalid @enderror"
                                    name="fee_notes[]" id="" rows="2" cols="55">{{ old('fee_notes.5') }}</textarea>
                            </td>
                            {{-- <td style="background-color: #FFFFFF;" class="border border-white"><a
                                    href="javascript:void(0)" class="text-success font-18" title="Add"
                                    id="addBtn5" onclick="$('#CeAddBtn5').trigger('click')"><i class="fa fa-plus"></i></a>
                            </td> --}}
                        </tr>
                    </tbody>

                    <tbody id="tableModerator">
                        <tr class="table-warning">
                            <td class="title table-light">
                                <input type="text" class="d-none" value="Moderator" name="fee_type[]" readonly>
                                Moderator
                            </td>
                            <td>
                                <input type="text" class="form-control input-table commanumber @error('fee_consultant_num.6') is-invalid @enderror"
                                    value="{{ old('fee_consultant_num.6') }}" name="fee_consultant_num[]" id="ef_ModeratorNoc1" data-type="currency">
                            </td>
                            <td>
                                <input type="text" class="form-control input-table commanumber @error('fee_hour_fee.6') is-invalid @enderror"
                                    value="{{ old('fee_hour_fee.6') }}" name="fee_hour_fee[]" id="ef_ModeratorHf"
                                    data-type="currency">
                            </td>
                            <td>
                                <input type="text"
                                    class="input js-mytooltip form-control input-table commanumber @error('fee_hour_num.6') is-invalid @enderror"
                                    value="{{ old('fee_hour_num.6') }}" name="fee_hour_num[]" id="ef_ModeratorNoh1" data-type="currency"
                                    data-mytooltip-content="<i>Number of Hours</i>" data-mytooltip-theme="dark"
                                    data-mytooltip-action="focus" data-mytooltip-direction="bottom">
                            </td>
                            <td>
                                <input type="text" class="form-control input-table commanumber @error('fee_nswh.6') is-invalid @enderror"
                                    value="{{ old('fee_nswh.6') }}" name="fee_nswh[]" id="ef_ModeratorNwh1" data-type="currency">
                                <input type="text" class="nswh-percent-value" name="nswh_percent[]" hidden>
                            </td>
                            <td class="table-light total-td">
                                <h4 class="text-center lead" id="subtotal-moderator">-</h4>
                            </td>
                            <td class="table-light total-td">
                                <textarea class="form-control input-table @error('fee_notes.6') is-invalid @enderror"
                                    name="fee_notes[]" id="" rows="2" cols="55">{{ old('fee_notes.6') }}</textarea>
                            </td>
                            {{-- <td style="background-color: #FFFFFF;" class="border border-white"><a
                                    href="javascript:void(0)" class="text-success font-18" title="Add"
                                    id="addBtn6" onclick="$('#CeAddBtn6').trigger('click')"><i class="fa fa-plus"></i></a>
                            </td> --}}
                        </tr>
                    </tbody>

                    <tbody id="tableProducer">
                        <tr class="table-warning">
                            <td class="title table-light">
                                <input type="text" class="d-none" value="Producer" name="fee_type[]" readonly>
                                Producer
                            </td>
                            <td>
                                <input type="text" class="form-control input-table commanumber @error('fee_consultant_num.7') is-invalid @enderror"
                                    value="{{ old('fee_consultant_num.7') }}" name="fee_consultant_num[]" id="ef_ProducerNoc1" data-type="currency">
                            </td>
                            <td>
                                <input type="text" class="form-control input-table commanumber @error('fee_hour_fee.7') is-invalid @enderror"
                                    value="{{ old('fee_hour_fee.7') }}" name="fee_hour_fee[]" id="ef_ProducerHf" data-type="currency">
                            </td>
                            <td>
                                <input type="text"
                                    class="input js-mytooltip form-control input-table commanumber @error('fee_hour_num.7') is-invalid @enderror"
                                    value="{{ old('fee_hour_num.7') }}" name="fee_hour_num[]" id="ef_ProducerNoh1" data-type="currency"
                                    data-mytooltip-content="<i>Number of Hours</i>" data-mytooltip-theme="dark"
                                    data-mytooltip-action="focus" data-mytooltip-direction="bottom">
                            </td>
                            <td>
                                <input type="text" class="form-control input-table commanumber @error('fee_nswh.7') is-invalid @enderror"
                                    value="{{ old('fee_nswh.7') }}" name="fee_nswh[]" id="ef_ProducerNwh1" data-type="currency">
                                <input type="text" class="nswh-percent-value" name="nswh_percent[]" hidden>
                            </td>
                            <td class="table-light total-td">
                                <h4 class="text-center lead" id="subtotal-producer">-</h4>
                            </td>
                            <td class="table-light total-td">
                                <textarea class="form-control input-table @error('fee_notes.7') is-invalid @enderror"
                                    name="fee_notes[]" id="" rows="2" cols="55">{{ old('fee_notes.7') }}</textarea>
                            </td>
                            {{-- <td style="background-color: #FFFFFF;" class="border border-white"><a
                                    href="javascript:void(0)" class="text-success font-18" title="Add"
                                    id="addBtn7" onclick="$('#CeAddBtn7').trigger('click')"><i class="fa fa-plus"></i></a>
                            </td> --}}
                        </tr>
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
                        <tr class="table-warning">
                            <td class="table-light title">
                                <input type="text" class="d-none" value="Documentor" name="fee_type[]" readonly>
                                Documentor
                            </td>
                            <td>
                                <input type="text" class="form-control input-table commanumber @error('fee_consultant_num.8') is-invalid @enderror"
                                    value="{{ old('fee_consultant_num.8') }}" name="fee_consultant_num[]" id="ef_DocumentorNoc1" data-type="currency">
                            </td>
                            <td>
                                <input type="text" class="form-control input-table commanumber @error('fee_hour_fee.8') is-invalid @enderror"
                                    value="{{ old('fee_hour_fee.8') }}" name="fee_hour_fee[]" id="ef_DocumentorHf"
                                    data-type="currency">
                            </td>
                            <td>
                                <input type="text"
                                    class="input js-mytooltip form-control input-table commanumber @error('fee_hour_num.8') is-invalid @enderror"
                                    value="{{ old('fee_hour_num.8') }}" name="fee_hour_num[]" id="ef_DocumentorNoh1" data-type="currency"
                                    data-mytooltip-content="<i>Number of Hours</i>" data-mytooltip-theme="dark"
                                    data-mytooltip-action="focus" data-mytooltip-direction="bottom">
                            </td>
                            <td>
                                <input type="text" class="form-control input-table commanumber @error('fee_nswh.8') is-invalid @enderror"
                                    value="{{ old('fee_nswh.8') }}" name="fee_nswh[]" id="ef_DocumentorNwh1" data-type="currency">
                                <input type="text" class="nswh-percent-value" name="nswh_percent[]" hidden>
                            </td>
                            <td class="table-light total-td" style="background-color: rgba(146, 146, 146, 0.727">
                                <h4 class="text-center" id="subtotal-documentor">-</h4>
                            </td>
                            <td class="table-light total-td">
                                <textarea class="form-control input-table @error('fee_notes.8') is-invalid @enderror"
                                    name="fee_notes[]" id="" rows="2" cols="55">{{ old('fee_notes.8') }}</textarea>
                            </td>
                            {{-- <td style="background-color: #FFFFFF;" class="border border-white"><a
                                    href="javascript:void(0)" class="text-success font-18" title="Add"
                                    id="addBtn8" onclick="$('#CeAddBtn8').trigger('click')"><i class="fa fa-plus"></i></a>
                            </td> --}}
                        </tr>
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

                    <tr class="table-active">
                        <td class="table-light fw-bold text-dark text-uppercase fst-italic overall-total-start">
                            <input type="text" class="d-none" value="Discounts" name="fee_type[]" readonly>
                            <b>Discount given (if any)</b>
                        </td>
                        <td class="overall-total-middle">
                            <input type="text" class="d-none" value=" " name="fee_consultant_num[]" readonly>
                        </td>
                        <td class="overall-total-middle table-warning">
                            <input type="text"
                                class="hf-c32 form-control input-table text-center @error('fee_hour_fee.9') is-invalid @enderror"
                                value="{{ old('fee_hour_fee.9') }}" name="fee_hour_fee[]" id="input-discount">
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
                            <textarea class="form-control input-table @error('fee_notes.9') is-invalid @enderror"
                                name="fee_notes[]" id="" rows="2" cols="55">{{ old('fee_notes.9') }}</textarea>
                        </td>
                    </tr>

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
                                class="tf-f34 form-control text-center text-danger fw-bolder input-table @error('engagement_fees_total') is-invalid @enderror"
                                value="{{ old('engagement_fees_total') }}" name="engagement_fees_total" id="ef_Totalpackage" data-type="currencyTotal" style="font-size: 22px;">
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
