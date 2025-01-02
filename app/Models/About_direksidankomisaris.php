<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About_direksidankomisaris extends Model
{
    use HasFactory;
    protected $table = 'about_direksidankomisaris';
    protected $fillable = ['image', 'name', 'position', 'type', 'description', 'experience'];
}
