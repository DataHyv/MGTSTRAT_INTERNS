<script>
/********* START *********/

/*****************************************************************COMMISION*****************************************************************************/
    /********* SALES *********/
    var salesNum = 1;
    $(document).ready(function() {
        $("#addBtn9").on("click", function() {
            // Adding a row inside the tbody.
            $("#tableSales").append(
                `<tr class="th-blue-grey-lighten-2  " id="salesRow${++salesNum}">
                        <td class="title ">
                            <input type="text" class="d-none" value="Sales" name="cost_type[]" readonly>
                            Sales (4% / 5% / 6% / 7%)
                        </td>
                        <td><input type="text" class="d-none" value="" name="cost_consultant_num[]" readonly></td>
                        <td class="table-danger">
                            <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="cost_hour_fee[]" id="inputSales${salesNum}" onblur="this.value = this.value.replace('%', '') + '%';"
                            oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\...*)\./g, '$1') ;">

                        </td>
                        <td><input type="text" class="d-none" value="" name="cost_hour_num[]" readonly></td>
                        <td><input type="text" class="d-none" value="" name="cost_nswh[]" readonly></td>
                        <td class="total-td tbl-engmt-cost  mgt-td-dark-bg">
                            <h4 class="text-center text-danger" id="salesTotal">-</h4>
                        </td>
                        <td class="total-td ">
                            <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="cost_rooster[]" id="roster20${salesNum}" 
                                oninput="filterConsultant( 'roster20${salesNum}', '');"
                                list="filtered_consultant_list" 
                                autocomplete="off">
                                <input  type="hidden" value="" name="cost_rooster_id[]" id="id_roster20${salesNum}">
                        </td>
                        <td class="total-td ">
                                <textarea class="form-control input-table @error('') is-invalid @enderror"
                                    name="cost_notes[]" id="salesNotes${salesNum}" rows="2" cols="55"></textarea>
                        </td>
                        <td class="border border-white" style="background-color: #FFFFFF;">
                            <a href="javascript:void(0)" class="text-danger font-18 remove" title="Remove">
                                <i class="fa fa-trash-o"></i>
                            </a>
                        </td>
                </tr>`);

            //Setting the default value of
            //sales into 0% when adding row
            const salesId = document.querySelectorAll("#sales");
            for (let i = 0; i < salesId.length; i++) {
                salesId[i].value = "0%";
            }

            //if you add row the
            //if statement will execute
            if (salesNum > 1) {
                document.getElementById("dropdownSales").style.display = "none"; //the dropdown will display none
                document.getElementById("sales").value = "0%"; //the dropdown will be disabled
                document.getElementById("sales").disabled = true; //the dropdown will be disabled
                document.getElementById("inputSales").style.display = ""; //the input field will remove the style of "display = none;"
                document.getElementById("inputSales").disabled = false; //remove the disabled attribute in input field
                // document.getElementById("inputSales").value = "";   //to remove the last inputed value
            }
        });

        // Remove row
        $("#tableSales").on("click", ".remove", function() {
            // Getting all the rows next to the row
            // containing the clicked button
            var child = $(this).closest("tr").nextAll();

            // Removing the current row.
            $(this).closest("tr").remove();

            // Decreasing total number of rows by 1.
            salesNum--;
            if (salesNum == 1) {
                document.getElementById("sales").disabled = false; //the dropdown will be disabled
                document.getElementById("inputSales").style.display = "none";
                document.getElementById("sales").value = "0%";
                document.getElementById("dropdownSales").style.display = "";
                document.getElementById("inputSales").value = ""; //to remove the last inputed value
            }

        });
    });

    /********* REFERRAL *********/
    var refferalNum = 1;
    $(document).ready(function() {
        $("#addBtn10").on("click", function() {
            // Adding a row inside the tbody.
            $("#tableReferral").append(
                `<tr class="th-blue-grey-lighten-2" id="salesRow${++refferalNum}">
                        <td class="title">
                            Referral (2% / 3%)
                            <input type="text" class="d-none" value="Referral" name="cost_type[]" readonly>
                        </td>
                        <td><input type="text" class="d-none" value="" name="   []" readonly></td>
                        <td class="table-danger">
                            <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                        value="{{ old('') }}" name="cost_hour_fee[]" id="inputReferral${refferalNum}" onblur="this.value = this.value.replace('%', '') + '%';"
                        oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\...*)\./g, '$1');">
                        </td>
                        <td><input type="text" class="d-none" value="" name="cost_hour_num[]" readonly></td>
                        <td><input type="text" class="d-none" value="" name="cost_nswh[]" readonly></td>
                        <td class="total-td tbl-engmt-cost mgt-td-dark-bg">
                            <h4 class="text-center text-danger" id="referralTotal">-</h4>
                        </td>
                        <td class="total-td">
                            <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="cost_rooster[]" id="roster21${refferalNum}" 
                                oninput="filterConsultant( 'roster21${refferalNum}', '');"
                                list="filtered_consultant_list" 
                                autocomplete="off">
                                <input  type="hidden" value="" name="cost_rooster_id[]" id="id_roster21${refferalNum}">
                        </td>
                        <td class="total-td">
                                <textarea class="form-control input-table @error('') is-invalid @enderror"
                                    name="cost_notes[]" id="referralNotes${refferalNum}" rows="2" cols="55"></textarea>
                        </td>
                        <td class="border border-white" style="background-color: #FFFFFF;">
                            <a href="javascript:void(0)" class="text-danger font-18 remove" title="Remove">
                                <i class="fa fa-trash-o"></i>
                            </a>
                        </td>
                </tr>`);

            //Setting the default value of
            //sales into 0% when adding row
            const referralId = document.querySelectorAll("#referral");
            for (let i = 0; i < referralId.length; i++) {
                referralId[i].value = "0%";
            }

            //if you add row the
            //if statement will execute
            if (refferalNum > 1) {
                document.getElementById("referral").disabled = true; //the dropdown will be disabled
                document.getElementById("dropdownReferral").style.display =
                    "none"; //the dropdown will display none
                document.getElementById("inputReferral").style.display =
                    ""; //the input field will remove the style of "display = none;"
                document.getElementById("inputReferral").disabled =
                    false; //remove the disabled attribute in input field
                // document.getElementById("inputSales").value = "";   //to remove the last inputed value
            }
        });

        // Remove row
        $("#tableReferral").on("click", ".remove", function() {
            // Getting all the rows next to the row
            // containing the clicked button
            var child = $(this).closest("tr").nextAll();

            // Removing the current row.
            $(this).closest("tr").remove();

            // Decreasing total number of rows by 1.
            refferalNum--;
            if (refferalNum == 1) {
                document.getElementById("referral").disabled = false; //the dropdown will remove the disabled
                document.getElementById("inputReferral").style.display = "none";
                document.getElementById("referral").value = "0%";
                document.getElementById("dropdownReferral").style.display = "";
                document.getElementById("inputReferral").value = ""; //to remove the last inputed value
            }

        });
    });

