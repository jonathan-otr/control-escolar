<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class alumno extends Model
{
  protected $fillable = [
      'matricula', 'nombre', 'fecha_de_ingreso','telefono',
  ];
}
