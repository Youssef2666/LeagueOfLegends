<?php

namespace Database\Seeders;

use App\Models\CharacterClasses;
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
        $legacyIds = DB::table('legacies')->pluck('id')->toArray();

        // Check if there are legacy IDs available
        if (empty($legacyIds)) {
            $this->command->error('No legacy data found. Please seed the legacy table first.');
            return;
        }
        $subTypes = [
            'Juggernaut',
            'Diver',
            'Burst',
            'BattleMage',
            'Artillery',
            'Vanguard',
            'Warden',
            'Carry',
            'Skirmisher',
            'Enchanter',
        ];
    
        // Insert data using the CharacterClass model's create method
        foreach ($subTypes as $subType) {
            CharacterClasses::create([
                'legacy_id' => $legacyIds[array_rand($legacyIds)], // Randomly assign a legacy ID
                'sub_type' => $subType,
            ]);
        }
    }
}
