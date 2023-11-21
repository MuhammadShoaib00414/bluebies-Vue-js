<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subscription extends Model
{
    use HasFactory;
    protected $fillable = [
        'plan_id',
        'user_id',
        'starts_at',
        'ends_at',
        'renewed_at',
        'renewed_subscription_id',
        'subscription_id',
        'upgraded_at',
        'upgraded_to_plan_id',
        'downgraded_at',
        'downgraded_to_plan_id',
        'cancelled_at',
        // Add other fillable columns
    ];
}
