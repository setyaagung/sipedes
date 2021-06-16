<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class PindahDatang extends Model
{
    protected $table = 'pindah_datang';
    protected $primaryKey = 'id_pindah_datang';
    protected $fillable = [
        'no_kk', 'nama_kepala_keluarga', 'alamat_pemohon', 'rt_asal',
        'rw_asal', 'kelurahan_asal', 'kecamatan_asal', 'kota_asal',
        'provinsi_asal', 'kode_pos', 'telepon', 'nik_pemohon',
        'nama_pemohon', 'status_no_kk', 'tujuan_no_kk', 'tujuan_nik_kepala_keluarga',
        'tujuan_nama_kepala_keluarga', 'tanggal_kedatangan', 'alamat_tujuan',
        'rt_tujuan', 'rw_tujuan', 'kelurahan_tujuan', 'kecamatan_tujuan',
        'kota_tujuan', 'provinsi_tujuan',
    ];
}
