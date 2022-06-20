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
        Schema::create('troli_pembelian', function (Blueprint $table) { //order 
            $table->string('id_order')->primary(); //order id
            $table->string('id_pelanggan'); //customer id
            $table->foreign('id_pelanggan')->references('id_pelanggan')->on('pelanggan')->onDelete('cascade');
            $table->string('subtotal'); 
            $table->string('Emel'); 
            $table->string('NamaPelanggan'); //name
            $table->string('NoTel'); 
            $table->string('Address'); 
            $table->string('Postcode'); 
            $table->string('City'); 
            $table->string('District'); 
            $table->string('State'); 
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
