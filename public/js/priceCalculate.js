$(document).ready(function(){
    calculatePrice();
    calculateCount();
    
    $("#prices").change(function(){
        calculatePrice();
        calculateCount();
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

function calculateCount(){
    var minCount = $("#prices option:selected").data("min");
    
    var maxCount = $("#prices option:selected").data("max");
    
    $("#min_max_countes").html("Допустимый диапозон накрутки: " + minCount + " - " + maxCount);
}