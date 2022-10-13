<div class="card-header">
    <h4 class="card-title">Engagement Fees</h4>
</div>

<div class="form-body container">
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
                        <th class="title-middle" scope="col" style="font-size: 0.9rem;" width=10%>NIGHT SHIFT,
                            WEEKENDS HOLIDAYS *</th>
                        <th class="title-th" scope="col" width=15%>TOTAL FEE</th>
                        <th class="title-th" scope="col" width=15%>NOTES</th>
                        <td class="add-row border border-white" scope="col"></td>
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
                        <td class="title">Lead Consultant</td>
                        <td data-title="# OF CONSULTANTS">
                            <input type="number"
                                class="input js-mytooltip input-table form-control  @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="ef_Leadconsultant1[]" id="ef_LeadconsultantNoc1"
                                min="0"
                                max="100"
                                data-mytooltip-content="<i>Includes in depth needs analysis (i.e. surveys, interviews, FGDs),
                                special research (i.e. to study client materials or client -required materials, industry
                                or function specific content), creation of client-specific learning aids/tools
                                (i.e. assessments, c</i>"
                                data-mytooltip-theme="dark" data-mytooltip-action="focus"
                                data-mytooltip-direction="bottom">
                        </td>
                        <td>
                            <fieldset>
                                <select class="form-select hf-c13 input js-mytooltip @error('') is-invalid @enderror"
                                    name="ef_Leadconsultant1[]" id="ef_LeadconsultantHf"
                                    data-mytooltip-content="<i>P56,000 - Consultants<br>
                                        P72,000 - Senior Consultants<br>
                                        Key Accounts<br>
                                        P50,400 - Consultants, min guaranteed 10 consulting days<br>
                                        P45,000 - Seniuor Consultants, min. guaranteed 10 consulting days</i>"
                                    data-mytooltip-theme="dark" data-mytooltip-action="focus"
                                    data-mytooltip-direction="right" style="background-color:#ffcccc; color:red;">
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
                            <input type="number"
                                class=" form-control input-table input js-mytooltip @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="ef_Leadconsultant1[]" id="ef_LeadconsultantNoh1"
                                data-mytooltip-content="<i>½ Day = 0.50<br>
                                    ¼ Day = 0.25 </i>"
                                data-mytooltip-theme="dark" data-mytooltip-action="focus"
                                data-mytooltip-direction="bottom">
                        </td>
                        <td>
                            <input type="number"
                                class=" form-control input-table input @error('') is-invalid @enderror"
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
                                class="text-success font-18" title="Add" id="addBtn1"><i
                                    class="fa fa-plus"></i></a>
                        </td>
                    </tr>
                </tbody>

                <!------------------------------------------------ANALYST--------------------------------------------------------------------->
                <tbody id="ef_TableAnalyst">
                    <tr class="th-blue-grey-lighten-2" id="ef_RowAnalyst">
                        <td class="title">Analyst</td>
                        <td>
                            <input type="number"
                                class=" input js-mytooltip form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="" id="ef_AnalystNoc1" max="100"
                                data-mytooltip-content="<i>Includes in depth needs analysis (i.e. surveys, interviews, FGDs),
                                special research (i.e. to study client materials or client -required materials, industry
                                or function specific content), creation of client-specific learning aids/tools
                                (i.e. assessments, c</i>"
                                data-mytooltip-theme="dark" data-mytooltip-action="focus"
                                data-mytooltip-direction="bottom">
                        </td>

                        <td>
                            <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="" id="ef_AnalystPdf" data-type="currency">
                        </td>
                        <td>
                            <input type="number"
                                class=" input js-mytooltip form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="" id="ef_AnalystNod1"
                                data-mytooltip-content="<i>½ Day = 0.50<br>
                                                           ¼ Day = 0.25 Number of Hours</i>"
                                data-mytooltip-theme="dark" data-mytooltip-action="focus"
                                data-mytooltip-direction="bottom">
                        </td>
                        <td>
                            <input type="number"
                                class="nwh-e14 form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="" id="ef_AnalystAtd1">
                        </td>
                        <td>
                            <input type="number"
                                class="nwh-e14 form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="" id="ef_AnalystNsw1">
                        </td>
                        <td class="total-td">
                            <h4 class="text-center lead" id="analyst-total">-</h4>
                        </td>
                        <td class="total-td">
                            <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="" id="ef_AnalystNotes">
                        </td>
                        <td style="background-color: #FFFFFF;" class="border border-white"><a
                                href="javascript:void(0)" class="text-success font-18" title="Add"
                                id="addBtn2"><i class="fa fa-plus"></i></a>
                        </td>
                    </tr>
                </tbody>

                <!------------------------------------------------SUBTOTAL-------------------------------------------------------------------->
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
                            value="{{ old('') }}" name="" id="">
                    </td>
                    <td class="border border-white"></td>
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
                        <td class="title">Designer</td>
                        <td>
                            <input type="number"
                                class="noc-b18 input js-mytooltip form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="" id="ef_DesignerNoc1" max="100"
                                data-mytooltip-content="<i>Includes in depth needs analysis (i.e. surveys, interviews, FGDs),
                                special research (i.e. to study client materials or client -required materials, industry
                                or function specific content), creation of client-specific learning aids/tools
                                (i.e. assessments, c</i>"
                                data-mytooltip-theme="dark" data-mytooltip-action="focus"
                                data-mytooltip-direction="bottom">
                        </td>
                        <td>
                            <fieldset>
                                <select
                                    class="hf-c18 input js-mytooltip form-select @error('') is-invalid @enderror select"
                                    name="" id="ef_DesignerPdf"
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
                        <td>
                            <input type="number"
                                class="noh-d18 input js-mytooltip form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="" id="ef_DesignerNod1"
                                data-mytooltip-content="<i>½ Day = 0.50<br>
                                    ¼ Day = 0.25 <br>Number of Hours</i>"
                                data-mytooltip-theme="dark" data-mytooltip-action="focus"
                                data-mytooltip-direction="bottom">
                        </td>
                        <td>
                            <input type="number"
                                class="nwh-e18 form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="" id="ef_DesignerAtd1">
                        </td>
                        <td>
                            <input type="number"
                                class="nwh-e18 form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="" id="ef_DesignerNsw1">
                        </td>
                        <td class="total-td" style="background-color: rgba(146, 146, 146, 0.727)">
                            <h4 class="text-center" id="subtotal-design">-</h4>
                        </td>
                        <td class="total-td">
                            <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="" id="">
                        </td>
                        <td style="background-color: #FFFFFF;" class="border border-white"><a
                                href="javascript:void(0)" class="text-success font-18" title="Add"
                                id="addBtn3"><i class="fa fa-plus"></i></a>
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
                        <td class="title">Lead Facilitator</td>
                        <td>
                            <input type="number"
                                class="noc-b21 form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="" id="ef_LeadFaciNoc1" max="100">
                        </td>
                        <td>
                            <input type="text"
                                class="form-control js-mytooltip input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="" id="ef_LeadFaciPdf"
                                data-mytooltip-content="<i>P80,000 - Key Accounts with min guaranteed 30 full day programs<br>
                                    P88,000 - Non-key accounts signed on or before Apr 30, 2022<br>
                                    P96,000 - Effective May 1, 2022</i>"
                                data-mytooltip-theme="dark" data-mytooltip-action="focus"
                                data-mytooltip-direction="bottom" data-type="currency">
                        </td>
                        <td>
                            <input type="number"
                                class="noh-d21 input js-mytooltip form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="" id="ef_LeadFaciNod1"
                                data-mytooltip-content="<i>½ Day = 0.70</i>" data-mytooltip-theme="dark"
                                data-mytooltip-action="focus" data-mytooltip-direction="bottom">
                        </td>
                        <td>
                            <input type="number"
                                class="nwh-e21 form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="" id="ef_LeadFaciAtd1">
                        </td>
                        <td>
                            <input type="number"
                                class="nwh-e21 form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="" id="ef_LeadFaciNsw1">
                        </td>
                        <td class="total-td">
                            <h4 class="text-center lead" id="subtotal-LeadFaci">-</h4>
                        </td>
                        <td class="total-td">
                            <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="" id="">
                        </td>
                        <td style="background-color: #FFFFFF;" class="border border-white"><a
                                href="javascript:void(0)" class="text-success font-18" title="Add"
                                id="addBtn4"><i class="fa fa-plus"></i></a>
                        </td>
                    </tr>
                </tbody>

                <!------------------------------------------------CO-FACILITATOR-------------------------------------------------------------->
                <tbody id="ef_TableCoFaci">
                    <tr class="th-blue-grey-lighten-2" id="ef_RowCoFaci">
                        <td class="title">Co-facilitator / Resource Speaker</td>
                        <td>
                            <input type="number"
                                class="noc-b22 form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="" id="ef_CoFaciNoc1" max="100">
                        </td>
                        <td>
                            <input type="text"
                                class="hf-c22 form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="" id="ef_CoFaciPdf";
                                data-mytooltip-content="<i>½ Day = 0.70</i>" data-mytooltip-theme="dark"
                                data-mytooltip-action="focus" data-mytooltip-direction="bottom" data-type="currency">
                        </td>
                        <td>
                            <input type="number"
                                class="noh-d22 input js-mytooltip form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="" id="ef_CoFaciNod1"
                                data-mytooltip-content="<i>½ Day = 0.70</i>" data-mytooltip-theme="dark"
                                data-mytooltip-action="focus" data-mytooltip-direction="bottom">
                        </td>
                        <td>
                            <input type="number"
                                class="nwh-e22 form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="" id="ef_CoFaciAtd1">
                        </td>
                        <td>
                            <input type="number"
                                class="nwh-e22 form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="" id="ef_CoFaciNsw1">
                        </td>
                        <td class="total-td">
                            <h4 class="text-center lead" id="subtotal-coFacilitator">-</h4>
                        </td>
                        <td class="total-td">
                            <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="" id="">
                        </td>
                        <td style="background-color: #FFFFFF;" class="border border-white"><a
                                href="javascript:void(0)" class="text-success font-18" title="Add"
                                id="addBtn5"><i class="fa fa-plus"></i></a>
                        </td>
                    </tr>
                </tbody>

                <!------------------------------------------------ACTION LEARNING COACH------------------------------------------------------->
                <tbody id="ef_TableActionLearn">
                    <tr class="th-blue-grey-lighten-2" id="ef_RowActionLearn">
                        <td class="title">Action Learning Coach</td>
                        <td>
                            <input type="number"
                                class="noc-b23 form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="" id="ef_ActionLearnNoc1" max="100">
                        </td>
                        <td>
                            <input type="text"
                                class="hf-c22 form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="" id="ef_ActionLearnPdf"
                                data-type="currency";>
                        </td>
                        <td>
                            <input type="number"
                                class="noh-d23 input js-mytooltip form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="" id="ef_ActionLearnNod1"
                                data-mytooltip-content="<i>½ Day = 0.70</i>" data-mytooltip-theme="dark"
                                data-mytooltip-action="focus" data-mytooltip-direction="bottom">
                        </td>
                        <td>
                            <input type="number"
                                class="nwh-e23 form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="" id="ef_ActionLearnAtd1">
                        </td>
                        <td>
                            <input type="number"
                                class="nwh-e23 form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="" id="ef_ActionLearnNsw1">
                        </td>
                        <td class="total-td">
                            <h4 class="text-center lead" id="subtotal-ActionLearn">-</h4>
                        </td>
                        <td class="total-td">
                            <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="" id="">
                        </td>
                        <td style="background-color: #FFFFFF;" class="border border-white"><a
                                href="javascript:void(0)" class="text-success font-18" title="Add"
                                id="addBtn6"><i class="fa fa-plus"></i></a>
                        </td>
                    </tr>
                </tbody>

                <!------------------------------------------------MARSHAL--------------------------------------------------------------------->
                <tbody id="ef_TableMarshal">
                    <tr class="th-blue-grey-lighten-2" id="ef_RowMarshal">
                        <td class="title">Marshal</td>
                        <td>
                            <input type="number"
                                class="noc-b23 form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="" id="ef_MarshalNoc1" max="100">
                        </td>
                        <td>
                            <input type="text"
                                class="hf-c22 form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="" id="ef_MarshalPdf"
                                data-type="currency";>
                        </td>
                        <td>
                            <input type="number"
                                class="noh-d23 input js-mytooltip form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="" id="ef_MarshalNod1"
                                data-mytooltip-content="<i>½ Day = 0.70</i>" data-mytooltip-theme="dark"
                                data-mytooltip-action="focus" data-mytooltip-direction="bottom">
                        </td>
                        <td>
                            <input type="number"
                                class="nwh-e23 form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="" id="ef_MarshalAtd1">
                        </td>
                        <td>
                            <input type="number"
                                class="nwh-e23 form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="" id="ef_MarshalNsw1">
                        </td>
                        <td class="total-td">
                            <h4 class="text-center lead" id="subtotal-marshal">-</h4>
                        </td>
                        <td class="total-td">
                            <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="" id="">
                        </td>
                        <td style="background-color: #FFFFFF;" class="border border-white"><a
                                href="javascript:void(0)" class="text-success font-18" title="Add"
                                id="addBtn7"><i class="fa fa-plus"></i></a>
                        </td>
                    </tr>
                </tbody>

                <!------------------------------------------------ONSITE PC------------------------------------------------------------------->
                <tbody id="ef_TableOnsite">
                    <tr class="th-blue-grey-lighten-2" id="ef_RowOnsite">
                        <td class="title">On-site PC (P20K / P25K / P30K)</td>
                        <td>
                            <input type="number"
                                class="noc-b23 form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="" id="ef_OnsiteNoc1" max="100">
                        </td>
                        <td>
                            <fieldset>
                                <select class="form-select hf-c13 input js-mytooltip @error('') is-invalid @enderror"
                                    name="" id="ef_OnsitePdf"
                                    data-mytooltip-content="<i>P20,000 - simple indoor programs<br>
                                        P25,000 - roster with 6-10 members<br>
                                        P30,000 - roster with 11 members and up</i>"
                                    data-mytooltip-theme="dark" data-mytooltip-action="focus"
                                    data-mytooltip-direction="right" style="background-color:#ffcccc; color:red;">
                                    <option value="20,000" {{ old('') == '20,000' ? 'selected="selected"' : '' }}
                                        selected>
                                        &#8369;20,000
                                    </option>
                                    <option value="25,000" {{ old('') == '56,000' ? 'selected="selected"' : '' }}>
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
                            <input type="number"
                                class="noh-d23 input js-mytooltip form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="" id="ef_OnsiteNod1"
                                data-mytooltip-content="<i>½ Day = 0.70</i>" data-mytooltip-theme="dark"
                                data-mytooltip-action="focus" data-mytooltip-direction="bottom">
                        </td>
                        <td>
                            <input type="number"
                                class="nwh-e23 form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="" id="ef_OnsiteAtd1">
                        </td>
                        <td>
                            <input type="number"
                                class="nwh-e23 form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="" id="ef_OnsiteNsw1">
                        </td>
                        <td class="total-td">
                            <h4 class="text-center lead" id="subtotal-Onsite">-</h4>
                        </td>
                        <td class="total-td">
                            <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="" id="">
                        </td>
                        <td style="background-color: #FFFFFF;" class="border border-white"><a
                                href="javascript:void(0)" class="text-success font-18" title="Add"
                                id="addBtn8"><i class="fa fa-plus"></i></a>
                        </td>
                    </tr>
                </tbody>

                <!------------------------------------------------SUBTOTAL-------------------------------------------------------------------->
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
                            value="{{ old('') }}" name="" id="">
                    </td>
                    <td class="border border-white"></td>
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
                        <td class="title">Documentor</td>
                        <td>
                            <input type="number"
                                class="noc-b28 form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="" id="ef_DocumentorNoc1" max="100">
                        </td>
                        <td>
                            <input type="text"
                                class="hf-c22 form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="" id="ef_DocumentorPdf"
                                data-type="currency";>
                        </td>
                        <td>
                            <input type="number"
                                class="noh-d28 input js-mytooltip form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="" id="ef_DocumentorNod1"
                                data-mytooltip-content="<i>½ Day = 0.70</i>" data-mytooltip-theme="dark"
                                data-mytooltip-action="focus" data-mytooltip-direction="bottom">
                        </td>
                        <td>
                            <input type="number"
                                class="nwh-e28 form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="" id="ef_DocumentorAtd1">
                        </td>
                        <td>
                            <input type="number"
                                class="nwh-e28 form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="" id="ef_DocumentorNsw1">
                        </td>
                        <td class="total-td" style="background-color: rgba(146, 146, 146, 0.727">
                            <h4 class="text-center" id="subtotal-Documentor">-</h4>
                        </td>
                        <td class="total-td">
                            <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="" id="">
                        </td>
                        <td style="background-color: #FFFFFF;" class="border border-white"><a
                                href="javascript:void(0)" class="text-success font-18" title="Add"
                                id="addBtn9"><i class="fa fa-plus"></i></a>
                        </td>
                    </tr>
                </tbody>

                <!------------------------------------------------PER DIEM-------------------------------------------------------------------->
                <tr class="th-blue-grey-lighten">
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
                        <input type="number"
                            class="noh-d28 input  form-control input-table @error('') is-invalid @enderror"
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
                <tr class="table-active overall-total">
                    <td class="text-uppercase text-dark fst-italic fw-bold overall-total-start">TOTAL STANDARD FEES
                    </td>
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
                            value="{{ old('') }}" name="" id="">
                    </td>

                </tr>
                <tr class="table-active">
                    <td class="fw-bold text-dark text-uppercase fst-italic overall-total-start">discount given (if any)
                    </td>
                    <td class="overall-total-middle"></td>
                    <td class="overall-total-middle table-warning">
                        <input type="text"
                            class="hf-c32 form-control input-table text-center @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="" id="inpt_dsct" readonly>
                    </td>
                    <td class="overall-total-middle"></td>
                    <td class="overall-total-middle"></td>
                    <td class="overall-total-middle"></td>
                    <td class="overall-total-end"></td>
                    <td class="overall-total-end">
                        <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="" id="total_dsct">
                    </td>

                </tr>

                <tr class="table-active">
                    <td class="fw-bold text-uppercase text-dark fst-italic overall-total-start">total package</td>
                    <td class="overall-total-middle"></td>
                    <td class="overall-total-middle"></td>
                    <td class="overall-total-middle"></td>
                    <td class="overall-total-middle"></td>
                    <td class="overall-total-middle"></td>
                    <td class="overall-total-end table-warning">
                        <input type="text"
                            class="tf-f34 form-control text-center text-danger fw-bolder input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="" id="input_totalPackages"
                            style="font-size: 20px;">
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

@include('form.components.f2f_engagement.f2f_script.f2f_engagement_fees')
