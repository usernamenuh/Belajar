<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class catatan extends Model
{
    protected $table = 'catatans';
    protected $fillable = ['kegiatan', 'keterangan', 'jumlah_mainhp'];
}
