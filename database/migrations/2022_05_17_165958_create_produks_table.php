<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProduksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produks', function (Blueprint $table) {
            $table->string('id_produk')->primary();
            $table->string('id_peniaga');
            
            $table->string('NamaKategori');
            $table->string('NamaProduk');
            $table->float('Harga');
            $table->string('penerangan');
            $table->string('GambarProduk');
            $table->integer('Unit');
            $table->integer('Berat');
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
        Schema::dropIfExists('produks');
    }
}
