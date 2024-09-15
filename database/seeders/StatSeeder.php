<?php

namespace Database\Seeders;

use App\Models\Stat;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class StatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $stats = [
            [
                'champion_id' => 1,
                'ad' => 12, 
                'ap' => 60, // Base ability power
                'armor' => 21, // Base armor
                'mr' => 30, // Base magic resist
                'hp' => 570, 
                'health_regen' => 5.5,
                'resource_regen' => 0, 
                'movement_speed' => 330, 
                'attack_range' => 'Range (550)',
                'mana' => 340, // Base mana
                'mana_regen' => 8, // Mana regeneration per second
                'attack_speed' => 0.668, // Base attack speed
                'crit_damage' => 0.0, // Critical damage
                'energy' => 120, // Energy
                'energy_regen' => 2.1, // Energy regeneration
            ],
            [
                'champion_id' => 3,
                'ad' => 63,
                'ap' => 0, // Base ability power
                'armor' => 21, // Base armor
                'mr' => 30, // Base magic resist
                'hp' => 570, 
                'health_regen' => 5.5,
                'resource_regen' => 0, 
                'movement_speed' => 330, 
                'attack_range' => 'Range (550)',
                'mana' => 340, // Base mana
                'mana_regen' => 8, // Mana regeneration per second
                'attack_speed' => 0.668, // Base attack speed
                'crit_damage' => 0.0, // Critical damage
                'energy' => 0, // Energy
                'energy_regen' => 0.0, // Energy regeneration
            ]
            // Add more stat records for other champions as needed
        ];

        // Insert each stat using the Stat model
        foreach ($stats as $statData) {
            Stat::create($statData);
        }
    }
}
