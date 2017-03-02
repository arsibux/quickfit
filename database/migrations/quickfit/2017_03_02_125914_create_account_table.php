<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAccountTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('account', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',45)->unique();
            $table->integer('acc_type_id')->index();
             $table->foreign('acc_type_id')->references('id')->on('account_type');
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
        Schema::dropIfExists('account');
    }

}
