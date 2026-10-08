<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\Relations\MorphOne;

class Course extends Model
{
    protected $fillable = [
        'title',
        'description',
        'video_url',
        'source',
        'order',
        'is_active',
        'price_ars',
        'price_usd',
        'is_free'
    ];

    public function modules(): HasMany
    {
        return $this->hasMany(Module::class);
    }

    public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class, 'course_user')
            ->withPivot('access_granted_by')
            ->withTimestamps();
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
