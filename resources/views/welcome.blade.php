@extends('master')                              

@section('content')         

<link rel="stylesheet" type="text/css" href="public/Css/form.css">

<link rel="stylesheet" type="text/css" href="public/Css/slider_styles.css">


<section id="page1">

    <div class="panel panel-default">

        <div class="panel-heading">Inicio</div>

        <div class="panel-body">

            <div class="freebirdFormviewerViewFormContent ">

                <div class="freebirdFormviewerViewHeaderHeader">

                    <div class="freebirdFormviewerViewHeaderTitleRow">

                        <p><font size="5" face="Comic Sans MS,arial,verdana">FORMULARIO DE PRE-INSCRIPCIÓN NIÑOS DE 5 A 7 AÑOS </font></p>
                        <p><font size="4" face="Comic Sans MS,arial,verdana" color="#1995dc">Pre-Inscripciones el día 20 de junio desde las 10.00 a.m. o hasta agotar cupos disponibles </font></p>

                    </div>
<br>
                    <div class="stage">

                        <div id="SLDR-ONE" class="sldr">

                            <ul class="wrp animate">

                                <li class="elmnt-one">                                 


                                        <div class="wrap"><img src="public/Img/curso.jpg"  height="400">


                                        </div>                                   
                                </li>

                               <li class="elmnt-two">
                                    
                                        <div class="wrap"><img src="public/Img/curso1.jpg"  height="400">
                                        </div>                                 
                                </li>

                                 <li class="elmnt-three">
                                    
                                        <div class="wrap"><img src="public/Img/curso2.jpg"  height="400">
                                        </div>                                 
                                </li>
                                 

                            </ul>

                        </div>

                        <div class="clear"></div>

                        <ul class="selectors">

                            <li class="focalPoint"><a href="">•</a></li>

                            <li><a href="">•</a></li>

                            <li><a href="">•</a></li>            
                         
                        </ul>

                    </div>

                    <script src="public/Js/jquery.sldr.js"></script>
                    <div class="freebirdFormviewerViewHeaderDescription" dir="auto">

                      <p style="font-size: 11pt" align="justify">Fecha Inicio Ciclo 4-2017: <strong>22 de julio</strong></font></p>
                      <p style="font-size: 11pt" align="justify">Fecha Finalización ciclo 4-2017:<strong> 20 de agosto</strong></font></p>
                        <br>

                        <p style="line-height: 27px; font-size: 11pt" align="justify">Este Primer momento o tramite  se realiza a través de este medio electrónico, para el segundo momento o Formalización de la Inscripción debe dirigirse a la oficina de coordinación del Complejo Acuático Simón Bolivar, los días 20, 21 o 22 de junio de 2017 en los horario de 8:00 a.m a 12:00 m. y de 2:00 a 3:00 p.m., con el objeto de entregar los documentos solicitados por el IDRD y de esta manera Formalizar su Inscripción. <strong>si NO realiza la entrega de documentos y consignación o pago </strong> se anulara la Pre-Inscripción y deberá realizarla nuevamente para el siguiente ciclo.</p>
                        <br>
                        <p style="line-height: 27px; font-size: 11pt" align="justify"><strong>IMPORTANTE:</strong> Tenga en cuenta que solo debe realizar el pago (consignación) del curso cuando esta Pre-inscripción sea aceptada <strong>(el sistema automáticamente le informa de la Aceptación de la Pre-inscripción al finalizar este proceso)</strong> y  solo debe inscribir al alumno nuevo una sola y única vez, durante el proceso de cada ciclo, con el objeto de evitar duplicidad en la información y de esta forma excluir de un cupo a otro usuario interesado. </p>



                       <!--<center><h2><font size="5" face="Comic Sans MS,arial,verdana">FORMULARIO DE INSCRIPCIÓN DÍA DEL DESAFÍO 2017</font></h2></center>-->
                        
<br>

<form method="POST" action="insertar" id="form_gen" enctype="multipart/form-data">  

            <div class="panel-body">

<!-- nuevo formulario-->

