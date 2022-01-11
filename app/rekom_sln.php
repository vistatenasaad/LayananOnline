<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class rekom_sln extends Model
{
    protected $table = 'rekom_sln';
    protected $fillable = ['nama_siswa', 'asal_madrasah' , 'negara_tujuan' , 'email','whatsapp','file_surat_permohonan','file_sk_diterima','file_surat_jaminan','file_legalisir_ijazah','file_scan_paspor','file_biodata','file_pakta_integritas','file_pernyataan'];        
    public $timestamps = false;

    public function rekomsln()
    {
    	return $this->hasMany(RekomSLN::class);
    }
}
