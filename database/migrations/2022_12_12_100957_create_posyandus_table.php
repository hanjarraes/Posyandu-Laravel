<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posyandus', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_provinsi');
            $table->foreignId('id_user');
            $table->string('nama_posyandu');
            $table->string('email')->unique();
            $table->string('no_telp');
            $table->string('no');
            $table->string('kader');
            $table->string('alamat_lengkap');
            $table->string('keterangan');
            $table->string('img');
            $table->string('jam_operasi');
            $table->string('map');
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
        Schema::dropIfExists('posyandus');
    }
};
