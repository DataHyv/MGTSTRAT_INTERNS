<hr>
<div class="card-header">
    <h4 class="card-title">Engagement Cost</h4>
</div>

{{-- Types --}}
@php
    $wcSales = 0;
    $wcReferral = 0;
    $wcEngagementManager = 0;
    $wcCustomizationFee = 0;
    $wcCreatorsFees = 0;
    $wcLeadFacilitator = 0;
    $wcModerator = 0;
    $wcProducer = 0;
    $wcOffProgramFee = 0;
    $wcProgramExpenses = 0;
@endphp

<!--------------------------START OF MGTSTRAT-U WORKSHOPS ENGAGEMENT COST FORM------------------------------>
    <div class="form-body container">
        <section>
            <div class="table-responsive-md" id="no-more-tables">
                <table class="table table-bordered table-hover" id="workshop-table">
        <!--------------------------TABLE HEADING TITLE------------------------------>
                        <thead class="table">
                            <tr class="text-center th-blue-grey">
                                <th class="title-th" scope="col" width=20%></th>
                                <th class="title-middle" width=15% scope="col" style="font-size: 0.9rem;">HOURLY FEES</th>
                                <th class="title-middle px-4" width=15% scope="col">NUMBER OF HOURS</th>
                                <th class="title-middle" scope="col" style="font-size: 0.9rem;" width=15%>NIGHT SHIFT,
                                    WEEKENDS HOLIDAYS *</th>
                                <th class="title-th" scope="col" style="border:3px solid black" width=18%>TOTAL FEE</th>
                                <th class="title-th" scope="col" width=17%>ROSTER</th>
                                <!----<th class="add-row border border-white" scope="col"></th>--->
                            </tr>
                        </thead>
        <!--------------------------COMMISSION--------------------------------------->
                            <tr class="th-blue-grey-lighten">
                                <th class="px-4 title text-dark fw-bolder">COMMISSION</th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th class="total-td" style="border-left:3px solid black"></th>
                                <th class="total-td"></th>
                            </tr>
                        <!---------------SALE-------------------------->
                            <tbody id="tableofSale">

                                {{-- Type: Sales --}}
                                @foreach ($dataJoin2 as $key=>$cost_type )
                                @if ($cost_type->type == 'Sales')

                                <tr class="th-blue-grey-lighten-2" id="rowofSale{{ ++$wcSales }}">
                                    <td class="title">

                                        <input type="hidden" name="cost_id[]" value="{{ $cost_type->id }}" readonly>
                                        <input type="text" class="d-none" value="Sales" name="cost_type[]" readonly>
                                        {{ $cost_type->type }} (4% / 5% / 6% / 7%)

                                    </td>
                                    <td>
                                        <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                        value="{{ old('') }}" name="com_sales" id="inputforSale" style="display: none;"
                                        onblur="this.value = this.value.replace('%', '') + '%';"
                                        oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"
                                        maxlength="5" disabled>

                                    {{-- hour_fee --}}
                                    <fieldset id="dropdownforSale">
                                        <select
                                            class="input js-mytooltip  text-center form-select @error('') is-invalid @enderror"
                                            name="cost_hour_fee[]" id="workshop_sale"
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
                                                <option value="0" {{ $cost_type->hour_fee == '0' ? 'selected="selected"' : '' }}
                                                    title="with minimal design customization, or platform customization outside of Zoom/Google Meets/MS Teams. Up to 2 hours of work">
                                                    0%
                                                </option>
                                                <option value="4" {{ $cost_type->hour_fee == '4' ? 'selected="selected"' : '' }}
                                                    title="with minimal design customization, or platform customization outside of Zoom/Google Meets/MS Teams. Up to 2 hours of work">
                                                    4%
                                                </option>
                                                <option value="5" {{ $cost_type->hour_fee == '5' ? 'selected="selected"' : '' }}
                                                    title="with minimal design customization, or platform customization outside of Zoom/Google Meets/MS Teams. Up to 2 hours of work">
                                                    5%
                                                </option>
                                                <option value="6" {{ $cost_type->hour_fee == '6' ? 'selected="selected"' : '' }}
                                                    title="with minimal design customization, or platform customization outside of Zoom/Google Meets/MS Teams. Up to 2 hours of work">
                                                    6%
                                                </option>
                                                <option value="7" {{ $cost_type->hour_fee == '7' ? 'selected="selected"' : '' }}
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
                                    <td></td>
                                    <td></td>
                                    <td class="total-td tbl-engmt-cost" style="border-left:3px solid black">
                                        <h4 class="text-center" id="workshop_saleTotal">-</h4>
                                    </td>

                                    {{-- rooster --}}
                                    <td class="total-td">
                                        <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                            value="{{ $cost_type->rooster }}" name="cost_rooster[]" id="">
                                    </td>
                                    <td style="background-color: #FFFFFF;" class="border border-white">
                                        <a href="javascript:void(0)" class="text-success font-18" title="Add" id="muaddButton">
                                            <i class="fa fa-plus"></i>
                                        </a>
                                    </td>
                                </tr>

                                @endif
                                @endforeach
                                {{-- End of Type: Sales --}}

                            </tbody>
                        <!---------------REFERRALS--------------------->
                            <tbody id="tableofReferrals">

                                {{-- Type: Referral --}}
                                @foreach ($dataJoin2 as $key=>$cost_type )
                                @if ($cost_type->type == 'Referral')

                                <tr class="th-blue-grey-lighten-2" id="rowofReferrals{{ ++$wcReferral }}">
                                    
                                    <td class="title">
                                    <input type="hidden" name="cost_id[]" value="{{ $cost_type->id }}" readonly>
                                    <input type="text" class="d-none" value="Referral" name="cost_type[]" readonly>
                                    {{ $cost_type->type }} (2% / 3% / 10%)</td>

                                    <td>
                                        <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                        value="{{ old('') }}" name="com_referral" id="inputforReferrals" style="display: none;"
                                        onblur="this.value = this.value.replace('%', '') + '%';"
                                        oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"
                                        maxlength="5" disabled>
                                        
                                        {{-- hour_fee --}}
                                        <fieldset id="dropdownforReferrals">
                                            <select
                                                class="input js-mytooltip text-center  form-select @error('') is-invalid @enderror"
                                                name="cost_hour_fee[]" id="workshop_referrals"
                                                data-mytooltip-content="<i>
                                                        Referral - 2% - repeat contracts from the same client<br>
                                                        3% - 1st contract with a new client, or with a 2-year dormant client<br>
                                                        10% - if reffered/sold by a reseller<br><br>

                                                        When in doubt, check with Joi on who referror is.
                                                        </i>"
                                                data-mytooltip-theme="dark" data-mytooltip-action="focus"
                                                data-mytooltip-direction="right" style="background-color:#ffcccc; color:red;">
                                                <option value="0" {{ $cost_type->hour_fee == '0' ? 'selected="selected"' : '' }}
                                                    title="">
                                                    0%
                                                </option>
                                                <option value="2" {{ $cost_type->hour_fee == '2' ? 'selected="selected"' : '' }}
                                                    title="">
                                                    2%
                                                </option>
                                                <option value="3" {{ $cost_type->hour_fee == '3' ? 'selected="selected"' : '' }}
                                                    title="">
                                                    3%
                                                </option>
                                                <option value="10" {{ $cost_type->hour_fee == '10' ? 'selected="selected"' : '' }}
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
                                    <td></td>
                                    <td></td>
                                    <td class="total-td tbl-engmt-cost" style="border-left:3px solid black">
                                        <h4 class="text-center" id="workshop_referralsTotal">-</h4>
                                    </td>

                                    {{-- rooster --}}
                                    <td class="total-td">
                                        <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                            value="{{ $cost_type->rooster }}" name="cost_rooster[]" id="">
                                    </td>
                                    <td style="background-color: #FFFFFF;" class="border border-white">
                                        <a href="javascript:void(0)" class="text-success font-18" title="Add" id="muaddButton2">
                                            <i class="fa fa-plus"></i>
                                        </a>
                                    </td>
                                </tr>

                                @endif
                                @endforeach
                                {{-- End of Type: Referral --}}

                            </tbody>

                            <tr class="th-blue-grey-lighten-2">
                            <td class="title" colspan=""></td>
                            <td class="" colspan="3"></td>
                            <td class="title" colspan=""></td>
                            <td class="title" colspan=""></td>
                            <td style="background-color: #FFFFFF;" class="border border-white" colspan=""></td>
                            </tr>

        <!--------------------------ENGAGEMENT MANAGER------------------------------->
                        <tbody id="tableofEngagementManager">

                            {{-- Type: Engagement Manager --}}
                            @foreach ($dataJoin2 as $key=>$cost_type )
                            @if ($cost_type->type == 'Engagement Manager')

                            <tr class="th-blue-grey-lighten" id="rowofEngagementManager{{ ++$wcEngagementManager }}">
                                <td class="title fw-bold text-dark">

                                    <input type="hidden" name="cost_id[]" value="{{ $cost_type->id }}" readonly>
                                    <input type="text" class="d-none" value="Engagement Manager" name="cost_type[]" readonly>
                                    ENGAGEMENT MANAGER (4%)
                                </td>
                                <td>
                                    <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                        value="{{ old('') }}" name="engMan_hourfee" id="inputforEngagementManager"
                                        style="display: none;" onblur="this.value = this.value.replace('%', '') + '%';"
                                        oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"
                                        maxlength="5" disabled>

                                    {{-- hour_fee --}}
                                    <fieldset id="dropdownforEngagementManager">
                                        <select
                                            class="input js-mytooltip text-center  form-select @error('') is-invalid @enderror"
                                            name="cost_hour_fee[]" id="workshop_engagementManager"
                                            style="background-color:#ffcccc; color:red;"
                                            data-mytooltip-content="<i>
                                                    Engagement Manager - 4% - all Key Accounts and large engagements <br>
                                                    <br>
                                                    Large engagements: large scale consulting, or a series of at least
                                                    8 virtual sessions under 1 contract involving a roster of at least 2 people
                                                    </i>"
                                            data-mytooltip-theme="dark" data-mytooltip-action="focus"
                                            data-mytooltip-direction="right">
                                            <option value="0" {{ $cost_type->hour_fee == '0' ? 'selected="selected"' : '' }}
                                                title="">
                                                0%
                                            </option>
                                            <option value="4" {{ $cost_type->hour_fee == '4' ? 'selected="selected"' : '' }}
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
                                <td></td>
                                <td></td>
                                <td class="total-td tbl-engmt-cost" style="border-left:3px solid black">
                                    <h4 class="text-center" id="workshop_engagementManagerTotal">-</h4>
                                </td>

                                {{-- rooster --}}
                                <td class="total-td">
                                    <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                        value="{{ $cost_type->rooster }}" name="cost_rooster[]" id="">
                                </td>
                                <td style="background-color: #FFFFFF;" class="border border-white">
                                    <a href="javascript:void(0)" class="text-success font-18" title="Add" id="muaddButton3">
                                        <i class="fa fa-plus"></i>
                                    </a>
                                </td>
                            </tr>

                            @endif
                            @endforeach
                            {{-- End of Type: Engagement Manager --}}
                        
                        </tbody>

        <!--------------------------CONSULTING/DESIGN-------------------------------->
                        <tr class="th-blue-grey-lighten">
                            <th class="title px-4 text-dark">1. CONSULTING/DESIGN</th>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td class="total-td" style="border-left:3px solid black"></td>
                            <td class="total-td"></td>
                            <td style="background-color: #FFFFFF;" class="border border-white"></td>
                        </tr>
                    <!---------------CUSTOMIZATION FEE------------->
                        <tbody id="tableofCustomization">

                            {{-- Type: Customization Fee --}}
                            @foreach ($dataJoin2 as $key=>$cost_type )
                            @if ($cost_type->type == 'Customization Fee')

                            <tr class="th-blue-grey-lighten-2" id="rowofCustomization{{ ++$wcCustomizationFee }}">
                                <td class="title">
                                    <input type="hidden" name="cost_id[]" value="{{ $cost_type->id }}" readonly>
                                    <input type="text" class="d-none" value="Customization Fee" name="cost_type[]" readonly>
                                    {{ $cost_type->type }}
                                </td>

                                {{-- hour_fee --}}
                                <td>
                                   <input type="number"
                                        class="text-center fw-bold text-dark text-center form-control input-table @error('') is-invalid @enderror"
                                        value="{{ $cost_type->hour_fee }}" name="cost_hour_fee[]" id="workshop_CustomizationHf"> 
                                </td>

                                {{-- hour_num --}}
                                <td class="">
                                    <fieldset>
                                        <select class="input js-mytooltip  text-center form-select @error('') is-invalid @enderror" name="cost_hour_num[]" id="workshop_CustomizationNoh"
                                            data-mytooltip-content="<i>
                                                # of Hours<br>
                                                0 - no customization<br><br>
                                                2 - automatic when we charge customization fee<br><br></i>"
                                            data-mytooltip-theme="dark" data-mytooltip-action="focus"
                                            data-mytooltip-direction="right" style="background-color:#ffcccc; color:red;">
                                            <option value="0" {{ $cost_type->hour_num == '0' ? 'selected="selected"' : '' }}
                                                title="" >
                                                0
                                            </option>
                                            <option value="2" {{ $cost_type->hour_num == '2' ? 'selected="selected"' : '' }}
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
                                <td class="">
                                    <!--<input type="number"
                                        class="text-center form-control input-table @error('') is-invalid @enderror"
                                        value="{{ old('') }}" name="" id="workshop_CustomizationNwh1" readonly>-->
                                </td>
                                <td class="total-td" style="border-left:3px solid black">
                                    <h4 class="text-center lead" id="workshop_CustomizationsTotal">-</h4>
                                </td> 

                                {{-- rooster --}}
                                <td class="total-td">
                                    <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                        value="{{ $cost_type->rooster }}" name="cost_rooster[]" id="">
                                </td>
                                <td style="background-color: #FFFFFF;" class="border border-white">
                                    <a href="javascript:void(0)" class="text-success font-18" title="Add" id="muaddButton4">
                                    <i class="fa fa-plus"></i>
                                </a>
                            </td>
                            </tr>

                            @endif
                            @endforeach
                            {{-- End of Type: Customization Fee --}}

                        </tbody>
                    <!---------------CREATORS FEE------------------>
                        <tbody id="tableofCreator">

                            {{-- Type: Creators Fees --}}
                            @foreach ($dataJoin2 as $key=>$cost_type )
                            @if ($cost_type->type == 'Creators Fees')

                            <tr class="th-blue-grey-lighten-2" id="rowofCreator{{ ++$wcCreatorsFees }}">
                                <td class="title">
                                    
                                    <input type="hidden" name="cost_id[]" value="{{ $cost_type->id }}" readonly>
                                    <input type="text" class="d-none" value="Creators Fees" name="cost_type[]" readonly>
                                    {{ $cost_type->type }} (0, 500, 1K)</td>

                                <td>

                                    {{-- hour_fee --}}
                                    <fieldset>
                                        <select class="input js-mytooltip  text-center form-select @error('') is-invalid @enderror" name="cost_hour_fee[]" id="workshop_CreatorHf"
                                            data-mytooltip-content="<i>
                                                Creators Fee - 0 - no creators fee<br><br>
                                                500 - Creators Fee is the creator is the lead, for the 2nd session onwards<br><br>
                                                1,000 - Creators Fee if creator is NOT the lead, for the 2nd session onwards</i>"
                                            data-mytooltip-theme="dark" data-mytooltip-action="focus"
                                            data-mytooltip-direction="right" style="background-color:#ffcccc; color:red;">
                                            <option value="0" {{  $cost_type->hour_fee == '0' ? 'selected="selected"' : '' }}
                                                title="">
                                                &#8369;0
                                            </option>
                                            <option value="500" {{  $cost_type->hour_fee == '500' ? 'selected="selected"' : '' }}
                                                title="" >
                                                &#8369;500
                                            </option>
                                            <option value="1000" {{  $cost_type->hour_fee == '1000' ? 'selected="selected"' : '' }}
                                                title="">
                                                &#8369;1,000
                                            </option>
                                        </select>
                                        @error('ef_customFee')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </fieldset>
                                </td>

                                {{-- hour_num --}}
                                <td>
                                    <input type="number"
                                        class="text-center form-control input-table @error('') is-invalid @enderror"
                                        value="{{ $cost_type->hour_num }}" name="cost_hour_num[]" id="workshop_CreatorNoh" max="100">
                                </td>
                                <td class=""></td>
                                <td class="total-td" style="border-left:3px solid black">
                                    <h4 class="text-center lead" id="workshop_CreatorTotal">-</h4>
                                </td>

                                {{-- rooster --}}
                                <td class="total-td">
                                    <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                        value="{{ $cost_type->rooster }}" name="cost_rooster[]" id="">
                                </td>
                                <td style="background-color: #FFFFFF;" class="border border-white">
                                    <a href="javascript:void(0)" class="text-success font-18" title="Add" id="muaddButton5">
                                        <i class="fa fa-plus"></i></a>
                                </td>
                            </tr>

                            @endif
                            @endforeach
                            {{-- End of Type: Creators Fees --}}

                        </tbody>

                        <tr class="table-secondary">
                            <td class="title fw-bold text-dark fst-italic">Subtotal</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td class="total-td" style="background-color: rgba(146, 146, 146, 0.727">
                                <h4 class="text-center" id="workshop_DesignsSubtotal">-</h4>
                            </td>
                            <td class="total-td">
                                <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                    value="{{ old('') }}" name="consulationdesignsubtotal" id="">
                            </td>
                            <td style="background-color: #FFFFFF;" class="border border-white"></td>
                        </tr>

                        {{-- break --}}
                        <tr class="th-blue-grey-darken-4">
                            <td class="title" colspan=""></td>
                            <td class="" colspan="3"></td>
                            <td class="title" colspan=""></td>
                            <td class="title" colspan=""></td>
                            <td style="background-color: #FFFFFF;" class="border border-white"></td>
                        </tr>

        <!--------------------------PROGRAM------------------------------------------>
                        <tr class="th-blue-grey-lighten">
                            <th class="title px-4 text-dark">2. PROGRAM</th>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td class="total-td" style="border-left:3px solid black"></td>
                            <td class="total-td"></td>
                            <td style="background-color: #FFFFFF;" class="border border-white"></td>
                        </tr>
                    <!---------------LEAD FACILITATOR-------------->
                        <tbody id="tableofLeadFacilitator">

                            {{-- Type: Lead Facilitator --}}
                            @foreach ($dataJoin2 as $key=>$cost_type )
                            @if ($cost_type->type == 'Lead Facilitator')

                            <tr class="th-blue-grey-lighten-2" id="rowofLeadFacilitator{{ ++$wcLeadFacilitator }}">
                                <td class="title">
                                    <input type="text" class="d-none" value="Lead Facilitator" name="cost_type[]" readonly>
                                    {{ $cost_type->type }}
                                </td>

                                {{-- hour_fee --}}
                                <td>
                                    <input type="number"
                                        class="text-center fw-bold text-center text-dark form-control input-table @error('') is-invalid @enderror"
                                        value="{{ $cost_type->hour_fee }}" name="cost_hour_fee[]" id="workshop_LeadfacilitatorsHf">
                                </td>

                                {{-- hour_num --}}
                                <td>
                                    <input type="number"
                                        class="text-center form-control input-table @error('') is-invalid @enderror"
                                        value="{{ $cost_type->hour_num }}" name="cost_hour_num[]" id="workshop_LeadfacilitatorsNoh">
                                </td>

                                {{-- nswh --}}
                                <td>
                                    <input type="number"
                                        class="text-center form-control input-table @error('') is-invalid @enderror"
                                        value="{{ $cost_type->nswh }}" name="cost_nswh[]" id="workshop_LeadfacilitatorsNwh">
                                </td>
                                <td class="total-td" style="border-left:3px solid black">
                                    <h4 class="text-center lead" id="workshop_LeadfacilitatorsTotal">-</h4>
                                </td>

                                {{-- rooster --}}
                                <td class="total-td">
                                    <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                        value="{{ $cost_type->rooster }}" name="cost_rooster[]" id="">
                                </td>
                                <td style="background-color: #FFFFFF;" class="border border-white">
                                    <a href="javascript:void(0)" class="text-success font-18" title="Add" id="muaddButton6">
                                        <i class="fa fa-plus"></i>
                                    </a>
                                </td>
                            </tr>

                            @endif
                            @endforeach
                            {{-- End of Type: Lead Facilitator --}}

                        </tbody>

                    <!---------------MODERATOR--------------------->
                        <tbody id="tableofModerator">

                            {{-- Type: Moderator --}}
                            @foreach ($dataJoin2 as $key=>$cost_type )
                            @if ($cost_type->type == 'Moderator')

                            <tr class="th-blue-grey-lighten-2" id="rowofModerator{{ ++$wcModerator }}">
                                <td class="title">

                                    <input type="hidden" name="cost_id[]" value="{{ $cost_type->id }}" readonly>
                                    <input type="text" class="d-none" value="Moderator" name="cost_type[]" readonly>
                                    {{ $cost_type->type }} (P800/P1100/P1350)
                                </td>
                                
                                {{-- hour_fee --}}
                                <td>
                                    <fieldset>
                                        <select class="input js-mytooltip text-center form-select @error('') is-invalid @enderror select" name="cost_hour_fee[]"
                                            id="workshop_ModeratorHf" style="background-color:#ffcccc; color:red;"
                                            data-mytooltip-content="<i>
                                                <b>Moderator</b><br/>
                                                P800 - Associates<br/>
                                                P1,100 - Consultants<br/>
                                                P1,350 - Senior Consultant</i>"
                                        data-mytooltip-theme="dark" data-mytooltip-action="focus"
                                        data-mytooltip-direction="right">
                                        <option value="800" {{ $cost_type->hour_fee == '800' ? 'selected="selected"' : '' }}
                                            title="">
                                            &#8369;800
                                        </option>
                                        <option value="1100" {{ $cost_type->hour_fee == '1100' ? 'selected="selected"' : '' }}
                                            title="">
                                            &#8369;1,100
                                        </option>
                                        <option value="1350" {{ $cost_type->hour_fee == '1350' ? 'selected="selected"' : '' }}
                                            title="">
                                            &#8369;1,350
                                        </option>
                                    </select>
                                    @error('ef_customFee')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </fieldset>
                                </td>

                                {{-- hour_num --}}
                                <td>
                                    <input type="number"
                                        class="text-center  form-control input-table @error('') is-invalid @enderror"
                                        value="{{ $cost_type->hour_num }}" name="cost_hour_num[]" id="workshop_ModeratorNoh1">
                                </td>

                                {{-- nswh --}}
                                <td>
                                    <input type="number"
                                        class="text-center form-control input-table @error('') is-invalid @enderror"
                                        value="{{ $cost_type->nswh }}" name="cost_nswh[]" id="workshop_ModeratorNwh1">
                                </td>
                                <td class="total-td" style="border-left:3px solid black">
                                    <h4 class="text-center lead" id="workshop_ModeratorTotal">-</h4>
                                </td>

                                {{-- rooster --}}
                                <td class="total-td">
                                    <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                        value="{{ $cost_type->rooster }}" name="cost_rooster[]" id="">
                                </td>
                                <td style="background-color: #FFFFFF;" class="border border-white">
                                    <a href="javascript:void(0)" class="text-success font-18" title="Add" id="muaddButton7">
                                        <i class="fa fa-plus"></i>
                                    </a>
                                </td>
                            </tr>

                            @endif
                            @endforeach
                            {{-- End of Type: Moderator --}}

                        </tbody>

                    <!---------------PRODUCER---------------------->
                        <tbody id="tableofProducer">

                            {{-- Type: Producer --}}
                            @foreach ($dataJoin2 as $key=>$cost_type )
                            @if ($cost_type->type == 'Producer')

                            <tr class="th-blue-grey-lighten-2" id="rowofProducer{{ ++$wcProducer }}">
                                <td class="title">

                                    <input type="hidden" name="cost_id[]" value="{{ $cost_type->id }}" readonly>
                                    <input type="text" class="d-none" value="Producer" name="cost_type[]" readonly>
                                    {{ $cost_type->type }}

                                </td>

                                {{-- hour_fee --}}
                                <td>
                                    <input type="number"
                                        class="text-center text-dark fw-bold form-control input-table @error('') is-invalid @enderror"
                                        value="{{ $cost_type->hour_fee }}" name="cost_hour_fee[]" id="workshop_ProducerHf">
                                </td>

                                {{-- hour_num --}}
                                <td>
                                    <input type="number"
                                        class="text-center form-control input-table @error('') is-invalid @enderror"
                                        value="{{ $cost_type->hour_num }}" name="cost_hour_num[]" id="workshop_ProducerNoh">
                                </td>

                                {{-- nswh --}}
                                <td>
                                    <input type="number"
                                        class="text-center form-control input-table @error('') is-invalid @enderror"
                                        value="{{ $cost_type->nswh }}" name="cost_nswh[]" id="workshop_ProducerNwh">
                                </td>
                                <td class="total-td" style="border-left:3px solid black">
                                    <h4 class="text-center lead" id="workshop_ProducersTotal">-</h4>
                                </td>

                                {{-- rooster --}}
                                <td class="total-td">
                                    <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                        value="{{ $cost_type->rooster }}" name="cost_rooster[]" id="">
                                </td>
                                <td style="background-color: #FFFFFF;" class="border border-white">
                                    <a href="javascript:void(0)" class="text-success font-18" title="Add" id="muaddButton8">
                                        <i class="fa fa-plus"></i>
                                    </a>
                                </td>
                            </tr>

                            @endif
                            @endforeach
                            {{-- End of Type: Producer --}}

                        </tbody>

                        <tr class="table-secondary" id="tableofProgramSubtotal">
                            <td class="title fw-bold text-dark fst-italic">Subtotal</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td class="total-td" style="background-color: rgba(146, 146, 146, 0.727)">
                                <h4 class="text-center" id="workshop_ProgramsSubtotal">-</h4>
                            </td>
                            <td class="total-td">
                                <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                    value="{{ old('') }}" name="programsub_rooster" id="">
                            </td>
                            <td style="background-color: #FFFFFF;" class="border border-white"></td>
                        </tr>

                        {{-- break --}}
                        <tr class="th-blue-grey-darken-4">
                            <td class="title" colspan=""></td>
                            <td class="" colspan="3"></td>
                            <td class="title" colspan=""></td>
                            <td class="title" colspan=""></td>
                            <td style="background-color: #FFFFFF;" class="border border-white"></td>

                        </tr>

        <!--------------------------OFF-PROGRAM-------------------------------------->
                        <tr class="th-blue-grey-lighten">
                            <th class="title px-4 text-dark">3. OFF-PROGRAM</th>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td class="total-td" style="border-left:3px solid black"></td>
                            <td class="total-td"></td>
                            <td style="background-color: #FFFFFF;" class="border border-white"></td>
                        </tr>

                        {{-- Type: Off-Program Fee --}}
                        @foreach ($dataJoin2 as $key=>$cost_type )
                        @if ($cost_type->type == 'Off-Program Fee')

                        <tr class="th-blue-grey-lighten-2" id="rowofOffProgram{{ ++$wcOffProgramFee }}">
                            <td class="title">

                                <input type="hidden" name="cost_id[]" value="{{ $cost_type->id }}" readonly>
                                <input type="text" class="d-none" value="Off-Program Fee" name="cost_type[]" readonly>
                                {{ $cost_type->type }}
                            </td>

                            {{-- hour_fee --}}
                            <td>
                                <input type="number"
                                    class="text-center text-dark fw-bold form-control input-table @error('') is-invalid @enderror"
                                    value="{{ $cost_type->hour_fee }}" name="cost_hour_fee[]" id="workshop_OffprogramsHf">
                            </td>

                            {{-- hour_num --}}
                            <td>
                                <input type="number"
                                    class="text-center  form-control input-table @error('') is-invalid @enderror"
                                    value="{{ $cost_type->hour_num }}" name="cost_hour_num[]" id="workshop_OffprogramsNoh">
                            </td>
                            <td></td>
                            <td class="total-td" style="background-color: rgba(146, 146, 146, 0.727">
                                <h4 class="text-center" id="workshop_OffprogramsTotal">-</h4>
                            </td>

                            {{-- rooster --}}
                            <td class="total-td">
                                <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                    value="{{ $cost_type->rooster }}" name="cost_rooster[]" id="">
                            </td>
                            <td style="background-color: #FFFFFF;" class="border border-white"></td>
                        </tr>

                        @endif
                        @endforeach
                        {{-- End of Type: Off-Program Fee --}}

                        {{-- break --}}
                        <tr class="th-blue-grey-darken-4">
                            <td class="title" colspan=""></td>
                            <td class="" colspan="3"></td>
                            <td class="title" colspan=""></td>
                            <td class="title" colspan=""></td>
                            <td style="background-color: #FFFFFF;" class="border border-white"></td>
                        </tr>

        <!--------------------------MISCELLANEOUS------------------------------------>
                        <tr class="th-blue-grey-lighten">
                            <th class="title px-4 text-dark">MISCELLANEOUS</th>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td class="total-td" style="border-left:3px solid black"></td>
                            <td class="total-td"></td>
                            <td style="background-color: #FFFFFF;" class="border border-white"></td>
                        </tr>

                        {{-- Type: Program Expenses --}}
                        @foreach ($dataJoin2 as $key=>$cost_type )
                        @if ($cost_type->type == 'Program Expenses')

                        <tr class="th-blue-grey-lighten-2" id="rowofProgramExpenses{{ ++$wcProgramExpenses }}">
                            <td class="title">
                                <input type="hidden" name="cost_id[]" value="{{ $cost_type->id }}" readonly>
                                <input type="text" class="d-none" value="Program Expenses" name="cost_type[]" readonly>
                                {{ $cost_type->type }}
                            </td>

                            {{-- hour_fee --}}
                            <td>
                                <input type="number"
                                    class="text-center text-dark fw-bold form-control input-table @error('') is-invalid @enderror"
                                    value="{{ $cost_type->hour_fee }}" name="cost_hour_fee[]" id="workshop_Programexpenses" maxlength="4">
                            </td>
                            <td></td>
                            <td></td>
                            <td class="total-td" style="background-color: rgba(146, 146, 146, 0.727">
                                <h4 class="text-center" id="workshop_ProgramexpensesTotal">-</h4>
                            </td>

                            {{-- rooster --}}
                            <td class="total-td">
                                <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                    value="{{ $cost_type->rooster }}" name="cost_rooster[]" id="">
                            </td>
                            <td style="background-color: #FFFFFF;" class="border border-white"></td>
                        </tr>

                        @endif 
                        @endforeach
                        {{-- End of Type: Program Expenses --}}

                        {{-- break --}}
                        <tr class="th-blue-grey-darken-4">
                            <td class="title" colspan=""></td>
                            <td class="" colspan="3"></td>
                            <td class="title" colspan=""></td>
                            <td class="title" colspan=""></td>
                            <td style="background-color: #FFFFFF;" class="border border-white"></td>
                        </tr>

        <!--------------------------TOTAL-------------------------------------------->
                        <tr class="table-active" id="workshop_allTotals">
                            <td class="fw-bold text-uppercase text-dark fst-italic overall-total-start">TOTAL</td>
                            <td class="overall-total-middle"></td>
                            <td class="overall-total-middle"></td>
                            <td class="overall-total-middle"></td>
                            <td class="overall-total-middle" style="border:3px solid black">
                                <h4 class="text-center text-danger" id="workshop_Totals">-</h4>
                            </td>
                            <td class="overall-total-end" style="border:3px solid black">
                                <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                    value="{{ old('') }}" name="total_rooster" id="">
                            </td>
                        </tr>


                </table>
            </div>
        </section>
    </div>
<!--------------------------END OF MGTSTRAT-U WORKSHOPS ENGAGEMENT COST FORM-------------------------------->

@include('form.components.mgtstratu_workshops.workshops_script.workshops_engagement_cost')