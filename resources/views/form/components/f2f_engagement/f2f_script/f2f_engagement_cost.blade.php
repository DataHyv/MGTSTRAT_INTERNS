<script>
    var ecsaleNum = 1;
    $(document).ready(function() {
        $("#ecaddButton").on("click", function() {
            $("#tableofSale").append(
                `<tr class="" id="rowofSale${++ecsaleNum}">
                            <td class="title">Sales (4% / 5% / 6% / 7%)</td>
                            <td></td>
                            <td>
                                <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="" id="inputforSale"
                                onblur="this.value = this.value.replace('%', '') + '%';"
                                oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
                            </td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td class="total-td tbl-engmt-cost">
                                <h4 class="text-center" id="ec_saleTotal">-</h4>
                            </td>
                            <td class="total-td">
                                <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                    value="{{ old('') }}" name="" id="">
                            </td>
                            <td><a href="javascript:void(0)" class="text-danger font-18 remove" title="Remove"><i class="fa fa-trash-o"></i></a></td>
                </tr>`);

            const ecsaleId = document.querySelectorAll("#ec_sale");
            for (let i = 0; i < ecsaleId.length; i++) {
                ecsaleId[i].value = "0";
            }

            if (ecsaleNum > 1) {
                document.getElementById("dropdownforSale").style.display =
                    "none"; 
                document.getElementById("inputforSale").style.display =
                    ""; 
                document.getElementById("inputforSale").disabled =
                    false;
            
            }
        });

        $("#tableofSale > tr").on("click", ".remove", function() {
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

    var ecreferralsNum = 1;
    $(document).ready(function() {
        $("#ecaddButton2").on("click", function() {
            $("#tableofReferrals").append(
                `<tr class="" id="rowofReferrals${++ecreferralsNum}">
                            <td class="title">Referral (2% / 3%)</td>
                            <td></td>
                            <td>
                                <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="" id="inputforReferrals"
                                onblur="this.value = this.value.replace('%', '') + '%';"
                                oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
                            </td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td class="total-td tbl-engmt-cost">
                                <h4 class="text-center" id="referralsTotal">-</h4>
                            </td>
                            <td class="total-td">
                                <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                    value="{{ old('') }}" name="" id="">
                            </td>
                            <td><a href="javascript:void(0)" class="text-danger font-18 remove" title="Remove"><i class="fa fa-trash-o"></i></a></td>
                </tr>`);

            const ecreferralsId = document.querySelectorAll("#referrals");
            for (let i = 0; i < ecreferralsId.length; i++) {
                ecreferralsId[i].value = "0";
            }

            if (ecreferralsNum > 1) {
                document.getElementById("dropdownforReferrals").style.display =
                    "none"; 
                document.getElementById("inputforReferrals").style.display =
                    ""; 
                document.getElementById("inputforReferrals").disabled =
                    false;
            
            }
        });

        $("#tableofReferrals > tr").on("click", ".remove", function() {
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

    var ecengagementNum = 1;
    $(document).ready(function() {
        $("#ecaddButton3").on("click", function() {
            $("#tableofEngagementManager").append(
                `<tr class="" id="rowofEngagementManager${++ecengagementNum}">
                            <td class="title fw-bold text-dark">ENGAGEMENT MANAGER(4%)</td>
                            <td></td>
                            <td>
                                <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="" id="inputforEngagementManager"
                                onblur="this.value = this.value.replace('%', '') + '%';"
                                oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
                            </td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td class="total-td tbl-engmt-cost">
                                <h4 class="text-center" id="ecengagementManagerTotal">-</h4>
                            </td>
                            <td class="total-td">
                                <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                    value="{{ old('') }}" name="" id="">
                            </td>
                            <td><a href="javascript:void(0)" class="text-danger font-18 remove" title="Remove"><i class="fa fa-trash-o"></i></a></td>
                </tr>`);

            const ecengagementId = document.querySelectorAll("#ecengagementManager");
            for (let i = 0; i < ecengagementId.length; i++) {
                ecengagementId[i].value = "0";
            }

            if (ecengagementNum > 1) {
                document.getElementById("dropdownforEngagementManager").style.display =
                    "none"; 
                document.getElementById("inputforEngagementManager").style.display =
                    ""; 
                document.getElementById("inputforEngagementManager").disabled =
                    false;
            
            }
        });

        $("#tableofEngagementManager > tr").on("click", ".remove", function() {
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

    var ecoffsiteNum = 1;
    $(document).ready(function() {
        $("#ecaddButton4").on("click", function() {
            $("#tableofOffsite").append(
                `<tr class="" id="rowofOffsite${++ecoffsiteNum}">
                            <td class="title fw-bold text-dark">OFFSITE PC(3%/4%/5%)</td>
                            <td></td>
                            <td>
                                <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="" id="inputforOffsite"
                                onblur="this.value = this.value.replace('%', '') + '%';"
                                oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
                            </td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td class="total-td tbl-engmt-cost">
                                <h4 class="text-center" id="ec_offsitePcTotal">-</h4>
                            </td>
                            <td class="total-td">
                                <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                    value="{{ old('') }}" name="" id="">
                            </td>
                            <td><a href="javascript:void(0)" class="text-danger font-18 remove" title="Remove"><i class="fa fa-trash-o"></i></a></td>
                </tr>`);

            const ecoffsiteId = document.querySelectorAll("#ec_offsitePc");
            for (let i = 0; i < ecoffsiteId.length; i++) {
                ecoffsiteId[i].value = "0";
            }

            if (ecoffsiteNum > 1) {
                document.getElementById("dropdownforOffsite").style.display =
                    "none"; 
                document.getElementById("inputforOffsite").style.display =
                    ""; 
                document.getElementById("inputforOffsite").disabled =
                    false;
            
            }
        });

        $("#tableofOffsite > tr").on("click", ".remove", function() {
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

    var ecleadConsultant = 1;
    $(document).ready(function () {
        $("#addBtn1").on("click", function() {
            // Adding a row inside the tbody.
            $("#tableofLeadConsultant").append(`
                <tr id="rowofLeadConsultant${++ecleadConsultant}">
                    <td class="title">Lead Consultant</td>
                    <td class="noc">
                        <input type="number"
                            class="text-center form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="" id="ec_LeadconsultantsNoc${ecleadConsultant}" max="100"
                            readonly>
                    </td>
                    <td class="pd">
                        <input type="text"
                            class="text-center fw-bold text-dark form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="" id="ec_LeadconsultantsPd">
                            </td>
                    <td class="nod">
                        <input type="number"
                            class="text-center form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="" id="ec_LeadconsultantsNod${ecleadConsultant}" readonly>
                    </td>
                    <td class="atd">
                                <input type="number"
                                    class="text-center form-control input-table @error('') is-invalid @enderror"
                                    value="{{ old('') }}" name="" id="ec_LeadconsultantsAtd${ecleadConsultant}" readonly>
                            </td>
                    <td class="nwh">
                        <input type="number"
                            class="text-center form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="" id="ec_LeadconsultantsNwh${ecleadConsultant}" readonly>
                    </td>
                    <td class="total-td">
                        <h4 class="text-center lead" id="ec_LeadconsultantsTotal">-</h4>
                    </td>
                    <td class="total-td">
                        <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="" id="">
                    </td>
                    <td class="border border-white" style="background-color: #FFFFFF;">
                        <a href="javascript:void(0)" class="text-danger font-18 remove" id="ecRemoveLC${ecleadConsultant}" title="Remove" style="visibility: hidden;">
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
                var dig = parseInt(id.substring(11));

                // Modifying row id.
                $(this).attr("id", `ec_LeadConsultants${dig - 1}`);

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

    var ecAnalyst = 1;
    $(document).ready(function () {
        $("#addBtn2").on("click", function() {
            // Adding a row inside the tbody.
            $("#tableofAnalyst").append(`
                <tr id="rowofAnalyst${++ecAnalyst}">
                    <td class="title">Analyst</td>
                    <td class="noc">
                        <input type="number"
                            class="text-center form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="" id="ec_AnalystsNoc${ecAnalyst}" max="100"
                            readonly>
                    </td>
                    <td class="pd">
                        <input type="text"
                            class="text-center fw-bold text-dark form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="" id="ec_AnalystsPd">
                            </td>
                    <td class="nod">
                        <input type="number"
                            class="text-center form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="" id="ec_AnalystsNod${ecAnalyst}" readonly>
                    </td>
                    <td class="atd">
                                <input type="number"
                                    class="text-center form-control input-table @error('') is-invalid @enderror"
                                    value="{{ old('') }}" name="" id="ec_AnalystsAtd${ecAnalyst}" readonly>
                            </td>
                    <td class="nwh">
                        <input type="number"
                            class="text-center form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="" id="ec_AnalystsNwh${ecAnalyst}" readonly>
                    </td>
                    <td class="total-td">
                        <h4 class="text-center lead" id="ec_AnalystsTotal">-</h4>
                    </td>
                    <td class="total-td">
                        <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="" id="">
                    </td>
                    <td class="border border-white" style="background-color: #FFFFFF;">
                        <a href="javascript:void(0)" class="text-danger font-18 remove" id="ecRemoveA${ecAnalyst}" title="Remove" style="visibility: hidden;">
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
                var dig = parseInt(id.substring(11));

                // Modifying row id.
                $(this).attr("id", `ec_Analysts${dig - 1}`);

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

    var ecDesigner = 1;
    $(document).ready(function () {
        $("#addBtn3").on("click", function() {
            // Adding a row inside the tbody.
            $("#tableofDesigner").append(`
                <tr id="rowofDesigner${++ecDesigner}">
                    <td class="title">Designer</td>
                    <td class="noc">
                        <input type="number"
                            class="text-center form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="" id="ec_DesignersNoc${ecDesigner}" max="100"
                            readonly>
                    </td>
                    <td class="pd">
                        <input type="text"
                            class="text-center fw-bold text-dark form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="" id="ec_DesignersPd">
                            </td>
                    <td class="nod">
                        <input type="number"
                            class="text-center form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="" id="ec_DesignersNod${ecDesigner}" readonly>
                    </td>
                    <td class="atd">
                                <input type="number"
                                    class="text-center form-control input-table @error('') is-invalid @enderror"
                                    value="{{ old('') }}" name="" id="ec_DesignersAtd${ecDesigner}" readonly>
                            </td>
                    <td class="nwh">
                        <input type="number"
                            class="text-center form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="" id="ec_DesignersNwh${ecDesigner}" readonly>
                    </td>
                    <td class="total-td">
                        <h4 class="text-center lead" id="ec_DesignersTotal">-</h4>
                    </td>
                    <td class="total-td">
                        <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="" id="">
                    </td>
                    <td class="border border-white" style="background-color: #FFFFFF;">
                        <a href="javascript:void(0)" class="text-danger font-18 remove" id="ecRemoveD${ecDesigner}" title="Remove" style="visibility: hidden;">
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
                var dig = parseInt(id.substring(11));

                // Modifying row id.
                $(this).attr("id", `ec_Designers${dig - 1}`);

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

    var ecLeadFacilitator = 1;
    $(document).ready(function () {
        $("#addBtn4").on("click", function() {
            // Adding a row inside the tbody.
            $("#tableofLeadFacilitator").append(`
                <tr id="rowofLeadFacilitator${++ecLeadFacilitator}">
                    <td class="title">Lead Facilitator</td>
                    <td class="noc">
                        <input type="number"
                            class="text-center form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="" id="ec_LeadfacilitatorsNoc${ecLeadFacilitator}" max="100"
                            readonly>
                    </td>
                    <td class="pd">
                        <input type="text"
                            class="text-center fw-bold text-dark form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="" id="ec_LeadfacilitatorsPd">
                            </td>
                    <td class="nod">
                        <input type="number"
                            class="text-center form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="" id="ec_LeadfacilitatorsNod${ecLeadFacilitator}" readonly>
                    </td>
                    <td class="atd">
                                <input type="number"
                                    class="text-center form-control input-table @error('') is-invalid @enderror"
                                    value="{{ old('') }}" name="" id="ec_LeadfacilitatorsAtd${ecLeadFacilitator}" readonly>
                            </td>
                    <td class="nwh">
                        <input type="number"
                            class="text-center form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="" id="ec_LeadfacilitatorsNwh${ecLeadFacilitator}" readonly>
                    </td>
                    <td class="total-td">
                        <h4 class="text-center lead" id="ec_LeadfacilitatorsTotal">-</h4>
                    </td>
                    <td class="total-td">
                        <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="" id="">
                    </td>
                    <td class="border border-white" style="background-color: #FFFFFF;">
                        <a href="javascript:void(0)" class="text-danger font-18 remove" id="ecRemoveLF${ecLeadFacilitator}" title="Remove" style="visibility: hidden;">
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
                var dig = parseInt(id.substring(11));

                // Modifying row id.
                $(this).attr("id", `ec_Leadfacilitators${dig - 1}`);

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

    var ecCoFacilitator = 1;
    $(document).ready(function () {
        $("#addBtn5").on("click", function() {
            // Adding a row inside the tbody.
            $("#tableofCoFacilitator").append(`
                <tr id="rowofCoFacilitator${++ecCoFacilitator}">
                    <td class="title">Co-Facilitator / Resource Speaker</td>
                    <td class="noc">
                        <input type="number"
                            class="text-center form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="" id="ec_CofacilitatorsNoc${ecCoFacilitator}" max="100"
                            readonly>
                    </td>
                    <td class="pd">
                        <input type="text"
                            class="text-center fw-bold text-dark form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="" id="ec_CofacilitatorsPd">
                            </td>
                    <td class="nod">
                        <input type="number"
                            class="text-center form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="" id="ec_CofacilitatorsNod${ecCoFacilitator}" readonly>
                    </td>
                    <td class="atd">
                                <input type="number"
                                    class="text-center form-control input-table @error('') is-invalid @enderror"
                                    value="{{ old('') }}" name="" id="ec_CofacilitatorsAtd${ecCoFacilitator}" readonly>
                            </td>
                    <td class="nwh">
                        <input type="number"
                            class="text-center form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="" id="ec_CofacilitatorsNwh${ecCoFacilitator}" readonly>
                    </td>
                    <td class="total-td">
                        <h4 class="text-center lead" id="ec_CofacilitatorsTotal">-</h4>
                    </td>
                    <td class="total-td">
                        <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="" id="">
                    </td>
                    <td class="border border-white" style="background-color: #FFFFFF;">
                        <a href="javascript:void(0)" class="text-danger font-18 remove" id="ecRemoveCF${ecCoFacilitator}" title="Remove" style="visibility: hidden;">
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
                var dig = parseInt(id.substring(11));

                // Modifying row id.
                $(this).attr("id", `ec_Cofacilitators${dig - 1}`);

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
    
    var ecActionLearning = 1;
    $(document).ready(function () {
        $("#addBtn6").on("click", function() {
            // Adding a row inside the tbody.
            $("#tableofActionLearningCoach").append(`
                <tr id="rowofActionLearningCoach${++ecActionLearning}">
                    <td class="title">Action Learning Coach</td>
                    <td class="noc">
                        <input type="number"
                            class="text-center form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="" id="ec_ActionlearningcoachNoc${ecActionLearning}" max="100"
                            readonly>
                    </td>
                    <td class="pd">
                        <input type="text"
                            class="text-center fw-bold text-dark form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="" id="ec_ActionlearningcoachPd">
                            </td>
                    <td class="nod">
                        <input type="number"
                            class="text-center form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="" id="ec_ActionlearningcoachNod${ecActionLearning}" readonly>
                    </td>
                    <td class="atd">
                                <input type="number"
                                    class="text-center form-control input-table @error('') is-invalid @enderror"
                                    value="{{ old('') }}" name="" id="ec_ActionlearningcoachAtd${ecActionLearning}" readonly>
                            </td>
                    <td class="nwh">
                        <input type="number"
                            class="text-center form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="" id="ec_ActionlearningcoachNwh${ecActionLearning}" readonly>
                    </td>
                    <td class="total-td">
                        <h4 class="text-center lead" id="ec_ActionlearningcoachTotal">-</h4>
                    </td>
                    <td class="total-td">
                        <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="" id="">
                    </td>
                    <td class="border border-white" style="background-color: #FFFFFF;">
                        <a href="javascript:void(0)" class="text-danger font-18 remove" id="ecRemoveALC${ecActionLearning}" title="Remove" style="visibility: hidden;">
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
                var dig = parseInt(id.substring(11));

                // Modifying row id.
                $(this).attr("id", `ec_Actionlearningcoach${dig - 1}`);

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

    var ecMarshal = 1;
    $(document).ready(function () {
        $("#addBtn7").on("click", function() {
            // Adding a row inside the tbody.
            $("#tableofMarshal").append(`
                <tr id="rowofMarshal${++ecMarshal}">
                    <td class="title">Marshal</td>
                    <td class="noc">
                        <input type="number"
                            class="text-center form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="" id="ec_MarshalNoc${ecMarshal}" max="100"
                            readonly>
                    </td>
                    <td class="pd">
                        <input type="text"
                            class="text-center fw-bold text-dark form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="" id="ec_MarshalPd">
                            </td>
                    <td class="nod">
                        <input type="number"
                            class="text-center form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="" id="ec_MarshalNod${ecMarshal}" readonly>
                    </td>
                    <td class="atd">
                                <input type="number"
                                    class="text-center form-control input-table @error('') is-invalid @enderror"
                                    value="{{ old('') }}" name="" id="ec_MarshalAtd${ecMarshal}" readonly>
                            </td>
                    <td class="nwh">
                        <input type="number"
                            class="text-center form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="" id="ec_MarshalNwh${ecMarshal}" readonly>
                    </td>
                    <td class="total-td">
                        <h4 class="text-center lead" id="ec_MarshalTotal">-</h4>
                    </td>
                    <td class="total-td">
                        <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="" id="">
                    </td>
                    <td class="border border-white" style="background-color: #FFFFFF;">
                        <a href="javascript:void(0)" class="text-danger font-18 remove" id="ecRemoveM${ecMarshal}" title="Remove" style="visibility: hidden;">
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
                var dig = parseInt(id.substring(11));

                // Modifying row id.
                $(this).attr("id", `ec_Marshal${dig - 1}`);

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

    var ecDocumentor = 1;
    $(document).ready(function () {
        $("#addBtn9").on("click", function() {
            // Adding a row inside the tbody.
            $("#tableofDocumentor").append(`
                <tr id="rowofDocumentor${++ecDocumentor}">
                    <td class="title">Documentor</td>
                    <td class="noc">
                        <input type="number"
                            class="text-center form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="" id="ec_DocumentorsNoc${ecDocumentor}" max="100"
                            readonly>
                    </td>
                    <td class="pd">
                        <input type="text"
                            class="text-center fw-bold text-dark form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="" id="ec_DocumentorsPd">
                            </td>
                    <td class="nod">
                        <input type="number"
                            class="text-center form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="" id="ec_DocumentorsNod${ecDocumentor}" readonly>
                    </td>
                    <td class="atd">
                                <input type="number"
                                    class="text-center form-control input-table @error('') is-invalid @enderror"
                                    value="{{ old('') }}" name="" id="ec_DocumentorsAtd${ecDocumentor}" readonly>
                            </td>
                    <td class="nwh">
                        <input type="number"
                            class="text-center form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="" id="ec_DocumentorsNwh${ecDocumentor}" readonly>
                    </td>
                    <td class="total-td">
                        <h4 class="text-center lead" id="ec_DocumentorsTotal">-</h4>
                    </td>
                    <td class="total-td">
                        <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="" id="">
                    </td>
                    <td class="border border-white" style="background-color: #FFFFFF;">
                        <a href="javascript:void(0)" class="text-danger font-18 remove" id="ecRemoveM${ecDocumentor}" title="Remove" style="visibility: hidden;">
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
                var dig = parseInt(id.substring(11));

                // Modifying row id.
                $(this).attr("id", `ec_Documentors${dig - 1}`);

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

</script>