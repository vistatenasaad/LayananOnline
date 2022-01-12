<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class rekom_pendirian_ri extends Model
{
    protected $table = 'rekom_pendirian_ri';
    protected $fillable = ['asal_surat','email','whatsapp','file_permohonan_rekom','file_susunan_pengurus','file_sk_tanah','file_sk_domisili','file_nama_ktp' ,'file_dukungan'];    
    public $timestamps = false;

    public function rekompendirianrumahibadah ()
    {
    	return $this->hasMany(RekomPendirianRumahIbadah::class);
    }
}
