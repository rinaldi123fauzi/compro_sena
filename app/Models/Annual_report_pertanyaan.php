<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Annual_report_pertanyaan extends Model
{
    use HasFactory;
    protected $table = 'annualreport_pertanyaan';

    protected $fillable = [
        'id_annualreport',
        'name',
        'email',
        'company',
        'phone',
        'subject',
        'message',
        'status',
        'replied_at',
        'replied_by',
        'reply',
        'reply_attachment',
    ];
}
