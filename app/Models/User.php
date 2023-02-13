<?php

namespace App\Models;


use App\Traits\HasScope;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, HasRoles, HasScope;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
        protected $fillable = [
        'name',
        'alamat',
        'email',
        'password',
        'username',
        'avatar',
        'about',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_secret',
        'two_factor_recovery_codes'
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    protected function avatar(): Attribute
    {
        return Attribute::make(
            get: fn ($avatar) => $avatar != '' ? asset('/storage/avatar/' . $avatar) : 'https://ui-avatars.com/api/?name=' . str_replace(' ', '+', $this->name) . '&background=4e73df&color=ffffff&size=100',
        );
    }
}