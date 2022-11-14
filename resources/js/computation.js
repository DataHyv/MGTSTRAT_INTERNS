$(document).on("load change keyup click", "#main", function () {
    let currency = Intl.NumberFormat("en-US");

    sum = 0;
    subtotal = 0;

    /********************************************************
     ******************* ENGAGEMENT FEE *********************
     *********************************************************/
    $("#engagement-fees > #consulting > tr").each(function () {
        efConsultingSum = +$(this).find(`.package-fees`).val();
        sum += efConsultingSum;

        //lead consultant engagement fees sum
        $(this)
            .find("#total")
            .html(currency.format(Math.ceil(efConsultingSum)));
        subtotal += parseInt($(this).find("#total").text().replace(/,/g, ""));

        //Assign the value of lead consultant to the sum of engagement fees
        $("#subtotal").html(currency.format(Math.ceil(subtotal)));
    });
    //clear the subtotal assignment operator to 0
    subtotal = 0;

    $("#engagement-fees > tbody > .sum").each(function () {
        engagementFees =
            $(this).find(`.package-fees`).val() *
                $(this).find(`.number-session`).val() +
            $(this).find(`.package-fees`).val() *
                ($(this).find(`.nswh`).val() * 0.2);

        sum += engagementFees;

        // lead consultant engagement fees sum
        $(this)
            .find(".total")
            .text(currency.format(Math.ceil(engagementFees)));
        subtotal += parseInt($(this).find(".total").text().replace(/,/g, ""));

        //Assign the value of lead consultant to the sum of engagement fees
        $(".subtotal").html(currency.format(Math.ceil(subtotal)));
    });
    subtotal = 0; //clear the subtotal assignment operator to 0
    $(".standard-fees").html(currency.format(Math.ceil(sum))); //STANDARD FEES

    /********************************************************
     ******************* ENGAGEMENT COST *********************
     *********************************************************/
    // COMMISSION
    $("#engagementCost > #commission > .sum").each(function () {
        // COMMISSION SUM
        commission = (+sum / 100) * $(this).find(`.package-fees`).val();

        // TOTAL FEE
        $(this)
            .find(".total")
            .text(currency.format(Math.ceil(+commission)));
        // TOTAL FEE SUM
        subtotal += parseInt($(this).find(".total").text().replace(/,/g, ""));

        // SUBTOTAL
        $(".commission .subtotal").html(currency.format(Math.ceil(subtotal)));
    });
    subtotal = 0; //clear the subtotal assignment operator to 0

    // CONSULTING AND DESIGN
    $("#engagementCost > .consulting > .sum").each(function () {
        // COMMISSION SUM
        engagementCost =
            $(this).find(`.package-fees`).val().replace(/,/g, "") *
            $(this).find(`.number-session`).val().replace(/,/g, "");

        // TOTAL FEE
        $(this)
            .find(".total")
            .text(currency.format(Math.ceil(+engagementCost)));

        // TOTAL FEE SUM
        subtotal += parseInt($(this).find(".total").text().replace(/,/g, ""));

        // SUBTOTAL
        $(".consulting .subtotal").html(currency.format(Math.ceil(subtotal)));
    });

    // CONSULTING AND DESIGN
    $("#engagementCost > .consulting > .sum").each(function () {
        // COMMISSION SUM
        engagementCost =
            $(this).find(`.package-fees`).val().replace(/,/g, "") *
            $(this).find(`.number-session`).val().replace(/,/g, "");

        // TOTAL FEE
        $(this)
            .find(".total")
            .text(currency.format(Math.ceil(+engagementCost)));

        // TOTAL FEE SUM
        subtotal += parseInt($(this).find(".total").text().replace(/,/g, ""));

        // SUBTOTAL
        $(".consulting .subtotal").html(currency.format(Math.ceil(subtotal)));
    });
});
