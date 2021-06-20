<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class KartuKeluarga extends Model
{
    protected $table = 'kartu_keluarga';
    protected $primaryKey = 'id_kk';
    protected $fillable = [
        'no_kk', 'id_penduduk', 'alamat_kk', 'rt_kk', 'rw_kk', 'kelurahan_kk', 'kecamatan_kk',
        'kota_kk', 'provinsi_kk', 'negara_kk', 'kode_pos_kk'
    ];

    public function penduduk()
    {
        return $this->belongsTo(Penduduk::class, 'id_penduduk');
    }

    public function kartuKeluargaDetail()
    {
        return $this->hasMany(DetailKartuKeluarga::class, 'id_kk');
    }
}
