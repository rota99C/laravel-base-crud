<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $fillable = ['title', 'description', 'year', 'image_thumb', 'image_cover', 'facebook_page', 'instagram_page', 'twitter_page', 'website_page', 'producers', 'directors', 'writers', 'cast', 'genres'];
}
