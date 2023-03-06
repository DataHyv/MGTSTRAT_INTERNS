<hr>
<div class="card-header">
    <h4 class="card-title">Engagement Fees</h4>
</div>
<div class="form-body container">
    <section>
        <div class="table-responsive-md" id="no-more-tables">
            <table class="table table-bordered table-hover" id="f2f-ef-table">
                <thead class="table">
                    <tr class="text-center th-blue-grey">
                        <th class="title-th" scope="col" width=20%></th>
                        <th class="title-middle" scope="col" style="font-size: 0.9rem;">PACKAGE FEES, EXCL VAT</th>
                        <th class="title-middle px-4" width=15% scope="col">NUMBER OF SESSIONS</th>
                        <th class="title-middle" scope="col" style="font-size: 0.9rem;">NIGHT SHIFT, <br>WEEKENDS <br>HOLIDAYS *</th>
                        <th class="title-middle" scope="col" style="font-size: 0.9rem;">TOTAL FEE</th>
                        <th class="title-middle" scope="col" style="font-size: 0.9rem;" width=10%>NOTES</th>
                        {{-- <td class="add-row border border-white" scope="col"></td> --}}
                    </tr>
                </thead>


<!------------------------------------------------CONSULTING------------------------------------------------------------------>
                    <tr class="th-blue-grey-lighten">
                        <th class="px-4 title  ">1. CONSULTING/ DESIGN</th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th class="total-td"></th>
                        <th class="total-td"></th>

                    </tr>
<!------------------------------------------------CUSTOMIZATION FEE----------------------------------------------------------->
                    <tbody id="tableLeadconsultant">
                    <tr class="th-blue-grey-lighten-2" id="customizationFee">
                        <td class="title">Customization Fee</td>
                        <td>
                            <fieldset>
                                <select class="form-select hf-c13 input js-mytooltip @error('') is-invalid @enderror"
                                    name="ef_customizationFeePfv"
                                    id="ef_LeadconsultantHf"
                                    data-mytooltip-content="<i>P15,000 - with minimal design customization,
                                        or platform customization outside of Zoom/Goggle Meets/MS Teams.
                                        Up to 2 hours of works</i>"
                                    data-mytooltip-theme="dark"
                                    data-mytooltip-action="focus"
                                    data-mytooltip-direction="right"
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
                            <input type="number" class="input  input-table form-control  @error('') is-invalid @enderror"
                                value="{{ old('') }}"
                                name="ef_customizationFeeNos"
                                id="ef_customizationFeeNos"
                                title=""
                                max="100"
                                data-mytooltip-content="<i></i>"
                                data-mytooltip-theme="dark"
                                data-mytooltip-action="focus"
                                data-mytooltip-direction="bottom">
                        </td>
                        <td data-title="# NIGHT SHIFT, WEEKENDS HOLIDAYS">
                            <input type="number" class="input  input-table form-control  @error('') is-invalid @enderror"
                                value="{{ old('') }}"
                                name="ef_customizationFeeNsw"
                                id="ef_customizationFeeNsw"
                                title=""
                                max="100"
                                data-mytooltip-content="<i></i>"
                                data-mytooltip-theme="dark"
                                data-mytooltip-action="focus"
                                data-mytooltip-direction="bottom">
                        </td>
                        <td class="total-td">
                                <h4 class="text-center lead" id="ef_customizationFeeTotal">-</h4>
                        </td>
                        <td class="total-td">
                            <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}"name="" id="">
                        </td>
                    </tr>
                    </tbody>
<!------------------------------------------------SUBTOTAL CUSTOMIZATION FEE-------------------------------------------------------------------->
                    <tr class="" id="tableTotal">
                        <td class="title fw-bold text-dark fst-italic">Subtotal</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td class="total-td" style="background-color: rgba(146, 146, 146, 0.727)">
                            <h4 class="text-center" id="subtotalCustomization">-</h4>
                        </td>
                        <td class="total-td">
                            <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}"
                                name="" id="">
                        </td>
                        <td class="border border-white"></td>
                    </tr>
