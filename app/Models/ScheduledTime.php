<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ScheduledTime extends Model
{
    use HasFactory;

    protected $fillable = [
        // 'disponibility',
        // 'user_id',
        // 'data',
        'hour_id'
    ];

    /**
     * Get the hour that owns the ScheduledTime
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function hour(): BelongsTo
    {
        return $this->belongsTo(Hour::class, 'hour_id', 'id');
    }

    /**
     * Get the user that owns the ScheduledTime
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
