<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    /**
    * The table associated with the model.
    *
    * @var string
    */
   	protected $table = 'personas';//nombre de la tabla
   	protected $primaryKey = 'id';//campo id_primario de la tabla
   	protected $dateFormat = 'Y-m-d';//para fechas
    protected $dates = ['cumple'];
   	//public $timestamps = false;

   	/**
      * Get the comments for the blog post.
      */
     public function telefonos()
     {
       return $this->hasMany('App\Telefono');
     }

}
