<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePindahMadrasahTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pindah_madrasah', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama_siswa', 100);
            $table->string('asal_madrasah', 100);
            $table->string('madrasah_dituju', 100);
            $table->string('email', 100);
            $table->integer('whatsapp');
            $table->string('file_permohonan_rekomendasi', 100);
            $table->string('file_sk_pindah', 100);
            $table->string('file_sk_diterima', 100);
            $table->string('file_rapot_siswa', 100);
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
        Schema::dropIfExists('pindah_madrasah');
    }
}
