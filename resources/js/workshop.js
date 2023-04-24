$(document).on('click load change keyup', '#main, #f2f-ef-table, #workshop-table', function () {

    overallTotal = 0;
    customizationFee = 0;
    $("#tableLeadconsultant").each(function () {
        customizationFee =   ($('#ef_LeadconsultantHf').val() * $('#ef_customizationFeeNos').val()) + ($('#ef_LeadconsultantHf').val() * $('#ef_customizationFeeNsw').val() * 0.2);
        $('#ef_customizationFeeTotal').html(customizationFee.toFixed().toString().replace(/\B(?=(\d{3})+(?!\d))/g, ","));
        overallTotal += customizationFee;
    });

    // Subtotal Customization
    subtotalConsulting_DesignFee = 0;
    consulting_designFee = 0;
    $("#tablesubtotalCustomization").each(function () {
        consulting_designFee += customizationFee;
        $('#subtotalCustomization').html(consulting_designFee.toFixed().toString().replace(/\B(?=(\d{3})+(?!\d))/g, ","));
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

    // Producer Total Fee
    totalProducerFee = 0;
    producerFee = 0;
    $("#tableLeadconsultant").each(function () {
        producerFee = ($('#ef_producerFeePfv').val() * $('#ef_producerFeeNoc').val()) + ($('#ef_producerFeePfv').val() * $('#ef_producerFeeNsw').val() * 0.2);
        ($('#ef_producerFeeTotal')).html(producerFee.toFixed().toString().replace(/\B(?=(\d{3})+(?!\d))/g, ","));
        totalProducerFee += producerFee;
    });

    // Subtotal Program
    subTotalProgram = 0;
    ProgramFee = 0;
    $("#tableSubtotalProgram").each(function () {
        ProgramFee = package1Fee + package2Fee + producerFee;
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
    $("#tableofSale > tr").each(function () {
        sale =   overallTotal * $('#workshop_sale').val() || overallTotal * $(this).find('#inputforSale').val().replace(/\%/g, "");
        $(this).find('#workshop_saleTotal').html(sale.toFixed().toString().replace(/\B(?=(\d{3})+(?!\d))/g, ","));
        costTotal += sale;
    });


    //referrals
    refTotal = 0;
    referral = 0;
    $("#tableofReferrals > tr").each(function () {
        referral =   overallTotal * $('#workshop_referrals').val() || overallTotal * $(this).find('#inputforReferrals').val().replace(/\%/g, "");
        $(this).find('#workshop_referralsTotal').html(referral.toFixed().toString().replace(/\B(?=(\d{3})+(?!\d))/g, ","));
        refTotal += referral;
    });


    //engagement manager
    manTotal = 0;
    manager = 0;
    $("#tableofEngagementManager > tr").each(function () {
        manager =   overallTotal * $('#workshop_engagementManager').val() || overallTotal * $(this).find('#inputforEngagementManager').val().replace(/\%/g, "");
        $(this).find('#workshop_engagementManagerTotal').html(manager.toFixed().toString().replace(/\B(?=(\d{3})+(?!\d))/g, ","));
        manTotal += manager;
    });


    //Customization Fee
    customizationTotal = 0;
    designFee = 0;
    $("#tableofCustomization > tr").each(function () {
        designFee =  $(this).find('#workshop_CustomizationHf').val() * $(this).find('#workshop_CustomizationNoh').val();
        $(this).find('#workshop_CustomizationsTotal').html(designFee.toFixed().toString().replace(/\B(?=(\d{3})+(?!\d))/g, ","));
        customizationTotal += designFee;
    });


    //creatorFees
    creTotal = 0;
    creatorFee = 0;
    $("#tableofCreator > tr").each(function () {
        creatorFee = $(this).find('#workshop_CreatorHf').val() * $(this).find('#workshop_CreatorNoh').val();
        $(this).find('#workshop_CreatorTotal').html(creatorFee.toFixed().toString().replace(/\B(?=(\d{3})+(?!\d))/g, ","));
        creTotal += creatorFee;
    });


    //1. CONSULTING/DESIGN subtotal
    subTotal = 0;
    designTotal = 0;
    $("#workshop_DesignsSubtotal").each(function () {
        designTotal = customizationTotal + creTotal;
        $('#workshop_DesignsSubtotal').html(designTotal.toFixed().toString().replace(/\B(?=(\d{3})+(?!\d))/g, ","));
        subTotal += designTotal;
    });


    //2.PROGRAM
    programTotal = 0;
    facilitatorFee = 0;
    $("#tableofLeadFacilitator > tr").each(function () {
        facilitatorFee = ($(this).find('#workshop_LeadfacilitatorsHf').val() * $(this).find('#workshop_LeadfacilitatorsNoh').val()) + ($(this).find('#workshop_LeadfacilitatorsHf').val() * $(this).find('#workshop_LeadfacilitatorsNoh').val()) * ($(this).find('#workshop_LeadfacilitatorsNwh').val() * 0.2);
        $(this).find('#workshop_LeadfacilitatorsTotal').html(facilitatorFee.toFixed().toString().replace(/\B(?=(\d{3})+(?!\d))/g, ","));
        programTotal += facilitatorFee;
    });


    //Moderator
    modTotal = 0;
    moderatorFee = 0;
    $("#tableofModerator > tr").each(function () {
        moderatorFee = ($(this).find('#workshop_ModeratorHf').val() * $(this).find('#workshop_ModeratorNoh1').val()) + ($(this).find('#workshop_ModeratorHf').val() * $(this).find('#workshop_ModeratorNoh1').val()) * ($(this).find('#workshop_ModeratorNwh1').val() * 0.2);
        $(this).find('#workshop_ModeratorTotal').html(moderatorFee.toFixed().toString().replace(/\B(?=(\d{3})+(?!\d))/g, ","));
        modTotal += moderatorFee;
    });


    // Producer
    proTotal = 0;
    producerFee = 0;
    $("#tableofProducer > tr").each(function () {
        producerFee =($(this).find('#workshop_ProducerHf').val() * $(this).find('#workshop_ProducerNoh').val()) + ($(this).find('#workshop_ProducerHf').val() * $(this).find('#workshop_ProducerNoh').val()) * ($(this).find('#workshop_ProducerNwh').val() * 0.2);
        $(this).find('#workshop_ProducersTotal').html(producerFee.toFixed().toString().replace(/\B(?=(\d{3})+(?!\d))/g, ","));
        proTotal += producerFee;
    });


    //2. PROGRAM subtotal

    sub2Total = 0;
    producerTotal = 0;
    $("#tableofProgramSubtotal").each(function () {
        producerTotal =  programTotal + modTotal + proTotal;
        $('#workshop_ProgramsSubtotal').html(producerTotal.toFixed().toString().replace(/\B(?=(\d{3})+(?!\d))/g, ","));
        sub2Total += producerTotal;
    });


    //3. OFF-PROGRAM
    //Off-Program Fee
    offTotal = 0;
    offprogramFee = 0;
    $("#rowofOffProgram").each(function () {
        offprogramFee =  $('#workshop_OffprogramsHf').val()  * $('#workshop_OffprogramsNoh').val();
        $('#workshop_OffprogramsTotal').html(offprogramFee.toFixed().toString().replace(/\B(?=(\d{3})+(?!\d))/g, ","));
        offTotal += offprogramFee;
    });

    //MISCELLANEOUS
    //Program Expenses
    expTotal = 0;
    expensesTotal = 0;
    $("#rowofProgramExpenses").each(function () {
        expensesTotal =   overallTotal * $('#workshop_Programexpenses').val();
        $('#workshop_ProgramexpensesTotal').html(expensesTotal.toFixed().toString().replace(/\B(?=(\d{3})+(?!\d))/g, ","));
        expTotal += expensesTotal;
    });


    //overallcosttotal
    overAllcostTotal = 0;
    allcostTotal = 0;
    $("#workshop_allTotals").each(function () {
        allcostTotal =  costTotal + refTotal + manTotal + subTotal + sub2Total + offTotal + expTotal;
        $('#workshop_Totals').html(allcostTotal.toFixed().toString().replace(/\B(?=(\d{3})+(?!\d))/g, ","));
        overAllcostTotal += allcostTotal;
    });

});


    $(document).ready(function(){

        
        //CUSTOMIZATION DEFAULT VALUE
        document.getElementById("workshop_CustomizationHf").defaultValue = "2250";
       
       //CREATOR DEFAULT VALUE
        document.getElementById("workshop_CreatorNoh").defaultValue = "1";

        //LEADFACILITATOR DEFAULT VALUE
        document.getElementById("workshop_LeadfacilitatorsHf").defaultValue = "3000";

        //MODERATOR DEFAULT VALUE

        //PRODUCER DEFAULT VALUE
        document.getElementById("workshop_ProducerHf").defaultValue = "550";

        //OFF-PROGRAM DEFAULT VALUE
        document.getElementById("workshop_OffprogramsNoh").defaultValue = "1000";

        //MISCELLANEOUS DEFAULT VALUE
        document.getElementById("workshop_Programexpenses").defaultValue = "2";

    });