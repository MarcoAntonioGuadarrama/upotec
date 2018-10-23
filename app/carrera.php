<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class carrera extends Model
{
    protected $primaryKey = 'idc';  
    protected $fillable=['idc','nombre','activo'];
}
