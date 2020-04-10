<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LivestreamAnotherVideo extends Model
{
    protected $table = 'livestream_another_videos';
    protected $fillable =[
        'livestream_id',
        'another_video_id',
    ];
}
