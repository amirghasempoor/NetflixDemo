<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Storage;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, HasRoles;

    protected $fillable = [
        'username',
        'password',
        'email',
    ];

    protected $hidden = ['pivot'];

//    protected function avatar(): Attribute
//    {
//        return Attribute::make(
//            get: fn ($value) => $value == null ? null : Storage::disk('public')->url($value)
//        );
//    }

    public function movies(): BelongsToMany
    {
        return $this->belongsToMany(Movie::class, 'user_movies');
    }
}
