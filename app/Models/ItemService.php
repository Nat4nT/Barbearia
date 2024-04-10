<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ItemService extends Model
{
    use HasFactory;

    protected $fillable = [
        'selected_service_id',
        'service_id'
    ];
}
