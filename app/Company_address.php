<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company_address extends Model{
  protected  $fillable = [
          'address',
          'region',
          'area',
          'city',
          'company_id'
    ];
}
