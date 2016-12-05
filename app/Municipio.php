<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Municipio extends Model
{
  protected $table = 'municipios';
  protected $primaryKey = 'id_municipios';
  protected $fillable = [
      'id_municipios','Nombre',
  ];

}
