<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Idrd\Usuarios\Repo\PersonaInterface;
use App\Actividad;
use App\Eventos;
use App\Nivel;
use App\Categoria;
use App\Modalidad;
use App\Edad;
use App\Localidad;

class MainController extends Controller {

	protected $Usuario;
	protected $repositorio_personas;

	public function __construct(PersonaInterface $repositorio_personas)
	{
		if (isset($_SESSION['Usuario']))
			$this->Usuario = $_SESSION['Usuario'];

		$this->repositorio_personas = $repositorio_personas;
	}

//actividad
	public function index()
  	{

  		

  		$data = ['actividades' => Actividad::get(),'localidades' => Localidad::get()];
		return view('welcome', $data);


		//$data = ['localidades' => Localidad::get()];
		//return view('welcome', $data);
	}


	//edad
	public function traer_edades(Request $request)
	//Eventos es el nombre del class model
  	{
  		$edad = Modalidad::with('edades')->find($request->input('id_modalidad'));
		$edades = $edad->edades;
		$lista='<option value="" selected="selected" >Seleccione</option>';
	    foreach ($edades as $edad) {
	    $lista .= '<option value="'.$edad['id_edad'].'">'.$edad['edad'].'</option>';
	    }
	    echo $lista;

	}



	public function logout()
	{
		$_SESSION['Usuario'] = '';
		session('Usuario', '');

		return redirect()->to('../');
	}
}