/*****************************************************************ENGAGEMENT MANAGER*****************************************************************************/
    /********* ENGAGEMENT MANAGER *********/
    var managerNum = 1;
    $(document).ready(function() {
        $("#addBtn11").on("click", function() { 
            // Adding a row inside the tbody.
            $("#tableEngagementmanager").append(
                `<tr class="th-blue-grey-lighten-2" id="engagementmanagerRow${++managerNum}">
                    <td class="title fw-bold text-dark">
                        ENGAGEMENT MANAGER
                        <input type="text" class="d-none" value="Engagement Manager" name="cost_type[]" readonly>
                    </td>
                    <td><input type="text" class="d-none" value="" name="cost_consultant_num[]" readonly></td>
                    <td class="table-danger">
                        <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="cost_hour_fee[]" id="inputManager${managerNum}" onblur="this.value = this.value.replace('%', '') + '%';"
                            oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\...*)\./g, '$1');">
                    </td>
                    <td><input type="text" class="d-none" value="" name="cost_hour_num[]" readonly></td>
                    <td><input type="text" class="d-none" value="" name="cost_nswh[]" readonly></td>
                    <td class="total-td tbl-engmt-cost mgt-td-dark-bg">
                        <h4 class="text-center text-danger" id="engagementManagerTotal">-</h4>
                    </td>
                    <td class="total-td">
                        <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="cost_rooster[]" id="roster22${managerNum}" 
                            oninput="filterConsultant( 'roster22${managerNum}', '');"
                            list="filtered_consultant_list" 
                            autocomplete="off">
                            <input  type="hidden" value="" name="cost_rooster_id[]" id="id_roster22${managerNum}">
                    </td>
                    <td class="total-td">
                                <textarea class="form-control input-table @error('') is-invalid @enderror"
                                    name="cost_notes[]" id="engagementManagerNotes${managerNum}" rows="2" cols="55"></textarea>
                    </td>
                    <td class="border border-white" style="background-color: #FFFFFF;">
                        <a href="javascript:void(0)" class="text-danger font-18 remove" title="Remove">
                            <i class="fa fa-trash-o"></i>           
                        </a>    
                    </td>
                </tr>`);

            //Setting the default value of
            //sales into 0% when adding row
            const managerId = document.querySelectorAll("#engagementManager");
            for (let i = 0; i < managerId.length; i++) {
                managerId[i].value = "0%";
            }

            //if you add row the
            //if statement will execute
            if (managerNum > 1) {
                document.getElementById("engagementManager").disabled = true; //the dropdown will be disabled
                document.getElementById("dropdownManager").style.display =
                    "none"; //the dropdown will display none
                document.getElementById("inputManager").style.display =
                    ""; //the input field will remove the style of "display = none;"
                document.getElementById("inputManager").disabled =
                    false; //remove the disabled attribute in input field
                // document.getElementById("inputSales").value = "";   //to remove the last inputed value
            }
        });

        // Remove row
        $("#tableEngagementmanager").on("click", ".remove", function() {
            // Getting all the rows next to the row
            // containing the clicked button
            var child = $(this).closest("tr").nextAll();

            // Removing the current row.
            $(this).closest("tr").remove();

            // Decreasing total number of rows by 1.
            managerNum--;
            if (managerNum == 1) {
                document.getElementById("engagementManager").disabled = false; //the dropdown will remove disabled
                document.getElementById("inputManager").style.display = "none";
                document.getElementById("engagementManager").value = "0%";
                document.getElementById("dropdownManager").style.display = "";
                document.getElementById("inputManager").value = ""; //to remove the last inputed value
            }

        });
    });

