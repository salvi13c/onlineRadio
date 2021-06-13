<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class HistorialMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('listen_historial', function (Blueprint $table) {
            $table->bigIncrements('id')->unique(); 
            $table->text('uidd')->unique(); 
            $table->bigInteger('station_id')->unsigned();
            $table->timestamp('date')->useCurrent();
            $table->foreign('station_id')->references('id')->on('stations')->onDelete('cascade');
            $table->foreign('uidd')->references('uidd')->on('users_table')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('listen_historial');
    }
}
