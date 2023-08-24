//*************************************** CURRENCY FORMATTER ********************************************************//
let currency = Intl.NumberFormat("en-US");

//currency formatter
// $("#ef_AnalystPdf").on({
//     keyup: function () {
//         let input_val = $(this).val();
//         input_val = numberToCurrency(input_val);
//         $(this).val(input_val);
//     },
//     blur: function () {
//         let input_val = $(this).val();
//         input_val = numberToCurrency(input_val, true, true);
//         $(this).val(input_val);
//     },
// });

// $("#ef_LeadFaciPdf").on({
//     keyup: function () {
//         let input_val = $(this).val();
//         input_val = numberToCurrency(input_val);
//         $(this).val(input_val);
//     },
//     blur: function () {
//         let input_val = $(this).val();
//         input_val = numberToCurrency(input_val, true, true);
//         $(this).val(input_val);
//     },
// });

// $("#ef_CoFaciPdf").on({
//     keyup: function () {
//         let input_val = $(this).val();
//         input_val = numberToCurrency(input_val);
//         $(this).val(input_val);
//     },
//     blur: function () {
//         let input_val = $(this).val();
//         input_val = numberToCurrency(input_val, true, true);
//         $(this).val(input_val);
//     },
// });

// $("#ef_ActionLearnPdf").on({
//     keyup: function () {
//         let input_val = $(this).val();
//         input_val = numberToCurrency(input_val);
//         $(this).val(input_val);
//     },
//     blur: function () {
//         let input_val = $(this).val();
//         input_val = numberToCurrency(input_val, true, true);
//         $(this).val(input_val);
//     },
// });

// $("#ef_MarshalPdf").on({
//     keyup: function () {
//         let input_val = $(this).val();
//         input_val = numberToCurrency(input_val);
//         $(this).val(input_val);
//     },
//     blur: function () {
//         let input_val = $(this).val();
//         input_val = numberToCurrency(input_val, true, true);
//         $(this).val(input_val);
//     },
// });

// $("#ef_DocumentorPdf").on({
//     keyup: function () {
//         let input_val = $(this).val();
//         input_val = numberToCurrency(input_val);
//         $(this).val(input_val);
//     },
//     blur: function () {
//         let input_val = $(this).val();
//         input_val = numberToCurrency(input_val, true, true);
//         $(this).val(input_val);
//     },
// });

// $("#ef_PDPdf").on({
//     keyup: function () {
//         let input_val = $(this).val();
//         input_val = numberToCurrency(input_val);
//         $(this).val(input_val);
//     },
//     blur: function () {
//         let input_val = $(this).val();
//         input_val = numberToCurrency(input_val, true, true);
//         $(this).val(input_val);
//     },
// });

// $("#standard_total").on({
//     change: function () {
//         document.getElementById("input_totalPackages").value = $(this).val();
//     }
// });

$('#input_totalPackages').attr('data-type', 'currency');

//ENGAGEMENT COST
$("#ec_LeadconsultantsPd").on({
    keyup: function () {
        let input_val = $(this).val();
        input_val = numberToCurrency(input_val);
        $(this).val(input_val);
    },
    blur: function () {
        let input_val = $(this).val();
        input_val = numberToCurrency(input_val, true, true);
        $(this).val(input_val);
    },
});

$("#ec_AnalystsPd").on({
    keyup: function () {
        let input_val = $(this).val();
        input_val = numberToCurrency(input_val);
        $(this).val(input_val);
    },
    blur: function () {
        let input_val = $(this).val();
        input_val = numberToCurrency(input_val, true, true);
        $(this).val(input_val);
    },
});

$("#ec_DesignersPd").on({
    keyup: function () {
        let input_val = $(this).val();
        input_val = numberToCurrency(input_val);
        $(this).val(input_val);
    },
    blur: function () {
        let input_val = $(this).val();
        input_val = numberToCurrency(input_val, true, true);
        $(this).val(input_val);
    },
});

// $("#ec_CreatorPd").on({
//     keyup: function () {
//         let input_val = $(this).val();
//         input_val = numberToCurrency(input_val);
//         $(this).val(input_val);
//     },
//     blur: function () {
//         let input_val = $(this).val();
//         input_val = numberToCurrency(input_val, true, true);
//         $(this).val(input_val);
//     },
// });

$("#ec_LeadfacilitatorsPd").on({
    keyup: function () {
        let input_val = $(this).val();
        input_val = numberToCurrency(input_val);
        $(this).val(input_val);
    },
    blur: function () {
        let input_val = $(this).val();
        input_val = numberToCurrency(input_val, true, true);
        $(this).val(input_val);
    },
});

