<script>

    //SALES
    var ecsaleNum = 1;
    $(document).ready(function() {
        $("#ecaddButton").on("click", function() {
            $("#tableofSale").append(
                `<tr class="th-blue-grey-lighten-2" id="rowofSale${++ecsaleNum}">
                            <td class="title">
                                <input type="text" class="d-none" value="Sales" name="cost_type[]" readonly>
                                Sales (4% / 5% / 6% / 7%)
                            </td>
                            <td><input type="text" class="d-none" value="" name="cost_noc[]" readonly></td>
                            <td>
                                <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="cost_pd[]" id="inputforSale"
                                onblur="this.value = this.value.replace('%', '') + '%';"
                                oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
                            </td>
                            <td><input type="text" class="d-none" value="" name="cost_nod[]" readonly></td>
                            <td><input type="text" class="d-none" value="" name="cost_atd[]" readonly></td>
                            <td><input type="text" class="d-none" value="" name="cost_nswh[]" readonly></td>
                            <td class="total-td tbl-engmt-cost">
                                <h4 class="text-center" id="ec_saleTotal">-</h4>
                            </td>
                            <td class="total-td">
                                <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                    value="{{ old('') }}" name="cost_roster[]" id="">
                            </td>
                            <td style="background-color: #FFFFFF;" class="border border-white">
                                <a href="javascript:void(0)" class="text-danger font-18 remove" title="Remove">
                                    <i class="fa fa-trash-o"></i>
                                </a>
                            </td>
                </tr>`);

            const ecsaleId = document.querySelectorAll("#ec_sale");
            for (let i = 0; i < ecsaleId.length; i++) {
                ecsaleId[i].value = "0";
            }

            if (ecsaleNum > 1) {
                document.getElementById("dropdownforSale").style.display = "none";
                document.getElementById("dropdownforSale").disabled = true;
                document.getElementById("inputforSale").style.display =
                    "";
                document.getElementById("inputforSale").disabled = false;

            }
        });
        $("#tableofSale").on("click", ".remove", function() {
            var child = $(this).closest("tr").nextAll();

            $(this).closest("tr").remove();

            ecsaleNum--;
            if (ecsaleNum == 1) {
                document.getElementById("inputforSale").style.display = "none";
                document.getElementById("ec_sale").value = "0";
                document.getElementById("dropdownforSale").style.display = "";
                document.getElementById("inputforSale").value = "";
            }

        });

    });

    //REFERRALS
    var ecreferralsNum = 1;
    $(document).ready(function() {
        $("#ecaddButton2").on("click", function() {
            $("#tableofReferrals").append(
                `<tr class="th-blue-grey-lighten-2" id="rowofReferrals${++ecreferralsNum}">
                            <td class="title">
                                <input type="text" class="d-none" value="Referral" name="cost_type[]" readonly>
                                Referral (2% / 3%)
                            </td>
                            <td><input type="text" class="d-none" value="" name="cost_noc[]" readonly></td>
                            <td>
                                <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="cost_pd[]" id="inputforReferrals"
                                onblur="this.value = this.value.replace('%', '') + '%';"
                                oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
                            </td>
                            <td><input type="text" class="d-none" value="" name="cost_nod[]" readonly></td>
                            <td><input type="text" class="d-none" value="" name="cost_atd[]" readonly></td>
                            <td><input type="text" class="d-none" value="" name="cost_nswh[]" readonly></td>
                            <td class="total-td tbl-engmt-cost">
                                <h4 class="text-center" id="referralsTotal">-</h4>
                            </td>
                            <td class="total-td">
                                <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                    value="{{ old('') }}" name="cost_roster[]" id="">
                            </td>
                            <td style="background-color: #FFFFFF;" class="border border-white">
                                <a href="javascript:void(0)" class="text-danger font-18 remove" title="Remove">
                                    <i class="fa fa-trash-o"></i>
                                </a>
                            </td>
                </tr>`);

            const ecreferralsId = document.querySelectorAll("#referrals");
            for (let i = 0; i < ecreferralsId.length; i++) {
                ecreferralsId[i].value = "0";
            }

            if (ecreferralsNum > 1) {
                document.getElementById("dropdownforReferrals").style.display = "none";
                document.getElementById("dropdownforReferrals").disabled = true;
                document.getElementById("inputforReferrals").style.display =
                    "";
                document.getElementById("inputforReferrals").disabled = false;

            }
        });

        $("#tableofReferrals").on("click", ".remove", function() {
            var child = $(this).closest("tr").nextAll();

            $(this).closest("tr").remove();

            ecreferralsNum--;
            if (ecreferralsNum == 1) {
                document.getElementById("inputforReferrals").style.display = "none";
                document.getElementById("referrals").value = "0";
                document.getElementById("dropdownforReferrals").style.display = "";
                document.getElementById("inputforReferrals").value = "";
            }

        });

    });

    //ENGAGEMENT MANAGER
    var ecengagementNum = 1;
    $(document).ready(function() {
        $("#ecaddButton3").on("click", function() {
            $("#tableofEngagementManager").append(
                `<tr class="th-blue-grey-lighten" id="rowofEngagementManager${++ecengagementNum}">
                            <td class="title fw-bold text-dark">
                                <input type="text" class="d-none" value="Engagement Manager" name="cost_type[]" readonly>
                                ENGAGEMENT MANAGER(4%)
                            </td>
                            <td><input type="text" class="d-none" value="" name="cost_noc[]" readonly></td>
                            <td>
                                <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="cost_pd[]" id="inputforEngagementManager"
                                onblur="this.value = this.value.replace('%', '') + '%';"
                                oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
                            </td>
                            <td><input type="text" class="d-none" value="" name="cost_nod[]" readonly></td>
                            <td><input type="text" class="d-none" value="" name="cost_atd[]" readonly></td>
                            <td><input type="text" class="d-none" value="" name="cost_nswh[]" readonly></td>
                            <td class="total-td tbl-engmt-cost">
                                <h4 class="text-center" id="ecengagementManagerTotal">-</h4>
                            </td>
                            <td class="total-td">
                                <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                    value="{{ old('') }}" name="cost_roster[]" id="">
                            </td>
                            <td style="background-color: #FFFFFF;" class="border border-white">
                                <a href="javascript:void(0)" class="text-danger font-18 remove" title="Remove">
                                    <i class="fa fa-trash-o"></i>
                                </a>
                            </td>
                </tr>`);

            const ecengagementId = document.querySelectorAll("#ecengagementManager");
            for (let i = 0; i < ecengagementId.length; i++) {
                ecengagementId[i].value = "0";
            }

            if (ecengagementNum > 1) {
                document.getElementById("dropdownforEngagementManager").style.display = "none";
                document.getElementById("dropdownforEngagementManager").disabled = true;
                document.getElementById("inputforEngagementManager").style.display = "";
                document.getElementById("inputforEngagementManager").disabled = false;

            }
        });

        $("#tableofEngagementManager").on("click", ".remove", function() {
            var child = $(this).closest("tr").nextAll();

            $(this).closest("tr").remove();

            ecengagementNum--;
            if (ecengagementNum == 1) {
                document.getElementById("inputforEngagementManager").style.display = "none";
                document.getElementById("ecengagementManager").value = "0";
                document.getElementById("dropdownforEngagementManager").style.display = "";
                document.getElementById("inputforEngagementManager").value = "";
            }

        });

    });

    //OFFSITE PC
    var ecoffsiteNum = 1;
    $(document).ready(function() {
        $("#ecaddButton4").on("click", function() {
            $("#tableofOffsite").append(
                `<tr class="th-blue-grey-lighten" id="rowofOffsite${++ecoffsiteNum}">
                        <td class="title fw-bold text-dark">
                            <input type="text" class="d-none" value="Offsite" name="cost_type[]" readonly>
                            OFFSITE PC(3%/4%/5%)
                        </td>
                        <td><input type="text" class="d-none" value="" name="cost_noc[]" readonly></td>
                        <td>
                            <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="cost_pd[]" id="inputforOffsite"
                            onblur="this.value = this.value.replace('%', '') + '%';"
                            oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
                        </td>
                        <td><input type="text" class="d-none" value="" name="cost_nod[]" readonly></td>
                        <td><input type="text" class="d-none" value="" name="cost_atd[]" readonly></td>
                        <td><input type="text" class="d-none" value="" name="cost_nswh[]" readonly></td>
                        <td class="total-td tbl-engmt-cost">
                            <h4 class="text-center" id="ec_offsitePcTotal">-</h4>
                        </td>
                        <td class="total-td">
                            <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="cost_roster[]" id="">
                        </td>
                        <td style="background-color: #FFFFFF;" class="border border-white">
                            <a href="javascript:void(0)" class="text-danger font-18 remove" title="Remove">
                                <i class="fa fa-trash-o"></i>
                            </a>
                        </td>
                </tr>`);

            const ecoffsiteId = document.querySelectorAll("#ec_offsitePc");
            for (let i = 0; i < ecoffsiteId.length; i++) {
                ecoffsiteId[i].value = "0";
            }

            if (ecoffsiteNum > 1) {
                document.getElementById("dropdownforOffsite").style.display = "none";
                document.getElementById("dropdownforOffsite").disabled = true;
                document.getElementById("inputforOffsite").style.display = "";
                document.getElementById("inputforOffsite").disabled = false;

            }
        });

        $("#tableofOffsite").on("click", ".remove", function() {
            var child = $(this).closest("tr").nextAll();

            $(this).closest("tr").remove();

            ecoffsiteNum--;
            if (ecoffsiteNum == 1) {
                document.getElementById("inputforOffsite").style.display = "none";
                document.getElementById("ec_offsitePc").value = "0";
                document.getElementById("dropdownforOffsite").style.display = "";
                document.getElementById("inputforOffsite").value = "";
            }

        });

    });

    //LEAD CONSULTANT
    var ecleadConsultant = 1;
    $(document).ready(function () {
        $("#ecaddButton5").on("click", function() {
            // Adding a row inside the tbody.
            $("#tableofLeadConsultant").append(`
                <tr class="th-blue-grey-lighten-2" id="rowofLeadConsultant${++ecleadConsultant}">
                    <td class="title">
                        <input type="text" class="d-none" value="Lead Consultant" name="cost_type[]" readonly>
                        Lead Consultant
                    </td>
                    <td class="noc">
                        <input type="number"
                            class="text-center form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="cost_noc[]" id="ec_LeadconsultantsNoc${ecleadConsultant}" max="100">
                    </td>
                    <td class="pd">
                        <input type="text"
                            class="text-center fw-bold text-dark form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="cost_pd[]" id="ec_LeadconsultantsPd" data-type="currency">
                            </td>
                    <td class="nod">
                        <input type="number"
                            class="text-center form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="cost_nod[]" id="ec_LeadconsultantsNod${ecleadConsultant}">
                    </td>
                    <td class="atd">
                                <input type="number"
                                    class="text-center form-control input-table @error('') is-invalid @enderror"
                                    value="{{ old('') }}" name="cost_atd[]" id="ec_LeadconsultantsAtd${ecleadConsultant}">
                            </td>
                    <td class="nwh">
                        <input type="number"
                            class="text-center form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="cost_nswh[]" id="ec_LeadconsultantsNwh${ecleadConsultant}">
                    </td>
                    <td class="total-td">
                        <h4 class="text-center lead" id="ec_LeadconsultantsTotal">-</h4>
                    </td>
                    <td class="total-td">
                        <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="cost_roster[]" id="">
                    </td>
                    <td class="border border-white" style="background-color: #FFFFFF;">
                        <a href="javascript:void(0)" class="text-danger font-18 remove" id="ecRemoveLC${ecleadConsultant}" title="Remove">
                            <i class="fa fa-trash-o"></i>
                        </a>
                    </td>
                </tr>
            `);
        });

        $("#tableofLeadConsultant").on("click", ".remove", function () {

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
                var nod = $(this).children(".nod").children("input");
                var nwh = $(this).children(".nwh").children("input");
                var atd = $(this).children(".atd").children("input");

                // Gets the row number from <tr> id.
                var dig = parseInt(id.substring(19));

                // Modifying row id.
                $(this).attr("id", `rowofLeadConsultant${dig - 1}`);

                // Modifying row index.
                noc.attr("id", `ec_LeadconsultantsNoc${dig - 1}`);
                nod.attr("id", `ec_LeadconsultantsNod${dig - 1}`);
                atd.attr("id", `ec_LeadconsultantsAtd${dig - 1}`);
                nwh.attr("id", `ec_LeadconsultantsNwh${dig - 1}`);
            });

            // Removing the current row.
            $(this).closest("tr").remove();
            // Decreasing total number of rows by 1.
            ecleadConsultant--;
        });

    });

    //ANALYST
    var ecAnalyst = 1;
    $(document).ready(function () {
        $("#ecaddButton6").on("click", function() {
            // Adding a row inside the tbody.
            $("#tableofAnalyst").append(`
                <tr class="th-blue-grey-lighten-2" id="rowofAnalyst${++ecAnalyst}">
                    <td class="title">
                        <input type="text" class="d-none" value="Analyst" name="cost_type[]" readonly>
                        Analyst
                    </td>
                    <td class="noc">
                        <input type="number"
                            class="text-center form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="cost_noc[]" id="ec_AnalystsNoc${ecAnalyst}" max="100">
                    </td>
                    <td class="pd">
                        <input type="text"
                            class="text-center fw-bold text-dark form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="cost_pd[]" id="ec_AnalystsPd" data-type="currency">
                            </td>
                    <td class="nod">
                        <input type="number"
                            class="text-center form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="cost_nod[]" id="ec_AnalystsNod${ecAnalyst}">
                    </td>
                    <td class="atd">
                                <input type="number"
                                    class="text-center form-control input-table @error('') is-invalid @enderror"
                                    value="{{ old('') }}" name="cost_atd[]" id="ec_AnalystsAtd${ecAnalyst}">
                            </td>
                    <td class="nwh">
                        <input type="number"
                            class="text-center form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="cost_nswh[]" id="ec_AnalystsNwh${ecAnalyst}">
                    </td>
                    <td class="total-td">
                        <h4 class="text-center lead" id="ec_AnalystsTotal">-</h4>
                    </td>
                    <td class="total-td">
                        <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="cost_roster[]" id="">
                    </td>
                    <td class="border border-white" style="background-color: #FFFFFF;">
                        <a href="javascript:void(0)" class="text-danger font-18 remove" id="ecRemoveA${ecAnalyst}" title="Remove">
                            <i class="fa fa-trash-o"></i>
                        </a>
                    </td>
                </tr>
            `);
        });

        $("#tableofAnalyst").on("click", ".remove", function () {

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
                var nod = $(this).children(".nod").children("input");
                var nwh = $(this).children(".nwh").children("input");
                var atd = $(this).children(".atd").children("input");

                // Gets the row number from <tr> id.
                var dig = parseInt(id.substring(12));

                // Modifying row id.
                $(this).attr("id", `rowofAnalyst${dig - 1}`);

                // Modifying row index.
                noc.attr("id", `ec_AnalystsNoc${dig - 1}`);
                nod.attr("id", `ec_AnalystsNod${dig - 1}`);
                atd.attr("id", `ec_AnalystsAtd${dig - 1}`);
                nwh.attr("id", `ec_AnalystsNwh${dig - 1}`);
            });

            // Removing the current row.
            $(this).closest("tr").remove();
            // Decreasing total number of rows by 1.
            ecAnalyst--;
        });

    });

    //DESIGNER
    var ecDesigner = 1;
    $(document).ready(function () {
        $("#ecaddButton7").on("click", function() {
            // Adding a row inside the tbody.
            $("#tableofDesigner").append(`
                <tr class="th-blue-grey-lighten-2" id="rowofDesigner${++ecDesigner}">
                    <td class="title">
                        <input type="text" class="d-none" value="Designer" name="cost_type[]" readonly>
                        Designer
                    </td>
                    <td class="noc">
                        <input type="number"
                            class="text-center form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="cost_noc[]" id="ec_DesignersNoc${ecDesigner}" max="100">
                    </td>
                    <td class="pd">
                        <input type="text"
                            class="text-center fw-bold text-dark form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="cost_pd[]" id="ec_DesignersPd" data-type="currency">
                            </td>
                    <td class="nod">
                        <input type="number"
                            class="text-center form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="cost_nod[]" id="ec_DesignersNod${ecDesigner}">
                    </td>
                    <td class="atd">
                                <input type="number"
                                    class="text-center form-control input-table @error('') is-invalid @enderror"
                                    value="{{ old('') }}" name="cost_atd[]" id="ec_DesignersAtd${ecDesigner}">
                            </td>
                    <td class="nwh">
                        <input type="number"
                            class="text-center form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="cost_nswh[]" id="ec_DesignersNwh${ecDesigner}">
                    </td>
                    <td class="total-td">
                        <h4 class="text-center lead" id="ec_DesignersTotal">-</h4>
                    </td>
                    <td class="total-td">
                        <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="cost_roster[]" id="">
                    </td>
                    <td class="border border-white" style="background-color: #FFFFFF;">
                        <a href="javascript:void(0)" class="text-danger font-18 remove" id="ecRemoveD${ecDesigner}" title="Remove">
                            <i class="fa fa-trash-o"></i>
                        </a>
                    </td>
                </tr>
            `);
        });

        $("#tableofDesigner").on("click", ".remove", function () {

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
                var nod = $(this).children(".nod").children("input");
                var nwh = $(this).children(".nwh").children("input");
                var atd = $(this).children(".atd").children("input");

                // Gets the row number from <tr> id.
                var dig = parseInt(id.substring(13));

                // Modifying row id.
                $(this).attr("id", `rowofDesigner${dig - 1}`);

                // Modifying row index.
                noc.attr("id", `ec_DesignersNoc${dig - 1}`);
                nod.attr("id", `ec_DesignersNod${dig - 1}`);
                atd.attr("id", `ec_DesignersAtd${dig - 1}`);
                nwh.attr("id", `ec_DesignersNwh${dig - 1}`);
            });

            // Removing the current row.
            $(this).closest("tr").remove();
            // Decreasing total number of rows by 1.
            ecDesigner--;
        });

    });

    //CREATORS
    var ecCreator = 1;
    $(document).ready(function () {
        $("#ecaddButton8").on("click", function() {
            $("#tableofCreator").append(`
                <tr class="th-blue-grey-lighten-2" id="rowofCreator${++ecCreator}">
                            <td class="title">
                                <input type="text" class="d-none" value="Creators Fees" name="cost_type[]" readonly>
                                Creators Fees (500, 1K)
                            </td>
                            <td class="noc">
                                <input type="number"
                                    class="text-center form-control input-table @error('') is-invalid @enderror"
                                    value="{{ old('') }}" name="cost_noc[]" id="ec_CreatorNoc${ecCreator}" max="100">
                            </td>
                            <td class="pd">
                                <fieldset>
                                    <select class="input js-mytooltip  text-center form-select @error('') is-invalid @enderror" name="cost_pd[]" id="ec_CreatorPd"
                                        data-mytooltip-content="<i>
                                            Creators Fee - 0 - no creators fee<br><br>
                                            500 - Creators Fee is the creator is the lead, for the 2nd session onwards<br><br>
                                            1,000 - Creators Fee if creator is NOT the lead, for the 2nd session onwards</i>"
                                        data-mytooltip-theme="dark"
                                        data-mytooltip-action="focus"
                                        data-mytooltip-direction="right"
                                        style="background-color:#ffcccc; color:red;">
                                        <option value="0" {{ old('') == '0' ? 'selected="selected"' : '' }} title="">
                                            &#8369;0
                                        </option>
                                        <option value="500" {{ old('') == '500' ? 'selected="selected"' : '' }} title="">
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
                            <td class="nod">
                                <input type="number"
                                    class="text-center form-control input-table @error('') is-invalid @enderror"
                                    value="{{ old('') }}" name="cost_nod" id="ec_CreatorNod${ecCreator}" max="100"
                                    >
                            </td>
                            <td class=""><input type="text" class="d-none" value="" name="cost_atd[]" readonly></td>
                            <td class=""><input type="text" class="d-none" value="" name="cost_nswh[]" readonly></td>
                            <td class="total-td">
                                <h4 class="text-center lead" id="ec_CreatorTotal">-</h4>
                            </td>
                            <td class="total-td">
                                <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                    value="{{ old('') }}" name="cost_roster[]" id="">
                            </td>
                            </td>
                            <td style="background-color: #FFFFFF;" class="border border-white">
                            <a href="javascript:void(0)" class="text-danger font-18 removed" title="Remove">
                                <i class="fa fa-trash-o"></i>
                            </a>
                            </td>
                        </tr>
                    `);
                });

            $("#tableofCreator").on("click", ".removed", function () {

            // Getting all the rows next to the row
            // containing the clicked button
            var child = $(this).closest("tr").nextAll();

            // Iterating across all the rows
            // obtained to change the index
            child.each(function () {
                // Getting <tr> id.
                var id = $(this).attr("id");

                // Getting the <input> inside the .noc, .nod.
                var noc = $(this).children(".noc").children("input");
                var nod = $(this).children(".nod").children("input");

                // Gets the row number from <tr> id.
                var dig = parseInt(id.substring(12));

                // Modifying row id.
                $(this).attr("id", `rowofCreator${dig - 1}`);

                // Modifying row index.
                noc.attr("id", `ec_CreatorNoc${dig - 1}`);
                nod.attr("id", `ec_CreatorNod${dig - 1}`);
            });

            // Removing the current row.
            $(this).closest("tr").remove();
            // Decreasing total number of rows by 1.
            ecCreator--;
        });

    });

    //LEAD FACILITATOR
    var ecLeadFacilitator = 1;
    $(document).ready(function () {
        $("#ecaddButton9").on("click", function() {
            // Adding a row inside the tbody.
            $("#tableofLeadFacilitator").append(`
                <tr class="th-blue-grey-lighten-2" id="rowofLeadFacilitator${++ecLeadFacilitator}">
                    <td class="title">
                        <input type="text" class="d-none" value="Lead Facilitator" name="cost_type[]" readonly>
                        Lead Facilitator
                    </td>
                    <td class="noc">
                        <input type="number"
                            class="text-center form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="cost_noc[]" id="ec_LeadfacilitatorsNoc${ecLeadFacilitator}" max="100">
                    </td>
                    <td class="pd">
                        <input type="text"
                            class="text-center fw-bold text-dark form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="cost_pd[]" id="ec_LeadfacilitatorsPd" data-type="currency">
                            </td>
                    <td class="nod">
                        <input type="number"
                            class="text-center form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="cost_nod[]" id="ec_LeadfacilitatorsNod${ecLeadFacilitator}">
                    </td>
                    <td class="atd">
                                <input type="number"
                                    class="text-center form-control input-table @error('') is-invalid @enderror"
                                    value="{{ old('') }}" name="cost_atd[]" id="ec_LeadfacilitatorsAtd${ecLeadFacilitator}">
                            </td>
                    <td class="nwh">
                        <input type="number"
                            class="text-center form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="cost_nswh[]" id="ec_LeadfacilitatorsNwh${ecLeadFacilitator}">
                    </td>
                    <td class="total-td">
                        <h4 class="text-center lead" id="ec_LeadfacilitatorsTotal">-</h4>
                    </td>
                    <td class="total-td">
                        <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="cost_roster[]" id="">
                    </td>
                    <td class="border border-white" style="background-color: #FFFFFF;">
                        <a href="javascript:void(0)" class="text-danger font-18 remove" id="ecRemoveLF${ecLeadFacilitator}">
                            <i class="fa fa-trash-o"></i>
                        </a>
                    </td>
                </tr>
            `);
        });

        $("#tableofLeadFacilitator").on("click", ".remove", function () {

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
                var nod = $(this).children(".nod").children("input");
                var nwh = $(this).children(".nwh").children("input");
                var atd = $(this).children(".atd").children("input");

                // Gets the row number from <tr> id.
                var dig = parseInt(id.substring(20));

                // Modifying row id.
                $(this).attr("id", `rowofLeadFacilitator${dig - 1}`);

                // Modifying row index.
                noc.attr("id", `ec_LeadfacilitatorsNoc${dig - 1}`);
                nod.attr("id", `ec_LeadfacilitatorsNod${dig - 1}`);
                atd.attr("id", `ec_LeadfacilitatorsAtd${dig - 1}`);
                nwh.attr("id", `ec_LeadfacilitatorsNwh${dig - 1}`);
            });

            // Removing the current row.
            $(this).closest("tr").remove();
            // Decreasing total number of rows by 1.
            ecLeadFacilitator--;
        });

    });

    //CO-FACILITATOR
    var ecCoFacilitator = 1;
    $(document).ready(function () {
        $("#ecaddButton10").on("click", function() {
            // Adding a row inside the tbody.
            $("#tableofCoFacilitator").append(`
                <tr class="th-blue-grey-lighten-2" id="rowofCoFacilitator${++ecCoFacilitator}">
                    <td class="title">
                        <input type="text" class="d-none" value="Co-Facilitator / Resource Speaker" name="cost_type[]" readonly>
                        Co-Facilitator / Resource Speaker
                    </td>
                    <td class="noc">
                        <input type="number"
                            class="text-center form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="cost_noc[]" id="ec_CofacilitatorsNoc${ecCoFacilitator}" max="100">
                    </td>
                    <td class="pd">
                        <input type="text"
                            class="text-center fw-bold text-dark form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="cost_pd[]" id="ec_CofacilitatorsPd" data-type="currency">
                            </td>
                    <td class="nod">
                        <input type="number"
                            class="text-center form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="cost_nod[]" id="ec_CofacilitatorsNod${ecCoFacilitator}">
                    </td>
                    <td class="atd">
                                <input type="number"
                                    class="text-center form-control input-table @error('') is-invalid @enderror"
                                    value="{{ old('') }}" name="cost_atd[]" id="ec_CofacilitatorsAtd${ecCoFacilitator}">
                            </td>
                    <td class="nwh">
                        <input type="number"
                            class="text-center form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="cost_nswh[]" id="ec_CofacilitatorsNwh${ecCoFacilitator}">
                    </td>
                    <td class="total-td">
                        <h4 class="text-center lead" id="ec_CofacilitatorsTotal">-</h4>
                    </td>
                    <td class="total-td">
                        <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="cost_roster[]" id="">
                    </td>
                    <td class="border border-white" style="background-color: #FFFFFF;">
                        <a href="javascript:void(0)" class="text-danger font-18 remove" id="ecRemoveCF${ecCoFacilitator}" title="Remove">
                            <i class="fa fa-trash-o"></i>
                        </a>
                    </td>
                </tr>
            `);
        });

        $("#tableofCoFacilitator").on("click", ".remove", function () {

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
                var nod = $(this).children(".nod").children("input");
                var nwh = $(this).children(".nwh").children("input");
                var atd = $(this).children(".atd").children("input");

                // Gets the row number from <tr> id.
                var dig = parseInt(id.substring(18));

                // Modifying row id.
                $(this).attr("id", `rowofCoFacilitator${dig - 1}`);

                // Modifying row index.
                noc.attr("id", `ec_CofacilitatorsNoc${dig - 1}`);
                nod.attr("id", `ec_CofacilitatorsNod${dig - 1}`);
                atd.attr("id", `ec_CofacilitatorsAtd${dig - 1}`);
                nwh.attr("id", `ec_CofacilitatorsNwh${dig - 1}`);
            });

            // Removing the current row.
            $(this).closest("tr").remove();
            // Decreasing total number of rows by 1.
            ecCoFacilitator--;
        });

    });

    //ACTION LEARNING COACH
    var ecActionLearning = 1;
    $(document).ready(function () {
        $("#ecaddButton11").on("click", function() {
            // Adding a row inside the tbody.
            $("#tableofActionLearningCoach").append(`
                <tr class="th-blue-grey-lighten-2" id="rowofActionLearningCoach${++ecActionLearning}">
                    <td class="title">
                        <input type="text" class="d-none" value="Action Learning Coach" name="cost_type[]" readonly>
                        Action Learning Coach
                    </td>
                    <td class="noc">
                        <input type="number"
                            class="text-center form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="cost_noc[]" id="ec_ActionlearningcoachNoc${ecActionLearning}" max="100">
                    </td>
                    <td class="pd">
                        <input type="text"
                            class="text-center fw-bold text-dark form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="cost_pd[]" id="ec_ActionlearningcoachPd" data-type="currency">
                            </td>
                    <td class="nod">
                        <input type="number"
                            class="text-center form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="cost_nod[]" id="ec_ActionlearningcoachNod${ecActionLearning}">
                    </td>
                    <td class="atd">
                                <input type="number"
                                    class="text-center form-control input-table @error('') is-invalid @enderror"
                                    value="{{ old('') }}" name="cost_atd[]" id="ec_ActionlearningcoachAtd${ecActionLearning}">
                            </td>
                    <td class="nwh">
                        <input type="number"
                            class="text-center form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="cost_nswh[]" id="ec_ActionlearningcoachNwh${ecActionLearning}">
                    </td>
                    <td class="total-td">
                        <h4 class="text-center lead" id="ec_ActionlearningcoachTotal">-</h4>
                    </td>
                    <td class="total-td">
                        <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="cost_roster[]" id="">
                    </td>
                    <td class="border border-white" style="background-color: #FFFFFF;">
                        <a href="javascript:void(0)" class="text-danger font-18 remove" id="ecRemoveALC${ecActionLearning}">
                            <i class="fa fa-trash-o"></i>
                        </a>
                    </td>
                </tr>
            `);
        });

        $("#tableofActionLearningCoach").on("click", ".remove", function () {

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
                var nod = $(this).children(".nod").children("input");
                var nwh = $(this).children(".nwh").children("input");
                var atd = $(this).children(".atd").children("input");

                // Gets the row number from <tr> id.
                var dig = parseInt(id.substring(24));

                // Modifying row id.
                $(this).attr("id", `rowofActionLearningCoach${dig - 1}`);

                // Modifying row index.
                noc.attr("id", `ec_ActionlearningcoachNoc${dig - 1}`);
                nod.attr("id", `ec_ActionlearningcoachNod${dig - 1}`);
                atd.attr("id", `ec_ActionlearningcoachAtd${dig - 1}`);
                nwh.attr("id", `ec_ActionlearningcoachNwh${dig - 1}`);
            });

            // Removing the current row.
            $(this).closest("tr").remove();
            // Decreasing total number of rows by 1.
            ecActionLearning--;
        });

    });

    //MARSHAL
    var ecMarshal = 1;
    $(document).ready(function () {
        $("#ecaddButton12").on("click", function() {
            // Adding a row inside the tbody.
            $("#tableofMarshal").append(`
                <tr class="th-blue-grey-lighten-2" id="rowofMarshal${++ecMarshal}">
                    <td class="title">
                        <input type="text" class="d-none" value="Marshal" name="cost_type[]" readonly>
                        Marshal
                    </td>
                    <td class="noc">
                        <input type="number"
                            class="text-center form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="cost_noc[]" id="ec_MarshalNoc${ecMarshal}" max="100">
                    </td>
                    <td class="pd">
                        <input type="text"
                            class="text-center fw-bold text-dark form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="cost_pd[]" id="ec_MarshalPd" data-type="currency">
                            </td>
                    <td class="nod">
                        <input type="number"
                            class="text-center form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="cost_nod[]" id="ec_MarshalNod${ecMarshal}">
                    </td>
                    <td class="atd">
                                <input type="number"
                                    class="text-center form-control input-table @error('') is-invalid @enderror"
                                    value="{{ old('') }}" name="cost_atd[]" id="ec_MarshalAtd${ecMarshal}">
                            </td>
                    <td class="nwh">
                        <input type="number"
                            class="text-center form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="cost_nswh[]" id="ec_MarshalNwh${ecMarshal}">
                    </td>
                    <td class="total-td">
                        <h4 class="text-center lead" id="ec_MarshalTotal">-</h4>
                    </td>
                    <td class="total-td">
                        <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="cost_roster[]" id="">
                    </td>
                    <td class="border border-white" style="background-color: #FFFFFF;">
                        <a href="javascript:void(0)" class="text-danger font-18 remove" id="ecRemoveM${ecMarshal}" title="Remove">
                            <i class="fa fa-trash-o"></i>
                        </a>
                    </td>
                </tr>
            `);
        });

        $("#tableofMarshal").on("click", ".remove", function () {

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
                var nod = $(this).children(".nod").children("input");
                var nwh = $(this).children(".nwh").children("input");
                var atd = $(this).children(".atd").children("input");

                // Gets the row number from <tr> id.
                var dig = parseInt(id.substring(12));

                // Modifying row id.
                $(this).attr("id", `rowofMarshal${dig - 1}`);

                // Modifying row index.
                noc.attr("id", `ec_MarshalNoc${dig - 1}`);
                nod.attr("id", `ec_MarshalNod${dig - 1}`);
                atd.attr("id", `ec_MarshalAtd${dig - 1}`);
                nwh.attr("id", `ec_MarshalNwh${dig - 1}`);
            });

            // Removing the current row.
            $(this).closest("tr").remove();
            // Decreasing total number of rows by 1.
            ecMarshal--;
        });

    });

    //ONSITE PC
    var ecOnsite = 1;
    $(document).ready(function () {
        $("#ecaddButton13").on("click", function() {
            // Adding a row inside the tbody.
            $("#tableofOnsitePC").append(`
            <tr class="th-blue-grey-lighten-2" id="rowofOnsitePC${++ecOnsite}">
                            <td class="title">
                                <input type="text" class="d-none" value="Onsite" name="cost_type[]" readonly>
                                On-site PC (P4400/P6600/P8500)
                            </td>
                            <td class="noc">
                                <input type="number"
                                    class="text-center form-control input-table @error('') is-invalid @enderror"
                                    value="{{ old('') }}" name="cost_noc[]" id="ec_OnsitepcNoc${ecOnsite}">
                            </td>
                            <td class="pd">
                                <fieldset>
                                    <select class="input js-mytooltip text-center form-select @error('') is-invalid @enderror select" name="cost_pd[]"
                                        id="ec_OnsitepcPd" style="background-color:#ffcccc; color:red;"
                                        data-mytooltip-content="<i>
                                            <b>On-site PC</b><br/>
                                            P4,400<br/>
                                            P6,600<br/>
                                            P8,500</i>"
                                        data-mytooltip-theme="dark"
                                        data-mytooltip-action="focus"
                                        data-mytooltip-direction="right">
                                        <option value="4400" {{ old('') == '4400' ? 'selected="selected"' : '' }} title="">
                                            &#8369;4,400
                                        </option>
                                        <option value="6600" {{ old('') == '6600' ? 'selected="selected"' : '' }}
                                            title="">
                                            &#8369;6,600
                                        </option>
                                        <option value="8500" {{ old('') == '8500' ? 'selected="selected"' : '' }}
                                            title="">
                                            &#8369;8,500
                                        </option>
                                    </select>
                                    @error('ef_customFee')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </fieldset>
                            </td>
                            <td class="nod">
                                <input type="number"
                                    class="text-center form-control input-table @error('') is-invalid @enderror"
                                    value="{{ old('') }}" name="cost_nod[]" id="ec_OnsitepcNod${ecOnsite}">
                            </td>
                            <td class="atd">
                                <input type="number"
                                    class="text-center  form-control input-table @error('') is-invalid @enderror"
                                    value="{{ old('') }}" name="cost_atd[]" id="ec_OnsitepcAtd${ecOnsite}">
                            </td>
                            <td class="nwh">
                                <input type="number"
                                    class="text-center  form-control input-table @error('') is-invalid @enderror"
                                    value="{{ old('') }}" name="cost_nswh[]" id="ec_OnsitepcNwh${ecOnsite}">
                            </td>
                            <td class="total-td">
                                <h4 class="text-center lead" id="ec_OnsitepcTotal">-</h4>
                            </td>
                            <td class="total-td">
                                <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                    value="{{ old('') }}" name="cost_roster[]" id="">
                            </td>
                            <td class="border border-white" style="background-color: #FFFFFF;">
                                <a href="javascript:void(0)" class="text-danger font-18 remove" id="ecRemoveOP${ecOnsite}" title="Remove">
                                    <i class="fa fa-trash-o"></i>
                                </a>
                          </td>
                        </tr>
                    `);
               });

            $("#tableofOnsitePC").on("click", ".remove", function () {


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
                var nod = $(this).children(".nod").children("input");
                var nwh = $(this).children(".nwh").children("input");
                var atd = $(this).children(".atd").children("input");

                // Gets the row number from <tr> id.
                var dig = parseInt(id.substring(13));

                // Modifying row id.
                $(this).attr("id", `rowofOnsitePC${dig - 1}`);

                // Modifying row index.
                noc.attr("id", `ec_OnsitepcNoc${dig - 1}`);
                nod.attr("id", `ec_OnsitepcNod${dig - 1}`);
                atd.attr("id", `ec_OnsitepcAtd${dig - 1}`);
                nwh.attr("id", `ec_OnsitepcNwh${dig - 1}`);
            });

            // Removing the current row.
            $(this).closest("tr").remove();
            // Decreasing total number of rows by 1.
            ecOnsite--;
        });

    });

    //DOCUMENTOR
    var ecDocumentor = 1;
    $(document).ready(function () {
        $("#ecaddButton14").on("click", function() {
            // Adding a row inside the tbody.
            $("#tableofDocumentor").append(`
                <tr class="th-blue-grey-lighten-2" id="rowofDocumentor${++ecDocumentor}">
                    <td class="title">
                        <input type="text" class="d-none" value="Documentor" name="cost_type[]" readonly>
                        Documentor
                    </td>
                    <td class="noc">
                        <input type="number"
                            class="text-center form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="cost_noc[]" id="ec_DocumentorsNoc${ecDocumentor}" max="100">
                    </td>
                    <td class="pd">
                        <input type="text"
                            class="text-center fw-bold text-dark form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="cost_pd[]" id="ec_DocumentorsPd" data-type="currency">
                            </td>
                    <td class="nod">
                        <input type="number"
                            class="text-center form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="cost_nod[]" id="ec_DocumentorsNod${ecDocumentor}">
                    </td>
                    <td class="atd">
                                <input type="number"
                                    class="text-center form-control input-table @error('') is-invalid @enderror"
                                    value="{{ old('') }}" name="cost_atd[]" id="ec_DocumentorsAtd${ecDocumentor}">
                            </td>
                    <td class="nwh">
                        <input type="number"
                            class="text-center form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="cost_nswh[]" id="ec_DocumentorsNwh${ecDocumentor}">
                    </td>
                    <td class="total-td" style="background-color: rgba(146, 146, 146, 0.727">
                        <h4 class="text-center" id="ec_DocumentorsTotal">-</h4>
                    </td>
                    <td class="total-td">
                        <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="cost_roster[]" id="">
                    </td>
                    <td class="border border-white" style="background-color: #FFFFFF;">
                        <a href="javascript:void(0)" class="text-danger font-18 remove" id="ecRemoveD${ecDocumentor}" title="Remove">
                            <i class="fa fa-trash-o"></i>
                        </a>
                    </td>
                </tr>
            `);
        });

        $("#tableofDocumentor").on("click", ".remove", function () {

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
                var nod = $(this).children(".nod").children("input");
                var nwh = $(this).children(".nwh").children("input");
                var atd = $(this).children(".atd").children("input");

                // Gets the row number from <tr> id.
                var dig = parseInt(id.substring(15));

                // Modifying row id.
                $(this).attr("id", `rowofDocumentor${dig - 1}`);

                // Modifying row index.
                noc.attr("id", `ec_DocumentorsNoc${dig - 1}`);
                nod.attr("id", `ec_DocumentorsNod${dig - 1}`);
                atd.attr("id", `ec_DocumentorsAtd${dig - 1}`);
                nwh.attr("id", `ec_DocumentorsNwh${dig - 1}`);
            });

            // Removing the current row.
            $(this).closest("tr").remove();
            // Decreasing total number of rows by 1.
            ecDocumentor--;
        });

    });

    //PER DIEM
    var ecPerDiem = 1;
    $(document).ready(function () {
        $("#ecaddButton15").on("click", function() {
            // Adding a row inside the tbody.
            $("#tableofPerdiem").append(`
                <tr class="th-blue-grey-lighten" id="rowofPerDiem${++ecPerDiem}">
                    <th class="title px-4 text-dark">
                        <input type="text" class="d-none" value="Per Diem" name="cost_type[]" readonly>
                        5. PER DIEM
                    </th>
                    <td class="noc">
                        <input type="number"
                            class="text-center form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="cost_noc[]" id="ec_PerdiemNoc" max="100">
                    </td>
                    <td class="pd">
                        <input type="text"
                            class="text-center text-dark fw-bold form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="cost_pd[]" id="ec_PerdiemPd" data-type="currency">
                    </td>
                    <td class="nod">
                        <input type="number"
                            class="text-center text-dark fw-bold form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="cost_nod[]" id="ec_PerdiemNod">
                    </td>
                    <td><input type="text" class="d-none" value="" name="cost_atd[]" readonly></td>
                    <td><input type="text" class="d-none" value="" name="cost_nswh[]" readonly></td>
                    <td class="total-td" style="background-color: rgba(146, 146, 146, 0.727">
                        <h4 class="text-center" id="ec_PerdiemTotal">-</h4>
                    </td>
                    <td class="total-td">
                        <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="cost_roster[]" id="">
                    </td>
                    <td class="border border-white" style="background-color: #FFFFFF;">
                        <a href="javascript:void(0)" class="text-danger font-18 remove" id="ecRemoveD${ecDocumentor}" title="Remove">
                            <i class="fa fa-trash-o"></i>
                        </a>
                    </td>
                </tr>
            `);
        });

        $("#tableofPerdiem").on("click", ".remove", function () {

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
                var nod = $(this).children(".nod").children("input");
                var nwh = $(this).children(".nwh").children("input");
                var atd = $(this).children(".atd").children("input");

                // Gets the row number from <tr> id.
                var dig = parseInt(id.substring(15));

                // Modifying row id.
                $(this).attr("id", `rowofPerDiem${dig - 1}`);

                // Modifying row index.
                // noc.attr("id", `ec_DocumentorsNoc${dig - 1}`);
                // nod.attr("id", `ec_DocumentorsNod${dig - 1}`);
                // atd.attr("id", `ec_DocumentorsAtd${dig - 1}`);
                // nwh.attr("id", `ec_DocumentorsNwh${dig - 1}`);
            });

            // Removing the current row.
            $(this).closest("tr").remove();
            // Decreasing total number of rows by 1.
            ecPerDiem--;
        });

    });

    //OFF PROGRAM
    var ecOffProgram = 1;
    $(document).ready(function () {
        $("#ecaddButton16").on("click", function() {
            // Adding a row inside the tbody.
            $("#taleOffProgram").append(`
                <tr class="th-blue-grey-lighten-2" id="rowofOffProgram${++ecOffProgram}">
                    <td class="title">
                        <input type="text" class="d-none" value="Off-Program Fee" name="cost_type[]" readonly>
                        Off-Program fee
                    </td>
                    <td>
                        <input type="number"
                            class="input js-mytooltip text-center text-dark fw-bold form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="cost_noc[]" id="ec_OffprogramsNoc" max="100"
                            data-mytooltip-content="<i>
                                        - For single or series of programs<br>
                                        - One time only<br>
                                        - Per person<br>
                                        </i>"
                            data-mytooltip-theme="dark" data-mytooltip-action="focus"
                            data-mytooltip-direction="right">
                    </td>
                    <td>
                        <input type="text"
                            class="text-center text-dark fw-bold form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="cost_pd[]" id="ec_OffprogramsPd" data-type="currency">
                    </td>
                    <td><input type="text" class="d-none" value="" name="cost_nod[]" readonly></td>
                    <td><input type="text" class="d-none" value="" name="cost_atd[]" readonly></td>
                    <td><input type="text" class="d-none" value="" name="cost_nswh[]" readonly></td>
                    <td class="total-td" style="background-color: rgba(146, 146, 146, 0.727">
                        <h4 class="text-center" id="ec_OffprogramsTotal">-</h4>
                    </td>
                    <td class="total-td">
                        <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="cost_roster[]" id="">
                    </td>
                    <td class="border border-white" style="background-color: #FFFFFF;">
                        <a href="javascript:void(0)" class="text-danger font-18 remove" id="ecRemoveD${ecDocumentor}" title="Remove">
                            <i class="fa fa-trash-o"></i>
                        </a>
                    </td>
                </tr>
            `);
        });

        $("#taleOffProgram").on("click", ".remove", function () {

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
                var nod = $(this).children(".nod").children("input");
                var nwh = $(this).children(".nwh").children("input");
                var atd = $(this).children(".atd").children("input");

                // Gets the row number from <tr> id.
                var dig = parseInt(id.substring(15));

                // Modifying row id.
                $(this).attr("id", `rowofOffProgram${dig - 1}`);

                // Modifying row index.
                // noc.attr("id", `ec_DocumentorsNoc${dig - 1}`);
                // nod.attr("id", `ec_DocumentorsNod${dig - 1}`);
                // atd.attr("id", `ec_DocumentorsAtd${dig - 1}`);
                // nwh.attr("id", `ec_DocumentorsNwh${dig - 1}`);
            });

            // Removing the current row.
            $(this).closest("tr").remove();
            // Decreasing total number of rows by 1.
            ecPerDiem--;
        });

    });

</script>
