<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Agama extends Model
{
    use SoftDeletes;
    protected $table = 'agama';
    protected $primaryKey = 'id_agama';
    protected $fillable = ['nama_agama'];
}
