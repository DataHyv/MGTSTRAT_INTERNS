let currency = Intl.NumberFormat("en-US");
//default value in ANALYST
document.getElementById("ef_AnalystHf").value = currency.format(
    Math.ceil(5000)
);
//default value CO-FACILITATOR
document.getElementById("ef_CofaciHf").value = currency.format(
    Math.ceil(5000)
);
//default value in MODERATOR
document.getElementById("ef_ModeratorHf").value = currency.format(
    Math.ceil(3500)
);
//default value in PRODUCER
document.getElementById("ef_ProducerHf").value = currency.format(
    Math.ceil(2500)
);
//default value in DOCUMENTOR
document.getElementById("ef_DocumentorHf").value = currency.format(
    Math.ceil(2500)
);

document.getElementById("ec_AnalystHf1").value = currency.format(
    Math.ceil(1700)
);
// document.getElementById("ec_LeadfacilitatorHf1").value = currency.format(
//     Math.ceil(3000)
// );
// document.getElementById("ec_LeadconsultantHf1").value = currency.format(
//     Math.ceil(0.85 * $("#ec_LeadfacilitatorHf1").val().replace(/\₱|,/g, ""))
// );
// document.getElementById("ec_DesignerHf1").value = currency.format(
//     Math.ceil(2250)
// );
// document.getElementById("ec_CofacilitatorHf1").value = currency.format(
//     Math.ceil(1800)
// );
// document.getElementById("ec_ProducerHf").value = currency.format(
//     Math.ceil(550)
// );
document.getElementById("ec_DocumentorHf1").value = currency.format( Math.ceil(700) );
document.getElementById("ec_ProgramHf1").value = currency.format( Math.ceil(1000) );
document.getElementById("ec_Programexpense").value = 2 + "%";

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
/* $(document).on(
    "load change click",
    "#ec_tableEngagementFees, #ec_tableEngagementCost",
    function () {
        document.getElementById("ec_LeadconsultantNoc1").value = $("#ef_LeadconsultantNoc1").val();
        document.getElementById("ec_LeadconsultantNoh1").value = $("#ef_LeadconsultantNoh1").val();
        document.getElementById("ec_LeadconsultantNwh1").value = $("#ef_LeadconsultantNwh1").val();
        document.getElementById("ec_AnalystNoc1").value = $("#ef_AnalystNoc1").val();
        document.getElementById("ec_AnalystNoh1").value = $("#ef_AnalystNoh1").val();
        document.getElementById("ec_AnalystNwh1").value = $("#ef_AnalystNwh1").val();
        document.getElementById("ec_DesignerNoc1").value = $("#ef_DesignerNoc1").val();
        document.getElementById("ec_DesignerNoh1").value = $("#ef_DesignerNoh1").val();
        document.getElementById("ec_DesignerNwh1").value = $("#ef_DesignerNwh1").val();
        document.getElementById("ec_LeadfacilitatorNoc1").value = $("#ef_LeadfacilitatorNoc1").val();
        document.getElementById("ec_LeadfacilitatorNoh1").value = $("#ef_LeadfacilitatorNoh1").val();
        document.getElementById("ec_LeadfacilitatorNwh1").value = $("#ef_LeadfacilitatorNwh1").val();
        document.getElementById("ec_CofacilitatorNoc1").value = $("#ef_CofaciNoc1").val();
        document.getElementById("ec_CofacilitatorNoh1").value = $("#ef_CofaciNoh1").val();
        document.getElementById("ec_CofacilitatorNwh1").value = $("#ef_CofaciNwh1").val();
        document.getElementById("ec_ModeratorNoc1").value = $("#ef_ModeratorNoc1").val();
        document.getElementById("ec_ModeratorNoh1").value = $("#ef_ModeratorNoh1").val();
        document.getElementById("ec_ModeratorNwh1").value = $("#ef_ModeratorNwh1").val();
        document.getElementById("ec_ProducerNoc1").value = $("#ef_ProducerNoc1").val();
        document.getElementById("ec_ProducerNoh1").value = $("#ef_ProducerNoh1").val();
        document.getElementById("ec_ProducerNwh1").value = $("#ef_ProducerNwh1").val();
        document.getElementById("ec_DocumentorNoc1").value = $("#ef_DocumentorNoc1").val();
        document.getElementById("ec_DocumentorNoh1").value = $("#ef_DocumentorNoh1").val();
        document.getElementById("ec_DocumentorNwh1").value = $("#ef_DocumentorNwh1").val();
    }
); */

