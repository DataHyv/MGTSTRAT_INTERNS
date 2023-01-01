require("./components/clusterReference");
require("./components/currencyFormat");

/*************************************** CUSTOMIZED ENGAGEMENT SUB BUDGET FORM COMPUTATION ********************************************************/
$(document).ready( function () {
    $('#ec_tableEngagementFees1 input').attr('readonly','readonly');
    $('#ec_tableEngagementFees1 select').attr('disabled','disabled');
    $('#ec_tableEngagementFees1 textarea').attr('readonly','readonly');
    //customized type
    $(".customized-type").each(function () {
        var gaPercentage = $(".customized-type");
        if (gaPercentage.val() == "G.A Hybrid" || gaPercentage.val() == "G.A Virtual") {
            document.getElementById("dropdown-ga").style.visibility = "";
        } else {
            document.getElementById("dropdown-ga").style.visibility = "hidden"
            $("#ga-only-dropdown").val('0')
        }
    });

    /********************************************************AUTO SUM***************************************************************************/
    //currency format
    let currency = Intl.NumberFormat("en-US");
    // $(".commanumber").each(function () {
    //     $(this).val(currency.format($(this).val()));
    // });

    //total package
    sum = 0;

    //consulting
    sum13 = 0;
    sum14 = 0;

    //design
    sum18 = 0;

    //program
    sum21 = 0;
    sum22 = 0;
    sum23 = 0;
    sum24 = 0;

    //other tools
    sum28 = 0;

    //discounts if given
    sum32 = 0;

    // engagment cost total
    sumEngagementCost = 0;
    sumSales = 0;
    sumReferral = 0;
    sumEngagementManager = 0;
    sumecLeadconsultant = 0;
    sumecAnalyst = 0;
    sumecDesigner = 0;
    sumecCreators = 0;
    sumecLeadfacilitator = 0;
    sumecCofacilitator = 0;
    sumecModerator = 0;
    sumecProducer = 0;
    sumecDocumentor = 0;
    sumecOffprogram = 0;
    sumecProgramexpense = 0;

    //customized type
    var gaPercentage = $(".customized-type");
    rowIdx = 0;
    leadConsultant = 0;
    efAnalyst = 0;
    ecAnalyst = 0;
    efDesigner = 0;
    ecDesigner = 0;
    efLeadfaci = 0;
    ecLeadfaci = 0;
    efCofaci = 0;
    ecCofaci = 0;
    efModerator = 0;
    ecModerator = 0;

    /*******************************************************CONSULTING*********************************************************************/
    //Lead consultant
    efConsultingSum = 0;
    ecConsultingSum = 0;
    nswh = $("#nswh").val();

    $("#tableLeadconsultant > tr").each(function () {

        rowIdx++;
        // leadConsultant++;

        sum13 =
            $(this).find(`#ef_LeadconsultantNoc${rowIdx}`).val().replace(/,/g, "") *
                +$(this).find("#ef_LeadconsultantHf").val().replace(/\₱|,/g, "") *
                $(this).find(`#ef_LeadconsultantNoh${rowIdx}`).val().replace(/,/g, "") +
            $(this).find(`#ef_LeadconsultantNwh${rowIdx}`).val().replace(/,/g, "") *
                ($(this).find(`#ef_LeadconsultantNoc${rowIdx}`).val().replace(/,/g, "") *
                    +$(this).find("#ef_LeadconsultantHf").val().replace(/\₱|,/g, "") *
                    $(this).find(`#ef_LeadconsultantNoh${rowIdx}`).val().replace(/,/g, "") *
                    $("#nswh").val())

        // if the customized type is G.A Hybrid or G.A Virtual is
        // selected the percent of customized type will execute
        if (
            gaPercentage.val() == "G.A Hybrid" ||
            gaPercentage.val() == "G.A Virtual"
        ) {
            sum13 +=
                sum13 *
                (document.getElementById("ga-only-dropdown").value / 100);
        }

        //lead consultant engagement fees sum
        $(this)
            .find("#leadTotal")
            .html(currency.format(Math.ceil(sum13)));

        //Assign the value of lead consultant to the sum of engagement fees
        efConsultingSum += +sum13;
        sum += +sum13;
    });

    $("#ec_tableLeadConsultant > tr").each(function () {
        leadConsultant++;
        // $("#ec_LeadconsultantNoc1").val($("#ef_LeadconsultantNoc1").val());
        // $("#ec_LeadconsultantNoh1").val($("#ef_LeadconsultantNoh1").val());
        // $("#ec_LeadconsultantNwh1").val($("#ef_LeadconsultantNwh1").val());
        // document.getElementById("ec_LeadconsultantNoc1").defaultValue = $("#ef_LeadconsultantNoc1").val();
        // document.getElementById("ec_LeadconsultantNoh1").defaultValue = $("#ef_LeadconsultantNoh1").val();
        // document.getElementById("ec_LeadconsultantNwh1").defaultValue = $("#ef_LeadconsultantNwh1").val();
        //lead consultant engagement cost sum
        sumecLeadconsultant =
            $(this)
                .find(`#ec_LeadconsultantNoc${leadConsultant}`)
                .val().replace(/,/g, "") *
                +$(this)
                    .find(`#ec_LeadconsultantHf${leadConsultant}`)
                    .val().replace(/,/g, "") *
                $(this)
                    .find(`#ec_LeadconsultantNoh${leadConsultant}`)
                    .val().replace(/,/g, "") +
                $(this)
                    .find(`#ec_LeadconsultantNwh${leadConsultant}`)
                    .val().replace(/,/g, "") *
                    ($(this)
                        .find(`#ec_LeadconsultantNoc${leadConsultant}`)
                        .val().replace(/,/g, "") *
                        +$(this)
                            .find(`#ec_LeadconsultantHf${leadConsultant}`)
                            .val().replace(/,/g, "") *
                        $(this)
                            .find(`#ec_LeadconsultantNoh${leadConsultant}`)
                            .val().replace(/,/g, "") *
                        0.2);

        // if the customized type is G.A Hybrid or G.A Virtual is
        // selected it will add 10 percent to lead consultant engagement fees
        if (
            gaPercentage.val() == "G.A Hybrid" ||
            gaPercentage.val() == "G.A Virtual"
        ) {
            sumecLeadconsultant += sumecLeadconsultant * (10 / 100);
        }

        $(this)
            .find("#ec_LeadconsultantTotal")
            .html(currency.format(Math.ceil(sumecLeadconsultant)));

        //Assign the value of lead consultant to the sum of engagement cost
        // sumecLeadconsultant += sumecLeadconsultant;
        ecConsultingSum += +sumecLeadconsultant;
        sumEngagementCost += +sumecLeadconsultant;
    });

    //Analyst
    $("#tableAnalyst > tr").each(function () {
        efAnalyst++;
        //analyst engagement fees auto sum
        sum14 =
            $(this).find(`#ef_AnalystNoc${efAnalyst}`).val().replace(/,/g, "") *
                +$(this).find("#ef_AnalystHf").val().replace(/\₱|,/g, "") *
                $(this).find(`#ef_AnalystNoh${efAnalyst}`).val().replace(/,/g, "") +
            $(this).find(`#ef_AnalystNwh${efAnalyst}`).val().replace(/,/g, "") *
                ($(this).find(`#ef_AnalystNoc${efAnalyst}`).val().replace(/,/g, "") *
                    +$(this)
                        .find("#ef_AnalystHf")
                        .val()
                        .replace(/\₱|,/g, "") *
                    $(this).find(`#ef_AnalystNoh${efAnalyst}`).val().replace(/,/g, "") *
                    $("#nswh").val());

        //if the customized type value is G.A then it will add percentage
        //to engagement fees analyst subtotal
        if (
            gaPercentage.val() == "G.A Hybrid" ||
            gaPercentage.val() == "G.A Virtual"
        ) {
            sum14 +=
                sum14 *
                (document.getElementById("ga-only-dropdown").value / 100);
        }

        //lead consultant engagement fees sum
        $(this)
            .find("#analyst-total")
            .html(currency.format(Math.ceil(sum14)));

        //adding the subtotal of analyst into sum the sum of engagement fees
        efConsultingSum += +sum14;
        sum += +sum14;
    });

    $("#ec_tableAnalyst > tr").each(function () {
        ecAnalyst++;

        // Getting the value of engagement fees of analyst to pass the value
        // into the engagement cost analyst
        // $("#ec_AnalystNoc1").val($("#ef_AnalystNoc1").val());
        // $("#ec_AnalystNoh1").val($("#ef_AnalystNoh1").val());
        // $("#ec_AnalystNwh1").val($("#ef_AnalystNwh1").val());
        // document.getElementById("ec_AnalystNoc1").defaultValue = $("#ef_AnalystNoc1").val();
        // document.getElementById("ec_AnalystNoh1").defaultValue = $("#ef_AnalystNoh1").val();
        // document.getElementById("ec_AnalystNwh1").defaultValue = $("#ef_AnalystNwh1").val();

        //analyst engagement cost auto sum
        sumecAnalyst =
            $(`#ec_AnalystNoc${ecAnalyst}`).val().replace(/,/g, "") *
                $(`#ec_AnalystHf${ecAnalyst}`).val().replace(/,/g, "") *
                $(`#ec_AnalystNoh${ecAnalyst}`).val().replace(/,/g, "") +
            $(`#ec_AnalystNwh${ecAnalyst}`).val().replace(/,/g, "") *
                ($(`#ec_AnalystNoc${ecAnalyst}`).val().replace(/,/g, "") *
                    $(`#ec_AnalystHf${ecAnalyst}`).val().replace(/,/g, "") *
                    $(`#ec_AnalystNoh${ecAnalyst}`).val().replace(/,/g, "") *
                    0.2);

        //if the customized type value is G.A
        if (
            gaPercentage.val() == "G.A Hybrid" ||
            gaPercentage.val() == "G.A Virtual"
        ) {
            sumecAnalyst +=
                sumecAnalyst *
                (document.getElementById("ga-only-dropdown").value / 100);
        }

        //lead consultant engagement fees sum
        $(this)
        .find("#ec_AnalystTotal")
        .html(currency.format(Math.ceil(sumecAnalyst)));

        //adding the subtotal of analyst into sum the sum of engagement cost
        ecConsultingSum += +sumecAnalyst;
        sumEngagementCost += +sumecAnalyst;
    });

    //Subtotal
    $("#subtotal-consulting").html(currency.format(Math.ceil(efConsultingSum)));
    $("#ec_SubtotalConsulting").html(currency.format(Math.ceil(ecConsultingSum))
    );

    /*******************************************************DESIGN*********************************************************************/
    efDesignSum = 0;
    ecDesignSum = 0;
    $("#tableDesigner > tr").each(function () {
        efDesigner++;

        sum18 =
            $(this).find(`#ef_DesignerNoc${efDesigner}`).val().replace(/,/g, "") *
                +$(this).find("#ef_DesignerHf").val().replace(/\₱|,/g, "") *
                $(this).find(`#ef_DesignerNoh${efDesigner}`).val().replace(/,/g, "") +
            $(this).find(`#ef_DesignerNwh${efDesigner}`).val().replace(/,/g, "") *
                ($(this).find(`#ef_DesignerNoc${efDesigner}`).val().replace(/,/g, "") *
                    +$(this).find("#ef_DesignerHf").val().replace(/\₱|,/g, "") *
                    $(this).find(`#ef_DesignerNoh${efDesigner}`).val().replace(/,/g, "") *
                    $("#nswh").val());

        if (
            gaPercentage.val() == "G.A Hybrid" ||
            gaPercentage.val() == "G.A Virtual"
        ) {
            sum18 +=
                sum18 *
                (document.getElementById("ga-only-dropdown").value / 100);
        }

        //lead consultant engagement fees sum
        $(this).find("#subtotal-design").html(currency.format(Math.ceil(sum18)));

        efDesignSum += +sum18;
        sum += +sum18;
    });

    $("#ec_TableDesigner > tr").each(function () {
        ecDesigner++;

        // Getting the value of engagement fees of designer to pass the value
        // into the engagement cost designer
        // $("#ec_DesignerNoc1").val($("#ef_DesignerNoc1").val());
        // $("#ec_DesignerNoh1").val($("#ef_DesignerNoh1").val());
        // $("#ec_DesignerNwh1").val($("#ef_DesignerNwh1").val());
        // document.getElementById("ec_DesignerNoc1").defaultValue = $("#ef_DesignerNoc1").val();
        // document.getElementById("ec_DesignerNoh1").defaultValue = $("#ef_DesignerNoh1").val();
        // document.getElementById("ec_DesignerNwh1").defaultValue = $("#ef_DesignerNwh1").val();

        //designer engagement cost auto sum
        sumecDesigner =
            $(this).find(`#ec_DesignerNoc${ecDesigner}`).val().replace(/,/g, "") *
                +$(this).find(`#ec_DesignerHf${ecDesigner}`).val().replace(/,/g, "") *
                $(this).find(`#ec_DesignerNoh${ecDesigner}`).val().replace(/,/g, "") +
            $(this).find(`#ec_DesignerNwh${ecDesigner}`).val().replace(/,/g, "") *
                ($(this).find(`#ec_DesignerNoc${ecDesigner}`).val().replace(/,/g, "") *
                    +$(this).find(`#ec_DesignerHf${ecDesigner}`).val().replace(/,/g, "") *
                    $(this).find(`#ec_DesignerNoh${ecDesigner}`).val().replace(/,/g, "") *
                    0.2);

        //if the customized type value is G.A
        if (
            gaPercentage.val() == "G.A Hybrid" ||
            gaPercentage.val() == "G.A Virtual"
        ) {
            sumecDesigner +=
                sumecDesigner *
                (document.getElementById("ga-only-dropdown").value / 100);
        }

        //Engagement Cost in Designer Sum
        $(this).find("#ec_DesignerTotal").html(currency.format(Math.ceil(sumecDesigner)));

        //adding the subtotal of analyst into sum the sum of engagement cost
        ecDesignSum += +sumecDesigner;
        sumEngagementCost += +sumecDesigner;
    });

    //Engagement cost Creators
    ecCreators = 0;
    $("#ec_TableCreators > tr").each(function () {
        ecCreators++;

        sumecCreators =
            $(this).find(`#ec_CreatorsHf`).val().replace(/,/g, "") *
            $(this).find(`#ec_CreatorsNoh${ecCreators}`).val().replace(/,/g, "");

        $(this).find("#ec_CreatorsTotal").html(currency.format(Math.ceil(sumecCreators)));

        ecDesignSum += +sumecCreators;
        sumEngagementCost += +sumecCreators;
    });
    $("#ec_DesignSubtotal").html(currency.format(Math.ceil(ecDesignSum))
    );

    /*******************************************************PROGRAM*********************************************************************/
    efProgramSum = 0;
    ecProgramSum = 0;
    //Lead Facilitator
    $("#tableLeadfaci > tr").each(function () {
        efLeadfaci++;
        sum21 =
            $(this).find(`#ef_LeadfacilitatorNoc${efLeadfaci}`).val().replace(/,/g, "") *
                +$(this).find(`#ef_LeadfacilitatorHf${efLeadfaci}`).val().replace(/\₱|,/g, "") *
                $(this).find(`#ef_LeadfacilitatorNoh${efLeadfaci}`).val().replace(/,/g, "") +
            $(this).find(`#ef_LeadfacilitatorNwh${efLeadfaci}`).val().replace(/,/g, "") *
                ($(this).find(`#ef_LeadfacilitatorNoc${efLeadfaci}`).val().replace(/,/g, "") *
                    +$(this).find(`#ef_LeadfacilitatorHf${efLeadfaci}`).val().replace(/\₱|,/g, "") *
                    $(this).find(`#ef_LeadfacilitatorNoh${efLeadfaci}`).val().replace(/,/g, "") *
                    $("#nswh").val()) ||
            $(this).find(`#ef_LeadfacilitatorNoc${efLeadfaci}`).val().replace(/,/g, "") *
                +$(this).find(`#ef_InputLeadFaciHf${efLeadfaci}`).val().replace(/\₱|,/g, "") *
                $(this).find(`#ef_LeadfacilitatorNoh${efLeadfaci}`).val().replace(/,/g, "") +
            $(this).find(`#ef_LeadfacilitatorNwh${efLeadfaci}`).val().replace(/,/g, "") *
                ($(this).find(`#ef_LeadfacilitatorNoc${efLeadfaci}`).val().replace(/,/g, "") *
                    +$(this).find(`#ef_InputLeadFaciHf${efLeadfaci}`).val().replace(/\₱|,/g, "") *
                    $(this).find(`#ef_LeadfacilitatorNoh${efLeadfaci}`).val().replace(/,/g, "") *
                    $("#nswh").val());

        if (
            gaPercentage.val() == "G.A Hybrid" ||
            gaPercentage.val() == "G.A Virtual"
        ) {
            sum21 +=
                sum21 *
                (document.getElementById("ga-only-dropdown").value / 100);
        }

        //lead consultant engagement fees sum
        $(this)
            .find("#subtotal-lead")
            .html(currency.format(Math.ceil(sum21)));

        $("#total-standard").html(currency.format(Math.ceil(sum21)));

        sum += +sum21;
        efProgramSum += +sum21;
    });

    $("#ec_TableLeadfaci > tr").each(function (){
        // Getting the value of engagement fees of program to pass the value
        // into the engagement cost program
        // $("#ec_LeadfacilitatorNoc1").val($("#ef_LeadfacilitatorNoc1").val());
        // $("#ec_LeadfacilitatorNoh1").val($("#ef_LeadfacilitatorNoh1").val());
        // $("#ec_LeadfacilitatorNwh1").val($("#ef_LeadfacilitatorNwh1").val());
        // document.getElementById("ec_LeadfacilitatorNoc1").defaultValue = $("#ef_LeadfacilitatorNoc1").val();
        // document.getElementById("ec_LeadfacilitatorNoh1").defaultValue = $("#ef_LeadfacilitatorNoh1").val();
        // document.getElementById("ec_LeadfacilitatorNwh1").defaultValue = $("#ef_LeadfacilitatorNwh1").val();

        ecLeadfaci++;
        //program engagement cost auto sum
        sumecLeadfacilitator =
            $(this).find(`#ec_LeadfacilitatorNoc${ecLeadfaci}`).val().replace(/,/g, "") *
                $(this).find(`#ec_LeadfacilitatorHf${ecLeadfaci}`).val().replace(/\₱|,/g, "") *
                $(this).find(`#ec_LeadfacilitatorNoh${ecLeadfaci}`).val().replace(/,/g, "") +
            $(this).find(`#ec_LeadfacilitatorNwh${ecLeadfaci}`).val().replace(/,/g, "") *
                ($(this).find(`#ec_LeadfacilitatorNoc${ecLeadfaci}`).val().replace(/,/g, "") *
                    $(this).find(`#ec_LeadfacilitatorHf${ecLeadfaci}`).val().replace(/\₱|,/g, "") *
                    $(this).find(`#ec_LeadfacilitatorNoh${ecLeadfaci}`).val().replace(/,/g, "") *
                    $("#nswh").val());

        //if the customized type value is G.A
        if (
            gaPercentage.val() == "G.A Hybrid" ||
            gaPercentage.val() == "G.A Virtual"
        ) {
            sumecLeadfacilitator +=
                sumecLeadfacilitator *
                (document.getElementById("ga-only-dropdown").value / 100);
        }

        $(this).find("#ec_LeadfacilitatorTotal")
        .html(currency.format(Math.ceil(sumecLeadfacilitator)));

        //sum of engagement cost program sum
        ecProgramSum += sumecLeadfacilitator;
        //adding the subtotal of analyst into sum the sum of engagement cost
        sumEngagementCost += +sumecLeadfacilitator;
    });

    //CO-LEAD FACILITATOR
    sumecCoLeadfacilitator = 0;
    ecCoLead = 0;
    $("#ec_TableCoLeadfaci > tr").each(function (){
        ecCoLead++;

        //program engagement cost auto sum
        sumecCoLeadfacilitator =
            $(this).find(`#ec_CoLeadfacilitatorNoc${ecCoLead}`).val().replace(/,/g, "") *
                $(this).find(`#ec_CoLeadfacilitatorHf${ecCoLead}`).val().replace(/,/g, "") *
                $(this).find(`#ec_CoLeadfacilitatorNoh${ecCoLead}`).val().replace(/,/g, "") +
            $(this).find(`#ec_CoLeadfacilitatorNwh${ecCoLead}`).val().replace(/,/g, "") *
                ($(this).find(`#ec_CoLeadfacilitatorNoc${ecCoLead}`).val().replace(/,/g, "") *
                    $(this).find(`#ec_CoLeadfacilitatorHf${ecCoLead}`).val().replace(/,/g, "") *
                    $(this).find(`#ec_CoLeadfacilitatorNoh${ecCoLead}`).val().replace(/,/g, "") *
                    $("#nswh").val());

        //if the customized type value is G.A
        if (
            gaPercentage.val() == "G.A Hybrid" ||
            gaPercentage.val() == "G.A Virtual"
        ) {
            sumecCoLeadfacilitator +=
                sumecCoLeadfacilitator *
                (document.getElementById("ga-only-dropdown").value / 100);
        }

        $(this).find("#ec_CoLeadfacilitatorTotal")
        .html(currency.format(Math.ceil(sumecCoLeadfacilitator)));

        //sum of engagement cost program sum
        ecProgramSum += sumecCoLeadfacilitator;
        //adding the subtotal of analyst into sum the sum of engagement cost
        sumEngagementCost += +sumecCoLeadfacilitator;
    });

    sumecAlCoach = 0;
    ecAlCoach = 0;
    $("#ec_TableAlCoach > tr").each(function (){
        ecAlCoach++;

        //program engagement cost auto sum
        sumecAlCoach =
            $(this).find(`#ec_AlCoachNoc${ecAlCoach}`).val().replace(/,/g, "") *
                $(this).find(`#ec_AlCoachHf${ecAlCoach}`).val().replace(/\₱|,/g, "") *
                $(this).find(`#ec_AlCoachNoh${ecAlCoach}`).val().replace(/,/g, "") +
            $(this).find(`#ec_AlCoachNwh${ecAlCoach}`).val().replace(/,/g, "") *
                ($(this).find(`#ec_AlCoachNoc${ecAlCoach}`).val().replace(/,/g, "") *
                    $(this).find(`#ec_AlCoachHf${ecAlCoach}`).val().replace(/\₱|,/g, "") *
                    $(this).find(`#ec_AlCoachNoh${ecAlCoach}`).val().replace(/,/g, "") *
                    $("#nswh").val());

        //if the customized type value is G.A
        if (
            gaPercentage.val() == "G.A Hybrid" ||
            gaPercentage.val() == "G.A Virtual"
        ) {
            sumecAlCoach +=
                sumecAlCoach *
                (document.getElementById("ga-only-dropdown").value / 100);
        }

        $(this).find("#ec_AlCoachTotal")
        .html(currency.format(Math.ceil(sumecAlCoach)));

        //sum of engagement cost program sum
        ecProgramSum += sumecAlCoach;
        //adding the subtotal of analyst into sum the sum of engagement cost
        sumEngagementCost += +sumecAlCoach;
    });

    //Co-Facilitator
    $("#tableCofaci > tr").each(function () {
        efCofaci++;

        sum22 =
            $(this).find(`#ef_CofaciNoc${efCofaci}`).val().replace(/,/g, "") *
                +$(this).find(`#ef_CofaciHf`).val().replace(/\₱|,/g, "") *
                $(this).find(`#ef_CofaciNoh${efCofaci}`).val().replace(/,/g, "") +
            $(this).find(`#ef_CofaciNwh${efCofaci}`).val().replace(/,/g, "") *
                ($(this).find(`#ef_CofaciNoc${efCofaci}`).val().replace(/,/g, "") *
                    +$(this)
                        .find(`#ef_CofaciHf`)
                        .val()
                        .replace(/\₱|,/g, "") *
                    $(this).find(`#ef_CofaciNoh${efCofaci}`).val().replace(/,/g, "") *
                    $("#nswh").val());

        if (
            gaPercentage.val() == "G.A Hybrid" ||
            gaPercentage.val() == "G.A Virtual"
        ) {
            sum22 +=
                sum22 *
                (document.getElementById("ga-only-dropdown").value / 100);
        }

        //lead consultant engagement fees sum
        $(this)
            .find("#subtotal-coFacilitator")
            .html(currency.format(Math.ceil(sum22)));

        //sum of engagement cost program sum
        efProgramSum += sum22;
        //sum of engagement cost
        sum += +sum22;
    });

    $("#ec_TableCofaci > tr").each(function () {
        // Getting the value of engagement fees of Moderator to pass the value
        // into the engagement cost Moderator
        // $("#ec_CofacilitatorNoc1").val($("#ef_CofaciNoc1").val());
        // $("#ec_CofacilitatorNoh1").val($("#ef_CofaciNoh1").val());
        // $("#ec_CofacilitatorNwh1").val($("#ef_CofaciNwh1").val());
        // document.getElementById("ec_CofacilitatorNoc1").defaultValue = $("#ef_CofaciNoc1").val();
        // document.getElementById("ec_CofacilitatorNoh1").defaultValue = $("#ef_CofaciNoh1").val();
        // document.getElementById("ec_CofacilitatorNwh1").defaultValue = $("#ef_CofaciNwh1").val();

        ecCofaci++

        //program engagement cost auto sum
        sumecCofacilitator =
            $(this).find(`#ec_CofacilitatorNoc${ecCofaci}`).val().replace(/,/g, "") *
                $(this).find(`#ec_CofacilitatorHf${ecCofaci}`).val().replace(/,/g, "") *
                $(this).find(`#ec_CofacilitatorNoh${ecCofaci}`).val().replace(/,/g, "") +
            $(this).find(`#ec_CofacilitatorNwh${ecCofaci}`).val().replace(/,/g, "") *
                ($(this).find(`#ec_CofacilitatorNoc${ecCofaci}`).val().replace(/,/g, "") *
                    $(this).find(`#ec_CofacilitatorHf${ecCofaci}`).val().replace(/,/g, "") *
                    $(this).find(`#ec_CofacilitatorNoh${ecCofaci}`).val().replace(/,/g, "") *
                    $("#nswh").val());

        //if the customized type value is G.A
        if (
            gaPercentage.val() == "G.A Hybrid" ||
            gaPercentage.val() == "G.A Virtual"
        ) {
            sumecCofacilitator +=
                sumecCofacilitator *
                (document.getElementById("ga-only-dropdown").value / 100);
        }

        //lead consultant engagement fees sum
        $(this)
        .find("#ec_CofacilitatorTotal")
        .html(currency.format(Math.ceil(sumecCofacilitator)));

        //sum of engagement cost program sum
        ecProgramSum += sumecCofacilitator;
        //adding the subtotal of analyst into sum the sum of engagement cost
        sumEngagementCost += +sumecCofacilitator;
    });

    //Moderator
    $("#tableModerator > tr").each(function () {
        efModerator++;

        sum23 =
            $(this).find(`#ef_ModeratorNoc${efModerator}`).val().replace(/,/g, "") *
                +$(this)
                    .find(`#ef_ModeratorHf`)
                    .val()
                    .replace(/\₱|,/g, "") *
                $(this).find(`#ef_ModeratorNoh${efModerator}`).val().replace(/,/g, "") +
            $(this).find(`#ef_ModeratorNwh${efModerator}`).val().replace(/,/g, "") *
                ($(this).find(`#ef_ModeratorNoc${efModerator}`).val().replace(/,/g, "") *
                    +$(this)
                        .find(`#ef_ModeratorHf`)
                        .val()
                        .replace(/\₱|,/g, "") *
                    $(this).find(`#ef_ModeratorNoh${efModerator}`).val().replace(/,/g, "") *
                    $("#nswh").val());

        if (
            gaPercentage.val() == "G.A Hybrid" ||
            gaPercentage.val() == "G.A Virtual"
        ) {
            sum23 +=
                sum23 *
                (document.getElementById("ga-only-dropdown").value / 100);
        }

        //Moderator engagement fees sum
        $(this)
            .find("#subtotal-moderator")
            .html(currency.format(Math.ceil(sum23)));

        efProgramSum += +sum23;
        sum += +sum23;
    });

    $("#ec_tableModerator > tr").each(function () {
        // Getting the value of engagement fees of Moderator to pass the value
        // into the engagement cost Moderator
        // $("#ec_ModeratorNoc1").val($("#ef_ModeratorNoc1").val());
        // $("#ec_ModeratorNoh1").val($("#ef_ModeratorNoh1").val());
        // $("#ec_ModeratorNwh1").val($("#ef_ModeratorNwh1").val());
        // document.getElementById("ec_ModeratorNoc1").defaultValue = $("#ef_ModeratorNoc1").val();
        // document.getElementById("ec_ModeratorNoh1").defaultValue = $("#ef_ModeratorNoh1").val();
        // document.getElementById("ec_ModeratorNwh1").defaultValue = $("#ef_ModeratorNwh1").val();

        ecModerator++;

        //Moderator engagement cost auto sum
        sumecModerator =
            $(this).find(`#ec_ModeratorNoc${ecModerator}`).val().replace(/,/g, "") *
                $(this).find(`#ec_ModeratorHf${ecModerator}`).val().replace(/,/g, "") *
                $(this).find(`#ec_ModeratorNoh${ecModerator}`).val().replace(/,/g, "") +
            $(this).find(`#ec_ModeratorNwh${ecModerator}`).val().replace(/,/g, "") *
                ($(this).find(`#ec_ModeratorNoc${ecModerator}`).val().replace(/,/g, "") *
                    $(this).find(`#ec_ModeratorHf${ecModerator}`).val().replace(/,/g, "") *
                    $(this).find(`#ec_ModeratorNoh${ecModerator}`).val().replace(/,/g, "") *
                    $("#nswh").val());
            //         ||
            // $(this).find(`#ec_ModeratorNoc${ecModerator}`).val().replace(/,/g, "") *
            //     $(this).find(`#ec_ModeratorInputHf6${ecModerator}`).val().replace(/,/g, "") *
            //     $(this).find(`#ec_ModeratorNoh${ecModerator}`).val().replace(/,/g, "") +
            // $(this).find(`#ec_ModeratorNwh${ecModerator}`).val().replace(/,/g, "") *
            //     ($(this).find(`#ec_ModeratorNoc${ecModerator}`).val().replace(/,/g, "") *
            //         $(this).find(`#ec_ModeratorInputHf6${ecModerator}`).val().replace(/,/g, "") *
            //         $(this).find(`#ec_ModeratorNoh${ecModerator}`).val().replace(/,/g, "") *
            //         $("#nswh").val());

        //if the customized type value is G.A
        if (
            gaPercentage.val() == "G.A Hybrid" ||
            gaPercentage.val() == "G.A Virtual"
        ) {
            sumecModerator +=
                sumecModerator *
                (document.getElementById("ga-only-dropdown").value / 100);
        }

        //Moderator engagement fees sum
        $(this)
        .find("#ec_ModeratorTotal")
        .html(currency.format(Math.ceil(sumecModerator)));

        //adding the subtotal of analyst into sum the sum of engagement cost
        ecProgramSum += +sumecModerator;
        sumEngagementCost += +sumecModerator;
    });

    //Producer
    efProducer = 0;
    $("#tableProducer > tr").each(function () {
        efProducer++;

        sum24 =
            $(this).find(`#ef_ProducerNoc${efProducer}`).val().replace(/,/g, "") *
                +$(this).find("#ef_ProducerHf").val().replace(/\₱|,/g, "") *
                $(this).find(`#ef_ProducerNoh${efProducer}`).val().replace(/,/g, "") +
            $(this).find(`#ef_ProducerNwh${efProducer}`).val().replace(/,/g, "") *
                ($(this).find(`#ef_ProducerNoc${efProducer}`).val().replace(/,/g, "") *
                    +$(this)
                        .find("#ef_ProducerHf")
                        .val()
                        .replace(/\₱|,/g, "") *
                    $(this).find(`#ef_ProducerNoh${efProducer}`).val().replace(/,/g, "") *
                    $("#nswh").val());

        if (
            gaPercentage.val() == "G.A Hybrid" ||
            gaPercentage.val() == "G.A Virtual"
        ) {
            sum24 +=
                sum24 *
                (document.getElementById("ga-only-dropdown").value / 100);
        }

        //Producer engagement fees sum
        $(this)
            .find("#subtotal-producer")
            .html(currency.format(Math.ceil(sum24)));

        efProgramSum += +sum24;
        sum += +sum24;
    });

    ecProducer = 0;
    $("#ec_TableProducer > tr").each(function () {
        // Getting the value of engagement fees of Producer to pass the value
        // into the engagement cost Producer
        // $("#ec_ProducerNoc1").val($("#ef_ProducerNoc1").val());
        // $("#ec_ProducerNoh1").val($("#ef_ProducerNoh1").val());
        // $("#ec_ProducerNwh1").val($("#ef_ProducerNwh1").val());
        // document.getElementById("ec_ProducerNoc1").defaultValue = $("#ef_ProducerNoc1").val();
        // document.getElementById("ec_ProducerNoh1").defaultValue = $("#ef_ProducerNoh1").val();
        // document.getElementById("ec_ProducerNwh1").defaultValue = $("#ef_ProducerNwh1").val();

        ecProducer++;

        //Producer engagement cost auto sum
        sumecProducer =
            $(this).find(`#ec_ProducerNoc${ecProducer}`).val().replace(/,/g, "") *
                $(this).find(`#ec_ProducerHf${ecProducer}`).val().replace(/,/g, "") *
                $(this).find(`#ec_ProducerNoh${ecProducer}`).val().replace(/,/g, "") +
            $(this).find(`#ec_ProducerNwh${ecProducer}`).val().replace(/,/g, "") *
                ($(this).find(`#ec_ProducerNoc${ecProducer}`).val().replace(/,/g, "") *
                    $(this).find(`#ec_ProducerHf${ecProducer}`).val().replace(/,/g, "") *
                    $(this).find(`#ec_ProducerNoh${ecProducer}`).val().replace(/,/g, "") *
                    $("#nswh").val());

        //if the customized type value is G.A
        if (
            gaPercentage.val() == "G.A Hybrid" ||
            gaPercentage.val() == "G.A Virtual"
        ) {
            sumecProducer +=
                sumecProducer *
                (document.getElementById("ga-only-dropdown").value / 100);
        }

        //Producer engagement fees sum
        $(this)
        .find("#ec_ProducerTotal")
        .html(currency.format(Math.ceil(sumecProducer)));

        //adding the subtotal of analyst into sum the sum of engagement cost
        ecProgramSum += +sumecProducer;
        sumEngagementCost += +sumecProducer;
    });
    $("#program-subtotal").html(currency.format(Math.ceil(efProgramSum))
    );
    $("#ec_ProgramSubtotal").html(currency.format(Math.ceil(ecProgramSum)));

    /*******************************************************DOCUMENTOR******************************************************************/
    efDocumentor = 0;
    $("#tableDocumentor > tr").each(function () {
        efDocumentor++;
        sum28 =
            $(this).find(`#ef_DocumentorNoc${efDocumentor}`).val().replace(/,/g, "") *
                +$(this)
                    .find("#ef_DocumentorHf")
                    .val()
                    .replace(/\₱|,/g, "") *
                $(this).find(`#ef_DocumentorNoh${efDocumentor}`).val().replace(/,/g, "") +
            $(this).find(`#ef_DocumentorNwh${efDocumentor}`).val().replace(/,/g, "") *
                ($(this).find(`#ef_DocumentorNoc${efDocumentor}`).val().replace(/,/g, "") *
                    +$(this)
                        .find("#ef_DocumentorHf")
                        .val()
                        .replace(/\₱|,/g, "") *
                    $(this).find(`#ef_DocumentorNoh${efDocumentor}`).val().replace(/,/g, "") *
                    $("#nswh").val());

        if (
            gaPercentage.val() == "G.A Hybrid" ||
            gaPercentage.val() == "G.A Virtual"
        ) {
            sum28 +=
                sum28 *
                (document.getElementById("ga-only-dropdown").value / 100);
        }

        //Producer engagement fees sum
        $(this).find("#subtotal-documentor").html(currency.format(Math.ceil(sum28)));

        sum += +sum28;
    });

    ecDocumentor = 0;
    $("#ec_TableDocumentor > tr").each(function () {
        // Getting the value of engagement fees of Documentor to pass the value
        // into the engagement cost Documentor
        // $("#ec_DocumentorNoc1").val($("#ef_DocumentorNoc1").val());
        // $("#ec_DocumentorNoh1").val($("#ef_DocumentorNoh1").val());
        // $("#ec_DocumentorNwh1").val($("#ef_DocumentorNwh1").val());
        // document.getElementById("ec_DocumentorNoc1").defaultValue = $("#ef_DocumentorNoc1").val();
        // document.getElementById("ec_DocumentorNoh1").defaultValue = $("#ef_DocumentorNoh1").val();
        // document.getElementById("ec_DocumentorNwh1").defaultValue = $("#ef_DocumentorNwh1").val();

        ecDocumentor++;

        //Documentor engagement cost auto sum
        sumecDocumentor =
            $(this).find(`#ec_DocumentorNoc${ecDocumentor}`).val().replace(/,/g, "") *
                $(this).find("#ec_DocumentorHf").val().replace(/\₱|,/g, "") *
                $(this).find(`#ec_DocumentorNoh${ecDocumentor}`).val().replace(/,/g, "") +
            $(this).find(`#ec_DocumentorNwh${ecDocumentor}`).val().replace(/,/g, "") *
                ($(this).find(`#ec_DocumentorNoc${ecDocumentor}`).val().replace(/,/g, "") *
                    $(this).find("#ec_DocumentorHf").val().replace(/\₱|,/g, "") *
                    $(this).find(`#ec_DocumentorNoh${ecDocumentor}`).val().replace(/,/g, "") *
                    0.2);

        //if the customized type value is G.A
        if (
            gaPercentage.val() == "G.A Hybrid" ||
            gaPercentage.val() == "G.A Virtual"
        ) {
            sumecDocumentor +=
                sumecDocumentor *
                (document.getElementById("ga-only-dropdown").value / 100);
        }

        //Documentor engagement cost sum
        $(this).find("#ec_DocumentorTotal").html(currency.format(Math.ceil(sumecDocumentor)));

        //adding the subtotal of analyst into sum the sum of engagement cost
        sumEngagementCost += +sumecDocumentor;
    });


    /*******************************************************Off Program fee******************************************************************/
    $("#ec_ProgramHf").each(function () {
        sumecOffprogram +=
            $("#ec_ProgramNoc").val().replace(/,/g, "") *
            $("#ec_ProgramHf").val().replace(/\₱|,/g, "");

        if (
            gaPercentage.val() == "G.A Hybrid" ||
            gaPercentage.val() == "G.A Virtual"
        ) {
            sumecOffprogram +=
                sumecOffprogram *
                (document.getElementById("ga-only-dropdown").value / 100);
        }
        sumEngagementCost += +sumecOffprogram;
    });
    $("#ec_ProgramTotal").html(currency.format(Math.ceil(sumecOffprogram)));

    /*******************************************************Program Expense******************************************************************/
    $("#ec_Programexpense").each(function () {
        sumecProgramexpense +=
            ($(this).val().replace(/%/g, "") *
                $("#ef_Totalpackage").val().replace(/\₱|,/g, "")) /
            100;

        sumEngagementCost += +sumecProgramexpense;
    });
    $("#ec_ProgramexpenseTotal").html(currency.format(Math.ceil(sumecProgramexpense)) );

    /*******************************************TOTAL STANDARD FEES**********************************************************************/
    $("#total-standard").html(currency.format(Math.ceil(sum)));
    //TOTAL PACKAGE
    // document.getElementById("ef_Totalpackage").defaultValue = $("#total-standard").html();

    /********************************************DISCOUNTS*******************************************************************************/
    $("#ef_Totalpackage").each(function () {
        sum32 += (1 - +$(this).val().replace(/\₱|,/g, "") / sum) * 100;

        if (sum32 > 100) {
            sumDiscount = sum32 - 100;
            $("#input-discount").val("-" + sumDiscount + "%");
        } else if (isNaN(sum32) != 0) {
            $("#input-discount").val(100 + "%");
        } else {
            sumDiscount = Math.round(sum32);
            $("#input-discount").val(sumDiscount + "%");
        }
    });

    //Sales
    // sumSalesPercent = 0;
    sumInputSales = 0;
    $("#tableSales > tr").each(function () {

        if (document.getElementById("sales").disabled === false) {
            sumSales =
            ($("#ef_Totalpackage").val().replace(/\₱|,/g, "") / 100) *
                $(this).find("#sales").val().replace(/\%/g, "")
        } else {
            sumInputSales =
            ($("#ef_Totalpackage").val().replace(/\₱|,/g, "") / 100) *
            $(this).find("#inputSales").val().replace(/\%/g, "")
        };

        //Producer engagement fees sum
        $(this)
            .find("#salesTotal")
            .html(currency.format(Math.ceil(sumSales + sumInputSales)));
        sumEngagementCost += +sumSales;
    });

    //Referral
    $("#tableReferral > tr").each(function () {

        if (document.getElementById("referral").disabled === false) {
            sumReferral =
            ($("#ef_Totalpackage").val().replace(/\₱|,/g, "") / 100) *
                $(this).find("#referral").val().replace(/\%/g, "")
        } else {
            sumReferral =
            ($("#ef_Totalpackage").val().replace(/\₱|,/g, "") / 100) *
                $(this).find("#inputReferral").val().replace(/\%/g, "")
        };

        $(this)
            .find("#referralTotal")
            .html(currency.format(Math.ceil(sumReferral)));
        sumEngagementCost += +sumReferral;
    });

    //Engagement Manager
    $("#tableEngagementmanager > tr").each(function () {

        if (document.getElementById("engagementManager").disabled === false) {
            sumEngagementManager =
            ($("#ef_Totalpackage").val().replace(/\₱|,/g, "") / 100) *
                $(this).find("#engagementManager").val().replace(/\%/g, "")
        } else {
            sumEngagementManager =
            ($("#ef_Totalpackage").val().replace(/\₱|,/g, "") / 100) *
                $(this).find("#inputManager").val().replace(/%/g, "")
        };

        // sumEngagementManager =
        //     ($("#ef_Totalpackage").val().replace(/\₱|,/g, "") / 100) *
        //         $(this).find("#engagementManager").val().replace(/\%/g, "") ||
        //     ($("#ef_Totalpackage").val().replace(/\₱|,/g, "") / 100) *
        //         $(this).find("#inputManager").val().replace(/%/g, "");

        $(this)
            .find("#engagementManagerTotal")
            .html(currency.format(Math.ceil(sumEngagementManager)));
        sumEngagementCost += +sumEngagementManager;
    });

    /***********************ENGAGEMENT COST TOTAL FEES***********************/
    $("#ec_Total").html(currency.format(Math.ceil(sumEngagementCost)));

    /***********************PROFIT FORECAST***********************/
    //profit
    sumProfit = $("#ef_Totalpackage").val().replace(/\₱|,/g, "") - sumEngagementCost;
    $("#Profit").html(currency.format(Math.ceil(sumProfit)));

    //Less: Contribution to Overhead
    sumCto = 0;
    $("#LessCTO_NOC").each(function () {
        sumCto +=
            ($("#ef_Totalpackage").val().replace(/\₱|,/g, "") *
                $(this).val()) / 100;
    });

    $("#LessContributionToOverhead").html(
        currency.format(Math.ceil(sumCto))
    );

    //Net profit
    sumNetprofit = sumProfit - sumCto;
    $("#NetProfit").html(currency.format(Math.ceil(sumNetprofit)));

    //Profit margin
    sumProfitmargin = (sumNetprofit / $("#ef_Totalpackage").val().replace(/\₱|,/g, "")) * 100;
    if (isNaN(sumProfitmargin) || sumProfitmargin === Number.NEGATIVE_INFINITY){
        $("#ProfitMargin").html("0");
    }
    else {
        $("#ProfitMargin").html(Math.floor(sumProfitmargin) + "%");
    }

    //ENGAGEMENT COST DEFAULT VALUE
    $('table .val').val(0);
    // document.getElementById("ec_AnalystHf1").defaultValue = currency.format( Math.ceil(1700) );
    document.getElementById("ec_DocumentorHf").defaultValue = currency.format( Math.ceil(700) );
    // document.getElementById("ec_ProgramHf").defaultValue = currency.format( Math.ceil(1000) );
    document.getElementById("ec_Programexpense").defaultValue = 2 + "%";

    $("#ec_Programexpense").on("blur", function () {
        $(this).val(function (i, v) {
            return v.replace("%", "") + "%";
        });
    });

});
/*************************************** END CUSTOMIZED ENGAGEMENT SUB BUDGET FORM COMPUTATION ****************************************************/

