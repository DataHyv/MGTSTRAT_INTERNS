<div class="card-header">
    <h4 class="card-title" style="display: inline;">Engagement Cost</h4>
    <div style="float:right">
        <button class="btn btn-secondary mx-0 js-btn-prev" type="button" title="Prev">Prev</button>
        <button class="btn btn-primary mx-0 js-btn-next" type="button" title="Next">Next</button>
        <button class="btn btn-success mx-0 js-btn-next" type="Submit" title="Submit">Save</button>   
    </div>
</div>

<div class="form-body">
    <section>
        <div class="table-responsive-md" id="no-more-tables">
            <table class="table table-bordered" id="f2f-ec-table">
                <!--------------------------TABLE HEADING TITLE------------------------------>
                <thead class="table">
                    <tr class="text-center th-blue-grey">
                        <th class="title-th" scope="col" width="15%"></th>
                        <th class="title-middle" scope="col" style="font-size: 0.9rem;" width="7%">NUMBER OF CONSULTANTS</th>
                        <th class="title-middle px-4" scope="col" width="14%">PER DAY</th>
                        <th class="title-middle" scope="col" style="font-size: 0.9rem;" width="7%">NUMBER OF DAYS</th>
                        <th class="title-middle" scope="col" style="font-size: 0.9rem;" width="7%">ADDITIONAL TRAVEL
                            DAYS </th>
                        <th class="title-middle" scope="col" style="font-size: 0.9rem;" width="7%">NSWH</th>
                        <th class="title-th" scope="col" width="12%">TOTAL FEE</th>
                        <th class="title-th" scope="col" width="14%">ROSTER</th>
                        <th class="title-th" scope="col" width="13%" style="border-right: 3px solid black;border-top: 3px solid black;">NOTES</th>
                        <td class="border border-white add-row bg-white" scope="col"></td>
                    </tr>
                </thead>

                <!--------------------------COMMISSION--------------------------------------->
                <tr class="th-blue-grey-lighten">
                    <th class="px-4 title text-dark fw-bolder">COMMISSION</th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th class="total-td"></th>
                    <th class="total-td" style="border-right: 3px solid black;"></th>
                    <th class="total-td" style="border-right: 3px solid black;"></th>
                </tr>

                <!---------------SALE-------------------------->
                <tbody id="tableofSale">
                    <tr class="th-blue-grey-lighten-2" id="rowofSale">
                        <td class="title text-justify">
                            Sales (4% / 5% / 6% / 7%)
                            <input type="hidden" value="Sales" name="cost_type[]">
                        </td>
                        <td><input type="hidden" value="0" name="cost_consultant_num[]"></td>
                        <td class="table-danger">
                            <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="cost_day_fee[]" id="inputforSale1" style="display: none;"
                            onblur="this.value = this.value.replace('%', '') + '%';"
                            oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"
                            maxlength="5" disabled>
                        <fieldset id="dropdownforSale">
                            <select
                                class="input js-mytooltip  text-center form-select @error('') is-invalid @enderror"
                                name="cost_day_fee[]" id="cost_sale1"
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
                                data-mytooltip-theme="dark"
                                data-mytooltip-action="focus"
                                data-mytooltip-direction="right"
                                style="background-color:#ffcccc; color:red;">
                                    <option value="0" {{ old('') == '0' ? 'selected="selected"' : '' }}
                                        title="with minimal design customization, or platform customization outside of Zoom/Google Meets/MS Teams. Up to 2 hours of work">
                                        0%
                                    </option>
                                    <option value="4" {{ old('') == '4' ? 'selected="selected"' : '' }}
                                        title="with minimal design customization, or platform customization outside of Zoom/Google Meets/MS Teams. Up to 2 hours of work">
                                        4%
                                    </option>
                                    <option value="5" {{ old('') == '5' ? 'selected="selected"' : '' }}
                                        title="with minimal design customization, or platform customization outside of Zoom/Google Meets/MS Teams. Up to 2 hours of work">
                                        5%
                                    </option>
                                    <option value="6" {{ old('') == '6' ? 'selected="selected"' : '' }}
                                        title="with minimal design customization, or platform customization outside of Zoom/Google Meets/MS Teams. Up to 2 hours of work">
                                        6%
                                    </option>
                                    <option value="7" {{ old('') == '7' ? 'selected="selected"' : '' }}
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
                        <td><input type="hidden" value="0" name="cost_day_num[]"></td>
                        <td><input type="hidden" value="0" name="cost_day_atd[]"></td>
                        <td><input type="hidden" value="0" name="cost_nswh[]"></td>
                        <td class="total-td tbl-engmt-cost mgt-td-dark-bg">
                            <h4 class="text-center text-danger" id="ec_saleTotal1">-</h4>
                        </td>
                        <td class="total-td">
                            <input  type="text" class="form-control input-table" name="cost_roster[]" id="sales_roster1"
                                    value="{{ old('') }}"                                     
                                    oninput="filterConsultant('sales_roster1');"
                                    
                                    list="filtered_consultant_list" 
                                    autocomplete="off"
                                    >   
                            <input  type="hidden" value="" name="cost_roster_id[]" id="id_sales_roster1">
                        </td>
                        <td class="total-td" style="border-right: 3px solid black;">
                            <textarea class="form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="cost_notes[]" id="salesNotes1"></textarea>
                        </td>
                        <td style="background-color: #FFFFFF; border-right: 3px solid black;" class="border border-white">
                            <a href="javascript:void(0)" class="text-success font-18" title="Add" id="ecaddButton">
                                <i class="fa fa-plus"></i>
                            </a>
                        </td>
                    </tr>
                </tbody>

                <!---------------REFERRALS--------------------->
                <tbody id="tableofReferrals">
                    <tr class="th-blue-grey-lighten-2" id="rowofReferrals">
                        <td class="title">
                            Referral (2% / 3%)
                            <input type="hidden" value="Referral" name="cost_type[]">
                        </td>
                        <td><input type="hidden" value="0" name="cost_consultant_num[]"></td>
                        <td class="table-danger">
                            <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="cost_day_fee[]" id="inputforReferrals1" style="display: none;"
                            onblur="this.value = this.value.replace('%', '') + '%';"
                            oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"
                            maxlength="5" disabled>

                            <fieldset id="dropdownforReferrals">
                                <select
                                    class="input js-mytooltip text-center  form-select @error('') is-invalid @enderror"
                                    name="cost_day_fee[]" id="referrals1"
                                    data-mytooltip-content="<i>
                                            Referral - 2% - repeat contracts from the same client<br>
                                            3% - 1st contract with a new client, or with a 2-year dormant client<br>
                                            <br>
                                            When in doubt, check with Joi on who referror is.

                                            </i>"
                                    data-mytooltip-theme="dark" data-mytooltip-action="focus"
                                    data-mytooltip-direction="right" style="background-color:#ffcccc; color:red;">
                                    <option value="0" {{ old('') == '0' ? 'selected="selected"' : '' }}
                                        title="">
                                        0%
                                    </option>
                                    <option value="2" {{ old('') == '2' ? 'selected="selected"' : '' }}
                                        title="">
                                        2%
                                    </option>
                                    <option value="3" {{ old('') == '3' ? 'selected="selected"' : '' }}
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
                        <td><input type="hidden" value="0" name="cost_day_num[]"></td>
                        <td><input type="hidden" value="0" name="cost_day_atd[]"></td>
                        <td><input type="hidden" value="0" name="cost_nswh[]"></td>
                        <td class="total-td tbl-engmt-cost mgt-td-dark-bg">
                            <h4 class="text-center text-danger" id="referralsTotal1">-</h4>
                        </td>
                        <td class="total-td">
                            <input  type="text" class="form-control input-table" name="cost_roster[]" id="referrals_roster1"
                                    value="{{ old('') }}"                                     
                                    oninput="filterConsultant('referrals_roster1');"
                                    
                                    list="filtered_consultant_list" 
                                    autocomplete="off"
                                    >   
                            <input  type="hidden" value="" name="cost_roster_id[]" id="id_referrals_roster1">
                        </td>
                        <td class="total-td " style="border-right: 3px solid black;">
                            <textarea class="form-control input-table"
                                value="{{ old('') }}" name="cost_notes[]" id="referralsNotes1"></textarea>
                        </td>
                        <td style="background-color: #FFFFFF;" class="border border-white">
                            <a href="javascript:void(0)" class="text-success font-18" title="Add" id="ecaddButton2">
                                <i class="fa fa-plus"></i>
                            </a>
                        </td>
                    </tr>
                </tbody>                

                <!--------------------------ENGAGEMENT MANAGER-------------------------------->
                <tbody id="tableofEngagementManager">
                    <tr class="th-blue-grey-lighten-2" id="rowofEngagementManager">
                        <td class="title fw-bold text-dark">
                            ENGAGEMENT MANAGER(4%)
                            <input type="hidden" value="Engagement Manager" name="cost_type[]">
                        </td>
                        <td><input type="hidden" value="0" name="cost_consultant_num[]"></td>
                        <td class="table-danger">
                            <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="cost_day_fee[]" id="inputforEngagementManager1"
                                style="display: none;" onblur="this.value = this.value.replace('%', '') + '%';"
                                oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"
                                maxlength="5" disabled>

                            <fieldset id="dropdownforEngagementManager">
                                <select
                                    class="input js-mytooltip text-center  form-select @error('') is-invalid @enderror"
                                    name="cost_day_fee[]" id="ecengagementManager1"
                                    style="background-color:#ffcccc; color:red;"
                                    data-mytooltip-content="<i>
                                            Engagement Manager - 4% - all Key Accounts and large engagements <br>
                                            <br>
                                            Large engagements: large scale consulting, or a series of at least 8 virtual sessions under 1 contract involving a roster of at least 2 people
                                            </i>"
                                    data-mytooltip-theme="dark" data-mytooltip-action="focus"
                                    data-mytooltip-direction="right">
                                    <option value="0" {{ old('') == '0' ? 'selected="selected"' : '' }}
                                        title="">
                                        0%
                                    </option>
                                    <option value="4" {{ old('') == '4' ? 'selected="selected"' : '' }}
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
                        <td><input type="hidden" value="0" name="cost_day_num[]"></td>
                        <td><input type="hidden" value="0" name="cost_day_atd[]"></td>
                        <td><input type="hidden" value="0" name="cost_nswh[]"></td>
                        <td class="total-td tbl-engmt-cost mgt-td-dark-bg">
                            <h4 class="text-center text-danger" id="ecengagementManagerTotal1">-</h4>
                        </td>
                        <td class="total-td">
                            <input  type="text" class="form-control input-table" name="cost_roster[]" id="engagementManager_roster1"
                                    value="{{ old('') }}"                                     
                                    oninput="filterConsultant('engagementManager_roster1');"
                                    
                                    list="filtered_consultant_list" 
                                    autocomplete="off"
                                    >   
                            <input  type="hidden" value="" name="cost_roster_id[]" id="id_engagementManager_roster1">
                        </td>
                        <td class="total-td" style="border-right: 3px solid black;">
                            <textarea class="form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="cost_notes[]" id="engagementManagerNotes1"></textarea>
                        </td>
                        <td style="background-color: #FFFFFF;" class="border border-white">
                            <a href="javascript:void(0)" class="text-success font-18" title="Add" id="ecaddButton3">
                                <i class="fa fa-plus"></i>
                            </a>
                        </td>
                    </tr>
                </tbody>

                <!--------------------------OFFSITE PC--------------------------------------->
                <tbody id="tableofOffsite">
                    <tr class="th-blue-grey-lighten-2" id="rowofOffsite">
                        <td class="title fw-bold text-dark">
                            OFFSITE PC(3%/4%/5%)
                            <input type="hidden" value="Offsite PC" name="cost_type[]">
                        </td>
                        <td><input type="hidden" value="0" name="cost_consultant_num[]"></td>
                        <td class="table-danger">
                            <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="cost_day_fee[]" id="inputforOffsite1"
                                style="display: none;" onblur="this.value = this.value.replace('%', '') + '%';"
                                oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"
                                maxlength="5" disabled>

                            <fieldset id="dropdownforOffsite">
                                <select
                                    class="input js-mytooltip  text-center form-select @error('') is-invalid @enderror"
                                    name="cost_day_fee[]" id="ec_offsitePc1" style="background-color:#ffcccc; color:red;"
                                    data-mytooltip-content="<i>
                                        0% - Key Accounts, handled by full time office PC <br>
                                            3% - simple indoor programs<br>
                                            4% - large engagements with EM<br>
                                            5% - small engagements<br><br>

                                            Computation is based on total package LESS consulting + per diem

                                            </i>"
                                    data-mytooltip-theme="dark" data-mytooltip-action="focus"
                                    data-mytooltip-direction="right">
                                    <option value="0" {{ old('') == '0' ? 'selected="selected"' : '' }}
                                        title="">
                                        0%
                                    </option>
                                    <option value="3" {{ old('') == '3' ? 'selected="selected"' : '' }}
                                        title="">
                                        3%
                                    </option>
                                    <option value="4" {{ old('') == '4' ? 'selected="selected"' : '' }}
                                        title="">
                                        4%
                                    </option>
                                    <option value="5" {{ old('') == '5' ? 'selected="selected"' : '' }}
                                        title="">
                                        5%
                                    </option>
                                </select>
                                @error('')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </fieldset>
                        </td>
                        <td><input type="hidden" value="0" name="cost_day_num[]"></td>
                        <td><input type="hidden" value="0" name="cost_day_atd[]"></td>
                        <td><input type="hidden" value="0" name="cost_nswh[]"></td>
                        <td class="total-td tbl-engmt-cost mgt-td-dark-bg">
                            <h4 class="text-center text-danger" id="ec_offsitePcTotal1">-</h4>
                        </td>
                        <td class="total-td">
                            <input  type="text" class="form-control input-table" name="cost_roster[]" id="Offsite_roster1"
                                    value="{{ old('') }}"                                     
                                    oninput="filterConsultant('Offsite_roster1');"
                                    
                                    list="filtered_consultant_list" 
                                    autocomplete="off"
                                    >   
                            <input  type="hidden" value="" name="cost_roster_id[]" id="id_Offsite_roster1">
                        </td>
                        <td class="total-td" style="border-right: 3px solid black;">
                            <textarea class="form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="cost_notes[]" id="offsiteNotes1"></textarea>
                        </td>
                        <td style="background-color: #FFFFFF;" class="border border-white">
                            <a href="javascript:void(0)" class="text-success font-18" title="Add" id="ecaddButton4">
                                <i class="fa fa-plus"></i>
                            </a>
                        </td>
                    </tr>
                </tbody>

                <!--------------------------CONSULTING--------------------------------------->
                <tr class="th-blue-grey-lighten">
                    <th class="px-4 title text-dark">1. CONSULTING</th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th class="total-td"></th>
                    <th class="total-td"></th>
                    <th class="total-td" style="border-right: 3px solid black;"></th>
                    <th style="background-color: #FFFFFF;" class="border border-white"></th>
                </tr>

                <!---------------LEAD CONSULTANT---------------->
                <tbody id="tableofLeadConsultant">
                    <tr class="th-blue-grey-lighten-2" id="rowofLeadConsultant1">
                        <td class="title">
                            Lead Consultant
                            <input type="hidden" value="Lead Consultant" name="cost_type[]">
                        </td>
                        <td class="mgt-td-dark-bg">
                            <input type="text"
                                class="number_input text-center form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="cost_consultant_num[]" id="ec_LeadconsultantsNoc1" max="100">
                        </td>
                        <td class="mgt-td-dark-bg">
                            <input type="text"
                                class="currency_input text-center fw-bold text-dark form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="cost_day_fee[]" id="ec_LeadconsultantsPd1">
                        </td>
                        <td class="mgt-td-dark-bg">
                            <input type="text"
                                class="number_input text-center form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="cost_day_num[]" id="ec_LeadconsultantsNod1">
                        </td>
                        <td class="mgt-td-dark-bg">
                            <input type="text"
                                class="number_input text-center form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="cost_day_atd[]" id="ec_LeadconsultantsAtd1">
                        </td>
                        <td class="mgt-td-dark-bg">
                            <input type="text"
                                class="number_input text-center form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="cost_nswh[]" id="ec_LeadconsultantsNwh1">
                        </td>
                        <td class="total-td">
                            <h4 class="text-center lead text-danger" id="ec_LeadconsultantsTotal1">-</h4>
                        </td>
                        <td class="total-td table-warning">
                            <input  type="text" class="form-control input-table" name="cost_roster[]" id="leadConsultants_roster1"
                                    value="{{ old('') }}"                                     
                                    oninput="filterConsultant('leadConsultants_roster1', 'ec_LeadconsultantsPd1' ,'leadConsultant');"
                                    
                                    list="filtered_consultant_list" 
                                    autocomplete="off"
                                    >   
                            <input  type="hidden" value="" name="cost_roster_id[]" id="id_leadConsultants_roster1">
                        </td>
                        <td class="total-td" style="border-right: 3px solid black;">
                            <textarea class="form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="cost_notes[]" id="leadConsultantsNotes1"></textarea>
                        </td>
                        <td style="background-color: #FFFFFF;" class="border border-white">
                            <a href="javascript:void(0)" class="text-success font-18" title="Add" id="addBtn1">
                                <i class="fa fa-plus"></i>
                            </a>
                        </td>
                    </tr>
                </tbody>

                <!---------------ANALYST------------------------>
                <tbody id="tableofAnalyst">
                    <tr class="th-blue-grey-lighten-2" id="rowofAnalyst">
                        <td class="title">
                            Analyst
                            <input type="hidden" value="Analyst" name="cost_type[]">
                        </td>
                        <td class="mgt-td-dark-bg">
                            <input type="text"
                                class="number_input text-center form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="cost_consultant_num[]" id="ec_AnalystsNoc1" max="100">
                        </td>
                        <td class="bg-white">
                            <input type="text"
                                class="currency_input text-center fw-bold text-dark form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="cost_day_fee[]" id="ec_AnalystsPd1">
                        </td>
                        <td class="mgt-td-dark-bg">
                            <input type="text"
                                class="number_input text-center form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="cost_day_num[]" id="ec_AnalystsNod1">
                        </td>
                        <td class="mgt-td-dark-bg">
                            <input type="text"
                                class="number_input text-center form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="cost_day_atd[]" id="ec_AnalystsAtd1">
                        </td>
                        <td class="mgt-td-dark-bg">
                            <input type="text"
                                class="number_input text-center form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="cost_nswh[]" id="ec_AnalystsNwh1">
                        </td>
                        <td class="total-td">
                            <h4 class="text-center lead text-danger" id="ec_AnalystsTotal1">-</h4>
                        </td>
                        <td class="total-td">
                            <input  type="text" class="form-control input-table" name="cost_roster[]" id="analysts_roster1"
                                    value="{{ old('') }}"                                     
                                    oninput="filterConsultant('analysts_roster1');"
                                    
                                    list="filtered_consultant_list" 
                                    autocomplete="off"
                                    >   
                            <input  type="hidden" value="" name="cost_roster_id[]" id="id_analysts_roster1">
                        </td>
                        <td class="total-td" style="border-right: 3px solid black;">
                            <textarea class="form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="cost_notes[]" id="analystsNotes1"></textarea>
                        </td>
                        <td style="background-color: #FFFFFF;" class="border border-white">
                            <a href="javascript:void(0)" class="text-success font-18" title="Add" id="addBtn2">
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
                    <td></td>
                    <td class="total-td" style="background-color: rgba(146, 146, 146, 0.727">
                        <h4 class="text-center text-danger" id="ec_SubtotalsConsulting">-</h4>
                    </td>
                    <td class="total-td"></td>
                    <td class="total-td" style="border-right: 3px solid black;"></td>
                    <td style="background-color: #FFFFFF;" class="border border-white"></td>
                </tr>

                <!--------------------------DESIGN------------------------------------------->
                <tr class="th-blue-grey-lighten">
                    <th class="title px-4 text-dark">2. DESIGN</th>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td class="total-td"></td>
                    <td class="total-td"></td>
                    <td class="total-td" style="border-right: 3px solid black;"></td>
                    <td style="background-color: #FFFFFF;" class="border border-white"></td>
                </tr>

                <!---------------DESIGNER---------------------->
                <tbody id="tableofDesigner">
                    <tr class="th-blue-grey-lighten-2" id="rowofDesigner">
                        <td class="title">
                            Designer
                            <input type="hidden" value="Designer" name="cost_type[]">
                        </td>
                        <td class="mgt-td-dark-bg">
                            <input type="text"
                                class="number_input text-center form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="cost_consultant_num[]" id="ec_DesignersNoc1" max="100">
                        </td>
                        <td class="mgt-td-dark-bg">
                            <input type="text"
                                class="currency_input text-center fw-bold text-dark text-center form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="cost_day_fee[]" id="ec_DesignersPd1" max="100">
                        </td>
                        <td class="mgt-td-dark-bg">
                            <input type="text"
                                class="number_input text-center form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="cost_day_num[]" id="ec_DesignersNod1">
                        </td>
                        <td class="">
                            <input type="text"
                                class="text-center form-control input-table @error('') is-invalid @enderror d-none"
                                value="{{ old('') }}" name="cost_day_atd[]" id="ec_DesignersAtd1">
                        </td>
                        <td class="">
                            <input type="text"
                                class="text-center form-control input-table @error('') is-invalid @enderror d-none"
                                value="{{ old('') }}" name="cost_nswh[]" id="ec_DesignersNwh1">
                        </td>
                        <td class="total-td">
                            <h4 class="text-center lead text-danger" id="ec_DesignersTotal1">-</h4>
                        </td>
                        <td class="total-td table-warning">
                            <input  type="text" class="form-control input-table" name="cost_roster[]" id="designers_roster1"
                                    value="{{ old('') }}"                                     
                                    oninput="filterConsultant('designers_roster1','ec_DesignersPd1','designer');"
                                    
                                    list="filtered_consultant_list" 
                                    autocomplete="off"
                                    >   
                            <input  type="hidden" value="" name="cost_roster_id[]" id="id_designers_roster1">
                        </td>
                        <td class="total-td" style="border-right: 3px solid black;">
                            <textarea class="form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="cost_notes[]" id="designersNotes1"></textarea>
                        </td>
                        <td style="background-color: #FFFFFF;" class="border border-white">
                            <a href="javascript:void(0)" class="text-success font-18" title="Add" id="addBtn3">
                                <i class="fa fa-plus"></i>
                            </a>
                        </td>
                    </tr>
                </tbody>

                <!---------------CREATOR----------------------->
                <tbody id="tableofCreator">
                    <tr class="th-blue-grey-lighten-2" id="rowofCreator">
                        <td class="title">
                            Creators Fees (500, 1K)
                            <input type="hidden" value="Creators Fees" name="cost_type[]">
                        </td>
                        <td>
                            <input type="text"
                                class="text-center form-control input-table @error('') is-invalid @enderror d-none"
                                value="{{ old('') }}" name="cost_consultant_num[]" id="ec_CreatorNoc1" max="100">
                        </td>
                        <td class="table-danger">
                            <fieldset>
                                <select class="input js-mytooltip  text-center form-select @error('') is-invalid @enderror" name="cost_day_fee[]" id="ec_CreatorPd1"
                                    data-mytooltip-content="<i>
                                        Creators Fee - 0 - no creators fee<br><br>
                                        500 - Creators Fee is the creator is the lead, for the 2nd session onwards<br><br>
                                        1,000 - Creators Fee if creator is NOT the lead, for the 2nd session onwards</i>"
                                    data-mytooltip-theme="dark" data-mytooltip-action="focus"
                                    data-mytooltip-direction="right" style="background-color:#ffcccc; color:red;">
                                    <option value="500" {{ old('') == '500' ? 'selected="selected"' : '' }} title="" selected>
                                        &#8369;500
                                    </option>
                                    <option value="1000" {{ old('') == '1000' ? 'selected="selected"' : '' }} title="">
                                        &#8369;1000
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
                                class="number_input text-center form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="cost_day_num[]" id="ec_CreatorNod1" max="100">
                        </td>
                        <td><input type="hidden" value="0" name="cost_day_atd[]"></td>
                        <td><input type="hidden" value="0" name="cost_nswh[]"></td>
                        <td class="total-td">
                            <h4 class="text-center lead text-danger" id="ec_CreatorTotal1">-</h4>
                        </td>
                        <td class="total-td">
                            <input  type="text" class="form-control input-table" name="cost_roster[]" id="creator_roster1"
                                    value="{{ old('') }}"                                     
                                    oninput="filterConsultant('creator_roster1');"
                                    
                                    list="filtered_consultant_list" 
                                    autocomplete="off"
                                    >   
                            <input  type="hidden" value="" name="cost_roster_id[]" id="id_creator_roster1">
                        </td>
                        <td class="total-td" style="border-right: 3px solid black;">
                            <textarea class="form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="cost_notes[]" id="creatorNotes1"></textarea>
                        </td>
                        <td style="background-color: #FFFFFF;" class="border border-white">
                            <a href="javascript:void(0)" class="text-success font-18" title="Add" id="ecaddButton5">
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
                    <td></td>
                    <td class="total-td" style="background-color: rgba(146, 146, 146, 0.727">
                        <h4 class="text-center text-danger" id="ec_DesignsSubtotal">-</h4>
                    </td>
                    <td class="total-td"></td>
                    <td class="total-td" style="border-right: 3px solid black;"></td>
                    <td style="background-color: #FFFFFF;" class="border border-white"></td>
                </tr>

                <!--------------------------PROGRAM------------------------------------------>
                <tr class="th-blue-grey-lighten">
                    <th class="title px-4 text-dark">3. PROGRAM</th>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td class="total-td"></td>
                    <td class="total-td"></td>
                    <td class="total-td" style="border-right: 3px solid black;"></td>
                    <td style="background-color: #FFFFFF;" class="border border-white"></td>
                </tr>

                <!---------------LEAD FACILITATOR-------------->
                <tbody id="tableofLeadFacilitator">
                    <tr class="th-blue-grey-lighten-2" id="rowofLeadFacilitator">
                        <td class="title">
                            Lead Facilitator
                            <input type="hidden" value="Lead Facilitator" name="cost_type[]">
                        </td>
                        <td class="mgt-td-dark-bg">
                            <input type="text"
                                class="number_input text-center form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="cost_consultant_num[]" id="ec_LeadfacilitatorsNoc1" max="100">
                        </td>
                        <td class="mgt-td-dark-bg">
                            <input type="text"
                                class="currency_input text-center fw-bold text-center text-dark form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="cost_day_fee[]" id="ec_LeadfacilitatorsPd1">
                        </td>
                        <td class="mgt-td-dark-bg">
                            <input type="text"
                                class="number_input text-center form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="cost_day_num[]" id="ec_LeadfacilitatorsNod1">
                        </td>
                        <td class="mgt-td-dark-bg">
                            <input type="text"
                                class="number_input text-center form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="cost_day_atd[]" id="ec_LeadfacilitatorsAtd1">
                        </td>
                        <td class="mgt-td-dark-bg">
                            <input type="text"
                                class="number_input text-center form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="cost_nswh[]" id="ec_LeadfacilitatorsNwh1">
                        </td>
                        <td class="total-td">
                            <h4 class="text-center lead text-danger" id="ec_LeadfacilitatorsTotal1">-</h4>
                        </td>
                        <td class="total-td table-warning">
                            <input  type="text" class="form-control input-table" name="cost_roster[]" id="leadfacilitators_roster1"
                                    value="{{ old('') }}"                                     
                                    oninput="filterConsultant('leadfacilitators_roster1','ec_LeadfacilitatorsPd1','leadFacilitator');"
                                    
                                    list="filtered_consultant_list" 
                                    autocomplete="off"
                                    >   
                            <input  type="hidden" value="" name="cost_roster_id[]" id="id_leadfacilitators_roster1">
                        </td>
                        <td class="total-td" style="border-right: 3px solid black;">
                            <textarea class="form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="cost_notes[]" id="leadfacilitatorsNotes1"></textarea>
                        </td>
                        <td style="background-color: #FFFFFF;" class="border border-white">
                            <a href="javascript:void(0)" class="text-success font-18" title="Add" id="addBtn4">
                                <i class="fa fa-plus"></i>
                            </a>
                        </td>
                    </tr>
                </tbody>

                <!---------------Co-lead---------------->
                <tbody id="tableofCoLead">
                    <tr class="th-blue-grey-lighten-2" id="rowofCoLead">
                        <td class="title">
                            Co-lead
                            <input type="hidden" value="Co-lead" name="cost_type[]">
                        </td>
                        <td class="table-warning">
                            <input type="text"
                                class="number_input text-center text-dark form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="cost_consultant_num[]" id="ec_CoLeadNoc1" max="100">
                        </td>
                        <td class="bg-white">
                            <input type="text"
                                class="currency_input text-center text-dark fw-bold form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="cost_day_fee[]" id="ec_CoLeadPd1">
                        </td>
                        <td class="table-warning">
                            <input type="text"
                                class="number_input text-center text-dark form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="cost_day_num[]" id="ec_CoLeadNod1">
                        </td>
                        <td class="table-warning">
                            <input type="text"
                                class="number_input text-center text-dark form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="cost_day_atd[]" id="ec_CoLeadAtd1">
                        </td>
                        <td class="table-warning">
                            <input type="text"
                                class="number_input text-center text-dark form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="cost_nswh[]" id="ec_CoLeadNwh1">
                        </td>
                        <td class="total-td">
                            <h4 class="text-center lead text-danger" id="ec_CoLeadTotal1">-</h4>
                        </td>
                        <td class="total-td table-warning">
                            <input  type="text" class="form-control input-table" name="cost_roster[]" id="coLead_roster1"
                                    value="{{ old('') }}"                                     
                                    oninput="filterConsultant('coLead_roster1','ec_CoLeadPd1','coLead');"
                                    
                                    list="filtered_consultant_list" 
                                    autocomplete="off"
                                    >   
                            <input  type="hidden" value="" name="cost_roster_id[]" id="id_coLead_roster1">
                        </td>
                        <td class="total-td" style="border-right: 3px solid black;">
                            <textarea class="form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="cost_notes[]" id="coLeadNotes1"></textarea>
                        </td>
                        <td style="background-color: #FFFFFF;" class="border border-white">
                            <a href="javascript:void(0)" class="text-success font-18" title="Add" id="ecaddButtonCoLead">
                                <i class="fa fa-plus"></i>
                            </a>
                        </td>
                    </tr>
                </tbody>

                <!---------------CO-FACILITATOR---------------->
                <tbody id="tableofCoFacilitator">
                    <tr class="th-blue-grey-lighten-2" id="rowofCoFacilitator">
                        <td class="title">
                            Co-Facilitator / Resource Speaker
                            <input type="hidden" value="Co-Facilitator / Resource Speaker" name="cost_type[]">
                        </td>
                        <td class="mgt-td-dark-bg">
                            <input type="text"
                                class="number_input text-center text-dark form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="cost_consultant_num[]" id="ec_CofacilitatorsNoc1" max="100">
                        </td>
                        <td class="mgt-td-dark-bg">
                            <input type="text"
                                class="currency_input text-center text-dark fw-bold form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="cost_day_fee[]" id="ec_CofacilitatorsPd1">
                        </td>
                        <td class="mgt-td-dark-bg">
                            <input type="text"
                                class="number_input text-center text-dark form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="cost_day_num[]" id="ec_CofacilitatorsNod1">
                        </td>
                        <td class="mgt-td-dark-bg">
                            <input type="text"
                                class="number_input text-center text-dark form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="cost_day_atd[]" id="ec_CofacilitatorsAtd1">
                        </td>
                        <td class="mgt-td-dark-bg">
                            <input type="text"
                                class="number_input text-center text-dark form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="cost_nswh[]" id="ec_CofacilitatorsNwh1">
                        </td>
                        <td class="total-td">
                            <h4 class="text-center lead text-danger" id="ec_CofacilitatorsTotal1">-</h4>
                        </td>
                        <td class="total-td table-warning">
                            <input  type="text" class="form-control input-table" name="cost_roster[]" id="cofacilitator_roster1"
                                    value="{{ old('') }}"                                     
                                    oninput="filterConsultant('cofacilitator_roster1','ec_CofacilitatorsPd1','coFaci');"
                                    
                                    list="filtered_consultant_list" 
                                    autocomplete="off"
                                    >   
                            <input  type="hidden" value="" name="cost_roster_id[]" id="id_cofacilitator_roster1">
                        </td>
                        <td class="total-td" style="border-right: 3px solid black;">
                            <textarea class="form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="cost_notes[]" id="cofacilitatorNotes1"></textarea>
                        </td>
                        <td style="background-color: #FFFFFF;" class="border border-white">
                            <a href="javascript:void(0)" class="text-success font-18" title="Add" id="addBtn5">
                                <i class="fa fa-plus"></i>
                            </a>
                        </td>
                    </tr>
                </tbody>

                <!---------------ACTION LEARNING COACH--------->
                <tbody id="tableofActionLearningCoach">
                    <tr class="th-blue-grey-lighten-2" id="rowofActionLearningCoach">
                        <td class="title">
                            Action Learning Coach
                            <input type="hidden" value="Action Learning Coach" name="cost_type[]">
                        </td>
                        <td class="mgt-td-dark-bg">
                            <input type="text"
                                class="number_input text-dark text-center form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="cost_consultant_num[]" id="ec_ActionlearningcoachNoc1" max="100">
                        </td>
                        <td class="bg-white">
                            <input type="text"
                                class="currency_input text-center text-dark fw-bold form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="cost_day_fee[]" id="ec_ActionlearningcoachPd1">
                        </td>
                        <td class="mgt-td-dark-bg">
                            <input type="text"
                                class="number_input text-dark text-center form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="cost_day_num[]" id="ec_ActionlearningcoachNod1">
                        </td>
                        <td class="mgt-td-dark-bg">
                            <input type="text"
                                class="number_input text-dark text-center form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="cost_day_atd[]" id="ec_ActionlearningcoachAtd1">
                        </td>
                        <td class="mgt-td-dark-bg">
                            <input type="text"
                                class="number_input text-dark text-center form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="cost_nswh[]" id="ec_ActionlearningcoachNwh1">
                        </td>
                        <td class="total-td">
                            <h4 class="text-center lead text-danger" id="ec_ActionlearningcoachTotal1">-</h4>
                        </td>
                        <td class="total-td table-warning">
                            <input  type="text" class="form-control input-table" name="cost_roster[]" id="actionlearningcoach_roster1"
                                    value="{{ old('') }}"                                     
                                    oninput="filterConsultant('actionlearningcoach_roster1');"
                                    
                                    list="filtered_consultant_list" 
                                    autocomplete="off"
                                    >   
                            <input  type="hidden" value="" name="cost_roster_id[]" id="id_actionlearningcoach_roster1">
                        </td>
                        <td class="total-td" style="border-right: 3px solid black;">
                            <textarea class="form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="cost_notes[]" id="actionlearningcoachNotes1"></textarea>
                        </td>
                        <td style="background-color: #FFFFFF;" class="border border-white">
                            <a href="javascript:void(0)" class="text-success font-18" title="Add" id="addBtn6">
                                <i class="fa fa-plus"></i>
                            </a>
                        </td>
                    </tr>
                </tbody>

                <!---------------MARSHAL----------------------->
                <tbody id="tableofMarshal">
                    <tr class="th-blue-grey-lighten-2" id="rowofMarshal">
                        <td class="title">
                            Marshal
                            <input type="hidden" value="Marshal" name="cost_type[]">
                        </td>
                        <td class="mgt-td-dark-bg">
                            <input type="text"
                                class="number_input text-center form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="cost_consultant_num[]" id="ec_MarshalNoc1">
                        </td>
                        <td class="mgt-td-dark-bg">
                            <input type="text"
                                class="currency_input text-center text-dark fw-bold form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="cost_day_fee[]" id="ec_MarshalPd1">
                        </td>
                        <td class="mgt-td-dark-bg">
                            <input type="text"
                                class="number_input text-center  form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="cost_day_num[]" id="ec_MarshalNod1">
                        </td>
                        <td class="mgt-td-dark-bg">
                            <input type="text"
                                class="number_input text-center form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="cost_day_atd[]" id="ec_MarshalAtd1">
                        </td>
                        <td class="mgt-td-dark-bg">
                            <input type="text"
                                class="number_input text-center  form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="cost_nswh[]" id="ec_MarshalNwh1">
                        </td>
                        <td class="total-td">
                            <h4 class="number_input text-center lead text-danger" id="ec_MarshalTotal1">-</h4>
                        </td>
                        <td class="total-td table-warning">
                        <input  type="text" class="form-control input-table" name="cost_roster[]" id="marshal_roster1"
                                    value="{{ old('') }}"                                     
                                    oninput="filterConsultant('marshal_roster1','ec_MarshalPd1','marshal');"
                                    
                                    list="filtered_consultant_list" 
                                    autocomplete="off"
                                    >   
                            <input  type="hidden" value="" name="cost_roster_id[]" id="id_marshal_roster1">
                        </td>
                        <td class="total-td" style="border-right: 3px solid black;">
                            <textarea class="form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="cost_notes[]" id="marshalNotes1"></textarea>
                        </td>
                        <td style="background-color: #FFFFFF;" class="border border-white">
                            <a href="javascript:void(0)" class="text-success font-18" title="Add" id="addBtn7">
                                <i class="fa fa-plus"></i>
                            </a>
                        </td>
                    </tr>
                </tbody>

                <!---------------ONSITE PC--------------------->
                <tbody id="tableofOnsitePC">
                    <tr class="th-blue-grey-lighten-2" id="rowofOnsitePC">
                        <td class="title">
                            On-site PC (P4.4K / P5.6K/ P6.6K/ 8.5K)
                            <input type="hidden" value="On-site PC" name="cost_type[]">
                        </td>
                        <td class="mgt-td-dark-bg">
                            <input type="text"
                                class="number_input text-center form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="cost_consultant_num[]" id="ec_OnsitepcNoc1">
                        </td>
                        <td class="table-danger">
                            <fieldset>
                                <select class="input js-mytooltip text-center form-select @error('') is-invalid @enderror select" name="cost_day_fee[]"
                                    id="ec_OnsitepcPd1" style="background-color:#ffcccc; color:red;"
                                    data-mytooltip-content="<i>
                                        <b>On-site PC</b><br/>
                                        P4,400<br/>
                                        P6,600<br/>
                                        P8,500</i>"
                                data-mytooltip-theme="dark" data-mytooltip-action="focus"
                                data-mytooltip-direction="right">
                                <option value="4400" {{ old('') == '4400' ? 'selected="selected"' : '' }}
                                    title="">
                                    &#8369;4,400
                                </option>
                                <option value="5600" {{ old('') == '5600' ? 'selected="selected"' : '' }}
                                    title="">
                                    &#8369;5,600
                                </option>
                                <option value="6600" {{ old('') == '6600' ? 'selected="selected"' : '' }}
                                    title="">
                                    &#8369;6,600
                                </option>
                                <option value="8500" {{ old('') == '8500' ? 'selected="selected"' : '' }}
                                    title="">
                                    &#8369;8,500
                                </option>
                            </select>
                            @error('ef_customFee')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </fieldset>
                        </td>
                        <td class="mgt-td-dark-bg">
                            <input type="text"
                                class="number_input text-center  form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="cost_day_num[]" id="ec_OnsitepcNod1">
                        </td>
                        <td class="mgt-td-dark-bg">
                            <input type="text"
                                class="number_input text-center form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="cost_day_atd[]" id="ec_OnsitepcAtd1">
                        </td>
                        <td class="mgt-td-dark-bg">
                            <input type="text"
                                class="number_input text-center form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="cost_nswh[]" id="ec_OnsitepcNwh1">
                        </td>
                        <td class="total-td">
                            <h4 class="number_input text-center lead text-danger" id="ec_OnsitepcTotal1">-</h4>
                        </td>
                        <td class="total-td">
                            <input  type="text" class="form-control input-table" name="cost_roster[]" id="onsitepc_roster1"
                                    value="{{ old('') }}"                                     
                                    oninput="filterConsultant('onsitepc_roster1');"
                                    
                                    list="filtered_consultant_list" 
                                    autocomplete="off"
                                    >   
                            <input  type="hidden" value="" name="cost_roster_id[]" id="id_onsitepc_roster1">
                        </td>
                        <td class="total-td" style="border-right: 3px solid black;">
                            <textarea class="form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="cost_notes[]" id="onsitepcNotes1"></textarea>
                        </td>
                        <td style="background-color: #FFFFFF; border-right: 3px solid black;" class="border border-white">
                            <a href="javascript:void(0)" class="text-success font-18" title="Add" id="addBtn8">
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
                    <td></td>
                    <td class="total-td" style="background-color: rgba(146, 146, 146, 0.727)">
                        <h4 class="text-center text-danger" id="ec_ProgramsSubtotal">-</h4>
                    </td>
                    <td class="total-td"></td>
                    <td class="total-td" style="border-right: 3px solid black;"></td>
                    <td style="background-color: #FFFFFF;" class="border border-white"></td>
                </tr>

                <!--------------------------OTHER ROLES-------------------------------------->
                <tr class="th-blue-grey-lighten">
                    <th class="title px-4 text-dark">4. OTHER ROLES</th>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td class="total-td"></td>
                    <td class="total-td"></td>
                    <td class="total-td" style="border-right: 3px solid black;"></td>
                    <td style="background-color: #FFFFFF;" class="border border-white"></td>
                </tr>

                <tbody id="tableofDocumentor">
                    <tr class="th-blue-grey-lighten-2" id="rowofDocumentor">
                        <td class="title">
                            Documentor
                            <input type="hidden" value="Documentor" name="cost_type[]">
                        </td>
                        <td class="mgt-td-dark-bg">
                            <input type="text" class="number_input text-center text-dark fw-bold form-control input-table @error('') is-invalid @enderror" value="{{ old('') }}" name="cost_consultant_num[]" id="ec_DocumentorsNoc1" max="100" >
                        </td>
                        <td class="bg-white">
                            <input type="text"
                                class="currency_input text-center text-dark fw-bold form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="cost_day_fee[]" id="ec_DocumentorsPd1">
                        </td>
                        <td class="mgt-td-dark-bg">
                            <input type="text"
                                class="number_input text-center text-dark fw-bold form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="cost_day_num[]" id="ec_DocumentorsNod1">
                        </td>
                        <td class="mgt-td-dark-bg">
                            <input type="text"
                                class="number_input text-center text-dark fw-bold form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="cost_day_atd[]" id="ec_DocumentorsAtd1">
                        </td>
                        <td class="mgt-td-dark-bg">
                            <input type="text"
                                class="number_input text-center text-dark fw-bold form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="cost_nswh[]" id="ec_DocumentorsNwh1">
                        </td>
                        <td class="total-td" style="background-color: rgba(146, 146, 146, 0.727">
                            <h4 class="text-center text-danger" id="ec_DocumentorsTotal1">-</h4>
                        </td>
                        <td class="total-td">
                            <input  type="text" class="form-control input-table" name="cost_roster[]" id="documentor_roster1"
                                    value="{{ old('') }}"                                     
                                    oninput="filterConsultant('documentor_roster1');"
                                    
                                    list="filtered_consultant_list" 
                                    autocomplete="off"
                                    >   
                            <input  type="hidden" value="" name="cost_roster_id[]" id="id_documentor_roster1">
                        </td>
                        <td class="total-td" style="border-right: 3px solid black;">
                            <textarea class="form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="cost_notes[]" id="documentorNotes1"></textarea>
                        </td>
                        <td style="background-color: #FFFFFF;" class="border border-white">
                            <a href="javascript:void(0)" class="text-success font-18" title="Add" id="addBtn9">
                                <i class="fa fa-plus"></i>
                            </a>
                        </td>
                    </tr>
                </tbody>

                <!--------------------------PER DIEM----------------------------------------->
                <tbody id="tableofPerDiem">
                    <tr class="th-blue-grey-lighten" id="rowofPerDiem">
                        <th class="title px-4 text-dark">
                            5. PER DIEM
                            <input type="hidden" value="Per Diem" name="cost_type[]">
                        </th>
                        <td class="table-warning">
                            <input type="text"
                                class="number_input text-center form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="cost_consultant_num[]" id="ec_PerdiemNoc1" max="100">
                        </td>
                        <td class="bg-white">
                            <input type="text"
                                class="currency_input text-center text-dark fw-bold form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="cost_day_fee[]" id="ec_PerdiemPd1">
                        </td>
                        <td class="mgt-td-dark-bg">
                            <input type="text"
                                class="number_input text-center text-dark fw-bold form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="cost_day_num[]" id="ec_PerdiemNod1">
                        </td>
                        <td><input type="hidden" value="0" name="cost_day_atd[]"></td>
                        <td><input type="hidden" value="0" name="cost_nswh[]"></td>
                        <td class="total-td" style="background-color: rgba(146, 146, 146, 0.727">
                            <h4 class="text-center text-danger" id="ec_PerdiemTotal1">-</h4>
                        </td>
                        <td class="total-td">
                            <input  type="text" class="form-control input-table" name="cost_roster[]" id="perdiem_roster1"
                                    value="{{ old('') }}"                                     
                                    oninput="filterConsultant('perdiem_roster1');"
                                    
                                    list="filtered_consultant_list" 
                                    autocomplete="off"
                                    >   
                            <input  type="hidden" value="" name="cost_roster_id[]" id="id_perdiem_roster1">
                        </td>
                        <td class="total-td" style="border-right: 3px solid black;">
                            <textarea class="form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="cost_notes[]" id="perdiemNotes1"></textarea>
                        </td>
                        <td style="background-color: #FFFFFF;" class="border border-white">
                            <a href="javascript:void(0)" class="text-success font-18" title="Add" id="addBtnPerDiem">
                                <i class="fa fa-plus"></i>
                            </a>
                        </td>
                    </tr>
                </tbody>

                <!--------------------------OFF-PROGRAM-------------------------------------->
                <tr class="th-blue-grey-lighten">
                    <th class="title px-4 text-dark">6. OFF-PROGRAM</th>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td class="total-td"></td>
                    <td class="total-td"></td>
                    <td class="total-td" style="border-right: 3px solid black;"></td>
                    <td style="background-color: #FFFFFF;" class="border border-white"></td>
                </tr>
                <tbody id="tableofOffProgram">
                    <tr class="th-blue-grey-lighten-2" id="rowofOffProgram">
                        <td class="title">
                            Off-Program fee
                            <input type="hidden" value="Off-Program fee" name="cost_type[]"></td>
                        <td class="table-warning">
                            <input type="text"
                                class="number_input input js-mytooltip text-center text-dark fw-bold form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="cost_consultant_num[]" id="ec_OffprogramsNoc1" max="100"
                                data-mytooltip-content="<i>
                                            - For single or series of programs<br>
                                            - One time only<br>
                                            - Per person<br>
                                            </i>"
                                data-mytooltip-theme="dark" data-mytooltip-action="focus"
                                data-mytooltip-direction="right">
                        </td>
                        <td class="bg-white">
                            <input type="text"
                                class="currency_input text-center text-dark fw-bold form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}"  name="cost_day_fee[]" id="ec_OffprogramsPd1">
                        </td>
                        <td><input type="hidden" value="0" name="cost_day_num[]"></td>
                        <td><input type="hidden" value="0" name="cost_day_atd[]"></td>
                        <td><input type="hidden" value="0" name="cost_nswh[]"></td>
                        <td class="total-td" style="background-color: rgba(146, 146, 146, 0.727">
                            <h4 class="text-center text-danger" id="ec_OffprogramsTotal1">-</h4>
                        </td>
                        <td class="total-td">
                            <input  type="text" class="form-control input-table" name="cost_roster[]" id="offprogram_roster1"
                                        value="{{ old('') }}"                                     
                                        oninput="filterConsultant('offprogram_roster1');"
                                        
                                        list="filtered_consultant_list" 
                                        autocomplete="off"
                                        >   
                                <input  type="hidden" value="" name="cost_roster_id[]" id="id_offprogram_roster1">
                            </td>
                        <td class="total-td" style="border-right: 3px solid black;">
                            <textarea class="form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="cost_notes[]" id="offprogramNotes1"></textarea>
                        </td>
                        <td style="background-color: #FFFFFF;" class="border border-white">
                            <a href="javascript:void(0)" class="text-success font-18" title="Add" id="addBtnOffProgram">
                                <i class="fa fa-plus"></i>
                            </a>
                        </td>
                    </tr>
                </tbody>

                <!--------------------------MISCELLANEOUS------------------------------------>
                <tr class="th-blue-grey-lighten">
                    <th class="title px-4 text-dark">MISCELLANEOUS</th>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td class="total-td"></td>
                    <td class="total-td"></td>
                    <td class="total-td" style="border-right: 3px solid black;"></td>
                    <td style="background-color: #FFFFFF;" class="border border-white"></td>
                </tr>

                <tr class="th-blue-grey-lighten-2">
                    <td class="title">
                        Program Expenses
                        <input type="hidden" value="Program Expenses" name="cost_type[]"></td>
                    </td>
                    <td><input type="hidden" value="0" name="cost_consultant_num[]"></td>
                    <td class="bg-white">
                        <input type="text"
                            class="number_input text-center text-dark fw-bold form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="cost_day_fee[]" id="ec_Programexpenses" maxlength="4" data-type="currency">
                    </td>
                    <td><input type="hidden" value="0" name="cost_day_num[]"></td>
                    <td><input type="hidden" value="0" name="cost_day_atd[]"></td>
                    <td><input type="hidden" value="0" name="cost_nswh[]"></td>
                    <td class="total-td" style="background-color: rgba(146, 146, 146, 0.727">
                        <h4 class="text-center text-danger" id="ec_ProgramexpensesTotal">-</h4>
                    </td>
                    <td class="total-td">
                        <input  type="hidden" class="form-control input-table" name="cost_roster[]" id="Programexpenses_roster1"
                            value="{{ old('') }}"                                     
                            oninput="filterConsultant('Programexpenses_roster1');"
                            
                            list="filtered_consultant_list" 
                            autocomplete="off"
                            >   
                        <input  type="hidden" value="" name="cost_roster_id[]" id="id_Programexpenses_roster1">
                    </td>
                    <td class="total-td" style="border-right: 3px solid black;">
                        <textarea class="form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="cost_notes[]" id="ProgramexpensesNotes1"></textarea>
                    </td>
                    <td style="background-color: #FFFFFF;" class="border border-white"></td>
                </tr>
                <!--------------------------TOTAL-------------------------------------------->
                <tr class="">
                    <td class="table-active fw-bold text-uppercase text-dark fst-italic overall-total-start">TOTAL</td>
                    <td class="table-active overall-total-middle"></td>
                    <td class="table-active overall-total-middle"></td>
                    <td class="table-active overall-total-middle"></td>
                    <td class="table-active overall-total-middle"></td>
                    <td class="table-active overall-total-middle"></td>
                    <td class="table-active overall-total-end">
                        <h4 class="text-center text-danger" id="ec_Totals">-</h4>
                    </td>
                    <td class="table-active overall-total-end"></td>
                    <td class="table-active overall-total-end"style="border:3px solid black"></td>
                    <td class="border border-white add-row bg-white" scope="col"></td>
                </tr>

            </table>
        </div>
        <!-- AUTO COMPLETE -->
        {{-- <template id="all_consultant_list">
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
        </template> --}}
        <datalist id="filtered_consultant_list">
            @foreach ($consultantFee as $key => $feeData)
                <option 
                    value="{{ $feeData->first_name }} {{ $feeData->last_name }}" 
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
                    {{ $feeData->first_name }} {{ $feeData->last_name }}
                </option>
            @endforeach
        </datalist>
        <!-- END AUTO COMPLETE -->
    </section>