$("#ec_CofacilitatorsPd").on({
    keyup: function () {
        let input_val = $(this).val();
        input_val = numberToCurrency(input_val);
        $(this).val(input_val);
    },
    blur: function () {
        let input_val = $(this).val();
        input_val = numberToCurrency(input_val, true, true);
        $(this).val(input_val);
    },
});

$("#ec_ActionlearningcoachPd").on({
    keyup: function () {
        let input_val = $(this).val();
        input_val = numberToCurrency(input_val);
        $(this).val(input_val);
    },
    blur: function () {
        let input_val = $(this).val();
        input_val = numberToCurrency(input_val, true, true);
        $(this).val(input_val);
    },
});
$("#ec_MarshalPd").on({
    keyup: function () {
        let input_val = $(this).val();
        input_val = numberToCurrency(input_val);
        $(this).val(input_val);
    },
    blur: function () {
        let input_val = $(this).val();
        input_val = numberToCurrency(input_val, true, true);
        $(this).val(input_val);
    },
});

$("#ec_OnsitePd").on({
    keyup: function () {
        let input_val = $(this).val();
        input_val = numberToCurrency(input_val);
        $(this).val(input_val);
    },
    blur: function () {
        let input_val = $(this).val();
        input_val = numberToCurrency(input_val, true, true);
        $(this).val(input_val);
    },
});
$("#ec_DocumentorsPd").on({
    keyup: function () {
        let input_val = $(this).val();
        input_val = numberToCurrency(input_val);
        $(this).val(input_val);
    },
    blur: function () {
        let input_val = $(this).val();
        input_val = numberToCurrency(input_val, true, true);
        $(this).val(input_val);
    },
});
$("#ec_PerdiemPd").on({
    keyup: function () {
        let input_val = $(this).val();
        input_val = numberToCurrency(input_val);
        $(this).val(input_val);
    },
    blur: function () {
        let input_val = $(this).val();
        input_val = numberToCurrency(input_val, true, true);
        $(this).val(input_val);
    },
});
$("#ec_OffprogramsPd").on({
    keyup: function () {
        let input_val = $(this).val();
        input_val = numberToCurrency(input_val);
        $(this).val(input_val);
    },
    blur: function () {
        let input_val = $(this).val();
        input_val = numberToCurrency(input_val, true, true);
        $(this).val(input_val);
    },
});
// $("#ec_Programexpenses").on({
//     keyup: function () {
//         let input_val = $(this).val();
//         input_val = numberToCurrency(input_val);
//         $(this).val(input_val);
//     },
//     blur: function () {
//         let input_val = $(this).val();
//         input_val = numberToCurrency(input_val, true, true);
//         $(this).val(input_val);
//     },
// });

//default value of input types
document.getElementById("ef_AnalystPdf").value = currency.format(40000);
// document.getElementById("ef_LeadconsultantHf1").value = currency.format(13600);
document.getElementById("ef_LeadconsultantHf1").value = 56000;
document.getElementById("ef_LeadFaciPdf1").value = 96000;
document.getElementById("ef_CoFaciPdf").value = currency.format(40000);
document.getElementById("ef_ActionLearnPdf").value = currency.format(40000);
document.getElementById("ef_MarshalPdf").value = currency.format(30000);
document.getElementById("ef_DocumentorPdf").value = currency.format(20000);
document.getElementById("ef_PDPdf").value = currency.format(2000);
//Engagement Cost
document.getElementById("ec_LeadfacilitatorsPd1").value = currency.format(
    Math.ceil(24000)
);
// document.getElementById("ec_LeadconsultantsPd1").value = currency.format(
//     Math.ceil(0.85 * $("#ec_LeadfacilitatorsPd1").val().replace(/,/g, ""))
// );
document.getElementById("ec_AnalystsPd1").value = currency.format(
    Math.ceil(13600)
);
// document.getElementById("ec_DesignersPd").value = currency.format(
//     Math.ceil(0.75 * $("#ec_LeadfacilitatorsPd1").val().replace(/,/g, ""))
// );
// document.getElementById("ec_CreatorPd").value = currency.format(
//     Math.ceil(500)
// );
// document.getElementById("ec_CofacilitatorsPd1").value = currency.format(
//     Math.ceil(0.6 * $("#ec_LeadfacilitatorsPd1").val().replace(/,/g, ""))
// );
// document.getElementById("ec_ActionlearningcoachPd").value = currency.format(
//     Math.ceil(16000)
// );
// document.getElementById("ec_MarshalPd").value = currency.format(
//     Math.ceil(8000)
// );
// document.getElementById("ec_OnsitepcPd").value = 4400;
// document.getElementById("ec_DocumentorsPd").value = currency.format(
//     Math.ceil(5600)
// );
// document.getElementById("ec_PerdiemPd").value = currency.format(
//     Math.ceil(200)
// );
// document.getElementById("ec_OffprogramsPd").value = currency.format(
//     Math.ceil(1000)
// );
document.getElementById("ec_Programexpenses").value = 2 + "%";

