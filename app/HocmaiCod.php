<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HocmaiCod extends Model
{
    protected $table = 'hocmai_cods';
    protected $fillable =[
        'user_id',
        'user_name',
        'user_phone_account',
        'user_phone_cod',
        'email',
        'city_id',
        'district_id',
        'address',
        'course_id_register',
        'course_name_register',
        'package_time_id_register',
        'package_time_name_register',
        'base_price',
        'sale_price',
        'status',
        'note',
    ];
}
