<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\Relations\MorphOne;

class Module extends Model
{
    protected $fillable = [
        'course_id',
        'title',
        'description',
        'video_url',
        'order',
        'is_active',
        'price_ars',
        'price_usd',
        'is_free'
    ];

    public function course(): BelongsTo
    {
        return $this->belongsTo(Course::class);
    }

    public function items(): HasMany
    {
        return $this->hasMany(Item::class);
    }

    public function exams(): MorphMany
    {
        return $this->morphMany(Exam::class, 'examable');
    }

    public function comments(): MorphMany
    {
        return $this->morphMany(Comment::class, 'commentable');
    }

    public function promotions(): MorphMany
    {
        return $this->morphMany(Promotion::class, 'promotable');
    }

    public function paymentSettings(): MorphOne
    {
        return $this->morphOne(PaymentSetting::class, 'payable');
    }
}
