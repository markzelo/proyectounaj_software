(function() {
	//cuando se detecte un cambio llama 
	
	$('#select-project').on('change', onSelectProjectChange);

});

function onSelectProjectChange() {
	//pregunta el valor
	var project_id = $(this).val();


	//para cunado no se selecciona preoyeco elegido no tenga nivel el segundo selector

	if (! project_id) {
		$('#select-level').html('<option value="">Seleccione nivel</option>');
		return;
	}

	// AJAX peticion al servidor llegada de datos solo informacion web service
	$.get('/api/proyecto/'+project_id+'/niveles', function (data) {
		

		var html_select = '<option value="">Seleccione nivel</option>';
		//concatenar opciones a mostarar
		for (var i=0; i<data.length; ++i)
			html_select += '<option value="'+data[i].id+'">'+data[i].name+'</option>';

		//pone lo seleccionado en el segundo select
		$('#select-level').html(html_select);
	});
}