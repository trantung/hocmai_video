<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HocMaiHeader extends Model
{
    protected $table = 'headers';
    protected $fillable =[
        'image',
        'start_time',
        'end_time',
        'desc',
        'status',
        'color',
    ];
}
