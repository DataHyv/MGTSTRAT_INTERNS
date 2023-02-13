<script>
    $(document).ready(function() {
/*******************************************************CONSULTING*********************************************************************/
        /********* LEAD CONSULTANT *********/
        //LEAD CONSULTANT TRIGGER APPEND WHEN ADD BUTTON CLICKED
        var rowIdx = {{$efLeadConsultant}};
        $("#addBtn").on("click", function() {
            // Adding a row inside the tbody.
            $("#tableLeadconsultant").append(`
                <tr id="leadConsultant${++rowIdx}" class="table-warning">
                    <td class="title table-light">
                        <input type="text" class="d-none" value="Lead Consultant" name="fee_type[]" readonly>
                        Lead Consultant
                    </td>
                    <td data-title="# OF CONSULTANTS" class="noc">
                        <input type="text"
                            class="commanumber input js-mytooltip input-table form-control  @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="fee_consultant_num[]" id="ef_LeadconsultantNoc${rowIdx}" data-type="currency"
                            data-mytooltip-content="<i>Includes in depth needs analysis (i.e. surveys, interviews, FGDs),
                            special research (i.e. to study client materials or client -required materials, industry
                            or function specific content), creation of client-specific learning aids/tools
                            (i.e. assessments, c</i>"
                            data-mytooltip-theme="dark" data-mytooltip-action="focus"
                            data-mytooltip-direction="bottom"
                            oninput="document.getElementById('ec_LeadconsultantNoc${rowIdx}').value = document.getElementById('ef_LeadconsultantNoc${rowIdx}').value;">
                    </td>
                    <td>
                        <fieldset>
                            <select class="form-select input js-mytooltip @error('') is-invalid @enderror" name="fee_hour_fee[]"
                                id="ef_LeadconsultantHf" data-mytooltip-content="<i> &#8369;7,000 - Consultants<br>
                                &#8369;9,000 - Senior Consultants </i>" data-mytooltip-theme="dark"
                                data-mytooltip-action="focus" data-mytooltip-direction="right"
                                style="background-color:#ffcccc; color:red;">
                                            <option value="7000" {{ old('') == '7000' ? 'selected="selected"' : '' }}>
                                    &#8369;7,000
                                </option>
                                            <option value="9000" {{ old('') == '9000' ? 'selected="selected"' : '' }}>
                                    &#8369;9,000
                                </option>
                            </select>


                            @error('')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror


                        </fieldset>
                    </td>
                    <td class="noh">
                        <input type="text"
                            class="commanumber form-control input-table input js-mytooltip @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="fee_hour_num[]" id="ef_LeadconsultantNoh${rowIdx}" data-type="currency"
                            data-mytooltip-content="<i>Number of Hours</i>" data-mytooltip-theme="dark"
                            data-mytooltip-action="focus" data-mytooltip-direction="bottom"
                            oninput="document.getElementById('ec_LeadconsultantNoh${rowIdx}').value = document.getElementById('ef_LeadconsultantNoh${rowIdx}').value;">
                    </td>
                    <td class="nwh">
                        <input type="text" class="commanumber form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="fee_nswh[]" id="ef_LeadconsultantNwh${rowIdx}" data-type="currency"
                            oninput="document.getElementById('ec_LeadconsultantNwh${rowIdx}').value = document.getElementById('ef_LeadconsultantNwh${rowIdx}').value;">
                        <input type="text" class="nswh-percent-value" name="nswh_percent[]" hidden>
                    </td>
                    <td class="total-td table-light">
                        <h4 class="text-center lead" id="leadTotal">-</h4>
                    </td>
                    <td class="total-td table-light">
                        <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="fee_notes[]" id="">
                    </td>
                    <td class="border border-white" style="background-color: #FFFFFF;">
                        <a href="javascript:void(0)" class="text-danger font-18 remove" title="Remove" onclick="$('#ecButton${rowIdx}').trigger('click');">
                            <i class="fa fa-trash-o"></i>
                        </a>
                    </td>
                </tr>
            `);
        });

        //REMOVE LEAD CONSULTANT ROW
        $("#tableLeadconsultant").on("click", ".remove", function () {

                // Getting all the rows next to the row
                // containing the clicked button
                var child = $(this).closest("tr").nextAll();

                // Iterating across all the rows
                // obtained to change the index
                child.each(function () {
                    // Getting <tr> id.
                    var id = $(this).attr("id");

                    // Getting the <input> inside the .noc, .noh, .nwh class.
                    var noc = $(this).children(".noc").children("input");
                    var noh = $(this).children(".noh").children("input");
                    var nwh = $(this).children(".nwh").children("input");

                    // Gets the row number from <tr> id.
                    var dig = parseInt(id.substring(14));

                    // Modifying row id.
                    $(this).attr("id", `leadConsultant${dig - 1}`);

                    // Modifying row index.
                    noc.attr("id", `ef_LeadconsultantNoc${dig - 1}`);
                    noh.attr("id", `ef_LeadconsultantNoh${dig - 1}`);
                    nwh.attr("id", `ef_LeadconsultantNwh${dig - 1}`);
                });

                // Removing the current row.
                $(this).closest("tr").remove();

                // Decreasing total number of rows by 1.
                rowIdx--;
                // $(`#ecButton${rowIdx}`).trigger('click');
        });

        /********* ANALYST *********/
        //ANALYST TRIGGER APPEND WHEN ADD BUTTON CLICKED
        var efAnalyst = {{$efAnalyst}};
        $("#addBtn2").on("click", function() {
            // Adding a row inside the tbody.
            $("#tableAnalyst").append(`
                <tr class="table-warning" id="Analyst${++efAnalyst}">
                        <td class="title table-light">
                            <input type="text" class="d-none" value="Analyst" name="fee_type[]" readonly>
                            Analyst
                        </td>
                        <td class="noc">
                            <input type="text"
                                class="commanumber input js-mytooltip form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="fee_consultant_num[]" id="ef_AnalystNoc${efAnalyst}" data-type="currency" data-mytooltip-content="<i>Includes in depth needs analysis (i.e. surveys,   interviews, FGDs),
                                    special research (i.e. to study client materials or client -required materials, industry
                                    or function specific content), creation of client-specific learning aids/tools
                                    (i.e. assessments, c</i>" data-mytooltip-theme="dark" data-mytooltip-action="focus"
                                data-mytooltip-direction="bottom" oninput="document.getElementById('ec_AnalystNoc${efAnalyst}').value = document.getElementById('ef_AnalystNoc${efAnalyst}').value;">
                        </td>
                        <td>
                            <input type="text" class="commanumber form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="fee_hour_fee[]" id="ef_AnalystHf" data-type="currency">
                        </td>
                        <td class="noh">
                            <input type="text"
                                class="commanumber input js-mytooltip form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="fee_hour_num[]" id="ef_AnalystNoh${efAnalyst}" data-type="currency"
                                data-mytooltip-content="<i>Number of Hours</i>" data-mytooltip-theme="dark"
                                data-mytooltip-action="focus" data-mytooltip-direction="bottom"
                                oninput="document.getElementById('ec_AnalystNoh${efAnalyst}').value = document.getElementById('ef_AnalystNoh${efAnalyst}').value;">
                        </td>
                        <td class="nwh">
                            <input type="text" class="commanumber form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="fee_nswh[]" id="ef_AnalystNwh${efAnalyst}" data-type="currency"
                                oninput="document.getElementById('ec_AnalystNwh${efAnalyst}').value = document.getElementById('ef_AnalystNwh${efAnalyst}').value;">
                            <input type="text" class="nswh-percent-value" name="nswh_percent[]" hidden>
                        </td>
                        <td class="total-td table-light">
                            <h4 class="text-center lead" id="analyst-total">-</h4>
                        </td>
                        <td class="total-td table-light">
                            <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="fee_notes[]" id="">
                        </td>
                        <td class="border border-white" style="background-color: #FFFFFF;">
                            <a href="javascript:void(0)" class="text-danger font-18 remove" title="Remove" onclick="$('#ecAnalystRemove${efAnalyst}').trigger('click');">
                                <i class="fa fa-trash-o"></i>
                            </a>
                        </td>
                </tr>
            `);
        });

        //REMOVE ANALYST ROW
        $("#tableAnalyst").on("click", ".remove", function () {
                // Getting all the rows next to the row
                // containing the clicked button
                var child = $(this).closest("tr").nextAll();

                // Iterating across all the rows
                // obtained to change the index
                child.each(function () {
                    // Getting <tr> id.
                    var id = $(this).attr("id");

                    // Getting the <input> inside the .noc, .noh, .nwh class.
                    var noc = $(this).children(".noc").children("input");
                    var noh = $(this).children(".noh").children("input");
                    var nwh = $(this).children(".nwh").children("input");

                    // Gets the row number from <tr> id.
                    var dig = parseInt(id.substring(7));

                    // Modifying row id.
                    $(this).attr("id", `Analyst${dig - 1}`);

                    // Modifying row index.
                    noc.attr("id", `ef_AnalystNoc${dig - 1}`);
                    noh.attr("id", `ef_AnalystNoh${dig - 1}`);
                    nwh.attr("id", `ef_AnalystNwh${dig - 1}`);
                });

                // Removing the current row.
                $(this).closest("tr").remove();

                // Decreasing total number of rows by 1.
                efAnalyst--;
                // $(`#ecButton${rowIdx}`).trigger('click');
        });

/*******************************************************DESIGNER*********************************************************************/
        /********* DESIGNER *********/
        //DESIGNER TRIGGER APPEND WHEN ADD BUTTON CLICKED
        var efDesigner = {{$efDesigner}};
        $("#addBtn3").on("click", function() {
            // Adding a row inside the tbody.
            $("#tableDesigner").append(`
            <tr id="efDesigner${++efDesigner}" class="table-warning">
                <td class="title table-light">
                    <input type="text" class="d-none" value="Designer" name="fee_type[]" readonly>
                    Designer
                </td>
                <td class="noc">
                    <input type="text"
                        class="commanumber input js-mytooltip form-control input-table @error('') is-invalid @enderror"
                        value="{{ old('') }}" name="fee_consultant_num[]" id="ef_DesignerNoc${efDesigner}" data-type="currency" data-mytooltip-content="<i>Includes in depth needs analysis (i.e. surveys, interviews, FGDs),
                            special research (i.e. to study client materials or client -required materials, industry
                            or function specific content), creation of client-specific learning aids/tools
                            (i.e. assessments, c</i>" data-mytooltip-theme="dark" data-mytooltip-action="focus"
                        data-mytooltip-direction="bottom"
                        oninput="document.getElementById('ec_DesignerNoc${efDesigner}').value = document.getElementById('ef_DesignerNoc${efDesigner}').value;">
                </td>
                <td>
                    <fieldset>
                        <select class="input js-mytooltip form-select @error('') is-invalid @enderror select"
                            name="fee_hour_fee[]" id="ef_DesignerHf" data-mytooltip-content="<i>Consulting - &#8369;6,000 - Consultants<br>
                                &#8369;8,000 - Senior Consultants</i>" data-mytooltip-theme="dark"
                            data-mytooltip-action="focus" data-mytooltip-direction="right"
                            style="background-color:#ffcccc; color:red;">
                            <option value="6000" {{ old('') == '6000' ? 'selected="selected"' : '' }}>
                                &#8369;6,000
                            </option>
                            <option value="8000" {{ old('') == '8000' ? 'selected="selected"' : '' }}>
                                &#8369;8,000
                            </option>
                        </select>

                        @error('')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                    </fieldset>
                </td>
                <td class="noh">
                    <input type="text"
                        class="commanumber input js-mytooltip form-control input-table @error('') is-invalid @enderror"
                        value="{{ old('') }}" name="fee_hour_num[]" id="ef_DesignerNoh${efDesigner}" data-type="currency"
                        data-mytooltip-content="<i>Number of Hours</i>" data-mytooltip-theme="dark"
                        data-mytooltip-action="focus" data-mytooltip-direction="bottom"
                        oninput="document.getElementById('ec_DesignerNoh${efDesigner}').value = document.getElementById('ef_DesignerNoh${efDesigner}').value;">
                </td>
                <td class="nwh">
                    <input type="text" class="commanumber form-control input-table @error('') is-invalid @enderror"
                        value="{{ old('') }}" name="fee_nswh[]" id="ef_DesignerNwh${efDesigner}" data-type="currency"
                        oninput="document.getElementById('ec_DesignerNwh${efDesigner}').value = document.getElementById('ef_DesignerNwh${efDesigner}').value;">
                    <input type="text" class="nswh-percent-value" name="nswh_percent[]" hidden>
                </td>
                <td class="total-td table-light" style="background-color: rgba(146, 146, 146, 0.727)">
                    <h4 class="text-center" id="subtotal-design">-</h4>
                </td>
                <td class="total-td table-light">
                    <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                        value="{{ old('') }}" name="fee_notes[]" id="">
                </td>
                <td class="border border-white" style="background-color: #FFFFFF;">
                    <a href="javascript:void(0)" class="text-danger font-18 remove" onclick="$('#ecDesignerRemove${efDesigner}').trigger('click');" title="Remove">
                        <i class="fa fa-trash-o"></i>
                    </a>
                </td>
            </tr>`);
        });

        //REMOVE DESIGNER ROW
        $("#tableDesigner").on("click", ".remove", function () {
                // Getting all the rows next to the row
                // containing the clicked button
                var child = $(this).closest("tr").nextAll();

                // Iterating across all the rows
                // obtained to change the index
                child.each(function () {
                    // Getting <tr> id.
                    var id = $(this).attr("id");

                    // Getting the <input> inside the .noc, .noh, .nwh class.
                    var noc = $(this).children(".noc").children("input");
                    var noh = $(this).children(".noh").children("input");
                    var nwh = $(this).children(".nwh").children("input");

                    // Gets the row number from <tr> id.
                    var dig = parseInt(id.substring(10));

                    // Modifying row id.
                    $(this).attr("id", `efDesigner${dig - 1}`);

                    // Modifying row index.
                    noc.attr("id", `ef_DesignerNoc${dig - 1}`);
                    noh.attr("id", `ef_DesignerNoh${dig - 1}`);
                    nwh.attr("id", `ef_DesignerNwh${dig - 1}`);
                });

                // Removing the current row.
                $(this).closest("tr").remove();

                // Decreasing total number of rows by 1.
                efDesigner--;
            });

/*******************************************************PROGRAM*********************************************************************/
        /********* LEAD FACILITATOR *********/
        // LEAD FACILITATOR TRIGGER APPEND WHEN ADD BUTTON CLICKED
        var efLeadfaci = {{$efLeadfaci}};
        $("#addBtn4").on("click", function() {
            // Adding a row inside the tbody.
            $("#tableLeadfaci").append(`
                <tr id="rowLeadFaci${++efLeadfaci}" class="table-warning">
                    <td class="title table-light">
                        <input type="text" class="d-none" value="Lead Facilitator" name="fee_type[]" readonly>
                        Lead Facilitator
                    </td>
                    <td class="noc">
                        <input type="number" class="form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="fee_consultant_num[]" id="ef_LeadfacilitatorNoc${efLeadfaci}"
                            oninput="document.getElementById('ec_LeadfacilitatorNoc${efLeadfaci}').value = document.getElementById('ef_LeadfacilitatorNoc${efLeadfaci}').value;">
                    </td>
                    <td>
                        <div class="form-group has-icon-right mb-0" id="inputLeadfaci${efLeadfaci}" style="display:none">
                            <div class="position-relative">
                                <input type="text" class="commanumber form-control input-table @error('') is-invalid @enderror" value="{{ old('') }}"
                                    name="fee_hour_fee[]" id="ef_InputLeadFaciHf${efLeadfaci}" data-type="currency" disabled>
                                <div class="form-control-icon">
                                    <a href="javascript:void(0)" class="deleteIcon" id="deleteIcon${efLeadfaci}"
                                            onclick="$('#inputLeadfaci${efLeadfaci}').css('display', 'none');
                                            $('#ef_InputLeadFaciHf${efLeadfaci}').prop('disabled', true);
                                            $('#inputLeadfaci${efLeadfaci}').css('display', 'none');
                                            $('#ef_LeadfacilitatorHf${efLeadfaci}').prop('disabled', false);
                                            $('#ef_LeadfacilitatorHf${efLeadfaci}').css('display', '');
                                            $('#ef_LeadfacilitatorHf${efLeadfaci}').val('12,000');">
                                        <i class="fa-solid fa-square-xmark text-danger"></i>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <fieldset>
                            <select
                                class="input js-mytooltip form-select engagement-fee @error('') is-invalid @enderror select"
                                name="fee_hour_fee[]" id="ef_LeadfacilitatorHf${efLeadfaci}" data-mytooltip-content="<i>&#8369;10,000 - For Key Accounts w/ 2021 contract <br>
                                    &#8369;11,000 - For Key Accounts with minimum guaranteed 50 sessions w/in 6 months <br>
                                    &#8369;12,000 - all else</i>" data-mytooltip-theme="dark"
                                data-mytooltip-action="focus" data-mytooltip-direction="right" style="background-color:#ffcccc; color:red;"
                                onchange="if ($('#others${efLeadfaci}').is(':selected')){
                                            $('#inputLeadfaci${efLeadfaci}').css('display', '')
                                            $('#ef_InputLeadFaciHf${efLeadfaci}').prop('disabled', false)
                                            $('#ef_InputLeadFaciHf${efLeadfaci}').val('')
                                            $('#ef_LeadfacilitatorHf${efLeadfaci}').prop('disabled', true)
                                            $('#ef_LeadfacilitatorHf${efLeadfaci}').css('display', 'none')
                                        } else {
                                            $('#inputLeadfaci${efLeadfaci}').css('display', 'none')
                                        }">
                                <option value="10,000" {{ old('') == '10,000' ? 'selected="selected"' : '' }}>
                                    &#8369;10,000
                                </option>
                                <option value="11,000" {{ old('') == '11,000' ? 'selected="selected"' : '' }}>
                                    &#8369;11,000
                                </option>
                                <option value="12,000" {{ old('') == '12,000' ? 'selected="selected"' : '' }} selected>
                                    &#8369;12,000
                                </option>
                                <option id="others${efLeadfaci}" value="others" {{ old('') == 'others' ? 'selected="selected"' : '' }}>
                                    Others
                                </option>
                            </select>

                                @error('ef_customFee')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                        </fieldset>
                    </td>
                    <td class="noh">
                        <input type="text"
                            class="commanumber input js-mytooltip form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="fee_hour_num[]" id="ef_LeadfacilitatorNoh${efLeadfaci}" data-type="currency"
                            data-mytooltip-content="<i>Number of Hours</i>" data-mytooltip-theme="dark"
                            data-mytooltip-action="focus" data-mytooltip-direction="bottom"
                            oninput="document.getElementById('ec_LeadfacilitatorNoh${efLeadfaci}').value = document.getElementById('ef_LeadfacilitatorNoh${efLeadfaci}').value;">
                        </td>
                    <td class="nwh">
                        <input type="text" class="commanumber form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="fee_nswh[]" id="ef_LeadfacilitatorNwh${efLeadfaci}" data-type="currency" oninput="document.getElementById('ec_LeadfacilitatorNwh${efLeadfaci}').value = document.getElementById('ef_LeadfacilitatorNwh${efLeadfaci}').value;">
                        <input type="text" class="nswh-percent-value" name="nswh_percent[]" hidden>
                    </td>
                    <td class="total-td table-light">
                        <h4 class="text-center lead" id="subtotal-lead">-</h4>
                    </td>
                    <td class="total-td table-light">
                        <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="fee_notes[]" id="">
                    </td>
                    <td class="border border-white" style="background-color: #FFFFFF;">
                        <a href="javascript:void(0)" class="text-danger font-18 remove" onclick="$('#ecLeadfaciRemove${efLeadfaci}').trigger('click');" title="Remove">
                            <i class="fa fa-trash-o"></i>
                        </a>
                    </td>
                </tr>
            `);
        });

        // REMOVE LEAD FACILITATOR ROW
        $("#tableLeadfaci").on("click", ".remove", function () {
                // Getting all the rows next to the row
                // containing the clicked button
                var child = $(this).closest("tr").nextAll();

                // Iterating across all the rows
                // obtained to change the index
                child.each(function () {
                    // Getting <tr> id.
                    var id = $(this).attr("id");

                    // Getting the <input> inside the .noc, .noh, .nwh class.
                    var noc = $(this).children(".noc").children("input");
                    var noh = $(this).children(".noh").children("input");
                    var nwh = $(this).children(".nwh").children("input");

                    // Gets the row number from <tr> id.
                    var dig = parseInt(id.substring(11));

                    // Modifying row id.
                    $(this).attr("id", `rowLeadFaci${dig - 1}`);

                    // Modifying row index.
                    noc.attr("id", `ef_LeadfacilitatorNoc${dig - 1}`);
                    noh.attr("id", `ef_LeadfacilitatorNoh${dig - 1}`);
                    nwh.attr("id", `ef_LeadfacilitatorNwh${dig - 1}`);
                });

                // Removing the current row.
                $(this).closest("tr").remove();

                // Decreasing total number of rows by 1.
                efLeadfaci--;
        });

        /********* CO FACILITATOR *********/
        //CO FACILITATOR TRIGGER APPEND WHEN ADD BUTTON CLICKED
        var efCofaci = {{$efCofaci}};
        $("#addBtn5").on("click", function() {
            // Adding a row inside the tbody.
            $("#tableCofaci").append(`
            <tr id="efCofaci${++efCofaci}" class="table-warning">
                    <td class="title table-light">
                        <input type="text" class="d-none" value="Co-facilitator / Resource Speaker" name="fee_type[]" readonly>
                        Co-facilitator / Resource Speaker
                    </td>
                    <td class="noc">
                        <input type="text" class="commanumber form-control input-table @error('') is-invalid @enderror" value="{{ old('') }}"
                            name="fee_consultant_num[]" id="ef_CofaciNoc${efCofaci}" oninput="document.getElementById('ec_CofacilitatorNoc${efCofaci}').value = document.getElementById('ef_CofaciNoc${efCofaci}').value;" data-type="currency">
                    </td>
                    <td>
                        <input type="text" class="commanumber form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="fee_hour_fee[]" id="ef_CofaciHf" data-type="currency">
                    </td>
                    <td class="noh">
                        <input type="text" class="commanumber input js-mytooltip form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="fee_hour_num[]" id="ef_CofaciNoh${efCofaci}" data-type="currency"
                            data-mytooltip-content="<i>Number of Hours</i>" data-mytooltip-theme="dark"
                            data-mytooltip-action="focus" data-mytooltip-direction="bottom"
                            oninput="document.getElementById('ec_CofacilitatorNoh${efCofaci}').value = document.getElementById('ef_CofaciNoh${efCofaci}').value;">
                    </td>
                    <td class="nwh">
                        <input type="text" class="commanumber form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="fee_nswh[]" id="ef_CofaciNwh${efCofaci}" data-type="currency"
                            oninput="document.getElementById('ec_CofacilitatorNwh${efCofaci}').value = document.getElementById('ef_CofaciNwh${efCofaci}').value;">
                        <input type="text" class="nswh-percent-value" name="nswh_percent[]" hidden>
                    </td>
                    <td class="total-td table-light">
                        <h4 class="text-center lead" id="subtotal-coFacilitator">-</h4>
                    </td>
                    <td class="total-td table-light">
                        <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="fee_notes[]" id="">
                    </td>
                    <td class="border border-white" style="background-color: #FFFFFF;">
                        <a href="javascript:void(0)" class="text-danger font-18 remove" title="Remove" onclick="$('#ecCofaciRemove${efCofaci}').trigger('click');">
                            <i class="fa fa-trash-o"></i>
                        </a>
                    </td>
                </tr>`);
        });

        //REMOVE CO FACILITATOR ROW
        $("#tableCofaci").on("click", ".remove", function () {
                // Getting all the rows next to the row
                // containing the clicked button
                var child = $(this).closest("tr").nextAll();

                // Iterating across all the rows
                // obtained to change the index
                child.each(function () {
                    // Getting <tr> id.
                    var id = $(this).attr("id");

                    // Getting the <input> inside the .noc, .noh, .nwh class.
                    var noc = $(this).children(".noc").children("input");
                    var noh = $(this).children(".noh").children("input");
                    var nwh = $(this).children(".nwh").children("input");

                    // Gets the row number from <tr> id.
                    var dig = parseInt(id.substring(8));

                    // Modifying row id.
                    $(this).attr("id", `efCofaci${dig - 1}`);

                    // Modifying row index.
                    noc.attr("id", `ef_CofaciNoc${dig - 1}`);
                    noh.attr("id", `ef_CofaciNoh${dig - 1}`);
                    nwh.attr("id", `ef_CofaciNwh${dig - 1}`);
                });

                // Removing the current row.
                $(this).closest("tr").remove();

                // Decreasing total number of rows by 1.
                efCofaci--;
        });

        /********* MODERATOR *********/
        //MODERATOR TRIGGER APPEND WHEN ADD BUTTON CLICKED
        var efModerator = {{$efModerator}};
        $("#addBtn6").on("click", function() {
            // Adding a row inside the tbody.
            $("#tableModerator").append(`
            <tr id="efModeratorRow${++efModerator}" class="table-warning">
                <td class="title table-light">
                    <input type="text" class="d-none" value="Moderator" name="fee_type[]" readonly>
                    Moderator
                </td>
                <td class="noc">
                    <input type="text" class="commanumber form-control input-table @error('') is-invalid @enderror"
                        value="{{ old('') }}" name="fee_consultant_num[]" id="ef_ModeratorNoc${efModerator}" data-type="currency"
                        oninput="document.getElementById('ec_ModeratorNoc${efModerator}').value = document.getElementById('ef_ModeratorNoc${efModerator}').value;">
                </td>
                <td>
                    <input type="text" class="commanumber form-control input-table @error('') is-invalid @enderror"
                        value="{{ old('') }}" name="fee_hour_fee[]" id="ef_ModeratorHf" data-type="currency">
                </td>
                <td class="noh">
                    <input type="text"
                        class="icommanumber nput js-mytooltip form-control input-table @error('') is-invalid @enderror"
                        value="{{ old('') }}" name="fee_hour_num[]" id="ef_ModeratorNoh${efModerator}" data-type="currency"
                        data-mytooltip-content="<i>Number of Hours</i>" data-mytooltip-theme="dark"
                        data-mytooltip-action="focus" data-mytooltip-direction="bottom"
                        oninput="document.getElementById('ec_ModeratorNoh${efModerator}').value = document.getElementById('ef_ModeratorNoh${efModerator}').value;">
                </td>
                <td class="nwh">
                    <input type="text" class="commanumber form-control input-table @error('') is-invalid @enderror"
                        value="{{ old('') }}" name="fee_nswh[]" id="ef_ModeratorNwh${efModerator}" data-type="currency"
                        oninput="document.getElementById('ec_ModeratorNwh${efModerator}').value = document.getElementById('ef_ModeratorNwh${efModerator}').value;">
                    <input type="text" class="nswh-percent-value" name="nswh_percent[]" hidden>
                </td>
                <td class="total-td table-light">
                    <h4 class="text-center lead" id="subtotal-moderator">-</h4>
                </td>
                <td class="total-td table-light">
                    <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                        value="{{ old('') }}" name="fee_notes[]" id="">
                </td>
                <td class="border border-white" style="background-color: #FFFFFF;">
                    <a href="javascript:void(0)" class="text-danger font-18 remove" title="Remove" onclick="$('#ecModeratorRemove${efModerator}').trigger('click');">
                        <i class="fa fa-trash-o"></i>
                    </a>
                </td>
            </tr>`);
        });

        //REMOVE MODERATOR ROW
        $("#tableModerator").on("click", ".remove", function () {
                // Getting all the rows next to the row
                // containing the clicked button
                var child = $(this).closest("tr").nextAll();

                // Iterating across all the rows
                // obtained to change the index
                child.each(function () {
                    // Getting <tr> id.
                    var id = $(this).attr("id");

                    // Getting the <input> inside the .noc, .noh, .nwh class.
                    var noc = $(this).children(".noc").children("input");
                    var noh = $(this).children(".noh").children("input");
                    var nwh = $(this).children(".nwh").children("input");

                    // Gets the row number from <tr> id.
                    var dig = parseInt(id.substring(14));

                    // Modifying row id.
                    $(this).attr("id", `efModeratorRow${dig - 1}`);

                    // Modifying row index.
                    noc.attr("id", `ef_ModeratorNoc${dig - 1}`);
                    noh.attr("id", `ef_ModeratorNoh${dig - 1}`);
                    nwh.attr("id", `ef_ModeratorNwh${dig - 1}`);
                });

                // Removing the current row.
                $(this).closest("tr").remove();

                // Decreasing total number of rows by 1.
                efModerator--;
        });

        /********* PRODUCER *********/
        //PRODUCER TRIGGER APPEND WHEN ADD BUTTON CLICKED
        var efProducer = {{$efProducer}};
        $("#addBtn7").on("click", function() {
            // Adding a row inside the tbody.
            $("#tableProducer").append(`
            <tr id="efProducerRow${++efProducer}" class="table-warning">
                <td class="title table-light">
                    <input type="text" class="d-none" value="Producer" name="fee_type[]" readonly>
                    Producer
                </td>
                <td class="noc">
                    <input type="text" class="commanumber form-control input-table @error('') is-invalid @enderror"
                        value="{{ old('') }}" name="fee_consultant_num[]" id="ef_ProducerNoc${efProducer}" oninput="document.getElementById('ec_ProducerNoc${efProducer}').value = document.getElementById('ef_ProducerNoc${efProducer}').value;" data-type="currency">
                </td>
                <td>
                    <input type="text" class="commanumber form-control input-table @error('') is-invalid @enderror"
                        value="{{ old('') }}" name="fee_hour_fee[]" id="ef_ProducerHf" data-type="currency">
                </td>
                <td class="noh">
                    <input type="text"
                        class="commanumber input js-mytooltip form-control input-table @error('') is-invalid @enderror"
                        value="{{ old('') }}" name="fee_hour_num[]" id="ef_ProducerNoh${efProducer}" data-type="currency"
                        data-mytooltip-content="<i>Number of Hours</i>" data-mytooltip-theme="dark"
                        data-mytooltip-action="focus" data-mytooltip-direction="bottom"
                        oninput="document.getElementById('ec_ProducerNoh${efProducer}').value = document.getElementById('ef_ProducerNoh${efProducer}').value;">
                </td>
                <td class="nwh">
                    <input type="text" class="commanumber form-control input-table @error('') is-invalid @enderror"
                        value="{{ old('') }}" name="fee_nswh[]" id="ef_ProducerNwh${efProducer}" data-type="currency" oninput="document.getElementById('ec_ProducerNwh${efProducer}').value = document.getElementById('ef_ProducerNwh${efProducer}').value;">
                    <input type="text" class="nswh-percent-value" name="nswh_percent[]" hidden>
                </td>
                <td class="total-td table-light">
                    <h4 class="text-center lead" id="subtotal-producer">-</h4>
                </td>
                <td class="total-td table-light">
                    <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                        value="{{ old('') }}" name="fee_notes[]" id="">
                </td>
                <td class="border border-white" style="background-color: #FFFFFF;">
                    <a href="javascript:void(0)" class="text-danger font-18 remove" onclick="$('#ecProducerRemove${efProducer}').trigger('click');" title="Remove">
                        <i class="fa fa-trash-o"></i>
                    </a>
                </td>
            </tr>`);
        });

        //REMOVE PRODUCER ROW
        $("#tableProducer").on("click", ".remove", function () {
            // Getting all the rows next to the row
            // containing the clicked button
            var child = $(this).closest("tr").nextAll();

            // Iterating across all the rows
            // obtained to change the index
            child.each(function () {
                // Getting <tr> id.
                var id = $(this).attr("id");

                // Getting the <input> inside the .noc, .noh, .nwh class.
                var noc = $(this).children(".noc").children("input");
                var noh = $(this).children(".noh").children("input");
                var nwh = $(this).children(".nwh").children("input");

                // Gets the row number from <tr> id.
                var dig = parseInt(id.substring(13));

                // Modifying row id.
                $(this).attr("id", `efProducerRow${dig - 1}`);

                // Modifying row index.
                noc.attr("id", `ef_ProducerNoc${dig - 1}`);
                noh.attr("id", `ef_ProducerNoh${dig - 1}`);
                nwh.attr("id", `ef_ProducerNwh${dig - 1}`);
            });

            // Removing the current row.
            $(this).closest("tr").remove();

            // Decreasing total number of rows by 1.
            efProducer--;
        });

/*******************************************************OTHER ROLES*********************************************************************/
        /********* DOCUMENTOR *********/
        //DOCUMENTOR TRIGGER APPEND WHEN ADD BUTTON CLICKED
        var efDocumentor = {{$efDocumentor}};
        $("#addBtn8").on("click", function() {
            // Adding a row inside the tbody.
            $("#tableDocumentor").append(`
                <tr id="rowDocumentor${++efDocumentor}" class="table-warning">
                    <td class="title table-light">
                        <input type="text" class="d-none" value="Documentor" name="fee_type[]" readonly>
                        Documentor
                    </td>
                    <td class="noc">
                        <input type="text" class="commanumber form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="fee_consultant_num[]" id="ef_DocumentorNoc${efDocumentor}" data-type="currency"
                            oninput="document.getElementById('ec_DocumentorNoc${efDocumentor}').value = document.getElementById('ef_DocumentorNoc${efDocumentor}').value;">
                    </td>
                    <td>
                        <input type="text" class="commanumber form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="fee_hour_fee[]" id="ef_DocumentorHf" data-type="currency">
                    </td>
                    <td class="noh">
                        <input type="text"
                            class="commanumber input js-mytooltip form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="fee_hour_num[]" id="ef_DocumentorNoh${efDocumentor}" data-type="currency"
                            data-mytooltip-content="<i>Number of Hours</i>" data-mytooltip-theme="dark"
                            data-mytooltip-action="focus" data-mytooltip-direction="bottom"
                            oninput="document.getElementById('ec_DocumentorNoh${efDocumentor}').value = document.getElementById('ef_DocumentorNoh${efDocumentor}').value;">
                    </td>
                    <td class="nwh">
                        <input type="text" class="commanumber form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="fee_nswh[]" id="ef_DocumentorNwh${efDocumentor}" data-type="currency"
                            oninput="document.getElementById('ec_DocumentorNwh${efDocumentor}').value = document.getElementById('ef_DocumentorNwh${efDocumentor}').value;">
                        <input type="text" class="nswh-percent-value" name="nswh_percent[]" hidden>
                    </td>
                    <td class="total-td table-light" style="background-color: rgba(146, 146, 146, 0.727">
                        <h4 class="text-center" id="subtotal-documentor">-</h4>
                    </td>
                    <td class="total-td table-light">
                        <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="fee_notes[]" id="">
                    </td>
                    <td class="border border-white" style="background-color: #FFFFFF;">
                        <a href="javascript:void(0)" class="text-danger font-18 remove" onclick="$('#ecDocumentorRemove${efDocumentor}').trigger('click');" title="Remove">
                            <i class="fa fa-trash-o"></i>
                        </a>
                    </td>
                </tr>
            `);
        });

        //REMOVE DOCUMENTOR ROW
        $("#tableDocumentor").on("click", ".remove", function () {

            // Getting all the rows next to the row
            // containing the clicked button
            var child = $(this).closest("tr").nextAll();

            // Iterating across all the rows
            // obtained to change the index
            child.each(function () {
                // Getting <tr> id.
                var id = $(this).attr("id");

                // Getting the <input> inside the .noc, .noh, .nwh class.
                var noc = $(this).children(".noc").children("input");
                var noh = $(this).children(".noh").children("input");
                var nwh = $(this).children(".nwh").children("input");

                // Gets the row number from <tr> id.
                var dig = parseInt(id.substring(13));

                // Modifying row id.
                $(this).attr("id", `rowDocumentor${dig - 1}`);

                // Modifying row index.
                noc.attr("id", `ef_DocumentorNoc${dig - 1}`);
                noh.attr("id", `ef_DocumentorNoh${dig - 1}`);
                nwh.attr("id", `ef_DocumentorNwh${dig - 1}`);
            });

            // Removing the current row.
            $(this).closest("tr").remove();
            // Decreasing total number of rows by 1.
            efDocumentor--;
        });
    });
</script>
