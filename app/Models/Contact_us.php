<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact_us extends Model
{
    use HasFactory;

    protected $table = 'contact_us';
    protected $fillable = [
        'ho_city',
        'ho_address',
        'ho_phone',
        'ho_email',
        'ho_linkmap',
        'featured_image',
        'map',
    ];
}
