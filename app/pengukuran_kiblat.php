<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pengukuran_kiblat extends Model
{
    protected $table = 'pengukuran_kiblat';
    protected $fillable = ['nama','nama_masjid','email','whatsapp','file_permohonan','file_lokasi'];    
    public $timestamps = false;

    public function pengukuran_kiblat()
    {
    	return $this->hasMany(PengukuranKiblat::class);
    }
}
