<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MataPelajaran extends Model
{
    protected $table ='mata_pelajaran';

    protected $fillable = [
        'id_hari',
        'nama' ,
        'deskripsi' ,
    ];

    public function hari()
    {
        return $this->belongsTo('App\Hari','id_hari');
    }
}
