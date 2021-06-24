<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class PermohonanKartuKeluarga extends Model
{
    protected $table = 'permohonan_kartu_keluarga';
    protected $primaryKey = 'id_permohonan_kk';
    protected $fillable = ['id_penduduk', 'no_kk_semula', 'alasan'];

    public function penduduk()
    {
        return $this->belongsTo(Penduduk::class, 'id_penduduk');
    }

    public function permohonanKKDetails()
    {
        return $this->hasMany(DetailPermohonanKartuKeluarga::class, 'id_permohonan_kk');
    }
}
