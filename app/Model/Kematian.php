<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Kematian extends Model
{
    protected $table = 'kematian';
    protected $primaryKey = 'id_kematian';
    protected $fillable = [
        'id_kk', 'id_penduduk', 'tanggal_kematian', 'waktu_kematian',
        'sebab_kematian', 'tempat_kematian', 'keterangan',
        'id_ayah', 'id_ibu', 'nik_pelapor', 'nama_pelapor', 'umur_pelapor',
        'jk_pelapor', 'pekerjaan_pelapor', 'alamat_pelapor'
    ];

    public function penduduk()
    {
        return $this->belongsTo(Penduduk::class, 'id_penduduk');
    }
}
