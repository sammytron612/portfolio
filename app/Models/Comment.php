<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
        'blog_id',
        'name',
        'comment',
    ];

    /**
     * Relationship: Comment belongs to a blog
     */
    public function blog()
    {
        return $this->belongsTo(Blog::class);
    }
}
