<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class KategoriSoalPenilaian extends Model {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'kategori_soal_penilaian';

    /**
     * The database primary key value.
     *
     * @var string
     */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['kategori_id', 'range_awal', 'range_akhir', 'hasil'];

    function getResult($kategoriId, $nilai) {
        return DB::table($this->table)->where('kategori_id', '=', $kategoriId)->whereRaw(''.$nilai.' BETWEEN range_awal AND range_akhir')->first();
    }

}
