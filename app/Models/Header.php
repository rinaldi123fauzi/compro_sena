<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Header extends Model
{
    use HasFactory;
    protected $table = 'header';

    protected $fillable = [
        'logo',
        'header_about_us_image',
        'header_about_us_text',
        'header_about_us_text_en',

        'header_capability_image',
        'header_capability_text',
        'header_capability_text_en',

        'header_experience_image',
        'header_experience_text',
        'header_experience_text_en',

        'header_contact_us_image',
        'header_contact_us_text',
        'header_contact_us_text_en',
    ];
}
