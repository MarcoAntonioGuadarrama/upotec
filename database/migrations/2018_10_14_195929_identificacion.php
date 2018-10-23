<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Identificacion extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('identificaciones', function (Blueprint $table) {
            $table->increments('identificacion');
            $table->string('nombre');
            $table->string('activo',2);
            $table->rememberToken();
            $table->timestamps();

        });
    }
        public function down()
        {
            Schema::drop('identificaciones');
        }
    }
