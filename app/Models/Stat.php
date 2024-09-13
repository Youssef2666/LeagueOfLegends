<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stat extends Model
{
    use HasFactory;

    protected $fillable = [
        'champion_id',
        'ad',
        'ap',
        'armor',
        'mr',
        'hp',
        'health_regen',
        'resource_regen',
        'movement_speed',
        'attack_range',
        'mana',
        'mana_regen',
        'attack_speed',
        'crit_damage',
        'energy',
        'energy_regen',
    ];
}
