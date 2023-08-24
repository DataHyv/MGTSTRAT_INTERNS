let currency = Intl.NumberFormat("en-US");

overallTotal = 0;
customizationFee = 0;

sumOfConsultingDesign = 0;
sumOfExecutiveCoaching = 0;
sumOfperfDevCoaching = 0;
sumOfgallupStrenghtCoach = 0;
sumOfwialALTC = 0;

standardFee = 0;
totalPackage = 0;
discount = 0;

sumofSales = 0;
sumofReferral = 0;
sumofEngagementManager = 0;
sumofConsultingDesign = 0;
sumInputExecutiveCoaching = 0;
sumInputPerfDevCoaching = 0;
sumInputGallupStrenghtCoach = 0;
sumInputWialActLearnTeamCoach = 0;
sumofProgramExpense= 0;

rowIndexSale = 0;
rowIndexReferral = 0;
rowIndexEngagementManager = 0;
rowIndexCustomizationFee = 0;
rowIndexCreatorsFee = 0;
rowIndexLeadFacilitator = 0;
rowIndexModerator = 0;
rowIndexProducer = 0;
rowIndexOffProgramFee = 0;
rowIndexProgramExpenses = 0;

//default value of input types
// Engagement Fees
document.getElementById("ef_executiveCoaching_fd").value = currency.format(20000);
document.getElementById("ef_perfDevCoaching_fd").value = currency.format(16000);
document.getElementById("ef_gallupStrenghtCoach_fd").value = currency.format(10000);
document.getElementById("ef_wialALTC_fd").value = currency.format(20000);

// Engagement Cost
document.getElementById("coaching_ConsultingDesign_sf1").value = currency.format(6000);
document.getElementById("coaching_ExecutiveCoaching_sf1").value = currency.format(8000);
document.getElementById("coaching_PerfDevCoaching_sf1").value = currency.format(6400);
document.getElementById("coaching_GallupStrenghtCoach_sf1").value = currency.format(4000);
document.getElementById("coaching_WialActLearnTeamCoach_sf1").value = currency.format(8000);
document.getElementById("coaching_Programexpenses").value = 2 + "%";

//datepicker
$(document).on("click change focus", "#dcbe", function() {
    $(".datepicker").each(function () {
        $(this).datepicker();
        $(this).on("change", function () {
            $(this).datepicker("option", "dateFormat", "M d, yy");
        });
    });
});

// ENGAGEMENT FEES
$(document).on('change keyup blur', '#tableConsultingDesign input, #tableConsultingDesign select', function () {
    $("#tableConsultingDesign").each(function () { // Consulting and/or Design
        sumOfConsultingDesign = (
            $('#ef_consultingDesign_cn').val().replace(/,/g, "") * 
            $('#ef_consultingDesign_fd').val().replace(/,/g, "") * 
            $('#ef_consultingDesign_ns').val().replace(/,/g, "")
        ) + (
            $('#fee_consultingDesign_nswh').val().replace(/,/g, "") * 
            (   $('#ef_consultingDesign_cn').val().replace(/,/g, "") * 
                $('#ef_consultingDesign_fd').val().replace(/,/g, "") * 
                $('#ef_consultingDesign_ns').val().replace(/,/g, "") * 0.2)
        );
        $('#ef_consultingDesign_total').html(currency.format(Math.ceil(sumOfConsultingDesign)));
    });

    document.getElementById(`coaching_ConsultingDesign_cn1`).value = $('#ef_consultingDesign_cn').val();
    document.getElementById(`coaching_ConsultingDesign_sn1`).value = $('#ef_consultingDesign_ns').val();
    document.getElementById(`coaching_ConsultingDesign_nswh1`).value = $('#fee_consultingDesign_nswh').val();

    $('#subtotalConsultingDesign').html(currency.format(Math.ceil(sumOfConsultingDesign)));

    computeEngagementFee();
});

