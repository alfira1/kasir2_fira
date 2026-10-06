<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class jurusan extends Model
{
    use HasFactory;

    PROTECTED $table = 'jurusans';
    protected $fillable = [
        'kode_jurusan',
        'nama_jurusan',
        'keterangan',
        'status',
    ];

}
