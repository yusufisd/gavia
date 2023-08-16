<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EnBlog extends Model
{
    use HasFactory;
    protected $casts = [
        'seo_key' => 'array',
    ];
    protected $guarded = [];
}
