<script>
    /********* START *********/
    /*****************************************************************COMMISION*****************************************************************************/
        /********* SALES *********/
        var salesNum = {{$ecSales}};
        $(document).ready(function() {
            $("#addBtn9").on("click", function() {
                // Adding a row inside the tbody.
                $("#tableSales").append(
                    `<tr class="table-warning" id="salesRow${++salesNum}">
                            <td class="title table-light">
                                <input type="text" class="d-none" value="Sales" name="cost_type[]" readonly>
                                Sales (4% / 5% / 6% / 7%)
                            </td>
                            <td><input type="text" class="d-none" value="" name="cost_consultant_num[]" readonly></td>
                            <td>
                                <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="cost_hour_fee[]" id="inputSales" onblur="this.value = this.value.replace('%', '') + '%';"
                                oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\...*)\./g, '$1') ;">
                            </td>
                            <td><input type="text" class="d-none" value="" name="cost_hour_num[]" readonly></td>
                            <td><input type="text" class="d-none" value="" name="cost_nswh[]" readonly></td>
                            <td class="total-td tbl-engmt-cost table-light" style="background-color: rgba(146, 146, 146, 0.727">
                                <h4 class="text-center" id="salesTotal">-</h4>
                            </td>
                            <td class="total-td table-light">
                                <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                    value="{{ old('') }}" name="cost_rooster[]" id="">
                            </td>
                            <td class="total-td table-light">
                                <textarea class="form-control input-table @error('') is-invalid @enderror"
                                    name="cost_notes[]" id="" rows="2" cols="55"></textarea>
                            </td>
                            <td class="border border-white add-row"><a href="javascript:void(0)" class="text-danger font-18 remove" title="Remove"><i class="fa fa-trash-o"></i></a></td>
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

            //browser load check if the sales is greater than 1
            if (salesNum > 1) {
                $(".dropdown-sales").css("display","none");
                $("#sales").val("0%")
                $("#sales").prop( "disabled", true );
                $(".input-sales").css("display","block");
                $(".input-sales").prop( "disabled", false );
            } else {
                $(".dropdown-sales").css("display","");
                $("#sales").prop( "disabled", false );
                $(".input-sales").css("display","none");
                $(".input-sales").prop( "disabled", true );
                $(".input-sales").val("0%")
            }

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
        var refferalNum = {{$ecReferral}};
        $(document).ready(function() {
            $("#addBtn10").on("click", function() {
                // Adding a row inside the tbody.
                $("#tableReferral").append(
                    `<tr class="table-warning" id="salesRow${++refferalNum}">
                            <td class="title table-light">
                                Referral (2% / 3%)
                                <input type="text" class="d-none" value="Referral" name="cost_type[]" readonly>
                            </td>
                            <td><input type="text" class="d-none" value="" name="cost_consultant_num[]" readonly></td>
                            <td>
                                <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="cost_hour_fee[]" id="inputReferral" onblur="this.value = this.value.replace('%', '') + '%';"
                            oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\...*)\./g, '$1');">
                            </td>
                            <td><input type="text" class="d-none" value="" name="cost_hour_num[]" readonly></td>
                            <td><input type="text" class="d-none" value="" name="cost_nswh[]" readonly></td>
                            <td class="total-td tbl-engmt-cost table-light" style="background-color: rgba(146, 146, 146, 0.727">
                                <h4 class="text-center" id="referralTotal">-</h4>
                            </td>
                            <td class="total-td table-light">
                                <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                    value="{{ old('') }}" name="cost_rooster[]" id="">
                            </td>
                            <td class="total-td table-light">
                                <textarea class="form-control input-table @error('') is-invalid @enderror"
                                    name="cost_notes[]" id="" rows="2" cols="55"></textarea>
                            </td>
                            <td class="border border-white add-row"><a href="javascript:void(0)" class="text-danger font-18 remove" title="Remove"><i class="fa fa-trash-o"></i></a></td>
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

            //browser load check if the referral is greater than 1
            if (refferalNum > 1) {
                $("#referral").prop( "disabled", true );
                $(".dropdown-referral").css("display","none");
                $(".input-referral").css("display","block");
                $(".input-referral").prop( "disabled", false );
            }

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
        var managerNum = {{$ecEngagementManager}};
        $(document).ready(function() {
            $("#addBtn11").on("click", function() {
                // Adding a row inside the tbody.
                $("#tableEngagementmanager").append(
                    `<tr class="table-warning" id="engagementmanagerRow${++managerNum}">
                        <td class="title fw-bold text-dark table-light">
                            ENGAGEMENT MANAGER
                            <input type="text" class="d-none" value="Engagement Manager" name="cost_type[]" readonly>
                        </td>
                        <td><input type="text" class="d-none" value="" name="cost_consultant_num[]" readonly></td>
                        <td>
                            <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="cost_hour_fee[]" id="inputManager" onblur="this.value = this.value.replace('%', '') + '%';"
                                oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\...*)\./g, '$1');">
                        </td>
                        <td><input type="text" class="d-none" value="" name="cost_hour_num[]" readonly></td>
                        <td><input type="text" class="d-none" value="" name="cost_nswh[]" readonly></td>
                        <td class="total-td tbl-engmt-cost table-light" style="background-color: rgba(146, 146, 146, 0.727">
                            <h4 class="text-center" id="engagementManagerTotal">-</h4>
                        </td>
                        <td class="total-td table-light">
                            <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="cost_rooster[]" id="">
                        </td>
                        <td class="total-td table-light">
                                <textarea class="form-control input-table @error('') is-invalid @enderror"
                                    name="cost_notes[]" id="" rows="2" cols="55"></textarea>
                            </td>
                        <td class="border border-white add-row"><a href="javascript:void(0)" class="text-danger font-18 remove" title="Remove"><i class="fa fa-trash-o"></i></a></td>
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

                //browser load check if the engagement manager is greater than 1
            if (managerNum > 1) {
                $("#engagementManager").prop( "disabled", true );
                $(".dropdown-manager").css("display","none");
                $(".input-manager").css("display","block");
                $(".input-manager").prop( "disabled", false );
            }

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
        var leadConsultant = {{$ecLeadConsultant}};
        $(document).ready(function () {
            $("#EcAddBtn").on("click", function() {
                // Adding a row inside the tbody.
                $("#ec_tableLeadConsultant").append(`
                    <tr class="table-warning" id="ec_LeadConsultant${++leadConsultant}">
                        <td class="title table-light">
                            <input type="text" class="d-none" value="Lead Consultant" name="cost_type[]" readonly>
                            Lead Consultant
                            </td>
                        <td class="noc">
                            <input type="text"
                                class="commanumber text-center form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="cost_consultant_num[]" id="ec_LeadconsultantNoc${leadConsultant}" data-type="currency">
                        </td>
                        <td class="">
                            <input type="text"
                                class="commanumber text-center fw-bold text-dark form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="cost_hour_fee[]" id="ec_LeadconsultantHf${leadConsultant}" data-type="currency">
                                </td>
                        <td class="noh">
                            <input type="text"
                                class="commanumber text-center form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="cost_hour_num[]" id="ec_LeadconsultantNoh${leadConsultant}" data-type="currency">
                        </td>
                        <td class="nwh">
                            <input type="text"
                                class="commanumber text-center form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="cost_nswh[]" id="ec_LeadconsultantNwh${leadConsultant}" data-type="currency">
                        </td>
                        <td class="total-td table-light">
                            <h4 class="text-center lead" id="ec_LeadconsultantTotal">-</h4>
                        </td>
                        <td class="total-td table-light">
                            <input type="text" class="text-uppercase form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="cost_rooster[]" id="roster${leadConsultant}">
                        </td>
                        <td class="total-td table-light">
                            <input class="form-control input-table @error('') is-invalid @enderror"
                                name="cost_notes[]" id=""></input>
                        </td>
                        <td class="border border-white" style="background-color: #FFFFFF;">
                            <a href="javascript:void(0)" class="text-danger font-18 remove" id="ecButton${leadConsultant}" title="Remove">
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
        var ecAnalyst = {{$ecAnalyst}};
        $(document).ready(function () {
            $("#EcAddBtn2").on("click", function() {
                // Adding a row inside the tbody.
                $("#ec_tableAnalyst").append(`
                    <tr class="table-warning" id="ec_Analyst${++ecAnalyst}">
                        <td class="title table-light">
                            <input type="text" class="d-none" value="Analyst" name="cost_type[]" readonly>
                            Analyst
                        </td>
                        <td class="noc">
                            <input type="text"
                                class="commanumber text-center form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="cost_consultant_num[]" id="ec_AnalystNoc${ecAnalyst}" data-type="currency">
                        </td>
                        <td>
                            <input type="text"
                                class="commanumber text-center fw-bold text-dark form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="cost_hour_fee[]" id="ec_AnalystHf${ecAnalyst}" data-type="currency">
                        </td>
                        <td class="noh">
                            <input type="text"
                                class="commanumber text-center form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="cost_hour_num[]" id="ec_AnalystNoh${ecAnalyst}" data-type="currency">
                        </td>
                        <td class="nwh">
                            <input type="text"
                                class="commanumber text-center form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="cost_nswh[]" id="ec_AnalystNwh${ecAnalyst}" data-type="currency">
                        </td>
                        <td class="total-td table-light">
                            <h4 class="text-center lead" id="ec_AnalystTotal">-</h4>
                        </td>
                        <td class="total-td table-light">
                            <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="cost_rooster[]" id="">
                        </td>
                        <td class="total-td table-light">
                            <textarea class="form-control input-table @error('') is-invalid @enderror"
                                name="cost_notes[]" id="" rows="2" cols="55"></textarea>
                        </td>
                        <td class="border border-white" style="background-color: #FFFFFF;">
                            <a href="javascript:void(0)" class="text-danger font-18 remove" id="ecAnalystRemove${ecAnalyst}" title="Remove">
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
        var ecDesigner = {{$ecDesigner}};
        $(document).ready(function (){
            $("#EcAddBtn3").on("click", function() {
                // Adding a row inside the tbody.
                $("#ec_TableDesigner").append(`
                    <tr class="table-warning" id="ec_DesignerRow${++ecDesigner}">
                        <td class="title table-light">Designer
                            <input type="text" class="d-none" value="Designer" name="cost_type[]" readonly>
                        </td>
                        <td class="noc">
                            <input type="text"
                                class="commanumber text-center form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="cost_consultant_num[]" id="ec_DesignerNoc${ecDesigner}" data-type="currency">
                        </td>
                        <td>
                            <input type="text"
                                class="commanumber text-center fw-bold text-dark text-center form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="cost_hour_fee[]" id="ec_DesignerHf${ecDesigner}" data-type="currency">
                        </td>
                        <td class="noh">
                            <input type="text"
                                class="commanumber text-center form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="cost_hour_num[]" id="ec_DesignerNoh${ecDesigner}" data-type="currency">
                        </td>
                        <td class="nwh">
                            <input type="text"
                                class="commanumber text-center form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="cost_nswh[]" id="ec_DesignerNwh${ecDesigner}" data-type="currency">
                        </td>
                        <td class="total-td table-light">
                            <h4 class="text-center lead" id="ec_DesignerTotal">-</h4>
                        </td>
                        <td class="total-td table-light">
                            <input type="text" class="text-uppercase form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="cost_rooster[]" id="roster2${ecDesigner}">
                        </td>
                        <td class="total-td table-light">
                            <textarea class="form-control input-table @error('') is-invalid @enderror"
                                name="cost_notes[]" id="" rows="2" cols="55"></textarea>
                        </td>
                        <td class="border border-white" style="background-color: #FFFFFF;">
                            <a href="javascript:void(0)" class="text-danger font-18 remove" id="ecDesignerRemove${ecDesigner}" title="Remove">
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
        var ecCreators = {{$ecCreators}};
        $(document).ready(function (){
            $("#addBtnCreators").on("click", function() {
                // Adding a row inside the tbody.
                $("#ec_TableCreators").append(`
                    <tr class="table-warning" id="ec_CreatorsRow${++ecCreators}">
                        <td class="title table-light">Creators Fees
                            <input type="text" class="d-none" value="Creators Fees" name="cost_type[]" readonly>
                        </td>
                        <td class="noc">
                            <input type="text"
                                class="commanumber text-center form-control input-table @error('') is-invalid @enderror"
                                value="" name="cost_consultant_num[]" id="ec_CreatorsNoc${ecCreators}" hidden>
                        </td>
                        <td>
                            <fieldset>
                                <select class="input js-mytooltip form-select @error('') is-invalid @enderror"
                                    name="cost_hour_fee[]" id="ec_CreatorsHf"
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
                        <td class="noh">
                            <input type="text"
                                class="commanumber text-center form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="cost_hour_num[]" id="ec_CreatorsNoh${ecCreators}" data-type="currency">
                        </td>
                        <td class="nwh"><input type="text" class="d-none" name="cost_nswh[]" readonly></td>
                        <td class="total-td table-light">
                            <h4 class="text-center lead" id="ec_CreatorsTotal">-</h4>
                        </td>
                        <td class="total-td table-light">
                            <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="cost_rooster[]" id="">
                        </td>
                        <td class="total-td table-light">
                            <textarea class="form-control input-table @error('') is-invalid @enderror"
                                name="cost_notes[]" id="" rows="2" cols="55"></textarea>
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
            var ecLeadfaci = {{$ecLeadfaci}};
            $("#EcAddBtn4").on("click", function() {
                // Adding a row inside the tbody.
                $("#ec_TableLeadfaci").append(`
                    <tr class="table-warning" id="ec_LeadfaciRow${++ecLeadfaci}">
                        <td class="title table-light">
                            <input type="text" class="d-none" value="Lead Facilitator" name="cost_type[]" readonly>
                            Lead Facilitator
                        </td>
                        <td class="noc">
                            <input type="text"
                                class="commanumber text-center form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="cost_consultant_num[]" id="ec_LeadfacilitatorNoc${ecLeadfaci}" data-type="currency">
                        </td>
                        <td>
                            <input type="text"
                                class="commanumber text-center fw-bold text-center text-dark form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="cost_hour_fee[]" id="ec_LeadfacilitatorHf${ecLeadfaci}" data-type="currency">
                        </td>
                        <td class="noh">
                            <input type="text"
                                class="commanumber text-center form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="cost_hour_num[]" id="ec_LeadfacilitatorNoh${ecLeadfaci}" data-type="currency">
                        </td>
                        <td class="nwh">
                            <input type="text"
                                class="commanumber text-center form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="cost_nswh[]" id="ec_LeadfacilitatorNwh${ecLeadfaci}" data-type="currency">
                        </td>
                        <td class="total-td table-light">
                            <h4 class="text-center lead" id="ec_LeadfacilitatorTotal">-</h4>
                        </td>
                        <td class="total-td table-light">
                            <input type="text" class="text-uppercase form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="cost_rooster[]" id="roster3${ecLeadfaci}">
                        </td>
                        <td class="total-td table-light">
                            <textarea class="form-control input-table @error('') is-invalid @enderror"
                                name="cost_notes[]" id="" rows="2" cols="55"></textarea>
                        </td>
                        <td class="border border-white" style="background-color: #FFFFFF;">
                            <a href="javascript:void(0)" class="text-danger font-18 remove" id="ecLeadfaciRemove${ecLeadfaci}" title="Remove">
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
            var ecCoLead = {{$ecColeadfaci}};
            $("#addBtnCoLead").on("click", function() {
                // Adding a row inside the tbody.
                $("#ec_TableCoLeadfaci").append(`
                    <tr class="table-warning" id="ec_CoLeadRow${++ecCoLead}">
                        <td class="title table-light">
                            Co-Lead
                            <input type="text" class="d-none" value="Co-Lead" name="cost_type[]" readonly>
                        </td>
                        <td class="noc">
                            <input type="text"
                                class="commanumber text-center form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="cost_consultant_num[]" id="ec_CoLeadfacilitatorNoc${ecCoLead}" data-type="currency">
                        </td>
                        <td class="hf">
                            <input type="text"
                                class="commanumber text-center fw-bold text-center text-dark form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="cost_hour_fee[]" id="ec_CoLeadfacilitatorHf${ecCoLead}" data-type="currency">
                        </td>
                        <td class="noh">
                            <input type="text"
                                class="commanumber text-center form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="cost_hour_num[]" id="ec_CoLeadfacilitatorNoh${ecCoLead}" data-type="currency">
                        </td>
                        <td class="nwh">
                            <input type="text"
                                class="commanumber text-center form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="cost_nswh[]" id="ec_CoLeadfacilitatorNwh${ecCoLead}" data-type="currency">
                        </td>
                        <td class="total-td table-light">
                            <h4 class="text-center lead" id="ec_CoLeadfacilitatorTotal">-</h4>
                        </td>
                        <td class="total-td table-light">
                            <input type="text" class="text-uppercase form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="cost_rooster[]" id="roster4${ecCoLead}">
                        </td>
                        <td class="total-td table-light">
                            <textarea class="form-control input-table @error('') is-invalid @enderror"
                                name="cost_notes[]" id="" rows="2" cols="55"></textarea>
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
            var ecAlCoach = {{$ecAlCoach}};
            $("#addBtnAlCoach").on("click", function() {
                // Adding a row inside the tbody.
                $("#ec_TableAlCoach").append(`
                    <tr class="table-warning" id="ec_AlCoachRow${++ecAlCoach}">
                        <td class="title table-light">
                            AL Coach
                            <input type="text" class="d-none" value="AL Coach" name="cost_type[]" readonly>
                        </td>
                        <td class="noc">
                            <input type="text"
                                class="commanumber text-center text-dark form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="cost_consultant_num[]" id="ec_AlCoachNoc${ecAlCoach}" data-type="currency">
                        </td>
                        <td>
                            <input type="text"
                                class="commanumber text-center text-dark fw-bold form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="cost_hour_fee[]" id="ec_AlCoachHf${ecAlCoach}" data-type="currency">
                        </td>
                        <td class="noh">
                            <input type="text"
                                class="commanumber text-center text-dark form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="cost_hour_num[]" id="ec_AlCoachNoh${ecAlCoach}" data-type="currency">
                        </td>
                        <td class="nwh">
                            <input type="text"
                                class="commanumber text-center text-dark form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="cost_nswh[]" id="ec_AlCoachNwh${ecAlCoach}" data-type="currency">
                        </td>
                        <td class="total-td table-light">
                            <h4 class="text-center lead" id="ec_AlCoachTotal">-</h4>
                        </td>
                        <td class="total-td table-light">
                            <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="cost_rooster[]" id="">
                        </td>
                        <td class="total-td table-light">
                            <textarea class="form-control input-table @error('') is-invalid @enderror"
                                name="cost_notes[]" id="" rows="2" cols="55"></textarea>
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
            var ecCofaci = {{$ecCofaci}};
            $("#EcAddBtn5").on("click", function() {
                // Adding a row inside the tbody.
                $("#ec_TableCofaci").append(`
                    <tr class="table-warning" id="ec_CofaciRow${++ecCofaci}">
                        <td class="title table-light">
                            Co-Facilitator / Resource Speaker
                            <input type="text" class="d-none" value="Co-Facilitator / Resource Speaker" name="cost_type[]" readonly>
                        </td>
                        <td class="noc">
                            <input type="text"
                                class="commanumber text-center text-dark form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="cost_consultant_num[]" id="ec_CofacilitatorNoc${ecCofaci}" data-type="currency">
                        </td>
                        <td>
                            <input type="text"
                                class="commanumber text-center text-dark fw-bold form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="cost_hour_fee[]" id="ec_CofacilitatorHf${ecCofaci}" data-type="currency">
                        </td>
                        <td class="noh">
                            <input type="text"
                                class="commanumber text-center text-dark form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="cost_hour_num[]" id="ec_CofacilitatorNoh${ecCofaci}" data-type="currency">
                        </td>
                        <td class="nwh">
                            <input type="text"
                                class="commanumber text-center text-dark form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="cost_nswh[]" id="ec_CofacilitatorNwh${ecCofaci}" data-type="currency">
                        </td>
                        <td class="total-td table-light">
                            <h4 class="text-center lead" id="ec_CofacilitatorTotal">-</h4>
                        </td>
                        <td class="total-td table-light">
                            <input type="text" class="text-uppercase form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="cost_rooster[]" id="roster5${ecCofaci}">
                        </td>
                        <td class="total-td table-light">
                            <textarea class="form-control input-table @error('') is-invalid @enderror"
                                name="cost_notes[]" id="" rows="2" cols="55"></textarea>
                        </td>
                        <td class="border border-white" style="background-color: #FFFFFF;">
                            <a href="javascript:void(0)" class="text-danger font-18 remove" id="ecCofaciRemove${ecCofaci}" title="Remove">
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
            var ecModerator = {{$ecModerator}};
            $("#EcAddBtn6").on("click", function() {
                // Adding a row inside the tbody.
                $("#ec_TableModerator").append(`
                    <tr class="table-warning" id="ec_ModeratorRow${++ecModerator}">
                        <td class="title table-light">
                            Moderator
                            <input type="text" class="d-none" value="Moderator" name="cost_type[]" readonly>
                        </td>
                        <td class="noc">
                            <input type="text"
                                class="commanumber text-dark text-center form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="cost_consultant_num[]" id="ec_ModeratorNoc${ecModerator}" data-type="currency">
                        </td>
                        <td>
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
                        <td class="noh">
                            <input type="text"
                                class="commanumber text-dark text-center form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="cost_hour_num[]" id="ec_ModeratorNoh${ecModerator}" data-type="currency">
                        </td>
                        <td class="nwh">
                            <input type="text"
                                class="commanumber text-dark text-center form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="cost_nswh[]" id="ec_ModeratorNwh${ecModerator}" data-type="currency">
                        </td>
                        <td class="total-td table-light">
                            <h4 class="text-center lead" id="ec_ModeratorTotal">-</h4>
                        </td>
                        <td class="total-td table-light">
                            <input type="text" class="text-uppercase form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="cost_rooster[]" id="roster6${ecModerator}">
                        </td>
                        <td class="total-td table-light">
                            <textarea class="form-control input-table @error('') is-invalid @enderror"
                                name="cost_notes[]" id="" rows="2" cols="55"></textarea>
                        </td>
                        <td class="border border-white" style="background-color: #FFFFFF;">
                            <a href="javascript:void(0)" class="text-danger font-18 remove" id="ecModeratorRemove${ecModerator}" title="Remove">
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
            var ecProducer = {{$ecProducer}};
            $("#EcAddBtn7").on("click", function() {
                // Adding a row inside the tbody.
                $("#ec_TableProducer").append(`
                    <tr class="table-warning" id="ec_ProducerRow${++ecProducer}">
                        <td class="title table-light">
                            Producer
                            <input type="text" class="d-none" value="Producer" name="cost_type[]" readonly>
                        </td>
                        <td class="noc">
                            <input type="text"
                                class="commanumber text-center text-dark fw-bold form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="cost_consultant_num[]" id="ec_ProducerNoc${ecProducer}" data-type="currency">
                        </td>
                        <td>
                            <input type="text"
                                class="commanumber text-center text-dark fw-bold form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="cost_hour_fee[]" id="ec_ProducerHf${ecProducer}" data-type="currency">
                        </td>
                        <td class="noh">
                            <input type="text"
                                class="commanumber text-center text-dark fw-bold form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="cost_hour_num[]" id="ec_ProducerNoh${ecProducer}" data-type="currency">
                        </td>
                        <td class="nwh">
                            <input type="text"
                                class="commanumber text-center text-dark fw-bold form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="cost_nswh[]" id="ec_ProducerNwh${ecProducer}" data-type="currency">
                        </td>
                        <td class="total-td table-light">
                            <h4 class="text-center lead" id="ec_ProducerTotal">-</h4>
                        </td>
                        <td class="total-td table-light">
                            <input type="text" class="text-uppercase form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="cost_rooster[]" id="roster7${ecProducer}">
                        </td>
                        <td class="total-td table-light">
                            <textarea class="form-control input-table @error('') is-invalid @enderror"
                                name="cost_notes[]" id="" rows="2" cols="55"></textarea>
                        </td>
                        <td class="border border-white" style="background-color: #FFFFFF;">
                            <a href="javascript:void(0)" class="text-danger font-18 remove" id="ecProducerRemove${ecProducer}" title="Remove">
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
                var ecDocumentor = {{$ecDocumentor}};
                $("#EcAddBtn8").on("click", function() {
                    // Adding a row inside the tbody.
                    $("#ec_TableDocumentor").append(`
                        <tr class="table-warning" id="ec_DocumentorRow${++ecDocumentor}">
                            <td class="title table-light">
                                Documentor
                                <input type="text" class="d-none" value="Documentor" name="cost_type[]" readonly>
                            </td>
                            <td>
                                <input type="text"
                                    class="commanumber text-center text-dark fw-bold form-control input-table @error('') is-invalid @enderror"
                                    value="{{ old('') }}" name="cost_consultant_num[]" id="ec_DocumentorNoc${ecDocumentor}" data-type="currency">
                            </td>
                            <td>
                                <input type="text"
                                    class="commanumber text-center text-dark fw-bold form-control input-table @error('') is-invalid @enderror"
                                    value="{{ old('') }}" name="cost_hour_fee[]" id="ec_DocumentorHf" data-type="currency">
                            </td>
                            <td>
                                <input type="text"
                                    class="commanumber text-center text-dark fw-bold form-control input-table @error('') is-invalid @enderror"
                                    value="{{ old('') }}" name="cost_hour_num[]" id="ec_DocumentorNoh${ecDocumentor}" data-type="currency">
                            </td>
                            <td>
                                <input type="text"
                                    class="commanumber text-center text-dark fw-bold form-control input-table @error('') is-invalid @enderror"
                                    value="{{ old('') }}" name="cost_nswh[]" id="ec_DocumentorNwh${ecDocumentor}" data-type="currency">
                            </td>
                            <td class="total-td table-light" style="background-color: rgba(146, 146, 146, 0.727">
                                <h4 class="text-center" id="ec_DocumentorTotal">-</h4>
                            </td>
                            <td class="total-td table-light">
                                <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                    value="{{ old('') }}" name="cost_rooster[]" id="">
                            </td>
                            <td class="total-td table-light">
                                <textarea class="form-control input-table @error('') is-invalid @enderror"
                                    name="cost_notes[]" id="" rows="2" cols="55"></textarea>
                            </td>
                            <td class="border border-white" style="background-color: #FFFFFF;">
                                <a href="javascript:void(0)" class="text-danger font-18 remove" id="ecDocumentorRemove${ecDocumentor}" title="Remove">
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
    </script>

