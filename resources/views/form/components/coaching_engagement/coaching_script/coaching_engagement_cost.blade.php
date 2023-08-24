<script>

    //SALES
    var musaleNum = 1;
    $(document).ready(function() {
        $("#muaddButton").on("click", function() {
            $("#tableofSale").append(
                `<tr class="th-blue-grey-lighten-2" id="rowofSale${++musaleNum}">
                    <td class="title">
                        <input type="text" class="d-none" value="Sales" name="cost_type[]" readonly>
                        Sales (4% / 5% / 6% / 7%)
                    </td>
                    <td><input type="hidden" class="d-none" name="cost_coach_num[]" readonly></td>
                    <td class="table-danger">
                        <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                        value="{{ old('') }}" name="cost_session_fee[]" id="inputforSale${musaleNum}"
                        onblur="this.value = this.value.replace('%', '') + '%';"
                        oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"
                        maxlength="5">
                    </td>                    
                    <td><input type="hidden" class="d-none" name="cost_session_num[]" readonly></td>
                    <td><input type="hidden" class="d-none" name="cost_nswh[]" readonly></td>
                    <td class="total-td tbl-engmt-cost" style="border-left:3px solid black">
                        <h4 class="text-center text-danger " id="coaching_saleTotal${musaleNum}">-</h4>
                    </td>
                    <td class="total-td">                        
                        <input  type="text" class="form-control input-table" name="cost_roster[]" id="sales_roster${musaleNum}"
                                value="{{ old('') }}"                                     
                                oninput="filterConsultant('sales_roster${musaleNum}');"
                                style=""
                                list="filtered_consultant_list" 
                                autocomplete="off" >   
                        <input  type="hidden" value="" name="cost_roster_id[]" id="id_sales_roster${musaleNum}">
                    </td>
                    <td class="total-td">
                        <textarea type="text" class="form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}"name="cost_notes[]" id="ec_coaching_saleNotes${musaleNum}"></textarea>
                    </td>
                    <td style="background-color: #FFFFFF;" class="border border-white">
                        <a href="javascript:void(0)" class="text-danger font-18 remove" title="Remove"><i class="fa fa-trash-o"></i></a>
                    </td>
                </tr>`);

            const musaleId = document.querySelectorAll("#coaching_sale");
            for (let i = 0; i < musaleId.length; i++) {
                musaleId[i].value = "0";
            }

            if (musaleNum > 1) {
                document.getElementById("dropdownforSale").style.display = "none";
                document.getElementById("coaching_sale").value = "0";
                document.getElementById("coaching_sale").disabled = true;
                document.getElementById("inputforSale1").style.display = "";
                document.getElementById("inputforSale1").disabled = false;
            }
        });

        $("#tableofSale").on("click", ".remove", function() {
            var child = $(this).closest("tr").nextAll();

            $(this).closest("tr").remove();

            musaleNum--;
            if (musaleNum == 1) {
                document.getElementById("inputforSale1").style.display = "none";
                document.getElementById("coaching_sale").value = "0";
                document.getElementById("coaching_sale").style.display = "";
                document.getElementById("coaching_sale").disabled = false;
                document.getElementById("dropdownforSale").style.display = "";
                document.getElementById("inputforSale1").value = "";
            }

        });

    });

    //REFERRALS
    var mureferralsNum = 1;
    $(document).ready(function() {
        $("#muaddButton2").on("click", function() {
            $("#tableofReferrals").append(
                `<tr class="th-blue-grey-lighten-2" id="rowofReferrals${++mureferralsNum}">
                    <td class="title">
                        <input type="text" class="d-none" value="Referral" name="cost_type[]" readonly>
                        Referral (2% / 3%)
                    </td>
                    <td><input type="hidden" class="d-none" name="cost_coach_num[]" readonly></td>
                    <td class="table-danger">
                        <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="cost_session_fee[]" id="inputforReferrals${mureferralsNum}" 
                            onblur="this.value = this.value.replace('%', '') + '%';"
                            oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"
                            maxlength="5">
                    </td>                    
                    <td><input type="hidden" class="d-none" name="cost_session_num[]" readonly></td>
                    <td><input type="hidden" class="d-none" name="cost_nswh[]" readonly></td>
                    <td class="total-td tbl-engmt-cost" style="border-left:3px solid black">
                        <h4 class="text-center text-danger " id="coaching_referralsTotal${mureferralsNum}">-</h4>
                    </td>
                    <td class="total-td">
                        <input  type="text" class="form-control input-table" name="cost_roster[]" id="referral_roster${mureferralsNum}"
                                value="{{ old('') }}"                                     
                                oninput="filterConsultant('referral_roster${mureferralsNum}');"
                                style=""
                                list="filtered_consultant_list" 
                                autocomplete="off" >   
                        <input  type="hidden" value="" name="cost_roster_id[]" id="id_referral_roster${mureferralsNum}">
                    </td>
                    <td class="total-td">
                        <textarea type="text" class="form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}"name="cost_notes[]" id="ec_coaching_referralsNotes${mureferralsNum}"></textarea>
                    </td>
                    <td style="background-color: #FFFFFF;" class="border border-white">
                        <a href="javascript:void(0)" class="text-danger font-18 remove" title="Remove"><i class="fa fa-trash-o"></i></a>
                    </td>
                </tr>`);

            const mureferralsId = document.querySelectorAll("#coaching_referrals");
            for (let i = 0; i < mureferralsId.length; i++) {
                mureferralsId[i].value = "0";
            }

            if (mureferralsNum > 1) {
                document.getElementById("dropdownforReferrals").style.display = "none";
                document.getElementById("coaching_referrals").value = "0";
                document.getElementById("coaching_referrals").disabled = true;
                document.getElementById("inputforReferrals1").style.display = "";
                document.getElementById("inputforReferrals1").disabled = false;
            }
        });

        $("#tableofReferrals").on("click", ".remove", function() {
            var child = $(this).closest("tr").nextAll();

            $(this).closest("tr").remove();

            mureferralsNum--;
            if (mureferralsNum == 1) {
                document.getElementById("inputforReferrals1").style.display = "none";
                document.getElementById("coaching_referrals").value = "0";
                document.getElementById("coaching_referrals").style.display = "";
                document.getElementById("coaching_referrals").disabled = false;
                document.getElementById("dropdownforReferrals").style.display = "";
                document.getElementById("inputforReferrals1").value = "";
            }

        });

    });

    //ENGAGEMENT MANAGER
    var muengagementNum = 1;
    $(document).ready(function() {
        $("#muaddButton3").on("click", function() {
            $("#tableofEngagementManager").append(
                `<tr class="th-blue-grey-lighten" id="rowofEngagementManager${++muengagementNum}">
                    <td class="title fw-bold text-dark">
                        <input type="text" class="d-none" value="Engagement Manager" name="cost_type[]" readonly>
                        ENGAGEMENT MANAGER (4%)
                    </td>
                    <td><input type="hidden" class="d-none" name="cost_coach_num[]" readonly></td>
                    <td class="table-danger">
                        <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="cost_session_fee[]" id="inputforEngagementManager${muengagementNum}"
                            onblur="this.value = this.value.replace('%', '') + '%';"
                            oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"
                            maxlength="5">
                    </td>
                    <td><input type="hidden" class="d-none" name="cost_session_num[]" readonly></td>
                    <td><input type="hidden" class="d-none" name="cost_nswh[]" readonly></td>

                    <td class="total-td tbl-engmt-cost" style="border-left:3px solid black">
                        <h4 class="text-center text-danger " id="coaching_engagementManagerTotal${muengagementNum}">-</h4>
                    </td>
                    <td class="total-td">
                        <input  type="text" class="form-control input-table" name="cost_roster[]" id="engagementManager_roster${muengagementNum}"
                                value="{{ old('') }}"                                     
                                oninput="filterConsultant('engagementManager_roster${muengagementNum}');"
                                style=""
                                list="filtered_consultant_list" 
                                autocomplete="off" >   
                        <input  type="hidden" value="" name="cost_roster_id[]" id="id_engagementManager_roster${muengagementNum}">
                    </td>
                    <td class="total-td">
                        <textarea type="text" class="form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}"name="cost_notes[]" id="ec_coaching_engagementManagerNotes${muengagementNum}"></textarea>
                    </td>
                    <td style="background-color: #FFFFFF;" class="border border-white">
                        <a href="javascript:void(0)" class="text-danger font-18 remove" title="Remove"><i class="fa fa-trash-o"></i></a>
                    </td>
                </tr>`);

            const muengagementId = document.querySelectorAll("#coaching_engagementManager");
            for (let i = 0; i < muengagementId.length; i++) {
                muengagementId[i].value = "0";
            }

            if (muengagementNum > 1) {
                document.getElementById("dropdownforEngagementManager").style.display = "none";
                document.getElementById("coaching_engagementManager").value = "0";
                document.getElementById("coaching_engagementManager").disabled = true;
                document.getElementById("inputforEngagementManager1").style.display = "";
                document.getElementById("inputforEngagementManager1").disabled = false;                
            }
        });

        $("#tableofEngagementManager").on("click", ".remove", function() {
            var child = $(this).closest("tr").nextAll();

            $(this).closest("tr").remove();

            muengagementNum--;
            if (muengagementNum == 1) {
                document.getElementById("inputforEngagementManager1").style.display = "none";
                document.getElementById("coaching_engagementManager").value = "0";
                document.getElementById("coaching_engagementManager").style.display = "";
                document.getElementById("coaching_engagementManager").disabled = false;
                document.getElementById("dropdownforEngagementManager").style.display = "";
                document.getElementById("inputforEngagementManager1").value = "";
            }

        });

    });

    //Consulting and/or Design
    var ecConsultingDesign = 1;
    $(document).ready(function () {
        $("#muaddButton4").on("click", function() {
            $("#tableofConsultingDesign").append(`
                <tr class="th-blue-grey-lighten-2" id="rowofConsultingDesign${++ecConsultingDesign}">
                    <td class="title">
                        <input type="text" class="d-none" value="Consulting Design" name="cost_type[]" readonly>
                        Consulting and/or Design
                    </td>
                    <td class="mgt-td-dark-bg">
                        <input type="text"
                            class="text-center fw-bold text-dark text-center form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="cost_coach_num[]" id="coaching_ConsultingDesign_cn${ecConsultingDesign}"
                            oninput='return this.value = this.value.replace(/[^0-9.]+/g, "")'> 
                    </td>
                    <td class="bg-white">
                        <input type="text"
                            class="text-center fw-bold text-dark text-center form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="cost_session_fee[]" id="coaching_ConsultingDesign_sf${ecConsultingDesign}"
                            oninput='return this.value = this.value.replace(/[^0-9]+/g, "").replace(/\\B(?=(\\d{3})+(?!\\d))/g, ",")'> 
                    </td>
                    <td class="mgt-td-dark-bg">
                        <input type="text"
                            class="text-center fw-bold text-dark text-center form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="cost_session_num[]" id="coaching_ConsultingDesign_sn${ecConsultingDesign}"
                            oninput='return this.value = this.value.replace(/[^0-9.]+/g, "")'>
                    </td>
                    <td class="mgt-td-dark-bg">
                        <input type="text" 
                        class="text-center fw-bold text-dark text-center form-control input-table @error('') is-invalid @enderror" 
                        value="{{ old('') }}" name="cost_nswh[]" id="coaching_ConsultingDesign_nswh${ecConsultingDesign}"
                        oninput='return this.value = this.value.replace(/[^0-9.]+/g, "")'>
                    </td>
                    <td class="total-td" style="border-left:3px solid black">
                        <h4 class="text-center text-danger  lead" id="coaching_ConsultingDesign_total${ecConsultingDesign}">-</h4>
                    </td> 
                    <td class="total-td">
                        <input  type="text" class="form-control input-table" name="cost_roster[]" id="ConsultingDesign_roster${ecConsultingDesign}"
                                value="{{ old('') }}"                                     
                                oninput="filterConsultant('ConsultingDesign_roster${ecConsultingDesign}');"
                                style=""
                                list="filtered_consultant_list" 
                                autocomplete="off" >   
                        <input  type="hidden" value="" name="cost_roster_id[]" id="id_ConsultingDesign_roster${ecConsultingDesign}">
                    </td>
                    <td class="total-td">
                        <textarea type="text" class="form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}"name="cost_notes[]" id="ec_coaching_ConsultingDesignNotes${ecConsultingDesign}"></textarea>
                    </td>
                    <td style="background-color: #FFFFFF;" class="border border-white">
                        <a href="javascript:void(0)" class="text-danger font-18 removed" title="Remove"><i class="fa fa-trash-o"></i></a>
                    </td>
                </tr>
                    `);
                });

            $("#tableofConsultingDesign").on("click", ".removed", function () {

            // Getting all the rows next to the row
            // containing the clicked button
            var child = $(this).closest("tr").nextAll();

            // Iterating across all the rows
            // obtained to change the index
            child.each(function () {
                // Getting <tr> id.
                var id = $(this).attr("id");

                // Getting the <input> inside the .noc, .nod.
                var hf = $(this).children(".hf").children("input");

                // Gets the row number from <tr> id.
                var dig = parseInt(id.substring(18));

                // Modifying row id.
                $(this).attr("id", `rowofCustomization${dig - 1}`);

                // Modifying row index.
                hf.attr("id", `coaching_CustomizationHf${dig - 1}`);
            });

            // Removing the current row.
            $(this).closest("tr").remove();
            // Decreasing total number of rows by 1.
            ecConsultingDesign--;
        });

    });

    //Executive Coaching
    var ecExecutiveCoaching = 1;
    $(document).ready(function () {
        $("#muaddButton5").on("click", function() {
            $("#tableofExecutiveCoaching").append(`
                <tr class="th-blue-grey-lighten-2" id="rowofCreator${++ecExecutiveCoaching}">
                    <td class="title">
                        <input type="text" class="d-none" value="Executive Coaching" name="cost_type[]" readonly>
                        Executive Coaching
                    </td>
                    <td class="mgt-td-dark-bg">
                        <input type="text"
                            class="text-center fw-bold text-dark text-center form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="cost_coach_num[]" id="coaching_ExecutiveCoaching_cn${ecExecutiveCoaching}"
                            oninput='return this.value = this.value.replace(/[^0-9.]+/g, "")'> 
                    </td>
                    <td class="bg-white">
                        <input type="text"
                            class="text-center fw-bold text-dark text-center form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="cost_session_fee[]" id="coaching_ExecutiveCoaching_sf${ecExecutiveCoaching}"
                            oninput='return this.value = this.value.replace(/[^0-9]+/g, "").replace(/\\B(?=(\\d{3})+(?!\\d))/g, ",")'> 
                    </td>
                    <td class="mgt-td-dark-bg">
                        <input type="text"
                            class="text-center fw-bold text-dark text-center form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="cost_session_num[]" id="coaching_ExecutiveCoaching_sn${ecExecutiveCoaching}"
                            oninput='return this.value = this.value.replace(/[^0-9.]+/g, "")'>
                    </td>
                    <td class="mgt-td-dark-bg">
                        <input type="text" 
                        class="text-center fw-bold text-dark text-center form-control input-table @error('') is-invalid @enderror" 
                        value="{{ old('') }}" name="cost_nswh[]" id="coaching_ExecutiveCoaching_nswh${ecExecutiveCoaching}"
                        oninput='return this.value = this.value.replace(/[^0-9.]+/g, "")'>
                    </td>
                    <td class="total-td" style="border-left:3px solid black">
                        <h4 class="text-center text-danger  lead" id="coaching_ExecutiveCoaching_total${ecExecutiveCoaching}">-</h4>
                    </td> 
                    <td class="total-td">
                        <input  type="text" class="form-control input-table" name="cost_roster[]" id="ExecutiveCoaching_roster${ecExecutiveCoaching}"
                                value="{{ old('') }}"                                     
                                oninput="filterConsultant('ExecutiveCoaching_roster${ecExecutiveCoaching}');"
                                style=""
                                list="filtered_consultant_list" 
                                autocomplete="off" >   
                        <input  type="hidden" value="" name="cost_roster_id[]" id="id_ExecutiveCoaching_roster${ecExecutiveCoaching}">
                    </td>
                    <td class="total-td">
                        <textarea type="text" class="form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}"name="cost_notes[]" id="ec_coaching_ExecutiveCoachingNotes${ecExecutiveCoaching}"></textarea>
                    </td>
                    <td style="background-color: #FFFFFF;" class="border border-white">
                        <a href="javascript:void(0)" class="text-danger font-18 removed" title="Remove"><i class="fa fa-trash-o"></i></a>
                    </td>
                </tr>
                    `);
                });

            $("#tableofExecutiveCoaching").on("click", ".removed", function () {

            // Getting all the rows next to the row
            // containing the clicked button
            var child = $(this).closest("tr").nextAll();

            // Iterating across all the rows
            // obtained to change the index
            child.each(function () {
                // Getting <tr> id.
                var id = $(this).attr("id");

                // Getting the <input> inside the .noc, .nod.
                var noh = $(this).children(".noh").children("input");

                // Gets the row number from <tr> id.
                var dig = parseInt(id.substring(12));

                // Modifying row id.
                $(this).attr("id", `rowofCreator${dig - 1}`);

                // Modifying row index.
                noh.attr("id", `coaching_CreatorNoh${dig - 1}`);
            });

            // Removing the current row.
            $(this).closest("tr").remove();
            // Decreasing total number of rows by 1.
            ecExecutiveCoaching--;
        });

    });

    //Performance Development Coaching
    var ecPerfDevCoaching = 1;
    $(document).ready(function () {
        $("#muaddButton6").on("click", function() {
            $("#tableofPerfDevCoaching").append(`
                <tr class="th-blue-grey-lighten-2" id="rowofLeadFacilitator${++ecPerfDevCoaching}">
                    <td class="title">
                        <input type="text" class="d-none" value="Performance Development Coaching" name="cost_type[]" readonly>
                        Performance Development Coaching
                    </td>
                    <td class="mgt-td-dark-bg">
                        <input type="text"
                            class="text-center fw-bold text-dark text-center form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="cost_coach_num[]" id="coaching_PerfDevCoaching_cn${ecPerfDevCoaching}"
                            oninput='return this.value = this.value.replace(/[^0-9.]+/g, "")'> 
                    </td>
                    <td class="bg-white">
                        <input type="text"
                            class="text-center fw-bold text-dark text-center form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="cost_session_fee[]" id="coaching_PerfDevCoaching_sf${ecPerfDevCoaching}"
                            oninput='return this.value = this.value.replace(/[^0-9]+/g, "").replace(/\\B(?=(\\d{3})+(?!\\d))/g, ",")'> 
                    </td>
                    <td class="mgt-td-dark-bg">
                        <input type="text"
                            class="text-center fw-bold text-dark text-center form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="cost_session_num[]" id="coaching_PerfDevCoaching_sn${ecPerfDevCoaching}"
                            oninput='return this.value = this.value.replace(/[^0-9.]+/g, "")'>
                    </td>
                    <td class="mgt-td-dark-bg">
                        <input type="text" 
                        class="text-center fw-bold text-dark text-center form-control input-table @error('') is-invalid @enderror" 
                        value="{{ old('') }}" name="cost_nswh[]" id="coaching_PerfDevCoaching_nswh${ecPerfDevCoaching}"
                        oninput='return this.value = this.value.replace(/[^0-9.]+/g, "")'>
                    </td>
                    <td class="total-td" style="border-left:3px solid black">
                        <h4 class="text-center text-danger  lead" id="coaching_PerfDevCoaching_total${ecPerfDevCoaching}">-</h4>
                    </td>
                    <td class="total-td">
                        <input  type="text" class="form-control input-table" name="cost_roster[]" id="PerfDevCoaching_roster${ecPerfDevCoaching}"
                                value="{{ old('') }}"                                     
                                oninput="filterConsultant('PerfDevCoaching_roster${ecPerfDevCoaching}');"
                                style=""
                                list="filtered_consultant_list" 
                                autocomplete="off" >
                        <input  type="hidden" value="" name="cost_roster_id[]" id="id_PerfDevCoaching_roster${ecPerfDevCoaching}">
                    </td>
                    <td class="total-td">
                        <textarea type="text" class="form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}"name="cost_notes[]" id="ec_coaching_PerfDevCoachingNotes${ecPerfDevCoaching}"></textarea>
                    </td>
                    <td style="background-color: #FFFFFF;" class="border border-white">
                        <a href="javascript:void(0)" class="text-danger font-18 removed" title="Remove"><i class="fa fa-trash-o"></i></a>
                    </td>
                </tr>`);
                });

            $("#tableofPerfDevCoaching").on("click", ".removed", function () {

            // Getting all the rows next to the row
            // containing the clicked button
            var child = $(this).closest("tr").nextAll();

            // Iterating across all the rows
            // obtained to change the index
            child.each(function () {
                // Getting <tr> id.
                var id = $(this).attr("id");

                // Getting the <input> inside the .noc, .nod.
                var noh = $(this).children(".noh").children("input");
                var nwh = $(this).children(".nwh").children("input");

                // Gets the row number from <tr> id.
                var dig = parseInt(id.substring(20));

                // Modifying row id.
                $(this).attr("id", `rowofLeadFacilitator${dig - 1}`);

                // Modifying row index.
                noh.attr("id", `coaching_LeadfacilitatorsNoh${dig - 1}`);
                nwh.attr("id", `coaching_LeadfacilitatorsNwh${dig - 1}`);
            });

            // Removing the current row.
            $(this).closest("tr").remove();
            // Decreasing total number of rows by 1.
            ecPerfDevCoaching--;
        });

    });

    //Gallup Strengths Coaching
    var ecGallupStrengthCoach = 1;
    $(document).ready(function () {
        $("#muaddButton7").on("click", function() {
            $("#tableofGallupStrenghtCoach").append(`
                <tr class="th-blue-grey-lighten-2" id="rowofModerator${++ecGallupStrengthCoach}">
                    <td class="title">
                        <input type="text" class="d-none" value="Gallup Strengths Coaching" name="cost_type[]" readonly>
                        Gallup Strengths Coaching
                    </td>
                    <td class="mgt-td-dark-bg">
                        <input type="text"
                            class="text-center fw-bold text-dark text-center form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="cost_coach_num[]" id="coaching_GallupStrenghtCoach_cn${ecGallupStrengthCoach}"
                            oninput='return this.value = this.value.replace(/[^0-9.]+/g, "")'> 
                    </td>
                    <td class="bg-white">
                        <input type="text"
                            class="text-center fw-bold text-dark text-center form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="cost_session_fee[]" id="coaching_GallupStrenghtCoach_sf${ecGallupStrengthCoach}"
                            oninput='return this.value = this.value.replace(/[^0-9]+/g, "").replace(/\\B(?=(\\d{3})+(?!\\d))/g, ",")'> 
                    </td>
                    <td class="mgt-td-dark-bg">
                        <input type="text"
                            class="text-center fw-bold text-dark text-center form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="cost_session_num[]" id="coaching_GallupStrenghtCoach_sn${ecGallupStrengthCoach}"
                            oninput='return this.value = this.value.replace(/[^0-9.]+/g, "")'>
                    </td>
                    <td class="mgt-td-dark-bg">
                        <input type="text" 
                        class="text-center fw-bold text-dark text-center form-control input-table @error('') is-invalid @enderror" 
                        value="{{ old('') }}" name="cost_nswh[]" id="coaching_GallupStrenghtCoach_nswh${ecGallupStrengthCoach}"
                        oninput='return this.value = this.value.replace(/[^0-9.]+/g, "")'>
                    </td>
                    <td class="total-td" style="border-left:3px solid black">
                        <h4 class="text-center text-danger  lead" id="coaching_GallupStrenghtCoach_total${ecGallupStrengthCoach}">-</h4>
                    </td>
                    <td class="total-td">
                    <input  type="text" class="form-control input-table" name="cost_roster[]" id="GallupStrenghtCoach_roster${ecGallupStrengthCoach}"
                            value="{{ old('') }}"                                     
                            oninput="filterConsultant('GallupStrenghtCoach_roster${ecGallupStrengthCoach}');"
                            style=""
                            list="filtered_consultant_list" 
                            autocomplete="off" >
                    <input  type="hidden" value="" name="cost_roster_id[]" id="id_GallupStrenghtCoach_roster${ecGallupStrengthCoach}">
                    </td>
                    <td class="total-td">
                        <textarea type="text" class="form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}"name="cost_notes[]" id="ec_coaching_GallupStrenghtCoachNotes${ecGallupStrengthCoach}"></textarea>
                    </td>
                    <td style="background-color: #FFFFFF;" class="border border-white">
                        <a href="javascript:void(0)" class="text-danger font-18 removed" title="Remove"><i class="fa fa-trash-o"></i></a>
                    </td>
                </tr>`);
                });

            $("#tableofGallupStrenghtCoach").on("click", ".removed", function () {

            // Getting all the rows next to the row
            // containing the clicked button
            var child = $(this).closest("tr").nextAll();

            // Iterating across all the rows
            // obtained to change the index
            child.each(function () {
                // Getting <tr> id.
                var id = $(this).attr("id");

                // Getting the <input> inside the .noc, .nod.
                var noh = $(this).children(".noh").children("input");
                var nwh = $(this).children(".nwh").children("input");

                // Gets the row number from <tr> id.
                var dig = parseInt(id.substring(14));

                // Modifying row id.
                $(this).attr("id", `rowofModerator${dig - 1}`);

                // Modifying row index.
                noh.attr("id", `coaching_ModeratorNoh${dig - 1}`);
                nwh.attr("id", `coaching_ModeratorNwh${dig - 1}`);
            });

            // Removing the current row.
            $(this).closest("tr").remove();
            // Decreasing total number of rows by 1.
            ecGallupStrengthCoach--;
        });

    });

    //WIAL Action Learning Team Coaching
    var ecWialALTC = 1;
    $(document).ready(function () {
        $("#muaddButton8").on("click", function() {
            $("#tableofWialActLearnTeamCoach").append(`
                <tr class="th-blue-grey-lighten-2" id="rowoProducer${++ecWialALTC}">
                    <td class="title">
                        <input type="text" class="d-none" value="WIAL Action Learning Team Coaching" name="cost_type[]" readonly>
                        WIAL Action Learning Team Coaching
                    </td>
                    <td class="mgt-td-dark-bg">
                        <input type="text"
                            class="text-center fw-bold text-dark text-center form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="cost_coach_num[]" id="coaching_WialActLearnTeamCoach_cn${ecWialALTC}"
                            oninput='return this.value = this.value.replace(/[^0-9.]+/g, "")'> 
                    </td>
                    <td class="bg-white">
                        <input type="text"
                            class="text-center fw-bold text-dark text-center form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="cost_session_fee[]" id="coaching_WialActLearnTeamCoach_sf${ecWialALTC}"
                            oninput='return this.value = this.value.replace(/[^0-9]+/g, "").replace(/\\B(?=(\\d{3})+(?!\\d))/g, ",")'> 
                    </td>
                    <td class="mgt-td-dark-bg">
                        <input type="text"
                            class="text-center fw-bold text-dark text-center form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="cost_session_num[]" id="coaching_WialActLearnTeamCoach_sn${ecWialALTC}"
                            oninput='return this.value = this.value.replace(/[^0-9.]+/g, "")'>
                    </td>
                    <td class="mgt-td-dark-bg">
                        <input type="text" 
                        class="text-center fw-bold text-dark text-center form-control input-table @error('') is-invalid @enderror" 
                        value="{{ old('') }}" name="cost_nswh[]" id="coaching_WialActLearnTeamCoach_nswh${ecWialALTC}"
                        oninput='return this.value = this.value.replace(/[^0-9.]+/g, "")'>
                    </td>
                    <td class="total-td" style="border-left:3px solid black">
                        <h4 class="text-center text-danger  lead" id="coaching_WialActLearnTeamCoach_total${ecWialALTC}">-</h4>
                    </td>
                    <td class="total-td">
                    <input  type="text" class="form-control input-table" name="cost_roster[]" id="WialActLearnTeamCoach_roster${ecWialALTC}"
                            value="{{ old('') }}"                                     
                            oninput="filterConsultant('WialActLearnTeamCoach_roster${ecWialALTC}');"
                            style=""
                            list="filtered_consultant_list" 
                            autocomplete="off" >
                    <input  type="hidden" value="" name="cost_roster_id[]" id="id_WialActLearnTeamCoach_roster${ecWialALTC}">
                    </td>
                    <td class="total-td">
                        <textarea type="text" class="form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}"name="cost_notes[]" id="ec_coaching_WialActLearnTeamCoachNotes${ecWialALTC}"></textarea>
                    </td>
                    <td style="background-color: #FFFFFF;" class="border border-white">
                        <a href="javascript:void(0)" class="text-danger font-18 removed" title="Remove"><i class="fa fa-trash-o"></i></a>
                    </td>
                </tr>`);
            });

            $("#tableofWialActLearnTeamCoach").on("click", ".removed", function () {

            // Getting all the rows next to the row
            // containing the clicked button
            var child = $(this).closest("tr").nextAll();

            // Iterating across all the rows
            // obtained to change the index
            child.each(function () {
                // Getting <tr> id.
                var id = $(this).attr("id");

                // Getting the <input> inside the .noc, .nod.
                var noh = $(this).children(".noh").children("input");
                var nwh = $(this).children(".nwh").children("input");

                // Gets the row number from <tr> id.
                var dig = parseInt(id.substring(13));

                // Modifying row id.
                $(this).attr("id", `rowofProducer${dig - 1}`);

                // Modifying row index.
                noh.attr("id", `coaching_ProducerNoh${dig - 1}`);
                nwh.attr("id", `coaching_ProducerNwh${dig - 1}`);
            });

            // Removing the current row.
            $(this).closest("tr").remove();
            // Decreasing total number of rows by 1.
            ecWialALTC--;
        });

    });

</script>