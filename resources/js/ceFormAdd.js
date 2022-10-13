let currency = Intl.NumberFormat("en-US");
//default value in ANALYST
document.getElementById("ef_AnalystHf").defaultValue =
    "₱" + currency.format(Math.ceil(5000));
//default value CO-FACILITATOR
document.getElementById("ef_CofaciHf").defaultValue =
    "₱" + currency.format(Math.ceil(5000));
//default value in MODERATOR
document.getElementById("ef_ModeratorHf").defaultValue =
    "₱" + currency.format(Math.ceil(3500));
//default value in PRODUCER
document.getElementById("ef_ProducerHf").defaultValue =
    "₱" + currency.format(Math.ceil(2500));
//default value in DOCUMENTOR
document.getElementById("ef_DocumentorHf").defaultValue =
    "₱" + currency.format(Math.ceil(2500));

document.getElementById("ec_AnalystHf1").defaultValue = "₱" + currency.format(
    Math.ceil(1700)
);
document.getElementById("ec_LeadfacilitatorHf").defaultValue = "₱" + currency.format(
    Math.ceil(3000)
);
document.getElementById("ec_LeadconsultantHf").defaultValue = "₱" + currency.format(
    Math.ceil(0.85 * $("#ec_LeadfacilitatorHf").val().replace(/\₱|,/g, ""))
);
document.getElementById("ec_DesignerHf").defaultValue = "₱" + currency.format(
    Math.ceil(2250)
);
document.getElementById("ec_CofacilitatorHf").defaultValue = "₱" + currency.format(
    Math.ceil(1800)
);
document.getElementById("ec_ProducerHf").defaultValue = "₱" + currency.format(
    Math.ceil(550)
);
document.getElementById("ec_DocumentorHf").defaultValue = "₱" + currency.format(
    Math.ceil(700)
);
document.getElementById("ec_ProgramHf").defaultValue = "₱" + currency.format(
    Math.ceil(1000)
);
document.getElementById("ec_Programexpense").defaultValue = 2 + "%";

$("#ec_Programexpense").on("blur", function () {
    $(this).val(function (i, v) {
        return v.replace("%", "") + "%";
    });
});

//INFORMATION
$('document').ready(function() {
    /*************************************STATUS**************************************/
    //DEFAULT COLOR
    $('#status').css('background-color', '#007bff')
    $('#status').css('color', 'white')
    $('#status option').css('background-color', 'white')
    $('#status option').css('color', 'black')

    //ASSIGN EVENT LISTENER IN STATUS
    document.getElementById("status").addEventListener("change", status);

    //EVENT OF STATUS
    function status() {
        var status = document.getElementById("status").value;
        if(status == "Confirmed"){
            $('#status').css('background-color', '#007bff')
            $('#status').css('color', 'white')
            $('#status option').css('background-color', 'white')
            $('#status option').css('color', 'black')
        } else if(status == "In-progress"){
            $('#status').css('background-color', '#ffc107')
            $('#status').css('color', 'black')
            $('#status option').css('background-color', 'white')
            $('#status option').css('color', 'black')
        } else if(status == "Completed"){
            $('#status').css('background-color', '#28a745')
            $('#status').css('color', 'white')
            $('#status option').css('background-color', 'white')
            $('#status option').css('color', 'black')
        } else if(status == "Lost"){
            $('#status').css('background-color', '#dc3545')
            $('#status').css('color', 'white')
            $('#status option').css('background-color', 'white')
            $('#status option').css('color', 'black')
        } else if(status == "Trial"){
            $('#status').css('background-color', '#17a2b8')
            $('#status').css('color', 'white')
            $('#status option').css('background-color', 'white')
            $('#status option').css('color', 'black')
        }
    };
});

//NSWH
$(document).on("load change click", ".customized-engagement, .nswh-percent", function () {
    $(".nswh-percent-value").val($("#nswh").val())
});

