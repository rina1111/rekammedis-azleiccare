<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('id_pembeli');
            $table->foreign('id_pembeli')->references('id')->on('visits')->onDelete('cascade');
           $table->float('total_price')->unsigned()->defaults(0);
           $table->string('invoice_number');
           $table->enum('status', ['SUBMIT', 'PROCESS', 'FINISH',
          'CANCEL']);
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

        Schema::dropIfExists('orders');
    }
}
