<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Edad extends Model
{
    //
  protected $table = 'edad';
  protected $primaryKey = 'id_edad';
  

  public function edad()
  {
	return $this->belongsTo('App\modalidad', 'id_modalidad');
  }
}

