@extends('master')                              
@section('script')
@parent
   <script src="{{ asset('public/Js/ingresar_participantes.js') }}"></script>
@stop


@section('content') 



    <link rel="stylesheet" type="text/css" href="public/Css/form.css">

    

	<form method="POST" action="insertar" id="form_gen" enctype="multipart/form-data">



	

    <section id="page1">

    	<div class="panel panel-default">

  	<div class="panel-heading">

          <h4>Registrar Integrantes al Equipo  o Institución <span style="color:red"> {{$equipo->nombre_institucion}}</span> </h4> 
          <h4>Rango de edad de integrantes en esta categoría: <span style="color:red" id="rango">{{ $equipo->rangoEdad['edad'] }}</span></h4>
          <h4 ># Participantes registrados en este Equipo O Institución : <span style="color:red" id="cuenta"></span></h4>
   </div>

  	<div class="panel-body">


  	<div class="row">
  	<br>
  <!-- id del equipo-->	
<input type="hidden" class="form-control" id="id" name="id" value="{{$equipo->id}}" >


  	<div class="col-md-6"><label class="freebirdFormviewerViewItemsItemItemTitle" for="formGroupExampleInput2">Tipo de Documento <span style="color: red;font-size: 11px;text-transform: capitalize;color:red">(Campo Obligatorio)</span></label></div>
       <div class="col-md-6">
			<label class="freebirdFormviewerViewItemsItemItemTitle" for="formGroupExampleInput">Documento de identidad <span style="color: red;font-size: 11px;text-transform: capitalize;color:red">(Campo Obligatorio)</span></label></div>
       

          <div class="col-md-6"><select name="tipo_documento" id="tipo_documento" class="form-control" >
				<option value="1">Cédula de Ciudadanía</option>
                      <option value="2">Tarjeta de Identidad</option>
                      <option value="3">Registro Civil</option>
                      <option value="4">Cédula de Extranjería</option>
                      <option value="5">Documento Nacional de Identidad</option>
                      <option value="6">Pasaporte</option>
			</select></div>

       <div class="col-md-6"><input title="Se necesita una cedula" required type="number" class="form-control" id="cedula" name="cedula" ><br></div>
       

<div class="col-md-6">
			<label class="freebirdFormviewerViewItemsItemItemTitle" for="formGroupExampleInput2">Fecha de Nacimiento <span style="color: red;font-size: 11px;text-transform: capitalize;color:red">(Campo Obligatorio)</span></label>

			<label class="freebirdFormviewerViewItemsPagebreakDescriptionText" style="font-size:11px">

			Diligenciar en MAYÚSCULA y tal cual como aparece en el documento de identidad

			</label>
       </div>
       <div class="col-md-6"><label class="freebirdFormviewerViewItemsItemItemTitle" for="formGroupExampleInput2">Edad </label>

			<label class="freebirdFormviewerViewItemsPagebreakDescriptionText" style="font-size:11px">

			Diligenciar en MAYÚSCULA y tal cual como aparece en el documento de identidad

			</label></div>


       <div class="col-md-6"><input required type="text" class="form-control" id="fecha_nacimiento" name="fecha_nacimiento"></div>
       <div class="col-md-6"><input type="text" class="form-control" id="TX_Ed" name="TX_Ed"  onclick="javascript:calcularEdad();"><br></div>




       <div class="col-md-6">
			<label class="freebirdFormviewerViewItemsItemItemTitle" for="formGroupExampleInput2">Nombres<span style="color: red;font-size: 11px;text-transform: capitalize;color:red">(Campo Obligatorio)</span></label>

			<label class="freebirdFormviewerViewItemsPagebreakDescriptionText" style="font-size:11px">

			Diligenciar en MAYÚSCULA y tal cual como aparece en el documento de identidad

			</label>
       </div>
       <div class="col-md-6"><label class="freebirdFormviewerViewItemsItemItemTitle" for="formGroupExampleInput2">Apellidos </label>

			<label class="freebirdFormviewerViewItemsPagebreakDescriptionText" style="font-size:11px">

			Diligenciar en MAYÚSCULA y tal cual como aparece en el documento de identidad

			</label></div>


       <div class="col-md-6"><input required type="text" class="form-control" id="primer_nombre" name="primer_nombre" onkeyup="javascript:this.value=this.value.toUpperCase();" ></div>
       <div class="col-md-6"><input required type="text" class="form-control" id="segundo_nombre" name="segundo_nombre"  onkeyup="javascript:this.value=this.value.toUpperCase();"></div>


       <div class="col-md-6"><label class="freebirdFormviewerViewItemsItemItemTitle" for="formGroupExampleInput2">

			Teléfono <span style="color: red;font-size: 11px;text-transform: capitalize;color:red">(Campo Obligatorio)</span>

			</label>

			<label class="freebirdFormviewerViewItemsPagebreakDescriptionText" style="font-size:11px">

			Seleccione su teléfono

			</label></div>
       <div class="col-md-6"><label class="freebirdFormviewerViewItemsItemItemTitle" for="formGroupExampleInput2">

			Eps <span style="color: red;font-size: 11px;text-transform: capitalize;color:red">(Campo Obligatorio)</span>

			</label>

			<label class="freebirdFormviewerViewItemsPagebreakDescriptionText" style="font-size:11px">

			Seleccione de acuerdo a la fecha de su nacimiento

			</label>
