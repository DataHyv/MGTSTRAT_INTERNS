<hr>
<div class="card-header">
    <h4 class="card-title">Engagement Fees</h4>
</div>
<div class="form-body container">
    <section>
        <div class="table-responsive-md" id="no-more-tables">
            <table class="table table-bordered table-hover">
                <thead class="table-dark">
                    <tr class="text-center">
                        <th class="title-th" scope="col" width=20%></th>
                        <th class="title-middle" scope="col" style="font-size: 0.9rem;">NUMBER OF CONSULTANTS</th>
                        <th class="title-middle px-4" width=15% scope="col">PER DAY FEES</th>
                        <th class="title-middle" scope="col" style="font-size: 0.9rem;">NUMBER OF DAYS</th>
                        <th class="title-middle" scope="col" style="font-size: 0.9rem;">ADDITIONAL TRAVEL DAYS *</th>
                        <th class="title-middle" scope="col" style="font-size: 0.9rem;" width=10%>NIGHT SHIFT, WEEKENDS HOLIDAYS *</th>
                        <th class="title-th" scope="col" width=15%>TOTAL FEE</th>
                        <th class="title-th" scope="col" width=15%>NOTES</th>
                    </tr>
                </thead>
        
           
                    {{-- Consulting --}}
                    <tr class="">
                        <th class="px-4 title text-dark">1. CONSULTING</th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th class="total-td"></th>
                        <th class="total-td"></th>
                    </tr>
                    <tbody id="tableLeadconsultant">
                    <tr class="table-warning" id="leadConsultant">
                        <td class="title">Lead Consultant</td>
                        <td data-title="# OF CONSULTANTS">
                            <input type="number" class="input js-mytooltip input-table form-control  @error('') is-invalid @enderror"
                                value="{{ old('') }}" 
                                name="ef_Leadconsultant1[]" 
                                id="ef_LeadconsultantNoc1" 
                                title="" 
                                max="100"
                                data-mytooltip-content="<i>Includes in depth needs analysis (i.e. surveys, interviews, FGDs),
                                special research (i.e. to study client materials or client -required materials, industry
                                or function specific content), creation of client-specific learning aids/tools
                                (i.e. assessments, c</i>"
                                data-mytooltip-theme="dark"
                                data-mytooltip-action="focus" 
                                data-mytooltip-direction="bottom">
                        </td>
                        <td>
                            <fieldset>
                                <select class="form-select hf-c13 input js-mytooltip @error('') is-invalid @enderror"
                                    name="ef_Leadconsultant1[]" 
                                    id="ef_LeadconsultantHf"
                                    data-mytooltip-content="<i>P56,000 - Consultants<br>
                                        P72,000 - Senior Consultants<br>
                                        Key Accounts<br>
                                        P50,400 - Consultants, min guaranteed 10 consulting days<br>
                                        P45,000 - Seniuor Consultants, min. guaranteed 10 consulting days</i>"
                                    data-mytooltip-theme="dark"
                                    data-mytooltip-action="focus" 
                                    data-mytooltip-direction="right" 
                                    style="background-color:#ffcccc; color:red;">
                                    <option value="50400" {{ old('') == '50400' ? 'selected="selected"' : '' }}>
                                        &#8369;50,400
                                    </option>
                                    <option value="56000" {{ old('') == '56000' ? 'selected="selected"' : '' }} selected>
                                        &#8369;56,000
                                    </option>
                                    <option value="64800" {{ old('') == '64800' ? 'selected="selected"' : '' }}>
                                        &#8369;64,800
                                    </option>
                                    <option value="72000" {{ old('') == '72000' ? 'selected="selected"' : '' }}>
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
                        <td>
                            <input type="number" class=" form-control input-table input js-mytooltip @error('') is-invalid @enderror" 
                                value="{{ old('') }}" 
                                name="ef_Leadconsultant1[]" 
                                id="ef_LeadconsultantNoh1"
                                data-mytooltip-content="<i>½ Day = 0.50<br>
                                    ¼ Day = 0.25 </i>"
                                data-mytooltip-theme="dark"
                                data-mytooltip-action="focus" 
                                data-mytooltip-direction="bottom">
                        </td>
                        <td>
                            <input type="number" class=" form-control input-table input @error('') is-invalid @enderror" 
                                value="{{ old('') }}" id="ef_LeadconsultantAtd1" name="ef_Leadconsultant1[]">
                        </td>

                        <td>
                            <input type="number" class=" form-control input-table @error('') is-invalid @enderror" 
                                value="{{ old('') }}" name="ef_Leadconsultant1[]" id="ef_LeadconsultantNwh1">
                        </td>
                        <td class="total-td">
                                <h4 class="text-center lead" id="leadTotal">-</h4>
                        </td>
                        <td class="total-td">
                            <input type="text" class="form-control input-table @error('') is-invalid @enderror" 
                                value="{{ old('') }}"name="" id="">
                        </td>
                        <td style="background-color: #FFFFFF;" class="border border-white"><a href="javascript:void(0)"
                            class="text-success font-18" title="Add" id="addBtn1"><i class="fa fa-plus"></i></a>
                        </td>
                    </tr>
                    </tbody>
        {{-- Analyst --}}
        <tbody id="ef_TableAnalyst">
                    <tr class="table-warning" id="ef_RowAnalyst">
                        <td class="title">Analyst</td>
                        <td>
                            <input type="number" class=" input js-mytooltip form-control input-table @error('') is-invalid @enderror" 
                                value="{{ old('') }}" 
                                name="" 
                                id="ef_AnalystNoc1" 
                                max="100"
                                data-mytooltip-content="<i>Includes in depth needs analysis (i.e. surveys, interviews, FGDs),
                                special research (i.e. to study client materials or client -required materials, industry
                                or function specific content), creation of client-specific learning aids/tools
                                (i.e. assessments, c</i>"
                                data-mytooltip-theme="dark"
                                data-mytooltip-action="focus" 
                                data-mytooltip-direction="bottom">
                        </td>
                        
                        <td>
                            <input type="text" class="form-control input-table @error('') is-invalid @enderror" 
                                value="{{ old('') }}" name="" id="ef_AnalystPdf" data-type="currency">
                        </td>
                        <td>
                            <input type="number" class=" input js-mytooltip form-control input-table @error('') is-invalid @enderror" 
                                value="{{ old('') }}" 
                                name="" 
                                id="ef_AnalystNod1"
                                data-mytooltip-content="<i>½ Day = 0.50<br>
                                                           ¼ Day = 0.25 Number of Hours</i>"
                                data-mytooltip-theme="dark"
                                data-mytooltip-action="focus" 
                                data-mytooltip-direction="bottom">
                        </td>
                        <td>
                            <input type="number" class="nwh-e14 form-control input-table @error('') is-invalid @enderror" 
                                value="{{ old('') }}" name="" id="ef_AnalystAtd1">
                        </td>
                        <td>
                            <input type="number" class="nwh-e14 form-control input-table @error('') is-invalid @enderror" 
                                value="{{ old('') }}" name="" id="ef_AnalystNsw1">
                        </td>
                        <td class="total-td">
                            {{-- <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" 
                                name="" id="" disabled> --}}
                                <h4 class="text-center lead" id="analyst-total">-</h4>
                        </td>
                        <td class="total-td">
                            <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="" id="ef_AnalystNotes">
                        </td>
                        <td style="background-color: #FFFFFF;" class="border border-white"><a href="javascript:void(0)"
                            class="text-success font-18" title="Add" id="addBtn2"><i class="fa fa-plus"></i></a>
                        </td>
                    </tr>
        </tbody>
                    <tr class="">
                        <td class="title fw-bold text-dark fst-italic">Subtotal</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td class="total-td" style="background-color: rgba(146, 146, 146, 0.727)">
                            <h4 class="text-center" id="subtotalConsulting">-</h4>
                        </td>
                        <td class="total-td">
                            <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" 
                                name="" id="">
                        </td>
                    </tr>
        
                    {{-- Design --}}
                    <tr class="">
                        <th class="title px-4 text-dark">2. DESIGN</th>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td class="total-td"></td>
                        <td class="total-td"></td>
                    </tr>
        <tbody id="ef_TableDesigner">
                    <tr class="table-warning" id="ef_RowDesigner">
                        <td class="title">Designer</td>
                        <td>
                            <input type="number" class="noc-b18 input js-mytooltip form-control input-table @error('') is-invalid @enderror" 
                                value="{{ old('') }}" 
                                name="" 
                                id="ef_DesignerNoc1" 
                                max="100"
                                data-mytooltip-content="<i>Includes in depth needs analysis (i.e. surveys, interviews, FGDs),
                                special research (i.e. to study client materials or client -required materials, industry
                                or function specific content), creation of client-specific learning aids/tools
                                (i.e. assessments, c</i>"
                                data-mytooltip-theme="dark"
                                data-mytooltip-action="focus" 
                                data-mytooltip-direction="bottom">
                        </td>
                        <td>
                            <fieldset>
                                <select class="hf-c18 input js-mytooltip form-select @error('') is-invalid @enderror select"
                                    name="" 
                                    id="ef_DesignerPdf"
                                    data-mytooltip-content="<i>P48,000 - Consultants<br>
                                        P64,000 - Senior Consultants</i>"
                                    data-mytooltip-theme="dark"
                                    data-mytooltip-action="focus" 
                                    data-mytooltip-direction="right" 
                                    style="background-color:#ffcccc; color:red;">
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
                        <td>
                            <input type="number" class="noh-d18 input js-mytooltip form-control input-table @error('') is-invalid @enderror" 
                                value="{{ old('') }}" 
                                name="" 
                                id="ef_DesignerNod1"
                                data-mytooltip-content="<i>½ Day = 0.50<br>
                                    ¼ Day = 0.25 <br>Number of Hours</i>"
                                data-mytooltip-theme="dark"
                                data-mytooltip-action="focus" 
                                data-mytooltip-direction="bottom">
                        </td>
                        <td>
                            <input type="number" class="nwh-e18 form-control input-table @error('') is-invalid @enderror" 
                                value="{{ old('') }}" name="" id="ef_DesignerAtd1">
                        </td>
                        <td>
                            <input type="number" class="nwh-e18 form-control input-table @error('') is-invalid @enderror" 
                                value="{{ old('') }}" name="" id="ef_DesignerNsw1">
                        </td>
                        <td class="total-td" style="background-color: rgba(146, 146, 146, 0.727)">
                                <h4 class="text-center" id="subtotal-design">-</h4>
                        </td>
                        <td class="total-td">
                            <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="" id="">
                        </td>
                        <td style="background-color: #FFFFFF;" class="border border-white"><a href="javascript:void(0)"
                            class="text-success font-18" title="Add" id="addBtn3"><i class="fa fa-plus"></i></a>
                        </td>
                    </tr>
        </tbody>
                    {{-- Program --}}
        
                 <tr class="">
                        <th class="title px-4 text-dark">3. PROGRAM</th>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td class="total-td"></td>
                        <td class="total-td"></td>
                    </tr>
        <tbody id="ef_TableLeadFaci">
                    <tr class="table-warning" id="ef_RowLeadFaci">
                        <td class="title">Lead Facilitator</td>
                        <td>
                            <input type="number" class="noc-b21 form-control input-table @error('') is-invalid @enderror" 
                                value="{{ old('') }}" name="" id="ef_LeadFaciNoc1" max="100">
                        </td>
                        <td>
                            <input type="text" class="form-control js-mytooltip input-table @error('') is-invalid @enderror" 
                                value="{{ old('') }}" name="" id="ef_LeadFaciPdf"
                                data-mytooltip-content="<i>P80,000 - Key Accounts with min guaranteed 30 full day programs<br>
                                    P88,000 - Non-key accounts signed on or before Apr 30, 2022<br>
                                    P96,000 - Effective May 1, 2022</i>"
                                data-mytooltip-theme="dark"
                                data-mytooltip-action="focus" 
                                data-mytooltip-direction="bottom">
                        </td>
                        <td>
                            <input type="number" class="noh-d21 input js-mytooltip form-control input-table @error('') is-invalid @enderror" 
                                value="{{ old('') }}" 
                                name="" 
                                id="ef_LeadFaciNod1"
                                data-mytooltip-content="<i>½ Day = 0.70</i>"
                                data-mytooltip-theme="dark"
                                data-mytooltip-action="focus" 
                                data-mytooltip-direction="bottom">
                        </td>
                        <td>
                            <input type="number" class="nwh-e21 form-control input-table @error('') is-invalid @enderror" 
                                value="{{ old('') }}" name="" id="ef_LeadFaciAtd1">
                        </td>
                        <td>
                            <input type="number" class="nwh-e21 form-control input-table @error('') is-invalid @enderror" 
                                value="{{ old('') }}" name="" id="ef_LeadFaciNsw1">
                        </td>
                        <td class="total-td">
                                <h4 class="text-center lead" id="subtotal-LeadFaci">-</h4>
                        </td>
                        <td class="total-td">
                            <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="" id="">
                        </td>
                        <td style="background-color: #FFFFFF;" class="border border-white"><a href="javascript:void(0)"
                            class="text-success font-18" title="Add" id="addBtn4"><i class="fa fa-plus"></i></a>
                        </td>
                    </tr>
        </tbody>
        <tbody id="ef_TableCoFaci">
                    <tr class="table-warning" id="ef_RowCoFaci">
                        <td class="title">Co-facilitator / Resource Speaker</td>
                        <td>
                            <input type="number" class="noc-b22 form-control input-table @error('') is-invalid @enderror" 
                                value="{{ old('') }}" name="" id="ef_CoFaciNoc1" max="100">
                        </td>
                        <td>
                            <input type="text" class="hf-c22 form-control input-table @error('') is-invalid @enderror" 
                                value="{{ old('') }}" name="" id="ef_CoFaciPdf";
                                data-mytooltip-content="<i>½ Day = 0.70</i>"
                                data-mytooltip-theme="dark"
                                data-mytooltip-action="focus" 
                                data-mytooltip-direction="bottom">
                        </td>
                        <td>
                            <input type="number" class="noh-d22 input js-mytooltip form-control input-table @error('') is-invalid @enderror" 
                                value="{{ old('') }}" 
                                name="" 
                                id="ef_CoFaciNod1"
                                data-mytooltip-content="<i>½ Day = 0.70</i>"
                                data-mytooltip-theme="dark"
                                data-mytooltip-action="focus" 
                                data-mytooltip-direction="bottom">
                        </td>
                        <td>
                            <input type="number" class="nwh-e22 form-control input-table @error('') is-invalid @enderror" 
                                value="{{ old('') }}" name="" id="ef_CoFaciAtd1">
                        </td>
                        <td>
                            <input type="number" class="nwh-e22 form-control input-table @error('') is-invalid @enderror" 
                                value="{{ old('') }}" name="" id="ef_CoFaciNsw1">
                        </td>
                        <td class="total-td">
                                <h4 class="text-center lead" id="subtotal-coFacilitator">-</h4>
                        </td>
                        <td class="total-td">
                            <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="" id="">
                        </td>
                        <td style="background-color: #FFFFFF;" class="border border-white"><a href="javascript:void(0)"
                            class="text-success font-18" title="Add" id="addBtn5"><i class="fa fa-plus"></i></a>
                        </td>
                    </tr>
        </tbody>
        <tbody id="ef_TableActionLearn">
                    <tr class="table-warning" id="ef_RowActionLearn">
                        <td class="title">Action Learning Coach</td>
                        <td>
                            <input type="number" class="noc-b23 form-control input-table @error('') is-invalid @enderror" 
                                value="{{ old('') }}" name="" id="ef_ActionLearnNoc1" max="100">
                        </td>
                        <td>
                            <input type="text" class="hf-c22 form-control input-table @error('') is-invalid @enderror" 
                                value="{{ old('') }}" name="" id="ef_ActionLearnPdf";>
                        </td>
                        <td>
                            <input type="number" class="noh-d23 input js-mytooltip form-control input-table @error('') is-invalid @enderror" 
                                value="{{ old('') }}" 
                                name="" 
                                id="ef_ActionLearnNod1"
                                data-mytooltip-content="<i>½ Day = 0.70</i>"
                                data-mytooltip-theme="dark"
                                data-mytooltip-action="focus" 
                                data-mytooltip-direction="bottom">
                        </td>
                        <td>
                            <input type="number" class="nwh-e23 form-control input-table @error('') is-invalid @enderror" 
                                value="{{ old('') }}" name="" id="ef_ActionLearnAtd1">
                        </td>
                        <td>
                            <input type="number" class="nwh-e23 form-control input-table @error('') is-invalid @enderror" 
                                value="{{ old('') }}" name="" id="ef_ActionLearnNsw1">
                        </td>
                        <td class="total-td">
                                <h4 class="text-center lead" id="subtotal-ActionLearn">-</h4>
                        </td>
                        <td class="total-td">
                            <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="" id="">
                        </td>
                        <td style="background-color: #FFFFFF;" class="border border-white"><a href="javascript:void(0)"
                            class="text-success font-18" title="Add" id="addBtn6"><i class="fa fa-plus"></i></a>
                        </td>
                    </tr>
        </tbody>
        <tbody id="ef_TableMarshal">
                    <tr class="table-warning" id="ef_RowMarshal">
                        <td class="title">Marshal</td>
                        <td>
                            <input type="number" class="noc-b23 form-control input-table @error('') is-invalid @enderror" 
                                value="{{ old('') }}" name="" id="ef_MarshalNoc1" max="100">
                        </td>
                        <td>
                            <input type="text" class="hf-c22 form-control input-table @error('') is-invalid @enderror" 
                                value="{{ old('') }}" name="" id="ef_MarshalPdf";>
                        </td>
                        <td>
                            <input type="number" class="noh-d23 input js-mytooltip form-control input-table @error('') is-invalid @enderror" 
                                value="{{ old('') }}" 
                                name="" 
                                id="ef_MarshalNod1"
                                data-mytooltip-content="<i>½ Day = 0.70</i>"
                                data-mytooltip-theme="dark"
                                data-mytooltip-action="focus" 
                                data-mytooltip-direction="bottom">
                        </td>
                        <td>
                            <input type="number" class="nwh-e23 form-control input-table @error('') is-invalid @enderror" 
                                value="{{ old('') }}" name="" id="ef_MarshalAtd1">
                        </td>
                        <td>
                            <input type="number" class="nwh-e23 form-control input-table @error('') is-invalid @enderror" 
                                value="{{ old('') }}" name="" id="ef_MarshalNsw1">
                        </td>
                        <td class="total-td">
                                <h4 class="text-center lead" id="subtotal-marshal">-</h4>
                        </td>
                        <td class="total-td">
                            <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="" id="">
                        </td>
                        <td style="background-color: #FFFFFF;" class="border border-white"><a href="javascript:void(0)"
                            class="text-success font-18" title="Add" id="addBtn7"><i class="fa fa-plus"></i></a>
                        </td>
                    </tr>
        </tbody>
        <tbody id="ef_TableOnsite">
                    <tr class="table-warning" id="ef_RowOnsite">
                        <td class="title">On-site PC (P20K / P25K / P30K)</td>
                        <td>
                            <input type="number" class="noc-b23 form-control input-table @error('') is-invalid @enderror" 
                                value="{{ old('') }}" name="" id="ef_OnsiteNoc1" max="100">
                        </td>
                        <td>
                            <fieldset>
                                <select class="form-select hf-c13 input js-mytooltip @error('') is-invalid @enderror"
                                    name="" 
                                    id="ef_OnsitePdf"
                                    data-mytooltip-content="<i>P20,000 - simple indoor programs<br>
                                        P25,000 - roster with 6-10 members<br>
                                        P30,000 - roster with 11 members and up</i>"
                                    data-mytooltip-theme="dark"
                                    data-mytooltip-action="focus" 
                                    data-mytooltip-direction="right" 
                                    style="background-color:#ffcccc; color:red;">
                                    <option value="20,000" {{ old('') == '20,000' ? 'selected="selected"' : '' }} selected>
                                        &#8369;20,000
                                    </option>
                                    <option value="25,000" {{ old('') == '56,000' ? 'selected="selected"' : '' }} >
                                        &#8369;25,000
                                    </option>
                                    <option value="30,000" {{ old('') == '30,000' ? 'selected="selected"' : '' }}>
                                        &#8369;30,800
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
                            <input type="number" class="noh-d23 input js-mytooltip form-control input-table @error('') is-invalid @enderror" 
                                value="{{ old('') }}" 
                                name="" 
                                id="ef_OnsiteNod1"
                                data-mytooltip-content="<i>½ Day = 0.70</i>"
                                data-mytooltip-theme="dark"
                                data-mytooltip-action="focus" 
                                data-mytooltip-direction="bottom">
                        </td>
                        <td>
                            <input type="number" class="nwh-e23 form-control input-table @error('') is-invalid @enderror" 
                                value="{{ old('') }}" name="" id="ef_OnsiteAtd1">
                        </td>
                        <td>
                            <input type="number" class="nwh-e23 form-control input-table @error('') is-invalid @enderror" 
                                value="{{ old('') }}" name="" id="ef_OnsiteNsw1">
                        </td>
                        <td class="total-td">
                                <h4 class="text-center lead" id="subtotal-Onsite">-</h4>
                        </td>
                        <td class="total-td">
                            <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="" id="">
                        </td>
                        <td style="background-color: #FFFFFF;" class="border border-white"><a href="javascript:void(0)"
                            class="text-success font-18" title="Add" id="addBtn8"><i class="fa fa-plus"></i></a>
                        </td>
                    </tr>
        </tbody>
                    <tr class="">
                        <td class="title fw-bold text-dark fst-italic">Subtotal</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td class="total-td" style="background-color: rgba(146, 146, 146, 0.727)">
                            <h4 class="text-center" id="program-Subtotal">-</h4>
                        </td>
                        <td class="total-td">
                            <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" 
                                name="" id="">
                        </td>
                    </tr>

                    {{-- Program --}}
                    <tr class="">
                        <th class="title px-4 text-dark">4. OTHER ROLES</th>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td class="total-td"></td>
                        <td class="total-td"></td>
                    </tr>
            <tbody id="ef_TableDocumentor">
                    <tr class="table-warning" id="ef_RowDocumentor">
                        <td class="title">Documentor</td>
                        <td>
                            <input type="number" class="noc-b28 form-control input-table @error('') is-invalid @enderror" 
                                value="{{ old('') }}" name="" id="ef_DocumentorNoc1" max="100">
                        </td>
                        <td>
                            <input type="text" class="hf-c22 form-control input-table @error('') is-invalid @enderror" 
                                value="{{ old('') }}" name="" id="ef_DocumentorPdf";>
                        </td>
                        <td>
                            <input type="number" class="noh-d28 input js-mytooltip form-control input-table @error('') is-invalid @enderror" 
                                value="{{ old('') }}" 
                                name="" 
                                id="ef_DocumentorNod1"
                                data-mytooltip-content="<i>½ Day = 0.70</i>"
                                data-mytooltip-theme="dark"
                                data-mytooltip-action="focus" 
                                data-mytooltip-direction="bottom">
                        </td>
                        <td>
                            <input type="number" class="nwh-e28 form-control input-table @error('') is-invalid @enderror" 
                                value="{{ old('') }}" name="" id="ef_DocumentorAtd1">
                        </td>
                        <td>
                            <input type="number" class="nwh-e28 form-control input-table @error('') is-invalid @enderror" 
                                value="{{ old('') }}" name="" id="ef_DocumentorNsw1">
                        </td>
                        <td class="total-td" style="background-color: rgba(146, 146, 146, 0.727">
                                <h4 class="text-center" id="subtotal-Documentor">-</h4>
                        </td>
                        <td class="total-td">
                            <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="" id="">
                        </td>
                        <td style="background-color: #FFFFFF;" class="border border-white"><a href="javascript:void(0)"
                            class="text-success font-18" title="Add" id="addBtn9"><i class="fa fa-plus"></i></a>
                        </td>
                    </tr>
            </tbody>
                    <tr class="">
                        <th class="title px-4 text-dark">5. PER DIEM</th>
                        <td>
                            {{-- <input type="number" class="noc-b28 form-control input-table @error('') is-invalid @enderror" 
                                value="{{ old('') }}" name="" id="ef_PDNoc" max="100"> --}}
                        </td>
                        <td>
                            <input type="text" class="hf-c22 form-control input-table @error('') is-invalid @enderror" 
                                value="{{ old('') }}" name="" id="ef_PDPdf";>
                        </td>
                        <td>
                            <input type="number" class="noh-d28 input  form-control input-table @error('') is-invalid @enderror" 
                                value="{{ old('') }}" name="" id="ef_PDNod">
                        </td>
                        <td>
                            {{-- <input type="number" class="nwh-e28 form-control input-table @error('') is-invalid @enderror" 
                                value="{{ old('') }}" name="" id="ef_PDAtd"> --}}
                        </td>
                        <td>
                            {{-- <input type="number" class="nwh-e28 form-control input-table @error('') is-invalid @enderror" 
                                value="{{ old('') }}" name="" id="ef_PDNsw"> --}}
                        </td>
                        <td class="total-td" style="background-color: rgba(146, 146, 146, 0.727">
                                <h4 class="text-center" id="subtotal-PD">-</h4>
                        </td>
                        <td class="total-td">
                            <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="" id="">
                        </td>
                    </tr>
                    <tr class="table-active overall-total" style="border:3px solid black">
                        <td class="text-uppercase text-dark fst-italic fw-bold overall-total-start">TOTAL STANDARD FEES</td>
                        <td class="overall-total-middle"></td>
                        <td class="overall-total-middle"></td>
                        <td class="overall-total-middle"></td>
                        <td class="overall-total-middle"></td>
                        <td class="overall-total-middle"></td>
                        <td class="overall-total-end" style="background-color: rgba(146, 146, 146, 0.727)">
                            <h4 class="text-center fw-bold" id="standard_total">-</h4>
                        </td>
                        <td class="overall-total-end">
                            <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" 
                                name="" id="">
                        </td>
                    </tr>
                    <tr class="table-active" style="border:3px solid black">
                        <td class="fw-bold text-dark text-uppercase fst-italic overall-total-start">discount given (if any)</td>
                        <td class="overall-total-middle"></td>
                        <td class="overall-total-middle table-warning">
                            <input type="text" class="hf-c32 form-control input-table text-center @error('') is-invalid @enderror" 
                                value="{{ old('') }}" name="" id="inpt_dsct" readonly>
                        </td>
                        <td class="overall-total-middle"></td>
                        <td class="overall-total-middle"></td>
                        <td class="overall-total-middle"></td>
                        <td class="overall-total-end"></td>
                        <td class="overall-total-end">
                            <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}"  name="" id="total_dsct">
                        </td>
                    </tr>

                    <tr class="table-active" style="border:3px solid black">
                        <td class="fw-bold text-uppercase text-dark fst-italic overall-total-start">total package</td>
                        <td class="overall-total-middle"></td>
                        <td class="overall-total-middle"></td>
                        <td class="overall-total-middle"></td>
                        <td class="overall-total-middle"></td>
                        <td class="overall-total-middle"></td>
                        <td class="overall-total-end table-warning">
                            <input type="text" class="tf-f34 form-control text-center text-danger fw-bolder input-table @error('') is-invalid @enderror" 
                            value="{{ old('') }}" name="" id="input_totalPackages" style="font-size: 20px;">
                        </td>
                        <td class="overall-total-end">
                            <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="" id="">
                        </td>
                    </tr>

                    
                </tbody>
            </table>
            <p> * TRAVEL DAYS/NIGHT SHIFT/WEEKENDS/HOLIDAYS - no double charging for the same day I.e. Saturday night travel is only charged one 20% surcharge</p>
        </div>
    </section>
</div>

<script>
$('input[type="number"]').on('input', function () {
    this.value = !!this.value && Math.abs(this.value) >= 0 ? Math.abs(this.value) : null
});

$('input[type="number"]').attr('min', '0');


var rowIndx = 1;
    // $("#addBtn1").on("click", function() {
    $("#addBtn1").on("click", function() {
        // Adding a row inside the tbody.
        $("#tableLeadconsultant").append
        (`
            <tr id="leadConsultant${++rowIndx}" class="table-warning">
                <td class="title">Lead Consultant</td>
                        <td data-title="# OF CONSULTANTS" class="noc">
                            <input type="number" class="input js-mytooltip input-table form-control  @error('') is-invalid @enderror"
                                value="{{ old('') }}" 
                                name="ef_Leadconsultant1[]" 
                                id="ef_LeadconsultantNoc${rowIndx}" 
                                title="" 
                                max="100"
                                data-mytooltip-content="<i>Includes in depth needs analysis (i.e. surveys, interviews, FGDs),
                                special research (i.e. to study client materials or client -required materials, industry
                                or function specific content), creation of client-specific learning aids/tools
                                (i.e. assessments, c</i>"
                                data-mytooltip-theme="dark"
                                data-mytooltip-action="focus" 
                                data-mytooltip-direction="bottom" oninput="document.getElementById('ec_LeadconsultantsNoc${rowIndx}').value = document.getElementById('ef_LeadconsultantNoc${rowIndx}').value;">
                        </td>
                        <td>
                            <fieldset>
                                <select class="form-select hf-c13 input js-mytooltip @error('') is-invalid @enderror"
                                    name="ef_Leadconsultant1[]" 
                                    id="ef_LeadconsultantHf"
                                    data-mytooltip-content="<i>P56,000 - Consultants<br>
                                        P72,000 - Senior Consultants<br>
                                        Key Accounts<br>
                                        P50,400 - Consultants, min guaranteed 10 consulting days<br>
                                        P45,000 - Seniuor Consultants, min. guaranteed 10 consulting days</i>"
                                    data-mytooltip-theme="dark"
                                    data-mytooltip-action="focus" 
                                    data-mytooltip-direction="right" 
                                    style="background-color:#ffcccc; color:red;">
                                    <option value="50400" {{ old('') == '50400' ? 'selected="selected"' : '' }}>
                                        &#8369;50,400
                                    </option>
                                    <option value="56000" {{ old('') == '56000' ? 'selected="selected"' : '' }} selected>
                                        &#8369;56,000
                                    </option>
                                    <option value="64800" {{ old('') == '64800' ? 'selected="selected"' : '' }}>
                                        &#8369;64,800
                                    </option>
                                    <option value="72000" {{ old('') == '72000' ? 'selected="selected"' : '' }}>
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
                        <td class="noh">
                            <input type="number" class=" form-control input-table input js-mytooltip @error('') is-invalid @enderror" 
                                value="{{ old('') }}" 
                                name="ef_Leadconsultant1[]" 
                                id="ef_LeadconsultantNoh${rowIndx}"
                                data-mytooltip-content="<i>½ Day = 0.50<br>
                                    ¼ Day = 0.25 </i>"
                                data-mytooltip-theme="dark"
                                data-mytooltip-action="focus" 
                                data-mytooltip-direction="bottom" oninput="document.getElementById('ec_LeadconsultantsNod${rowIndx}').value = document.getElementById('ef_LeadconsultantNoh${rowIndx}').value;">
                        </td>
                        <td class="atd">
                            <input type="number" class=" form-control input-table input @error('') is-invalid @enderror" 
                                value="{{ old('') }}" id="ef_LeadconsultantAtd${rowIndx}" name="ef_Leadconsultant1[]"
                                oninput="document.getElementById('ec_LeadconsultantsAtd${rowIndx}').value = document.getElementById('ef_LeadconsultantAtd${rowIndx}').value;">
                        </td>

                        <td class="nwh">
                            <input type="number" class=" form-control input-table @error('') is-invalid @enderror" 
                                value="{{ old('') }}" name="ef_Leadconsultant1[]" id="ef_LeadconsultantNwh${rowIndx}"
                                oninput="document.getElementById('ec_LeadconsultantsNwh${rowIndx}').value = document.getElementById('ef_LeadconsultantNwh${rowIndx}').value;">
                        </td>
                        <td class="total-td">
                                <h4 class="text-center lead" id="leadTotal">-</h4>
                        </td>
                        <td class="total-td">
                            <input type="text" class="form-control input-table @error('') is-invalid @enderror" 
                                value="{{ old('') }}"name="" id="">
                        </td>
                            <td class="border border-white" style="background-color: #FFFFFF;">
                            <a href="javascript:void(0)" class="text-danger font-18 removed" title="Remove" onclick="$('#ecRemoveLC${rowIndx}').trigger('click');"> <i class="fa fa-trash-o"></i></a>
                            </td>
            </tr>`
        );
    });

        $("#tableLeadconsultant").on("click", ".removed", function () {

                // Getting all the rows next to the row
                // containing the clicked button
                var child = $(this).closest("tr").nextAll();

                // Iterating across all the rows
                // obtained to change the index
                child.each(function () {
                    // Getting <tr> id.
                    var id = $(this).attr("id");

                    // Getting the <input> inside the .noc, .noh, .nwh class.
                    var noc = $(this).children(".noc").children("input");
                    var noh = $(this).children(".noh").children("input");
                    var nwh = $(this).children(".nwh").children("input");
                    var atd = $(this).children(".atd").children("input");

                    // Gets the row number from <tr> id.
                    var dig = parseInt(id.substring(14));

                    // Modifying row id.
                    $(this).attr("id", `leadConsultant${dig - 1}`);

                    // Modifying row index.
                    noc.attr("id", `ef_LeadconsultantNoc${dig - 1}`);
                    noh.attr("id", `ef_LeadconsultantNoh${dig - 1}`);
                    atd.attr("id", `ef_LeadconsultantAtd${dig - 1}`);
                    nwh.attr("id", `ef_LeadconsultantNwh${dig - 1}`);
                });

                // Removing the current row.
                $(this).closest("tr").remove();

                // Decreasing total number of rows by 1.
                rowIndx--;
                // $(`#ecButton${rowIdx}`).trigger('click');
        });

var rowAnalyst = 1;
    $("#addBtn2").on("click", function() {
        // Adding a row inside the tbody.
        $("#ef_TableAnalyst").append
        (`
            <tr id="ef_RowAnalyst${++rowAnalyst}" class="table-warning">
                <td class="title">Analyst</td>
                        <td class="noc">
                            <input type="number" class=" input js-mytooltip form-control input-table @error('') is-invalid @enderror" 
                                value="{{ old('') }}" 
                                name="" 
                                id="ef_AnalystNoc${rowAnalyst}" 
                                max="100"
                                data-mytooltip-content="<i>Includes in depth needs analysis (i.e. surveys, interviews, FGDs),
                                special research (i.e. to study client materials or client -required materials, industry
                                or function specific content), creation of client-specific learning aids/tools
                                (i.e. assessments, c</i>"
                                data-mytooltip-theme="dark"
                                data-mytooltip-action="focus" 
                                data-mytooltip-direction="bottom" oninput="document.getElementById('ec_AnalystsNoc${rowAnalyst}').value = document.getElementById('ef_AnalystNoc${rowAnalyst}').value;">
                        </td>
                        
                        <td>
                            <input type="text" class="form-control input-table @error('') is-invalid @enderror" 
                                value="{{ old('') }}" name="" id="ef_AnalystPdf" data-type="currency">
                        </td>
                        <td class ="nod">
                            <input type="number" class=" input js-mytooltip form-control input-table @error('') is-invalid @enderror" 
                                value="{{ old('') }}" 
                                name="" 
                                id="ef_AnalystNod${rowAnalyst}"
                                data-mytooltip-content="<i>½ Day = 0.50<br>
                                                           ¼ Day = 0.25 Number of Hours</i>"
                                data-mytooltip-theme="dark"
                                data-mytooltip-action="focus" 
                                data-mytooltip-direction="bottom" oninput="document.getElementById('ec_AnalystsNod${rowAnalyst}').value = document.getElementById('ef_AnalystNod${rowAnalyst}').value;">
                        </td>
                        <td class = "atd">
                            <input type="number" class="nwh-e14 form-control input-table @error('') is-invalid @enderror" 
                                value="{{ old('') }}" name="" id="ef_AnalystAtd${rowAnalyst}" oninput="document.getElementById('ec_AnalystsAtd${rowAnalyst}').value = document.getElementById('ef_AnalystAtd${rowAnalyst}').value;">
                        </td>
                        <td class ="nsw">
                            <input type="number" class="nwh-e14 form-control input-table @error('') is-invalid @enderror" 
                                value="{{ old('') }}" name="" id="ef_AnalystNsw${rowAnalyst}" oninput="document.getElementById('ec_AnalystsNwh${rowAnalyst}').value = document.getElementById('ef_AnalystNsw${rowAnalyst}').value;">
                        </td>
                        <td class="total-td">
                            {{-- <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" 
                                name="" id="" disabled> --}}
                                <h4 class="text-center lead" id="analyst-total">-</h4>
                        </td>
                        <td class="total-td">
                            <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="" id="ef_AnalystNotes">
                        </td>
                            <td class="border border-white" style="background-color: #FFFFFF;">
                            <a href="javascript:void(0)" class="text-danger font-18 removed" title="Remove" onclick="$('#ecRemoveA${rowAnalyst}').trigger('click');"><i class="fa fa-trash-o"></i></a>
                            </td>
            </tr>`
        );
    });

        $("#ef_TableAnalyst").on("click", ".removed", function () {

                // Getting all the rows next to the row
                // containing the clicked button
                var child = $(this).closest("tr").nextAll();

                // Iterating across all the rows
                // obtained to change the index
                child.each(function () {
                    // Getting <tr> id.
                    var id = $(this).attr("id");

                    // Getting the <input> inside the .noc, .noh, .nwh class.
                    var noc = $(this).children(".noc").children("input");
                    // var pdf = $(this).children(".pdf").children("input");
                    var nod = $(this).children(".nod").children("input");
                    var atd = $(this).children(".atd").children("input");
                    var nsw = $(this).children(".nsw").children("input");

                    // Gets the row number from <tr> id.
                    var dig = parseInt(id.substring(13));

                    // Modifying row id.
                    $(this).attr("id", `ef_RowAnalyst${dig - 1}`);

                    // Modifying row index.
                    noc.attr("id", `ef_AnalystNoc${dig - 1}`);
                    // pdf.attr("id", `ef_AnalystPdf${dig - 1}`);
                    nod.attr("id", `ef_AnalystNod${dig - 1}`);
                    atd.attr("id", `ef_AnalystAtd${dig - 1}`);
                    nsw.attr("id", `ef_AnalystNsw${dig - 1}`);
                });

                // Removing the current row.
                $(this).closest("tr").remove();

                // Decreasing total number of rows by 1.
                rowAnalyst--;
                // $(`#ecButton${rowIdx}`).trigger('click');
        });
var rowDesigner = 1;
    $("#addBtn3").on("click", function() {
        // Adding a row inside the tbody.
        $("#ef_TableDesigner").append
        (`
            <tr id="ef_RowDesigner${++rowDesigner}" class="table-warning">
                <td class="title">Designer</td>
                        <td class="noc">
                            <input type="number" class="noc-b18 input js-mytooltip form-control input-table @error('') is-invalid @enderror" 
                                value="{{ old('') }}" 
                                name="" 
                                id="ef_DesignerNoc${rowDesigner}" 
                                max="100"
                                data-mytooltip-content="<i>Includes in depth needs analysis (i.e. surveys, interviews, FGDs),
                                special research (i.e. to study client materials or client -required materials, industry
                                or function specific content), creation of client-specific learning aids/tools
                                (i.e. assessments, c</i>"
                                data-mytooltip-theme="dark"
                                data-mytooltip-action="focus" 
                                data-mytooltip-direction="bottom" oninput="document.getElementById('ec_DesignersNoc${rowDesigner}').value = document.getElementById('ef_DesignerNoc${rowDesigner}').value;">
                        </td>
                        <td>
                            <fieldset>
                                <select class="hf-c18 input js-mytooltip form-select @error('') is-invalid @enderror select"
                                    name="" 
                                    id="ef_DesignerPdf"
                                    data-mytooltip-content="<i>P48,000 - Consultants<br>
                                        P64,000 - Senior Consultants</i>"
                                    data-mytooltip-theme="dark"
                                    data-mytooltip-action="focus" 
                                    data-mytooltip-direction="right" 
                                    style="background-color:#ffcccc; color:red;">
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
                        <td class="nod">
                            <input type="number" class="noh-d18 input js-mytooltip form-control input-table @error('') is-invalid @enderror" 
                                value="{{ old('') }}" 
                                name="" 
                                id="ef_DesignerNod${rowDesigner}"
                                data-mytooltip-content="<i>½ Day = 0.50<br>
                                    ¼ Day = 0.25 <br>Number of Hours</i>"
                                data-mytooltip-theme="dark"
                                data-mytooltip-action="focus" 
                                data-mytooltip-direction="bottom" oninput="document.getElementById('ec_DesignersNod${rowDesigner}').value = document.getElementById('ef_DesignerNod${rowDesigner}').value;">
                        </td>
                        <td class="atd">
                            <input type="number" class="nwh-e18 form-control input-table @error('') is-invalid @enderror" 
                                value="{{ old('') }}" name="" id="ef_DesignerAtd${rowDesigner}" oninput="document.getElementById('ec_DesignersAtd${rowDesigner}').value = document.getElementById('ef_DesignerAtd${rowDesigner}').value;">
                        </td>
                        <td class="nsw">
                            <input type="number" class="nwh-e18 form-control input-table @error('') is-invalid @enderror" 
                                value="{{ old('') }}" name="" id="ef_DesignerNsw${rowDesigner}" oninput="document.getElementById('ec_DesignersNwh${rowDesigner}').value = document.getElementById('ef_DesignerNsw${rowDesigner}').value;">
                        </td>
                        <td class="total-td" style="background-color: rgba(146, 146, 146, 0.727)">
                                <h4 class="text-center" id="subtotal-design">-</h4>
                        </td>
                        <td class="total-td">
                            <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="" id="">
                        </td>
                            <td class="border border-white" style="background-color: #FFFFFF;">
                            <a href="javascript:void(0)" class="text-danger font-18 removed" title="Remove" onclick="$('#ecRemoveD${rowDesigner}').trigger('click');"><i class="fa fa-trash-o"></i></a>
                            </td>
            </tr>`
        );
    });
        $("#ef_TableDesigner").on("click", ".removed", function () {

                // Getting all the rows next to the row
                // containing the clicked button
                var child = $(this).closest("tr").nextAll();

                // Iterating across all the rows
                // obtained to change the index
                child.each(function () {
                    // Getting <tr> id.
                    var id = $(this).attr("id");

                    // Getting the <input> inside the .noc, .noh, .nwh class.
                    var noc = $(this).children(".noc").children("input");
                    // var pdf = $(this).children(".pdf").children("input");
                    var nod = $(this).children(".nod").children("input");
                    var atd = $(this).children(".atd").children("input");
                    var nsw = $(this).children(".nsw").children("input");

                    // Gets the row number from <tr> id.
                    var dig = parseInt(id.substring(14));

                    // Modifying row id.
                    $(this).attr("id", `ef_RowDesigner${dig - 1}`);

                    // Modifying row index.
                    noc.attr("id", `ef_DesignerNoc${dig - 1}`);
                    // pdf.attr("id", `ef_DesignerPdf${dig - 1}`);
                    nod.attr("id", `ef_DesignerNod${dig - 1}`);
                    atd.attr("id", `ef_DesignerAtd${dig - 1}`);
                    nsw.attr("id", `ef_DesignerNsw${dig - 1}`);
                });

                // Removing the current row.
                $(this).closest("tr").remove();

                // Decreasing total number of rows by 1.
                rowDesigner--;
                // $(`#ecButton${rowIdx}`).trigger('click');
        });
var rowLeadFaci = 1;
    $("#addBtn4").on("click", function() {
        // Adding a row inside the tbody.
        $("#ef_TableLeadFaci").append
        (`
            <tr id="ef_RowLeadFaci${++rowLeadFaci}" class="table-warning">
                <td class="title">Lead Facilitator</td>
                        <td class="noc">
                            <input type="number" class="noc-b21 form-control input-table @error('') is-invalid @enderror" 
                                value="{{ old('') }}" name="" id="ef_LeadFaciNoc${rowLeadFaci}" max="100" oninput="document.getElementById('ec_LeadfacilitatorsNoc${rowLeadFaci}').value = document.getElementById('ef_LeadFaciNoc${rowLeadFaci}').value;">
                        </td>
                        <td>
                            <input type="text" class="form-control js-mytooltip input-table @error('') is-invalid @enderror" 
                                value="{{ old('') }}" name="" id="ef_LeadFaciPdf"
                                data-mytooltip-content="<i>P80,000 - Key Accounts with min guaranteed 30 full day programs<br>
                                    P88,000 - Non-key accounts signed on or before Apr 30, 2022<br>
                                    P96,000 - Effective May 1, 2022</i>"
                                data-mytooltip-theme="dark"
                                data-mytooltip-action="focus" 
                                data-mytooltip-direction="bottom">
                        </td>
                        <td class="nod">
                            <input type="number" class="noh-d21 input js-mytooltip form-control input-table @error('') is-invalid @enderror" 
                                value="{{ old('') }}" 
                                name="" 
                                id="ef_LeadFaciNod${rowLeadFaci}"
                                data-mytooltip-content="<i>½ Day = 0.70</i>"
                                data-mytooltip-theme="dark"
                                data-mytooltip-action="focus" 
                                data-mytooltip-direction="bottom" oninput="document.getElementById('ec_LeadfacilitatorsNod${rowLeadFaci}').value = document.getElementById('ef_LeadFaciNod${rowLeadFaci}').value;">
                        </td>
                        <td class="atd">
                            <input type="number" class="nwh-e21 form-control input-table @error('') is-invalid @enderror" 
                                value="{{ old('') }}" name="" id="ef_LeadFaciAtd${rowLeadFaci}" oninput="document.getElementById('ec_LeadfacilitatorsAtd${rowLeadFaci}').value = document.getElementById('ef_LeadFaciAtd${rowLeadFaci}').value;">
                        </td>
                        <td class="nsw">
                            <input type="number" class="nwh-e21 form-control input-table @error('') is-invalid @enderror" 
                                value="{{ old('') }}" name="" id="ef_LeadFaciNsw${rowLeadFaci}" oninput="document.getElementById('ec_LeadfacilitatorsNwh${rowLeadFaci}').value = document.getElementById('ef_LeadFaciNsw${rowLeadFaci}').value;">
                        </td>
                        <td class="total-td">
                                <h4 class="text-center lead" id="subtotal-LeadFaci">-</h4>
                        </td>
                        <td class="total-td">
                            <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="" id="">
                        </td>
                            <td class="border border-white" style="background-color: #FFFFFF;">
                            <a href="javascript:void(0)" class="text-danger font-18 removed" title="Remove" onclick="$('#ecRemoveLF${rowLeadFaci}').trigger('click');"><i class="fa fa-trash-o"></i></a>
                            </td>
            </tr>`
        );
    });
        $("#ef_TableLeadFaci").on("click", ".removed", function () {

                // Getting all the rows next to the row
                // containing the clicked button
                var child = $(this).closest("tr").nextAll();

                // Iterating across all the rows
                // obtained to change the index
                child.each(function () {
                    // Getting <tr> id.
                    var id = $(this).attr("id");

                    // Getting the <input> inside the .noc, .noh, .nwh class.
                    var noc = $(this).children(".noc").children("input");
                    // var pdf = $(this).children(".pdf").children("input");
                    var nod = $(this).children(".nod").children("input");
                    var atd = $(this).children(".atd").children("input");
                    var nsw = $(this).children(".nsw").children("input");

                    // Gets the row number from <tr> id.
                    var dig = parseInt(id.substring(14));

                    // Modifying row id.
                    $(this).attr("id", `ef_RowLeadFaci${dig - 1}`);

                    // Modifying row index.
                    noc.attr("id", `ef_LeadFaciNoc${dig - 1}`);
                    // pdf.attr("id", `ef_LeadFaciPdf${dig - 1}`);
                    nod.attr("id", `ef_LeadFaciNod${dig - 1}`);
                    atd.attr("id", `ef_LeadFaciAtd${dig - 1}`);
                    nsw.attr("id", `ef_LeadFaciNsw${dig - 1}`);
                });

                // Removing the current row.
                $(this).closest("tr").remove();

                // Decreasing total number of rows by 1.
                rowLeadFaci--;
                // $(`#ecButton${rowIdx}`).trigger('click');
        });
var rowCoFaci = 1;
    $("#addBtn5").on("click", function() {
        // Adding a row inside the tbody.
        $("#ef_TableCoFaci").append
        (`
            <tr id="ef_RowCoFaci${++rowCoFaci}" class="table-warning">
                <td class="title">Co-facilitator / Resource Speaker</td>
                        <td class ="noc">
                            <input type="number" class="noc-b22 form-control input-table @error('') is-invalid @enderror" 
                                value="{{ old('') }}" name="" id="ef_CoFaciNoc${rowCoFaci}" max="100" oninput="document.getElementById('ec_CofacilitatorsNoc${rowCoFaci}').value = document.getElementById('ef_CoFaciNoc${rowCoFaci}').value;">
                        </td>
                        <td>
                            <input type="text" class="hf-c22 form-control input-table @error('') is-invalid @enderror" 
                                value="{{ old('') }}" name="" id="ef_CoFaciPdf";
                                data-mytooltip-content="<i>½ Day = 0.70</i>"
                                data-mytooltip-theme="dark"
                                data-mytooltip-action="focus" 
                                data-mytooltip-direction="bottom">
                        </td>
                        <td class ="nod">
                            <input type="number" class="noh-d22 input js-mytooltip form-control input-table @error('') is-invalid @enderror" 
                                value="{{ old('') }}" 
                                name="" 
                                id="ef_CoFaciNod${rowCoFaci}"
                                data-mytooltip-content="<i>½ Day = 0.70</i>"
                                data-mytooltip-theme="dark"
                                data-mytooltip-action="focus" 
                                data-mytooltip-direction="bottom" oninput="document.getElementById('ec_CofacilitatorsNod${rowCoFaci}').value = document.getElementById('ef_CoFaciNod${rowCoFaci}').value;">
                        </td>
                        <td class = "atd">
                            <input type="number" class="nwh-e22 form-control input-table @error('') is-invalid @enderror" 
                                value="{{ old('') }}" name="" id="ef_CoFaciAtd${rowCoFaci}" oninput="document.getElementById('ec_CofacilitatorsAtd${rowCoFaci}').value = document.getElementById('ef_CoFaciAtd${rowCoFaci}').value;">
                        </td>
                        <td class ="nsw">
                            <input type="number" class="nwh-e22 form-control input-table @error('') is-invalid @enderror" 
                                value="{{ old('') }}" name="" id="ef_CoFaciNsw${rowCoFaci}" oninput="document.getElementById('ec_CofacilitatorsNwh${rowCoFaci}').value = document.getElementById('ef_CoFaciNsw${rowCoFaci}').value;">
                        </td>
                        <td class="total-td">
                                <h4 class="text-center lead" id="subtotal-coFacilitator">-</h4>
                        </td>
                        <td class="total-td">
                            <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="" id="">
                        </td>
                            <td class="border border-white" style="background-color: #FFFFFF;">
                            <a href="javascript:void(0)" class="text-danger font-18 removed" title="Remove" onclick="$('#ecRemoveCF${rowCoFaci}').trigger('click');"><i class="fa fa-trash-o"></i></a>
                            </td>
            </tr>`
        );
    });
        $("#ef_TableCoFaci").on("click", ".removed", function () {

                // Getting all the rows next to the row
                // containing the clicked button
                var child = $(this).closest("tr").nextAll();

                // Iterating across all the rows
                // obtained to change the index
                child.each(function () {
                    // Getting <tr> id.
                    var id = $(this).attr("id");

                    // Getting the <input> inside the .noc, .noh, .nwh class.
                    var noc = $(this).children(".noc").children("input");
                    // var pdf = $(this).children(".pdf").children("input");
                    var nod = $(this).children(".nod").children("input");
                    var atd = $(this).children(".atd").children("input");
                    var nsw = $(this).children(".nsw").children("input");

                    // Gets the row number from <tr> id.
                    var dig = parseInt(id.substring(12));

                    // Modifying row id.
                    $(this).attr("id", `ef_RowCoFaci${dig - 1}`);

                    // Modifying row index.
                    noc.attr("id", `ef_CoFaciNoc${dig - 1}`);
                    // pdf.attr("id", `ef_CoFaciPdf${dig - 1}`);
                    nod.attr("id", `ef_CoFaciNod${dig - 1}`);
                    atd.attr("id", `ef_CoFaciAtd${dig - 1}`);
                    nsw.attr("id", `ef_CoFaciNsw${dig - 1}`);
                });

                // Removing the current row.
                $(this).closest("tr").remove();

                // Decreasing total number of rows by 1.
                rowCoFaci--;
                // $(`#ecButton${rowIdx}`).trigger('click');
        });
var rowActionLearn = 1;
    $("#addBtn6").on("click", function() {
        // Adding a row inside the tbody.
        $("#ef_TableActionLearn").append
        (`
            <tr id="ef_RowActionLearn${++rowActionLearn}" class="table-warning">
                <td class="title">Action Learning Coach</td>
                        <td class ="noc">
                            <input type="number" class="noc-b23 form-control input-table @error('') is-invalid @enderror" 
                                value="{{ old('') }}" name="" id="ef_ActionLearnNoc${rowActionLearn}" max="100" oninput="document.getElementById('ec_ActionlearningcoachNoc${rowActionLearn}').value = document.getElementById('ef_ActionLearnNoc${rowActionLearn}').value;">
                        </td>
                        <td>
                            <input type="text" class="hf-c22 form-control input-table @error('') is-invalid @enderror" 
                                value="{{ old('') }}" name="" id="ef_ActionLearnPdf";>
                        </td>
                        <td class="nod">
                            <input type="number" class="noh-d23 input js-mytooltip form-control input-table @error('') is-invalid @enderror" 
                                value="{{ old('') }}" 
                                name="" 
                                id="ef_ActionLearnNod${rowActionLearn}"
                                data-mytooltip-content="<i>½ Day = 0.70</i>"
                                data-mytooltip-theme="dark"
                                data-mytooltip-action="focus" 
                                data-mytooltip-direction="bottom" oninput="document.getElementById('ec_ActionlearningcoachNod${rowActionLearn}').value = document.getElementById('ef_ActionLearnNod${rowActionLearn}').value;">
                        </td>
                        <td class="atd">
                            <input type="number" class="nwh-e23 form-control input-table @error('') is-invalid @enderror" 
                                value="{{ old('') }}" name="" id="ef_ActionLearnAtd${rowActionLearn}" oninput="document.getElementById('ec_ActionlearningcoachAtd${rowActionLearn}').value = document.getElementById('ef_ActionLearnAtd${rowActionLearn}').value;">
                        </td>
                        <td class="nsw">
                            <input type="number" class="nwh-e23 form-control input-table @error('') is-invalid @enderror" 
                                value="{{ old('') }}" name="" id="ef_ActionLearnNsw${rowActionLearn}" oninput="document.getElementById('ec_ActionlearningcoachNwh${rowActionLearn}').value = document.getElementById('ef_ActionLearnNsw${rowActionLearn}').value;">
                        </td>
                        <td class="total-td">
                                <h4 class="text-center lead" id="subtotal-ActionLearn">-</h4>
                        </td>
                        <td class="total-td">
                            <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="" id="">
                        </td> value="{{ old('') }}" name="" id="">
                        </td>
                            <td class="border border-white" style="background-color: #FFFFFF;">
                            <a href="javascript:void(0)" class="text-danger font-18 removed" title="Remove" onclick="$('#ecRemoveALC${rowActionLearn}').trigger('click');"><i class="fa fa-trash-o"></i></a>
                            </td>
            </tr>`
        );
    });
        $("#ef_TableActionLearn").on("click", ".removed", function () {

                // Getting all the rows next to the row
                // containing the clicked button
                var child = $(this).closest("tr").nextAll();

                // Iterating across all the rows
                // obtained to change the index
                child.each(function () {
                    // Getting <tr> id.
                    var id = $(this).attr("id");

                    // Getting the <input> inside the .noc, .noh, .nwh class.
                    var noc = $(this).children(".noc").children("input");
                    // var pdf = $(this).children(".pdf").children("input");
                    var nod = $(this).children(".nod").children("input");
                    var atd = $(this).children(".atd").children("input");
                    var nsw = $(this).children(".nsw").children("input");

                    // Gets the row number from <tr> id.
                    var dig = parseInt(id.substring(17));

                    // Modifying row id.
                    $(this).attr("id", `ef_RowActionLearn${dig - 1}`);

                    // Modifying row index.
                    noc.attr("id", `ef_ActionLearnNoc${dig - 1}`);
                    // pdf.attr("id", `ef_ActionLearnPdf${dig - 1}`);
                    nod.attr("id", `ef_ActionLearnNod${dig - 1}`);
                    atd.attr("id", `ef_ActionLearnAtd${dig - 1}`);
                    nsw.attr("id", `ef_ActionLearnNsw${dig - 1}`);
                });

                // Removing the current row.
                $(this).closest("tr").remove();

                // Decreasing total number of rows by 1.
                rowActionLearn--;
                // $(`#ecButton${rowIdx}`).trigger('click');
        });
var rowMarshal = 1;
    $("#addBtn7").on("click", function() {
        // Adding a row inside the tbody.
        $("#ef_TableMarshal").append
        (`
            <tr id="ef_RowMarshal${++rowMarshal}" class="table-warning">
                <td class="title">Marshal</td>
                        <td class="noc">
                            <input type="number" class="noc-b23 form-control input-table @error('') is-invalid @enderror" 
                                value="{{ old('') }}" name="" id="ef_MarshalNoc${rowMarshal}" max="100" oninput="document.getElementById('ec_MarshalNoc${rowMarshal}').value = document.getElementById('ef_MarshalNoc${rowMarshal}').value;">
                        </td>
                        <td>
                            <input type="text" class="hf-c22 form-control input-table @error('') is-invalid @enderror" 
                                value="{{ old('') }}" name="" id="ef_MarshalPdf";>
                        </td>
                        <td class="nod">
                            <input type="number" class="noh-d23 input js-mytooltip form-control input-table @error('') is-invalid @enderror" 
                                value="{{ old('') }}" 
                                name="" 
                                id="ef_MarshalNod${rowMarshal}"
                                data-mytooltip-content="<i>½ Day = 0.70</i>"
                                data-mytooltip-theme="dark"
                                data-mytooltip-action="focus" 
                                data-mytooltip-direction="bottom" oninput="document.getElementById('ec_MarshalNod${rowMarshal}').value = document.getElementById('ef_MarshalNod${rowMarshal}').value;">
                        </td>
                        <td class="atd">
                            <input type="number" class="nwh-e23 form-control input-table @error('') is-invalid @enderror" 
                                value="{{ old('') }}" name="" id="ef_MarshalAtd${rowMarshal}" oninput="document.getElementById('ec_MarshalAtd${rowMarshal}').value = document.getElementById('ef_MarshalAtd${rowMarshal}').value;">
                        </td>
                        <td class="nsw">
                            <input type="number" class="nwh-e23 form-control input-table @error('') is-invalid @enderror" 
                                value="{{ old('') }}" name="" id="ef_MarshalNsw${rowMarshal}" oninput="document.getElementById('ec_MarshalNwh${rowMarshal}').value = document.getElementById('ef_MarshalNsw${rowMarshal}').value;">
                        </td>
                        <td class="total-td">
                                <h4 class="text-center lead" id="subtotal-marshal">-</h4>
                        </td>
                        <td class="total-td">
                            <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="" id="">
                        </td>
                            <td class="border border-white" style="background-color: #FFFFFF;">
                            <a href="javascript:void(0)" class="text-danger font-18 removed" title="Remove" onclick="$('#ecRemoveM${rowMarshal}').trigger('click');"><i class="fa fa-trash-o"></i></a>
                            </td>
            </tr>`
        );
    });
        $("#ef_TableMarshal").on("click", ".removed", function () {

                // Getting all the rows next to the row
                // containing the clicked button
                var child = $(this).closest("tr").nextAll();

                // Iterating across all the rows
                // obtained to change the index
                child.each(function () {
                    // Getting <tr> id.
                    var id = $(this).attr("id");

                    // Getting the <input> inside the .noc, .noh, .nwh class.
                    var noc = $(this).children(".noc").children("input");
                    // var pdf = $(this).children(".pdf").children("input");
                    var nod = $(this).children(".nod").children("input");
                    var atd = $(this).children(".atd").children("input");
                    var nsw = $(this).children(".nsw").children("input");

                    // Gets the row number from <tr> id.
                    var dig = parseInt(id.substring(13));

                    // Modifying row id.
                    $(this).attr("id", `ef_RowMarshal${dig - 1}`);

                    // Modifying row index.
                    noc.attr("id", `ef_MarshalNoc${dig - 1}`);
                    // pdf.attr("id", `ef_MarshalPdf${dig - 1}`);
                    nod.attr("id", `ef_MarshalNod${dig - 1}`);
                    atd.attr("id", `ef_MarshalAtd${dig - 1}`);
                    nsw.attr("id", `ef_MarshalNsw${dig - 1}`);
                });

                // Removing the current row.
                $(this).closest("tr").remove();

                // Decreasing total number of rows by 1.
                rowMarshal--;
                // $(`#ecButton${rowIdx}`).trigger('click');
        });
var rowOnsite = 1;
    $("#addBtn8").on("click", function() {
        // Adding a row inside the tbody.
        $("#ef_TableOnsite").append
        (`
            <tr id="ef_RowOnsite${++rowOnsite}" class="table-warning">
                <td class="title">On-site PC (P20K / P25K / P30K)</td>
                        <td>
                            <input type="number" class="noc-b23 form-control input-table @error('') is-invalid @enderror" 
                                value="{{ old('') }}" name="" id="ef_OnsiteNoc${rowOnsite}" max="100" oninput="document.getElementById('ec_OnsitepcNoc${rowOnsite}').value = document.getElementById('ef_OnsiteNoc${rowOnsite}').value;">
                        </td>
                        <td>
                            <fieldset>
                                <select class="form-select hf-c13 input js-mytooltip @error('') is-invalid @enderror"
                                    name="" 
                                    id="ef_OnsitePdf"
                                    data-mytooltip-content="<i>P20,000 - simple indoor programs<br>
                                        P25,000 - roster with 6-10 members<br>
                                        P30,000 - roster with 11 members and up</i>"
                                    data-mytooltip-theme="dark"
                                    data-mytooltip-action="focus" 
                                    data-mytooltip-direction="right" 
                                    style="background-color:#ffcccc; color:red;">
                                    <option value="20,000" {{ old('') == '20,000' ? 'selected="selected"' : '' }} selected>
                                        &#8369;20,000
                                    </option>
                                    <option value="25,000" {{ old('') == '56,000' ? 'selected="selected"' : '' }} >
                                        &#8369;25,000
                                    </option>
                                    <option value="30,000" {{ old('') == '30,000' ? 'selected="selected"' : '' }}>
                                        &#8369;30,800
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
                            <input type="number" class="noh-d23 input js-mytooltip form-control input-table @error('') is-invalid @enderror" 
                                value="{{ old('') }}" 
                                name="" 
                                id="ef_OnsiteNod${rowOnsite}"
                                data-mytooltip-content="<i>½ Day = 0.70</i>"
                                data-mytooltip-theme="dark"
                                data-mytooltip-action="focus" 
                                data-mytooltip-direction="bottom" oninput="document.getElementById('ec_OnsitepcNod${rowOnsite}').value = document.getElementById('ef_OnsiteNod${rowOnsite}').value;">
                        </td>
                        <td>
                            <input type="number" class="nwh-e23 form-control input-table @error('') is-invalid @enderror" 
                                value="{{ old('') }}" name="" id="ef_OnsiteAtd${rowOnsite}" oninput="document.getElementById('ec_OnsitepcAtd${rowOnsite}').value = document.getElementById('ef_OnsiteAtd${rowOnsite}').value;">
                        </td>
                        <td>
                            <input type="number" class="nwh-e23 form-control input-table @error('') is-invalid @enderror" 
                                value="{{ old('') }}" name="" id="ef_OnsiteNsw${rowOnsite}" oninput="document.getElementById('ec_OnsitepcNwh${rowOnsite}').value = document.getElementById('ef_OnsiteNsw${rowOnsite}').value;">
                        </td>
                        <td class="total-td">
                                <h4 class="text-center lead" id="subtotal-Onsite">-</h4>
                        </td>
                        <td class="total-td">
                            <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="" id="">
                        </td>>
                            <td class="border border-white" style="background-color: #FFFFFF;">
                            <a href="javascript:void(0)" class="text-danger font-18 removed" title="Remove" onclick="$('#ecRemoveOP${rowOnsite}').trigger('click');"><i class="fa fa-trash-o"></i></a>
                            </td>
            </tr>`
        );
    });
        $("#ef_TableOnsite").on("click", ".removed", function () {

                // Getting all the rows next to the row
                // containing the clicked button
                var child = $(this).closest("tr").nextAll();

                // Iterating across all the rows
                // obtained to change the index
                child.each(function () {
                    // Getting <tr> id.
                    var id = $(this).attr("id");

                    // Getting the <input> inside the .noc, .noh, .nwh class.
                    var noc = $(this).children(".noc").children("input");
                    // var pdf = $(this).children(".pdf").children("input");
                    var nod = $(this).children(".nod").children("input");
                    var atd = $(this).children(".atd").children("input");
                    var nsw = $(this).children(".nsw").children("input");

                    // Gets the row number from <tr> id.
                    var dig = parseInt(id.substring(12));

                    // Modifying row id.
                    $(this).attr("id", `ef_RowOnsite${dig - 1}`);

                    // Modifying row index.
                    noc.attr("id", `ef_OnsiteNoc${dig - 1}`);
                    // pdf.attr("id", `ef_OnsitePdf${dig - 1}`);
                    nod.attr("id", `ef_OnsiteNod${dig - 1}`);
                    atd.attr("id", `ef_OnsiteAtd${dig - 1}`);
                    nsw.attr("id", `ef_OnsiteNsw${dig - 1}`);
                });

                // Removing the current row.
                $(this).closest("tr").remove();

                // Decreasing total number of rows by 1.
                rowOnsite--;
                // $(`#ecButton${rowIdx}`).trigger('click');
        });
var rowDocumentor = 1;
    $("#addBtn9").on("click", function() {
        // Adding a row inside the tbody.
        $("#ef_TableDocumentor").append
        (`
            <tr id="ef_RowDocumentor${++rowDocumentor}" class="table-warning">
                <td class="title">Documentor</td>
                        <td class="noc">
                            <input type="number" class="noc-b28 form-control input-table @error('') is-invalid @enderror" 
                                value="{{ old('') }}" name="" id="ef_DocumentorNoc${rowDocumentor}" max="100" oninput="document.getElementById('ec_DocumentorsNoc${rowDocumentor}').value = document.getElementById('ef_DocumentorNoc${rowDocumentor}').value;">
                        </td>
                        <td>
                            <input type="text" class="hf-c22 form-control input-table @error('') is-invalid @enderror" 
                                value="{{ old('') }}" name="" id="ef_DocumentorPdf";>
                        </td>
                        <td class="nod">
                            <input type="number" class="noh-d28 input js-mytooltip form-control input-table @error('') is-invalid @enderror" 
                                value="{{ old('') }}" 
                                name="" 
                                id="ef_DocumentorNod${rowDocumentor}"
                                data-mytooltip-content="<i>½ Day = 0.70</i>"
                                data-mytooltip-theme="dark"
                                data-mytooltip-action="focus" 
                                data-mytooltip-direction="bottom" oninput="document.getElementById('ec_DocumentorsNod${rowDocumentor}').value = document.getElementById('ef_DocumentorNod${rowDocumentor}').value;">
                        </td>
                        <td class="atd">
                            <input type="number" class="nwh-e28 form-control input-table @error('') is-invalid @enderror" 
                                value="{{ old('') }}" name="" id="ef_DocumentorAtd${rowDocumentor}" oninput="document.getElementById('ec_DocumentorsAtd${rowDocumentor}').value = document.getElementById('ef_DocumentorAtd${rowDocumentor}').value;">
                        </td>
                        <td class="nsw">
                            <input type="number" class="nwh-e28 form-control input-table @error('') is-invalid @enderror" 
                                value="{{ old('') }}" name="" id="ef_DocumentorNsw${rowDocumentor}" oninput="document.getElementById('ec_DocumentorsNwh${rowDocumentor}').value = document.getElementById('ef_DocumentorNsw${rowDocumentor}').value;">
                        </td>
                        <td class="total-td" style="background-color: rgba(146, 146, 146, 0.727">
                                <h4 class="text-center" id="subtotal-Documentor">-</h4>
                        </td>
                        <td class="total-td">
                            <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="" id="">
                        </td>
                            <td class="border border-white" style="background-color: #FFFFFF;">
                            <a href="javascript:void(0)" class="text-danger font-18 removed" title="Remove" onclick="$('#ecRemoveD${rowDocumentor}').trigger('click');"><i class="fa fa-trash-o"></i></a>
                            </td>
            </tr>`
        );
    });
        $("#ef_TableDocumentor").on("click", ".removed", function () {

                // Getting all the rows next to the row
                // containing the clicked button
                var child = $(this).closest("tr").nextAll();

                // Iterating across all the rows
                // obtained to change the index
                child.each(function () {
                    // Getting <tr> id.
                    var id = $(this).attr("id");

                    // Getting the <input> inside the .noc, .noh, .nwh class.
                    var noc = $(this).children(".noc").children("input");
                    // var pdf = $(this).children(".pdf").children("input");
                    var nod = $(this).children(".nod").children("input");
                    var atd = $(this).children(".atd").children("input");
                    var nsw = $(this).children(".nsw").children("input");

                    // Gets the row number from <tr> id.
                    var dig = parseInt(id.substring(16));

                    // Modifying row id.
                    $(this).attr("id", `ef_RowDocumentor${dig - 1}`);

                    // Modifying row index.
                    noc.attr("id", `ef_DocumentorNoc${dig - 1}`);
                    // pdf.attr("id", `ef_DocumentorPdf${dig - 1}`);
                    nod.attr("id", `ef_DocumentorNod${dig - 1}`);
                    atd.attr("id", `ef_DocumentorAtd${dig - 1}`);
                    nsw.attr("id", `ef_DocumentorNsw${dig - 1}`);
                });

                // Removing the current row.
                $(this).closest("tr").remove();

                // Decreasing total number of rows by 1.
                rowDocumentor--;
                // $(`#ecButton${rowIdx}`).trigger('click');
        });
</script>