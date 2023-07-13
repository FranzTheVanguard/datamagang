<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TugasMagang extends Model
{
    use HasFactory;
    protected $guarded=['id'];

    protected $fillable = [
        'id',
        'id_user',
        'tugas',
        'deskripsi',
        'tanggal_tugas',
    ];
    
    public function user()
	{
		return $this->belongsTo(User::class,'user_id');
	}
}