/*****************************************************************CONSULTING*****************************************************************************/
    /********* LEAD CONSULTANT *********/
    var leadConsultant = 1;
    $(document).ready(function () {
        $("#CeAddBtn").on("click", function() {
            // Adding a row inside the tbody.
            $("#ec_tableLeadConsultant").append(`
                <tr class="th-blue-grey-lighten-2" id="ec_LeadConsultant${++leadConsultant}">
                    <td class="title">
                        <input type="text" class="d-none" value="Lead Consultant" name="cost_type[]" readonly>
                        Lead Consultant
                        </td>
                    <td class="noc mgt-td-dark-bg">
                        <input type="text"
                            class="commanumber text-center form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="cost_consultant_num[]" id="ec_LeadconsultantNoc${leadConsultant}" data-type="currency">
                    </td>
                    <td class="mgt-td-dark-bg">
                        <input type="text"
                            class="text-center fw-bold text-dark form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="cost_hour_fee[]" id="ec_LeadconsultantHf${leadConsultant}" data-type="currency">
                            </td>
                    <td class="noh mgt-td-dark-bg">
                        <input type="text"
                            class="commanumber text-center form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="cost_hour_num[]" id="ec_LeadconsultantNoh${leadConsultant}" data-type="currency">
                    </td>
                    <td class="nwh mgt-td-dark-bg">
                        <input type="text"
                            class="commanumber text-center form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="cost_nswh[]" id="ec_LeadconsultantNwh${leadConsultant}" data-type="currency">
                    </td>
                    <td class="total-td">
                        <h4 class="text-center lead text-danger" id="ec_LeadconsultantTotal">-</h4>
                    </td>
                    <td class="total-td table-warning">
                        <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="cost_rooster[]" id="roster${leadConsultant}" 
                            oninput="filterConsultant( 'roster${leadConsultant}','ec_LeadconsultantHf${leadConsultant}','leadConsultant');"
                            list="filtered_consultant_list" 
                            autocomplete="off">
                            <input  type="hidden" value="" name="cost_rooster_id[]" id="id_roster${leadConsultant}">
                    </td>
                    <td class="total-td">
                                <textarea class="form-control input-table @error('') is-invalid @enderror"
                                    name="cost_notes[]" id="ec_LeadconsultantNotes${leadConsultant}" rows="2" cols="55"></textarea>
                        </td>
                    <td class="border border-white" style="background-color: #FFFFFF;">
                        <a href="javascript:void(0)" class="text-danger font-18 remove" id="ecButton${leadConsultant}" title="Remove" >
                            <i class="fa fa-trash-o"></i>
                        </a>
                    </td>
                </tr>
            `);
        });

        $("#ec_tableLeadConsultant").on("click", ".remove", function () {

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
                var dig = parseInt(id.substring(17));

                // Modifying row id.
                $(this).attr("id", `ec_LeadConsultant${dig - 1}`);

                // Modifying row index.
                noc.attr("id", `ec_LeadconsultantNoc${dig - 1}`);
                noh.attr("id", `ec_LeadconsultantNoh${dig - 1}`);
                nwh.attr("id", `ec_LeadconsultantNwh${dig - 1}`);
            });

            // Removing the current row.
            $(this).closest("tr").remove();
            // Decreasing total number of rows by 1.
            leadConsultant--;
        });

    });

    /********* ANALYST *********/
    var ecAnalyst = 1;
    $(document).ready(function () {
        $("#CeAddBtn2").on("click", function() {
            // Adding a row inside the tbody.
            $("#ec_tableAnalyst").append(`
                <tr class="th-blue-grey-lighten-2" id="ec_Analyst${++ecAnalyst}">
                    <td class="title">
                        <input type="text" class="d-none" value="Analyst" name="cost_type[]" readonly>
                        Analyst
                    </td>
                    <td class="noc mgt-td-dark-bg">
                        <input type="text"
                            class="commanumber text-center form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="cost_consultant_num[]" id="ec_AnalystNoc${ecAnalyst}" data-type="currency">
                    </td>
                    <td class="bg-white">
                        <input type="text"
                            class="commanumber text-center fw-bold text-dark form-control input-table @error('') is-invalid @enderror"
                            value="1,700" name="cost_hour_fee[]" id="ec_AnalystHf${ecAnalyst}" data-type="currency">
                    </td>
                    <td class="noh mgt-td-dark-bg">
                        <input type="text"
                            class="commanumber text-center form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="cost_hour_num[]" id="ec_AnalystNoh${ecAnalyst}" data-type="currency">
                    </td>
                    <td class="nwh mgt-td-dark-bg">
                        <input type="text"
                            class="commanumber text-center form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="cost_nswh[]" id="ec_AnalystNwh${ecAnalyst}" data-type="currency">
                    </td>
                    <td class="total-td">
                        <h4 class="text-center lead text-danger" id="ec_AnalystTotal">-</h4>
                    </td>
                    <td class="total-td">
                        <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="cost_rooster[]" id="roster23${ecAnalyst}" 
                            oninput="filterConsultant( 'roster23${ecAnalyst}','');"
                            list="filtered_consultant_list" 
                            autocomplete="off">
                            <input  type="hidden" value="" name="cost_rooster_id[]" id="id_roster23${ecAnalyst}">
                    </td>
                    <td class="total-td">
                            <textarea class="form-control input-table @error('') is-invalid @enderror"
                                name="cost_notes[]" id="ec_AnalystNotes${ecAnalyst}" rows="2" cols="55"></textarea>
                    </td>
                    <td class="border border-white" style="background-color: #FFFFFF;">
                        <a href="javascript:void(0)" class="text-danger font-18 remove" id="ecAnalystRemove${ecAnalyst}" title="Remove" >
                            <i class="fa fa-trash-o"></i>
                        </a>
                    </td>
                </tr>
            `);
        });

        $("#ec_tableAnalyst").on("click", ".remove", function () {

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
                $(this).attr("id", `ec_Analyst${dig - 1}`);

                // Modifying row index.
                noc.attr("id", `ec_AnalystNoc${dig - 1}`);
                noh.attr("id", `ec_AnalystNoh${dig - 1}`);
                nwh.attr("id", `ec_AnalystNwh${dig - 1}`);
            });

            // Removing the current row.
            $(this).closest("tr").remove();
            // Decreasing total number of rows by 1.
            ecAnalyst--;
        });
    });

