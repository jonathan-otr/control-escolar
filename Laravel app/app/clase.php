<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class clase extends Model
{
  protected $fillable = [
      'id_clase', 'id_curso', 'matricula',
  ];
}
