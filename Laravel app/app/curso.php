<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class curso extends Model
{
  protected $fillable = [
      'id_curso', 'curso_nombre', 'curso_ingles',
  ];
}
