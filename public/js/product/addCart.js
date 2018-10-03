//programa de evento 
$(function() {
	$('[data-cart]').on('click', addCartModal);
	
});

function addCartModal() {
	// id
	var cart_id = $(this).data('cart');
	$('#category_id').val(cart_id);
	// name
	var cart_name = $(this).parent().prev().text();
	$('#category_name').val(cart_name);
	// show
	$('#modalEditCategory').modal('show');
}