//Customized Engagement form of Engagement Fees th-blue-grey-lighten th-blue-grey-lighten-2
$(document).on(
    "change keyup click",
    "#main, .f2f-customized-type, .ga-only-dropdown, .removed, #remove, #f2f-ef-table, #f2f-ec-table",
    function () {
        //customized type
        $(".f2f-customized-type").each(function () {
            var gaPercentage = $(".f2f-customized-type");
            if (
                gaPercentage.val() == "G.A Hybrid" ||
                gaPercentage.val() == "G.A Virtual"
            ) {
                document.getElementById("f2f-dropdown-ga").style.visibility = "";
            } else {
                document.getElementById("f2f-dropdown-ga").style.visibility =
                    "hidden";
            }
        });

        $("#ec_Programexpenses").on("input", function () {
            $(this).val(function (i, v) {
                return v.replace("%", "") + "%";
            });
        });


        /********************************************************AUTO SUM***************************************************************************/
        let currency = Intl.NumberFormat("en-US");

        //total package
        sumEf = 0;

        //consulting
        sumLc = 0;
        //Analyst
        sumAnlst = 0;

        sumSales1 = 0;

        //Designer
        sumDesigner = 0;

        //Lead Facilitator
        sumLeadFaci = 0;

        //Co Facilitator
        sumCoFaci = 0;

        // Co-Lead
        sumCoLead = 0;

        //Action Learning
        sumActionLearn = 0;

        //Marshal
        sumMarshal = 0;

        //Onsite
        sumOnsite = 0;

        sumProgram = 0;
        //Documentor
        sumDocumentor = 0;

        //Per Diem
        sumPD = 0;

        //Discount
        sumA = 0;
        sum50 = 0;

        // engagement cost total
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

        //customized type
        var gaPercentage = $(".f2f-customized-type");

        /*******************************************************CONSULTING*********************************************************************/
        //Lead consultant
        $("#tableLeadconsultant > tr").each(function () {
            rowIndx++;

            document.getElementById("ec_LeadconsultantsNoc1").value = $( "#ef_LeadconsultantNoc1" ).val();
            document.getElementById("ec_LeadconsultantsNod1").value = $( "#ef_LeadconsultantNoh1" ).val();
            document.getElementById("ec_LeadconsultantsNwh1").value = $( "#ef_LeadconsultantNwh1" ).val();
            document.getElementById("ec_LeadconsultantsAtd1").value = $( "#ef_LeadconsultantAtd1" ).val();

            sumLc = (   
                $(`#ef_LeadconsultantNoc${rowIndx}`).val() *
                $(`#ef_LeadconsultantHf${rowIndx}`).val().replace(/,/g, "") *
                $(`#ef_LeadconsultantNoh${rowIndx}`).val()  
            ) + ( 
                $(`#ef_LeadconsultantAtd${rowIndx}`).val() *
                (   $(`#ef_LeadconsultantNoc${rowIndx}`).val() *
                    $(`#ef_LeadconsultantHf${rowIndx}`).val().replace(/,/g, "") *
                    $(`#ef_LeadconsultantNoh${rowIndx}`).val() *
                    0.2 ) 
            ) + (   
                $(`#ef_LeadconsultantNwh${rowIndx}`).val() *
                (   $(`#ef_LeadconsultantNoc${rowIndx}`).val() *
                    $(`#ef_LeadconsultantHf${rowIndx}`).val().replace(/,/g, "") *
                    $(`#ef_LeadconsultantNoh${rowIndx}`).val() *
                    0.2 )    
            );

            if ( gaPercentage.val() == "G.A Hybrid" || gaPercentage.val() == "G.A Virtual") { 
                sumLc += sumLc * (document.getElementById("ga-only-dropdown").value / 100); 
            }

            //lead consultant engagement fees sum
            $("#leadTotal").html(currency.format(Math.ceil(sumLc)));

            sumEf += +sumLc;
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

            sumofEngagementCost += +sumofecLeadconsultant;
        });

        // Analyst
        $("#ef_TableAnalyst > tr").each(function () {
            rowAnalyst++;

            document.getElementById("ec_AnalystsNoc1").value = $( "#ef_AnalystNoc1" ).val();
            document.getElementById("ec_AnalystsNod1").value = $( "#ef_AnalystNod1" ).val();
            document.getElementById("ec_AnalystsNwh1").value = $( "#ef_AnalystNsw1" ).val();
            document.getElementById("ec_AnalystsAtd1").value = $( "#ef_AnalystAtd1" ).val();

            sumAnlst = (
                $(`#ef_AnalystNoc${rowAnalyst}`).val() *
                $("#ef_AnalystPdf").val().replace(/\₱|,/g, "") *
                $(`#ef_AnalystNod${rowAnalyst}`).val()
            ) + (
                $(`#ef_AnalystAtd${rowAnalyst}`).val() *
                (   $(`#ef_AnalystNoc${rowAnalyst}`).val() *
                    $("#ef_AnalystPdf").val().replace(/\₱|,/g, "") *
                    $(`#ef_AnalystNod${rowAnalyst}`).val() *
                    0.2 )
            ) + (
                $(`#ef_AnalystNsw${rowAnalyst}`).val() *
                (   $(`#ef_AnalystNoc${rowAnalyst}`).val() *
                    $("#ef_AnalystPdf").val().replace(/\₱|,/g, "") *
                    $(`#ef_AnalystNod${rowAnalyst}`).val() *
                    0.2 )
            );

            if ( gaPercentage.val() == "G.A Hybrid" || gaPercentage.val() == "G.A Virtual" ) {
                sumAnlst += sumAnlst * (document.getElementById("ga-only-dropdown").value / 100);
            }

            sumEf += +sumAnlst;

            $("#analyst-total").html(currency.format(Math.ceil(sumAnlst)));
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

            sumofEngagementCost += +sumofecAnalyst;
        });

        $("#subtotalConsulting").html(currency.format(Math.ceil(sumEf)));
        $("#ec_SubtotalsConsulting").html(currency.format(Math.ceil(sumofEngagementCost)) );

        // Designer
        $("#ef_TableDesigner > tr").each(function () {
            rowDesigner++;

            document.getElementById("ec_DesignersNoc1").value = $( "#ef_DesignerNoc1" ).val();
            document.getElementById("ec_DesignersNod1").value = $( "#ef_DesignerNod1" ).val();
            document.getElementById("ec_DesignersNwh1").value = $( "#ef_DesignerNsw1" ).val();
            document.getElementById("ec_DesignersAtd1").value = $( "#ef_DesignerAtd1" ).val();

            sumDesigner = 
                $(`#ef_DesignerNoc${rowDesigner}`).val() *
                $("#ef_DesignerPdf").val().replace(/\₱|,/g, "")  *
                $(`#ef_DesignerNod${rowDesigner}`).val();

            if ( gaPercentage.val() == "G.A Hybrid" || gaPercentage.val() == "G.A Virtual" ) {
                sumDesigner += sumDesigner * (document.getElementById("ga-only-dropdown").value / 100);
            }

            sumEf += +sumDesigner;

            $("#subtotal-design").html(currency.format(Math.ceil(sumDesigner)));
        });

        //Designer (Engagement Cost)
        $("#tableofDesigner > tr").each(function () {
            ecDesigner++;

            sumofecDesigner =
                $(`#ec_DesignersNoc${ecDesigner}`).val() *
                $(`#ec_DesignersPd${ecDesigner}`).val().replace(/,/g, "") *
                $(`#ec_DesignersNod${ecDesigner}`).val() ;

            $(`#ec_DesignersTotal${ecDesigner}`).html(currency.format(Math.ceil(sumofecDesigner)));

            ecDesignSubtotal += +sumofecDesigner;
            sumofEngagementCost += +sumofecDesigner;

        });

        // Lead Facilitator
        $("#ef_TableLeadFaci > tr").each(function () {

            rowLeadFaci++;
            document.getElementById("ec_LeadfacilitatorsNoc1").value = $( "#ef_LeadFaciNoc1" ).val();
            document.getElementById("ec_LeadfacilitatorsNod1").value = $( "#ef_LeadFaciNod1" ).val();
            document.getElementById("ec_LeadfacilitatorsNwh1").value = $( "#ef_LeadFaciNsw1" ).val();
            document.getElementById("ec_LeadfacilitatorsAtd1").value = $( "#ef_LeadFaciAtd1" ).val();

            sumLeadFaci = (
                $(`#ef_LeadFaciNoc${rowLeadFaci}`).val() *
                $(`#ef_LeadFaciPdf${rowLeadFaci}`).val().replace(/\₱|,/g, "") *
                $(`#ef_LeadFaciNod${rowLeadFaci}`).val()
            ) + (
                $(`#ef_LeadFaciAtd${rowLeadFaci}`).val() *
                (   $(`#ef_LeadFaciNoc${rowLeadFaci}`).val() *
                    $(`#ef_LeadFaciPdf${rowLeadFaci}`).val().replace(/\₱|,/g, "") *
                    $(`#ef_LeadFaciNod${rowLeadFaci}`).val() *
                    0.2 )
            ) + (
                $(`#ef_LeadFaciNsw${rowLeadFaci}`).val() *
                (   $(`#ef_LeadFaciNoc${rowLeadFaci}`).val() *
                    $(`#ef_LeadFaciPdf${rowLeadFaci}`).val().replace(/\₱|,/g, "") *
                    $(`#ef_LeadFaciNod${rowLeadFaci}`).val() *
                    0.2 )
            ) || (
                $(`#ef_LeadFaciNoc${rowLeadFaci}`).val() *
                $(`#ef_InputLeadFaciPdf${rowLeadFaci}`).val().replace(/\₱|,/g, "") *
                $(`#ef_LeadFaciNod${rowLeadFaci}`).val() 
            ) + (
                $(`#ef_LeadFaciAtd${rowLeadFaci}`).val() *
                (   $(`#ef_LeadFaciNoc${rowLeadFaci}`).val() *
                    $(`#ef_InputLeadFaciPdf${rowLeadFaci}`).val().replace(/\₱|,/g, "") *
                    $(`#ef_LeadFaciNod${rowLeadFaci}`).val() *
                    0.2 )
            ) + (
                $(`#ef_LeadFaciNsw${rowLeadFaci}`).val() *
                (   $(`#ef_LeadFaciNoc${rowLeadFaci}`).val() *
                    $(`#ef_InputLeadFaciPdf${rowLeadFaci}`).val().replace(/\₱|,/g, "") *
                    $(`#ef_LeadFaciNod${rowLeadFaci}`).val() *
                    0.2 )
            );

            if (gaPercentage.val() == "G.A Hybrid" || gaPercentage.val() == "G.A Virtual") {
                sumLeadFaci += sumLeadFaci * (document.getElementById("ga-only-dropdown").value / 100);
            }

            sumProgram += +sumLeadFaci;
            sumEf += +sumLeadFaci;

            $("#subtotal-LeadFaci").html(currency.format(Math.ceil(sumLeadFaci)));
        });

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

            ecProgramSubtotal += +sumofecLeadfacilitator;
            sumofEngagementCost += +sumofecLeadfacilitator;
            // $("#subtotal-LeadFaci").html(currency.format(Math.ceil(sumEf)));
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

            ecProgramSubtotal += +sumofecCoLead;
            sumofEngagementCost += +sumofecCoLead;
        });

        // Co Facilitator
        $("#ef_TableCoFaci > tr").each(function () {
            rowCoFaci++;

            document.getElementById("ec_CofacilitatorsNoc1").value = $( "#ef_CoFaciNoc1" ).val();
            document.getElementById("ec_CofacilitatorsNod1").value = $( "#ef_CoFaciNod1" ).val();
            document.getElementById("ec_CofacilitatorsNwh1").value = $( "#ef_CoFaciNsw1" ).val();
            document.getElementById("ec_CofacilitatorsAtd1").value = $( "#ef_CoFaciAtd1" ).val();

            sumCoFaci = (
                $(`#ef_CoFaciNoc${rowCoFaci}`).val() *
                $("#ef_CoFaciPdf").val().replace(/\₱|,/g, "") *
                $(`#ef_CoFaciNod${rowCoFaci}`).val()
            ) + (
                $(`#ef_CoFaciAtd${rowCoFaci}`).val() *
                (   $(`#ef_CoFaciNoc${rowCoFaci}`).val() *
                    $("#ef_CoFaciPdf").val().replace(/\₱|,/g, "") *
                    $(`#ef_CoFaciNod${rowCoFaci}`).val() *
                    0.2 )
            ) + (
                $(`#ef_CoFaciNsw${rowCoFaci}`).val() *
                (   $(`#ef_CoFaciNoc${rowCoFaci}`).val() *
                    $("#ef_CoFaciPdf").val().replace(/\₱|,/g, "") *
                    $(`#ef_CoFaciNod${rowCoFaci}`).val() *
                    0.2 )
            );

            if ( gaPercentage.val() == "G.A Hybrid" || gaPercentage.val() == "G.A Virtual" ) {
                sumCoFaci += sumCoFaci * (document.getElementById("ga-only-dropdown").value / 100);
            }
            
            sumProgram += +sumCoFaci;
            sumEf += +sumCoFaci;

            $("#subtotal-coFacilitator").html(currency.format(Math.ceil(sumCoFaci)));

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
            ecProgramSubtotal+= +sumofecCofacilitator;
            sumofEngagementCost += +sumofecCofacilitator;

        });

        // Action Learning
        $("#ef_TableActionLearn > tr").each(function () {
            rowActionLearn++;

            document.getElementById("ec_ActionlearningcoachNoc1").value = $( "#ef_ActionLearnNoc1" ).val();
            document.getElementById("ec_ActionlearningcoachNod1").value = $( "#ef_ActionLearnNod1" ).val();
            document.getElementById("ec_ActionlearningcoachNwh1").value = $( "#ef_ActionLearnNsw1" ).val();
            document.getElementById("ec_ActionlearningcoachAtd1").value = $( "#ef_ActionLearnAtd1" ).val();

            sumActionLearn = (
                $(`#ef_ActionLearnNoc${rowActionLearn}`).val() *
                $("#ef_ActionLearnPdf").val().replace(/\₱|,/g, "") *
                $(`#ef_ActionLearnNod${rowActionLearn}`).val()
            ) + (
                $(`#ef_ActionLearnAtd${rowActionLearn}`).val() *
                (   $(`#ef_ActionLearnNoc${rowActionLearn}`).val() *
                    $("#ef_ActionLearnPdf").val().replace(/\₱|,/g, "") *
                    $(`#ef_ActionLearnNod${rowActionLearn}`).val() *
                    0.2 )
            ) + (
                $(`#ef_ActionLearnNsw${rowActionLearn}`).val() *
                (   $(`#ef_ActionLearnNoc${rowActionLearn}`).val() *
                    $("#ef_ActionLearnPdf").val().replace(/\₱|,/g, "") *
                    $(`#ef_ActionLearnNod${rowActionLearn}`).val() *
                    0.2)
            );

            if (gaPercentage.val() == "G.A Hybrid" || gaPercentage.val() == "G.A Virtual") {
                sumActionLearn += sumActionLearn * (document.getElementById("ga-only-dropdown").value / 100);
            }

            sumProgram += +sumActionLearn;
            sumEf += +sumActionLearn;

            $("#subtotal-ActionLearn").html(currency.format(Math.ceil(sumActionLearn)));
        });

        // Marshal
        $("#ef_TableMarshal > tr").each(function () {
            rowMarshal++;

            document.getElementById("ec_MarshalNoc1").value = $( "#ef_MarshalNoc1" ).val();
            document.getElementById("ec_MarshalNod1").value = $( "#ef_MarshalNod1" ).val();
            document.getElementById("ec_MarshalNwh1").value = $( "#ef_MarshalNsw1" ).val();
            document.getElementById("ec_MarshalAtd1").value = $( "#ef_MarshalAtd1" ).val();

            sumMarshal = (
                $(`#ef_MarshalNoc${rowMarshal}`).val() *
                $("#ef_MarshalPdf").val().replace(/\₱|,/g, "") *
                $(`#ef_MarshalNod${rowMarshal}`).val()
            ) + (
                $(`#ef_MarshalAtd${rowMarshal}`).val() *
                (   $(`#ef_MarshalNoc${rowMarshal}`).val() *
                    $("#ef_MarshalPdf").val().replace(/\₱|,/g, "") *
                    $(`#ef_MarshalNod${rowMarshal}`).val() *
                    0.2 )
            ) + (
                $(`#ef_MarshalNsw${rowMarshal}`).val() *
                (   $(`#ef_MarshalNoc${rowMarshal}`).val() *
                    $("#ef_MarshalPdf").val().replace(/\₱|,/g, "") *
                    $(`#ef_MarshalNod${rowMarshal}`).val() *
                    0.2 )
            );

            if (gaPercentage.val() == "G.A Hybrid" || gaPercentage.val() == "G.A Virtual") {
                sumMarshal += sumMarshal * (document.getElementById("ga-only-dropdown").value / 100);
            }

            sumProgram += +sumMarshal;
            sumEf += +sumMarshal;

            $("#subtotal-marshal").html(currency.format(Math.ceil(sumMarshal)));

        });
        // $("#subtotal-marshal").html(currency.format(Math.ceil(sumMarshal)));

        // Documentor
        $("#ef_TableDocumentor > tr").each(function () {
            rowDocumentor++;

            document.getElementById("ec_DocumentorsNoc1").value = $( "#ef_DocumentorNoc1" ).val();
            document.getElementById("ec_DocumentorsNod1").value = $( "#ef_DocumentorNod1" ).val();
            document.getElementById("ec_DocumentorsNwh1").value = $( "#ef_DocumentorNsw1" ).val();
            document.getElementById("ec_DocumentorsAtd1").value = $( "#ef_DocumentorAtd1" ).val();

            sumDocumentor = (
                $(`#ef_DocumentorNoc${rowDocumentor}`).val() *
                $("#ef_DocumentorPdf").val().replace(/\₱|,/g, "") *
                $(`#ef_DocumentorNod${rowDocumentor}`).val()
            ) + (
                $(`#ef_DocumentorAtd${rowDocumentor}`).val() *
                (   $(`#ef_DocumentorNoc${rowDocumentor}`).val() *
                    $("#ef_DocumentorPdf").val().replace(/\₱|,/g, "") *
                    $(`#ef_DocumentorNod${rowDocumentor}`).val() *
                    0.2 )
            ) + (
                $(`#ef_DocumentorNsw${rowDocumentor}`).val() *
                (   $(`#ef_DocumentorNoc${rowDocumentor}`).val() *
                    $("#ef_DocumentorPdf").val().replace(/\₱|,/g, "") *
                    $(`#ef_DocumentorNod${rowDocumentor}`).val() *
                    0.2)
            );

            if (gaPercentage.val() == "G.A Hybrid" || gaPercentage.val() == "G.A Virtual") {
                sumDocumentor += sumDocumentor * (document.getElementById("ga-only-dropdown").value / 100);
            }

            sumEf += +sumDocumentor;

            $("#subtotal-Documentor").html(currency.format(Math.ceil(sumDocumentor)));
        });

        // $("#subtotal-Documentor").html(currency.format(Math.ceil(sumDocumentor)));

        // Per Diem
        $("#ef_PDPdf").each(function () {
            sumPD +=
                $("#ef_PDNod").val() *
                $("#ef_PDPdf").val().replace(/,/g, "");

            if (
                gaPercentage.val() == "G.A Hybrid" ||
                gaPercentage.val() == "G.A Virtual"
            ) {
                sumPD +=
                    sumPD *
                    (document.getElementById("ga-only-dropdown").value / 100);
            }
            sumEf += +sumPD;
        });
        $("#subtotal-PD").html(currency.format(Math.ceil(sumPD)));;


        // Onsite PC
        $("#ef_TableOnsite > tr").each(function () {
            rowOnsite++;

            document.getElementById("ec_OnsitepcNoc1").value = $( "#ef_OnsiteNoc1" ).val();
            document.getElementById("ec_OnsitepcNod1").value = $( "#ef_OnsiteNod1" ).val();
            document.getElementById("ec_OnsitepcNwh1").value = $( "#ef_OnsiteNsw1" ).val();
            document.getElementById("ec_OnsitepcAtd1").value = $( "#ef_OnsiteAtd1" ).val();

            sumOnsite = (
                $(`#ef_OnsiteNoc${rowOnsite}`).val() *
                $("#ef_OnsitePdf").val().replace(/\₱|,/g, "") *
                $(`#ef_OnsiteNod${rowOnsite}`).val()
            ) + (
                $(`#ef_OnsiteAtd${rowOnsite}`).val() *
                (   $(`#ef_OnsiteNoc${rowOnsite}`).val() *
                    $("#ef_OnsitePdf").val().replace(/\₱|,/g, "") *
                    $(`#ef_OnsiteNod${rowOnsite}`).val() *
                    0.2) 
            ) + (
                $(`#ef_OnsiteNsw${rowOnsite}`).val() *
                (   $(`#ef_OnsiteNoc${rowOnsite}`).val() *
                    $("#ef_OnsitePdf").val().replace(/\₱|,/g, "") *
                    $(`#ef_OnsiteNod${rowOnsite}`).val() *
                    0.2)
            );

            if (gaPercentage.val() == "G.A Hybrid" || gaPercentage.val() == "G.A Virtual") {
                sumOnsite += sumOnsite * (document.getElementById("ga-only-dropdown").value / 100);
            }

            sumProgram += +sumOnsite;
            sumEf += +sumOnsite;

            $("#subtotal-Onsite").html(currency.format(Math.ceil(sumOnsite)));

        });

        // $("#subtotal-Onsite").html(currency.format(Math.ceil(sumOnsite)));
        $("#program-Subtotal").html(
            currency.format(Math.ceil(sumProgram)))
        $("#standard_total").html(currency.format(Math.ceil(sumEf)));

        // Discountsss-------------------------------------------------------------------
        $("#input_totalPackages").each(function () {
            sum50 += (1 - +$(this).val().replace(/,/g, "") / sumEf) * 100;

            if (sum50 > 100) {
                sumDiscount2 = sum50 - 100;
                $("#inpt_dsct").val("-" + sumDiscount2 + "%");
            } else if (isNaN(sum50) != 0) {
                $("#inpt_dsct").val(0 + "%");
            } else {
                sumDiscount2 = Math.round(sum50);
                $("#inpt_dsct").val(sumDiscount2 + "%");
            }
        });

        /****************** TOTAL PACKAGE ******************/
        // document.getElementById("input_totalPackages").value = $("#standard_total").html();
        // set_input_totalPackages();

        //Lead Consultant
        $("#sales1").each(function () {
            sumSales1 +=
                ($("#inpt_dsct").val().replace(/,/g, "") / 100) * $(this).val();
            sumEf += +sumSales1;
        });
        $("#salesTotal1").html(currency.format(Math.ceil(sumSales1)));

        // }
        // ); line issue

        //end of engagement fees

        //start of F2F engagement cost

        //Sales (Engagement Cost)
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

            sumofOffsitepc =
                (
                    (
                        (   $("#input_totalPackages").val().replace(/\₱|,/g, "") -
                            $("#subtotalConsulting").html().replace(/\₱|,/g, "") - 
                            $("#subtotal-PD").html().replace(/\₱|,/g, "") -
                            $("#subtotal-design").html().replace(/\₱|,/g, "")
                        ) * $(`#ec_offsitePc${sumInputOffSite}`).val() 
                    ) / 100
                ) || (
                    (
                        (   $("#input_totalPackages").val().replace(/\₱|,/g, "") -
                            $("#subtotalConsulting").html().replace(/\₱|,/g, "") - 
                            $("#subtotal-PD").html().replace(/\₱|,/g, "") -
                            $("#subtotal-design").html().replace(/\₱|,/g, "") 
                        ) * $(`#inputforOffsite${sumInputOffSite}`).val().replace(/\%|,/g, "")
                    ) / 100
                );

                $(`#ec_offsitePcTotal${sumInputOffSite}`).html(currency.format(Math.ceil(sumofOffsitepc)));

            sumofEngagementCost += +sumofOffsitepc;
            sumInputOffSite++;
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

    $("#ec_ProgramsSubtotal").html(
        currency.format(
            Math.ceil(
                ecProgramSubtotal
            )
        )
    );

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
            document.getElementById(`ec_PerdiemNod${ecPerDiem}`).value = $( "#ef_PDNod" ).val();
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

