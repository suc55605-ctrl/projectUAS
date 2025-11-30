<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lowongan extends Model
{
    protected $fillable = ['posisi','perusahaan','batas_waktu','deskripsi'];
    protected $casts = [
    'batas_waktu' => 'date',
];
}

