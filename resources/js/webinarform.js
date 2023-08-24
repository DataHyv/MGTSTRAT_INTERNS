let currency = Intl.NumberFormat("en-US");

overallTotal = 0;
customizationFee = 0;

sumOfCustomFee = 0;
sumOfPackage1 = 0;
sumOfPackage2 = 0;
sumOfPackage3 = 0;
sumOfProducer = 0;
standardFee = 0;
totalPackage = 0;
discount = 0;
sumofSales = 0;
sumofReferral = 0;
sumofEngagementManager = 0;
sumofEngagementCost = 0;
sumofLeadFacilitator = 0;
sumofCreatorFee = 0;
sumofCustomizationFee = 0;
sumInputModerator = 0;
sumInputProducer = 0;
sumInputOffprograms = 0;
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
document.getElementById("webinar_CustomizationHf1").value = currency.format(2250);
document.getElementById("customizations_roster1").value = 'TBA';
document.getElementById("webinar_LeadfacilitatorsHf1").value = currency.format(3000);
document.getElementById("leadfacilitator_roster1").value = 'TBA';
document.getElementById("webinar_ModeratorHf1").value = currency.format(800);
document.getElementById("moderator_roster1").value = 'TBA';
document.getElementById("webinar_ProducerHf1").value = currency.format(550);
document.getElementById("producer_roster1").value = 'TBA';
document.getElementById("webinar_OffprogramsNoh1").value = currency.format(1000);
document.getElementById("webinar_Programexpenses").value = 2 + "%";

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
$(document).on('change keyup blur', '#tablecustomFee input, #tablecustomFee select', function () {
    sumOfCustomFee = 0;
    // EF Customization Fee
    $("#tablecustomFee").each(function () {
        sumOfCustomFee = $('#ef_customFeePF1').val();
        $('#ef_customFeeTotal').html(currency.format(Math.ceil(sumOfCustomFee)));
    });
    $('#subtotalConsultingDesign').html(currency.format(Math.ceil(sumOfCustomFee)));

    computeEngagementFee();
});

$(document).on('change keyup blur', '#tableProgramPackage1 input, #tableProgramPackage1 select', function () {
    sumOfPackage1 = 0;
    // EF Package, up to 30 pax
    $("#tableProgramPackage1").each(function () {
        sumOfPackage1 = 
            ( $('#ef_package1FeePf').val() * $('#ef_package1FeeNos').val() ) +
            ( $('#ef_package1FeePf').val() * ($('#ef_package1FeeNsw').val() * 0.2) );
        $('#ef_package1FeeTotal').html(currency.format(Math.ceil(sumOfPackage1)));
    });

    computeEngagementFee();
});

$(document).on('change keyup blur', '#tablepackage2 input, #tablepackage2 select', function () {
    sumOfPackage2 = 0;
    // EF Package, 31-50 pax
    $("#tablepackage2").each(function () {
        sumOfPackage2 = 
            ( $('#ef_package2FeePf').val() * $('#ef_package2FeeNos').val() ) +
            ( $('#ef_package2FeePf').val() * ($('#ef_package2FeeNsw').val() * 0.2) );
        $('#ef_package2FeeTotal').html(currency.format(Math.ceil(sumOfPackage2)));
    });

    computeEngagementFee();
});

$(document).on('change keyup blur', '#tablepackage3 input, #tablepackage3 select', function () {
    sumOfPackage3 = 0;
    // EF Package, up to 30 pax
    $("#tablepackage3").each(function () {
        sumOfPackage3 = 
            ( $('#ef_package3FeePf').val() * $('#ef_package3FeeNos').val() ) +
            ( $('#ef_package3FeePf').val() * ($('#ef_package3FeeNsw').val() * 0.2) );
        $('#ef_package3FeeTotal').html(currency.format(Math.ceil(sumOfPackage3)));
    });

    computeEngagementFee();
});

$(document).on('change keyup blur', '#tableproducer input, #tableproducer select', function () {
    sumOfProducer = 0;
    // Producer (5K, 7.5K)
    $("#tableproducer").each(function () {
        sumOfProducer = 
            ( $('#ef_producerFeePf').val() * $('#ef_producerFeeNoc').val() ) +
            ( $('#ef_producerFeePf').val() * ($('#ef_producerFeeNsw').val() * 0.2) );
        $('#ef_producerFeeTotal').html(currency.format(Math.ceil(sumOfProducer)));
    });

    computeEngagementFee();
});

