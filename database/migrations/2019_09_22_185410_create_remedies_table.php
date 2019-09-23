<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRemediesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('remedies', function (Blueprint $table) {
            $table->increments('id');
            $table->string('generic_name');
            $table->string('factory_name');
            $table->integer('manufacturer_id')->unsigned();       
            $table->boolean('active')->default(true);
            $table->foreign('manufacturer_id')->references('id')->on('remedy_manufacturers'); 
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
        Schema::dropIfExists('remedies');
    }
}
