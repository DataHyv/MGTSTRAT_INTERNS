<script>
//CUSTOMIZATION FEE
var mufeeCustomizationFee = 1;
$(document).ready(function() {
    $("#mufeeaddButton1").on("click", function() {
    $("#tableCustomizationFee").append(
    `<tr class="th-blue-grey-lighten-2" id="customizationFee${++mufeeCustomizationFee}">
        <td class="title">
            <input type="text" class="d-none" value="Customization Fee" name="fee_type[]" readonly>
            Customization Fee
        </td>
        <td>
            <fieldset>
                <select class="form-select hf-c13 input js-mytooltip @error('') is-invalid @enderror"
                    name=""
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
        <td data-title="# OF SESSIONS" class="table-warning nos">
            <input type="number" class="input  input-table form-control  @error('') is-invalid @enderror"
                value="{{ old('') }}"
                name="fee_num_sessions[]"
                id="ef_customizationFeeNos"
                title=""
                max="100"
                data-mytooltip-content="<i></i>"
                data-mytooltip-theme="dark"
                data-mytooltip-action="focus"
                data-mytooltip-direction="bottom">
        </td>
        <td data-title="# NIGHT SHIFT, WEEKENDS HOLIDAYS" class="table-warning nsw">
            <input type="number" class="input  input-table form-control  @error('') is-invalid @enderror"
                value="{{ old('') }}"
                name="fee_nswh[]"
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
                value="{{ old('') }}"name="fee_notes[]" id="">
        </td>
        <td><a href="javascript:void(0)" class="text-danger font-18 remove" title="Remove"><i class="fa fa-trash-o"></i></a></td>
    </tr>`);

    $("#tableCustomizationFee").on("click", ".remove", function() {
        // Getting all the rows next to the row
        // containing the clicked button
        var child = $(this).closest("tr").nextAll();

        // Iterating across all the rows
        // obtained to change the index
        child.each(function () {
            // Getting <tr> id.
            var id = $(this).attr("id");

            // Getting the <input> inside the .noc, .nod.
            var nos = $(this).children(".nos").children("input");
            var nsw = $(this).children(".nsw").children("input");

            // Gets the row number from <tr> id.
            var dig = parseInt(id.substring(12));

            // Modifying row id.
            $(this).attr("id", `customizationFee${dig - 1}`);

            // Modifying row index.
            nos.attr("id", `ef_customizationFeeNos${dig - 1}`);
            nsw.attr("id", `ef_customizationFeeNsw${dig - 1}`);
        });

        // Removing the current row.
        $(this).closest("tr").remove();
        // Decreasing total number of rows by 1.
        mufeeCustomizationFee--;
        });
    });
});

//PACKAGE 1
var mufeePackage1 = 1;
$(document).ready(function() {
    $("#mufeeaddButton2").on("click", function() {
        $("#tablePackage1").append(
            `<tr class="th-blue-grey-lighten-2" id="package1${++mufeePackage1}">
                <td class="title">
                    <input type="text" class="d-none" value="Package 1" name="fee_type[]" readonly>
                    Package, up to 30 pax (P31.5K, P35K, P40.5K, P45K)
                </td>
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
                <td data-title="# OF SESSIONS" class="table-warning nos">
                    <input type="number" class="input js-mytooltip input-table form-control  @error('') is-invalid @enderror"
                        value="1"
                        name="fee_num_sessions[]"
                        id="ef_package1FeeNos"
                        title=""
                        max="100"
                        data-mytooltip-content="<i>Minimum is 1 session</i>"
                        data-mytooltip-theme="dark"
                        data-mytooltip-action="focus"
                        data-mytooltip-direction="bottom">
                </td>
                <td data-title="NIGHT SHIFT, WEEKENDS HOLIDAYS *" class="table-warning nsw">
                    <input type="number" class="input  input-table form-control  @error('') is-invalid @enderror"
                        value="{{ old('') }}"
                        name="fee_nswh[]"
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
                        value="{{ old('') }}"name="fee_notes[]" id="">
                </td>
                <td><a href="javascript:void(0)" class="text-danger font-18 remove" title="Remove"><i class="fa fa-trash-o"></i></a></td>
            </tr>`);

        $("#tablePackage1").on("click", ".remove", function() {
            // Getting all the rows next to the row
            // containing the clicked button
            var child = $(this).closest("tr").nextAll();

            // Iterating across all the rows
            // obtained to change the index
            child.each(function () {
                // Getting <tr> id.
                var id = $(this).attr("id");

                // Getting the <input> inside the .noc, .nod.
                var nos = $(this).children(".nos").children("input");
                var nsw = $(this).children(".nsw").children("input");

                // Gets the row number from <tr> id.
                var dig = parseInt(id.substring(12));

                // Modifying row id.
                $(this).attr("id", `package1${dig - 1}`);

                // Modifying row index.
                nos.attr("id", `ef_package1FeeNos${dig - 1}`);
                nsw.attr("id", `ef_package1FeeNsw${dig - 1}`);
            });

            // Removing the current row.
            $(this).closest("tr").remove();
            // Decreasing total number of rows by 1.
            mufeePackage1--;
            });
    });
});

