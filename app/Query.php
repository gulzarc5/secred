<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Query extends Model
{
    protected $table = 'query';
    protected $fillable = [
        'name','email','subject','message',
    ];
}
