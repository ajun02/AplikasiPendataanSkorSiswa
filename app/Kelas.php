<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    public $timestamps = false;
    protected $table = 'kelas';
    protected $fillable = ['id_kelas','nm_kelas'];

    public function siswa()
    {
        return $this->hasMany('App\Siswa','id_kelas');
    }
}
