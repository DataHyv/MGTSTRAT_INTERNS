<script>
    $(document).ready(function() {
/*******************************************************CONSULTING*********************************************************************/
        var rowIdx = 1;
        $("#addBtn").on("click", function() {
            // Adding a row inside the tbody.
            $("#tableLeadconsultant").append(`
                <tr id="leadConsultant${++rowIdx}" class="table-warning">
                    <td class="title">Lead Consultant</td>
                    <td data-title="# OF CONSULTANTS" class="noc">
                        <input type="number"
                            class="input js-mytooltip input-table form-control  @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="ef_Leadconsultant[]" id="ef_LeadconsultantNoc${rowIdx}" title="" max="100"
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
                            <select class="form-select input js-mytooltip @error('') is-invalid @enderror" name="ef_Leadconsultant[]"
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
                        <input type="number"
                            class="form-control input-table input js-mytooltip @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="ef_Leadconsultant[]" id="ef_LeadconsultantNoh${rowIdx}"
                            data-mytooltip-content="<i>Number of Hours</i>" data-mytooltip-theme="dark"
                            data-mytooltip-action="focus" data-mytooltip-direction="bottom"
                            oninput="document.getElementById('ec_LeadconsultantNoh${rowIdx}').value = document.getElementById('ef_LeadconsultantNoh${rowIdx}').value;">
                    </td>
                    <td class="nwh">
                        <input type="number" class="form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="ef_Leadconsultant[]" id="ef_LeadconsultantNwh${rowIdx}"
                            oninput="document.getElementById('ec_LeadconsultantNwh${rowIdx}').value = document.getElementById('ef_LeadconsultantNwh${rowIdx}').value;">
                    </td>
                    <td class="total-td">
                        <h4 class="text-center lead" id="leadTotal">-</h4>
                    </td>
                    <td class="total-td">
                        <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="" id="">
                    </td>
                    <td class="border border-white" style="background-color: #FFFFFF;">
                        <a href="javascript:void(0)" class="text-danger font-18 remove" title="Remove" onclick="$('#ecButton${rowIdx}').trigger('click');">
                            <i class="fa fa-trash-o"></i>
                        </a>
                    </td>
                </tr>
            `);
        });
        
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

        var efAnalyst = 1;
        $("#addBtn2").on("click", function() {
            // Adding a row inside the tbody.
            $("#tableAnalyst").append(`
                <tr class="table-warning" id="Analyst${++efAnalyst}">
                    <td class="title">Analyst</td>
                        <td class="noc">
                            <input type="number"
                                class="input js-mytooltip form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="" id="ef_AnalystNoc${efAnalyst}" max="100" data-mytooltip-content="<i>Includes in depth needs analysis (i.e. surveys,   interviews, FGDs),
                                    special research (i.e. to study client materials or client -required materials, industry
                                    or function specific content), creation of client-specific learning aids/tools
                                    (i.e. assessments, c</i>" data-mytooltip-theme="dark" data-mytooltip-action="focus"
                                data-mytooltip-direction="bottom" oninput="document.getElementById('ec_AnalystNoc${efAnalyst}').value = document.getElementById('ef_AnalystNoc${efAnalyst}').value;">
                        </td>
                        <td>
                            <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="" id="ef_AnalystHf" data-type="currency">
                        </td>
                        <td class="noh">
                            <input type="number"
                                class="input js-mytooltip form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="" id="ef_AnalystNoh${efAnalyst}"
                                data-mytooltip-content="<i>Number of Hours</i>" data-mytooltip-theme="dark"
                                data-mytooltip-action="focus" data-mytooltip-direction="bottom"
                                oninput="document.getElementById('ec_AnalystNoh${efAnalyst}').value = document.getElementById('ef_AnalystNoh${efAnalyst}').value;">
                        </td>
                        <td class="nwh">
                            <input type="number" class="form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="" id="ef_AnalystNwh${efAnalyst}"
                                oninput="document.getElementById('ec_AnalystNwh${efAnalyst}').value = document.getElementById('ef_AnalystNwh${efAnalyst}').value;">
                        </td>
                        <td class="total-td">
                            {{-- <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                    value="{{ old('') }}" 
                                    name="" id="" disabled> --}}
                            <h4 class="text-center lead" id="analyst-total">-</h4>
                        </td>
                        <td class="total-td">
                            <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="" id="">
                        </td>
                        <td class="border border-white" style="background-color: #FFFFFF;">
                            <a href="javascript:void(0)" class="text-danger font-18 remove" title="Remove" onclick="$('#ecAnalystRemove${efAnalyst}').trigger('click');">
                                <i class="fa fa-trash-o"></i>
                            </a>
                        </td>
                </tr>
            `);
        });

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
        var efDesigner = 1;
        $("#addBtn3").on("click", function() {
            // Adding a row inside the tbody.
            $("#tableDesigner").append(`
            <tr id="efDesigner${++efDesigner}" class="table-warning">
                <td class="title">Designer</td>
                <td class="noc">
                    <input type="number"
                        class="input js-mytooltip form-control input-table @error('') is-invalid @enderror"
                        value="{{ old('') }}" name="" id="ef_DesignerNoc${efDesigner}" max="100" data-mytooltip-content="<i>Includes in depth needs analysis (i.e. surveys, interviews, FGDs),
                            special research (i.e. to study client materials or client -required materials, industry
                            or function specific content), creation of client-specific learning aids/tools
                            (i.e. assessments, c</i>" data-mytooltip-theme="dark" data-mytooltip-action="focus"
                        data-mytooltip-direction="bottom" 
                        oninput="document.getElementById('ec_DesignerNoc${efDesigner}').value = document.getElementById('ef_DesignerNoc${efDesigner}').value;">
                </td>
                <td>
                    <fieldset>
                        <select class="input js-mytooltip form-select @error('') is-invalid @enderror select"
                            name="" id="ef_DesignerHf" data-mytooltip-content="<i>Consulting - &#8369;6,000 - Consultants<br>
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
                    <input type="number"
                        class="input js-mytooltip form-control input-table @error('') is-invalid @enderror"
                        value="{{ old('') }}" name="" id="ef_DesignerNoh${efDesigner}"
                        data-mytooltip-content="<i>Number of Hours</i>" data-mytooltip-theme="dark"
                        data-mytooltip-action="focus" data-mytooltip-direction="bottom"
                        oninput="document.getElementById('ec_DesignerNoh${efDesigner}').value = document.getElementById('ef_DesignerNoh${efDesigner}').value;">
                </td>
                <td class="nwh">
                    <input type="number" class="form-control input-table @error('') is-invalid @enderror"
                        value="{{ old('') }}" name="" id="ef_DesignerNwh${efDesigner}"
                        oninput="document.getElementById('ec_DesignerNwh${efDesigner}').value = document.getElementById('ef_DesignerNwh${efDesigner}').value;">
                </td>
                <td class="total-td" style="background-color: rgba(146, 146, 146, 0.727)">
                    <h4 class="text-center" id="subtotal-design">-</h4>
                </td>
                <td class="total-td">
                    <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                        value="{{ old('') }}" name="" id="">
                </td>
                <td class="border border-white" style="background-color: #FFFFFF;">
                    <a href="javascript:void(0)" class="text-danger font-18 remove" onclick="$('#ecDesignerRemove${efDesigner}').trigger('click');" title="Remove">
                        <i class="fa fa-trash-o"></i>
                    </a>
                </td>
            </tr>`);
        });

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
        var efLeadfaci = 1;
        $("#addBtn4").on("click", function() {
            // Adding a row inside the tbody.
            $("#tableLeadfaci").append(`
                <tr id="rowLeadFaci${++efLeadfaci}" class="table-warning">
                    <td class="title">Lead Facilitator</td>
                    <td class="noc">
                        <input type="number" class="form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="" id="ef_LeadfacilitatorNoc${efLeadfaci}" max="100"
                            oninput="document.getElementById('ec_LeadfacilitatorNoc${efLeadfaci}').value = document.getElementById('ef_LeadfacilitatorNoc${efLeadfaci}').value;">
                    </td>
                    <td>
                        <fieldset>
                            <select
                                class="input js-mytooltip form-select engagement-fee @error('') is-invalid @enderror select"
                                name="" id="ef_LeadfacilitatorHf" data-mytooltip-content="<i>&#8369;10,000 - For Key Accounts w/ 2021 contract <br>
                                    &#8369;11,000 - For Key Accounts with minimum guaranteed 50 sessions w/in 6 months <br>
                                    &#8369;12,000 - all else</i>" data-mytooltip-theme="dark"
                                data-mytooltip-action="focus" data-mytooltip-direction="right" style="background-color:#ffcccc; color:red;">
                                <option value="10000" {{ old('') == '10000' ? 'selected="selected"' : '' }}>
                                    &#8369;10,000
                                </option>
                                <option value="11000" {{ old('') == '11000' ? 'selected="selected"' : '' }}>
                                    &#8369;11,000
                                </option>
                                <option value="12000" {{ old('') == '12000' ? 'selected="selected"' : '' }} selected>
                                    &#8369;12,000
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
                        <input type="number"
                            class="input js-mytooltip form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="" id="ef_LeadfacilitatorNoh${efLeadfaci}"
                            data-mytooltip-content="<i>Number of Hours</i>" data-mytooltip-theme="dark"
                            data-mytooltip-action="focus" data-mytooltip-direction="bottom"
                            oninput="document.getElementById('ec_LeadfacilitatorNoh${efLeadfaci}').value = document.getElementById('ef_LeadfacilitatorNoh${efLeadfaci}').value;">
                        </td>
                    <td class="nwh">
                        <input type="number" class="form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="" id="ef_LeadfacilitatorNwh${efLeadfaci}" oninput="document.getElementById('ec_LeadfacilitatorNwh${efLeadfaci}').value = document.getElementById('ef_LeadfacilitatorNwh${efLeadfaci}').value;">
                    </td>
                    <td class="total-td">
                        <h4 class="text-center lead" id="subtotal-lead">-</h4>
                    </td>
                    <td class="total-td">
                        <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="" id="">
                    </td>
                    <td class="border border-white" style="background-color: #FFFFFF;">
                        <a href="javascript:void(0)" class="text-danger font-18 remove" onclick="$('#ecLeadfaciRemove${efLeadfaci}').trigger('click');" title="Remove">
                            <i class="fa fa-trash-o"></i>
                        </a>
                    </td>
                </tr>`);
        });

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

        var efCofaci = 1;
        $("#addBtn5").on("click", function() {
            // Adding a row inside the tbody.
            $("#tableCofaci").append(`
            <tr id="efCofaci${++efCofaci}" class="table-warning">
                    <td class="title">Co-facilitator / Resource Speaker</td>
                    <td class="noc">
                        <input type="number" class="form-control input-table @error('') is-invalid @enderror" value="{{ old('') }}" 
                            name="" id="ef_CofaciNoc${efCofaci}" oninput="document.getElementById('ec_CofacilitatorNoc${efCofaci}').value = document.getElementById('ef_CofaciNoc${efCofaci}').value;" max="100">
                    </td>
                    <td>
                        <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="" id="ef_CofaciHf" data-type="currency">
                    </td>
                    <td class="noh">
                        <input type="number" class="input js-mytooltip form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="" id="ef_CofaciNoh${efCofaci}"
                            data-mytooltip-content="<i>Number of Hours</i>" data-mytooltip-theme="dark"
                            data-mytooltip-action="focus" data-mytooltip-direction="bottom"
                            oninput="document.getElementById('ec_CofacilitatorNoh${efCofaci}').value = document.getElementById('ef_CofaciNoh${efCofaci}').value;">
                    </td>
                    <td class="nwh">
                        <input type="number" class="form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="" id="ef_CofaciNwh${efCofaci}" 
                            oninput="document.getElementById('ec_CofacilitatorNwh${efCofaci}').value = document.getElementById('ef_CofaciNwh${efCofaci}').value;">
                    </td>
                    <td class="total-td">
                        <h4 class="text-center lead" id="subtotal-coFacilitator">-</h4>
                    </td>
                    <td class="total-td">
                        <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="" id="">
                    </td>
                    <td class="border border-white" style="background-color: #FFFFFF;">
                        <a href="javascript:void(0)" class="text-danger font-18 remove" title="Remove" onclick="$('#ecCofaciRemove${efCofaci}').trigger('click');">
                            <i class="fa fa-trash-o"></i>
                        </a>
                    </td>
                </tr>`);
        });

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

        var efModerator = 1;
        $("#addBtn6").on("click", function() {
            // Adding a row inside the tbody.
            $("#tableModerator").append(`
            <tr id="efModeratorRow${++efModerator}" class="table-warning">
                <td class="title">Moderator</td>
                <td class="noc">
                    <input type="number" class="form-control input-table @error('') is-invalid @enderror"
                        value="{{ old('') }}" name="" id="ef_ModeratorNoc${efModerator}" max="100"
                        oninput="document.getElementById('ec_ModeratorNoc${efModerator}').value = document.getElementById('ef_ModeratorNoc${efModerator}').value;">
                </td>
                <td>
                    <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                        value="{{ old('') }}" name="" id="ef_ModeratorHf" data-type="currency">
                </td>
                <td class="noh">
                    <input type="number"
                        class="input js-mytooltip form-control input-table @error('') is-invalid @enderror"
                        value="{{ old('') }}" name="" id="ef_ModeratorNoh${efModerator}"
                        data-mytooltip-content="<i>Number of Hours</i>" data-mytooltip-theme="dark"
                        data-mytooltip-action="focus" data-mytooltip-direction="bottom"
                        oninput="document.getElementById('ec_ModeratorNoh${efModerator}').value = document.getElementById('ef_ModeratorNoh${efModerator}').value;">
                </td>
                <td class="nwh">
                    <input type="number" class="form-control input-table @error('') is-invalid @enderror"
                        value="{{ old('') }}" name="" id="ef_ModeratorNwh${efModerator}"
                        oninput="document.getElementById('ec_ModeratorNwh${efModerator}').value = document.getElementById('ef_ModeratorNwh${efModerator}').value;">
                </td>
                <td class="total-td">
                    <h4 class="text-center lead" id="subtotal-moderator">-</h4>
                </td>
                <td class="total-td">
                    <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                        value="{{ old('') }}" name="" id="">
                </td>
                <td class="border border-white" style="background-color: #FFFFFF;">
                    <a href="javascript:void(0)" class="text-danger font-18 remove" title="Remove" onclick="$('#ecModeratorRemove${efModerator}').trigger('click');">
                        <i class="fa fa-trash-o"></i>
                    </a>
                </td>
            </tr>`);
        });

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

        var efProducer = 1;
        $("#addBtn7").on("click", function() {
            // Adding a row inside the tbody.
            $("#tableProducer").append(`
            <tr id="efProducerRow${++efProducer}" class="table-warning">
                <td class="title">Producer</td>
                <td class="noc">
                    <input type="number" class="form-control input-table @error('') is-invalid @enderror"
                        value="{{ old('') }}" name="" id="ef_ProducerNoc${efProducer}" oninput="document.getElementById('ec_ProducerNoc${efProducer}').value = document.getElementById('ef_ProducerNoc${efProducer}').value;" max="100">
                </td>
                <td>
                    <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                        value="{{ old('') }}" name="" id="ef_ProducerHf" data-type="currency">
                </td>
                <td class="noh">
                    <input type="number"
                        class="input js-mytooltip form-control input-table @error('') is-invalid @enderror"
                        value="{{ old('') }}" name="" id="ef_ProducerNoh${efProducer}"
                        data-mytooltip-content="<i>Number of Hours</i>" data-mytooltip-theme="dark"
                        data-mytooltip-action="focus" data-mytooltip-direction="bottom"
                        oninput="document.getElementById('ec_ProducerNoh${efProducer}').value = document.getElementById('ef_ProducerNoh${efProducer}').value;">
                </td>
                <td class="nwh">
                    <input type="number" class="form-control input-table @error('') is-invalid @enderror"
                        value="{{ old('') }}" name="" id="ef_ProducerNwh${efProducer}" oninput="document.getElementById('ec_ProducerNwh${efProducer}').value = document.getElementById('ef_ProducerNwh${efProducer}').value;">
                </td>
                <td class="total-td">
                    <h4 class="text-center lead" id="subtotal-producer">-</h4>
                </td>
                <td class="total-td">
                    <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                        value="{{ old('') }}" name="" id="">
                </td>
                <td class="border border-white" style="background-color: #FFFFFF;">
                    <a href="javascript:void(0)" class="text-danger font-18 remove" onclick="$('#ecProducerRemove${efProducer}').trigger('click');" title="Remove">
                        <i class="fa fa-trash-o"></i>
                    </a>
                </td>
            </tr>`);
        });

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

/*******************************************************OTHER TOOLS*********************************************************************/
        var efDocumentor = 1;
        $("#addBtn8").on("click", function() {
            // Adding a row inside the tbody.
            $("#tableDocumentor").append(`
                <tr id="rowDocumentor${++efDocumentor}" class="table-warning">
                    <td class="title">Documentor</td>
                    <td class="noc">
                        <input type="number" class="form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="" id="ef_DocumentorNoc${efDocumentor}" max="100"
                            oninput="document.getElementById('ec_DocumentorNoc${efDocumentor}').value = document.getElementById('ef_DocumentorNoc${efDocumentor}').value;">
                    </td>
                    <td>
                        <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="" id="ef_DocumentorHf" data-type="currency">
                    </td>
                    <td class="noh">
                        <input type="number"
                            class="input js-mytooltip form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="" id="ef_DocumentorNoh${efDocumentor}"
                            data-mytooltip-content="<i>Number of Hours</i>" data-mytooltip-theme="dark"
                            data-mytooltip-action="focus" data-mytooltip-direction="bottom"
                            oninput="document.getElementById('ec_DocumentorNoh${efDocumentor}').value = document.getElementById('ef_DocumentorNoh${efDocumentor}').value;">
                    </td>
                    <td class="nwh">
                        <input type="number" class="form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="" id="ef_DocumentorNwh${efDocumentor}"
                            oninput="document.getElementById('ec_DocumentorNwh${efDocumentor}').value = document.getElementById('ef_DocumentorNwh${efDocumentor}').value;">
                    </td>
                    <td class="total-td" style="background-color: rgba(146, 146, 146, 0.727">
                        <h4 class="text-center" id="subtotal-documentor">-</h4>
                    </td>
                    <td class="total-td">
                        <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="" id="">
                    </td>
                    <td class="border border-white" style="background-color: #FFFFFF;">
                        <a href="javascript:void(0)" class="text-danger font-18 remove" onclick="$('#ecDocumentorRemove${efDocumentor}').trigger('click');" title="Remove">
                            <i class="fa fa-trash-o"></i>
                        </a>
                    </td>
                </tr>
            `);
        });

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
