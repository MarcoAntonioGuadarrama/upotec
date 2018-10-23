<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class prestamo extends Model
{
    protected $primaryKey = 'idprestamo';  
    protected $fillable=['idprestamo','nombre','fecha salida','fecha entrada'];
}
