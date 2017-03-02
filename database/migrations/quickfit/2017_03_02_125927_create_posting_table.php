<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostingTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('posting', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('transaction_id')->index();
            $table->decimal('amount', 13, 2);
            $table->string('dr_cr', 2);
            $table->foreign('transaction_id')->references('id')->on('transaction');
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
        Schema::dropIfExists('posting');
    }

}