</div>
       <div class="col-md-6"><input required type="text" class="form-control" id="telefono" name="telefono"></div>
       <div class="col-md-6"><input required type="text" class="form-control" id="eps" name="eps" onkeyup="javascript:this.value=this.value.toUpperCase();" ><br></div>     
   </div>

		</fieldset>

		 <div class="freebirdFormviewerViewFormContent "><div class="freebirdFormviewerViewHeaderHeader"><div class="freebirdFormviewerViewHeaderTitleRow"><div class="freebirdFormviewerViewHeaderTitle" dir="auto" role="heading" aria-level="1"></div></div><div class="freebirdFormviewerViewHeaderRequiredLegend" aria-hidden="true" dir="auto"></div></div><div class="freebirdFormviewerViewItemList" role="list"><div class="freebirdMaterialHeaderbannerLabelContainer freebirdFormviewerViewItemsPagebreakBanner" jsname="bLLMxc" role="heading"><div class="freebirdMaterialHeaderbannerLabelTextContainer freebirdSolidBackground freebirdMaterialHeaderbannerPagebreakBanner"><div class="freebirdMaterialHeaderbannerPagebreakText freebirdFormviewerViewItemsPagebreakBannerText"></div></div></div><div class="freebirdFormviewerViewItemsPagebreakDescriptionText"></div><div role="listitem" class="freebirdFormviewerViewItemsItemItem" jsname="ibnC6b" jscontroller="hIYTQc" jsaction="JIbuQc:qzJD1c;sPvj8e:e4JwSe" data-required="true" data-other-input="qSV85" data-other-hidden="MfYA1e" data-item-id="131124881"><div class="freebirdFormviewerViewItemsItemItemheader"><div class="freebirdFormviewerViewItemsItemItemTitleContainer"><div class="freebirdFormviewerViewItemsItemItemTitle" dir="auto" id="i1" role="heading" aria-level="2" aria-describedby="i.desc.131124881">Términos de inscripción <span class="freebirdFormviewerViewItemsItemRequiredAsterisk" aria-hidden="true">*</span></div><div class="freebirdFormviewerViewItemsItemItemHelpText" id="i.desc.131124881" dir="auto"><br>Usted acepta y cumple con los requisitos exigidos en la presente Resolución</div></div></div><div jsname="JNdkSc" role="group" aria-labelledby="i1" aria-describedby="i.desc.131124881 i.err.131124881 i.req.131124881" class=""><div class="" jsname="MPu53c" jscontroller="GJQA8b" jsaction="JIbuQc:aj0Jcf" data-value="Acepto"><div class="freebirdFormviewerViewItemsCheckboxChoice"><label class="docssharedWizToggleLabeledContainer freebirdFormviewerViewItemsCheckboxContainer"><div class="exportLabelWrapper"><input type="checkbox" required style="float: left;

margin: 0px;" name="acepto" id="acepto"><div class="docssharedWizToggleLabeledContent"><div class="docssharedWizToggleLabeledPrimaryText"><span dir="auto" class="docssharedWizToggleLabeledLabelText freebirdFormviewerViewItemsCheckboxLabel">Acepto</span></div></div></div></label></div><input name="entry.1642827248" jsname="ekGZBc" disabled="" type="hidden"></div></div><div id="i.req.131124881" class="screenreaderOnly"></div><div jsname="XbIQze" class="freebirdFormviewerViewItemsItemErrorMessage" id="i.err.131124881" role="alert"></div></div></div><div class="freebirdFormviewerViewNavigationNavControls" jscontroller="lSvzH" jsaction="rcuQ6b:npT2md;JIbuQc:V3upec(GeGHKb),HiUbje(M2UYVd),NPBnCf(OCpkoe)" data-shuffle-seed="-2327421662174229681"><div class="freebirdFormviewerViewNavigationButtonsAndProgress"><div class="freebirdFormviewerViewNavigationButtons">


<div class="form-group">
  <button type="button" id="enviar"  class="btn btn-info">Registrar participante en el grupo</button>
</div>
<input class="enviar" type="submit" value="Enviar">



</div><div class="freebirdFormviewerViewNavigationProgress"><div class="freebirdFormviewerViewNavigationProgressIndicator" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" aria-labelledby="lpd4pf" role="progressbar"><div class="freebirdFormviewerViewNavigationProgressIndicatorFill done" style="width:100%"></div></div><div id="lpd4pf" class="quantumWizButtonPaperbuttonContent" aria-hidden="true">Página 1 de 1</div></div></div><div class="freebirdFormviewerViewNavigationPasswordWarning">.</div></div>



	

 



	</form>

	<script type="text/javascript" src="public/Js/form.js" ></script>

@stop



