<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Superuser extends Authenticatable
{
    protected $guard = "superusers";
    // protected $table = "superusers";

    protected $fillable = [
        'name', 'email', 'password',
    ];

    public function getAuthPsssword(){
        return $this->password;
    }
}