function computeEngagementFee() {
    // standardFee = sumOfCustomFee;
    standardFee = parseInt(sumOfCustomFee) + parseInt(sumOfPackage1) + parseInt(sumOfPackage2) + parseInt(sumOfPackage3) + parseInt(sumOfProducer);
    $('#subtotalProgram').html(currency.format(Math.ceil(sumOfPackage1 + sumOfPackage2 + sumOfPackage3 + sumOfProducer)));    
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

$(document).on('change keyup blur', '#webinar-table input, #webinar-table select', function () {

    var webinar_pax_number_value = parseInt($(`#pax_number`).val());
    sumofEngagementCost = 0;

    //---------------------------------------ENGAGEMENTCOST---------------------------------------------
    sumInputSales = 1;
    $("#tableofSale > tr").each(function () { // Sales
        sumofSales =
            ( ($("#input_totalPackages").val().replace(/\₱|,/g, "") / 100) * $(`#webinar_sale`).val().replace(/\₱|,/g, "") ) ||
            ( ($("#input_totalPackages").val().replace(/\₱|,/g, "") / 100) * $(`#inputforSale${sumInputSales}`).val().replace(/%/g, "") );
            $(`#webinar_saleTotal${sumInputSales}`).html(currency.format(Math.ceil(sumofSales)));
        sumofEngagementCost += +sumofSales;
        sumInputSales++;        
    });

    sumInputReferral = 1;
    $("#tableofReferrals > tr").each(function () { // Referral
        sumofReferral =
            ( ($("#input_totalPackages").val().replace(/\₱|,/g, "") / 100) * $(`#webinar_referrals`).val().replace(/\₱|,/g, "") ) ||
            ( ($("#input_totalPackages").val().replace(/\₱|,/g, "") / 100) * $(`#inputforReferrals${sumInputReferral}`).val().replace(/%/g, "") );
            $(`#webinar_referralsTotal${sumInputReferral}`).html(currency.format(Math.ceil(sumofReferral)));
        sumofEngagementCost += +sumofReferral;
        sumInputReferral++;        
    });

    sumInputEngagementManager = 1;
    $("#tableofEngagementManager > tr").each(function () { // Engagement Manager
        sumofEngagementManager =
            ( ($("#input_totalPackages").val().replace(/\₱|,/g, "") / 100) * $(`#webinar_engagementManager`).val().replace(/\₱|,/g, "") ) ||
            ( ($("#input_totalPackages").val().replace(/\₱|,/g, "") / 100) * $(`#inputforEngagementManager${sumInputEngagementManager}`).val().replace(/%/g, "") );
            $(`#webinar_engagementManagerTotal${sumInputEngagementManager}`).html(currency.format(Math.ceil(sumofEngagementManager)));
        sumofEngagementCost += +sumofEngagementManager;
        sumInputEngagementManager++;        
    });

    sumInputCustomizationFee = 1;
    $("#tableofCustomization > tr").each(function () { // Customization Fee
        sumofCustomizationFee = 
            $(`#webinar_CustomizationHf${sumInputCustomizationFee}`).val().replace(/\₱|,/g, "") * 
            $(`#webinar_CustomizationNoh${sumInputCustomizationFee}`).val().replace(/\₱|,/g, "");
        $(`#webinar_CustomizationsTotal${sumInputCustomizationFee}`).html(currency.format(Math.ceil(sumofCustomizationFee)));
        sumofEngagementCost += +sumofCustomizationFee;
        sumInputCustomizationFee++;        
    }); 

    sumInputCreatorFee = 1;
    $("#tableofCreator > tr").each(function () { // Creators Fees 
        sumofCreatorFee = 
            $(`#webinar_CreatorHf${sumInputCreatorFee}`).val().replace(/\₱|,/g, "") * $(`#webinar_CreatorNoh${sumInputCreatorFee}`).val().replace(/\₱|,/g, "");
        $(`#webinar_CreatorTotal${sumInputCreatorFee}`).html(currency.format(Math.ceil(sumofCreatorFee)));
        sumofEngagementCost += +sumofCreatorFee;
        sumInputCreatorFee++;        
    });

    $('#webinar_DesignsSubtotal').html(currency.format(Math.ceil(sumofCustomizationFee + sumofCreatorFee)));

    sumInputLeadFacilitator = 1;
    $("#tableofLeadFacilitator > tr").each(function () { // Lead Facilitator
        sumofLeadFacilitator = 
                (
                ($(`#webinar_LeadfacilitatorsHf${sumInputLeadFacilitator}`).val().replace(/\₱|,/g, "") * $(`#webinar_LeadfacilitatorsNoh${sumInputLeadFacilitator}`).val().replace(/\₱|,/g, "")) +
                ($(`#webinar_LeadfacilitatorsHf${sumInputLeadFacilitator}`).val().replace(/\₱|,/g, "") * $(`#webinar_LeadfacilitatorsNoh${sumInputLeadFacilitator}`).val().replace(/\₱|,/g, "")) *
                ($(`#webinar_LeadfacilitatorsNwh${sumInputLeadFacilitator}`).val().replace(/\₱|,/g, "") * 0.2));

        if (webinar_pax_number_value >= 201) {
            sumofLeadFacilitator *= 1.3
        } else if (webinar_pax_number_value >= 101) {
            sumofLeadFacilitator *= 1.2
        } else if (webinar_pax_number_value >= 51) {
            sumofLeadFacilitator *= 1.1;
        }

        $(`#webinar_LeadfacilitatorsTotal${sumInputLeadFacilitator}`).html(currency.format(Math.round(sumofLeadFacilitator)));
        sumofEngagementCost += +sumofLeadFacilitator;
        sumInputLeadFacilitator++;        
    }); 

    sumInputModerator = 1;
    $("#tableofModerator > tr").each(function () { // Moderator
        sumofModerator = 
                (($(`#webinar_ModeratorHf${sumInputModerator}`).val().replace(/\₱|,/g, "") * $(`#webinar_ModeratorNoh${sumInputModerator}`).val().replace(/\₱|,/g, "")) +
                ($(`#webinar_ModeratorHf${sumInputModerator}`).val().replace(/\₱|,/g, "") * $(`#webinar_ModeratorNoh${sumInputModerator}`).val().replace(/\₱|,/g, "")) *
                ($(`#webinar_ModeratorNwh${sumInputModerator}`).val().replace(/\₱|,/g, "") * 0.2));

        if (webinar_pax_number_value >= 201) {
            sumofModerator *= 1.3
        } else if (webinar_pax_number_value >= 101) {
            sumofModerator *= 1.2
        } else if (webinar_pax_number_value >= 51) {
            sumofModerator *= 1.1;
        }

        $(`#webinar_ModeratorTotal${sumInputModerator}`).html(currency.format(Math.round(sumofModerator)));
        sumofEngagementCost += +sumofModerator;
        sumInputModerator++;        
    });

    sumInputProducer = 1;
    $("#tableofProducer > tr").each(function () { // Producer
        sumofProducer = 
                (($(`#webinar_ProducerHf${sumInputProducer}`).val().replace(/\₱|,/g, "") * $(`#webinar_ProducerNoh${sumInputProducer}`).val()) +
                ($(`#webinar_ProducerHf${sumInputProducer}`).val().replace(/\₱|,/g, "") * $(`#webinar_ProducerNoh${sumInputProducer}`).val()) *
                ($(`#webinar_ProducerNwh${sumInputProducer}`).val().replace(/\₱|,/g, "") * 0.2));

        if (webinar_pax_number_value >= 201) {
            sumofProducer *= 1.3
        } else if (webinar_pax_number_value >= 101) {
            sumofProducer *= 1.2
        } else if (webinar_pax_number_value >= 51) {
            sumofProducer *= 1.1;
        }

        $(`#webinar_ProducersTotal${sumInputProducer}`).html(currency.format(Math.round(sumofProducer)));
        sumofEngagementCost += +sumofProducer;
        sumInputProducer++;        
    });

    $('#webinar_ProgramsSubtotal').html(currency.format(Math.ceil(sumofLeadFacilitator + sumofModerator + sumofProducer)));

    sumInputOffprograms = 1;
    $("#tableofOffProgram > tr").each(function () { // Off-Program
        sumofOffprograms = 
                $(`#webinar_OffprogramsHf${sumInputOffprograms}`).val().replace(/\₱|,/g, "") * $(`#webinar_OffprogramsNoh${sumInputOffprograms}`).val().replace(/\₱|,/g, "")
                ;
        $(`#webinar_OffprogramsTotal${sumInputOffprograms}`).html(currency.format(Math.ceil(sumofOffprograms)));
        sumofEngagementCost += +sumofOffprograms;
        sumInputOffprograms++;        
    });

    sumofProgramExpense =  ($(`#webinar_Programexpenses`).val().replace(/,|%/g, "") * $(`#input_totalPackages`).val().replace(/\₱|,/g, "")) / 100;
    $(`#webinar_ProgramexpensesTotal`).html(currency.format(Math.ceil(sumofProgramExpense)));
    sumofEngagementCost += +sumofProgramExpense;

    $('#webinar_Totals').html(currency.format(Math.ceil(sumofEngagementCost)));

    //---------------------------------------PROFIT FORECAST---------------------------------------------
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

});

$(document).on(
    "change blur click",
    "#webinar-ef-table tr.th-blue-grey-lighten input,  #webinar-ef-table tr.th-blue-grey-lighten-2 select, #webinar-ef-table tr.th-blue-grey-lighten-2 input,  #webinar-ef-table tr.th-blue-grey-lighten select",
    function () {        
        document.getElementById("input_totalPackages").value = $("#standard_total").html();
        $('#input_totalPackages').blur();
    }
);

//ROSTER RATE AUTO INPUT
$(document).on(
    "load",
    "#main",
    function () {
    // CUSTOMIZATION
    customizationCount = 0;
    $("#tableofCustomization > tr").each(function () {
        customizationCount++;
        let roster = $(`#customizations_roster${customizationCount}`).val().trim();
        dailyFees = 2250;
        if (roster == '' || roster.toUpperCase() == 'TBA') {
            document.getElementById(`customizations_roster${customizationCount}`).value = 'TBA';
            $(`#webinar_CustomizationHf${customizationCount}`).val( currency.format(Math.ceil(dailyFees)) );
            
        } else {
            filterConsultant(`customizations_roster${customizationCount}`, `webinar_CustomizationHf${customizationCount}`, `customizationFee`);
        }
    });

    // LEAD FACILITOR
    leadFacilitatorCount = 0;
    $("#tableofLeadFacilitator > tr").each(function () {
        leadFacilitatorCount++;
        let roster = $(`#leadfacilitator_roster${leadFacilitatorCount}`).val().trim();
        dailyFees = 3000;
        if (roster == '' || roster.toUpperCase() == 'TBA') {
            document.getElementById(`leadfacilitator_roster${leadFacilitatorCount}`).value = 'TBA';
            $(`#webinar_LeadfacilitatorsHf${leadFacilitatorCount}`).val( currency.format(Math.ceil(dailyFees)) );
            
        } else {
            filterConsultant(`leadfacilitator_roster${leadFacilitatorCount}`, `webinar_LeadfacilitatorsHf${leadFacilitatorCount}`, `leadFacilitator`);
        }
    });

    // MODERATOR
    moderatorCount = 0;
    $("#tableofModerator > tr").each(function () {
        moderatorCount++;
        let roster = $(`#moderator_roster${moderatorCount}`).val().trim();
        dailyFees = 800;
        if (roster == '' || roster.toUpperCase() == 'TBA') {
            document.getElementById(`moderator_roster${moderatorCount}`).value = 'TBA';
            $(`#webinar_ModeratorHf${moderatorCount}`).val( currency.format(Math.ceil(dailyFees)) );
            
        } else {
            filterConsultant(`moderator_roster${moderatorCount}`, `webinar_ModeratorHf${moderatorCount}`, `moderator`);
        }
    });

    // PRODUCER
    producerCount = 0;
    $("#tableofProducer > tr").each(function () {
        producerCount++;
        let roster = $(`#producer_roster${producerCount}`).val().trim();
        dailyFees = 550;
        if (roster == '' || roster.toUpperCase() == 'TBA') {
            document.getElementById(`producer_roster${producerCount}`).value = 'TBA';
            $(`#webinar_ProducerHf${producerCount}`).val( currency.format(Math.ceil(dailyFees)) );
            
        } else {
            filterConsultant(`producer_roster${producerCount}`, `webinar_ProducerHf${producerCount}`, `producer`);
        }
    });

});

$(document).ready(function() {
    $("#webinar_Programexpenses").on("blur", function () {
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