<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TopCharts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('topcharts', function (Blueprint $table) {
            $table->bigIncrements('id')->unique(); 
            $table->string('song');
            $table->string('artist');
            $table->bigInteger('genere')->unsigned();
            $table->timestamps();
            $table->foreign('genere')->references('id')->on('generes');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('topcharts');
    }
}
