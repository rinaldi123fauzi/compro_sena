<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service_softwaredanhardware extends Model
{
    use HasFactory;
    protected $table = 'service_softwaredanhardware';
    protected $fillable = ['title', 'image', 'type'];
}
