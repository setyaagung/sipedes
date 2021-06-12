<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class DetailKartuKeluarga extends Model
{
    protected $table = 'detail_kartu_keluarga';
    protected $primaryKey = 'id_detail_kk';
    protected $fillable = [
        'id_kk',
        'id_penduduk', 'status'
    ];
}
