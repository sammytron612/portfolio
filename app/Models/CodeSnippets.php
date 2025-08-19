<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CodeSnippets extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'title',
        'code',
        'type',
    ];
}
