//programa de evento 


$(function() {
	$(document).on('click', editCartModal);
	
});

function editCartModal() {
	// id
	var cartdetail_product_id =  $(this).data('product_id');
	$('#cartdeail_product_id').val(cartdetail_product_id);
	// name
	var cartdetail_quantity = $(this).parent().prev().integer();
	$('#cartdetail_quantity').val(cartdetail_quantity);
	// show
	$('modalEditCart').modal('show');
}