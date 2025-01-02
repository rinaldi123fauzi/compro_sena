<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;
    protected $table = 'about';
    protected $fillable = ['image', 'image2', 'sub_headline', 'main_headline', 'description',  'sub_headline_eng', 'main_headline_eng', 'description_eng'];
}
