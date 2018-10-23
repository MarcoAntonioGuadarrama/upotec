<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class areas extends Model
{
    protected $primaryKey = 'idarea';  
    protected $fillable=['idarea','nombre','activo'];
}
