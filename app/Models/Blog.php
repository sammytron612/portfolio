<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $fillable = [
        'blog_title',
        'blog_text',
        'user_id',
    ];

    /**
     * Relationship: Blog belongs to a user
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Relationship: Blog has many comments
     */
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
