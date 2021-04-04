<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCruceIdToFaseTransicionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('fase_transicion', function (Blueprint $table) {
            $table->integer('cruce_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('fase_transicion', function (Blueprint $table) {
            $table->dropColumn('cruce_id');
        });
    }
}
