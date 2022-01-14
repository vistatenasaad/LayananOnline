<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pengajuan_kitab extends Model
{
    protected $table = 'pengajuan_kitab';
    protected $fillable = ['nama_lembaga','email','whatsapp','file_legalitas','file_drh','file_ijazah','file_rptka_imta','file_statistik','file_paspor_kitas','file_polis_asuransi','file_foto','file_skkb_skck','file_persetujuan_sebelumnya'];    
    public $timestamps = false;

    public function pengajuankitab()
    {
    	return $this->hasMany(PengajuanKITAB::class);
    }
}
