<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemDalamTroliTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('item_dalam_troli', function (Blueprint $table) {
            $table->string('id_ItemTroli')->primary();
            $table->string('id_produk');
            $table->integer('Kuantiti');
            $table->float('Harga');
            $table->float('JumlahBayaranItem');
            $table->foreign('id_produk')->references('id_produk')->on('produk')->onDelete('cascade');
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
        Schema::dropIfExists('item_dalam_troli');
    }
}
