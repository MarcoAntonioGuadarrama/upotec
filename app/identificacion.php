<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class identificacion extends Model
{
    protected $primaryKey = 'identificacion';  
    protected $fillable=['identificacion','nombre','activo'];
}
