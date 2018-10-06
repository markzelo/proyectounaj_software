//programa de evento 
$(function() {
	$('[data-cart]').on('click', editCartModal);
	
});

function editCartModal() {
	
	var cart_detail_quantity = $(this).parent().prev().integer();
	$('#cart_detail_quantity').val(cart_detail_quantity);
	// show
	$('modalEditCart').modal('show');
}