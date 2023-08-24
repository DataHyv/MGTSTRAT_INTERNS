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
                    <td class="table-danger">
                        <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                        value="{{ old('') }}" name="cost_hour_fee[]" id="inputforSale${musaleNum}"
                        onblur="this.value = this.value.replace('%', '') + '%';"
                        oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"
                        maxlength="5">
                    </td>                    
                    <td><input type="hidden" class="d-none" name="cost_hour_num[]" readonly></td>
                    <td><input type="hidden" class="d-none" name="cost_nswh[]" readonly></td>

                    <td class="total-td tbl-engmt-cost" style="border-left:3px solid black">
                        <h4 class="text-center text-danger " id="webinar_saleTotal${musaleNum}">-</h4>
                    </td>
                    <td class="total-td">
                        <input  type="text" class="form-control input-table" name="cost_roster[]" id="sales_roster${musaleNum}"
                                value="{{ old('') }}"                                     
                                oninput="filterConsultant('sales_roster${musaleNum}');"
                                list="filtered_consultant_list" 
                                autocomplete="off" >   
                        <input  type="hidden" value="" name="cost_roster_id[]" id="id_sales_roster${musaleNum}">
                    </td>
                    <td class="total-td">
                        <textarea type="text" class="form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}"name="cost_notes[]" id="ec_webinar_saleNotes${musaleNum}"></textarea>
                    </td>
                    <td style="background-color: #FFFFFF;" class="border border-white">
                        <a href="javascript:void(0)" class="text-danger font-18 remove" title="Remove"><i class="fa fa-trash-o"></i></a>
                    </td>
                </tr>`);

            const musaleId = document.querySelectorAll("#webinar_sale");
            for (let i = 0; i < musaleId.length; i++) {
                musaleId[i].value = "0";
            }

            if (musaleNum > 1) {
                document.getElementById("dropdownforSale").style.display = "none";
                document.getElementById("webinar_sale").value = "0";
                document.getElementById("webinar_sale").disabled = true;
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
                document.getElementById("webinar_sale").value = "0";
                document.getElementById("webinar_sale").style.display = "";
                document.getElementById("webinar_sale").disabled = false;
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
                        Referral (2% / 3% / 10%)
                    </td>
                    <td class="table-danger">
                        <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="cost_hour_fee[]" id="inputforReferrals${mureferralsNum}" 
                            onblur="this.value = this.value.replace('%', '') + '%';"
                            oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"
                            maxlength="5">
                    </td>                    
                    <td><input type="hidden" class="d-none" name="cost_hour_num[]" readonly></td>
                    <td><input type="hidden" class="d-none" name="cost_nswh[]" readonly></td>
                    <td class="total-td tbl-engmt-cost" style="border-left:3px solid black">
                        <h4 class="text-center text-danger " id="webinar_referralsTotal${mureferralsNum}">-</h4>
                    </td>
                    <td class="total-td">
                        <input  type="text" class="form-control input-table" name="cost_roster[]" id="referral_roster${mureferralsNum}"
                                value="{{ old('') }}"                                     
                                oninput="filterConsultant('referral_roster${mureferralsNum}');"
                                list="filtered_consultant_list" 
                                autocomplete="off" >   
                        <input  type="hidden" value="" name="cost_roster_id[]" id="id_referral_roster${mureferralsNum}">
                    </td>
                    <td class="total-td">
                        <textarea type="text" class="form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}"name="cost_notes[]" id="ec_webinar_referralsNotes${mureferralsNum}"></textarea>
                    </td>
                    <td style="background-color: #FFFFFF;" class="border border-white">
                        <a href="javascript:void(0)" class="text-danger font-18 remove" title="Remove"><i class="fa fa-trash-o"></i></a>
                    </td>
                </tr>`);

            const mureferralsId = document.querySelectorAll("#webinar_referrals");
            for (let i = 0; i < mureferralsId.length; i++) {
                mureferralsId[i].value = "0";
            }

            if (mureferralsNum > 1) {
                document.getElementById("dropdownforReferrals").style.display = "none";
                document.getElementById("webinar_referrals").value = "0";
                document.getElementById("webinar_referrals").disabled = true;
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
                document.getElementById("webinar_referrals").value = "0";
                document.getElementById("webinar_referrals").style.display = "";
                document.getElementById("webinar_referrals").disabled = false;
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
                    <td class="table-danger">
                        <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="cost_hour_fee[]" id="inputforEngagementManager${muengagementNum}"
                            onblur="this.value = this.value.replace('%', '') + '%';"
                            oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"
                            maxlength="5">
                    </td>
                    <td><input type="hidden" class="d-none" name="cost_hour_num[]" readonly></td>
                    <td><input type="hidden" class="d-none" name="cost_nswh[]" readonly></td>

                    <td class="total-td tbl-engmt-cost" style="border-left:3px solid black">
                        <h4 class="text-center text-danger " id="webinar_engagementManagerTotal${muengagementNum}">-</h4>
                    </td>
                    <td class="total-td">
                        <input  type="text" class="form-control input-table" name="cost_roster[]" id="engagementManager_roster${muengagementNum}"
                                value="{{ old('') }}"                                     
                                oninput="filterConsultant('engagementManager_roster${muengagementNum}');"
                                list="filtered_consultant_list" 
                                autocomplete="off" >   
                        <input  type="hidden" value="" name="cost_roster_id[]" id="id_engagementManager_roster${muengagementNum}">
                    </td>
                    <td class="total-td">
                        <textarea type="text" class="form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}"name="cost_notes[]" id="ec_webinar_engagementManagerNotes${muengagementNum}"></textarea>
                    </td>
                    <td style="background-color: #FFFFFF;" class="border border-white">
                        <a href="javascript:void(0)" class="text-danger font-18 remove" title="Remove"><i class="fa fa-trash-o"></i></a>
                    </td>
                </tr>`);

            const muengagementId = document.querySelectorAll("#webinar_engagementManager");
            for (let i = 0; i < muengagementId.length; i++) {
                muengagementId[i].value = "0";
            }

            if (muengagementNum > 1) {
                document.getElementById("dropdownforEngagementManager").style.display = "none";
                document.getElementById("webinar_engagementManager").value = "0";
                document.getElementById("webinar_engagementManager").disabled = true;
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
                document.getElementById("webinar_engagementManager").value = "0";
                document.getElementById("webinar_engagementManager").style.display = "";
                document.getElementById("webinar_engagementManager").disabled = false;
                document.getElementById("dropdownforEngagementManager").style.display = "";
                document.getElementById("inputforEngagementManager1").value = "";
            }

        });

    });

    //CUSTOMIZATION FEE
    var muCustomization = 1;
    $(document).ready(function () {
        $("#muaddButton4").on("click", function() {
            $("#tableofCustomization").append(`
                <tr class="th-blue-grey-lighten-2" id="rowofCustomization${++muCustomization}">
                    <td class="title">
                        <input type="text" class="d-none" value="Customization Fee" name="cost_type[]" readonly>
                        Customization Fee
                    </td>
                    <td class="mgt-td-dark-bg">
                        <input type="text"
                            class="text-center fw-bold text-dark text-center form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="cost_hour_fee[]" id="webinar_CustomizationHf${muCustomization}"
                            oninput='return this.value = this.value.replace(/[^0-9]+/g, "").replace(/\\B(?=(\\d{3})+(?!\\d))/g, ",")'> 
                    </td>
                    <td class="table-danger">
                        <fieldset>
                            <select class="input js-mytooltip  text-center form-select @error('') is-invalid @enderror" 
                                name="cost_hour_num[]" id="webinar_CustomizationNoh${muCustomization}"
                                data-mytooltip-content="<i>
                                    # of Hours<br>
                                    0 - no customization<br><br>
                                    2 - automatic when we charge customization fee<br><br></i>"
                                data-mytooltip-theme="dark" data-mytooltip-action="focus"
                                data-mytooltip-direction="right" style="background-color:#ffcccc; color:red;">
                                <option value="0" {{ old('') == '0' ? 'selected="selected"' : '' }}
                                    title=""selected>
                                    0
                                </option>
                                <option value="2" {{ old('') == '2' ? 'selected="selected"' : '' }}
                                    title="" >
                                    2
                                </option>
                            </select>
                            @error('ef_customFee')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </fieldset>
                    </td>
                    <td><input type="hidden" class="d-none" name="cost_nswh[]" readonly></td>
                    <td class="total-td" style="border-left:3px solid black">
                        <h4 class="text-center text-danger  lead" id="webinar_CustomizationsTotal${muCustomization}">-</h4>
                    </td> 
                    <td class="total-td table-warning">
                        <input  type="text" class="form-control input-table" name="cost_roster[]" id="customizations_roster${muCustomization}"
                                value="{{ old('') }}"                                     
                                oninput="filterConsultant('customizations_roster${muCustomization}');"
                                list="filtered_consultant_list" 
                                autocomplete="off" >   
                        <input  type="hidden" value="" name="cost_roster_id[]" id="id_customizations_roster${muCustomization}">
                    </td>
                    <td class="total-td">
                        <textarea type="text" class="form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}"name="cost_notes[]" id="ec_webinar_CustomizationsNotes${muCustomization}"></textarea>
                    </td>
                    <td style="background-color: #FFFFFF;" class="border border-white">
                        <a href="javascript:void(0)" class="text-danger font-18 removed" title="Remove"><i class="fa fa-trash-o"></i></a>
                    </td>
                </tr>
                    `);
                });

            $("#tableofCustomization").on("click", ".removed", function () {

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
                hf.attr("id", `webinar_CustomizationHf${dig - 1}`);
            });

            // Removing the current row.
            $(this).closest("tr").remove();
            // Decreasing total number of rows by 1.
            muCustomization--;
        });

    });

    //CREATORS FEES
    var muCreators = 1;
    $(document).ready(function () {
        $("#muaddButton5").on("click", function() {
            $("#tableofCreator").append(`
                <tr class="th-blue-grey-lighten-2" id="rowofCreator${++muCreators}">
                    <td class="title">
                        <input type="text" class="d-none" value="Creators Fees" name="cost_type[]" readonly>
                        Creators Fees (0, 500, 1K)</td>
                    <td class="table-danger">
                        <fieldset>
                            <select class="input js-mytooltip  text-center form-select @error('') is-invalid @enderror" name="cost_hour_fee[]" id="webinar_CreatorHf${muCreators}"
                                data-mytooltip-content="<i>
                                    Creators Fee - 0 - no creators fee<br><br>
                                    500 - Creators Fee is the creator is the lead, for the 2nd session onwards<br><br>
                                    1,000 - Creators Fee if creator is NOT the lead, for the 2nd session onwards</i>"
                                data-mytooltip-theme="dark" data-mytooltip-action="focus"
                                data-mytooltip-direction="right" style="background-color:#ffcccc; color:red;">
                                <option value="0" {{ old('') == '0' ? 'selected="selected"' : '' }}
                                    title=""selected>
                                    &#8369;0
                                </option>
                                <option value="500" {{ old('') == '500' ? 'selected="selected"' : '' }}
                                    title="" >
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
                    <td class="mgt-td-dark-bg">
                        <input type="text"
                            class="text-center form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="cost_hour_num[]" id="webinar_CreatorNoh${muCreators}" max="100"
                            oninput='return this.value = this.value.replace(/[^0-9.]+/g, "")'>
                    </td>
                    <td><input type="hidden" class="d-none" name="cost_nswh[]" readonly></td>
                    <td class="total-td" style="border-left:3px solid black">
                        <h4 class="text-center text-danger  lead" id="webinar_CreatorTotal${muCreators}">-</h4>
                    </td>
                    <td class="total-td">
                        <input  type="text" class="form-control input-table" name="cost_roster[]" id="creator_roster${muCreators}"
                                value="{{ old('') }}"                                     
                                oninput="filterConsultant('creator_roster${muCreators}');"
                                list="filtered_consultant_list" 
                                autocomplete="off" >   
                        <input  type="hidden" value="" name="cost_roster_id[]" id="id_creator_roster${muCreators}">
                    </td>
                    <td class="total-td">
                        <textarea type="text" class="form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}"name="cost_notes[]" id="ec_webinar_CreatorNotes${muCreators}"></textarea>
                    </td>
                    <td style="background-color: #FFFFFF;" class="border border-white">
                        <a href="javascript:void(0)" class="text-danger font-18 removed" title="Remove"><i class="fa fa-trash-o"></i></a>
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
                var noh = $(this).children(".noh").children("input");

                // Gets the row number from <tr> id.
                var dig = parseInt(id.substring(12));

                // Modifying row id.
                $(this).attr("id", `rowofCreator${dig - 1}`);

                // Modifying row index.
                noh.attr("id", `webinar_CreatorNoh${dig - 1}`);
            });

            // Removing the current row.
            $(this).closest("tr").remove();
            // Decreasing total number of rows by 1.
            muCreators--;
        });

    });


    //LEAD FACILITATOR
    var muLeadfaci = 1;
    $(document).ready(function () {
        $("#muaddButton6").on("click", function() {
            $("#tableofLeadFacilitator").append(`
                <tr class="th-blue-grey-lighten-2" id="rowofLeadFacilitator${++muLeadfaci}">
                    <td class="title">
                        <input type="text" class="d-none" value="Lead Facilitator" name="cost_type[]" readonly>
                        Lead Facilitator
                    </td>
                    <td class="mgt-td-dark-bg">
                        <input type="text"
                            class="text-center fw-bold text-center text-dark form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="cost_hour_fee[]" id="webinar_LeadfacilitatorsHf${muLeadfaci}"
                            oninput='return this.value = this.value.replace(/[^0-9]+/g, "").replace(/\\B(?=(\\d{3})+(?!\\d))/g, ",")'>
                    </td>
                    <td class="table-warning">
                        <input type="text"
                            class="text-center form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="cost_hour_num[]" id="webinar_LeadfacilitatorsNoh${muLeadfaci}"
                            oninput='return this.value = this.value.replace(/[^0-9.]+/g, "")'>
                    </td>
                    <td class="table-warning">
                        <input type="text"
                            class="text-center form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="cost_nswh[]" id="webinar_LeadfacilitatorsNwh${muLeadfaci}"
                            oninput='return this.value = this.value.replace(/[^0-9.]+/g, "")'>
                    </td>
                    <td class="total-td" style="border-left:3px solid black">
                        <h4 class="text-center text-danger  lead" id="webinar_LeadfacilitatorsTotal${muLeadfaci}">-</h4>
                    </td>
                    <td class="total-td table-warning">
                        <input  type="text" class="form-control input-table" name="cost_roster[]" id="leadfacilitator_roster${muLeadfaci}"
                                value="{{ old('') }}"                                     
                                oninput="filterConsultant('leadfacilitator_roster${muLeadfaci}','webinar_LeadfacilitatorsHf${muLeadfaci}','leadFacilitator');"
                                list="filtered_consultant_list" 
                                autocomplete="off" >   
                        <input  type="hidden" value="" name="cost_roster_id[]" id="id_leadfacilitator_roster${muLeadfaci}">
                    </td>
                    <td class="total-td">
                        <textarea type="text" class="form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}"name="cost_notes[]" id="ec_webinar_leadfacilitatorNotes${muLeadfaci}"></textarea>
                    </td>
                    <td style="background-color: #FFFFFF;" class="border border-white">
                        <a href="javascript:void(0)" class="text-danger font-18 removed" title="Remove"><i class="fa fa-trash-o"></i></a>
                    </td>
                </tr>`);
                });

            $("#tableofLeadFacilitator").on("click", ".removed", function () {

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
                noh.attr("id", `webinar_LeadfacilitatorsNoh${dig - 1}`);
                nwh.attr("id", `webinar_LeadfacilitatorsNwh${dig - 1}`);
            });

            // Removing the current row.
            $(this).closest("tr").remove();
            // Decreasing total number of rows by 1.
            muLeadfaci--;
        });

    });

    //MODERATOR
    var muModerator = 1;
    $(document).ready(function () {
        $("#muaddButton7").on("click", function() {
            $("#tableofModerator").append(`
                <tr class="th-blue-grey-lighten-2" id="rowofModerator${++muModerator}">
                <td class="title">
                        <input type="text" class="d-none" value="Moderator" name="cost_type[]" readonly>
                        Moderator (P800/P1100/P1350)
                    </td>
                    <td class="mgt-td-dark-bg">                                    
                        <input type="text"
                            class="text-center fw-bold text-center text-dark form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="cost_hour_fee[]" id="webinar_ModeratorHf${muModerator}"
                            oninput='return this.value = this.value.replace(/[^0-9]+/g, "").replace(/\\B(?=(\\d{3})+(?!\\d))/g, ",")'>
                        </fieldset>
                    </td>
                    <td class="table-warning">
                        <input type="text"
                            class="text-center  form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="cost_hour_num[]" id="webinar_ModeratorNoh${muModerator}"
                            oninput='return this.value = this.value.replace(/[^0-9.]+/g, "")'>
                    </td>
                    <td class="table-warning">
                        <input type="text"
                            class="text-center form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="cost_nswh[]" id="webinar_ModeratorNwh${muModerator}"
                            oninput='return this.value = this.value.replace(/[^0-9.]+/g, "")'>
                    </td>
                    <td class="total-td" style="border-left:3px solid black">
                        <h4 class="text-center text-danger  lead" id="webinar_ModeratorTotal${muModerator}">-</h4>
                    </td>
                    <td class="total-td table-warning">
                        <input  type="text" class="form-control input-table" name="cost_roster[]" id="moderator_roster${muModerator}"
                                value="{{ old('') }}"                                     
                                oninput="filterConsultant('moderator_roster${muModerator}','webinar_ModeratorHf${muModerator}','moderator');"
                                list="filtered_consultant_list" 
                                autocomplete="off" >
                        <input  type="hidden" value="" name="cost_roster_id[]" id="id_moderator_roster${muModerator}">
                    </td>
                    <td class="total-td">
                        <textarea type="text" class="form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}"name="cost_notes[]" id="ec_webinar_ModeratorNotes${muModerator}"></textarea>
                    </td>
                    <td style="background-color: #FFFFFF;" class="border border-white">
                        <a href="javascript:void(0)" class="text-danger font-18 removed" title="Remove"><i class="fa fa-trash-o"></i></a>
                    </td>
                </tr>`);
                });

            $("#tableofModerator").on("click", ".removed", function () {

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
                noh.attr("id", `webinar_ModeratorNoh${dig - 1}`);
                nwh.attr("id", `webinar_ModeratorNwh${dig - 1}`);
            });

            // Removing the current row.
            $(this).closest("tr").remove();
            // Decreasing total number of rows by 1.
            muModerator--;
        });

    });

    //PRODUCER
    var muProducer = 1;
    $(document).ready(function () {
        $("#muaddButton8").on("click", function() {
            $("#tableofProducer").append(`
                <tr class="th-blue-grey-lighten-2" id="rowoProducer${++muProducer}">
                    <td class="title">
                        <input type="text" class="d-none" value="Producer" name="cost_type[]" readonly>
                        Producer
                    </td>
                    <td class="mgt-td-dark-bg">
                        <input type="text"
                            class="text-center text-dark fw-bold form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="cost_hour_fee[]" id="webinar_ProducerHf${muProducer}"
                            oninput='return this.value = this.value.replace(/[^0-9]+/g, "").replace(/\\B(?=(\\d{3})+(?!\\d))/g, ",")'>
                    </td>
                    <td class="table-warning">
                        <input type="text"
                            class="text-center form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="cost_hour_num[]" id="webinar_ProducerNoh${muProducer}">
                    </td>
                    <td class="table-warning">
                        <input type="text"
                            class="text-center form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="cost_nswh[]" id="webinar_ProducerNwh${muProducer}">
                    </td>
                    <td class="total-td" style="border-left:3px solid black">
                        <h4 class="text-center text-danger  lead" id="webinar_ProducersTotal${muProducer}">-</h4>
                    </td>
                    <td class="total-td table-warning">
                    <input  type="text" class="form-control input-table" name="cost_roster[]" id="producer_roster${muProducer}"
                            value="{{ old('') }}"                                     
                            oninput="filterConsultant('producer_roster${muProducer}','webinar_ProducerHf${muProducer}','producer');"
                            list="filtered_consultant_list" 
                            autocomplete="off" >
                    <input  type="hidden" value="" name="cost_roster_id[]" id="id_producer_roster${muProducer}">
                    </td>
                    <td class="total-td">
                        <textarea type="text" class="form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}"name="cost_notes[]" id="ec_webinar_ProducersNotes${muProducer}"></textarea>
                    </td>
                    <td style="background-color: #FFFFFF;" class="border border-white">
                        <a href="javascript:void(0)" class="text-danger font-18 removed" title="Remove"><i class="fa fa-trash-o"></i></a>
                    </td>
                </tr>`);
            });

            $("#tableofProducer").on("click", ".removed", function () {

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
                noh.attr("id", `webinar_ProducerNoh${dig - 1}`);
                nwh.attr("id", `webinar_ProducerNwh${dig - 1}`);
            });

            // Removing the current row.
            $(this).closest("tr").remove();
            // Decreasing total number of rows by 1.
            muProducer--;
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
                        <input type="text" class="d-none" value="Off-Program Fee" name="cost_type[]" readonly>
                        Off-Program Fee
                    </td>
                    <td class="table-warning">
                        <input type="text"
                            class="text-center text-dark fw-bold form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="cost_hour_fee[]" id="webinar_OffprogramsHf${ecOffProgram}" 
                            oninput='return this.value = this.value.replace(/[^0-9]+/g, "").replace(/\\B(?=(\\d{3})+(?!\\d))/g, ",")'>
                    </td>
                    <td class="bg-white">
                    <input type="text"
                            class="text-center form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}" name="cost_hour_num[]" id="webinar_OffprogramsNoh${ecOffProgram}"
                            oninput='return this.value = this.value.replace(/[^0-9]+/g, "").replace(/\\B(?=(\\d{3})+(?!\\d))/g, ",")'>
                    </td>
                    <td><input type="hidden" class="d-none" name="cost_nswh[]" readonly></td>
                    <td class="total-td" style="background-color: rgba(146, 146, 146, 0.727">
                        <h4 class="text-center text-danger " id="webinar_OffprogramsTotal${ecOffProgram}">-</h4>
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
                    <td class="total-td">
                        <textarea type="text" class="form-control input-table @error('') is-invalid @enderror"
                            value="{{ old('') }}"name="cost_notes[]" id="ec_webinar_OffprogramsNotes${ecOffProgram}"></textarea>
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