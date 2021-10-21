<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HocmaiBank extends Model
{
    protected $table = 'hocmai_banks';
    protected $fillable =[
        'bank_id',
        'account_holder',
        'account_number',
        'branch_id',
    ];
}
