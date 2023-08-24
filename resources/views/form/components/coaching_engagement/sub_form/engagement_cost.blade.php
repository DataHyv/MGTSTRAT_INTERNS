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
        <table class="table table-bordered" id="coaching-table">
            <thead class="table">
                <tr class="text-center th-blue-grey">
                    <th class="title-th" scope="col" width="15%"></th>
                    <th class="title-middle" scope="col" style="font-size: 0.9rem;" width="10%"># OF COACHES</th>
                    <th class="title-middle" scope="col" style="font-size: 0.9rem;" width="10%">SESSION FEES</th>
                    <th class="title-middle px-4" scope="col" width="10%"># OF SESSIONS (AL # OF HALF-DAYS)</th>
                    <th class="title-middle" scope="col" style="font-size: 0.9rem;" width="10%">NIGHT SHIFT, WEEKENDS HOLIDAYS *</th>
                    <th class="title-th" scope="col" style="border:3px solid black" width="10%">TOTAL FEE</th>
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
                    <td><input type="hidden" class="d-none" name="cost_coach_num[]" readonly></td>
                    <td class="table-danger">
                        <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                        value="" name="cost_session_fee[]" id="inputforSale1" style="display: none;"
                        onblur="this.value = this.value.replace('%', '') + '%';"
                        oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"
                        maxlength="5" disabled>
                        <fieldset id="dropdownforSale">
                            <select
                            class="input js-mytooltip  text-center form-select @error('') is-invalid @enderror"
                            name="cost_session_fee[]" id="coaching_sale"
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
                                <option value="0"
                                    title="with minimal design customization, or platform customization outside of Zoom/Google Meets/MS Teams. Up to 2 hours of work" selected>
                                    0%
                                </option>
                                <option value="4"
                                    title="with minimal design customization, or platform customization outside of Zoom/Google Meets/MS Teams. Up to 2 hours of work" >
                                    4%
                                </option>
                                <option value="5"
                                    title="with minimal design customization, or platform customization outside of Zoom/Google Meets/MS Teams. Up to 2 hours of work">
                                    5%
                                </option>
                                <option value="6"
                                    title="with minimal design customization, or platform customization outside of Zoom/Google Meets/MS Teams. Up to 2 hours of work">
                                    6%
                                </option>
                                <option value="7"
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
                    <td><input type="hidden" class="d-none" name="cost_session_num[]" readonly></td>
                    <td><input type="hidden" class="d-none" name="cost_nswh[]" readonly></td>
                    <td class="total-td tbl-engmt-cost" style="border-left:3px solid black">
                        <h4 class="text-center text-danger " id="coaching_saleTotal1">-</h4>
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
                            value="{{ old('') }}"name="cost_notes[]" id="ec_coaching_saleNotes1"></textarea>
                    </td>
                    <td style="background-color: #FFFFFF; border: 2px solid white" class="">
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
                        Referral (2% / 3%)
                    </td>
                    <td><input type="hidden" class="d-none" name="cost_coach_num[]" readonly></td>
                    <td class="table-danger">
                        <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="cost_session_fee[]" id="inputforReferrals1" style="display: none;"
                            onblur="this.value = this.value.replace('%', '') + '%';"
                            oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"
                            maxlength="5" disabled>

                        <fieldset id="dropdownforReferrals">
                            <select
                                class="input js-mytooltip text-center  form-select @error('') is-invalid @enderror"
                                name="cost_session_fee[]" id="coaching_referrals"
                                data-mytooltip-content="<i></i>"
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
                            </select>

                            @error('')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </fieldset>
                    </td>                    
                    <td><input type="hidden" class="d-none" name="cost_session_num[]" readonly></td>
                    <td><input type="hidden" class="d-none" name="cost_nswh[]" readonly></td>
                    <td class="total-td tbl-engmt-cost" style="border-left:3px solid black">
                        <h4 class="text-center text-danger " id="coaching_referralsTotal1">-</h4>
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
                            value="{{ old('') }}"name="cost_notes[]" id="ec_coaching_referralsNotes1"></textarea>
                    </td>
                    <td style="background-color: #FFFFFF; border: 2px solid white" class="">
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
                    <td><input type="hidden" class="d-none" name="cost_coach_num[]" readonly></td>
                    <td class="table-danger">
                        <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="cost_session_fee[]" id="inputforEngagementManager1"
                            style="display: none;" onblur="this.value = this.value.replace('%', '') + '%';"
                            oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"
                            maxlength="5" disabled>

                        <fieldset id="dropdownforEngagementManager">
                            <select
                                class="input js-mytooltip text-center  form-select @error('') is-invalid @enderror"
                                name="cost_session_fee[]" id="coaching_engagementManager"
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
                    <td><input type="hidden" class="d-none" name="cost_session_num[]" readonly></td>
                    <td><input type="hidden" class="d-none" name="cost_nswh[]" readonly></td>

                    <td class="total-td tbl-engmt-cost" style="border-left:3px solid black">
                        <h4 class="text-center text-danger " id="coaching_engagementManagerTotal1">-</h4>
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
                            value="{{ old('') }}"name="cost_notes[]" id="ec_coaching_engagementManagerNotes1"></textarea>
                    </td>
                    <td style="background-color: #FFFFFF; border: 2px solid white" class="">
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
                <td></td>
                <td class="total-td" style="border-left:3px solid black"></td>
                <td class="total-td"></td>
                <td class="total-td"></td>
                <td style="background-color: #FFFFFF; border: 2px solid white" class=""></td>
            </tr>
            <!---------------Consulting and/or Design------------->
            <tbody id="tableofConsultingDesign">
                <tr class="th-blue-grey-lighten-2" id="rowofConsultingDesign">
                    <td class="title">
                        <input type="text" class="d-none" value="Consulting Design" name="cost_type[]" readonly>
                        Consulting and/or Design
                    </td>
                    <td class="mgt-td-dark-bg">
                        <input type="text"
                            class="number_input text-center fw-bold text-dark text-center form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="cost_coach_num[]" id="coaching_ConsultingDesign_cn1"> 
                    </td>
                    <td class="bg-white">
                        <input type="text"
                            class="currency_input text-center fw-bold text-dark text-center form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="cost_session_fee[]" id="coaching_ConsultingDesign_sf1"> 
                    </td>
                    <td class="mgt-td-dark-bg">
                        <input type="text"
                            class="number_input text-center fw-bold text-dark text-center form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="cost_session_num[]" id="coaching_ConsultingDesign_sn1">
                    </td>
                    <td class="mgt-td-dark-bg">
                        <input type="text" 
                        class="number_input text-center fw-bold text-dark text-center form-control input-table @error('') is-invalid @enderror" 
                        value="{{ old('') }}" name="cost_nswh[]" id="coaching_ConsultingDesign_nswh1">
                    </td>
                    <td class="total-td" style="border-left:3px solid black">
                        <h4 class="text-center text-danger  lead" id="coaching_ConsultingDesign_total1">-</h4>
                    </td> 
                    <td class="total-td">
                        <input  type="text" class="form-control input-table" name="cost_roster[]" id="ConsultingDesign_roster1"
                                value="{{ old('') }}"                                     
                                oninput="filterConsultant('ConsultingDesign_roster1');"
                                
                                list="filtered_consultant_list" 
                                autocomplete="off" >   
                        <input  type="hidden" value="" name="cost_roster_id[]" id="id_ConsultingDesign_roster1">
                    </td>
                    <td class="total-td">
                        <textarea type="text" class="form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}"name="cost_notes[]" id="ec_coaching_ConsultingDesignNotes1"></textarea>
                    </td>
                    <td style="background-color: #FFFFFF; border: 2px solid white" class="">
                        <a href="javascript:void(0)" class="text-success font-18" title="Add" id="muaddButton4">
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
                <td class="total-td" style="background-color: rgba(146, 146, 146, 0.727">
                    <h4 class="text-center text-danger " id="coaching_DesignsSubtotal">-</h4>
                </td>
                <td class="total-td">
                </td>
                <td class="total-td">
                </td>
                <td style="background-color: #FFFFFF; border: 2px solid white" class=""></td>
            </tr>                      
            <!--------------------------PROGRAM------------------------------------------>
            <tr class="th-blue-grey-lighten">
                <th class="title px-4 text-dark">2. COACHING</th>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td class="total-td" style="border-left:3px solid black"></td>
                <td class="total-td"></td>
                <td class="total-td"></td>
                <td style="background-color: #FFFFFF; border: 2px solid white" class=""></td>
            </tr>
            <!---------------Executive Coaching-------------->
            <tbody id="tableofExecutiveCoaching">
                <tr class="th-blue-grey-lighten-2" id="rowofExecutiveCoaching">
                    <td class="title">
                        <input type="text" class="d-none" value="Executive Coaching" name="cost_type[]" readonly>
                        Executive Coaching
                    </td>
                    <td class="mgt-td-dark-bg">
                        <input type="text"
                            class="number_input text-center fw-bold text-dark text-center form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="cost_coach_num[]" id="coaching_ExecutiveCoaching_cn1"> 
                    </td>
                    <td class="bg-white">
                        <input type="text"
                            class="currency_input text-center fw-bold text-dark text-center form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="cost_session_fee[]" id="coaching_ExecutiveCoaching_sf1"> 
                    </td>
                    <td class="mgt-td-dark-bg">
                        <input type="text"
                            class="number_input text-center fw-bold text-dark text-center form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="cost_session_num[]" id="coaching_ExecutiveCoaching_sn1">
                    </td>
                    <td class="mgt-td-dark-bg">
                        <input type="text" 
                        class="number_input text-center fw-bold text-dark text-center form-control input-table @error('') is-invalid @enderror" 
                        value="{{ old('') }}" name="cost_nswh[]" id="coaching_ExecutiveCoaching_nswh1">
                    </td>
                    <td class="total-td" style="border-left:3px solid black">
                        <h4 class="text-center text-danger  lead" id="coaching_ExecutiveCoaching_total1">-</h4>
                    </td> 
                    <td class="total-td">
                        <input  type="text" class="form-control input-table" name="cost_roster[]" id="ExecutiveCoaching_roster1"
                                value="{{ old('') }}"                                     
                                oninput="filterConsultant('ExecutiveCoaching_roster1');"
                                
                                list="filtered_consultant_list" 
                                autocomplete="off" >   
                        <input  type="hidden" value="" name="cost_roster_id[]" id="id_ExecutiveCoaching_roster1">
                    </td>
                    <td class="total-td">
                        <textarea type="text" class="form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}"name="cost_notes[]" id="ec_coaching_ExecutiveCoachingNotes1"></textarea>
                    </td>
                    <td style="background-color: #FFFFFF; border: 2px solid white" class="">
                        <a href="javascript:void(0)" class="text-success font-18" title="Add" id="muaddButton5">
                            <i class="fa fa-plus"></i>
                        </a>
                    </td>
                </tr>
            </tbody>
            <!---------------Performance Development Coaching--------------------->
            <tbody id="tableofPerfDevCoaching">
                <tr class="th-blue-grey-lighten-2" id="rowofPerfDevCoaching">
                    <td class="title">
                        <input type="text" class="d-none" value="Performance Development Coaching" name="cost_type[]" readonly>
                        Performance Development Coaching
                    </td>
                    <td class="mgt-td-dark-bg">
                        <input type="text"
                            class="number_input text-center fw-bold text-dark text-center form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="cost_coach_num[]" id="coaching_PerfDevCoaching_cn1"> 
                    </td>
                    <td class="bg-white">
                        <input type="text"
                            class="currency_input text-center fw-bold text-dark text-center form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="cost_session_fee[]" id="coaching_PerfDevCoaching_sf1"> 
                    </td>
                    <td class="mgt-td-dark-bg">
                        <input type="text"
                            class="number_input text-center fw-bold text-dark text-center form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="cost_session_num[]" id="coaching_PerfDevCoaching_sn1">
                    </td>
                    <td class="mgt-td-dark-bg">
                        <input type="text" 
                        class="number_input text-center fw-bold text-dark text-center form-control input-table @error('') is-invalid @enderror" 
                        value="{{ old('') }}" name="cost_nswh[]" id="coaching_PerfDevCoaching_nswh1">
                    </td>
                    <td class="total-td" style="border-left:3px solid black">
                        <h4 class="text-center text-danger  lead" id="coaching_PerfDevCoaching_total1">-</h4>
                    </td>
                    <td class="total-td">
                        <input  type="text" class="form-control input-table" name="cost_roster[]" id="PerfDevCoaching_roster1"
                                value="{{ old('') }}"                                     
                                oninput="filterConsultant('PerfDevCoaching_roster1');"
                                
                                list="filtered_consultant_list" 
                                autocomplete="off" >
                        <input  type="hidden" value="" name="cost_roster_id[]" id="id_PerfDevCoaching_roster1">
                    </td>
                    <td class="total-td">
                        <textarea type="text" class="form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}"name="cost_notes[]" id="ec_coaching_PerfDevCoachingNotes1"></textarea>
                    </td>
                    <td style="background-color: #FFFFFF; border: 2px solid white" class="">
                        <a href="javascript:void(0)" class="text-success font-18" title="Add" id="muaddButton6">
                            <i class="fa fa-plus"></i>
                        </a>
                    </td>
                </tr>
            </tbody>
            <!---------------Gallup Strengths Coaching---------------------->
            <tbody id="tableofGallupStrenghtCoach">
                <tr class="th-blue-grey-lighten-2" id="rowofGallupStrenghtCoach">
                    <td class="title">
                        <input type="text" class="d-none" value="Gallup Strengths Coaching" name="cost_type[]" readonly>
                        Gallup Strengths Coaching
                    </td>
                    <td class="mgt-td-dark-bg">
                        <input type="text"
                            class="number_input text-center fw-bold text-dark text-center form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="cost_coach_num[]" id="coaching_GallupStrenghtCoach_cn1"> 
                    </td>
                    <td class="bg-white">
                        <input type="text"
                            class="currency_input text-center fw-bold text-dark text-center form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="cost_session_fee[]" id="coaching_GallupStrenghtCoach_sf1"> 
                    </td>
                    <td class="mgt-td-dark-bg">
                        <input type="text"
                            class="number_input text-center fw-bold text-dark text-center form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="cost_session_num[]" id="coaching_GallupStrenghtCoach_sn1">
                    </td>
                    <td class="mgt-td-dark-bg">
                        <input type="text" 
                        class="number_input text-center fw-bold text-dark text-center form-control input-table @error('') is-invalid @enderror" 
                        value="{{ old('') }}" name="cost_nswh[]" id="coaching_GallupStrenghtCoach_nswh1">
                    </td>
                    <td class="total-td" style="border-left:3px solid black">
                        <h4 class="text-center text-danger  lead" id="coaching_GallupStrenghtCoach_total1">-</h4>
                    </td>
                    <td class="total-td">
                    <input  type="text" class="form-control input-table" name="cost_roster[]" id="GallupStrenghtCoach_roster1"
                            value="{{ old('') }}"                                     
                            oninput="filterConsultant('GallupStrenghtCoach_roster1');"
                            
                            list="filtered_consultant_list" 
                            autocomplete="off" >
                    <input  type="hidden" value="" name="cost_roster_id[]" id="id_GallupStrenghtCoach_roster1">
                    </td>
                    <td class="total-td">
                        <textarea type="text" class="form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}"name="cost_notes[]" id="ec_coaching_GallupStrenghtCoachNotes1"></textarea>
                    </td>
                    <td style="background-color: #FFFFFF; border: 2px solid white" class="">
                        <a href="javascript:void(0)" class="text-success font-18" title="Add" id="muaddButton7">
                            <i class="fa fa-plus"></i>
                        </a>
                    </td>
                </tr>
            </tbody>
            <!---------------WIAL Action Learning Team Coaching---------------------->
            <tbody id="tableofWialActLearnTeamCoach">
                <tr class="th-blue-grey-lighten-2" id="rowofWialActLearnTeamCoach">
                    <td class="title">
                        <input type="text" class="d-none" value="WIAL Action Learning Team Coaching" name="cost_type[]" readonly>
                        WIAL Action Learning Team Coaching
                    </td>
                    <td class="mgt-td-dark-bg">
                        <input type="text"
                            class="number_input text-center fw-bold text-dark text-center form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="cost_coach_num[]" id="coaching_WialActLearnTeamCoach_cn1"> 
                    </td>
                    <td class="bg-white">
                        <input type="text"
                            class="currency_input text-center fw-bold text-dark text-center form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="cost_session_fee[]" id="coaching_WialActLearnTeamCoach_sf1"> 
                    </td>
                    <td class="mgt-td-dark-bg">
                        <input type="text"
                            class="number_input text-center fw-bold text-dark text-center form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="cost_session_num[]" id="coaching_WialActLearnTeamCoach_sn1">
                    </td>
                    <td class="mgt-td-dark-bg">
                        <input type="text" 
                        class="number_input text-center fw-bold text-dark text-center form-control input-table @error('') is-invalid @enderror" 
                        value="{{ old('') }}" name="cost_nswh[]" id="coaching_WialActLearnTeamCoach_nswh1">
                    </td>
                    <td class="total-td" style="border-left:3px solid black">
                        <h4 class="text-center text-danger  lead" id="coaching_WialActLearnTeamCoach_total1">-</h4>
                    </td>
                    <td class="total-td">
                    <input  type="text" class="form-control input-table" name="cost_roster[]" id="WialActLearnTeamCoach_roster1"
                            value="{{ old('') }}"                                     
                            oninput="filterConsultant('WialActLearnTeamCoach_roster1');"
                            
                            list="filtered_consultant_list" 
                            autocomplete="off" >
                    <input  type="hidden" value="" name="cost_roster_id[]" id="id_WialActLearnTeamCoach_roster1">
                    </td>
                    <td class="total-td">
                        <textarea type="text" class="form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}"name="cost_notes[]" id="ec_coaching_WialActLearnTeamCoachNotes1"></textarea>
                    </td>
                    <td style="background-color: #FFFFFF; border: 2px solid white" class="">
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
                <td></td>
                <td class="total-td" style="background-color: rgba(146, 146, 146, 0.727)">
                    <h4 class="text-center text-danger " id="coaching_ProgramsSubtotal">-</h4>
                </td>
                <td class="total-td"></td>
                <td class="total-td"></td>
                <td style="background-color: #FFFFFF; border: 2px solid white" class=""></td>
            </tr>

            <!--------------------------MISCELLANEOUS------------------------------------>
            <tr class="th-blue-grey-lighten">
                <th class="title px-4 text-dark">MISCELLANEOUS</th>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td class="total-td" style="border-left:3px solid black"></td>
                <td class="total-td"></td>
                <td class="total-td"></td>
                <td style="background-color: #FFFFFF; border: 2px solid white" class=""></td>
            </tr>

            <tr class="th-blue-grey-lighten-2" id="rowofProgramExpenses">
                <td class="title">
                    <input type="text" class="d-none" value="Program Expenses" name="cost_type[]" readonly>
                    Program Expenses
                </td>
                <td><input type="hidden" class="d-none" name="cost_coach_num[]" readonly></td>
                <td class="bg-white">
                    <input type="text"
                        class="currency_input text-center text-dark fw-bold form-control input-table @error('') is-invalid @enderror"
                        value="{{ old('') }}" name="cost_session_fee[]" id="coaching_Programexpenses" maxlength="4">
                </td>
                <td><input type="hidden" class="d-none" name="cost_session_num[]" readonly></td>
                <td><input type="hidden" class="d-none" name="cost_nswh[]" readonly></td>
                
                <td class="total-td" style="background-color: rgba(146, 146, 146, 0.727">
                    <h4 class="text-center text-danger " id="coaching_ProgramexpensesTotal">-</h4>
                </td>
                <td class="total-td">
                    <input  type="hidden" class="form-control input-table" name="cost_roster[]" id="programexpenses_roster1"
                            value="{{ old('') }}"                                     
                            oninput="filterConsultant('programexpenses_roster1');"
                            
                            list="filtered_consultant_list" 
                            autocomplete="off" >   
                    <input  type="hidden" value="" name="cost_roster_id[]" id="id_programexpenses_roster1">
                </td>
                <td class="total-td">
                    <textarea type="text" class="form-control input-table @error('') is-invalid @enderror"
                        value="{{ old('') }}"name="cost_notes[]" id="ec_coaching_ProgramexpensesNotes1"></textarea>
                </td>
                <td style="background-color: #FFFFFF; border: 2px solid white" class=""></td>
            </tr>  

            <!--------------------------TOTAL-------------------------------------------->
            <tr class="" id="coaching_allTotals">
                <td class="table-active fw-bold text-uppercase text-dark fst-italic overall-total-start">TOTAL</td>
                <td class="table-active overall-total-middle"></td>
                <td class="table-active overall-total-middle"></td>
                <td class="table-active overall-total-middle"></td>
                <td class="table-active overall-total-middle"></td>
                <td class="table-active overall-total-middle" style="border:3px solid black">
                    <h4 class="text-center text-danger  text-danger" id="coaching_Totals">-</h4>
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
@include('form.components.coaching_engagement.coaching_script.coaching_engagement_cost')
<script>
var results = document.querySelector('#filtered_consultant_list');
// var templateContent = document.querySelector('#all_consultant_list').content;
let currency = Intl.NumberFormat("en-US");

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
}
</script>

