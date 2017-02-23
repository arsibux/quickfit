<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServiceItemTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('service_item', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->decimal('price', 5, 2)->unsigned();
            $table->integer('service_id')->unsigned()->index();
            $table->foreign('service_id')->references('id')->on('service');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('service_item');
    }
}
