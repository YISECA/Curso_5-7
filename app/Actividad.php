<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Actividad extends Model
{
    //
  protected $table = 'actividad';
  protected $primaryKey = 'id_actividad';
  protected $fillable = ['actividad'];

    public function forms(){

   	return $this->hasMany('App\Form','actividad');

   }
}
