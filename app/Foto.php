<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Foto extends Model
{
  protected $table = 'fotos';
  protected $fillable = [
      'Nombre','id_Familia','created_at','updated_at','tipo',
      ];
    public function Familia()
       {
           return $this->belongsTo('App\Familia','id_Familia');
       }
}
