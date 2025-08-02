<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Type;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $types = [
            'Bouquet',
            'Arrangement',
            'Single Flower',
            'Mixed Flowers',
            'Seasonal Collection',
            'Premium Collection',
            'Wedding Collection',
            'Gift Collection',
            'Decorative',
            'Special Occasion'
        ];

        foreach ($types as $typeName) {
            Type::create([
                'name' => $typeName
            ]);
        }

        $this->command->info('Created ' . count($types) . ' flower types.');
    }
}
