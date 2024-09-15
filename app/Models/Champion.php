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
        'position_id',
        'pick_rate',
        'win_rate',
        'ban_rate',
        'legacy_id',
        'character_class_id',
        'region_id',
    ];

    public function position()
    {
        return $this->belongsTo(Role::class, 'position_id');
    }

    public function legacy()
    {
        return $this->belongsTo(Legacy::class);
    }

    public function characterClass()
    {
        return $this->belongsTo(CharacterClasses::class, 'character_class_id');
    }

    public function abilities()
    {
        return $this->hasMany(Ability::class);
    }

    public function stats()
    {
        return $this->hasOne(Stat::class);
    }

    public function region()
    {
        return $this->belongsTo(Region::class);
    }
}
