<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SchoolBlock extends Model
{
    protected $table = 'schoolblocks';
    protected $fillable =[
        'name',
        'desc',
        'avatar',
    ];

}
