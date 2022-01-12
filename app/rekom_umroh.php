<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class rekom_umroh extends Model
{
    protected $table = 'rekom_umroh';
    protected $fillable = ['nama','email','whatsapp','file_ktp','file_rptka_ppiu'];    
    public $timestamps = false;

    public function rekomumroh()
    {
    	return $this->hasMany(RekomUmroh::class);
    }
}
