<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Promotion extends Model
{
    protected $fillable = [
        'promotable_id',
        'promotable_type',
        'discount_type',
        'amount',
        'start_date',
        'end_date',
        'is_active'
    ];

    protected $casts = [
        'start_date' => 'datetime',
        'end_date' => 'datetime'
    ];

    public function promotable(): MorphTo
    {
        return $this->morphTo();
    }
}
