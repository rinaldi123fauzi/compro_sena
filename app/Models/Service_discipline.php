<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service_discipline extends Model
{
    use HasFactory;
    protected $table = 'service_discipline';
    protected $fillable = ['headline', 'list'];
}
