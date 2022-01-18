<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pengajuan_naturalisasi extends Model
{
    protected $table = 'pengajuan_naturalisasi';
    protected $fillable = ['nama_lembaga','email','whatsapp','file_persetujuan','file_akte_kelahiran','file_pertnyataan_bahasa','file_skkb_skck','file_kitab','file_ijazah','file_jaminan','file_foto'];    
    public $timestamps = false;

    public function pengajuannaturalisasi()
    {
    	return $this->hasMany(PengajuanNaturalisasi::class);
    }
}
