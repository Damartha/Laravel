<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class binatang3 extends Model
{
    use HasFactory;
    public $primaryKey = 'id_binatang3';
    protected $filable=[
        'nama_binatang3','deskripsi_binatang3','habitat_binatang3','jenis_binatang3','foto_binatang3'
    ];
}
