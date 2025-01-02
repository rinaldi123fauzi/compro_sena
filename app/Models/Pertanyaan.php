<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pertanyaan extends Model
{
    use HasFactory;
    protected $table = 'pertanyaan';


    protected $fillable = [
        'id_user',
        'name',
        'email',
        'company',
        'status',
        'phone',
        'subject',
        'message',
        'status',
        'jenis',
        'replied_at',
        'replied_by',
        'reply',
        'reply_attachment',
    ];
}
