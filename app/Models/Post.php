<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Post extends Model
{
    use HasFactory;

    function user()
    {
        return $this->belongsTo(User::class);
    }

    function comment(): HasMany
    {
        return $this->hasMany(Comment::class);
    }

    function tags(): BelongsToMany
    {
        return $this->belongsToMany(Tag::class, 'post_tags');
    }
}
