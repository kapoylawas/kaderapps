<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\HasScope;
use App\Traits\HasSlug;

class Jabatan extends Model
{
    use HasFactory, HasSlug, HasScope;

    protected $fillable = ['name', 'kelompokjabatan', 'tarifgaji'];
}
