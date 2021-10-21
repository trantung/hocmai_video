<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MdlCity extends Model
{
    protected $table = 'hocmai_cities';
    protected $fillable =[
        'id',
        'name',
        'description',
        'code',
    ];
}
