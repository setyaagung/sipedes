<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Kelahiran extends Model
{
    protected $table = 'kelahiran';
    protected $primaryKey = 'id_kelahiran';
    protected $fillable = [
        'id_penduduk', 'id_kk', 'nama_bayi', 'jenis_kelamin',
        'berat_bayi', 'panjang_bayi', 'tempat_lahir',
        'tanggal_lahir', 'lokasi_lahir', 'nama_penolong'
    ];
}