/*****************************************************************DESIGNER*****************************************************************************/
    /********* DESIGNER *********/
    var ecDesigner = 1;
    $(document).ready(function (){
        $("#CeAddBtn3").on("click", function() {
            // Adding a row inside the tbody.
            $("#ec_TableDesigner").append(`
                <tr class="th-blue-grey-lighten-2" id="ec_DesignerRow${++ecDesigner}">
                    <td class="title">Designer
                        <input type="text" class="d-none" value="Designer" name="cost_type[]" readonly>
                    </td>
                    <td class="noc mgt-td-dark-bg">
                        <input type="text"
                            class="commanumber text-center form-control input-table @error('') is-invalid @enderror"
                            value="" name="cost_consultant_num[]" id="ec_DesignerNoc${ecDesigner}" data-type="currency">
                    </td>
                    <td class="mgt-td-dark-bg">
                        <input type="text"
                            class="commanumber text-center fw-bold text-dark text-center form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="cost_hour_fee[]" id="ec_DesignerHf${ecDesigner}" data-type="currency">
                    </td>
                    <td class="noh mgt-td-dark-bg">
                        <input type="text"
                            class="commanumber text-center form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="cost_hour_num[]" id="ec_DesignerNoh${ecDesigner}" data-type="currency">
                    </td>
                    <td class="nwh">
                        <input type="text"
                            class="commanumber text-center form-control input-table @error('') is-invalid @enderror d-none"
                            value="{{ old('') }}" name="cost_nswh[]" id="ec_DesignerNwh${ecDesigner}" data-type="currency">
                    </td>
                    <td class="total-td">
                        <h4 class="text-center lead text-danger" id="ec_DesignerTotal">-</h4>
                    </td>
                    <td class="total-td table-warning">
                        <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="cost_rooster[]" id="roster2${ecDesigner}" 
                            oninput="filterConsultant( 'roster2${ecDesigner}','ec_DesignerHf${ecDesigner}','designer');"
                            list="filtered_consultant_list" 
                            autocomplete="off">
                            <input  type="hidden" value="" name="cost_rooster_id[]" id="id_roster2${ecDesigner}">
                    </td>
                    <td class="total-td">
                        <textarea class="form-control input-table @error('') is-invalid @enderror"  
                            name="cost_notes[]" id="ec_DesignerNotes${ecDesigner}" rows="2" cols="55"></textarea>
                    </td>
                    <td class="border border-white" style="background-color: #FFFFFF;">
                        <a href="javascript:void(0)" class="text-danger font-18 remove" id="ecDesignerRemove${ecDesigner}" title="Remove" >
                            <i class="fa fa-trash-o"></i>
                        </a>
                    </td>
                </tr>
            `);
        });

        $("#ec_TableDesigner").on("click", ".remove", function () {

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
                $(this).attr("id", `ec_DesignerRow${dig - 1}`);

                // Modifying row index.
                noc.attr("id", `ec_DesignerNoc${dig - 1}`);
                noh.attr("id", `ec_DesignerNoh${dig - 1}`);
                nwh.attr("id", `ec_DesignerNwh${dig - 1}`);
            });

            // Removing the current row.
            $(this).closest("tr").remove();
            // Decreasing total number of rows by 1.
            ecDesigner--;
        });
    });

    /********* CREATORS FEES *********/
    var ecCreators = 1;
    $(document).ready(function (){
        $("#addBtnCreators").on("click", function() {
            // Adding a row inside the tbody.
            $("#ec_TableCreators").append(`
                <tr class="th-blue-grey-lighten-2" id="ec_CreatorsRow${++ecCreators}">
                    <td class="title">Creators Fees
                        <input type="text" class="d-none" value="Creators Fees" name="cost_type[]" readonly>
                    </td>
                    <td class="noc">
                        <input type="text"
                            class="commanumber text-center form-control input-table @error('') is-invalid @enderror"
                            value="" name="cost_consultant_num[]" id="ec_CreatorsNoc${ecCreators}" data-type="currency" hidden>
                    </td>
                    <td class="table-danger">
                        <fieldset>
                            <select class="input js-mytooltip form-select @error('') is-invalid @enderror"
                                name="cost_hour_fee[]" id="ec_CreatorsHf${ecCreators}"
                                data-mytooltip-content="<i> 
                                        Creators Fee - 0 - no creators fee<br><br>
                                        500 - Creators Fee is the creator is the lead, for the 2nd session onwards<br><br>
                                        1,000 - Creators Fee if creator is NOT the lead, for the 2nd session onwards</i>"
                                data-mytooltip-theme="dark" data-mytooltip-action="focus"
                                data-mytooltip-direction="right" style="background-color:#ffcccc; color:red;">
                                <option value="500" {{ old('') == '500' ? 'selected="selected"' : '' }}
                                    title="">
                                    &#8369;500
                                </option>
                                <option value="1000" {{ old('') == '1000' ? 'selected="selected"' : '' }}
                                    title="">
                                    &#8369;1,000
                                </option>
                            </select>
                            @error('ef_customFee')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </fieldset>
                    </td>
                    <td class="noh table-warning">
                        <input type="text"
                            class="commanumber text-center form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="cost_hour_num[]" id="ec_CreatorsNoh${ecCreators}" data-type="currency">
                    </td>
                    <td class="nwh"><input type="text" class="d-none" name="cost_nswh[]" readonly></td>
                    <td class="total-td">
                        <h4 class="text-center lead text-danger" id="ec_CreatorsTotal">-</h4>
                    </td>
                    <td class="total-td">
                        <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="cost_rooster[]" id="roster24${ecCreators}" 
                            oninput="filterConsultant( 'roster24${ecCreators}','');"
                            list="filtered_consultant_list" 
                            autocomplete="off">
                            <input  type="hidden" value="" name="cost_rooster_id[]" id="id_roster24${ecCreators}">
                    </td>
                    <td class="total-td">
                        <textarea class="form-control input-table @error('') is-invalid @enderror"
                            name="cost_notes[]" id="ec_CreatorsNotes${ecCreators}" rows="2" cols="55"></textarea>
                    </td>
                    <td class="border border-white" style="background-color: #FFFFFF;">
                        <a href="javascript:void(0)" class="text-danger font-18 remove" id="ecCreatorsRemove${ecCreators}" title="Remove">
                            <i class="fa fa-trash-o"></i>
                        </a>
                    </td>
                </tr>
            `);
        });

        $("#ec_TableCreators").on("click", ".remove", function () {

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
                $(this).attr("id", `ec_CreatorsRow${dig - 1}`);

                // Modifying row index.
                noc.attr("id", `ec_CreatorsNoc${dig - 1}`);
                noh.attr("id", `ec_CreatorsNoh${dig - 1}`);
                nwh.attr("id", `ec_CreatorsNwh${dig - 1}`);
            });

            // Removing the current row.
            $(this).closest("tr").remove();
            // Decreasing total number of rows by 1.
            ecCreators--;
        });
    });

