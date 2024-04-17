<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class AvailableHours extends Model
{
    use HasFactory;

    protected $fillable = [
        "user_id",
        "scheduled_time_id"
    ];

    /**
     * Get the user that owns the AvailableHours
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    /**
     * Get the scheduled that owns the AvailableHours
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function scheduled(): BelongsTo
    {
        return $this->belongsTo(ScheduledTime::class, 'scheduled_time_id', 'id');
    }

}
