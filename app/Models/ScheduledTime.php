<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ScheduledTime extends Model
{
    use HasFactory;

    protected $fillable = [
        'disponibility',
        'date_time_id'
    ];

}
