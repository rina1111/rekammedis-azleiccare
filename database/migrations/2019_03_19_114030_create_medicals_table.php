<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMedicalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medicals', function (Blueprint $table) {
            $table->bigIncrements('id_rm');
            $table->unsignedBigInteger('id_visitor');
            $table->foreign('id_visitor')->references('id')->on('visits')->onDelete('cascade');
            $table->text('diagnosa');
            $table->longtext('keluhan');
            $table->longtext('saran');
            $table->decimal('fee');
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
        Schema::dropIfExists('medicals');
    }
}
