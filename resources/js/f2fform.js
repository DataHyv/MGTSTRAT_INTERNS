//*************************************** CURRENCY FORMATTER ********************************************************//
let currency = Intl.NumberFormat("en-US");

var sumEf = 0;
var sumLc = 0;
var sumAnlst = 0;
sumSales1 = 0;
sumDesigner = 0;
sumLeadFaci = 0;
sumCoFaci = 0;
sumCoLead = 0;
sumActionLearn = 0;
sumMarshal = 0;
sumOnsite = 0;
sumProgram = 0;
sumDocumentor = 0;
sumPD = 0;
sumA = 0;
sum50 = 0;
sumofEngagementCost = 0;
sumofSales = 0;
sumofReferral = 0;
sumofEngagementManager = 0;
sumofOffsitepc = 0;
sumofecLeadconsultant = 0;
sumofecAnalyst = 0;
sumofecDesigner = 0;
ecDesignSubtotal = 0;
sumofecCreators = 0;
sumofecLeadfacilitator = 0;
sumofecCoLead = 0;
sumofecCofacilitator = 0;
sumofecActionlearningcoach = 0;
sumofecMarshal = 0;
sumofecOnsitepc = 0;
ecProgramSubtotal = 0;
sumofecDocumentor = 0;
sumofecPerdiem = 0;
sumofecOffprogram = 0;
sumofecProgramexpense = 0;

rowIndx = 0;
rowAnalyst = 0;
rowDesigner = 0;
rowLeadFaci = 0;
rowCoFaci = 0;
rowActionLearn = 0;
rowMarshal = 0;
rowOnsite = 0;
rowDocumentor = 0;

ecleadConsultant = 0;
ecAnalyst = 0;
ecDesigner = 0;
ecCreator = 0;
ecLeadFacilitator = 0;
ecCoFacilitator = 0;
ecActionLearning = 0;
ecMarshal = 0;
ecOnsite = 0;
ecDocumentor = 0;
ecPerDiem = 0;
ecOffProgram = 0;

var standardFee = 0;

//default value of input types
document.getElementById("ef_AnalystPdf").value = currency.format(40000);
document.getElementById("ef_LeadconsultantHf1").value = 56000;
document.getElementById("ef_LeadFaciPdf1").value = 96000;
document.getElementById("ef_CoFaciPdf").value = currency.format(40000);
document.getElementById("ef_ActionLearnPdf").value = currency.format(40000);
document.getElementById("ef_MarshalPdf").value = currency.format(30000);
document.getElementById("ef_DocumentorPdf").value = currency.format(20000);
document.getElementById("ef_PDPdf").value = currency.format(2000);
//Engagement Cost
document.getElementById("ec_LeadfacilitatorsPd1").value = currency.format(Math.ceil(24000));
document.getElementById("ec_AnalystsPd1").value = currency.format(Math.ceil(13600));
document.getElementById("ec_Programexpenses").value = 2 + "%";

//Customized Engagement form of Engagement Fees
$(document).on( "change keyup click", "#tableLeadconsultant input, #tableLeadconsultant select", function () {
    $("#tableLeadconsultant > tr").each(function () { //Lead consultant
        document.getElementById("ec_LeadconsultantsNoc1").value = $( "#ef_LeadconsultantNoc1" ).val();
        document.getElementById("ec_LeadconsultantsNod1").value = $( "#ef_LeadconsultantNoh1" ).val();
        document.getElementById("ec_LeadconsultantsNwh1").value = $( "#ef_LeadconsultantNwh1" ).val();
        document.getElementById("ec_LeadconsultantsAtd1").value = $( "#ef_LeadconsultantAtd1" ).val();

        var ef_LeadconsultantNoc = ($(`#ef_LeadconsultantNoc1`).val()) ? $(`#ef_LeadconsultantNoc1`).val() : 0;
        var ef_LeadconsultantHf = ($(`#ef_LeadconsultantHf1`).val()) ? $(`#ef_LeadconsultantHf1`).val() : 0;
        var ef_LeadconsultantNoh = ($(`#ef_LeadconsultantNoh1`).val()) ? $(`#ef_LeadconsultantNoh1`).val() : 0;
        var ef_LeadconsultantNwh = ($(`#ef_LeadconsultantNwh1`).val()) ? $(`#ef_LeadconsultantNwh1`).val() : 0;
        var ef_LeadconsultantAtd = ($(`#ef_LeadconsultantAtd1`).val()) ? $(`#ef_LeadconsultantAtd1`).val() : 0;

        sumLc = (ef_LeadconsultantNoc * ef_LeadconsultantHf * ef_LeadconsultantNoh ) + 
        (ef_LeadconsultantAtd * (ef_LeadconsultantNoc * ef_LeadconsultantHf * ef_LeadconsultantNoh * 0.2 )) + 
        (ef_LeadconsultantNwh * (ef_LeadconsultantNoc * ef_LeadconsultantHf * ef_LeadconsultantNoh * 0.2 ));

        $("#leadTotal").html(currency.format(Math.ceil(sumLc)));
        computeEngagementFee();
    });
});

$(document).on( "change keyup click", "#ef_TableAnalyst input, #ef_TableAnalyst select", function () {
    $("#ef_TableAnalyst > tr").each(function () {
        document.getElementById("ec_AnalystsNoc1").value = $( "#ef_AnalystNoc1" ).val();
        document.getElementById("ec_AnalystsNod1").value = $( "#ef_AnalystNod1" ).val();
        document.getElementById("ec_AnalystsNwh1").value = $( "#ef_AnalystNsw1" ).val();
        document.getElementById("ec_AnalystsAtd1").value = $( "#ef_AnalystAtd1" ).val();

        var ef_AnalystNoc1 = ($(`#ef_AnalystNoc1`).val()) ? $(`#ef_AnalystNoc1`).val() : 0;
        var ef_AnalystPdf = ($("#ef_AnalystPdf").val()) ? $("#ef_AnalystPdf").val().replace(/,/g, "") : 0;
        var ef_AnalystNod1 = ($(`#ef_AnalystNod1`).val()) ? $(`#ef_AnalystNod1`).val() : 0;
        var ef_AnalystAtd1 = ($(`#ef_AnalystAtd1`).val()) ? $(`#ef_AnalystAtd1`).val() : 0;
        var ef_AnalystNsw1 = ($(`#ef_AnalystNsw1`).val()) ? $(`#ef_AnalystNsw1`).val() : 0;

        sumAnlst = (ef_AnalystNoc1 * ef_AnalystPdf * ef_AnalystNod1 ) +
        (ef_AnalystAtd1 * (   ef_AnalystNoc1 * ef_AnalystPdf * ef_AnalystNod1 * 0.2 )) +
        (ef_AnalystNsw1 * (   ef_AnalystNoc1 * ef_AnalystPdf * ef_AnalystNod1 * 0.2 ) );

        $("#analyst-total").html(currency.format(Math.ceil(sumAnlst)));
        computeEngagementFee();
    });
});

