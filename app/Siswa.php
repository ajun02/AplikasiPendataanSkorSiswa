<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    public $timestamps = false;
    protected $table = "siswa";
    protected $fillable = ['nisn','nm_siswa','id_kelas','tmpt_lahir','tgl_lahir','jenkel','alamat','score'];

    public function Kelas()
    {
        return $this->belongsTo('App\Kelas','id_kelas','id_kelas');
    }


}