/*************************************** CUSTOMIZED ENGAGEMENT BUDGET FORM COMPUTATION ********************************************************/
$(document).on(
    "load change keyup click",
    ".customized-engagement, .customized-type, .ga-only-dropdown, .remove, #ec_tableEngagementFees, #ec_tableEngagementCost, #LessCTO_NOC",
    function () {
        //customized type
        $(".customized-type").each(function () {
            var gaPercentage = $(".customized-type");
            if (gaPercentage.val() == "G.A Hybrid" || gaPercentage.val() == "G.A Virtual") {
                document.getElementById("dropdown-ga").style.visibility = "";
            } else {
                document.getElementById("dropdown-ga").style.visibility = "hidden"
                $("#ga-only-dropdown").val('0')
            }
        });

        /********************************************************AUTO SUM***************************************************************************/
        //currency format
        let currency = Intl.NumberFormat("en-US");
        // $(".commanumber").each(function () {
        //     $(this).val(currency.format($(this).val()));
        // });

        //total package
        sum = 0;

        //consulting
        sum13 = 0;
        sum14 = 0;

        //design
        sum18 = 0;

        //program
        sum21 = 0;
        sum22 = 0;
        sum23 = 0;
        sum24 = 0;

        //other tools
        sum28 = 0;

        //discounts if given
        sum32 = 0;

        // engagment cost total
        sumEngagementCost = 0;
        sumSales = 0;
        sumReferral = 0;
        sumEngagementManager = 0;
        sumecLeadconsultant = 0;
        sumecAnalyst = 0;
        sumecDesigner = 0;
        sumecCreators = 0;
        sumecLeadfacilitator = 0;
        sumecCofacilitator = 0;
        sumecModerator = 0;
        sumecProducer = 0;
        sumecDocumentor = 0;
        sumecOffprogram = 0;
        sumecProgramexpense = 0;

        //customized type
        var gaPercentage = $(".customized-type");
        rowIdx = 0;
        leadConsultant = 0;
        efAnalyst = 0;
        ecAnalyst = 0;
        efDesigner = 0;
        ecDesigner = 0;
        efLeadfaci = 0;
        ecLeadfaci = 0;
        efCofaci = 0;
        ecCofaci = 0;
        efModerator = 0;
        ecModerator = 0;

        /*******************************************************CONSULTING*********************************************************************/
        //Lead consultant
        efConsultingSum = 0;
        ecConsultingSum = 0;
        nswh = $("#nswh").val();

        $("#tableLeadconsultant > tr").each(function () {

            rowIdx++;
            // leadConsultant++;

            sum13 =
                $(this).find(`#ef_LeadconsultantNoc${rowIdx}`).val().replace(/,/g, "") *
                    +$(this).find("#ef_LeadconsultantHf").val().replace(/\₱|,/g, "") *
                    $(this).find(`#ef_LeadconsultantNoh${rowIdx}`).val().replace(/,/g, "") +
                $(this).find(`#ef_LeadconsultantNwh${rowIdx}`).val().replace(/,/g, "") *
                    ($(this).find(`#ef_LeadconsultantNoc${rowIdx}`).val().replace(/,/g, "") *
                        +$(this).find("#ef_LeadconsultantHf").val().replace(/\₱|,/g, "") *
                        $(this).find(`#ef_LeadconsultantNoh${rowIdx}`).val().replace(/,/g, "") *
                        $("#nswh").val())

            // if the customized type is G.A Hybrid or G.A Virtual is
            // selected the percent of customized type will execute
            if (
                gaPercentage.val() == "G.A Hybrid" ||
                gaPercentage.val() == "G.A Virtual"
            ) {
                sum13 +=
                    sum13 *
                    (document.getElementById("ga-only-dropdown").value / 100);
            }

            //lead consultant engagement fees sum
            $(this)
                .find("#leadTotal")
                .html(currency.format(Math.ceil(sum13)));

            //Assign the value of lead consultant to the sum of engagement fees
            efConsultingSum += +sum13;
            sum += +sum13;
        });

        $("#ec_tableLeadConsultant > tr").each(function () {
            leadConsultant++;
            // $("#ec_LeadconsultantNoc1").val($("#ef_LeadconsultantNoc1").val());
            // $("#ec_LeadconsultantNoh1").val($("#ef_LeadconsultantNoh1").val());
            // $("#ec_LeadconsultantNwh1").val($("#ef_LeadconsultantNwh1").val());
            // document.getElementById("ec_LeadconsultantNoc1").defaultValue = $("#ef_LeadconsultantNoc1").val();
            // document.getElementById("ec_LeadconsultantNoh1").defaultValue = $("#ef_LeadconsultantNoh1").val();
            // document.getElementById("ec_LeadconsultantNwh1").defaultValue = $("#ef_LeadconsultantNwh1").val();
            //lead consultant engagement cost sum
            sumecLeadconsultant =
                $(this)
                    .find(`#ec_LeadconsultantNoc${leadConsultant}`)
                    .val().replace(/,/g, "") *
                    +$(this)
                        .find(`#ec_LeadconsultantHf${leadConsultant}`)
                        .val().replace(/,/g, "") *
                    $(this)
                        .find(`#ec_LeadconsultantNoh${leadConsultant}`)
                        .val().replace(/,/g, "") +
                    $(this)
                        .find(`#ec_LeadconsultantNwh${leadConsultant}`)
                        .val().replace(/,/g, "") *
                        ($(this)
                            .find(`#ec_LeadconsultantNoc${leadConsultant}`)
                            .val().replace(/,/g, "") *
                            +$(this)
                                .find(`#ec_LeadconsultantHf${leadConsultant}`)
                                .val().replace(/,/g, "") *
                            $(this)
                                .find(`#ec_LeadconsultantNoh${leadConsultant}`)
                                .val().replace(/,/g, "") *
                            0.2);

            // if the customized type is G.A Hybrid or G.A Virtual is
            // selected it will add 10 percent to lead consultant engagement fees
            if (
                gaPercentage.val() == "G.A Hybrid" ||
                gaPercentage.val() == "G.A Virtual"
            ) {
                sumecLeadconsultant += sumecLeadconsultant * (10 / 100);
            }

            $(this)
                .find("#ec_LeadconsultantTotal")
                .html(currency.format(Math.ceil(sumecLeadconsultant)));

            //Assign the value of lead consultant to the sum of engagement cost
            // sumecLeadconsultant += sumecLeadconsultant;
            ecConsultingSum += +sumecLeadconsultant;
            sumEngagementCost += +sumecLeadconsultant;
        });

        //Analyst
        $("#tableAnalyst > tr").each(function () {
            efAnalyst++;
            //analyst engagement fees auto sum
            sum14 =
                $(this).find(`#ef_AnalystNoc${efAnalyst}`).val().replace(/,/g, "") *
                    +$(this).find("#ef_AnalystHf").val().replace(/\₱|,/g, "") *
                    $(this).find(`#ef_AnalystNoh${efAnalyst}`).val().replace(/,/g, "") +
                $(this).find(`#ef_AnalystNwh${efAnalyst}`).val().replace(/,/g, "") *
                    ($(this).find(`#ef_AnalystNoc${efAnalyst}`).val().replace(/,/g, "") *
                        +$(this)
                            .find("#ef_AnalystHf")
                            .val()
                            .replace(/\₱|,/g, "") *
                        $(this).find(`#ef_AnalystNoh${efAnalyst}`).val().replace(/,/g, "") *
                        $("#nswh").val());

            //if the customized type value is G.A then it will add percentage
            //to engagement fees analyst subtotal
            if (
                gaPercentage.val() == "G.A Hybrid" ||
                gaPercentage.val() == "G.A Virtual"
            ) {
                sum14 +=
                    sum14 *
                    (document.getElementById("ga-only-dropdown").value / 100);
            }

            //lead consultant engagement fees sum
            $(this)
                .find("#analyst-total")
                .html(currency.format(Math.ceil(sum14)));

            //adding the subtotal of analyst into sum the sum of engagement fees
            efConsultingSum += +sum14;
            sum += +sum14;
        });

        $("#ec_tableAnalyst > tr").each(function () {
            ecAnalyst++;

            // Getting the value of engagement fees of analyst to pass the value
            // into the engagement cost analyst
            // $("#ec_AnalystNoc1").val($("#ef_AnalystNoc1").val());
            // $("#ec_AnalystNoh1").val($("#ef_AnalystNoh1").val());
            // $("#ec_AnalystNwh1").val($("#ef_AnalystNwh1").val());
            // document.getElementById("ec_AnalystNoc1").defaultValue = $("#ef_AnalystNoc1").val();
            // document.getElementById("ec_AnalystNoh1").defaultValue = $("#ef_AnalystNoh1").val();
            // document.getElementById("ec_AnalystNwh1").defaultValue = $("#ef_AnalystNwh1").val();

            //analyst engagement cost auto sum
            sumecAnalyst =
                $(`#ec_AnalystNoc${ecAnalyst}`).val().replace(/,/g, "") *
                    $(`#ec_AnalystHf${ecAnalyst}`).val().replace(/\₱|,/g, "") *
                    $(`#ec_AnalystNoh${ecAnalyst}`).val().replace(/,/g, "") +
                $(`#ec_AnalystNwh${ecAnalyst}`).val().replace(/,/g, "") *
                    ($(`#ec_AnalystNoc${ecAnalyst}`).val().replace(/,/g, "") *
                        $(`#ec_AnalystHf${ecAnalyst}`).val().replace(/\₱|,/g, "") *
                        $(`#ec_AnalystNoh${ecAnalyst}`).val().replace(/,/g, "") *
                        0.2);

            //if the customized type value is G.A
            if (
                gaPercentage.val() == "G.A Hybrid" ||
                gaPercentage.val() == "G.A Virtual"
            ) {
                sumecAnalyst +=
                    sumecAnalyst *
                    (document.getElementById("ga-only-dropdown").value / 100);
            }

            //lead consultant engagement fees sum
            $(this)
            .find("#ec_AnalystTotal")
            .html(currency.format(Math.ceil(sumecAnalyst)));

            //adding the subtotal of analyst into sum the sum of engagement cost
            ecConsultingSum += +sumecAnalyst;
            sumEngagementCost += +sumecAnalyst;
        });

        //Subtotal
        $("#subtotal-consulting").html(currency.format(Math.ceil(efConsultingSum)));
        $("#ec_SubtotalConsulting").html(currency.format(Math.ceil(ecConsultingSum))
        );

        /*******************************************************DESIGN*********************************************************************/
        efDesignSum = 0;
        ecDesignSum = 0;
        $("#tableDesigner > tr").each(function () {
            efDesigner++;

            sum18 =
                $(this).find(`#ef_DesignerNoc${efDesigner}`).val().replace(/,/g, "") *
                    +$(this).find("#ef_DesignerHf").val().replace(/\₱|,/g, "") *
                    $(this).find(`#ef_DesignerNoh${efDesigner}`).val().replace(/,/g, "") +
                $(this).find(`#ef_DesignerNwh${efDesigner}`).val().replace(/,/g, "") *
                    ($(this).find(`#ef_DesignerNoc${efDesigner}`).val().replace(/,/g, "") *
                        +$(this).find("#ef_DesignerHf").val().replace(/\₱|,/g, "") *
                        $(this).find(`#ef_DesignerNoh${efDesigner}`).val().replace(/,/g, "") *
                        $("#nswh").val());

            if (
                gaPercentage.val() == "G.A Hybrid" ||
                gaPercentage.val() == "G.A Virtual"
            ) {
                sum18 +=
                    sum18 *
                    (document.getElementById("ga-only-dropdown").value / 100);
            }

            //lead consultant engagement fees sum
            $(this).find("#subtotal-design").html(currency.format(Math.ceil(sum18)));

            efDesignSum += +sum18;
            sum += +sum18;
        });

        $("#ec_TableDesigner > tr").each(function () {
            ecDesigner++;

            // Getting the value of engagement fees of designer to pass the value
            // into the engagement cost designer
            // $("#ec_DesignerNoc1").val($("#ef_DesignerNoc1").val());
            // $("#ec_DesignerNoh1").val($("#ef_DesignerNoh1").val());
            // $("#ec_DesignerNwh1").val($("#ef_DesignerNwh1").val());
            // document.getElementById("ec_DesignerNoc1").defaultValue = $("#ef_DesignerNoc1").val();
            // document.getElementById("ec_DesignerNoh1").defaultValue = $("#ef_DesignerNoh1").val();
            // document.getElementById("ec_DesignerNwh1").defaultValue = $("#ef_DesignerNwh1").val();

            //designer engagement cost auto sum
            sumecDesigner =
                $(this).find(`#ec_DesignerNoc${ecDesigner}`).val().replace(/,/g, "") *
                    +$(this).find(`#ec_DesignerHf${ecDesigner}`).val().replace(/,/g, "") *
                    $(this).find(`#ec_DesignerNoh${ecDesigner}`).val().replace(/,/g, "") +
                $(this).find(`#ec_DesignerNwh${ecDesigner}`).val().replace(/,/g, "") *
                    ($(this).find(`#ec_DesignerNoc${ecDesigner}`).val().replace(/,/g, "") *
                        +$(this).find(`#ec_DesignerHf${ecDesigner}`).val().replace(/,/g, "") *
                        $(this).find(`#ec_DesignerNoh${ecDesigner}`).val().replace(/,/g, "") *
                        0.2);

            //if the customized type value is G.A
            if (
                gaPercentage.val() == "G.A Hybrid" ||
                gaPercentage.val() == "G.A Virtual"
            ) {
                sumecDesigner +=
                    sumecDesigner *
                    (document.getElementById("ga-only-dropdown").value / 100);
            }

            //Engagement Cost in Designer Sum
            $(this).find("#ec_DesignerTotal").html(currency.format(Math.ceil(sumecDesigner)));

            //adding the subtotal of analyst into sum the sum of engagement cost
            ecDesignSum += +sumecDesigner;
            sumEngagementCost += +sumecDesigner;
        });

        //Engagement cost Creators
        ecCreators = 0;
        $("#ec_TableCreators > tr").each(function () {
            ecCreators++;

            sumecCreators =
                $(this).find(`#ec_CreatorsHf`).val().replace(/,/g, "") *
                $(this).find(`#ec_CreatorsNoh${ecCreators}`).val().replace(/,/g, "");

            $(this).find("#ec_CreatorsTotal").html(currency.format(Math.ceil(sumecCreators)));

            ecDesignSum += +sumecCreators;
            sumEngagementCost += +sumecCreators;
        });
        $("#ec_DesignSubtotal").html(currency.format(Math.ceil(ecDesignSum))
        );

        /*******************************************************PROGRAM*********************************************************************/
        efProgramSum = 0;
        ecProgramSum = 0;
        //Lead Facilitator
        $("#tableLeadfaci > tr").each(function () {
            efLeadfaci++;
            sum21 =
                $(this).find(`#ef_LeadfacilitatorNoc${efLeadfaci}`).val().replace(/,/g, "") *
                    +$(this).find(`#ef_LeadfacilitatorHf${efLeadfaci}`).val().replace(/\₱|,/g, "") *
                    $(this).find(`#ef_LeadfacilitatorNoh${efLeadfaci}`).val().replace(/,/g, "") +
                $(this).find(`#ef_LeadfacilitatorNwh${efLeadfaci}`).val().replace(/,/g, "") *
                    ($(this).find(`#ef_LeadfacilitatorNoc${efLeadfaci}`).val().replace(/,/g, "") *
                        +$(this).find(`#ef_LeadfacilitatorHf${efLeadfaci}`).val().replace(/\₱|,/g, "") *
                        $(this).find(`#ef_LeadfacilitatorNoh${efLeadfaci}`).val().replace(/,/g, "") *
                        $("#nswh").val()) ||
                $(this).find(`#ef_LeadfacilitatorNoc${efLeadfaci}`).val().replace(/,/g, "") *
                    +$(this).find(`#ef_InputLeadFaciHf${efLeadfaci}`).val().replace(/\₱|,/g, "") *
                    $(this).find(`#ef_LeadfacilitatorNoh${efLeadfaci}`).val().replace(/,/g, "") +
                $(this).find(`#ef_LeadfacilitatorNwh${efLeadfaci}`).val().replace(/,/g, "") *
                    ($(this).find(`#ef_LeadfacilitatorNoc${efLeadfaci}`).val().replace(/,/g, "") *
                        +$(this).find(`#ef_InputLeadFaciHf${efLeadfaci}`).val().replace(/\₱|,/g, "") *
                        $(this).find(`#ef_LeadfacilitatorNoh${efLeadfaci}`).val().replace(/,/g, "") *
                        $("#nswh").val());

            if (
                gaPercentage.val() == "G.A Hybrid" ||
                gaPercentage.val() == "G.A Virtual"
            ) {
                sum21 +=
                    sum21 *
                    (document.getElementById("ga-only-dropdown").value / 100);
            }

            //lead consultant engagement fees sum
            $(this)
                .find("#subtotal-lead")
                .html(currency.format(Math.ceil(sum21)));

            $("#total-standard").html(currency.format(Math.ceil(sum21)));

            sum += +sum21;
            efProgramSum += +sum21;
        });

        $("#ec_TableLeadfaci > tr").each(function (){
            // Getting the value of engagement fees of program to pass the value
            // into the engagement cost program
            // $("#ec_LeadfacilitatorNoc1").val($("#ef_LeadfacilitatorNoc1").val());
            // $("#ec_LeadfacilitatorNoh1").val($("#ef_LeadfacilitatorNoh1").val());
            // $("#ec_LeadfacilitatorNwh1").val($("#ef_LeadfacilitatorNwh1").val());
            // document.getElementById("ec_LeadfacilitatorNoc1").defaultValue = $("#ef_LeadfacilitatorNoc1").val();
            // document.getElementById("ec_LeadfacilitatorNoh1").defaultValue = $("#ef_LeadfacilitatorNoh1").val();
            // document.getElementById("ec_LeadfacilitatorNwh1").defaultValue = $("#ef_LeadfacilitatorNwh1").val();

            ecLeadfaci++;
            //program engagement cost auto sum
            sumecLeadfacilitator =
                $(this).find(`#ec_LeadfacilitatorNoc${ecLeadfaci}`).val().replace(/,/g, "") *
                    $(this).find(`#ec_LeadfacilitatorHf${ecLeadfaci}`).val().replace(/\₱|,/g, "") *
                    $(this).find(`#ec_LeadfacilitatorNoh${ecLeadfaci}`).val().replace(/,/g, "") +
                $(this).find(`#ec_LeadfacilitatorNwh${ecLeadfaci}`).val().replace(/,/g, "") *
                    ($(this).find(`#ec_LeadfacilitatorNoc${ecLeadfaci}`).val().replace(/,/g, "") *
                        $(this).find(`#ec_LeadfacilitatorHf${ecLeadfaci}`).val().replace(/\₱|,/g, "") *
                        $(this).find(`#ec_LeadfacilitatorNoh${ecLeadfaci}`).val().replace(/,/g, "") *
                        $("#nswh").val());

            //if the customized type value is G.A
            if (
                gaPercentage.val() == "G.A Hybrid" ||
                gaPercentage.val() == "G.A Virtual"
            ) {
                sumecLeadfacilitator +=
                    sumecLeadfacilitator *
                    (document.getElementById("ga-only-dropdown").value / 100);
            }

            $(this).find("#ec_LeadfacilitatorTotal")
            .html(currency.format(Math.ceil(sumecLeadfacilitator)));

            //sum of engagement cost program sum
            ecProgramSum += sumecLeadfacilitator;
            //adding the subtotal of analyst into sum the sum of engagement cost
            sumEngagementCost += +sumecLeadfacilitator;
        });

        //CO-LEAD FACILITATOR
        sumecCoLeadfacilitator = 0;
        ecCoLead = 0;
        $("#ec_TableCoLeadfaci > tr").each(function (){
            ecCoLead++;

            //program engagement cost auto sum
            sumecCoLeadfacilitator =
                $(this).find(`#ec_CoLeadfacilitatorNoc${ecCoLead}`).val().replace(/,/g, "") *
                    $(this).find(`#ec_CoLeadfacilitatorHf${ecCoLead}`).val().replace(/,/g, "") *
                    $(this).find(`#ec_CoLeadfacilitatorNoh${ecCoLead}`).val().replace(/,/g, "") +
                $(this).find(`#ec_CoLeadfacilitatorNwh${ecCoLead}`).val().replace(/,/g, "") *
                    ($(this).find(`#ec_CoLeadfacilitatorNoc${ecCoLead}`).val().replace(/,/g, "") *
                        $(this).find(`#ec_CoLeadfacilitatorHf${ecCoLead}`).val().replace(/,/g, "") *
                        $(this).find(`#ec_CoLeadfacilitatorNoh${ecCoLead}`).val().replace(/,/g, "") *
                        $("#nswh").val());

            //if the customized type value is G.A
            if (
                gaPercentage.val() == "G.A Hybrid" ||
                gaPercentage.val() == "G.A Virtual"
            ) {
                sumecCoLeadfacilitator +=
                    sumecCoLeadfacilitator *
                    (document.getElementById("ga-only-dropdown").value / 100);
            }

            $(this).find("#ec_CoLeadfacilitatorTotal")
            .html(currency.format(Math.ceil(sumecCoLeadfacilitator)));

            //sum of engagement cost program sum
            ecProgramSum += sumecCoLeadfacilitator;
            //adding the subtotal of analyst into sum the sum of engagement cost
            sumEngagementCost += +sumecCoLeadfacilitator;
        });

        sumecAlCoach = 0;
        ecAlCoach = 0;
        $("#ec_TableAlCoach > tr").each(function (){
            ecAlCoach++;

            //program engagement cost auto sum
            sumecAlCoach =
                $(this).find(`#ec_AlCoachNoc${ecAlCoach}`).val().replace(/,/g, "") *
                    $(this).find(`#ec_AlCoachHf${ecAlCoach}`).val().replace(/\₱|,/g, "") *
                    $(this).find(`#ec_AlCoachNoh${ecAlCoach}`).val().replace(/,/g, "") +
                $(this).find(`#ec_AlCoachNwh${ecAlCoach}`).val().replace(/,/g, "") *
                    ($(this).find(`#ec_AlCoachNoc${ecAlCoach}`).val().replace(/,/g, "") *
                        $(this).find(`#ec_AlCoachHf${ecAlCoach}`).val().replace(/\₱|,/g, "") *
                        $(this).find(`#ec_AlCoachNoh${ecAlCoach}`).val().replace(/,/g, "") *
                        $("#nswh").val());

            //if the customized type value is G.A
            if (
                gaPercentage.val() == "G.A Hybrid" ||
                gaPercentage.val() == "G.A Virtual"
            ) {
                sumecAlCoach +=
                    sumecAlCoach *
                    (document.getElementById("ga-only-dropdown").value / 100);
            }

            $(this).find("#ec_AlCoachTotal")
            .html(currency.format(Math.ceil(sumecAlCoach)));

            //sum of engagement cost program sum
            ecProgramSum += sumecAlCoach;
            //adding the subtotal of analyst into sum the sum of engagement cost
            sumEngagementCost += +sumecAlCoach;
        });

        //Co-Facilitator
        $("#tableCofaci > tr").each(function () {
            efCofaci++;

            sum22 =
                $(this).find(`#ef_CofaciNoc${efCofaci}`).val().replace(/,/g, "") *
                    +$(this).find(`#ef_CofaciHf`).val().replace(/\₱|,/g, "") *
                    $(this).find(`#ef_CofaciNoh${efCofaci}`).val().replace(/,/g, "") +
                $(this).find(`#ef_CofaciNwh${efCofaci}`).val().replace(/,/g, "") *
                    ($(this).find(`#ef_CofaciNoc${efCofaci}`).val().replace(/,/g, "") *
                        +$(this)
                            .find(`#ef_CofaciHf`)
                            .val()
                            .replace(/\₱|,/g, "") *
                        $(this).find(`#ef_CofaciNoh${efCofaci}`).val().replace(/,/g, "") *
                        $("#nswh").val());

            if (
                gaPercentage.val() == "G.A Hybrid" ||
                gaPercentage.val() == "G.A Virtual"
            ) {
                sum22 +=
                    sum22 *
                    (document.getElementById("ga-only-dropdown").value / 100);
            }

            //lead consultant engagement fees sum
            $(this)
                .find("#subtotal-coFacilitator")
                .html(currency.format(Math.ceil(sum22)));

            //sum of engagement cost program sum
            efProgramSum += sum22;
            //sum of engagement cost
            sum += +sum22;
        });

        $("#ec_TableCofaci > tr").each(function () {
            // Getting the value of engagement fees of Moderator to pass the value
            // into the engagement cost Moderator
            // $("#ec_CofacilitatorNoc1").val($("#ef_CofaciNoc1").val());
            // $("#ec_CofacilitatorNoh1").val($("#ef_CofaciNoh1").val());
            // $("#ec_CofacilitatorNwh1").val($("#ef_CofaciNwh1").val());
            // document.getElementById("ec_CofacilitatorNoc1").defaultValue = $("#ef_CofaciNoc1").val();
            // document.getElementById("ec_CofacilitatorNoh1").defaultValue = $("#ef_CofaciNoh1").val();
            // document.getElementById("ec_CofacilitatorNwh1").defaultValue = $("#ef_CofaciNwh1").val();

            ecCofaci++

            //program engagement cost auto sum
            sumecCofacilitator =
                $(this).find(`#ec_CofacilitatorNoc${ecCofaci}`).val().replace(/,/g, "") *
                    $(this).find(`#ec_CofacilitatorHf${ecCofaci}`).val().replace(/,/g, "") *
                    $(this).find(`#ec_CofacilitatorNoh${ecCofaci}`).val().replace(/,/g, "") +
                $(this).find(`#ec_CofacilitatorNwh${ecCofaci}`).val().replace(/,/g, "") *
                    ($(this).find(`#ec_CofacilitatorNoc${ecCofaci}`).val().replace(/,/g, "") *
                        $(this).find(`#ec_CofacilitatorHf${ecCofaci}`).val().replace(/,/g, "") *
                        $(this).find(`#ec_CofacilitatorNoh${ecCofaci}`).val().replace(/,/g, "") *
                        $("#nswh").val());

            //if the customized type value is G.A
            if (
                gaPercentage.val() == "G.A Hybrid" ||
                gaPercentage.val() == "G.A Virtual"
            ) {
                sumecCofacilitator +=
                    sumecCofacilitator *
                    (document.getElementById("ga-only-dropdown").value / 100);
            }

            //lead consultant engagement fees sum
            $(this)
            .find("#ec_CofacilitatorTotal")
            .html(currency.format(Math.ceil(sumecCofacilitator)));

            //sum of engagement cost program sum
            ecProgramSum += sumecCofacilitator;
            //adding the subtotal of analyst into sum the sum of engagement cost
            sumEngagementCost += +sumecCofacilitator;
        });

        //Moderator
        $("#tableModerator > tr").each(function () {
            efModerator++;

            sum23 =
                $(this).find(`#ef_ModeratorNoc${efModerator}`).val().replace(/,/g, "") *
                    +$(this)
                        .find(`#ef_ModeratorHf`)
                        .val()
                        .replace(/\₱|,/g, "") *
                    $(this).find(`#ef_ModeratorNoh${efModerator}`).val().replace(/,/g, "") +
                $(this).find(`#ef_ModeratorNwh${efModerator}`).val().replace(/,/g, "") *
                    ($(this).find(`#ef_ModeratorNoc${efModerator}`).val().replace(/,/g, "") *
                        +$(this)
                            .find(`#ef_ModeratorHf`)
                            .val()
                            .replace(/\₱|,/g, "") *
                        $(this).find(`#ef_ModeratorNoh${efModerator}`).val().replace(/,/g, "") *
                        $("#nswh").val());

            if (
                gaPercentage.val() == "G.A Hybrid" ||
                gaPercentage.val() == "G.A Virtual"
            ) {
                sum23 +=
                    sum23 *
                    (document.getElementById("ga-only-dropdown").value / 100);
            }

            //Moderator engagement fees sum
            $(this)
                .find("#subtotal-moderator")
                .html(currency.format(Math.ceil(sum23)));

            efProgramSum += +sum23;
            sum += +sum23;
        });

        $("#ec_tableModerator > tr").each(function () {
            // Getting the value of engagement fees of Moderator to pass the value
            // into the engagement cost Moderator
            // $("#ec_ModeratorNoc1").val($("#ef_ModeratorNoc1").val());
            // $("#ec_ModeratorNoh1").val($("#ef_ModeratorNoh1").val());
            // $("#ec_ModeratorNwh1").val($("#ef_ModeratorNwh1").val());
            // document.getElementById("ec_ModeratorNoc1").defaultValue = $("#ef_ModeratorNoc1").val();
            // document.getElementById("ec_ModeratorNoh1").defaultValue = $("#ef_ModeratorNoh1").val();
            // document.getElementById("ec_ModeratorNwh1").defaultValue = $("#ef_ModeratorNwh1").val();

            ecModerator++;

            //Moderator engagement cost auto sum
            sumecModerator =
                $(this).find(`#ec_ModeratorNoc${ecModerator}`).val().replace(/,/g, "") *
                    $(this).find(`#ec_ModeratorHf${ecModerator}`).val().replace(/,/g, "") *
                    $(this).find(`#ec_ModeratorNoh${ecModerator}`).val().replace(/,/g, "") +
                $(this).find(`#ec_ModeratorNwh${ecModerator}`).val().replace(/,/g, "") *
                    ($(this).find(`#ec_ModeratorNoc${ecModerator}`).val().replace(/,/g, "") *
                        $(this).find(`#ec_ModeratorHf${ecModerator}`).val().replace(/,/g, "") *
                        $(this).find(`#ec_ModeratorNoh${ecModerator}`).val().replace(/,/g, "") *
                        $("#nswh").val());
                //         ||
                // $(this).find(`#ec_ModeratorNoc${ecModerator}`).val().replace(/,/g, "") *
                //     $(this).find(`#ec_ModeratorInputHf6${ecModerator}`).val().replace(/,/g, "") *
                //     $(this).find(`#ec_ModeratorNoh${ecModerator}`).val().replace(/,/g, "") +
                // $(this).find(`#ec_ModeratorNwh${ecModerator}`).val().replace(/,/g, "") *
                //     ($(this).find(`#ec_ModeratorNoc${ecModerator}`).val().replace(/,/g, "") *
                //         $(this).find(`#ec_ModeratorInputHf6${ecModerator}`).val().replace(/,/g, "") *
                //         $(this).find(`#ec_ModeratorNoh${ecModerator}`).val().replace(/,/g, "") *
                //         $("#nswh").val());

            //if the customized type value is G.A
            if (
                gaPercentage.val() == "G.A Hybrid" ||
                gaPercentage.val() == "G.A Virtual"
            ) {
                sumecModerator +=
                    sumecModerator *
                    (document.getElementById("ga-only-dropdown").value / 100);
            }

            //Moderator engagement fees sum
            $(this)
            .find("#ec_ModeratorTotal")
            .html(currency.format(Math.ceil(sumecModerator)));

            //adding the subtotal of analyst into sum the sum of engagement cost
            ecProgramSum += +sumecModerator;
            sumEngagementCost += +sumecModerator;
        });

        //Producer
        efProducer = 0;
        $("#tableProducer > tr").each(function () {
            efProducer++;

            sum24 =
                $(this).find(`#ef_ProducerNoc${efProducer}`).val().replace(/,/g, "") *
                    +$(this).find("#ef_ProducerHf").val().replace(/\₱|,/g, "") *
                    $(this).find(`#ef_ProducerNoh${efProducer}`).val().replace(/,/g, "") +
                $(this).find(`#ef_ProducerNwh${efProducer}`).val().replace(/,/g, "") *
                    ($(this).find(`#ef_ProducerNoc${efProducer}`).val().replace(/,/g, "") *
                        +$(this)
                            .find("#ef_ProducerHf")
                            .val()
                            .replace(/\₱|,/g, "") *
                        $(this).find(`#ef_ProducerNoh${efProducer}`).val().replace(/,/g, "") *
                        $("#nswh").val());

            if (
                gaPercentage.val() == "G.A Hybrid" ||
                gaPercentage.val() == "G.A Virtual"
            ) {
                sum24 +=
                    sum24 *
                    (document.getElementById("ga-only-dropdown").value / 100);
            }

            //Producer engagement fees sum
            $(this)
                .find("#subtotal-producer")
                .html(currency.format(Math.ceil(sum24)));

            efProgramSum += +sum24;
            sum += +sum24;
        });

        ecProducer = 0;
        $("#ec_TableProducer > tr").each(function () {
            // Getting the value of engagement fees of Producer to pass the value
            // into the engagement cost Producer
            // $("#ec_ProducerNoc1").val($("#ef_ProducerNoc1").val());
            // $("#ec_ProducerNoh1").val($("#ef_ProducerNoh1").val());
            // $("#ec_ProducerNwh1").val($("#ef_ProducerNwh1").val());
            // document.getElementById("ec_ProducerNoc1").defaultValue = $("#ef_ProducerNoc1").val();
            // document.getElementById("ec_ProducerNoh1").defaultValue = $("#ef_ProducerNoh1").val();
            // document.getElementById("ec_ProducerNwh1").defaultValue = $("#ef_ProducerNwh1").val();

            ecProducer++;

            //Producer engagement cost auto sum
            sumecProducer =
                $(this).find(`#ec_ProducerNoc${ecProducer}`).val().replace(/,/g, "") *
                    $(this).find(`#ec_ProducerHf${ecProducer}`).val().replace(/,/g, "") *
                    $(this).find(`#ec_ProducerNoh${ecProducer}`).val().replace(/,/g, "") +
                $(this).find(`#ec_ProducerNwh${ecProducer}`).val().replace(/,/g, "") *
                    ($(this).find(`#ec_ProducerNoc${ecProducer}`).val().replace(/,/g, "") *
                        $(this).find(`#ec_ProducerHf${ecProducer}`).val().replace(/,/g, "") *
                        $(this).find(`#ec_ProducerNoh${ecProducer}`).val().replace(/,/g, "") *
                        $("#nswh").val());

            //if the customized type value is G.A
            if (
                gaPercentage.val() == "G.A Hybrid" ||
                gaPercentage.val() == "G.A Virtual"
            ) {
                sumecProducer +=
                    sumecProducer *
                    (document.getElementById("ga-only-dropdown").value / 100);
            }

            //Producer engagement fees sum
            $(this)
            .find("#ec_ProducerTotal")
            .html(currency.format(Math.ceil(sumecProducer)));

            //adding the subtotal of analyst into sum the sum of engagement cost
            ecProgramSum += +sumecProducer;
            sumEngagementCost += +sumecProducer;
        });
        $("#program-subtotal").html(currency.format(Math.ceil(efProgramSum))
        );
        $("#ec_ProgramSubtotal").html(currency.format(Math.ceil(ecProgramSum)));

        /*******************************************************DOCUMENTOR******************************************************************/
        efDocumentor = 0;
        $("#tableDocumentor > tr").each(function () {
            efDocumentor++;
            sum28 =
                $(this).find(`#ef_DocumentorNoc${efDocumentor}`).val().replace(/,/g, "") *
                    +$(this)
                        .find("#ef_DocumentorHf")
                        .val()
                        .replace(/\₱|,/g, "") *
                    $(this).find(`#ef_DocumentorNoh${efDocumentor}`).val().replace(/,/g, "") +
                $(this).find(`#ef_DocumentorNwh${efDocumentor}`).val().replace(/,/g, "") *
                    ($(this).find(`#ef_DocumentorNoc${efDocumentor}`).val().replace(/,/g, "") *
                        +$(this)
                            .find("#ef_DocumentorHf")
                            .val()
                            .replace(/\₱|,/g, "") *
                        $(this).find(`#ef_DocumentorNoh${efDocumentor}`).val().replace(/,/g, "") *
                        $("#nswh").val());

            if (
                gaPercentage.val() == "G.A Hybrid" ||
                gaPercentage.val() == "G.A Virtual"
            ) {
                sum28 +=
                    sum28 *
                    (document.getElementById("ga-only-dropdown").value / 100);
            }

            //Producer engagement fees sum
            $(this).find("#subtotal-documentor").html(currency.format(Math.ceil(sum28)));

            sum += +sum28;
        });

        ecDocumentor = 0;
        $("#ec_TableDocumentor > tr").each(function () {
            // Getting the value of engagement fees of Documentor to pass the value
            // into the engagement cost Documentor
            // $("#ec_DocumentorNoc1").val($("#ef_DocumentorNoc1").val());
            // $("#ec_DocumentorNoh1").val($("#ef_DocumentorNoh1").val());
            // $("#ec_DocumentorNwh1").val($("#ef_DocumentorNwh1").val());
            // document.getElementById("ec_DocumentorNoc1").defaultValue = $("#ef_DocumentorNoc1").val();
            // document.getElementById("ec_DocumentorNoh1").defaultValue = $("#ef_DocumentorNoh1").val();
            // document.getElementById("ec_DocumentorNwh1").defaultValue = $("#ef_DocumentorNwh1").val();

            ecDocumentor++;

            //Documentor engagement cost auto sum
            sumecDocumentor =
                $(this).find(`#ec_DocumentorNoc${ecDocumentor}`).val().replace(/,/g, "") *
                    $(this).find("#ec_DocumentorHf").val().replace(/\₱|,/g, "") *
                    $(this).find(`#ec_DocumentorNoh${ecDocumentor}`).val().replace(/,/g, "") +
                $(this).find(`#ec_DocumentorNwh${ecDocumentor}`).val().replace(/,/g, "") *
                    ($(this).find(`#ec_DocumentorNoc${ecDocumentor}`).val().replace(/,/g, "") *
                        $(this).find("#ec_DocumentorHf").val().replace(/\₱|,/g, "") *
                        $(this).find(`#ec_DocumentorNoh${ecDocumentor}`).val().replace(/,/g, "") *
                        0.2);

            //if the customized type value is G.A
            if (
                gaPercentage.val() == "G.A Hybrid" ||
                gaPercentage.val() == "G.A Virtual"
            ) {
                sumecDocumentor +=
                    sumecDocumentor *
                    (document.getElementById("ga-only-dropdown").value / 100);
            }

            //Documentor engagement cost sum
            $(this).find("#ec_DocumentorTotal").html(currency.format(Math.ceil(sumecDocumentor)));

            //adding the subtotal of analyst into sum the sum of engagement cost
            sumEngagementCost += +sumecDocumentor;
        });


        /*******************************************************Off Program fee******************************************************************/
        $("#ec_ProgramHf").each(function () {
            sumecOffprogram +=
                $("#ec_ProgramNoc").val().replace(/,/g, "") *
                $("#ec_ProgramHf").val().replace(/\₱|,/g, "");

            if (
                gaPercentage.val() == "G.A Hybrid" ||
                gaPercentage.val() == "G.A Virtual"
            ) {
                sumecOffprogram +=
                    sumecOffprogram *
                    (document.getElementById("ga-only-dropdown").value / 100);
            }
            sumEngagementCost += +sumecOffprogram;
        });
        $("#ec_ProgramTotal").html(currency.format(Math.ceil(sumecOffprogram)));

        /*******************************************************Program Expense******************************************************************/
        $("#ec_Programexpense").each(function () {
            sumecProgramexpense +=
                ($(this).val().replace(/%/g, "") *
                    $("#ef_Totalpackage").val().replace(/\₱|,/g, "")) /
                100;

            sumEngagementCost += +sumecProgramexpense;
        });
        $("#ec_ProgramexpenseTotal").html(currency.format(Math.ceil(sumecProgramexpense)) );

        /*******************************************TOTAL STANDARD FEES**********************************************************************/
        $("#total-standard").html(currency.format(Math.ceil(sum)));
        //TOTAL PACKAGE
        // document.getElementById("ef_Totalpackage").defaultValue = $("#total-standard").html();

        /********************************************DISCOUNTS*******************************************************************************/
        $("#ef_Totalpackage").each(function () {
            sum32 += (1 - +$(this).val().replace(/\₱|,/g, "") / sum) * 100;

            if (sum32 > 100) {
                sumDiscount = sum32 - 100;
                $("#input-discount").val("-" + sumDiscount + "%");
            } else if (isNaN(sum32) != 0) {
                $("#input-discount").val(100 + "%");
            } else {
                sumDiscount = Math.round(sum32);
                $("#input-discount").val(sumDiscount + "%");
            }
        });

        //Sales
        // sumSalesPercent = 0;
        sumInputSales = 0;
        $("#tableSales > tr").each(function () {

            if (document.getElementById("sales").disabled === false) {
                sumSales =
                ($("#ef_Totalpackage").val().replace(/\₱|,/g, "") / 100) *
                    $(this).find("#sales").val().replace(/\%/g, "")
            } else {
                sumSales =
                ($("#ef_Totalpackage").val().replace(/\₱|,/g, "") / 100) *
                    $(this).find("#inputSales").val().replace(/\%/g, "")
            };

            //Producer engagement fees sum
            $(this)
                .find("#salesTotal")
                .html(currency.format(Math.ceil(sumSales)));

            sumEngagementCost += +sumSales;
        });

        //Referral
        $("#tableReferral > tr").each(function () {

            if (document.getElementById("referral").disabled === false) {
                sumReferral =
                ($("#ef_Totalpackage").val().replace(/\₱|,/g, "") / 100) *
                    $(this).find("#referral").val().replace(/\%/g, "")
            } else {
                sumReferral =
                ($("#ef_Totalpackage").val().replace(/\₱|,/g, "") / 100) *
                    $(this).find("#inputReferral").val().replace(/\%/g, "")
            };

            $(this)
                .find("#referralTotal")
                .html(currency.format(Math.ceil(sumReferral)));
            sumEngagementCost += +sumReferral;
        });

        //Engagement Manager
        $("#tableEngagementmanager > tr").each(function () {

            if (document.getElementById("engagementManager").disabled === false) {
                sumEngagementManager =
                ($("#ef_Totalpackage").val().replace(/\₱|,/g, "") / 100) *
                    $(this).find("#engagementManager").val().replace(/\%/g, "")
            } else {
                sumEngagementManager =
                ($("#ef_Totalpackage").val().replace(/\₱|,/g, "") / 100) *
                    $(this).find("#inputManager").val().replace(/%/g, "")
            };

            // sumEngagementManager =
            //     ($("#ef_Totalpackage").val().replace(/\₱|,/g, "") / 100) *
            //         $(this).find("#engagementManager").val().replace(/\%/g, "") ||
            //     ($("#ef_Totalpackage").val().replace(/\₱|,/g, "") / 100) *
            //         $(this).find("#inputManager").val().replace(/%/g, "");

            $(this)
                .find("#engagementManagerTotal")
                .html(currency.format(Math.ceil(sumEngagementManager)));
            sumEngagementCost += +sumEngagementManager;
        });

        /***********************ENGAGEMENT COST TOTAL FEES***********************/
        $("#ec_Total").html(currency.format(Math.ceil(sumEngagementCost)));

        /***********************PROFIT FORECAST***********************/
        //profit
        sumProfit = $("#ef_Totalpackage").val().replace(/\₱|,/g, "") - sumEngagementCost;
        $("#Profit").html(currency.format(Math.ceil(sumProfit)));

        //Less: Contribution to Overhead
        sumCto = 0;
        $("#LessCTO_NOC").each(function () {
            sumCto +=
                ($("#ef_Totalpackage").val().replace(/\₱|,/g, "") *
                    $(this).val()) / 100;
        });

        $("#LessContributionToOverhead").html(
            currency.format(Math.ceil(sumCto))
        );

        //Net profit
        sumNetprofit = sumProfit - sumCto;
        $("#NetProfit").html(currency.format(Math.ceil(sumNetprofit)));

        //Profit margin
        sumProfitmargin = (sumNetprofit / $("#ef_Totalpackage").val().replace(/\₱|,/g, "")) * 100;
        if (isNaN(sumProfitmargin) || sumProfitmargin === Number.NEGATIVE_INFINITY){
            $("#ProfitMargin").html("0");
        }
        else {
            $("#ProfitMargin").html(Math.floor(sumProfitmargin) + "%");
        }

});
/*************************************** END CUSTOMIZED ENGAGEMENT BUDGET FORM COMPUTATION ****************************************************/

