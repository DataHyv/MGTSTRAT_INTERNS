
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
                    <tbody id="tableCustomizationFee">

                    {{-- Type: Customization Fee --}}
                    @foreach ($dataJoin1 as $key=>$fee_type)
                    @if ($fee_type->type === 'Customization Fee')

                    <tr class="th-blue-grey-lighten-2" id="customizationFee">
                        <td class="title">

                            <input type="hidden" name="fee_id[]" value="{{ $fee_type->id }}" readonly>
                            <input type="text" class="d-none" value="{{ $fee_type->type }}" name="fee_type[]">
                            {{ $fee_type->type }}

                        </td>

                        {{-- package_fees --}}
                        <td>
                            <fieldset>
                                <select class="form-select hf-c13 input js-mytooltip @error('') is-invalid @enderror"
                                    name="fee_package_num[]"
                                    id="ef_LeadconsultantHf"
                                    data-mytooltip-content="<i>P15,000 - with minimal design customization,
                                        or platform customization outside of Zoom/Goggle Meets/MS Teams.
                                        Up to 2 hours of works</i>"
                                    data-mytooltip-theme="dark"
                                    data-mytooltip-action="focus"
                                    data-mytooltip-direction="right"
                                    style="background-color:#ffcccc; color:red;">
                                    <option value="0" {{ $fee_type->package_fees  == '0' ? 'selected="selected"' : '' }} >
                                        &#8369;0
                                    </option>
                                    <option value="15000" {{ $fee_type->package_fees == '15000' ? 'selected="selected"' : '' }} >
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

                        {{-- num_sessions --}}
                        <td data-title="# OF SESSIONS" class="table-warning">
                            <input type="number" class="input  input-table form-control  @error('') is-invalid @enderror"
                                value="{{ $fee_type->num_sessions }}"
                                name="fee_num_sessions[]"
                                id="ef_customizationFeeNos"
                                title=""

                                {{-- input validation --}}
                                max="100"
                                oninput="checkInputValidity(this)"
                                data-toggle="tooltip" data-placement="bottom" data-trigger="manual"
                                data-html="true" data-original-title="" data-error-message="Value should not exceed 100"

                                data-mytooltip-content="<i></i>"
                                data-mytooltip-theme="dark"
                                data-mytooltip-action="focus"
                                data-mytooltip-direction="bottom">
                        </td>

                        {{-- nswh --}}
                        <td data-title="# NIGHT SHIFT, WEEKENDS HOLIDAYS" class="table-warning">
                            <input type="number" class="input  input-table form-control  @error('') is-invalid @enderror"
                                value="{{ $fee_type->nswh }}"
                                name="fee_nswh[]"
                                id="ef_customizationFeeNsw"
                                title=""

                                {{-- input validation --}}
                                max="100"
                                oninput="checkInputValidity(this)"
                                data-toggle="tooltip" data-placement="bottom" data-trigger="manual"
                                data-html="true" data-original-title="" data-error-message="Value should not exceed 100"

                                data-mytooltip-content="<i></i>"
                                data-mytooltip-theme="dark"
                                data-mytooltip-action="focus"
                                data-mytooltip-direction="bottom">
                        </td>
                        <td class="total-td">
                                <h4 class="text-center lead" id="ef_customizationFeeTotal">-</h4>
                        </td>

                        {{-- notes --}}
                        <td class="total-td">
                            <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                            value="{{ $fee_type->notes }}" name="fee_notes[]" id="">
                        </td>
                    </tr>

                    @endif
                    @endforeach
                    {{-- End of Type: Customization Fee --}}

                    </tbody>
