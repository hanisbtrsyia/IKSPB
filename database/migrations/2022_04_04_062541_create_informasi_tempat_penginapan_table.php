<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInformasiTempatPenginapanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('informasi_tempat_penginapan', function (Blueprint $table) {
            $table->string('id_tempatPenginapan')->primary();
            $table->string('id_peniaga');
            $table->string('NamaTempat');
            $table->string('NamaHos');
            $table->string('NoTel');
            $table->string('Lokasi');
            $table->string('penerangan');
            $table->string('gambar');
            $table->float('HargaPerMalam');
            $table->string('Kemudahan');
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
        Schema::dropIfExists('informasi_tempat_penginapan');
    }
}
