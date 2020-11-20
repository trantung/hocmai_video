<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MdlCity extends Model
{
    protected $table = 'mdl_city';
    protected $fillable =[
        'id',
        'name',
        'description',
        'code',
    ];
}
