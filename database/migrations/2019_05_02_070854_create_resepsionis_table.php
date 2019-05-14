<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResepsionisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resepsionis', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name_front');
            $table->string('username_front')->unique();
            $table->string('password_front');
            $table->string('address_front');
            $table->string('hp_front');
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
        Schema::dropIfExists('resepsionis');
    }
}
