<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHistoryGojeksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('history__gojeks', function (Blueprint $table) {
            $table->id();
            $table->string('tanggal', 255);
            $table->string('keterangan', 255);
            $table->string('type', 10);
            $table->string('amount', 10);
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
        Schema::dropIfExists('history__gojeks');
    }
}
