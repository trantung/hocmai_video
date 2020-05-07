<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CommentFake extends Model
{
    protected $table = 'comment_fakes';
    protected $fillable =[
        'userFake_id',
        'desc',
    ];
    
}
