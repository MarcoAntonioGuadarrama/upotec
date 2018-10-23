<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class alumno extends Model
{
    protected $primaryKey = 'idalumno';  
    protected $fillable=['idalumno','nombre','apellido paterno','apellido materno',
    'matricula','telefono','correo','calle','colonia','municipio','codigo postal','activo'];
}
