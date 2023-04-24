$(document).ready(function(){
    //Set default values for producer and moderator fields
    $('#producer').val(formatWithCommas(550));
    $('#moderator').val(formatWithCommas(3250));

    //Calculate Co-Lead field when Lead Facilitator field value changes
    $('input[name="lead_faci"]').on('input', function(){
        var leadFaci = parseFloat($(this).val().replace(/,/g,''));
        if(!isNaN(leadFaci)){
            var coLead = leadFaci * 0.6;
            $('input[name="co_lead"]').val(formatWithCommas(coLead));
        }else{
            $('input[name="co_lead"]').val('');
        }
    });

    //Function to format input with commas
    function formatWithCommas(input){
        return input.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
    }

    //Format input with commas whenever a new value is inputted
    $('#producer, #moderator, #lead_faci, #co_lead').on('input', function(){
        var val = $(this).val().replace(/,/g,'');
        $(this).val(formatWithCommas(val));
    });
});