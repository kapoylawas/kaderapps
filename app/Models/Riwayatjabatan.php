<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Riwayatjabatan extends Model
{
    use HasFactory;
    protected $fillable = ['biodata_id', 'id_sk', 'id_jabatan', 'tahun', 'id_kecamatan', 'id_kelurahan'];

    public function getSk()
    {
        return $this->belongsTo(Sk::class, 'id_sk');
    }
    public function biodata()
    {
        return $this->belongsTo(Biodata::class, 'biodata_id');
    }
    public function kecamatans()
    {
        return $this->belongsTo(Kecamatan::class, 'id_kecamatan');
    }
    public function kelurahans()
    {
        return $this->belongsTo(Kelurahan::class, 'id_kelurahan');
    }
}
