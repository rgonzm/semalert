<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLorasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('loras', function (Blueprint $table) {
            $table->id();
            $table->text('modelo');
            $table->integer('frecuencia');
            $table->integer('direccion');
            $table->integer('velocidad_datos_aire');
            $table->integer('velocidad_baudios');
            $table->char('pariedad');
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
        Schema::dropIfExists('loras');
    }
}
