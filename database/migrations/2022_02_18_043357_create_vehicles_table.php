<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVehiclesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();

        Schema::create('vehicles', function (Blueprint $table) {
            $table->id();
            $table->string('modal');
            $table->foreignId('brand_id')->constrained();
            $table->foreignId('category')->constrained('categories','id');
            $table->double('weekly_fee', 8, 2);
            $table->double('daily_fee', 8, 2);
            $table->boolean('status')->default(0);
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
        Schema::dropIfExists('vehicles');
    }
}
