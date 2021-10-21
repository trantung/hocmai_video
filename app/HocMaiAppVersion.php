<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class HocMaiAppVersion extends Model
{
    use SoftDeletes;

    protected $table = 'app_versions';
    protected $dates = ['deleted_at'];
    protected $fillable =[
        //id cua app
        'app_id',
        //phien ban app. IOS = 1, ANDROID = 2
        'os_id',
        'app_version',
        'status',
        'adjust_event',
        'desc'
    ];

}
