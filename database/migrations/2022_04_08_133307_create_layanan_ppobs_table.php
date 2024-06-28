<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLayananPpobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('layanan_ppobs', function (Blueprint $table) {
            $table->id();
            $table->string('kategori_id');
            $table->string('brand');
            $table->string('layanan');
            $table->string('provider_id');
            $table->string('tipe_layanan');
            $table->string('tipe');
            $table->bigInteger('harga');
            $table->string('status');
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
        Schema::dropIfExists('layanan_ppobs');
    }
}
