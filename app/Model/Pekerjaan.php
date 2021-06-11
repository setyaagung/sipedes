<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pekerjaan extends Model
{
    use SoftDeletes;
    protected $table = 'pekerjaan';
    protected $primaryKey = 'id_pekerjaan';
    protected $fillable = ['nama_pekerjaan'];
}
