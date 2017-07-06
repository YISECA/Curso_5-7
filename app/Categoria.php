<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    //
  protected $table = 'categoria';
  protected $primaryKey = 'id_categoria';

  public function nivel()
  {
	return $this->belongsTo('App\Nivel', 'id_nivel');
  }
   public function modalidades()
  {
	return $this->hasMany('App\Modalidad', 'id_categoria');
  }
}

