<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVehiclesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('make')->nullable();
            $table->string('model')->nullable();
            $table->string('model_code')->nullable();
            $table->string('submodel')->nullable();
            $table->string('year')->nullable();
            $table->string('colour')->nullable();
            $table->string('body_type')->nullable();
            $table->string('vin_number')->nullable();
            $table->string('plate');
            $table->string('engine_number')->nullable();
            $table->string('chassis_id')->nullable();
            $table->string('cc_rating')->nullable();
            $table->string('fuel_type')->nullable();
            $table->string('transmission')->nullable();
            $table->string('country_of_origin')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vehicles');
    }
}
