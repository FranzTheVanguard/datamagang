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
		return $this->belongsTo(Instansi::class,'id_instansi');
	}
    public function jurusan()
	{
		return $this->belongsTo(Jurusan::class,'id_jurusan');
	}
    public function user()
	{
		return $this->hasOne(User::class,'id_profil');
	}
    public function jadwalMagang()
	{
		return $this->hasOne(JadwalMagang::class,'id_profil');
	}
}
