<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSoalsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('soal', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('kategori_soal_id')->unsigned();
            $table->foreign('kategori_soal_id')
                    ->references('id')->on('kategori_soals')
                    ->onDelete('cascade');
            $table->integer('tipe_soal_id')->unsigned();
            $table->foreign('tipe_soal_id')
                    ->references('id')->on('tipe_soals')
                    ->onDelete('cascade');
            $table->string('soal');
            $table->integer('urutan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::drop('soal');
    }

}