$(document).on( "change keyup click", "#ef_TableDesigner input, #ef_TableDesigner select", function () {
    $("#ef_TableDesigner > tr").each(function () {
        document.getElementById("ec_DesignersNoc1").value = $( "#ef_DesignerNoc1" ).val();
        document.getElementById("ec_DesignersNod1").value = $( "#ef_DesignerNod1" ).val();
        document.getElementById("ec_DesignersNwh1").value = $( "#ef_DesignerNsw1" ).val();
        document.getElementById("ec_DesignersAtd1").value = $( "#ef_DesignerAtd1" ).val();

        var ef_DesignerNoc1 = ($(`#ef_DesignerNoc1`).val()) ? $(`#ef_DesignerNoc1`).val() : 0;
        var ef_DesignerPdf = ($("#ef_DesignerPdf").val()) ? $("#ef_DesignerPdf").val() : 0;
        var ef_DesignerNod1 = ($(`#ef_DesignerNod1`).val()) ? $(`#ef_DesignerNod1`).val() : 0;

        sumDesigner =  ef_DesignerNoc1 * ef_DesignerPdf  * ef_DesignerNod1;

        $("#subtotal-design").html(currency.format(Math.ceil(sumDesigner)));
        computeEngagementFee();
    });
});

$(document).on( "change keyup click", "#ef_TableLeadFaci input, #ef_TableLeadFaci select", function () {
    $("#ef_TableLeadFaci > tr").each(function () {
        document.getElementById("ec_LeadfacilitatorsNoc1").value = $( "#ef_LeadFaciNoc1" ).val();
        document.getElementById("ec_LeadfacilitatorsNod1").value = $( "#ef_LeadFaciNod1" ).val();
        document.getElementById("ec_LeadfacilitatorsNwh1").value = $( "#ef_LeadFaciNsw1" ).val();
        document.getElementById("ec_LeadfacilitatorsAtd1").value = $( "#ef_LeadFaciAtd1" ).val();

        var ef_LeadFaciNoc1 = ($(`#ef_LeadFaciNoc1`).val()) ? $(`#ef_LeadFaciNoc1`).val() : 0;
        var ef_LeadFaciPdf1 = ($(`#ef_LeadFaciPdf1`).val()) ? $(`#ef_LeadFaciPdf1`).val().replace(/\₱|,/g, "") : 0;
        var ef_LeadFaciNod1 = ($(`#ef_LeadFaciNod1`).val()) ? $(`#ef_LeadFaciNod1`).val() : 0;
        var ef_LeadFaciAtd1 = ($(`#ef_LeadFaciAtd1`).val()) ? $(`#ef_LeadFaciAtd1`).val() : 0;
        var ef_LeadFaciNsw1 = ($(`#ef_LeadFaciNsw1`).val()) ? $(`#ef_LeadFaciNsw1`).val() : 0;
        var ef_InputLeadFaciPdf1 = ($(`#ef_InputLeadFaciPdf1`).val()) ? $(`#ef_InputLeadFaciPdf1`).val().replace(/\₱|,/g, "") : 0;

        sumLeadFaci = (ef_LeadFaciNoc1 * ef_LeadFaciPdf1 * ef_LeadFaciNod1 ) + 
        (ef_LeadFaciAtd1 * (ef_LeadFaciNoc1 * ef_LeadFaciPdf1 * ef_LeadFaciNod1 * 0.2 )) + 
        (ef_LeadFaciNsw1 * (ef_LeadFaciNoc1 * ef_LeadFaciPdf1 * ef_LeadFaciNod1 * 0.2 )) || 
        (ef_LeadFaciNoc1 * ef_InputLeadFaciPdf1 * ef_LeadFaciNod1) + 
        (ef_LeadFaciAtd1 * (ef_LeadFaciNoc1 * ef_InputLeadFaciPdf1 * ef_LeadFaciNod1 * 0.2 )) + 
        (ef_LeadFaciNsw1 * (ef_LeadFaciNoc1 * ef_InputLeadFaciPdf1 * ef_LeadFaciNod1 * 0.2 ) );

        $("#subtotal-LeadFaci").html(currency.format(Math.ceil(sumLeadFaci)));
        computeEngagementFee();
    });
});

$(document).on( "change keyup click", "#ef_TableCoFaci input, #ef_TableCoFaci select", function () {
    $("#ef_TableCoFaci > tr").each(function () {
        document.getElementById("ec_CofacilitatorsNoc1").value = $( "#ef_CoFaciNoc1" ).val();
        document.getElementById("ec_CofacilitatorsNod1").value = $( "#ef_CoFaciNod1" ).val();
        document.getElementById("ec_CofacilitatorsNwh1").value = $( "#ef_CoFaciNsw1" ).val();
        document.getElementById("ec_CofacilitatorsAtd1").value = $( "#ef_CoFaciAtd1" ).val();

        var ef_CoFaciNoc = ($(`#ef_CoFaciNoc1`).val()) ? $(`#ef_CoFaciNoc1`).val() : 0;
        var ef_CoFaciPdf = ($("#ef_CoFaciPdf").val()) ? $("#ef_CoFaciPdf").val().replace(/\₱|,/g, "") : 0;
        var ef_CoFaciNod1 = ($(`#ef_CoFaciNod1`).val()) ? $(`#ef_CoFaciNod1`).val() : 0;
        var ef_CoFaciAtd1 = ($(`#ef_CoFaciAtd1`).val()) ? $(`#ef_CoFaciAtd1`).val() : 0;
        var ef_CoFaciNsw1 = ($(`#ef_CoFaciNsw1`).val()) ? $(`#ef_CoFaciNsw1`).val() : 0;

        sumCoFaci = (ef_CoFaciNoc * ef_CoFaciPdf * ef_CoFaciNod1) + 
        (ef_CoFaciAtd1 * (ef_CoFaciNoc * ef_CoFaciPdf * ef_CoFaciNod1 * 0.2)) + 
        (ef_CoFaciNsw1 * (ef_CoFaciNoc * ef_CoFaciPdf * ef_CoFaciNod1 * 0.2 ));

        $("#subtotal-coFacilitator").html(currency.format(Math.ceil(sumCoFaci)));
        computeEngagementFee();
    });
});

