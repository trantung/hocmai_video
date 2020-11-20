<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mdl_city extends Model
{
    protected $table = 'mdl_city';
    protected $fillable =[
        'id',
        'name',
        'description',
        'code',
    ];
}
