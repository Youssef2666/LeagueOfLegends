<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AbilitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $abilities = [
            [
                'champion_id' => 1,
                'name' => 'Orb of Deception',
                'description' => 'Ahri sends out and pulls back her orb, dealing magic damage on the way out and true damage on the way back.',
                'ability_type' => 'Q',
            ],
            [
                'champion_id' => 1,
                'name' => 'Fox-Fire',
                'description' => 'Ahri releases three flames that lock onto nearby enemies, prioritizing champions.',
                'ability_type' => 'W',
            ],
            [
                'champion_id' => 1,
                'name' => 'Charm',
                'description' => 'Ahri blows a kiss that damages and charms the first enemy hit, causing them to walk harmlessly toward her for a short duration.',
                'ability_type' => 'E',
            ],
            [
                'champion_id' => 1,
                'name' => 'Spirit Rush',
                'description' => 'Ahri dashes forward and fires essence bolts at nearby enemies, dealing magic damage. Spirit Rush can be cast up to three times within a few seconds.',
                'ability_type' => 'R',
            ],
        ];

        foreach ($abilities as $ability) {
            \App\Models\Ability::create($ability);
        }
    }
}
