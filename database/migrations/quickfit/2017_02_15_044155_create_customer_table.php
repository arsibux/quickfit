<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomerTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('customer', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 45);
            $table->string('gender', 1);
            $table->date('dob');
            $table->string('nic', 15)->unique();
            $table->string('cell_number', 14);
            $table->string('address', 14);
            $table->timestamps();
            $table->integer('company_id')->unsigned();
            $table->foreign('company_id')->references('id')->on('company');
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('customer');
    }

}
