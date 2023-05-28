<div class="card-header">
    <h4 class="card-title">Engagement Cost</h4>
</div>

<div class="form-body container">
    <section>
        <div class="table-responsive-md" id="no-more-tables">
            <table class="table table-bordered" id="engagementCost">
                <!-------------- HEADINGS -------------->
                    <thead class="table">
                        <tr class="text-center th-blue-grey">
                            <th class="title-th" scope="col" width=20%></th>
                            <th class="title-middle" scope="col" style="font-size: 0.9rem;"># OF COACHES</th>
                            <th class="title-middle px-4" scope="col">SESSION FEES</th>
                            <th class="title-middle" scope="col" style="font-size: 0.9rem;"># OF SESSIONS (AL # OF HALF-DAYS)</th>
                            <th class="title-middle" scope="col" style="font-size: 0.9rem;" width=10%>NIGHT SHIFT,
                                WEEKENDS HOLIDAYS *</th>
                            <th class="title-middle" scope="col" style="font-size: 0.9rem;">TOTAL FEE</th>
                            <th class="title-middle" scope="col" width=20% style="font-size: 0.9rem;" width=10%>ROSTER</th>
                            {{-- <th class="title-middle" scope="col" width=20% style="font-size: 0.9rem;" width=10%>NOTES</th> --}}
                        </tr>
                    </thead>
                <!-------------- HEADINGS END -------------->

                <!-------------- COMMISSION -------------->
                    <tr class="th-blue-grey-lighten">
                        <th class="px-4 title  ">COMMISSION</th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th class="total-td"></th>
                        <th class="total-td"></th>
                    </tr>

                    <tbody id="commission">
                        <tr class="th-blue-grey-lighten-2 sum" id="customizationFee">
                            <td class="title">Sales (4% / 5% / 6% / 7%)</td>

                            <td>
                            </td>

                            <td>
                                <fieldset>
                                    <select class="input js-mytooltip package-fees form-select @error('') is-invalid @enderror"
                                        name="s_session_fees"
                                        id="SF1"
                                        data-mytooltip-content="<i>For large engagements, with EMs: <br>
                                            4% - discounted<br>
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
                                        data-mytooltip-direction="bottom"
                                        style="background-color:#ffcccc; color:red;">
                                        <option value="0" {{ $coachings->s_session_fees == '0' ? 'selected="selected"' : '' }} selected>
                                            0%
                                        </option>
                                        <option value="4" {{ $coachings->s_session_fees == '4' ? 'selected="selected"' : '' }} >
                                            4%
                                        </option>
                                        <option value="5" {{ $coachings->s_session_fees == '5' ? 'selected="selected"' : '' }} >
                                            5%
                                        </option>
                                        <option value="6" {{ $coachings->s_session_fees == '6' ? 'selected="selected"' : '' }} >
                                            6%
                                        </option>
                                        <option value="7" {{ $coachings->s_session_fees == '7' ? 'selected="selected"' : '' }} >
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

                            <td>
                            </td>

                            <td>
                            </td>

                            <td class="total-td">
                                    <h4 class="text-center lead total" id="total1">0</h4>
                            </td>
                            <td class="total-td">
                                <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                    value="{{ $coachings->s_roster }}" name="s_roster" id="">
                            </td>
                            <td style="background-color: #FFFFFF;" class="border border-white"><a href="javascript:void(0)"
                                class="text-success font-18" title="Add" id="addBtn1"><i class="fa fa-plus"></i></a>
                            </td>
                        </tr>
                    </tbody>

                    <tbody id="commission">
                        <tr class="th-blue-grey-lighten-2 sum" id="customizationFee">
                            <td class="title">Referral (2% / 3%)</td>

                            <td>
                            </td>

                            <td>
                                <fieldset>
                                    <select class="input js-mytooltip package-fees form-select @error('') is-invalid @enderror"
                                        name="r_session_fees"
                                        id="ef_LeadconsultantHf"
                                        data-mytooltip-content="<i>Referral - 2% - repeat contracts from the same client
                                            3% - 1st contract with a new client, or with a 2-year dormant client
                                            <br><br>
                                            When in doubt, check with Joi on who referror is.
                                        </i>"
                                        data-mytooltip-theme="dark"
                                        data-mytooltip-action="focus"
                                        data-mytooltip-direction="bottom"
                                        style="background-color:#ffcccc; color:red;">
                                        <option value="0" {{ $coachings->r_session_fees == '0' ? 'selected="selected"' : '' }} selected>
                                            0%
                                        </option>
                                        <option value="2" {{ $coachings->r_session_fees == '2' ? 'selected="selected"' : '' }} >
                                            2%
                                        </option>
                                        <option value="3" {{ $coachings->r_session_fees == '3' ? 'selected="selected"' : '' }} >
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

                            <td>
                            </td>

                            <td>
                            </td>

                            <td class="total-td">
                                    <h4 class="text-center lead total" id="total2">0</h4>
                            </td>
                            <td class="total-td">
                                <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                    value="{{ $coachings->r_roster }}"name="r_roster" id="">
                            </td>
                            <td style="background-color: #FFFFFF;" class="border border-white"><a href="javascript:void(0)"
                                class="text-success font-18" title="Add" id="addBtn1"><i class="fa fa-plus"></i></a>
                            </td>
                        </tr>
                    </tbody>

                    <tbody id="commission">
                        <tr class="th-blue-grey-lighten-2 sum" id="customizationFee">
                            <td class="title text-uppercase fw-bold">Engagement Manager (4%)</td>

                            <td>
                            </td>

                            <td>
                                <fieldset>
                                    <select class="input js-mytooltip package-fees form-select @error('') is-invalid @enderror"
                                        name="em_session_fees"
                                        id="SF3"
                                        data-mytooltip-content="<i>
                                            Engagement Manager - 4% - all Key Accounts and large engagements <br><br>

                                            Large engagments: large scale consulting, or a series of at least 8 virtual sessions under 1 contract involving a roster of at least 2 people
                                        </i>"
                                        data-mytooltip-theme="dark"
                                        data-mytooltip-action="focus"
                                        data-mytooltip-direction="bottom"
                                        style="background-color:#ffcccc; color:red;">
                                        <option value="0" {{ $coachings->em_session_fees == '0' ? 'selected="selected"' : '' }} selected>
                                            0%
                                        </option>
                                        <option value="4" {{ $coachings->em_session_fees == '4' ? 'selected="selected"' : '' }} >
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

                            <td>
                            </td>

                            <td>
                            </td>

                            <td class="total-td">
                                    <h4 class="text-center lead total" id="total3">0</h4>
                            </td>
                            <td class="total-td">
                                <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                    value="{{ $coachings->em_roster }}"name="em__roster" id="">
                            </td>
                            <td style="background-color: #FFFFFF;" class="border border-white"><a href="javascript:void(0)"
                                class="text-success font-18" title="Add" id="addBtn1"><i class="fa fa-plus"></i></a>
                            </td>
                        </tr>
                    </tbody>

                    {{-- SUBTOTAL --}}
                    <tr class="commission">
                        <td class="title fw-bold text-dark fst-italic">Subtotal</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td class="total-td" style="background-color: rgba(146, 146, 146, 0.727)">
                            <h4 class="text-center subtotal" id='ec_subtotal'>0</h4>
                        </td>
                        <td class="total-td">
                            <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                value="{{ $coachings->subtotal_roster }}"
                                name="subtotal_roster" id="">
                        </td>
                        <td class="border border-white"></td>
                    </tr>
                <!-------------- COMMISSION END -------------->

                <!-------------- TOTAL -------------->
                    <tr class="table-active">
                        <td class="fw-bold text-uppercase text-dark fst-italic overall-total-start">total package</td>
                        <td class="overall-total-middle"></td>
                        <td class="overall-total-middle"></td>
                        <td class="overall-total-middle"></td>
                        <td class="overall-total-middle"></td>
                        <td class="overall-total-end table-warning">
                            <input type="number" class="tf-f34 form-control text-center text-danger fw-bolder input-table @error('') is-invalid @enderror"
                            value="{{ $coachings->engagement_cost_total }}" name="engagement_cost_total" id="mg_input_totalPackages" style="font-size: 20px;">
                        </td>
                        <td class="overall-total-end">
                            <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                value="{{ $coachings->total_package_roster }}" name="total_package_roster" id="">
                        </td>
                    </tr>
                <!-------------- END TOTAL -------------->

                </table>

        </div>
    </section>
</div>

<script>
$('input[type="number"]').on('input', function () {
    this.value = !!this.value && Math.abs(this.value) >= 0 ? Math.abs(this.value) : null
});//

$('input[type="number"]').attr('min', '0');

</script>
