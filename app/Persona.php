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
   	protected $table = 'personas';
   	protected $primaryKey = 'id';
}
