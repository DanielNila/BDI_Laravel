<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAutobusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('autobuses', function (Blueprint $table) {
            $table->increments('id_autobus');
            $table->string('placas');
            $table->string('marca');
            $table->string('modelo');
            $table->string('no_serie');
            $table->string('estado');
            $table->integer('cupo');
            $table->integer('id_linea');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('autobuses');
    }
}
