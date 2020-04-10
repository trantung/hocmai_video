<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VideoAnotherVideo extends Model
{

    protected $table = 'video_another_videos';
    protected $fillable =[
        'video_id',
        'video_another_id',
    ];
}
