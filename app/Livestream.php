<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Livestream extends Model
{
    protected $table = 'livestreams';
    protected $fillable =[
        'name',
        'image_small',
        'image_big',
        'require_login',
        'description',
        'status_time',
        'end_time',
        'timer_clock',
        'repeat',
        'teacher_id',
        'subject_id',
        'class_id',
        'subject_id',
        'schoolblock_id',
    ];

    public function setEndTimeAttribute($value)
    {
        $this->attributes['end_time'] =  Carbon::parse($value);
    }

    public function setTimerClockAttribute($value)
    {
        $this->attributes['timer_clock'] =  Carbon::parse($value);
    }
    public function livestreamAnotherVideo(){
        return $this->hasMany(LivestreamAnotherVideo::class,'livestream_id');
    }
}
