<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Home_slider extends Model
{
    use HasFactory;
    protected $table = 'home_slider';
    protected $fillable = ['sub_text', 'primary_text', 'image', 'button_text', 'button_link', 'sub_text_eng', 'primary_text_eng', 'button_text_eng'];
}
