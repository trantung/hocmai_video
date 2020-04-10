<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Livestream extends Model
{
    protected $table = 'livestreams';
    protected $fillable =[
        'name',
        'image_small',
        'image_big',
        'require_login',
        'description',
        'publish_time',
        'timer_clock',
        'repeat',
        'teacher_id',
        'schoolblock_id',
        'class_id',
        'schoolblock_id',
    ];
    
}
