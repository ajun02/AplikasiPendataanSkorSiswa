<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pelanggaran extends Model
{
    public $timestamps = false;
    protected $table = "pelanggaran";
    protected $fillable = ['id_pelanggaran','nm_pelanggaran','point'];
}
