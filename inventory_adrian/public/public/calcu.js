$(document).ready(function(){
    $("#price, #qty").keyup(function(){

    var total=0;    	
    var x = Number($("#price").val());
    var y = Number($("#qty").val());
    var total=x * y;

    $('#total').val(total);

});
});