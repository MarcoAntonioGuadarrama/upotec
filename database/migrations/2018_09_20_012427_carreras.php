<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Carreras extends Migration
{
 
    public function up()
    {
         Schema::create('carreras', function (Blueprint $table) {
                    $table->increments('idc');
					$table->string('nombre',40);
					$table->string('activo',2);
					$table->rememberToken();
				    $table->timestamps();
        });
    }

 
    public function down()
    {
      Schema::drop('carreras');
    }
}



