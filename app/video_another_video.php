<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class video_another_video extends Model
{
    protected $table = 'video_anothers';
    protected $fillable =[
        'video_id',
        'video_another_id',
        
    ];
}
