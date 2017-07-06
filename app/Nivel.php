<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nivel extends Model
{
    //
  protected $table = 'nivel';
  protected $primaryKey = 'id_nivel';

  public function evento()
  {
	return $this->belongsTo('App\Eventos', 'id_evento');
  }
   public function categorias()
  {
	return $this->hasMany('App\Categoria', 'id_nivel');
  }
}

