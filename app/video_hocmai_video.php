<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class video_hocmai_video extends Model
{
    protected $table = 'video_hocmai_video';
    protected $fillable =[
        'video_id',
        'hocmai_video_id',
        'data',
        
    ];
}