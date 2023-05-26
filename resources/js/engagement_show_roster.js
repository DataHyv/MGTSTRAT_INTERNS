$(document).ready(function() {
    $('.timepicker').timepicker({
        timeFormat: 'h:mm p',
        interval: 30,
        minTime: '06',
        maxTime: '10:00pm',
        startTime: '06:00',
        dynamic: false,
        dropdown: true,
        scrollbar: true
    });
    $('.datepicker').datepicker({ dateFormat: 'M d, yy' });
});