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
                    </tr>
                </thead>

                <!------------ CONSULTING ------------>
                <tr class="th-blue-grey-lighten">
                    <th class="px-4 title  ">1. CONSULTING/ DESIGN</th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th class="total-td"></th>
                    <th class="total-td"></th>
                </tr>

                <!------------ CUSTOMIZATION FEE ------------>
                <tbody id="tableLeadconsultant">
                    <tr class="th-blue-grey-lighten-2" id="customizationFee">
                        <td class="title">
                            <input type="text" class="d-none" value="Customization Fee" name="fee_type[]" readonly>
                            Customization Fee
                        </td>
                        <td>
                            <fieldset>
                                <select class="form-select hf-c13 input js-mytooltip @error('fee_package_num') is-invalid @enderror" name="fee_package_num[]" id="ef_LeadconsultantHf" data-mytooltip-content="<i>P15,000 - with minimal design customization or platform customization outside of Zoom/Goggle Meets/MS Teams up to 2 hours of works</i>" data-mytooltip-theme="dark" data-mytooltip-action="focus" data-mytooltip-direction="right" style="background-color:#ffcccc; color:red;">
                                    <option value="0" {{ old('fee_package_num') == '0' ? 'selected' : '' }} selected>&#8369;0</option>
                                    <option value="15000" {{ old('fee_package_num') == '15000' ? 'selected' : '' }} >&#8369;15,000</option>
                                </select>
                                @error('fee_package_num')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </fieldset>
                        </td>
                        <td data-title="# OF SESSIONS">
                            <input type="number" class="input  input-table form-control @error('fee_num_sessions') is-invalid @enderror" value="{{ old('fee_num_sessions') }}" name="fee_num_sessions[]" id="ef_customizationFeeNos" title="" max="100" data-mytooltip-content="<i></i>" data-mytooltip-theme="dark" data-mytooltip-action="focus" data-mytooltip-direction="bottom">
                            @error('fee_num_sessions')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </td>
                        <td data-title="# NIGHT SHIFT, WEEKENDS HOLIDAYS">
                            <input type="number" class="input  input-table form-control @error('fee_nswh') is-invalid @enderror" value="{{ old('fee_nswh') }}" name="fee_nswh[]" id="ef_customizationFeeNsw" title="" max="100" data-mytooltip-content="<i></i>" data-mytooltip-theme="dark" data-mytooltip-action="focus" data-mytooltip-direction="bottom">
                            @error('fee_nswh')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </td>
                        <td class="total-td">
                            <h4 class="text-center lead" id="ef_customizationFeeTotal">-</h4>
                        </td>
                        <td class="total-td">
                            <input type="text" class="form-control input-table @error('fee_notes') is-invalid @enderror" value="{{ old('fee_notes') }}"name="fee_notes[]" id="">
                            @error('fee_notes')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </td>
                    </tr>
                </tbody>

                <!------------ SUBTOTAL CUSTOMIZATION FEE ------------>
                <tr class="" id="tablesubtotalCustomization">
                    <td class="title fw-bold text-dark fst-italic">Subtotal</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td class="total-td" style="background-color: rgba(146, 146, 146, 0.727)">
                        <h4 class="text-center" id="subtotalCustomization">-</h4>
                    </td>
                    <td class="total-td">
                        <input type="text" class="form-control input-table @error('customizationFeeSubtotal_notes') is-invalid @enderror" value="{{ old('customizationFeeSubtotal_notes') }}" name="customizationFeeSubtotal_notes" id="">
                        @error('customizationFeeSubtotal_notes')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </td>
                    <td class="border border-white"></td>
                </tr>

                <!------------ PROGRAM ------------>
                <tr class="th-blue-grey-lighten">
                    <th class="title px-4 text-dark">2. PROGRAM</th>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td class="total-td"></td>
                    <td class="total-td"></td>
                </tr>

                <!------------ PACKAGE, UP TO 30 PAX (P31.5K, P35K, P40.5K, P45K) ------------>
                <tbody id="tableLeadconsultant">
                    <tr class="th-blue-grey-lighten-2" id="package1">
                        <td class="title">
                            <input type="text" class="d-none" value="Package 1" name="fee_type[]" readonly>
                            Package, up to 30 pax (P31.5K, P35K, P40.5K, P45K)
                        </td>
                        <td>
                            <fieldset>
                                <select class="form-select hf-c13 input js-mytooltip @error('fee_package_num') is-invalid @enderror" name="fee_package_num[]" id="f_package1FeePf" data-mytooltip-content="<i>P35,000 - 1.5-2 hour session <br>P45,000 - 2.5-3 hour session <br>For Key Accounts with minimum guaranteed 50 sessions w/in 6 months P31,500 - 1.5-2 hour session <br>P40,500 - 2.5-3 hour session</i>"
                                    data-mytooltip-theme="dark" data-mytooltip-action="focus" data-mytooltip-direction="right" style="background-color:#ffcccc; color:red;">
                                    <option value="31500" {{ old('fee_package_num') == '31500' ? 'selected' : '' }}>
                                        &#8369;31,500
                                    </option>
                                    <option value="35000" {{ old('fee_package_num') == '35000' ? 'selected' : '' }} selected>
                                        &#8369;35,000
                                    </option>
                                    <option value="40500" {{ old('fee_package_num') == '40500' ? 'selected' : '' }} >
                                        &#8369;40,500
                                    </option>
                                    <option value="45000" {{ old('fee_package_num') == '45000' ? 'selected' : '' }} >
                                        &#8369;45,000
                                    </option>
                                </select>
                                @error('fee_package_num')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </fieldset>
                        </td>
                        <td data-title="# OF SESSIONS">
                            <input type="number" class="input js-mytooltip input-table form-control  @error('fee_num_sessions') is-invalid @enderror" value="1" name="fee_num_sessions[]" id="ef_package1FeeNos" title="" max="100" data-mytooltip-content="<i>Minimum is 1 session</i>" data-mytooltip-theme="dark" data-mytooltip-action="focus" data-mytooltip-direction="bottom">
                            @error('fee_num_sessions')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </td>
                        <td data-title="NIGHT SHIFT, WEEKENDS HOLIDAYS *">
                            <input type="number" class="input  input-table form-control  @error('fee_nswh') is-invalid @enderror" value="{{ old('fee_nswh') }}" name="fee_nswh[]" id="ef_package1FeeNsw" title="" max="100" data-mytooltip-content="<i></i>" data-mytooltip-theme="dark" data-mytooltip-action="focus" data-mytooltip-direction="bottom">
                            @error('fee_nswh')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </td>
                        <td class="total-td">
                            <h4 class="text-center lead" id="ef_package1FeeTotal">-</h4>
                        </td>
                        <td class="total-td">
                            <input type="text" class="form-control input-table @error('fee_notes') is-invalid @enderror" value="{{ old('fee_notes') }}" name="fee_notes[]" id="">
                            @error('fee_notes')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </td>
                        <td style="background-color: #FFFFFF;" class="border border-white"><a href="javascript:void(0)" class="text-success font-18" title="Add" id="addBtn1"><i class="fa fa-plus"></i></a></td>
                    </tr>
                </tbody>

                <!------------ PACKAGE, UP TO 31-50 PAX (P31.5K, P35K, P40.5K, P45K) ------------>
                <tbody id="tableLeadconsultant">
                    <tr class="th-blue-grey-lighten-2" id="package2">
                        <td class="title">
                            <input type="text" class="d-none" value="Package 2" name="fee_type[]" readonly>
                            Package, 31-50 pax (P40.5K, P45K, P49.5K, P55K)
                        </td>
                        <td>
                            <fieldset>
                                <select class="form-select hf-c13 input js-mytooltip @error('fee_package_num') is-invalid @enderror" name="fee_package_num[]" id="ef_package2FeePfv" data-mytooltip-content="<i>P45,000 - 1.5-2 hour session <br>P55,000 - 2.5-3 hour session <br>For Key Accounts with minimum guaranteed 50 sessions w/in 6 months <br>P40,500 - 1.5-2 hour session <br>P49,500 - 2.5-3 hour session</i>" data-mytooltip-theme="dark" data-mytooltip-action="focus" data-mytooltip-direction="right" style="background-color:#ffcccc; color:red;">
                                    <option value="40500" {{ old('fee_package_num') == '40500' ? 'selected' : '' }} >&#8369;40,500</option>
                                    <option value="45000" {{ old('fee_package_num') == '45000' ? 'selected' : '' }} selected>&#8369;45,000</option>
                                    <option value="49500" {{ old('fee_package_num') == '49500' ? 'selected' : '' }} >&#8369;49,500</option>
                                    <option value="55000" {{ old('fee_package_num') == '55000' ? 'selected' : '' }} >&#8369;55,000</option>
                                </select>
                                @error('fee_package_num')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </fieldset>
                        </td>
                        <td data-title="# OF SESSIONS">
                            <input type="number" class="input js-mytooltip input-table form-control  @error('fee_num_sessions') is-invalid @enderror" value="{{ old('fee_num_sessions') }}" name="fee_num_sessions[]" id="ef_package2FeeNos" title="" max="100" data-mytooltip-content="<i>Minimum is 1 session</i>" data-mytooltip-theme="dark" data-mytooltip-action="focus" data-mytooltip-direction="bottom">
                            @error('fee_num_sessions')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </td>
                        <td data-title="NIGHT SHIFT, WEEKENDS HOLIDAYS *">
                            <input type="number" class="input input-table form-control  @error('fee_nswh') is-invalid @enderror" value="{{ old('fee_nswh') }}" name="fee_nswh[]" id="eef_package2FeeNsw" title="" max="100" data-mytooltip-content="<i></i>" data-mytooltip-theme="dark" data-mytooltip-action="focus" data-mytooltip-direction="bottom">
                            @error('fee_nswh')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </td>
                        <td class="total-td">
                                <h4 class="text-center lead" id="ef_package2FeeTotal">-</h4>
                        </td>
                        <td class="total-td">
                            <input type="text" class="form-control input-table @error('fee_notes') is-invalid @enderror" value="{{ old('fee_notes') }}"name="fee_notes[]" id="">
                            @error('fee_notes')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </td>
                        <td style="background-color: #FFFFFF;" class="border border-white"><a href="javascript:void(0)"
                            class="text-success font-18" title="Add" id="addBtn1"><i class="fa fa-plus"></i></a>
                        </td>
                    </tr>
                </tbody>

                <!------------ PRODUCER (5K, 7.5K) ------------>
                <tbody id="tableLeadconsultant">
                    <tr class="th-blue-grey-lighten-2" id="ef_producer">
                        <td class="title">
                            <input type="text" class="d-none" value="Producer" name="fee_type[]" readonly>
                            Producer (5K, 7.5K)
                        </td>
                        <td>
                            <fieldset>
                                <select class="form-select hf-c13 input js-mytooltip @error('fee_package_num') is-invalid @enderror" name="fee_package_num[]" id="ef_producerFeePfv" data-mytooltip-content="<i>0 - client will provide the producer <br>P5,000 - 1.5-2 hour session <br>P7,500 - 2.5-3 hour session</i>" data-mytooltip-theme="dark" data-mytooltip-action="focus" data-mytooltip-direction="right" style="background-color:#ffcccc; color:red;">
                                    <option value="5000" {{ old('fee_package_num') == '5000' ? 'selected' : '' }} selected>&#8369;5,000</option>
                                    <option value="7500" {{ old('fee_package_num') == '7500' ? 'selected' : '' }} >&#8369;7,500</option>
                                </select>
                                @error('fee_package_num')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </fieldset>
                        </td>
                        <td data-title="# OF SESSIONS">
                            <input type="number" class="input js-mytooltip input-table form-control @error('fee_num_sessions') is-invalid @enderror" value="1" name="fee_num_sessions[]" id="ef_producerFeeNoc" title="" max="100" data-mytooltip-content="<i>Minimum is 1 session</i>" data-mytooltip-theme="dark" data-mytooltip-action="focus" data-mytooltip-direction="bottom">
                            @error('fee_num_sessions')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </td>
                        <td data-title="NIGHT SHIFT, WEEKENDS LIDAYS *">
                            <input type="number" class="input input-table form-control @error('fee_nswh') is-invalid @enderror" value="{{ old('fee_nswh') }}" name="fee_nswh[]" id="ef_producerFeeNsw" title="" max="100" data-mytooltip-content="<i></i>" data-mytooltip-theme="dark" data-mytooltip-action="focus" data-mytooltip-direction="bottom">
                            @error('fee_nswh')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </td>
                        <td class="total-td">
                            <h4 class="text-center lead" id="ef_producerFeeTotal">-</h4>
                        </td>
                        <td class="total-td">
                            <input type="text" class="form-control input-table @error('fee_notes') is-invalid @enderror" value="{{ old('fee_notes') }}"name="fee_notes[]" id="">
                            @error('fee_notes')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </td>
                        <td style="background-color: #FFFFFF;" class="border border-white"><a href="javascript:void(0)" class="text-success font-18" title="Add" id="addBtn1"><i class="fa fa-plus"></i></a></td>
                    </tr>
                </tbody>

                <!------------ SUBTOTAL PROGRAM ------------>
                <tr class="" id="tableSubtotalProgram">
                    <td class="title fw-bold text-dark fst-italic">Subtotal</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td class="total-td" style="background-color: rgba(146, 146, 146, 0.727)">
                        <h4 class="text-center" id="subtotalProgram">-</h4>
                    </td>
                    <td class="total-td">
                        <input type="text" class="form-control input-table @error('programSubtotal_notes') is-invalid @enderror" value="{{ old('programSubtotal_notes') }}" name="programSubtotal_notes" id="">
                        @error('programSubtotal_notes')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </td>
                    <td class="border border-white"></td>
                </tr>

                <!------------ TOTAL STANDARD FEES ------------>
                <tr class="table-active overall-total" id="tableStandardTotal">
                    <td class="text-uppercase text-dark fst-italic fw-bold overall-total-start">TOTAL STANDARD FEES</td>
                    <td class="overall-total-middle"></td>
                    <td class="overall-total-middle"></td>
                    <td class="overall-total-middle"></td>
                    <td class="overall-total-end" style="background-color: rgba(146, 146, 146, 0.727)">
                        <h4 class="text-center fw-bold" id="mg_standard_total">-</h4>
                    </td>
                    <td class="overall-total-end">
                        <input type="text" class="form-control input-table @error('totalStandardFees_notes') is-invalid @enderror" value="{{ old('totalStandardFees_notes') }}" name="totalStandardFees_notes" id="">
                        @error('totalStandardFees_notes')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </td>
                </tr>

                <!------------ DISCOUNT IF ANY GIVEN ------------>
                <tr class="table-active">
                    <td class="fw-bold text-dark text-uppercase fst-italic overall-total-start">discount given (if any)</td>
                    <td class="overall-total-middle table-warning">
                        <input type="text" class="hf-c32 form-control input-table text-center @error('mg_inpt_dsct') is-invalid @enderror" value="{{ old('mg_inpt_dsct') }}" name="mg_inpt_dsct" id="mg_inpt_dsct" readonly>
                        @error('mg_inpt_dsct')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </td>
                    <td class="overall-total-middle"></td>
                    <td class="overall-total-middle"></td>
                    <td class="overall-total-end"></td>
                    <td class="overall-total-end">
                        <input type="text" class="form-control input-table @error('discount_notes') is-invalid @enderror" value="{{ old('discount_notes') }}"  name="discount_notes" id="mg_total_dsct">
                        @error('discount_notes')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </td>
                </tr>

                <!------------ TOTAL PACKAGE ------------>
                <tr class="table-active">
                    <td class="fw-bold text-uppercase text-dark fst-italic overall-total-start">total package</td>
                    <td class="overall-total-middle"></td>
                    <td class="overall-total-middle"></td>
                    <td class="overall-total-middle"></td>
                    <td class="overall-total-end table-warning">
                        <input type="text" class="tf-f34 form-control text-center text-danger fw-bolder input-table @error('mg_input_totalPackages') is-invalid @enderror" value="{{ old('mg_input_totalPackages') }}" name="mg_input_totalPackages" id="mg_input_totalPackages" style="font-size: 20px;" readonly>
                        @error('mg_input_totalPackages')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </td>
                    <td class="overall-total-end">
                        <input type="text" class="form-control input-table @error('') is-invalid @enderror" value="{{ old('') }}" name="" id="">
                        @error('')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </td>

                </tr>
            </table>
            <center><p>* NIGHT SHIFT/WEEKENDS/HOLIDAYS - no double charging for the same day <br>e.g. Saturday night travel is only charged one 20% surcharge</p></center>
        </div>
    </section>
</div>

<script>
$('input[type="number"]').on('input', function () {
    this.value = !!this.value && Math.abs(this.value) >= 0 ? Math.abs(this.value) : null
});

$('input[type="number"]').attr('min', '0');
</script>