$(document).on(
    "load change click",
    "#tableLeadconsultant input, #tableLeadconsultant select",
    function () {
        document.getElementById("ec_LeadconsultantNoc1").value = $("#ef_LeadconsultantNoc1").val();
        document.getElementById("ec_LeadconsultantNoh1").value = $("#ef_LeadconsultantNoh1").val();
        document.getElementById("ec_LeadconsultantNwh1").value = $("#ef_LeadconsultantNwh1").val();
    }
);

$(document).on(
    "load change click",
    "#tableAnalyst input, #tableAnalyst select",
    function () {
        document.getElementById("ec_AnalystNoc1").value = $("#ef_AnalystNoc1").val();
        document.getElementById("ec_AnalystNoh1").value = $("#ef_AnalystNoh1").val();
        document.getElementById("ec_AnalystNwh1").value = $("#ef_AnalystNwh1").val();
    }
);

$(document).on(
    "load change click",
    "#tableDesigner input, #tableDesigner select",
    function () {
        document.getElementById("ec_DesignerNoc1").value = $("#ef_DesignerNoc1").val();
        document.getElementById("ec_DesignerNoh1").value = $("#ef_DesignerNoh1").val();
        document.getElementById("ec_DesignerNwh1").value = $("#ef_DesignerNwh1").val();
    }
);

$(document).on(
    "load change click",
    "#tableLeadfaci input, #tableLeadfaci select",
    function () {
        document.getElementById("ec_LeadfacilitatorNoc1").value = $("#ef_LeadfacilitatorNoc1").val();
        document.getElementById("ec_LeadfacilitatorNoh1").value = $("#ef_LeadfacilitatorNoh1").val();
        document.getElementById("ec_LeadfacilitatorNwh1").value = $("#ef_LeadfacilitatorNwh1").val();
    }
);

$(document).on(
    "load change click",
    "#tableCofaci input, #tableCofaci select",
    function () {
        document.getElementById("ec_CofacilitatorNoc1").value = $("#ef_CofaciNoc1").val();
        document.getElementById("ec_CofacilitatorNoh1").value = $("#ef_CofaciNoh1").val();
        document.getElementById("ec_CofacilitatorNwh1").value = $("#ef_CofaciNwh1").val();
    }
);

$(document).on(
    "load change click",
    "#tableModerator input, #tableModerator select",
    function () {
        document.getElementById("ec_ModeratorNoc1").value = $("#ef_ModeratorNoc1").val();
        document.getElementById("ec_ModeratorNoh1").value = $("#ef_ModeratorNoh1").val();
        document.getElementById("ec_ModeratorNwh1").value = $("#ef_ModeratorNwh1").val();
    }
);

$(document).on(
    "load change click",
    "#tableProducer input, #tableProducer select",
    function () {
        document.getElementById("ec_ProducerNoc1").value = $("#ef_ProducerNoc1").val();
        document.getElementById("ec_ProducerNoh1").value = $("#ef_ProducerNoh1").val();
        document.getElementById("ec_ProducerNwh1").value = $("#ef_ProducerNwh1").val();
    }
);

