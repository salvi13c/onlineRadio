<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class StationsMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stations', function (Blueprint $table) {
            $table->bigIncrements('id')->unique(); 
            $table->string('name');
            $table->text('description');
            $table->string('image');
            $table->bigInteger('genere')->unsigned();
            $table->bigInteger('country')->unsigned();
            $table->string('url');
            $table->timestamps();
            $table->foreign('genere')->references('id')->on('generes')->onDelete('cascade');
            $table->foreign('country')->references('id')->on('countries')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('stations');
    }
}
