<div class="card-header">
    <h4 class="card-title">Engagement Cost</h4>
</div>

<div class="form-body container">
    <section>
        <div class="table-responsive-md" id="no-more-tables">
            <table class="table table-bordered" id="f2f-ec-table">
                <!--------------------------TABLE HEADING TITLE------------------------------>
                <thead class="table">
                    <tr class="text-center th-blue-grey">
                        <th class="title-th" scope="col" width=15%></th>
                        <th class="title-middle" scope="col" style="font-size: 0.9rem;">NUMBER OF CONSULTANTS</th>
                        <th class="title-middle px-4" width=15% scope="col">PER DAY</th>
                        <th class="title-middle" scope="col" style="font-size: 0.9rem;">NUMBER OF DAYS</th>
                        <th class="title-middle" scope="col" style="font-size: 0.9rem;" width=10%>ADDITIONAL TRAVEL
                            DAYS *</th>
                        <th class="title-middle" scope="col" style="font-size: 0.9rem;" width=10%>NIGHT SHIFT,
                            WEEKENDS HOLIDAYS *</th>
                        <th class="title-th" scope="col" width=15%>TOTAL FEE</th>
                        <th class="title-th" scope="col" width=15%>ROSTER</th>
                        <td class="add-row border border-white" scope="col"></td>
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
                    <th class="total-td"></th>
                </tr>

                <!---------------SALE-------------------------->
                <tbody id="tableofSale">
                    <tr class="th-blue-grey-lighten-2" id="rowofSale">
                        <td class="title text-justify">Sales (4% / 5% / 6% / 7%)</td>
                        <td></td>
                        <td>
                            <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="" id="inputforSale" style="display: none;"
                            onblur="this.value = this.value.replace('%', '') + '%';"
                            oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"
                            maxlength="5" disabled>

                        <fieldset id="dropdownforSale">
                            <select
                                class="input js-mytooltip  text-center form-select @error('') is-invalid @enderror"
                                name="" id="ec_sale"
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
                        <td></td>
                        <td></td>
                        <td></td>
                        <td class="total-td tbl-engmt-cost">
                            <h4 class="text-center" id="ec_saleTotal">-</h4>
                        </td>
                        <td class="total-td">
                            <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="" id="">
                        </td>
                        <td style="background-color: #FFFFFF;" class="border border-white">
                            <a href="javascript:void(0)" class="text-success font-18" title="Add" id="ecaddButton">
                                <i class="fa fa-plus"></i>
                            </a>
                        </td>
                    </tr>
                </tbody>

                <!---------------REFERRALS--------------------->
                <tbody id="tableofReferrals">
                    <tr class="th-blue-grey-lighten-2" id="rowofReferrals">
                        <td class="title">Referral (2% / 3%)</td>
                        <td></td>
                        <td>
                            <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="" id="inputforReferrals" style="display: none;"
                            onblur="this.value = this.value.replace('%', '') + '%';"
                            oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"
                            maxlength="5" disabled>

                        <fieldset id="dropdownforReferrals">
                            <select
                                class="input js-mytooltip text-center  form-select @error('') is-invalid @enderror"
                                name="" id="referrals"
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
                        <td></td>
                        <td></td>
                        <td></td>
                        <td class="total-td tbl-engmt-cost">
                            <h4 class="text-center" id="referralsTotal">-</h4>
                        </td>
                        <td class="total-td">
                            <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="" id="">
                        </td>
                        <td style="background-color: #FFFFFF;" class="border border-white">
                            <a href="javascript:void(0)" class="text-success font-18" title="Add" id="ecaddButton2">
                                <i class="fa fa-plus"></i>
                            </a>
                        </td>
                    </tr>
                </tbody>

                <tr class="th-blue-grey-lighten-2">
                    <td class="title" colspan=""></td>
                    <td class="" colspan="5"></td>
                    <td class="title" colspan=""></td>
                    <td class="title" colspan=""></td>
                    <td style="background-color: #FFFFFF;" class="border border-white" colspan=""></td>
                </tr>

                <!--------------------------ENGAGEMENT MANAGER-------------------------------->
                <tbody id="tableofEngagementManager">
                    <tr class="th-blue-grey-lighten" id="rowofEngagementManager">
                        <td class="title fw-bold text-dark">ENGAGEMENT MANAGER(4%)</td>
                        <td></td>
                        <td>
                            <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="" id="inputforEngagementManager"
                                style="display: none;" onblur="this.value = this.value.replace('%', '') + '%';"
                                oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"
                                maxlength="5" disabled>

                            <fieldset id="dropdownforEngagementManager">
                                <select
                                    class="input js-mytooltip text-center  form-select @error('') is-invalid @enderror"
                                    name="" id="ecengagementManager"
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
                        <td></td>
                        <td></td>
                        <td></td>
                        <td class="total-td tbl-engmt-cost">
                            <h4 class="text-center" id="ecengagementManagerTotal">-</h4>
                        </td>
                        <td class="total-td">
                            <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="" id="">
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
                    <tr class="th-blue-grey-lighten" id="rowofOffsite">
                        <td class="title fw-bold text-dark">OFFSITE PC(3%/4%/5%)</td>
                        <td></td>
                        <td>
                            <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="" id="inputforOffsite"
                                style="display: none;" onblur="this.value = this.value.replace('%', '') + '%';"
                                oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"
                                maxlength="5" disabled>

                            <fieldset id="dropdownforOffsite">
                                <select
                                    class="input js-mytooltip  text-center form-select @error('') is-invalid @enderror"
                                    name="" id="ec_offsitePc" style="background-color:#ffcccc; color:red;"
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
                        <td></td>
                        <td></td>
                        <td></td>
                        <td class="total-td tbl-engmt-cost">
                            <h4 class="text-center" id="ec_offsitePcTotal">-</h4>
                        </td>
                        <td class="total-td">
                            <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="" id="">
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
                    <th style="background-color: #FFFFFF;" class="border border-white"></th>
                </tr>

                <!---------------LEAD CONSULTANT---------------->
                <tbody id="tableofLeadConsultant">
                    <tr class="th-blue-grey-lighten-2" id="rowofLeadConsultant">
                        <td class="title">Lead Consultant</td>
                        <td class="">
                            <input type="number"
                                class="text-center form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="" id="ec_LeadconsultantsNoc1" max="100">
                        </td>
                        <td class="">
                            <input type="text"
                                class="text-center fw-bold text-dark form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="" id="ec_LeadconsultantsPd">
                        </td>
                        <td class="">
                            <input type="number"
                                class="text-center form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="" id="ec_LeadconsultantsNod1">
                        </td>
                        <td class="">
                            <input type="number"
                                class="text-center form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="" id="ec_LeadconsultantsAtd1">
                        </td>
                        <td class="">
                            <input type="number"
                                class="text-center form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="" id="ec_LeadconsultantsNwh1">
                        </td>
                        <td class="total-td">
                            <h4 class="text-center lead" id="ec_LeadconsultantsTotal">-</h4>
                        </td>
                        <td class="total-td">
                            <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="" id="">
                        </td>
                        <td style="background-color: #FFFFFF;" class="border border-white"></td>
                    </tr>
                </tbody>

                <!---------------ANALYST------------------------>
                <tbody id="tableofAnalyst">
                    <tr class="th-blue-grey-lighten-2" id="rowofAnalyst">
                        <td class="title">Analyst</td>
                        <td class="">
                            <input type="number"
                                class="text-center form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="" id="ec_AnalystsNoc1" max="100">
                        </td>
                        <td class="">
                            <input type="text"
                                class="text-center fw-bold text-dark form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="" id="ec_AnalystsPd">
                        </td>
                        <td class="">
                            <input type="number"
                                class="text-center form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="" id="ec_AnalystsNod1">
                        </td>
                        <td class="">
                            <input type="number"
                                class="text-center form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="" id="ec_AnalystsAtd1">
                        </td>
                        <td class="">
                            <input type="number"
                                class="text-center form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="" id="ec_AnalystsNwh1">
                        </td>
                        <td class="total-td">
                            <h4 class="text-center lead" id="ec_AnalystsTotal">-</h4>
                        </td>
                        <td class="total-td">
                            <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="" id="">
                        </td>
                        <td style="background-color: #FFFFFF;" class="border border-white"></td>
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
                        <h4 class="text-center" id="ec_SubtotalsConsulting">-</h4>
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
                    <td class="" colspan="5"></td>
                    <td class="title" colspan=""></td>
                    <td class="title" colspan=""></td>
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
                    <td style="background-color: #FFFFFF;" class="border border-white"></td>
                </tr>

                <!---------------DESIGNER---------------------->
                <tbody id="tableofDesigner">
                    <tr class="th-blue-grey-lighten-2" id="rowofDesigner">
                        <td class="title">Designer</td>
                        <td class="">
                            <input type="number"
                                class="text-center form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="" id="ec_DesignersNoc1" max="100">
                        </td>
                        <td>
                            <input type="text"
                                class="text-center fw-bold text-dark text-center form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="" id="ec_DesignersPd" max="100">
                        </td>
                        <td class="">
                            <input type="number"
                                class="text-center form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="" id="ec_DesignersNod1">
                        </td>
                        <td class="">
                            <input type="number"
                                class="text-center form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="" id="ec_DesignersAtd1">
                        </td>
                        <td class="">
                            <input type="number"
                                class="text-center form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="" id="ec_DesignersNwh1">
                        </td>
                        <td class="total-td">
                            <h4 class="text-center lead" id="ec_DesignersTotal">-</h4>
                        </td>
                        <td class="total-td">
                            <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="" id="">
                        </td>
                        <td style="background-color: #FFFFFF;" class="border border-white"></td>
                    </tr>
                </tbody>

                <!---------------CREATOR----------------------->
                <tbody id="tableofCreator">
                    <tr class="th-blue-grey-lighten-2" id="rowofCreator">
                        <td class="title">Creators Fees (500, 1K)</td>
                        <td>
                            <input type="number"
                                class="text-center form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="" id="ec_CreatorNoc1" max="100">
                        </td>
                        <td>
                            <fieldset>
                                <select class="input js-mytooltip  text-center form-select @error('') is-invalid @enderror" name="" id="ec_CreatorPd"
                                    data-mytooltip-content="<i>
                                        Creators Fee - 0 - no creators fee<br><br>
                                        500 - Creators Fee is the creator is the lead, for the 2nd session onwards<br><br>
                                        1,000 - Creators Fee if creator is NOT the lead, for the 2nd session onwards</i>"
                                    data-mytooltip-theme="dark" data-mytooltip-action="focus"
                                    data-mytooltip-direction="right" style="background-color:#ffcccc; color:red;">
                                    <option value="0" {{ old('') == '0' ? 'selected="selected"' : '' }} title="">
                                        &#8369;0
                                    </option>
                                    <option value="500" {{ old('') == '500' ? 'selected="selected"' : '' }} title="">
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
                        <td>
                            <input type="number"
                                class="text-center form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="" id="ec_CreatorNod1" max="100">
                        </td>
                        <td class=""></td>
                        <td class=""></td>
                        <td class="total-td">
                            <h4 class="text-center lead" id="ec_CreatorTotal">-</h4>
                        </td>
                        <td class="total-td">
                            <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="" id="">
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
                        <h4 class="text-center" id="ec_DesignsSubtotal">-</h4>
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
                    <td class="" colspan="5"></td>
                    <td class="title" colspan=""></td>
                    <td class="title" colspan=""></td>
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
                    <td style="background-color: #FFFFFF;" class="border border-white"></td>
                </tr>

                <!---------------LEAD FACILITATOR-------------->
                <tbody id="tableofLeadFacilitator">
                    <tr class="th-blue-grey-lighten-2" id="rowofLeadFacilitator">
                        <td class="title">Lead Facilitator</td>
                        <td>
                            <input type="number"
                                class="text-center form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="" id="ec_LeadfacilitatorsNoc1" max="100">
                        </td>
                        <td>
                            <input type="text"
                                class="text-center fw-bold text-center text-dark form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="" id="ec_LeadfacilitatorsPd">
                        </td>
                        <td>
                            <input type="number"
                                class="text-center form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="" id="ec_LeadfacilitatorsNod1">
                        </td>
                        <td>
                            <input type="number"
                                class="text-center form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="" id="ec_LeadfacilitatorsAtd1">
                        </td>
                        <td>
                            <input type="number"
                                class="text-center form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="" id="ec_LeadfacilitatorsNwh1">
                        </td>
                        <td class="total-td">
                            <h4 class="text-center lead" id="ec_LeadfacilitatorsTotal">-</h4>
                        </td>
                        <td class="total-td">
                            <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="" id="">
                        </td>
                        <td style="background-color: #FFFFFF;" class="border border-white"></td>
                    </tr>
                </tbody>

                <!---------------CO-FACILITATOR---------------->
                <tbody id="tableofCoFacilitator">
                    <tr class="th-blue-grey-lighten-2" id="rowofCoFacilitator">
                        <td class="title">Co-Facilitator / Resource Speaker</td>
                        <td>
                            <input type="number"
                                class="text-center text-dark form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="" id="ec_CofacilitatorsNoc1" max="100">
                        </td>
                        <td>
                            <input type="text"
                                class="text-center text-dark fw-bold form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="" id="ec_CofacilitatorsPd">
                        </td>
                        <td>
                            <input type="number"
                                class="text-center text-dark form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="" id="ec_CofacilitatorsNod1">
                        </td>
                        <td>
                            <input type="number"
                                class="text-center text-dark form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="" id="ec_CofacilitatorsAtd1">
                        </td>
                        <td>
                            <input type="number"
                                class="text-center text-dark form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="" id="ec_CofacilitatorsNwh1">
                        </td>
                        <td class="total-td">
                            <h4 class="text-center lead" id="ec_CofacilitatorsTotal">-</h4>
                        </td>
                        <td class="total-td">
                            <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="" id="">
                        </td>
                        <td style="background-color: #FFFFFF;" class="border border-white"></td>
                    </tr>
                </tbody>

                <!---------------ACTION LEARNING COACH--------->
                <tbody id="tableofActionLearningCoach">
                    <tr class="th-blue-grey-lighten-2" id="rowofActionLearningCoach">
                        <td class="title">Action Learning Coach</td>
                        <td>
                            <input type="number"
                                class="text-dark text-center form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="" id="ec_ActionlearningcoachNoc1" max="100">
                        </td>
                        <td>
                            <input type="text"
                                class="text-center text-dark fw-bold form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="" id="ec_ActionlearningcoachPd">
                        </td>
                        <td>
                            <input type="number"
                                class="text-dark text-center form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="" id="ec_ActionlearningcoachNod1">
                        </td>
                        <td>
                            <input type="number"
                                class="text-dark text-center form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="" id="ec_ActionlearningcoachAtd1">
                        </td>
                        <td>
                            <input type="number"
                                class="text-dark text-center form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="" id="ec_ActionlearningcoachNwh1">
                        </td>
                        <td class="total-td">
                            <h4 class="text-center lead" id="ec_ActionlearningcoachTotal">-</h4>
                        </td>
                        <td class="total-td">
                            <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="" id="">
                        </td>
                        <td style="background-color: #FFFFFF;" class="border border-white"></td>
                    </tr>
                </tbody>

                <!---------------MARSHAL----------------------->
                <tbody id="tableofMarshal">
                    <tr class="th-blue-grey-lighten-2" id="rowofMarshal">
                        <td class="title">Marshal</td>
                        <td>
                            <input type="number"
                                class="text-center form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="" id="ec_MarshalNoc1">
                        </td>
                        <td>
                            <input type="text"
                                class="text-center text-dark fw-bold form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="" id="ec_MarshalPd">
                        </td>
                        <td>
                            <input type="number"
                                class="text-center  form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="" id="ec_MarshalNod1">
                        </td>
                        <td>
                            <input type="number"
                                class="text-center form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="" id="ec_MarshalAtd1">
                        </td>
                        <td>
                            <input type="number"
                                class="text-center  form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="" id="ec_MarshalNwh1">
                        </td>
                        <td class="total-td">
                            <h4 class="text-center lead" id="ec_MarshalTotal">-</h4>
                        </td>
                        <td class="total-td">
                            <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="" id="">
                        </td>
                        <td style="background-color: #FFFFFF;" class="border border-white"></td>
                    </tr>
                </tbody>

                <!---------------ONSITE PC--------------------->
                <tbody id="tableofOnsitePC">
                    <tr class="th-blue-grey-lighten-2" id="rowofOnsitePC">
                        <td class="title">On-site PC (P4400/P6600/P8500)</td>
                        <td>
                            <input type="number"
                                class="text-center form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="" id="ec_OnsitepcNoc1">
                        </td>
                        <td>
                            <fieldset>
                                <select class="input js-mytooltip text-center form-select @error('') is-invalid @enderror select" name=""
                                    id="ec_OnsitepcPd" style="background-color:#ffcccc; color:red;"
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
                        <td>
                            <input type="number"
                                class="text-center  form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="" id="ec_OnsitepcNod1">
                        </td>
                        <td>
                            <input type="number"
                                class="text-center form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="" id="ec_OnsitepcAtd1">
                        </td>
                        <td>
                            <input type="number"
                                class="text-center form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="" id="ec_OnsitepcNwh1">
                        </td>
                        <td class="total-td">
                            <h4 class="text-center lead" id="ec_OnsitepcTotal">-</h4>
                        </td>
                        <td class="total-td">
                            <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="" id="">
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
                        <h4 class="text-center" id="ec_ProgramsSubtotal">-</h4>
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
                    <td class="" colspan="5"></td>
                    <td class="title" colspan=""></td>
                    <td class="title" colspan=""></td>
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
                    <td style="background-color: #FFFFFF;" class="border border-white"></td>
                </tr>

                <tbody id="tableofDocumentor">
                    <tr class="th-blue-grey-lighten-2" id="rowofDocumentor">
                        <td class="title">Documentor</td>
                        <td>
                            <input type="number" class="text-center text-dark fw-bold form-control input-table @error('') is-invalid @enderror" value="{{ old('') }}" name="" id="ec_DocumentorsNoc1" max="100" >
                        </td>
                        <td>
                            <input type="text"
                                class="text-center text-dark fw-bold form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="" id="ec_DocumentorsPd">
                        </td>
                        <td>
                            <input type="number"
                                class="text-center text-dark fw-bold form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="" id="ec_DocumentorsNod1">
                        </td>
                        <td>
                            <input type="number"
                                class="text-center text-dark fw-bold form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="" id="ec_DocumentorsAtd1">
                        </td>
                        <td>
                            <input type="number"
                                class="text-center text-dark fw-bold form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="" id="ec_DocumentorsNwh1">
                        </td>
                        <td class="total-td" style="background-color: rgba(146, 146, 146, 0.727">
                            <h4 class="text-center" id="ec_DocumentorsTotal">-</h4>
                        </td>
                        <td class="total-td">
                            <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="" id="">
                        </td>
                        <td style="background-color: #FFFFFF;" class="border border-white"></td>
                    </tr>
                </tbody>

                {{-- break --}}
                <tr class="th-blue-grey-darken-4">
                    <td class="title" colspan=""></td>
                    <td class="" colspan="5"></td>
                    <td class="title" colspan=""></td>
                    <td class="title" colspan=""></td>
                    <td style="background-color: #FFFFFF;" class="border border-white"></td>
                </tr>

                <!--------------------------PER DIEM----------------------------------------->
                <tr class="th-blue-grey-lighten" id="rowofPerDiem">
                    <th class="title px-4 text-dark">5. PER DIEM</th>
                    <td>
                        <input type="number"
                            class="text-center form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="" id="ec_PerdiemNoc" max="100">
                    </td>
                    <td>
                        <input type="text"
                            class="text-center text-dark fw-bold form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="" id="ec_PerdiemPd">
                    </td>
                    <td>
                        <input type="number"
                            class="text-center text-dark fw-bold form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="" id="ec_PerdiemNod">
                    </td>
                    <td></td>
                    <td></td>
                    <td class="total-td" style="background-color: rgba(146, 146, 146, 0.727">
                        <h4 class="text-center" id="ec_PerdiemTotal">-</h4>
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
                    <td class="" colspan="5"></td>
                    <td class="title" colspan=""></td>
                    <td class="title" colspan=""></td>
                    <td style="background-color: #FFFFFF;" class="border border-white"></td>
                </tr>

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
                    <td style="background-color: #FFFFFF;" class="border border-white"></td>
                </tr>

                <tr class="th-blue-grey-lighten-2" id="rowofOffProgram">
                    <td class="title">Off-Program fee</td>
                    <td>
                        <input type="number"
                            class="input js-mytooltip text-center text-dark fw-bold form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="" id="ec_OffprogramsNoc" max="100"
                            data-mytooltip-content="<i>
                                        - For single or series of programs<br>
                                        - One time only<br>
                                        - Per person<br>
                                        </i>"
                            data-mytooltip-theme="dark" data-mytooltip-action="focus"
                            data-mytooltip-direction="right">
                    </td>
                    <td>
                        <input type="text"
                            class="text-center text-dark fw-bold form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="" id="ec_OffprogramsPd">
                    </td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td class="total-td" style="background-color: rgba(146, 146, 146, 0.727">
                        <h4 class="text-center" id="ec_OffprogramsTotal">-</h4>
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
                    <td class="" colspan="5"></td>
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
                    <td></td>
                    <td></td>
                    <td class="total-td"></td>
                    <td class="total-td"></td>
                    <td style="background-color: #FFFFFF;" class="border border-white"></td>
                </tr>

                <tr class="th-blue-grey-lighten-2">
                    <td class="title">Program Expenses</td>
                    <td></td>
                    <td>
                        <input type="text"
                            class="text-center text-dark fw-bold form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="" id="ec_Programexpenses" maxlength="4">
                    </td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td class="total-td" style="background-color: rgba(146, 146, 146, 0.727">
                        <h4 class="text-center" id="ec_ProgramexpensesTotal">-</h4>
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
                    <td class="" colspan="5"></td>
                    <td class="title" colspan=""></td>
                    <td class="title" colspan=""></td>
                    <td style="background-color: #FFFFFF;" class="border border-white"></td>
                </tr>

                <!--------------------------TOTAL-------------------------------------------->
                <tr class="table-active">
                    <td class="fw-bold text-uppercase text-dark fst-italic overall-total-start">TOTAL</td>
                    <td class="overall-total-middle"></td>
                    <td class="overall-total-middle"></td>
                    <td class="overall-total-middle"></td>
                    <td class="overall-total-middle"></td>
                    <td class="overall-total-middle" style="border:3px solid black"></td>
                    <td class="overall-total-end">
                        <h4 class="text-center text-danger" id="ec_Totals">-</h4>
                    </td>
                    <td class="overall-total-end"style="border:3px solid black">
                        <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="" id="">
                    </td>
                </tr>

            </table>
        </div>
    </section>
</div>


<!--------------------------F2F ENGAGEMENT COST SCRIPT ---------------------->
@include('form.components.f2f_engagement.f2f_script.f2f_engagement_cost')
