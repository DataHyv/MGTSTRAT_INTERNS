<!------------ CARD HEADER ------------>
    <div class="card-header">
        <h4 class="card-title" style="display: inline;">Engagement Cost</h4>
        <div style="float:right">
            <button class="btn btn-secondary mx-0 js-btn-prev" type="button" title="Prev">Prev</button>
            <button class="btn btn-primary mx-0 js-btn-next" type="button" title="Next">Next</button>
            @if($data)                                                    
                @if($data->cstmzd_eng_form_id)
                    <button class="btn btn-success mx-0 js-btn-next" type="submit" title="Submit">Save</button>
                @endif
            @else
                    <button class="btn btn-success mx-0 js-btn-next" type="submit" title="Submit">Submit</button>
            @endif
        </div>
    </div>
<!------------ END CARD HEADER ------------>

<!------------ FORM BODY ------------>
    <div class="form-body">
        <section>
            <div class="table-responsive" id="no-more-tables">
                <table class="table table-bordered" id="ec_tableEngagementCost" style="width: 100%">
                <!------------------- TABLE HEAD ----------------------->
                    <thead class="th-blue-grey">
                        <tr class="text-center">
                            <th class="title-th" scope="col" width=15%></th>
                            <th class="title-middle px-1" scope="col" style="font-size: 0.8rem;" width="8%">NUMBER OF CONSULTANTS</th>
                            <th class="title-middle px-5" scope="col" style="font-size: 0.9rem;" width="15%">HOURLY FEES</th>
                            <th class="title-middle px-3" scope="col" style="font-size: 0.8rem;" width="8%">NUMBER OF HOURS</th>
                            <th class="title-middle" scope="col" style="font-size: 0.8rem;" width="8%">NSWH</th>
                            <th class="title-th" scope="col" width=15%>TOTAL FEE</th>
                            <th class="title-th" scope="col" width=15%>ROSTER</th>
                            <th class="title-th" scope="col" width=14%>NOTES</th>
                            <td class="border border-white add-row" width="2%"> </td>
                        </tr>
                    </thead>
                <!------------------- END TABLE HEAD ----------------------->

                <!------------------- COMMISION ----------------------->
                    <tr class="th-blue-grey-lighten">
                        <th class="px-4 title text-dark font-weight-bold"><b>COMMISSION</b></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th class="total-td"></th>
                        <th class="total-td"></th>
                        <th class="total-td"></th>
                        <th class="border border-white add-row" style="display: none"> </th>
                    </tr>

                    <tbody id="tableSales">
                        <tr class="th-blue-grey-lighten-2" id="salesRow">
                            <td class="title">
                                <input type="text" class="d-none" value="Sales" name="cost_type[]" readonly>
                                Sales (4% / 5% / 6% / 7%)
                            </td>
                            <td><input type="text" class="d-none" value="" name="cost_consultant_num[]" readonly></td>      
                            <td class="table-danger">
                                <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                    value="{{ old('') }}" name="cost_hour_fee[]" id="inputSales" style="display: none;"
                                    onblur="this.value = this.value.replace('%', '') + '%';"
                                    oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"
                                    maxlength="2" disabled>

                                <fieldset id="dropdownSales">
                                    <select class="input js-mytooltip form-select @error('') is-invalid @enderror"
                                        name="cost_hour_fee[]" id="sales"
                                        data-mytooltip-content="<i>
                                                <b>Sales</b><br>
                                                For large engagements, with EMs: <br>
                                                4% - discounted <br>
                                                6% - standard rates<br>
                                                <br>
                                                For regular engagements:<br>
                                                5% - discounted<br>
                                                7% - standard rates<br>
                                                <br>
                                                For Key Accounts, with EMs:<br>
                                                4% - discounted<br>
                                                5% - packaged rate</i>"
                                        data-mytooltip-theme="dark" data-mytooltip-action="focus"
                                        data-mytooltip-direction="right" style="background-color:#ffcccc; color:red;">
                                        <option value="0%" {{ old('') == '0' ? 'selected="selected"' : '' }}
                                            title="with minimal design customization, or platform customization outside of Zoom/Google Meets/MS Teams. Up to 2 hours of work" selected>
                                            0%
                                        </option>
                                        <option value="4%" {{ old('') == '4' ? 'selected="selected"' : '' }}
                                            title="with minimal design customization, or platform customization outside of Zoom/Google Meets/MS Teams. Up to 2 hours of work">
                                            4%
                                        </option>
                                        <option value="5%" {{ old('') == '5' ? 'selected="selected"' : '' }}
                                            title="with minimal design customization, or platform customization outside of Zoom/Google Meets/MS Teams. Up to 2 hours of work">
                                            5%
                                        </option>
                                        <option value="6%" {{ old('') == '6' ? 'selected="selected"' : '' }}
                                            title="with minimal design customization, or platform customization outside of Zoom/Google Meets/MS Teams. Up to 2 hours of work">
                                            6%
                                        </option>
                                        <option value="7%" {{ old('') == '7' ? 'selected="selected"' : '' }}
                                            title="with minimal design customization, or platform customization outside of Zoom/Google Meets/MS Teams. Up to 2 hours of work">
                                            7%
                                        </option>
                                    </select>
                                    @error('')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </fieldset>
                            </td>
                            <td><input type="text" class="d-none" value="" name="cost_hour_num[]" readonly></td>
                            <td><input type="text" class="d-none" value="" name="cost_nswh[]" readonly></td>
                            <td class="total-td tbl-engmt-cost" style="background-color: rgba(146, 146, 146, 0.727">
                                <h4 class="text-center text-danger" id="salesTotal">-</h4>
                            </td>
                            <td class="total-td">
                                <input  type="text" 
                                        class="form-control input-table @error('') is-invalid @enderror"
                                        value="{{ old('') }}" 
                                        name="cost_rooster[]" 
                                        id="roster201"
                                        oninput="filterConsultant(`roster201`, ``);"
                                        list="filtered_consultant_list" 
                                        autocomplete="off"
                                        >   
                                <input  type="hidden" value="" name="cost_rooster_id[]" id="id_roster201">
                            </td>
                            <td class="total-td">
                                <textarea   class="form-control input-table @error('') is-invalid @enderror" 
                                            name="cost_notes[]" 
                                            id="salesNotes" 
                                            rows="2" cols="55" >
                                </textarea>
                            </td>
                            <td style="background-color: #FFFFFF;" class="border border-white">
                                <a href="javascript:void(0)" class="text-success font-18" title="Add" id="addBtn9" onclick="$('#salesTotal').html(0)">
                                    <i class="fa fa-plus"></i>
                                </a>
                            </td>
                        </tr>
                    </tbody>

                    <tbody id="tableReferral">
                        <tr class="th-blue-grey-lighten-2" id="referralRow">
                            <td class="title">
                                Referral (2% / 3%)
                                <input type="text" class="d-none" value="Referral" name="cost_type[]" readonly>
                            </td>
                            <td>
                                <input type="text" class="d-none" value="" name="cost_consultant_num[]" readonly>
                            </td>
                            <td class="table-danger">
                                <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                    value="{{ old('') }}" name="cost_hour_fee[]" id="inputReferral" style="display: none;"
                                    onblur="this.value = this.value.replace('%', '') + '%';"
                                    oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"
                                    maxlength="2" disabled>

                                <fieldset id="dropdownReferral">
                                    <select class="input js-mytooltip form-select @error('') is-invalid @enderror"
                                        name="cost_hour_fee[]" id="referral"
                                        data-mytooltip-content="<i>
                                                Referral - 2% - repeat contracts from the same client<br>
                                                3% - 1st contract with a new client, or with a 2-year dormant client<br>
                                                <br>
                                                When in doubt, check with Joi on who referror is.

                                                </i>"
                                        data-mytooltip-theme="dark" data-mytooltip-action="focus"
                                        data-mytooltip-direction="right" style="background-color:#ffcccc; color:red;">
                                        <option value="0%" {{ old('') == '0' ? 'selected="selected"' : '' }}
                                            title="" selected>
                                            0%
                                        </option>
                                        <option value="2%" {{ old('') == '2' ? 'selected="selected"' : '' }}
                                            title="">
                                            2%
                                        </option>
                                        <option value="3%" {{ old('') == '3' ? 'selected="selected"' : '' }}
                                            title="">
                                            3%
                                        </option>
                                    </select>
                                    @error('')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </fieldset>
                            </td>
                            <td><input type="text" class="d-none" value="" name="cost_hour_num[]" readonly></td>
                            <td><input type="text" class="d-none" value="" name="cost_nswh[]" readonly></td>
                            <td class="total-td tbl-engmt-cost" style="background-color: rgba(146, 146, 146, 0.727">
                                <h4 class="text-center text-danger" id="referralTotal">-</h4>
                            </td>
                            <td class="total-td">
                                <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                    value="{{ old('') }}" name="cost_rooster[]" id="roster211"                                     
                                    oninput="filterConsultant(`roster211`, ``);"
                                    list="filtered_consultant_list" 
                                    autocomplete="off"
                                    >
                                <input  type="hidden" value="" name="cost_rooster_id[]" id="id_roster211">
                            </td>
                            <td class="total-td">
                                <textarea class="form-control input-table @error('') is-invalid @enderror"
                                    name="cost_notes[]" id="referralNotes" rows="2" cols="55"></textarea>
                            </td>
                            <td class="border border-white add-row"><a href="javascript:void(0)" class="text-success font-18" title="Add"
                                    id="addBtn10"><i class="fa fa-plus"></i></a></td>
                        </tr>
                    </tbody>

                    <tbody id="tableEngagementmanager">
                        <tr class="th-blue-grey-lighten-2" id="engagementmanagerRow">
                            <td class="title fw-bold text-dark">
                                ENGAGEMENT MANAGER
                                <input type="text" class="d-none" value="Engagement Manager" name="cost_type[]" readonly>
                            </td>
                            <td><input type="text" class="d-none" value="" name="cost_consultant_num[]" readonly></td>
                            <td class="table-danger">
                                <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                    value="{{ old('') }}" name="cost_hour_fee[]" id="inputManager" style="display: none;"
                                    onblur="this.value = this.value.replace('%', '') + '%';"
                                    oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"
                                    maxlength="2" disabled>

                                <fieldset id="dropdownManager">
                                    <select class="input js-mytooltip form-select @error('') is-invalid @enderror"
                                        name="cost_hour_fee[]" id="engagementManager"
                                        style="background-color:#ffcccc; color:red;"
                                        data-mytooltip-content="<i>
                                                Engagement Manager - 4% - all Key Accounts and large engagements <br>
                                                <br>
                                                Large engagments: large scale consulting, or a series of at least 8 virtual sessions under 1 contract involving a roster of at least 2 people
                                                </i>"
                                        data-mytooltip-theme="dark" data-mytooltip-action="focus"
                                        data-mytooltip-direction="right">
                                        <option value="0%" {{ old('') == '0' ? 'selected="selected"' : '' }}
                                            title="">
                                            0%
                                        </option>
                                        <option value="4%" {{ old('') == '4' ? 'selected="selected"' : '' }}
                                            title="">
                                            4%
                                        </option>
                                    </select>
                                    @error('')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </fieldset>
                            </td>
                            <td><input type="text" class="d-none" value="" name="cost_hour_num[]" readonly></td>
                            <td><input type="text" class="d-none" value="" name="cost_nswh[]" readonly></td>
                            <td class="total-td tbl-engmt-cost" style="background-color: rgba(146, 146, 146, 0.727">
                                <h4 class="text-center text-danger" id="engagementManagerTotal">-</h4>
                            </td>
                            <td class="total-td">
                                <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                    value="{{ old('') }}" name="cost_rooster[]" id="roster221" 
                                    oninput="filterConsultant(`roster221`, ``);"
                                    list="filtered_consultant_list" 
                                    autocomplete="off">
                                <input  type="hidden" value="" name="cost_rooster_id[]" id="id_roster221">
                            </td>
                            <td class="total-td">
                                <textarea class="form-control input-table @error('') is-invalid @enderror"
                                    name="cost_notes[]" id="engagementManagerNotes" rows="2" cols="55"></textarea>
                            </td>
                            <td class="border border-white add-row">
                                <a href="javascript:void(0)" class="text-success font-18" title="Add" id="addBtn11">
                                    <i class="fa fa-plus"></i>
                                </a>
                            </td>
                        </tr>
                    </tbody>
                <!------------------- END COMMISION ----------------------->

                <!------------------- CONSULTING ------------------------->
                    <tr class="th-blue-grey-lighten">
                        <th class="px-4 title text-dark">
                            <b>1. CONSULTING</b>
                        </th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th class="total-td"></th>
                        <th class="total-td"></th>
                        <th class="total-td"></th>
                        <th class="border border-white add-row" style="display: none"></th>
                    </tr>

                    <tbody id="ec_tableLeadConsultant">
                        <tr class="th-blue-grey-lighten-2" id="ec_LeadConsultant">
                            <td class="title">
                                <input type="text" class="d-none" value="Lead Consultant" name="cost_type[]" readonly>
                                Lead Consultant
                            </td>
                            <td class="mgt-td-dark-bg">
                                <input type="text"
                                    class="text-center form-control input-table commanumber @error('') is-invalid @enderror"
                                    value="{{ old('') }}" name="cost_consultant_num[]" id="ec_LeadconsultantNoc1" data-type="currency" readonly="readonly">
                            </td>
                            <td class="mgt-td-dark-bg">
                                <input type="text"
                                    class="text-center fw-bold text-dark form-control input-table commanumber @error('') is-invalid @enderror"
                                    value="{{ old('') }}" name="cost_hour_fee[]" id="ec_LeadconsultantHf1" data-type="currency">
                            </td>
                            <td class="mgt-td-dark-bg">
                                <input type="text"
                                    class="text-center form-control input-table commanumber @error('') is-invalid @enderror"
                                    value="{{ old('') }}" name="cost_hour_num[]" id="ec_LeadconsultantNoh1" data-type="currency" readonly="readonly">
                            </td>
                            <td class="mgt-td-dark-bg">
                                <input type="text"
                                    class="text-center form-control input-table commanumber @error('') is-invalid @enderror"
                                    value="{{ old('') }}" name="cost_nswh[]" id="ec_LeadconsultantNwh1" data-type="currency" readonly="readonly">
                            </td>
                            <td class="total-td">
                                <h4 class="text-center lead text-danger" id="ec_LeadconsultantTotal">-</h4>
                            </td>
                            <td class="total-td table-warning">
                                <input class="text-uppercase form-control input-table @error('') is-invalid @enderror"
                                    name="cost_rooster[]" id="roster1"
                                    oninput="filterConsultant(`roster1`, `ec_LeadconsultantHf1`, `leadConsultant`);"
                                    list="filtered_consultant_list" 
                                    autocomplete="off"
                                    >
                                <input  type="hidden" value="" name="cost_rooster_id[]" id="id_roster1">
                                <div id="consultant-fees-name">
                                </div>
                            </td>
                            <td class="total-td">
                                <textarea class="form-control input-table @error('') is-invalid @enderror"
                                    name="cost_notes[]" id="ec_LeadconsultantNotes1" rows="2" cols="55"></textarea>
                            </td>
                            <td class="border border-white add-row">
                                <a href="javascript:void(0)" class="text-success font-18" title="Add" id="CeAddBtn">
                                    <i class="fa fa-plus"></i>
                                </a>
                            </td>
                        </tr>
                    </tbody>

                    <tbody id="ec_tableAnalyst">
                        <tr class="th-blue-grey-lighten-2" id="ec_Analyst1">
                            <td class="title">
                                <input type="text" class="d-none" value="Analyst" name="cost_type[]" readonly>
                                Analyst

                            </td>
                            <td class="mgt-td-dark-bg">
                                <input type="text"
                                    class="text-center form-control input-table commanumber @error('') is-invalid @enderror"
                                    value="{{ old('') }}" name="cost_consultant_num[]" id="ec_AnalystNoc1" data-type="currency" readonly="readonly">
                            </td>
                            <td class="bg-white">
                                <input type="text"
                                    class="text-center fw-bold text-dark form-control input-table commanumber @error('') is-invalid @enderror"
                                    value="{{ old('') }}" name="cost_hour_fee[]" id="ec_AnalystHf1" data-type="currency">
                            </td>
                            <td class="mgt-td-dark-bg">
                                <input type="text"
                                    class="text-center form-control input-table commanumber @error('') is-invalid @enderror"
                                    value="{{ old('') }}" name="cost_hour_num[]" id="ec_AnalystNoh1" data-type="currency" readonly="readonly">
                            </td>
                            <td class="mgt-td-dark-bg">
                                <input type="text"
                                    class="text-center form-control input-table commanumber @error('') is-invalid @enderror"
                                    value="{{ old('') }}" name="cost_nswh[]" id="ec_AnalystNwh1" data-type="currency" readonly="readonly">
                            </td>
                            <td class="total-td">
                                <h4 class="text-center lead text-danger" id="ec_AnalystTotal">-</h4>
                            </td>
                            <td class="total-td">
                                <input class="text-uppercase form-control input-table @error('') is-invalid @enderror"
                                    name="cost_rooster[]" id="roster231" 
                                    oninput="filterConsultant(`roster231`, ``, ``);"
                                    list="filtered_consultant_list" 
                                    autocomplete="off">
                                <input  type="hidden" value="" name="cost_rooster_id[]" id="id_roster231">
                            </td>
                            <td class="total-td">
                                <textarea class="form-control input-table @error('') is-invalid @enderror"
                                    name="cost_notes[]" id="ec_AnalystNotes1" rows="2" cols="55"></textarea>
                            </td>
                            <td class="border border-white add-row">
                                <a href="javascript:void(0)" class="text-success font-18" title="Add" id="CeAddBtn2">
                                    <i class="fa fa-plus"></i>
                                </a>
                            </td>
                        </tr>
                    </tbody>

                    <tr class="table-secondary">
                        <td class="title fw-bold text-dark fst-italic">Subtotal</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td class="total-td tbl-engmt-cost" style="background-color: rgba(146, 146, 146, 0.727">
                            <h4 class="text-center text-danger" id="ec_SubtotalConsulting">-</h4>
                        </td>
                        <td class="total-td"></td>
                        <td class="total-td"></td>
                        <td class="border border-white add-row invisible"> </td>
                    </tr>
                <!------------------- END CONSULTING ----------------------->

                <!------------------- DESIGN ------------------------->
                    <tr class="th-blue-grey-lighten">
                        <th class="title px-4 text-dark">
                            <b>2. DESIGN</b>
                        </th>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td class="total-td"></td>
                        <td class="total-td"></td>
                        <td class="total-td"></td>
                        <td class="border border-white add-row" style="display: none"> </td>
                    </tr>

                    <tbody id=ec_TableDesigner>
                        <tr class="th-blue-grey-lighten-2" id=ec_DesignerRow1>
                            <td class="title">Designer
                                <input type="text" class="d-none" value="Designer" name="cost_type[]" readonly>
                            </td>
                            <td class="mgt-td-dark-bg">
                                <input type="text"
                                    class="text-center form-control input-table commanumber @error('') is-invalid @enderror"
                                    value="{{ old('') }}" name="cost_consultant_num[]" id="ec_DesignerNoc1" data-type="currency" readonly="readonly">
                            </td>
                            <td class="mgt-td-dark-bg">
                                <input type="text"
                                    class="text-center fw-bold text-dark text-center form-control input-table commanumber @error('') is-invalid @enderror"
                                    value="{{ old('') }}" name="cost_hour_fee[]" id="ec_DesignerHf1" data-type="currency">
                            </td>
                            <td class="mgt-td-dark-bg">
                                <input type="text"
                                    class="text-center form-control input-table commanumber @error('') is-invalid @enderror"
                                    value="{{ old('') }}" name="cost_hour_num[]" id="ec_DesignerNoh1" data-type="currency" readonly="readonly">
                            </td>
                            <td class="">
                                <input type="text"
                                    class="text-center form-control input-table commanumber @error('') is-invalid @enderror d-none"
                                    value="{{ old('') }}" name="cost_nswh[]" id="ec_DesignerNwh1" data-type="currency">
                            </td>
                            <td class="total-td">
                                <h4 class="text-center lead text-danger" id="ec_DesignerTotal">-</h4>
                            </td>
                            <td class="total-td table-warning">
                                <input type="text" class="text-uppercase form-control input-table @error('') is-invalid @enderror"
                                    value="{{ old('') }}" name="cost_rooster[]" id="roster21" 
                                    oninput="filterConsultant(`roster21`, `ec_DesignerHf1`, `designer`);"
                                    list="filtered_consultant_list" 
                                    autocomplete="off">
                                <input  type="hidden" value="" name="cost_rooster_id[]" id="id_roster21">
                            </td>
                            <td class="total-td">
                                <textarea class="form-control input-table @error('') is-invalid @enderror"
                                    name="cost_notes[]" id="ec_DesignerNotes1" rows="2" cols="55"></textarea>
                            </td>
                            <td class="border border-white add-row">
                                <a href="javascript:void(0)" class="text-success font-18" title="Add" id="CeAddBtn3">
                                    <i class="fa fa-plus"></i>
                                </a>
                            </td>
                        </tr>
                    </tbody>

                    <tbody id="ec_TableCreators">
                        <tr class="th-blue-grey-lighten-2" id="ec_CreatorsRow1">
                            <td class="title">
                                Creators Fees
                                <input type="text" class="d-none" value="Creators Fees" name="cost_type[]" readonly>
                            </td>
                            <td class="">
                                <input type="text"
                                    class="text-center form-control input-table commanumber @error('') is-invalid @enderror"
                                    value="1" name="cost_consultant_num[]" id="ec_CreatorsNoc1" hidden>
                            </td>
                            <td class="table-danger">
                                <fieldset>
                                    <select class="input js-mytooltip form-select @error('') is-invalid @enderror"
                                        name="cost_hour_fee[]" id="ec_CreatorsHf1"
                                        data-mytooltip-content="<i>
                                                Creators Fee - 0 - no creators fee<br><br>
                                                500 - Creators Fee is the creator is the lead, for the 2nd session onwards<br><br>
                                                1,000 - Creators Fee if creator is NOT the lead, for the 2nd session onwards</i>"
                                        data-mytooltip-theme="dark" data-mytooltip-action="focus"
                                        data-mytooltip-direction="right" style="background-color:#ffcccc; color:red;">
                                        <option value="500" {{ old('') == '500' ? 'selected="selected"' : '' }}
                                            title="">
                                            &#8369;500
                                        </option>
                                        <option value="1000" {{ old('') == '1000' ? 'selected="selected"' : '' }}
                                            title="">
                                            &#8369;1,000
                                        </option>
                                        <option value="2000" {{ old('') == '2000' ? 'selected="selected"' : '' }}
                                            title="">
                                            &#8369;2,000
                                        </option>
                                    </select>
                                    @error('ef_customFee')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </fieldset>
                            </td>
                            <td class="table-warning">
                                <input type="text"
                                    class="text-center form-control input-table commanumber @error('') is-invalid @enderror"
                                    value="{{ old('') }}" name="cost_hour_num[]" id="ec_CreatorsNoh1" data-type="currency">
                            </td>
                            <td class=""><input type="text" class="d-none" name="cost_nswh[]" readonly></td>
                            <td class="total-td">
                                <h4 class="text-center lead text-danger" id="ec_CreatorsTotal">-</h4>
                            </td>
                            <td class="total-td">
                                <input type="text" class="text-uppercase form-control input-table @error('') is-invalid @enderror"
                                    value="{{ old('') }}" name="cost_rooster[]" id="roster241"  
                                    oninput="filterConsultant(`roster241`, ``, ``);" 
                                    list="filtered_consultant_list" 
                                    autocomplete="off">
                                <input  type="hidden" value="" name="cost_rooster_id[]" id="id_roster241">
                            </td>
                            <td class="total-td">
                                <textarea class="form-control input-table @error('') is-invalid @enderror"
                                    name="cost_notes[]" id="ec_CreatorsNotes1" rows="2" cols="55"></textarea>
                            </td>
                            <td style="background-color: #FFFFFF;" class="border border-white"><a href="javascript:void(0)"
                                class="text-success font-18" title="Add" id="addBtnCreators"><i
                                    class="fa fa-plus"></i></a>
                            </td>
                        </tr>
                    </tbody>

                    <tr class="table-secondary">
                        <td class="title fw-bold text-dark fst-italic">Subtotal</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td class="total-td tbl-engmt-cost" style="background-color: rgba(146, 146, 146, 0.727">
                            <h4 class="text-center text-danger" id="ec_DesignSubtotal">-</h4>
                        </td>
                        <td class="total-td"></td>
                        <td class="total-td"></td>
                        <td class="border border-white add-row invisible"> </td>
                    </tr>
                <!------------------- END DESIGN ----------------------->

                <!------------------- PROGRAM ------------------------->
                    <tr class="th-blue-grey-lighten">
                        <th class="title px-4 text-dark">
                            <b>3. PROGRAM</b>
                        </th>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>
                        </td>
                        <td class="total-td"></td>
                        <td class="total-td"></td>
                        <td class="total-td"></td>
                        <td class="border border-white add-row invisible"> </td>
                    </tr>

                    <tbody id="ec_TableLeadfaci">
                        <tr class="th-blue-grey-lighten-2">
                            <td class="title">
                                Lead Facilitator
                                <input type="text" class="d-none" value="Lead Facilitator" name="cost_type[]" readonly>
                            </td>
                            <td class="mgt-td-dark-bg">
                                <input type="text"
                                    class="text-center form-control input-table commanumber @error('') is-invalid @enderror"
                                    value="{{ old('') }}" name="cost_consultant_num[]" id="ec_LeadfacilitatorNoc1" data-type="currency" readonly="readonly">
                            </td>
                            <td  class="mgt-td-dark-bg">
                                <input type="text"
                                    class="text-center fw-bold text-center text-dark form-control input-table commanumber @error('') is-invalid @enderror"
                                    value="{{ old('') }}" name="cost_hour_fee[]" id="ec_LeadfacilitatorHf1" data-type="currency">
                            </td class="mgt-td-dark-bg">
                            <td class="mgt-td-dark-bg">
                                <input type="text"
                                    class="text-center form-control input-table commanumber @error('') is-invalid @enderror"
                                    value="{{ old('') }}" name="cost_hour_num[]" id="ec_LeadfacilitatorNoh1" data-type="currency" readonly="readonly">
                            </td>
                            <td class="mgt-td-dark-bg">
                                <input type="text"
                                    class="text-center form-control input-table commanumber @error('') is-invalid @enderror"
                                    value="{{ old('') }}" name="cost_nswh[]" id="ec_LeadfacilitatorNwh1" data-type="currency" readonly="readonly">
                            </td>
                            <td class="total-td">
                                <h4 class="text-center lead text-danger" id="ec_LeadfacilitatorTotal">-</h4>
                            </td>
                            <td class="total-td table-warning">
                                <input type="text" class="text-uppercase form-control input-table @error('') is-invalid @enderror"
                                    value="{{ old('') }}" name="cost_rooster[]" id="roster31" 
                                    oninput="filterConsultant(`roster31`, `ec_LeadfacilitatorHf1`, `leadFacilitator`);"
                                    list="filtered_consultant_list" 
                                    autocomplete="off"
                                    >
                                <input  type="hidden" value="" name="cost_rooster_id[]" id="id_roster31">
                            </td>
                            <td class="total-td">
                                <textarea class="form-control input-table @error('') is-invalid @enderror"
                                    name="cost_notes[]" id="ec_LeadfacilitatorNotes31" rows="2" cols="55"></textarea>
                            </td>
                            <td class="border border-white add-row">
                                <a href="javascript:void(0)" class="text-success font-18" title="Add" id="CeAddBtn4">
                                    <i class="fa fa-plus"></i>
                                </a>
                            </td>
                        </tr>
                    </tbody>

                    <tbody id="ec_TableCoLeadfaci">
                        <tr class="th-blue-grey-lighten-2">
                            <td class="title">
                                Co-Lead
                                <input type="text" class="d-none" value="Co-Lead" name="cost_type[]" readonly>
                            </td>
                            <td class="mgt-td-dark-bg">
                                <input type="text"
                                    class="text-center form-control input-table commanumber @error('') is-invalid @enderror"
                                    value="{{ old('') }}" name="cost_consultant_num[]" id="ec_CoLeadfacilitatorNoc1" data-type="currency">
                            </td>
                            <td class="mgt-td-dark-bg">
                                <input type="text"
                                    class="text-center fw-bold text-center text-dark form-control input-table commanumber @error('') is-invalid @enderror"
                                    value="{{ old('') }}" name="cost_hour_fee[]" id="ec_CoLeadfacilitatorHf1" data-type="currency">
                            </td>
                            <td class="mgt-td-dark-bg">
                                <input type="text"
                                    class="text-center form-control input-table commanumber @error('') is-invalid @enderror"
                                    value="{{ old('') }}" name="cost_hour_num[]" id="ec_CoLeadfacilitatorNoh1" data-type="currency">
                            </td>
                            <td class="mgt-td-dark-bg">
                                <input type="text"
                                    class="text-center form-control input-table commanumber @error('') is-invalid @enderror"
                                    value="{{ old('') }}" name="cost_nswh[]" id="ec_CoLeadfacilitatorNwh1" data-type="currency">
                            </td>
                            <td class="total-td">
                                <h4 class="text-center lead text-danger" id="ec_CoLeadfacilitatorTotal">-</h4>
                            </td>
                            <td class="total-td table-warning">
                                <input type="text" class="text-uppercase form-control input-table @error('') is-invalid @enderror"
                                    value="{{ old('') }}" name="cost_rooster[]" id="roster41"
                                    oninput="filterConsultant(`roster41`, `ec_CoLeadfacilitatorHf1`, `coLead`);"
                                    list="filtered_consultant_list" 
                                    autocomplete="off">
                                <input  type="hidden" value="" name="cost_rooster_id[]" id="id_roster41">
                            </td>
                            <td class="total-td">
                                <textarea class="form-control input-table @error('') is-invalid @enderror"
                                    name="cost_notes[]" id="ec_CoLeadfacilitatorNotes1" rows="2" cols="55"></textarea>
                            </td>
                            <td style="background-color: #FFFFFF;" class="border border-white">
                                <a href="javascript:void(0)" class="text-success font-18" title="Add" id="addBtnCoLead">
                                    <i class="fa fa-plus"></i>
                                </a>
                            </td>
                        </tr>
                    </tbody>

                    <tbody id="ec_TableAlCoach">
                        <tr class="th-blue-grey-lighten-2">
                            <td class="title">
                                AL Coach
                                <input type="text" class="d-none" value="AL Coach" name="cost_type[]" readonly>
                            </td>
                            <td class="mgt-td-dark-bg">
                                <input type="text"
                                    class="text-center form-control input-table commanumber @error('') is-invalid @enderror"
                                    value="{{ old('') }}" name="cost_consultant_num[]" id="ec_AlCoachNoc1" data-type="currency">
                            </td>
                            <td class="mgt-td-dark-bg">
                                <input type="text"
                                    class="text-center fw-bold text-center text-dark form-control input-table commanumber @error('') is-invalid @enderror"
                                    value="{{ old('') }}" name="cost_hour_fee[]" id="ec_AlCoachHf1" data-type="currency" readonly="readonly">
                            </td>
                            <td class="mgt-td-dark-bg">
                                <input type="text"
                                    class="text-center form-control input-table commanumber @error('') is-invalid @enderror"
                                    value="{{ old('') }}" name="cost_hour_num[]" id="ec_AlCoachNoh1" data-type="currency">
                            </td>
                            <td class="mgt-td-dark-bg">
                                <input type="text"
                                    class="text-center form-control input-table commanumber @error('') is-invalid @enderror"
                                    value="{{ old('') }}" name="cost_nswh[]" id="ec_AlCoachNwh1" data-type="currency">
                            </td>
                            <td class="total-td">
                                <h4 class="text-center lead text-danger" id="ec_AlCoachTotal">-</h4>
                            </td>
                            <td class="total-td table-warning">
                                <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                    value="{{ old('') }}" name="cost_rooster[]" id="roster101" 
                                    oninput="filterConsultant(`roster101`, `ec_AlCoachHf1`, `alCoach`);"
                                    list="filtered_consultant_list" 
                                    autocomplete="off">
                                <input  type="hidden" value="" name="cost_rooster_id[]" id="id_roster101">
                            </td>
                            <td class="total-td">
                                <textarea class="form-control input-table @error('') is-invalid @enderror"
                                    name="cost_notes[]" id="ec_AlCoachNotes1" rows="2" cols="55"></textarea>
                            </td>
                            <td style="background-color: #FFFFFF;" class="border border-white">
                                <a href="javascript:void(0)" class="text-success font-18" title="Add" id="addBtnAlCoach">
                                    <i class="fa fa-plus"></i>
                                </a>
                            </td>
                        </tr>
                    </tbody>

                    <tbody id="ec_TableCofaci">
                        <tr class="th-blue-grey-lighten-2">
                            <td class="title">
                                Co-Facilitator / Resource Speaker
                                <input type="text" class="d-none" value="Co-Facilitator / Resource Speaker" name="cost_type[]" readonly>
                            </td>
                            <td class="mgt-td-dark-bg">
                                <input type="text"
                                    class="text-center text-dark form-control input-table commanumber @error('') is-invalid @enderror"
                                    value="{{ old('') }}" name="cost_consultant_num[]" id="ec_CofacilitatorNoc1" data-type="currency" readonly="readonly">
                            </td>
                            <td class="mgt-td-dark-bg">
                                <input type="text"
                                    class="text-center text-dark fw-bold form-control input-table commanumber @error('') is-invalid @enderror"
                                    value="{{ old('') }}" name="cost_hour_fee[]" id="ec_CofacilitatorHf1" data-type="currency">
                            </td>
                            <td class="mgt-td-dark-bg">
                                <input type="text"
                                    class="text-center text-dark form-control input-table commanumber @error('') is-invalid @enderror"
                                    value="{{ old('') }}" name="cost_hour_num[]" id="ec_CofacilitatorNoh1" data-type="currency" readonly="readonly">
                            </td>
                            <td class="mgt-td-dark-bg">
                                <input type="text"
                                    class="text-center text-dark form-control input-table commanumber @error('') is-invalid @enderror"
                                    value="{{ old('') }}" name="cost_nswh[]" id="ec_CofacilitatorNwh1" data-type="currency" readonly="readonly">
                            </td>
                            <td class="total-td">
                                <h4 class="text-center lead text-danger" id="ec_CofacilitatorTotal">-</h4>
                            </td>
                            <td class="total-td table-warning">
                                <input type="text" class="text-uppercase form-control input-table @error('') is-invalid @enderror"
                                    value="{{ old('') }}" name="cost_rooster[]" id="roster51" 
                                    oninput="filterConsultant(`roster51`, `ec_CofacilitatorHf1`, `coFaci`);"
                                    list="filtered_consultant_list" 
                                    autocomplete="off">
                                <input  type="hidden" value="" name="cost_rooster_id[]" id="id_roster51">
                            </td>
                            <td class="total-td">
                                <textarea class="form-control input-table @error('') is-invalid @enderror"
                                    name="cost_notes[]" id="ec_CofacilitatorNotes1" rows="2" cols="55"></textarea>
                            </td>
                            <td class="border border-white add-row">
                                <a href="javascript:void(0)" class="text-success font-18" title="Add" id="CeAddBtn5">
                                    <i class="fa fa-plus"></i>
                                </a>
                            </td>
                        </tr>
                    </tbody>

                    <tbody id="ec_TableModerator">
                        <tr class="th-blue-grey-lighten-2">
                            <td class="title">
                                Moderator
                                <input type="text" class="d-none" value="Moderator" name="cost_type[]" readonly>
                            </td>
                            <td class="mgt-td-dark-bg">
                                <input type="text"
                                    class="text-dark text-center form-control input-table commanumber @error('') is-invalid @enderror"
                                    value="{{ old('') }}" name="cost_consultant_num[]" id="ec_ModeratorNoc1" data-type="currency" readonly="readonly">
                            </td>
                            <td class="mgt-td-dark-bg">
                                <fieldset>
                                    <input type="text"
                                    class="text-center text-dark fw-bold form-control input-table commanumber @error('') is-invalid @enderror"
                                    value="{{ old('') }}" onfocus="this.value=''" name="cost_hour_fee[]" id="ec_ModeratorHf1" data-type="currency">                                    
                                    @error('')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </fieldset>
                            </td>
                            <td class="mgt-td-dark-bg">
                                <input type="text"
                                    class="text-dark text-center form-control input-table commanumber @error('') is-invalid @enderror"
                                    value="{{ old('') }}" name="cost_hour_num[]" id="ec_ModeratorNoh1" data-type="currency" readonly="readonly">
                            </td>
                            <td class="mgt-td-dark-bg">
                                <input type="text"
                                    class="text-dark text-center form-control input-table commanumber @error('') is-invalid @enderror"
                                    value="{{ old('') }}" name="cost_nswh[]" id="ec_ModeratorNwh1" data-type="currency" readonly="readonly">
                            </td>
                            <td class="total-td">
                                <h4 class="text-center lead text-danger" id="ec_ModeratorTotal">-</h4>
                            </td>
                            <td class="total-td table-warning">
                                <input type="text" class="text-uppercase form-control input-table @error('') is-invalid @enderror"
                                    value="{{ old('') }}" name="cost_rooster[]" id="roster61" 
                                    oninput="filterConsultant(`roster61`, `ec_ModeratorHf1`, `moderator`);"
                                    list="filtered_consultant_list" 
                                    autocomplete="off">
                                <input  type="hidden" value="" name="cost_rooster_id[]" id="id_roster61">
                            </td>
                            <td class="total-td">
                                <textarea class="form-control input-table @error('') is-invalid @enderror"
                                    name="cost_notes[]" id="ec_ModeratorNotes1" rows="2" cols="55"></textarea>
                            </td>
                            <td class="border border-white add-row">
                                <a href="javascript:void(0)" class="text-success font-18" title="Add" id="CeAddBtn6">
                                    <i class="fa fa-plus"></i>
                                </a>
                            </td>
                        </tr>
                    </tbody>

                    <tbody id="ec_TableProducer">
                        <tr class="th-blue-grey-lighten-2">
                            <td class="title">
                                Producer
                                <input type="text" class="d-none" value="Producer" name="cost_type[]" readonly>
                            </td>
                            <td class="mgt-td-dark-bg">
                                <input type="text"
                                    class="text-center text-dark form-control input-table commanumber @error('') is-invalid @enderror"
                                    value="{{ old('') }}" name="cost_consultant_num[]" id="ec_ProducerNoc1" data-type="currency" readonly="readonly">
                            </td>
                            <td class="mgt-td-dark-bg">
                                <input type="text"
                                    class="text-center text-dark fw-bold form-control input-table commanumber @error('') is-invalid @enderror"
                                    value="{{ old('') }}" name="cost_hour_fee[]" id="ec_ProducerHf1" data-type="currency">
                            </td>
                            <td class="mgt-td-dark-bg">
                                <input type="text"
                                    class="text-center text-dark form-control input-table commanumber @error('') is-invalid @enderror"
                                    value="{{ old('') }}" name="cost_hour_num[]" id="ec_ProducerNoh1" data-type="currency" readonly="readonly">
                            </td>
                            <td class="mgt-td-dark-bg">
                                <input type="text"
                                    class="text-center text-dark form-control input-table commanumber @error('') is-invalid @enderror"
                                    value="{{ old('') }}" name="cost_nswh[]" id="ec_ProducerNwh1" data-type="currency" readonly="readonly">
                            </td>
                            <td class="total-td">
                                <h4 class="text-center lead text-danger" id="ec_ProducerTotal">-</h4>
                            </td>
                            <td class="total-td table-warning">
                                <input type="text" class="text-uppercase form-control input-table @error('') is-invalid @enderror"
                                    value="{{ old('') }}" name="cost_rooster[]" id="roster71" 
                                    oninput="filterConsultant(`roster71`, `ec_ProducerHf1`, `producer`);"
                                    list="filtered_consultant_list" 
                                    autocomplete="off">
                                <input  type="hidden" value="" name="cost_rooster_id[]" id="id_roster71">
                            </td>
                            <td class="total-td">
                                <textarea class="form-control input-table @error('') is-invalid @enderror"
                                    name="cost_notes[]" id="ec_ProducerNotes1" rows="2" cols="55"></textarea>
                            </td>
                            <td class="border border-white add-row">
                                <a href="javascript:void(0)" class="text-success font-18" title="Add" id="CeAddBtn7">
                                    <i class="fa fa-plus"></i>
                                </a>
                            </td>
                        </tr>
                    </tbody>

                    <tr class="table-secondary">
                        <td class="title fw-bold text-dark fst-italic">Subtotal</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td class="total-td" style="background-color: rgba(146, 146, 146, 0.727)">
                            <h4 class="text-center text-danger" id="ec_ProgramSubtotal">-</h4>
                        </td>
                        <td class="total-td"></td>
                        <td class="total-td"></td>
                        <td class="border border-white add-row invisible"> </td>
                    </tr>
                <!------------------- END PROGRAM ----------------------->

                <!-------------------OTHER ROLES------------------------->
                    <tr class="th-blue-grey-lighten">
                        <th class="title px-4 text-dark">
                            <b>4. OTHER ROLES</b>
                        </th>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td class="total-td"></td>
                        <td class="total-td"></td>
                        <td class="total-td"></td>
                        <td class="border border-white add-row invisible"> </td>
                    </tr>

                    <tbody id="ec_TableDocumentor">
                        <tr class="th-blue-grey-lighten-2">
                            <td class="title">
                                Documentor
                                <input type="text" class="d-none" value="Documentor" name="cost_type[]" readonly>
                            </td>
                            <td class="mgt-td-dark-bg">
                                <input type="text"
                                    class="text-center text-dark  form-control input-table commanumber @error('') is-invalid @enderror"
                                    value="{{ old('') }}" name="cost_consultant_num[]" id="ec_DocumentorNoc1" data-type="currency" readonly='readonly'>
                            </td>
                            <td class="bg-white">
                                <input type="text"
                                    class="text-center text-dark fw-bold form-control input-table commanumber @error('') is-invalid @enderror"
                                    value="{{ old('') }}" name="cost_hour_fee[]" id="ec_DocumentorHf1" data-type="currency">
                            </td>
                            <td class="mgt-td-dark-bg">
                                <input type="text"
                                    class="text-center text-dark  form-control input-table commanumber @error('') is-invalid @enderror"
                                    value="{{ old('') }}" name="cost_hour_num[]" id="ec_DocumentorNoh1" data-type="currency" readonly='readonly'>
                            </td>
                            <td class="mgt-td-dark-bg">
                                <input type="text"
                                    class="text-center text-dark  form-control input-table commanumber @error('') is-invalid @enderror"
                                    value="{{ old('') }}" name="cost_nswh[]" id="ec_DocumentorNwh1" data-type="currency" readonly='readonly'>
                            </td>
                            <td class="total-td" style="background-color: rgba(146, 146, 146, 0.727">
                                <h4 class="text-center text-danger" id="ec_DocumentorTotal">-</h4>
                            </td>
                            <td class="total-td">
                                <input type="text" class="text-uppercase form-control input-table @error('') is-invalid @enderror"
                                    value="{{ old('') }}" name="cost_rooster[]" id="roster251" 
                                    oninput="filterConsultant(`roster251`, ``, ``);"
                                    list="filtered_consultant_list" 
                                    autocomplete="off">
                                <input  type="hidden" value="" name="cost_rooster_id[]" id="id_roster251">
                            </td>
                            <td class="total-td">
                                <textarea class="form-control input-table @error('') is-invalid @enderror"
                                    name="cost_notes[]" id="ec_DocumentorNotes1" rows="2" cols="55"></textarea>
                            </td>
                            <td class="border border-white add-row">
                                <a href="javascript:void(0)" class="text-success font-18" title="Add" id="CeAddBtn8">
                                    <i class="fa fa-plus"></i>
                                </a>
                            </td>
                        </tr>
                    </tbody>
                <!------------------- END OTHER ROLES ----------------------->

                <!-------------------OFF-PROGRAM------------------------->
                    <tr class="th-blue-grey-lighten">
                        <th class="title px-4 text-dark">
                            <b>5. OFF-PROGRAM</b>
                        </th>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td class="total-td"></td>
                        <td class="total-td"></td>
                        <td class="total-td"></td>
                        <td class="border border-white add-row invisible"> </td>
                    </tr>

                    <tbody id="ec_TblOffProgram">
                        <tr class="th-blue-grey-lighten-2" id="ec_OffProgramRow">
                            <td class="title">
                                Off-Program fee
                                <input type="text" class="d-none" value="Off-Program fee" name="op_type[]" readonly>
                            </td>
                            <td class="table-warning">
                                <input type="text"
                                    class="input js-mytooltip text-center text-dark form-control input-table commanumber @error('') is-invalid @enderror"
                                    value="{{ old('') }}" name="op_consultant_num[]" id="ec_ProgramNoc1" data-type="currency"
                                    data-mytooltip-content="<i>
                                            - For single or series of programs<br>
                                            - One time only<br>
                                            - Per person<br>
                                            </i>"
                                    data-mytooltip-theme="dark" data-mytooltip-action="focus"
                                    data-mytooltip-direction="bottom">
                            </td>
                            <td class="bg-white">
                                <input type="text"
                                    class="text-center text-dark fw-bold form-control input-table commanumber @error('') is-invalid @enderror"
                                    value="{{ old('') }}" name="op_hour_fee[]" id="ec_ProgramHf1" data-type="currency">
                            </td>
                            <td><input type="text" class="d-none" name="op_hour_num[]" readonly></td>
                            <td><input type="text" class="d-none" name="op_nswh[]" readonly></td>
                            <td class="total-td" style="background-color: rgba(146, 146, 146, 0.727">
                                <h4 class="text-center text-danger" id="ec_ProgramTotal">-</h4>
                            </td>
                            <td class="total-td">
                                <input type="text" class="text-uppercase form-control input-table @error('') is-invalid @enderror"
                                    value="{{ old('') }}" name="op_rooster[]" id="roster261" 
                                    oninput="filterConsultant(`roster261`, ``, ``);"
                                    list="filtered_consultant_list" 
                                    autocomplete="off">
                                    <input  type="hidden" value="" name="op_rooster_id[]" id="id_roster261">
                            </td>
                            <td class="total-td">
                                <textarea class="form-control input-table @error('') is-invalid @enderror"
                                    name="op_notes[]" id="ec_ProgramNotes1" rows="2" cols="55"></textarea>
                            </td>
                            <td class="border border-white add-row">
                                <a href="javascript:void(0)" class="text-success font-18" title="Add" id="CeAddBtn9">
                                    <i class="fa fa-plus"></i>
                                </a>
                            </td>
                        </tr>
                    </tbody>
                <!------------------- END OFF-PROGRAM ----------------------->

                <!-------------------MISCELLANEOUS------------------------->
                    <tr class="th-blue-grey-lighten">
                        <th class="title px-4 text-dark">
                            <b>MISCELLANEOUS</b>
                        </th>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td class="total-td"></td>
                        <td class="total-td"></td>
                        <td class="total-td"></td>
                        <td class="border border-white add-row invisible"> </td>
                    </tr>

                    <tr class="th-blue-grey-lighten-2">
                        <td class="title">
                            Program Expenses
                            <input type="text" class="d-none" value="Program Expenses" name="cost_type[]" readonly>
                        </td>
                        <td><input type="text" class="d-none" name="cost_consultant_num[]" readonly></td>
                        <td class="bg-white">
                            <input type="text"
                                class="text-center text-dark fw-bold form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="cost_hour_fee[]" id="ec_Programexpense"
                                oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"
                                maxlength="5">
                        </td>
                        <td><input type="text" class="d-none" name="cost_hour_num[]" readonly></td>
                        <td><input type="text" class="d-none" name="cost_nswh[]" readonly></td>
                        <td class="total-td" style="background-color: rgba(146, 146, 146, 0.727">
                            <h4 class="text-center text-danger" id="ec_ProgramexpenseTotal">-</h4>
                        </td>
                        <td class="total-td">
                            <input type="text" class="form-control input-table @error('') is-invalid @enderror d-none"
                                value="{{ old('') }}" name="cost_rooster[]" id="">
                            <input  type="hidden" value="" name="cost_rooster_id[]" id="">
                        </td>
                        <td class="total-td">
                            <textarea class="form-control input-table @error('') is-invalid @enderror"
                                name="cost_notes[]" id="" rows="2" cols="55"></textarea>
                        </td>
                        <td class="border border-white add-row invisible"> </td>
                    </tr>

                    <tr class="th-blue-grey-lighten-2">
                        <td class="title">
                            Culture Invigoration
                            <input type="text" class="d-none" value="Culture Invigoration" name="cost_type[]" readonly>
                        </td>
                        <td><input type="text" class="d-none" name="cost_consultant_num[]" readonly></td>
                        <td class="table-danger">
                            <fieldset>
                                    <select 
                                        class="input js-mytooltip form-select @error('') is-invalid @enderror"
                                        name="cost_hour_fee[]" 
                                        id="ec_cultureInvigoration" 
                                        style="background-color:#ffcccc; color:red;">
                                        <option value="0%" {{ old('') == '0%' ? 'selected="selected"' : '' }} title="">
                                            0%
                                        </option>
                                        <option value=".015%" {{ old('') == '.015%' ? 'selected="selected"' : '' }} title="">
                                            .015%
                                        </option>
                                    </select>
                                </fieldset>
                        </td>
                        <td><input type="text" class="d-none" name="cost_hour_num[]" readonly></td>
                        <td><input type="text" class="d-none" name="cost_nswh[]" readonly></td>
                        <td class="total-td" style="background-color: rgba(146, 146, 146, 0.727">
                            <h4 class="text-center text-danger" id="ec_cultureInvigorationTotal">-</h4>
                        </td>
                        <td class="total-td">
                            <input type="text" class="form-control input-table @error('') is-invalid @enderror d-none"
                                value="{{ old('') }}" name="cost_rooster[]" id="">
                            <input  type="hidden" value="" name="cost_rooster_id[]" id="">
                        </td>
                        <td class="total-td">
                            <textarea class="form-control input-table @error('') is-invalid @enderror"
                                name="cost_notes[]" id="" rows="2" cols="55"></textarea>
                        </td>
                        <td class="border border-white add-row invisible"> </td>
                    </tr>
                <!------------------- END MISCELLANEOUS ----------------------->

                <!-------------------TOTAL------------------------->
                    <tr class="table-active">
                        <td class="fw-bold text-uppercase text-dark fst-italic overall-total-start">
                            <b>TOTAL</b>
                        </td>
                        <td class="overall-total-middle"></td>
                        <td class="overall-total-middle"></td>
                        <td class="overall-total-middle"></td>
                        <td class="overall-total-middle"></td>
                        <td class="overall-total-end">
                            <h4 class="text-center text-danger" id="ec_Total">-</h4>
                        </td>
                        <td class="overall-total-end"></td>
                        <td class="overall-total-end"></td>
                        <td class="border border-white add-row invisible"></td>
                    </tr>
                <!------------------- END TOTAL ----------------------->

                </table>
            </div>            
            <!-- AUTO COMPLETE -->
            <template id="all_consultant_list">
                @foreach ($consultantFee as $key => $feeData)
                    <option 
                        value="{{ strtoupper($feeData->first_name) }} {{ strtoupper($feeData->last_name) }}" 
                        data-id="{{$feeData->id}}"
                        data-feeleadfaci="{{$feeData->lead_faci}}"
                        data-cofaci="{{$feeData->co_faci}}",
                        data-marshal="{{$feeData->marshal}}",
                        data-leadconsultant="{{$feeData->lead_consultant}}",
                        data-consulting="{{$feeData->consulting}}",
                        data-designer="{{$feeData->designer}}",
                        data-moderator="{{$feeData->moderator}}",
                        data-producer="{{$feeData->producer}}",
                        data-colead="{{$feeData->co_lead}}",
                        data-coleadf2f="{{$feeData->co_lead_f2f}}"
                        >
                        {{ strtoupper($feeData->first_name) }} {{ strtoupper($feeData->last_name) }}
                    </option>
                @endforeach
            </template>
            <datalist id="filtered_consultant_list"></datalist>
            <!-- END AUTO COMPLETE -->
        </section>
    </div>
