<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class LivestreamDetail extends Model
{
    protected $table = 'livestream_details';
    protected $fillable =[
        'livestream_id',
        'data'
    ];

}
