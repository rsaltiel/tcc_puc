<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConsultationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('consultations', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('doctor_id')->unsigned(); 
            $table->integer('patient_id')->unsigned(); 
            $table->date('date');
            $table->string('start', 5);
            $table->string('end', 5);
            $table->boolean('active')->default(true);
            $table->foreign('doctor_id')->references('id')->on('users'); 
            $table->foreign('patient_id')->references('id')->on('patients'); 
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
        Schema::dropIfExists('consultations');
    }
}
