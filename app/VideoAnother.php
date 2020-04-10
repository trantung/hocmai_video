<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VideoAnother extends Model
{
    protected $table = 'video_anothers';
    protected $fillable =[
        'title',
        'url',
        'class_id',
        'schoolbock_id',
        'schoolsubject_id',
    ];
}
