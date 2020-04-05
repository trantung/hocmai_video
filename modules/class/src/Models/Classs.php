<?php
namespace APV\Classs\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Classs extends Model
{
    use SoftDeletes;

    /**
     * @var string
     */
    protected $table = 'class';

    /**
     * @var array
     */
    protected $dates = ['deleted_at'];
    protected $fillable = [
        'name',
        'desc',
        'schoolsubjects_id',
    ];
}

