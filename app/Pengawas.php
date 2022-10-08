<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengawas extends Model
{
    public $timestamps = false;
    protected $table = 'pengawas';
    protected $fillable = ['id_pengawas','nm_pengawas','jenkel','no_tlp','email','password','id_kategori'];

    public function Kategori()
    {
        return $this->belongsTo('App\Kategori','id_kategori','id_kategori');
    }
}
