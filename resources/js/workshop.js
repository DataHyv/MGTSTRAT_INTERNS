$(document).on('change keyup', '#main', function () {

    // Customization Fee
    customizationFee = 0;
    $("#tableLeadconsultant").each(function () {
        customizationFee =   ($('#ef_LeadconsultantHf').val() * $('#ef_customizationFeeNos').val()) + ($('#ef_LeadconsultantHf').val() * ($('#ef_customizationFeeNsw').val() * 0.2));
        $('#ef_customizationFeeTotal').html('₱' + customizationFee.toFixed(2).toString().replace(/\B(?=(\d{3})+(?!\d))/g, ","));
    });

    // Subtotal for Customization
    subtotalCustomization = 0;
    $("#tableTotal").each(function () {
        subtotalCustomization += customizationFee;
        $('#subtotalCustomization').html('₱' + subtotalCustomization.toFixed(2).toString().replace(/\B(?=(\d{3})+(?!\d))/g, ","));
    });

    // Package, up to 30 pax (P31.5K, P35K, P40.5K, P45K)
    package1Fee = 0;
    $("#tableLeadconsultant").each(function () {
        package1Fee =   ($('#f_package1FeePf').val() * $('#ef_package1FeeNos').val()) + ($('#f_package1FeePf').val() * ($('#ef_package1FeeNsw').val() * 0.2));
        $('#ef_package1FeeTotal').html('₱' + package1Fee.toFixed(2).toString().replace(/\B(?=(\d{3})+(?!\d))/g, ","));
    });

    // Package, 31-50 pax (P40.5K, P45K, P49.5K, P55K)
    package2Fee = 0;
    $("#tableLeadconsultant").each(function () {
        package2Fee =   ($('#ef_package2FeePfv').val() * $('#ef_package2FeeNos').val()) + ($('#ef_package2FeePfv').val() * ($('#eef_package2FeeNsw').val() * 0.2));
        $('#ef_package2FeeTotal').html('₱' + package2Fee.toFixed(2).toString().replace(/\B(?=(\d{3})+(?!\d))/g, ","));
    });

    // Producer (5K, 7.5K)
    producerFee = 0;
    $("#tableLeadconsultant").each(function () {
        producerFee =   ($('#ef_producerFeePfv').val() * $('#ef_producerFeeNoc').val()) + ($('#ef_producerFeePfv').val() * ($('#ef_producerFeeNsw').val() * 0.2));
        $('#ef_producerFeeTotal').html('₱' + producerFee.toFixed(2).toString().replace(/\B(?=(\d{3})+(?!\d))/g, ","));
    });

    // Subtotal for Program
    subtotalProgram = 0;
    $("#tableTotal").each(function () {
        subtotalProgram = package1Fee + package2Fee + producerFee;
        $('#subtotalProgram').html('₱' + subtotalProgram.toFixed(2).toString().replace(/\B(?=(\d{3})+(?!\d))/g, ","));
    });

    // Total Standard Fees
    standardTotal = 0;
    $("#tableTotal").each(function () {
        standardTotal = subtotalCustomization + subtotalProgram;
        $('#mg_standard_total').html('₱' + standardTotal.toFixed(2).toString().replace(/\B(?=(\d{3})+(?!\d))/g, ","));
    });

});