<!------------------------------------------------SUBTOTAL CUSTOMIZATION FEE-------------------------------------------------------------------->
                    <tr class="table-secondary" id="tablesubtotalCustomization">
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
                                name="customizationFeeSubtotal_notes" id="">
                        </td>
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
                    <tbody id="tablePackage1">

                    {{-- Type: Package 1 --}}
                    @foreach ($dataJoin1 as $key=>$fee_type)
                    @if ($fee_type->type === 'Package 1')
                        
                    <tr class="th-blue-grey-lighten-2" id="package1">
                        <td class="title">

                            <input type="hidden" name="fee_id[]" value="{{ $fee_type->id }}" readonly>
                            <input type="text" class="d-none" value="{{ $fee_type->type }}" name="fee_type[]">
                            {{-- {{ $fee_type->type }} --}}
                            Package, up to 30 pax (P31.5K, P35K, P40.5K, P45K)

                        </td>

                        {{-- package_fees --}}
                        <td>
                            <fieldset>
                                <select class="form-select hf-c13 input js-mytooltip @error('') is-invalid @enderror"
                                    name="fee_package_num[]"
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
                                    <option value="31500" {{ $fee_type->package_fees == '31500' ? 'selected="selected"' : '' }}>
                                        &#8369;31,500
                                    </option>
                                    <option value="35000" {{ $fee_type->package_fees == '35000' ? 'selected="selected"' : '' }} >
                                        &#8369;35,000
                                    </option>
                                    <option value="40500" {{ $fee_type->package_fees == '40500' ? 'selected="selected"' : '' }} >
                                        &#8369;40,500
                                    </option>
                                    <option value="45000" {{ $fee_type->package_fees == '45000' ? 'selected="selected"' : '' }} >
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

                        {{-- num_sessions --}}
                        <td data-title="# OF SESSIONS" class="table-warning">
                            <input type="number" class="input js-mytooltip input-table form-control  @error('') is-invalid @enderror"
                                value="{{ $fee_type->num_sessions }}"
                                name="fee_num_sessions[]"
                                id="ef_package1FeeNos"
                                title=""

                                {{-- input validation --}}
                                max="100"
                                oninput="checkInputValidity(this)"
                                data-toggle="tooltip" data-placement="bottom" data-trigger="manual"
                                data-html="true" data-original-title="" data-error-message="Value should not exceed 100"

                                data-mytooltip-content="<i>Minimum is 1 session</i>"
                                data-mytooltip-theme="dark"
                                data-mytooltip-action="focus"
                                data-mytooltip-direction="bottom">
                        </td>

                        {{-- nswh --}}
                        <td data-title="NIGHT SHIFT, WEEKENDS HOLIDAYS *" class="table-warning">
                            <input type="number" class="input  input-table form-control  @error('') is-invalid @enderror"
                                value="{{ $fee_type->nswh }}"
                                name="fee_nswh[]"
                                id="ef_package1FeeNsw"
                                title=""

                                {{-- input validation --}}
                                max="100"
                                oninput="checkInputValidity(this)"
                                data-toggle="tooltip" data-placement="bottom" data-trigger="manual"
                                data-html="true" data-original-title="" data-error-message="Value should not exceed 100"

                                data-mytooltip-content="<i></i>"
                                data-mytooltip-theme="dark"
                                data-mytooltip-action="focus"
                                data-mytooltip-direction="bottom">
                        </td>
                        <td class="total-td">
                                <h4 class="text-center lead" id="ef_package1FeeTotal">-</h4>
                        </td>

                        {{-- notes --}}
                        <td class="total-td">
                            <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                value="{{ $fee_type->notes }}"name="fee_notes[]" id="">
                        </td>
                    </tr>

                    @endif
                    @endforeach
                    {{-- End of Type: Package 1 --}}

                    </tbody>
