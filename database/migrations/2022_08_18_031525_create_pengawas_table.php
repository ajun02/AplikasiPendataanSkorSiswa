<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePengawasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengawas', function (Blueprint $table) {
            $table->increments('id_pengawas');
            $table->string('nm_pengawas');
            $table->enum('jenkel',['laki-laki','perempuan'])->default('laki-laki');
            $table->string('no_tlp');
            $table->string('email');
            $table->string('password');
            $table->string('id_kategori');
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
        Schema::dropIfExists('pengawas');
    }
}
