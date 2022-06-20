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
        Schema::create('item_dalam_troli', function (Blueprint $table) { //order details
            $table->string('id_ItemTroli')->primary(); //trolley_id
            $table->string('id_order'); //order id
            $table->foreign('id_order')->references('id_order')->on('troli_pembelian')->onDelete('cascade');
            $table->string('id_produk'); //product id
            $table->foreign('id_produk')->references('id_produk')->on('produk')->onDelete('cascade');
            $table->string('NamaProduk'); //prod name
            $table->string('Harga'); //price
            $table->string('Kuantiti'); //quantity
            $table->string('Jumlah'); //total
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
