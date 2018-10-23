<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Area extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('area', function (Blueprint $table) {
            $table->increments('idarea');
            $table->string('nombre');
            $table->string('activo',2);
            $table->rememberToken();
            $table->timestamps();

        });
    }
        public function down()
        {
            Schema::drop('area');
        }
    }