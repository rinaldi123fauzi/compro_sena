<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    protected $table = 'service';
    protected $fillable = ['title', 'description', 'image', 'list', 'title_eng', 'description_eng', 'list_eng', 'short_description'];
}
