<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserCommentFake extends Model
{
    protected $table = 'user_comment_fake';
    protected $fillable =[
        'userfake_id',
        'commentfake_id',
    ];
}
