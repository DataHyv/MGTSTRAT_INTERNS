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
        <table class="table table-bordered" id="webinar-table">
            <thead class="table">
                <tr class="text-center th-blue-grey">
                    <th class="title-th" scope="col" width="18%"></th>
                    <th class="title-middle" scope="col" style="font-size: 0.9rem;" width="12%">HOURLY FEES</th>
                    <th class="title-middle px-4" scope="col" width="12%">NUMBER OF HOURS</th>
                    <th class="title-middle" scope="col" style="font-size: 0.9rem;" width="12%">NIGHT SHIFT,
                        WEEKENDS HOLIDAYS *</th>
                    <th class="title-th" scope="col" style="border:3px solid black" width="12%">TOTAL FEE</th>
                    <th class="title-th" scope="col" width="15%">ROSTER</th>
                    <th class="title-th" scope="col" width="13%">NOTES</th>
                    <th class="border border-white add-row bg-white" scope="col" width="2%"></th>
                </tr>
            </thead>
            <!--------------------------COMMISSION--------------------------------------->
            <tr class="th-blue-grey-lighten">
                <th class="px-4 title text-dark fw-bolder">COMMISSION</th>
                <th></th>
                <th></th>
                <th></th>
                <th class="total-td" style="border-left:3px solid black"></th>
                <th class="total-td" style="border-left:3px solid black"></th>
                <th class="total-td"></th>
                <td style="background-color: #FFFFFF; border: 2px solid white" class="add-row bg-white" scope="col"></td>
            </tr>
            <!---------------SALE-------------------------->
            <tbody id="tableofSale">
                <tr class="th-blue-grey-lighten-2" id="rowofSale">
                    <td class="title">
                        <input type="text" class="d-none" value="Sales" name="cost_type[]" readonly>
                        Sales (4% / 5% / 6% / 7%)
                    </td>
                    <td class="table-danger">
                        <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                        value="{{ old('') }}" name="cost_hour_fee[]" id="inputforSale1" style="display: none;"
                        onblur="this.value = this.value.replace('%', '') + '%';"
                        oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"
                        maxlength="5" disabled>

                        <fieldset id="dropdownforSale">
                            <select
                            class="input js-mytooltip  text-center form-select @error('') is-invalid @enderror"
                            name="cost_hour_fee[]" id="webinar_sale"
                            data-mytooltip-content="<i>
                                    <b>Sales</b><br>
                                    0% - if reffered or sold by a reseller<br><br>
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
                                    title="with minimal design customization, or platform customization outside of Zoom/Google Meets/MS Teams. Up to 2 hours of work" selected>
                                    0%
                                </option>
                                <option value="4" {{ old('') == '4' ? 'selected="selected"' : '' }}
                                    title="with minimal design customization, or platform customization outside of Zoom/Google Meets/MS Teams. Up to 2 hours of work" >
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
                    
                    <td><input type="hidden" class="d-none" name="cost_hour_num[]" readonly></td>
                    <td><input type="hidden" class="d-none" name="cost_nswh[]" readonly></td>

                    <td class="total-td tbl-engmt-cost" style="border-left:3px solid black">
                        <h4 class="text-center text-danger " id="webinar_saleTotal1">-</h4>
                    </td>
                    <td class="total-td">                        
                        <input  type="text" class="form-control input-table" name="cost_roster[]" id="sales_roster1"
                                value="{{ old('') }}"                                     
                                oninput="filterConsultant('sales_roster1');"
                                
                                list="filtered_consultant_list" 
                                autocomplete="off" >   
                        <input  type="hidden" value="" name="cost_roster_id[]" id="id_sales_roster1">
                    </td>
                    <td class="total-td">
                        <textarea type="text" class="form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}"name="cost_notes[]" id="ec_webinar_saleNotes1"></textarea>
                    </td>
                    <td style="background-color: #FFFFFF; border: 2px solid white" class="add-row bg-white" scope="col">
                        <a href="javascript:void(0)" class="text-success font-18" title="Add" id="muaddButton">
                            <i class="fa fa-plus"></i>
                        </a>
                    </td>
                </tr>
            </tbody>
            <!---------------REFERRALS--------------------->
            <tbody id="tableofReferrals">
                <tr class="th-blue-grey-lighten-2" id="rowofReferrals">
                    <td class="title">
                        <input type="text" class="d-none" value="Referral" name="cost_type[]" readonly>
                        Referral (2% / 3% / 10%)
                    </td>
                    <td class="table-danger">
                        <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="cost_hour_fee[]" id="inputforReferrals1" style="display: none;"
                            onblur="this.value = this.value.replace('%', '') + '%';"
                            oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"
                            maxlength="5" disabled>

                        <fieldset id="dropdownforReferrals">
                            <select
                                class="input js-mytooltip text-center  form-select @error('') is-invalid @enderror"
                                name="cost_hour_fee[]" id="webinar_referrals"
                                data-mytooltip-content="<i>
                                        Referral - 2% - repeat contracts from the same client<br>
                                        3% - 1st contract with a new client, or with a 2-year dormant client<br>
                                        10% - if reffered/sold by a reseller<br><br>

                                        When in doubt, check with Joi on who referror is.
                                        </i>"
                                data-mytooltip-theme="dark" data-mytooltip-action="focus"
                                data-mytooltip-direction="right" style="background-color:#ffcccc; color:red;">
                                <option value="0" {{ old('') == '0' ? 'selected="selected"' : '' }}
                                    title="" selected>
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
                                <option value="10" {{ old('') == '10' ? 'selected="selected"' : '' }}
                                    title="">
                                    10%
                                </option>
                            </select>

                            @error('')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </fieldset>
                    </td>                    
                    <td><input type="hidden" class="d-none" name="cost_hour_num[]" readonly></td>
                    <td><input type="hidden" class="d-none" name="cost_nswh[]" readonly></td>
                    <td class="total-td tbl-engmt-cost" style="border-left:3px solid black">
                        <h4 class="text-center text-danger " id="webinar_referralsTotal1">-</h4>
                    </td>
                    <td class="total-td">
                        <input  type="text" class="form-control input-table" name="cost_roster[]" id="referral_roster1"
                                value="{{ old('') }}"                                     
                                oninput="filterConsultant('referral_roster1');"
                                
                                list="filtered_consultant_list" 
                                autocomplete="off" >   
                        <input  type="hidden" value="" name="cost_roster_id[]" id="id_referral_roster1">
                    </td>
                    <td class="total-td">
                        <textarea type="text" class="form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}"name="cost_notes[]" id="ec_webinar_referralsNotes1"></textarea>
                    </td>
                    <td style="background-color: #FFFFFF; border: 2px solid white" class="add-row bg-white" scope="col">
                        <a href="javascript:void(0)" class="text-success font-18" title="Add" id="muaddButton2">
                            <i class="fa fa-plus"></i>
                        </a>
                    </td>
                </tr>
            </tbody>              
            <!--------------------------ENGAGEMENT MANAGER------------------------------->
            <tbody id="tableofEngagementManager">
                <tr class="th-blue-grey-lighten" id="rowofEngagementManager">
                    <td class="title fw-bold text-dark">
                        <input type="text" class="d-none" value="Engagement Manager" name="cost_type[]" readonly>
                        ENGAGEMENT MANAGER (4%)
                    </td>
                    <td class="table-danger">
                        <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="cost_hour_fee[]" id="inputforEngagementManager1"
                            style="display: none;" onblur="this.value = this.value.replace('%', '') + '%';"
                            oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"
                            maxlength="5" disabled>

                        <fieldset id="dropdownforEngagementManager">
                            <select
                                class="input js-mytooltip text-center  form-select @error('') is-invalid @enderror"
                                name="cost_hour_fee[]" id="webinar_engagementManager"
                                style="background-color:#ffcccc; color:red;"
                                data-mytooltip-content="<i>
                                        Engagement Manager - 4% - all Key Accounts and large engagements <br>
                                        <br>
                                        Large engagements: large scale consulting, or a series of at least
                                        8 virtual sessions under 1 contract involving a roster of at least 2 people
                                        </i>"
                                data-mytooltip-theme="dark" data-mytooltip-action="focus"
                                data-mytooltip-direction="right">
                                <option value="0" {{ old('') == '0' ? 'selected="selected"' : '' }}
                                    title="" selected>
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
                    <td><input type="hidden" class="d-none" name="cost_hour_num[]" readonly></td>
                    <td><input type="hidden" class="d-none" name="cost_nswh[]" readonly></td>

                    <td class="total-td tbl-engmt-cost" style="border-left:3px solid black">
                        <h4 class="text-center text-danger " id="webinar_engagementManagerTotal1">-</h4>
                    </td>
                    <td class="total-td">
                        <input  type="text" class="form-control input-table" name="cost_roster[]" id="engagementManager_roster1"
                                value="{{ old('') }}"                                     
                                oninput="filterConsultant('engagementManager_roster1');"
                                
                                list="filtered_consultant_list" 
                                autocomplete="off" >   
                        <input  type="hidden" value="" name="cost_roster_id[]" id="id_engagementManager_roster1">
                    </td>
                    <td class="total-td">
                        <textarea type="text" class="form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}"name="cost_notes[]" id="ec_webinar_engagementManagerNotes1"></textarea>
                    </td>
                    <td style="background-color: #FFFFFF; border: 2px solid white" class="add-row bg-white" scope="col">
                        <a href="javascript:void(0)" class="text-success font-18" title="Add" id="muaddButton3">
                            <i class="fa fa-plus"></i>
                        </a>
                    </td>
                </tr>
            </tbody>

            <!--------------------------CONSULTING/DESIGN-------------------------------->
            <tr class="th-blue-grey-lighten">
                <th class="title px-4 text-dark">1. CONSULTING/DESIGN</th>
                <td></td>
                <td></td>
                <td></td>
                <td class="total-td" style="border-left:3px solid black"></td>
                <td class="total-td"></td>
                <td class="total-td"></td>
                <td style="background-color: #FFFFFF; border: 2px solid white" class="add-row bg-white" scope="col"></td>
            </tr>
            <!---------------CUSTOMIZATION FEE------------->
            <tbody id="tableofCustomization">
                <tr class="th-blue-grey-lighten-2" id="rowofCustomization">
                    <td class="title">
                        <input type="text" class="d-none" value="Customization Fee" name="cost_type[]" readonly>
                        Customization Fee
                    </td>
                    <td class="mgt-td-dark-bg">
                        <input type="text"
                            class="currency_input text-center fw-bold text-dark text-center form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="cost_hour_fee[]" id="webinar_CustomizationHf1"> 
                    </td>
                    <td class="table-danger">
                        <fieldset>
                            <select class="input js-mytooltip  text-center form-select @error('') is-invalid @enderror" 
                                name="cost_hour_num[]" id="webinar_CustomizationNoh1"
                                data-mytooltip-content="<i>
                                    # of Hours<br>
                                    0 - no customization<br><br>
                                    2 - automatic when we charge customization fee<br><br></i>"
                                data-mytooltip-theme="dark" data-mytooltip-action="focus"
                                data-mytooltip-direction="right" style="background-color:#ffcccc; color:red;">
                                <option value="0" {{ old('') == '0' ? 'selected="selected"' : '' }}
                                    title=""selected>
                                    0
                                </option>
                                <option value="2" {{ old('') == '2' ? 'selected="selected"' : '' }}
                                    title="" >
                                    2
                                </option>
                            </select>
                            @error('ef_customFee')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </fieldset>
                    </td>
                    <td><input type="hidden" class="d-none" name="cost_nswh[]" readonly></td>
                    <td class="total-td" style="border-left:3px solid black">
                        <h4 class="text-center text-danger  lead" id="webinar_CustomizationsTotal1">-</h4>
                    </td> 
                    <td class="total-td table-warning">
                        <input  type="text" class="form-control input-table" name="cost_roster[]" id="customizations_roster1"
                                value="{{ old('') }}"                                     
                                oninput="filterConsultant('customizations_roster1','webinar_CustomizationHf1','customizationFee');"
                                
                                list="filtered_consultant_list" 
                                autocomplete="off" >   
                        <input  type="hidden" value="" name="cost_roster_id[]" id="id_customizations_roster1">
                    </td>
                    <td class="total-td">
                        <textarea type="text" class="form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}"name="cost_notes[]" id="ec_webinar_CustomizationsNotes1"></textarea>
                    </td>
                    <td style="background-color: #FFFFFF; border: 2px solid white" class="add-row bg-white" scope="col">
                        <a href="javascript:void(0)" class="text-success font-18" title="Add" id="muaddButton4">
                        <i class="fa fa-plus"></i>
                    </a>
                </td>
                </tr>
            </tbody>
            <!---------------CREATORS FEE------------------>
            <tbody id="tableofCreator">
                <tr class="th-blue-grey-lighten-2" id="rowofCreator">
                    <td class="title">
                        <input type="text" class="d-none" value="Creators Fees" name="cost_type[]" readonly>
                        Creators Fees (0, 500, 1K)</td>
                    <td class="table-danger">
                        <fieldset>
                            <select class="input js-mytooltip  text-center form-select @error('') is-invalid @enderror" name="cost_hour_fee[]" id="webinar_CreatorHf1"
                                data-mytooltip-content="<i>
                                    Creators Fee - 0 - no creators fee<br><br>
                                    500 - Creators Fee is the creator is the lead, for the 2nd session onwards<br><br>
                                    1,000 - Creators Fee if creator is NOT the lead, for the 2nd session onwards</i>"
                                data-mytooltip-theme="dark" data-mytooltip-action="focus"
                                data-mytooltip-direction="right" style="background-color:#ffcccc; color:red;">
                                <option value="0" {{ old('') == '0' ? 'selected="selected"' : '' }}
                                    title=""selected>
                                    &#8369;0
                                </option>
                                <option value="500" {{ old('') == '500' ? 'selected="selected"' : '' }}
                                    title="" >
                                    &#8369;500
                                </option>
                                <option value="1000" {{ old('') == '1000' ? 'selected="selected"' : '' }}
                                    title="">
                                    &#8369;1,000
                                </option>
                                <option value="2000" {{ old('') == '2000' ? 'selected="selected"' : '' }} title="">
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
                    <td class="mgt-td-dark-bg">
                        <input type="text"
                            class="number_input text-center form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="cost_hour_num[]" id="webinar_CreatorNoh1" max="100">
                    </td>
                    <td><input type="hidden" class="d-none" name="cost_nswh[]" readonly></td>

                    <td class="total-td" style="border-left:3px solid black">
                        <h4 class="text-center text-danger  lead" id="webinar_CreatorTotal1">-</h4>
                    </td>
                    <td class="total-td">
                        <input  type="text" class="form-control input-table" name="cost_roster[]" id="creator_roster1"
                                value="{{ old('') }}"                                     
                                oninput="filterConsultant('creator_roster1');"
                                
                                list="filtered_consultant_list" 
                                autocomplete="off" >   
                        <input  type="hidden" value="" name="cost_roster_id[]" id="id_creator_roster1">
                    </td>
                    <td class="total-td">
                        <textarea type="text" class="form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}"name="cost_notes[]" id="ec_webinar_CreatorNotes1"></textarea>
                    </td>
                    <td style="background-color: #FFFFFF; border: 2px solid white" class="add-row bg-white" scope="col">
                        <a href="javascript:void(0)" class="text-success font-18" title="Add" id="muaddButton5">
                            <i class="fa fa-plus"></i></a>
                    </td>
                </tr>
            </tbody>

            <tr class="table-secondary">
                <td class="title fw-bold text-dark fst-italic">Subtotal</td>
                <td></td>
                <td></td>
                <td></td>
                <td class="total-td" style="background-color: rgba(146, 146, 146, 0.727">
                    <h4 class="text-center text-danger " id="webinar_DesignsSubtotal">-</h4>
                </td>
                <td class="total-td">
                </td>
                <td class="total-td">
                </td>
                <td style="background-color: #FFFFFF; border: 2px solid white" class="add-row bg-white" scope="col"></td>
            </tr>                      
            <!--------------------------PROGRAM------------------------------------------>
            <tr class="th-blue-grey-lighten">
                <th class="title px-4 text-dark">2. PROGRAM</th>
                <td></td>
                <td></td>
                <td></td>
                <td class="total-td" style="border-left:3px solid black"></td>
                <td class="total-td"></td>
                <td class="total-td"></td>
                <td style="background-color: #FFFFFF; border: 2px solid white" class="add-row bg-white" scope="col"></td>
            </tr>
            <!---------------LEAD FACILITATOR-------------->
            <tbody id="tableofLeadFacilitator">
                <tr class="th-blue-grey-lighten-2" id="rowofLeadFacilitator">
                    <td class="title">
                        <input type="text" class="d-none" value="Lead Facilitator" name="cost_type[]" readonly>
                        Lead Facilitator
                    </td>
                    <td class="mgt-td-dark-bg">
                        <input type="text"
                            class="currency_input text-center fw-bold text-center text-dark form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="cost_hour_fee[]" id="webinar_LeadfacilitatorsHf1">
                    </td>
                    <td class="table-warning">
                        <input type="text"
                            class="number_input text-center form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="cost_hour_num[]" id="webinar_LeadfacilitatorsNoh1">
                    </td>
                    <td class="table-warning">
                        <input type="text"
                            class="number_input text-center form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="cost_nswh[]" id="webinar_LeadfacilitatorsNwh1">
                    </td>
                    <td class="total-td" style="border-left:3px solid black">
                        <h4 class="text-center text-danger  lead" id="webinar_LeadfacilitatorsTotal1">-</h4>
                    </td>
                    <td class="total-td table-warning">
                        <input  type="text" class="form-control input-table" name="cost_roster[]" id="leadfacilitator_roster1"
                                value="{{ old('') }}"                                     
                                oninput="filterConsultant('leadfacilitator_roster1','webinar_LeadfacilitatorsHf1','leadFacilitator');"
                                
                                list="filtered_consultant_list" 
                                autocomplete="off" >   
                        <input  type="hidden" value="" name="cost_roster_id[]" id="id_leadfacilitator_roster1">
                    </td>
                    <td class="total-td">
                        <textarea type="text" class="form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}"name="cost_notes[]" id="ec_webinar_leadfacilitatorNotes1"></textarea>
                    </td>
                    <td style="background-color: #FFFFFF; border: 2px solid white" class="add-row bg-white" scope="col">
                        <a href="javascript:void(0)" class="text-success font-18" title="Add" id="muaddButton6">
                            <i class="fa fa-plus"></i>
                        </a>
                    </td>
                </tr>
            </tbody>
            <!---------------MODERATOR--------------------->
            <tbody id="tableofModerator">
                <tr class="th-blue-grey-lighten-2" id="rowofModerator">
                    <td class="title">
                        <input type="text" class="d-none" value="Moderator" name="cost_type[]" readonly>
                        Moderator (P800/P1100/P1350)
                    </td>
                    <td class="mgt-td-dark-bg">                                    
                        <input type="text"
                            class="currency_input text-center fw-bold text-center text-dark form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="cost_hour_fee[]" id="webinar_ModeratorHf1">
                        </fieldset>
                    </td>
                    <td class="table-warning">
                        <input type="text"
                            class="number_input text-center  form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="cost_hour_num[]" id="webinar_ModeratorNoh1">
                    </td>
                    <td class="table-warning">
                        <input type="text"
                            class="number_input text-center form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="cost_nswh[]" id="webinar_ModeratorNwh1">
                    </td>
                    <td class="total-td" style="border-left:3px solid black">
                        <h4 class="text-center text-danger  lead" id="webinar_ModeratorTotal1">-</h4>
                    </td>
                    <td class="total-td table-warning">
                        <input  type="text" class="form-control input-table" name="cost_roster[]" id="moderator_roster1"
                                value="{{ old('') }}"                                     
                                oninput="filterConsultant('moderator_roster1','webinar_ModeratorHf1','moderator');"
                                
                                list="filtered_consultant_list" 
                                autocomplete="off" >
                        <input  type="hidden" value="" name="cost_roster_id[]" id="id_moderator_roster1">
                    </td>
                    <td class="total-td">
                        <textarea type="text" class="form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}"name="cost_notes[]" id="ec_webinar_ModeratorNotes1"></textarea>
                    </td>
                    <td style="background-color: #FFFFFF; border: 2px solid white" class="add-row bg-white" scope="col">
                        <a href="javascript:void(0)" class="text-success font-18" title="Add" id="muaddButton7">
                            <i class="fa fa-plus"></i>
                        </a>
                    </td>
                </tr>
            </tbody>
            <!---------------PRODUCER---------------------->
            <tbody id="tableofProducer">
                <tr class="th-blue-grey-lighten-2" id="rowofProducer">
                    <td class="title">
                        <input type="text" class="d-none" value="Producer" name="cost_type[]" readonly>
                        Producer
                    </td>
                    <td class="mgt-td-dark-bg">
                        <input type="text"
                            class="currency_input text-center text-dark fw-bold form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="cost_hour_fee[]" id="webinar_ProducerHf1">
                    </td>
                    <td class="table-warning">
                        <input type="text"
                            class="number_input text-center form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="cost_hour_num[]" id="webinar_ProducerNoh1">
                    </td>
                    <td class="table-warning">
                        <input type="text"
                            class="number_input text-center form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="cost_nswh[]" id="webinar_ProducerNwh1">
                    </td>
                    <td class="total-td" style="border-left:3px solid black">
                        <h4 class="text-center text-danger  lead" id="webinar_ProducersTotal1">-</h4>
                    </td>
                    <td class="total-td table-warning">
                    <input  type="text" class="form-control input-table" name="cost_roster[]" id="producer_roster1"
                            value="{{ old('') }}"                                     
                            oninput="filterConsultant('producer_roster1','webinar_ProducerHf1','producer');"
                            
                            list="filtered_consultant_list" 
                            autocomplete="off" >
                    <input  type="hidden" value="" name="cost_roster_id[]" id="id_producer_roster1">
                    </td>
                    <td class="total-td">
                        <textarea type="text" class="form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}"name="cost_notes[]" id="ec_webinar_ProducersNotes1"></textarea>
                    </td>
                    <td style="background-color: #FFFFFF; border: 2px solid white" class="add-row bg-white" scope="col">
                        <a href="javascript:void(0)" class="text-success font-18" title="Add" id="muaddButton8">
                            <i class="fa fa-plus"></i>
                        </a>
                    </td>
                </tr>
            </tbody>

            <tr class="table-secondary" id="tableofProgramSubtotal">
                <td class="title fw-bold text-dark fst-italic">Subtotal</td>
                <td></td>
                <td></td>
                <td></td>
                <td class="total-td" style="background-color: rgba(146, 146, 146, 0.727)">
                    <h4 class="text-center text-danger " id="webinar_ProgramsSubtotal">-</h4>
                </td>
                <td class="total-td"></td>
                <td class="total-td"></td>
                <td style="background-color: #FFFFFF; border: 2px solid white" class="add-row bg-white" scope="col"></td>
            </tr>


            <!--------------------------OFF-PROGRAM-------------------------------------->
            <tr class="th-blue-grey-lighten">
                <th class="title px-4 text-dark">3. OFF-PROGRAM</th>
                <td></td>
                <td></td>
                <td></td>
                <td class="total-td" style="border-left:3px solid black"></td>
                <td class="total-td"></td>
                <td class="total-td"></td>
                <td style="background-color: #FFFFFF; border: 2px solid white" class="add-row bg-white" scope="col"></td>
            </tr>

            <tbody id="tableofOffProgram">
                <tr class="th-blue-grey-lighten-2" id="rowofOffProgram">
                    <td class="title">
                        <input type="text" class="d-none" value="Off-Program Fee" name="cost_type[]" readonly>
                        Off-Program Fee
                    </td>
                    <td class="table-warning">
                        <input type="text"
                            class="currency_input text-center text-dark fw-bold form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="cost_hour_fee[]" id="webinar_OffprogramsHf1">
                    </td>
                    <td class="bg-white">
                        <input type="text"
                            class="text-center  form-control input-table @error('') is-invalid @enderror currency_input"
                            value="{{ old('') }}" name="cost_hour_num[]" id="webinar_OffprogramsNoh1">
                    </td>
                    <td><input type="hidden" class="d-none" name="cost_nswh[]" readonly></td>
                    <td class="total-td" style="background-color: rgba(146, 146, 146, 0.727">
                        <h4 class="text-center text-danger " id="webinar_OffprogramsTotal1">-</h4>
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
                    <td class="total-td">
                        <textarea type="text" class="form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}"name="cost_notes[]" id="ec_webinar_OffprogramsNotes1"></textarea>
                    </td>
                    <td style="background-color: #FFFFFF; border: 2px solid white" class="add-row bg-white" scope="col">
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
                <td class="total-td" style="border-left:3px solid black"></td>
                <td class="total-td"></td>
                <td class="total-td"></td>
                <td style="background-color: #FFFFFF; border: 2px solid white" class="add-row bg-white" scope="col"></td>
            </tr>
            <tr class="th-blue-grey-lighten-2" id="rowofProgramExpenses">
                <td class="title">
                    <input type="text" class="d-none" value="Program Expenses" name="cost_type[]" readonly>
                    Program Expenses
                </td>
                <td class="bg-white">
                    <input type="text"
                        class="currency_input text-center text-dark fw-bold form-control input-table @error('') is-invalid @enderror"
                        value="{{ old('') }}" name="cost_hour_fee[]" id="webinar_Programexpenses" maxlength="4">
                </td>
                <td><input type="hidden" class="d-none" name="cost_hour_num[]" readonly></td>
                <td><input type="hidden" class="d-none" name="cost_nswh[]" readonly></td>
                
                <td class="total-td" style="background-color: rgba(146, 146, 146, 0.727">
                    <h4 class="text-center text-danger " id="webinar_ProgramexpensesTotal">-</h4>
                </td>
                <td class="total-td">
                    <input  type="hidden" class="form-control input-table" name="cost_roster[]" id="programexpenses_roster1"
                            value="{{ old('') }}"                                     
                            oninput="filterConsultant('programexpenses_roster1');"
                            
                            list="filtered_consultant_list" 
                            autocomplete="off"
                            >   
                    <input  type="hidden" value="" name="cost_roster_id[]" id="id_programexpenses_roster1">
                </td>
                <td class="total-td">
                    <textarea type="text" class="form-control input-table @error('') is-invalid @enderror"
                        value="{{ old('') }}"name="cost_notes[]" id="ec_webinar_ProgramexpensesNotes1"></textarea>
                </td>
                <td style="background-color: #FFFFFF; border: 2px solid white" class="add-row bg-white" scope="col"></td>
            </tr>  

            <!--------------------------TOTAL-------------------------------------------->
            <tr class="" id="webinar_allTotals">
                <td class="table-active fw-bold text-uppercase text-dark fst-italic overall-total-start">TOTAL</td>
                <td class="table-active overall-total-middle"></td>
                <td class="table-active overall-total-middle"></td>
                <td class="table-active overall-total-middle"></td>
                <td class="table-active overall-total-middle" style="border:3px solid black">
                    <h4 class="text-center text-danger  text-danger" id="webinar_Totals">-</h4>
                </td>
                <td class="table-active overall-total-end" style="border:3px solid black"></td>
                <td class="table-active overall-total-end" style="border:3px solid black"></td>
                <td style="background-color: #FFFFFF;" class="border border-white table-light"></td>
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
<!--------------------------WORKSHOP ENGAGEMENT COST SCRIPT ---------------------->
@include('form.components.mgtstrat_u_webinar.webinar_script.webinar_engagement_cost')
<script>
var results = document.querySelector('#filtered_consultant_list');
// var templateContent = document.querySelector('#all_consultant_list').content;
let currency = Intl.NumberFormat("en-US");

