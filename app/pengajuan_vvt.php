<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pengajuan_vvt extends Model
{
    protected $table = 'pengajuan_vvt';
    protected $fillable = ['nama_lembaga','email','whatsapp','file_legalitas','file_drh','file_ijazah','file_rptka',
    'file_statistik','file_paspor', 'file_polis_asuransi', 'foto', 'permohonan_vvt'];    
    public $timestamps = false;

    public function pengajuan_vvt()
    {
    	return $this->hasMany(PengajuanVVT::class);
    }
}
