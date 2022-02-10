<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tracking extends Model
{
    public $primaryKey  = 'kode';
    public $table = 'tracking';
    protected $fillable = ['kode','status','layanan', 'dkp', 'imta', 'kitab', 'naturalisasi', 'rptka', 'vtt', 'kiblat', 'pajak', 'slipgaji', 'madrasah', 'bmasjid', 'haji', 'pendirianri', 'sln', 'umroh'];   
}
