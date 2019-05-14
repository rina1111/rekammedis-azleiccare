<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDoktersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dokters', function (Blueprint $table) {

            $table->bigIncrements('id');
            $table->string('nip')->unique();
            $table->string('name_dokter');
            $table->string('specialist');
            $table->string('address');
            $table->string('hp');
            $table->string('avatar');
            $table->string('username');
            $table->string('password');
            $table->string('status_dokter');
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
        Schema::dropIfExists('dokters');
    }
}
