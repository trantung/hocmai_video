<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class RateApp extends Model
{
    protected $table = 'rate_apps';
    protected $fillable =[
        'customer_id',
        'customer_name',
        'customer_comment',
        'customer_username',
        'rate',
        'os',
        'version'
    ];

}
