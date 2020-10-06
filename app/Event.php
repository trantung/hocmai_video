<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class Event  extends Model
{
    protected $table = 'events';
    protected $fillable =[
        'name',
        'banner',
        'urlWebView',
        'fullScreen',
        'login_require',
        'is_public',
        'start_time',
        'end_time',
        'event_adjust', 
        'deep_link',
    ];

}