<!------------ END OF FORM BODY ------------>
<script>
var results = document.querySelector('#filtered_consultant_list');
var templateContent = document.querySelector('#all_consultant_list').content;

function filterConsultant(rosterFieldID, hourlyFeeID = '', costType = '') {
    var search = document.querySelector('#' + rosterFieldID);

    while (results.children.length) {
        results.removeChild(results.firstChild);
    }
    var inputVal = new RegExp('^'+search.value.trim(), 'i');
    var clonedOptions = templateContent.cloneNode(true);
    var set = Array.prototype.reduce.call(clonedOptions.children, 
        function searchFilter(frag, el) {
          if (inputVal.test(el.textContent.trim()) && frag.children.length < 10) { 
            frag.appendChild(el)
        };
        return frag;
        }
    , document.createDocumentFragment());
    results.appendChild(set);

    getFee(rosterFieldID, hourlyFeeID, costType);
}

function getFee(rosterFieldID, hourlyFeeID = '', costType = '') {
    var rosterValue = document.querySelector('#' + rosterFieldID);
    var getFee = $('#filtered_consultant_list option[value="' + rosterValue.value.toUpperCase() + '"]');
    var customizedType = $('#customized_type').val();
    $('#id_' + rosterFieldID).val(getFee.data('id'));
    if (customizedType == 'Virtual' && hourlyFeeID != '') {
        switch(costType) {
            case 'leadConsultant':
                $('#' + hourlyFeeID).val(getFee.data('leadconsultant'));
                break; 
            case 'designer':
                $('#' + hourlyFeeID).val(getFee.data('designer'));
                break; 
            case 'leadFacilitator':
                $('#' + hourlyFeeID).val(getFee.data('feeleadfaci'));
                break; 
            case 'coLead':
                $('#' + hourlyFeeID).val(getFee.data('colead'));
                break; 
            case 'alCoach':
                break;
            case 'coFaci':
                $('#' + hourlyFeeID).val(getFee.data('cofaci'));
                break; 
            case 'moderator':
                $('#' + hourlyFeeID).val(getFee.data('moderator'));
                break; 
            case 'producer':
                $('#' + hourlyFeeID).val(getFee.data('producer'));
                break; 
            default: 
                break;
            ;
        }
    } 
}
</script>
<!------------ CE ENGAGEMENT COST SCRIPT ------------>
@include('form.components.customized_engagement.add.script.ce_engagement_cost')

