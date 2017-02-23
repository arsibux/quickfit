<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVehicleTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('vehicle', function (Blueprint $table) {
            $table->increments('id');
            $table->string('reg_no',20)->unique();
            $table->integer('color');
            $table->string('vehicle_company');
            $table->integer('customer_id')->unsigned();
            $table->date('model_year',4);
            $table->timestamps();
            $table->foreign('customer_id')->references('id')->on('customer');
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('vehicle');
    }

}
