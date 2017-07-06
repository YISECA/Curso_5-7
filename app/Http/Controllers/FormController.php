<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB as DB;
use Redirect;
use Validator;
use Session;
use App\Form;
use Idrd\Usuarios\Repo\Departamento;
use Idrd\Usuarios\Repo\Pais;
use Idrd\Usuarios\Repo\Ciudad;
use Idrd\Usuarios\Repo\Localidad;
use Idrd\Usuarios\Repo\Acceso;
use Mail;
class FormController extends BaseController

{
   var $url;
   private function cifrar($M)
    {   

      $C="";
      $k = 18; 
      for($i=0; $i<strlen($M); $i++)$C.=chr((ord($M[$i])+$k)%255);
      return $C;
    }

   private function decifrar($C)
    {   
      $M="";
      $k = 18;
      for($i=0; $i<strlen($C); $i++)$M.=chr((ord($C[$i])-$k+255)%255);
      return $M;
    }

    public function listar_datos(){

    $acceso = Form::with('localidades','actividades')->whereYear('created_at', '=', date('Y'))->get(); 


    $tabla='<table id="lista">
<center><h3><font size="5" face="Comic Sans MS,arial,verdana"> CONSULTA EVENTOS REGISTRADOS DÍA DEL DESAFÍO 2017</font></h3></center>
        <thead>
           <tr>
             <th style="text-transform: capitalize;">Actividad</th>
             <th style="text-transform: capitalize;">Hora</th>
             <th style="text-transform: capitalize;">Entidad</th>
             <th style="text-transform: capitalize;">Sector</th>
             <th style="text-transform: capitalize;">Dirección</th>
             <th style="text-transform: capitalize;">Localidad</th>
             <th style="text-transform: capitalize;">Coordinador</th>
             <th style="text-transform: capitalize;">Teléfono</th>
             <th style="text-transform: capitalize;">Hombres</th>
             <th style="text-transform: capitalize;">Mujeres</th>
             <th style="text-transform: capitalize;">Total</th>
             <th style="text-transform: capitalize;">Observaciones</th>          
            </tr>
        </thead>

        <tbody id="tabla">';

      foreach ($acceso as $key => $value) 
      {
   
       $tabla.='<tr><td>'.$value->actividades['actividad'].'</td>';
       $tabla.='<td>'.$value->hora.'</td>';
       $tabla.='<td>'.$value->entidad.'</td>';
       $tabla.='<td>'.$value->sector.'</td>';
       $tabla.='<td>'.$value->direccion.'</td>';
       $tabla.='<td>'.$value->localidades['localidad'].'</td>';
       $tabla.='<td>'.$value->nombre_coordinador.'</td>';
       $tabla.='<td>'.$value->telefono.'</td>';
       $tabla.='<td>'.$value->hombres.'</td>';
       $tabla.='<td>'.$value->mujeres.'</td>';
       $tabla.='<td>'.($value->mujeres+$value->hombres).'</td>';
       $tabla.='<td>'.$value->observaciones.'</td></tr>';
      }

      $tabla.='</tbody></table>';
      echo $tabla;
    }

  
public function logear(Request $request){



      $usuario = $request->input('usuario');
      $pass = $request->input('pass');
      $acceso = Acceso::where('Usuario',$usuario)->where('Contrasena', sha1($this->cifrar($pass)) )->first();
      if (empty($usuario)) { return view('error',['error' => 'Usuario o contraseña invalida!'] ); exit(); }
      if (empty($acceso)) { return view('error',['error' => 'Usuario o contraseña invalida!'] ); exit(); }    
      session_start() ;

      $_SESSION['id_usuario'] = json_encode($acceso);
      return view('admin'); exit();       

    }


//insertar

public function insertar(Request $request){

      $post = $request->input();
      $formulario = new Form([]);

        //envio de correo

      if($this->inscritos()<=50){


      $this->store($formulario, $request->input());

      $id = $formulario->id;

      }else{
      return view('error', ['error' => 'Lo sentimos el limite de inscritos fue superado!']);

      }
        //envio de correo
        return view('error', ['error' => 'Registro exitoso']);
    }



    //fin insertar
   
// conteo de la tabla

    private function inscritos(){

      $cant = Form::count('id');

      return $cant+1;

    }

    private function store($formulario, $input)

    {
        $formulario['actividad'] = $input['actividad'];
        $formulario['tipo_actividad'] = $input['tipo_actividad'];
        $formulario['hora'] = $input['hora'];
        $formulario['nombre_coordinador'] = $input['nombre_coordinador'];
        $formulario['telefono'] = $input['telefono'];
        $formulario['entidad'] = $input['entidad'];
        $formulario['sector'] = $input['sector'];
        $formulario['localidad'] = $input['localidad'];
        $formulario['direccion'] = $input['direccion'];
        $formulario['hombres'] = $input['hombres'];
        $formulario['mujeres'] = $input['mujeres'];
         $formulario['observaciones'] = $input['observaciones'];
        $formulario->save();


        return $formulario;

        

    }

}

