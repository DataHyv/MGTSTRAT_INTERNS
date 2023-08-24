<div class="card-header">
    <h4 class="card-title" style="display: inline;">Engagement Fees</h4>
    <div style="float:right">
        <button class="btn btn-secondary mx-0 js-btn-prev" type="button" title="Prev">Prev</button>
        <button class="btn btn-primary mx-0 js-btn-next" type="button" title="Next">Next</button>
        @if($parentInfoList)                                                    
            <button class="btn btn-success mx-0 js-btn-next" type="button" title="Submit" onclick="validate_required_field();">Save</button>   
        @else
            <button class="btn btn-success mx-0 js-btn-next" type="button" title="Submit" onclick="validate_required_field()">Submit</button>
        @endif
    </div>
</div>

<div class="form-body">
    <section>            
        <div class="table-responsive-md" id="no-more-tables">
            <table class="table table-bordered" id="f2f-ef-table">
                <!------------------------------------------------TABLE HEADING------------------------------------------------------------------>
                <thead class="table">
                    <tr class="text-center th-blue-grey">
                        <th class="title-th" scope="col" width=20%></th>
                        <th class="title-middle" scope="col" style="font-size: 0.9rem;">NUMBER OF CONSULTANTS</th>
                        <th class="title-middle px-4" width=15% scope="col">PER DAY FEES</th>
                        <th class="title-middle" scope="col" style="font-size: 0.9rem;">NUMBER OF DAYS</th>
                        <th class="title-middle" scope="col" style="font-size: 0.9rem;">ADDITIONAL TRAVEL DAYS *</th>
                        <th class="title-middle" scope="col" style="font-size: 0.9rem;" width=10%>
                            NSWH
                            <input type="hidden" value="Night Shift, Weekends and Holidays" name="fee_type[]">
                            <input type="hidden" value="" name="fee_consultant_num[]">
                            <input type="hidden" value="" name="fee_day[]">
                            <input type="hidden" value="" name="fee_day_num[]">
                            <input type="hidden" value="" name="fee_atd[]">
                            <input type="hidden" value="" name="fee_nswh[]">
                            <input type="hidden" value="" name="fee_note[]">
                            <select class="js-mytooltip form-select engagement-fee nswh-percent @error('') is-invalid @enderror select bg-white" 
                            name="nswh_percent[]" id="nswh">
                                <option value="0.0" {{ old('') == '0.0' ? 'selected="selected"' : '' }} selected>
                                    0%
                                </option>
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
                    </tr>
                </thead>

                <!------------------------------------------------CONSULTING------------------------------------------------------------------>
                <tr class="th-blue-grey-lighten">
                    <th class="px-4 title  ">1. CONSULTING</th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th class="total-td"></th>
                    <th class="total-td"></th>
                </tr>

                <!------------------------------------------------LEAD CONSULTANT------------------------------------------------------------->
                <tbody id="tableLeadconsultant">
                    <tr class="th-blue-grey-lighten-2" id="leadConsultant1">
                        <td class="title">                            
                            Lead Consultant (P56K, P72K)
                            <input type="text" class="d-none" value="Lead Consultant" name="fee_type[]" readonly>
                        </td>
                        <td data-title="# OF CONSULTANTS" class="table-warning">
                            <input type="text"
                                class="number_input input js-mytooltip input-table form-control  @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="fee_consultant_num[]" id="ef_LeadconsultantNoc1"
                                min="0"
                                max="100"
                                data-mytooltip-content="<i>Includes in depth needs analysis (i.e. surveys, interviews, FGDs),
                                special research (i.e. to study client materials or client -required materials, industry
                                or function specific content), creation of client-specific learning aids/tools
                                (i.e. assessments, c</i>"
                                data-mytooltip-theme="dark" data-mytooltip-action="focus"
                                data-mytooltip-direction="bottom">
                        </td>
                        <td class="table-danger">
                            <fieldset>
                                <select class="form-select hf-c13 input js-mytooltip @error('') is-invalid @enderror"
                                    name="fee_day[]" id="ef_LeadconsultantHf1"
                                    data-mytooltip-content="<i>P56,000 - Consultants<br>
                                        P72,000 - Senior Consultants<br>
                                        Key Accounts<br>
                                        P50,400 - Consultants, min guaranteed 10 consulting days<br>
                                        P45,000 - Seniuor Consultants, min. guaranteed 10 consulting days</i>"
                                    data-mytooltip-theme="dark" data-mytooltip-action="focus"
                                    data-mytooltip-direction="right" style="background-color:#ffcccc; color:red;">
                                    <option value="50000">
                                        &#8369;50,000
                                    </option>
                                    <option value="56000" selected>
                                        &#8369;56,000
                                    </option>
                                    <option value="65000">
                                        &#8369;65,000
                                    </option>
                                    <option value="72000">
                                        &#8369;72,000
                                    </option>
                                </select>
                                @error('')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </fieldset>
                        </td>
                        <td class="table-warning">
                            <input type="text"
                                class="number_input form-control input-table input js-mytooltip @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="fee_day_num[]" id="ef_LeadconsultantNoh1"
                                data-mytooltip-content="<i>½ Day = 0.50<br>
                                    ¼ Day = 0.25 </i>"
                                data-mytooltip-theme="dark" data-mytooltip-action="focus"
                                data-mytooltip-direction="bottom">
                        </td>
                        <td class="table-warning">
                            <input type="text"
                                class="number_input form-control input-table input @error('') is-invalid @enderror"
                                value="{{ old('') }}" id="ef_LeadconsultantAtd1" name="fee_atd[]">
                        </td>

                        <td class="table-warning">
                            <input type="text" class="number_input form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="fee_nswh[]" id="ef_LeadconsultantNwh1">
                        </td>
                        <td class="total-td">
                            <h4 class="text-center lead text-danger" id="leadTotal">-</h4>
                        </td>
                        <td class="total-td">
                            <textarea class="form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="fee_note[]" id="ef_LeadconsultantNotes"></textarea>
                        </td>
                    </tr>
                </tbody>

                <!------------------------------------------------ANALYST--------------------------------------------------------------------->
                <tbody id="ef_TableAnalyst">
                    <tr class="th-blue-grey-lighten-2" id="ef_RowAnalyst">
                        <td class="title">
                            Analyst
                            <input type="hidden" value="Analyst" name="fee_type[]">
                        </td>
                        <td class="table-warning">
                            <input type="text"
                                class="number_input input js-mytooltip form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="fee_consultant_num[]" id="ef_AnalystNoc1" max="100"
                                data-mytooltip-content="<i>Includes in depth needs analysis (i.e. surveys, interviews, FGDs),
                                special research (i.e. to study client materials or client -required materials, industry
                                or function specific content), creation of client-specific learning aids/tools
                                (i.e. assessments, c</i>"
                                data-mytooltip-theme="dark" data-mytooltip-action="focus"
                                data-mytooltip-direction="bottom">
                        </td>

                        <td class="bg-white">
                            <input type="text" class="currency_input form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="fee_day[]" id="ef_AnalystPdf">
                        </td>
                        <td class="table-warning">
                            <input type="text"
                                class="number_input input js-mytooltip form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="fee_day_num[]" id="ef_AnalystNod1"
                                data-mytooltip-content="<i>½ Day = 0.50<br>
                                                           ¼ Day = 0.25 Number of Hours</i>"
                                data-mytooltip-theme="dark" data-mytooltip-action="focus"
                                data-mytooltip-direction="bottom">
                        </td>
                        <td class="table-warning">
                            <input type="text"
                                class="number_input nwh-e14 form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="fee_atd[]" id="ef_AnalystAtd1">
                        </td>
                        <td class="table-warning">
                            <input type="text"
                                class="number_input nwh-e14 form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="fee_nswh[]" id="ef_AnalystNsw1">
                        </td>
                        <td class="total-td">
                            <h4 class="text-center text-danger lead" id="analyst-total">-</h4>
                        </td>
                        <td class="total-td">
                            <textarea class="form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="fee_note[]" id="ef_AnalystNotes"></textarea>
                        </td>
                    </tr>
                </tbody>

                <!------------------------------------------------SUBTOTAL-------------------------------------------------------------------->
                <tr class="table-secondary">
                    <td class="title fw-bold text-dark fst-italic">Subtotal</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td class="total-td" style="background-color: rgba(146, 146, 146, 0.727)">
                        <h4 class="text-center text-danger" id="subtotalConsulting">-</h4>
                    </td>
                    <td class="total-td"></td>
                </tr>

                <!------------------------------------------------DESIGN---------------------------------------------------------------------->
                <tr class="th-blue-grey-lighten">
                    <th class="title px-4 text-dark">2. DESIGN</th>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td class="total-td"></td>
                    <td class="total-td"></td>
                </tr>

                <!------------------------------------------------DESIGNER-------------------------------------------------------------------->
                <tbody id="ef_TableDesigner">
                    <tr class="th-blue-grey-lighten-2" id="ef_RowDesigner">
                        <td class="title">
                            Designer  (P48k /  P64K)
                            <input type="hidden" value="Designer" name="fee_type[]">
                        </td>
                        <td class="table-warning">
                            <input type="text"
                                class="number_input noc-b18 input js-mytooltip form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="fee_consultant_num[]" id="ef_DesignerNoc1" max="100"
                                data-mytooltip-content="<i>Includes in depth needs analysis (i.e. surveys, interviews, FGDs),
                                special research (i.e. to study client materials or client -required materials, industry
                                or function specific content), creation of client-specific learning aids/tools
                                (i.e. assessments, c</i>"
                                data-mytooltip-theme="dark" data-mytooltip-action="focus"
                                data-mytooltip-direction="bottom">
                        </td>
                        <td class="table-danger">
                            <fieldset>
                                <select
                                    class="hf-c18 input js-mytooltip form-select @error('') is-invalid @enderror select"
                                    name="fee_day[]" id="ef_DesignerPdf"
                                    data-mytooltip-content="<i>P48,000 - Consultants<br>
                                        P64,000 - Senior Consultants</i>"
                                    data-mytooltip-theme="dark" data-mytooltip-action="focus"
                                    data-mytooltip-direction="right" style="background-color:#ffcccc; color:red;">
                                    <option value="48000" {{ old('') == '48000' ? 'selected="selected"' : '' }}>
                                        &#8369;48,000
                                    </option>
                                    <option value="64000" {{ old('') == '8000' ? 'selected="selected"' : '' }}>
                                        &#8369;64,000
                                    </option>
                                </select>
                                @error('')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </fieldset>
                        </td>
                        <td class="table-warning">
                            <input type="text"
                                class="number_input noh-d18 input js-mytooltip form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="fee_day_num[]" id="ef_DesignerNod1"
                                data-mytooltip-content="<i>½ Day = 0.50<br>
                                    ¼ Day = 0.25 <br>Number of Hours</i>"
                                data-mytooltip-theme="dark" data-mytooltip-action="focus"
                                data-mytooltip-direction="bottom">
                        </td>
                        <td>
                            <input type="number"
                                class="nwh-e18 form-control input-table @error('') is-invalid @enderror d-none"
                                value="{{ old('') }}" name="fee_atd[]" id="ef_DesignerAtd1">
                        </td>
                        <td>
                            <input type="number"
                                class="nwh-e18 form-control input-table @error('') is-invalid @enderror d-none"
                                value="{{ old('') }}" name="fee_nswh[]" id="ef_DesignerNsw1">
                        </td>
                        <td class="total-td" style="background-color: rgba(146, 146, 146, 0.727)">
                            <h4 class="text-center text-danger" id="subtotal-design">-</h4>
                        </td>
                        <td class="total-td">
                            <textarea class="form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="fee_note[]" id="ef_designerNotes"></textarea>
                        </td>
                    </tr>
                </tbody>

                <!------------------------------------------------PROGRAM--------------------------------------------------------------------->
                <tr class="th-blue-grey-lighten">
                    <th class="title px-4 text-dark">3. PROGRAM</th>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td class="total-td"></td>
                    <td class="total-td"></td>
                </tr>

                <!------------------------------------------------LEAD FACILITATOR------------------------------------------------------------>
                <tbody id="ef_TableLeadFaci">
                    <tr class="th-blue-grey-lighten-2" id="ef_RowLeadFaci">
                        <td class="title">
                            Lead Facilitator (P86K, P96K)
                            <input type="hidden" value="Lead Facilitator" name="fee_type[]">
                        </td>
                        <td class="table-warning">
                            <input type="text"
                                class="number_input noc-b21 form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="fee_consultant_num[]" id="ef_LeadFaciNoc1" max="100">
                        </td>
                        <td class="table-danger"> 
                            <div class="form-group has-icon-right mb-0" id="inputLeadfaci1" style="display:none">
                                <div class="position-relative">
                                    <input type="text" class="currency_input form-control input-table commanumber @error('fee_hour_fee.4') is-invalid @enderror" 
                                        value="{{ old('fee_hour_fee.4') }}" name="fee_day[]" id="ef_InputLeadFaciPdf1" disabled>
                                    <div class="form-control-icon">
                                        <a href="javascript:void(0)" class="deleteIcon" id="deleteIcon1">
                                            <i class="fa-solid fa-square-xmark text-danger"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        
                            <fieldset>
                                <select class="form-select js-mytooltip input-table @error('') is-invalid @enderror"
                                    name="fee_day[]" id="ef_LeadFaciPdf1"
                                    data-mytooltip-content="<i>P80,000 - Key Accounts with min guaranteed 30 full day programs<br>
                                    P88,000 - Non-key accounts signed on or before Apr 30, 2022<br>
                                    P96,000 - Effective May 1, 2022</i>"
                                    data-mytooltip-theme="dark" data-mytooltip-action="focus"
                                    data-mytooltip-direction="right" style="background-color:#ffcccc; color:red;">
                                    <option value="86000" {{ old('') == '86000' ? 'selected="selected"' : '' }}>
                                        &#8369;86,000
                                    </option>
                                    <option value="96000" {{ old('') == '96000' ? 'selected="selected"' : '' }} selected>
                                        &#8369;96,000
                                    </option>
                                    <option value="others" {{ old('') == 'others' ? 'selected="selected"' : '' }}
                                    id="others1" onclick="document.getElementById('').focus()">
                                        Others
                                    </option>
                                </select>
                                @error('')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </fieldset>
                        </td>
                        <td class="table-warning">
                            <input type="text"
                                class="number_input noh-d21 input js-mytooltip form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="fee_day_num[]" id="ef_LeadFaciNod1"
                                data-mytooltip-content="<i>½ Day = 0.70</i>" data-mytooltip-theme="dark"
                                data-mytooltip-action="focus" data-mytooltip-direction="bottom">
                        </td>
                        <td class="table-warning">
                            <input type="text"
                                class="number_input nwh-e21 form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="fee_atd[]" id="ef_LeadFaciAtd1">
                        </td>
                        <td class="table-warning">
                            <input type="text"
                                class="number_input nwh-e21 form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="fee_nswh[]" id="ef_LeadFaciNsw1">
                        </td>
                        <td class="total-td">
                            <h4 class="text-center lead text-danger" id="subtotal-LeadFaci">-</h4>
                        </td>
                        <td class="total-td">
                            <textarea class="form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="fee_note[]" id="ef_LeadFaciNotes"></textarea>
                        </td>
                    </tr>
                </tbody>

                <!------------------------------------------------CO-FACILITATOR-------------------------------------------------------------->
                <tbody id="ef_TableCoFaci">
                    <tr class="th-blue-grey-lighten-2" id="ef_RowCoFaci">
                        <td class="title">
                            Co-facilitator / Resource Speaker
                            <input type="hidden" value="Co-facilitator / Resource Speaker" name="fee_type[]">
                        </td>
                        <td class="table-warning">
                            <input type="text"
                                class="number_input noc-b22 form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="fee_consultant_num[]" id="ef_CoFaciNoc1" max="100">
                        </td>
                        <td class="bg-white">
                            <input type="text"
                                class="currency_input hf-c22 form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="fee_day[]" id="ef_CoFaciPdf";
                                data-mytooltip-content="<i>½ Day = 0.70</i>" data-mytooltip-theme="dark"
                                data-mytooltip-action="focus" data-mytooltip-direction="bottom">
                        </td>
                        <td class="table-warning">
                            <input type="text"
                                class="number_input noh-d22 input js-mytooltip form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="fee_day_num[]" id="ef_CoFaciNod1"
                                data-mytooltip-content="<i>½ Day = 0.70</i>" data-mytooltip-theme="dark"
                                data-mytooltip-action="focus" data-mytooltip-direction="bottom">
                        </td>
                        <td class="table-warning">
                            <input type="text"
                                class="number_input nwh-e22 form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="fee_atd[]" id="ef_CoFaciAtd1">
                        </td>
                        <td class="table-warning">
                            <input type="text"
                                class="number_input nwh-e22 form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="fee_nswh[]" id="ef_CoFaciNsw1">
                        </td>
                        <td class="total-td">
                            <h4 class="text-center lead text-danger" id="subtotal-coFacilitator">-</h4>
                        </td>
                        <td class="total-td">
                            <textarea class="form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="fee_note[]" id="ef_coFaciNotes"></textarea>
                        </td>
                    </tr>
                </tbody>

                <!------------------------------------------------ACTION LEARNING COACH------------------------------------------------------->
                <tbody id="ef_TableActionLearn">
                    <tr class="th-blue-grey-lighten-2" id="ef_RowActionLearn">
                        <td class="title">
                            Action Learning Coach
                            <input type="hidden" value="Action Learning Coach" name="fee_type[]">
                        </td>
                        <td class="table-warning">
                            <input type="text"
                                class="number_input noc-b23 form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="fee_consultant_num[]" id="ef_ActionLearnNoc1" max="100">
                        </td>
                        <td class="bg-white">
                            <input type="text"
                                class="currency_input hf-c22 form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="fee_day[]" id="ef_ActionLearnPdf">
                        </td>
                        <td class="table-warning">
                            <input type="text"
                                class="number_input noh-d23 input js-mytooltip form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="fee_day_num[]" id="ef_ActionLearnNod1"
                                data-mytooltip-content="<i>½ Day = 0.70</i>" data-mytooltip-theme="dark"
                                data-mytooltip-action="focus" data-mytooltip-direction="bottom">
                        </td>
                        <td class="table-warning">
                            <input type="text"
                                class="number_input nwh-e23 form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="fee_atd[]" id="ef_ActionLearnAtd1">
                        </td>
                        <td class="table-warning">
                            <input type="text"
                                class="number_input nwh-e23 form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="fee_nswh[]" id="ef_ActionLearnNsw1">
                        </td>
                        <td class="total-td">
                            <h4 class="text-center lead text-danger" id="subtotal-ActionLearn">-</h4>
                        </td>
                        <td class="total-td">
                            <textarea class="form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="fee_note[]" id="ef_ActionLearnNotes"></textarea>
                        </td>
                    </tr>
                </tbody>

                <!------------------------------------------------MARSHAL--------------------------------------------------------------------->
                <tbody id="ef_TableMarshal">
                    <tr class="th-blue-grey-lighten-2" id="ef_RowMarshal">
                        <td class="title">
                            Marshal
                            <input type="hidden" value="Marshal" name="fee_type[]">
                        </td>
                        <td class="table-warning">
                            <input type="text"
                                class="number_input noc-b23 form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="fee_consultant_num[]" id="ef_MarshalNoc1" max="100">
                        </td>
                        <td class="bg-white">
                            <input type="text"
                                class="currency_input hf-c22 form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="fee_day[]" id="ef_MarshalPdf">
                        </td>
                        <td class="table-warning">
                            <input type="text"
                                class="number_input noh-d23 input js-mytooltip form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="fee_day_num[]" id="ef_MarshalNod1"
                                data-mytooltip-content="<i>½ Day = 0.70</i>" data-mytooltip-theme="dark"
                                data-mytooltip-action="focus" data-mytooltip-direction="bottom">
                        </td>
                        <td class="table-warning">
                            <input type="text"
                                class="number_input nwh-e23 form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="fee_atd[]" id="ef_MarshalAtd1">
                        </td>
                        <td class="table-warning">
                            <input type="text"
                                class="number_input nwh-e23 form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="fee_nswh[]" id="ef_MarshalNsw1">
                        </td>
                        <td class="total-td">
                            <h4 class="text-center lead text-danger" id="subtotal-marshal">-</h4>
                        </td>
                        <td class="total-td">
                            <textarea class="form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="fee_note[]" id="ef_marshalNotes"></textarea>
                        </td>
                    </tr>
                </tbody>

                <!------------------------------------------------ONSITE PC------------------------------------------------------------------->
                <tbody id="ef_TableOnsite">
                    <tr class="th-blue-grey-lighten-2" id="ef_RowOnsite">
                        <td class="title">
                            On-site PC (P20K / P25K / P30K)
                            <input type="hidden" value="On-site PC" name="fee_type[]">
                        </td>
                        <td class="table-warning">
                            <input type="text"
                                class="number_input noc-b23 form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="fee_consultant_num[]" id="ef_OnsiteNoc1" max="100">
                        </td>
                        <td class="table-danger">
                            <fieldset>
                                <select class="form-select hf-c13 input js-mytooltip @error('') is-invalid @enderror"
                                    name="fee_day[]" id="ef_OnsitePdf"
                                    data-mytooltip-content="<i>P20,000 - simple indoor programs<br>
                                        P25,000 - roster with 6-10 members<br>
                                        P30,000 - roster with 11 members and up</i>"
                                    data-mytooltip-theme="dark" data-mytooltip-action="focus"
                                    data-mytooltip-direction="right" style="background-color:#ffcccc; color:red;">
                                    <option value="20000" {{ old('') == '20,000' ? 'selected="selected"' : '' }}
                                        selected>
                                        &#8369;20,000
                                    </option>
                                    <option value="25000" {{ old('') == '56,000' ? 'selected="selected"' : '' }}>
                                        &#8369;25,000
                                    </option>
                                    <option value="30000" {{ old('') == '30,000' ? 'selected="selected"' : '' }}>
                                        &#8369;30,000
                                    </option>
                                    <option value="35000" {{ old('') == '30,000' ? 'selected="selected"' : '' }}>
                                        &#8369;35,000
                                    </option>
                                </select>
                                @error('')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </fieldset>
                        </td>
                        <td class="table-warning">
                            <input type="text"
                                class="number_input noh-d23 input js-mytooltip form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="fee_day_num[]" id="ef_OnsiteNod1"
                                data-mytooltip-content="<i>½ Day = 0.70</i>" data-mytooltip-theme="dark"
                                data-mytooltip-action="focus" data-mytooltip-direction="bottom">
                        </td>
                        <td class="table-warning">
                            <input type="text"
                                class="number_input nwh-e23 form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="fee_atd[]" id="ef_OnsiteAtd1">
                        </td>
                        <td class="table-warning">
                            <input type="text"
                                class="number_input nwh-e23 form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="fee_nswh[]" id="ef_OnsiteNsw1">
                        </td>
                        <td class="total-td">
                            <h4 class="text-center text-danger lead" id="subtotal-Onsite">-</h4>
                        </td>
                        <td class="total-td">
                            <textarea class="form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="fee_note[]" id="ef_onsiteNotes"></textarea>
                        </td>
                    </tr>
                </tbody>

                <!------------------------------------------------SUBTOTAL-------------------------------------------------------------------->
                <tr class="table-secondary">
                    <td class="title fw-bold text-dark fst-italic">Subtotal</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td class="total-td" style="background-color: rgba(146, 146, 146, 0.727)">
                        <h4 class="text-center text-danger" id="program-Subtotal">-</h4>
                    </td>
                    <td class="total-td"></td>
                </tr>

                <!------------------------------------------------OTHER ROLES----------------------------------------------------------------->
                <tr class="th-blue-grey-lighten">
                    <th class="title px-4 text-dark">4. OTHER ROLES</th>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td class="total-td"></td>
                    <td class="total-td"></td>
                </tr>

                <!------------------------------------------------DOCUMENTOR------------------------------------------------------------------>
                <tbody id="ef_TableDocumentor">
                    <tr class="th-blue-grey-lighten-2" id="ef_RowDocumentor">
                        <td class="title">
                            Documentor
                            <input type="hidden" value="Documentor" name="fee_type[]">
                        </td>
                        <td class="table-warning">
                            <input type="text"
                                class="number_input noc-b28 form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="fee_consultant_num[]" id="ef_DocumentorNoc1" max="100">
                        </td>
                        <td class="bg-white">
                            <input type="text"
                                class="currency_input hf-c22 form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="fee_day[]" id="ef_DocumentorPdf">
                        </td>
                        <td class="table-warning">
                            <input type="text"
                                class="number_input noh-d28 input js-mytooltip form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="fee_day_num[]" id="ef_DocumentorNod1"
                                data-mytooltip-content="<i>½ Day = 0.70</i>" data-mytooltip-theme="dark"
                                data-mytooltip-action="focus" data-mytooltip-direction="bottom">
                        </td>
                        <td class="table-warning">
                            <input type="text"
                                class="number_input nwh-e28 form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="fee_atd[]" id="ef_DocumentorAtd1">
                        </td>
                        <td class="table-warning">
                            <input type="text"
                                class="number_input nwh-e28 form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="fee_nswh[]" id="ef_DocumentorNsw1">
                        </td>
                        <td class="total-td" style="background-color: rgba(146, 146, 146, 0.727">
                            <h4 class="text-center text-danger" id="subtotal-Documentor">-</h4>
                        </td>
                        <td class="total-td">
                            <textarea class="form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="fee_note[]" id="ef_documentorNotes"> </textarea>
                        </td>
                    </tr>
                </tbody>

                <!------------------------------------------------PER DIEM-------------------------------------------------------------------->
                <tr class="th-blue-grey-lighten" id="ef_TablePerDiem">
                    <th class="title px-4 text-dark">
                        5. PER DIEM
                        <input type="hidden" value="Per Diem" name="fee_type[]">
                    </th>
                    <td>
                        <input type="hidden" class="noc-b28 form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="fee_consultant_num[]" id="ef_PDNoc" max="100"> 
                    </td>
                    <td class="bg-white">
                        <input type="text" class="currency_input hf-c22 form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="fee_day[]" id="ef_PDPdf">
                    </td>
                    <td class="table-warning">
                        <input type="text"
                            class="number_input noh-d28 input  form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="fee_day_num[]" id="ef_PDNod">
                    </td>
                    <td>
                        <input type="hidden" class="nwh-e28 form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="fee_atd[]" id="ef_PDAtd">
                    </td>
                    <td>
                        <input type="hidden" class="nwh-e28 form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="fee_nswh[]" id="ef_PDNsw">
                    </td>
                    <td class="total-td" style="background-color: rgba(146, 146, 146, 0.727">
                        <h4 class="text-center text-danger" id="subtotal-PD">-</h4>
                    </td>
                    <td class="total-td">
                        <textarea class="form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="fee_note[]" id="ef_perDiemNotes"></textarea>
                    </td>
                </tr>

                <tr class="table-active overall-total">
                    <td class="text-uppercase text-dark fst-italic fw-bold overall-total-start">TOTAL STANDARD FEES
                    </td>
                    <td class="overall-total-middle"></td>
                    <td class="overall-total-middle"></td>
                    <td class="overall-total-middle"></td>
                    <td class="overall-total-middle"></td>
                    <td class="overall-total-middle"></td>
                    <td class="overall-total-end" style="background-color: rgba(146, 146, 146, 0.727)">
                        <h4 class="text-center fw-bold text-danger" id="standard_total">-</h4>
                    </td>
                    <td class="overall-total-end">
                        <textarea type="text" class="form-control input-table @error('') is-invalid @enderror d-none"
                            value="{{ old('') }}" name="" id=""></textarea>
                    </td>

                </tr>

                <tr class="table-active">
                    <td class="fw-bold text-dark text-uppercase fst-italic overall-total-start">
                        discount given (if any)
                        <input type="hidden" value="Discount given" name="fee_type[]">
                    </td>
                    <td class="overall-total-middle">
                        <input type="hidden" name="fee_consultant_num[]" value="">
                    </td>
                    <td class="overall-total-middle" style="background-color: rgba(146, 146, 146, 0.727">
                        <input type="text"
                            class="hf-c32 form-control input-table text-center @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="fee_day[]" id="inpt_dsct" readonly>
                    </td>
                    <td class="overall-total-middle"><input type="hidden" name="fee_day_num[]" value=""></td>
                    <td class="overall-total-middle"><input type="hidden" name="fee_atd[]" value=""></td>
                    <td class="overall-total-end"><input type="hidden" name="fee_nswh[]" value=""></td>
                    <td class="overall-total-middle"></td>
                    <td class="overall-total-end">
                        <textarea class="form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="fee_note[]" id="total_dsct_notes"></textarea>
                    </td>

                </tr>

                <tr class="table-active">
                    <td class="fw-bold text-uppercase text-dark fst-italic overall-total-start">
                        total package
                        <input type="hidden" value="Total package">
                    </td>
                    <td class="overall-total-middle"><input type="hidden"  value=""></td>
                    <td class="overall-total-middle"><input type="hidden"  value=""></td>
                    <td class="overall-total-middle"><input type="hidden"  value=""></td>
                    <td class="overall-total-middle"><input type="hidden" value=""></td>
                    <td class="overall-total-middle"><input type="hidden"  value=""></td>
                    <td class="overall-total-end table-warning">
                        <input type="text"
                            class="currency_input tf-f34 form-control text-center text-danger fw-bolder input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="input_totalPackages" id="input_totalPackages"
                            style="font-size: 20px;">
                    </td>
                    <td class="overall-total-end">
                        <input type="text" class="form-control input-table @error('') is-invalid @enderror d-none"
                            value="{{ old('') }}"  id="ef_totalPackageNotes">
                    </td>

                </tr>

                </tbody>
            </table>
            <p> * TRAVEL DAYS/NIGHT SHIFT/WEEKENDS/HOLIDAYS - no double charging for the same day I.e. Saturday night travel is only charged one 20% surcharge</p>
        </div>
    </section>
</div>

@include('form.components.f2f_engagement.f2f_script.f2f_engagement_fees')
@if($parentInfoList)
    <script>
        @foreach($parentFeeList as $fee)

            @if($fee->type == 'Night Shift, Weekends and Holidays')
                document.getElementById('nswh').value = '{{ $fee->nswh_percent }}';
            @endif

            @if($fee->type == 'Lead Consultant')
                document.getElementById('ef_LeadconsultantNoc1').value = '{{ $fee->consultant_num }}';
                document.getElementById('ef_LeadconsultantHf1').value = '{{ $fee->day_fee }}';
                document.getElementById('ef_LeadconsultantNoh1').value = '{{ $fee->day_num }}';
                document.getElementById('ef_LeadconsultantAtd1').value = '{{ $fee->atd }}';
                document.getElementById('ef_LeadconsultantNwh1').value = '{{ $fee->nswh }}';
                document.getElementById('ef_LeadconsultantNotes').value = '{{ $fee->notes }}';
            @endif

            @if($fee->type == 'Analyst')
                document.getElementById('ef_AnalystNoc1').value = '{{ $fee->consultant_num }}';
                document.getElementById('ef_AnalystPdf').value = '{{ $fee->day_fee }}';
                document.getElementById('ef_AnalystNod1').value = '{{ $fee->day_num }}';
                document.getElementById('ef_AnalystAtd1').value = '{{ $fee->atd }}';
                document.getElementById('ef_AnalystNsw1').value = '{{ $fee->nswh }}';
                document.getElementById('ef_AnalystNotes').value = '{{ $fee->notes }}';
            @endif

            @if($fee->type == 'Designer')
                document.getElementById('ef_DesignerNoc1').value = '{{ $fee->consultant_num }}';
                document.getElementById('ef_DesignerPdf').value = '{{ $fee->day_fee }}';
                document.getElementById('ef_DesignerNod1').value = '{{ $fee->day_num }}';
                document.getElementById('ef_DesignerAtd1').value = '{{ $fee->atd }}';
                document.getElementById('ef_designerNotes').value = '{{ $fee->notes }}';
            @endif

            @if($fee->type == 'Lead Facilitator')
            
                @if($fee->day_fee != '86000' && $fee->day_fee != '96000') 
                    $(`#inputLeadfaci1`).css("display", "");
                    $(`#ef_InputLeadFaciPdf1`).prop('disabled', false);
                    $(`#ef_LeadFaciPdf1`).prop('disabled', true);
                    $(`#ef_LeadFaciPdf1`).css("display", "none");
                    document.getElementById('ef_InputLeadFaciPdf1').value = '{{ $fee->day_fee }}';
                @else                    
                    document.getElementById('ef_LeadFaciPdf1').value = '{{ $fee->day_fee }}';
                @endif
                
                document.getElementById('ef_LeadFaciNoc1').value = '{{ $fee->consultant_num }}';
                document.getElementById('ef_LeadFaciNod1').value = '{{ $fee->day_num }}';
                document.getElementById('ef_LeadFaciAtd1').value = '{{ $fee->atd }}';
                document.getElementById('ef_LeadFaciNsw1').value = '{{ $fee->nswh }}';
                document.getElementById('ef_LeadFaciNotes').value = '{{ $fee->notes }}';

            @endif

            @if($fee->type == 'Co-facilitator / Resource Speaker')
                document.getElementById('ef_CoFaciNoc1').value = '{{ $fee->consultant_num }}';
                document.getElementById('ef_CoFaciPdf').value = '{{ $fee->day_fee }}';
                document.getElementById('ef_CoFaciNod1').value = '{{ $fee->day_num }}';
                document.getElementById('ef_CoFaciAtd1').value = '{{ $fee->atd }}';
                document.getElementById('ef_CoFaciNsw1').value = '{{ $fee->nswh }}';
                document.getElementById('ef_coFaciNotes').value = '{{ $fee->notes }}';
            @endif

            @if($fee->type == 'Action Learning Coach')
                document.getElementById('ef_ActionLearnNoc1').value = '{{ $fee->consultant_num }}';
                document.getElementById('ef_ActionLearnPdf').value = '{{ $fee->day_fee }}';
                document.getElementById('ef_ActionLearnNod1').value = '{{ $fee->day_num }}';
                document.getElementById('ef_ActionLearnAtd1').value = '{{ $fee->atd }}';
                document.getElementById('ef_ActionLearnNsw1').value = '{{ $fee->nswh }}';
                document.getElementById('ef_ActionLearnNotes').value = '{{ $fee->notes }}';
            @endif

            @if($fee->type == 'Marshal')
                document.getElementById('ef_MarshalNoc1').value = '{{ $fee->consultant_num }}';
                document.getElementById('ef_MarshalPdf').value = '{{ $fee->day_fee }}';
                document.getElementById('ef_MarshalNod1').value = '{{ $fee->day_num }}';
                document.getElementById('ef_MarshalAtd1').value = '{{ $fee->atd }}';
                document.getElementById('ef_MarshalNsw1').value = '{{ $fee->nswh }}';
                document.getElementById('ef_marshalNotes').value = '{{ $fee->notes }}';
            @endif

            @if($fee->type == 'On-site PC')
                document.getElementById('ef_OnsiteNoc1').value = '{{ $fee->consultant_num }}';
                document.getElementById('ef_OnsitePdf').value = '{{ $fee->day_fee }}';
                document.getElementById('ef_OnsiteNod1').value = '{{ $fee->day_num }}';
                document.getElementById('ef_OnsiteAtd1').value = '{{ $fee->atd }}';
                document.getElementById('ef_OnsiteNsw1').value = '{{ $fee->nswh }}';
                document.getElementById('ef_onsiteNotes').value = '{{ $fee->notes }}';
            @endif

            @if($fee->type == 'Documentor')
                document.getElementById('ef_DocumentorNoc1').value = '{{ $fee->consultant_num }}';
                document.getElementById('ef_DocumentorPdf').value = '{{ $fee->day_fee }}';
                document.getElementById('ef_DocumentorNod1').value = '{{ $fee->day_num }}';
                document.getElementById('ef_DocumentorAtd1').value = '{{ $fee->atd }}';
                document.getElementById('ef_DocumentorNsw1').value = '{{ $fee->nswh }}';
                document.getElementById('ef_documentorNotes').value = '{{ $fee->notes }}';
            @endif

            @if($fee->type == 'Per Diem')
                document.getElementById('ef_PDPdf').value = '{{ $fee->day_fee }}';
                document.getElementById('ef_PDNod').value = '{{ $fee->day_num }}';                
                document.getElementById('ef_perDiemNotes').value = '{{ $fee->notes }}';
            @endif

            @if($fee->type == 'Discount given')
                document.getElementById('inpt_dsct').value = '{{ $fee->day_num }}';
                document.getElementById('total_dsct_notes').value = '{{ $fee->notes }}';
            @endif
            
        @endforeach
        
        $(document).ready(function () {
            $('#f2f-ef-table input').click();
            document.getElementById("input_totalPackages").value = '{{ $parentInfoList->Engagement_fees_total }}';   
        });
    </script>
@endif