<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Livestream extends Model
{
    protected $table = 'livestreams';
    protected $fillable =[
        'name',
        'desc',
        'class_id',
        'type',
        'image_small',
        'image_big',
        'url',
        'comment',
        'DateCreated',
        'DisplayDate',
        'user_id',
        'schoolblock_id',
        'subject_id',
        'teacher_id',
    ];
    
}
