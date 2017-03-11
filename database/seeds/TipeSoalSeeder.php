<?php

use Illuminate\Database\Seeder;

class TipeSoalSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('tipe_soals')->insert(array([
                'id' => 1,
                'nama' => 'Pilihan Ganda',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
        ]));
    }

}
