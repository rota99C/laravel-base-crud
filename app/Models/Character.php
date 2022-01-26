<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Character extends Model
{
    protected $fillable = ['name', 'description', 'image_thumb', 'image_cover', 'powers', 'first_appearance', 'occupation', 'facebook_page', 'twitter_page', 'instagram_page', 'video_page', 'alter_ego'];
}
