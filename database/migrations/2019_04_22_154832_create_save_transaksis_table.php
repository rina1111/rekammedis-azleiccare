<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSaveTransaksisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('save_transaksis', function (Blueprint $table) {
            $table->bigIncrements('save_transaksi_id');
            $table->string('nama');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('visits')->onDelete('cascade');
            $table->string('code');
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
        Schema::dropIfExists('save_transaksis');
    }
}
