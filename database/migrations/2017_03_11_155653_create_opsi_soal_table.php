<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOpsiSoalTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('opsi_soal', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('soal_id')->unsigned();
            $table->foreign('soal_id')
                    ->references('id')->on('soal')
                    ->onDelete('cascade');
            $table->string('opsi');
            $table->string('jawaban');
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
        Schema::dropIfExists('opsi_soal');
    }

}
