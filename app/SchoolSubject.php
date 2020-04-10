<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SchoolSubject extends Model
{
    protected $table = 'school_Subjects';
    protected $fillable =[
        'name',
        'desc',
        'class_id',
        'teacher_id',
    ];
}
