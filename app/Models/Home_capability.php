<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Home_capability extends Model
{
    use HasFactory;
    protected $table = 'home_capability';
    protected $fillable = ['image', 'title', 'description', 'title_eng', 'description_eng'];
}
