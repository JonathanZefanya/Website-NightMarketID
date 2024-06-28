<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHistoryOvosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('history__ovos', function (Blueprint $table) {
            $table->id();
            $table->date('tanggal_transaksi');
            $table->string('jumlah_transaksi', 255);
            $table->string('tipe_transaksi', 255);
            $table->string('keterangan', 255);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('history__ovos');
    }
}
