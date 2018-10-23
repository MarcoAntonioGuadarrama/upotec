<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class clasificacion extends Model
{
    protected $primaryKey = 'idcla';  
    protected $fillable=['idcla','nombre','activo'];
}