//PACKAGE 2
var mufeePackage2 = 1;
$(document).ready(function() {
    $("#mufeeaddButton3").on("click", function() {
        $("#tablePackage2").append(
            `<tr class="th-blue-grey-lighten-2" id="package2${++mufeePackage2}">
                <td class="title">
                    <input type="text" class="d-none" value="Package 2" name="fee_type[]" readonly>
                    Package, 31-50 pax (P40.5K, P45K, P49.5K, P55K)
                </td>
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
                <td data-title="# OF SESSIONS" class="table-warning nos">
                    <input type="number" class="input js-mytooltip input-table form-control  @error('') is-invalid @enderror"
                        value="{{ old('') }}"
                        name="fee_num_sessions[]"
                        id="ef_package2FeeNos"
                        title=""
                        max="100"
                        data-mytooltip-content="<i>Minimum is 1 session</i>"
                        data-mytooltip-theme="dark"
                        data-mytooltip-action="focus"
                        data-mytooltip-direction="bottom">
                </td>
                <td data-title="NIGHT SHIFT, WEEKENDS HOLIDAYS *" class="table-warning nsw">
                    <input type="number" class="input  input-table form-control  @error('') is-invalid @enderror"
                        value="{{ old('') }}"
                        name="fee_nswh[]"
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
                        value="{{ old('') }}"name="fee_notes[]" id="">
                </td>
        <td><a href="javascript:void(0)" class="text-danger font-18 remove" title="Remove"><i class="fa fa-trash-o"></i></a></td>
    </tr>`);

        $("#tablePackage2").on("click", ".remove", function() {
            // Getting all the rows next to the row
            // containing the clicked button
            var child = $(this).closest("tr").nextAll();

            // Iterating across all the rows
            // obtained to change the index
            child.each(function () {
                // Getting <tr> id.
                var id = $(this).attr("id");

                // Getting the <input> inside the .noc, .nod.
                var nos = $(this).children(".nos").children("input");
                var nsw = $(this).children(".nsw").children("input");

                // Gets the row number from <tr> id.
                var dig = parseInt(id.substring(12));

                // Modifying row id.
                $(this).attr("id", `package2${dig - 1}`);

                // Modifying row index.
                nos.attr("id", `ef_package2FeeNos${dig - 1}`);
                nsw.attr("id", `eef_package2FeeNsw${dig - 1}`);
            });

            // Removing the current row.
            $(this).closest("tr").remove();
            // Decreasing total number of rows by 1.
            mufeePackage2--;
            });
    });
});


//PRODUCER
var mufeeProducer = 1;
$(document).ready(function() {
    $("#mufeeaddButton4").on("click", function() {
        $("#tableProducer").append(
            `<tr class="th-blue-grey-lighten-2" id="ef_producer${++mufeeProducer}">
                <td class="title">
                    <input type="text" class="d-none" value="Producer" name="fee_type[]" readonly>
                    Producer (5K, 7.5K)
                </td>
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
                <td data-title="# OF SESSIONS" class="table-warning nos">
                    <input type="number" class="input js-mytooltip input-table form-control  @error('') is-invalid @enderror"
                        value="1"
                        name="fee_num_sessions[]"
                        id="ef_producerFeeNoc"
                        title=""
                        max="100"
                        data-mytooltip-content="<i>Minimum is 1 session</i>"
                        data-mytooltip-theme="dark"
                        data-mytooltip-action="focus"
                        data-mytooltip-direction="bottom">
                </td>
                <td data-title="NIGHT SHIFT, WEEKENDS LIDAYS *" class="table-warning nsw">
                    <input type="number" class="input  input-table form-control  @error('') is-invalid @enderror"
                        value="{{ old('') }}"
                        name="fee_nswh[]"
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
                        value="{{ old('') }}"name="fee_notes[]" id="">
                </td>
                <td><a href="javascript:void(0)" class="text-danger font-18 remove" title="Remove"><i class="fa fa-trash-o"></i></a></td>
            </tr>`);

        $("#tableProducer").on("click", ".remove", function() {
            // Getting all the rows next to the row
            // containing the clicked button
            var child = $(this).closest("tr").nextAll();

            // Iterating across all the rows
            // obtained to change the index
            child.each(function () {
                // Getting <tr> id.
                var id = $(this).attr("id");

                // Getting the <input> inside the .noc, .nod.
                var nos = $(this).children(".nos").children("input");
                var nsw = $(this).children(".nsw").children("input");

                // Gets the row number from <tr> id.
                var dig = parseInt(id.substring(12));

                // Modifying row id.
                $(this).attr("id", `ef_producer${dig - 1}`);

                // Modifying row index.
                nos.attr("id", `ef_producerFeeNoc${dig - 1}`);
                nsw.attr("id", `ef_producerFeeNsw${dig - 1}`);
            });

            // Removing the current row.
            $(this).closest("tr").remove();
            // Decreasing total number of rows by 1.
            mufeeProducer--;
            });
    });
});

</script>