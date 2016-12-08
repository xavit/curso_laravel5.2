<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Telefono extends Model
{

	protected $table = 'telefonos';//nombre de la tabla
	protected $primaryKey = 'id';//campo id_primario de la tabla
	//protected $dateFormat = 'dd/mm/YY';//para fechas
	//public $timestamps = false;

	/**
   * Get the post that owns the comment.
   */
  public function owner()
  {
    return $this->belongsTo('App\Persona', 'persona_id');
  }

}
