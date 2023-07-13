<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profil extends Model
{
    use HasFactory;
    protected $guarded=['id'];

    protected $fillable = [
        'id',
        'nama_peserta',
        'tanggal_lahir',
        'jenis_kelamin',
        'id_instansi',
        'id_jurusan'
    ];

    public function instansi()
	{
		return $this->belongsTo(Instansi::class,'user_id');
	}
    public function jurusan()
	{
		return $this->belongsTo(Jurusan::class,'user_id');
	}
}
