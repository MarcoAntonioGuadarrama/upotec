<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class empleados extends Model
{
    protected $primaryKey = 'idemple';  
    protected $fillable=['idemple','nombre','apellido','telefono','activo'];
}
