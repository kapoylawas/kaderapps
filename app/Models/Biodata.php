<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Biodata extends Model
{
    use HasFactory;

    protected $fillable = ['id_kelurahan', 'id_kota', 'id_kecamatan', 'id_bank', 'name', 'alamat', 'tglLahir', 'norek', 'nohp', 'filektp', 'filebukutabungan', 'foto'];
}