//ENGAGEMENT FEES VALUE PASS TO ENGAGEMENT COST VALUE
$(document).on("load change click", "#ec_tableEngagementFees, #ec_tableEngagementCost", function (     ) {
    document.getElementById("ec_LeadconsultantNoc1").defaultValue = $("#ef_LeadconsultantNoc1").val();
    document.getElementById("ec_LeadconsultantNoh1").defaultValue = $("#ef_LeadconsultantNoh1").val();
    document.getElementById("ec_LeadconsultantNwh1").defaultValue = $("#ef_LeadconsultantNwh1").val();
    document.getElementById("ec_AnalystNoc1").defaultValue = $("#ef_AnalystNoc1").val();
    document.getElementById("ec_AnalystNoh1").defaultValue = $("#ef_AnalystNoh1").val();
    document.getElementById("ec_AnalystNwh1").defaultValue = $("#ef_AnalystNwh1").val();
    document.getElementById("ec_DesignerNoc1").defaultValue = $("#ef_DesignerNoc1").val();
    document.getElementById("ec_DesignerNoh1").defaultValue = $("#ef_DesignerNoh1").val();
    document.getElementById("ec_DesignerNwh1").defaultValue = $("#ef_DesignerNwh1").val();
    document.getElementById("ec_LeadfacilitatorNoc1").defaultValue = $("#ef_LeadfacilitatorNoc1").val();
    document.getElementById("ec_LeadfacilitatorNoh1").defaultValue = $("#ef_LeadfacilitatorNoh1").val();
    document.getElementById("ec_LeadfacilitatorNwh1").defaultValue = $("#ef_LeadfacilitatorNwh1").val();
    document.getElementById("ec_CofacilitatorNoc1").defaultValue = $("#ef_CofaciNoc1").val();
    document.getElementById("ec_CofacilitatorNoh1").defaultValue = $("#ef_CofaciNoh1").val();
    document.getElementById("ec_CofacilitatorNwh1").defaultValue = $("#ef_CofaciNwh1").val();
    document.getElementById("ec_ModeratorNoc1").defaultValue = $("#ef_ModeratorNoc1").val();
    document.getElementById("ec_ModeratorNoh1").defaultValue = $("#ef_ModeratorNoh1").val();
    document.getElementById("ec_ModeratorNwh1").defaultValue = $("#ef_ModeratorNwh1").val();
    document.getElementById("ec_ProducerNoc1").defaultValue = $("#ef_ProducerNoc1").val();
    document.getElementById("ec_ProducerNoh1").defaultValue = $("#ef_ProducerNoh1").val();
    document.getElementById("ec_ProducerNwh1").defaultValue = $("#ef_ProducerNwh1").val();
    document.getElementById("ec_DocumentorNoc1").defaultValue = $("#ef_DocumentorNoc1").val();
    document.getElementById("ec_DocumentorNoh1").defaultValue = $("#ef_DocumentorNoh1").val();
    document.getElementById("ec_DocumentorNwh1").defaultValue = $("#ef_DocumentorNwh1").val();
});

//LEAD FACILITATOR DROPDOWN SCRIPT
$(document).ready(function() {
    $("#tableLeadfaci").each(function () {
        $(`#ef_LeadfacilitatorHf1`).click(function () {
            var others = $(`#ef_LeadfacilitatorHf1`);
            if ($('#others1').is(':selected')) {
                $(`#inputLeadfaci1`).css("display", "")
                $(`#ef_InputLeadFaciHf1`).prop('disabled', false)
                $(`#ef_InputLeadFaciHf1`).val("₱")
                $(`#ef_LeadfacilitatorHf1`).prop('disabled', true)
                $(`#ef_LeadfacilitatorHf1`).css("display", "none")
            } else {
                $(`#inputLeadfaci1`).css("display", "none")
            }
            // if ($('#capability${dates}').is(':selected')){

            // }
        });

        $('#deleteIcon1').click(function() {
            // $(this).prev('input').val('').trigger('change').focus();
            $(`#inputLeadfaci1`).css("display", "none")
            $(`#ef_InputLeadFaciHf1`).prop('disabled', true)
            $(`#ef_LeadfacilitatorHf1`).prop('disabled', false)
            $(`#ef_LeadfacilitatorHf1`).css("display", "")
            $(`#ef_LeadfacilitatorHf1`).val("₱12,000")
        });
    });
});

//ENGAGEMENT FEES STANDARD FEES PASS TO TOTAL PACKAGE INPUT FIELD
$(document).on("load keyup change click", "#ec_tableEngagementFees", function (){
    document.getElementById("ef_Totalpackage").defaultValue = $("#total-standard").html();
});

document.addEventListener('keypress', function (e) {
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

$(document).ready(function(){
    $('#rooster').on('keyup',function(){
        // $value = $(this).val();
        if ($(this).val() === 'erico') {
            $('#ec_LeadconsultantHf').val("₱" + currency.format(
                Math.ceil(1000)));
        }
        else {
            $('#ec_LeadconsultantHf').val("₱" + currency.format(
                Math.ceil(2550)));
        }
    })
});
