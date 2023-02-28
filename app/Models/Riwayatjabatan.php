<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Riwayatjabatan extends Model
{
    use HasFactory;
    protected $fillable = ['biodata_id', 'id_sk', 'id_jabatan', 'tahun'];
}
