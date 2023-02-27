//*************************************** CURRENCY FORMATTER ********************************************************//
let currency = Intl.NumberFormat("en-US");

//currency formatter
$("#ef_AnalystPdf").on({
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

// $("#ef_LeadconsultantHf").on({
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

$("#ef_LeadFaciPdf").on({
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

$("#ef_CoFaciPdf").on({
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

$("#ef_ActionLearnPdf").on({
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

$("#ef_MarshalPdf").on({
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

$("#ef_DocumentorPdf").on({
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

$("#ef_PDPdf").on({
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

$("#input_totalPackages").on({
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
$("#ec_Programexpenses").on({
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

//default value of input types
document.getElementById("ef_AnalystPdf").defaultValue = currency.format(40000);
document.getElementById("ef_LeadconsultantHf").defaultValue = currency.format(13600);
document.getElementById("ef_LeadFaciPdf").defaultValue = currency.format(96000);
document.getElementById("ef_CoFaciPdf").defaultValue = currency.format(40000);
document.getElementById("ef_ActionLearnPdf").defaultValue = currency.format(40000);
document.getElementById("ef_MarshalPdf").defaultValue = currency.format(30000);
document.getElementById("ef_DocumentorPdf").defaultValue = currency.format(20000);
document.getElementById("ef_PDPdf").defaultValue = currency.format(2000);
//Engagement Cost
document.getElementById("ec_LeadfacilitatorsPd").defaultValue = currency.format(
    Math.ceil(24000)
);
document.getElementById("ec_LeadconsultantsPd").defaultValue = currency.format(
    Math.ceil(0.85 * $("#ec_LeadfacilitatorsPd").val().replace(/,/g, ""))
);
document.getElementById("ec_AnalystsPd").defaultValue = currency.format(
    Math.ceil(13600)
);
document.getElementById("ec_DesignersPd").defaultValue = currency.format(
    Math.ceil(0.75 * $("#ec_LeadfacilitatorsPd").val().replace(/,/g, ""))
);
document.getElementById("ec_CreatorPd").defaultValue = currency.format(
    Math.ceil(500)
);
document.getElementById("ec_CofacilitatorsPd").defaultValue = currency.format(
    Math.ceil(0.6 * $("#ec_LeadfacilitatorsPd").val().replace(/,/g, ""))
);
document.getElementById("ec_ActionlearningcoachPd").defaultValue = currency.format(
    Math.ceil(16000)
);
document.getElementById("ec_MarshalPd").defaultValue = currency.format(
    Math.ceil(8000)
);
document.getElementById("ec_OnsitepcPd").defaultValue = currency.format(
    Math.ceil(1000)
);
document.getElementById("ec_DocumentorsPd").defaultValue = currency.format(
    Math.ceil(5600)
);
document.getElementById("ec_PerdiemPd").defaultValue = currency.format(
    Math.ceil(200)
);
document.getElementById("ec_OffprogramsPd").defaultValue = currency.format(
    Math.ceil(1000)
);
document.getElementById("ec_Programexpenses").defaultValue = 2 + "%";

//Customized Engagement form of Engagement Fees
$(document).on(
    "change keyup click",
    "#main, .f2f-customized-type, .ga-only-dropdown, .removed, #remove, #f2f-ef-table, #f2f-ec-table, .remove",
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

        //customized type
        var gaPercentage = $(".f2f-customized-type");

        /*******************************************************CONSULTING*********************************************************************/
        //Lead consultant
        $("#tableLeadconsultant > tr").each(function () {
            rowIndx++;

            document.getElementById("ec_LeadconsultantsNoc1").defaultValue = $( "#ef_LeadconsultantNoc1" ).val();
            document.getElementById("ec_LeadconsultantsNod1").defaultValue = $( "#ef_LeadconsultantNoh1" ).val();
            document.getElementById("ec_LeadconsultantsNwh1").defaultValue = $( "#ef_LeadconsultantNwh1" ).val();
            document.getElementById("ec_LeadconsultantsAtd1").defaultValue = $( "#ef_LeadconsultantAtd1" ).val();

            sumLc =
                $(this).find(`#ef_LeadconsultantNoc${rowIndx}`).val() *
                +$(this).find("#ef_LeadconsultantHf").val().replace(/,/g, "") *
                $(this).find(`#ef_LeadconsultantNoh${rowIndx}`).val() +
                $(this).find(`#ef_LeadconsultantAtd${rowIndx}`).val() *
                ($(this).find(`#ef_LeadconsultantNoc${rowIndx}`).val() *
                    +$(this).find("#ef_LeadconsultantHf").val().replace(/,/g, "") *
                    0.2) +
                $(this).find(`#ef_LeadconsultantNwh${rowIndx}`).val() *
                ($(this).find(`#ef_LeadconsultantNoc${rowIndx}`).val() *
                    +$(this).find("#ef_LeadconsultantHf").val().replace(/,/g, "") *
                    0.2);

            if (
                gaPercentage.val() == "G.A Hybrid" ||
                gaPercentage.val() == "G.A Virtual")
                {
                sumLc +=
                    sumLc *
                    (document.getElementById("ga-only-dropdown").value / 100);
            }

            //lead consultant engagement fees sum
            $(this).find("#leadTotal").html(currency.format(Math.ceil(sumLc)));

            sumEf += +sumLc;
        });

        //Lead Consultant (Engagement Cost)
        $("#tableofLeadConsultant > tr").each(function () {
            ecleadConsultant++;

            sumofecLeadconsultant =
                $(this).find(`#ec_LeadconsultantsNoc${ecleadConsultant}`).val() *
                $(this).find("#ec_LeadconsultantsPd").val().replace(/,/g, "") *
                $(this).find(`#ec_LeadconsultantsNod${ecleadConsultant}`).val() +
                $(this).find(`#ec_LeadconsultantsAtd${ecleadConsultant}`).val() *
                ($(this).find(`#ec_LeadconsultantsNoc${ecleadConsultant}`).val() *
                    $(this).find("#ec_LeadconsultantsPd").val().replace(/,/g, "") *
                    $(this).find(`#ec_LeadconsultantsNod${ecleadConsultant}`).val() *
                    0.2) + $(this).find(`#ec_LeadconsultantsNwh${ecleadConsultant}`).val() *
                ($(this).find(`#ec_LeadconsultantsNoc${ecleadConsultant}`).val() *
                    $(this).find("#ec_LeadconsultantsPd").val().replace(/,/g, "") *
                    $(this).find(`#ec_LeadconsultantsNod${ecleadConsultant}`).val() *
                    0.2);

            $(this).find("#ec_LeadconsultantsTotal").html(currency.format(Math.ceil(sumofecLeadconsultant)));

            sumofEngagementCost += +sumofecLeadconsultant;
        });

            // Analyst
            $("#ef_TableAnalyst > tr").each(function () {
                rowAnalyst++;

                document.getElementById("ec_AnalystsNoc1").defaultValue = $( "#ef_AnalystNoc1" ).val();
                document.getElementById("ec_AnalystsNod1").defaultValue = $( "#ef_AnalystNod1" ).val();
                document.getElementById("ec_AnalystsNwh1").defaultValue = $( "#ef_AnalystNsw1" ).val();
                document.getElementById("ec_AnalystsAtd1").defaultValue = $( "#ef_AnalystAtd1" ).val();

                sumAnlst =
                    $(this).find(`#ef_AnalystNoc${rowAnalyst}`).val() *
                    +$(this).find("#ef_AnalystPdf").val().replace(/\₱|,/g, "") *
                    $(this).find(`#ef_AnalystNod${rowAnalyst}`).val() +
                    $(this).find(`#ef_AnalystAtd${rowAnalyst}`).val() *
                    ($(this).find(`#ef_AnalystNoc${rowAnalyst}`).val() *
                        +$(this).find("#ef_AnalystPdf").val().replace(/\₱|,/g, "") *
                        0.2) +
                    $(this).find(`#ef_AnalystNsw${rowAnalyst}`).val() *
                    ($(this).find(`#ef_AnalystNoc${rowAnalyst}`).val() *
                        +$(this).find("#ef_AnalystPdf").val().replace(/\₱|,/g, "") *
                        0.2);
                if (
                    gaPercentage.val() == "G.A Hybrid" ||
                    gaPercentage.val() == "G.A Virtual"
                ) {
                    sumAnlst +=
                        sumAnlst *
                        (document.getElementById("ga-only-dropdown").value / 100);
                }
                sumEf += +sumAnlst;

                $(this).find("#analyst-total").html(currency.format(Math.ceil(sumAnlst)));
            });

            //Analyst (Engagement Cost)
            $("#tableofAnalyst > tr").each(function () {
                ecAnalyst++;

                sumofecAnalyst =
                    $(this).find(`#ec_AnalystsNoc${ecAnalyst}`).val() *
                    $(this).find("#ec_AnalystsPd").val().replace(/,/g, "") *
                    $(this).find(`#ec_AnalystsNod${ecAnalyst}`).val() +
                    $(this).find(`#ec_AnalystsAtd${ecAnalyst}`).val() *
                    ($(this).find(`#ec_AnalystsNoc${ecAnalyst}`).val() *
                        $(this).find("#ec_AnalystsPd").val().replace(/,/g, "") *
                        $(this).find(`#ec_AnalystsNod${ecAnalyst}`).val() *
                        0.2) + $(this).find(`#ec_AnalystsNwh${ecAnalyst}`).val() *
                    ($(this).find(`#ec_AnalystsNoc${ecAnalyst}`).val() *
                        $(this).find("#ec_AnalystsPd").val().replace(/,/g, "") *
                        $(this).find(`#ec_AnalystsNod${ecAnalyst}`).val() *
                        0.2);

                $(this).find("#ec_AnalystsTotal").html(currency.format(Math.ceil(sumofecAnalyst)));

                sumofEngagementCost += +sumofecAnalyst;
            });

            $("#subtotalConsulting").html(
                currency.format(Math.ceil(sumEf))
            );
            $("#ec_SubtotalsConsulting").html(
                currency.format(Math.ceil(sumofEngagementCost))
            );

            // Designer
            $("#ef_TableDesigner > tr").each(function () {
                rowDesigner++;

                document.getElementById("ec_DesignersNoc1").defaultValue = $( "#ef_DesignerNoc1" ).val();
                document.getElementById("ec_DesignersNod1").defaultValue = $( "#ef_DesignerNod1" ).val();
                document.getElementById("ec_DesignersNwh1").defaultValue = $( "#ef_DesignerNsw1" ).val();
                document.getElementById("ec_DesignersAtd1").defaultValue = $( "#ef_DesignerAtd1" ).val();

                sumDesigner =
                    $(this).find(`#ef_DesignerNoc${rowDesigner}`).val() *
                    +$(this).find("#ef_DesignerPdf").val().replace(/\₱|,/g, "")  *
                    $(this).find(`#ef_DesignerNod${rowDesigner}`).val() +
                    $(this).find(`#ef_DesignerAtd${rowDesigner}`).val() *
                    ($(this).find(`#ef_DesignerNoc${rowDesigner}`).val() *
                    +$(this).find("#ef_DesignerPdf").val().replace(/\₱|,/g, "") *
                    0.2) +
                    $(this).find(`#ef_DesignerNsw${rowDesigner}`).val() *
                    ($(this).find(`#ef_DesignerNoc${rowDesigner}`).val() *
                    +$(this).find("#ef_DesignerPdf").val().replace(/\₱|,/g, "") *
                    0.2);
                if (
                    gaPercentage.val() == "G.A Hybrid" ||
                    gaPercentage.val() == "G.A Virtual"
                ) {
                    sumDesigner +=
                        sumDesigner *
                        (document.getElementById("ga-only-dropdown").value / 100);
                }
                sumEf += +sumDesigner;

                $(this).find("#subtotal-design").html(currency.format(Math.ceil(sumDesigner)));
            });

            //Designer (Engagement Cost)
            $("#tableofDesigner > tr").each(function () {
                ecDesigner++;

                sumofecDesigner =
                    $(this).find(`#ec_DesignersNoc${ecDesigner}`).val() *
                    $(this).find("#ec_DesignersPd").val().replace(/,/g, "") *
                    $(this).find(`#ec_DesignersNod${ecDesigner}`).val() +
                    $(this).find(`#ec_DesignersAtd${ecDesigner}`).val() *
                    ($(this).find(`#ec_DesignersNoc${ecDesigner}`).val() *
                        $(this).find("#ec_DesignersPd").val().replace(/,/g, "") *
                        $(this).find(`#ec_DesignersNod${ecDesigner}`).val() *
                        0.2) + $(`#ec_DesignersNwh${ecDesigner}`).val() *
                    ($(this).find(`#ec_DesignersNoc${ecDesigner}`).val() *
                        $(this).find("#ec_DesignersPd").val().replace(/,/g, "") *
                        $(this).find(`#ec_DesignersNod${ecDesigner}`).val() *
                        0.2);

                $(this).find("#ec_DesignersTotal").html(currency.format(Math.ceil(sumofecDesigner)));

                ecDesignSubtotal += +sumofecDesigner;
                sumofEngagementCost += +sumofecDesigner;

            });

            // Lead Facilitator
            $("#ef_TableLeadFaci > tr").each(function () {

                rowLeadFaci++;
                document.getElementById("ec_LeadfacilitatorsNoc1").defaultValue = $( "#ef_LeadFaciNoc1" ).val();
                document.getElementById("ec_LeadfacilitatorsNod1").defaultValue = $( "#ef_LeadFaciNod1" ).val();
                document.getElementById("ec_LeadfacilitatorsNwh1").defaultValue = $( "#ef_LeadFaciNsw1" ).val();
                document.getElementById("ec_LeadfacilitatorsAtd1").defaultValue = $( "#ef_LeadFaciAtd1" ).val();

                sumLeadFaci =
                    $(this).find(`#ef_LeadFaciNoc${rowLeadFaci}`).val() *
                    +$(this).find("#ef_LeadFaciPdf").val().replace(/\₱|,/g, "") *
                    $(this).find(`#ef_LeadFaciNod${rowLeadFaci}`).val() +
                    $(this).find(`#ef_LeadFaciAtd${rowLeadFaci}`).val() *
                    ($(this).find(`#ef_LeadFaciNoc${rowLeadFaci}`).val() *
                    +$(this).find("#ef_LeadFaciPdf").val().replace(/\₱|,/g, "") *
                    0.2) +
                    $(this).find(`#ef_LeadFaciNsw${rowLeadFaci}`).val() *
                    ($(this).find(`#ef_LeadFaciNoc${rowLeadFaci}`).val() *
                    +$(this).find("#ef_LeadFaciPdf").val().replace(/\₱|,/g, "") *
                    0.2);
                if (
                    gaPercentage.val() == "G.A Hybrid" ||
                    gaPercentage.val() == "G.A Virtual"
                ) {
                    sumLeadFaci +=
                        sumLeadFaci *
                        (document.getElementById("ga-only-dropdown").value / 100);
                }
                sumProgram += +sumLeadFaci;
                sumEf += +sumLeadFaci;

                $(this).find("#subtotal-LeadFaci").html(currency.format(Math.ceil(sumLeadFaci)));
            });

            //Lead Facilitator (Engagement Cost)
            $("#tableofLeadFacilitator > tr").each(function () {
                ecLeadFacilitator++;

                sumofecLeadfacilitator =
                    $(this).find(`#ec_LeadfacilitatorsNoc${ecLeadFacilitator}`).val() *
                    $(this).find("#ec_LeadfacilitatorsPd").val().replace(/,/g, "") *
                    $(this).find(`#ec_LeadfacilitatorsNod${ecLeadFacilitator}`).val() +
                    $(this).find(`#ec_LeadfacilitatorsAtd${ecLeadFacilitator}`).val() *
                    ($(this).find(`#ec_LeadfacilitatorsNoc${ecLeadFacilitator}`).val() *
                        $(this).find("#ec_LeadfacilitatorsPd").val().replace(/,/g, "") *
                        $(this).find(`#ec_LeadfacilitatorsNod${ecLeadFacilitator}`).val() *
                        0.2) + $(this).find(`#ec_LeadfacilitatorsNwh${ecLeadFacilitator}`).val() *
                    ($(this).find(`#ec_LeadfacilitatorsNoc${ecLeadFacilitator}`).val() *
                        $(this).find("#ec_LeadfacilitatorsPd").val().replace(/,/g, "") *
                        $(this).find(`#ec_LeadfacilitatorsNod${ecLeadFacilitator}`).val() *
                        0.2);

                    $(this).find("#ec_LeadfacilitatorsTotal").html(currency.format(Math.ceil(sumofecLeadfacilitator)));

                ecProgramSubtotal += +sumofecLeadfacilitator;
                sumofEngagementCost += +sumofecLeadfacilitator;


                // $("#subtotal-LeadFaci").html(currency.format(Math.ceil(sumEf)));
            });

            // Co Facilitator
            $("#ef_TableCoFaci > tr").each(function () {
                rowCoFaci++;
                document.getElementById("ec_CofacilitatorsNoc1").defaultValue = $( "#ef_CoFaciNoc1" ).val();
                document.getElementById("ec_CofacilitatorsNod1").defaultValue = $( "#ef_CoFaciNod1" ).val();
                document.getElementById("ec_CofacilitatorsNwh1").defaultValue = $( "#ef_CoFaciNsw1" ).val();
                document.getElementById("ec_CofacilitatorsAtd1").defaultValue = $( "#ef_CoFaciAtd1" ).val();

                sumCoFaci =
                    $(this).find(`#ef_CoFaciNoc${rowCoFaci}`).val() *
                    +$(this).find("#ef_CoFaciPdf").val().replace(/\₱|,/g, "") *
                    $(this).find(`#ef_CoFaciNod${rowCoFaci}`).val() +
                    $(this).find(`#ef_CoFaciAtd${rowCoFaci}`).val() *
                    ($(`#ef_CoFaciNoc${rowCoFaci}`).val() *
                    +$(this).find("#ef_CoFaciPdf").val().replace(/\₱|,/g, "") *
                    0.2) +
                    $(this).find(`#ef_CoFaciNsw${rowCoFaci}`).val() *
                    ($(this).find(`#ef_CoFaciNoc${rowCoFaci}`).val() *
                    +$(this).find("#ef_CoFaciPdf").val().replace(/\₱|,/g, "") *
                    0.2);
                if (
                    gaPercentage.val() == "G.A Hybrid" ||
                    gaPercentage.val() == "G.A Virtual"
                ) {
                    sumCoFaci +=
                        sumCoFaci *
                        (document.getElementById("ga-only-dropdown").value / 100);
                }
                sumProgram += +sumCoFaci;
                sumEf += +sumCoFaci;

                $(this).find("#subtotal-coFacilitator").html(currency.format(Math.ceil(sumCoFaci)));

            });

            //Co-Facilitator (Engagement Cost)
            $("#tableofCoFacilitator > tr").each(function () {
                ecCoFacilitator++;

                sumofecCofacilitator =
                    $(this).find(`#ec_CofacilitatorsNoc${ecCoFacilitator}`).val() *
                    $(this).find("#ec_CofacilitatorsPd").val().replace(/,/g, "") *
                    $(this).find(`#ec_CofacilitatorsNod${ecCoFacilitator}`).val() +
                    $(this).find(`#ec_CofacilitatorsAtd${ecCoFacilitator}`).val() *
                    ($(this).find(`#ec_CofacilitatorsNoc${ecCoFacilitator}`).val() *
                        $(this).find("#ec_CofacilitatorsPd").val().replace(/,/g, "") *
                        $(this).find(`#ec_CofacilitatorsNod${ecCoFacilitator}`).val() *
                        0.2) + $(this).find(`#ec_CofacilitatorsNwh${ecCoFacilitator}`).val() *
                    ($(this).find(`#ec_CofacilitatorsNoc${ecCoFacilitator}`).val() *
                        $(this).find("#ec_CofacilitatorsPd").val().replace(/,/g, "") *
                        $(this).find(`#ec_CofacilitatorsNod${ecCoFacilitator}`).val() *
                        0.2);

                $(this).find("#ec_CofacilitatorsTotal").html(
                    currency.format(Math.ceil(sumofecCofacilitator))
                );
                ecProgramSubtotal+= +sumofecCofacilitator;
                sumofEngagementCost += +sumofecCofacilitator;

            });

            // Action Learning
            $("#ef_TableActionLearn > tr").each(function () {
                rowActionLearn++;

                document.getElementById("ec_ActionlearningcoachNoc1").defaultValue = $( "#ef_ActionLearnNoc1" ).val();
                document.getElementById("ec_ActionlearningcoachNod1").defaultValue = $( "#ef_ActionLearnNod1" ).val();
                document.getElementById("ec_ActionlearningcoachNwh1").defaultValue = $( "#ef_ActionLearnNsw1" ).val();
                document.getElementById("ec_ActionlearningcoachAtd1").defaultValue = $( "#ef_ActionLearnAtd1" ).val();

                sumActionLearn =
                    $(this).find(`#ef_ActionLearnNoc${rowActionLearn}`).val() *
                    +$(this).find("#ef_ActionLearnPdf").val().replace(/\₱|,/g, "") *
                    $(this).find(`#ef_ActionLearnNod${rowActionLearn}`).val() +
                    $(this).find(`#ef_ActionLearnAtd${rowActionLearn}`).val() *
                    ($(`#ef_ActionLearnNoc${rowActionLearn}`).val() *
                    +$(this).find("#ef_ActionLearnPdf").val().replace(/\₱|,/g, "") *
                    0.2) +
                    $(this).find(`#ef_ActionLearnNsw${rowActionLearn}`).val() *
                    ($(this).find(`#ef_ActionLearnNoc${rowActionLearn}`).val() *
                    +$(this).find("#ef_ActionLearnPdf").val().replace(/\₱|,/g, "") *
                    0.2);
                if (
                    gaPercentage.val() == "G.A Hybrid" ||
                    gaPercentage.val() == "G.A Virtual"
                ) {
                    sumActionLearn +=
                        sumActionLearn *
                        (document.getElementById("ga-only-dropdown").value / 100);
                }
                sumProgram += +sumActionLearn;
                sumEf += +sumActionLearn;

                $(this).find("#subtotal-ActionLearn").html(currency.format(Math.ceil(sumActionLearn)));
            });

            // Marshal
            $("#ef_TableMarshal > tr").each(function () {
                rowMarshal++;
                document.getElementById("ec_MarshalNoc1").defaultValue = $( "#ef_MarshalNoc1" ).val();
                document.getElementById("ec_MarshalNod1").defaultValue = $( "#ef_MarshalNod1" ).val();
                document.getElementById("ec_MarshalNwh1").defaultValue = $( "#ef_MarshalNsw1" ).val();
                document.getElementById("ec_MarshalAtd1").defaultValue = $( "#ef_MarshalAtd1" ).val();

                sumMarshal =
                $(this).find(`#ef_MarshalNoc${rowMarshal}`).val() *
                +$(this).find("#ef_MarshalPdf").val().replace(/\₱|,/g, "") *
                $(this).find(`#ef_MarshalNod${rowMarshal}`).val() +
                $(this).find(`#ef_MarshalAtd${rowMarshal}`).val() *
                ($(`#ef_MarshalNoc${rowMarshal}`).val() *
                +$(this).find("#ef_MarshalPdf").val().replace(/\₱|,/g, "") *
                0.2) +
                $(this).find(`#ef_MarshalNsw${rowMarshal}`).val() *
                ($(this).find(`#ef_MarshalNoc${rowMarshal}`).val() *
                +$(this).find("#ef_MarshalPdf").val().replace(/\₱|,/g, "") *
                0.2);
                if (
                    gaPercentage.val() == "G.A Hybrid" ||
                    gaPercentage.val() == "G.A Virtual"
                ) {
                    sumMarshal +=
                        sumMarshal *
                        (document.getElementById("ga-only-dropdown").value / 100);
                }
                sumProgram += +sumMarshal;
                sumEf += +sumMarshal;
                $(this).find("#subtotal-marshal").html(currency.format(Math.ceil(sumMarshal)));

            });
            // $("#subtotal-marshal").html(currency.format(Math.ceil(sumMarshal)));

            // Documentor
            $("#ef_TableDocumentor > tr").each(function () {
                rowDocumentor++;

                document.getElementById("ec_DocumentorsNoc1").defaultValue = $( "#ef_DocumentorNoc1" ).val();
                document.getElementById("ec_DocumentorsNod1").defaultValue = $( "#ef_DocumentorNod1" ).val();
                document.getElementById("ec_DocumentorsNwh1").defaultValue = $( "#ef_DocumentorNsw1" ).val();
                document.getElementById("ec_DocumentorsAtd1").defaultValue = $( "#ef_DocumentorAtd1" ).val();

                sumDocumentor =
                    $(this).find(`#ef_DocumentorNoc${rowDocumentor}`).val() *
                    +$(this).find("#ef_DocumentorPdf").val().replace(/\₱|,/g, "") *
                    $(this).find(`#ef_DocumentorNod${rowDocumentor}`).val() +
                    $(this).find(`#ef_DocumentorAtd${rowDocumentor}`).val() *
                    ($(this).find(`#ef_DocumentorNoc${rowDocumentor}`).val() *
                    +$(this).find("#ef_DocumentorPdf").val().replace(/\₱|,/g, "") *
                    0.2) +
                    $(this).find(`#ef_DocumentorNsw${rowDocumentor}`).val() *
                    ($(this).find(`#ef_DocumentorNoc${rowDocumentor}`).val() *
                    +$(this).find("#ef_DocumentorPdf").val().replace(/\₱|,/g, "") *
                    0.2);
                if (
                    gaPercentage.val() == "G.A Hybrid" ||
                    gaPercentage.val() == "G.A Virtual"
                ) {
                    sumDocumentor +=
                        sumDocumentor *
                        (document.getElementById("ga-only-dropdown").value / 100);
                }

                sumEf += +sumDocumentor;

                $(this).find("#subtotal-Documentor").html(currency.format(Math.ceil(sumDocumentor)));
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

                document.getElementById("ec_OnsitepcNoc1").defaultValue = $( "#ef_OnsiteNoc1" ).val();
                document.getElementById("ec_OnsitepcNod1").defaultValue = $( "#ef_OnsiteNod1" ).val();
                document.getElementById("ec_OnsitepcNwh1").defaultValue = $( "#ef_OnsiteNsw1" ).val();
                document.getElementById("ec_OnsitepcAtd1").defaultValue = $( "#ef_OnsiteAtd1" ).val();

                sumOnsite =
                $(this).find(`#ef_OnsiteNoc${rowOnsite}`).val() *
                +$(this).find("#ef_OnsitePdf").val().replace(/\₱|,/g, "") *
                $(this).find(`#ef_OnsiteNod${rowOnsite}`).val() +
                $(this).find(`#ef_OnsiteAtd${rowOnsite}`).val() *
                ($(`#ef_OnsiteNoc${rowOnsite}`).val() *
                +$(this).find("#ef_OnsitePdf").val().replace(/\₱|,/g, "") *
                0.2) +
                $(this).find(`#ef_OnsiteNsw${rowOnsite}`).val() *
                ($(this).find(`#ef_OnsiteNoc${rowOnsite}`).val() *
                +$(this).find("#ef_OnsitePdf").val().replace(/\₱|,/g, "") *
                0.2);
                if (
                    gaPercentage.val() == "G.A Hybrid" ||
                    gaPercentage.val() == "G.A Virtual"
                ) {
                    sumOnsite +=
                        sumOnsite *
                        (document.getElementById("ga-only-dropdown").value / 100);
                }
                sumProgram += +sumOnsite;
                sumEf += +sumOnsite;

                $(this).find("#subtotal-Onsite").html(currency.format(Math.ceil(sumOnsite)));

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
            document.getElementById("input_totalPackages").defaultValue = $("#standard_total").html();

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
            $("#tableofSale > tr").each(function () {
                sumofSales =
                    ($("#input_totalPackages").val().replace(/\₱|,/g, "") / 100) *
                    $(this).find("#ec_sale").val() ||
                    ($("#input_totalPackages").val().replace(/\₱|,/g, "") / 100) *
                    $(this).find("#inputforSale").val().replace(/%/g, "");

                    $(this).find("#ec_saleTotal").html(currency.format(Math.ceil(sumofSales)));

                sumofEngagementCost += +sumofSales;
            });

            //Referral (Engagement Cost)
            $("#tableofReferrals > tr").each(function () {
                sumofReferral =
                    ($("#input_totalPackages").val().replace(/\₱|,/g, "") / 100) *
                    $(this).find("#referrals").val() ||
                    ($("#input_totalPackages").val().replace(/\₱|,/g, "") / 100) *
                    $(this).find("#inputforReferrals").val().replace(/%/g, "");

                    $(this).find("#referralsTotal").html(currency.format(Math.ceil(sumofReferral)));

                sumofEngagementCost += +sumofReferral;
            });

            //Engagement Manager (Engagement Cost)
            $("#tableofEngagementManager > tr").each(function () {
                sumofEngagementManager =
                    ($("#input_totalPackages").val().replace(/\₱|,/g, "") / 100) *
                    $(this).find("#ecengagementManager").val() ||
                    ($("#input_totalPackages").val().replace(/\₱|,/g, "") / 100) *
                    $(this).find("#inputforEngagementManager").val().replace(/%/g, "");

                    $(this).find("#ecengagementManagerTotal").html(currency.format(Math.ceil(sumofEngagementManager)));

                sumofEngagementCost += +sumofEngagementManager;
            });

            //Offsite PC (Engagement Cost)
            $("#tableofOffsite > tr").each(function () {
                sumofOffsitepc =
                    ($("#input_totalPackages").val().replace(/\₱|,/g, "") / 100 -
                    $("#subtotalConsulting").val() - $("#subtotal-PD").val()) *
                    $(this).find("#ec_offsitePc").val() ||
                    ($("#input_totalPackages").val().replace(/\₱|,/g, "") / 100 -
                    $("#subtotalConsulting").val() - $("#subtotal-PD").val()) *
                    $(this).find("#inputforOffsite").val().replace(/\%|,/g, "");

                    $(this).find("#ec_offsitePcTotal").html(currency.format(Math.ceil(sumofOffsitepc)));


                sumofEngagementCost += +sumofOffsitepc;
            });

            //Creator (Engagement Cost)
            $("#tableofCreator > tr").each(function () {
                ecCreator++;

                sumofecCreators =
                    $(this).find("#ec_CreatorPd").val() *
                    $(this).find(`#ec_CreatorNod${ecCreator}`).val() *
                    $(this).find(`#ec_CreatorNoc${ecCreator}`).val();

                $(this).find("#ec_CreatorTotal").html(currency.format(Math.ceil(sumofecCreators)));

                ecDesignSubtotal += +sumofecCreators;
                sumofEngagementCost += +sumofecCreators;
            });
                $("#ec_DesignsSubtotal").html(currency.format(Math.ceil(ecDesignSubtotal)));


            //Action Learning Coach (Engagement Cost)
            $("#tableofActionLearningCoach > tr").each(function () {
                ecActionLearning++;

            sumofecActionlearningcoach =
                $(this).find(`#ec_ActionlearningcoachNoc${ecActionLearning}`).val() *
                $(this).find("#ec_ActionlearningcoachPd").val().replace(/,/g, "") *
                $(this).find(`#ec_ActionlearningcoachNod${ecActionLearning}`).val() +
                $(this).find(`#ec_ActionlearningcoachAtd${ecActionLearning}`).val() *
                ($(this).find(`#ec_ActionlearningcoachNoc${ecActionLearning}`).val() *
                    $(this).find("#ec_ActionlearningcoachPd").val().replace(/,/g, "") *
                    $(this).find(`#ec_ActionlearningcoachNod${ecActionLearning}`).val() *
                    0.2) + $(this).find(`#ec_ActionlearningcoachNwh${ecActionLearning}`).val() *
                ($(this).find(`#ec_ActionlearningcoachNoc${ecActionLearning}`).val() *
                    $(this).find("#ec_ActionlearningcoachPd").val().replace(/,/g, "") *
                    $(this).find(`#ec_ActionlearningcoachNod${ecActionLearning}`).val() *
                    0.2);

            $(this).find("#ec_ActionlearningcoachTotal").html(currency.format(Math.ceil(sumofecActionlearningcoach)));

            ecProgramSubtotal += +sumofecActionlearningcoach;
            sumofEngagementCost += +sumofecActionlearningcoach;

            });


            //Marshal (Engagement Cost)
            $("#tableofMarshal > tr").each(function () {
                ecMarshal++;

            sumofecMarshal =
                $(this).find(`#ec_MarshalNoc${ecMarshal}`).val() *
                $(this).find("#ec_MarshalPd").val().replace(/,/g, "") *
                $(this).find(`#ec_MarshalNod${ecMarshal}`).val() +
                $(this).find(`#ec_MarshalAtd${ecMarshal}`).val() *
                ($(this).find(`#ec_MarshalNoc${ecMarshal}`).val() *
                    $(this).find("#ec_MarshalPd").val().replace(/,/g, "") *
                    $(this).find(`#ec_MarshalNod${ecMarshal}`).val() *
                    0.2) + $(this).find(`#ec_MarshalNwh${ecMarshal}`).val() *
                ($(this).find(`#ec_MarshalNoc${ecMarshal}`).val() *
                    $(this).find("#ec_MarshalPd").val().replace(/,/g, "") *
                    $(this).find(`#ec_MarshalNod${ecMarshal}`).val() *
                    0.2);

                    $(this).find("#ec_MarshalTotal").html(
                        currency.format(Math.ceil(sumofecMarshal))
                    );

            ecProgramSubtotal += +sumofecMarshal;
            sumofEngagementCost += +sumofecMarshal;


            });

            //On-site PC (Engagement Cost)
            $("#tableofOnsitePC > tr").each(function () {
                ecOnsite++;

            sumofecOnsitepc =
                $(this).find(`#ec_OnsitepcNoc${ecOnsite}`).val() *
                $(this).find("#ec_OnsitepcPd").val().replace(/,/g, "") *
                $(this).find(`#ec_OnsitepcNod${ecOnsite}`).val() +
                $(this).find(`#ec_OnsitepcAtd${ecOnsite}`).val() *
                ($(this).find(`#ec_OnsitepcNoc${ecOnsite}`).val() *
                    $(this).find("#ec_OnsitepcPd").val().replace(/,/g, "") *
                    $(this).find(`#ec_OnsitepcNod${ecOnsite}`).val() *
                    0.2) + $(this).find(`#ec_OnsitepcNwh${ecOnsite}`).val() *
                ($(this).find(`#ec_OnsitepcNoc${ecOnsite}`).val() *
                    $(this).find("#ec_OnsitepcPd").val().replace(/,/g, "") *
                    $(this).find(`#ec_OnsitepcNod${ecOnsite}`).val() *
                    0.2);

                    $(this).find("#ec_OnsitepcTotal").html(
                        currency.format(Math.ceil(sumofecOnsitepc))
                    );

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

                sumofecDocumentor =
                    $(this).find(`#ec_DocumentorsNoc${ecDocumentor}`).val() *
                    $(this).find("#ec_DocumentorsPd").val().replace(/,/g, "") *
                    $(this).find(`#ec_DocumentorsNod${ecDocumentor}`).val() +
                    $(this).find(`#ec_DocumentorsAtd${ecDocumentor}`).val() *
                    ($(this).find(`#ec_DocumentorsNoc${ecDocumentor}`).val() *
                        $(this).find("#ec_DocumentorsPd").val().replace(/,/g, "") *
                        $(this).find(`#ec_DocumentorsNod${ecDocumentor}`).val() *
                        0.2) + $(this).find(`#ec_DocumentorsNwh${ecDocumentor}`).val() *
                    ($(this).find(`#ec_DocumentorsNoc${ecDocumentor}`).val() *
                        $(this).find("#ec_DocumentorsPd").val().replace(/,/g, "") *
                        $(this).find(`#ec_DocumentorsNod${ecDocumentor}`).val() *
                        0.2);


                sumofEngagementCost += +sumofecDocumentor;

                $(this).find("#ec_DocumentorsTotal").html(currency.format(Math.ceil(sumofecDocumentor)));
            });

            //Per Diem (Engagement Cost)
            $("#tableofPerdiem > tr").each(function () {
                document.getElementById("ec_PerdiemNod").defaultValue = $( "#ef_PDNod" ).val();

                sumofecPerdiem =
                    $(this).find("#ec_PerdiemPd").val() *
                    $(this).find("#ec_PerdiemNod").val() *
                    $(this).find("#ec_PerdiemNoc").val();


                sumofEngagementCost += +sumofecPerdiem;

                $(this).find("#ec_PerdiemTotal").html(currency.format(Math.ceil(sumofecPerdiem)));
            });

            //Off-program Fee (Engagement Cost)
            $("#taleOffProgram > tr").each(function () {
                sumofecOffprogram =
                    $(this).find("#ec_OffprogramsNoc").val() *
                    $(this).find("#ec_OffprogramsPd").val().replace(/,/g, "");


                sumofEngagementCost += +sumofecOffprogram;

                $(this).find("#ec_OffprogramsTotal").html(
                    currency.format(Math.ceil(sumofecOffprogram))
                );
            });

            //Program Expenses (Engagement Cost)
            sumofecProgramexpense +=
                ($("#ec_Programexpenses").val().replace(/%/g, "") *
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

            //Less: Contribution to Overhead
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
            }
            else {
                $("#ProfitMargin").html(Math.floor(sumProfitmargin) + "%");
            }
    });

//*************************************** APPEND NUMBER FORMAT ********************************************************//
$(document).on(
    "change keyup click",
    "#ef_AnalystPdf, #ef_LeadFaciPdf, #ef_CoFaciPdf, #ef_ActionLearnPdf, #ef_MarshalPdf, #ef_DocumentorPdf, #ef_DocumentorHf, #ec_LeadconsultantsPd, #f2f-ec-table",
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
//cluster reference
// document.getElementById("cluster-dropdown").addEventListener("change", cluster);
// document.getElementById("input-notListed").disabled = false;
// document.getElementById("core-valueInput").disabled = false;
// function cluster() {
//     var clusterDropdown = document.getElementById("cluster-dropdown");
//     var capability = document.getElementById("capability");
//     var culture = document.getElementById("culture");

//     //Capability
//     if (
//         clusterDropdown.value == "Above The Line" ||
//         clusterDropdown.value == "Anxiety 2 (Capability)" ||
//         clusterDropdown.value == "Art of Asking Questions 1 (Capability)" ||
//         clusterDropdown.value == "Assertive Communication 1 (Capability)" ||
//         clusterDropdown.value ==
//         "Building Effective Relationships 1 (Capability)" ||
//         clusterDropdown.value == "Business Analytics 1 (Capability)" ||
//         clusterDropdown.value == "Business Storytelling" ||
//         clusterDropdown.value == "Change Management 2 (Capability)" ||
//         clusterDropdown.value == "Choose Flourish 1 (Capability)" ||
//         clusterDropdown.value == "Collaborative Leadership 2 (Capability)" ||
//         clusterDropdown.value == "Communicate for Success" ||
//         clusterDropdown.value == "Communicating Across the Organization" ||
//         clusterDropdown.value == "Communication" ||
//         clusterDropdown.value == "Competency Building" ||
//         clusterDropdown.value == "Conflict Resolution" ||
//         clusterDropdown.value == "Create Authentic Connections" ||
//         clusterDropdown.value == "Creativity" ||
//         clusterDropdown.value == "Emotional Intelligence" ||
//         clusterDropdown.value == "Enhance My Credibility" ||
//         clusterDropdown.value == "Everyday Innovation" ||
//         clusterDropdown.value == "Facilitating Virtual Meetings" ||
//         clusterDropdown.value == "Feedback" ||
//         clusterDropdown.value == "Growth Mindset" ||
//         clusterDropdown.value == "Improv 1 (Capability)" ||
//         clusterDropdown.value == "Influencing" ||
//         clusterDropdown.value == "Innovation" ||
//         clusterDropdown.value == "Knowledge Management" ||
//         clusterDropdown.value == "Leading Virtual Teams" ||
//         clusterDropdown.value == "Leading with Questions 2 (Capability)" ||
//         clusterDropdown.value == "Learning Evolution" ||
//         clusterDropdown.value == "Learning How to Set Goals" ||
//         clusterDropdown.value == "Mental Health" ||
//         clusterDropdown.value == "Mindfulness" ||
//         clusterDropdown.value == "Owning My Career" ||
//         clusterDropdown.value == "Persuasive Communication" ||
//         clusterDropdown.value == "Problem-Solving" ||
//         clusterDropdown.value == "Productivity" ||
//         clusterDropdown.value == "Project Management" ||
//         clusterDropdown.value == "Psychological First Aid" ||
//         clusterDropdown.value == "Radical Candor" ||
//         clusterDropdown.value == "Stakeholder Management" ||
//         clusterDropdown.value == "Strategic Execution" ||
//         clusterDropdown.value == "Strategic Agility" ||
//         clusterDropdown.value == "Talent Building" ||
//         clusterDropdown.value == "Work From Home"
//     ) {
//         document.getElementById("core-valueInput").value = "Capability";
//         document.getElementById("input-notListed").disabled = true;
//         document.getElementById("div-notListed").style.visibility = "hidden";
//         document.getElementById("core-valueInput").disabled = true;

//         //Culture
//     } else if (
//         clusterDropdown.value == "Action Learning" ||
//         clusterDropdown.value == "Anxiety 1 (Culture)" ||
//         clusterDropdown.value == "Business Transformation 1 (Culture)" ||
//         clusterDropdown.value == "Diversity & Inclusion" ||
//         clusterDropdown.value == "Find Your Why 2 (Culture)" ||
//         clusterDropdown.value == "Habit Formation" ||
//         clusterDropdown.value ==
//         "Organizational Development (OD) 1 (Culture)" ||
//         clusterDropdown.value == "Psychological Safety 1 (Culture)" ||
//         clusterDropdown.value == "Well-being"
//     ) {
//         document.getElementById("core-valueInput").value = "Culture";
//         document.getElementById("input-notListed").disabled = true;
//         document.getElementById("div-notListed").style.visibility = "hidden";
//         document.getElementById("core-valueInput").disabled = true;

//         //Leadership
//     } else if (
//         clusterDropdown.value == "Art of Asking Questions 2 (Leadership)" ||
//         clusterDropdown.value == "Assertive Communication 2 (Leadership)" ||
//         clusterDropdown.value ==
//         "Building Effective Relationships 2 (Leadership)" ||
//         clusterDropdown.value == "Business Transformation 2 (Leadership)" ||
//         clusterDropdown.value == "Change Management 1 (Leadership)" ||
//         clusterDropdown.value == "Choose to Flourish 2 (Leadership)" ||
//         clusterDropdown.value == "Coaching" ||
//         clusterDropdown.value == "Collaborative Leadership 1 (Leadership)" ||
//         clusterDropdown.value == "Find Your Why 1 (Leadership)" ||
//         clusterDropdown.value == "Future Proof Leadership" ||
//         clusterDropdown.value == "Leadership Brand" ||
//         clusterDropdown.value == "Leadership Presence" ||
//         clusterDropdown.value == "Leadership Hybrid Teams" ||
//         clusterDropdown.value == "Leading with Emotional Intelligence" ||
//         clusterDropdown.value == "Leading with Questions 1 (Leadership)" ||
//         clusterDropdown.value == "Mentoring" ||
//         clusterDropdown.value == "Mission & Vision Review 2 (Leadership)" ||
//         clusterDropdown.value == "Psychological Safety 2 (Leadership)" ||
//         clusterDropdown.value == "Purpose" ||
//         clusterDropdown.value == "Situational Leadership" ||
//         clusterDropdown.value == "Strategic Leadership" ||
//         clusterDropdown.value == "Strengths"
//     ) {
//         document.getElementById("core-valueInput").value = "Leadership";
//         document.getElementById("input-notListed").disabled = true;
//         document.getElementById("div-notListed").style.visibility = "hidden";
//         document.getElementById("core-valueInput").disabled = true;

//         //Strategy
//     } else if (
//         clusterDropdown.value == "Business Analytics 2 (Strategy)" ||
//         clusterDropdown.value == "Goal Setting" ||
//         clusterDropdown.value == "Mission & Vision Review 1 (Strategy)" ||
//         clusterDropdown.value ==
//         "Organizational Development (OD) 2 (Capability)" ||
//         clusterDropdown.value == "Visioning" ||
//         clusterDropdown.value == "World Cafe"
//     ) {
//         document.getElementById("core-valueInput").value = "Strategy";
//         document.getElementById("input-notListed").disabled = true;
//         document.getElementById("div-notListed").style.visibility = "hidden";
//         document.getElementById("core-valueInput").disabled = true;

//         //Teams
//     } else if (
//         clusterDropdown.value == "Game Night" ||
//         clusterDropdown.value == "Heroes Assemble" ||
//         clusterDropdown.value == "Improv 2 (Teams)" ||
//         clusterDropdown.value == "Lip Sync Battle" ||
//         clusterDropdown.value == "Squid Game" ||
//         clusterDropdown.value == "Team Engagement" ||
//         clusterDropdown.value == "The Heist" ||
//         clusterDropdown.value == "The Lab" ||
//         clusterDropdown.value == "Virtual Team Building"
//     ) {
//         document.getElementById("core-valueInput").value = "Teams";
//         document.getElementById("input-notListed").disabled = true;
//         document.getElementById("input-notListed").style.visibility = "hidden";
//         document.getElementById("core-valueInput").disabled = true;

//         //Society
//     } else if (clusterDropdown.value == "Parenting") {
//         document.getElementById("core-valueInput").value = "Society";
//         document.getElementById("input-notListed").disabled = true;
//         document.getElementById("div-notListed").style.visibility = "hidden";
//         document.getElementById("core-valueInput").disabled = true;

//         //Not listed
//     } else {
//         document.getElementById("core-valueInput").value = "Cluster";
//         document.getElementById("input-notListed").disabled = false;
//         document.getElementById("div-notListed").style.visibility = "";
//         document.getElementById("core-valueInput").disabled = false;
//     }
// };

//To be announce
document.getElementById("dcbeCheck").addEventListener("click", myFunction);
function myFunction() {
var checkBox = document.getElementById("dcbeCheck");
var DatesCoveredByEngagement = $("#dcbe");
var DateRows = $("#dateRows");
    // $("#dcacl").children().attr("disabled","disabled");
    if (checkBox.checked == false) {
        DatesCoveredByEngagement.show();
        DateRows.removeAttr("disabled","disabled");
    } else {
        DatesCoveredByEngagement.hide();
        DateRows.attr("disabled","disabled");
        $(".date").val("");
        $(".start-time").val("");
        $(".end-time").val("");
    }
};

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
