<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Alumno extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alumnos', function (Blueprint $table) {
            $table->increments('idalumno');
            $table->string('nombre',40);
            $table->string('apellido paterno');
            $table->string('apellido materno');
            $table->integer('matricula');
            $table->string('telefono');
            $table->string('correo');
            $table->string('calle');
            $table->string('colonia');
            $table->string('municipio');
            $table->integer('codigo postal');
            $table->string('activo',2);
            $table->integer('idcarrera')->unsigned();
            $table->foreign('idcarrera')->references('idcarrera')->on('carreras');
            $table->rememberToken();
            $table->timestamps();

        });
    }
        public function down()
        {
            Schema::drop('alumnos');
        }
    }
