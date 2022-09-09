<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePegawaiTabel extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_pegawai', function (Blueprint $table) {
            $table->id();
            $table->foreignId('provinsi_id');
            $table->foreignId('kecamatan_id');
            $table->foreignId('kelurahan_id');
            $table->string('nama_karyawan');
            $table->string('tempat_lahir');
            $table->string('tgl_lahir');
            $table->string('jenkel');
            $table->string('alamat');
            $table->string('status');
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
        Schema::dropIfExists('t_pegawai');
    }
}
