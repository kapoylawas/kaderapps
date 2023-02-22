<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelurahan extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'kecamatan_id'];

    public function kecamatans()
    {
        return $this->belongsTo(Kecamatan::class, 'kecamatan_id');
    }
}
