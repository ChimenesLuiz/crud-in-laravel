jQuery(function(){
    function maskingOnProduct(){
        
        $("#value").mask("000.000.000,00", {reverse: true})
    
        $(".value").mask("000.000.000,00", {reverse: true})
        
    }
    maskingOnProduct();

})