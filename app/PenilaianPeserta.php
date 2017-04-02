<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PenilaianPeserta extends Model {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'penilaian_peserta';

    /**
     * The database primary key value.
     *
     * @var string
     */
    protected $primaryKey = 'id';

}