/*****************************************************************PROGRAM*****************************************************************************/
    /********* LEAD FACILITATOR *********/
    $(document).ready(function (){  
        var ecLeadfaci = 1;
        $("#CeAddBtn4").on("click", function() {
            // Adding a row inside the tbody.
            $("#ec_TableLeadfaci").append(`
                <tr class="th-blue-grey-lighten-2" id="ec_LeadfaciRow${++ecLeadfaci}">
                    <td class="title">
                        <input type="text" class="d-none" value="Lead Facilitator" name="cost_type[]" readonly>
                        Lead Facilitator
                    </td>
                    <td class="noc mgt-td-dark-bg">
                        <input type="text"
                            class="commanumber text-center form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="cost_consultant_num[]" id="ec_LeadfacilitatorNoc${ecLeadfaci}" data-type="currency">
                    </td>
                    <td class="mgt-td-dark-bg">
                        <input type="text"
                            class="commanumber text-center fw-bold text-center text-dark form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="cost_hour_fee[]" id="ec_LeadfacilitatorHf${ecLeadfaci}" data-type="currency">
                    </td>
                    <td class="noh mgt-td-dark-bg">
                        <input type="text"
                            class="commanumber text-center form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="cost_hour_num[]" id="ec_LeadfacilitatorNoh${ecLeadfaci}" data-type="currency" >
                    </td>
                    <td class="nwh mgt-td-dark-bg">
                        <input type="text"
                            class="commanumber text-center form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="cost_nswh[]" id="ec_LeadfacilitatorNwh${ecLeadfaci}" data-type="currency" >
                    </td>
                    <td class="total-td">
                        <h4 class="text-center lead text-danger" id="ec_LeadfacilitatorTotal">-</h4>
                    </td>
                    <td class="total-td table-warning">
                        <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="cost_rooster[]" id="roster3${ecLeadfaci}" 
                            oninput="filterConsultant( 'roster3${ecLeadfaci}','ec_LeadfacilitatorHf${ecLeadfaci}','leadFacilitator');"
                            list="filtered_consultant_list" 
                            autocomplete="off">
                            <input  type="hidden" value="" name="cost_rooster_id[]" id="id_roster3${ecLeadfaci}">
                    </td>
                    <td class="total-td">                        
                        <textarea class="form-control input-table @error('') is-invalid @enderror" name="cost_notes[]" 
                        id="ec_LeadfacilitatorNotes3${ecLeadfaci}" rows="2" cols="55"></textarea>
                    </td>
                    <td class="border border-white" style="background-color: #FFFFFF;">
                        <a href="javascript:void(0)" class="text-danger font-18 remove" id="ecLeadfaciRemove${ecLeadfaci}" title="Remove" >
                            <i class="fa fa-trash-o"></i>
                        </a>
                    </td>
                </tr>
            `);
        });

        $("#ec_TableLeadfaci").on("click", ".remove", function () {

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
                $(this).attr("id", `ec_LeadfaciRow${dig - 1}`);

                // Modifying row index.
                noc.attr("id", `ec_LeadfacilitatorNoc${dig - 1}`);
                noh.attr("id", `ec_LeadfacilitatorNoh${dig - 1}`);
                nwh.attr("id", `ec_LeadfacilitatorNwh${dig - 1}`);
            });

            // Removing the current row.
            $(this).closest("tr").remove();
            // Decreasing total number of rows by 1.
            ecLeadfaci--;
        });
    });

    /********* CO-LEAD FACILITATOR *********/
    $(document).ready(function (){
        var ecCoLead = 1;
        $("#addBtnCoLead").on("click", function() {
            // Adding a row inside the tbody.
            $("#ec_TableCoLeadfaci").append(`
                <tr class="th-blue-grey-lighten-2" id="ec_CoLeadRow${++ecCoLead}">
                    <td class="title">
                        Co-Lead
                        <input type="text" class="d-none" value="Co-Lead" name="cost_type[]" readonly>
                    </td>
                    <td class="noc mgt-td-dark-bg">
                        <input type="text"
                            class="commanumber text-center form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="cost_consultant_num[]" id="ec_CoLeadfacilitatorNoc${ecCoLead}" data-type="currency">
                    </td>
                    <td class="hf mgt-td-dark-bg">
                        <input type="text"
                            class="commanumber text-center fw-bold text-center text-dark form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="cost_hour_fee[]" id="ec_CoLeadfacilitatorHf${ecCoLead}" data-type="currency">
                    </td>
                    <td class="noh mgt-td-dark-bg">
                        <input type="text"
                            class="commanumber text-center form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="cost_hour_num[]" id="ec_CoLeadfacilitatorNoh${ecCoLead}" data-type="currency">
                    </td>
                    <td class="nwh mgt-td-dark-bg">
                        <input type="text"
                            class="commanumber text-center form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="cost_nswh[]" id="ec_CoLeadfacilitatorNwh${ecCoLead}" data-type="currency">
                    </td>
                    <td class="total-td">
                        <h4 class="text-center lead text-danger" id="ec_CoLeadfacilitatorTotal">-</h4>
                    </td>
                    <td class="total-td table-warning">
                        <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="cost_rooster[]" id="roster4${ecCoLead}" 
                            oninput="filterConsultant( 'roster4${ecCoLead}','ec_CoLeadfacilitatorHf${ecCoLead}','coLead');"
                            list="filtered_consultant_list" 
                            autocomplete="off">
                            <input  type="hidden" value="" name="cost_rooster_id[]" id="id_roster4${ecCoLead}">
                    </td>
                    <td class="total-td">
                        <textarea class="form-control input-table @error('') is-invalid @enderror"
                            name="cost_notes[]" id="ec_CoLeadfacilitatorNotes${ecCoLead}" rows="2" cols="55"></textarea>
                    </td>
                    <td class="border border-white" style="background-color: #FFFFFF;">
                        <a href="javascript:void(0)" class="text-danger font-18 remove" id="ecCoLeadRemove${ecCoLead}" title="Remove">
                            <i class="fa fa-trash-o"></i>
                        </a>
                    </td>
                </tr>
            `);
        });

        $("#ec_TableCoLeadfaci").on("click", ".remove", function () {

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
                var hf = $(this).children(".hf").children("input");
                var noh = $(this).children(".noh").children("input");
                var nwh = $(this).children(".nwh").children("input");

                // Gets the row number from <tr> id.
                var dig = parseInt(id.substring(12));

                // Modifying row id.
                $(this).attr("id", `ec_CoLeadRow${dig - 1}`);

                // Modifying row index.
                noc.attr("id", `ec_CoLeadfacilitatorNoc${dig - 1}`);
                hf.attr("id", `ec_CoLeadfacilitatorHf${dig - 1}`);
                noh.attr("id", `ec_CoLeadfacilitatorNoh${dig - 1}`);
                nwh.attr("id", `ec_CoLeadfacilitatorNwh${dig - 1}`);
            });

            // Removing the current row.
            $(this).closest("tr").remove();
            // Decreasing total number of rows by 1.
            ecCoLead--;
        });
    });

    /********* AL COACH *********/
    $(document).ready(function (){
        var ecAlCoach = 1;
        $("#addBtnAlCoach").on("click", function() {
            // Adding a row inside the tbody.
            $("#ec_TableAlCoach").append(`
                <tr class="th-blue-grey-lighten-2" id="ec_AlCoachRow${++ecAlCoach}">
                    <td class="title">
                        AL Coach
                        <input type="text" class="d-none" value="AL Coach" name="cost_type[]" readonly>
                    </td>
                    <td class="noc mgt-td-dark-bg">
                        <input type="text"
                            class="commanumber text-center text-dark form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="cost_consultant_num[]" id="ec_AlCoachNoc${ecAlCoach}" data-type="currency">
                    </td>
                    <td class="mgt-td-dark-bg">
                        <input type="text"
                            class="commanumber text-center text-dark fw-bold form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="cost_hour_fee[]" id="ec_AlCoachHf${ecAlCoach}" data-type="currency">
                    </td>
                    <td class="noh mgt-td-dark-bg">
                        <input type="text"
                            class="commanumber text-center text-dark form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="cost_hour_num[]" id="ec_AlCoachNoh${ecAlCoach}" data-type="currency">
                    </td>
                    <td class="nwh mgt-td-dark-bg">
                        <input type="text"
                            class="commanumber text-center text-dark form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="cost_nswh[]" id="ec_AlCoachNwh${ecAlCoach}" data-type="currency">
                    </td>
                    <td class="total-td">
                        <h4 class="text-center lead text-danger" id="ec_AlCoachTotal">-</h4>
                    </td>
                    <td class="total-td table-warning">
                        <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="cost_rooster[]" id="roster10${ecAlCoach}"  
                            oninput="filterConsultant( 'roster10${ecAlCoach}','ec_AlCoachHf${ecAlCoach}','alCoach');"
                            list="filtered_consultant_list" 
                            autocomplete="off">
                            <input  type="hidden" value="" name="cost_rooster_id[]" id="id_roster10${ecAlCoach}">
                    </td>
                    <td class="total-td">
                        <textarea class="form-control input-table @error('') is-invalid @enderror"
                            name="cost_notes[]" id="ec_AlCoachNotes${ecAlCoach}" rows="2" cols="55"></textarea>
                    </td>
                    <td class="border border-white" style="background-color: #FFFFFF;">
                        <a href="javascript:void(0)" class="text-danger font-18 remove" title="Remove">
                            <i class="fa fa-trash-o"></i>
                        </a>
                    </td>
                </tr>
            `);
        });

        $("#ec_TableAlCoach").on("click", ".remove", function () {

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
                var dig = parseInt(id.substring(12));

                // Modifying row id.
                $(this).attr("id", `ec_AlCoachRow${dig - 1}`);

                // Modifying row index.
                noc.attr("id", `ec_AlCoachNoc${dig - 1}`);
                noh.attr("id", `ec_AlCoachNoh${dig - 1}`);
                nwh.attr("id", `ec_AlCoachNwh${dig - 1}`);
            });

            // Removing the current row.
            $(this).closest("tr").remove();
            // Decreasing total number of rows by 1.
            ecAlCoach--;
        });
    });

    /********* CO-FACILITATOR / RESOURCE SPEAKER *********/
    $(document).ready(function (){
        var ecCofaci = 1;
        $("#CeAddBtn5").on("click", function() {
            // Adding a row inside the tbody.
            $("#ec_TableCofaci").append(`
                <tr class="th-blue-grey-lighten-2" id="ec_CofaciRow${++ecCofaci}">
                    <td class="title">
                        Co-Facilitator / Resource Speaker
                        <input type="text" class="d-none" value="Co-Facilitator / Resource Speaker" name="cost_type[]" readonly>
                    </td>
                    <td class="noc mgt-td-dark-bg">
                        <input type="text"
                            class="commanumber text-center text-dark form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="cost_consultant_num[]" id="ec_CofacilitatorNoc${ecCofaci}" data-type="currency">
                    </td>
                    <td class="mgt-td-dark-bg">
                        <input type="text"
                            class="commanumber text-center text-dark fw-bold form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="cost_hour_fee[]" id="ec_CofacilitatorHf${ecCofaci}" data-type="currency">
                    </td>
                    <td class="noh mgt-td-dark-bg">
                        <input type="text"
                            class="commanumber text-center text-dark form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="cost_hour_num[]" id="ec_CofacilitatorNoh${ecCofaci}" data-type="currency">
                    </td>
                    <td class="nwh mgt-td-dark-bg">
                        <input type="text"
                            class="commanumber text-center text-dark form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="cost_nswh[]" id="ec_CofacilitatorNwh${ecCofaci}" data-type="currency">
                    </td>
                    <td class="total-td">
                        <h4 class="text-center lead text-danger" id="ec_CofacilitatorTotal">-</h4>
                    </td>
                    <td class="total-td table-warning">
                        <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="cost_rooster[]" id="roster5${ecCofaci}" 
                            oninput="filterConsultant( 'roster5${ecCofaci}','ec_CofacilitatorHf${ecCofaci}','coFaci');"
                            list="filtered_consultant_list" 
                            autocomplete="off">
                            <input  type="hidden" value="" name="cost_rooster_id[]" id="id_roster5${ecCofaci}">
                    </td>
                    <td class="total-td">
                        <textarea class="form-control input-table @error('') is-invalid @enderror"
                            name="cost_notes[]" id="ec_CofacilitatorNotes${ecCofaci}" rows="2" cols="55"></textarea>
                    </td>
                    <td class="border border-white" style="background-color: #FFFFFF;">
                        <a href="javascript:void(0)" class="text-danger font-18 remove" id="ecCofaciRemove${ecCofaci}" title="Remove" >
                            <i class="fa fa-trash-o"></i>
                        </a>
                    </td>
                </tr>
            `);
        });

        $("#ec_TableCofaci").on("click", ".remove", function () {

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
                var dig = parseInt(id.substring(12));

                // Modifying row id.
                $(this).attr("id", `ec_CofaciRow${dig - 1}`);

                // Modifying row index.
                noc.attr("id", `ec_CofacilitatorNoc${dig - 1}`);
                noh.attr("id", `ec_CofacilitatorNoh${dig - 1}`);
                nwh.attr("id", `ec_CofacilitatorNwh${dig - 1}`);
            });

            // Removing the current row.
            $(this).closest("tr").remove();
            // Decreasing total number of rows by 1.
            ecCofaci--;
        });
    });

    /********* MODERATOR *********/
    $(document).ready(function (){
        var ecModerator = 1;
        $("#CeAddBtn6").on("click", function() {
            // Adding a row inside the tbody.
            $("#ec_TableModerator").append(`
                <tr class="th-blue-grey-lighten-2" id="ec_ModeratorRow${++ecModerator}">
                    <td class="title">
                        Moderator
                        <input type="text" class="d-none" value="Moderator" name="cost_type[]" readonly>
                    </td>
                    <td class="noc mgt-td-dark-bg">
                        <input type="text"
                            class="commanumber text-dark text-center form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="cost_consultant_num[]" id="ec_ModeratorNoc${ecModerator}" data-type="currency">
                    </td>
                    <td class="mgt-td-dark-bg">
                        <fieldset>
                            <input type="text"
                                    class="text-center text-dark fw-bold form-control input-table commanumber @error('') is-invalid @enderror"
                                    value="{{ old('') }}" name="cost_hour_fee[]" id="ec_ModeratorHf${ecModerator}" data-type="currency">
                            @error('ef_customFee')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </fieldset>
                    </td>
                    <td class="noh mgt-td-dark-bg">
                        <input type="text"
                            class="commanumber text-dark text-center form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="cost_hour_num[]" id="ec_ModeratorNoh${ecModerator}" data-type="currency">
                    </td>
                    <td class="nwh mgt-td-dark-bg">
                        <input type="text"
                            class="commanumber text-dark text-center form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="cost_nswh[]" id="ec_ModeratorNwh${ecModerator}" data-type="currency">
                    </td>
                    <td class="total-td">
                        <h4 class="text-center lead text-danger" id="ec_ModeratorTotal">-</h4>
                    </td>
                    <td class="total-td table-warning">
                        <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="cost_rooster[]" id="roster6${ecModerator}" 
                            oninput="filterConsultant( 'roster6${ecModerator}','ec_ModeratorHf${ecModerator}','moderator');"
                            list="filtered_consultant_list" 
                            autocomplete="off">
                            <input  type="hidden" value="" name="cost_rooster_id[]" id="id_roster6${ecModerator}">
                    </td>
                    <td class="total-td">
                        <textarea class="form-control input-table @error('') is-invalid @enderror"
                            name="cost_notes[]" id="ec_ModeratorNotes${ecModerator}" rows="2" cols="55"></textarea>
                    </td>
                    <td class="border border-white" style="background-color: #FFFFFF;">
                        <a href="javascript:void(0)" class="text-danger font-18 remove" id="ecModeratorRemove${ecModerator}" title="Remove" >
                            <i class="fa fa-trash-o"></i>
                        </a>
                    </td>
                </tr>
            `);
        });

        $("#ec_TableModerator").on("click", ".remove", function () {

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
                var dig = parseInt(id.substring(15));

                // Modifying row id.
                $(this).attr("id", `ec_ModeratorRow${dig - 1}`);

                // Modifying row index.
                noc.attr("id", `ec_ModeratorNoc${dig - 1}`);
                noh.attr("id", `ec_ModeratorNoh${dig - 1}`);
                nwh.attr("id", `ec_ModeratorNwh${dig - 1}`);
            });

            // Removing the current row.
            $(this).closest("tr").remove();
            // Decreasing total number of rows by 1.
            ecModerator--;
        });
    });

    /********* PRODUCER *********/
    $(document).ready(function (){
        var ecProducer = 1;
        $("#CeAddBtn7").on("click", function() {
            // Adding a row inside the tbody.
            $("#ec_TableProducer").append(`
                <tr class="th-blue-grey-lighten-2" id="ec_ProducerRow${++ecProducer}">
                    <td class="title">
                        Producer
                        <input type="text" class="d-none" value="Producer" name="cost_type[]" readonly>
                    </td>
                    <td class="noc mgt-td-dark-bg">
                        <input type="text"
                            class="commanumber text-center text-dark fw-bold form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="cost_consultant_num[]" id="ec_ProducerNoc${ecProducer}" data-type="currency">
                    </td>
                    <td class="mgt-td-dark-bg">
                        <input type="text"
                            class="commanumber text-center text-dark fw-bold form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="cost_hour_fee[]" id="ec_ProducerHf${ecProducer}" data-type="currency">
                    </td>
                    <td class="noh mgt-td-dark-bg">
                        <input type="text"
                            class="commanumber text-center text-dark fw-bold form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="cost_hour_num[]" id="ec_ProducerNoh${ecProducer}" data-type="currency">
                    </td>
                    <td class="nwh mgt-td-dark-bg">
                        <input type="text"
                            class="commanumber text-center text-dark fw-bold form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="cost_nswh[]" id="ec_ProducerNwh${ecProducer}" data-type="currency">
                    </td>
                    <td class="total-td">
                        <h4 class="text-center lead text-danger" id="ec_ProducerTotal">-</h4>
                    </td>
                    <td class="total-td table-warning">
                        <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="cost_rooster[]" id="roster7${ecProducer}"  
                            oninput="filterConsultant( 'roster7${ecProducer}','ec_ProducerHf${ecProducer}','producer');"
                            list="filtered_consultant_list" 
                            autocomplete="off">
                            <input  type="hidden" value="" name="cost_rooster_id[]" id="id_roster7${ecProducer}">
                    </td>
                    <td class="total-td">
                        <textarea class="form-control input-table @error('') is-invalid @enderror"
                            name="cost_notes[]" id="ec_ProducerNotes${ecProducer}" rows="2" cols="55"></textarea>
                    </td>
                    <td class="border border-white" style="background-color: #FFFFFF;">
                        <a href="javascript:void(0)" class="text-danger font-18 remove" id="ecProducerRemove${ecProducer}" title="Remove" >
                            <i class="fa fa-trash-o"></i>
                        </a>
                    </td>
                </tr>
            `);
        });

        $("#ec_TableProducer").on("click", ".remove", function () {

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
                $(this).attr("id", `ec_ProducerRow${dig - 1}`);

                // Modifying row index.
                noc.attr("id", `ec_ProducerNoc${dig - 1}`);
                noh.attr("id", `ec_ProducerNoh${dig - 1}`);
                nwh.attr("id", `ec_ProducerNwh${dig - 1}`);
            });

            // Removing the current row.
            $(this).closest("tr").remove();
            // Decreasing total number of rows by 1.
            ecProducer--;
        });
    });

