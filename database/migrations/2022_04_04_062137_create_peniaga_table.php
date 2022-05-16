<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeniagaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('peniaga', function (Blueprint $table) {
            $table->string('id_peniaga')->primary();
            $table->string('NamaPengguna');
            $table->string('KataLaluan');
            $table->string('Emel');
            $table->string('NoTel');
            $table->string('GambarProfil');
            $table->string('NamaKedai');
            $table->string('Alamat');
            $table->string('NoAkaun');
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
        Schema::dropIfExists('peniaga');
    }
}
