<?php

namespace Database\Seeders;

use App\Models\Region;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RegionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $regions = [
            [
                'name' => 'Demacia',
                'description' => 'A powerful kingdom known for its strict moral code, honor, and sense of justice. It emphasizes order and duty.',
            ],
            [
                'name' => 'Noxus',
                'description' => 'A ruthless empire driven by strength, ambition, and conquest. It values might above all else and seeks to expand its influence.',
            ],
            [
                'name' => 'Ionia',
                'description' => 'A land rich in spiritual traditions and magic, where harmony with nature and balance between forces are deeply valued.',
            ],
            [
                'name' => 'Piltover',
                'description' => 'A city known for its technological innovation and progress, often referred to as the "City of Progress." Its society thrives on invention and commerce.',
            ],
            [
                'name' => 'Zaun',
                'description' => 'An industrial city filled with danger and pollution, where chem-powered technology and experimentation shape everyday life.',
            ],
            [
                'name' => 'Freljord',
                'description' => 'A harsh, icy region ruled by rival tribes, where survival in the frozen wilderness is the central concern.',
            ],
            [
                'name' => 'Shurima',
                'description' => 'A vast, ancient desert empire, now mostly in ruins, once known for its grandeur and power.',
            ],
            [
                'name' => 'Bilgewater',
                'description' => 'A bustling port city teeming with pirates, smugglers, and sea monsters, where survival often means navigating dangerous waters and treacherous deals.',
            ],
            [
                'name' => 'Targon',
                'description' => 'A mountainous region deeply connected to celestial forces and ancient, mystical beings, home to those who aspire to touch the stars.',
            ],
            [
                'name' => 'Bandle City',
                'description' => 'A mystical, whimsical realm inhabited by a magical race known for their curiosity and playfulness, hidden away from most of the world.',
            ],
            [
                'name' => 'The Void',
                'description' => 'A terrifying, mysterious realm beyond the known world, filled with dangerous entities that hunger for the destruction of all things.',
            ],
            [
                'name' => 'Shadow Isles',
                'description' => 'A once-vibrant land now cursed and filled with dark magic, haunted by undead forces and driven by malevolent power.',
            ],
            [
                'name' => 'Ixtal',
                'description' => 'A secluded jungle nation with mastery over elemental magic, where the inhabitants live in isolation, protecting their secrets from outsiders.',
            ],
        ];

        foreach ($regions as $region) {
            Region::create($region);
        }
    }
    
}
