$(document).on(
    "load change keyup click",
    "#main",
    function () {

    let currency = Intl.NumberFormat("en-US");

    sum = 0;
    subtotal = 0;

    $("#consulting > tr").each(function () {
        efConsultingSum = +$(this).find(`.package-fees`).val();
        sum += efConsultingSum;

        //lead consultant engagement fees sum
        $(this).find("#total").html(currency.format(Math.ceil(efConsultingSum)));
        subtotal += parseInt($(this).find("#total").text().replace(/,/g, ""));

        //Assign the value of lead consultant to the sum of engagement fees
        $('#subtotal').html(currency.format(Math.ceil(subtotal)));

        //clear the assignment operator to 0
        subtotal = 0
    });

    $(".sum").each(function () {

        efPackageSum = ($(this).find(`.package-fees`).val() * $(this).find(`.number-session`).val()) + ($(this).find(`.package-fees`).val() * ($(this).find(`.nswh`).val() * 0.2));

        sum += efPackageSum;

        // lead consultant engagement fees sum
        $(this).find(".total").text(currency.format(Math.ceil(efPackageSum)));
        subtotal += parseInt($(this).find(".total").text().replace(/,/g, ""));

        //Assign the value of lead consultant to the sum of engagement fees
        $('.subtotal').html(currency.format(Math.ceil(subtotal)));

        //clear the assignment operator to 0
        // subtotal = 0
    });

    $('.standard-fees').html(currency.format(Math.ceil(sum)));
});