@if($parentData)
    <script>

    $(document).ready( function () {
        var salesCount = 1, referralCount = 1, engagementManagerCount = 1, consultingDesignCount = 1, executiveCoachingCount = 1,
        perfDevCoachingCount = 1, gallupStrengthsCoachingCount = 1, wialALTCCount = 1;

        @foreach($subCostList as $cost)

            @if($cost->type == 'Sales') 

            if (salesCount <= 1) {
                document.getElementById('coaching_sale').value = '{{ $cost->session_fee }}';
                document.getElementById('inputforSale1').value = '{{ $cost->session_fee }}';
                document.getElementById('sales_roster1').value = '{{ $cost->rooster }}';
                document.getElementById('id_sales_roster1').value = '{{ $cost->consultant_id }}';
                document.getElementById('ec_coaching_saleNotes1').value = '{{ $cost->notes }}';
            } else {                    
                document.getElementById('coaching_sale').style.display = 'none';
                document.getElementById('coaching_sale').disabled = true;
                document.getElementById('inputforSale1').disabled = false;
                document.getElementById('inputforSale1').style.display = '';
                
                $('#muaddButton').click();

                document.getElementById('inputforSale' + salesCount).value = '{{ $cost->session_fee }}';
                document.getElementById('sales_roster' + salesCount).value = '{{ $cost->rooster }}';
                document.getElementById('id_sales_roster' + salesCount).value = '{{ $cost->consultant_id }}';
                document.getElementById('ec_coaching_saleNotes' + salesCount).value = '{{ $cost->notes }}';
            }
            salesCount++;
            @endif

            @if($cost->type == 'Referral') 
            if (referralCount <= 1) {
                document.getElementById('coaching_referrals').value = '{{ $cost->session_fee }}';
                document.getElementById('inputforReferrals1').value = '{{ $cost->session_fee }}';
                document.getElementById('referral_roster1').value = '{{ $cost->rooster }}';
                document.getElementById('id_referral_roster1').value = '{{ $cost->consultant_id }}';
                document.getElementById('ec_coaching_referralsNotes1').value = '{{ $cost->notes }}';
            } else {                    
                document.getElementById('coaching_referrals').style.display = 'none';
                document.getElementById('coaching_referrals').disabled = true;
                document.getElementById('inputforReferrals1').disabled = false;
                document.getElementById('inputforReferrals1').style.display = '';
                
                $('#muaddButton2').click();

                document.getElementById('inputforReferrals' + referralCount).value = '{{ $cost->session_fee }}';
                document.getElementById('referral_roster' + referralCount).value = '{{ $cost->rooster }}';
                document.getElementById('id_referral_roster' + referralCount).value = '{{ $cost->consultant_id }}';
                document.getElementById('ec_coaching_referralsNotes' + referralCount).value = '{{ $cost->notes }}';
            }
            referralCount++;
            @endif

            @if($cost->type == 'Engagement Manager') 
            if (engagementManagerCount <= 1) {
                document.getElementById('coaching_engagementManager').value = '{{ $cost->session_fee }}';
                document.getElementById('inputforEngagementManager1').value = '{{ $cost->session_fee }}';
                document.getElementById('engagementManager_roster1').value = '{{ $cost->rooster }}';
                document.getElementById('id_engagementManager_roster1').value = '{{ $cost->consultant_id }}';
                document.getElementById('ec_coaching_engagementManagerNotes1').value = '{{ $cost->notes }}';
            } else {                    
                document.getElementById('coaching_engagementManager').style.display = 'none';
                document.getElementById('coaching_engagementManager').disabled = true;
                document.getElementById('inputforEngagementManager1').disabled = false;
                document.getElementById('inputforEngagementManager1').style.display = '';
                
                $('#muaddButton3').click();

                document.getElementById('inputforEngagementManager' + engagementManagerCount).value = '{{ $cost->session_fee }}';
                document.getElementById('engagementManager_roster' + engagementManagerCount).value = '{{ $cost->rooster }}';
                document.getElementById('id_engagementManager_roster' + engagementManagerCount).value = '{{ $cost->consultant_id }}';
                document.getElementById('ec_coaching_engagementManagerNotes' + engagementManagerCount).value = '{{ $cost->notes }}';
            }
            engagementManagerCount++;
            @endif 

            @if($cost->type == 'Consulting Design') 
            if (consultingDesignCount <= 1) {
                document.getElementById('coaching_ConsultingDesign_cn' + consultingDesignCount).value = '{{ $cost->coaches_num }}';
                document.getElementById('coaching_ConsultingDesign_sf' + consultingDesignCount).value = '{{ $cost->session_fee }}';
                document.getElementById('coaching_ConsultingDesign_sn' + consultingDesignCount).value = '{{ $cost->session_num }}';
                document.getElementById('coaching_ConsultingDesign_nswh' + consultingDesignCount).value = '{{ $cost->nswh }}';
                document.getElementById('ConsultingDesign_roster' + consultingDesignCount).value = '{{ $cost->rooster }}';
                document.getElementById('id_ConsultingDesign_roster' + consultingDesignCount).value = '{{ $cost->consultant_id }}';
                document.getElementById('ec_coaching_ConsultingDesignNotes' + consultingDesignCount).value = '{{ $cost->notes }}';
            } else {             
                $('#muaddButton4').click();
                document.getElementById('coaching_ConsultingDesign_cn' + consultingDesignCount).value = '{{ $cost->coaches_num }}';
                document.getElementById('coaching_ConsultingDesign_sf' + consultingDesignCount).value = '{{ $cost->session_fee }}';
                document.getElementById('coaching_ConsultingDesign_sn' + consultingDesignCount).value = '{{ $cost->session_num }}';
                document.getElementById('coaching_ConsultingDesign_nswh' + consultingDesignCount).value = '{{ $cost->nswh }}';
                document.getElementById('ConsultingDesign_roster' + consultingDesignCount).value = '{{ $cost->rooster }}';
                document.getElementById('id_ConsultingDesign_roster' + consultingDesignCount).value = '{{ $cost->consultant_id }}';
                document.getElementById('ec_coaching_ConsultingDesignNotes' + consultingDesignCount).value = '{{ $cost->notes }}';
            }
            consultingDesignCount++;
            @endif

            @if($cost->type == 'Executive Coaching') 
            if (executiveCoachingCount <= 1) {
                document.getElementById('coaching_ExecutiveCoaching_cn' + executiveCoachingCount).value = '{{ $cost->coaches_num }}';
                document.getElementById('coaching_ExecutiveCoaching_sf' + executiveCoachingCount).value = '{{ $cost->session_fee }}';
                document.getElementById('coaching_ExecutiveCoaching_sn' + executiveCoachingCount).value = '{{ $cost->session_num }}';
                document.getElementById('coaching_ExecutiveCoaching_nswh' + executiveCoachingCount).value = '{{ $cost->nswh }}';
                document.getElementById('ExecutiveCoaching_roster' + executiveCoachingCount).value = '{{ $cost->rooster }}';
                document.getElementById('id_ExecutiveCoaching_roster' + executiveCoachingCount).value = '{{ $cost->consultant_id }}';
                document.getElementById('ec_coaching_ExecutiveCoachingNotes' + executiveCoachingCount).value = '{{ $cost->notes }}';
            } else {             
                $('#muaddButton5').click();
                document.getElementById('coaching_ExecutiveCoaching_cn' + executiveCoachingCount).value = '{{ $cost->coaches_num }}';
                document.getElementById('coaching_ExecutiveCoaching_sf' + executiveCoachingCount).value = '{{ $cost->session_fee }}';
                document.getElementById('coaching_ExecutiveCoaching_sn' + executiveCoachingCount).value = '{{ $cost->session_num }}';
                document.getElementById('coaching_ExecutiveCoaching_nswh' + executiveCoachingCount).value = '{{ $cost->nswh }}';
                document.getElementById('ExecutiveCoaching_roster' + executiveCoachingCount).value = '{{ $cost->rooster }}';
                document.getElementById('id_ExecutiveCoaching_roster' + executiveCoachingCount).value = '{{ $cost->consultant_id }}';
                document.getElementById('ec_coaching_ExecutiveCoachingNotes' + executiveCoachingCount).value = '{{ $cost->notes }}';
            }
            executiveCoachingCount++;
            @endif

            @if($cost->type == 'Performance Development Coaching') 
            if (perfDevCoachingCount <= 1) {
                document.getElementById('coaching_PerfDevCoaching_cn' + perfDevCoachingCount).value = '{{ $cost->coaches_num }}';
                document.getElementById('coaching_PerfDevCoaching_sf' + perfDevCoachingCount).value = '{{ $cost->session_fee }}';
                document.getElementById('coaching_PerfDevCoaching_sn' + perfDevCoachingCount).value = '{{ $cost->session_num }}';
                document.getElementById('coaching_PerfDevCoaching_nswh' + perfDevCoachingCount).value = '{{ $cost->nswh }}';
                document.getElementById('PerfDevCoaching_roster' + perfDevCoachingCount).value = '{{ $cost->rooster }}';
                document.getElementById('id_PerfDevCoaching_roster' + perfDevCoachingCount).value = '{{ $cost->consultant_id }}';
                document.getElementById('ec_coaching_PerfDevCoachingNotes' + perfDevCoachingCount).value = '{{ $cost->notes }}';
            } else {             
                $('#muaddButton6').click();
                document.getElementById('coaching_PerfDevCoaching_cn' + perfDevCoachingCount).value = '{{ $cost->coaches_num }}';
                document.getElementById('coaching_PerfDevCoaching_sf' + perfDevCoachingCount).value = '{{ $cost->session_fee }}';
                document.getElementById('coaching_PerfDevCoaching_sn' + perfDevCoachingCount).value = '{{ $cost->session_num }}';
                document.getElementById('coaching_PerfDevCoaching_nswh' + perfDevCoachingCount).value = '{{ $cost->nswh }}';
                document.getElementById('PerfDevCoaching_roster' + perfDevCoachingCount).value = '{{ $cost->rooster }}';
                document.getElementById('id_PerfDevCoaching_roster' + perfDevCoachingCount).value = '{{ $cost->consultant_id }}';
                document.getElementById('ec_coaching_PerfDevCoachingNotes' + perfDevCoachingCount).value = '{{ $cost->notes }}';
            }
            perfDevCoachingCount++;
            @endif

            @if($cost->type == 'Gallup Strengths Coaching') 
            if (gallupStrengthsCoachingCount <= 1) {
                document.getElementById('coaching_GallupStrenghtCoach_cn' + gallupStrengthsCoachingCount).value = '{{ $cost->coaches_num }}';
                document.getElementById('coaching_GallupStrenghtCoach_sf' + gallupStrengthsCoachingCount).value = '{{ $cost->session_fee }}';
                document.getElementById('coaching_GallupStrenghtCoach_sn' + gallupStrengthsCoachingCount).value = '{{ $cost->session_num }}';
                document.getElementById('coaching_GallupStrenghtCoach_nswh' + gallupStrengthsCoachingCount).value = '{{ $cost->nswh }}';
                document.getElementById('GallupStrenghtCoach_roster' + gallupStrengthsCoachingCount).value = '{{ $cost->rooster }}';
                document.getElementById('id_GallupStrenghtCoach_roster' + gallupStrengthsCoachingCount).value = '{{ $cost->consultant_id }}';
                document.getElementById('ec_coaching_GallupStrenghtCoachNotes' + gallupStrengthsCoachingCount).value = '{{ $cost->notes }}';
            } else {             
                $('#muaddButton7').click();
                document.getElementById('coaching_GallupStrenghtCoach_cn' + gallupStrengthsCoachingCount).value = '{{ $cost->coaches_num }}';
                document.getElementById('coaching_GallupStrenghtCoach_sf' + gallupStrengthsCoachingCount).value = '{{ $cost->session_fee }}';
                document.getElementById('coaching_GallupStrenghtCoach_sn' + gallupStrengthsCoachingCount).value = '{{ $cost->session_num }}';
                document.getElementById('coaching_GallupStrenghtCoach_nswh' + gallupStrengthsCoachingCount).value = '{{ $cost->nswh }}';
                document.getElementById('GallupStrenghtCoach_roster' + gallupStrengthsCoachingCount).value = '{{ $cost->rooster }}';
                document.getElementById('id_GallupStrenghtCoach_roster' + gallupStrengthsCoachingCount).value = '{{ $cost->consultant_id }}';
                document.getElementById('ec_coaching_GallupStrenghtCoachNotes' + gallupStrengthsCoachingCount).value = '{{ $cost->notes }}';
            }
            gallupStrengthsCoachingCount++;
            @endif

            @if($cost->type == 'WIAL Action Learning Team Coaching') 
            if (wialALTCCount <= 1) {
                document.getElementById('coaching_WialActLearnTeamCoach_cn' + wialALTCCount).value = '{{ $cost->coaches_num }}';
                document.getElementById('coaching_WialActLearnTeamCoach_sf' + wialALTCCount).value = '{{ $cost->session_fee }}';
                document.getElementById('coaching_WialActLearnTeamCoach_sn' + wialALTCCount).value = '{{ $cost->session_num }}';
                document.getElementById('coaching_WialActLearnTeamCoach_nswh' + wialALTCCount).value = '{{ $cost->nswh }}';
                document.getElementById('WialActLearnTeamCoach_roster' + wialALTCCount).value = '{{ $cost->rooster }}';
                document.getElementById('id_WialActLearnTeamCoach_roster' + wialALTCCount).value = '{{ $cost->consultant_id }}';
                document.getElementById('ec_coaching_WialActLearnTeamCoachNotes' + wialALTCCount).value = '{{ $cost->notes }}';
            } else {             
                $('#muaddButton8').click();
                document.getElementById('coaching_WialActLearnTeamCoach_cn' + wialALTCCount).value = '{{ $cost->coaches_num }}';
                document.getElementById('coaching_WialActLearnTeamCoach_sf' + wialALTCCount).value = '{{ $cost->session_fee }}';
                document.getElementById('coaching_WialActLearnTeamCoach_sn' + wialALTCCount).value = '{{ $cost->session_num }}';
                document.getElementById('coaching_WialActLearnTeamCoach_nswh' + wialALTCCount).value = '{{ $cost->nswh }}';
                document.getElementById('WialActLearnTeamCoach_roster' + wialALTCCount).value = '{{ $cost->rooster }}';
                document.getElementById('id_WialActLearnTeamCoach_roster' + wialALTCCount).value = '{{ $cost->consultant_id }}';
                document.getElementById('ec_coaching_WialActLearnTeamCoachNotes' + wialALTCCount).value = '{{ $cost->notes }}';
            }
            wialALTCCount++;
            @endif

            @if($cost->type == 'Program Expenses') 
            document.getElementById('coaching_Programexpenses').value = '{{ $cost->session_fee }}';  
            document.getElementById('ec_coaching_ProgramexpensesNotes1').value = '{{ $cost->notes }}';
            @endif

        @endforeach

        $('#coaching-table input').blur();

    });
    </script>
@endif 