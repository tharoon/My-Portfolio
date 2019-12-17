<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class reference extends Model
{
    protected $table = 'references';
    protected $fillable = ['firstname', 'designation','company_name','description','box'];
}
