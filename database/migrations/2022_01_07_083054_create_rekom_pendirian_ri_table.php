<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRekomPendirianRiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rekom_pendirian_ri', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('asal_surat', 100);
            $table->string('email', 100);
            $table->integer('whatsapp');
            $table->string('file_permohonan_rekom', 100);
            $table->string('file_susunan_pengurus', 100);
            $table->string('file_sk_tanah', 100);
            $table->string('file_sk_domisili', 100);
            $table->string('file_nama_ktp', 100);
            $table->string('file_dukungan', 100);
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
        Schema::dropIfExists('rekom_pendirian_ri');
    }
}