/******************************************************************DOCUMENTOR*****************************************************************************/
    /********* DOCUMENTOR *********/
    $(document).ready(function (){
            var ecDocumentor = 1;
            $("#CeAddBtn8").on("click", function() {
                // Adding a row inside the tbody.
                $("#ec_TableDocumentor").append(`
                    <tr class="th-blue-grey-lighten-2" id="ec_DocumentorRow${++ecDocumentor}">
                        <td class="title">
                            Documentor
                            <input type="text" class="d-none" value="Documentor" name="cost_type[]" readonly>
                        </td>
                        <td class="noc mgt-td-dark-bg">
                            <input type="text"
                                class="commanumber text-center text-dark fw-bold form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="cost_consultant_num[]" id="ec_DocumentorNoc${ecDocumentor}" data-type="currency">
                        </td>
                        <td class="bg-white">
                            <input type="text"
                                class="commanumber text-center text-dark fw-bold form-control input-table @error('') is-invalid @enderror"
                                value="700" name="cost_hour_fee[]" id="ec_DocumentorHf${ecDocumentor}">
                        </td>
                        <td class="noh mgt-td-dark-bg">
                            <input type="text"
                                class="commanumber text-center text-dark fw-bold form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="cost_hour_num[]" id="ec_DocumentorNoh${ecDocumentor}"data-type="currency" >
                        </td>
                        <td class="nwh mgt-td-dark-bg">
                            <input type="text"
                                class="commanumber text-center text-dark fw-bold form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="cost_nswh[]" id="ec_DocumentorNwh${ecDocumentor}"data-type="currency"  >
                        </td>
                        <td class="total-td table-light" style="background-color: rgba(146, 146, 146, 0.727">
                            <h4 class="text-center text-danger" id="ec_DocumentorTotal">-</h4>
                        </td>
                        <td class="total-td table-light">
                            <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="cost_rooster[]" id="roster25${ecDocumentor}" 
                                oninput="filterConsultant( 'roster25${ecDocumentor}','');"
                                list="filtered_consultant_list" 
                                autocomplete="off">
                                <input  type="hidden" value="" name="cost_rooster_id[]" id="id_roster25${ecDocumentor}">
                        </td>
                        <td class="total-td table-light">
                            <textarea class="form-control input-table @error('') is-invalid @enderror"
                                name="cost_notes[]" id="ec_DocumentorNotes${ecDocumentor}" rows="2" cols="55"></textarea>
                        </td>
                        <td class="border border-white" style="background-color: #FFFFFF;">
                            <a href="javascript:void(0)" class="text-danger font-18 remove" id="ecDocumentorRemove${ecDocumentor}" title="Remove" >
                                <i class="fa fa-trash-o"></i>
                            </a>
                        </td>
                    </tr>
                `);
            });

            $("#ec_TableDocumentor").on("click", ".remove", function () {

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
                    var dig = parseInt(id.substring(16));

                    // Modifying row id.
                    $(this).attr("id", `ec_DocumentorRow${dig - 1}`);

                    // Modifying row index.
                    noc.attr("id", `ec_DocumentorNoc${dig - 1}`);
                    noh.attr("id", `ec_DocumentorNoh${dig - 1}`);
                    nwh.attr("id", `ec_DocumentorNwh${dig - 1}`);
                });

                // Removing the current row.
                $(this).closest("tr").remove();
                // Decreasing total number of rows by 1.
                ecDocumentor--;
            });
        });