$(document).on('change keyup blur', '#tableExecutiveCoaching input, #tableExecutiveCoaching select', function () {
    
    // Executive Coaching
    $("#tableExecutiveCoaching").each(function () {
        var coachNum = ($('#ef_executiveCoaching_cn').val()) ? parseInt($('#ef_executiveCoaching_cn').val().replace(/,/g, "")) : 0;
        var dailyFee = ($('#ef_executiveCoaching_fd').val()) ? parseInt($('#ef_executiveCoaching_fd').val().replace(/,/g, "")) : 0;
        var sessionNo = ($('#ef_executiveCoaching_ns').val()) ? parseInt($('#ef_executiveCoaching_ns').val().replace(/,/g, "")) : 0;
        var nswh = ($('#ef_executiveCoaching_nswh').val()) ? parseInt($('#ef_executiveCoaching_nswh').val().replace(/,/g, "")) : 0;

        sumOfExecutiveCoaching = (coachNum * dailyFee * sessionNo) + ( nswh * (coachNum * dailyFee * sessionNo * 0.2));
        $('#ef_executiveCoaching_total').html(currency.format(Math.ceil(sumOfExecutiveCoaching)));
    
    });

    document.getElementById(`coaching_ExecutiveCoaching_cn1`).value = $('#ef_executiveCoaching_cn').val();
    document.getElementById(`coaching_ExecutiveCoaching_sn1`).value = $('#ef_executiveCoaching_ns').val();
    document.getElementById(`coaching_ExecutiveCoaching_nswh1`).value = $('#ef_executiveCoaching_nswh').val();

    computeEngagementFee();

});

$(document).on('change keyup blur', '#tablePerformanceDevCoaching input, #tablePerformanceDevCoaching select', function () {
    
    // Performance Development Coaching
    $("#tablePerformanceDevCoaching").each(function () {
        var coachNum = ($('#ef_perfDevCoaching_cn').val()) ? parseInt($('#ef_perfDevCoaching_cn').val().replace(/,/g, "")) : 0;
        var dailyFee = ($('#ef_perfDevCoaching_fd').val()) ? parseInt($('#ef_perfDevCoaching_fd').val().replace(/,/g, "")) : 0;
        var sessionNo = ($('#ef_perfDevCoaching_ns').val()) ? parseInt($('#ef_perfDevCoaching_ns').val().replace(/,/g, "")) : 0;
        var nswh = ($('#ef_perfDevCoaching_nswh').val()) ? parseInt($('#ef_perfDevCoaching_nswh').val().replace(/,/g, "")) : 0;

        sumOfperfDevCoaching = (coachNum * dailyFee * sessionNo) + ( nswh * (coachNum * dailyFee * sessionNo * 0.2));
        $('#ef_perfDevCoaching_total').html(currency.format(Math.ceil(sumOfperfDevCoaching)));
    
    });

    document.getElementById(`coaching_PerfDevCoaching_cn1`).value = $('#ef_perfDevCoaching_cn').val();
    document.getElementById(`coaching_PerfDevCoaching_sn1`).value = $('#ef_perfDevCoaching_ns').val();
    document.getElementById(`coaching_PerfDevCoaching_nswh1`).value = $('#ef_perfDevCoaching_nswh').val();

    computeEngagementFee();

});

$(document).on('change keyup blur', '#tableGallupStrenghtCoach input, #tableGallupStrenghtCoach select', function () {
    
    // Gallup Strengths Coaching
    $("#tableGallupStrenghtCoach").each(function () {
        var coachNum = ($('#ef_gallupStrenghtCoach_cn').val()) ? parseInt($('#ef_gallupStrenghtCoach_cn').val().replace(/,/g, "")) : 0;
        var dailyFee = ($('#ef_gallupStrenghtCoach_fd').val()) ? parseInt($('#ef_gallupStrenghtCoach_fd').val().replace(/,/g, "")) : 0;
        var sessionNo = ($('#ef_gallupStrenghtCoach_ns').val()) ? parseInt($('#ef_gallupStrenghtCoach_ns').val().replace(/,/g, "")) : 0;
        var nswh = ($('#ef_gallupStrenghtCoach_nswh').val()) ? parseInt($('#ef_gallupStrenghtCoach_nswh').val().replace(/,/g, "")) : 0;

        sumOfgallupStrenghtCoach = (coachNum * dailyFee * sessionNo) + ( nswh * (coachNum * dailyFee * sessionNo * 0.2));
        $('#ef_gallupStrenghtCoach_total').html(currency.format(Math.ceil(sumOfgallupStrenghtCoach)));
      
    });

    document.getElementById(`coaching_GallupStrenghtCoach_cn1`).value = $('#ef_gallupStrenghtCoach_cn').val();
    document.getElementById(`coaching_GallupStrenghtCoach_sn1`).value = $('#ef_gallupStrenghtCoach_ns').val();
    document.getElementById(`coaching_GallupStrenghtCoach_nswh1`).value = $('#ef_gallupStrenghtCoach_nswh').val();

    computeEngagementFee();

});

