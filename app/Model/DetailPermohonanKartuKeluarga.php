<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class DetailPermohonanKartuKeluarga extends Model
{
    protected $table = 'detail_permohonan_kartu_keluarga';
    protected $primaryKey = 'id_detail_permohonan_kk';
    protected $fillable = ['id_permohonan_kk', 'nik', 'nama', 'shdk'];
}
