<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Eventos extends Model
{
    //
  protected $table = 'evento';

  public function torneos()
  {
	return $this->belongsTo('App\Torneos', 'id_torneo');
  }
  public function niveles()
  {
	return $this->hasMany('App\Nivel', 'id_evento');
  }
}

