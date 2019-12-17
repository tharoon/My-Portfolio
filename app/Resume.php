<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Resume extends Model
{
    protected $table = 'resume';
    protected $fillable = ['company_name','designation','from_date','to_date','box'];
}
