<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Instansi extends Model
{
    use HasFactory;
    protected $guarded=['id'];
    protected $fillable = [
        'id',
        'nama_instansi',
        'alamat',
        'no_telepon',
    ];
}
