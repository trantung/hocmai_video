<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MdlDistrict extends Model
{
    //
    protected $table = 'hocmai_district';
    protected $fillable =[
        'id',
        'name',
        'fullname',
        'type',
        'city_id',
    ];
}