//*************************************** APPEND NUMBER FORMAT ********************************************************//
$(document).on(
    "load change keyup click",
    "#ec_tableEngagementFees, #ec_tableEngagementCost, #tableLeadfaci",
    function () {
        // Jquery Dependency
        $("input[data-type='currency']").on({
            keyup: function () {
                formatCurrency($(this));
            },
            blur: function () {
                formatCurrency($(this), "blur");
            },
        });

        function formatNumber(n) {
            // format number 1000000 to 1,234,567
            return n.replace(/\D/g, "").replace(/\B(?=(\d{3})+(?!\d))/g, ",");
        }

        function formatCurrency(input) {
            // appends $ to value, validates decimal side
            // and puts cursor back in right position.

            // get input value
            var input_val = input.val();

            // don't validate empty input
            if (input_val === "") {
                return;
            }

            // original length
            var original_len = input_val.length;

            // initial caret position
            var caret_pos = input.prop("selectionStart");

            // check for decimal
            if (input_val.indexOf(".") >= 0) {
                // get position of first decimal
                // this prevents multiple decimals from
                // being entered
                var decimal_pos = input_val.indexOf(".");

                // split number by decimal point
                var left_side = input_val.substring(0, decimal_pos);
                var right_side = input_val.substring(decimal_pos);

                // add commas to left side of number
                left_side = formatNumber(left_side);

                // validate right side
                right_side = formatNumber(right_side);

                // On blur make sure 2 numbers after decimal
                // if (blur === "blur") {
                //     right_side += "00";
                // }
                // join number by .
                input_val = left_side + "." + right_side;
                } else {
                    // no decimal entered
                    // add commas to number
                    // remove all non-digits
                    input_val = formatNumber(input_val);
                    input_val = input_val;
                }

            // send updated string to input
            input.val(input_val);

            // put caret back in the right position
            var updated_len = input_val.length;
            caret_pos = updated_len - original_len + caret_pos;
            input[0].setSelectionRange(caret_pos, caret_pos);
        }
    }
);

