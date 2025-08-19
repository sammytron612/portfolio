<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CodeSnippet extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'title',
        'text',
        'code',
        'type',
    ];
}
