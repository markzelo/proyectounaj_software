//programa de evento 
$(function() {
	$('[data-cart]').on('click', editCartModal);
	
});

function editCartModal() {
	// id
	var cartdetail_id = $(this).data('cartdetail');
	$('#cardtdeail_product_id').val(cartdetail_id);
	// name
	var cartdetail_quantity = $(this).parent().prev().text();
	$('#cartdetail_quantity').val(cartdetail_quantity);
	// show
	$('modalEditCart').modal('show');
}