<div class="panel panel-default">
  <div class="panel-heading"><font size="3"color="#1995dc">INFORMACIÓN DEL ACUDIENTE O REPRESENTANTE LEGAL</font></div>
  <div class="panel-body">
    <div class="row">
  
       <div class="col-xs-6">
      <label class="freebirdFormviewerViewItemsItemItemTitle" for="formGroupExampleInput">Nombre Completo </label></div>
       <div class="col-xs-6"><label class="freebirdFormviewerViewItemsItemItemTitle" for="formGroupExampleInput2">Documento de Identidad </label></div>

       <div class="col-xs-6"><input required type="text" class="form-control" id="nombre_acudiente" name="nombre_acudiente" onkeyup="javascript:this.value=this.value.toUpperCase();"></div>
       <div class="col-xs-6"><input title="Se necesita una cedula" required type="number" class="form-control" id="cedula_acudiente" name="cedula_acudiente"
       +><br></div>

       <div class="col-xs-6">
      <label class="freebirdFormviewerViewItemsItemItemTitle" for="formGroupExampleInput">Ocupación </label></div>
       <div class="col-xs-6"><label class="freebirdFormviewerViewItemsItemItemTitle" for="formGroupExampleInput2">Correo Electrónico</label></div>

       <div class="col-xs-6"><input required type="text" class="form-control" id="ocupacion" name="ocupacion" ></div>
       <div class="col-xs-6"><input required type="mail" class="form-control" id="mail" name="mail" ><br></div>

       <div class="col-xs-6">
      <label class="freebirdFormviewerViewItemsItemItemTitle" for="formGroupExampleInput">Dirección de residencia </label></div>
       <div class="col-xs-6"><label class="freebirdFormviewerViewItemsItemItemTitle" for="formGroupExampleInput2">Teléfono </label></div>

       <div class="col-xs-6"><input required type="text" class="form-control" id="direccion" name="direccion" ></div>
       <div class="col-xs-6"><input required type="number" class="form-control" id="telefono" name="telefono" ><br></div>

       <div class="col-xs-6"><label class="freebirdFormviewerViewItemsItemItemTitle" for="formGroupExampleInput">Localidad </label></div>
       <div class="col-xs-6">&nbsp;</div>

       <div class="col-xs-6"><select  required name="localidad" id="localidad" class="form-control" >

                <option value="">Seleccione</option>
                 @foreach ($localidades as $localidad)
                    <option value="{{ $localidad->id_localidad }}">{{ $localidad->localidad}}</option>
                @endforeach

            </select></div>
       <div class="col-xs-6">&nbsp;<br></div>

    </div>
  </div>
</div>
 
