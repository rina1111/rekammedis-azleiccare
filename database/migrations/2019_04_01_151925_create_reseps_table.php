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
            $table->bigIncrements('id_resep');
            $table->unsignedBigInteger('id_visitor');
            $table->foreign('id_visitor')->references('id')->on('visits')->onDelete('cascade');
            $table->string('obat');
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
