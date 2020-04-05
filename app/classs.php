<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class classs extends Model
{
    protected $table = 'class';
    protected $fillable =[
        'name',
        'desc',
        'schoolblock_id',
        'schoolsubjects_id',
    ];

}
