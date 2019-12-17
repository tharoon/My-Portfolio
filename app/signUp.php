<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class signUp extends Model
{

	protected $table = 'users';
    protected $fillable = ['firstname','lastname','email','username','password','repeatpassword'];
}
