<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HocMaiFooter extends Model
{
    protected $table = 'footers';
    protected $fillable =[
        'image',
        'status',
        'start_time',
        'end_time',
    ];
}
