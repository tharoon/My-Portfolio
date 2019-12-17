<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class contactMe extends Model
{
    //
    protected $fillable = ['name','email','phone_number','message'];
}
