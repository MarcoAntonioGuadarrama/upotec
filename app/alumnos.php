<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class alumnos extends Model
{
    protected $primaryKey = 'idalumno';  
    protected $fillable=['idalumno','nombre','apellido','telefono','matricula','activo'];
}
