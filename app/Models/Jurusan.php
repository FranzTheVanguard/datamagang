<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jurusan extends Model
{
    use HasFactory;
    protected $guarded=['id'];

    protected $fillable = [
        'id',
        'kode_jurusan',
        'nama_jurusan',
    ];
}
