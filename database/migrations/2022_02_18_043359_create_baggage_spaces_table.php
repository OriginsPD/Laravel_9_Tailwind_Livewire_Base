<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBaggageSpacesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();

        Schema::create('baggage_spaces', function (Blueprint $table) {
            $table->id();
            $table->foreignId('vehicleDetails_id')->constrained('vehicle_details');
            $table->integer('large')->default(0);
            $table->integer('medium')->default(0);
            $table->integer('small')->default(0);
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('baggage_spaces');
    }
}
