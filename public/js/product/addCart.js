//programa de evento 
$(function() {
	$('[data-cart]').on('click', addCartDetailModal);
	
});

function addCartDetailModal() {
	// id
	var cart_details_id = $(this).data('cart');
	$('#cart_details_id').val(cart_detail_id);
	// name
	var cart_details_quantily = $(this).parent().prev().integer();
	$('#cart_details_quantily').val(cart_detail_quantily);
	// show
	$('#Modaladdcarrito').modal('show');
}