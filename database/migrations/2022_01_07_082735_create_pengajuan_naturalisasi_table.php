<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePengajuanNaturalisasiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengajuan_naturalisasi', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama_lembaga', 100);
            $table->string('email', 100);
            $table->integer('whatsapp');
            $table->string('file_persetujuan', 100);
            $table->string('file_akte_kelahiran', 100);
            $table->string('file_pernyataan_bahasa', 100);
            $table->string('file_skkb_skck', 100);
            $table->string('file_kitab', 100);
            $table->string('file_ijazah', 100);
            $table->string('file_jaminan', 100);
            $table->string('file_foto', 100);
            $table->string('file_akta_kelahiran', 100);
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
        Schema::dropIfExists('pengajuan_naturalisasi');
    }
}
