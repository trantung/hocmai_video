<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    protected $table = 'teachers';
    protected $fillable =[
        'name',
        'desc',
        'class_id',
        'schoolSubjects_id',
    ];
}
