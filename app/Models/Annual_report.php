<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Annual_report extends Model
{
    use HasFactory;

    protected $table = 'annualreport';
    protected $fillable = [
        'id_user',
        'title',
        'description',
        'image',
        'file',
        'tahun',
        'is_active'
    ];
}
