<!------------ CARD HEADER ------------>
<div class="card-header">
    <h4 class="card-title">Engagement Fees</h4>
</div>

<!------------ FORM BODY ------------>
<div class="form-body container">
    <section>
        <div class="table-responsive" id="no-more-tables" data-animation="slideHorz">
            <table class="table table-bordered" id="engagement-fees">
            <!----------------------------------------------------------------TABLE HEADING TITLE---------------------------------------------------------------------->
                <thead class="table-dark">
                    <b>
                        <tr class="text-center">
                            <th class="title-th" scope="col" width=20%></th>
                            <th class="title-middle" scope="col" style="font-size: 0.9rem;"># OF COACHES</th>
                            <th class="title-middle" scope="col" style="font-size: 0.9rem;">DAILY FEES</th>
                            <th class="title-middle" scope="col" style="font-size: 0.9rem;" width=10%># OF SESSIONS (AL # OF HALF-DAYS)</th>
                            <th class="title-middle" scope="col" style="font-size: 0.9rem;" width=10%>NIGHT SHIFT,
                                WEEKENDS HOLIDAYS *</th>
                            <th class="title-th" scope="col" width=15%>TOTAL FEE</th>
                            <th class="title-th" scope="col" width=15%>NOTES</th>
                            <td class="add-row border border-white"> </td>
                        </tr>
                    </b>
                </thead>

            <!-------------------- CONSULTING/DESIGN ----------------------->
                <tr class="">
                    <th class="px-4 title table-light">
                        <b>1. CONSULTING/DESIGN</b>
                    </th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th class="table-light total-td"></th>
                    <th class="table-light total-td"></th>
                    <td class="border border-white"> </td>
                </tr>

                <tbody class="sum" id="">
                    <tr class="table-warning">
                        <td class="title table-light">
                            <input type="text" class="d-none" value="Lead Consultant" name="fee_type[]" readonly>
                            Consulting and/or Design (&#8369;5k / &#8369;6.25k)
                        </td>

                        <td data-title="# OF CONSULTANTS">
                            <input type="text"
                                class="number-coaches input js-mytooltip input-table form-control commanumber @error('') is-invalid @enderror"
                                value="{{ $coachings->cd_num_coaches }}"
                                name="cd_num_of_coaches"
                                id=""
                                data-type="currency">
                        </td>

                        <td>
                            <fieldset>
                                <select class="daily-fees text-center form-select input js-mytooltip @error('') is-invalid @enderror" name="cd_daily_fees" id="" data-mytooltip-content="<i> Consulting - &#8369;5,000 - Consultants <br> &#8369;6,250 - Senior Consultants</i>" data-mytooltip-theme="dark" data-mytooltip-action="focus" data-mytooltip-direction="right" style="background-color:#ffcccc; color:red;">
                                    <option value="5000" {{ $coachings->cd_daily_fees == '5000' ? 'selected="selected"' : '' }}>
                                        &#8369;5,000
                                    </option>
                                    <option value="6250" {{ $coachings->cd_daily_fees == '6250' ? 'selected="selected"' : '' }}>
                                        &#8369;6,250
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
                            <input type="text" class="number-session form-control input-table input js-mytooltip commanumber @error('') is-invalid @enderror" value="{{ $coachings->cd_num_of_sessions }}" name="cd_num_of_sessions" id="" data-type="currency">
                        </td>

                        <td>
                            <input type="text" class="nswh form-control input-table commanumber @error('') is-invalid @enderror" value="{{ $coachings->cd_nswh }}" name="cd_nswh" id="" data-type="currency">
                        </td>

                        <td class="total-td table-light">
                            <h4 class="text-center lead total" id="CDTotal">-</h4>
                        </td>

                        <td class="total-td table-light">
                            <textarea class="form-control input-table @error('') is-invalid @enderror" value="{{ $coachings->cd_notes }}" name="cd_notes" id="" rows="2" cols="55"></textarea>
                        </td>
                        
                        <td style="background-color: #FFFFFF;" class="border border-white">
                            <a href="javascript:void(0)" class="text-success font-18" title="Add" id="addBtn" onclick="$('#CeAddBtn').trigger('click')">
                                <i class="fa fa-plus"></i>
                            </a>
                        </td>
                    </tr>
                </tbody>

                <tr class="consulting">
                    <td class="title fw-bold text-dark fst-italic table-light">Subtotal</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td class="total-td" style="background-color: rgba(146, 146, 146, 0.727)">
                        <h4 class="text-center subtotal" id="CDSubtotal">-</h4>
                    </td>
                    <td class="total-td table-light"></td>
                    <td class="border border-white add-row"></td>
                </tr>
            <!-------------------- END CONSULTING/DESIGN ----------------------->

            <!-------------------- CONSULTING/DESIGN ----------------------->
                <tr class="">
                    <th class="px-4 title table-light">
                        <b>2. COACHING</b>
                    </th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th class="table-light total-td"></th>
                    <th class="table-light total-td"></th>
                    <td class="border border-white"> </td>
                </tr>

                <tbody class="sum" id="">
                    <tr class="table-warning">
                        <td class="title table-light">
                            <input type="text" class="d-none" value="" name="fee_type[]" readonly>
                            Executive Coaching
                        </td>

                        <td data-title="# OF CONSULTANTS">
                            <input type="text"
                                class="number-coaches input js-mytooltip input-table form-control commanumber @error('') is-invalid @enderror"
                                value="{{ $coachings->ec_num_of_coaches }}"
                                name="ec_num_of_coaches"
                                id=""
                                data-type="currency">
                        </td>

                        <td>
                            <fieldset>
                                <select class="daily-fees text-center form-select input js-mytooltip @error('') is-invalid @enderror" name="ec_daily_fees" id="" data-mytooltip-content="<i> Consulting - &#8369;5,000 - Consultants <br> &#8369;6,250 - Senior Consultants</i>" data-mytooltip-theme="dark" data-mytooltip-action="focus" data-mytooltip-direction="right" style="background-color:#ffcccc; color:red;">
                                    <option value="20000" {{ $coachings->ec_daily_fees == '20000' ? 'selected="selected"' : '' }}>
                                        &#8369;20,000
                                    </option>
                                    <option value="24000" {{ $coachings->ec_daily_fees == '24000' ? 'selected="selected"' : '' }}>
                                        &#8369;24,000
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
                            <input type="text" class="number-session form-control input-table input js-mytooltip commanumber @error('') is-invalid @enderror" value="{{ $coachings->ec_num_of_sessions }}" name="ec_num_of_sessions" id="" data-type="currency">
                        </td>

                        <td>
                            <input type="text" class="nswh form-control input-table commanumber @error('') is-invalid @enderror" value="{{ $coachings->ec_nswh }}" name="ec_nswh" id="" data-type="currency">
                        </td>

                        <td class="total-td table-light">
                            <h4 class="text-center lead total">-</h4>
                        </td>

                        <td class="total-td table-light">
                            <textarea class="form-control input-table @error('') is-invalid @enderror" value="{{ $coachings->ec_notes }}" name="ec_notes" id="" rows="2" cols="55"></textarea>
                        </td>
                        
                        <td style="background-color: #FFFFFF;" class="border border-white">
                            <a href="javascript:void(0)" class="text-success font-18" title="Add" id="addBtn" onclick="$('#CeAddBtn').trigger('click')">
                                <i class="fa fa-plus"></i>
                            </a>
                        </td>
                    </tr>
                </tbody>

                <tbody class="sum" id="">
                    <tr class="table-warning">
                        <td class="title table-light">
                            <input type="text" class="d-none" value="" name="fee_type[]" readonly>
                            Performance Development Coaching
                        </td>

                        <td data-title="# OF CONSULTANTS">
                            <input type="text"
                                class="number-coaches input js-mytooltip input-table form-control commanumber @error('') is-invalid @enderror"
                                value="{{ $coachings->pdc_num_of_coaches }}"
                                name="pdc_num_of_coaches"
                                id=""
                                data-type="currency">
                        </td>

                        <td>
                            <input type="text" class="daily-fees form-control input-table input js-mytooltip commanumber @error('') is-invalid @enderror" value="{{ $coachings->pdc_daily_fees }}" name="pdc_daily_fees" id="" data-type="currency">
                        </td>

                        <td>
                            <input type="text" class="number-session form-control input-table input js-mytooltip commanumber @error('') is-invalid @enderror" value="{{ $coachings->pdc_num_of_sessions }}" name="pdc_num_of_sessions" id="" data-type="currency">
                        </td>

                        <td>
                            <input type="text" class="nswh form-control input-table commanumber @error('') is-invalid @enderror" value="{{ $coachings->pdc_nswh }}" name="pdc_nswh" id="" data-type="currency">
                        </td>

                        <td class="total-td table-light">
                            <h4 class="text-center lead total">-</h4>
                        </td>

                        <td class="total-td table-light">
                            <textarea class="form-control input-table @error('') is-invalid @enderror" value="{{ $coachings->pdc_notes }}" name="pdc_notes" id="" rows="2" cols="55"></textarea>
                        </td>
                        
                        <td style="background-color: #FFFFFF;" class="border border-white">
                            <a href="javascript:void(0)" class="text-success font-18" title="Add" id="addBtn" onclick="$('#CeAddBtn').trigger('click')">
                                <i class="fa fa-plus"></i>
                            </a>
                        </td>
                    </tr>
                </tbody>

                <tbody class="sum" id="">
                    <tr class="table-warning">
                        <td class="title table-light">
                            <input type="text" class="d-none" value="" name="fee_type[]" readonly>
                            Gallup Strengths Coaching
                        </td>

                        <td data-title="# OF CONSULTANTS">
                            <input type="text"
                                class="number-coaches input js-mytooltip input-table form-control commanumber @error('') is-invalid @enderror"
                                value="{{ $coachings->gsc_num_of_coaches }}"
                                name="gsc_num_of_coaches"
                                id=""
                                data-type="currency">
                        </td>

                        <td>
                            <input type="text" class="daily-fees form-control input-table input js-mytooltip commanumber @error('') is-invalid @enderror" value="{{ $coachings->gsc_daily_fees }}" name="gsc_daily_fees" id="" data-type="currency">
                        </td>

                        <td>
                            <input type="text" class="number-session form-control input-table input js-mytooltip commanumber @error('') is-invalid @enderror" value="{{ $coachings->gsc_num_of_sessions }}" name="gsc_num_of_sessions" id="" data-type="currency">
                        </td>

                        <td>
                            <input type="text" class="nswh form-control input-table commanumber @error('') is-invalid @enderror" value="{{ $coachings->gsc_nswh }}" name="gsc_nswh" id="" data-type="currency">
                        </td>

                        <td class="total-td table-light">
                            <h4 class="text-center lead total">-</h4>
                        </td>

                        <td class="total-td table-light">
                            <textarea class="form-control input-table @error('') is-invalid @enderror" value="{{ $coachings->gsc_notes }}" name="gsc_notes" id="" rows="2" cols="55"></textarea>
                        </td>
                        
                        <td style="background-color: #FFFFFF;" class="border border-white">
                            <a href="javascript:void(0)" class="text-success font-18" title="Add" id="addBtn" onclick="$('#CeAddBtn').trigger('click')">
                                <i class="fa fa-plus"></i>
                            </a>
                        </td>
                    </tr>
                </tbody>

                <tbody class="sum" id="">
                    <tr class="table-warning">
                        <td class="title table-light">
                            <input type="text" class="d-none" value="" name="fee_type[]" readonly>
                            WIAL Action Learning Team Coaching
                        </td>

                        <td data-title="# OF CONSULTANTS">
                            <input type="text"
                                class="number-coaches input js-mytooltip input-table form-control commanumber @error('') is-invalid @enderror"
                                value="{{ $coachings->waltc_num_of_coaches }}"
                                name="waltc_num_of_coaches"
                                id=""
                                data-type="currency">
                        </td>

                        <td>
                            <input type="text" class="daily-fees form-control input-table input js-mytooltip commanumber @error('') is-invalid @enderror" value="{{ $coachings->waltc_daily_fees }}" name="waltc_daily_fees" id="" data-type="currency">
                        </td>

                        <td>
                            <input type="text" class="number-session form-control input-table input js-mytooltip commanumber @error('') is-invalid @enderror" value="{{ $coachings->waltc_num_of_sessions }}" name="waltc_num_of_sessions" id="" data-type="currency">
                        </td>

                        <td>
                            <input type="text" class="nswh form-control input-table commanumber @error('') is-invalid @enderror" value="{{ $coachings->waltc_nswh }}" name="waltc_nswh" id="" data-type="currency">
                        </td>

                        <td class="total-td table-light">
                            <h4 class="text-center lead total">-</h4>
                        </td>

                        <td class="total-td table-light">
                            <textarea class="form-control input-table @error('') is-invalid @enderror" value="{{ $coachings->waltc_notes }}" name="waltc_notes" id="" rows="2" cols="55"></textarea>
                        </td>
                        
                        <td style="background-color: #FFFFFF;" class="border border-white">
                            <a href="javascript:void(0)" class="text-success font-18" title="Add" id="addBtn" onclick="$('#CeAddBtn').trigger('click')">
                                <i class="fa fa-plus"></i>
                            </a>
                        </td>
                    </tr>
                </tbody>

                <tr class="coaching">
                    <td class="title fw-bold text-dark fst-italic table-light">Subtotal</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td class="total-td" style="background-color: rgba(146, 146, 146, 0.727)">
                        <h4 class="text-center subtotal" id="CSubtotal">-</h4>
                    </td>
                    <td class="total-td table-light"></td>
                    <td class="border border-white add-row"></td>
                </tr>
            <!-------------------- END CONSULTING/DESIGN ----------------------->

            <!----------------------------------------------------------------TOTAL PACKAGE---------------------------------------------------------------------->
                <tr class="table-active overall-total">
                    <td class="table-light text-uppercase text-dark fst-italic fw-bold overall-total-start">
                        <b>TOTAL STANDARD FEES</b>
                    </td>
                    <td class="overall-total-middle"></td>
                    <td class="overall-total-middle"></td>
                    <td class="overall-total-middle"></td>
                    <td class="overall-total-middle"></td>
                    <td class="overall-total-end" style="background-color: rgba(146, 146, 146, 0.727)">
                        <h4 class="text-center fw-bold text-danger" id="total-standard">-</h4>
                    </td>
                    <td class="overall-total-end"></td>
                </tr>

                <tr class="table-active">
                    <td class="table-light fw-bold text-dark text-uppercase fst-italic overall-total-start">
                        <input type="text" class="d-none" value="Discounts" name="fee_type[]" readonly>
                        <b>Discount given (if any)</b>
                    </td>
                    <td class="overall-total-middle">
                        <input type="text" class="d-none" value=" " name="fee_consultant_num[]" readonly>
                    </td>
                    <td class="overall-total-middle table-warning">
                        <input type="text"
                            class="hf-c32 form-control input-table text-center @error('') is-invalid @enderror"
                            value="{{ $coachings->dg_percentage }}" name="dg_percentage" id="input-discount" readonly>
                    </td>
                    <td class="overall-total-middle">
                        <input type="text" class="d-none" value=" " name="fee_hour_num[]" readonly>
                    </td>
                    <td class="overall-total-middle">
                        <input type="text" class="d-none" value=" " name="fee_nswh[]" readonly>
                    <input type="text" class="" value=" " name="nswh_percent[]" hidden>
                    </td>
                    <td class="overall-total-end"></td>
                    <td class="overall-total-end">
                        <textarea class="form-control input-table @error('') is-invalid @enderror"
                            value="{{ $coachings->dg_notes }}" name="dg_notes" id="" rows="2" cols="55"></textarea>
                    </td>
                </tr>

                <tr class="table-active">
                    <td class="table-light fw-bold text-uppercase text-dark fst-italic overall-total-start">
                        <b>Total Package</b>
                    </td>
                    <td class="overall-total-middle"></td>
                    <td class="overall-total-middle"></td>
                    <td class="overall-total-middle"></td>
                    <td class="overall-total-middle"></td>
                    <td class="overall-total-end table-warning">
                        <input type="number"
                            class="tf-f34 form-control text-center text-danger fw-bolder input-table @error('') is-invalid @enderror"
                            value="{{ $coachings->engagement_fees_total }}" name="engagement_fees_total" id="ef_Totalpackage" style="font-size: 22px;">
                    </td>
                    <td class="overall-total-end"></td>
                </tr>
                </tbody>
            </table>
        </div>
    </section>
</div>
<!---------- END OF FORM BODY ---------->

<!---------- JS SCRIPT ---------->
{{-- @include('form.components.customized_engagement.add.script.ce_engagement_fees'); --}}
