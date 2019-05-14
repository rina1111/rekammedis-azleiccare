<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCartsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carts', function (Blueprint $table) {
          $table->bigIncrements('id');
          $table->unsignedBigInteger('id_visit');
          $table->foreign('id_visit')->references('id')->on('visits')->onDelete('cascade');
          $table->unsignedBigInteger('idobat');
          $table->foreign('idobat')->references('id')->on('obats')->onDelete('cascade');
           $table->integer('quantity')->unsigned()->defaults(0);
           $table->float('total')->unsigned()->defaults(0);
           $table->float('subtotal')->unsigned()->defaults(0);
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
        Schema::dropIfExists('carts');
    }
}
