<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    protected $casts = [
        'seo_key' => 'array',
        'category_id' => 'array'
    ];
    protected $guarded = [];

    public function Kategori(){
        return $this->hasOne(BlogCategory::class,'id','category_id');
    }
}
