<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Soal extends Model {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'soal';

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
    protected $fillable = ['kategori_soal_id', 'tipe_soal_id', 'soal', 'urutan'];

    function kategoriSoal() {
        return $this->belongsTo('App\KategoriSoal', 'kategori_soal_id');
    }

    function tipeSoal() {
        return $this->belongsTo('App\TipeSoal', 'tipe_soal_id');
    }

    function opsiSoal() {
        return $this->hasMany('App\OpsiSoal', 'soal_id');
    }

}
