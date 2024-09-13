<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Champion extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'title',
        'position',
        'adaptive_types',
        'pick_rate',
        'win_rate',
        'ban_rate',
        'legacy_id',
        'character_class_id',
        'stat_id',
    ];
}
