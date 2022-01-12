<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class rekom_bantuan_masjid extends Model
{
    protected $table = 'rekom_bantuan_masjid';
    protected $fillable = ['nama_pemohon','nama_masjid','email','whatsapp','file_permohonan_rekom',
    'file_sk_terdaftar', 'file_permohonan_bantuan'];    
    public $timestamps = false;

    public function rekom_bantuan_masjid()
    {
    	return $this->hasMany(rekomBantuanMasjid::class);
    }
}
