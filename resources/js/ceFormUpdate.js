//DEFAULT COLOR
var statusLoad = document.getElementById("status").value;
if(statusLoad == "Confirmed"){
    $('#status').css('background-color', '#007bff')
    $('#status').css('color', 'white')
    $('#status option').css('background-color', 'white')
    $('#status option').css('color', 'black')
} 
else if(statusLoad == "In-progress"){
    $('#status').css('background-color', '#ffc107')
    $('#status').css('color', 'black')
    $('#status option').css('background-color', 'white')
    $('#status option').css('color', 'black')
} 
else if(statusLoad == "Completed"){
    $('#status').css('background-color', '#28a745')
    $('#status').css('color', 'white')
    $('#status option').css('background-color', 'white')
    $('#status option').css('color', 'black')
} 
else if(statusLoad == "Lost"){
    $('#status').css('background-color', '#dc3545')
    $('#status').css('color', 'white')
    $('#status option').css('background-color', 'white')
    $('#status option').css('color', 'black')
} 
else if(statusLoad == "Trial"){
    $('#status').css('background-color', '#17a2b8')
    $('#status').css('color', 'white')
    $('#status option').css('background-color', 'white')
    $('#status option').css('color', 'black')
}


//ASSIGN EVENT LISTENER IN STATUS
document.getElementById("status").addEventListener("change", status);
window.addEventListener("load", status);

//EVENT OF STATUS
function status() { 
    var status = document.getElementById("status").value;
    if(status == "Confirmed"){
        $('#status').css('background-color', '#007bff')
        $('#status').css('color', 'white')
        $('#status option').css('background-color', 'white')
        $('#status option').css('color', 'black')
    } else if(status == "In-progress"){
        $('#status').css('background-color', '#ffc107')
        $('#status').css('color', 'black')
        $('#status option').css('background-color', 'white')
        $('#status option').css('color', 'black')
    } else if(status == "Completed"){
        $('#status').css('background-color', '#28a745')
        $('#status').css('color', 'white')
        $('#status option').css('background-color', 'white')
        $('#status option').css('color', 'black')
    } else if(status == "Lost"){
        $('#status').css('background-color', '#dc3545')
        $('#status').css('color', 'white')
        $('#status option').css('background-color', 'white')
        $('#status option').css('color', 'black')
    } else if(status == "Trial"){
        $('#status').css('background-color', '#17a2b8')
        $('#status').css('color', 'white')
        $('#status option').css('background-color', 'white')
        $('#status option').css('color', 'black')
    }
};

//NSWH TRIGGER THE VALUE WHEN ITS LOAD
$(document).on("load change click", ".customized-engagement, .nswh-percent", function () {
    $(".nswh-percent-value").val($("#nswh").val())
});

//LEAD FACILITATOR DROPDOWN SCRIPT
$(document).ready(function() {
    $("#tableLeadfaci").each(function () {
        $(`#ef_LeadfacilitatorHf1`).click(function () {
            var others = $(`#ef_LeadfacilitatorHf1`);
            if ($('#others1').is(':selected')) {
                $(`#inputLeadfaci1`).css("display", "")
                $(`#ef_InputLeadFaciHf1`).prop('disabled', false)
                $(`#ef_InputLeadFaciHf1`).val("₱")
                $(`#ef_LeadfacilitatorHf1`).prop('disabled', true)
                $(`#ef_LeadfacilitatorHf1`).css("display", "none")
            } else {
                $(`#inputLeadfaci1`).css("display", "none")
            }
            // if ($('#capability${dates}').is(':selected')){

            // }
        });

        $('#deleteIcon1').click(function() {
            // $(this).prev('input').val('').trigger('change').focus();
            $(`#inputLeadfaci1`).css("display", "none")
            $(`#ef_InputLeadFaciHf1`).prop('disabled', true)
            $(`#ef_LeadfacilitatorHf1`).prop('disabled', false)
            $(`#ef_LeadfacilitatorHf1`).css("display", "")
            $(`#ef_LeadfacilitatorHf1`).val("₱12,000")
        });
    });
});

//ENTER KEY NOT TO SUBMIT
document.addEventListener('keypress', function (e) {
    if (e.keyCode === 13 || e.which === 13) {
        e.preventDefault();
        return false;
    }
});
