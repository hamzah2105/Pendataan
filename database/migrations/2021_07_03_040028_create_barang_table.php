<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBarangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('barang', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->date('tanggal_meninggal');
            $table->string('jenis_kelamin');
            // $table->unsignedBigInteger('jenis_barang');
            $table->string('alamat');
            $table->integer('no_kartu_bpjs');

            // $table->foreign('jenis_barang')->cascadeOnDelete()->references('id')->on('jenis_barang');
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
        Schema::dropIfExists('barang');
    }
}
