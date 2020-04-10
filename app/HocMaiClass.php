<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class HocMaiClass extends Model
{
    protected $table = 'classes';
    protected $fillable =[
        'name',
        'desc',
        'schoolblock_id',
        'subject_id',
    ];

}
