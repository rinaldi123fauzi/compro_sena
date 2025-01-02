<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About_akhlak extends Model
{
    use HasFactory;
    protected $table = 'about_akhlak';
    protected $fillable = ['image1', 'image2', 'image3'];
}
