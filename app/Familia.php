<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Familia extends Model
{
  public $timestamps = false;
  protected $table = 'familias';
  protected $fillable = [
      'Nombre','id_Municipios',
  ];

  public function Municipio()
  {
    return $this->belongsTo('App\Municipio','id_Municipios');
  }
  public function Fotos()
  {
    return $this->hasMany('App\Foto','id_Familia','id');
  }
}
