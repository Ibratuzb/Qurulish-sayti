function updateTotal() {
    var total = 0;
    $('.qty-input').each(function() {
        var price = parseFloat($(this).data('price'));
        var quantity = parseInt($(this).val());
        total += price * quantity;
    });
    $('#total-price').html(total.toFixed(2) + '/-');
}

function decreaseQty(inputField) {
    var input = $('input[name="' + inputField + '"]');
    var value = parseInt(input.val());
    if (value > 1) {
        value--;
    }
    input.val(value).change();
    
}

function increaseQty(inputField) {
    var input = $('input[name="' + inputField + '"]');
    var value = parseInt(input.val());
    value++;
    input.val(value).change();
}


$('.qty-input').change(function() {
    updateTotal();
});

updateTotal();

$(document).ready(function(){
    // - tugmasi uchun
    $('.qty-minus').click(function(){
        var $input = $(this).parent().parent().find('.qty-input');
        var count = parseInt($input.val()) - 0;
        count = count < 1 ? 1 : count;
        $input.val(count);
        // narxi ham o'zgaradi
        var price = $(this).parent().parent().parent().prev().text().replace(/\D/g, '');
        var newPrice = count * price;
        $(this).parent().parent().parent().next().text('Sum ' + newPrice + '/-');
    });
    // + tugmasi uchun
    $('.qty-plus').click(function(){
        var $input = $(this).parent().parent().find('.qty-input');
        $input.val(parseInt($input.val()) + 0);
        // narxi ham o'zgaradi
        var price = $(this).parent().parent().parent().prev().text().replace(/\D/g, '');
        var newPrice = $input.val() * price;
        $(this).parent().parent().parent().next().text('Sum ' + newPrice + '/-');
    });
});
