<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'body',
        'user_id',
        'published_at',
    ];

    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
        'published_at' => 'datetime:M d, Y',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function comments(): HasMany
    {
        return $this->hasMany(Comment::class);
    }

    public function isPublished(): bool
    {
        return $this->published_at !== null;
    }

    public function isDraft(): bool
    {
        return $this->published_at === null;
    }

    public function scopePublished($query)
    {
        return $query->whereNotNull('published_at');
    }

    public function scopeDrafted($query)
    {
        return $query->whereNull('published_at');
    }
}