/********* END *********/

    /********* OFF-PROGRAM FEE *********/
    $(document).ready(function (){
        var ecOffProgram = 1;
        $("#CeAddBtn9").on("click", function() {
            // Adding a row inside the tbody.
            $("#ec_TblOffProgram").append(`
                <tr class="th-blue-grey-lighten-2" id="ec_OffProgramRow${++ecOffProgram}">
                    <td class="title">
                        Off-Program fee
                        <input type="text" class="d-none" value="Off-Program fee" name="op_type[]" readonly>
                    </td>
                    <td class="noc table-warning">
                        <input type="text"
                                class="input js-mytooltip text-center text-dark fw-bold form-control input-table commanumber @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="op_consultant_num[]" id="ec_ProgramNoc${ecOffProgram}" data-type="currency"
                                data-mytooltip-content="<i>
                                        - For single or series of programs<br>
                                        - One time only<br>
                                        - Per person<br>
                                        </i>"
                                data-mytooltip-theme="dark" data-mytooltip-action="focus"
                                data-mytooltip-direction="bottom">
                    </td>
                    <td class="bg-white">
                        <input type="text"
                                class="text-center text-dark fw-bold form-control input-table commanumber @error('') is-invalid @enderror"
                                value="1,000" name="op_hour_fee[]" id="ec_ProgramHf${ecOffProgram}" data-type="currency">
                    </td>
                    <td class="noh">
                        <input type="text" class="d-none" id="ec_ProgramNoh${ecOffProgram}" name="op_hour_num[]" readonly>
                    </td>
                    <td class="nwh">
                        <input type="text" class="d-none" id="ec_ProgramNwh${ecOffProgram}" name="op_nswh[]" readonly>
                    </td>
                    <td class="total-td" style="background-color: rgba(146, 146, 146, 0.727">
                            <h4 class="text-center text-danger" id="ec_ProgramTotal">-</h4>
                    </td>
                    <td class="total-td">
                        <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="op_rooster[]" id="roster26${ecOffProgram}" 
                            oninput="filterConsultant( 'roster26${ecOffProgram}','');"
                            list="filtered_consultant_list" 
                            autocomplete="off">
                            <input  type="hidden" value="" name="op_rooster_id[]" id="id_roster26${ecOffProgram}">
                    </td>
                    <td class="total-td">
                        <textarea class="form-control input-table @error('') is-invalid @enderror"
                            name="op_notes[]" id="ec_ProgramNotes${ecOffProgram}" rows="2" cols="55"></textarea>
                    </td>
                    <td class="border border-white" style="background-color: #FFFFFF;">
                        <a href="javascript:void(0)" class="text-danger font-18 remove" id="ecOffProgramRemove${ecOffProgram}" title="Remove" >
                            <i class="fa fa-trash-o"></i>
                        </a>
                    </td>
                </tr>
            `);
        });

        $("#ec_TblOffProgram").on("click", ".remove", function () {

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
                var dig = parseInt(id.substring(16));

                // Modifying row id.
                $(this).attr("id", `ec_OffProgramRow${dig - 1}`);

                // Modifying row index.
                noc.attr("id", `ec_ProgramNoc${dig - 1}`);
                noh.attr("id", `ec_ProgramNoh${dig - 1}`);
                nwh.attr("id", `ec_ProgramNwh${dig - 1}`);
            });

            // Removing the current row.
            $(this).closest("tr").remove();
            // Decreasing total number of rows by 1.
            ecOffProgram--;
        });
    });
/********* END *********/
</script>

