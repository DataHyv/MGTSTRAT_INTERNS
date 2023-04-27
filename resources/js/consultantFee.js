$(document).ready(function(){
    //Set default values for producer and moderator fields
    $('#producer').val(formatWithCommas(550));

    //Calculate Co-Lead field when Lead Facilitator field value changes
    $("#lead_faci").on('input', function(){
        var leadFaci = parseFloat($(this).val().replace(/,/g,''));
        if(!isNaN(leadFaci)){
            var coFaci = leadFaci * 0.6;
            var Marshal = leadFaci * 0.4;
            var leadConsultant = leadFaci * 0.85;
            var consultingSup = leadFaci * 0.75;
            var designer = leadFaci * 0.75;
            $("#co_faci").val(formatWithCommas(coFaci));
            $("#marshal").val(formatWithCommas(Marshal));
            $("#leadConsultant").val(formatWithCommas(leadConsultant));
            $("#conSupport").val(formatWithCommas(consultingSup));
            $("#designer").val(formatWithCommas(designer));
    
            // Calculate average
            var sum = leadFaci + coFaci + Marshal + leadConsultant + consultingSup + designer;
            var avg = sum / 6;

            // Calculate co-lead total with moderator
            var moderator = parseFloat($('#moderator_input').val().replace(/,/g,''));
            if(isNaN(moderator)){
                moderator = 0;
            }
            var coleadtotal = avg + moderator;
            $("#co_lead").val(formatWithCommas(coleadtotal));
            
            // Calculate co-lead F2F total
            var f2ftotal = avg + coFaci;
            $("#co_lead_f2f").val(formatWithCommas(f2ftotal));

        } else {
            $("#co_faci").val('');
            $("#marshal").val('');
            $("#leadConsultant").val('');
            $("#conSupport").val('');
            $("#designer").val('');
            $("#co_lead").val('');
            $("#co_lead_f2f").val('');
        }
    });
    
    //Function to format input with commas and round the number down to the nearest integer: Math.floor()
    function formatWithCommas(input){
        var num = Math.floor(input);
        return num.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
    }

    //Format input with commas whenever a new value is inputted
    $('#producer, #moderator, #lead_faci, #co_lead, #marshal, #leadConsultant, #conSupport, #designer, #co_lead, #co_lead_f2f').on('input', function(){
        var val = $(this).val().replace(/,/g,'');
        $(this).val(formatWithCommas(val));
    });
});
