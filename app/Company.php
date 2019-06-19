<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model{

    protected $primarykey = "companies_id";
  
    protected $fillable = [
      'company_name',
      'company_abbreviation',
      'company_logo_path',
      'company_phone_one',
      'company_phone_two'
    ];
}