<!------------------------------------------------PROGRAM--------------------------------------------------------------------->
                    <tr class="th-blue-grey-lighten">
                        <th class="title px-4 text-dark">2. PROGRAM</th>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td class="total-td"></td>
                        <td class="total-td"></td>
                    </tr>
<!------------------------------------------------Package, up to 30 pax (P31.5K, P35K, P40.5K, P45K)-------------------------->
                    <tbody id="tableLeadconsultant">
                    <tr class="th-blue-grey-lighten-2" id="package1">
                        <td class="title">Package, up to 30 pax (P31.5K, P35K, P40.5K, P45K)</td>
                        <td>
                            <fieldset>
                                <select class="form-select hf-c13 input js-mytooltip @error('') is-invalid @enderror"
                                    name="ef_package1FeePfv"
                                    id="f_package1FeePf"
                                    data-mytooltip-content="<i>P35,000 - 1.5-2 hour session<br>
                                        P45,000 - 2.5-3 hour session
                                        <br>
                                        For Key Accounts with minimum guaranteed 50 sessions w/in 6 months
                                        P31,500 - 1.5-2 hour session<br>
                                        P40,500 - 2.5-3 hour session</i>"
                                    data-mytooltip-theme="dark"
                                    data-mytooltip-action="focus"
                                    data-mytooltip-direction="right"
                                    style="background-color:#ffcccc; color:red;">
                                    <option value="31500" {{ old('') == '31500' ? 'selected="selected"' : '' }}>
                                        &#8369;31,500
                                    </option>
                                    <option value="35000" {{ old('') == '35000' ? 'selected="selected"' : '' }} selected>
                                        &#8369;35,000
                                    </option>
                                    <option value="40500" {{ old('') == '40500' ? 'selected="selected"' : '' }} >
                                        &#8369;40,500
                                    </option>
                                    <option value="45000" {{ old('') == '45000' ? 'selected="selected"' : '' }} >
                                        &#8369;45,000
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
                            <input type="number" class="input js-mytooltip input-table form-control  @error('') is-invalid @enderror"
                                value="1"
                                name="ef_package1FeeNos"
                                id="ef_package1FeeNos"
                                title=""
                                max="100"
                                data-mytooltip-content="<i>Minimum is 1 session</i>"
                                data-mytooltip-theme="dark"
                                data-mytooltip-action="focus"
                                data-mytooltip-direction="bottom">
                        </td>
                        <td data-title="NIGHT SHIFT, WEEKENDS HOLIDAYS *">
                            <input type="number" class="input  input-table form-control  @error('') is-invalid @enderror"
                                value="{{ old('') }}"
                                name="ef_package1FeeNsw"
                                id="ef_package1FeeNsw"
                                title=""
                                max="100"
                                data-mytooltip-content="<i></i>"
                                data-mytooltip-theme="dark"
                                data-mytooltip-action="focus"
                                data-mytooltip-direction="bottom">
                        </td>
                        <td class="total-td">
                                <h4 class="text-center lead" id="ef_package1FeeTotal">-</h4>
                        </td>
                        <td class="total-td">
                            <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}"name="" id="">
                        </td>
                        <td style="background-color: #FFFFFF;" class="border border-white"><a href="javascript:void(0)"
                            class="text-success font-18" title="Add" id="addBtn1"><i class="fa fa-plus"></i></a>
                        </td>
                    </tr>
                    </tbody>
