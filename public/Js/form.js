jQuery(document).ready(function($) {
 function validate_fecha(fecha)

{
    var patron=new RegExp("^(19|20)+([0-9]{2})([-])([0-9]{1,2})([-])([0-9]{1,2})$");
    if(fecha.search(patron)==0)
    {
        var values=fecha.split("-");
        if(isValidDate(values[2],values[1],values[0]))
        {
            return true;
        }
    }
    return false;
}

function isValidDate(day,month,year)

{

    var dteDate;

    month=month-1;

    dteDate=new Date(year,month,day);



    //Devuelva true o false...

    return ((day==dteDate.getDate()) && (month==dteDate.getMonth()) && (year==dteDate.getFullYear()));

}

  function calcularEdad()
{
    var fecha=document.getElementById("fecha_nacimiento").value;
    if(validate_fecha(fecha)==true)
    {
      // Si la fecha es correcta, calculamos la edad

        var values=fecha.split("-");
        var dia = values[2];
        var mes = values[1];
        var ano = values[0];

        // cogemos los valores actuales

        var fecha_hoy = new Date();
        var ahora_ano = fecha_hoy.getYear();
        var ahora_mes = fecha_hoy.getMonth()+1;
        var ahora_dia = fecha_hoy.getDate();

        // realizamos el calculo
        var edad = (ahora_ano + 1900) - ano;
        if ( ahora_mes < mes )
        {
            edad--;
        }
        if ((mes == ahora_mes) && (ahora_dia < dia))
        {
            edad--;
        }
        if (edad > 1900)
        {
            edad -= 1900;
        }


        // calculamos los meses
        var meses=0;
        if(ahora_mes>mes)
            meses=ahora_mes-mes;
        if(ahora_mes<mes)
            meses=12-(mes-ahora_mes);
        if(ahora_mes==mes && dia>ahora_dia)
            meses=11;

        // calculamos los dias

        var dias=0;
        if(ahora_dia>dia)
            dias=ahora_dia-dia;
        if(ahora_dia<dia)
        {
            ultimoDiaMes=new Date(ahora_ano, ahora_mes, 0);
            dias=ultimoDiaMes.getDate()-(dia-ahora_dia);
        }
        $('#edad').val(edad);
        $("#edad").prop("readonly", true);

    }else{

        document.getElementById("result").innerHTML="La fecha "+fecha+" es incorrecta";

    }


}

$('#fecha_nacimiento').datepicker
({
	    maxDate: '2012-07-06',
		dateFormat: 'yy-mm-dd',
		changeMonth: true,
		changeYear: true,
		yearRange: "-7:-5"});

/*$('#fecha_nacimiento').datepicker({

      minDate: new Date(1900,1-1,1), maxDate: '1999-08-06',
      dateFormat: 'yy-mm-dd',
      yearRange: "-100:-18",
      changeMonth: true,
      changeYear: true,
      });*/
 

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




$('#edad').click(function(){

	calcularEdad();
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