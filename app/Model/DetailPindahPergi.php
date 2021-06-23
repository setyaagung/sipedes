<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class DetailPindahPergi extends Model
{
    protected $table = 'detail_pindah_pergi';
    protected $primaryKey = 'id_detail_pindah_pergi';
    protected $fillable = [
        'id_pindah_pergi',
        'id_penduduk',
        'masa_berlaku_ktp',
        'shdk'
    ];

    public function penduduk()
    {
        return $this->belongsTo(Penduduk::class, 'id_penduduk');
    }
}
