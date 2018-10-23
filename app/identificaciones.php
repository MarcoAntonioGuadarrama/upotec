<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class identificaciones extends Model
{
    protected $primaryKey = 'identificacion';  
    protected $fillable=['identificacion','nombre','activo'];
}
