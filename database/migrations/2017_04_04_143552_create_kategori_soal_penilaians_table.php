<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKategoriSoalPenilaiansTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('kategori_soal_penilaian', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('kategori_id')->unsigned();
            $table->foreign('kategori_id')
                    ->references('id')->on('kategori_soals')
                    ->onDelete('cascade');
            $table->integer('range_awal');
            $table->integer('range_akhir');
            $table->text('hasil');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('kategori_soal_penilaian');
    }

}
