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
  public function familias()
     {
         return $this->hasMany('App\Familia','id_Municipios','id_municipios');

     }
}
