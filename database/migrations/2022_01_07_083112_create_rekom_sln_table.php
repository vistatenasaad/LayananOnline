<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRekomSlnTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rekom_sln', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama_siswa', 100);
            $table->string('asal_madrasah', 100);
            $table->string('negara_tujuan', 100);
            $table->string('email', 100);
            $table->integer('whatsapp');
            $table->string('file_surat_permohonan', 100);
            $table->string('file_sk_diterima', 100);
            $table->string('file_surat_jaminan', 100);
            $table->string('file_legalisir_ijazah', 100);
            $table->string('file_scan_paspor', 100);
            $table->string('file_biodata', 100);
            $table->string('file_pakta_integritas', 100);
            $table->string('file_pernyataan', 100);
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
        Schema::dropIfExists('rekom_sln');
    }
}
