<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Riwayatgaji extends Model
{
    use HasFactory;

    protected $fillable = ['id_jabatan', 'id_kecamatan', 'tahun', 'tribulan', 'nominal', 'biayatranfer', 'pajak', 'nominalbersih'];
}
