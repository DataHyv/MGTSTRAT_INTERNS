$(document).on('click load change keyup', '#main, #engagement-fees, #engagementCost', function () {

    overallTotal = 0;
    customizationFee = 0;
    $("#consulting").each(function () {
        customizationFee =   ($('#ef_LeadconsultantHf').val() * $('#ef_customizationFeeNos').val()) + ($('#ef_LeadconsultantHf').val() * $('#ef_customizationFeeNsw').val() * 0.2);
        $('#webinar_customizationTotal').html(customizationFee.toFixed().toString().replace(/\B(?=(\d{3})+(?!\d))/g, ","));
        overallTotal += customizationFee;
    });

     // Subtotal Customization
    subtotalConsulting_DesignFee = 0;
     consulting_designFee = 0;
    $("#tablesubtotalCustomization").each(function () {
         consulting_designFee += customizationFee;
        $('#subtotal').html(consulting_designFee.toFixed().toString().replace(/\B(?=(\d{3})+(?!\d))/g, ","));
        subtotalConsulting_DesignFee += consulting_designFee;
    });

    // Package 1 Total Fee
    totalPackage1Fee = 0;
    package1Fee = 0;
    $("#tableLeadconsultant").each(function () {
        package1Fee = ($('#f_package1FeePf').val() * $('#ef_package1FeeNos').val()) + ($('#f_package1FeePf').val() * $('#ef_package1FeeNsw').val() * 0.2);
        ($('#ef_package1FeeTotal')).html(package1Fee.toFixed().toString().replace(/\B(?=(\d{3})+(?!\d))/g, ","));
        totalPackage1Fee += package1Fee;
    });

    // Package 2 Total Fee
    totalPackage2Fee = 0;
    package2Fee = 0;
    $("#tableLeadconsultant").each(function () {
        package2Fee = ($('#ef_package2FeePfv').val() * $('#ef_package2FeeNos').val()) + ($('#ef_package2FeePfv').val() * $('#eef_package2FeeNsw').val() * 0.2);
        ($('#ef_package2FeeTotal')).html(package2Fee.toFixed().toString().replace(/\B(?=(\d{3})+(?!\d))/g, ","));
        totalPackage2Fee += package2Fee;
    });

    totalPackage3Fee = 0;
    package3Fee = 0;
    $("#tableLeadconsultant").each(function () {
        package3Fee = ($('#ef_package3FeePfv').val() * $('#ef_package3FeeNos').val()) + ($('#ef_package3FeePfv').val() * $('#eef_package3FeeNsw').val() * 0.2);
        ($('#ef_package3FeeTotal')).html(package3Fee.toFixed().toString().replace(/\B(?=(\d{3})+(?!\d))/g, ","));
        totalPackage3Fee += package3Fee;
    });

    // Producer Total Fee
    totalProducerFee = 0;
    producerFee = 0;
    $("#producer").each(function () {
        producerFee = ($('#ef_producerFeePfv').val() * $('#ef_producerFeeNoc').val()) + ($('#ef_producerFeePfv').val() * $('#ef_producerFeeNsw').val() * 0.2);
        ($('#ef_producerFeeTotal')).html(producerFee.toFixed().toString().replace(/\B(?=(\d{3})+(?!\d))/g, ","));
        totalProducerFee += producerFee;
    });

    // Subtotal Program
    subTotalProgram = 0;
    ProgramFee = 0;
    $("#tableSubtotalProgram").each(function () {
        ProgramFee = package1Fee + package2Fee + package3Fee + producerFee;
        $('#subtotalProgram').html(ProgramFee.toFixed().toString().replace(/\B(?=(\d{3})+(?!\d))/g, ","));
        subTotalProgram += ProgramFee;
    });

    // Total Standard Fees
    totalStandardFees = 0;
    standardFees = 0;
    $("#tableStandardTotal").each(function () {
        standardFees = subtotalConsulting_DesignFee + subTotalProgram;
        $('#mg_standard_total').html(standardFees.toFixed().toString().replace(/\B(?=(\d{3})+(?!\d))/g, ","));
        totalStandardFees += standardFees;
    });

    // TOTAL PACKAGE

        // should include calculation for discount
        // there's also workshop-update.js for update form

    // Perform the calculation and get the result
    const result = subtotalConsulting_DesignFee + subTotalProgram;
     // Format the result with commas and a fixed number of decimal places
  const formattedResult = result.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");

    // Update the value attribute of the input element
    document.getElementById("mg_input_totalPackages").value = formattedResult;
    


    //---------------------------------------ENGAGEMENTCOST---------------------------------------------
    //totalsales
    costTotal = 0;
    sale = 0;
    $("#salescommission > tr").each(function () {
            sale =   overallTotal * $('#ef_LeadconsultantHf1').val(); 
            $(this).find('#salestotal').html(sale.toFixed().toString().replace(/\B(?=(\d{3})+(?!\d))/g, ","));
            costTotal += sale;
    });


    //referrals
    refTotal = 0;
    referral = 0;
    $("#referralcommission > tr").each(function () {
        referral =   overallTotal * $('#ef_LeadconsultantHf2').val(); 
        $(this).find('#referraltotal').html(referral.toFixed().toString().replace(/\B(?=(\d{3})+(?!\d))/g, ","));
        refTotal += referral;
    });


    //engagement manager
    manTotal = 0;
    manager = 0;
    $("#commissionManager > tr").each(function () {
        manager =   overallTotal * $('#webinar_engagementManager').val();
        $(this).find('#comissionTotal').html(manager.toFixed().toString().replace(/\B(?=(\d{3})+(?!\d))/g, ","));
        manTotal += manager;
    });


    // COMISSION subtotal
    comsubTotal = 0;
    comTotal = 0;
    $("#comissionsubTotal").each(function () {
        comTotal = costTotal + refTotal +  manTotal ;
        $('#comissionsubTotal').html(comTotal.toFixed().toString().replace(/\B(?=(\d{3})+(?!\d))/g, ","));
        comsubTotal += comTotal;
    });



    //Customization Fee
    customizationTotal = 0;
    designFee = 0;
    $("#tableofCustomization > tr").each(function () {
        designFee =  $(this).find('#webinar_CustomizationHf').val() * $(this).find('#webinar_CustomizationNoh').val();
        $(this).find('#consultingTotal').html(designFee.toFixed().toString().replace(/\B(?=(\d{3})+(?!\d))/g, ","));
        customizationTotal += designFee;
    });


    //creatorFees
    creTotal = 0;
    creatorFee = 0;
    $("#tableofCreator > tr").each(function () {
        creatorFee = $(this).find('#ef_LeadconsultantHf3').val() * $(this).find('#webinar_CreatorNoh').val();
        $(this).find('#webinar_CreatorTotal').html(creatorFee.toFixed().toString().replace(/\B(?=(\d{3})+(?!\d))/g, ","));
        creTotal += creatorFee;
    });


    //1. CONSULTING/DESIGN subtotal
    subTotal = 0;
    designTotal = 0;
    $("#webinar_DesignsSubtotal").each(function () {
        designTotal = customizationTotal + creTotal;
        $('#DesignsSubtotal').html(designTotal.toFixed().toString().replace(/\B(?=(\d{3})+(?!\d))/g, ","));
        subTotal += designTotal;
    });


    //2.PROGRAM
    programTotal = 0;
    facilitatorFee = 0;
    $("#tableofLeadFacilitator > tr").each(function () {
        //    ((B46*C46)+((B46*C46)*(D46*0.2)))*1.3
        // (($(this).find('#webinar_LeadfacilitatorsHf').val() * $(this).find('#webinar_LeadfacilitatorsNoh').val())+(($(this).find('#webinar_LeadfacilitatorsHf').val() * $(this).find('#webinar_LeadfacilitatorsNoh').val())* ($(this).find('#webinar_LeadfacilitatorsNwh').val() * 0.2))) * 1.3;
           
        facilitatorFee = (($(this).find('#webinar_LeadfacilitatorsHf').val() * $(this).find('#webinar_LeadfacilitatorsNoh').val())+(($(this).find('#webinar_LeadfacilitatorsHf').val() * $(this).find('#webinar_LeadfacilitatorsNoh').val())* ($(this).find('#webinar_LeadfacilitatorsNwh').val() * 0.2))) * 1.3;
        $(this).find('#webinar_LeadfacilitatorsTotal').html(facilitatorFee.toFixed().toString().replace(/\B(?=(\d{3})+(?!\d))/g, ","));
        programTotal += facilitatorFee;
    });


    //Moderator
    modTotal = 0;
    moderatorFee = 0;
    $("#tableofModerator > tr").each(function () { 
        moderatorFee =(($(this).find('#webinar_ModeratorHf').val() * $(this).find('#webinar_ModeratorNoh1').val())+(($(this).find('#webinar_ModeratorHf').val() * $(this).find('#webinar_ModeratorNoh1').val())* ($(this).find('#webinar_ModeratorNwh1').val() * 0.2))) * 1.3;
        $(this).find('#webinar_ModeratorTotal').html(moderatorFee.toFixed().toString().replace(/\B(?=(\d{3})+(?!\d))/g, ","));
        modTotal += moderatorFee;
    });


    // Producer
    proTotal = 0;
    producerFee = 0;
    $("#tableofProducer > tr").each(function () {
        producerFee =(($(this).find('#webinar_ProducerHf').val() * $(this).find('#webinar_ProducerNoh1').val())+(($(this).find('#webinar_ProducerHf').val() * $(this).find('#webinar_ProducerNoh1').val())* ($(this).find('#webinar_ProducerNwh').val() * 0.2))) * 1.3;
        $(this).find('#webinar_ProducersTotal').html(producerFee.toFixed().toString().replace(/\B(?=(\d{3})+(?!\d))/g, ","));
        proTotal += producerFee;
    });


    //2. PROGRAM subtotal

    sub2Total = 0;
    producerTotal = 0;
    $("#tableofProgramSubtotal").each(function () {
        producerTotal =  programTotal + modTotal + proTotal;
        $('#webinar_ProgramsSubtotal').html(producerTotal.toFixed().toString().replace(/\B(?=(\d{3})+(?!\d))/g, ","));
        sub2Total += producerTotal;
    });


    //3. OFF-PROGRAM
    //Off-Program Fee
    offTotal = 0;
    offprogramFee = 0;
    $("#rowofOffProgram").each(function () {
        offprogramFee =  $('#webinar_OffprogramsHf').val()  * $('#webinar_OffprogramsNoh').val();
        $('#webinar_OffprogramsTotal').html(offprogramFee.toFixed().toString().replace(/\B(?=(\d{3})+(?!\d))/g, ","));
        offTotal += offprogramFee;
    });

    //MISCELLANEOUS
    //Program Expenses
    expTotal = 0;
    expensesTotal = 0;
    $("#rowofProgramExpenses").each(function () {
        expensesTotal = $('#webinar_Programexpenses').val() * overallTotal;
        $('#webinar_ProgramexpensesTotal').html(expensesTotal.toFixed().toString().replace(/\B(?=(\d{3})+(?!\d))/g, ","));
        expTotal += expensesTotal;
    });


    //overallcosttotal
    overAllcostTotal = 0;
    allcostTotal = 0;
    $("#webinar_allTotals").each(function () {
        allcostTotal =  costTotal + refTotal + manTotal + subTotal + sub2Total + offTotal + expTotal;
        $('#mg_input_totalPackages').html(allcostTotal.toFixed().toString().replace(/\B(?=(\d{3})+(?!\d))/g, ","));
        overAllcostTotal += allcostTotal;
    });

});


    // $(document).ready(function(){

        
    //     //CUSTOMIZATION DEFAULT VALUE
    //     document.getElementById("workshop_CustomizationHf").defaultValue = "2250";
       
    //    //CREATOR DEFAULT VALUE
    //     document.getElementById("workshop_CreatorNoh").defaultValue = "1";

    //     //LEADFACILITATOR DEFAULT VALUE
    //     document.getElementById("workshop_LeadfacilitatorsHf").defaultValue = "3000";

    //     //MODERATOR DEFAULT VALUE

    //     //PRODUCER DEFAULT VALUE
    //     document.getElementById("workshop_ProducerHf").defaultValue = "550";

    //     //OFF-PROGRAM DEFAULT VALUE
    //     document.getElementById("workshop_OffprogramsNoh").defaultValue = "1000";

    //     //MISCELLANEOUS DEFAULT VALUE
    //     document.getElementById("workshop_Programexpenses").defaultValue = "2";

    // });