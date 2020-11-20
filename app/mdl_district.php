<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mdl_district extends Model
{
    //
    protected $table = 'mdl_district';
    protected $fillable =[
        'id',
        'name',
        'fullname',
        'type',
        'city_id',
    ];
}
