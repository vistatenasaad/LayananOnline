<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class rekom_haji extends Model
{
    protected $table = 'rekom_haji';
    protected $fillable = ['nama','email','whatsapp','file_porsi_haji','file_ktp','file_kk','file_pendukung'];    
    public $timestamps = false;
    public $incrementing = false;

    public function rekomhaji()
    {
    	return $this->hasMany(RekomHaji::class);
    }
}
