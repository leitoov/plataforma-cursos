<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class PaymentSetting extends Model
{
    protected $fillable = [
        'gateway',
        'is_active',
        'payable_id',
        'payable_type',
        'credentials'
    ];

    protected $casts = [
        'credentials' => 'array'
    ];

    public function payable(): MorphTo
    {
        return $this->morphTo();
    }
}
