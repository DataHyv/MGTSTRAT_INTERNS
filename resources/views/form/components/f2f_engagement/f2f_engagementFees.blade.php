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
                                id="ef_LeadconsultantNoc" 
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
                                id="ef_LeadconsultantNoh"
                                data-mytooltip-content="<i>½ Day = 0.50<br>
                                    ¼ Day = 0.25 </i>"
                                data-mytooltip-theme="dark"
                                data-mytooltip-action="focus" 
                                data-mytooltip-direction="bottom">
                        </td>
                        <td>
                            <input type="number" class=" form-control input-table input @error('') is-invalid @enderror" 
                                value="{{ old('') }}" id="ef_LeadconsultantAtd" name="ef_Leadconsultant1[]">
                        </td>

                        <td>
                            <input type="number" class=" form-control input-table @error('') is-invalid @enderror" 
                                value="{{ old('') }}" name="ef_Leadconsultant1[]" id="ef_LeadconsultantNwh">
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
                    <tr class="table-warning">
                        <td class="title">Analyst</td>
                        <td>
                            <input type="number" class=" input js-mytooltip form-control input-table @error('') is-invalid @enderror" 
                                value="{{ old('') }}" 
                                name="" 
                                id="ef_AnalystNoc" 
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
                                id="ef_AnalystNod"
                                data-mytooltip-content="<i>½ Day = 0.50<br>
                                                           ¼ Day = 0.25 Number of Hours</i>"
                                data-mytooltip-theme="dark"
                                data-mytooltip-action="focus" 
                                data-mytooltip-direction="bottom">
                        </td>
                        <td>
                            <input type="number" class="nwh-e14 form-control input-table @error('') is-invalid @enderror" 
                                value="{{ old('') }}" name="" id="ef_AnalystAtd">
                        </td>
                        <td>
                            <input type="number" class="nwh-e14 form-control input-table @error('') is-invalid @enderror" 
                                value="{{ old('') }}" name="" id="ef_AnalystNsw">
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
                    </tr>
        
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
        
                    <tr class="table-warning">
                        <td class="title">Designer</td>
                        <td>
                            <input type="number" class="noc-b18 input js-mytooltip form-control input-table @error('') is-invalid @enderror" 
                                value="{{ old('') }}" 
                                name="" 
                                id="ef_DesignerNoc" 
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
                                id="ef_DesignerNod"
                                data-mytooltip-content="<i>½ Day = 0.50<br>
                                    ¼ Day = 0.25 <br>Number of Hours</i>"
                                data-mytooltip-theme="dark"
                                data-mytooltip-action="focus" 
                                data-mytooltip-direction="bottom">
                        </td>
                        <td>
                            <input type="number" class="nwh-e18 form-control input-table @error('') is-invalid @enderror" 
                                value="{{ old('') }}" name="" id="ef_DesignerAtd">
                        </td>
                        <td>
                            <input type="number" class="nwh-e18 form-control input-table @error('') is-invalid @enderror" 
                                value="{{ old('') }}" name="" id="ef_DesignerNsw">
                        </td>
                        <td class="total-td" style="background-color: rgba(146, 146, 146, 0.727)">
                                <h4 class="text-center" id="subtotal-design">-</h4>
                        </td>
                        <td class="total-td">
                            <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="" id="">
                        </td>
                    </tr>
        
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
        
                    <tr class="table-warning">
                        <td class="title">Lead Facilitator</td>
                        <td>
                            <input type="number" class="noc-b21 form-control input-table @error('') is-invalid @enderror" 
                                value="{{ old('') }}" name="" id="ef_LeadFaciNoc" max="100">
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
                                id="ef_LeadFaciNod"
                                data-mytooltip-content="<i>½ Day = 0.70</i>"
                                data-mytooltip-theme="dark"
                                data-mytooltip-action="focus" 
                                data-mytooltip-direction="bottom">
                        </td>
                        <td>
                            <input type="number" class="nwh-e21 form-control input-table @error('') is-invalid @enderror" 
                                value="{{ old('') }}" name="" id="ef_LeadFaciAtd">
                        </td>
                        <td>
                            <input type="number" class="nwh-e21 form-control input-table @error('') is-invalid @enderror" 
                                value="{{ old('') }}" name="" id="ef_LeadFaciNsw">
                        </td>
                        <td class="total-td">
                                <h4 class="text-center lead" id="subtotal-LeadFaci">-</h4>
                        </td>
                        <td class="total-td">
                            <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="" id="">
                        </td>
                    </tr>

                    <tr class="table-warning">
                        <td class="title">Co-facilitator / Resource Speaker</td>
                        <td>
                            <input type="number" class="noc-b22 form-control input-table @error('') is-invalid @enderror" 
                                value="{{ old('') }}" name="" id="ef_CoFaciNoc" max="100">
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
                                id="ef_CoFaciNod"
                                data-mytooltip-content="<i>½ Day = 0.70</i>"
                                data-mytooltip-theme="dark"
                                data-mytooltip-action="focus" 
                                data-mytooltip-direction="bottom">
                        </td>
                        <td>
                            <input type="number" class="nwh-e22 form-control input-table @error('') is-invalid @enderror" 
                                value="{{ old('') }}" name="" id="ef_CoFaciAtd">
                        </td>
                        <td>
                            <input type="number" class="nwh-e22 form-control input-table @error('') is-invalid @enderror" 
                                value="{{ old('') }}" name="" id="ef_CoFaciNsw">
                        </td>
                        <td class="total-td">
                                <h4 class="text-center lead" id="subtotal-coFacilitator">-</h4>
                        </td>
                        <td class="total-td">
                            <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="" id="">
                        </td>
                    </tr>

                    <tr class="table-warning">
                        <td class="title">Action Learning Coach</td>
                        <td>
                            <input type="number" class="noc-b23 form-control input-table @error('') is-invalid @enderror" 
                                value="{{ old('') }}" name="" id="ef_ActionLearnNoc" max="100">
                        </td>
                        <td>
                            <input type="text" class="hf-c22 form-control input-table @error('') is-invalid @enderror" 
                                value="{{ old('') }}" name="" id="ef_ActionLearnPdf";>
                        </td>
                        <td>
                            <input type="number" class="noh-d23 input js-mytooltip form-control input-table @error('') is-invalid @enderror" 
                                value="{{ old('') }}" 
                                name="" 
                                id="ef_ActionLearnNod"
                                data-mytooltip-content="<i>½ Day = 0.70</i>"
                                data-mytooltip-theme="dark"
                                data-mytooltip-action="focus" 
                                data-mytooltip-direction="bottom">
                        </td>
                        <td>
                            <input type="number" class="nwh-e23 form-control input-table @error('') is-invalid @enderror" 
                                value="{{ old('') }}" name="" id="ef_ActionLearnAtd">
                        </td>
                        <td>
                            <input type="number" class="nwh-e23 form-control input-table @error('') is-invalid @enderror" 
                                value="{{ old('') }}" name="" id="ef_ActionLearnNsw">
                        </td>
                        <td class="total-td">
                                <h4 class="text-center lead" id="subtotal-ActionLearn">-</h4>
                        </td>
                        <td class="total-td">
                            <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="" id="">
                        </td>
                    </tr>
                    <tr class="table-warning">
                        <td class="title">Marshal</td>
                        <td>
                            <input type="number" class="noc-b23 form-control input-table @error('') is-invalid @enderror" 
                                value="{{ old('') }}" name="" id="ef_MarshalNoc" max="100">
                        </td>
                        <td>
                            <input type="text" class="hf-c22 form-control input-table @error('') is-invalid @enderror" 
                                value="{{ old('') }}" name="" id="ef_MarshalPdf";>
                        </td>
                        <td>
                            <input type="number" class="noh-d23 input js-mytooltip form-control input-table @error('') is-invalid @enderror" 
                                value="{{ old('') }}" 
                                name="" 
                                id="ef_MarshalNod"
                                data-mytooltip-content="<i>½ Day = 0.70</i>"
                                data-mytooltip-theme="dark"
                                data-mytooltip-action="focus" 
                                data-mytooltip-direction="bottom">
                        </td>
                        <td>
                            <input type="number" class="nwh-e23 form-control input-table @error('') is-invalid @enderror" 
                                value="{{ old('') }}" name="" id="ef_MarshalAtd">
                        </td>
                        <td>
                            <input type="number" class="nwh-e23 form-control input-table @error('') is-invalid @enderror" 
                                value="{{ old('') }}" name="" id="ef_MarshalNsw">
                        </td>
                        <td class="total-td">
                                <h4 class="text-center lead" id="subtotal-marshal">-</h4>
                        </td>
                        <td class="total-td">
                            <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="" id="">
                        </td>
                    </tr>
                    <tr class="table-warning">
                        <td class="title">On-site PC (P20K / P25K / P30K)</td>
                        <td>
                            <input type="number" class="noc-b23 form-control input-table @error('') is-invalid @enderror" 
                                value="{{ old('') }}" name="" id="ef_OnsiteNoc" max="100">
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
                                id="ef_OnsiteNod"
                                data-mytooltip-content="<i>½ Day = 0.70</i>"
                                data-mytooltip-theme="dark"
                                data-mytooltip-action="focus" 
                                data-mytooltip-direction="bottom">
                        </td>
                        <td>
                            <input type="number" class="nwh-e23 form-control input-table @error('') is-invalid @enderror" 
                                value="{{ old('') }}" name="" id="ef_OnsiteAtd">
                        </td>
                        <td>
                            <input type="number" class="nwh-e23 form-control input-table @error('') is-invalid @enderror" 
                                value="{{ old('') }}" name="" id="ef_OnsiteNsw">
                        </td>
                        <td class="total-td">
                                <h4 class="text-center lead" id="subtotal-Onsite">-</h4>
                        </td>
                        <td class="total-td">
                            <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="" id="">
                        </td>
                    </tr>

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

                    <tr class="table-warning">
                        <td class="title">Documentor</td>
                        <td>
                            <input type="number" class="noc-b28 form-control input-table @error('') is-invalid @enderror" 
                                value="{{ old('') }}" name="" id="ef_DocumentorNoc" max="100">
                        </td>
                        <td>
                            <input type="text" class="hf-c22 form-control input-table @error('') is-invalid @enderror" 
                                value="{{ old('') }}" name="" id="ef_DocumentorPdf";>
                        </td>
                        <td>
                            <input type="number" class="noh-d28 input js-mytooltip form-control input-table @error('') is-invalid @enderror" 
                                value="{{ old('') }}" 
                                name="" 
                                id="ef_DocumentorNod"
                                data-mytooltip-content="<i>½ Day = 0.70</i>"
                                data-mytooltip-theme="dark"
                                data-mytooltip-action="focus" 
                                data-mytooltip-direction="bottom">
                        </td>
                        <td>
                            <input type="number" class="nwh-e28 form-control input-table @error('') is-invalid @enderror" 
                                value="{{ old('') }}" name="" id="ef_DocumentorAtd">
                        </td>
                        <td>
                            <input type="number" class="nwh-e28 form-control input-table @error('') is-invalid @enderror" 
                                value="{{ old('') }}" name="" id="ef_DocumentorNsw">
                        </td>
                        <td class="total-td" style="background-color: rgba(146, 146, 146, 0.727">
                                <h4 class="text-center" id="subtotal-Documentor">-</h4>
                        </td>
                        <td class="total-td">
                            <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="" id="">
                        </td>
                    </tr>
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
                            <td data-title="# OF CONSULTANTS">
                                <input type="number" class="input js-mytooltip input-table form-control  @error('') is-invalid @enderror"
                                    value="{{ old('') }}" 
                                    name="ef_Leadconsultant1[]" 
                                    id="ef_LeadconsultantNoc" 
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
                                        <option value="50,400" {{ old('') == '50,400' ? 'selected="selected"' : '' }}>
                                            &#8369;50,400
                                        </option>
                                        <option value="56,000" {{ old('') == '56,000' ? 'selected="selected"' : '' }} selected>
                                            &#8369;56,000
                                        </option>
                                        <option value="64,800" {{ old('') == '64,800' ? 'selected="selected"' : '' }}>
                                            &#8369;64,800
                                        </option>
                                        <option value="72,000" {{ old('') == '72,000' ? 'selected="selected"' : '' }}>
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
                                    id="ef_LeadconsultantNoh"
                                    data-mytooltip-content="<i>½ Day = 0.50<br>
                                        ¼ Day = 0.25 </i>"
                                    data-mytooltip-theme="dark"
                                    data-mytooltip-action="focus" 
                                    data-mytooltip-direction="bottom">
                            </td>
                            <td>
                                <input type="number" class=" form-control input-table input @error('') is-invalid @enderror" 
                                    value="{{ old('') }}" id="ef_LeadconsultantAtd" name="ef_Leadconsultant1[]">
                            </td>

                            <td>
                                <input type="number" class=" form-control input-table @error('') is-invalid @enderror" 
                                    value="{{ old('') }}" name="ef_Leadconsultant1[]" id="ef_LeadconsultantNwh">
                            </td>
                            <td class="total-td">
                                    <h4 class="text-center lead" id="leadTotal">-</h4>
                            </td>
                            <td class="total-td">
                                <input type="text" class="form-control input-table @error('') is-invalid @enderror" 
                                    value="{{ old('') }}"name="" id="">
                            </td>
                            <td class="border border-white" style="background-color: #FFFFFF;">
                            <a href="javascript:void(0)" class="text-danger font-18 removed" title="Remove"><i class="fa fa-trash-o"></i></a>
                            </td>
            </tr>`
        );
    });

    
</script>
