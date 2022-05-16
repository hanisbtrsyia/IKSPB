<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTroliPembelianTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('troli_pembelian', function (Blueprint $table) {
            $table->string('id_troli')->primary();
            $table->string('id_ItemTroli');
            $table->string('id_pelanggan');
            $table->float('JumlahBayaran');
            
            $table->foreign('id_ItemTroli')->references('id_ItemTroli')->on('item_dalam_troli')->onDelete('cascade');
            $table->foreign('id_pelanggan')->references('id_pelanggan')->on('pelanggan')->onDelete('cascade');
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
        Schema::dropIfExists('troli_pembelian');
    }
}