$(document).on('change keyup blur', '#tableWialActLearnTeamCoach input, #tableWialActLearnTeamCoach select', function () {
    
    // WIAL Action Learning Team Coaching
    $("#tableWialActLearnTeamCoach").each(function () {
        var coachNum = ($('#ef_wialALTC_cn').val()) ? parseInt($('#ef_wialALTC_cn').val().replace(/,/g, "")) : 0;
        var dailyFee = ($('#ef_wialALTC_fd').val()) ? parseInt($('#ef_wialALTC_fd').val().replace(/,/g, "")) : 0;
        var sessionNo = ($('#ef_wialALTC_ns').val()) ? parseInt($('#ef_wialALTC_ns').val().replace(/,/g, "")) : 0;
        var nswh = ($('#ef_wialALTC_nswh').val()) ? parseInt($('#ef_wialALTC_nswh').val().replace(/,/g, "")) : 0;

        sumOfwialALTC = (coachNum * dailyFee * sessionNo) + ( nswh * (coachNum * dailyFee * sessionNo * 0.2));
        $('#ef_wialALTC_total').html(currency.format(Math.ceil(sumOfwialALTC)));
           
    });

    document.getElementById(`coaching_WialActLearnTeamCoach_cn1`).value = $('#ef_wialALTC_cn').val();
    document.getElementById(`coaching_WialActLearnTeamCoach_sn1`).value = $('#ef_wialALTC_ns').val();
    document.getElementById(`coaching_WialActLearnTeamCoach_nswh1`).value = $('#ef_wialALTC_nswh').val();

    computeEngagementFee();

});

function computeEngagementFee() {
    standardFee = sumOfConsultingDesign + sumOfExecutiveCoaching + sumOfperfDevCoaching + sumOfgallupStrenghtCoach + sumOfwialALTC;
    $('#subtotalProgram').html(currency.format(Math.ceil(sumOfExecutiveCoaching + sumOfperfDevCoaching + sumOfgallupStrenghtCoach + sumOfwialALTC)));    
    $('#standard_total').html(currency.format(Math.ceil(standardFee)));
}

$(document).on('change keyup blur', '#input_totalPackages', function () {
    $("#input_totalPackages").each(function () {
        discount = (1 - +$(this).val().replace(/,/g, "") / standardFee) * 100;

        if (discount > 100) {
            sumDiscount2 = discount - 100;
            $("#inpt_dsct").val("-" + sumDiscount2 + "%");
        } else if (isNaN(discount) != 0) {
            $("#inpt_dsct").val(0 + "%");
        } else {
            sumDiscount2 = Math.round(discount);
            $("#inpt_dsct").val(sumDiscount2 + "%");
        }
    });
});

$(document).on(
    "change blur click",
    "#coaching-ef-table tr.th-blue-grey-lighten input,  #coaching-ef-table tr.th-blue-grey-lighten-2 select, #coaching-ef-table tr.th-blue-grey-lighten-2 input,  #coaching-ef-table tr.th-blue-grey-lighten select",
    function () {        
        document.getElementById("input_totalPackages").value = $("#standard_total").html();
        $('#input_totalPackages').blur();
    }
);

