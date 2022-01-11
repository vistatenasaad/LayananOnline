<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pindah_madrasah extends Model
{
    protected $table = 'pindah_madrasah';
    protected $fillable = ['nama_siswa','asal_madrasah','madrasah_dituju','email','whatsapp','file_permohonan_rekomendasi',
    'file_sk_pindah','file_sk_diterima','file_rapot_siswa'];    
    public $timestamps = false;

    public function pindah_madrasah()
    {
    	return $this->hasMany(PindahMadrasah::class);
    }
}