function filterConsultant(rosterFieldID, hourlyFeeID = '', costType = '') {
    
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
        switch(costType) {
            case 'leadConsultant':
                if(getFee.data('leadconsultant') != undefined) {
                    $('#' + hourlyFeeID).val(getFee.data('leadconsultant'));  
                }  
                break; 
            case 'designer':
                if(getFee.data('designer') != undefined) {
                    $('#' + hourlyFeeID).val(getFee.data('designer'));  
                }      
                break; 
            case 'leadFacilitator':
                if(getFee.data('feeleadfaci') != undefined) {
                    $('#' + hourlyFeeID).val(getFee.data('feeleadfaci'));  
                }                           
                break; 
            case 'coLead':
                if(getFee.data('coleadf2f') != undefined) {
                    $('#' + hourlyFeeID).val(getFee.data('coleadf2f'));  
                }       
                break; 
            case 'alCoach':
                break;
            case 'coFaci':
                if(getFee.data('cofaci') != undefined) {
                    $('#' + hourlyFeeID).val(getFee.data('cofaci'));  
                }              
                break; 
            case 'marshal':
                if(getFee.data('marshal') != undefined) {
                    $('#' + hourlyFeeID).val(getFee.data('marshal'));  
                }               
                break; 
            case 'moderator':  
                if(getFee.data('moderator') != undefined) {
                    $('#' + hourlyFeeID).val(getFee.data('moderator'));   
                }              
                break; 
            case 'producer':
                if(getFee.data('producer') != undefined) {
                    $('#' + hourlyFeeID).val(getFee.data('producer'));     
                }               
                break; 
            case 'customizationFee':
                if(getFee.data('feeleadfaci') != undefined) {
                    $('#' + hourlyFeeID).val(currency.format(getFee.data('feeleadfaci').replace(/\₱|,/g, "") * 0.75));  
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
        var salesCount = 1, referralCount = 1, engagementManagerCount = 1, customFeeCount = 1, leadFacilitatorCount = 1, moderatorCount = 1,
        producerCount = 1, offProgramFeeCount = 1, creatorsFeeCount = 1;

        @foreach($subCostList as $cost)

            @if($cost->type == 'Sales') 

                if (salesCount <= 1) {
                    document.getElementById('webinar_sale').value = '{{ $cost->hour_fee }}';
                    document.getElementById('inputforSale1').value = '{{ $cost->hour_fee }}';
                    document.getElementById('sales_roster1').value = '{{ $cost->rooster }}';
                    document.getElementById('id_sales_roster1').value = '{{ $cost->consultant_id }}';
                    document.getElementById('ec_webinar_saleNotes1').value = '{{ $cost->notes }}';
                } else {                    
                    document.getElementById('webinar_sale').style.display = 'none';
                    document.getElementById('webinar_sale').disabled = true;
                    document.getElementById('inputforSale1').disabled = false;
                    document.getElementById('inputforSale1').style.display = '';
                    
                    $('#muaddButton').click();

                    document.getElementById('inputforSale' + salesCount).value = '{{ $cost->hour_fee }}';
                    document.getElementById('sales_roster' + salesCount).value = '{{ $cost->rooster }}';
                    document.getElementById('id_sales_roster' + salesCount).value = '{{ $cost->consultant_id }}';
                    document.getElementById('ec_webinar_saleNotes' + salesCount).value = '{{ $cost->notes }}';
                }
                salesCount++;
            @endif

            @if($cost->type == 'Referral') 
                if (referralCount <= 1) {
                    document.getElementById('webinar_referrals').value = '{{ $cost->hour_fee }}';
                    document.getElementById('inputforReferrals1').value = '{{ $cost->hour_fee }}';
                    document.getElementById('referral_roster1').value = '{{ $cost->rooster }}';
                    document.getElementById('id_referral_roster1').value = '{{ $cost->consultant_id }}';
                    document.getElementById('ec_webinar_referralsNotes1').value = '{{ $cost->notes }}';
                } else {                    
                    document.getElementById('webinar_referrals').style.display = 'none';
                    document.getElementById('webinar_referrals').disabled = true;
                    document.getElementById('inputforReferrals1').disabled = false;
                    document.getElementById('inputforReferrals1').style.display = '';
                    
                    $('#muaddButton2').click();

                    document.getElementById('inputforReferrals' + referralCount).value = '{{ $cost->hour_fee }}';
                    document.getElementById('referral_roster' + referralCount).value = '{{ $cost->rooster }}';
                    document.getElementById('id_referral_roster' + referralCount).value = '{{ $cost->consultant_id }}';
                    document.getElementById('ec_webinar_referralsNotes' + referralCount).value = '{{ $cost->notes }}';
                }
                referralCount++;
            @endif

            @if($cost->type == 'Engagement Manager') 
                if (engagementManagerCount <= 1) {
                    document.getElementById('webinar_engagementManager').value = '{{ $cost->hour_fee }}';
                    document.getElementById('inputforEngagementManager1').value = '{{ $cost->hour_fee }}';
                    document.getElementById('engagementManager_roster1').value = '{{ $cost->rooster }}';
                    document.getElementById('id_engagementManager_roster1').value = '{{ $cost->consultant_id }}';
                    document.getElementById('ec_webinar_engagementManagerNotes1').value = '{{ $cost->notes }}';
                } else {                    
                    document.getElementById('webinar_engagementManager').style.display = 'none';
                    document.getElementById('webinar_engagementManager').disabled = true;
                    document.getElementById('inputforEngagementManager1').disabled = false;
                    document.getElementById('inputforEngagementManager1').style.display = '';
                    
                    $('#muaddButton3').click();

                    document.getElementById('inputforEngagementManager' + engagementManagerCount).value = '{{ $cost->hour_fee }}';
                    document.getElementById('engagementManager_roster' + engagementManagerCount).value = '{{ $cost->rooster }}';
                    document.getElementById('id_engagementManager_roster' + engagementManagerCount).value = '{{ $cost->consultant_id }}';
                    document.getElementById('ec_webinar_engagementManagerNotes' + engagementManagerCount).value = '{{ $cost->notes }}';
                }
                engagementManagerCount++;
            @endif

            @if($cost->type == 'Customization Fee')
                if (customFeeCount > 1) {
                    $('#muaddButton4').click();
                }
                document.getElementById('webinar_CustomizationHf' + customFeeCount).value = '{{ $cost->hour_fee }}';
                document.getElementById('webinar_CustomizationNoh' + customFeeCount).value = '{{ $cost->hour_num }}';
                document.getElementById('customizations_roster' + customFeeCount).value = '{{ $cost->rooster }}';
                document.getElementById('id_customizations_roster' + customFeeCount).value = '{{ $cost->consultant_id }}';
                document.getElementById('ec_webinar_CustomizationsNotes' + customFeeCount).value = '{{ $cost->notes }}';
                customFeeCount++;
            @endif

            @if($cost->type == 'Creators Fees') 
                if (creatorsFeeCount > 1) {
                    $('#muaddButton5').click();
                }
                document.getElementById('webinar_CreatorHf' + creatorsFeeCount).value = '{{ $cost->hour_fee }}';
                document.getElementById('webinar_CreatorNoh' + creatorsFeeCount).value = '{{ $cost->hour_num }}';
                document.getElementById('creator_roster' + creatorsFeeCount).value = '{{ $cost->rooster }}';
                document.getElementById('id_creator_roster' + creatorsFeeCount).value = '{{ $cost->consultant_id }}';
                document.getElementById('ec_webinar_CreatorNotes' + creatorsFeeCount).value = '{{ $cost->notes }}';
                creatorsFeeCount++;
            @endif

            @if($cost->type == 'Lead Facilitator')
                if (leadFacilitatorCount > 1) {
                    $('#muaddButton6').click();
                }                
                document.getElementById('webinar_LeadfacilitatorsHf' + leadFacilitatorCount).value = '{{ $cost->hour_fee }}';
                document.getElementById('webinar_LeadfacilitatorsNoh' + leadFacilitatorCount).value = '{{ $cost->hour_num }}';                
                document.getElementById('webinar_LeadfacilitatorsNwh' + leadFacilitatorCount).value = '{{ $cost->nswh }}';
                document.getElementById('leadfacilitator_roster' + leadFacilitatorCount).value = '{{ $cost->rooster }}';
                document.getElementById('id_leadfacilitator_roster' + leadFacilitatorCount).value = '{{ $cost->consultant_id }}';
                document.getElementById('ec_webinar_leadfacilitatorNotes' + leadFacilitatorCount).value = '{{ $cost->notes }}';
                leadFacilitatorCount++;
            @endif

            @if($cost->type == 'Moderator')
                if (moderatorCount > 1) {
                    $('#muaddButton7').click();
                }                
                document.getElementById('webinar_ModeratorHf' + moderatorCount).value = '{{ $cost->hour_fee }}';
                document.getElementById('webinar_ModeratorNoh' + moderatorCount).value = '{{ $cost->hour_num }}';                
                document.getElementById('webinar_ModeratorNwh' + moderatorCount).value = '{{ $cost->nswh }}';
                document.getElementById('moderator_roster' + moderatorCount).value = '{{ $cost->rooster }}';
                document.getElementById('id_moderator_roster' + moderatorCount).value = '{{ $cost->consultant_id }}';
                document.getElementById('ec_webinar_ModeratorNotes' + moderatorCount).value = '{{ $cost->notes }}';
                moderatorCount++;
            @endif

            @if($cost->type == 'Producer') 
                if (producerCount > 1) {
                    $('#muaddButton8').click();
                }                
                document.getElementById('webinar_ProducerHf' + producerCount).value = '{{ $cost->hour_fee }}';
                document.getElementById('webinar_ProducerNoh' + producerCount).value = '{{ $cost->hour_num }}';                
                document.getElementById('webinar_ProducerNwh' + producerCount).value = '{{ $cost->nswh }}';
                document.getElementById('producer_roster' + producerCount).value = '{{ $cost->rooster }}';
                document.getElementById('id_producer_roster' + producerCount).value = '{{ $cost->consultant_id }}';
                document.getElementById('ec_webinar_ProducersNotes' + producerCount).value = '{{ $cost->notes }}';
                producerCount++;
            @endif

            @if($cost->type == 'Off-Program Fee') 
                if (offProgramFeeCount > 1) {
                    $('#addBtnOffProgram').click();
                }                
                document.getElementById('webinar_OffprogramsHf' + offProgramFeeCount).value = '{{ $cost->hour_fee }}';   
                document.getElementById('webinar_OffprogramsNoh' + offProgramFeeCount).value = '{{ $cost->hour_num }}';               
                document.getElementById('offprogram_roster' + offProgramFeeCount).value = '{{ $cost->rooster }}';
                document.getElementById('id_offprogram_roster' + offProgramFeeCount).value = '{{ $cost->consultant_id }}';
                document.getElementById('ec_webinar_OffprogramsNotes' + offProgramFeeCount).value = '{{ $cost->notes }}';
                offProgramFeeCount++;
            @endif

            @if($cost->type == 'Program Expenses') 
                document.getElementById('webinar_Programexpenses').value = '{{ $cost->hour_fee }}';               
                document.getElementById('programexpenses_roster1').value = '{{ $cost->rooster }}';
                document.getElementById('id_programexpenses_roster1').value = '{{ $cost->consultant_id }}';
                document.getElementById('ec_webinar_ProgramexpensesNotes1').value = '{{ $cost->notes }}';
            @endif

        @endforeach

        $('#webinar-table input').blur();

    });
    </script>
@endif 