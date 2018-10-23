<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class libros extends Model
{
    protected $primaryKey = 'idlib';  
    protected $fillable=['idlib','nombre','editorial','autor','paginas','año','activo'];
}
