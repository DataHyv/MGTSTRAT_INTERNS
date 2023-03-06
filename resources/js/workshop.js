$(document).on('change keyup', '#main', function () {

    overallTotal = 0;
    customizationFee = 0;
    $("#tableLeadconsultant").each(function () {
        customizationFee =   ($('#ef_LeadconsultantHf').val() * $('#ef_customizationFeeNos').val()) + ($('#ef_LeadconsultantHf').val() * $('#ef_customizationFeeNsw').val() * 0.2);
        $('#ef_customizationFeeTotal').html(customizationFee.toFixed(2).toString().replace(/\B(?=(\d{3})+(?!\d))/g, ","));
        overallTotal += customizationFee;
    });
    console.log(customizationFee);


    //totalsales
    costTotal = 0;
    sale = 0;
    $("#tableofSale > tr").each(function () {
        sale =   overallTotal * $('#workshop_sale').val() || overallTotal * $(this).find('#inputforSale').val().replace(/\%/g, "");
        $(this).find('#workshop_saleTotal').html(sale.toFixed(2).toString().replace(/\B(?=(\d{3})+(?!\d))/g, ","));
        costTotal += sale;
    });
    console.log(sale);


    //referrals

    refTotal = 0;
    referral = 0;
    $("#tableofReferrals").each(function () {
        referral =   overallTotal * $('#workshop_referrals').val();
        $('#workshop_referralsTotal').html(referral.toFixed(2).toString().replace(/\B(?=(\d{3})+(?!\d))/g, ","));
        refTotal += referral;
    });
    console.log(referral);


    //engagementmanager
    manTotal = 0;
    manager = 0;
    $("#tableofCustomization").each(function () {
        manager =   overallTotal * $('#workshop_engagementManager').val();
        $('#workshop_engagementManagerTotal').html(manager.toFixed(2).toString().replace(/\B(?=(\d{3})+(?!\d))/g, ","));
        manTotal += manager;
    });
    console.log(manager);


    //Customization Fee

    desTotal = 0;
    design = 0;
    $("#tableofCustomization").each(function () {
        design =  $('#workshop_CustomizationHf1').val()  * $('#workshop_CustomizationNoh').val();
        $('#workshop_CustomizationsTotal').html(design.toFixed(2).toString().replace(/\B(?=(\d{3})+(?!\d))/g, ","));
        desTotal += design;
    });
    console.log(design);


    //creatorFees

    creTotal = 0;
    creatorFee = 0;
    $("#tableofCreator").each(function () {
        creatorFee =  $('#workshop_CreatorHf').val()  * $('#workshop_CreatorNoh1').val();
        $('#workshop_CreatorTotal').html(creatorFee.toFixed(2).toString().replace(/\B(?=(\d{3})+(?!\d))/g, ","));
        creTotal += creatorFee;
    });
    console.log(creatorFee);

    //1. CONSULTING/DESIGN subtotal

    subTotal = 0;
    designTotal = 0;
    $("#workshop_DesignsSubtotal").each(function () {
        designTotal =  design + creatorFee;
        $('#workshop_DesignsSubtotal').html(desTotal.toFixed(2).toString().replace(/\B(?=(\d{3})+(?!\d))/g, ","));
        subTotal += designTotal;
    });
    console.log(designTotal);


    //2.PROGRAM

    programTotal = 0;
    leadFee = 0;
    $("#tableofLeadFacilitator").each(function () {
        leadFee = ($("#workshop_LeadfacilitatorsHf").val() * $("#workshop_LeadfacilitatorsNoh1").val()) + ($("#workshop_LeadfacilitatorsHf").val() * $("#workshop_LeadfacilitatorsNoh1").val()) * ($("#workshop_LeadfacilitatorsNwh1").val() * 0.2);
        $('#workshop_LeadfacilitatorsTotal').html(leadFee.toFixed(2).toString().replace(/\B(?=(\d{3})+(?!\d))/g, ","));
        programTotal += leadFee;
    });
    console.log(leadFee);

    //Moderator

    modTotal = 0;
    moderatorFee = 0;
    $("#tableofModerator").each(function () {
        moderatorFee = ($("#workshop_ModeratorHf").val() * $("#workshop_ModeratorNoh1").val()) + ($("#workshop_ModeratorHf").val() * $("#workshop_ModeratorNoh1").val()) * ($("#workshop_ModeratorNwh1").val() * 0.2);
        $('#workshop_ModeratorTotal').html(moderatorFee.toFixed(2).toString().replace(/\B(?=(\d{3})+(?!\d))/g, ","));
        modTotal += moderatorFee;
    });
    console.log(moderatorFee);

    //Producer

    proTotal = 0;
    producerFee = 0;
    $("#tableofProducer").each(function () {
        producerFee = ($("#workshop_ProducerHf").val() * $("#workshop_ProducerNoh1").val()) + ($("#workshop_ProducerHf").val() * $("#workshop_ProducerNoh1").val()) * ($("#workshop_ProducerNwh1").val() * 0.2);
        $('#workshop_ProducersTotal').html(producerFee.toFixed(2).toString().replace(/\B(?=(\d{3})+(?!\d))/g, ","));
    });
    console.log(producerFee);

    //2. PROGRAM subtotal

    sub2Total = 0;
    producerTotal = 0;
    $("#workshop_ProgramsSubtotal").each(function () {
        producerTotal =  leadFee + moderatorFee + producerFee;
        $('#workshop_ProgramsSubtotal').html(producerTotal.toFixed(2).toString().replace(/\B(?=(\d{3})+(?!\d))/g, ","));
        sub2Total += producerTotal;
    });
    console.log(producerTotal);

    //3. OFF-PROGRAM
    //Off-Program Fee

    offTotal = 0;
    offprogramFee = 0;
    $("#rowofOffProgram").each(function () {
        offprogramFee =  $('#workshop_OffprogramsHf').val()  * $('#workshop_OffprogramsNoh').val();
        $('#workshop_OffprogramsTotal').html(offprogramFee.toFixed(2).toString().replace(/\B(?=(\d{3})+(?!\d))/g, ","));
        offTotal += offprogramFee;
    });
    console.log(offprogramFee);

    //MISCELLANEOUS
    //Program Expenses

    expTotal = 0;
    expensesTotal = 0;
    $("#rowofProgramExpenses").each(function () {
        expensesTotal =   overallTotal * $('#workshop_Programexpenses').val();
        $('#workshop_ProgramexpensesTotal').html(expensesTotal.toFixed(2).toString().replace(/\B(?=(\d{3})+(?!\d))/g, ","));
        expTotal += expensesTotal;
    });
    console.log(referral);


    //overallcosttotal

    overAllcostTotal = 0;
    allcostTotal = 0;
    $("#workshop_allTotals").each(function () {
        allcostTotal =  sale + referral + manager + designTotal + producerTotal + offprogramFee +  expensesTotal;
        $('#workshop_Totals').html(allcostTotal.toFixed(2).toString().replace(/\B(?=(\d{3})+(?!\d))/g, ","));
        overAllcostTotal += allcostTotal;
    });
    console.log(allcostTotal);













});



