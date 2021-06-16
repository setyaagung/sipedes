<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class DetailPindahDatang extends Model
{
    protected $table = 'detail_pindah_datang';
    protected $primaryKey = 'id_detail_pindah_datang';
    protected $fillable = [
        'id_pindah_datang',
        'nik',
        'nama',
        'masa_berlaku_ktp',
        'shdk'
    ];
}
