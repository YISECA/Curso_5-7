<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Form extends Model

{    //
  protected $table = 'inscripciones_2017';
  protected $primaryKey = 'id';
  protected $fillable = ['localidad','actividad'];

  public function localidades()
   {
       return $this->belongsTo('App\Localidad','localidad');
   }

   public function actividades()
   {
       return $this->belongsTo('App\Actividad','actividad');
   }
}






