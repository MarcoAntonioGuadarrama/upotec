<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class prestamos extends Model
{
    protected $primaryKey = 'idprestamo';  
    protected $fillable=['idprestamo','nombre','fecha salida','fecha entrada'];
}
