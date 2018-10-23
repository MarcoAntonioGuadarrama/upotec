<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Clasificacion extends Migration
{

    public function up()
    {   
        Schema::create('clasificacion', function (Blueprint $table) {
            $table->increments('idcla');
            $table->string('nombre');
            $table->string('activo',2);
            $table->rememberToken();
            $table->timestamps();
    
        });
    }
        public function down()
        {
            Schema::drop('clasificacion');
        }
}