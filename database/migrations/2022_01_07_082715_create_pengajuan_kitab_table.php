<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePengajuanKitabTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengajuan_kitab', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama_lembaga', 100);
            $table->string('email', 100);
            $table->integer('whatsapp');
            $table->string('file_legalitas', 100);
            $table->string('file_drh', 100);
            $table->string('file_ijazah', 100);
            $table->string('file_rptka_imta', 100);
            $table->string('file_statistik', 100);
            $table->string('file_paspor_kitas', 100);
            $table->string('file_polis_asuransi', 100);
            $table->string('file_foto', 100);
            $table->string('file_skkb_skck', 100);
            $table->string('file_persetujuan_sebelumnya', 100);
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
        Schema::dropIfExists('pengajuan_kitab');
    }
}
