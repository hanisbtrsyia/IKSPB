<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInformasiTempatMenarikTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('informasi_tempat_menarik', function (Blueprint $table) {
            $table->string('id_tempatMenarik')->primary();
            $table->string('NamaTempat');
            $table->string('gambar');
            $table->string('Lokasi');
            $table->string('penerangan');
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
        Schema::dropIfExists('informasi_tempat_menarik');
    }
}
