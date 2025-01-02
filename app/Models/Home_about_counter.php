<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Home_about_counter extends Model
{
    use HasFactory;
    protected $table = 'home_about_counter';
    protected $fillable = ['number', 'prefix', 'title', 'title_eng'];
}
