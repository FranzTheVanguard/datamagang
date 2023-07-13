<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JadwalMagang extends Model
{
    use HasFactory;
    protected $guarded=['id'];
    protected $fillable = [
        'id',
        'nama_peserta',
        'nama_jurusan',
        'tanggal_mulai',
        'tanggal_selesai',
        'id_profil',
        'id_bagian_magang'
    ];
    public function profil()
	{
		return $this->belongsTo(Profil::class,'id_profil');
	}
    public function bagianMagang()
	{
		return $this->belongsTo(BagianMagang::class,'id_bagian_magang');
	}

}
