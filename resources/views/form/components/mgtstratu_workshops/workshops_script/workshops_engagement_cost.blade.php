<script>

    //SALES
    var musaleNum = 1;
    $(document).ready(function() {
        $("#muaddButton").on("click", function() {
            $("#tableofSale").append(
                `<tr class="th-blue-grey-lighten-2" id="rowofSale${++musaleNum}">
                            <td class="title">Sales (4% / 5% / 6% / 7%)</td>
                            <td>
                                <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="" id="inputforSale"
                                onblur="this.value = this.value.replace('%', '') + '%';"
                                oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
                            </td>
                            <td></td>
                            <td></td>
                            <td class="total-td tbl-engmt-cost" style="border-left:3px solid black">
                                <h4 class="text-center" id="workshop_saleTotal">-</h4>
                            </td>
                            <td class="total-td">
                                <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                    value="{{ old('') }}" name="" id="">
                            </td>
                            <td><a href="javascript:void(0)" class="text-danger font-18 remove" title="Remove"><i class="fa fa-trash-o"></i></a></td>
                </tr>`);

            const musaleId = document.querySelectorAll("#workshop_sale");
            for (let i = 0; i < musaleId.length; i++) {
                musaleId[i].value = "0";
            }

            if (musaleNum > 1) {
                document.getElementById("dropdownforSale").style.display =
                    "none";
                document.getElementById("inputforSale").style.display =
                    "";
                document.getElementById("inputforSale").disabled =
                    false;

            }
        });

        $("#tableofSale").on("click", ".remove", function() {
            var child = $(this).closest("tr").nextAll();

            $(this).closest("tr").remove();

            musaleNum--;
            if (musaleNum == 1) {
                document.getElementById("inputforSale").style.display = "none";
                document.getElementById("workshop_sale").value = "0";
                document.getElementById("dropdownforSale").style.display = "";
                document.getElementById("inputforSale").value = "";
            }

        });

    });

    //REFERRALS
    var mureferralsNum = 1;
    $(document).ready(function() {
        $("#muaddButton2").on("click", function() {
            $("#tableofReferrals").append(
                `<tr class="th-blue-grey-lighten-2" id="rowofReferrals${++mureferralsNum}">
                            <td class="title">Referral (2% / 3% / 10%)</td>
                            <td>
                                <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="" id="inputforReferrals"
                                onblur="this.value = this.value.replace('%', '') + '%';"
                                oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
                            </td>
                            <td></td>
                            <td></td>
                            <td class="total-td tbl-engmt-cost" style="border-left:3px solid black">
                                <h4 class="text-center" id="workshop_referralsTotal">-</h4>
                            </td>
                            <td class="total-td">
                                <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                    value="{{ old('') }}" name="" id="">
                            </td>
                            <td><a href="javascript:void(0)" class="text-danger font-18 remove" title="Remove"><i class="fa fa-trash-o"></i></a></td>
                </tr>`);

            const mureferralsId = document.querySelectorAll("#workshop_referrals");
            for (let i = 0; i < mureferralsId.length; i++) {
                mureferralsId[i].value = "0";
            }

            if (mureferralsNum > 1) {
                document.getElementById("dropdownforReferrals").style.display =
                    "none";
                document.getElementById("inputforReferrals").style.display =
                    "";
                document.getElementById("inputforReferrals").disabled =
                    false;

            }
        });

        $("#tableofReferrals").on("click", ".remove", function() {
            var child = $(this).closest("tr").nextAll();

            $(this).closest("tr").remove();

            mureferralsNum--;
            if (mureferralsNum == 1) {
                document.getElementById("inputforReferrals").style.display = "none";
                document.getElementById("workshop_referrals").value = "0";
                document.getElementById("dropdownforReferrals").style.display = "";
                document.getElementById("inputforReferrals").value = "";
            }

        });

    });

    //ENGAGEMENT MANAGER
    var muengagementNum = 1;
    $(document).ready(function() {
        $("#muaddButton3").on("click", function() {
            $("#tableofEngagementManager").append(
                `<tr class="th-blue-grey-lighten" id="rowofEngagementManager${++muengagementNum}">
                            <td class="title fw-bold text-dark">ENGAGEMENT MANAGER(4%)</td>
                            <td>
                                <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                value="{{ old('') }}" name="" id="inputforEngagementManager"
                                onblur="this.value = this.value.replace('%', '') + '%';"
                                oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
                            </td>
                            <td></td>
                            <td></td>
                            <td class="total-td tbl-engmt-cost" style="border-left:3px solid black">
                                <h4 class="text-center" id="workshop_engagementManagerTotal">-</h4>
                            </td>
                            <td class="total-td">
                                <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                    value="{{ old('') }}" name="" id="">
                            </td>
                            <td><a href="javascript:void(0)" class="text-danger font-18 remove" title="Remove"><i class="fa fa-trash-o"></i></a></td>
                </tr>`);

            const muengagementId = document.querySelectorAll("#workshop_engagementManager");
            for (let i = 0; i < muengagementId.length; i++) {
                muengagementId[i].value = "0";
            }

            if (muengagementNum > 1) {
                document.getElementById("dropdownforEngagementManager").style.display =
                    "none";
                document.getElementById("inputforEngagementManager").style.display =
                    "";
                document.getElementById("inputforEngagementManager").disabled =
                    false;

            }
        });

        $("#tableofEngagementManager").on("click", ".remove", function() {
            var child = $(this).closest("tr").nextAll();

            $(this).closest("tr").remove();

            muengagementNum--;
            if (muengagementNum == 1) {
                document.getElementById("inputforEngagementManager").style.display = "none";
                document.getElementById("workshop_engagementManager").value = "0";
                document.getElementById("dropdownforEngagementManager").style.display = "";
                document.getElementById("inputforEngagementManager").value = "";
            }

        });

    });

    //CUSTOMIZATION FEE
    var muCustomization = 1;
    $(document).ready(function () {
        $("#muaddButton4").on("click", function() {
            $("#tableofCustomization").append(`
                <tr class="th-blue-grey-lighten-2" id="rowofCustomization${++muCustomization}">
                    <td class="title">Customization Fee</td>
                                <td class="hf">
                                    <input type="number"
                                        class="text-center fw-bold text-dark text-center form-control input-table @error('') is-invalid @enderror"
                                        value="{{ old('') }}" name="" id="workshop_CustomizationHf" max="100">
                                </td>
                                <td class="">
                                    <fieldset>
                                        <select class="input js-mytooltip  text-center form-select @error('') is-invalid @enderror" name="" id="workshop_CustomizationNoh"
                                            data-mytooltip-content="<i>
                                                # of Hours<br>
                                                0 - no customization<br><br>
                                                2 - automatic when we charge customization fee<br><br></i>"
                                            data-mytooltip-theme="dark" data-mytooltip-action="focus"
                                            data-mytooltip-direction="right" style="background-color:#ffcccc; color:red;">
                                            <option value="0" {{ old('') == '0' ? 'selected="selected"' : '' }}
                                                title="">
                                                0
                                            </option>
                                            <option value="2" {{ old('') == '2' ? 'selected="selected"' : '' }}
                                                title="">
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
                                <td class="">
                                    <!--<input type="number"
                                        class="text-center form-control input-table @error('') is-invalid @enderror"
                                        value="{{ old('') }}" name="" id="workshop_CustomizationNwh1" readonly>-->
                                </td>
                                <td class="total-td" style="border-left:3px solid black">
                                    <h4 class="text-center lead" id="workshop_CustomizationsTotal">-</h4>
                                </td>
                                <td class="total-td">
                                    <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                        value="{{ old('') }}" name="" id="">
                                </td>
                            <td>
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
                hf.attr("id", `workshop_CustomizationHf${dig - 1}`);
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
                            <td class="title">Creators Fees (0, 500, 1K)</td>
                            <td class="hf">
                                <fieldset>
                                    <select class="input js-mytooltip  text-center form-select @error('') is-invalid @enderror" name="" id="workshop_CreatorHf"
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
                            <td class="noh">
                                <input type="number"
                                    class="text-center form-control input-table @error('') is-invalid @enderror"
                                    value="{{ old('') }}" name="" id="workshop_CreatorNoh" max="100"
                                    >
                            </td>
                            <td class=""></td>
                            <td class="total-td" style="border-left:3px solid black">
                                <h4 class="text-center lead" id="workshop_CreatorTotal">-</h4>
                            </td>
                            <td class="total-td">
                                <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                    value="{{ old('') }}" name="" id="">
                            </td>
                            </td>
                            <td>
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
                noh.attr("id", `workshop_CreatorNoh${dig - 1}`);
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
                                <td class="title">Lead Facilitator</td>
                                <td class="hf">
                                    <input type="number"
                                        class="text-center fw-bold text-center text-dark form-control input-table @error('') is-invalid @enderror"
                                        value="{{ old('') }}" name="" id="workshop_LeadfacilitatorsHf">
                                </td>
                                <td class="noh">
                                    <input type="number"
                                        class="text-center form-control input-table @error('') is-invalid @enderror"
                                        value="{{ old('') }}" name="" id="workshop_LeadfacilitatorsNoh">
                                </td>
                                <td class="nwh">
                                    <input type="number"
                                        class="text-center form-control input-table @error('') is-invalid @enderror"
                                        value="{{ old('') }}" name="" id="workshop_LeadfacilitatorsNwh">
                                </td>
                                <td class="total-td" style="border-left:3px solid black">
                                    <h4 class="text-center lead" id="workshop_LeadfacilitatorsTotal">-</h4>
                                </td>
                                <td class="total-td">
                                    <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                        value="{{ old('') }}" name="" id="">
                                </td>
                            <td>
                            <a href="javascript:void(0)" class="text-danger font-18 removed" title="Remove"><i class="fa fa-trash-o"></i></a>
                            </td>
                        </tr>
                    `);
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
                noh.attr("id", `workshop_LeadfacilitatorsNoh${dig - 1}`);
                nwh.attr("id", `workshop_LeadfacilitatorsNwh${dig - 1}`);
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
                        <td class="title">Moderator (P800/P1100/P1350)</td>
                                <td>
                                    <fieldset>
                                        <select class="input js-mytooltip text-center form-select @error('') is-invalid @enderror select" name=""
                                            id="workshop_ModeratorHf" style="background-color:#ffcccc; color:red;"
                                            data-mytooltip-content="<i>
                                                <b>Moderator</b><br/>
                                                P800 - Associates<br/>
                                                P1,100 - Consultants<br/>
                                                P1,350 - Senior Consultant</i>"
                                        data-mytooltip-theme="dark" data-mytooltip-action="focus"
                                        data-mytooltip-direction="right">
                                        <option value="800" {{ old('') == '800' ? 'selected="selected"' : '' }}
                                            title="">
                                            &#8369;800
                                        </option>
                                        <option value="1100" {{ old('') == '1100' ? 'selected="selected"' : '' }}
                                            title="">
                                            &#8369;1,100
                                        </option>
                                        <option value="1350" {{ old('') == '1350' ? 'selected="selected"' : '' }}
                                            title="">
                                            &#8369;1,350
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
                                        class="text-center  form-control input-table @error('') is-invalid @enderror"
                                        value="{{ old('') }}" name="" id="workshop_ModeratorNoh${muModerator}">
                                </td>
                                <td class="nwh">
                                    <input type="number"
                                        class="text-center form-control input-table @error('') is-invalid @enderror"
                                        value="{{ old('') }}" name="" id="workshop_ModeratorNwh${muModerator}">
                                </td>
                                <td class="total-td" style="border-left:3px solid black">
                                    <h4 class="text-center lead" id="workshop_ModeratorTotal">-</h4>
                                </td>
                                <td class="total-td">
                                    <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                        value="{{ old('') }}" name="" id="">
                                </td>
                                <td>
                                <a href="javascript:void(0)" class="text-danger font-18 removed" title="Remove"><i class="fa fa-trash-o"></i></a>
                                </td>
                        </tr>
                    `);
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
                noh.attr("id", `workshop_ModeratorNoh${dig - 1}`);
                nwh.attr("id", `workshop_ModeratorNwh${dig - 1}`);
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
                        <td class="title">Producer</td>
                                <td>
                                    <input type="text"
                                        class="text-center text-dark fw-bold form-control input-table @error('') is-invalid @enderror"
                                        value="{{ old('') }}" name="" id="workshop_ProducerHf">
                                </td>
                                <td>
                                    <input type="number"
                                        class="text-center form-control input-table @error('') is-invalid @enderror"
                                        value="{{ old('') }}" name="" id="workshop_ProducerNoh${muProducer}">
                                </td>
                                <td>
                                    <input type="number"
                                        class="text-center form-control input-table @error('') is-invalid @enderror"
                                        value="{{ old('') }}" name="" id="workshop_ProducerNwh${muProducer}">
                                </td>
                                <td class="total-td" style="border-left:3px solid black">
                                    <h4 class="text-center lead" id="workshop_ProducersTotal">-</h4>
                                </td>
                                <td class="total-td">
                                    <input type="text" class="form-control input-table @error('') is-invalid @enderror"
                                        value="{{ old('') }}" name="" id="">
                                </td>
                                <td>
                                <a href="javascript:void(0)" class="text-danger font-18 removed" title="Remove"><i class="fa fa-trash-o"></i></a>
                                </td>
                        </tr>
                    `);
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
                noh.attr("id", `workshop_ProducerNoh${dig - 1}`);
                nwh.attr("id", `workshop_ProducerNwh${dig - 1}`);
            });

            // Removing the current row.
            $(this).closest("tr").remove();
            // Decreasing total number of rows by 1.
            muProducer--;
        });

    });

</script>
