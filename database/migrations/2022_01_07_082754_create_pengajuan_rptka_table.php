<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePengajuanRptkaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengajuan_rptka', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama_lembaga', 100);
            $table->string('email', 100);
            $table->integer('whatsapp');
            $table->string('file_akta', 100);
            $table->string('file_statistik', 100);
            $table->string('file_legalitas', 100);
            $table->string('file_orsing_pendamping', 100);
            $table->string('file_surat_pendamping', 100);
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
        Schema::dropIfExists('pengajuan_rptka');
    }
}
