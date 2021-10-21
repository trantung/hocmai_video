<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class UserFake extends Model
{
    protected $table = 'user_fakes';
    protected $fillable =[
        'name',
        'fullname',
        'avatar',
    ];
    
    public function CommentFake(){

        return $this->hasMany(CommentFake::class,'userFake_id');

    }
}
