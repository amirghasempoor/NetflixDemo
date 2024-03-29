<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Support\Facades\Storage;

class Movie extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'title',
        'description',
        'genre',
        'publish_day',
        'image',
    ];

    protected $hidden = ['pivot'];

//    protected function image(): Attribute
//    {
//        return Attribute::make(
//            get: fn ($value) => $value == null ? null : Storage::disk('public')->url($value)
//        );
//    }

    public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class, 'user_movies');
    }
}