$(document).on( "change keyup click", "#ef_TableActionLearn input, #ef_TableActionLearn select", function () {
    $("#ef_TableActionLearn > tr").each(function () {
        document.getElementById("ec_ActionlearningcoachNoc1").value = $( "#ef_ActionLearnNoc1" ).val();
        document.getElementById("ec_ActionlearningcoachNod1").value = $( "#ef_ActionLearnNod1" ).val();
        document.getElementById("ec_ActionlearningcoachNwh1").value = $( "#ef_ActionLearnNsw1" ).val();
        document.getElementById("ec_ActionlearningcoachAtd1").value = $( "#ef_ActionLearnAtd1" ).val();

        var ef_ActionLearnNoc1 = ($(`#ef_ActionLearnNoc1`).val()) ? $(`#ef_ActionLearnNoc1`).val() : 0;
        var ef_ActionLearnPdf = ($("#ef_ActionLearnPdf").val()) ? $("#ef_ActionLearnPdf").val().replace(/\₱|,/g, "") : 0;
        var ef_ActionLearnNod1 = ($(`#ef_ActionLearnNod1`).val()) ? $(`#ef_ActionLearnNod1`).val(): 0;
        var ef_ActionLearnAtd1 = ($(`#ef_ActionLearnAtd1`).val()) ? $(`#ef_ActionLearnAtd1`).val() : 0;
        var ef_ActionLearnNsw1 = ($(`#ef_ActionLearnNsw1`).val()) ? $(`#ef_ActionLearnNsw1`).val() : 0;

        sumActionLearn = (ef_ActionLearnNoc1 * ef_ActionLearnPdf * ef_ActionLearnNod1 ) +
        (ef_ActionLearnAtd1 * (ef_ActionLearnNoc1 * ef_ActionLearnPdf * ef_ActionLearnNod1 * 0.2)) + 
        (ef_ActionLearnNsw1 * (ef_ActionLearnNoc1 * ef_ActionLearnPdf * ef_ActionLearnNod1 * 0.2));

        $("#subtotal-ActionLearn").html(currency.format(Math.ceil(sumActionLearn)));
        computeEngagementFee();
    });
});

$(document).on( "change keyup click", "#ef_TableMarshal input, #ef_TableMarshal select", function () {
    $("#ef_TableMarshal > tr").each(function () {
        document.getElementById("ec_MarshalNoc1").value = $( "#ef_MarshalNoc1" ).val();
        document.getElementById("ec_MarshalNod1").value = $( "#ef_MarshalNod1" ).val();
        document.getElementById("ec_MarshalNwh1").value = $( "#ef_MarshalNsw1" ).val();
        document.getElementById("ec_MarshalAtd1").value = $( "#ef_MarshalAtd1" ).val();

        var ef_MarshalNoc1 = ($(`#ef_MarshalNoc1`).val()) ? $(`#ef_MarshalNoc1`).val() : 0;
        var ef_MarshalPdf = ($("#ef_MarshalPdf").val()) ? $("#ef_MarshalPdf").val().replace(/\₱|,/g, "") : 0;
        var ef_MarshalNod1 = ($(`#ef_MarshalNod1`).val()) ? $(`#ef_MarshalNod1`).val(): 0;
        var ef_MarshalAtd1 = ($(`#ef_MarshalAtd1`).val()) ? $(`#ef_MarshalAtd1`).val() : 0;
        var ef_MarshalNsw1 = ($(`#ef_MarshalNsw1`).val()) ? $(`#ef_MarshalNsw1`).val() : 0;

        sumMarshal = (ef_MarshalNoc1 * ef_MarshalPdf * ef_MarshalNod1) + 
        (ef_MarshalAtd1 * (ef_MarshalNoc1 * ef_MarshalPdf * ef_MarshalNod1 * 0.2)) +
        (ef_MarshalNsw1 * (ef_MarshalNoc1 * ef_MarshalPdf * ef_MarshalNod1 * 0.2));

        $("#subtotal-marshal").html(currency.format(Math.ceil(sumMarshal)));
        computeEngagementFee();
    });
});

$(document).on( "change keyup click", "#ef_TableOnsite input, #ef_TableOnsite select", function () {
    $("#ef_TableOnsite > tr").each(function () {
        document.getElementById("ec_OnsitepcNoc1").value = $( "#ef_OnsiteNoc1" ).val();
        document.getElementById("ec_OnsitepcNod1").value = $( "#ef_OnsiteNod1" ).val();
        document.getElementById("ec_OnsitepcNwh1").value = $( "#ef_OnsiteNsw1" ).val();
        document.getElementById("ec_OnsitepcAtd1").value = $( "#ef_OnsiteAtd1" ).val();

        var ef_OnsiteNoc1 = ($(`#ef_OnsiteNoc1`).val()) ? $(`#ef_OnsiteNoc1`).val() : 0;
        var ef_OnsitePdf = ($("#ef_OnsitePdf").val()) ? $("#ef_OnsitePdf").val() : 0;
        var ef_OnsiteNod1 = ($(`#ef_OnsiteNod1`).val()) ? $(`#ef_OnsiteNod1`).val(): 0;
        var ef_OnsiteAtd1 = ($(`#ef_OnsiteAtd1`).val()) ? $(`#ef_OnsiteAtd1`).val() : 0;
        var ef_OnsiteNsw1 = ($(`#ef_OnsiteNsw1`).val()) ? $(`#ef_OnsiteNsw1`).val() : 0;

        sumOnsite = (ef_OnsiteNoc1 *  ef_OnsitePdf * ef_OnsiteNod1) + 
        (ef_OnsiteAtd1 * (ef_OnsiteNoc1 * ef_OnsitePdf * ef_OnsiteNod1 *0.2)) +
        (ef_OnsiteNsw1 * (ef_OnsiteNoc1 * ef_OnsitePdf * ef_OnsiteNod1 * 0.2));

        $("#subtotal-Onsite").html(currency.format(Math.ceil(sumOnsite)));
        computeEngagementFee();
    });
});

