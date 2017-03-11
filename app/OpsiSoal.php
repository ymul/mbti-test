<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OpsiSoal extends Model {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'opsi_soal';

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
    protected $fillable = ['soal_id', 'opsi', 'nilai'];

}
