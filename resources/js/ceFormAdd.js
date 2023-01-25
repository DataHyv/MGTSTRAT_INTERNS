let currency = Intl.NumberFormat("en-US");
//default value in ANALYST
document.getElementById("ef_AnalystHf").defaultValue = currency.format(
    Math.ceil(5000)
);
//default value CO-FACILITATOR
document.getElementById("ef_CofaciHf").defaultValue = currency.format(
    Math.ceil(5000)
);
//default value in MODERATOR
document.getElementById("ef_ModeratorHf").defaultValue = currency.format(
    Math.ceil(3500)
);
//default value in PRODUCER
document.getElementById("ef_ProducerHf").defaultValue = currency.format(
    Math.ceil(2500)
);
//default value in DOCUMENTOR
document.getElementById("ef_DocumentorHf").defaultValue = currency.format(
    Math.ceil(2500)
);

document.getElementById("ec_AnalystHf1").defaultValue = currency.format(
    Math.ceil(1700)
);
// document.getElementById("ec_LeadfacilitatorHf1").defaultValue = currency.format(
//     Math.ceil(3000)
// );
// document.getElementById("ec_LeadconsultantHf1").defaultValue = currency.format(
//     Math.ceil(0.85 * $("#ec_LeadfacilitatorHf1").val().replace(/\₱|,/g, ""))
// );
// document.getElementById("ec_DesignerHf1").defaultValue = currency.format(
//     Math.ceil(2250)
// );
// document.getElementById("ec_CofacilitatorHf1").defaultValue = currency.format(
//     Math.ceil(1800)
// );
// document.getElementById("ec_ProducerHf").defaultValue = currency.format(
//     Math.ceil(550)
// );
document.getElementById("ec_DocumentorHf").defaultValue = currency.format(
    Math.ceil(700)
);
document.getElementById("ec_ProgramHf").defaultValue = currency.format(
    Math.ceil(1000)
);
document.getElementById("ec_Programexpense").defaultValue = 2 + "%";

$("#ec_Programexpense").on("blur", function () {
    $(this).val(function (i, v) {
        return v.replace("%", "") + "%";
    });
});

//INFORMATION
$("document").ready(function () {
    /*************************************STATUS**************************************/
    //DEFAULT COLOR
    $("#status").css("background-color", "#007bff");
    $("#status").css("color", "white");
    $("#status option").css("background-color", "white");
    $("#status option").css("color", "black");

    //ASSIGN EVENT LISTENER IN STATUS
    document.getElementById("status").addEventListener("change", status);

    //EVENT OF STATUS
    function status() {
        var status = document.getElementById("status").value;
        if (status == "Confirmed") {
            $("#status").css("background-color", "#007bff");
            $("#status").css("color", "white");
            $("#status option").css("background-color", "white");
            $("#status option").css("color", "black");
        } else if (status == "In-progress") {
            $("#status").css("background-color", "#ffc107");
            $("#status").css("color", "black");
            $("#status option").css("background-color", "white");
            $("#status option").css("color", "black");
        } else if (status == "Completed") {
            $("#status").css("background-color", "#28a745");
            $("#status").css("color", "white");
            $("#status option").css("background-color", "white");
            $("#status option").css("color", "black");
        } else if (status == "Lost") {
            $("#status").css("background-color", "#dc3545");
            $("#status").css("color", "white");
            $("#status option").css("background-color", "white");
            $("#status option").css("color", "black");
        } else if (status == "Trial") {
            $("#status").css("background-color", "#17a2b8");
            $("#status").css("color", "white");
            $("#status option").css("background-color", "white");
            $("#status option").css("color", "black");
        }
    }
});

//NSWH
$(document).on(
    "load change click",
    ".customized-engagement, .nswh-percent",
    function () {
        $(".nswh-percent-value").val($("#nswh").val());
    }
);

//ENGAGEMENT FEES VALUE PASS TO ENGAGEMENT COST VALUE
$(document).on(
    "load change click",
    "#ec_tableEngagementFees, #ec_tableEngagementCost",
    function () {
        document.getElementById("ec_LeadconsultantNoc1").defaultValue = $(
            "#ef_LeadconsultantNoc1"
        ).val();
        document.getElementById("ec_LeadconsultantNoh1").defaultValue = $(
            "#ef_LeadconsultantNoh1"
        ).val();
        document.getElementById("ec_LeadconsultantNwh1").defaultValue = $(
            "#ef_LeadconsultantNwh1"
        ).val();
        document.getElementById("ec_AnalystNoc1").defaultValue =
            $("#ef_AnalystNoc1").val();
        document.getElementById("ec_AnalystNoh1").defaultValue =
            $("#ef_AnalystNoh1").val();
        document.getElementById("ec_AnalystNwh1").defaultValue =
            $("#ef_AnalystNwh1").val();
        document.getElementById("ec_DesignerNoc1").defaultValue =
            $("#ef_DesignerNoc1").val();
        document.getElementById("ec_DesignerNoh1").defaultValue =
            $("#ef_DesignerNoh1").val();
        document.getElementById("ec_DesignerNwh1").defaultValue =
            $("#ef_DesignerNwh1").val();
        document.getElementById("ec_LeadfacilitatorNoc1").defaultValue = $(
            "#ef_LeadfacilitatorNoc1"
        ).val();
        document.getElementById("ec_LeadfacilitatorNoh1").defaultValue = $(
            "#ef_LeadfacilitatorNoh1"
        ).val();
        document.getElementById("ec_LeadfacilitatorNwh1").defaultValue = $(
            "#ef_LeadfacilitatorNwh1"
        ).val();
        document.getElementById("ec_CofacilitatorNoc1").defaultValue =
            $("#ef_CofaciNoc1").val();
        document.getElementById("ec_CofacilitatorNoh1").defaultValue =
            $("#ef_CofaciNoh1").val();
        document.getElementById("ec_CofacilitatorNwh1").defaultValue =
            $("#ef_CofaciNwh1").val();
        document.getElementById("ec_ModeratorNoc1").defaultValue =
            $("#ef_ModeratorNoc1").val();
        document.getElementById("ec_ModeratorNoh1").defaultValue =
            $("#ef_ModeratorNoh1").val();
        document.getElementById("ec_ModeratorNwh1").defaultValue =
            $("#ef_ModeratorNwh1").val();
        document.getElementById("ec_ProducerNoc1").defaultValue =
            $("#ef_ProducerNoc1").val();
        document.getElementById("ec_ProducerNoh1").defaultValue =
            $("#ef_ProducerNoh1").val();
        document.getElementById("ec_ProducerNwh1").defaultValue =
            $("#ef_ProducerNwh1").val();
        document.getElementById("ec_DocumentorNoc1").defaultValue =
            $("#ef_DocumentorNoc1").val();
        document.getElementById("ec_DocumentorNoh1").defaultValue =
            $("#ef_DocumentorNoh1").val();
        document.getElementById("ec_DocumentorNwh1").defaultValue =
            $("#ef_DocumentorNwh1").val();
    }
);

