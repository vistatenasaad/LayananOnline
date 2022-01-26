<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tracking extends Model
{
    public $primaryKey  = 'id';
    public $table = 'tracking';
    protected $fillable = ['kode','status','layanan'];   
}
