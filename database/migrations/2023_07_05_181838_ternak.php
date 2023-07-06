<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Ternak extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ternak', function (Blueprint $table) {
            $table->id();
            $table->string('barcode');
            $table->string('kategori_ternak');
            $table->integer('asal_ternak');
            $table->string('nama_indukan_betina')->nullable();
            $table->string('nama_indukan_jantan')->nullable();
            $table->integer('keturunan_ke')->nullable();
            $table->float('berat_lahir')->nullable();
            $table->unsignedBigInteger('id_kandang_melahirkan')->nullable();
            $table->unsignedBigInteger('id_ternak_beli')->nullable();
            $table->string('jenis_ternak')->nullable();
            $table->float('berat_terima')->nullable();
            $table->string('no_po')->nullable();
            $table->string('no_vessel')->nullable();
            // $table->date('tanggal_penerimaan_beli')->nullable();
            $table->unsignedBigInteger('id_kandang')->nullable();
            $table->unsignedBigInteger('id_paddock')->nullable();
            $table->float('data_timbangan_awal')->nullable();
            $table->string('kondisi_awal_pertama')->nullable();
            $table->boolean('treatment_khusus')->default(false);
            $table->string('nama_vendor')->nullable();
            $table->date('tanggal_penerimaan_ternak')->nullable();
            $table->timestamps();
            
            // Define foreign key constraints
            $table->foreign('id_kandang_melahirkan')->references('id')->on('kandang')->onDelete('set null');
            $table->foreign('id_ternak_beli')->references('id')->on('ternak')->onDelete('set null');
            $table->foreign('id_kandang')->references('id')->on('kandang')->onDelete('set null');
            $table->foreign('id_paddock')->references('id')->on('paddock')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ternak');
    }
}
