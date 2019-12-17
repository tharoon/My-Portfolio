<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class hireMe extends Model
{
    protected $table = 'hireme';
    protected $fillable = ['amount','mainservice','service1','service2','service3','service4','box'];
}