<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title"><font size="3"color="#1995dc">INFORMACIÓN DEL NIÑO</font></h3>
  </div>
  <div class="panel-body">
    <div class="row">
       <div class="col-xs-6">
      <label class="freebirdFormviewerViewItemsItemItemTitle" for="formGroupExampleInput">Nombres Completos </label></div>
       <div class="col-xs-6"><label class="freebirdFormviewerViewItemsItemItemTitle" for="formGroupExampleInput2">Apellidos Completos</label></div>


       <div class="col-xs-6"><input required type="text" class="form-control" id="nombre_nino" name="nombre_nino" onkeyup="javascript:this.value=this.value.toUpperCase();"></div>
       <div class="col-xs-6"><input required type="text" class="form-control" id="apellido_nino" name="apellido_nino" onkeyup="javascript:this.value=this.value.toUpperCase();" ><br></div>

      <div class="col-xs-6">
      <label class="freebirdFormviewerViewItemsItemItemTitle" for="formGroupExampleInput">Documento de Identificación </label></div>
       <div class="col-xs-6"><label class="freebirdFormviewerViewItemsItemItemTitle" for="formGroupExampleInput2">Género</label></div>

       <div class="col-xs-6"><input required type="text" class="form-control" id="cedula" name="cedula"></div>
       <div class="col-xs-6">
          <select name="genero" id="genero" class="form-control" >
          <option value="">Seleccione</option>
          <option value="Masculino">Masculino</option>
          <option value="Femenino">Femenino</option>
      </select><br></div>

       <div class="col-xs-6">
      <label class="freebirdFormviewerViewItemsItemItemTitle" for="formGroupExampleInput">Fecha de nacimiento </label></div>
       <div class="col-xs-6"><label class="freebirdFormviewerViewItemsItemItemTitle" for="formGroupExampleInput2">Edad cumplida</label></div>

       <div class="col-xs-6"><input required type="text" class="form-control" id="fecha_nacimiento" name="fecha_nacimiento"></div>
       <div class="col-xs-6"><input required type="text" class="form-control" id="edad" name="edad"><br></div>

       <div class="col-xs-6">
      <label class="freebirdFormviewerViewItemsItemItemTitle" for="formGroupExampleInput">Dirección de residencia </label></div>
       <div class="col-xs-6"><label class="freebirdFormviewerViewItemsItemItemTitle" for="formGroupExampleInput2">Teléfono residencia </label></div>

       <div class="col-xs-6"><input required type="text" class="form-control" id="direccion_nino" name="direccion_nino" ></div>
       <div class="col-xs-6"><input required type="number" class="form-control" id="telefono_nino" name="telefono_nino" ><br></div>

       <div class="col-xs-6">
      <label class="freebirdFormviewerViewItemsItemItemTitle" for="formGroupExampleInput">EPS </label></div>
       <div class="col-xs-6"><label class="freebirdFormviewerViewItemsItemItemTitle" for="formGroupExampleInput2">Institución Educativa</label></div>

       <div class="col-xs-6"><input required type="text" class="form-control" id="eps" name="eps" ></div>
       <div class="col-xs-6"><input required type="text" class="form-control" id="institucion" name="institucion" ><br></div>

       <div class="col-xs-6">
      <label class="freebirdFormviewerViewItemsItemItemTitle" for="formGroupExampleInput">Sector del colegio </label></div>
       <div class="col-xs-6"><label class="freebirdFormviewerViewItemsItemItemTitle" for="formGroupExampleInput2">Ha tomado clases o cursos de Natación</label></div>

       <div class="col-xs-6"><select name="sector_colegio" id="sector_colegio" class="form-control" >
          <option value="">Seleccione</option>
          <option value="Público">Público</option>
          <option value="Privado">Privado</option>
      </select></div>
       <div class="col-xs-6"><select name="curso" id="curso" class="form-control" >
          <option value="">Seleccione</option>
          <option value="SI">SI</option>
          <option value="NO">NO</option>
      </select><br></div>

       <div class="col-xs-6"><label class="freebirdFormviewerViewItemsItemItemTitle" for="formGroupExampleInput"><font color="#1995dc"><u>HORARIO DEL CURSO</u> </font></label></div>
       <div class="col-xs-6">&nbsp;</div>

       <div class="col-xs-6"><select  required name="horario" id="horario" class="form-control" >
      <option value="">Seleccione</option>
      <option value="7:00 am">7:00 am</option>
      <option value="8:30 am">8:30 am</option>
      <option value="10:00 am">10:00 am</option>  
      <option value="11:30 am">11:30 am</option>
      <option value="1:30 pm">1:30 pm</option>
      <option value="3:00 pm">3:00 pm</option>
    </select></div>
       <div class="col-xs-6"><label > si selecciona <font color="#1995dc" size="3">SI</font> se realizará evaluación de Habilidades en el agua, y se ubicara en el mismo horario u otro disponible según resultado y cupos para el nivel evaluado</label></div>
   </div>
  </div>
</div>

<br>

<p style="line-height: 22px; font-size: 11pt;color:#1995dc" align="justify">"Recuerde que el horario seleccionado por usted <strong>NO PODRA SER MODIFICADO,</strong> teniendo en cuenta la programación establecida por el IDRD y la cantidad de cupos habilitados por horario, ya que estos son limitados con el fin de ofrecer un buen servicio en el desarrollo técnico de la escuela deportiva."</p>
<br>
<p style="line-height: 27px; font-size: 11pt" align="justify"><strong>"ACEPTO TÉRMINOS Y CONDICIONES DE LA ESCUELA DE NATACIÓN DEL COMPLEJO ACUÁTICO SIMÓN BOLÍVAR - IDRD"</strong> </p>
<br>
<p style="line-height: 20px; font-size: 11pt" align="justify"><strong>* todos los campos son obligatorios y Recuerde que al Finalizar este proceso y ENVIAR LOS DATOS DE INSCRIPCIÓN el sistema le informa automáticamente si su pre-inscripción fue aceptada</strong> </p>
         </fieldset>