</div>
<!--------------------------F2F ENGAGEMENT COST SCRIPT ---------------------->
@include('form.components.f2f_engagement.f2f_script.f2f_engagement_cost')
<script>
var results = document.querySelector('#filtered_consultant_list');
// var templateContent = document.querySelector('#all_consultant_list').content;

function filterConsultant(rosterFieldID, hourlyFeeID = '', costType = '') {
    // 
    // var search = document.querySelector('#' + rosterFieldID);

    // while (results.children.length) {
    //     results.removeChild(results.firstChild);
    // }
    // var inputVal = new RegExp('^'+search.value.trim(), 'i');
    // var clonedOptions = templateContent.cloneNode(true);
    // var set = Array.prototype.reduce.call(clonedOptions.children, 
    //     function searchFilter(frag, el) {
    //       if (inputVal.test(el.textContent.trim()) && frag.children.length < 10) { 
    //         frag.appendChild(el)
    //     };
    //     return frag;
    //     }
    // , document.createDocumentFragment());
    // results.appendChild(set);

    getFee(rosterFieldID, hourlyFeeID, costType);
}

function getFee(rosterFieldID, hourlyFeeID = '', costType = '') {
    var rosterValue = document.querySelector('#' + rosterFieldID);
    // var getFee = $('#filtered_consultant_list option[value="' + rosterValue.value.toUpperCase() + '"]');
    var getFee = $('#filtered_consultant_list option[value="' + rosterValue.value + '"]');
    (getFee) ? $('#id_' + rosterFieldID).val(getFee.data('id')) : '';
    if (hourlyFeeID != '') {
        let currency = Intl.NumberFormat("en-US");
        switch(costType) {
            case 'leadConsultant':
                if(getFee.data('leadconsultant') != undefined) {    
                    $('#' + hourlyFeeID).val(currency.format(getFee.data('leadconsultant').replace(/,/g, "") * 8));
                }
                break; 
            case 'designer':
                if(getFee.data('designer') != undefined) {   
                    $('#' + hourlyFeeID).val(currency.format(getFee.data('designer').replace(/,/g, "") * 8));
                }
                break; 
            case 'leadFacilitator':
                if(getFee.data('feeleadfaci') != undefined) {
                    $('#' + hourlyFeeID).val(currency.format(getFee.data('feeleadfaci').replace(/,/g, "") * 8));
                }
                break; 
            case 'coLead':
                if(getFee.data('coleadf2f') != undefined) {
                    $('#' + hourlyFeeID).val(currency.format(getFee.data('coleadf2f').replace(/,/g, "") * 8));  
                }              
                break; 
            case 'alCoach':
                break;
            case 'coFaci':
                if(getFee.data('cofaci') != undefined) {
                    $('#' + hourlyFeeID).val(currency.format(getFee.data('cofaci').replace(/,/g, "") * 8));                
                }
                break; 
            case 'marshal': 
                if(getFee.data('marshal') != undefined) {           
                    $('#' + hourlyFeeID).val(currency.format(getFee.data('marshal') * 8)); 
                }
                break; 
            case 'moderator':
                if(getFee.data('moderator') != undefined) {  
                    $('#' + hourlyFeeID).val(currency.format(getFee.data('moderator').replace(/,/g, "") * 8));         
                }       
                break; 
            case 'producer':
                if(getFee.data('producer') != undefined) {  
                    $('#' + hourlyFeeID).val(currency.format(getFee.data('producer').replace(/,/g, "") * 8));   
                }             
                break; 
            default: 
                break;
            ;
        }
    } 
}
</script>
@if($parentData)
    <script>

    $(document).ready( function () {

        var salesCount = 1, referralCount = 1, engagementManagerCount = 1, offSiteCount = 1, leadConsultantCount = 1,
        analystCount = 1, designerCount = 1, creatorsFeeCount = 1, leadFacilitatorCount = 1, coLeadCount = 1, coFacilitator = 1,
        alCoachCount = 1, marshalCount = 1, onSitePcCount = 1, documentatorCount = 1, perDiemCount = 1, offProgramFeeCount = 1;

        @foreach($subCostList as $cost)

            @if($cost->type == 'Sales') 

                if (salesCount <= 1) {
                    document.getElementById('cost_sale1').value = '{{ $cost->day_fee }}';
                    document.getElementById('inputforSale1').value = '{{ $cost->day_fee }}';
                    document.getElementById('sales_roster1').value = '{{ $cost->rooster }}';
                    document.getElementById('id_sales_roster1').value = '{{ $cost->consultant_id }}';
                    document.getElementById('salesNotes1').value = '{{ $cost->notes }}';
                } else {                    
                    document.getElementById('cost_sale1').style.display = 'none';
                    document.getElementById('cost_sale1').disabled = true;
                    document.getElementById('inputforSale1').disabled = false;
                    document.getElementById('inputforSale1').style.display = '';
                    
                    $('#ecaddButton').click();

                    document.getElementById('inputforSale' + salesCount).value = '{{ $cost->day_fee }}';
                    document.getElementById('sales_roster' + salesCount).value = '{{ $cost->rooster }}';
                    document.getElementById('id_sales_roster' + salesCount).value = '{{ $cost->consultant_id }}';
                    document.getElementById('salesNotes' + salesCount).value = '{{ $cost->notes }}';
                }
                salesCount++;
            @endif

            @if($cost->type == 'Referral') 
                if (referralCount <= 1) {
                    document.getElementById('referrals1').value = '{{ $cost->day_fee }}';
                    document.getElementById('inputforReferrals1').value = '{{ $cost->day_fee }}';
                    document.getElementById('referrals_roster1').value = '{{ $cost->rooster }}';
                    document.getElementById('id_referrals_roster1').value = '{{ $cost->consultant_id }}';
                    document.getElementById('referralsNotes1').value = '{{ $cost->notes }}';
                } else {                    
                    document.getElementById('referrals1').style.display = 'none';
                    document.getElementById('referrals1').disabled = true;
                    document.getElementById('inputforReferrals1').disabled = false;
                    document.getElementById('inputforReferrals1').style.display = '';
                    
                    $('#ecaddButton2').click();

                    document.getElementById('inputforReferrals' + referralCount).value = '{{ $cost->day_fee }}';
                    document.getElementById('referrals_roster' + referralCount).value = '{{ $cost->rooster }}';
                    document.getElementById('id_referrals_roster' + referralCount).value = '{{ $cost->consultant_id }}';
                    document.getElementById('referralsNotes' + referralCount).value = '{{ $cost->notes }}';
                }
                referralCount++;
            @endif

            @if($cost->type == 'Engagement Manager') 
                if (engagementManagerCount <= 1) {
                    document.getElementById('ecengagementManager1').value = '{{ $cost->day_fee }}';
                    document.getElementById('inputforEngagementManager1').value = '{{ $cost->day_fee }}';
                    document.getElementById('engagementManager_roster1').value = '{{ $cost->rooster }}';
                    document.getElementById('id_engagementManager_roster1').value = '{{ $cost->consultant_id }}';
                    document.getElementById('engagementManagerNotes1').value = '{{ $cost->notes }}';
                } else {                    
                    document.getElementById('ecengagementManager1').style.display = 'none';
                    document.getElementById('ecengagementManager1').disabled = true;
                    document.getElementById('inputforEngagementManager1').disabled = false;
                    document.getElementById('inputforEngagementManager1').style.display = '';
                    
                    $('#ecaddButton3').click();

                    document.getElementById('inputforEngagementManager' + engagementManagerCount).value = '{{ $cost->day_fee }}';
                    document.getElementById('engagementManager_roster' + engagementManagerCount).value = '{{ $cost->rooster }}';
                    document.getElementById('id_engagementManager_roster' + engagementManagerCount).value = '{{ $cost->consultant_id }}';
                    document.getElementById('engagementManagerNotes' + engagementManagerCount).value = '{{ $cost->notes }}';
                }
                engagementManagerCount++;
            @endif

            @if($cost->type == 'Offsite PC')
                if (offSiteCount <= 1) {
                    document.getElementById('ec_offsitePc1').value = '{{ $cost->day_fee }}';
                    document.getElementById('inputforOffsite1').value = '{{ $cost->day_fee }}';
                    document.getElementById('Offsite_roster1').value = '{{ $cost->rooster }}';
                    document.getElementById('id_Offsite_roster1').value = '{{ $cost->consultant_id }}';
                    document.getElementById('offsiteNotes1').value = '{{ $cost->notes }}';
                } else {
                    document.getElementById('ec_offsitePc1').style.display = 'none';
                    document.getElementById('ec_offsitePc1').disabled = true;
                    document.getElementById('inputforOffsite1').disabled = false;
                    document.getElementById('inputforOffsite1').style.display = '';
                    
                    $('#ecaddButton4').click();

                    document.getElementById('inputforOffsite' + offSiteCount).value = '{{ $cost->day_fee }}';
                    document.getElementById('Offsite_roster' + offSiteCount).value = '{{ $cost->rooster }}';
                    document.getElementById('id_Offsite_roster' + offSiteCount).value = '{{ $cost->consultant_id }}';
                    document.getElementById('offsiteNotes' + offSiteCount).value = '{{ $cost->notes }}';
                }
                offSiteCount++;
            @endif

            @if($cost->type == 'Lead Consultant') 
                if (leadConsultantCount > 1) {
                    $('#addBtn1').click();
                } 
                document.getElementById('ec_LeadconsultantsNoc' + leadConsultantCount).value = '{{ $cost->consultant_num }}';
                document.getElementById('ec_LeadconsultantsPd' + leadConsultantCount).value = '{{ $cost->day_fee }}';
                document.getElementById('ec_LeadconsultantsNod' + leadConsultantCount).value = '{{ $cost->day_num }}';
                document.getElementById('ec_LeadconsultantsAtd' + leadConsultantCount).value = '{{ $cost->atd }}';
                document.getElementById('ec_LeadconsultantsNwh' + leadConsultantCount).value = '{{ $cost->nswh }}';
                document.getElementById('leadConsultants_roster' + leadConsultantCount).value = '{{ $cost->rooster }}';
                document.getElementById('id_leadConsultants_roster' + leadConsultantCount).value = '{{ $cost->consultant_id }}';
                document.getElementById('leadConsultantsNotes' + leadConsultantCount).value = '{{ $cost->notes }}';

                $(`#ec_LeadconsultantsPd${leadConsultantCount}`).click();
                leadConsultantCount++;
            @endif

            @if($cost->type == 'Analyst') 
                if (analystCount > 1) {
                    $('#addBtn2').click();
                }
                document.getElementById('ec_AnalystsNoc' + analystCount).value = '{{ $cost->consultant_num }}';
                document.getElementById('ec_AnalystsPd' + analystCount).value = '{{ $cost->day_fee }}';
                document.getElementById('ec_AnalystsNod' + analystCount).value = '{{ $cost->day_num }}';
                document.getElementById('ec_AnalystsAtd' + analystCount).value = '{{ $cost->atd }}';
                document.getElementById('ec_AnalystsNwh' + analystCount).value = '{{ $cost->nswh }}';
                document.getElementById('analysts_roster' + analystCount).value = '{{ $cost->rooster }}';
                document.getElementById('id_analysts_roster' + analystCount).value = '{{ $cost->consultant_id }}';
                document.getElementById('analystsNotes' + analystCount).value = '{{ $cost->notes }}';
                analystCount++;
            @endif

            @if($cost->type == 'Designer') 
                if (designerCount > 1) {
                    $('#addBtn3').click();
                }
                document.getElementById('ec_DesignersNoc' + designerCount).value = '{{ $cost->consultant_num }}';
                document.getElementById('ec_DesignersPd' + designerCount).value = '{{ $cost->day_fee }}';
                document.getElementById('ec_DesignersNod' + designerCount).value = '{{ $cost->day_num }}';
                document.getElementById('designers_roster' + designerCount).value = '{{ $cost->rooster }}';
                document.getElementById('id_designers_roster' + designerCount).value = '{{ $cost->consultant_id }}';
                document.getElementById('designersNotes' + designerCount).value = '{{ $cost->notes }}';
                designerCount++;
            @endif

            @if($cost->type == 'Creators Fees') 
                if (creatorsFeeCount > 1) {
                    $('#ecaddButton5').click();
                }
                document.getElementById('ec_CreatorPd' + creatorsFeeCount).value = '{{ $cost->day_fee }}';
                document.getElementById('ec_CreatorNod' + creatorsFeeCount).value = '{{ $cost->day_num }}';
                document.getElementById('creator_roster' + creatorsFeeCount).value = '{{ $cost->rooster }}';
                document.getElementById('id_creator_roster' + creatorsFeeCount).value = '{{ $cost->consultant_id }}';
                document.getElementById('creatorNotes' + creatorsFeeCount).value = '{{ $cost->notes }}';
                creatorsFeeCount++;
            @endif

            @if($cost->type == 'Lead Facilitator')
                if (leadFacilitatorCount > 1) {
                    $('#addBtn4').click();
                }
                document.getElementById('ec_LeadfacilitatorsNoc' + leadFacilitatorCount).value = '{{ $cost->consultant_num }}';
                document.getElementById('ec_LeadfacilitatorsPd' + leadFacilitatorCount).value = '{{ $cost->day_fee }}';
                document.getElementById('ec_LeadfacilitatorsNod' + leadFacilitatorCount).value = '{{ $cost->day_num }}';
                document.getElementById('ec_LeadfacilitatorsAtd' + leadFacilitatorCount).value = '{{ $cost->atd }}';
                document.getElementById('ec_LeadfacilitatorsNwh' + leadFacilitatorCount).value = '{{ $cost->nswh }}';
                document.getElementById('leadfacilitators_roster' + leadFacilitatorCount).value = '{{ $cost->rooster }}';
                document.getElementById('id_leadfacilitators_roster' + leadFacilitatorCount).value = '{{ $cost->consultant_id }}';
                document.getElementById('leadfacilitatorsNotes' + leadFacilitatorCount).value = '{{ $cost->notes }}';
                leadFacilitatorCount++;
            @endif

            @if($cost->type == 'Co-lead') // 
                if (coLeadCount > 1) {
                    $('#ecaddButtonCoLead').click();
                }
                document.getElementById('ec_CoLeadNoc' + coLeadCount).value = '{{ $cost->consultant_num }}';
                document.getElementById('ec_CoLeadPd' + coLeadCount).value = '{{ $cost->day_fee }}';
                document.getElementById('ec_CoLeadNod' + coLeadCount).value = '{{ $cost->day_num }}';
                document.getElementById('ec_CoLeadAtd' + coLeadCount).value = '{{ $cost->atd }}';
                document.getElementById('ec_CoLeadNwh' + coLeadCount).value = '{{ $cost->nswh }}';
                document.getElementById('coLead_roster' + coLeadCount).value = '{{ $cost->rooster }}';
                document.getElementById('id_coLead_roster' + coLeadCount).value = '{{ $cost->consultant_id }}';
                document.getElementById('coLeadNotes' + coLeadCount).value = '{{ $cost->notes }}';
                coLeadCount++;
            @endif

            @if($cost->type == 'Co-Facilitator / Resource Speaker') 
                if (coFacilitator > 1) {
                    $('#addBtn5').click();
                }
                document.getElementById('ec_CofacilitatorsNoc' + coFacilitator).value = '{{ $cost->consultant_num }}';
                document.getElementById('ec_CofacilitatorsPd' + coFacilitator).value = '{{ $cost->day_fee }}';
                document.getElementById('ec_CofacilitatorsNod' + coFacilitator).value = '{{ $cost->day_num }}';
                document.getElementById('ec_CofacilitatorsAtd' + coFacilitator).value = '{{ $cost->atd }}';
                document.getElementById('ec_CofacilitatorsNwh' + coFacilitator).value = '{{ $cost->nswh }}';
                document.getElementById('cofacilitator_roster' + coFacilitator).value = '{{ $cost->rooster }}';
                document.getElementById('id_cofacilitator_roster' + coFacilitator).value = '{{ $cost->consultant_id }}';
                document.getElementById('cofacilitatorNotes' + coFacilitator).value = '{{ $cost->notes }}';
                coFacilitator++;
            @endif

            @if($cost->type == 'Action Learning Coach') 
                if (alCoachCount > 1) {
                    $('#addBtn6').click();
                }
                document.getElementById('ec_ActionlearningcoachNoc' + alCoachCount).value = '{{ $cost->consultant_num }}';
                document.getElementById('ec_ActionlearningcoachPd' + alCoachCount).value = '{{ $cost->day_fee }}';
                document.getElementById('ec_ActionlearningcoachNod' + alCoachCount).value = '{{ $cost->day_num }}';
                document.getElementById('ec_ActionlearningcoachAtd' + alCoachCount).value = '{{ $cost->atd }}';
                document.getElementById('ec_ActionlearningcoachNwh' + alCoachCount).value = '{{ $cost->nswh }}';
                document.getElementById('actionlearningcoach_roster' + alCoachCount).value = '{{ $cost->rooster }}';
                document.getElementById('id_actionlearningcoach_roster' + alCoachCount).value = '{{ $cost->consultant_id }}';
                document.getElementById('actionlearningcoachNotes' + alCoachCount).value = '{{ $cost->notes }}';
                alCoachCount++;
            @endif

            @if($cost->type == 'Marshal')
                if (marshalCount > 1) {
                    $('#addBtn7').click();
                }
                document.getElementById('ec_MarshalNoc' + marshalCount).value = '{{ $cost->consultant_num }}';
                document.getElementById('ec_MarshalPd' + marshalCount).value = '{{ $cost->day_fee }}';
                document.getElementById('ec_MarshalNod' + marshalCount).value = '{{ $cost->day_num }}';
                document.getElementById('ec_MarshalAtd' + marshalCount).value = '{{ $cost->atd }}';
                document.getElementById('ec_MarshalNwh' + marshalCount).value = '{{ $cost->nswh }}';
                document.getElementById('marshal_roster' + marshalCount).value = '{{ $cost->rooster }}';
                document.getElementById('id_marshal_roster' + marshalCount).value = '{{ $cost->consultant_id }}';
                document.getElementById('marshalNotes' + marshalCount).value = '{{ $cost->notes }}';
                marshalCount++;
            @endif

            @if($cost->type == 'On-site PC') 
                if (onSitePcCount > 1) {
                    $('#addBtn8').click();
                }
                document.getElementById('ec_OnsitepcNoc' + onSitePcCount).value = '{{ $cost->consultant_num }}';
                document.getElementById('ec_OnsitepcPd' + onSitePcCount).value = '{{ $cost->day_fee }}';
                document.getElementById('ec_OnsitepcNod' + onSitePcCount).value = '{{ $cost->day_num }}';
                document.getElementById('ec_OnsitepcAtd' + onSitePcCount).value = '{{ $cost->atd }}';
                document.getElementById('ec_OnsitepcNwh' + onSitePcCount).value = '{{ $cost->nswh }}';
                document.getElementById('onsitepc_roster' + onSitePcCount).value = '{{ $cost->rooster }}';
                document.getElementById('id_onsitepc_roster' + onSitePcCount).value = '{{ $cost->consultant_id }}';
                document.getElementById('onsitepcNotes' + onSitePcCount).value = '{{ $cost->notes }}';
                onSitePcCount++;
            @endif

            @if($cost->type == 'Documentor')
                if (documentatorCount > 1) {
                    $('#addBtn9').click();
                }
                document.getElementById('ec_DocumentorsNoc' + documentatorCount).value = '{{ $cost->consultant_num }}';
                document.getElementById('ec_DocumentorsPd' + documentatorCount).value = '{{ $cost->day_fee }}';
                document.getElementById('ec_DocumentorsNod' + documentatorCount).value = '{{ $cost->day_num }}';
                document.getElementById('ec_DocumentorsAtd' + documentatorCount).value = '{{ $cost->atd }}';
                document.getElementById('ec_DocumentorsNwh' + documentatorCount).value = '{{ $cost->nswh }}';
                document.getElementById('documentor_roster' + documentatorCount).value = '{{ $cost->rooster }}';
                document.getElementById('id_documentor_roster' + documentatorCount).value = '{{ $cost->consultant_id }}';
                document.getElementById('documentorNotes' + documentatorCount).value = '{{ $cost->notes }}';
                documentatorCount++;
            @endif

            @if($cost->type == 'Per Diem') 
                if (perDiemCount > 1) {
                    $('#addBtnPerDiem').click();
                }
                document.getElementById('ec_PerdiemNoc' + perDiemCount).value = '{{ $cost->consultant_num }}';
                document.getElementById('ec_PerdiemPd' + perDiemCount).value = '{{ $cost->day_fee }}';
                document.getElementById('ec_PerdiemNod' + perDiemCount).value = '{{ $cost->day_num }}';
                document.getElementById('perdiem_roster' + perDiemCount).value = '{{ $cost->rooster }}';
                document.getElementById('id_perdiem_roster' + perDiemCount).value = '{{ $cost->consultant_id }}';
                document.getElementById('perdiemNotes' + perDiemCount).value = '{{ $cost->notes }}';
                perDiemCount++;
            @endif

            @if($cost->type == 'Off-Program fee') 
                if (offProgramFeeCount > 1) {
                    $('#addBtnOffProgram').click();
                }
                document.getElementById('ec_OffprogramsNoc' + offProgramFeeCount).value = '{{ $cost->consultant_num }}';
                document.getElementById('ec_OffprogramsPd' + offProgramFeeCount).value = '{{ $cost->day_fee }}';               
                document.getElementById('offprogram_roster' + offProgramFeeCount).value = '{{ $cost->rooster }}';
                document.getElementById('id_offprogram_roster' + offProgramFeeCount).value = '{{ $cost->consultant_id }}';
                document.getElementById('offprogramNotes' + offProgramFeeCount).value = '{{ $cost->notes }}';
                offProgramFeeCount++;
            @endif

            @if($cost->type == 'Program Expenses') 
                document.getElementById('ec_Programexpenses').value = '{{ $cost->day_fee }}';               
                document.getElementById('Programexpenses_roster1').value = '{{ $cost->rooster }}';
                document.getElementById('id_Programexpenses_roster1').value = '{{ $cost->consultant_id }}';
                document.getElementById('ProgramexpensesNotes1').value = '{{ $cost->notes }}';                
            @endif
            
        @endforeach

        $('#f2f-ec-table input').click();
    });
    </script>    
@endif