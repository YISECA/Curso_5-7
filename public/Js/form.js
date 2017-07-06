jQuery(document).ready(function($) {

$('#fecha_nacimiento').datepicker({dateFormat: 'yy-mm-dd',changeMonth: true,changeYear: true,yearRange: "-100:+0"});

 $('select[data-readonly]').on('change', function(e){

		var input = $(this).data('readonly');

		var readonly_value = $(this).data('readonly-value');



		if(readonly_value != $(this).val())

		{

			$('*[name="'+input+'"]').attr('readonly', 'readonly');

		} else {

			$('*[name="'+input+'"]').removeAttr('readonly');	

		}

	});






$('#torneo').val("");

 	$('#torneo').change(function() {
    $.ajax({url:'traer_eventos',type:  'post',data:{id:$('#torneo').val()},success:  function (response) {$('#evento').html(response); }});
});

 		$('#evento').change(function() {
    $.ajax({url:'traer_niveles',type:  'post',data:{id:$('#evento').val()},success:  function (response) {$('#nivel').html(response); }});
});

 		$('#nivel').change(function() {
    $.ajax({url:'traer_categorias',type:  'post',data:{id_nivel:$('#nivel').val()},success:  function (response) {$('#categoria').html(response); }});
});


 		$('#categoria').change(function() {
    $.ajax({url:'traer_modalidades',type:  'post',data:{id_categoria:$('#categoria').val()},success:  function (response) {$('#modalidad').html(response); }});
});


 		$('#modalidad').change(function() {
    $.ajax({url:'traer_edades',type:  'post',data:{id_modalidad:$('#modalidad').val()},success:  function (response) {$('#edad').html(response); }});
});
 		
/* $.ajax({url:'traer_localidades',type:  'post',success:  function (response) {$('#id_localidad').html(response); }});
 	

   $.ajax({url:'listar_ciudad',type:  'post',success:  function (response) {$('#id_ciudad').html(response); }});
    $.ajax({url:'listar_localidad',type:  'post',success:  function (response) {$('#id_localidad').html(response); }});
    $.ajax({url:'listar_departamento',type:  'post',success:  function (response) {$('#id_departamento').html(response); }});
*/
	

});