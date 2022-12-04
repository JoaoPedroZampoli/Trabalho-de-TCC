var ProductQuantity = 1;

$(document).ready(function(){
    $("#ProductIndicator").val(ProductQuantity);
});

function Increment(){
    if (ProductQuantity < 10){
        ProductQuantity = ProductQuantity+1;
        $("#ProductIndicator").val(ProductQuantity);
    }
    else{
        toastr.warning("Não é possível comprar mais de 10 produtos iguais");
    }
    
}
function Decrement(){
    if (ProductQuantity > 1){
        ProductQuantity = ProductQuantity-1;
        $("#ProductIndicator").val(ProductQuantity);
    }
    else{
        toastr.warning("Não é possível diminuir a quantidade mínima além de 1");
    }
}