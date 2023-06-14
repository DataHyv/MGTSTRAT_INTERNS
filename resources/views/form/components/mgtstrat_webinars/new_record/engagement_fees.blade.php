<div class="card-header">
    <h4 class="card-title">Engagement Fees</h4>
</div>

<div class="form-body container">
    <section>
        <div class="table-responsive-md" id="no-more-tables">
            <table class="table table-bordered" id="engagement-fees">
                <!-------------- HEADINGS -------------->
                    <thead class="table">
                        <tr class="text-center th-blue-grey">
                            <th class="title-th" scope="col" width=20%></th>
                            <th class="title-middle" scope="col" style="font-size: 0.9rem;">PACKAGE FEES, EXCL VAT</th>
                            <th class="title-middle px-4" scope="col">NUMBER OF SESSIONS</th>
                            <th class="title-middle" scope="col" style="font-size: 0.9rem;">NIGHT SHIFT, <br>WEEKENDS <br>HOLIDAYS *</th>
                            <th class="title-middle" scope="col" style="font-size: 0.9rem;">TOTAL FEE</th>
                            <th class="title-middle" scope="col" width=20% style="font-size: 0.9rem;" width=10%>NOTES</th>
                        </tr>
                    </thead>

                <!-------------- CONSULTING -------------->
                    <tr class="th-blue-grey-lighten">
                        <th class="px-4 title  ">1. CONSULTING/ DESIGN</th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th class="total-td"></th>
                        <th class="total-td"></th>
                    </tr>

                <!-------------- CUSTOMIZATION FEE -------------->
                    <tbody id="consulting">
                    <tr class="th-blue-grey-lighten-2" id="customizationFee">
                        <td class="title">
                            <input type="text" class="d-none" value="Customization Fee" name="fee_type[]" readonly>
                            Customization Fee
                        </td>
                        <td>
                            <fieldset>
                                <select class="input js-mytooltip package-fees form-select @error('') is-invalid @enderror"
                                    name="fee_package_num[]"
                                    id="ef_LeadconsultantHf"
                                    data-mytooltip-content="<i>Customization - P15,000 - with minimal design customization, or platform customization outside of Zoom/Goggle Meets/MS Teams. Up to 2 hours of work</i>"
                                    data-mytooltip-theme="dark"
                                    data-mytooltip-action="focus"
                                    data-mytooltip-direction="bottom"
                                    style="background-color:#ffcccc; color:red;">
                                    <option value="0" {{ old('') == '0' ? 'selected="selected"' : '' }} selected>
                                        &#8369;0
                                    </option>
                                    <option value="15000" {{ old('') == '15000' ? 'selected="selected"' : '' }} >
                                        &#8369;15,000
                                    </option>
                                </select>
                                @error('')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </fieldset>
                        </td>

                        <td data-title="# OF SESSIONS">
                            <input type="number" class="input input-table form-control @error('') is-invalid @enderror"
                                value="{{ old('') }}"
                                name="fee_num_sessions[]"
                                id="ef_customizationFeeNos"
                                data-type="currency"
                                data-mytooltip-content="<i></i>"
                                data-mytooltip-theme="dark"
                                data-mytooltip-action="focus"
                                data-mytooltip-direction="bottom">
                        </td>

                        <td data-title="# NIGHT SHIFT, WEEKENDS HOLIDAYS">
                            <input type="number" class="input input-table form-control @error('') is-invalid @enderror"
                                value="{{ old('') }}"
                                name="fee_nswh[]"
                                id="ef_customizationFeeNsw"
                                data-type="currency"
                                data-mytooltip-content="<i></i>"
                                data-mytooltip-theme="dark"
                                data-mytooltip-action="focus"
                                data-mytooltip-direction="bottom">
                        </td>
                        <td class="total-td">
                                <h4 class="text-center lead total" id="webinar_customizationTotal">-</h4>
                        </td>
                        <td class="total-td">
                            <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}"name="fee_notes[]" id="">
                        </td>
                        <td style="background-color: #FFFFFF;" class="border border-white"><a href="javascript:void(0)"
                            class="text-success font-18" title="Add" id="addBtn1"><i class="fa fa-plus"></i></a>
                        </td>
                    </tr>
                    </tbody>

                <!-------------- SUBTOTAL -------------->
                    <tr class="" id="tablesubtotalCustomization">
                        <td class="title fw-bold text-dark fst-italic">Subtotal</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td class="total-td" style="background-color: rgba(146, 146, 146, 0.727)">
                            <h4 class="text-center" id="subtotal">-</h4>
                        </td>
                        <td class="total-td">
                            <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}"
                                name="customizationFeeSubtotal_notes" id="">
                        </td>
                        <td class="border border-white"></td>
                    </tr>

                <!-------------- PROGRAM -------------->
                    <tr class="th-blue-grey-lighten">
                        <th class="title px-4 text-dark">2. PROGRAM</th>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td class="total-td"></td>
                        <td class="total-td"></td>
                    </tr>

                <!-------------- Package, 51-100 pax (P58.5K, P65K) -------------->
                    <tbody id="tableLeadconsultant">
                    <tr class="th-blue-grey-lighten-2 sum" id="package1">
                        {{-- <td class="title">Package, 51-100 pax (P58.5K, P65K)</td> --}}
                        <td class="title">
                            <input type="text" class="d-none" value="Package 1" name="fee_type[]" readonly>
                            Package, up to 30 pax (P31.5K, P35K, P40.5K, P45K)
                        </td>
                        <td>
                            <fieldset>
                                <select class="form-select hf-c13 input js-mytooltip package-fees @error('') is-invalid @enderror"
                                    name="fee_package_num[]"
                                    id="f_package1FeePf"
                                    data-mytooltip-content="<i>Package, 51-100 pax - P65,000
                                        <br><br>
                                        For Key Accounts with minimum guaranteed 50 sessions w/in 6 months
                                        P58,500 </i>"
                                    data-mytooltip-theme="dark"
                                    data-mytooltip-action="focus"
                                    data-mytooltip-direction="right"
                                    style="background-color:#ffcccc; color:red;">
                                    <option value="58500" {{ old('') == '58500' ? 'selected="selected"' : '' }}>
                                        &#8369;58,500
                                    </option>
                                    <option value="65000" {{ old('') == '65000' ? 'selected="selected"' : '' }} selected>
                                        &#8369;65,000
                                    </option>
                                </select>
                                @error('')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </fieldset>
                        </td>

                        <td data-title="# OF SESSIONS">
                            <input type="number" class="number-session input js-mytooltip input-table form-control @error('') is-invalid @enderror"
                                value=""
                                name="fee_num_sessions[]"
                                id="ef_package1FeeNos"
                                data-type="currency"
                                data-mytooltip-content="<i>Minimum is 1 session</i>"
                                data-mytooltip-theme="dark"
                                data-mytooltip-action="focus"
                                data-mytooltip-direction="bottom">
                        </td>

                        <td data-title="NIGHT SHIFT, WEEKENDS HOLIDAYS *">
                            <input type="number" class="nswh input input-table form-control  @error('') is-invalid @enderror"
                                value="{{ old('') }}"
                                name="fee_nswh[]"
                                id="ef_package1FeeNsw"
                                data-type="currency"
                                data-mytooltip-content="<i></i>"
                                data-mytooltip-theme="dark"
                                data-mytooltip-action="focus"
                                data-mytooltip-direction="bottom">
                        </td>

                        <td class="total-td">
                                <h4 class="total text-center lead" id="ef_package1FeeTotal">-</h4>
                        </td>

                        <td class="total-td">
                            <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}"name="fee_notes[]" id="">
                        </td>

                        <td style="background-color: #FFFFFF;" class="border border-white"><a href="javascript:void(0)"
                            class="text-success font-18" title="Add" id="addBtn1"><i class="fa fa-plus"></i></a>
                        </td>
                    </tr>
                    </tbody>

                <!-------------- Package, 101-200 pax (P67.5K, P75K) ------------->
                    <tbody id="tableLeadconsultant">
                    <tr class="th-blue-grey-lighten-2 sum" id="package2">
                        {{-- <td class="title">Package, 101-200 pax (P67.5K, P75K)</td> --}}
                        <td class="title">
                            <input type="text" class="d-none" value="Package 2" name="fee_type[]" readonly>
                            Package, 31-50 pax (P40.5K, P45K, P49.5K, P55K)
                        </td>
                        <td>
                            <fieldset>
                                <select class="form-select package-fees input js-mytooltip @error('') is-invalid @enderror"
                                    name="fee_package_num[]"
                                    id="ef_package2FeePfv"
                                    data-mytooltip-content="<i>Package, 101-200 pax - P75,000
                                        <br><br>
                                        For Key Accounts with minimum guaranteed 50 sessions w/in 6 months
                                        P67,500</i>"
                                    data-mytooltip-theme="dark"
                                    data-mytooltip-action="focus"
                                    data-mytooltip-direction="right"
                                    style="background-color:#ffcccc; color:red;">
                                    <option value="67500" {{ old('') == '67500' ? 'selected="selected"' : '' }} >
                                        &#8369;67,500
                                    </option>
                                    <option value="75000" {{ old('') == '75000' ? 'selected="selected"' : '' }} selected>
                                        &#8369;75,000
                                    </option>
                                </select>
                                @error('')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </fieldset>
                        </td>

                        <td data-title="# OF SESSIONS">
                            <input type="number" class="number-session input js-mytooltip input-table form-control  @error('') is-invalid @enderror"
                                value="{{ old('') }}"
                                name="fee_num_sessions[]"
                                id="ef_package2FeeNos"
                                data-type="currency"
                                data-mytooltip-content="<i>Minimum is 1 session</i>"
                                data-mytooltip-theme="dark"
                                data-mytooltip-action="focus"
                                data-mytooltip-direction="bottom">
                        </td>

                        <td data-title="NIGHT SHIFT, WEEKENDS HOLIDAYS *">
                            <input type="number" class="nswh input input-table form-control  @error('') is-invalid @enderror"
                                value="{{ old('') }}"
                                name="fee_nswh[]"
                                id="eef_package2FeeNsw"
                                data-type="currency"
                                data-mytooltip-content="<i></i>"
                                data-mytooltip-theme="dark"
                                data-mytooltip-action="focus"
                                data-mytooltip-direction="bottom">
                        </td>

                        <td class="total-td">
                                <h4 class="text-center lead total" id="ef_package2FeeTotal">-</h4>
                        </td>

                        <td class="total-td">
                            <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}"name="fee_notes[]" id="">
                        </td>

                        <td style="background-color: #FFFFFF;" class="border border-white"><a href="javascript:void(0)"
                            class="text-success font-18" title="Add" id="addBtn1"><i class="fa fa-plus"></i></a>
                        </td>
                    </tr>
                    </tbody>

                <!-------------- Package, 201 pax and up (P76.5K, P85K) -------------->
                    <tbody id="tableLeadconsultant">
                    <tr class="th-blue-grey-lighten-2 sum" id="ef_producer">
                        {{-- <td class="title">Package, 201 pax and up (P76.5K, P85K)</td> --}}
                        <td class="title">
                            <input type="text" class="d-none" value="Package3 " name="fee_type[]" readonly>
                            Package (5K, 7.5K)
                        </td>
                        <td>
                            <fieldset>
                                <select class="package-fees form-select input js-mytooltip @error('') is-invalid @enderror"
                                    name="fee_package_num[]"
                                    id="ef_package3FeePfv"
                                    data-mytooltip-content="<i>Package, 201 pax and up - P85,000
                                        <br><br>
                                        For Key Accounts with minimum guaranteed 50 sessions w/in 6 months
                                        P76,500</i>"
                                    data-mytooltip-theme="dark"
                                    data-mytooltip-action="focus"
                                    data-mytooltip-direction="right"
                                    style="background-color:#ffcccc; color:red;">
                                    <option value="76500" {{ old('') == '76500' ? 'selected="selected"' : '' }} >
                                        &#8369;76,500
                                    </option>
                                    <option value="85000" {{ old('') == '85000' ? 'selected="selected"' : '' }} selected>
                                        &#8369;85,000
                                    </option>
                                </select>
                                @error('')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </fieldset>
                        </td>
                        <td data-title="# OF SESSIONS">
                            <input type="number" class="number-session input js-mytooltip input-table form-control  @error('') is-invalid @enderror"
                                value=""
                                name="fee_num_sessions[]"
                                id="ef_package3FeeNos"
                                data-type="currency"
                                data-mytooltip-content="<i>Minimum is 1 session</i>"
                                data-mytooltip-theme="dark"
                                data-mytooltip-action="focus"
                                data-mytooltip-direction="bottom">
                        </td>
                        <td data-title="NIGHT SHIFT, WEEKENDS LIDAYS *">
                            <input type="number" class="nswh input input-table form-control  @error('') is-invalid @enderror"
                                value="{{ old('') }}"
                                name="fee_nswh[]"
                                id="eef_package3FeeNsw"
                                data-type="currency"
                                data-mytooltip-content="<i></i>"
                                data-mytooltip-theme="dark"
                                data-mytooltip-action="focus"
                                data-mytooltip-direction="bottom">
                        </td>
                        <td class="total-td">
                                <h4 class="text-center lead total" id="ef_package3FeeTotal">-</h4>
                        </td>
                        <td class="total-td">
                            <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}"name="fee_notes[]" id="">
                        </td>
                        <td style="background-color: #FFFFFF;" class="border border-white"><a href="javascript:void(0)"
                            class="text-success font-18" title="Add" id="addBtn1"><i class="fa fa-plus"></i></a>
                        </td>
                    </tr>
                    </tbody>
                <!-------------- PRODUCER -------------->
                    <tbody id="producer">
                    <tr class="th-blue-grey-lighten-2 sum" id="ef_producer">
                        {{-- <td class="title">Producer</td> --}}
                        <td class="title">
                            <input type="text" class="d-none" value="Producer" name="fee_type[]" readonly>
                            Producer
                        </td>
                        <td>
                            <fieldset>
                                <select class="package-fees form-select input js-mytooltip @error('') is-invalid @enderror"
                                    name="fee_package_num[]"
                                    id="ef_producerFeePfv"
                                    data-mytooltip-content="<i>Package Fee - 0 - client will provide the producer
                                        P5,000</i>"
                                    data-mytooltip-theme="dark"
                                    data-mytooltip-action="focus"
                                    data-mytooltip-direction="right"
                                    style="background-color:#ffcccc; color:red;">
                                    <option value="0" selected>
                                        <b>-</b>
                                    </option>
                                    <option value="0" {{ old('') == '0' ? 'selected="selected"' : '' }} >
                                        &#8369;0
                                    </option>
                                    <option value="5000" {{ old('') == '5000' ? 'selected="selected"' : '' }}>
                                        &#8369;5,000
                                    </option>
                                </select>
                                @error('')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </fieldset>
                        </td>
                        <td data-title="# OF SESSIONS">
                            <input type="number" class="number-session input js-mytooltip input-table form-control  @error('') is-invalid @enderror"
                                value=""
                                name="fee_num_sessions[]"
                                id="ef_producerFeeNoc"
                                data-type="currency"
                                data-mytooltip-content="<i>Minimum is 1 session</i>"
                                data-mytooltip-theme="dark"
                                data-mytooltip-action="focus"
                                data-mytooltip-direction="bottom">
                        </td>
                        <td data-title="NIGHT SHIFT, WEEKENDS LIDAYS *">
                            <input type="number" class="nswh input input-table form-control  @error('') is-invalid @enderror"
                                value="{{ old('') }}"
                                name="fee_nswh[]"
                                id="ef_producerFeeNsw"
                                data-type="currency"
                                data-mytooltip-content="<i></i>"
                                data-mytooltip-theme="dark"
                                data-mytooltip-action="focus"
                                data-mytooltip-direction="bottom">
                        </td>
                        <td class="total-td">
                                <h4 class="text-center lead total" id="ef_producerFeeTotal">-</h4>
                        </td>
                        <td class="total-td">
                            <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}"name="fee_notes[]" id="">
                        </td>
                        <td style="background-color: #FFFFFF;" class="border border-white"><a href="javascript:void(0)"
                            class="text-success font-18" title="Add" id="addBtn1"><i class="fa fa-plus"></i></a>
                        </td>
                    </tr>
                    </tbody>

                <!-------------- SUBTOTAL -------------->
                    <tr class="" id="tableSubtotalProgram">
                        <td class="title fw-bold text-dark fst-italic">Subtotal</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td class="total-td" style="background-color: rgba(146, 146, 146, 0.727)">
                            <h4 class="text-center subtotal" id="subtotalProgram">-</h4>
                        </td>
                        <td class="total-td">
                            <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}"
                                name="subtotalProgramNotes" id="">
                        </td>
                        <td class="border border-white"></td>
                    </tr>

                <!-------------- TOTAL STANDARD FEES -------------->
                    <tr class="table-active overall-total" id="tableStandardTotal">
                        <td class="text-uppercase text-dark fst-italic fw-bold overall-total-start">TOTAL STANDARD FEES</td>
                        <td class="overall-total-middle"></td>
                        <td class="overall-total-middle"></td>
                        <td class="overall-total-middle"></td>
                        <td class="overall-total-end" style="background-color: rgba(146, 146, 146, 0.727)">
                            <h4 class="text-center fw-bold standard-fees" id="mg_standard_total">-</h4>
                        </td>
                        <td class="overall-total-end">
                            <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}"
                                name="totalStandardFees_notes" id="">
                        </td>
                    </tr>

                <!-------------- DISCOUNT IF ANY GIVEN -------------->
                    <tr class="table-active">
                        <td class="fw-bold text-dark text-uppercase fst-italic overall-total-start">discount given (if any)</td>
                        <td class="overall-total-middle table-warning">
                            <input type="text" class="hf-c32 form-control input-table text-center @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="" id="mg_inpt_dsct" readonly>
                        </td>
                        <td class="overall-total-middle"></td>
                        <td class="overall-total-middle"></td>
                        <td class="overall-total-end"></td>
                        <td class="overall-total-end">
                            <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}"  name="discount_notes" id="mg_total_dsct">
                        </td>
                    </tr>

                <!-------------- TOTAL PACKAGE -------------->
                    <tr class="table-active">
                        <td class="fw-bold text-uppercase text-dark fst-italic overall-total-start">total package</td>
                        <td class="overall-total-middle"></td>
                        <td class="overall-total-middle"></td>
                        <td class="overall-total-middle"></td>
                        <td class="overall-total-end table-warning">
                            <input type="text" class="tf-f34 form-control text-center text-danger fw-bolder input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="mg_input_totalPackages" id="mg_input_totalPackages" style="font-size: 20px;">
                        </td>
                        <td class="overall-total-end">
                            <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}"
                                name="" id="">
                        </td>
                    </tr>

                </table>

            <center>
                <p>  * NIGHT SHIFT/WEEKENDS/HOLIDAYS - no double charging for the same day <br>I.e. Saturday night travel is only charged one 20% surcharge</p>
            </center>

        </div>
    </section>
</div>

<script>
$('input[type="number"]').on('input', function () {
    this.value = !!this.value && Math.abs(this.value) >= 0 ? Math.abs(this.value) : null
});

$('input[type="number"]').attr('min', '0');

</script>
