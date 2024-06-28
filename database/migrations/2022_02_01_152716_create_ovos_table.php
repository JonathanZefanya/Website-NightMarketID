<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOvosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ovos', function (Blueprint $table) {
            $table->id();
            $table->string('RefId', 50);
            $table->string('UpdateAccessToken', 50);
            $table->string('AuthToken', 1000);
            $table->string('SaldoOvo', 50);
            $table->string('Expired', 50);
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
        Schema::dropIfExists('ovos');
    }
}