$(document).on('change keyup blur', '#coaching-table input, #coaching-table select', function () {
  
    sumofEngagementCost = 0;
    sumofCoaching = 0;

    //---------------------------------------ENGAGEMENTCOST---------------------------------------------    
    sumInputSales = 1;
    $("#tableofSale > tr").each(function () { // Sales
        sumofSales =
            ( ($("#input_totalPackages").val().replace(/\₱|,/g, "") / 100) * $(`#coaching_sale`).val().replace(/\₱|,/g, "") ) ||
            ( ($("#input_totalPackages").val().replace(/\₱|,/g, "") / 100) * $(`#inputforSale${sumInputSales}`).val().replace(/%/g, "") );
            $(`#coaching_saleTotal${sumInputSales}`).html(currency.format(Math.ceil(sumofSales)));
        sumofEngagementCost += sumofSales;
        sumInputSales++;        
    });

    sumInputReferral = 1;
    $("#tableofReferrals > tr").each(function () { // Referral
        sumofReferral =
            ( ($("#input_totalPackages").val().replace(/\₱|,/g, "") / 100) * $(`#coaching_referrals`).val() ) ||
            ( ($("#input_totalPackages").val().replace(/\₱|,/g, "") / 100) * $(`#inputforReferrals${sumInputReferral}`).val().replace(/%/g, "") );
            $(`#coaching_referralsTotal${sumInputReferral}`).html(currency.format(Math.ceil(sumofReferral)));
        sumofEngagementCost += +sumofReferral;
        sumInputReferral++;        
    });

    sumInputEngagementManager = 1;
    $("#tableofEngagementManager > tr").each(function () { // Engagement Manager
        sumofEngagementManager =
            ( ($("#input_totalPackages").val().replace(/\₱|,/g, "") / 100) * $(`#coaching_engagementManager`).val() ) ||
            ( ($("#input_totalPackages").val().replace(/\₱|,/g, "") / 100) * $(`#inputforEngagementManager${sumInputEngagementManager}`).val().replace(/%/g, "") );
            $(`#coaching_engagementManagerTotal${sumInputEngagementManager}`).html(currency.format(Math.ceil(sumofEngagementManager)));
        sumofEngagementCost += sumofEngagementManager;
        sumInputEngagementManager++;        
    });

    sumInputConsultingDesign = 1;
    $("#tableofConsultingDesign > tr").each(function () { // Consulting and/or Design

        var coachNum = ($(`#coaching_ConsultingDesign_cn${sumInputConsultingDesign}`).val()) ? $(`#coaching_ConsultingDesign_cn${sumInputConsultingDesign}`).val().replace(/,/g, "") : 0;
        var sessionFee = ($(`#coaching_ConsultingDesign_sf${sumInputConsultingDesign}`).val()) ? $(`#coaching_ConsultingDesign_sf${sumInputConsultingDesign}`).val().replace(/,/g, "") : 0;
        var sessionNo = ($(`#coaching_ConsultingDesign_sn${sumInputConsultingDesign}`).val()) ? $(`#coaching_ConsultingDesign_sn${sumInputConsultingDesign}`).val().replace(/,/g, "") : 0;
        var nswh = ($(`#coaching_ConsultingDesign_nswh${sumInputConsultingDesign}`).val()) ? $(`#coaching_ConsultingDesign_nswh${sumInputConsultingDesign}`).val().replace(/,/g, "") : 0;

        sumofConsultingDesign = (coachNum * sessionFee * sessionNo) + (nswh * (coachNum * sessionFee * sessionNo * 0.2));
        $(`#coaching_ConsultingDesign_total${sumInputConsultingDesign}`).html(currency.format(Math.ceil(sumofConsultingDesign)));

        sumofEngagementCost += sumofConsultingDesign;
        sumInputConsultingDesign++;        
    }); 
    
    $(`#coaching_DesignsSubtotal`).html(currency.format(Math.ceil(sumofConsultingDesign)));

    sumInputExecutiveCoaching = 1;
    $("#tableofExecutiveCoaching > tr").each(function () { // Executive Coaching

        var coachNum = ($(`#coaching_ExecutiveCoaching_cn${sumInputExecutiveCoaching}`).val()) ? $(`#coaching_ExecutiveCoaching_cn${sumInputExecutiveCoaching}`).val().replace(/,/g, "") : 0;
        var sessionFee = ($(`#coaching_ExecutiveCoaching_sf${sumInputExecutiveCoaching}`).val()) ? $(`#coaching_ExecutiveCoaching_sf${sumInputExecutiveCoaching}`).val().replace(/,/g, "") : 0;
        var sessionNo = ($(`#coaching_ExecutiveCoaching_sn${sumInputExecutiveCoaching}`).val()) ? $(`#coaching_ExecutiveCoaching_sn${sumInputExecutiveCoaching}`).val().replace(/,/g, "") : 0;
        var nswh = ($(`#coaching_ExecutiveCoaching_nswh${sumInputExecutiveCoaching}`).val()) ? $(`#coaching_ExecutiveCoaching_nswh${sumInputExecutiveCoaching}`).val().replace(/,/g, "") : 0;

        sumofExecutiveCoaching = (coachNum * sessionFee * sessionNo) + (nswh * (coachNum * sessionFee * sessionNo * 0.2));
        $(`#coaching_ExecutiveCoaching_total${sumInputExecutiveCoaching}`).html(currency.format(Math.ceil(sumofExecutiveCoaching)));

        sumofEngagementCost += sumofExecutiveCoaching;
        sumofCoaching += sumofExecutiveCoaching;
        sumInputExecutiveCoaching++;        
    }); 

    sumInputPerfDevCoaching = 1;
    $("#tableofPerfDevCoaching > tr").each(function () { // Performance Development Coaching

        var coachNum = ($(`#coaching_PerfDevCoaching_cn${sumInputPerfDevCoaching}`).val()) ? $(`#coaching_PerfDevCoaching_cn${sumInputPerfDevCoaching}`).val().replace(/,/g, "") : 0;
        var sessionFee = ($(`#coaching_PerfDevCoaching_sf${sumInputPerfDevCoaching}`).val()) ? $(`#coaching_PerfDevCoaching_sf${sumInputPerfDevCoaching}`).val().replace(/,/g, "") : 0;
        var sessionNo = ($(`#coaching_PerfDevCoaching_sn${sumInputPerfDevCoaching}`).val()) ? $(`#coaching_PerfDevCoaching_sn${sumInputPerfDevCoaching}`).val().replace(/,/g, "") : 0;
        var nswh = ($(`#coaching_PerfDevCoaching_nswh${sumInputPerfDevCoaching}`).val()) ? $(`#coaching_PerfDevCoaching_nswh${sumInputPerfDevCoaching}`).val().replace(/,/g, "") : 0;

        sumofPerfDevCoaching = (coachNum * sessionFee * sessionNo) + (nswh * (coachNum * sessionFee * sessionNo * 0.2));
        $(`#coaching_PerfDevCoaching_total${sumInputPerfDevCoaching}`).html(currency.format(Math.ceil(sumofPerfDevCoaching)));

        sumofEngagementCost += sumofPerfDevCoaching;
        sumofCoaching += sumofPerfDevCoaching;
        sumInputPerfDevCoaching++;        
    }); 

    sumInputGallupStrenghtCoach = 1;
    $("#tableofGallupStrenghtCoach > tr").each(function () { // Gallup Strengths Coaching

        var coachNum = ($(`#coaching_GallupStrenghtCoach_cn${sumInputGallupStrenghtCoach}`).val()) ? $(`#coaching_GallupStrenghtCoach_cn${sumInputGallupStrenghtCoach}`).val().replace(/,/g, "") : 0;
        var sessionFee = ($(`#coaching_GallupStrenghtCoach_sf${sumInputGallupStrenghtCoach}`).val()) ? $(`#coaching_GallupStrenghtCoach_sf${sumInputGallupStrenghtCoach}`).val().replace(/,/g, "") : 0;
        var sessionNo = ($(`#coaching_GallupStrenghtCoach_sn${sumInputGallupStrenghtCoach}`).val()) ? $(`#coaching_GallupStrenghtCoach_sn${sumInputGallupStrenghtCoach}`).val().replace(/,/g, "") : 0;
        var nswh = ($(`#coaching_GallupStrenghtCoach_nswh${sumInputGallupStrenghtCoach}`).val()) ? $(`#coaching_GallupStrenghtCoach_nswh${sumInputGallupStrenghtCoach}`).val().replace(/,/g, "") : 0;

        sumofGallupStrenghtCoach = (coachNum * sessionFee * sessionNo) + (nswh * (coachNum * sessionFee * sessionNo * 0.2));
        $(`#coaching_GallupStrenghtCoach_total${sumInputGallupStrenghtCoach}`).html(currency.format(Math.ceil(sumofGallupStrenghtCoach)));

        sumofEngagementCost += sumofGallupStrenghtCoach;
        sumofCoaching += sumofGallupStrenghtCoach;
        sumInputGallupStrenghtCoach++;        
    }); 

    sumInputWialActLearnTeamCoach = 1;
    $("#tableofWialActLearnTeamCoach > tr").each(function () { // WIAL Action Learning Team Coaching

        var coachNum = ($(`#coaching_WialActLearnTeamCoach_cn${sumInputWialActLearnTeamCoach}`).val()) ? $(`#coaching_WialActLearnTeamCoach_cn${sumInputWialActLearnTeamCoach}`).val().replace(/,/g, "") : 0;
        var sessionFee = ($(`#coaching_WialActLearnTeamCoach_sf${sumInputWialActLearnTeamCoach}`).val()) ? $(`#coaching_WialActLearnTeamCoach_sf${sumInputWialActLearnTeamCoach}`).val().replace(/,/g, "") : 0;
        var sessionNo = ($(`#coaching_WialActLearnTeamCoach_sn${sumInputWialActLearnTeamCoach}`).val()) ? $(`#coaching_WialActLearnTeamCoach_sn${sumInputWialActLearnTeamCoach}`).val().replace(/,/g, "") : 0;
        var nswh = ($(`#coaching_WialActLearnTeamCoach_nswh${sumInputWialActLearnTeamCoach}`).val()) ? $(`#coaching_WialActLearnTeamCoach_nswh${sumInputWialActLearnTeamCoach}`).val().replace(/,/g, "") : 0;

        sumofWialActLearnTeamCoach = (coachNum * sessionFee * sessionNo) + (nswh * (coachNum * sessionFee * sessionNo * 0.2));
        $(`#coaching_WialActLearnTeamCoach_total${sumInputWialActLearnTeamCoach}`).html(currency.format(Math.ceil(sumofWialActLearnTeamCoach)));

        sumofEngagementCost += sumofWialActLearnTeamCoach;
        sumofCoaching += sumofWialActLearnTeamCoach;
        sumInputWialActLearnTeamCoach++;        
    }); 

    $(`#coaching_ProgramsSubtotal`).html(currency.format(Math.ceil(sumofCoaching)));

    sumofProgramExpense =  ($(`#coaching_Programexpenses`).val().replace(/,|%/g, "") * $(`#input_totalPackages`).val().replace(/\₱|,/g, "")) / 100;
    $(`#coaching_ProgramexpensesTotal`).html(currency.format(Math.ceil(sumofProgramExpense)));
    sumofEngagementCost += sumofProgramExpense;

    $('#coaching_Totals').html(currency.format(Math.ceil(sumofEngagementCost)));

    autoComputeProfit(sumofEngagementCost);

});

