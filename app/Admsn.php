<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admsn extends Model
{
    protected $table = 'admsn';
    protected $fillable = [
        'name','father_name','mother_name','dob','gender','admsn_sought','p_address_id','r_address_id','aggrement',
    ];
}
