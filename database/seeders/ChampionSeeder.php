<?php

namespace Database\Seeders;

use App\Models\Champion;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ChampionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $champions = [
            [
                'name' => 'Ahri',
                'title' => 'the Nine-Tailed Fox',
                'character_class_id' => 2,
                'legacy_id' => 1,
                'position_id' => 1,
                'region_id' => 3,
                'pick_rate' => 0.05,
                'win_rate' => 0.15,
                'ban_rate' => 0.39,
            ],
            [
                'name' => 'Ziggs',
                'title' => 'the Hexplosives Expert',
                'character_class_id' => 4,
                'legacy_id' => 3,
                'position_id' => 2,
                'region_id' => 4,
                'pick_rate' => 0.17,
                'win_rate' => 0.20,
                'ban_rate' => 0.44,
            ],
            [
                'name' => 'Caitlyn',
                'title' => 'the Sheriff of Piltover',
                'character_class_id' => 3,
                'legacy_id' => 2,
                'position_id' => 3,
                'region_id' => 4,
                'pick_rate' => 0.21,
                'win_rate' => 0.25,
                'ban_rate' => 0.45,
            ],
            [
                'name' => 'Yasuo',
                'title' => 'the Unforgiven',
                'character_class_id' => 1,
                'legacy_id' => 4,
                'position_id' => 4,
                'region_id' => 3,
                'pick_rate' => 0.13,
                'win_rate' => 0.18,
                'ban_rate' => 0.44,
            ],
            [
                'name' => 'Cassiopeia',
                'title' => 'the Serpent Ward',
                'character_class_id' => 5,
                'legacy_id' => 5,
                'position_id' => 5,
                'region_id' => 2,
                'pick_rate' => 0.10,
                'win_rate' => 0.12,
                'ban_rate' => 0.45,
            ],
            [
                'name' => 'Yes Sir',
                'title' => 'The Stripper',
                'character_class_id' => 5,
                'legacy_id' => 3,
                'position_id' => 3,
                'region_id' => 1,
                'pick_rate' => 0.70,
                'win_rate' => 0.60,
                'ban_rate' => 0.45,
            ],
            // Add more here
        ];
    
        foreach ($champions as $champion) {
            Champion::create($champion);
        }
    }
}
