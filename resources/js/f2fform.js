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

$("#ef_LeadconsultantHf").on({
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

//Engagement Cost
//ENGAGEMENT COST
$("#ec_LeadconsultantPd").on({
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
$("#ec_AnalystPd").on({
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
$("#ec_DesignerPd").on({
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
$("#ec_CreatorPd").on({
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
$("#ec_LeadfacilitatorPd").on({
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
$("#ec_CofacilitatorPd").on({
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
$("#ec_DocumentorPd").on({
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
$("#ec_OffprogramPd").on({
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
$("#ec_Programexpense").on({
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
document.getElementById("ec_LeadfacilitatorPd").defaultValue = currency.format(
    Math.ceil(24000)
);
document.getElementById("ec_LeadconsultantPd").defaultValue = currency.format(
    Math.ceil(0.85 * $("#ec_LeadfacilitatorPd").val().replace(/,/g, ""))
);
document.getElementById("ec_AnalystPd").defaultValue = currency.format(
    Math.ceil(13600)
);
document.getElementById("ec_DesignerPd").defaultValue = currency.format(
    Math.ceil(0.75 * $("#ec_LeadfacilitatorPd").val().replace(/,/g, ""))
);
document.getElementById("ec_CreatorsPd").defaultValue = currency.format(
    Math.ceil(500)
);
document.getElementById("ec_CofacilitatorPd").defaultValue = currency.format(
    Math.ceil(0.6 * $("#ec_LeadfacilitatorPd").val().replace(/,/g, ""))
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
document.getElementById("ec_DocumentorPd").defaultValue = currency.format(
    Math.ceil(5600)
);
document.getElementById("ec_PerdiemPd").defaultValue = currency.format(
    Math.ceil(200)
);
document.getElementById("ec_OffprogramPd").defaultValue = currency.format(
    Math.ceil(1000)
);
document.getElementById("ec_Programexpense").defaultValue = 2 + "%";

//Customized Engagement form of Engagement Fees
$(document).on(
    "change keyup",
    ".f2f-customized-type, .f2f-ga-only-dropdown, #ef_LeadconsultantAtd, #ef_LeadconsultantNoc, #ef_LeadconsultantHf, #ef_LeadconsultantNoh, #ef_LeadconsultantNwh, #ef_AnalystNoc, #ef_AnalystPdf, #ef_AnalystNod, #ef_AnalystAtd, #ef_AnalystNsw, #ef_DesignerNoc, #ef_DesignerPdf, #ef_DesignerNod, #ef_DesignerAtd, #ef_DesignerNsw, #ef_LeadFaciNoc, #ef_LeadFaciPdf, #ef_LeadFaciNod, #ef_LeadFaciAtd, #ef_LeadFaciNsw, #ef_CoFaciNoc, #ef_CoFaciPdf, #ef_CoFaciNod, #ef_CoFaciAtd, #ef_CoFaciNsw, #ef_ActionLearnNoc, #ef_ActionLearnPdf, #ef_ActionLearnNod, #ef_ActionLearnAtd, #ef_ActionLearnNsw, #ef_MarshalNoc, #ef_MarshalPdf, #ef_MarshalNod, #ef_MarshalAtd, #ef_MarshalNsw, #ef_OnsiteNoc, #ef_OnsitePdf, #ef_OnsiteNod, #ef_OnsiteAtd, #ef_OnsiteNsw, #ef_DocumentorNoc, #ef_DocumentorPdf, #ef_DocumentorNod, #ef_DocumentorAtd, #ef_DocumentorNsw,  #ef_PDNoc, #ef_PDPdf, #ef_PDNod, #ef_PDAtd, #ef_PDNsw, #input_totalPackages, #sales, #referral, #engagementManager, #offsitePC, #ec_LeadconsultantPd, #ec_AnalystPd, #ec_DesignerPd, #ec_CreatorsNoc, #ec_CreatorsPd, #ec_CreatorsNod, #ec_LeadfacilitatorPd, #ec_CofacilitatorPd, #ec_ActionlearningcoachPd, #ec_MarshalPd, #ec_OnsitepcPD, #ec_DocumentorPd, #ec_PerdiemPd #ec_OffprogramPd, #ec_Programexpense",
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

        $("#ec_Programexpense").on("input", function () {
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

        //Designer
        sumDesigner=0;

        //Lead Facilitator
        sumLeadFaci = 0;

        //Co Facilitator
        sumCoFaci = 0;

        //Action Learning 
        sumActionLearn = 0;

        //Marshal
        sumMarshal = 0;

        //Onsite
        sumOnsite = 0 ;

        //Documentor
        sumDocumentor = 0;

        //Per Diem
        sumPD = 0;

        //Discount
        sumA = 0;
        sum50 = 0;

        // engagement cost total
        sumEngagementCost = 0;
        sumSales = 0;
        sumReferral = 0;
        sumEngagementManager = 0;
        sumOffsitepc = 0;
        sumecLeadconsultant = 0;
        sumecAnalyst = 0;
        sumecDesigner = 0;
        sumecCreators = 0;
        sumecLeadfacilitator = 0;
        sumecCofacilitator = 0;
        sumecActionlearningcoach = 0;
        sumecOnsitepc = 0;
        sumecDocumentor = 0;
        sumecPerdiem = 0;
        sumecOffprogram = 0;
        sumecProgramexpense = 0;

        //customized type
        var gaPercentage = $(".customized-type");

        /*******************************************************CONSULTING*********************************************************************/
        //Lead consultant
        $("#ef_LeadconsultantHf").each(function () {
            sumLc +=
                $("#ef_LeadconsultantNoc").val() *
                +$(this).val().replace(/,/g, "") *
                $("#ef_LeadconsultantNoh").val() +
                $("#ef_LeadconsultantAtd").val() *
                    ($("#ef_LeadconsultantNoc").val() *
                        +$(this).val().replace(/,/g, "") *
                        0.2) +
                $("#ef_LeadconsultantNwh").val() *
                    ($("#ef_LeadconsultantNoc").val() *
                        +$(this).val().replace(/,/g, "") *
                        0.2) ;
            if (
                gaPercentage.val() == "G.A Hybrid" ||
                gaPercentage.val() == "G.A Virtual"
            ) {
                sumLc +=
                    sumLc *
                    (document.getElementById("ga-only-dropdown").value / 100);
            }
            sumEf += +sumLc;

        $("#lead-total").html(currency.format(Math.ceil(sumLc)));
        $("#subtotal-consulting").html(
            currency.format(Math.ceil(sumLc + sumAnlst))
        );
        // Analyst
        $("#ef_AnalystPdf").each(function () {
            sumAnlst +=
                $("#ef_AnalystNoc").val() *
                +$(this).val().replace(/,/g, "") *
                $("#ef_AnalystNod").val() +
                $("#ef_AnalystAtd").val() *
                ($("#ef_AnalystNoc").val() *
                    +$(this).val().replace(/,/g, "") *
                    0.2) +
                $("#ef_AnalystNsw").val() *
                ($("#ef_AnalystNoc").val() *
                    +$(this).val().replace(/,/g, "") *
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
        });
        $("#analyst-total").html(currency.format(Math.ceil(sumAnlst)));
        console.log(sumAnlst);
        $("#subtotal-consulting").html(
            currency.format(Math.ceil(sumLc + sumAnlst))
        );
        // Designer
        $("#ef_DesignerPdf").each(function () {
            sumDesigner +=
                $("#ef_DesignerNoc").val() *
                +$(this).val().replace(/,/g, "") *
                $("#ef_DesignerNod").val() +
                $("#ef_DesignerAtd").val() *
                ($("#ef_DesignerNoc").val() *
                    +$(this).val().replace(/,/g, "") *
                    0.2) +
                $("#ef_DesignerNsw").val() *
                ($("#ef_DesignerNoc").val() *
                    +$(this).val().replace(/,/g, "") *
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
        });

        $("#subtotal-design").html(currency.format(Math.ceil(sumDesigner)));
        // Lead Facilitator
        $("#ef_LeadFaciPdf").each(function () {
            sumLeadFaci +=
                $("#ef_LeadFaciNoc").val() *
                +$(this).val().replace(/,/g, "") *
                $("#ef_LeadFaciNod").val() +
                $("#ef_LeadFaciAtd").val() *
                ($("#ef_LeadFaciNoc").val() *
                    +$(this).val().replace(/,/g, "") *
                    0.2) +
                $("#ef_LeadFaciNsw").val() *
                ($("#ef_LeadFaciNoc").val() *
                    +$(this).val().replace(/,/g, "") *
                    0.2);
            if (
                gaPercentage.val() == "G.A Hybrid" ||
                gaPercentage.val() == "G.A Virtual"
            ) {
                sumLeadFaci +=
                sumLeadFaci *
                    (document.getElementById("ga-only-dropdown").value / 100);
            }
            sumEf += +sumLeadFaci;
        });

        $("#subtotal-LeadFaci").html(currency.format(Math.ceil(sumLeadFaci)));
        // Co Facilitator
        $("#ef_CoFaciPdf").each(function () {
            sumCoFaci +=
                $("#ef_CoFaciNoc").val() *
                +$(this).val().replace(/,/g, "") *
                $("#ef_CoFaciNod").val() +
                $("#ef_CoFaciAtd").val() *
                ($("#ef_CoFaciNoc").val() *
                    +$(this).val().replace(/,/g, "") *
                    0.2) +
                $("#ef_CoFaciNsw").val() *
                ($("#ef_CoFaciNoc").val() *
                    +$(this).val().replace(/,/g, "") *
                    0.2);
            if (
                gaPercentage.val() == "G.A Hybrid" ||
                gaPercentage.val() == "G.A Virtual"
            ) {
                sumCoFaci +=
                sumCoFaci *
                    (document.getElementById("ga-only-dropdown").value / 100);
            }
            sumEf += +sumCoFaci;
        });

        $("#subtotal-coFacilitator").html(currency.format(Math.ceil(sumCoFaci)));

        // Action Learning
        $("#ef_ActionLearnPdf").each(function () {
            sumActionLearn +=
                $("#ef_ActionLearnNoc").val() *
                +$(this).val().replace(/,/g, "") *
                $("#ef_ActionLearnNod").val() +
                $("#ef_ActionLearnAtd").val() *
                ($("#ef_ActionLearnNoc").val() *
                    +$(this).val().replace(/,/g, "") *
                    0.2) +
                $("#ef_ActionLearnNsw").val() *
                ($("#ef_ActionLearnNoc").val() *
                    +$(this).val().replace(/,/g, "") *
                    0.2);
            if (
                gaPercentage.val() == "G.A Hybrid" ||
                gaPercentage.val() == "G.A Virtual"
            ) {
                sumActionLearn +=
                sumActionLearn *
                    (document.getElementById("ga-only-dropdown").value / 100);
            }
            sumEf += +sumActionLearn;
        });

        $("#subtotal-ActionLearn").html(currency.format(Math.ceil(sumActionLearn)));
        // Marshal
        $("#ef_MarshalPdf").each(function () {
            sumMarshal +=
                $("#ef_MarshalNoc").val() *
                +$(this).val().replace(/,/g, "") *
                $("#ef_MarshalNod").val() +
                $("#ef_MarshalAtd").val() *
                ($("#ef_MarshalNoc").val() *
                    +$(this).val().replace(/,/g, "") *
                    0.2) +
                $("#ef_MarshalNsw").val() *
                ($("#ef_MarshalNoc").val() *
                    +$(this).val().replace(/,/g, "") *
                    0.2);
            if (
                gaPercentage.val() == "G.A Hybrid" ||
                gaPercentage.val() == "G.A Virtual"
            ) {
                sumMarshal +=
                sumMarshal *
                    (document.getElementById("ga-only-dropdown").value / 100);
            }
            sumEf += +sumMarshal;
        });
        $("#subtotal-marshal").html(currency.format(Math.ceil(sumMarshal)));
        // Documentor
        $("#ef_DocumentorPdf").each(function () {
            sumDocumentor +=
                $("#ef_DocumentorNoc").val() *
                +$(this).val().replace(/,/g, "") *
                $("#ef_DocumentorNod").val() +
                $("#ef_DocumentorAtd").val() *
                ($("#ef_DocumentorNoc").val() *
                    +$(this).val().replace(/,/g, "") *
                    0.2) +
                $("#ef_DocumentorNsw").val() *
                ($("#ef_DocumentorNoc").val() *
                    +$(this).val().replace(/,/g, "") *
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
        });

        $("#subtotal-Documentor").html(currency.format(Math.ceil(sumDocumentor)));
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
        $("#ef_OnsitePdf").each(function () {
            sumOnsite +=
                $("#ef_OnsiteNoc").val() *
                +$(this).val().replace(/,/g, "") *
                $("#ef_OnsiteNod").val() +
                $("#ef_OnsiteAtd").val() *
                ($("#ef_OnsiteNoc").val() *
                    +$(this).val().replace(/,/g, "") *
                    0.2) +
                $("#ef_OnsiteNsw").val() *
                ($("#ef_OnsiteNoc").val() *
                    +$(this).val().replace(/,/g, "") *
                    0.2);
            if (
                gaPercentage.val() == "G.A Hybrid" ||
                gaPercentage.val() == "G.A Virtual"
            ) {
                sumOnsite +=
                sumOnsite *
                    (document.getElementById("ga-only-dropdown").value / 100);
            }
            sumEf += +sumOnsite;
        });

        $("#subtotal-Onsite").html(currency.format(Math.ceil(sumOnsite)));
        $("#program-Subtotal").html(
            currency.format(Math.ceil(sumLeadFaci + sumCoFaci + sumActionLearn + sumMarshal +  sumOnsite)))
        $("#standard_total").html(currency.format(Math.ceil(sumEf)));

// Discountsss-------------------------------------------------------------------
$("#input_totalPackages").each(function () {
    sum50 += (1 - +$(this).val().replace(/,/g, "") / sumEf) * 100;

    if (sum50 > 100) {
        sumDiscount2 = sum50 - 100;
        $("#inpt_dsct").val("-" + sumDiscount2 + "%");
    } else if (isNaN(sum50) != 0) {
        $("#inpt_dsct").val(100 + "%");
    } else {
        sumDiscount2 = Math.round(sum50);
        $("#inpt_dsct").val(sumDiscount2 + "%");
    }
});
//Lead Consultant
$("#sales1").each(function () {
    sumSales1 +=
        ($("#inpt_dsct").val().replace(/,/g, "") / 100) * $(this).val();
    sumEf += +sumSales1;
});
$("#salesTotal1").html(currency.format(Math.ceil(sumSales1)));
    }
); 

//end of engagement fees

//start of engagement cost

//Lead Consultant
$("#ec_LeadconsultantNoc").val($("#ef_LeadconsultantNoc").val());
$("#ec_LeadconsultantNod").val($("#ef_LeadconsultantNod").val());
$("#ec_LeadconsultantNwh").val($("#ef_LeadconsultantNwh").val());

sumecLeadconsultant +=
    $("#ec_LeadconsultantNoc").val() *
        $("#ec_LeadconsultantPd").val().replace(/,/g, "") *
        $("#ec_LeadconsultantNod").val() +
    $("#ec_LeadconsultantNwh").val() *
        ($("#ec_LeadconsultantNoc").val() *
            $("#ec_LeadconsultantPd").val().replace(/,/g, "") *
            $("#ec_LeadconsultantNod").val() *
            0.2);

            if (
                gaPercentage.val() == "G.A Hybrid" ||
                gaPercentage.val() == "G.A Virtual"
            ) {
                sumecLeadconsultant +=
                    sumecLeadconsultant *
                    (document.getElementById("ga-only-dropdown").value / 100);
            }
            sumEngagementCost += +sumecLeadconsultant;
            });
            
            $("#ec_LeadconsultantTotal").html(
                currency.format(Math.ceil(sumecLeadconsultant))
            );
            $("#ec_SubtotalConsulting").html(
                currency.format(Math.ceil(sumecLeadconsultant + sumecAnalyst))
            );
            
//Analyst
$("#ec_AnalystNoc").val($("#ef_AnalystNoc").val());
$("#ec_AnalystNod").val($("#ef_AnalystNod").val());
$("#ec_AnalystNwh").val($("#ef_AnalystNwh").val());

sumecAnalyst +=
                $("#ec_AnalystNoc").val() *
                    $("#ec_AnalystPd").val().replace(/,/g, "") *
                    $("#ec_AnalystNod").val() +
                $("#ec_AnalystNwh").val() *
                    ($("#ec_AnalystNoc").val() *
                        $("#ec_AnalystPd").val().replace(/,/g, "") *
                        $("#ec_AnalystNod").val() *
                        0.2);

                        if (
                            gaPercentage.val() == "G.A Hybrid" ||
                            gaPercentage.val() == "G.A Virtual"
                        ) {
                            sumecAnalyst +=
                                sumecAnalyst *
                                (document.getElementById("ga-only-dropdown").value / 100);
                        }
                        //if the customized type value is G.A
            if (
                gaPercentage.val() == "G.A Hybrid" ||
                gaPercentage.val() == "G.A Virtual"
            ) {
                sumecAnalyst +=
                    sumecAnalyst *
                    (document.getElementById("ga-only-dropdown").value / 100);
            }
            
            sumEngagementCost += +sumecAnalyst;

        //subtotal engagement cost
        $("#ec_AnalystTotal").html(currency.format(Math.ceil(sumecAnalyst)));
        $("#ec_SubtotalConsulting").html(
            currency.format(Math.ceil(sumecLeadconsultant + sumecAnalyst))
        );

//Designer
$("#ec_DesignerNoc").val($("#ef_DesignerNoc").val());
$("#ec_DesignerNod").val($("#ef_DesignerNod").val());
$("#ec_DesignerNwh").val($("#ef_DesignerNwh").val());

            sumecDesigner +=
                $("#ec_DesignerNoc").val() *
                    $("#ec_DesignerPd").val().replace(/,/g, "") *
                    $("#ec_DesignerNod").val() +
                $("#ec_DesignerNwh").val() *
                    ($("#ec_DesignerNoc").val() *
                        $("#ec_DesignerPd").val().replace(/,/g, "") *
                        $("#ec_DesignerNod").val() *
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

            
            sumEngagementCost += +sumecDesigner;

            $("#ec_DesignerTotal").html(currency.format(Math.ceil(sumecDesigner)));

//Creators Fee

            sumecCreators +=
            $("#ec_CreatorsNoc").val() *
                $("#ec_CreatorsPd").val().replace(/,/g, "") *
                $("#ec_CreatorsNod").val() +
            $("#ec_CreatorsNwh").val() *
                ($("#ec_CreatorsNoc").val() *
                    $("#ec_CreatorsPd").val().replace(/,/g, "") *
                    $("#ec_CreatorsNod").val() *
                    0.2);

            //if the customized type value is G.A
            if (
            gaPercentage.val() == "G.A Hybrid" ||
            gaPercentage.val() == "G.A Virtual"
            ) {
            sumecCreators +=
                sumecCreators *
                (document.getElementById("ga-only-dropdown").value / 100);
            }


            sumEngagementCost += +sumecCreators;

            $("#ec_CreatorsTotal").html(
            currency.format(Math.ceil(sumecCreators))
            );
            $("#ec_DesignSubtotal").html(
                currency.format(Math.ceil(sumecLeadconsultant + sumecAnalyst))
            );


//Lead Facilitator
$("#ec_LeadfacilitatorNoc").val($("#ef_LeadfacilitatorNoc").val());
$("#ec_LeadfacilitatorNod").val($("#ef_LeadfacilitatorNod").val());
$("#ec_LeadfacilitatorNwh").val($("#ef_LeadfacilitatorNwh").val());

            sumecLeadfacilitator +=
                $("#ec_LeadfacilitatorNoc").val() *
                    $("#ec_LeadfacilitatorPd").val().replace(/,/g, "") *
                    $("#ec_LeadfacilitatorNod").val() +
                $("#ec_LeadfacilitatorNwh").val() *
                    ($("#ec_LeadfacilitatorNoc").val() *
                        $("#ec_LeadfacilitatorPd").val().replace(/,/g, "") *
                        $("#ec_LeadfacilitatorNod").val() *
                        0.2);

            //if the customized type value is G.A
            if (
                gaPercentage.val() == "G.A Hybrid" ||
                gaPercentage.val() == "G.A Virtual"
            ) {
                sumecLeadfacilitator +=
                    sumecLeadfacilitator *
                    (document.getElementById("ga-only-dropdown").value / 100);
            }

            
            sumEngagementCost += +sumecLeadfacilitator;
            
            $("#ec_LeadfacilitatorTotal").html(
                currency.format(Math.ceil(sumecLeadfacilitator))
            );

//Co-facilitator
$("#ec_CofacilitatorNoc").val($("#ef_CofaciNoc").val());
$("#ec_CofacilitatorNod").val($("#ef_CofaciNod").val());
$("#ec_CofacilitatorNwh").val($("#ef_CofaciNwh").val());

        sumecCofacilitator +=
            $("#ec_CofacilitatorNoc").val() *
                $("#ec_CofacilitatorPd").val().replace(/,/g, "") *
                $("#ec_CofacilitatorNod").val() +
            $("#ec_CofacilitatorNwh").val() *
                ($("#ec_CofacilitatorNoc").val() *
                    $("#ec_CofacilitatorPd").val().replace(/,/g, "") *
                    $("#ec_CofacilitatorNod").val() *
                    0.2);

        //if the customized type value is G.A
        if (
            gaPercentage.val() == "G.A Hybrid" ||
            gaPercentage.val() == "G.A Virtual"
        ) {
            sumecCofacilitator +=
                sumecCofacilitator *
                (document.getElementById("ga-only-dropdown").value / 100);
        }

    
        sumEngagementCost += +sumecCofacilitator;

        $("#ec_CofacilitatorTotal").html(
            currency.format(Math.ceil(sumecCofacilitator))
        );

//Action Learning Coach
$("#ec_ActionlearningcoachNoc").val($("#ef_ActionLearnNoc").val());
$("#ec_ActionlearningcoachNod").val($("#ef_ActionLearnNod").val());
$("#ec_ActionlearningcoachNwh").val($("#ef_ActionLearnNwh").val());

        sumecActionlearningcoach +=
            $("#ec_ActionlearningcoachNoc").val() *
                $("#ec_ActionlearningcoachPd").val().replace(/,/g, "") *
                $("#ec_ActionlearningcoachNod").val() +
            $("#ec_ActionlearningcoachNwh").val() *
                ($("#ec_ActionlearningcoachNoc").val() *
                    $("#ec_ActionlearningcoachPd").val().replace(/,/g, "") *
                    $("#ec_ActionlearningcoachNod").val() *
                    0.2);

        //if the customized type value is G.A
        if (
            gaPercentage.val() == "G.A Hybrid" ||
            gaPercentage.val() == "G.A Virtual"
        ) {
            sumecActionlearningcoach +=
                sumecActionlearningcoach *
                (document.getElementById("ga-only-dropdown").value / 100);
        }

    
        sumEngagementCost += +sumecActionlearningcoach;

        $("#ec_ActionlearningcoachTotal").html(
            currency.format(Math.ceil(sumecActionlearningcoach))
        );
//Marshal
$("#ec_MarshalNoc").val($("#ef_MarshalNoc").val());
$("#ec_MarshalNod").val($("#ef_MarshalNod").val());
$("#ec_MarshalNwh").val($("#ef_MarshalNwh").val());

        sumecMarshal +=
            $("#ec_MarshalNoc").val() *
                $("#ec_MarshalPd").val().replace(/,/g, "") *
                $("#ec_MarshalNod").val() +
            $("#ec_MarshalNwh").val() *
                ($("#ec_MarshalNoc").val() *
                    $("#ec_MarshalPd").val().replace(/,/g, "") *
                    $("#ec_MarshalNod").val() *
                    0.2);

        //if the customized type value is G.A
        if (
            gaPercentage.val() == "G.A Hybrid" ||
            gaPercentage.val() == "G.A Virtual"
        ) {
            sumecMarshal +=
                sumecMarshal *
                (document.getElementById("ga-only-dropdown").value / 100);
        }

    
        sumEngagementCost += +sumecMarshal;

        $("#ec_MarshalTotal").html(
            currency.format(Math.ceil(sumecMarshal))
        );

//On-site PC
$("#ec_OnsitepcNoc").val($("#ef_OnsitepcNoc").val());
$("#ec_OnsitepcNod").val($("#ef_OnsitepcNod").val());
$("#ec_OnsitepcNwh").val($("#ef_OnsitepcNwh").val());

        sumecOnsitepc +=
            $("#ec_OnsitepcNoc").val() *
                $("#ec_OnsitepcPd").val().replace(/,/g, "") *
                $("#ec_OnsitepcNod").val() +
            $("#ec_OnsitepcNwh").val() *
                ($("#ec_OnsitepcNoc").val() *
                    $("#ec_OnsitepcPd").val().replace(/,/g, "") *
                    $("#ec_OnsitepcNod").val() *
                    0.2);

        //if the customized type value is G.A
        if (
            gaPercentage.val() == "G.A Hybrid" ||
            gaPercentage.val() == "G.A Virtual"
        ) {
            sumecOnsitepc +=
                sumecOnsitepc *
                (document.getElementById("ga-only-dropdown").value / 100);
        }

    
        sumEngagementCost += +sumecOnsitepc;

        $("#ec_OnsitepcTotal").html(
            currency.format(Math.ceil(sumecOnsitepc))
        );
        $("#ec_ProgramSubtotal").html(
            currency.format(
                Math.ceil(
                    sumecLeadfacilitator +
                        sumecCofacilitator +
                        sumecActionlearningcoach +
                        sumecMarshal +
                        sumecOnsitepc
                )
            )
        );

//Documentor
$("#ec_DocumentorNoc").val($("#ef_DocumentorNoc").val());
$("#ec_DocumentorNod").val($("#ef_DocumentorNod").val());
$("#ec_DocumentorNwh").val($("#ef_DocumentorNwh").val());

        sumecDocumentor +=
            $("#ec_DocumentorNoc").val() *
                $("#ec_DocumentorPd").val().replace(/,/g, "") *
                $("#ec_DocumentorNod").val() +
            $("#ec_DocumentorNwh").val() *
                ($("#ec_DocumentorNoc").val() *
                    $("#ec_DocumentorPd").val().replace(/,/g, "") *
                    $("#ec_DocumentorNod").val() *
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

    
        sumEngagementCost += +sumecDocumentor;

        $("#ec_DocumentorTotal").html(
            currency.format(Math.ceil(sumecDocumentor))
        );

//Per Diem

        sumecPerdiem +=
            $("#ec_PerdiemNoc").val() *
                $("#ec_PerdiemPd").val().replace(/,/g, "") *
                $("#ec_PerdiemNod").val() +
            $("#ec_PerdiemNwh").val() *
                ($("#ec_PerdiemNoc").val() *
                    $("#ec_PerdiemPd").val().replace(/,/g, "") *
                    $("#ec_PerdiemNod").val() *
                    0.2);

        //if the customized type value is G.A
        if (
            gaPercentage.val() == "G.A Hybrid" ||
            gaPercentage.val() == "G.A Virtual"
        ) {
            sumecPerdiem +=
                sumecPerdiem *
                (document.getElementById("ga-only-dropdown").value / 100);
        }

    
        sumEngagementCost += +sumecPerdiem;

        $("#ec_PerdiemTotal").html(
            currency.format(Math.ceil(sumecPerdiem))
        );

//Off-program Fee

        sumecOffprogram +=
        $("#ec_OffprogramNoc").val() *
            $("#ec_OffprogramPd").val().replace(/,/g, "") *
            $("#ec_OffprogramNod").val() +
        $("#ec_OffprogramNwh").val() *
            ($("#ec_OffprogramNoc").val() *
                $("#ec_OffprogramPd").val().replace(/,/g, "") *
                $("#ec_OffprogramNod").val() *
                0.2);

        //if the customized type value is G.A
        if (
        gaPercentage.val() == "G.A Hybrid" ||
        gaPercentage.val() == "G.A Virtual"
        ) {
        sumecOffprogram +=
            sumecOffprogram *
            (document.getElementById("ga-only-dropdown").value / 100);
        }


        sumEngagementCost += +sumecOffprogram;

        $("#ec_OffprogramTotal").html(
        currency.format(Math.ceil(sumecOffprogram))
        );

//Program Expenses


//cluster reference
document.getElementById("cluster-dropdown").addEventListener("change", cluster);
document.getElementById("input-notListed").disabled = false;
document.getElementById("core-valueInput").disabled = false;
function cluster() {
    var clusterDropdown = document.getElementById("cluster-dropdown");
    var capability = document.getElementById("capability");
    var culture = document.getElementById("culture");

    //Capability
    if (
        clusterDropdown.value == "Above The Line" ||
        clusterDropdown.value == "Anxiety 2 (Capability)" ||
        clusterDropdown.value == "Art of Asking Questions 1 (Capability)" ||
        clusterDropdown.value == "Assertive Communication 1 (Capability)" ||
        clusterDropdown.value ==
        "Building Effective Relationships 1 (Capability)" ||
        clusterDropdown.value == "Business Analytics 1 (Capability)" ||
        clusterDropdown.value == "Business Storytelling" ||
        clusterDropdown.value == "Change Management 2 (Capability)" ||
        clusterDropdown.value == "Choose Flourish 1 (Capability)" ||
        clusterDropdown.value == "Collaborative Leadership 2 (Capability)" ||
        clusterDropdown.value == "Communicate for Success" ||
        clusterDropdown.value == "Communicating Across the Organization" ||
        clusterDropdown.value == "Communication" ||
        clusterDropdown.value == "Competency Building" ||
        clusterDropdown.value == "Conflict Resolution" ||
        clusterDropdown.value == "Create Authentic Connections" ||
        clusterDropdown.value == "Creativity" ||
        clusterDropdown.value == "Emotional Intelligence" ||
        clusterDropdown.value == "Enhance My Credibility" ||
        clusterDropdown.value == "Everyday Innovation" ||
        clusterDropdown.value == "Facilitating Virtual Meetings" ||
        clusterDropdown.value == "Feedback" ||
        clusterDropdown.value == "Growth Mindset" ||
        clusterDropdown.value == "Improv 1 (Capability)" ||
        clusterDropdown.value == "Influencing" ||
        clusterDropdown.value == "Innovation" ||
        clusterDropdown.value == "Knowledge Management" ||
        clusterDropdown.value == "Leading Virtual Teams" ||
        clusterDropdown.value == "Leading with Questions 2 (Capability)" ||
        clusterDropdown.value == "Learning Evolution" ||
        clusterDropdown.value == "Learning How to Set Goals" ||
        clusterDropdown.value == "Mental Health" ||
        clusterDropdown.value == "Mindfulness" ||
        clusterDropdown.value == "Owning My Career" ||
        clusterDropdown.value == "Persuasive Communication" ||
        clusterDropdown.value == "Problem-Solving" ||
        clusterDropdown.value == "Productivity" ||
        clusterDropdown.value == "Project Management" ||
        clusterDropdown.value == "Psychological First Aid" ||
        clusterDropdown.value == "Radical Candor" ||
        clusterDropdown.value == "Stakeholder Management" ||
        clusterDropdown.value == "Strategic Execution" ||
        clusterDropdown.value == "Strategic Agility" ||
        clusterDropdown.value == "Talent Building" ||
        clusterDropdown.value == "Work From Home"
    ) {
        document.getElementById("core-valueInput").value = "Capability";
        document.getElementById("input-notListed").disabled = true;
        document.getElementById("div-notListed").style.visibility = "hidden";
        document.getElementById("core-valueInput").disabled = true;

        //Culture
    } else if (
        clusterDropdown.value == "Action Learning" ||
        clusterDropdown.value == "Anxiety 1 (Culture)" ||
        clusterDropdown.value == "Business Transformation 1 (Culture)" ||
        clusterDropdown.value == "Diversity & Inclusion" ||
        clusterDropdown.value == "Find Your Why 2 (Culture)" ||
        clusterDropdown.value == "Habit Formation" ||
        clusterDropdown.value ==
        "Organizational Development (OD) 1 (Culture)" ||
        clusterDropdown.value == "Psychological Safety 1 (Culture)" ||
        clusterDropdown.value == "Well-being"
    ) {
        document.getElementById("core-valueInput").value = "Culture";
        document.getElementById("input-notListed").disabled = true;
        document.getElementById("div-notListed").style.visibility = "hidden";
        document.getElementById("core-valueInput").disabled = true;

        //Leadership
    } else if (
        clusterDropdown.value == "Art of Asking Questions 2 (Leadership)" ||
        clusterDropdown.value == "Assertive Communication 2 (Leadership)" ||
        clusterDropdown.value ==
        "Building Effective Relationships 2 (Leadership)" ||
        clusterDropdown.value == "Business Transformation 2 (Leadership)" ||
        clusterDropdown.value == "Change Management 1 (Leadership)" ||
        clusterDropdown.value == "Choose to Flourish 2 (Leadership)" ||
        clusterDropdown.value == "Coaching" ||
        clusterDropdown.value == "Collaborative Leadership 1 (Leadership)" ||
        clusterDropdown.value == "Find Your Why 1 (Leadership)" ||
        clusterDropdown.value == "Future Proof Leadership" ||
        clusterDropdown.value == "Leadership Brand" ||
        clusterDropdown.value == "Leadership Presence" ||
        clusterDropdown.value == "Leadership Hybrid Teams" ||
        clusterDropdown.value == "Leading with Emotional Intelligence" ||
        clusterDropdown.value == "Leading with Questions 1 (Leadership)" ||
        clusterDropdown.value == "Mentoring" ||
        clusterDropdown.value == "Mission & Vision Review 2 (Leadership)" ||
        clusterDropdown.value == "Psychological Safety 2 (Leadership)" ||
        clusterDropdown.value == "Purpose" ||
        clusterDropdown.value == "Situational Leadership" ||
        clusterDropdown.value == "Strategic Leadership" ||
        clusterDropdown.value == "Strengths"
    ) {
        document.getElementById("core-valueInput").value = "Leadership";
        document.getElementById("input-notListed").disabled = true;
        document.getElementById("div-notListed").style.visibility = "hidden";
        document.getElementById("core-valueInput").disabled = true;

        //Strategy
    } else if (
        clusterDropdown.value == "Business Analytics 2 (Strategy)" ||
        clusterDropdown.value == "Goal Setting" ||
        clusterDropdown.value == "Mission & Vision Review 1 (Strategy)" ||
        clusterDropdown.value ==
        "Organizational Development (OD) 2 (Capability)" ||
        clusterDropdown.value == "Visioning" ||
        clusterDropdown.value == "World Cafe"
    ) {
        document.getElementById("core-valueInput").value = "Strategy";
        document.getElementById("input-notListed").disabled = true;
        document.getElementById("div-notListed").style.visibility = "hidden";
        document.getElementById("core-valueInput").disabled = true;

        //Teams
    } else if (
        clusterDropdown.value == "Game Night" ||
        clusterDropdown.value == "Heroes Assemble" ||
        clusterDropdown.value == "Improv 2 (Teams)" ||
        clusterDropdown.value == "Lip Sync Battle" ||
        clusterDropdown.value == "Squid Game" ||
        clusterDropdown.value == "Team Engagement" ||
        clusterDropdown.value == "The Heist" ||
        clusterDropdown.value == "The Lab" ||
        clusterDropdown.value == "Virtual Team Building"
    ) {
        document.getElementById("core-valueInput").value = "Teams";
        document.getElementById("input-notListed").disabled = true;
        document.getElementById("input-notListed").style.visibility = "hidden";
        document.getElementById("core-valueInput").disabled = true;

        //Society
    } else if (clusterDropdown.value == "Parenting") {
        document.getElementById("core-valueInput").value = "Society";
        document.getElementById("input-notListed").disabled = true;
        document.getElementById("div-notListed").style.visibility = "hidden";
        document.getElementById("core-valueInput").disabled = true;

        //Not listed
    } else {
        document.getElementById("core-valueInput").value = "Cluster";
        document.getElementById("input-notListed").disabled = false;
        document.getElementById("div-notListed").style.visibility = "";
        document.getElementById("core-valueInput").disabled = false;
    }
}

//To be announce
document.getElementById("dcbeCheck").addEventListener("click", myFunction);
function myFunction() {
    var checkBox = document.getElementById("dcbeCheck");
    var DatesCoveredByEngagement = document.getElementById("dcbe");
    if (checkBox.checked == false) {
        DatesCoveredByEngagement.style.visibility = "";
    } else {
        DatesCoveredByEngagement.style.visibility = "hidden";
    }
}

//datepicker
$(function () {
    $("#datepicker").datepicker();
    $("#datepicker").on("change", function () {
        $("#datepicker").datepicker("option", "dateFormat", "MM d, yy");
    });
});
