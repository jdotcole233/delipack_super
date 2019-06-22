<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company_social_media extends Model{

    protected $table = "company_socialmedia_handles";

    protected $fillable = [
      'twitter_handle',
      'instagram_handle',
      'facebook_handle',
      'companiescompanies_id'
    ];
}
