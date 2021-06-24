<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class PermohonanKtp extends Model
{
    protected $table = 'permohonan_ktp';
    protected $primaryKey = 'id_permohonan_ktp';
    protected $fillable = ['id_penduduk', 'no_kk', 'status'];

    public function penduduk()
    {
        return $this->belongsTo(Penduduk::class, 'id_penduduk');
    }
}