$(document).on( "change keyup click", "#ef_TableDocumentor input, #ef_TableDocumentor select", function () {
    $("#ef_TableDocumentor > tr").each(function () {
        document.getElementById("ec_DocumentorsNoc1").value = $( "#ef_DocumentorNoc1" ).val();
        document.getElementById("ec_DocumentorsNod1").value = $( "#ef_DocumentorNod1" ).val();
        document.getElementById("ec_DocumentorsNwh1").value = $( "#ef_DocumentorNsw1" ).val();
        document.getElementById("ec_DocumentorsAtd1").value = $( "#ef_DocumentorAtd1" ).val();

        var ef_DocumentorNoc1 = ($(`#ef_DocumentorNoc1`).val()) ? $(`#ef_DocumentorNoc1`).val(): 0;
        var ef_DocumentorPdf = ($("#ef_DocumentorPdf").val()) ? $("#ef_DocumentorPdf").val().replace(/\₱|,/g, "") : 0;
        var ef_DocumentorNod1 = ($(`#ef_DocumentorNod1`).val()) ? $(`#ef_DocumentorNod1`).val() : 0;
        var ef_DocumentorAtd1 = ($(`#ef_DocumentorAtd1`).val()) ? $(`#ef_DocumentorAtd1`).val() : 0;
        var ef_DocumentorNsw1 = ($(`#ef_DocumentorNsw1`).val()) ? $(`#ef_DocumentorNsw1`).val(): 0;

        sumDocumentor = (ef_DocumentorNoc1 * ef_DocumentorPdf * ef_DocumentorNod1) + 
        (ef_DocumentorAtd1 * (ef_DocumentorNoc1 * ef_DocumentorPdf * ef_DocumentorNod1 * 0.2 )) +
        (ef_DocumentorNsw1 * (ef_DocumentorNoc1 * ef_DocumentorPdf * ef_DocumentorNod1 * 0.2));

        $("#subtotal-Documentor").html(currency.format(Math.ceil(sumDocumentor)));
        computeEngagementFee();
    });
});

$(document).on( "change keyup click", "#ef_TablePerDiem input, #ef_TablePerDiem select", function () {
    $("#ef_TablePerDiem").each(function () {
        document.getElementById(`ec_PerdiemNod1`).value = $( "#ef_PDNod" ).val();

        var ef_PDNod = ($("#ef_PDNod").val()) ? $("#ef_PDNod").val(): 0;
        var ef_PDPdf = ($("#ef_PDPdf").val()) ? $("#ef_PDPdf").val().replace(/\₱|,/g, "") : 0;

        sumPD = ef_PDNod * ef_PDPdf;

        $("#subtotal-PD").html(currency.format(Math.ceil(sumPD)));
        computeEngagementFee();
    });
});

function computeEngagementFee() {
    standardFee = sumLc + sumAnlst + sumDesigner + sumLeadFaci + sumCoFaci + sumActionLearn + sumMarshal + sumOnsite + sumDocumentor + sumPD;
    $("#subtotalConsulting").html(currency.format(Math.ceil(sumLc + sumAnlst)));
    $("#program-Subtotal").html(currency.format(Math.ceil(sumLeadFaci + sumCoFaci + sumActionLearn + sumMarshal + sumOnsite)));
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
    $('#f2f-ec-table select').change();
});

