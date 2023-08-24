<script>

    //SALES
    var ecsaleNum = 1;
    $(document).ready(function() {
        $("#ecaddButton").on("click", function() {
            $("#tableofSale").append(
                `<tr class="th-blue-grey-lighten-2" id="rowofSale${++ecsaleNum}">
                    <td class="title text-justify">
                        Sales (4% / 5% / 6% / 7%)
                        <input type="hidden" value="Sales" name="cost_type[]">
                    </td>
                    <td><input type="hidden" value="0" name="cost_consultant_num[]"></td>
                    <td class="table-danger">
                        <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                        value="{{ old('') }}" name="cost_day_fee[]" id="inputforSale${ecsaleNum}"
                        onblur="this.value = this.value.replace('%', '') + '%';"
                        oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
                    </td>
                    <td><input type="hidden" value="0" name="cost_day_num[]"></td>
                    <td><input type="hidden" value="0" name="cost_day_atd[]"></td>
                    <td><input type="hidden" value="0" name="cost_nswh[]"></td>
                    <td class="total-td tbl-engmt-cost" style="background-color: rgba(146, 146, 146, 0.727">
                        <h4 class="text-center text-danger" id="ec_saleTotal${ecsaleNum}">-</h4>
                    </td>
                    <td class="total-td">
                        <input  type="text" class="form-control input-table" name="cost_roster[]" id="sales_roster${ecsaleNum}"
                                value="{{ old('') }}"                                     
                                oninput="filterConsultant('sales_roster${ecsaleNum}');"
                                list="filtered_consultant_list" 
                                autocomplete="off"
                                >   
                        <input  type="hidden" value="" name="cost_roster_id[]" id="id_sales_roster${ecsaleNum}">
                    </td>
                    <td class="total-td" style="border-right: 3px solid black;">
                        <textarea class="form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="cost_notes[]" id="salesNotes${ecsaleNum}"></textarea>
                    </td>
                    <td style="background-color: #FFFFFF;" class="border border-white">
                        <a href="javascript:void(0)" class="text-danger font-18 remove" title="Remove">
                            <i class="fa fa-trash-o"></i>
                        </a>
                    </td>
                </tr>`);

            const ecsaleId = document.querySelectorAll("#cost_sale1");
            for (let i = 0; i < ecsaleId.length; i++) {
                ecsaleId[i].value = "0";
            }
            if (ecsaleNum > 1) {
                document.getElementById("dropdownforSale").style.display = "none";
                document.getElementById("cost_sale1").value = "0";
                document.getElementById("cost_sale1").disabled = true;
                document.getElementById("inputforSale1").style.display = "";
                document.getElementById("inputforSale1").disabled = false;
            }
        });
        $("#tableofSale").on("click", ".remove", function() {
            var child = $(this).closest("tr").nextAll();

            $(this).closest("tr").remove();

            ecsaleNum--;
            if (ecsaleNum == 1) {
                document.getElementById("inputforSale1").style.display = "none";
                document.getElementById("cost_sale1").value = "0";
                document.getElementById("cost_sale1").style.display = "";
                document.getElementById("cost_sale1").disabled = false;
                document.getElementById("dropdownforSale").style.display = "";
                document.getElementById("inputforSale1").value = "";
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
                    Referral (2% / 3%)
                    <input type="hidden" value="Referral" name="cost_type[]">
                </td>
                <td><input type="hidden" value="0" name="cost_consultant_num[]"></td>
                <td class="table-danger">
                    <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                    value="{{ old('') }}" name="cost_day_fee[]" id="inputforReferrals${ecreferralsNum}"
                    onblur="this.value = this.value.replace('%', '') + '%';"
                    oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
                </td>
                <td><input type="hidden" value="0" name="cost_day_num[]"></td>
                <td><input type="hidden" value="0" name="cost_day_atd[]"></td>
                <td><input type="hidden" value="0" name="cost_nswh[]"></td>
                <td class="total-td tbl-engmt-cost mgt-td-dark-bg">
                    <h4 class="text-center text-danger" id="referralsTotal${ecreferralsNum}">-</h4>
                </td>
                <td class="total-td">
                    <input  type="text" class="form-control input-table" name="cost_roster[]" id="referrals_roster${ecreferralsNum}"
                            value="{{ old('') }}"                                     
                            oninput="filterConsultant('referrals_roster${ecreferralsNum}');"
                            list="filtered_consultant_list" 
                            autocomplete="off"
                            >   
                    <input  type="hidden" value="" name="cost_roster_id[]" id="id_referrals_roster${ecreferralsNum}">
                </td>
                <td class="total-td " style="border-right: 3px solid black;">
                    <textarea class="form-control input-table"
                        value="{{ old('') }}" name="cost_notes[]" id="referralsNotes${ecreferralsNum}"></textarea>
                </td>
                <td style="background-color: #FFFFFF;" class="border border-white">
                    <a href="javascript:void(0)" class="text-danger font-18 remove" title="Remove">
                        <i class="fa fa-trash-o"></i>
                    </a>
                </td>
                </tr>`);

            // const ecreferralsId = document.querySelectorAll("#referrals1");
            // for (let i = 0; i < ecreferralsId.length; i++) {
            //     ecreferralsId[i].value = "0";
            // }

            if (ecreferralsNum > 1) {
                document.getElementById("dropdownforReferrals").style.display = "none";
                document.getElementById("referrals1").value = "0";
                document.getElementById("referrals1").disabled = true;
                document.getElementById("inputforReferrals1").style.display = "";
                document.getElementById("inputforReferrals1").disabled = false;
            } 
        });

        $("#tableofReferrals").on("click", ".remove", function() {
            var child = $(this).closest("tr").nextAll();

            $(this).closest("tr").remove();

            ecreferralsNum--;
            if (ecreferralsNum == 1) {
                document.getElementById("inputforReferrals1").style.display = "none";
                document.getElementById("referrals1").value = "0";
                document.getElementById("referrals1").style.display = "";
                document.getElementById("referrals1").disabled = false;
                document.getElementById("dropdownforReferrals").style.display = "";
                document.getElementById("inputforReferrals1").value = "";
            }

        });

    });

    //ENGAGEMENT MANAGER
    var ecengagementNum = 1;
    $(document).ready(function() {
        $("#ecaddButton3").on("click", function() {
            $("#tableofEngagementManager").append(
                `<tr class="th-blue-grey-lighten-2" id="rowofEngagementManager${++ecengagementNum}">
                    <td class="title fw-bold text-dark">
                        ENGAGEMENT MANAGER(4%)
                        <input type="hidden" value="Engagement Manager" name="cost_type[]">
                    </td>
                    <td><input type="hidden" value="0" name="cost_consultant_num[]"></td>
                    <td class="table-danger">
                        <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                        value="{{ old('') }}" name="cost_day_fee[]" id="inputforEngagementManager${ecengagementNum}"
                        onblur="this.value = this.value.replace('%', '') + '%';"
                        oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
                    </td>
                    <td><input type="hidden" value="0" name="cost_day_num[]"></td>
                    <td><input type="hidden" value="0" name="cost_day_atd[]"></td>
                    <td><input type="hidden" value="0" name="cost_nswh[]"></td>
                    <td class="total-td tbl-engmt-cost mgt-td-dark-bg">
                        <h4 class="text-center text-danger" id="ecengagementManagerTotal${ecengagementNum}">-</h4>
                    </td>
                    <td class="total-td">
                        <input  type="text" class="form-control input-table" name="cost_roster[]" id="engagementManager_roster${ecengagementNum}"
                                value="{{ old('') }}"                                     
                                oninput="filterConsultant('engagementManager_roster${ecengagementNum}');"
                                list="filtered_consultant_list" 
                                autocomplete="off"
                                >   
                        <input  type="hidden" value="" name="cost_roster_id[]" id="id_engagementManager_roster${ecengagementNum}">
                    </td>
                    <td class="total-td" style="border-right: 3px solid black;">
                        <textarea class="form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="cost_notes[]" id="engagementManagerNotes${ecengagementNum}"></textarea>
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
                document.getElementById("ecengagementManager1").value = "0";
                document.getElementById("ecengagementManager1").disabled = true;
                document.getElementById("inputforEngagementManager1").style.display = "";
                document.getElementById("inputforEngagementManager1").disabled = false;
            }
        });

        $("#tableofEngagementManager").on("click", ".remove", function() {
            var child = $(this).closest("tr").nextAll();

            $(this).closest("tr").remove();

            ecengagementNum--;
            if (ecengagementNum == 1) {
                document.getElementById("inputforEngagementManager1").style.display = "none";
                document.getElementById("ecengagementManager1").value = "0";
                document.getElementById("ecengagementManager1").style.display = "";
                document.getElementById("ecengagementManager1").disabled = false;
                document.getElementById("dropdownforEngagementManager").style.display = "";
                document.getElementById("inputforEngagementManager1").value = "";
            }

        });       

    });

    //OFFSITE PC
    var ecoffsiteNum = 1;
    $(document).ready(function() {
        $("#ecaddButton4").on("click", function() {
            $("#tableofOffsite").append(
                `<tr class="th-blue-grey-lighten-2" id="rowofOffsite${++ecoffsiteNum}">
                    <td class="title fw-bold text-dark">
                        OFFSITE PC(3%/4%/5%)
                        <input type="hidden" value="Offsite PC" name="cost_type[]">
                    </td>
                    <td><input type="hidden" value="0" name="cost_consultant_num[]"></td>
                    <td class="table-danger">
                        <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                        value="{{ old('') }}" name="cost_day_fee[]" id="inputforOffsite${ecoffsiteNum}"
                        onblur="this.value = this.value.replace('%', '') + '%';"
                        oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
                    </td>
                    <td><input type="hidden" value="0" name="cost_day_num[]"></td>
                    <td><input type="hidden" value="0" name="cost_day_atd[]"></td>
                    <td><input type="hidden" value="0" name="cost_nswh[]"></td>
                    <td class="total-td tbl-engmt-cost mgt-td-dark-bg">
                        <h4 class="text-center text-danger" id="ec_offsitePcTotal${ecoffsiteNum}">-</h4>
                    </td>
                    <td class="total-td">
                        <input  type="text" class="form-control input-table" name="cost_roster[]" id="Offsite_roster${ecoffsiteNum}"
                                value="{{ old('') }}"                                     
                                oninput="filterConsultant('Offsite_roster${ecoffsiteNum}');"
                                list="filtered_consultant_list" 
                                autocomplete="off"
                                >   
                        <input  type="hidden" value="" name="cost_roster_id[]" id="id_Offsite_roster${ecoffsiteNum}">
                    </td>
                    <td class="total-td" style="border-right: 3px solid black;">
                        <textarea class="form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="cost_notes[]" id="offsiteNotes${ecoffsiteNum}"></textarea>
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
                document.getElementById("ec_offsitePc1").value = "0";
                document.getElementById("ec_offsitePc1").disabled = true;
                document.getElementById("inputforOffsite1").style.display = "";
                document.getElementById("inputforOffsite1").disabled = false;
            }
        });

        $("#tableofOffsite").on("click", ".remove", function() {
            var child = $(this).closest("tr").nextAll();

            $(this).closest("tr").remove();

            ecoffsiteNum--;
            if (ecoffsiteNum == 1) {
                document.getElementById("inputforOffsite1").style.display = "none";
                document.getElementById("ec_offsitePc1").value = "0";
                document.getElementById("ec_offsitePc1").style.display = "";
                document.getElementById("ec_offsitePc1").disabled = false;
                document.getElementById("dropdownforOffsite").style.display = "";
                document.getElementById("inputforOffsite1").value = "";
            }

        });

    });

    //LEAD CONSULTANT
    var ecleadConsultant = 1;
    $(document).ready(function () {
        $("#addBtn1").on("click", function() {
            // Adding a row inside the tbody.
            $("#tableofLeadConsultant").append(`
                <tr class="th-blue-grey-lighten-2" id="rowofLeadConsultant${++ecleadConsultant}">
                    <td class="title">
                        Lead Consultant
                        <input type="hidden" value="Lead Consultant" name="cost_type[]">
                    </td>
                    <td class="noc mgt-td-dark-bg">
                        <input type="text"
                            oninput='return this.value = this.value.replace(/[^0-9.]+/g, "")'
                            class="text-center form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="cost_consultant_num[]" id="ec_LeadconsultantsNoc${ecleadConsultant}" max="100">
                    </td>
                    <td class="pd mgt-td-dark-bg">
                        <input type="text"
                            oninput='return this.value = this.value.replace(/[^0-9]+/g, "").replace(/\\B(?=(\\d{3})+(?!\\d))/g, ",")'
                            class="text-center fw-bold text-dark form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="cost_day_fee[]" id="ec_LeadconsultantsPd${ecleadConsultant}">
                    </td>
                    <td class="nod mgt-td-dark-bg">
                        <input type="text"
                            oninput='return this.value = this.value.replace(/[^0-9.]+/g, "")'
                            class="text-center form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="cost_day_num[]" id="ec_LeadconsultantsNod${ecleadConsultant}">
                    </td>
                    <td class="atd mgt-td-dark-bg">
                        <input type="text"
                            oninput='return this.value = this.value.replace(/[^0-9.]+/g, "")'
                            class="text-center form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="cost_day_atd[]" id="ec_LeadconsultantsAtd${ecleadConsultant}">
                    </td>
                    <td class="nwh mgt-td-dark-bg">
                        <input type="text"
                            oninput='return this.value = this.value.replace(/[^0-9.]+/g, "")'
                            class="text-center form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="cost_nswh[]" id="ec_LeadconsultantsNwh${ecleadConsultant}">
                    </td>
                    <td class="total-td">
                        <h4 class="text-center lead text-danger" id="ec_LeadconsultantsTotal${ecleadConsultant}">-</h4>
                    </td>
                    <td class="total-td table-warning">
                        <input  type="text" class="form-control input-table" name="cost_roster[]" id="leadConsultants_roster${ecleadConsultant}"
                                value="{{ old('') }}"                                     
                                oninput="filterConsultant('leadConsultants_roster${ecleadConsultant}', 'ec_LeadconsultantsPd${ecleadConsultant}' ,'leadconsultant');"
                                list="filtered_consultant_list" 
                                autocomplete="off"
                                >   
                        <input  type="hidden" value="" name="cost_roster_id[]" id="id_leadConsultants_roster${ecleadConsultant}">
                    </td>
                    <td class="total-td" style="border-right: 3px solid black;">
                        <textarea class="form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="cost_notes[]" id="leadConsultantsNotes${ecleadConsultant}"></textarea>
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
            /*
            // Getting all the rows next to the row
            // containing the clicked button
            var child = $(this).closest("tr").nextAll();

            // Iterating across all the rows
            // obtained to change the index
            let currentRowNo = 1;
            child.each(function () {
                // Getting <tr> id.
                currentRowNo++;
                var id = $(this).attr("id");

                // Getting the <input> inside the .noc, .noh, .nwh class.
                var noc = $(this).children(".noc").children("input");
                var nod = $(this).children(".nod").children("input");
                var nwh = $(this).children(".nwh").children("input");
                var atd = $(this).children(".atd").children("input");

                // Gets the row number from <tr> id.
                // var dig = parseInt(id.substring(19));

                // Modifying row id.
                // $(this).attr("id", `rowofLeadConsultant${dig - 1}`);

                // Modifying row index.
                noc.attr("id", `ec_LeadconsultantsNoc${currentRowNo}`);
                noc.attr("id", `ec_LeadconsultantsPd${currentRowNo}`);
                nod.attr("id", `ec_LeadconsultantsNod${currentRowNo}`);
                atd.attr("id", `ec_LeadconsultantsAtd${currentRowNo}`);
                nwh.attr("id", `ec_LeadconsultantsNwh${currentRowNo}`);                
            }); */

            // Removing the current row.
            $(this).closest("tr").remove();
            // Decreasing total number of rows by 1.
            ecleadConsultant--;
            document.getElementById('tableofLeadConsultant').click();
        });

    });

    //ANALYST
    var ecAnalyst = 1;
    $(document).ready(function () {
        $("#addBtn2").on("click", function() {
            // Adding a row inside the tbody.
            $("#tableofAnalyst").append(`
                <tr class="th-blue-grey-lighten-2" id="rowofAnalyst${++ecAnalyst}">
                    <td class="title">
                        Analyst
                        <input type="hidden" value="Analyst" name="cost_type[]">
                    </td>
                    <td class="noc mgt-td-dark-bg">
                        <input type="text"
                            oninput='return this.value = this.value.replace(/[^0-9.]+/g, "")'
                            class="text-center form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="cost_consultant_num[]" id="ec_AnalystsNoc${ecAnalyst}" max="100">
                    </td>
                    <td class=" bg-white">
                        <input type="text"
                            oninput='return this.value = this.value.replace(/[^0-9]+/g, "").replace(/\\B(?=(\\d{3})+(?!\\d))/g, ",")'
                            class="text-center fw-bold text-dark form-control input-table @error('') is-invalid @enderror"
                            value="13600" name="cost_day_fee[]" id="ec_AnalystsPd${ecAnalyst}">
                    </td>
                    <td class="nod mgt-td-dark-bg">
                        <input type="text"
                            oninput='return this.value = this.value.replace(/[^0-9.]+/g, "")'
                            class="text-center form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="cost_day_num[]" id="ec_AnalystsNod${ecAnalyst}">
                    </td>
                    <td class="atd mgt-td-dark-bg">
                        <input type="text"
                            oninput='return this.value = this.value.replace(/[^0-9.]+/g, "")'
                            class="text-center form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="cost_day_atd[]" id="ec_AnalystsAtd${ecAnalyst}">
                    </td>
                    <td class="nwh mgt-td-dark-bg">
                        <input type="text"
                            oninput='return this.value = this.value.replace(/[^0-9.]+/g, "")'
                            class="text-center form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="cost_nswh[]" id="ec_AnalystsNwh${ecAnalyst}">
                    </td>
                    <td class="total-td">
                        <h4 class="text-center lead text-danger" id="ec_AnalystsTotal${ecAnalyst}">-</h4>
                    </td>
                    <td class="total-td">
                        <input  type="text" class="form-control input-table" name="cost_roster[]" id="analysts_roster${ecAnalyst}"
                                value="{{ old('') }}"                                     
                                oninput="filterConsultant('analysts_roster${ecAnalyst}');"
                                list="filtered_consultant_list" 
                                autocomplete="off"
                                >   
                        <input  type="hidden" value="" name="cost_roster_id[]" id="id_analysts_roster${ecAnalyst}">
                    </td>
                    <td class="total-td" style="border-right: 3px solid black;">
                        <textarea class="form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="cost_notes[]" id="analystsNotes${ecAnalyst}"></textarea>
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

            /* // Getting all the rows next to the row
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
            }); */

            // Removing the current row.
            $(this).closest("tr").remove();
            // Decreasing total number of rows by 1.
            ecAnalyst--;
            document.getElementById('tableofAnalyst').click();
        });

    });

    //DESIGNER
    var ecDesigner = 1;
    $(document).ready(function () {
        $("#addBtn3").on("click", function() {
            // Adding a row inside the tbody.
            $("#tableofDesigner").append(`
                <tr class="th-blue-grey-lighten-2 additionalColumn" id="rowofDesigner${++ecDesigner}">
                    <td class="title">
                        Designer
                        <input type="hidden" value="Designer" name="cost_type[]">
                    </td>
                    <td class="noc mgt-td-dark-bg">
                        <input type="text"
                            oninput='return this.value = this.value.replace(/[^0-9.]+/g, "")'
                            class="text-center form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="cost_consultant_num[]" id="ec_DesignersNoc${ecDesigner}" max="100">
                    </td>
                    <td class="pd mgt-td-dark-bg">
                        <input type="text"
                            oninput='return this.value = this.value.replace(/[^0-9]+/g, "").replace(/\\B(?=(\\d{3})+(?!\\d))/g, ",")'
                            class="text-center fw-bold text-dark text-center form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="cost_day_fee[]" id="ec_DesignersPd${ecDesigner}" max="100">
                    </td>
                    <td class="nod mgt-td-dark-bg">
                        <input type="text"
                            oninput='return this.value = this.value.replace(/[^0-9.]+/g, "")'
                            class="text-center form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="cost_day_num[]" id="ec_DesignersNod${ecDesigner}">
                    </td>
                    <td class="atd">
                        <input type="text"
                            oninput='return this.value = this.value.replace(/[^0-9.]+/g, "")'
                            class="text-center form-control input-table @error('') is-invalid @enderror d-none"
                            value="{{ old('') }}" name="cost_day_atd[]" id="ec_DesignersAtd${ecDesigner}">
                    </td>
                    <td class="nwh">
                        <input type="text"
                            oninput='return this.value = this.value.replace(/[^0-9.]+/g, "")'
                            class="text-center form-control input-table @error('') is-invalid @enderror d-none"
                            value="{{ old('') }}" name="cost_nswh[]" id="ec_DesignersNwh${ecDesigner}">
                    </td>
                    <td class="total-td">
                        <h4 class="text-center lead text-danger" id="ec_DesignersTotal${ecDesigner}">-</h4>
                    </td>
                    <td class="total-td table-warning">
                        <input  type="text" class="form-control input-table" name="cost_roster[]" id="designers_roster${ecDesigner}"
                                value="{{ old('') }}"                                     
                                oninput="filterConsultant('designers_roster${ecDesigner}','ec_DesignersPd${ecDesigner}','designer');"
                                list="filtered_consultant_list" 
                                autocomplete="off"
                                >   
                        <input  type="hidden" value="" name="cost_roster_id[]" id="id_designers_roster${ecDesigner}">
                    </td>
                    <td class="total-td" style="border-right: 3px solid black;">
                        <textarea class="form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="cost_notes[]" id="designersNotes${ecDesigner}"></textarea>
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

            /* // Getting all the rows next to the row
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
            }); */

            // Removing the current row.
            $(this).closest("tr").remove();
            // Decreasing total number of rows by 1.
            ecDesigner--;
            document.getElementById('tableofDesigner').click();
        });

    });

    //CREATORS
    var ecCreator = 1;
    $(document).ready(function () {
        $("#ecaddButton5").on("click", function() {
            $("#tableofCreator").append(`
                <tr class="th-blue-grey-lighten-2" id="rowofCreator${++ecCreator}">
                <td class="title">
                    Creators Fees (500, 1K)
                    <input type="hidden" value="Creators Fees" name="cost_type[]">
                </td>
                <td class="noc">
                    <input type="text"
                        class="text-center form-control input-table @error('') is-invalid @enderror d-none"
                        value="{{ old('') }}" name="cost_consultant_num[]" id="ec_CreatorNoc${ecCreator}" max="100">
                </td>
                <td class="pd table-danger">
                    <fieldset>
                        <select class="input js-mytooltip  text-center form-select @error('') is-invalid @enderror" name="cost_day_fee[]" id="ec_CreatorPd${ecCreator}"
                            data-mytooltip-content="<i>
                                Creators Fee - 0 - no creators fee<br><br>
                                500 - Creators Fee is the creator is the lead, for the 2nd session onwards<br><br>
                                1,000 - Creators Fee if creator is NOT the lead, for the 2nd session onwards</i>"
                            data-mytooltip-theme="dark" data-mytooltip-action="focus"
                            data-mytooltip-direction="right" style="background-color:#ffcccc; color:red;">
                            <option value="500" {{ old('') == '500' ? 'selected="selected"' : '' }} title="" selected>
                                &#8369;500
                            </option>
                            <option value="1000" {{ old('') == '1000' ? 'selected="selected"' : '' }} title="">
                                &#8369;1000
                            </option>
                        </select>
                        @error('ef_customFee')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </fieldset>
                </td>
                <td class="nod table-warning">
                    <input type="text"
                        oninput='return this.value = this.value.replace(/[^0-9.]+/g, "")'
                        class="text-center form-control input-table @error('') is-invalid @enderror"
                        value="{{ old('') }}" name="cost_day_num[]" id="ec_CreatorNod${ecCreator}" max="100">
                </td>
                <td class="atd"><input type="hidden" value="0" name="cost_day_atd[]"></td>
                <td class="nwh"><input type="hidden" value="0" name="cost_nswh[]"></td>
                <td class="total-td">
                    <h4 class="text-center lead text-danger" id="ec_CreatorTotal${ecCreator}">-</h4>
                </td>
                <td class="total-td">
                    <input  type="text" class="form-control input-table" name="cost_roster[]" id="creator_roster${ecCreator}"
                            value="{{ old('') }}"                                     
                            oninput="filterConsultant('creator_roster${ecCreator}');"
                            list="filtered_consultant_list" 
                            autocomplete="off"
                            >   
                    <input  type="hidden" value="" name="cost_roster_id[]" id="id_creator_roster${ecCreator}">
                </td>
                <td class="total-td" style="border-right: 3px solid black;">
                    <textarea class="form-control input-table @error('') is-invalid @enderror"
                        value="{{ old('') }}" name="cost_notes[]" id="creatorNotes${ecCreator}"></textarea>
                </td>
                <td style="background-color: #FFFFFF;" class="border border-white">
                <a href="javascript:void(0)" class="text-danger font-18 remove" id="ecRemoveD${ecCreator}" title="Remove">
                            <i class="fa fa-trash-o"></i>
                        </a>
                </td>
            </tr>
                    `);
                });

            $("#tableofCreator").on("click", ".remove", function () {

            /* // Getting all the rows next to the row
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
            }); */

            // Removing the current row.
            $(this).closest("tr").remove();
            // Decreasing total number of rows by 1.
            ecCreator--;
            document.getElementById('tableofCreator').click();
        });

    });

    //LEAD FACILITATOR
    var ecLeadFacilitator = 1;
    $(document).ready(function () {
        $("#addBtn4").on("click", function() {
            // Adding a row inside the tbody.
            $("#tableofLeadFacilitator").append(`
                <tr class="th-blue-grey-lighten-2" id="rowofLeadFacilitator${++ecLeadFacilitator}">
                <td class="title">
                        Lead Facilitator
                        <input type="hidden" value="Lead Facilitator" name="cost_type[]">
                    </td>
                    <td class="noc mgt-td-dark-bg">
                        <input type="text"
                            oninput='return this.value = this.value.replace(/[^0-9.]+/g, "")'
                            class="text-center form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="cost_consultant_num[]" id="ec_LeadfacilitatorsNoc${ecLeadFacilitator}" max="100">
                    </td>
                    <td class="pd mgt-td-dark-bg">
                        <input type="text"
                            oninput='return this.value = this.value.replace(/[^0-9]+/g, "").replace(/\\B(?=(\\d{3})+(?!\\d))/g, ",")'
                            class="text-center fw-bold text-center text-dark form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="cost_day_fee[]" id="ec_LeadfacilitatorsPd${ecLeadFacilitator}">
                    </td>
                    <td class="nod mgt-td-dark-bg">
                        <input type="text"
                            oninput='return this.value = this.value.replace(/[^0-9.]+/g, "")'
                            class="text-center form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="cost_day_num[]" id="ec_LeadfacilitatorsNod${ecLeadFacilitator}">
                    </td>
                    <td class="atd mgt-td-dark-bg">
                        <input type="text"
                            oninput='return this.value = this.value.replace(/[^0-9.]+/g, "")'
                            class="text-center form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="cost_day_atd[]" id="ec_LeadfacilitatorsAtd${ecLeadFacilitator}">
                    </td>
                    <td class="nwh mgt-td-dark-bg">
                        <input type="text"
                            oninput='return this.value = this.value.replace(/[^0-9.]+/g, "")'
                            class="text-center form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="cost_nswh[]" id="ec_LeadfacilitatorsNwh${ecLeadFacilitator}">
                    </td>
                    <td class="total-td">
                        <h4 class="text-center lead text-danger" id="ec_LeadfacilitatorsTotal${ecLeadFacilitator}">-</h4>
                    </td>
                    <td class="total-td table-warning">
                        <input  type="text" class="form-control input-table" name="cost_roster[]" id="leadfacilitators_roster${ecLeadFacilitator}"
                                value="{{ old('') }}"                                     
                                oninput="filterConsultant('leadfacilitators_roster${ecLeadFacilitator}','ec_LeadfacilitatorsPd${ecLeadFacilitator}','leadFacilitator');"
                                list="filtered_consultant_list" 
                                autocomplete="off"
                                >   
                        <input  type="hidden" value="" name="cost_roster_id[]" id="id_leadfacilitators_roster${ecLeadFacilitator}">
                    </td>
                    <td class="total-td" style="border-right: 3px solid black;">
                        <textarea class="form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="cost_notes[]" id="leadfacilitatorsNotes${ecLeadFacilitator}"></textarea>
                    </td>
                    <td class="border border-white" style="background-color: #FFFFFF;">
                        <a href="javascript:void(0)" class="text-danger font-18 remove" id="ecRemoveLF${ecLeadFacilitator}" title="Remove">
                            <i class="fa fa-trash-o"></i>
                        </a>
                    </td>
                </tr>
            `);
        });

        $("#tableofLeadFacilitator").on("click", ".remove", function () {

            // Getting all the rows next to the row
            // containing the clicked button
            /* var child = $(this).closest("tr").nextAll();

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
            }); */

            // Removing the current row.
            $(this).closest("tr").remove();
            // Decreasing total number of rows by 1.
            ecLeadFacilitator--;
            document.getElementById('tableofLeadFacilitator').click();
        });

    });

    //CO-LEAD
    var ecCoLead = 1;
    $(document).ready(function () {
        $("#ecaddButtonCoLead").on("click", function() {
            // Adding a row inside the tbody.
            $("#tableofCoLead").append(`
                <tr class="th-blue-grey-lighten-2" id="rowofCoLead${++ecCoLead}">
                    <td class="title">
                        Co-lead
                        <input type="hidden" value="Co-lead" name="cost_type[]">
                    </td>
                    <td class="noc table-warning">
                        <input type="text"
                            oninput='return this.value = this.value.replace(/[^0-9.]+/g, "")'
                            class="text-center text-dark form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="cost_consultant_num[]" id="ec_CoLeadNoc${ecCoLead}" max="100">
                    </td>
                    <td class="pd bg-white">
                        <input type="text"
                            oninput='return this.value = this.value.replace(/[^0-9]+/g, "").replace(/\\B(?=(\\d{3})+(?!\\d))/g, ",")'
                            class="text-center text-dark fw-bold form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="cost_day_fee[]" id="ec_CoLeadPd${ecCoLead}">
                    </td>
                    <td class="nod table-warning">
                        <input type="text"
                            oninput='return this.value = this.value.replace(/[^0-9.]+/g, "")'
                            class="text-center text-dark form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="cost_day_num[]" id="ec_CoLeadNod${ecCoLead}">
                    </td>
                    <td class="atd table-warning">
                        <input type="text"
                            oninput='return this.value = this.value.replace(/[^0-9.]+/g, "")'
                            class="text-center text-dark form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="cost_day_atd[]" id="ec_CoLeadAtd${ecCoLead}">
                    </td>
                    <td class="nwh table-warning">
                        <input type="text"
                            oninput='return this.value = this.value.replace(/[^0-9.]+/g, "")'
                            class="text-center text-dark form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="cost_nswh[]" id="ec_CoLeadNwh${ecCoLead}">
                    </td>
                    <td class="total-td">
                        <h4 class="text-center lead text-danger" id="ec_CoLeadTotal${ecCoLead}">-</h4>
                    </td>
                    <td class="total-td table-warning">
                        <input  type="text" class="form-control input-table" name="cost_roster[]" id="coLead_roster${ecCoLead}"
                                value="{{ old('') }}"                                     
                                oninput="filterConsultant('coLead_roster${ecCoLead}','ec_CoLeadPd${ecCoLead}','coLead');"
                                list="filtered_consultant_list" 
                                autocomplete="off"
                                >   
                        <input  type="hidden" value="" name="cost_roster_id[]" id="id_coLead_roster${ecCoLead}">
                    </td>
                    <td class="total-td" style="border-right: 3px solid black;">
                        <textarea class="form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="cost_notes[]" id="coLeadNotes${ecCoLead}"></textarea>
                    </td>
                    <td class="border border-white" style="background-color: #FFFFFF;">
                        <a href="javascript:void(0)" class="text-danger font-18 remove" id="ecRemoveLF${ecCoLead}" title="Remove">
                            <i class="fa fa-trash-o"></i>
                        </a>
                    </td>
                </tr>
            `);
        });

        $("#tableofCoLead").on("click", ".remove", function () {

            // Getting all the rows next to the row
            // containing the clicked button
            /* var child = $(this).closest("tr").nextAll();

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
            }); */

            // Removing the current row.
            $(this).closest("tr").remove();
            // Decreasing total number of rows by 1.
            ecLeadFacilitator--;
            document.getElementById('tableofCoLead').click();
        });

    });

    //CO-FACILITATOR
    var ecCoFacilitator = 1;
    $(document).ready(function () {
        $("#addBtn5").on("click", function() {
            // Adding a row inside the tbody.
            $("#tableofCoFacilitator").append(`
                <tr class="th-blue-grey-lighten-2" id="rowofCoFacilitator${++ecCoFacilitator}">
                    <<td class="title">
                        Co-Facilitator / Resource Speaker
                        <input type="hidden" value="Co-Facilitator / Resource Speaker" name="cost_type[]">
                    </td>
                    <td class="noc mgt-td-dark-bg">
                        <input type="text"
                            oninput='return this.value = this.value.replace(/[^0-9.]+/g, "")'
                            class="text-center text-dark form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="cost_consultant_num[]" id="ec_CofacilitatorsNoc${ecCoFacilitator}" max="100">
                    </td>
                    <td class="pd mgt-td-dark-bg">
                        <input type="text"
                            oninput='return this.value = this.value.replace(/[^0-9]+/g, "").replace(/\\B(?=(\\d{3})+(?!\\d))/g, ",")'
                            class="text-center text-dark fw-bold form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="cost_day_fee[]" id="ec_CofacilitatorsPd${ecCoFacilitator}">
                    </td>
                    <td class="nod mgt-td-dark-bg">
                        <input type="text"
                            oninput='return this.value = this.value.replace(/[^0-9.]+/g, "")'
                            class="text-center text-dark form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="cost_day_num[]" id="ec_CofacilitatorsNod${ecCoFacilitator}">
                    </td>
                    <td class="atd mgt-td-dark-bg">
                        <input type="text"
                            oninput='return this.value = this.value.replace(/[^0-9.]+/g, "")'
                            class="text-center text-dark form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="cost_day_atd[]" id="ec_CofacilitatorsAtd${ecCoFacilitator}">
                    </td>
                    <td class="nwh mgt-td-dark-bg">
                        <input type="text"
                            oninput='return this.value = this.value.replace(/[^0-9.]+/g, "")'
                            class="text-center text-dark form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="cost_nswh[]" id="ec_CofacilitatorsNwh${ecCoFacilitator}">
                    </td>
                    <td class="total-td">
                        <h4 class="text-center lead text-danger" id="ec_CofacilitatorsTotal${ecCoFacilitator}">-</h4>
                    </td>
                    <td class="total-td table-warning">
                        <input  type="text" class="form-control input-table" name="cost_roster[]" id="cofacilitator_roster${ecCoFacilitator}"
                                value="{{ old('') }}"                                     
                                oninput="filterConsultant('cofacilitator_roster${ecCoFacilitator}','ec_CofacilitatorsPd${ecCoFacilitator}','coFaci');"
                                list="filtered_consultant_list" 
                                autocomplete="off"
                                >   
                        <input  type="hidden" value="" name="cost_roster_id[]" id="id_cofacilitator_roster${ecCoFacilitator}">
                    </td>
                    <td class="total-td" style="border-right: 3px solid black;">
                        <textarea class="form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="cost_notes[]" id="cofacilitatorNotes${ecCoFacilitator}"></textarea>
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

            /* // Getting all the rows next to the row
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
            }); */

            // Removing the current row.
            $(this).closest("tr").remove();
            // Decreasing total number of rows by 1.
            ecCoFacilitator--;
            document.getElementById('tableofCoFacilitator').click();
        });

    });

    //ACTION LEARNING COACH
    var ecActionLearning = 1;
    $(document).ready(function () {
        $("#addBtn6").on("click", function() {
            // Adding a row inside the tbody.
            $("#tableofActionLearningCoach").append(`
                <tr class="th-blue-grey-lighten-2" id="rowofActionLearningCoach${++ecActionLearning}">
                    <td class="title">
                        Action Learning Coach
                        <input type="hidden" value="Action Learning Coach" name="cost_type[]">
                    </td>
                    <td class="mgt-td-dark-bg">
                        <input type="text"
                            oninput='return this.value = this.value.replace(/[^0-9.]+/g, "")'
                            class="text-dark text-center form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="cost_consultant_num[]" id="ec_ActionlearningcoachNoc${ecActionLearning}" max="100">
                    </td>
                    <td class="bg-white">
                        <input type="text"
                            oninput='return this.value = this.value.replace(/[^0-9]+/g, "").replace(/\\B(?=(\\d{3})+(?!\\d))/g, ",")'
                            class="text-center text-dark fw-bold form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="cost_day_fee[]" id="ec_ActionlearningcoachPd${ecActionLearning}">
                    </td>
                    <td class="mgt-td-dark-bg">
                        <input type="text"
                            oninput='return this.value = this.value.replace(/[^0-9.]+/g, "")'
                            class="text-dark text-center form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="cost_day_num[]" id="ec_ActionlearningcoachNod${ecActionLearning}">
                    </td>
                    <td class="mgt-td-dark-bg">
                        <input type="text"
                            oninput='return this.value = this.value.replace(/[^0-9.]+/g, "")'
                            class="text-dark text-center form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="cost_day_atd[]" id="ec_ActionlearningcoachAtd${ecActionLearning}">
                    </td>
                    <td class="mgt-td-dark-bg">
                        <input type="text"
                            oninput='return this.value = this.value.replace(/[^0-9.]+/g, "")'
                            class="text-dark text-center form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="cost_nswh[]" id="ec_ActionlearningcoachNwh${ecActionLearning}">
                    </td>
                    <td class="total-td">
                        <h4 class="text-center lead text-danger" id="ec_ActionlearningcoachTotal${ecActionLearning}">-</h4>
                    </td>
                    <td class="total-td table-warning">
                        <input  type="text" class="form-control input-table" name="cost_roster[]" id="actionlearningcoach_roster${ecActionLearning}"
                                value="{{ old('') }}"                                     
                                oninput="filterConsultant('actionlearningcoach_roster${ecActionLearning}');"
                                list="filtered_consultant_list" 
                                autocomplete="off"
                                >   
                        <input  type="hidden" value="" name="cost_roster_id[]" id="id_actionlearningcoach_roster${ecActionLearning}">
                    </td>
                    <td class="total-td" style="border-right: 3px solid black;">
                        <textarea class="form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="cost_notes[]" id="actionlearningcoachNotes${ecActionLearning}"></textarea>
                    </td>
                    <td class="border border-white" style="background-color: #FFFFFF;">
                        <a href="javascript:void(0)" class="text-danger font-18 remove" id="ecRemoveALC${ecActionLearning}" title="Remove">
                            <i class="fa fa-trash-o"></i>
                        </a>
                    </td>
                </tr>
            `);
        });

        $("#tableofActionLearningCoach").on("click", ".remove", function () {

            /* // Getting all the rows next to the row
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
            }); */

            // Removing the current row.
            $(this).closest("tr").remove();
            // Decreasing total number of rows by 1.
            ecActionLearning--;
            document.getElementById('tableofActionLearningCoach').click();
        });

    });

    //MARSHAL
    var ecMarshal = 1;
    $(document).ready(function () {
        $("#addBtn7").on("click", function() {
            // Adding a row inside the tbody.
            $("#tableofMarshal").append(`
                <tr class="th-blue-grey-lighten-2" id="rowofMarshal${++ecMarshal}">
                    <td class="title">
                        Marshal
                        <input type="hidden" value="Marshal" name="cost_type[]">
                    </td>
                    <td class="mgt-td-dark-bg">
                        <input type="text"
                            oninput='return this.value = this.value.replace(/[^0-9.]+/g, "")'
                            class="text-center form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="cost_consultant_num[]" id="ec_MarshalNoc${ecMarshal}">
                    </td>
                    <td class="mgt-td-dark-bg">
                        <input type="text"
                            oninput='return this.value = this.value.replace(/[^0-9]+/g, "").replace(/\\B(?=(\\d{3})+(?!\\d))/g, ",")'
                            class="text-center text-dark fw-bold form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="cost_day_fee[]" id="ec_MarshalPd${ecMarshal}">
                    </td>
                    <td class="mgt-td-dark-bg">
                        <input type="text"
                            oninput='return this.value = this.value.replace(/[^0-9.]+/g, "")'
                            class="text-center  form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="cost_day_num[]" id="ec_MarshalNod${ecMarshal}">
                    </td>
                    <td class="mgt-td-dark-bg">
                        <input type="text"
                            oninput='return this.value = this.value.replace(/[^0-9.]+/g, "")'
                            class="text-center form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="cost_day_atd[]" id="ec_MarshalAtd${ecMarshal}">
                    </td>
                    <td class="mgt-td-dark-bg">
                        <input type="text"
                            oninput='return this.value = this.value.replace(/[^0-9.]+/g, "")'
                            class="text-center  form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="cost_nswh[]" id="ec_MarshalNwh${ecMarshal}">
                    </td>
                    <td class="total-td">
                        <h4 class="text-center lead text-danger" id="ec_MarshalTotal${ecMarshal}">-</h4>
                    </td>
                    <td class="total-td table-warning">
                    <input  type="text" class="form-control input-table" name="cost_roster[]" id="marshal_roster${ecMarshal}"
                                value="{{ old('') }}"                                     
                                oninput="filterConsultant('marshal_roster${ecMarshal}','ec_MarshalPd${ecMarshal}','marshal');"
                                list="filtered_consultant_list" 
                                autocomplete="off"
                                >   
                        <input  type="hidden" value="" name="cost_roster_id[]" id="id_marshal_roster${ecMarshal}">
                    </td>
                    <td class="total-td" style="border-right: 3px solid black;">
                        <textarea class="form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="cost_notes[]" id="marshalNotes${ecMarshal}"></textarea>
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

            /* // Getting all the rows next to the row
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
            }); */

            // Removing the current row.
            $(this).closest("tr").remove();
            // Decreasing total number of rows by 1.
            ecMarshal--;
            document.getElementById('tableofMarshal').click();
        });

    });

    //ONSITE PC
    var ecOnsite = 1;
    $(document).ready(function () {
        $("#addBtn8").on("click", function() {
            // Adding a row inside the tbody.
            $("#tableofOnsitePC").append(`
            <tr class="th-blue-grey-lighten-2" id="rowofOnsitePC${++ecOnsite}">
                <td class="title">
                    On-site PC (P4.4K / P5.6K/ P6.6K/ 8.5K)
                    <input type="hidden" value="On-site PC" name="cost_type[]">
                </td>
                <td class="mgt-td-dark-bg">
                    <input type="text"
                        oninput='return this.value = this.value.replace(/[^0-9.]+/g, "")'
                        class="text-center form-control input-table @error('') is-invalid @enderror"
                        value="{{ old('') }}" name="cost_consultant_num[]" id="ec_OnsitepcNoc${ecOnsite}">
                </td>
                <td class="table-danger">
                    <fieldset>
                        <select class="input js-mytooltip text-center form-select @error('') is-invalid @enderror select" name="cost_day_fee[]"
                            id="ec_OnsitepcPd${ecOnsite}" style="background-color:#ffcccc; color:red;"
                            data-mytooltip-content="<i>
                                <b>On-site PC</b><br/>
                                P4,400<br/>
                                P6,600<br/>
                                P8,500</i>"
                        data-mytooltip-theme="dark" data-mytooltip-action="focus"
                        data-mytooltip-direction="right">
                        <option value="4400" {{ old('') == '4400' ? 'selected="selected"' : '' }}
                            title="">
                            &#8369;4,400
                        </option>
                        <option value="5600" {{ old('') == '5600' ? 'selected="selected"' : '' }}
                            title="">
                            &#8369;5,600
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
                <td class="mgt-td-dark-bg">
                    <input type="text"
                        oninput='return this.value = this.value.replace(/[^0-9.]+/g, "")'
                        class="text-center  form-control input-table @error('') is-invalid @enderror"
                        value="{{ old('') }}" name="cost_day_num[]" id="ec_OnsitepcNod${ecOnsite}">
                </td>
                <td class="mgt-td-dark-bg">
                    <input type="text"
                        oninput='return this.value = this.value.replace(/[^0-9.]+/g, "")'
                        class="text-center form-control input-table @error('') is-invalid @enderror"
                        value="{{ old('') }}" name="cost_day_atd[]" id="ec_OnsitepcAtd${ecOnsite}">
                </td>
                <td class="mgt-td-dark-bg">
                    <input type="text"
                        oninput='return this.value = this.value.replace(/[^0-9.]+/g, "")'
                        class="text-center form-control input-table @error('') is-invalid @enderror"
                        value="{{ old('') }}" name="cost_nswh[]" id="ec_OnsitepcNwh${ecOnsite}">
                </td>
                <td class="total-td">
                    <h4 class="text-center lead text-danger" id="ec_OnsitepcTotal${ecOnsite}">-</h4>
                </td>
                <td class="total-td">
                    <input  type="text" class="form-control input-table" name="cost_roster[]" id="onsitepc_roster${ecOnsite}"
                            value="{{ old('') }}"                                     
                            oninput="filterConsultant('onsitepc_roster${ecOnsite}');"
                            list="filtered_consultant_list" 
                            autocomplete="off"
                            >   
                    <input  type="hidden" value="" name="cost_roster_id[]" id="id_onsitepc_roster${ecOnsite}">
                </td>
                <td class="total-td" style="border-right: 3px solid black;">
                    <textarea class="form-control input-table @error('') is-invalid @enderror"
                        value="{{ old('') }}" name="cost_notes[]" id="onsitepcNotes${ecOnsite}"></textarea>
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

            /* // Getting all the rows next to the row
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
            }); */

            // Removing the current row.
            $(this).closest("tr").remove();
            // Decreasing total number of rows by 1.
            ecOnsite--;
            document.getElementById('tableofOnsitePC').click();
        });

    });

    //DOCUMENTOR
    var ecDocumentor = 1;
    $(document).ready(function () {
        $("#addBtn9").on("click", function() {
            // Adding a row inside the tbody.
            $("#tableofDocumentor").append(`
                <tr class="th-blue-grey-lighten-2" id="rowofDocumentor${++ecDocumentor}">
                    <td class="title">
                        Documentor
                        <input type="hidden" value="Documentor" name="cost_type[]">
                    </td>
                    <td class="mgt-td-dark-bg">
                        <input type="text" class="text-center text-dark fw-bold form-control input-table @error('') is-invalid @enderror" value="{{ old('') }}" name="cost_consultant_num[]" id="ec_DocumentorsNoc${ecDocumentor}" max="100" 
                        oninput='return this.value = this.value.replace(/[^0-9.]+/g, "")'>
                    </td>
                    <td class="bg-white">
                        <input type="text"
                            oninput='return this.value = this.value.replace(/[^0-9]+/g, "").replace(/\\B(?=(\\d{3})+(?!\\d))/g, ",")'
                            class="text-center text-dark fw-bold form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="cost_day_fee[]" id="ec_DocumentorsPd${ecDocumentor}">
                    </td>
                    <td class="mgt-td-dark-bg">
                        <input type="text"
                            oninput='return this.value = this.value.replace(/[^0-9.]+/g, "")'
                            class="text-center text-dark fw-bold form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="cost_day_num[]" id="ec_DocumentorsNod${ecDocumentor}">
                    </td>
                    <td class="mgt-td-dark-bg">
                        <input type="text"
                            oninput='return this.value = this.value.replace(/[^0-9.]+/g, "")'
                            class="text-center text-dark fw-bold form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="cost_day_atd[]" id="ec_DocumentorsAtd${ecDocumentor}">
                    </td>
                    <td class="mgt-td-dark-bg">
                        <input type="text"
                            oninput='return this.value = this.value.replace(/[^0-9.]+/g, "")'
                            class="text-center text-dark fw-bold form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="cost_nswh[]" id="ec_DocumentorsNwh${ecDocumentor}">
                    </td>
                    <td class="total-td" style="background-color: rgba(146, 146, 146, 0.727">
                        <h4 class="text-center text-danger" id="ec_DocumentorsTotal${ecDocumentor}">-</h4>
                    </td>
                    <td class="total-td">
                        <input  type="text" class="form-control input-table" name="cost_roster[]" id="documentor_roster${ecDocumentor}"
                                value="{{ old('') }}"                                     
                                oninput="filterConsultant('documentor_roster${ecDocumentor}');"
                                list="filtered_consultant_list" 
                                autocomplete="off"
                                >   
                        <input  type="hidden" value="" name="cost_roster_id[]" id="id_documentor_roster${ecDocumentor}">
                    </td>
                    <td class="total-td" style="border-right: 3px solid black;">
                        <textarea class="form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="cost_notes[]" id="documentorNotes${ecDocumentor}"></textarea>
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

            /* // Getting all the rows next to the row
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
            }); */

            // Removing the current row.
            $(this).closest("tr").remove();
            // Decreasing total number of rows by 1.
            ecDocumentor--;
            document.getElementById('tableofDocumentor').click();
        });

    });

    //PER DIEM
    var ecPerDiem = 1;
    $(document).ready(function () {
        $("#addBtnPerDiem").on("click", function() {
            // Adding a row inside the tbody.
            $("#tableofPerDiem").append(`
                <tr class="th-blue-grey-lighten-2" id="rowofDocumentor${++ecPerDiem}">
                    <th class="title px-4 text-dark">
                        5. PER DIEM
                        <input type="hidden" value="Per Diem" name="cost_type[]">
                    </th>
                    <td class="table-warning">
                        <input type="text"
                            oninput='return this.value = this.value.replace(/[^0-9.]+/g, "")'
                            class="text-center form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="cost_consultant_num[]" id="ec_PerdiemNoc${ecPerDiem}" max="100">
                    </td>
                    <td class="bg-white">
                        <input type="text"
                            oninput='return this.value = this.value.replace(/[^0-9]+/g, "").replace(/\\B(?=(\\d{3})+(?!\\d))/g, ",")'
                            class="text-center text-dark fw-bold form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="cost_day_fee[]" id="ec_PerdiemPd${ecPerDiem}">
                    </td>
                    <td class="mgt-td-dark-bg">
                        <input type="text"
                        oninput='return this.value = this.value.replace(/[^0-9.]+/g, "")'
                            class="text-center text-dark fw-bold form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="cost_day_num[]" id="ec_PerdiemNod${ecPerDiem}">
                    </td>
                    <td><input type="hidden" value="0" name="cost_day_atd[]"></td>
                    <td><input type="hidden" value="0" name="cost_nswh[]"></td>
                    <td class="total-td" style="background-color: rgba(146, 146, 146, 0.727">
                        <h4 class="text-center text-danger" id="ec_PerdiemTotal${ecPerDiem}">-</h4>
                    </td>
                    <td class="total-td">
                        <input  type="text" class="form-control input-table" name="cost_roster[]" id="perdiem_roster${ecPerDiem}"
                                value="{{ old('') }}"                                     
                                oninput="filterConsultant('perdiem_roster${ecPerDiem}');"
                                list="filtered_consultant_list" 
                                autocomplete="off"
                                >   
                        <input  type="hidden" value="" name="cost_roster_id[]" id="id_perdiem_roster${ecPerDiem}">
                    </td>
                    <td class="total-td" style="border-right: 3px solid black;">
                        <textarea class="form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="cost_notes[]" id="perdiemNotes${ecPerDiem}"></textarea>
                    </td>
                    <td class="border border-white" style="background-color: #FFFFFF;">
                        <a href="javascript:void(0)" class="text-danger font-18 remove" id="ecRemoveD${ecPerDiem}" title="Remove">
                            <i class="fa fa-trash-o"></i>
                        </a>
                    </td>
                </tr>
            `);
        });

        $("#tableofPerDiem").on("click", ".remove", function () {

            /* // Getting all the rows next to the row
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
            }); */

            // Removing the current row.
            $(this).closest("tr").remove();
            // Decreasing total number of rows by 1.
            ecDocumentor--;
            document.getElementById('tableofPerDiem').click();
        });

    });

    //OFF PROGRAM
    var ecOffProgram = 1;
    $(document).ready(function () {
        $("#addBtnOffProgram").on("click", function() {
            // Adding a row inside the tbody.
            $("#tableofOffProgram").append(`
                <tr class="th-blue-grey-lighten-2" id="rowofDocumentor${++ecOffProgram}">
                    <td class="title">
                        Off-Program fee
                        <input type="hidden" value="Off-Program fee" name="cost_type[]"></td>
                    <td class="table-warning">
                        <input type="text"
                            oninput='return this.value = this.value.replace(/[^0-9.]+/g, "")'
                            class="input js-mytooltip text-center text-dark fw-bold form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="cost_consultant_num[]" id="ec_OffprogramsNoc${ecOffProgram}" max="100"
                            data-mytooltip-content="<i>
                                        - For single or series of programs<br>
                                        - One time only<br>
                                        - Per person<br>
                                        </i>"
                            data-mytooltip-theme="dark" data-mytooltip-action="focus"
                            data-mytooltip-direction="right">
                    </td>
                    <td class="bg-white">
                        <input type="text"
                            class="text-center text-dark fw-bold form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}"  name="cost_day_fee[]" id="ec_OffprogramsPd${ecOffProgram}"
                            oninput='return this.value = this.value.replace(/[^0-9]+/g, "").replace(/\\B(?=(\\d{3})+(?!\\d))/g, ",")'>
                    </td>
                    <td><input type="hidden" value="0" name="cost_day_num[]"></td>
                    <td><input type="hidden" value="0" name="cost_day_atd[]"></td>
                    <td><input type="hidden" value="0" name="cost_nswh[]"></td>
                    <td class="total-td" style="background-color: rgba(146, 146, 146, 0.727">
                        <h4 class="text-center text-danger" id="ec_OffprogramsTotal${ecOffProgram}">-</h4>
                    </td>
                    <td class="total-td">
                        <input  type="text" class="form-control input-table" name="cost_roster[]" id="offprogram_roster${ecOffProgram}"
                                    value="{{ old('') }}"                                     
                                    oninput="filterConsultant('offprogram_roster${ecOffProgram}');"
                                    list="filtered_consultant_list" 
                                    autocomplete="off"
                                    >   
                            <input  type="hidden" value="" name="cost_roster_id[]" id="id_offprogram_roster${ecOffProgram}">
                        </td>
                    <td class="total-td" style="border-right: 3px solid black;">
                        <textarea class="form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="cost_notes[]" id="offprogramNotes${ecOffProgram}"></textarea>
                    </td>
                    <td class="border border-white" style="background-color: #FFFFFF;">
                        <a href="javascript:void(0)" class="text-danger font-18 remove" id="ecRemoveD${ecOffProgram}" title="Remove">
                            <i class="fa fa-trash-o"></i>
                        </a>
                    </td>
                </tr>
            `);
        });

        $("#tableofOffProgram").on("click", ".remove", function () {

            /* // Getting all the rows next to the row
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
            }); */

            // Removing the current row.
            $(this).closest("tr").remove();
            // Decreasing total number of rows by 1.
            ecDocumentor--;
            document.getElementById('tableofOffProgram').click();
        });

    });

</script>
