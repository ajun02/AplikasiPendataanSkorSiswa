<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSiswaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('siswa', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nisn',20)->unique();
            $table->string('nm_siswa');
            $table->integer('id_kelas');
            $table->string('tmpt_lahir');
            $table->date('tgl_lahir');
            $table->enum('jenkel',['laki-laki','perempuan'])->default('laki-laki');
            $table->text('alamat');
            $table->integer('score');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('siswa');
    }
}
