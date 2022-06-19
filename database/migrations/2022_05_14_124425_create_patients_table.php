<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('age');
            $table->string('address');
            $table->string('national_id');
            $table->string('email');
            $table->string('phone');
            $table->boolean('is_have_chronic_disease');
            $table->string('surgeries_before')->default(false);
            $table->string('serious_injuries_before')->default(false);
            $table->string('blood_type');
            $table->bigInteger('glucose_measurement');
            $table->bigInteger('pressure_gauge');
            $table->integer('is_avalible')->default(1)->nullable();
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
        Schema::dropIfExists('patients');
    }
}