//To be announce
// document.getElementById("dcbeCheck").addEventListener("click", myFunction);
// function myFunction() {
//     var checkBox = document.getElementById("dcbeCheck");
//     var DatesCoveredByEngagement = $("#dcbe");
//     var DateRows = $("#dateRows");
//     // $("#dcacl").children().attr("disabled","disabled");
//     if (checkBox.checked == false) {
//         DatesCoveredByEngagement.show();
//         DateRows.removeAttr("disabled","disabled");
//     } else {
//         DatesCoveredByEngagement.hide();
//         DateRows.attr("disabled","disabled");
//         // $(".date").val(" ");
//         // $(".start-time").val(" ");
//         // $(".end-time").val(" ");
//     }
// };

//datepicker
$(document).on("click change focus", "#dcbe", function() {
    $(".datepicker").each(function () {
        $(this).datepicker();
        $(this).on("change", function () {
            $(this).datepicker("option", "dateFormat", "M d, yy");
        });
    });

    // $(function () {
    //     $("#datepicker").datepicker();
    //     $("#datepicker").on("change", function () {
    //         $("#datepicker").datepicker("option", "dateFormat", "M d, yy");
    //     });
    // });
});

$('input[type="number"]').on("input", function () {
    this.value =
        !!this.value && Math.abs(this.value) >= 0 ? Math.abs(this.value) : null;
});
$('input[type="number"]').attr("min", "0");

//*************************************** CURRENCY FORMATTER ********************************************************//
$(document).ready(function() {
    //currency format
    // let currency = Intl.NumberFormat("en-US");
    // $(".commanumber").each(function () {
    //     $(this).val(currency.format($(this).val()));
    // });

    //percentage string of program expense
    $("#ec_Programexpense").on("blur", function () {
        $(this).val(function (i, v) {
            return v.replace("%", "") + "%";
        });
    });
});
// $(document).ready(function () {
//     let currency = Intl.NumberFormat("en-US");
//     $(".commanumber").each(function () {
//         $(this).val(currency.format($(this).val()));
//     });
// });
