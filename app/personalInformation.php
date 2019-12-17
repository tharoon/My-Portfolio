<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class personalInformation extends Model
{
    protected $table = 'personal_information';
    protected $fillable = ['firstname','lastname','address','phone_number','whatsapp_number','skype_id','email','date_of_birth'];
}
