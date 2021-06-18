<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class PindahPergi extends Model
{
    protected $table = 'pindah_pergi';
    protected $primaryKey = 'id_pindah_pergi';
    protected $fillable = [
        'id_kk', 'kode_pos_asal', 'telepon_asal', 'nik_pemohon',
        'nama_pemohon', 'alasan_pindah', 'alamat_tujuan',
        'rt_tujuan', 'rw_tujuan', 'kelurahan_tujuan', 'kecamatan_tujuan',
        'kota_tujuan', 'provinsi_tujuan', 'kode_pos_tujuan', 'telepon_tujuan',
        'jenis_kepindahan',
        'status_no_kk_tidak_pindah',
        'status_no_kk_pindah'
    ];

    public function pindahPergiDetails()
    {
        return $this->hasMany(DetailPindahPergi::class, 'id_pindah_pergi');
    }

    public function kk()
    {
        return $this->belongsTo(KartuKeluarga::class, 'id_kk');
    }
}