//Customized Engagement form of Engagement Fees
$(document).on( "change keyup click", "#f2f-ec-table input, #f2f-ec-table select",
    function () {

        ecleadConsultant = 0;
        ecAnalyst = 0;
        ecDesigner = 0;
        ecCreator = 0;
        ecLeadFacilitator = 0;
        ecCoFacilitator = 0;
        ecActionLearning = 0;
        ecMarshal = 0;
        ecOnsite = 0;
        ecDocumentor = 0;
        ecPerDiem = 0;
        ecOffProgram = 0;

        sumofEngagementCost = 0;
        sumofSales = 0;
        sumofReferral = 0;
        sumofEngagementManager = 0;
        sumofOffsitepc = 0;
        sumofecLeadconsultant = 0;
        sumofecAnalyst = 0;
        sumofecDesigner = 0;
        ecDesignSubtotal = 0;
        sumofecCreators = 0;
        sumofecLeadfacilitator = 0;
        sumofecCoLead = 0;
        sumofecCofacilitator = 0;
        sumofecActionlearningcoach = 0;
        sumofecMarshal = 0;
        sumofecOnsitepc = 0;
        ecProgramSubtotal = 0;
        sumofecDocumentor = 0;
        sumofecPerdiem = 0;
        sumofecOffprogram = 0;
        sumofecProgramexpense = 0;
        sumCoLead = 0;

        sumInputSales = 1;
        $("#tableofSale > tr").each(function () {
            sumofSales =
                ($("#input_totalPackages").val().replace(/\₱|,/g, "") / 100) *
                $(`#cost_sale${sumInputSales}`).val() ||
                ($("#input_totalPackages").val().replace(/\₱|,/g, "") / 100) *
                $(`#inputforSale${sumInputSales}`).val().replace(/%/g, "");

                $(`#ec_saleTotal${sumInputSales}`).html(currency.format(Math.ceil(sumofSales)));
            sumofEngagementCost += +sumofSales;
            sumInputSales++;
            
        });

        //Referral (Engagement Cost)
        sumInputReferrals = 1;
        $("#tableofReferrals > tr").each(function () {
            sumofReferral =
                ($("#input_totalPackages").val().replace(/\₱|,/g, "") / 100) *
                $(`#referrals${sumInputReferrals}`).val() ||
                ($("#input_totalPackages").val().replace(/\₱|,/g, "") / 100) *
                $(`#inputforReferrals${sumInputReferrals}`).val().replace(/%/g, "");

                $(`#referralsTotal${sumInputReferrals}`).html(currency.format(Math.ceil(sumofReferral)));

            sumofEngagementCost += +sumofReferral;
            sumInputReferrals++;
        });

        //Engagement Manager (Engagement Cost)
        sumEngagementManagerReferrals = 1;
        $("#tableofEngagementManager > tr").each(function () {
            sumofEngagementManager =
                ($("#input_totalPackages").val().replace(/\₱|,/g, "") / 100) *
                $(`#ecengagementManager${sumEngagementManagerReferrals}`).val() ||
                ($("#input_totalPackages").val().replace(/\₱|,/g, "") / 100) *
                $(`#inputforEngagementManager${sumEngagementManagerReferrals}`).val().replace(/%/g, "");
                $(`#ecengagementManagerTotal${sumEngagementManagerReferrals}`).html(currency.format(Math.ceil(sumofEngagementManager)));
            sumofEngagementCost += +sumofEngagementManager; 
            sumEngagementManagerReferrals++;
        });

        //Offsite PC (Engagement Cost)
        sumInputOffSite = 1;
        $("#tableofOffsite > tr").each(function () {

            var input_totalPackages = ($("#input_totalPackages").val()) ? $("#input_totalPackages").val().replace(/\₱|,/g, "") : 0;
            var subtotalConsulting = ($("#subtotalConsulting").html() != '-' ) ? $("#subtotalConsulting").html().replace(/\₱|,/g, "") : 0;
            var subtotalPD = ($("#subtotal-PD").html() != '-' ) ? $("#subtotal-PD").html().replace(/\₱|,/g, "") : 0;
            var subtotalDesign = ($("#subtotal-design").html() != '-' ) ? $("#subtotal-design").html().replace(/\₱|,/g, "") : 0;
            var ec_offsitePc = ($(`#ec_offsitePc${sumInputOffSite}`).val()) ? $(`#ec_offsitePc${sumInputOffSite}`).val() : 0;
            var inputforOffsite = ($(`#inputforOffsite${sumInputOffSite}`).val()) ? $(`#inputforOffsite${sumInputOffSite}`).val().replace(/\%|,/g, "") : 0;

            sumofOffsitepc =
                (
                    ((input_totalPackages - subtotalConsulting -  subtotalPD - subtotalDesign ) * ec_offsitePc) / 100
                ) || (
                    ((input_totalPackages - subtotalConsulting - subtotalPD - subtotalDesign) * inputforOffsite) / 100
                );

                $(`#ec_offsitePcTotal${sumInputOffSite}`).html(currency.format(Math.ceil(sumofOffsitepc)));

            sumofEngagementCost += +sumofOffsitepc;
            sumInputOffSite++;
        });

        //Lead Consultant (Engagement Cost)
        $("#tableofLeadConsultant > tr").each(function () {
            ecleadConsultant++;

            sumofecLeadconsultant =(
                $(`#ec_LeadconsultantsNoc${ecleadConsultant}`).val() *
                $(`#ec_LeadconsultantsPd${ecleadConsultant}`).val().replace(/,/g, "") *
                $(`#ec_LeadconsultantsNod${ecleadConsultant}`).val() 
            ) + (
                $(`#ec_LeadconsultantsAtd${ecleadConsultant}`).val() *
                (   $(`#ec_LeadconsultantsNoc${ecleadConsultant}`).val() *
                    $(`#ec_LeadconsultantsPd${ecleadConsultant}`).val().replace(/,/g, "") *
                    $(`#ec_LeadconsultantsNod${ecleadConsultant}`).val() *
                    0.2 ) 
            ) + (
                $(`#ec_LeadconsultantsNwh${ecleadConsultant}`).val() *
                (   $(`#ec_LeadconsultantsNoc${ecleadConsultant}`).val() *
                    $(`#ec_LeadconsultantsPd${ecleadConsultant}`).val().replace(/,/g, "") *
                    $(`#ec_LeadconsultantsNod${ecleadConsultant}`).val() *
                    0.2 )
            );

            $(`#ec_LeadconsultantsTotal${ecleadConsultant}`).html(currency.format(Math.ceil(sumofecLeadconsultant)));

            sumofEngagementCost += sumofecLeadconsultant;
        });

        //Analyst (Engagement Cost)
        $("#tableofAnalyst > tr").each(function () {
            ecAnalyst++;

            sumofecAnalyst = (
                $(`#ec_AnalystsNoc${ecAnalyst}`).val() *
                $(`#ec_AnalystsPd${ecAnalyst}`).val().replace(/,/g, "") *
                $(`#ec_AnalystsNod${ecAnalyst}`).val()
            ) + (
                $(`#ec_AnalystsAtd${ecAnalyst}`).val() *
                (   $(`#ec_AnalystsNoc${ecAnalyst}`).val() *
                    $(`#ec_AnalystsPd${ecAnalyst}`).val().replace(/,/g, "") *
                    $(`#ec_AnalystsNod${ecAnalyst}`).val() *
                    0.2 )
            ) + (
                $(`#ec_AnalystsNwh${ecAnalyst}`).val() *
                (   $(`#ec_AnalystsNoc${ecAnalyst}`).val() *
                    $(`#ec_AnalystsPd${ecAnalyst}`).val().replace(/,/g, "") *
                    $(`#ec_AnalystsNod${ecAnalyst}`).val() *
                    0.2 )
            );

            $(`#ec_AnalystsTotal${ecAnalyst}`).html(currency.format(Math.ceil(sumofecAnalyst)));

            sumofEngagementCost += sumofecAnalyst;
        });

        $("#ec_SubtotalsConsulting").html(currency.format(Math.ceil(sumofecLeadconsultant + sumofecAnalyst)) );

        //Lead Facilitator (Engagement Cost)
        $("#tableofLeadFacilitator > tr").each(function () {
            ecLeadFacilitator++;

            sumofecLeadfacilitator = (
                $(`#ec_LeadfacilitatorsNoc${ecLeadFacilitator}`).val() *
                $(`#ec_LeadfacilitatorsPd${ecLeadFacilitator}`).val().replace(/,/g, "") *
                $(`#ec_LeadfacilitatorsNod${ecLeadFacilitator}`).val()
            ) + (
                $(`#ec_LeadfacilitatorsAtd${ecLeadFacilitator}`).val() *
                (   $(`#ec_LeadfacilitatorsNoc${ecLeadFacilitator}`).val() *
                    $(`#ec_LeadfacilitatorsPd${ecLeadFacilitator}`).val().replace(/,/g, "") *
                    $(`#ec_LeadfacilitatorsNod${ecLeadFacilitator}`).val() *
                    0.2 ) 
            ) + (
                $(`#ec_LeadfacilitatorsNwh${ecLeadFacilitator}`).val() *
                (   $(`#ec_LeadfacilitatorsNoc${ecLeadFacilitator}`).val() *
                    $(`#ec_LeadfacilitatorsPd${ecLeadFacilitator}`).val().replace(/,/g, "") *
                    $(`#ec_LeadfacilitatorsNod${ecLeadFacilitator}`).val() *
                    0.2)
            );

            $(`#ec_LeadfacilitatorsTotal${ecLeadFacilitator}`).html(currency.format(Math.ceil(sumofecLeadfacilitator)));

            ecProgramSubtotal += sumofecLeadfacilitator;
            sumofEngagementCost += sumofecLeadfacilitator;
        });

         //Co-lead (Engagement Cost)
        $("#tableofCoLead > tr").each(function () {
            sumCoLead++;

            sumofecCoLead = (
                $(`#ec_CoLeadNoc${sumCoLead}`).val() *
                $(`#ec_CoLeadPd${sumCoLead}`).val().replace(/,/g, "") *
                $(`#ec_CoLeadNod${sumCoLead}`).val() 
            ) + (
                $(`#ec_CoLeadAtd${sumCoLead}`).val() *
                (   $(`#ec_CoLeadNoc${sumCoLead}`).val() *
                    $(`#ec_CoLeadPd${sumCoLead}`).val().replace(/,/g, "") *
                    $(`#ec_CoLeadNod${sumCoLead}`).val() *
                    0.2 ) 
            ) + (
                $(`#ec_CoLeadNwh${sumCoLead}`).val() *
                (   $(`#ec_CoLeadNoc${sumCoLead}`).val() *
                    $(`#ec_CoLeadPd${sumCoLead}`).val().replace(/,/g, "") *
                    $(`#ec_CoLeadNod${sumCoLead}`).val() *
                    0.2)
            );

            $(`#ec_CoLeadTotal${sumCoLead}`).html(currency.format(Math.ceil(sumofecCoLead)));

            ecProgramSubtotal += sumofecCoLead;
            sumofEngagementCost += sumofecCoLead;
        });

        //Co-Facilitator (Engagement Cost)
        $("#tableofCoFacilitator > tr").each(function () {
            ecCoFacilitator++;

            sumofecCofacilitator = (
                $(`#ec_CofacilitatorsNoc${ecCoFacilitator}`).val() *
                $(`#ec_CofacilitatorsPd${ecCoFacilitator}`).val().replace(/\₱|,/g, "") *
                $(`#ec_CofacilitatorsNod${ecCoFacilitator}`).val()
            ) + (
                $(`#ec_CofacilitatorsAtd${ecCoFacilitator}`).val() *
                (   $(`#ec_CofacilitatorsNoc${ecCoFacilitator}`).val() *
                    $(`#ec_CofacilitatorsPd${ecCoFacilitator}`).val().replace(/,/g, "") *
                    $(`#ec_CofacilitatorsNod${ecCoFacilitator}`).val() *
                    0.2)
            ) + (
                $(`#ec_CofacilitatorsNwh${ecCoFacilitator}`).val() *
                (   $(`#ec_CofacilitatorsNoc${ecCoFacilitator}`).val() *
                    $(`#ec_CofacilitatorsPd${ecCoFacilitator}`).val().replace(/,/g, "") *
                    $(`#ec_CofacilitatorsNod${ecCoFacilitator}`).val() *
                    0.2 )
            );

            $(`#ec_CofacilitatorsTotal${ecCoFacilitator}`).html(currency.format(Math.ceil(sumofecCofacilitator)));
            ecProgramSubtotal+= sumofecCofacilitator;
            sumofEngagementCost += sumofecCofacilitator;

        });

        //Designer (Engagement Cost)
        $("#tableofDesigner > tr").each(function () {
            ecDesigner++;

            sumofecDesigner =
                $(`#ec_DesignersNoc${ecDesigner}`).val() *
                $(`#ec_DesignersPd${ecDesigner}`).val().replace(/,/g, "") *
                $(`#ec_DesignersNod${ecDesigner}`).val() ;

            $(`#ec_DesignersTotal${ecDesigner}`).html(currency.format(Math.ceil(sumofecDesigner)));

            ecDesignSubtotal += sumofecDesigner;
            sumofEngagementCost += sumofecDesigner;

        });

        //Creator (Engagement Cost)
        $("#tableofCreator > tr").each(function () {
            ecCreator++;

            sumofecCreators =
                $(`#ec_CreatorPd${ecCreator}`).val() *
                $(`#ec_CreatorNod${ecCreator}`).val();

            $(`#ec_CreatorTotal${ecCreator}`).html(currency.format(Math.ceil(sumofecCreators)));

            ecDesignSubtotal += +sumofecCreators;
            sumofEngagementCost += +sumofecCreators;
        });
        $("#ec_DesignsSubtotal").html(currency.format(Math.ceil(ecDesignSubtotal)));


        //Action Learning Coach (Engagement Cost)
        $("#tableofActionLearningCoach > tr").each(function () {
            ecActionLearning++;

        sumofecActionlearningcoach =
            $(`#ec_ActionlearningcoachNoc${ecActionLearning}`).val() *
            $(`#ec_ActionlearningcoachPd${ecActionLearning}`).val().replace(/,/g, "") *
            $(`#ec_ActionlearningcoachNod${ecActionLearning}`).val() +
            $(`#ec_ActionlearningcoachAtd${ecActionLearning}`).val() *
            ($(`#ec_ActionlearningcoachNoc${ecActionLearning}`).val() *
                $(`#ec_ActionlearningcoachPd${ecActionLearning}`).val().replace(/,/g, "") *
                $(`#ec_ActionlearningcoachNod${ecActionLearning}`).val() *
                0.2) + $(`#ec_ActionlearningcoachNwh${ecActionLearning}`).val() *
            ($(`#ec_ActionlearningcoachNoc${ecActionLearning}`).val() *
                $(`#ec_ActionlearningcoachPd${ecActionLearning}`).val().replace(/,/g, "") *
                $(`#ec_ActionlearningcoachNod${ecActionLearning}`).val() *
                0.2);

        $(`#ec_ActionlearningcoachTotal${ecActionLearning}`).html(currency.format(Math.ceil(sumofecActionlearningcoach)));

        ecProgramSubtotal += +sumofecActionlearningcoach;
        sumofEngagementCost += +sumofecActionlearningcoach;

        });

        //Marshal (Engagement Cost)
        $("#tableofMarshal > tr").each(function () {
            ecMarshal++;

            sumofecMarshal = (   
                $(`#ec_MarshalNoc${ecMarshal}`).val() *
                $(`#ec_MarshalPd${ecMarshal}`).val().replace(/,/g, "") *
                $(`#ec_MarshalNod${ecMarshal}`).val()
            ) + (
                $(`#ec_MarshalAtd${ecMarshal}`).val() *
                (   $(`#ec_MarshalNoc${ecMarshal}`).val() *
                    $(`#ec_MarshalPd${ecMarshal}`).val().replace(/,/g, "") *
                    $(`#ec_MarshalNod${ecMarshal}`).val() *
                    0.2) 
            ) + (
                $(`#ec_MarshalNwh${ecMarshal}`).val() *
                (   $(`#ec_MarshalNoc${ecMarshal}`).val() *
                    $(`#ec_MarshalPd${ecMarshal}`).val().replace(/,/g, "") *
                    $(`#ec_MarshalNod${ecMarshal}`).val() *
                    0.2)
            );

            $(`#ec_MarshalTotal${ecMarshal}`).html(currency.format(Math.ceil(sumofecMarshal)));

            ecProgramSubtotal += +sumofecMarshal;
            sumofEngagementCost += +sumofecMarshal;

        });

        //On-site PC (Engagement Cost)
        $("#tableofOnsitePC > tr").each(function () {
            ecOnsite++;           

        sumofecOnsitepc = (
            $(`#ec_OnsitepcNoc${ecOnsite}`).val() *
            $(`#ec_OnsitepcPd${ecOnsite}`).val() *
            $(`#ec_OnsitepcNod${ecOnsite}`).val()
        ) + (
            $(`#ec_OnsitepcAtd${ecOnsite}`).val() *
            (   $(`#ec_OnsitepcNoc${ecOnsite}`).val() *
                $(`#ec_OnsitepcPd${ecOnsite}`).val() *
                $(`#ec_OnsitepcNod${ecOnsite}`).val() *
                0.2)
        ) + (
            $(`#ec_OnsitepcNwh${ecOnsite}`).val() *
            (   $(`#ec_OnsitepcNoc${ecOnsite}`).val() *
                $(`#ec_OnsitepcPd${ecOnsite}`).val() *
                $(`#ec_OnsitepcNod${ecOnsite}`).val() *
                0.2 )
        );

        $(`#ec_OnsitepcTotal${ecOnsite}`).html(currency.format(Math.ceil(sumofecOnsitepc)));

        ecProgramSubtotal += +sumofecOnsitepc;
        sumofEngagementCost += +sumofecOnsitepc;

    });

    $("#ec_ProgramsSubtotal").html( currency.format( Math.ceil(ecProgramSubtotal)) );

        //Documentor (Engagement Cost)
        $("#tableofDocumentor > tr").each(function () {
            ecDocumentor++;

        sumofecDocumentor = (
            $(`#ec_DocumentorsNoc${ecDocumentor}`).val() *
            $(`#ec_DocumentorsPd${ecDocumentor}`).val().replace(/,/g, "") *
            $(`#ec_DocumentorsNod${ecDocumentor}`).val()
        ) + (
            $(`#ec_DocumentorsAtd${ecDocumentor}`).val() *
            (   $(`#ec_DocumentorsNoc${ecDocumentor}`).val() *
                $(`#ec_DocumentorsPd${ecDocumentor}`).val().replace(/,/g, "") *
                $(`#ec_DocumentorsNod${ecDocumentor}`).val() *
                0.2 )
        ) + (
            $(`#ec_DocumentorsNwh${ecDocumentor}`).val() *
            (   $(`#ec_DocumentorsNoc${ecDocumentor}`).val() *
                $(`#ec_DocumentorsPd${ecDocumentor}`).val().replace(/,/g, "") *
                $(`#ec_DocumentorsNod${ecDocumentor}`).val() *
                0.2 )
        );

        sumofEngagementCost += +sumofecDocumentor;

        $(`#ec_DocumentorsTotal${ecDocumentor}`).html(currency.format(Math.ceil(sumofecDocumentor)));
    });

    //Per Diem (Engagement Cost)
    $("#tableofPerDiem > tr").each(function () {
        ecPerDiem++;
        sumofecPerdiem +=
        $(`#ec_PerdiemPd${ecPerDiem}`).val() *
        $(`#ec_PerdiemNod${ecPerDiem}`).val() *
        $(`#ec_PerdiemNoc${ecPerDiem}`).val();
        sumofEngagementCost += +sumofecPerdiem;
        $(`#ec_PerdiemTotal${ecPerDiem}`).html(currency.format(Math.ceil(sumofecPerdiem)));
    });

    //Off-program Fee (Engagement Cost)
    $("#tableofOffProgram > tr").each(function () {
        ecOffProgram++;
        sumofecOffprogram +=
            $(`#ec_OffprogramsNoc${ecOffProgram}`).val() *
            $(`#ec_OffprogramsPd${ecOffProgram}`).val().replace(/,/g, "");

        sumofEngagementCost += +sumofecOffprogram;

        $(`#ec_OffprogramsTotal${ecOffProgram}`).html(
            currency.format(Math.ceil(sumofecOffprogram))
        );
    });
        
    //Program Expenses (Engagement Cost)
    sumofecProgramexpense +=
        ($("#ec_Programexpenses").val().replace(/,|%/g, "") *
        $("#input_totalPackages").val().replace(/,/g, "")) /100;

    sumofEngagementCost += +sumofecProgramexpense;

    $("#ec_ProgramexpensesTotal").html(
        currency.format(Math.ceil(sumofecProgramexpense))
    );
    $("#ec_Totals").html(
        currency.format(Math.ceil(sumofEngagementCost))
    );

    /***********************PROFIT FORECAST***********************/
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
    
    $("#LessContributionToOverhead").html(
        currency.format(Math.ceil(sumCto))
    );

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
    } else {
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

//datepicker
$(document).on("click change focus", "#dcbe", function() {
    $(".datepicker").each(function () {
        $(this).datepicker();
        $(this).on("change", function () {
            $(this).datepicker("option", "dateFormat", "M d, yy");
        });
    });
});

//ROSTER RATE AUTO INPUT
function rosterRate() {
    // LEAD CONSULTANT
    leadConsultantCount = 0;
    $("#tableofLeadConsultant > tr").each(function () {
        leadConsultantCount++;
        let roster = $(`#leadConsultants_roster${leadConsultantCount}`).val().trim();
        dailyFees = 0.85 * $("#ec_LeadfacilitatorsPd1").val().replace(/,/g, "");
        if (roster == '' || roster.toUpperCase() == 'TBA') {
            document.getElementById(`leadConsultants_roster${leadConsultantCount}`).value = 'TBA';
            $(`#ec_LeadconsultantsPd${leadConsultantCount}`).val( currency.format(Math.ceil(dailyFees)) );
            
        } else {
            filterConsultant(`leadConsultants_roster${leadConsultantCount}`, `ec_LeadconsultantsPd${leadConsultantCount}`, `leadConsultant`);
        }
    });

    // DESIGNER
    designerCount = 0;
    $("#tableofDesigner > tr").each(function () {
        designerCount++;
        let roster = $(`#designers_roster${designerCount}`).val().trim();
        dailyFees = 0.75 * $("#ec_LeadfacilitatorsPd1").val().replace(/,/g, "");
        if (roster == '' || roster.toUpperCase() == 'TBA') {
            document.getElementById(`designers_roster${designerCount}`).value = 'TBA';
            $(`#ec_DesignersPd${designerCount}`).val( currency.format(Math.ceil(dailyFees)) );
            
        } else {
            filterConsultant(`designers_roster${designerCount}`, `ec_DesignersPd${designerCount}`, `designer`);
        }
    });

    // LEAD FACILITATOR
    LeadFaciCount = 0;
    $("#tableofLeadFacilitator > tr").each(function () {
        LeadFaciCount++;
        let roster = $(`#leadfacilitators_roster${LeadFaciCount}`).val().trim();
        dailyFees = $("#ec_LeadfacilitatorsPd1").val().replace(/,/g, "");
        if (roster == '' || roster.toUpperCase() == 'TBA') {
            document.getElementById(`leadfacilitators_roster${LeadFaciCount}`).value = 'TBA';
            $(`#ec_LeadfacilitatorsPd${LeadFaciCount}`).val( currency.format(Math.ceil(dailyFees)) );
            
        } else {
            filterConsultant(`leadfacilitators_roster${LeadFaciCount}`, `ec_LeadfacilitatorsPd${LeadFaciCount}`, `leadFacilitator`);
        }
    });

    // CO-LEAD
    LeadFaciCount = 0;
    $("#tableofCoLead > tr").each(function () {
        LeadFaciCount++;
        let roster = $(`#coLead_roster${LeadFaciCount}`).val().trim();
        dailyFees = 19200;
        if (roster == '' || roster.toUpperCase() == 'TBA') {
            document.getElementById(`coLead_roster${LeadFaciCount}`).value = 'TBA';
            $(`#ec_CoLeadPd${LeadFaciCount}`).val( currency.format(Math.ceil(dailyFees)) );
            
        } else {
            filterConsultant(`coLead_roster${LeadFaciCount}`, `ec_CoLeadPd${LeadFaciCount}`, `coLead`);
        }
    });

    // CO-FACILITATOR
    coFaciCount = 0;
    $("#tableofCoFacilitator > tr").each(function () {
        coFaciCount++;
        let roster = $(`#cofacilitator_roster${coFaciCount}`).val().trim();
        dailyFees = 0.6 * $("#ec_LeadfacilitatorsPd1").val().replace(/,/g, "");
        if (roster == '' || roster.toUpperCase() == 'TBA') {
            document.getElementById(`cofacilitator_roster${coFaciCount}`).value = 'TBA';
            $(`#ec_CofacilitatorsPd${coFaciCount}`).val( currency.format(Math.ceil(dailyFees)) );
            
        } else {
            filterConsultant(`cofacilitator_roster${coFaciCount}`, `ec_CofacilitatorsPd${coFaciCount}`, `coFaci`);
        }
    });

    // ACTION LEARNING COACH
    actionLearningCount = 0;
    $("#tableofActionLearningCoach > tr").each(function () {
        actionLearningCount++;
        let roster = $(`#actionlearningcoach_roster${actionLearningCount}`).val().trim();
        dailyFees = 16000;
        if (roster == '' || roster.toUpperCase() == 'TBA') {
            document.getElementById(`actionlearningcoach_roster${actionLearningCount}`).value = 'TBA';
            $(`#ec_ActionlearningcoachPd${actionLearningCount}`).val( currency.format(Math.ceil(dailyFees)) );
            
        } else {
            filterConsultant(`actionlearningcoach_roster${actionLearningCount}`);
        }
    });

    // MARSHAL
    marshalCount = 0;
    $("#tableofMarshal > tr").each(function () {
        marshalCount++;
        let roster = $(`#marshal_roster${marshalCount}`).val().trim();
        dailyFees = 0.4 * $("#ec_LeadfacilitatorsPd1").val().replace(/,/g, "");
        if (roster == '' || roster.toUpperCase() == 'TBA') {
            document.getElementById(`marshal_roster${marshalCount}`).value = 'TBA';
            $(`#ec_MarshalPd${marshalCount}`).val( currency.format(Math.ceil(dailyFees)) );
            
        } else {
            filterConsultant(`marshal_roster${marshalCount}`, `ec_MarshalPd${marshalCount}`, `marshal`);
        }
    });

    // DOCUMENTOR
    documentorCount = 0;
    $("#tableofDocumentor > tr").each(function () {
        documentorCount++;
        let roster = $(`#documentor_roster${documentorCount}`).val().trim();
        dailyFees = 5600;
        if (roster == '' || roster.toUpperCase() == 'TBA') {
            $(`#ec_DocumentorsPd${documentorCount}`).val( currency.format(Math.ceil(dailyFees)) );
        } else {
            filterConsultant(`documentor_roster${documentorCount}`);
        }
    }); 

    // PER DIEM
    perDiemCount = 0;
    $("#tableofPerDiem > tr").each(function () {
        perDiemCount++;
        let roster = $(`#perdiem_roster${perDiemCount}`).val().trim();
        dailyFees = 200;
        if (roster == '' || roster.toUpperCase() == 'TBA') {
            $(`#ec_PerdiemPd${perDiemCount}`).val( currency.format(Math.ceil(dailyFees)) );
        } else {
            filterConsultant(`perdiem_roster${perDiemCount}`);
        }
    });

    // OFF PROGRAM
    offProgramCount = 0;
    $("#tableofOffProgram > tr").each(function () {
        offProgramCount++;
        let roster = $(`#offprogram_roster${offProgramCount}`).val().trim();
        dailyFees = 1000;
        if (roster == '' || roster.toUpperCase() == 'TBA') {
            $(`#ec_OffprogramsPd${offProgramCount}`).val( currency.format(Math.ceil(dailyFees)) );
        } else {
            filterConsultant(`offprogram_roster${offProgramCount}`);
        }
    });
};

//ENGAGEMENT FEES STANDARD FEES PASS TO TOTAL PACKAGE INPUT FIELD
$(document).on(
    "change blur click",
    "#f2f-ef-table tr.th-blue-grey-lighten input,  #f2f-ef-table tr.th-blue-grey-lighten-2 select, #f2f-ef-table tr.th-blue-grey-lighten-2 input,  #f2f-ef-table tr.th-blue-grey-lighten select",
    function () {        
        document.getElementById("input_totalPackages").value = $("#standard_total").html();
        $('#input_totalPackages').blur();
    }
);

$(document).on("blur", "input[name=\"cost_roster[]\"] ", function() { 
    rosterRate();
});

$(document).ready(function() {
    //Lead facilitator
    $(`#ef_LeadFaciPdf1`).click(function () {
        var others = $(`#ef_LeadfacilitatorHf1`);
        //if "others" is selected the dropdown
        //menu will transform into input field
        if ($('#others1').is(':selected')) {
            $(`#inputLeadfaci1`).css("display", "")
            $(`#ef_InputLeadFaciPdf1`).prop('disabled', false)
            $(`#ef_InputLeadFaciPdf1`).val("")
            $(`#ef_LeadFaciPdf1`).prop('disabled', true)
            $(`#ef_LeadFaciPdf1`).css("display", "none")
        } else {
            $(`#inputLeadfaci1`).css("display", "none")
        }
    });

    $('#deleteIcon1').click(function() {
        // $(this).prev('input').val('').trigger('change').focus();
        $(`#inputLeadfaci1`).css("display", "none")
        $(`#ef_InputLeadFaciPdf1`).prop('disabled', true)
        $(`#ef_InputLeadFaciPdf1`).val('')
        $(`#ef_LeadFaciPdf1`).prop('disabled', false)
        $(`#ef_LeadFaciPdf1`).css("display", "")
        $(`#ef_LeadFaciPdf1`).val("96000")
    });
});

$(document).ready(function() {
    $("#ec_Programexpenses").on("blur", function () {
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
    rosterRate();
});