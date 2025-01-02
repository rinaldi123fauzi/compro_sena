<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Visimisi extends Model
{
    use HasFactory;
    protected $table = 'about_visimisi';
    protected $fillable = ['headline', 'visi_title', 'visi_description', 'misi_title', 'misi_description'];
}
