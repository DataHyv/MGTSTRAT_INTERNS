$(document).on('change keyup', '#main', function () {
    // var customizationFee = 0;
    // $('#tableLeadconsultant').on('change, keyup', function(){
    //     customizationFee =   ($('#ef_LeadconsultantHf').val() * $('#ef_customizationFeeNos').val()) + ($('#ef_LeadconsultantHf').val() * $('#ef_customizationFeeNsw').val() * 0.2);
    //     $('#ef_customizationFeeTotal').html(customizationFee);
    // });

   var customizationFee = 0;
    $("#tableLeadconsultant").each(function () {
        customizationFee =   ($('#ef_LeadconsultantHf').val() * $('#ef_customizationFeeNos').val()) + ($('#ef_LeadconsultantHf').val() * $('#ef_customizationFeeNsw').val() * 0.2);
        $('#ef_customizationFeeTotal').html(customizationFee);
        console.log(customizationFee);
    });
});