<!--pueba de recuadro-->







         <div class="freebirdFormviewerViewFormContent "><div class="freebirdFormviewerViewHeaderHeader"><div class="freebirdFormviewerViewHeaderTitleRow"><div class="freebirdFormviewerViewHeaderTitle" dir="auto" role="heading" aria-level="1"></div></div><div class="freebirdFormviewerViewHeaderRequiredLegend" aria-hidden="true" dir="auto"></div></div><div class="freebirdFormviewerViewItemList" role="list"><div class="freebirdMaterialHeaderbannerLabelContainer freebirdFormviewerViewItemsPagebreakBanner" jsname="bLLMxc" role="heading"><div class="freebirdMaterialHeaderbannerLabelTextContainer freebirdSolidBackground freebirdMaterialHeaderbannerPagebreakBanner"><div class="freebirdMaterialHeaderbannerPagebreakText freebirdFormviewerViewItemsPagebreakBannerText"></div></div></div><div class="freebirdFormviewerViewItemsPagebreakDescriptionText"></div><div role="listitem" class="freebirdFormviewerViewItemsItemItem" jsname="ibnC6b" jscontroller="hIYTQc" jsaction="JIbuQc:qzJD1c;sPvj8e:e4JwSe" data-required="true" data-other-input="qSV85" data-other-hidden="MfYA1e" data-item-id="131124881"><div class="freebirdFormviewerViewItemsItemItemheader"><div class="freebirdFormviewerViewItemsItemItemTitleContainer"><div class="freebirdFormviewerViewItemsItemItemTitle" dir="auto" id="i1" role="heading" aria-level="2" aria-describedby="i.desc.131124881">Términos de inscripción <span class="freebirdFormviewerViewItemsItemRequiredAsterisk" aria-hidden="true">*<br><br><br><br><br><br></span></div><div class="freebirdFormviewerViewItemsItemItemHelpText" id="i.desc.131124881" dir="auto">Entiendo y acepto los terminos y condiciones del curso de natación.</div></div></div><div jsname="JNdkSc" role="group" aria-labelledby="i1" aria-describedby="i.desc.131124881 i.err.131124881 i.req.131124881" class=""><div class="" jsname="MPu53c" jscontroller="GJQA8b" jsaction="JIbuQc:aj0Jcf" data-value="Acepto"><div class="freebirdFormviewerViewItemsCheckboxChoice"><label class="docssharedWizToggleLabeledContainer freebirdFormviewerViewItemsCheckboxContainer"><div class="exportLabelWrapper"><input type="checkbox" required style="float: left;


          margin: 0px;" name="acepto" id="acepto"><div class="docssharedWizToggleLabeledContent"><div class="docssharedWizToggleLabeledPrimaryText"><span dir="auto" class="docssharedWizToggleLabeledLabelText freebirdFormviewerViewItemsCheckboxLabel">Acepto</span></div></div></div></label></div><input name="entry.1642827248" jsname="ekGZBc" disabled="" type="hidden"></div></div><div id="i.req.131124881" class="screenreaderOnly"></div><div jsname="XbIQze" class="freebirdFormviewerViewItemsItemErrorMessage" id="i.err.131124881" role="alert"></div></div></div><div class="freebirdFormviewerViewNavigationNavControls" jscontroller="lSvzH" jsaction="rcuQ6b:npT2md;JIbuQc:V3upec(GeGHKb),HiUbje(M2UYVd),NPBnCf(OCpkoe)" data-shuffle-seed="-2327421662174229681"><div class="freebirdFormviewerViewNavigationButtonsAndProgress"><div class="freebirdFormviewerViewNavigationButtons">



        <input class="enviar" type="submit" value="Enviar datos de inscripción" href="registro" style="background-color:#848484; width: 300px"> 



           <!--</div><div class="freebirdFormviewerViewNavigationProgress"><div class="freebirdFormviewerViewNavigationProgressIndicator" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" aria-labelledby="lpd4pf" role="progressbar"><div class="freebirdFormviewerViewNavigationProgressIndicatorFill done" style="width:100%"></div></div><div id="lpd4pf" class="quantumWizButtonPaperbuttonContent" aria-hidden="true">Página 1 de 1</div></div></div><div class="freebirdFormviewerViewNavigationPasswordWarning">.</div></div> --> 


                            </font>
   
  <script type="text/javascript">
          
        </script>

   
   <script src="{{ asset('public/Js/moment.js') }}"></script>
   <script src="{{ asset('public/Js/bootstrap.min.js') }}"></script>
   <script src="{{ asset('public/Js/bootstrap-datetimepicker.min.js') }}"></script>
   <script src="{{ asset('public/Css/bootstrap.min.css') }}"></script>
   <script src="{{ asset('public/Css/bootstrap-datetimepicker.min.css') }}"></script>



            </form>

           
</div>

                </div>

            </div>

        </div>

       </section>

       <script src="{{asset('public/Js/form.js')}}"></script>
<script language="javascript" type="text/javascript">

    //*** Este Codigo permite Validar que sea un campo Numerico
    function Solo_Numerico(variable){
        Numer=parseInt(variable);
        if (isNaN(Numer)){
            return "";
        }
        return Numer;
    }
    function ValNumero(Control){
        Control.value=Solo_Numerico(Control.value);
    }
    //*** Fin del Codigo para Validar que sea un campo Numerico
    </script>

@stop