function autoComputeProfit(sumofEngagementCost) { // PROFIT FORECAST 

    //profit
    sumProfit = $("#input_totalPackages").val().replace(/\₱|,/g, "") - sumofEngagementCost;
    $("#Profit").html(currency.format(Math.ceil(sumProfit)));

    // Less: Contribution to Overhead lesscto_noc
    sumCto = 0;
    $("#LessCTO_NOC").each(function () {
        sumCto +=
            ($("#input_totalPackages").val().replace(/\₱|,/g, "") *
                $(this).val()) / 100;
    });
    $("#LessContributionToOverhead").html( currency.format(Math.ceil(sumCto)) );

    //Net profit
    sumNetprofit = sumProfit - sumCto;
    $("#NetProfit").html(currency.format(Math.ceil(sumNetprofit)));

    //Profit margin
    sumProfitmargin = (sumNetprofit / $("#input_totalPackages").val().replace(/\₱|,/g, "")) * 100;
    if (isNaN(sumProfitmargin) || sumProfitmargin === Number.NEGATIVE_INFINITY){
        $("#ProfitMargin").html("0");
        $("#profitMargin-td").removeClass('mgt-td-dark-bg');
        $("#profitMargin-td").removeClass('table-danger');
        $("#profitMargin-td").removeClass('table-success');
        $("#profitMargin-td").removeClass('text-success');
        $("#profitMargin-td").removeClass('text-danger');
        $("#profitMargin-td").addClass('mgt-td-dark-bg');
    }
    else {
        $("#ProfitMargin").html(Math.round(sumProfitmargin) + "%");

        if (sumProfitmargin > 0) {
            $("#profitMargin-td").addClass('table-success');
            $("#profitMargin-td").removeClass('mgt-td-dark-bg');
            $("#profitMargin-td").removeClass('table-danger');
            $("#ProfitMargin").addClass('text-success');
            $("#ProfitMargin").removeClass('text-danger');
        } else {
            $("#profitMargin-td").addClass('table-danger');
            $("#profitMargin-td").removeClass('mgt-td-dark-bg');
            $("#profitMargin-td").removeClass('table-success');
            $("#ProfitMargin").addClass('text-danger');
            $("#ProfitMargin").removeClass('text-success');
        }
        
    }
}

$(document).ready(function() {
    $("#coaching_Programexpenses").on("blur", function () {
        $(this).val(function (i, v) {
            return v.replace("%", "") + "%";
        });
    });   

    $(".currency_input").on({
        "input": function () {
            $(this).val(function (i, v) {
                return currency.format(this.value.replace(/[^0-9.]+/g, ""));
            });
        }
    });

    $(".number_input").on({
        "input": function () {
            $(this).val(function (i, v) {
                return this.value.replace(/[^0-9.]+/g, "");
            });
        }
    });

});