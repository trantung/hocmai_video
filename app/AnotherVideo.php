<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AnotherVideo extends Model
{
    protected $table = 'another_videos';
    protected $fillable =[
        'title',
        'url',
        'duration',
        'class_id',
        'schoolblock_id',
        'subject_id',
        'source_id'
    ];
}
