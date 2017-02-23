<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServiceTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('service', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('current_reading')->unsigned();
            $table->integer('next_reading')->unsigned();
            $table->date('next_service');
            $table->decimal('service_charges', 5, 2)->unsigned();
            $table->decimal('total_amount', 5, 2)->unsigned();
            $table->integer('vehicle_id')->unsigned();
            $table->foreign('vehicle_id')->references('id')->on('vehicle');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('service');
    }

}
