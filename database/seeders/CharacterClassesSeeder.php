<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CharacterClassesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $legacyIds = DB::table('legacy')->pluck('id')->toArray();

        // Check if there are legacy IDs available
        if (empty($legacyIds)) {
            $this->command->error('No legacy data found. Please seed the legacy table first.');
            return;
        }

        // Insert data into character_classes table
        DB::table('character_classes')->insert([
            ['legacy_id' => $legacyIds[array_rand($legacyIds)], 'sub_type' => 'Juggernaut'],
            ['legacy_id' => $legacyIds[array_rand($legacyIds)], 'sub_type' => 'Diver'],
            ['legacy_id' => $legacyIds[array_rand($legacyIds)], 'sub_type' => 'Burst'],
            ['legacy_id' => $legacyIds[array_rand($legacyIds)], 'sub_type' => 'BattleMage'],
            ['legacy_id' => $legacyIds[array_rand($legacyIds)], 'sub_type' => 'Artillery'],
            ['legacy_id' => $legacyIds[array_rand($legacyIds)], 'sub_type' => 'Vanguard'],
            ['legacy_id' => $legacyIds[array_rand($legacyIds)], 'sub_type' => 'Warden'],
            ['legacy_id' => $legacyIds[array_rand($legacyIds)], 'sub_type' => 'Carry'],
            ['legacy_id' => $legacyIds[array_rand($legacyIds)], 'sub_type' => 'Skirmisher'],
            ['legacy_id' => $legacyIds[array_rand($legacyIds)], 'sub_type' => 'Enchanter'],
        ]);
    }
}
