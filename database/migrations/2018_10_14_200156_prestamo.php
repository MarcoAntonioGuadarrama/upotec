<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Prestamo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prestamo', function (Blueprint $table) {
            $table->increments('idprestamo');
            $table->string('nombre',40);
            $table->string('fecha salida');
            $table->string('fecha entrada');
            
            $table->integer('idlib')->unsigned();
            $table->foreign('idlib')->references('idlib')->on('libros');

            $table->integer('idalumno')->unsigned();
            $table->foreign('idalumno')->references('idalumno')->on('alumnos');

            $table->integer('idemple')->unsigned();
            $table->foreign('idemple')->references('idemple')->on('empleados');

            $table->integer('identificacion')->unsigned();
            $table->foreign('identificacion')->references('identificacion')->on('identificaciones');
            $table->rememberToken();
            $table->timestamps();

        });
    }
        public function down()
        {
            Schema::drop('prestamo');
        }
    }