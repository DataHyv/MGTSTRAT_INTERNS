<hr>
<div class="card-header">
    <h4 class="card-title">Engagement Cost</h4>
</div>

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
                                <tr class="th-blue-grey-lighten-2" id="rowofSale">
                                    <td class="title">Sales (4% / 5% / 6% / 7%)</td>
                                    <td>
                                        <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                        value="{{ old('') }}" name="" id="inputforSale" style="display: none;"
                                        onblur="this.value = this.value.replace('%', '') + '%';"
                                        oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"
                                        maxlength="5" disabled>

                                    <fieldset id="dropdownforSale">
                                        <select
                                            class="input js-mytooltip  text-center form-select @error('') is-invalid @enderror"
                                            name="" id="workshop_sale"
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
                                    <td></td>
                                    <td></td>
                                    <td class="total-td tbl-engmt-cost" style="border-left:3px solid black">
                                        <h4 class="text-center" id="workshop_saleTotal">-</h4>
                                    </td>
                                    <td class="total-td">
                                        <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                            value="{{ old('') }}" name="" id="">
                                    </td>
                                    <td style="background-color: #FFFFFF;" class="border border-white">
                                        <a href="javascript:void(0)" class="text-success font-18" title="Add" id="muaddButton">
                                            <i class="fa fa-plus"></i>
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                        <!---------------REFERRALS--------------------->
                            <tbody id="tableofReferrals">
                                <tr class="th-blue-grey-lighten-2" id="rowofReferrals">
                                    <td class="title">Referral (2% / 3% / 10%)</td>
                                    <td>
                                        <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                        value="{{ old('') }}" name="" id="inputforReferrals" style="display: none;"
                                        onblur="this.value = this.value.replace('%', '') + '%';"
                                        oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"
                                        maxlength="5" disabled>

                                    <fieldset id="dropdownforReferrals">
                                        <select
                                            class="input js-mytooltip text-center  form-select @error('') is-invalid @enderror"
                                            name="" id="workshop_referrals"
                                            data-mytooltip-content="<i>
                                                    Referral - 2% - repeat contracts from the same client<br>
                                                    3% - 1st contract with a new client, or with a 2-year dormant client<br>
                                                    10% - if reffered/sold by a reseller<br><br>

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
                                <td></td>
                                <td></td>
                                <td class="total-td tbl-engmt-cost" style="border-left:3px solid black">
                                    <h4 class="text-center" id="workshop_referralsTotal">-</h4>
                                </td>
                                <td class="total-td">
                                    <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                        value="{{ old('') }}" name="" id="">
                                </td>
                                <td style="background-color: #FFFFFF;" class="border border-white">
                                    <a href="javascript:void(0)" class="text-success font-18" title="Add" id="muaddButton2">
                                        <i class="fa fa-plus"></i>
                                    </a>
                                </td>
                            </tr>
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
                            <tr class="th-blue-grey-lighten" id="rowofEngagementManager">
                                <td class="title fw-bold text-dark">ENGAGEMENT MANAGER(4%)</td>
                                <td>
                                    <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                        value="{{ old('') }}" name="" id="inputforEngagementManager"
                                        style="display: none;" onblur="this.value = this.value.replace('%', '') + '%';"
                                        oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"
                                        maxlength="5" disabled>

                                    <fieldset id="dropdownforEngagementManager">
                                        <select
                                            class="input js-mytooltip text-center  form-select @error('') is-invalid @enderror"
                                            name="" id="workshop_engagementManager"
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
                                <td></td>
                                <td></td>
                                <td class="total-td tbl-engmt-cost" style="border-left:3px solid black">
                                    <h4 class="text-center" id="workshop_engagementManagerTotal">-</h4>
                                </td>
                                <td class="total-td">
                                    <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                        value="{{ old('') }}" name="" id="">
                                </td>
                                <td style="background-color: #FFFFFF;" class="border border-white">
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
                            <td style="background-color: #FFFFFF;" class="border border-white"></td>
                        </tr>
                    <!---------------CUSTOMIZATION FEE------------->
                        <tbody id="tableofCustomization">
                            <tr class="th-blue-grey-lighten-2" id="rowofCustomization">
                                <td class="title">Customization Fee</td>
                                <td>
                                    <input type="number"
                                        class="text-center fw-bold text-dark text-center form-control input-table @error('') is-invalid @enderror"
                                        value="{{ old('') }}" name="" id="workshop_CustomizationHf" max="100">
                                </td>
                                <td class="">
                                    <fieldset>
                                        <select class="input js-mytooltip  text-center form-select @error('') is-invalid @enderror" name="" id="workshop_CustomizationNoh"
                                            data-mytooltip-content="<i>
                                                # of Hours<br>
                                                0 - no customization<br><br>
                                                2 - automatic when we charge customization fee<br><br></i>"
                                            data-mytooltip-theme="dark" data-mytooltip-action="focus"
                                            data-mytooltip-direction="right" style="background-color:#ffcccc; color:red;">
                                            <option value="0" {{ old('') == '0' ? 'selected="selected"' : '' }}
                                                title="">
                                                0
                                            </option>
                                            <option value="2" {{ old('') == '2' ? 'selected="selected"' : '' }}
                                                title="">
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
                                <td class="total-td">
                                    <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                        value="{{ old('') }}" name="" id="">
                                </td>
                                <td style="background-color: #FFFFFF;" class="border border-white">
                                    <a href="javascript:void(0)" class="text-success font-18" title="Add" id="muaddButton4">
                                    <i class="fa fa-plus"></i>
                                </a>
                            </td>
                            </tr>
                        </tbody>
                    <!---------------CREATORS FEE------------------>
                        <tbody id="tableofCreator">
                            <tr class="th-blue-grey-lighten-2" id="rowofCreator">
                                <td class="title">Creators Fees (0, 500, 1K)</td>
                                <td>
                                    <fieldset>
                                        <select class="input js-mytooltip  text-center form-select @error('') is-invalid @enderror" name="" id="workshop_CreatorHf"
                                            data-mytooltip-content="<i>
                                                Creators Fee - 0 - no creators fee<br><br>
                                                500 - Creators Fee is the creator is the lead, for the 2nd session onwards<br><br>
                                                1,000 - Creators Fee if creator is NOT the lead, for the 2nd session onwards</i>"
                                            data-mytooltip-theme="dark" data-mytooltip-action="focus"
                                            data-mytooltip-direction="right" style="background-color:#ffcccc; color:red;">
                                            <option value="0" {{ old('') == '0' ? 'selected="selected"' : '' }}
                                                title="">
                                                &#8369;0
                                            </option>
                                            <option value="500" {{ old('') == '500' ? 'selected="selected"' : '' }}
                                                title="">
                                                &#8369;500
                                            </option>
                                            <option value="1000" {{ old('') == '1000' ? 'selected="selected"' : '' }}
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
                                <td>
                                    <input type="number"
                                        class="text-center form-control input-table @error('') is-invalid @enderror"
                                        value="{{ old('') }}" name="" id="workshop_CreatorNoh" max="100">
                                </td>
                                <td class=""></td>
                                <td class="total-td" style="border-left:3px solid black">
                                    <h4 class="text-center lead" id="workshop_CreatorTotal">-</h4>
                                </td>
                                <td class="total-td">
                                    <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                        value="{{ old('') }}" name="" id="">
                                </td>
                                <td style="background-color: #FFFFFF;" class="border border-white">
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
                                <h4 class="text-center" id="workshop_DesignsSubtotal">-</h4>
                            </td>
                            <td class="total-td">
                                <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                    value="{{ old('') }}" name="" id="">
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
                            <tr class="th-blue-grey-lighten-2" id="rowofLeadFacilitator">
                                <td class="title">Lead Facilitator</td>
                                <td>
                                    <input type="number"
                                        class="text-center fw-bold text-center text-dark form-control input-table @error('') is-invalid @enderror"
                                        value="{{ old('') }}" name="" id="workshop_LeadfacilitatorsHf">
                                </td>
                                <td>
                                    <input type="number"
                                        class="text-center form-control input-table @error('') is-invalid @enderror"
                                        value="{{ old('') }}" name="" id="workshop_LeadfacilitatorsNoh">
                                </td>
                                <td>
                                    <input type="number"
                                        class="text-center form-control input-table @error('') is-invalid @enderror"
                                        value="{{ old('') }}" name="" id="workshop_LeadfacilitatorsNwh">
                                </td>
                                <td class="total-td" style="border-left:3px solid black">
                                    <h4 class="text-center lead" id="workshop_LeadfacilitatorsTotal">-</h4>
                                </td>
                                <td class="total-td">
                                    <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                        value="{{ old('') }}" name="" id="">
                                </td>
                                <td style="background-color: #FFFFFF;" class="border border-white">
                                    <a href="javascript:void(0)" class="text-success font-18" title="Add" id="muaddButton6">
                                        <i class="fa fa-plus"></i>
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    <!---------------MODERATOR--------------------->
                        <tbody id="tableofModerator">
                            <tr class="th-blue-grey-lighten-2" id="rowofModerator">
                                <td class="title">Moderator (P800/P1100/P1350)</td>
                                <td>
                                    <fieldset>
                                        <select class="input js-mytooltip text-center form-select @error('') is-invalid @enderror select" name=""
                                            id="workshop_ModeratorHf" style="background-color:#ffcccc; color:red;"
                                            data-mytooltip-content="<i>
                                                <b>Moderator</b><br/>
                                                P800 - Associates<br/>
                                                P1,100 - Consultants<br/>
                                                P1,350 - Senior Consultant</i>"
                                        data-mytooltip-theme="dark" data-mytooltip-action="focus"
                                        data-mytooltip-direction="right">
                                        <option value="800" {{ old('') == '800' ? 'selected="selected"' : '' }}
                                            title="">
                                            &#8369;800
                                        </option>
                                        <option value="1100" {{ old('') == '1100' ? 'selected="selected"' : '' }}
                                            title="">
                                            &#8369;1,100
                                        </option>
                                        <option value="1350" {{ old('') == '1350' ? 'selected="selected"' : '' }}
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
                                <td>
                                    <input type="number"
                                        class="text-center  form-control input-table @error('') is-invalid @enderror"
                                        value="{{ old('') }}" name="" id="workshop_ModeratorNoh1">
                                </td>
                                <td>
                                    <input type="number"
                                        class="text-center form-control input-table @error('') is-invalid @enderror"
                                        value="{{ old('') }}" name="" id="workshop_ModeratorNwh1">
                                </td>
                                <td class="total-td" style="border-left:3px solid black">
                                    <h4 class="text-center lead" id="workshop_ModeratorTotal">-</h4>
                                </td>
                                <td class="total-td">
                                    <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                        value="{{ old('') }}" name="" id="">
                                </td>
                                <td style="background-color: #FFFFFF;" class="border border-white">
                                    <a href="javascript:void(0)" class="text-success font-18" title="Add" id="muaddButton7">
                                        <i class="fa fa-plus"></i>
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    <!---------------PRODUCER---------------------->
                        <tbody id="tableofProducer">
                            <tr class="th-blue-grey-lighten-2" id="rowofProducer">
                                <td class="title">Producer</td>
                                <td>
                                    <input type="text"
                                        class="text-center text-dark fw-bold form-control input-table @error('') is-invalid @enderror"
                                        value="{{ old('') }}" name="" id="workshop_ProducerHf">
                                </td>
                                <td>
                                    <input type="number"
                                        class="text-center form-control input-table @error('') is-invalid @enderror"
                                        value="{{ old('') }}" name="" id="workshop_ProducerNoh1">
                                </td>
                                <td>
                                    <input type="number"
                                        class="text-center form-control input-table @error('') is-invalid @enderror"
                                        value="{{ old('') }}" name="" id="workshop_ProducerNwh1">
                                </td>
                                <td class="total-td" style="border-left:3px solid black">
                                    <h4 class="text-center lead" id="workshop_ProducersTotal">-</h4>
                                </td>
                                <td class="total-td">
                                    <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                        value="{{ old('') }}" name="" id="">
                                </td>
                                <td style="background-color: #FFFFFF;" class="border border-white">
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
                                <h4 class="text-center" id="workshop_ProgramsSubtotal">-</h4>
                            </td>
                            <td class="total-td">
                                <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                    value="{{ old('') }}" name="" id="">
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
                        <tr class="th-blue-grey-lighten-2" id="rowofOffProgram">
                            <td class="title">Off-Program Fee</td>
                            <td>
                                <input type="text"
                                    class="text-center text-dark fw-bold form-control input-table @error('') is-invalid @enderror"
                                    value="{{ old('') }}" name="" id="workshop_OffprogramsHf">
                            </td>
                            <td>
                                <input type="number"
                                    class="text-center  form-control input-table @error('') is-invalid @enderror"
                                    value="{{ old('') }}" name="" id="workshop_OffprogramsNoh">
                            </td>
                            <td></td>
                            <td class="total-td" style="background-color: rgba(146, 146, 146, 0.727">
                                <h4 class="text-center" id="workshop_OffprogramsTotal">-</h4>
                            </td>
                            <td class="total-td">
                                <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                    value="{{ old('') }}" name="" id="">
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
                        <tr class="th-blue-grey-lighten-2" id="rowofProgramExpenses">
                            <td class="title">Program Expenses</td>
                            <td>
                                <input type="text"
                                    class="text-center text-dark fw-bold form-control input-table @error('') is-invalid @enderror"
                                    value="{{ old('') }}" name="" id="workshop_Programexpenses" maxlength="4">
                            </td>
                            <td></td>
                            <td></td>
                            <td class="total-td" style="background-color: rgba(146, 146, 146, 0.727">
                                <h4 class="text-center" id="workshop_ProgramexpensesTotal">-</h4>
                            </td>
                            <td class="total-td">
                                <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                    value="{{ old('') }}" name="" id="">
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
                                    value="{{ old('') }}" name="" id="">
                            </td>
                        </tr>


                </table>
            </div>
        </section>
    </div>
<!--------------------------END OF MGTSTRAT-U WORKSHOPS ENGAGEMENT COST FORM-------------------------------->

@include('form.components.mgtstratu_workshops.workshops_script.workshops_engagement_cost')