$(document).on(
    "load change click",
    "#tableDocumentor input, #tableDocumentor select",
    function () {
        document.getElementById("ec_DocumentorNoc1").value = $("#ef_DocumentorNoc1").val();
        document.getElementById("ec_DocumentorNoh1").value = $("#ef_DocumentorNoh1").val();
        document.getElementById("ec_DocumentorNwh1").value = $("#ef_DocumentorNwh1").val();
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
    "load keyup ",
    // "load keyup change click",
    "#ec_tableEngagementFees",
    function () {
       var totalPackage = document.getElementById("ef_Totalpackage");
       var totalPackageStandard = $("#total-standard").html();

       if (document.activeElement !== totalPackage) {
          totalPackage.value = totalPackageStandard;
       }        
    }
);

document.addEventListener("keypress", function (e) {
    if (e.keyCode === 13 || e.which === 13) {
        e.preventDefault();
        return false;
    }
});

//ROSTER RATE AUTO INPUT

// $(document).on("load blur", "#main, #ec_tableEngagementFees",
$(document).ready(function () {
    // LEAD CONSULTANT
    leadConsultant = 0;
    $("#ec_tableLeadConsultant > tr").each(function () {
        leadConsultant++;
        let roster = $(`#roster${leadConsultant}`).val().trim();
        hourlyFees = 2550;
        if (roster == '' || roster.toUpperCase() == 'TBA') {
            document.getElementById(`roster${leadConsultant}`).value = 'TBA';
            $(`#ec_LeadconsultantHf${leadConsultant}`).val( currency.format(Math.ceil(hourlyFees)) );
            
        } else {
            filterConsultant(`roster${leadConsultant}`, `ec_LeadconsultantHf${leadConsultant}`, `leadConsultant`);
        }
    });

    // DESIGNER
    designer = 0;
    $("#ec_TableDesigner > tr").each(function () {
        designer++;
        let roster = $(`#roster2${designer}`).val().trim();
        hourlyFees = 2250;        
        if (roster == '' || roster.toUpperCase() == 'TBA') {
            document.getElementById(`roster2${designer}`).value = 'TBA';
            $(`#ec_DesignerHf${designer}`).val( currency.format(Math.ceil(hourlyFees)) );
        } else {
            filterConsultant(`roster2${leadConsultant}`, `ec_DesignerHf${leadConsultant}`, `designer`);
        }        
    });

    // LEAD FACILITATOR
    leadfaci = 0;
    $("#ec_TableLeadfaci > tr").each(function () {
        leadfaci++;
        let roster = $(`#roster3${leadfaci}`).val().trim();
        hourlyFees = 3000;
        
        if (roster == '' || roster.toUpperCase() == 'TBA') {
            document.getElementById(`roster3${leadfaci}`).value = 'TBA';
            $(`#ec_LeadfacilitatorHf${leadfaci}`).val( currency.format(Math.ceil(hourlyFees)) );
        } else {
            filterConsultant(`roster3${leadConsultant}`, `ec_LeadfacilitatorHf${leadConsultant}`, `leadFacilitator`);
        }  
        
    });

    // CO-LEAD FACILITATOR
    colead = 0;
    $("#ec_TableCoLeadfaci > tr").each(function () {
        colead++;
        let roster = $(`#roster4${colead}`).val().trim();
        hourlyFees = 1900;
        if (roster == '' || roster.toUpperCase() == 'TBA') {
            document.getElementById(`roster4${colead}`).value = 'TBA';
            $(`#ec_CoLeadfacilitatorHf${colead}`).val( currency.format(Math.ceil(hourlyFees)) );
        } else {
            filterConsultant(`roster4${leadConsultant}`, `ec_CoLeadfacilitatorHf${leadConsultant}`, `coLead`);
        }          
    });

    // AL Coach
    alcoach = 0;
    $("#ec_TableAlCoach > tr").each(function () {
        alcoach++;
        let roster = $(`#roster10${alcoach}`).val().trim();
        hourlyFees = 1900;
        if (roster == '' || roster.toUpperCase() == 'TBA') {
            document.getElementById(`roster10${alcoach}`).value = 'TBA';
            $(`#ec_AlCoachHf${alcoach}`).val( currency.format(Math.ceil(hourlyFees)) );
        } else {
            filterConsultant(`roster10${leadConsultant}`, `ec_AlCoachHf${leadConsultant}`, `alCoach`);
        }         
    });

    // CO-FACILITATOR
    cofaci = 0;
    $("#ec_TableCofaci > tr").each(function () {
        cofaci++;
        let roster = $(`#roster5${cofaci}`).val().trim();
        hourlyFees = 1800;
        if (roster == '' || roster.toUpperCase() == 'TBA') {
            document.getElementById(`roster5${cofaci}`).value = 'TBA';
            $(`#ec_CofacilitatorHf${cofaci}`).val( currency.format(Math.ceil(hourlyFees)) );
        } else {
            filterConsultant(`roster5${leadConsultant}`, `ec_CofacilitatorHf${leadConsultant}`, `coFaci`);
        }  
    });

    // MODERATOR
    moderator = 0;
    $("#ec_TableModerator > tr").each(function () {
        moderator++;
        let roster = $(`#roster6${moderator}`).val().trim();
        // hourlyFees = 800;
        hourlyFees = 1100;
        if (roster == '' || roster.toUpperCase() == 'TBA') {
            document.getElementById(`roster6${moderator}`).value = 'TBA';
            $(`#ec_ModeratorHf${moderator}`).val( currency.format(Math.ceil(hourlyFees)) );
        } else {
            filterConsultant(`roster6${leadConsultant}`, `ec_ModeratorHf${leadConsultant}`, `moderator`);
        }  
    });

    // PRODUCER
    producer = 0;
    $("#ec_TableProducer > tr").each(function () {
        producer++;
        let roster = $(`#roster7${producer}`).val().trim();
        hourlyFees = 550;       
        if (roster == '' || roster.toUpperCase() == 'TBA') {
            document.getElementById(`roster7${producer}`).value = 'TBA';
            $(`#ec_ProducerHf${producer}`).val( currency.format(Math.ceil(hourlyFees)) );
        } else {
            filterConsultant(`roster7${leadConsultant}`, `ec_ProducerHf${leadConsultant}`, `producer`);
        }  
    });

});