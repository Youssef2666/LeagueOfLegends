<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class LegacySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $legacyTypes = [
            ['type' => 'Tank'],
            ['type' => 'Fighter'],
            ['type' => 'Mage'],
            ['type' => 'Marksman'],
            ['type' => 'Assassin'],
            ['type' => 'Support'],
        ];

        foreach ($legacyTypes as $legacyType) {
            \App\Models\Legacy::create($legacyType);
        }
    }
}
