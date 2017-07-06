<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Torneos extends Model
{
    //
  protected $table = 'torneo';

  public function eventos(){
	
	return $this->hasMany('App\Eventos','id_torneo');

   }

}

