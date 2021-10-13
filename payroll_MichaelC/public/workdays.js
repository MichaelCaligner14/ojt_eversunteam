$(document).ready(function(){
    $("#datefm, #datetoo").keyup(function(){
    

    var date1 = new Date($("#datefm").val());
    var date2 = new Date($("#datetoo").val());
    var start = Math.floor(date1.getTime() / (3600 * 24 * 1000)); //days as integer from..
var end = Math.floor(date2.getTime() / (3600 * 24 * 1000)); //days as integer from..
var daysDiff = end - start; // exact dates
    
    $('#total').val(daysDiff);
    
    });
    });