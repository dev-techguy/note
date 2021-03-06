<?php

namespace Note\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use Note\Uuids\Uuids;

class Notification extends Model
{
    use Uuids, SoftDeletes, HasFactory;

    /**
     * Indicates if the IDs are auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = false;

    /**
     * type of auto-increment
     *
     * @string
     */
    protected $keyType = 'string';

    //set attributes
    protected $guarded = [];

    /**
     * get the models
     * relating here
     * @return MorphTo
     */
    public function notification()
    {
        return $this->morphTo(Notification::class);
    }
}
