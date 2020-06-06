<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admsn extends Model
{
    protected $table = 'admsn';
    protected $fillable = [
        'name','dob','gender','religion','caste','stream','r_address','mobile','email','father_name','mother_name','previous_school','board','session','division','medium','percentile','eng','second_lang','maths','science','social_science','other','payment_type','payment_status','payment_id','transaction_id','aggrement',
    ];
}
