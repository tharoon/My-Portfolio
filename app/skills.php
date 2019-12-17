<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class skills extends Model
{
      protected $table = 'skills';
    protected $fillable = ['skillname','skilltype','skillrating','box','languagesknown','languagesrating'];
}
