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
        'rate',
    ];

}
