<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    public $timestamps = false;
    protected $table = 'transaksi';
    protected $fillable = ['id_transaksi','tgl','id_siswa','id_kelas','score'];

}
