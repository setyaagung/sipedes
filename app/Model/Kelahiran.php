<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Kelahiran extends Model
{
    protected $table = 'kelahiran';
    protected $primaryKey = 'id_kelahiran';
    protected $fillable = [
        'id_penduduk', 'id_kk', 'nama_bayi', 'jenis_kelamin', 'berat_bayi', 'panjang_bayi', 'tempat_dilahirkan', 'tempat_lahir',
        'tanggal_lahir', 'waktu_lahir', 'kelahiran', 'jenis_lahir', 'penolong',
        'id_ayah', 'id_ibu', 'nik_pelapor', 'nama_pelapor', 'umur_pelapor',
        'jk_pelapor', 'pekerjaan_pelapor', 'alamat_pelapor',
    ];

    public function kk()
    {
        return $this->belongsTo(KartuKeluarga::class, 'id_kk');
    }

    public function ibu()
    {
        return $this->belongsTo(Penduduk::class, 'id_ibu', 'id_penduduk');
    }
    public function ayah()
    {
        return $this->belongsTo(Penduduk::class, 'id_ayah', 'id_penduduk');
    }
}
