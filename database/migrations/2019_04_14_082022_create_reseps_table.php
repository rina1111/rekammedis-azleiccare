<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResepsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reseps', function (Blueprint $table) {
          $table->bigIncrements('id');
          $table->unsignedBigInteger('visitor_id');
          $table->foreign('visitor_id')->references('id')->on('visits')->onDelete('cascade');
          $table->unsignedBigInteger('obat_id');
          $table->foreign('obat_id')->references('id')->on('obats')->onDelete('cascade');
          $table->string('dosis');
          $table->string('konsumsi');
          $table->integer('jumlah');
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
        Schema::dropIfExists('reseps');
    }
}
