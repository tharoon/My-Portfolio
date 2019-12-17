<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class changeUserRole extends Model
{
    protected $table = 'users';
    protected $fillable = ['firstname','lastname','email','username','password','repeatpassword','userrole'];
}
