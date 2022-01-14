<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pengajuan_rptka extends Model
{
    protected $table = 'pengajuan_rptka';
    protected $fillable = ['nama_lembaga','email','whatsapp','file_akta','file_statistik','file_legalitas','file_orsing_pendamping','file_surat_pendamping'];    
    public $timestamps = false;

    public function pengajuanrptka()
    {
    	return $this->hasMany(PengajuanRPTKA::class);
    }
}
