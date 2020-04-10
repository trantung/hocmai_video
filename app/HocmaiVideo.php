<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HocmaiVideo extends Model
{
    protected $table = 'hocmai_videos';
    protected $fillable =[
        'scorm_id',
        'title',
        'url',
        'class_id',
        'schoolblock_id',
        'subject_id',
    ];
}
