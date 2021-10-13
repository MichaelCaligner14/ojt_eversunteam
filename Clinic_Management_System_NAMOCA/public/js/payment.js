
		$(document).ready(function(){
    	// Get value on keyup funtion
    	$("#price, #qty").keyup(function(){

    	var total=0;    	
    	var x = Number($("#price").val());
    	var y = Number($("#qty").val());
    	var total=x - y;  

    	$('#change').val(total);

    });
});

