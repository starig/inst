$(document).ready(function(){
    calculatePrice();
    $("#prices").change(function(){
        calculatePrice();
    });
    
    $("#valueOfOrder").change(function(){
       calculatePrice(); 
    });
    
    $("#valueOfOrder").keyup(function(){
       calculatePrice(); 
    });
});

function calculatePrice(){
    var optionPrice = $("#prices option:selected").data("price");
    var valueOfOrder = $("#valueOfOrder").val();
    var price = optionPrice / 10 * valueOfOrder;
    
    $("#promotionPrice").html("Цена: " + price.toFixed(2));
}