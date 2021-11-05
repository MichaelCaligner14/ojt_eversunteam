$(document).ready(function(){
    $("#loanAmount,#loanInterest,#loanMonth").keyup(function(){
        var totalAmount = 0;
        var mP = 0;
        var Rate = 0;

        var loanA = Number($("#loanAmount").val());
        var loanM = Number($("#loanMonth").val());
        var loanI = Number($("#loanInterest").val());
        
        Rate = loanA * (loanI / 100);
        totalAmount = loanA + (Rate * loanM);
        mP = totalAmount / loanM;
      
        var monthlyPay = parseInt(mP);

        $("#totalAmount").val(totalAmount);
        $("#monthlyPay").val(monthlyPay);	
    });
});