$(document).ready(function() {
  var estado=$('#id').val();
  var formURL = 'routes.php';
  $.ajax({
      url: formURL,
  type: 'POST',
      data:  {id:estado,RUTA:'RANGO'},
      success: function(data, textStatus, jqXHR)
  {
      $('#rango').text(data);
  }
});

  setTimeout(myFunction, 1000)


function myFunction() {
  var estado=$('#id').val();
  var formURL = 'routes.php';
  $.ajax({
      url: formURL,
  type: 'POST',
      data:  {id:estado,RUTA:'CUENTA'},
      success: function(data, textStatus, jqXHR)
  {
      $('#cuenta').text(data);
  }
  });

      setTimeout(myFunction, 1000)
}
  $('#TL_FNac').datepicker({
      changeMonth: true,
      changeYear: true,
      dateFormat:'yy-mm-dd',
      yearRange: "-40:+0",
  });

  $("#enviar").click(function()
       {
         if ($('#TX_Doc').val()==''){alertify.alert('Documento vacio');return;}
         if ($('#TX_Nom').val()==''){alertify.alert('Nombre vacio');return;}
         if ($('#TX_Apel').val()==''){alertify.alert('Apellido vacio');return;}
         if ($('#TL_FNac').val()==''){alertify.alert('Fecha vacio');return;}
         if ($('#TX_Tel').val()==''){alertify.alert('telefono vacio');return;}
         if ($('#TX_Eps').val()==''){alertify.alert('eps vacia');return;}
         if ($('#archivo').val()==''){alertify.alert('Debes Adjuntar un acrhivo en pdf');return;}
         if ($('#TX_Tel').val()==''){alertify.alert('telefono debe ser un numero');return;}
         
       $("#form_inscripcion").submit();

  });

       $("#form_inscripcion").submit(function(e)
  {


      var formObj = $(this);
      var formURL = 'routes.php';
      var formData = new FormData(this);
      $.ajax({
          url: formURL,
      type: 'POST',
          data:  formData,
          mimeType:"multipart/form-data",
          contentType: false,
          cache: false,
          processData:false,
      success: function(data, textStatus, jqXHR)
      {

            if(data==1){

              var id=$('#id').val();

             var a = "Máximo de Participantes alcanzado 36";
             alertify.alert(a);
             $('#TX_Doc').val('');
             $('#TX_Nom').val('');
             $('#TX_Apel').val('');
             $('#TL_FNac').val('');
             $('#TX_Ed').val('');
             $('#TX_Tel').val('');
             $('#TX_Eps').val('');
             $('#archivo').val('');

             var delay=3000; //3 second

              setTimeout(function() {
                location.href = "Inscripcion.php?id="+id;
              }, delay);
                    
           }
          if(data==2){
            var a='Registro exitoso - El Mínimo de Participantes a inscribir son 12';
             alertify.alert(a);
               $('#TX_Doc').val('');
             $('#TX_Nom').val('');
             $('#TX_Apel').val('');
             $('#TL_FNac').val('');
             $('#TX_Ed').val('');
             $('#TX_Tel').val('');
             $('#TX_Eps').val('');
             $('#archivo').val('');
          }
             if(data==3){
            var a=' PARTICIPANTE INSERTADO ';
             alertify.alert(a);
               $('#TX_Doc').val('');
             $('#TX_Nom').val('');
             $('#TX_Apel').val('');
             $('#TL_FNac').val('');
             $('#TX_Ed').val('');
             $('#TX_Tel').val('');
             $('#TX_Eps').val('');
             $('#archivo').val('');
          }
          if(data==4){
            var a=' Usuario no insertado';
             alertify.alert(a);
             
          }

      },
       error: function(jqXHR, textStatus, errorThrown)
       {

        alertify.alert(jqXHR);
       }
      });
      e.preventDefault();
  });



});

function isValidDate(day,month,year)

{

    var dteDate;

    month=month-1;

    dteDate=new Date(year,month,day);



    //Devuelva true o false...

    return ((day==dteDate.getDate()) && (month==dteDate.getMonth()) && (year==dteDate.getFullYear()));

}

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

        var fecha_hoy = new Date('2016-08-06');
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
        $('#TX_Ed').val(edad);
        $("#TX_Ed").prop("readonly", true);

    }else{

        document.getElementById("result").innerHTML="La fecha "+fecha+" es incorrecta";

    }

}
