<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePenilaianPesertaDetailsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('penilaian_peserta_details', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('penilaian_peserta_id')->unsigned();
            $table->foreign('penilaian_peserta_id')
                    ->references('id')->on('penilaian_peserta')
                    ->onDelete('cascade');
            $table->integer('soal_id')->unsigned();
            $table->foreign('soal_id')
                    ->references('id')->on('soal')
                    ->onDelete('cascade');
            $table->integer('opsi_soal_id')->unsigned();
            $table->foreign('opsi_soal_id')
                    ->references('id')->on('opsi_soal')
                    ->onDelete('cascade');
            $table->integer('nilai');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('penilaian_peserta_details');
    }

}
