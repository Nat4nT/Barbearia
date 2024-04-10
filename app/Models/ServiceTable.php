<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceTable extends Model
{
    use HasFactory;

    protected $fillable = [
        'total_value',
        'workerd_id',
        'user_id'
    ];
}