<!------------------------------------------------Package, 31-50 pax (P40.5K, P45K, P49.5K, P55K)----------------------------->
                    <tbody id="tablePackage2">

                    {{-- Type: Package 2 --}}
                    @foreach ($dataJoin1 as $key=>$fee_type)
                    @if ($fee_type->type === 'Package 2')
                    
                    <tr class="th-blue-grey-lighten-2" id="package2">
                        <td class="title">

                            <input type="hidden" name="fee_id[]" value="{{ $fee_type->id }}" readonly>
                            <input type="text" class="d-none" value="{{ $fee_type->type }}" name="fee_type[]">
                            {{-- {{ $fee_type->type }} --}}
                            Package, 31-50 pax (P40.5K, P45K, P49.5K, P55K)

                        </td>

                        {{-- package_fees --}}
                        <td>
                            <fieldset>
                                <select class="form-select hf-c13 input js-mytooltip @error('') is-invalid @enderror"
                                    name="fee_package_num[]"
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
                                    <option value="40500" {{ $fee_type->package_fees == '40500' ? 'selected="selected"' : '' }} >
                                        &#8369;40,500
                                    </option>
                                    <option value="45000" {{ $fee_type->package_fees == '45000' ? 'selected="selected"' : '' }} >
                                        &#8369;45,000
                                    </option>
                                    <option value="49500" {{ $fee_type->package_fees == '49500' ? 'selected="selected"' : '' }} >
                                        &#8369;49,500
                                    </option>
                                    <option value="55000" {{ $fee_type->package_fees == '55000' ? 'selected="selected"' : '' }} >
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

                        {{-- num_sessions --}}
                        <td data-title="# OF SESSIONS" class="table-warning">
                            <input type="number" class="input js-mytooltip input-table form-control  @error('') is-invalid @enderror"
                                value="{{ $fee_type->num_sessions }}"
                                name="fee_num_sessions[]"
                                id="ef_package2FeeNos"
                                title=""

                                {{-- input validation --}}
                                max="100"
                                oninput="checkInputValidity(this)"
                                data-toggle="tooltip" data-placement="bottom" data-trigger="manual"
                                data-html="true" data-original-title="" data-error-message="Value should not exceed 100"

                                data-mytooltip-content="<i>Minimum is 1 session</i>"
                                data-mytooltip-theme="dark"
                                data-mytooltip-action="focus"
                                data-mytooltip-direction="bottom">
                        </td>

                        {{-- nswh --}}
                        <td data-title="NIGHT SHIFT, WEEKENDS HOLIDAYS *" class="table-warning">
                            <input type="number" class="input  input-table form-control  @error('') is-invalid @enderror"
                                value="{{ $fee_type->nswh }}"
                                name="fee_nswh[]"
                                id="eef_package2FeeNsw"
                                title=""

                                {{-- input validation --}}
                                max="100"
                                oninput="checkInputValidity(this)"
                                data-toggle="tooltip" data-placement="bottom" data-trigger="manual"
                                data-html="true" data-original-title="" data-error-message="Value should not exceed 100"

                                data-mytooltip-content="<i></i>"
                                data-mytooltip-theme="dark"
                                data-mytooltip-action="focus"
                                data-mytooltip-direction="bottom">
                        </td>
                        <td class="total-td">
                                <h4 class="text-center lead" id="ef_package2FeeTotal">-</h4>
                        </td>

                        {{-- notes --}}
                        <td class="total-td">
                            <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                value="{{ $fee_type->notes }}"name="fee_notes[]" id="">
                        </td>
                    </tr>

                    @endif
                    @endforeach
                    {{-- End of Type: Package 2 --}}                    

                    </tbody>
