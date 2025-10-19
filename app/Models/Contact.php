<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = ['phone','mobile','email','facebook_url','twitter_url','instagram_url','linkedin_url'];
}
