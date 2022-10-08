<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    public $timestamps = false;
    protected $table = 'kategori';
    protected $fillable = ['nm_kategori'];

    public function pengawas()
    {
        return $this->hasMany('App\Pengawas','id_pengawas');
    }
}
