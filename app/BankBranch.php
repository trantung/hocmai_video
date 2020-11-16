<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BankBranch extends Model
{
    protected $table = 'bank_branchs';
    protected $fillable =[
        'branch_name',
        'bank_id',
    ];
}
