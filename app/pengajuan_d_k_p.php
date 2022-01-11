<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pengajuan_d_k_p extends Model
{
    protected $table = 'pengajuan_d_k_p';
    protected $fillable = ['nama','email','whatsapp','file_drh','file_rptka_imta','file_paspor','file_polis_asuransi','foto'];    
    public $timestamps = false;

    public function pengajuandkp()
    {
    	return $this->hasMany(PengajuanDKP::class);
    }
}