//LEAD FACILITATOR DROPDOWN SCRIPT
$(document).ready(function () {
    $("#tableLeadfaci").each(function () {
        $(`#ef_LeadfacilitatorHf1`).click(function () {
            var others = $(`#ef_LeadfacilitatorHf1`);
            if ($("#others1").is(":selected")) {
                $(`#inputLeadfaci1`).css("display", "");
                $(`#ef_InputLeadFaciHf1`).prop("disabled", false);
                $(`#ef_InputLeadFaciHf1`).val("");
                $(`#ef_LeadfacilitatorHf1`).prop("disabled", true);
                $(`#ef_LeadfacilitatorHf1`).css("display", "none");
            } else {
                $(`#inputLeadfaci1`).css("display", "none");
            }
        });

        $("#deleteIcon1").click(function () {
            $(`#inputLeadfaci1`).css("display", "none");
            $(`#ef_InputLeadFaciHf1`).prop("disabled", true);
            $(`#ef_LeadfacilitatorHf1`).prop("disabled", false);
            $(`#ef_LeadfacilitatorHf1`).css("display", "");
            $(`#ef_LeadfacilitatorHf1`).val("12,000");
        });
    });
});

//ENGAGEMENT FEES STANDARD FEES PASS TO TOTAL PACKAGE INPUT FIELD
$(document).on(
    "load keyup change click",
    "#ec_tableEngagementFees",
    function () {
        document.getElementById("ef_Totalpackage").defaultValue =
            $("#total-standard").html();
    }
);

document.addEventListener("keypress", function (e) {
    if (e.keyCode === 13 || e.which === 13) {
        e.preventDefault();
        return false;
    }
});

// $(document).ready(function(){
//     $('#client_id').on('change',function(){
//         $value = $(this).val();
//         // $('#BatchNumber').val($value);
//         $('#ce_client_id').val($value);
//     })
// });

//SESSION AND BATCH NUMBER FUNCTION
// $(document).on( "load keyup", "#main", function () {
//     var session_count = $('#SessionNumber').val();
//     var batch_count = $('#BatchNumber').val();
//     var total_count = $('#SessionNumber').val() * $('#BatchNumber').val();

//         $(`#ef_LeadconsultantNoh1`).attr('value', total_count);
//         $(`#ef_AnalystNoh1`).attr('value', total_count);
//         $(`#ef_DesignerNoh1`).attr('value', total_count);
//         $(`#ef_AnalystNoh1`).attr('value', total_count);
//         $(`#ef_LeadfacilitatorNoh1`).attr('value', total_count);
//         $(`#ef_CofaciNoh1`).attr('value', total_count);
//         $(`#ef_ModeratorNoh1`).attr('value', total_count);
//         $(`#ef_ProducerNoh1`).attr('value', total_count);
//         $(`#ef_DocumentorNoh1`).attr('value', total_count);
// });

