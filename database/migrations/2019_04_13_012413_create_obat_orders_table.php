<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateObatOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('obat_orders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('id_order');
            $table->foreign('id_order')->references('id')->on('orders')->onDelete('cascade');
            $table->unsignedBigInteger('id_obat');
            $table->foreign('id_obat')->references('id')->on('obats')->onDelete('cascade');
             $table->integer('quantity')->unsigned()->defaults(1);
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
      Schema::table('obat_orders', function(Blueprint $table){
       $table->dropForeign(['id_order']);
       $table->dropForeign(['id_obat']);
       });

        Schema::dropIfExists('obat_orders');
    }
}
