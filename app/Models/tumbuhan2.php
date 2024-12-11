<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tumbuhan2 extends Model
{
    use HasFactory;
    public $primaryKey = 'id_tumbuhan2';
    protected $fillable=[
        'nama_tumbuhan2','deskripsi_tumbuhan2','jenis_tumbuhan2','habitat_tumbuhan2','foto_tumbuhan2','path'
    ];
}
