<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Penduduk extends Model
{
    protected $table = 'penduduk';
    protected $primaryKey = 'id_penduduk';
    protected $fillable = [
        'nik', 'nama', 'tempat_lahir', 'tanggal_lahir',
        'jenis_kelamin', 'agama', 'pendidikan', 'pekerjaan',
        'alamat_ktp', 'alamat_tinggal', 'rt', 'rw',
        'kelurahan', 'kecamatan', 'kota', 'provinsi',
        'negara', 'status_perkawinan'
    ];
}
