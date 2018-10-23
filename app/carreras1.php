<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class carreras1 extends Model
{
    protected $primaryKey = 'idcarrera';  
    protected $fillable=['idcarrera','nombre','activo'];
}
