<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Footer extends Model
{
    use HasFactory;
    protected $table = 'footer';


    /* $table->string('nama_pt');
            $table->string('alamat_pt');
            $table->string('image_member_of');
            $table->string('image_subsidiary_of');
            $table->string('image_footer');

            $table->string('logo_footer');
            $table->string('copyright');

            $table->string('instagram_link');
            $table->string('facebook_link');
            $table->string('twitter_link');
            $table->string('linkedin_link');
            $table->string('youtube_link'); */
    protected $fillable = [
        'nama_pt',
        'alamat_pt',
        'image_member_of',
        'image_subsidiary_of',
        'image_footer',

        'logo_footer',
        'copyright',

        'instagram_link',
        'facebook_link',
        'twitter_link',
        'linkedin_link',
        'youtube_link',
    ];
}
