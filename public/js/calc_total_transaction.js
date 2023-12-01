var total = document.getElementById('total')
var product = document.getElementById('product')
var transactionAmount = document.getElementById('transactionAmount')
transactionAmount.innerHTML = '';
var msgerror = document.getElementById('msgerror')
var productValue;
var productAmount;
var idProduct;
var current_id;

var selectedProduct = product.options[product.selectedIndex];
productValue = selectedProduct.getAttribute('productValue');
productAmount = selectedProduct.getAttribute('productAmount');

function showError(message)
{
    msgerror.innerHTML = message;
    msgerror.style.color = "red";
    msgerror.style.fontWeight = "light";

    setTimeout(function(){
        msgerror.innerHTML = '';
    }, 6000);
}

function showOptions()
{
    for (var i = 0; i < productAmount; i++)
    {
        var novaOpcao = document.createElement('option');
        novaOpcao.value = i;
        novaOpcao.text = i;
        transactionAmount.add(novaOpcao);
    }
}


product.addEventListener('change', function(){
    selectedProduct = product.options[product.selectedIndex];
    productValue = selectedProduct.getAttribute('productValue');
    productAmount = selectedProduct.getAttribute('productAmount');
    idProduct = document.getElementById('product');
    current_id = idProduct.value;
    total.value = '';
    transactionAmount.value = '';

    transactionAmount.innerHTML = '';
    showOptions();
})


function calc_total_transaction(thisparam)
{
    tot = (thisparam * productValue)
    $('#total').val(tot)
    calc_new_amount(thisparam)
}

function calc_new_amount(current_amount)
{
    var new_amount = (productAmount - current_amount);
    console.log(current_id)
    $('#new_amount').val(new_amount + '_' + current_id);
}


showOptions();