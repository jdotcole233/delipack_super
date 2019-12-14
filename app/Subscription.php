<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subscription extends Model
{
    protected $primarykey = "subscription_id";
    protected $fillable = ["subscription_type","companycompanies_id","renewal_duration"];
}
