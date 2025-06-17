<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class minuman extends Model
{
    protected $table = 'minumen';

    protected $fillable = [
        'nama_minuman',
        'jenis_minuman',
        'jumlah_minuman',
    ];
}