<!------------------------------------------------Package, 31-50 pax (P40.5K, P45K, P49.5K, P55K)----------------------------->
                    <tbody id="tableLeadconsultant">
                    <tr class="th-blue-grey-lighten-2" id="package2">
                        <td class="title">Package, 31-50 pax (P40.5K, P45K, P49.5K, P55K)</td>
                        <td>
                            <fieldset>
                                <select class="form-select hf-c13 input js-mytooltip @error('') is-invalid @enderror"
                                    name="ef_package2FeePfv"
                                    id="ef_package2FeePfv"
                                    data-mytooltip-content="<i>P45,000 - 1.5-2 hour session<br>
                                        P55,000 - 2.5-3 hour session<br>

                                        For Key Accounts with minimum guaranteed 50 sessions w/in 6 months<br>
                                        P40,500 - 1.5-2 hour session<br>
                                        P49,500 - 2.5-3 hour session</i>"
                                    data-mytooltip-theme="dark"
                                    data-mytooltip-action="focus"
                                    data-mytooltip-direction="right"
                                    style="background-color:#ffcccc; color:red;">
                                    <option value="40500" {{ old('') == '40500' ? 'selected="selected"' : '' }} >
                                        &#8369;40,500
                                    </option>
                                    <option value="45000" {{ old('') == '45000' ? 'selected="selected"' : '' }} selected>
                                        &#8369;45,000
                                    </option>
                                    <option value="49500" {{ old('') == '49500' ? 'selected="selected"' : '' }} >
                                        &#8369;49,500
                                    </option>
                                    <option value="55000" {{ old('') == '55000' ? 'selected="selected"' : '' }} >
                                        &#8369;55,000
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
                            <input type="number" class="input js-mytooltip input-table form-control  @error('') is-invalid @enderror"
                                value="{{ old('') }}"
                                name="ef_package2FeeNos"
                                id="ef_package2FeeNos"
                                title=""
                                max="100"
                                data-mytooltip-content="<i>Minimum is 1 session</i>"
                                data-mytooltip-theme="dark"
                                data-mytooltip-action="focus"
                                data-mytooltip-direction="bottom">
                        </td>
                        <td data-title="NIGHT SHIFT, WEEKENDS HOLIDAYS *">
                            <input type="number" class="input  input-table form-control  @error('') is-invalid @enderror"
                                value="{{ old('') }}"
                                name="ef_package2FeeNsw"
                                id="eef_package2FeeNsw"
                                title=""
                                max="100"
                                data-mytooltip-content="<i></i>"
                                data-mytooltip-theme="dark"
                                data-mytooltip-action="focus"
                                data-mytooltip-direction="bottom">
                        </td>
                        <td class="total-td">
                                <h4 class="text-center lead" id="ef_package2FeeTotal">-</h4>
                        </td>
                        <td class="total-td">
                            <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}"name="" id="">
                        </td>
                        <td style="background-color: #FFFFFF;" class="border border-white"><a href="javascript:void(0)"
                            class="text-success font-18" title="Add" id="addBtn1"><i class="fa fa-plus"></i></a>
                        </td>
                    </tr>
                    </tbody>
