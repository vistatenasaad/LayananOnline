<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRekomBantuanMasjidTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rekom_bantuan_masjid', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama_pemohon', 100);
            $table->string('nama_masjid', 100);
            $table->string('email', 100);
            $table->integer('whatsapp');
            $table->string('file_permohonan_rekom', 100);
            $table->string('file_sk_terdaftar', 100);
            $table->string('file_permohonan_bantuan', 100);
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
        Schema::dropIfExists('rekom_bantuan_masjid');
    }
}
