<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;
    protected $table = 'news';

    protected $fillable = [
        'title',
        'content',
        'image',
        'slug',
        'status',
        'title_en',
        'content_en',
        'slug_en',
        'seo_title',
        'seo_description',
        'seo_title_en',
        'seo_description_en',
        'schedule',
        'jenis',
    ];
}
