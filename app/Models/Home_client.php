<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Home_client extends Model
{
    use HasFactory;
    protected $table = 'home_client';
    protected $fillable = ['image', 'title', 'type'];
}
