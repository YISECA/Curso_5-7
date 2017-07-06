<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Modalidad extends Model
{
    //
  protected $table = 'modalidad';
  protected $primaryKey = 'id_modalidad';

  public function modalidad()
  {
	return $this->belongsTo('App\categoria', 'id_categoria');
  }
   public function Edades()
  {
	return $this->hasMany('App\Edad', 'id_modalidad');
  }
}

