<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pengajuan_imta extends Model
{
    protected $table = 'pengajuan_imta';
    protected $fillable = ['nama_lembaga','email','whatsapp','file_rptka','file_paspor','file_polis_asuransi','file_drh','file_ijazah','foto'];    
    public $timestamps = false;
    public $incrementing = false;

    public function pengajuanimta()
    {
    	return $this->hasMany(PengajuanIMTA::class);
    }
}
