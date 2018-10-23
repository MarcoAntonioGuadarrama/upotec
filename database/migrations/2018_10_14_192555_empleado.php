<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Empleado extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empleados', function (Blueprint $table) {
            $table->increments('idemple');
            $table->string('nombre',40);
            $table->string('apellido paterno');
            $table->string('apellido materno');
            $table->string('calle');
            $table->string('colonia');
            $table->string('municipio');
            $table->integer('codigo postal');
            $table->string('correo');
            $table->integer('telefono');
            $table->string('activo',2);
            $table->integer('idarea')->unsigned();
            $table->foreign('idarea')->references('idarea')->on('area');
            $table->rememberToken();
            $table->timestamps();

        });
    }
        public function down()
        {
            Schema::drop('empleados');
        }
    }
