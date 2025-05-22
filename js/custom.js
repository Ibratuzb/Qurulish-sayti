// $(document).ready(function() {
//   // Decrement quantity
//   $(document).on('click', '.qty-minus', function() {
//     var input = $(this).parent().siblings('.qty-input');
//     var value = parseInt(input.val());
//     if (value > 1) {
//       input.val(value - 1);
//     }
//     updateCartTotal();
//   });
  



  
//   // Increment quantity
//   $(document).on('click', '.qty-plus', function() {
//     var input = $(this).parent().siblings('.qty-input');
//     var value = parseInt(input.val());
//     input.val(value + 1);
//     updateCartTotal();
//   });

//   // Update cart total
//   function updateCartTotal() {
//     var cartTotal = 0;
//     $('.product_data').each(function() {
//       var price = parseFloat($(this).find('.price').text().replace('$', ''));
//       var quantity = parseInt($(this).find('.qty-input').val());
//       var subtotal = price * quantity;
//       $(this).find('.subtotal').text('$' + subtotal.toFixed(2));
//       cartTotal += subtotal;
//     });
//     $('#cart-total').text('$' + cartTotal.toFixed(2));
//   }

//   // Call updateCartTotal() on page load
//   updateCartTotal();




// });


// $(document).ready(function() {
//   // Event listener for minus button
//   $('.qty-minus').click(function(e) {
//       e.preventDefault();
//       var inputField = $(this).closest('.input-group').find('.qty-input');
//       var newQuantity = parseInt(inputField.val()) - 1;
//       if (newQuantity < 1) {
//           newQuantity = 1;
//       }
//       inputField.val(newQuantity);
//   });
  
//   // Event listener for plus button
//   $('.qty-plus').click(function(e) {
//       e.preventDefault();
//       var inputField = $(this).closest('.input-group').find('.qty-input');
//       var newQuantity = parseInt(inputField.val()) + 1;
//       inputField.val(newQuantity);
//   });
// });




    // $(document).ready(function(){
    //     // - tugmasi uchun
    //     $('.qty-minus').click(function(){
    //         var $input = $(this).parent().parent().find('.qty-input');
    //         var count = parseInt($input.val()) - 1;
    //         count = count < 1 ? 1 : count;
    //         $input.val(count);
    //         // narxi ham o'zgaradi
    //         var price = $(this).parent().parent().parent().prev().text().replace(/\D/g, '');
    //         var newPrice = count * price;
    //         $(this).parent().parent().parent().next().text('Sum ' + newPrice + '/-');
    //     });
    //     // + tugmasi uchun
    //     $('.qty-plus').click(function(){
    //         var $input = $(this).parent().parent().find('.qty-input');
    //         $input.val(parseInt($input.val()) + 1);
    //         // narxi ham o'zgaradi
    //         var price = $(this).parent().parent().parent().prev().text().replace(/\D/g, '');
    //         var newPrice = $input.val() * price;
    //         $(this).parent().parent().parent().next().text('Sum ' + newPrice + '/-');
    //     });
    // });

