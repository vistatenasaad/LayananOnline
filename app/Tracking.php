<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tracking extends Model
{
    public $primaryKey  = 'kode';
    public $table = 'tracking';
    protected $fillable = ['kode','status','layanan'];   
}