<!------------------------------------------------Producer (5K, 7.5K)--------------------------------------------------------->
                    <tbody id="tableLeadconsultant">
                    <tr class="th-blue-grey-lighten-2" id="ef_producer">
                        <td class="title">Producer (5K, 7.5K)</td>
                        <td>
                            <fieldset>
                                <select class="form-select hf-c13 input js-mytooltip @error('') is-invalid @enderror"
                                    name="ef_producerFeePfv"
                                    id="ef_producerFeePfv"
                                    data-mytooltip-content="<i>0 - client will provide the producer<br>
                                        P5,000 - 1.5-2 hour session<br>
                                        P7,500 - 2.5-3 hour session</i>"
                                    data-mytooltip-theme="dark"
                                    data-mytooltip-action="focus"
                                    data-mytooltip-direction="right"
                                    style="background-color:#ffcccc; color:red;">
                                    <option value="5000" {{ old('') == '5000' ? 'selected="selected"' : '' }} selected>
                                        &#8369;5,000
                                    </option>
                                    <option value="7500" {{ old('') == '7500' ? 'selected="selected"' : '' }} >
                                        &#8369;7,500
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
                            <input type="number" class="input js-mytooltip input-table form-control  @error('') is-invalid @enderror"
                                value="1"
                                name="ef_producerFeeNoc"
                                id="ef_producerFeeNoc"
                                title=""
                                max="100"
                                data-mytooltip-content="<i>Minimum is 1 session</i>"
                                data-mytooltip-theme="dark"
                                data-mytooltip-action="focus"
                                data-mytooltip-direction="bottom">
                        </td>
                        <td data-title="NIGHT SHIFT, WEEKENDS LIDAYS *">
                            <input type="number" class="input  input-table form-control  @error('') is-invalid @enderror"
                                value="{{ old('') }}"
                                name="ef_producerFeeNsw"
                                id="ef_producerFeeNsw"
                                title=""
                                max="100"
                                data-mytooltip-content="<i></i>"
                                data-mytooltip-theme="dark"
                                data-mytooltip-action="focus"
                                data-mytooltip-direction="bottom">
                        </td>
                        <td class="total-td">
                                <h4 class="text-center lead" id="ef_producerFeeTotal">-</h4>
                        </td>
                        <td class="total-td">
                            <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}"name="" id="">
                        </td>
                        <td style="background-color: #FFFFFF;" class="border border-white"><a href="javascript:void(0)"
                            class="text-success font-18" title="Add" id="addBtn1"><i class="fa fa-plus"></i></a>
                        </td>
                    </tr>
                    </tbody>
<!------------------------------------------------SUBTOTAL PROGRAM-------------------------------------------------------------------->
                    <tr class="" id="tableTotal">
                        <td class="title fw-bold text-dark fst-italic">Subtotal</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td class="total-td" style="background-color: rgba(146, 146, 146, 0.727)">
                            <h4 class="text-center" id="subtotalProgram">-</h4>
                        </td>
                        <td class="total-td">
                            <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}"
                                name="" id="">
                        </td>
                        <td class="border border-white"></td>
                    </tr>
<!------------------------------------------------TOTAL STANDARD FEES--------------------------------------------------------->
                    <tr class="table-active overall-total" id="tableStandardTotal">
                        <td class="text-uppercase text-dark fst-italic fw-bold overall-total-start">TOTAL STANDARD FEES</td>
                        <td class="overall-total-middle"></td>
                        <td class="overall-total-middle"></td>
                        <td class="overall-total-middle"></td>
                        <td class="overall-total-end" style="background-color: rgba(146, 146, 146, 0.727)">
                            <h4 class="text-center fw-bold" id="mg_standard_total">-</h4>
                        </td>
                        <td class="overall-total-end">
                            <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}"
                                name="" id="">
                        </td>
                    </tr>
<!------------------------------------------------DISCOUNT IF ANY GIVEN--------------------------------------------------------->
                    <tr class="table-active">
                        <td class="fw-bold text-dark text-uppercase fst-italic overall-total-start">discount given (if any)</td>
                        <td class="overall-total-middle table-warning">
                            <input type="text" class="hf-c32 form-control input-table text-center @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="mg_inpt_dsct" id="mg_inpt_dsct" readonly>
                        </td>
                        <td class="overall-total-middle"></td>
                        <td class="overall-total-middle"></td>
                        <td class="overall-total-end"></td>
                        <td class="overall-total-end">
                            <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}"  name="mg_input_totalPackages" id="mg_total_dsct">
                        </td>
                    </tr>
<!------------------------------------------------TOTAL PACKAGE--------------------------------------------------------->
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
                                value="{{ old('') }}" name="" id="">
                        </td>

                    </tr>
            </table>
            <center><p>  * NIGHT SHIFT/WEEKENDS/HOLIDAYS - no double charging for the same day <br>I.e. Saturday night travel is only charged one 20% surcharge</p></center>
        </div>
    </section>
</div>

<script>
$('input[type="number"]').on('input', function () {
    this.value = !!this.value && Math.abs(this.value) >= 0 ? Math.abs(this.value) : null
});

$('input[type="number"]').attr('min', '0');

</script>