<!------------------------------------------------Producer (5K, 7.5K)--------------------------------------------------------->
                    <tbody id="tableProducer">

                    {{-- Type: Producer --}}
                    @foreach ($dataJoin1 as $key=>$fee_type)
                    @if ($fee_type->type === 'Producer')

                    <tr class="th-blue-grey-lighten-2" id="ef_producer">
                        <td class="title">

                            <input type="hidden" name="fee_id[]" value="{{ $fee_type->id }}" readonly>
                            <input type="text" class="d-none" value="{{ $fee_type->type }}" name="fee_type[]">
                            {{ $fee_type->type }} (5K, 7.5K)

                        </td>

                        {{-- package_fees --}}
                        <td>
                            <fieldset>
                                <select class="form-select hf-c13 input js-mytooltip @error('') is-invalid @enderror"
                                    name="fee_package_num[]"
                                    id="ef_producerFeePfv"
                                    data-mytooltip-content="<i>0 - client will provide the producer<br>
                                        P5,000 - 1.5-2 hour session<br>
                                        P7,500 - 2.5-3 hour session</i>"
                                    data-mytooltip-theme="dark"
                                    data-mytooltip-action="focus"
                                    data-mytooltip-direction="right"
                                    style="background-color:#ffcccc; color:red;">
                                    <option value="5000" {{ $fee_type->package_fees == '5000' ? 'selected="selected"' : '' }} >
                                        &#8369;5,000
                                    </option>
                                    <option value="7500" {{ $fee_type->package_fees == '7500' ? 'selected="selected"' : '' }} >
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

                        {{-- num_sessions --}}
                        <td data-title="# OF SESSIONS" class="table-warning">
                            <input type="number" class="input js-mytooltip input-table form-control  @error('') is-invalid @enderror"
                                value="{{ $fee_type->num_sessions }}"
                                name="fee_num_sessions[]"
                                id="ef_producerFeeNoc"
                                title=""

                                {{-- input validation --}}
                                max="100"
                                oninput="checkInputValidity(this)"
                                data-toggle="tooltip" data-placement="bottom" data-trigger="manual"
                                data-html="true" data-original-title="" data-error-message="Value should not exceed 100"

                                data-mytooltip-content="<i>Minimum is 1 session</i>"
                                data-mytooltip-theme="dark"
                                data-mytooltip-action="focus"
                                data-mytooltip-direction="bottom">
                        </td>

                        {{-- nswh --}}
                        <td data-title="NIGHT SHIFT, WEEKENDS LIDAYS *" class="table-warning">
                            <input type="number" class="input  input-table form-control  @error('') is-invalid @enderror"
                                value="{{ $fee_type->nswh }}"
                                name="fee_nswh[]"
                                id="ef_producerFeeNsw"
                                title=""

                                {{-- input validation --}}
                                max="100"
                                oninput="checkInputValidity(this)"
                                data-toggle="tooltip" data-placement="bottom" data-trigger="manual"
                                data-html="true" data-original-title="" data-error-message="Value should not exceed 100"

                                data-mytooltip-content="<i></i>"
                                data-mytooltip-theme="dark"
                                data-mytooltip-action="focus"
                                data-mytooltip-direction="bottom">
                        </td>
                        <td class="total-td">
                                <h4 class="text-center lead" id="ef_producerFeeTotal">-</h4>
                        </td>

                        {{-- notes --}}
                        <td class="total-td">
                            <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                value="{{ $fee_type->notes }}"name="fee_notes[]" id="">
                        </td>
                    </tr>

                    @endif
                    @endforeach
                    {{-- End of Type: Producer --}} 

                    </tbody>
<!------------------------------------------------SUBTOTAL PROGRAM-------------------------------------------------------------------->
                    <tr class="table-secondary" id="tableSubtotalProgram">
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
                                name="programSubtotal_notes" id="">
                        </td>
                    </tr>
<!-----------------------------------------------TOTAL STANDARD FEES--------------------------------------------------------->
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
                                name="totalStandardFees_notes" id="">
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
                                value="{{ old('') }}"  name="discount_notes" id="mg_total_dsct">
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
                            value="{{ old('') }}" name="mg_input_totalPackages" id="mg_input_totalPackages" style="font-size: 20px;" readonly>
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

// input validation script
$(function () {
  $('[data-toggle="tooltip"]').tooltip();
});

function checkInputValidity(input) {
  var max = parseInt(input.max);
  var value = parseInt(input.value);
  var errorMessage = input.dataset.errorMessage;

  if (value > max) {
    input.classList.add('is-invalid');
    input.dataset.originalTitle = errorMessage;
    $(input).tooltip('show');
  } else {
    input.classList.remove('is-invalid');
    $(input).tooltip('hide');
  }
}

</script>
{{-- scripts for this engagement fees --}}
@include('form.components.mgtstratu_workshops.workshops_script.workshops_engagementFees')