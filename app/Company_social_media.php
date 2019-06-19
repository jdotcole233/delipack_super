<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company_social_media extends Model{
    protected $fillable = [
      'twitter_handle',
      'instagram_handle',
      'facebook_handle',
      'company_id'
    ];
}
