<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class libro extends Model
{
    protected $primaryKey = 'idlib';  
    protected $fillable=['idlib','nombre','editorial','autor','paginas','año','activo'];
}
