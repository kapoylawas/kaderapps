<?php

namespace App\Models;

use App\Traits\HasScope;
use App\Traits\HasSlug;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Category extends Model
{
    use HasFactory, HasSlug, HasScope;

    use HasFactory;

    protected $fillable = ['name', 'image', 'slug'];

    protected function image(): Attribute
    {
        return Attribute::make(
            get: fn($image) => asset('storage/categories/' . $image),
        );
    }
}
