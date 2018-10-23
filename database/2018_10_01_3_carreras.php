<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Carreras extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    { 
    Schema::create('carreras', function (Blueprint $table) {
        $table->increments('idcarrera');
        $table->string('nombre');
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
