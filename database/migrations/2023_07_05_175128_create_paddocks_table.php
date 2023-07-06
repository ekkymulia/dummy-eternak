<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaddocksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paddock', function (Blueprint $table) {
            $table->id();
            $table->string('nama_paddock');
            $table->string('lokasi_paddock');
            $table->unsignedBigInteger('id_kandang');
            $table->timestamps();

            $table->foreign('id_kandang')->references('id')->on('kandang')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('paddocks');
    }
}