@if($data)
    @if($data->cstmzd_eng_form_id)

        @foreach ($dataJoin2 as $cost) 
            <input type="hidden" name="cost_id[]" value="{{$cost->id}}">
        @endforeach

        @foreach ($data3 as $key=>$sub_information)
            <input type="hidden" name="sub_information[]" value="{{$sub_information->id }}" readonly>
        @endforeach

        @foreach ($dataJoin3 as $sub_fee)
            <input type="hidden" name="sub_id[]" value="{{ $sub_fee->id }}" readonly>
        @endforeach

        @foreach ($dataJoin5 as $sub_cost)
            <input type="hidden" name="sub_cost_id[]" value="{{ $sub_cost->id }}" readonly>
        @endforeach

        <script>
            $(document).ready( function () {
                var costCount = 0, salesCount = 1, referralCount = 1, engagementManagerCount = 1,
                leadConsultantCount = 1, analystCount = 1, designerCount = 1, creatorsFeeCount = 1,
                leadFaciCount = 1, coLeadCount = 1, alCoachCount = 1, coFaciCount = 1,
                moderatorCount = 1, producerCount = 1, documentatorCount = 1, offProgFeeCount = 1;

                @foreach ($dataJoin2 as $cost) 

                    @if($cost->type == 'Sales')                        
                        if (salesCount <= 1) {
                            document.getElementById('sales').value = '{{ $cost->hour_fee }}';
                            document.getElementById('inputSales').value = '{{ $cost->hour_fee }}';
                            document.getElementById('roster201').value = '{{ $cost->rooster }}';
                            document.getElementById('id_roster201').value = '{{ $cost->consultant_id }}';
                            document.getElementById('salesNotes').value = '{{ $cost->notes }}';
                        } else {
                            document.getElementById('sales').style.display = 'none';
                            document.getElementById('sales').disabled = true;
                            document.getElementById('inputSales').disabled = false;
                            document.getElementById('inputSales').style.display = '';
                            
                            $('#addBtn9').click();
                            
                            document.getElementById('inputSales' + salesCount).value = '{{ $cost->hour_fee }}';
                            document.getElementById('roster20' + salesCount).value = '{{ $cost->rooster }}';                            
                            document.getElementById('id_roster20' + salesCount).value = '{{ $cost->consultant_id }}';
                            document.getElementById('salesNotes' + salesCount).value = '{{ $cost->notes }}';                            
                        }                        
                        salesCount++;
                    @endif

                    @if($cost->type == 'Referral')                        
                        if (referralCount <= 1) {
                            document.getElementById('referral').value = '{{ $cost->hour_fee }}';
                            document.getElementById('inputReferral').value = '{{ $cost->hour_fee }}';
                            document.getElementById('roster211').value = '{{ $cost->rooster }}';
                            document.getElementById('id_roster211').value = '{{ $cost->consultant_id }}';
                            document.getElementById('referralNotes').value = '{{ $cost->notes }}';
                        } else {
                            document.getElementById('referral').style.display = 'none';
                            document.getElementById('referral').disabled = true;
                            document.getElementById('inputReferral').disabled = false;
                            document.getElementById('inputReferral').style.display = '';                        

                            $('#addBtn10').click();
                            document.getElementById('inputReferral' + referralCount).value = '{{ $cost->hour_fee }}';
                            document.getElementById('roster21' + referralCount).value = '{{ $cost->rooster }}';                            
                            document.getElementById('id_roster21' + referralCount).value = '{{ $cost->consultant_id }}';
                            document.getElementById('referralNotes' + referralCount).value = '{{ $cost->notes }}';  
                        }
                        referralCount++;
                    @endif

                    @if($cost->type == 'Engagement Manager')
                        if (engagementManagerCount <= 1) {
                            document.getElementById('engagementManager').value = '{{ $cost->hour_fee }}';
                            document.getElementById('inputManager').value = '{{ $cost->hour_fee }}';
                            document.getElementById('roster221').value = '{{ $cost->rooster }}';
                            document.getElementById('id_roster221').value = '{{ $cost->consultant_id }}';
                            document.getElementById('engagementManagerNotes').value = '{{ $cost->notes }}';
                        } else {
                            document.getElementById('engagementManager').style.display = 'none';
                            document.getElementById('engagementManager').disabled = true;
                            document.getElementById('inputManager').disabled = false;
                            document.getElementById('inputManager').style.display = '';                        

                            $('#addBtn11').click();
                            document.getElementById('inputManager' + engagementManagerCount).value = '{{ $cost->hour_fee }}';
                            document.getElementById('roster22' + engagementManagerCount).value = '{{ $cost->rooster }}';                            
                            document.getElementById('id_roster22' + engagementManagerCount).value = '{{ $cost->consultant_id }}';
                            document.getElementById('engagementManagerNotes' + engagementManagerCount).value = '{{ $cost->notes }}';
                        }
                        engagementManagerCount++;
                    @endif

                    @if($cost->type == 'Lead Consultant')
                        if (leadConsultantCount > 1) {
                            $('#CeAddBtn').click();
                        }
                        document.getElementById('ec_LeadconsultantNoc' + leadConsultantCount).value = '{{ $cost->consultant_num }}';
                        document.getElementById('ec_LeadconsultantHf' + leadConsultantCount).value = '{{ $cost->hour_fee }}';
                        document.getElementById('ec_LeadconsultantNoh' + leadConsultantCount).value = '{{ $cost->hour_num }}';
                        document.getElementById('ec_LeadconsultantNwh' + leadConsultantCount).value = '{{ $cost->nswh }}';
                        document.getElementById('roster' + leadConsultantCount).value = '{{ $cost->rooster }}';
                        document.getElementById('id_roster' + leadConsultantCount).value = '{{ $cost->consultant_id }}';
                        document.getElementById('ec_LeadconsultantNotes' + leadConsultantCount).value = '{{ $cost->notes }}';
                        leadConsultantCount++;
                    @endif

                    @if($cost->type == 'Analyst')
                        if (analystCount > 1) {
                            $('#CeAddBtn2').click();
                        }
                        document.getElementById('ec_AnalystNoc' + analystCount).value = '{{ $cost->consultant_num }}';
                        document.getElementById('ec_AnalystHf' + analystCount).value = '{{ $cost->hour_fee }}';
                        document.getElementById('ec_AnalystNoh' + analystCount).value = '{{ $cost->hour_num }}';
                        document.getElementById('ec_AnalystNwh' + analystCount).value = '{{ $cost->nswh }}';
                        document.getElementById('roster23' + analystCount).value = '{{ $cost->rooster }}';
                        document.getElementById('id_roster23' + analystCount).value = '{{ $cost->consultant_id }}';
                        document.getElementById('ec_AnalystNotes' + analystCount).value = '{{ $cost->notes }}';   
                        analystCount++;
                    @endif

                    @if($cost->type == 'Designer')
                        if (designerCount > 1) {
                            $('#CeAddBtn3').click();
                        }
                        document.getElementById('ec_DesignerNoc' + designerCount).value = '{{ $cost->consultant_num }}';
                        document.getElementById('ec_DesignerHf' + designerCount).value = '{{ $cost->hour_fee }}';
                        document.getElementById('ec_DesignerNoh' + designerCount).value = '{{ $cost->hour_num }}';
                        document.getElementById('roster2' + designerCount).value = '{{ $cost->rooster }}'; 
                        document.getElementById('id_roster2' + designerCount).value = '{{ $cost->consultant_id }}'; 
                        document.getElementById('ec_DesignerNotes' + designerCount).value = '{{ $cost->notes }}'; 
                        designerCount++;
                    @endif

                    @if($cost->type == 'Creators Fees')
                        if (creatorsFeeCount > 1) {
                            $('#addBtnCreators').click();
                        }
                        document.getElementById('ec_CreatorsHf' + creatorsFeeCount).value = '{{ $cost->hour_fee }}';
                        document.getElementById('ec_CreatorsNoh' + creatorsFeeCount).value = '{{ $cost->hour_num }}';
                        document.getElementById('roster24' + creatorsFeeCount).value = '{{ $cost->rooster }}';
                        document.getElementById('id_roster24' + creatorsFeeCount).value = '{{ $cost->consultant_id }}';
                        document.getElementById('ec_CreatorsNotes' + creatorsFeeCount).value = '{{ $cost->notes }}';
                        creatorsFeeCount++;
                    @endif

                    @if($cost->type == 'Lead Facilitator')
                        if (leadFaciCount > 1) {
                            $('#CeAddBtn4').click();
                        }
                        document.getElementById('ec_LeadfacilitatorNoc' + leadFaciCount).value = '{{ $cost->consultant_num }}';
                        document.getElementById('ec_LeadfacilitatorHf' + leadFaciCount).value = '{{ $cost->hour_fee }}';
                        document.getElementById('ec_LeadfacilitatorNoh' + leadFaciCount).value = '{{ $cost->hour_num }}';
                        document.getElementById('ec_LeadfacilitatorNwh' + leadFaciCount).value = '{{ $cost->nswh }}';
                        document.getElementById('roster3' + leadFaciCount).value = '{{ $cost->rooster }}';
                        document.getElementById('id_roster3' + leadFaciCount).value = '{{ $cost->consultant_id }}';
                        document.getElementById('ec_LeadfacilitatorNotes3' + leadFaciCount).value = '{{ $cost->notes }}';
                        leadFaciCount++;
                    @endif

                    @if($cost->type == 'Co-Lead')
                        if (coLeadCount > 1) {
                            $('#addBtnCoLead').click();
                        }
                        document.getElementById('ec_CoLeadfacilitatorNoc' + coLeadCount).value = '{{ $cost->consultant_num }}';
                        document.getElementById('ec_CoLeadfacilitatorHf' + coLeadCount).value = '{{ $cost->hour_fee }}';
                        document.getElementById('ec_CoLeadfacilitatorNoh' + coLeadCount).value = '{{ $cost->hour_num }}';
                        document.getElementById('ec_CoLeadfacilitatorNwh' + coLeadCount).value = '{{ $cost->nswh }}';
                        document.getElementById('roster4' + coLeadCount).value = '{{ $cost->rooster }}';
                        document.getElementById('id_roster4' + coLeadCount).value = '{{ $cost->consultant_id }}';
                        document.getElementById('ec_CoLeadfacilitatorNotes' + coLeadCount).value = '{{ $cost->notes }}';
                        coLeadCount++;
                    @endif

                    @if($cost->type == 'AL Coach')
                        if (alCoachCount > 1) {
                            $('#addBtnAlCoach').click();
                        }
                        document.getElementById('ec_AlCoachNoc' + alCoachCount).value = '{{ $cost->consultant_num }}';
                        document.getElementById('ec_AlCoachHf' + alCoachCount).value = '{{ $cost->hour_fee }}';
                        document.getElementById('ec_AlCoachNoh' + alCoachCount).value = '{{ $cost->hour_num }}';
                        document.getElementById('ec_AlCoachNwh' + alCoachCount).value = '{{ $cost->nswh }}';
                        document.getElementById('roster10' + alCoachCount).value = '{{ $cost->rooster }}';
                        document.getElementById('id_roster10' + alCoachCount).value = '{{ $cost->consultant_id }}';
                        document.getElementById('ec_AlCoachNotes' + alCoachCount).value = '{{ $cost->notes }}';
                        alCoachCount++;
                    @endif

                    @if($cost->type == 'Co-Facilitator / Resource Speaker')
                        if (coFaciCount > 1) {
                            $('#CeAddBtn5').click();
                        }
                        document.getElementById('ec_CofacilitatorNoc' + coFaciCount).value = '{{ $cost->consultant_num }}';
                        document.getElementById('ec_CofacilitatorHf' + coFaciCount).value = '{{ $cost->hour_fee }}';
                        document.getElementById('ec_CofacilitatorNoh' + coFaciCount).value = '{{ $cost->hour_num }}';
                        document.getElementById('ec_CofacilitatorNwh' + coFaciCount).value = '{{ $cost->nswh }}';
                        document.getElementById('roster5' + coFaciCount).value = '{{ $cost->rooster }}';
                        document.getElementById('id_roster5' + coFaciCount).value = '{{ $cost->consultant_id }}';
                        document.getElementById('ec_CofacilitatorNotes' + coFaciCount).value = '{{ $cost->notes }}';
                        coFaciCount++;
                    @endif

                    @if($cost->type == 'Moderator')
                        if (moderatorCount > 1) {
                            $('#CeAddBtn6').click();
                        }
                        document.getElementById('ec_ModeratorNoc' + moderatorCount).value = '{{ $cost->consultant_num }}';
                        document.getElementById('ec_ModeratorHf' + moderatorCount).value = '{{ $cost->hour_fee }}';
                        document.getElementById('ec_ModeratorNoh' + moderatorCount).value = '{{ $cost->hour_num }}';
                        document.getElementById('ec_ModeratorNwh' + moderatorCount).value = '{{ $cost->nswh }}';
                        document.getElementById('roster6' + moderatorCount).value = '{{ $cost->rooster }}';
                        document.getElementById('id_roster6' + moderatorCount).value = '{{ $cost->consultant_id }}';
                        document.getElementById('ec_ModeratorNotes' + moderatorCount).value = '{{ $cost->notes }}';
                        moderatorCount++
                    @endif

                    @if($cost->type == 'Producer')
                        if (producerCount > 1) {
                            $('#CeAddBtn7').click();
                        }
                        document.getElementById('ec_ProducerNoc' + producerCount).value = '{{ $cost->consultant_num }}';
                        document.getElementById('ec_ProducerHf' + producerCount).value = '{{ $cost->hour_fee }}';
                        document.getElementById('ec_ProducerNoh' + producerCount).value = '{{ $cost->hour_num }}';
                        document.getElementById('ec_ProducerNwh' + producerCount).value = '{{ $cost->nswh }}';
                        document.getElementById('roster7' + producerCount).value = '{{ $cost->rooster }}';
                        document.getElementById('id_roster7' + producerCount).value = '{{ $cost->consultant_id }}';
                        document.getElementById('ec_ProducerNotes' + producerCount).value = '{{ $cost->notes }}';
                        producerCount++;
                    @endif

                    @if($cost->type == 'Documentor')
                        if (documentatorCount > 1) {
                            $('#CeAddBtn8').click();
                        }
                        document.getElementById('ec_DocumentorNoc' + documentatorCount).value = '{{ $cost->consultant_num }}';
                        document.getElementById('ec_DocumentorHf' + documentatorCount).value = '{{ $cost->hour_fee }}';
                        document.getElementById('ec_DocumentorNoh' + documentatorCount).value = '{{ $cost->hour_num }}';
                        document.getElementById('ec_DocumentorNwh' + documentatorCount).value = '{{ $cost->nswh }}';
                        document.getElementById('roster25' + documentatorCount).value = '{{ $cost->rooster }}';
                        document.getElementById(`id_roster25${documentatorCount}`).value = '{{ $cost->consultant_id }}';
                        document.getElementById('ec_DocumentorNotes' + documentatorCount).value = '{{ $cost->notes }}';
                        documentatorCount++;
                    @endif

                    @if($cost->type == 'Off-Program fee')
                        if (offProgFeeCount > 1) {
                            $('#CeAddBtn9').click();
                        }
                        document.getElementById('ec_ProgramNoc' + offProgFeeCount).value = '{{ $cost->consultant_num }}';
                        document.getElementById('ec_ProgramHf' + offProgFeeCount).value = '{{ $cost->hour_fee }}';
                        document.getElementById('roster26' + offProgFeeCount).value = '{{ $cost->rooster }}';
                        document.getElementById('id_roster26' + offProgFeeCount).value = '{{ $cost->consultant_id }}';
                        document.getElementById('ec_ProgramNotes' + offProgFeeCount).value = '{{ $cost->notes }}';
                        offProgFeeCount++
                    @endif

                    @if($cost->type == 'Program Expenses')
                        document.getElementById('ec_Programexpense').value = '{{ $cost->hour_fee }}';
                    @endif

                    @if($cost->type == 'Culture Invigoration')
                        document.getElementById('ec_cultureInvigoration').value = '{{ $cost->hour_fee }}';
                    @endif

                    costCount++;

                @endforeach
                
            } );
        </script>
    @endif
@endif