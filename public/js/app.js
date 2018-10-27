$(function () {
	$('#list-of-projects').on('change', onNewProjectSelected);
});

//redirigir al usuario
function onNewProjectSelected() {
	//valor asignado
	var project_id = $(this).val();
	location.href = '/seleccionar/proyecto/'+project_id;
}