//ROSTER RATE AUTO INPUT
$(document).on(
    "load change keyup click",
    "#main, #ec_tableEngagementCost",
    function () {

    // LEAD CONSULTANT
    leadConsultant = 0;
    $("#ec_tableLeadConsultant > tr").each(function () {
        leadConsultant++;

        let roster = $(`#roster${leadConsultant}`).val();

        switch (roster.toUpperCase()) {
            case 'ADDISON':
                hourlyFees = 0;
                break;
            case 'ADRIAN':
                hourlyFees = 0;
                break;
            case 'ALBERTINE':
                hourlyFees = 0;
                break;
            case 'ALEX':
                hourlyFees = 3230;
                break;
            case 'ALLAN':
                hourlyFees = 0;
                break;
            case 'AMIT':
                hourlyFees = 2890;
                break;
            case 'ANDA':
                hourlyFees = 0;
                break;
            case 'ANNA':
                hourlyFees = 0;
                break;
            case 'ARYN':
                hourlyFees = 0;
                break;
            case 'AUDREY':
                hourlyFees = 1785;
                break;
            case 'AYEN':
                hourlyFees = 1530;
                break;
            case 'BASTE':
                hourlyFees = 0;
                break;
            case 'BEA':
                hourlyFees = 1955;
                break;
            case 'BEL':
                hourlyFees = 2125;
                break;
            case 'BENJIE':
                hourlyFees = 2975;
                break;
            case 'BILLY':
                hourlyFees = 1870;
                break;
            case 'BOOPSIE':
                hourlyFees = 0;
                break;
            case 'CANDICE':
                hourlyFees = 0;
                break;
            case 'CARLOS':
                hourlyFees = 1530;
                break;
            case 'CECILLE':
                hourlyFees = 0;
                break;
            case 'CELINE':
                hourlyFees = 2635;
                break;
            case 'CHESKA':
                hourlyFees = 2465;
                break;
            case 'CHESTER':
                hourlyFees = 0;
                break;
            case 'CINDY':
                hourlyFees = 1955;
                break;
            case 'CLYDE':
                hourlyFees = 0;
                break;
            case 'CONSY':
                hourlyFees = 0;
                break;
            case 'DAX':
                hourlyFees = 2465;
                break;
            case 'DIDITH':
                hourlyFees = 0;
                break;
            case 'DINGDONG':
                hourlyFees = 1955;
                break;
            case 'DOM':
                hourlyFees = 0;
                break;
            case 'EDS':
                hourlyFees = 0;
                break;
            case 'ELBERT':
                hourlyFees = 2125;
                break;
            case 'ELCEE':
                hourlyFees = 4250;
                break;
            case 'ELIZHA':
                hourlyFees = 1870;
                break;
            case 'ELMO':
                hourlyFees = 3315;
                break;
            case 'FAITH':
                hourlyFees = 1469.88;
                break;
            case 'FOREST':
                hourlyFees = 0;
                break;
            case 'GABE':
                hourlyFees = 0;
                break;
            case 'GM':
                hourlyFees = 2040;
                break;
            case 'GOODY':
                hourlyFees = 0;
                break;
            case 'IAN':
                hourlyFees = 0;
                break;
            case 'ICAR':
                hourlyFees = 3315;
                break;
            case 'JA':
                hourlyFees = 1615;
                break;
            case 'JAK':
                hourlyFees = 2380;
                break;
            case 'JEFF':
                hourlyFees = 0;
                break;
            case 'JELAINE':
                hourlyFees = 0;
                break;
            case 'JENNIE':
                hourlyFees = 3230;
                break;
            case 'JIM':
                hourlyFees = 2175;
                break;
            case 'JOI':
                hourlyFees = 3315;
                break;
            case 'JOLINA':
                hourlyFees = 2465;
                break;
            case 'JOSE CARLO T.':
                hourlyFees = 0;
                break;
            case 'KAREN':
                hourlyFees = 2635;
                break;
            case 'KARL':
                hourlyFees = 0;
                break;
            case 'KRISHNA':
                hourlyFees = 0;
                break;
            case 'LEO':
                hourlyFees = 3315;
                break;
            case 'LIANG':
                hourlyFees = 0;
                break;
            case 'LIZA':
                hourlyFees = 0;
                break;
            case 'LOURDES':
                hourlyFees = 0;
                break;
            case 'LUISA':
                hourlyFees = 2465;
                break;
            case 'MA. CELESTE C.':
                hourlyFees = 0;
                break;
            case 'MAITA':
                hourlyFees = 2975;
                break;
            case 'MARTIN':
                hourlyFees = 1870;
                break;
            case 'MARV':
                hourlyFees = 0;
                break;
            case 'MIGGY':
                hourlyFees = 2125;
                break;
            case 'MILES':
                hourlyFees = 0;
                break;
            case 'MONICA':
                hourlyFees = 1700;
                break;
            case 'NEMY':
                hourlyFees = 0;
                break;
            case 'NOELLE':
                hourlyFees = 2465;
                break;
            case 'OHMAR':
                hourlyFees = 0;
                break;
            case 'PAM':
                hourlyFees = 3315;
                break;
            case 'PAOLO':
                hourlyFees = 1870;
                break;
            case 'PARIS':
                hourlyFees = 0;
                break;
            case 'PAULA':
                hourlyFees = 2040;
                break;
            case 'PIA':
                hourlyFees = 2975;
                break;
            case 'RACHEL':
                hourlyFees = 0;
                break;
            case 'RAN':
                hourlyFees = 1955;
                break;
            case 'RAPHAEL':
                hourlyFees = 0;
                break;
            case 'ROCIO':
                hourlyFees = 0;
                break;
            case 'ROMEO':
                hourlyFees = 0;
                break;
            case 'RYAN':
                hourlyFees = 0;
                break;
            case 'SERGE':
                hourlyFees = 0;
                break;
            case 'SHAHEIN':
                hourlyFees = 0;
                break;
            case 'SHARON':
                hourlyFees = 2380;
                break;
            case 'SOHEIL':
                hourlyFees = 0;
                break;
            case 'TALA':
                hourlyFees = 2380;
                break;
            case 'THEA':
                hourlyFees = 0;
                break;
            case 'TINA':
                hourlyFees = 3315;
                break;
            case 'TJ':
                hourlyFees = 2720;
                break;
            case 'TON':
                hourlyFees = 0;
                break;
            case 'VAL':
                hourlyFees = 2975;
                break;
            case 'VAL B':
                hourlyFees = 1955;
                break;
            case 'VICTOR':
                hourlyFees = 0;
                break;
            case 'VINCE':
                hourlyFees = 0;
                break;
            case 'YEYE':
                hourlyFees = 2040;
                break;
            case 'TBA':
                hourlyFees = 2550;
                break;

            default:
                hourlyFees = 2550;
                document.getElementById(`roster${leadConsultant}`).defaultValue = 'TBA';
        }

        $(`#ec_LeadconsultantHf${leadConsultant}`).prop('readonly', true).val( currency.format(Math.ceil(hourlyFees)) );

    });

    // DESIGNER
    designer = 0;
    $("#ec_TableDesigner > tr").each(function () {
        designer++;

        let roster = $(`#roster2${designer}`).val();

        switch (roster.toUpperCase()) {
            case 'ADDISON':
                hourlyFees = 0;
                break;
            case 'ADRIAN':
                hourlyFees = 0;
                break;
            case 'ALBERTINE':
                hourlyFees = 0;
                break;
            case 'ALEX':
                hourlyFees = 2850;
                break;
            case 'ALLAN':
                hourlyFees = 0;
                break;
            case 'AMIT':
                hourlyFees = 2550;
                break;
            case 'ANDA':
                hourlyFees = 0;
                break;
            case 'ANNA':
                hourlyFees = 0;
                break;
            case 'ARYN':
                hourlyFees = 0;
                break;
            case 'AUDREY':
                hourlyFees = 1575;
                break;
            case 'AYEN':
                hourlyFees = 1350;
                break;
            case 'BASTE':
                hourlyFees = 0;
                break;
            case 'BEA':
                hourlyFees = 1725;
                break;
            case 'BEL':
                hourlyFees = 1875;
                break;
            case 'BENJIE':
                hourlyFees = 2625;
                break;
            case 'BILLY':
                hourlyFees = 1650;
                break;
            case 'BOOPSIE':
                hourlyFees = 0;
                break;
            case 'CANDICE':
                hourlyFees = 0;
                break;
            case 'CARLOS':
                hourlyFees = 1350;
                break;
            case 'CECILLE':
                hourlyFees = 0;
                break;
            case 'CELINE':
                hourlyFees = 2325;
                break;
            case 'CHESKA':
                hourlyFees = 2175;
                break;
            case 'CHESTER':
                hourlyFees = 0;
                break;
            case 'CINDY':
                hourlyFees = 1725;
                break;
            case 'CLYDE':
                hourlyFees = 0;
                break;
            case 'CONSY':
                hourlyFees = 0;
                break;
            case 'DAX':
                hourlyFees = 2175;
                break;
            case 'DINGDONG':
                hourlyFees = 1725;
                break;
            case 'DOM':
                hourlyFees = 0;
                break;
            case 'EDS':
                hourlyFees = 0;
                break;
            case 'ELBERT':
                hourlyFees = 1875;
                break;
            case 'ELCEE':
                hourlyFees = 3750;
                break;
            case 'ELIZHA':
                hourlyFees = 1650;
                break;
            case 'ELMO':
                hourlyFees = 2925;
                break;
            case 'FAITH':
                hourlyFees = 1296.88;
                break;
            case 'GABE':
                hourlyFees = 0;
                break;
            case 'GM':
                hourlyFees = 1800;
                break;
            case 'GOODY':
                hourlyFees = 0;
                break;
            case 'IAN':
                hourlyFees = 0;
                break;
            case 'ICAR':
                hourlyFees = 2925;
                break;
            case 'JA':
                hourlyFees = 1425;
                break;
            case 'JAK':
                hourlyFees = 2100;
                break;
            case 'JEFF':
                hourlyFees = 0;
                break;
            case 'JELAINE':
                hourlyFees = 0;
                break;
            case 'JENNIE':
                hourlyFees = 2850;
                break;
            case 'JIM':
                hourlyFees = 1125;
                break;
            case 'JOI':
                hourlyFees = 2925;
                break;
            case 'JOLINA':
                hourlyFees = 2175;
                break;
            case 'JOSE CARLO T.':
                hourlyFees = 0;
                break;
            case 'KAREN':
                hourlyFees = 2325;
                break;
            case 'KARL':
                hourlyFees = 0;
                break;
            case 'KRISHNA':
                hourlyFees = 0;
                break;
            case 'LEO':
                hourlyFees = 2925;
                break;
            case 'LIANG':
                hourlyFees = 0;
                break;
            case 'LIZA':
                hourlyFees = 0;
                break;
            case 'LOURDES':
                hourlyFees = 0;
                break;
            case 'LUISA':
                hourlyFees = 2175;
                break;
            case 'MA. CELESTE C.':
                hourlyFees = 2175;
                break;
            case 'MAITA':
                hourlyFees = 2625;
                break;
            case 'MARTIN':
                hourlyFees = 1650;
                break;
            case 'MARV':
                hourlyFees = 0;
                break;
            case 'MIGGY':
                hourlyFees = 1875;
                break;
            case 'MILES':
                hourlyFees = 0;
                break;
            case 'MONICA':
                hourlyFees = 1500;
                break;
            case 'NEMY':
                hourlyFees = 0;
                break;
            case 'NOELLE':
                hourlyFees = 2175;
                break;
            case 'OHMAR':
                hourlyFees = 0;
                break;
            case 'PAM':
                hourlyFees = 2925;
                break;
            case 'PAOLO':
                hourlyFees = 1650;
                break;
            case 'PARIS':
                hourlyFees = 0;
                break;
            case 'PAULA':
                hourlyFees = 1800;
                break;
            case 'PIA':
                hourlyFees = 2625;
                break;
            case 'RACHEL':
                hourlyFees = 0;
                break;
            case 'RAN':
                hourlyFees = 1725;
                break;
            case 'RAPHAEL':
                hourlyFees = 0;
                break;
            case 'ROCIO':
                hourlyFees = 0;
                break;
            case 'ROMEO':
                hourlyFees = 0;
                break;
            case 'RYAN':
                hourlyFees = 0;
                break;
            case 'SERGE':
                hourlyFees = 0;
                break;
            case 'SHAHEIN':
                hourlyFees = 0;
                break;
            case 'SHARON':
                hourlyFees = 2100;
                break;
            case 'SOHEIL':
                hourlyFees = 0;
                break;
            case 'TALA':
                hourlyFees = 2100;
                break;
            case 'THEA':
                hourlyFees = 0;
                break;
            case 'TINA':
                hourlyFees = 2925;
                break;
            case 'TJ':
                hourlyFees = 2400;
                break;
            case 'TON':
                hourlyFees = 0;
                break;
            case 'VAL':
                hourlyFees = 2625;
                break;
            case 'VAL B':
                hourlyFees = 1725;
                break;
            case 'VICTOR':
                hourlyFees = 0;
                break;
            case 'VINCE':
                hourlyFees = 0;
                break;
            case 'YEYE':
                hourlyFees = 1800;
                break;
            case 'TBA':
                hourlyFees = 2250;
                break;

            default:
                hourlyFees = 2250;
                document.getElementById(`roster2${leadConsultant}`).defaultValue = 'TBA';
        }

        $(`#ec_DesignerHf${designer}`).prop('readonly', true).val( currency.format(Math.ceil(hourlyFees)) );
        // document.getElementById(`ec_DesignerHf${designer}`).defaultValue = currency.format( Math.ceil(hourlyFees) );

    });

    // LEAD FACILITATOR
    leadfaci = 0;
    $("#ec_TableLeadfaci > tr").each(function () {
        leadfaci++;

        let roster = $(`#roster3${leadfaci}`).val();

        switch (roster.toUpperCase()) {
            case 'ALEX':
                hourlyFees = 3800;
                break;
            case 'AMIT':
                hourlyFees = 3400;
                break;
            case 'AUDREY':
                hourlyFees = 2100;
                break;
            case 'AYEN':
                hourlyFees = 1800;
                break;
            case 'BEA':
                hourlyFees = 2300;
                break;
            case 'BEL':
                hourlyFees = 2500;
                break;
            case 'BENJIE':
                hourlyFees = 3500;
                break;
            case 'BILLY':
                hourlyFees = 2200;
                break;
            case 'CARLOS':
                hourlyFees = 1800;
                break;
            case 'CELINE':
                hourlyFees = 3100;
                break;
            case 'CHESKA':
                hourlyFees = 2900;
                break;
            case 'CINDY':
                hourlyFees = 2300;
                break;
            case 'DAX':
                hourlyFees = 2900;
                break;
            case 'DINGDONG':
                hourlyFees = 2300;
                break;
            case 'ELBERT':
                hourlyFees = 2500;
                break;
            case 'ELCEE':
                hourlyFees = 5000;
                break;
            case 'ELIZHA':
                hourlyFees = 2200;
                break;
            case 'ELMO':
                hourlyFees = 3900;
                break;
            case 'FAITH':
                hourlyFees = 1729;
                break;
            case 'GM':
                hourlyFees = 2400;
                break;
            case 'ICAR':
                hourlyFees = 3900;
                break;
            case 'JA':
                hourlyFees = 1900;
                break;
            case 'JAK':
                hourlyFees = 2800;
                break;
            case 'JENNIE':
                hourlyFees = 3800;
                break;
            case 'JIM':
                hourlyFees = 1500;
                break;
            case 'JOI':
                hourlyFees = 3900;
                break;
            case 'JOLINA':
                hourlyFees = 2900;
                break;
            case 'KAREN':
                hourlyFees = 3100;
                break;
            case 'LEO':
                hourlyFees = 3900;
                break;
            case 'LUISA':
                hourlyFees = 2900;
                break;
            case 'MAITA':
                hourlyFees = 3500;
                break;
            case 'MARTIN':
                hourlyFees = 2200;
                break;
            case 'MIGGY':
                hourlyFees = 2500;
                break;
            case 'MONICA':
                hourlyFees = 2000;
                break;
            case 'NOELLE':
                hourlyFees = 2900;
                break;
            case 'PAM':
                hourlyFees = 3900;
                break;
            case 'PAOLO':
                hourlyFees = 2200;
                break;
            case 'PAULA':
                hourlyFees = 2400;
                break;
            case 'PIA':
                hourlyFees = 3500;
                break;
            case 'RAN':
                hourlyFees = 2300;
                break;
            case 'SHARON':
                hourlyFees = 2800;
                break;
            case 'TALA':
                hourlyFees = 2800;
                break;
            case 'TINA':
                hourlyFees = 3900;
                break;
            case 'TJ':
                hourlyFees = 3200;
                break;
            case 'VAL':
                hourlyFees = 3500;
                break;
            case 'VAL B':
                hourlyFees = 2300;
                break;
            case 'YEYE':
                hourlyFees = 2400;
                break;
            case 'TBA':
                hourlyFees = 3000;
                break;

            default:
                hourlyFees = 3000;
                document.getElementById(`roster3${leadConsultant}`).defaultValue = 'TBA';
        }

        $(`#ec_LeadfacilitatorHf${leadfaci}`).prop('readonly', true).val( currency.format(Math.ceil(hourlyFees)) );
        // document.getElementById(`ec_LeadfacilitatorHf${leadfaci}`).defaultValue = currency.format( Math.ceil(hourlyFees) );

    });

    // CO-LEAD FACILITATOR
    colead = 0;
    $("#ec_TableCoLeadfaci > tr").each(function () {
        colead++;

        let roster = $(`#roster4${colead}`).val();

        switch (roster.toUpperCase()) {
            case 'ADDISON':
                hourlyFees = 0;
                break;
            case 'ADRIAN':
                hourlyFees = 0;
                break;
            case 'ALBERTINE':
                hourlyFees = 0;
                break;
            case 'ALEX':
                hourlyFees = 2575;
                break;
            case 'ALLAN':
                hourlyFees = 0;
                break;
            case 'AMIT':
                hourlyFees = 2375;
                break;
            case 'ANDA':
                hourlyFees = 0;
                break;
            case 'ANNA':
                hourlyFees = 0;
                break;
            case 'ARYN':
                hourlyFees = 0;
                break;
            case 'AUDREY':
                hourlyFees = 1600;
                break;
            case 'AYEN':
                hourlyFees = 1450;
                break;
            case 'BASTE':
                hourlyFees = 0;
                break;
            case 'BEA':
                hourlyFees = 1700;
                break;
            case 'BEL':
                hourlyFees = 1800;
                break;
            case 'BENJIE':
                hourlyFees = 2425;
                break;
            case 'BILLY':
                hourlyFees = 1650;
                break;
            case 'BOOPSIE':
                hourlyFees = 0;
                break;
            case 'CANDICE':
                hourlyFees = 0;
                break;
            case 'CARLOS':
                hourlyFees = 1450;
                break;
            case 'CECILLE':
                hourlyFees = 0;
                break;
            case 'CELINE':
                hourlyFees = 2225;
                break;
            case 'CHESKA':
                hourlyFees = 2125;
                break;
            case 'CHESTER':
                hourlyFees = 0;
                break;
            case 'CINDY':
                hourlyFees = 1700;
                break;
            case 'CLYDE':
                hourlyFees = 0;
                break;
            case 'CONSY':
                hourlyFees = 675;
                break;
            case 'DAX':
                hourlyFees = 2000;
                break;
            case 'DIDITH':
                hourlyFees = 0;
                break;
            case 'DINGDONG':
                hourlyFees = 1700;
                break;
            case 'DOM':
                hourlyFees = 0;
                break;
            case 'EDS':
                hourlyFees = 0;
                break;
            case 'ELBERT':
                hourlyFees = 1800;
                break;
            case 'ELCEE':
                hourlyFees = 3175;
                break;
            case 'ELIZHA':
                hourlyFees = 1650;
                break;
            case 'ELMO':
                hourlyFees = 2625;
                break;
            case 'FAITH':
                hourlyFees = 1239.58;
                break;
            case 'FOREST':
                hourlyFees = 0;
                break;
            case 'GABE':
                hourlyFees = 0;
                break;
            case 'GM':
                hourlyFees = 1750;
                break;
            case 'GOODY':
                hourlyFees = 0;
                break;
            case 'IAN':
                hourlyFees = 0;
                break;
            case 'ICAR':
                hourlyFees = 2625;
                break;
            case 'JA':
                hourlyFees = 1500;
                break;
            case 'JAK':
                hourlyFees = 2075;
                break;
            case 'JEFF':
                hourlyFees = 0;
                break;
            case 'JELAINE':
                hourlyFees = 0;
                break;
            case 'JENNIE':
                hourlyFees = 2575;
                break;
            case 'JIM':
                hourlyFees = 1150;
                break;
            case 'JOI':
                hourlyFees = 2625;
                break;
            case 'JOLINA':
                hourlyFees = 2125;
                break;
            case 'JOSE CARLO T.':
                hourlyFees = 0;
                break;
            case 'KAREN':
                hourlyFees = 2225;
                break;
            case 'KARL':
                hourlyFees = 0;
                break;
            case 'KRISHNA':
                hourlyFees = 0;
                break;
            case 'LEO':
                hourlyFees = 2625;
                break;
            case 'LIANG':
                hourlyFees = 0;
                break;
            case 'LIZA':
                hourlyFees = 0;
                break;
            case 'LOURDES':
                hourlyFees = 0;
                break;
            case 'LUISA':
                hourlyFees = 2125;
                break;
            case 'MA. CELESTE C.':
                hourlyFees = 0;
                break;
            case 'MAITA':
                hourlyFees = 2425;
                break;
            case 'MARTIN':
                hourlyFees = 1650;
                break;
            case 'MARV':
                hourlyFees = 0;
                break;
            case 'MIGGY':
                hourlyFees = 1800;
                break;
            case 'MILES':
                hourlyFees = 0;
                break;
            case 'MONICA':
                hourlyFees = 1550;
                break;
            case 'NEMY':
                hourlyFees = 0;
                break;
            case 'NOELLE':
                hourlyFees = 2125;
                break;
            case 'OHMAR':
                hourlyFees = 0;
                break;
            case 'PAM':
                hourlyFees = 2625;
                break;
            case 'PAOLO':
                hourlyFees = 1650;
                break;
            case 'PARIS':
                hourlyFees = 0;
                break;
            case 'PAULA':
                hourlyFees = 1750;
                break;
            case 'PIA':
                hourlyFees = 2425;
                break;
            case 'RACHEL':
                hourlyFees = 0;
                break;
            case 'RAN':
                hourlyFees = 1700;
                break;
            case 'RAPHAEL':
                hourlyFees = 0;
                break;
            case 'ROCIO':
                hourlyFees = 0;
                break;
            case 'ROMEO':
                hourlyFees = 0;
                break;
            case 'RYAN':
                hourlyFees = 0;
                break;
            case 'SERGE':
                hourlyFees = 0;
                break;
            case 'SHAHEIN':
                hourlyFees = 0;
                break;
            case 'SHARON':
                hourlyFees = 2075;
                break;
            case 'SOHEIL':
                hourlyFees = 0;
                break;
            case 'TALA':
                hourlyFees = 2075;
                break;
            case 'THEA':
                hourlyFees = 0;
                break;
            case 'TINA':
                hourlyFees = 2625;
                break;
            case 'TJ':
                hourlyFees = 2275;
                break;
            case 'TON':
                hourlyFees = 0;
                break;
            case 'VAL':
                hourlyFees = 2425;
                break;
            case 'VAL B':
                hourlyFees = 2275;
                break;
            case 'VICTOR':
                hourlyFees = 0;
                break;
            case 'VINCE':
                hourlyFees = 0;
                break;
            case 'YEYE':
                hourlyFees = 1750;
                break;
            case 'TBA':
                hourlyFees = 1900;
                break;

            default:
                hourlyFees = 1900;
                document.getElementById(`roster4${leadConsultant}`).defaultValue = 'TBA';
        }

        $(`#ec_CoLeadfacilitatorHf${colead}`).prop('readonly', true).val( currency.format(Math.ceil(hourlyFees)) );
        // document.getElementById(`#ec_LeadconsultantHf${leadConsultant}`).defaultValue = currency.format( Math.ceil(hourlyFees) );

    });

    // CO-FACILITATOR
    cofaci = 0;
    $("#ec_TableCofaci > tr").each(function () {
        cofaci++;

        let roster = $(`#roster5${cofaci}`).val();

        switch (roster.toUpperCase()) {
            case 'ADDISON':
                hourlyFees = 0;
                break;
            case 'ADRIAN':
                hourlyFees = 0;
                break;
            case 'ALBERTINE':
                hourlyFees = 0;
                break;
            case 'ALEX':
                hourlyFees = 2280;
                break;
            case 'ALLAN':
                hourlyFees = 0;
                break;
            case 'AMIT':
                hourlyFees = 2040;
                break;
            case 'ANDA':
                hourlyFees = 0;
                break;
            case 'ANNA':
                hourlyFees = 0;
                break;
            case 'ARYN':
                hourlyFees = 0;
                break;
            case 'AUDREY':
                hourlyFees = 1260;
                break;
            case 'AYEN':
                hourlyFees = 1080;
                break;
            case 'BASTE':
                hourlyFees = 0;
                break;
            case 'BEA':
                hourlyFees = 1380;
                break;
            case 'BEL':
                hourlyFees = 1500;
                break;
            case 'BENJIE':
                hourlyFees = 2100;
                break;
            case 'BILLY':
                hourlyFees = 1320;
                break;
            case 'BOOPSIE':
                hourlyFees = 0;
                break;
            case 'CANDICE':
                hourlyFees = 0;
                break;
            case 'CARLOS':
                hourlyFees = 1080;
                break;
            case 'CECILLE':
                hourlyFees = 0;
                break;
            case 'CELINE':
                hourlyFees = 1860;
                break;
            case 'CHESKA':
                hourlyFees = 1740;
                break;
            case 'CHESTER':
                hourlyFees = 0;
                break;
            case 'CINDY':
                hourlyFees = 1380;
                break;
            case 'CLYDE':
                hourlyFees = 0;
                break;
            case 'CONSY':
                hourlyFees = 0;
                break;
            case 'DAX':
                hourlyFees = 1740;
                break;
            case 'DIDITH':
                hourlyFees = 0;
                break;
            case 'DINGDONG':
                hourlyFees = 1380;
                break;
            case 'DOM':
                hourlyFees = 0;
                break;
            case 'EDS':
                hourlyFees = 0;
                break;
            case 'ELBERT':
                hourlyFees = 1500;
                break;
            case 'ELCEE':
                hourlyFees = 300;
                break;
            case 'ELIZHA':
                hourlyFees = 1320;
                break;
            case 'ELMO':
                hourlyFees = 2340;
                break;
            case 'FAITH':
                hourlyFees = 1037.50;
                break;
            case 'FOREST':
                hourlyFees = 0;
                break;
            case 'GABE':
                hourlyFees = 0;
                break;
            case 'GM':
                hourlyFees = 1440;
                break;
            case 'GOODY':
                hourlyFees = 0;
                break;
            case 'IAN':
                hourlyFees = 0;
                break;
            case 'ICAR':
                hourlyFees = 2340;
                break;
            case 'JA':
                hourlyFees = 1140;
                break;
            case 'JAK':
                hourlyFees = 1680;
                break;
            case 'JEFF':
                hourlyFees = 0;
                break;
            case 'JELAINE':
                hourlyFees = 0;
                break;
            case 'JENNIE':
                hourlyFees = 2280;
                break;
            case 'JIM':
                hourlyFees = 900;
                break;
            case 'JOI':
                hourlyFees = 2340;
                break;
            case 'JOLINA':
                hourlyFees = 1740;
                break;
            case 'JOSE CARLO T.':
                hourlyFees = 0;
                break;
            case 'KAREN':
                hourlyFees = 1860;
                break;
            case 'KARL':
                hourlyFees = 0;
                break;
            case 'KRISHNA':
                hourlyFees = 0;
                break;
            case 'LEO':
                hourlyFees = 2340;
                break;
            case 'LIANG':
                hourlyFees = 0;
                break;
            case 'LIZA':
                hourlyFees = 0;
                break;
            case 'LOURDES':
                hourlyFees = 0;
                break;
            case 'LUISA':
                hourlyFees = 1740;
                break;
            case 'MA. CELESTE C.':
                hourlyFees = 0;
                break;
            case 'MAITA':
                hourlyFees = 2100;
                break;
            case 'MARTIN':
                hourlyFees = 1320;
                break;
            case 'MARV':
                hourlyFees = 0;
                break;
            case 'MIGGY':
                hourlyFees = 1500;
                break;
            case 'MILES':
                hourlyFees = 0;
                break;
            case 'MONICA':
                hourlyFees = 1200;
                break;
            case 'NEMY':
                hourlyFees = 0;
                break;
            case 'NOELLE':
                hourlyFees = 1740;
                break;
            case 'OHMAR':
                hourlyFees = 0;
                break;
            case 'PAM':
                hourlyFees = 2340;
                break;
            case 'PAOLO':
                hourlyFees = 1320;
                break;
            case 'PARIS':
                hourlyFees = 0;
                break;
            case 'PAULA':
                hourlyFees = 1440;
                break;
            case 'PIA':
                hourlyFees = 2100;
                break;
            case 'RACHEL':
                hourlyFees = 0;
                break;
            case 'RAN':
                hourlyFees = 1380;
                break;
            case 'RAPHAEL':
                hourlyFees = 0;
                break;
            case 'ROCIO':
                hourlyFees = 0;
                break;
            case 'ROMEO':
                hourlyFees = 0;
                break;
            case 'RYAN':
                hourlyFees = 0;
                break;
            case 'SERGE':
                hourlyFees = 0;
                break;
            case 'SHAHEIN':
                hourlyFees = 0;
                break;
            case 'SHARON':
                hourlyFees = 1680;
                break;
            case 'SOHEIL':
                hourlyFees = 0;
                break;
            case 'TALA':
                hourlyFees = 1680;
                break;
            case 'THEA':
                hourlyFees = 0;
                break;
            case 'TINA':
                hourlyFees = 2340;
                break;
            case 'TJ':
                hourlyFees = 1920;
                break;
            case 'TON':
                hourlyFees = 0;
                break;
            case 'VAL':
                hourlyFees = 2100;
                break;
            case 'VAL B':
                hourlyFees = 1380;
                break;
            case 'VICTOR':
                hourlyFees = 0;
                break;
            case 'VINCE':
                hourlyFees = 0;
                break;
            case 'YEYE':
                hourlyFees = 1440;
                break;
            case 'TBA':
                hourlyFees = 1800;
                break;

            default:
                hourlyFees = 1800;
                document.getElementById(`roster5${leadConsultant}`).defaultValue = 'TBA';
        }

        $(`#ec_CofacilitatorHf${cofaci}`).prop('readonly', true).val( currency.format(Math.ceil(hourlyFees)) );
        // document.getElementById(`#ec_LeadconsultantHf${leadConsultant}`).defaultValue = currency.format( Math.ceil(hourlyFees) );

    });

    // MODERATOR
    moderator = 0;
    $("#ec_TableModerator > tr").each(function () {
        moderator++;
        let roster = $(`#roster6${moderator}`).val();

        switch (roster.toUpperCase()) {
            case 'ADDISON':
                hourlyFees = 0;
                break;
            case 'ADRIAN':
                hourlyFees = 0;
                break;
            case 'ALBERTINE':
                hourlyFees = 0;
                break;
            case 'ALEX':
                hourlyFees = 1350;
                break;
            case 'ALLAN':
                hourlyFees = 0;
                break;
            case 'AMIT':
                hourlyFees = 1350;
                break;
            case 'ANDA':
                hourlyFees = 0;
                break;
            case 'ANNA':
                hourlyFees = 0;
                break;
            case 'ARYN':
                hourlyFees = 0;
                break;
            case 'AUDREY':
                hourlyFees = 1100;
                break;
            case 'AYEN':
                hourlyFees = 1100;
                break;
            case 'BASTE':
                hourlyFees = 0;
                break;
            case 'BEA':
                hourlyFees = 1100;
                break;
            case 'BEL':
                hourlyFees = 1100;
                break;
            case 'BENJIE':
                hourlyFees = 1350;
                break;
            case 'BILLY':
                hourlyFees = 1100;
                break;
            case 'BOOPSIE':
                hourlyFees = 0;
                break;
            case 'CANDICE':
                hourlyFees = 0;
                break;
            case 'CARLOS':
                hourlyFees = 1100;
                break;
            case 'CECILLE':
                hourlyFees = 0;
                break;
            case 'CELINE':
                hourlyFees = 1350;
                break;
            case 'CHESKA':
                hourlyFees = 1350;
                break;
            case 'CHESTER':
                hourlyFees = 0;
                break;
            case 'CINDY':
                hourlyFees = 1100;
                break;
            case 'CLYDE':
                hourlyFees = 0;
                break;
            case 'CONSY':
                hourlyFees = 1350;
                break;
            case 'DAX':
                hourlyFees = 1100;
                break;
            case 'DIDITH':
                hourlyFees = 0;
                break;
            case 'DINGDONG':
                hourlyFees = 1100;
                break;
            case 'DOM':
                hourlyFees = 0;
                break;
            case 'EDS':
                hourlyFees = 0;
                break;
            case 'ELBERT':
                hourlyFees = 1100;
                break;
            case 'ELCEE':
                hourlyFees = 1350;
                break;
            case 'ELIZHA':
                hourlyFees = 1100;
                break;
            case 'ELMO':
                hourlyFees = 1350;
                break;
            case 'FAITH':
                hourlyFees = 750;
                break;
            case 'FOREST':
                hourlyFees = 0;
                break;
            case 'GABE':
                hourlyFees = 0;
                break;
            case 'GM':
                hourlyFees = 1100;
                break;
            case 'GOODY':
                hourlyFees = 0;
                break;
            case 'IAN':
                hourlyFees = 1350;
                break;
            case 'ICAR':
                hourlyFees = 1350;
                break;
            case 'JA':
                hourlyFees = 1100;
                break;
            case 'JAK':
                hourlyFees = 1350;
                break;
            case 'JEFF':
                hourlyFees = 0;
                break;
            case 'JELAINE':
                hourlyFees = 0;
                break;
            case 'JENNIE':
                hourlyFees = 1350;
                break;
            case 'JIM':
                hourlyFees = 800;
                break;
            case 'JOI':
                hourlyFees = 1350;
                break;
            case 'JOLINA':
                hourlyFees = 1350;
                break;
            case 'JOSE CARLO T.':
                hourlyFees = 0;
                break;
            case 'KAREN':
                hourlyFees = 1350;
                break;
            case 'KARL':
                hourlyFees = 0;
                break;
            case 'KRISHNA':
                hourlyFees = 0;
                break;
            case 'LEO':
                hourlyFees = 1350;
                break;
            case 'LIANG':
                hourlyFees = 0;
                break;
            case 'LIZA':
                hourlyFees = 0;
                break;
            case 'LOURDES':
                hourlyFees = 0;
                break;
            case 'LUISA':
                hourlyFees = 1350;
                break;
            case 'MA. CELESTE C.':
                hourlyFees = 0;
                break;
            case 'MAITA':
                hourlyFees = 1350;
                break;
            case 'MARTIN':
                hourlyFees = 1100;
                break;
            case 'MARV':
                hourlyFees = 0;
                break;
            case 'MIGGY':
                hourlyFees = 1100;
                break;
            case 'MILES':
                hourlyFees = 0;
                break;
            case 'MONICA':
                hourlyFees = 1100;
                break;
            case 'NEMY':
                hourlyFees = 0;
                break;
            case 'NOELLE':
                hourlyFees = 1350;
                break;
            case 'OHMAR':
                hourlyFees = 0;
                break;
            case 'PAM':
                hourlyFees = 1350;
                break;
            case 'PAOLO':
                hourlyFees = 1100;
                break;
            case 'PARIS':
                hourlyFees = 0;
                break;
            case 'PAULA':
                hourlyFees = 1100;
                break;
            case 'PIA':
                hourlyFees = 1350;
                break;
            case 'RACHEL':
                hourlyFees = 0;
                break;
            case 'RAN':
                hourlyFees = 1100;
                break;
            case 'RAPHAEL':
                hourlyFees = 0;
                break;
            case 'ROCIO':
                hourlyFees = 0;
                break;
            case 'ROMEO':
                hourlyFees = 0;
                break;
            case 'RYAN':
                hourlyFees = 0;
                break;
            case 'SERGE':
                hourlyFees = 0;
                break;
            case 'SHAHEIN':
                hourlyFees = 0;
                break;
            case 'SHARON':
                hourlyFees = 1350;
                break;
            case 'SOHEIL':
                hourlyFees = 0;
                break;
            case 'TALA':
                hourlyFees = 1350;
                break;
            case 'THEA':
                hourlyFees = 0;
                break;
            case 'TINA':
                hourlyFees = 1350;
                break;
            case 'TJ':
                hourlyFees = 1350;
                break;
            case 'TON':
                hourlyFees = 0;
                break;
            case 'VAL':
                hourlyFees = 1350;
                break;
            case 'VAL B':
                hourlyFees = 1100;
                break;
            case 'VICTOR':
                hourlyFees = 0;
                break;
            case 'VINCE':
                hourlyFees = 0;
                break;
            case 'YEYE':
                hourlyFees = 1100;
                break;
            case 'TBA':
                hourlyFees = 1100;
                // document.getElementById(`ec_ModeratorHf${moderator}`).defaultValue = currency.format( Math.ceil(800) );
                break;

            default:
                hourlyFees = 1100;
                document.getElementById(`roster6${leadConsultant}`).defaultValue = 'TBA';
        }

        // $(`#ec_ModeratorHf${moderator}`).val( currency.format(Math.ceil(hourlyFees)) );
        $(`#ec_ModeratorHf${moderator}`).prop('readonly', true).val( currency.format(Math.ceil(hourlyFees)) );
        // document.getElementById(`ec_ModeratorHf${moderator}`).defaultValue = currency.format( Math.ceil(hourlyFees) );
    });

    // PRODUCER
    producer = 0;
    $("#ec_TableProducer > tr").each(function () {
        producer++;
        let roster = $(`#roster7${producer}`).val();

        switch (roster.toUpperCase()) {
            case 'ADDISON':
                hourlyFees = 0;
                break;
            case 'ADRIAN':
                hourlyFees = 0;
                break;
            case 'ALBERTINE':
                hourlyFees = 0;
                break;
            case 'ALEX':
                hourlyFees = 550;
                break;
            case 'ALLAN':
                hourlyFees = 0;
                break;
            case 'AMIT':
                hourlyFees = 550;
                break;
            case 'ANDA':
                hourlyFees = 0;
                break;
            case 'ANNA':
                hourlyFees = 0;
                break;
            case 'ARYN':
                hourlyFees = 0;
                break;
            case 'AUDREY':
                hourlyFees = 550;
                break;
            case 'AYEN':
                hourlyFees = 550;
                break;
            case 'BASTE':
                hourlyFees = 0;
                break;
            case 'BEA':
                hourlyFees = 550;
                break;
            case 'BEL':
                hourlyFees = 550;
                break;
            case 'BENJIE':
                hourlyFees = 550;
                break;
            case 'BILLY':
                hourlyFees = 550;
                break;
            case 'BOOPSIE':
                hourlyFees = 0;
                break;
            case 'CANDICE':
                hourlyFees = 0;
                break;
            case 'CARLOS':
                hourlyFees = 550;
                break;
            case 'CECILLE':
                hourlyFees = 0;
                break;
            case 'CELINE':
                hourlyFees = 550;
                break;
            case 'CHESKA':
                hourlyFees = 550;
                break;
            case 'CHESTER':
                hourlyFees = 0;
                break;
            case 'CINDY':
                hourlyFees = 550;
                break;
            case 'CLYDE':
                hourlyFees = 0;
                break;
            case 'CONSY':
                hourlyFees = 550;
                break;
            case 'DAX':
                hourlyFees = 550;
                break;
            case 'DIDITH':
                hourlyFees = 0;
                break;
            case 'DINGDONG':
                hourlyFees = 550;
                break;
            case 'DOM':
                hourlyFees = 0;
                break;
            case 'EDS':
                hourlyFees = 0;
                break;
            case 'ELBERT':
                hourlyFees = 550;
                break;
            case 'ELCEE':
                hourlyFees = 550;
                break;
            case 'ELIZHA':
                hourlyFees = 550;
                break;
            case 'ELMO':
                hourlyFees = 550;
                break;
            case 'FAITH':
                hourlyFees = 550;
                break;
            case 'FOREST':
                hourlyFees = 0;
                break;
            case 'GABE':
                hourlyFees = 0;
                break;
            case 'GM':
                hourlyFees = 550;
                break;
            case 'GOODY':
                hourlyFees = 550;
                break;
            case 'IAN':
                hourlyFees = 550;
                break;
            case 'ICAR':
                hourlyFees = 550;
                break;
            case 'JA':
                hourlyFees = 550;
                break;
            case 'JAK':
                hourlyFees = 550;
                break;
            case 'JEFF':
                hourlyFees = 0;
                break;
            case 'JELAINE':
                hourlyFees = 0;
                break;
            case 'JENNIE':
                hourlyFees = 550;
                break;
            case 'JIM':
                hourlyFees = 550;
                break;
            case 'JOI':
                hourlyFees = 550;
                break;
            case 'JOLINA':
                hourlyFees = 550;
                break;
            case 'JOSE CARLO T.':
                hourlyFees = 0;
                break;
            case 'KAREN':
                hourlyFees = 550;
                break;
            case 'KARL':
                hourlyFees = 0;
                break;
            case 'KRISHNA':
                hourlyFees = 0;
                break;
            case 'LEO':
                hourlyFees = 550;
                break;
            case 'LIANG':
                hourlyFees = 0;
                break;
            case 'LIZA':
                hourlyFees = 0;
                break;
            case 'LOURDES':
                hourlyFees = 0;
                break;
            case 'LUISA':
                hourlyFees = 550;
                break;
            case 'MA. CELESTE C.':
                hourlyFees = 0;
                break;
            case 'MAITA':
                hourlyFees = 550;
                break;
            case 'MARTIN':
                hourlyFees = 550;
                break;
            case 'MARV':
                hourlyFees = 0;
                break;
            case 'MIGGY':
                hourlyFees = 550;
                break;
            case 'MILES':
                hourlyFees = 0;
                break;
            case 'MONICA':
                hourlyFees = 550;
                break;
            case 'NEMY':
                hourlyFees = 0;
                break;
            case 'NOELLE':
                hourlyFees = 550;
                break;
            case 'OHMAR':
                hourlyFees = 0;
                break;
            case 'PAM':
                hourlyFees = 550;
                break;
            case 'PAOLO':
                hourlyFees = 550;
                break;
            case 'PARIS':
                hourlyFees = 0;
                break;
            case 'PAULA':
                hourlyFees = 550;
                break;
            case 'PIA':
                hourlyFees = 550;
                break;
            case 'RACHEL':
                hourlyFees = 0;
                break;
            case 'RAN':
                hourlyFees = 550;
                break;
            case 'RAPHAEL':
                hourlyFees = 0;
                break;
            case 'ROCIO':
                hourlyFees = 0;
                break;
            case 'ROMEO':
                hourlyFees = 0;
                break;
            case 'RYAN':
                hourlyFees = 0;
                break;
            case 'SERGE':
                hourlyFees = 0;
                break;
            case 'SHAHEIN':
                hourlyFees = 0;
                break;
            case 'SHARON':
                hourlyFees = 550;
                break;
            case 'SOHEIL':
                hourlyFees = 0;
                break;
            case 'TALA':
                hourlyFees = 550;
                break;
            case 'THEA':
                hourlyFees = 0;
                break;
            case 'TINA':
                hourlyFees = 550;
                break;
            case 'TJ':
                hourlyFees = 550;
                break;
            case 'TON':
                hourlyFees = 0;
                break;
            case 'VAL':
                hourlyFees = 550;
                break;
            case 'VAL B':
                hourlyFees = 550;
                break;
            case 'VICTOR':
                hourlyFees = 0;
                break;
            case 'VINCE':
                hourlyFees = 0;
                break;
            case 'YEYE':
                hourlyFees = 550;
                break;
            case 'TBA':
                hourlyFees = 550;
                break;

            default:
                hourlyFees = 550;
                document.getElementById(`roster7${leadConsultant}`).defaultValue = 'TBA';
        }

        $(`#ec_ProducerHf${producer}`).prop('readonly', true).val( currency.format(Math.ceil(hourlyFees)) );
        // document.getElementById(`ec_ProducerHf${producer}`).defaultValue = currency.format( Math.ceil(hourlyFees) );
    });

});
