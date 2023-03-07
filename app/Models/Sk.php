<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sk extends Model
{
    use HasFactory;

    protected $fillable = ['nosk', 'tglskp', 'file', 'id_kecamatan', 'id_kelurahan'];

    public function kecamatans()
    {
        return $this->belongsTo(Kecamatan::class, 'id_kecamatan');
    }
    public function kelurahans()
    {
        return $this->belongsTo(Kelurahan::class, 'id_kelurahan');
    }
}
