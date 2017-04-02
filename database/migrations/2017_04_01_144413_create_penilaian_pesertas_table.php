<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePenilaianPesertasTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('penilaian_peserta', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('peserta_id')->unsigned();
            $table->foreign('peserta_id')
                    ->references('id')->on('peserta')
                    ->onDelete('cascade');
            $table->integer('kategori_soal_id')->unsigned();
            $table->foreign('kategori_soal_id')
                    ->references('id')->on('kategori_soals')
                    ->onDelete('cascade');
            $table->integer('total_nilai');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('penilaian_peserta');
    }

}
