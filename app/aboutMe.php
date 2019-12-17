<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class aboutMe extends Model
{
    protected $table = 'aboutme';
    protected $fillable = ['name','email','phone','dob','address','nationality','image'];
}
