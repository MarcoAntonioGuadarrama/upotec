<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Libros extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Libros', function (Blueprint $table) {
            $table->increments('idlib');
            $table->string('nombre',100);
            $table->string('editorial');
            $table->string('autor');
            $table->integer('paginas');
            $table->integer('año');
            $table->string('activo',2);
            $table->integer('idcla')->unsigned();
            $table->foreign('idcla')->references('idcla')->on('clasificacion');
            $table->rememberToken();
            $table->timestamps();

    });
}
    public function down()
    {
        Schema::drop('libros');
    }
}
