<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BagianMagang extends Model
{
    use HasFactory;
    protected $guarded=['id'];
    protected $fillable = [
        'id',
        'kode_bagian',
        'nama_bagian',
    ];
    public function jadwalMagang()
	{
		return $this->hasMany(JadwalMagang::class,'id_bagian_magang');
	}
}
