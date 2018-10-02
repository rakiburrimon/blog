<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
     protected $fillable = [
        'name', 'contact', 'email','result','batch_id','course_id',
    ];

    protected $hidden = [
        'remember_token',
    ];
}
