<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class penilaian extends Model
{
    public $timestamps = false;
    protected $table = 'penilaian';
    protected $fillable = ['id_penilaian','tgl','nisn','id_pelanggaran','score'];

    // public function pelanggaran()
    // {
    //     return $this->belongsTo(pelanggaran::class);
    // }

    public function siswa()
    {
        return $this->hasOne('App\Siswa','nisn','nisn');
    }

    public function pelanggaran()
    {
        return $this->hasOne('App\Pelanggaran','id_pelanggaran','id_pelanggaran');
    }
}
