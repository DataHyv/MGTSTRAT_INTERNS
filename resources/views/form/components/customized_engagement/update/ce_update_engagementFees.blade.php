<!------------ CARD HEADER ------------>
<div class="card-header">
    <h4 class="card-title">Engagement Fees</h4>
</div>
@php
    $efLeadConsultant = 0;
    $efAnalyst = 0;
    $efDesigner = 0;
    $efLeadfaci = 0;
    $efCofaci = 0;
    $efModerator = 0;
    $efProducer = 0;
    $efDocumentor = 0;
@endphp
<!------------ FORM BODY ------------>
<div class="form-body container">
    <section>
        <div class="table-responsive" id="no-more-tables" data-animation="slideHorz">
            <table class="table table-bordered" id="ec_tableEngagementFees">
            <!-------------------------------------------------------------TABLE HEADING TITLE------------------------------------------------------------------>
                <thead class="table-dark">
                    <b>
                        <tr class="text-center">
                            <th class="title-th" scope="col" width=20%></th>
                            <th class="title-middle" scope="col" style="font-size: 0.9rem;">NUMBER OF CONSULTANTS</th>
                            <th class="title-middle px-4" width=15% scope="col">HOURLY FEES</th>
                            <th class="title-middle" scope="col" style="font-size: 0.9rem;">NUMBER OF HOURS</th>
                            <th class="title-middle" scope="col" style="font-size: 0.9rem;" width=10%>    
                                <label for="Night Shift, Weekends and Holidays">NSWH</label>
                                @foreach ($dataJoin1 as $key=>$fee_type)
                                @if ($fee_type->type === 'Night Shift, Weekends and Holidays')
                                <input type="hidden" name="ce_id[]" value="{{$fee_type->id }}">
                                <input type="hidden" value="Night Shift, Weekends and Holidays" name="fee_type[]">
                                <input type="hidden" value="" name="fee_consultant_num[]">
                                <input type="hidden" value="" name="fee_hour_fee[]">
                                <input type="hidden" value="" name="fee_hour_num[]">
                                <input type="hidden" value="" name="fee_nswh[]">
                                <input type="hidden" value="" name="fee_notes[]">
                                <select
                                    class="input js-mytooltip form-select form-select-sm engagement-fee nswh-percent @error('') is-invalid @enderror select"
                                    name="nswh_percent[]" id="nswh">
                                    <option value="0.1" {{ $fee_type->nswh_percent == '0.1' ? 'selected="selected"' : '' }}>
                                        &#8369;10%
                                    </option>
                                    <option value="0.15" {{ $fee_type->nswh_percent == '0.15' ? 'selected="selected"' : '' }}>
                                        &#8369;15%
                                    </option>
                                    <option value="0.2" {{ $fee_type->nswh_percent == '0.2' ? 'selected="selected"' : '' }}>
                                        &#8369;20%
                                    </option>
                                    <option value="0.25" {{ $fee_type->nswh_percent == '0.25' ? 'selected="selected"' : '' }}>
                                        &#8369;25%
                                    </option>
                                </select>
                                @endif
                                @endforeach
                            </th>
                            {{-- <th class="title-middle" scope="col" style="font-size: 0.9rem;" width=10%>NIGHT SHIFT,
                                WEEKENDS HOLIDAYS *</th> --}}
                            <th class="title-th" scope="col" width=15%>TOTAL FEE</th>
                            <th class="title-th" scope="col" width=15%>NOTES</th>
                            <td class="add-row border border-white"> </td>
                        </tr>
                    </b>
                </thead>

            <!----------------------------------------------------------------CONSULTING---------------------------------------------------------------------->
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
                    @foreach ($dataJoin1 as $key=>$fee_type)
                    @if ($fee_type->type === 'Lead Consultant')
                    <tr class="table-warning" id="leadConsultant{{++$efLeadConsultant}}">
                        <td class="title table-light">
                            <input type="hidden" name="ce_id[]" value="{{$fee_type->id }}">
                            <input type="text" class="d-none" value="{{ $fee_type->type }}" name="fee_type[]">
                                {{$fee_type->type}}
                        </td>
                        <td class="noc" data-title="# OF CONSULTANTS">
                            <input type="number"
                                class="input js-mytooltip input-table form-control  @error('') is-invalid @enderror"
                                value="{{ $fee_type->consultant_num }}" name="fee_consultant_num[]" id="ef_LeadconsultantNoc{{$efLeadConsultant}}"
                                oninput="document.getElementById('ec_LeadconsultantNoc{{$efLeadConsultant}}').value = document.getElementById('ef_LeadconsultantNoc{{$efLeadConsultant}}').value;" title="" max="100"
                                data-mytooltip-content="<i>Includes in depth needs analysis (i.e. surveys, interviews, FGDs),
                                special research (i.e. to study client materials or client -required materials, industry
                                or function specific content), creation of client-specific learning aids/tools
                                (i.e. assessments, c</i>"
                                data-mytooltip-theme="dark" data-mytooltip-action="focus"
                                data-mytooltip-direction="bottom">
                        </td>

                        <td>
                            <fieldset>
                                <select class="form-select input js-mytooltip @error('') is-invalid @enderror"
                                    name="fee_hour_fee[]" id="ef_LeadconsultantHf"
                                    data-mytooltip-content="<i> &#8369;7,000 - Consultants<br>
                                    &#8369;9,000 - Senior Consultants </i>"
                                    data-mytooltip-theme="dark" data-mytooltip-action="focus"
                                    data-mytooltip-direction="right" style="background-color:#ffcccc; color:red;">
                                    <option value="₱7000" {{ $fee_type->hour_fee == '₱7000' ? 'selected="selected"' : '' }}>
                                        &#8369;7,000
                                    </option>
                                    <option value="₱9000" {{ $fee_type->hour_fee == '₱9000' ? 'selected="selected"' : '' }}>
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

                        <td class="noh">
                            <input type="number" class="form-control input-table input js-mytooltip @error('') is-invalid @enderror" value="{{ $fee_type->hour_num }}" name="fee_hour_num[]" id="ef_LeadconsultantNoh{{$efLeadConsultant}}" oninput="document.getElementById('ec_LeadconsultantNoh{{$efLeadConsultant}}').value = document.getElementById('ef_LeadconsultantNoh{{$efLeadConsultant}}').value;" data-mytooltip-content="<i>Number of Hours</i>" data-mytooltip-theme="dark" data-mytooltip-action="focus" data-mytooltip-direction="bottom">
                        </td>

                        <td class="nwh">
                            <input type="number" class="form-control input-table @error('') is-invalid @enderror" value="{{ $fee_type->nswh }}" name="fee_nswh[]" id="ef_LeadconsultantNwh{{$efLeadConsultant}}" oninput="document.getElementById('ec_LeadconsultantNwh{{$efLeadConsultant}}').value = document.getElementById('ef_LeadconsultantNwh{{$efLeadConsultant}}').value;">
                            <input type="text" class="nswh-percent-value" value="{{ $fee_type->nswh_percent }}" name="nswh_percent[]" hidden>
                        </td>

                        <td class="total-td table-light">
                            <h4 class="text-center lead" id="leadTotal">-</h4>
                        </td>

                        <td class="total-td table-light">
                            <textarea class="form-control input-table @error('') is-invalid @enderror"
                                name="fee_notes[]" id="" rows="2" cols="55">{{$fee_type->notes}}</textarea>
                        </td>

                        @if ($efLeadConsultant === 1)
                            <td style="background-color: #FFFFFF;" class="border border-white"><a href="javascript:void(0)"
                                    class="text-success font-18" title="Add" id="addBtn" onclick="$('#EcAddBtn').trigger('click');"><i
                                        class="fa fa-plus"></i></a>
                            </td>
                        @else
                            <td class="border border-white" style="background-color: #FFFFFF;">
                                <a href="javascript:void(0)" class="text-danger font-18 remove" title="Remove" data-id="{{ $fee_type->id }}">
                                    <i class="fa fa-trash-o"></i>
                                </a>
                            </td>
                        @endif
                    </tr>
                    @endif
                    @endforeach
                </tbody>

                <tbody id="tableAnalyst">
                    @foreach ($dataJoin1 as $key=>$fee_type )
                    @if ($fee_type->type === 'Analyst')
                    <tr class="table-warning" id="Analyst{{++$efAnalyst}}">
                        <td class="title table-light">
                            <input type="hidden" name="ce_id[]" value="{{$fee_type->id }}">
                            <input type="text" class="d-none" value="{{ $fee_type->type }}" name="fee_type[]" >
                            {{ $fee_type->type }}
                        </td>
                        <td class="noc">
                            <input type="number" class="input js-mytooltip form-control input-table @error('') is-invalid @enderror" value="{{ $fee_type->consultant_num }}" name="fee_consultant_num[]" id="ef_AnalystNoc{{$efAnalyst}}" max="100" oninput="document.getElementById('ec_AnalystNoc{{$efAnalyst}}').value = document.getElementById('ef_AnalystNoc{{$efAnalyst}}').value;" data-mytooltip-content="<i>Includes in depth needs analysis (i.e. surveys, interviews, FGDs), special research (i.e. to study client materials or client -required materials, industry or function specific content), creation of client-specific learning aids/tools (i.e. assessments, c</i>" data-mytooltip-theme="dark" data-mytooltip-action="focus" data-mytooltip-direction="bottom">
                        </td>
                        <td>
                            <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                value="{{ $fee_type->hour_fee }}" name="fee_hour_fee[]" id="ef_AnalystHf" data-type="currency">
                        </td>
                        <td class="noh">
                            <input type="number"
                                class="input js-mytooltip form-control input-table @error('') is-invalid @enderror"
                                value="{{ $fee_type->hour_num }}" name="fee_hour_num[]" id="ef_AnalystNoh{{$efAnalyst}}"
                                oninput="document.getElementById('ec_AnalystNoh{{$efAnalyst}}').value = document.getElementById('ef_AnalystNoh{{$efAnalyst}}').value;"
                                data-mytooltip-content="<i>Number of Hours</i>" data-mytooltip-theme="dark"
                                data-mytooltip-action="focus" data-mytooltip-direction="bottom">
                        </td>
                        <td class="nwh">
                            <input type="number" class="form-control input-table @error('') is-invalid @enderror"
                                value="{{ $fee_type->nswh }}" name="fee_nswh[]" id="ef_AnalystNwh{{$efAnalyst}}"
                                oninput="document.getElementById('ec_AnalystNwh{{$efAnalyst}}').value = document.getElementById('ef_AnalystNwh{{$efAnalyst}}').value;">
                            <input type="text" class="nswh-percent-value" value="{{ $fee_type->nswh_percent }}" name="nswh_percent[]" hidden>
                        </td>
                        <td class="total-td table-light">
                            <h4 class="text-center lead" id="analyst-total">-</h4>
                        </td>
                        <td class="total-td table-light">
                            <textarea class="form-control input-table @error('') is-invalid @enderror"
                                name="fee_notes[]" id="" rows="2" cols="55">{{$fee_type->notes}}</textarea>
                        </td>
                        @if($efAnalyst === 1)
                            <td style="background-color: #FFFFFF;" class="border border-white">
                                <a href="javascript:void(0)" class="text-success font-18" title="Add" id="addBtn2" onclick="$('#EcAddBtn2').trigger('click');">
                                    <i class="fa fa-plus"></i>
                                </a>
                            </td>
                        @else
                            <td class="border border-white" style="background-color: #FFFFFF;">
                                <a href="javascript:void(0)" class="text-danger font-18 remove" title="Remove" data-id="{{ $fee_type->id }}">
                                    <i class="fa fa-trash-o"></i>
                                </a>
                            </td>
                        @endif
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
                    <td class="border border-white add-row"></td>
                </tr>

            <!----------------------------------------------------------------DESIGN---------------------------------------------------------------------->
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
                    @foreach ($dataJoin1 as $key=>$fee_type )
                    @if ($fee_type->type === 'Designer')
                    <tr class="table-warning" id="efDesigner{{++$efDesigner}}">
                        <td class="title table-light">
                            <input type="hidden" name="ce_id[]" value="{{$fee_type->id }}">
                            <input type="text" class="d-none" value="{{ $fee_type->type }}" name="fee_type[]" >
                            {{ $fee_type->type }}
                        </td>
                        <td class="noc">
                            <input type="number"
                                class="input js-mytooltip form-control input-table @error('') is-invalid @enderror"
                                value="{{ $fee_type->consultant_num }}" name="fee_consultant_num[]" id="ef_DesignerNoc{{$efDesigner}}" max="100"
                                oninput="document.getElementById('ec_DesignerNoc{{$efDesigner}}').value = document.getElementById('ef_DesignerNoc{{$efDesigner}}').value;"
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
                                    <option value="₱6000" {{ $fee_type->hour_fee == '₱6000' ? 'selected="selected"' : '' }}>
                                        &#8369;6,000
                                    </option>
                                    <option value="₱8000" {{ $fee_type->hour_fee == '₱8000' ? 'selected="selected"' : '' }}>
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
                        <td class="noh">
                            <input type="number"
                                class="input js-mytooltip form-control input-table @error('') is-invalid @enderror"
                                value="{{ $fee_type->hour_num }}" name="fee_hour_num[]" id="ef_DesignerNoh{{$efDesigner}}"
                                oninput="document.getElementById('ec_DesignerNoh{{$efDesigner}}').value = document.getElementById('ef_DesignerNoh{{$efDesigner}}').value;"
                                data-mytooltip-content="<i>Number of Hours</i>" data-mytooltip-theme="dark"
                                data-mytooltip-action="focus" data-mytooltip-direction="bottom">
                        </td>
                        <td class="nwh">
                            <input type="number" class="form-control input-table @error('') is-invalid @enderror"
                                value="{{ $fee_type->nswh }}" name="fee_nswh[]" id="ef_DesignerNwh{{$efDesigner}}"
                                oninput="document.getElementById('ec_DesignerNwh{{$efDesigner}}').value = document.getElementById('ef_DesignerNwh{{$efDesigner}}').value;">
                            <input type="text" class="nswh-percent-value" value="{{ $fee_type->nswh_percent }}" name="nswh_percent[]" hidden>
                        </td>
                        <td class="table-light total-td" style="background-color: rgba(146, 146, 146, 0.727)">
                            <h4 class="text-center" id="subtotal-design">-</h4>
                        </td>
                        <td class="table-light total-td">
                            <textarea class="form-control input-table @error('') is-invalid @enderror"
                                name="fee_notes[]" id="" rows="2" cols="55">{{$fee_type->notes}}</textarea>
                        </td>
                        @if ($efDesigner === 1 )
                            <td style="background-color: #FFFFFF;" class="border border-white">
                                <a href="javascript:void(0)" class="text-success font-18" title="Add" id="addBtn3" onclick="$('#EcAddBtn3').trigger('click');">
                                    <i class="fa fa-plus"></i>
                                </a>
                            </td>
                        @else
                            <td class="border border-white" style="background-color: #FFFFFF;">
                                <a href="javascript:void(0)" class="text-danger font-18 remove" title="Remove" data-id="{{ $fee_type->id }}">
                                    <i class="fa fa-trash-o"></i>
                                </a>
                            </td>
                        @endif
                    </tr>
                    @endif
                    @endforeach
                </tbody>

            <!----------------------------------------------------------------PROGRAM---------------------------------------------------------------------->
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
                    @foreach ($dataJoin1 as $key=>$fee_type )
                    @if ($fee_type->type === 'Lead Facilitator')
                    <tr class="table-warning" id="rowLeadFaci{{++$efLeadfaci}}">
                        <td class="title table-light">
                            <input type="hidden" name="ce_id[]" value="{{$fee_type->id }}">
                            <input type="text" class="d-none" value="{{ $fee_type->type }}" name="fee_type[]" >
                            {{ $fee_type->type }}</td>
                        <td>
                            <input type="number" class="form-control input-table @error('') is-invalid @enderror"
                                value="{{ $fee_type->consultant_num }}" name="fee_consultant_num[]" id="ef_LeadfacilitatorNoc{{$efLeadfaci}}"
                                oninput="document.getElementById('ec_LeadfacilitatorNoc{{$efLeadfaci}}').value = document.getElementById('ef_LeadfacilitatorNoc{{$efLeadfaci}}').value;" 
                                max="100">
                        </td>
                        <td class="noc">
                            <div class="form-group has-icon-right mb-0" id="inputLeadfaci1" style="display:none">
                                <div class="position-relative">
                                    <input type="text" class="form-control input-table @error('') is-invalid @enderror" value="{{ old('') }}"
                                        value="{{ $fee_type->hour_fee }}" name="fee_hour_fee[]" id="ef_InputLeadFaciHf{{$efLeadfaci}}" data-type="currency" disabled>
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
                                    name="fee_hour_fee[]" id="ef_LeadfacilitatorHf{{$efLeadfaci}}"
                                    data-mytooltip-content="<i>&#8369;10,000 - For Key Accounts w/ 2021 contract <br>
                                        &#8369;11,000 - For Key Accounts with minimum guaranteed 50 sessions w/in 6 months <br>
                                        &#8369;12,000 - all else</i>"
                                    data-mytooltip-theme="dark" data-mytooltip-action="focus"
                                    data-mytooltip-direction="right" style="background-color:#ffcccc; color:red;">
                                    <option value="₱10,000" {{ $fee_type->hour_fee == '₱10,000' ? 'selected="selected"' : '' }}>
                                        &#8369;10,000
                                    </option>
                                    <option value="₱11,000" {{ $fee_type->hour_fee == '₱11,000' ? 'selected="selected"' : '' }}>
                                        &#8369;11,000
                                    </option>
                                    <option value="₱12,000" {{ $fee_type->hour_fee == '₱12,000' ? 'selected="selected"' : '' }}
                                        selected>
                                        &#8369;12,000
                                    </option>
                                    <option value="others" {{ $fee_type->hour_fee == 'others' ? 'selected="selected"' : '' }}
                                    id="others1" onclick="document.getElementById('ef_InputLeadFaciHf{{$efLeadfaci}}').focus()">
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
                        <td class="noh">
                            <input type="number"
                                class="input js-mytooltip form-control input-table @error('') is-invalid @enderror"
                                value="{{ $fee_type->hour_num }}" name="fee_hour_num[]" id="ef_LeadfacilitatorNoh{{$efLeadfaci}}"
                                oninput="document.getElementById('ec_LeadfacilitatorNoh{{$efLeadfaci}}').value = document.getElementById('ef_LeadfacilitatorNoh{{$efLeadfaci}}').value;"
                                data-mytooltip-content="<i>Number of Hours</i>" data-mytooltip-theme="dark"
                                data-mytooltip-action="focus" data-mytooltip-direction="bottom">
                        </td>
                        <td class="nwh">
                            <input type="number" class="form-control input-table @error('') is-invalid @enderror"
                                value="{{ $fee_type->nswh }}" name="fee_nswh[]" id="ef_LeadfacilitatorNwh{{$efLeadfaci}}"
                                oninput="document.getElementById('ec_LeadfacilitatorNwh{{$efLeadfaci}}').value = document.getElementById('ef_LeadfacilitatorNwh{{$efLeadfaci}}').value;">
                            <input type="text" class="nswh-percent-value" value="{{ $fee_type->nswh_percent }}" name="nswh_percent[]" hidden>
                        </td>
                        <td class="table-light total-td">
                            <h4 class="text-center lead" id="subtotal-lead">-</h4>
                        </td>
                        <td class="table-light total-td">
                            <textarea class="form-control input-table @error('') is-invalid @enderror"
                                name="fee_notes[]" id="" rows="2" cols="55">{{$fee_type->notes}}</textarea>
                        </td>
                        @if ($efLeadfaci === 1)
                            <td style="background-color: #FFFFFF;" class="border border-white">
                                <a href="javascript:void(0)" class="text-success font-18" title="Add"id="addBtn4" onclick="$('#EcAddBtn4').trigger('click');">
                                    <i class="fa fa-plus"></i>
                                </a>
                            </td>
                        @else
                            <td class="border border-white" style="background-color: #FFFFFF;">
                                <a href="javascript:void(0)" class="text-danger font-18 remove" title="Remove" data-id="{{ $fee_type->id }}">
                                    <i class="fa fa-trash-o"></i>
                                </a>
                            </td>
                        @endif
                    </tr>
                    @endif
                    @endforeach
                </tbody>

                <tbody id="tableCofaci">
                    @foreach ($dataJoin1 as $key=>$fee_type )
                    @if ($fee_type->type === 'Co-facilitator / Resource Speaker')
                    <tr class="table-warning" id="efCofaci{{++$efCofaci}}">
                        <td class="title table-light">
                            <input type="hidden" name="ce_id[]" value="{{$fee_type->id }}">
                            <input type="text" class="d-none" value="{{ $fee_type->type }}" name="fee_type[]" >
                            {{ $fee_type->type }}
                        </td>
                        <td class="noc">
                            <input type="number" class="form-control input-table @error('') is-invalid @enderror"
                                value="{{ $fee_type->consultant_num }}" name="fee_consultant_num[]" id="ef_CofaciNoc{{$efCofaci}}"
                                oninput="document.getElementById('ec_CofaciNoc{{$efCofaci}}').value = document.getElementById('ef_CofaciNoc{{$efCofaci}}').value;"
                                max="100">
                        </td>
                        <td>
                            <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                value="{{ $fee_type->hour_fee }}" name="fee_hour_fee[]" id="ef_CofaciHf" data-type="currency">
                        </td>
                        <td class="noh">
                            <input type="number"
                                class="input js-mytooltip form-control input-table @error('') is-invalid @enderror"
                                value="{{ $fee_type->hour_num }}" name="fee_hour_num[]" id="ef_CofaciNoh{{$efCofaci}}"
                                oninput="document.getElementById('ec_CofaciNoh{{$efCofaci}}').value = document.getElementById('ef_CofaciNoh{{$efCofaci}}').value;"
                                data-mytooltip-content="<i>Number of Hours</i>" data-mytooltip-theme="dark"
                                data-mytooltip-action="focus" data-mytooltip-direction="bottom">
                        </td>
                        <td class="nwh">
                            <input type="number" class="form-control input-table @error('') is-invalid @enderror"
                                value="{{ $fee_type->nswh }}" name="fee_nswh[]" id="ef_CofaciNwh{{$efCofaci}}"
                                oninput="document.getElementById('ec_CofaciNwh{{$efCofaci}}').value = document.getElementById('ef_CofaciNwh{{$efCofaci}}').value;">
                            <input type="text" class="nswh-percent-value" value="{{ $fee_type->nswh_percent }}" name="nswh_percent[]" hidden>
                        </td>
                        <td class="table-light total-td">
                            <h4 class="text-center lead" id="subtotal-coFacilitator">-</h4>
                        </td>
                        <td class="table-light total-td">
                            <textarea class="form-control input-table @error('') is-invalid @enderror"
                                name="fee_notes[]" id="" rows="2" cols="55">{{$fee_type->notes}}</textarea>
                        </td>
                        @if ($efCofaci === 1)
                            <td style="background-color: #FFFFFF;" class="border border-white">
                                <a href="javascript:void(0)" class="text-success font-18" title="Add" id="addBtn5" onclick="$('#EcAddBtn5').trigger('click');">
                                    <i class="fa fa-plus"></i>
                                </a>
                            </td>
                        @else
                            <td class="border border-white" style="background-color: #FFFFFF;">
                                <a href="javascript:void(0)" class="text-danger font-18 remove" title="Remove" data-id="{{ $fee_type->id }}">
                                    <i class="fa fa-trash-o"></i>
                                </a>
                            </td>
                        @endif
                    </tr>
                    @endif
                    @endforeach
                </tbody>

                <tbody id="tableModerator">
                    @foreach ($dataJoin1 as $key=>$fee_type )
                    @if ($fee_type->type === 'Moderator')
                    <tr class="table-warning" id="efModeratorRow{{++$efModerator}}">
                        <td class="title table-light">
                            <input type="hidden" name="ce_id[]" value="{{$fee_type->id }}">
                            <input type="text" class="d-none" value="{{ $fee_type->type }}" name="fee_type[]" >
                            {{ $fee_type->type }}
                        </td>
                        <td class="noc">
                            <input type="number" class="form-control input-table @error('') is-invalid @enderror"
                                value="{{ $fee_type->consultant_num }}" name="fee_consultant_num[]" id="ef_ModeratorNoc{{$efModerator}}"
                                oninput="document.getElementById('ec_ModeratorNoc{{$efModerator}}').value = document.getElementById('ef_ModeratorNoc{{$efModerator}}').value;"
                                max="100">
                        </td>
                        <td>
                            <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                value="{{ $fee_type->hour_fee }}" name="fee_hour_fee[]" id="ef_ModeratorHf"
                                data-type="currency">
                        </td>
                        <td class="noh">
                            <input type="number"
                                class="input js-mytooltip form-control input-table @error('') is-invalid @enderror"
                                value="{{ $fee_type->hour_num }}" name="fee_hour_num[]" id="ef_ModeratorNoh{{$efModerator}}"
                                oninput="document.getElementById('ec_ModeratorNoh{{$efModerator}}').value = document.getElementById('ef_ModeratorNoh{{$efModerator}}').value;"
                                data-mytooltip-content="<i>Number of Hours</i>" data-mytooltip-theme="dark"
                                data-mytooltip-action="focus" data-mytooltip-direction="bottom">
                        </td>
                        <td class="nwh">
                            <input type="number" class="form-control input-table @error('') is-invalid @enderror"
                                value="{{ $fee_type->nswh }}" name="fee_nswh[]" id="ef_ModeratorNwh{{$efModerator}}"
                                oninput="document.getElementById('ec_ModeratorNwh{{$efModerator}}').value = document.getElementById('ef_ModeratorNwh{{$efModerator}}').value;">
                            <input type="text" class="nswh-percent-value" value="{{ $fee_type->nswh_percent }}" name="nswh_percent[]" hidden>
                        </td>
                        <td class="table-light total-td">
                            <h4 class="text-center lead" id="subtotal-moderator">-</h4>
                        </td>
                        <td class="table-light total-td">
                            <textarea class="form-control input-table @error('') is-invalid @enderror"
                                name="fee_notes[]" id="" rows="2" cols="55">{{$fee_type->notes}}</textarea>
                        </td>
                        @if ($efModerator === 1)
                            <td style="background-color: #FFFFFF;" class="border border-white">
                                <a href="javascript:void(0)" class="text-success font-18" title="Add" id="addBtn6" onclick="$('#EcAddBtn6').trigger('click');">
                                    <i class="fa fa-plus"></i></a>
                            </td>
                        @else
                            <td class="border border-white" style="background-color: #FFFFFF;">
                                <a href="javascript:void(0)" class="text-danger font-18 remove" title="Remove" data-id="{{ $fee_type->id }}">
                                    <i class="fa fa-trash-o"></i>
                                </a>
                            </td>
                        @endif
                    </tr>
                    @endif
                    @endforeach
                </tbody>

                <tbody id="tableProducer">
                    @foreach ($dataJoin1 as $key=>$fee_type )
                    @if ($fee_type->type === 'Producer')
                    <tr class="table-warning" id="efProducerRow{{++$efProducer}}">
                        <td class="title table-light">
                            <input type="hidden" name="ce_id[]" value="{{$fee_type->id }}">
                            <input type="text" class="d-none" value="{{ $fee_type->type }}" name="fee_type[]" >
                            {{ $fee_type->type }}
                        </td>
                        <td class="noc">
                            <input type="number" class="form-control input-table @error('') is-invalid @enderror"
                                value="{{ $fee_type->consultant_num }}" name="fee_consultant_num[]" id="ef_ProducerNoc{{$efProducer}}"
                                oninput="document.getElementById('ec_ProducerNoc{{$efProducer}}').value = document.getElementById('ef_ProducerNoc{{$efProducer}}').value;"
                                max="100">
                        </td>
                        <td>
                            <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                value="{{ $fee_type->hour_fee }}" name="fee_hour_fee[]" id="ef_ProducerHf" data-type="currency">
                        </td>
                        <td class="noh">
                            <input type="number"
                                class="input js-mytooltip form-control input-table @error('') is-invalid @enderror"
                                value="{{ $fee_type->hour_num }}" name="fee_hour_num[]" id="ef_ProducerNoh{{$efProducer}}"
                                oninput="document.getElementById('ec_ProducerNoh{{$efProducer}}').value = document.getElementById('ef_ProducerNoh{{$efProducer}}').value;"
                                data-mytooltip-content="<i>Number of Hours</i>" data-mytooltip-theme="dark"
                                data-mytooltip-action="focus" data-mytooltip-direction="bottom">
                        </td>
                        <td class="nwh">
                            <input type="number" class="form-control input-table @error('') is-invalid @enderror"
                                value="{{ $fee_type->nswh }}" name="fee_nswh[]" id="ef_ProducerNwh{{$efProducer}}"
                                oninput="document.getElementById('ec_ProducerNwh{{$efProducer}}').value = document.getElementById('ef_ProducerNwh{{$efProducer}}').value;">
                            <input type="text" class="nswh-percent-value" value="{{ $fee_type->nswh_percent }}" name="nswh_percent[]" hidden>
                        </td>
                        <td class="table-light total-td">
                            <h4 class="text-center lead" id="subtotal-producer">-</h4>
                        </td>
                        <td class="table-light total-td">
                            <textarea class="form-control input-table @error('') is-invalid @enderror"
                                name="fee_notes[]" id="" rows="2" cols="55">{{$fee_type->notes}}</textarea>
                        </td>
                        @if($efProducer === 1)
                            <td style="background-color: #FFFFFF;" class="border border-white">
                                <a href="javascript:void(0)" class="text-success font-18" title="Add" id="addBtn7" onclick="$('#EcAddBtn7').trigger('click');">
                                    <i class="fa fa-plus"></i>
                                </a>
                            </td>
                        @else
                            <td class="border border-white" style="background-color: #FFFFFF;">
                                <a href="javascript:void(0)" class="text-danger font-18 remove" title="Remove" data-id="{{ $fee_type->id }}">
                                    <i class="fa fa-trash-o"></i>
                                </a>
                            </td>
                        @endif
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

            <!----------------------------------------------------------------OTHER ROLES---------------------------------------------------------------------->
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
                    @foreach ($dataJoin1 as $key=>$fee_type )
                    @if ($fee_type->type === 'Documentor')
                    <tr class="table-warning" id="rowDocumentor{{++$efDocumentor}}">
                        <td class="table-light title">
                            <input type="hidden" name="ce_id[]" value="{{$fee_type->id }}">
                            <input type="text" class="d-none" value="{{ $fee_type->type }}" name="fee_type[]" >
                            {{ $fee_type->type }}
                        </td>
                        <td class="noc">
                            <input type="number" class="form-control input-table @error('') is-invalid @enderror"
                                value="{{ $fee_type->consultant_num }}" name="fee_consultant_num[]" id="ef_DocumentorNoc{{$efDocumentor}}"
                                oninput="document.getElementById('ec_DocumentorNoc{{$efDocumentor}}').value = document.getElementById('ef_DocumentorNoc{{$efDocumentor}}').value;" 
                                max="100">
                        </td>
                        <td>
                            <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                value="{{ $fee_type->hour_fee }}" name="fee_hour_fee[]" id="ef_DocumentorHf"
                                data-type="currency">
                        </td>
                        <td class="noh">
                            <input type="number"
                                class="input js-mytooltip form-control input-table @error('') is-invalid @enderror"
                                value="{{ $fee_type->hour_num }}" name="fee_hour_num[]" id="ef_DocumentorNoh{{$efDocumentor}}"
                                oninput="document.getElementById('ec_DocumentorNoh{{$efDocumentor}}').value = document.getElementById('ef_DocumentorNoh{{$efDocumentor}}').value;" 
                                data-mytooltip-content="<i>Number of Hours</i>" data-mytooltip-theme="dark"
                                data-mytooltip-action="focus" data-mytooltip-direction="bottom">
                        </td>
                        <td class="nwh">
                            <input type="number" class="form-control input-table @error('') is-invalid @enderror"
                                value="{{ $fee_type->nswh }}" name="fee_nswh[]" id="ef_DocumentorNwh{{$efDocumentor}}"
                                oninput="document.getElementById('ec_DocumentorNwh{{$efDocumentor}}').value = document.getElementById('ef_DocumentorNwh{{$efDocumentor}}').value;" >
                            <input type="text" class="nswh-percent-value" value="{{ $fee_type->nswh_percent }}" name="nswh_percent[]" hidden>
                        </td>
                        <td class="table-light total-td" style="background-color: rgba(146, 146, 146, 0.727">
                            <h4 class="text-center" id="subtotal-documentor">-</h4>
                        </td>
                        <td class="table-light total-td">
                            <textarea class="form-control input-table @error('') is-invalid @enderror"
                                name="fee_notes[]" id="" rows="2" cols="55">{{$fee_type->notes}}</textarea>
                        </td>
                        @if($efDocumentor === 1)
                        <td style="background-color: #FFFFFF;" class="border border-white">
                            <a href="javascript:void(0)" class="text-success font-18" title="Add" id="addBtn8" onclick="$('#EcAddBtn8').trigger('click');">
                                <i class="fa fa-plus"></i>
                            </a>
                        </td>
                        @else
                            <td class="border border-white" style="background-color: #FFFFFF;">
                                <a href="javascript:void(0)" class="text-danger font-18 remove" title="Remove" data-id="{{ $fee_type->id }}">
                                    <i class="fa fa-trash-o"></i>
                                </a>
                            </td>
                        @endif
                    </tr>
                    @endif
                    @endforeach
                </tbody>

            <!----------------------------------------------------------------TOTAL PACKAGE---------------------------------------------------------------------->
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

                @foreach ($dataJoin1 as $key=>$fee_type )
                    @if ($fee_type->type === 'Discounts')
                        <tr class="table-active">
                            <td class="table-light fw-bold text-dark text-uppercase fst-italic overall-total-start">
                                <input type="hidden" name="ce_id[]" value="{{$fee_type->id }}">
                                <input type="text" class="d-none" value="{{$fee_type->type}}" name="fee_type[]" >
                                <b>Discount given (if any)</b>
                            </td>
                            <td class="overall-total-middle">
                                <input type="text" class="d-none" value="" name="fee_consultant_num[]" >
                            </td>
                            <td class="overall-total-middle table-warning">
                                <input type="text"
                                    class="hf-c32 form-control input-table text-center @error('') is-invalid @enderror"
                                    value="{{$fee_type->hour_fee}}" name="fee_hour_fee[]" id="input-discount" >
                            </td>
                            <td class="overall-total-middle">
                                <input type="text" class="d-none" value="" name="fee_hour_num[]" >
                            </td>
                            <td class="overall-total-middle">
                                <input type="text" class="d-none" value="" name="fee_nswh[]" >
                            </td>
                            <td class="overall-total-end"></td>
                            <td class="overall-total-end">
                                <textarea class="form-control input-table @error('') is-invalid @enderror"
                                    name="fee_notes[]" id="" rows="2" cols="55">{{$fee_type->notes}}</textarea>
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
                            value="{{ $data->Engagement_fees_total }}" name="engagement_fees_total" id="ef_Totalpackage" data-type="currencyTotal"
                            style="font-size: 22px;">
                    </td>
                    <td class="overall-total-end"></td>
                </tr>
                </tbody>
            </table>
        </div>
    </section>
</div>
<!---------- END OF FORM BODY ---------->

@include('form.components.customized_engagement.update.script.ce_update_fees')