//*************************************** APPEND NUMBER FORMAT ********************************************************//
$(document).on(
    "change keyup click",
    "#ef_AnalystPdf, #ef_LeadFaciPdf1, #ef_CoFaciPdf, #ef_ActionLearnPdf, #ef_MarshalPdf, #ef_DocumentorPdf, #ef_DocumentorHf",
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

        function formatCurrency(input, blur) {
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
                if (blur === "blur") {
                    right_side += "00";
                }

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
$(document).on(
    "load blur",
    "#main, #f2f-ef-table, #f2f-ec-table",
    function () {
    // LEAD CONSULTANT
    leadConsultantCount = 0;
    $("#tableofLeadConsultant > tr").each(function () {
        leadConsultantCount++;
        let roster = $(`#leadConsultants_roster${leadConsultantCount}`).val().trim();
        dailyFees = 0.85 * $("#ec_LeadfacilitatorsPd1").val().replace(/,/g, "");
        if (roster == '' || roster.toUpperCase() == 'TBA') {
            document.getElementById(`leadConsultants_roster${leadConsultantCount}`).value = 'TBA';
            $(`#ec_LeadconsultantsPd${leadConsultantCount}`).prop('readonly', true).val( currency.format(Math.ceil(dailyFees)) );
            
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
            $(`#ec_DesignersPd${designerCount}`).prop('readonly', true).val( currency.format(Math.ceil(dailyFees)) );
            
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
            $(`#ec_LeadfacilitatorsPd${LeadFaciCount}`).prop('readonly', true).val( currency.format(Math.ceil(dailyFees)) );
            
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
            $(`#ec_CoLeadPd${LeadFaciCount}`).prop('readonly', true).val( currency.format(Math.ceil(dailyFees)) );
            
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
            $(`#ec_CofacilitatorsPd${coFaciCount}`).prop('readonly', true).val( currency.format(Math.ceil(dailyFees)) );
            
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
            $(`#ec_MarshalPd${marshalCount}`).prop('readonly', true).val( currency.format(Math.ceil(dailyFees)) );
            
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
});

//ENGAGEMENT FEES STANDARD FEES PASS TO TOTAL PACKAGE INPUT FIELD
$(document).on(
    "change blur click",
    "#f2f-ef-table tr.th-blue-grey-lighten input,  #f2f-ef-table tr.th-blue-grey-lighten-2 select, #f2f-ef-table tr.th-blue-grey-lighten-2 input,  #f2f-ef-table tr.th-blue-grey-lighten select",
    function () {        
        document.getElementById("input_totalPackages").value = $("#standard_total").html();
    }
);

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
    
});