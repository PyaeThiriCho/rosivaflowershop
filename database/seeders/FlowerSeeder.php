<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Category;
use App\Models\Type;

class FlowerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Get all category IDs from the categories table
        $categories = Category::all();
        $types = Type::all();

        if ($categories->isEmpty()) {
            $this->command->info('No categories found. Please run CategorySeeder first.');
            return;
        }

        if ($types->isEmpty()) {
            $this->command->info('No types found. Please run TypeSeeder first.');
            return;
        }

        $flowerData = [];

        foreach ($categories as $category) {
            // Create 3-5 flowers for each category
            $flowerCount = rand(3, 5);

            for ($i = 1; $i <= $flowerCount; $i++) {
                $flowerData[] = [
                    'name' => $this->generateFlowerName($category->name, $i),
                    'price' => rand(25000, 150000),
                    'image' => "images/flowers/flower_" . $category->id . "_" . $i . ".jpg",
                    'description' => $this->generateDescription($category->name),
                    'category_id' => $category->id,
                    'type_id' => $types->random()->id,
                    'created_at' => now(),
                    'updated_at' => now(),
                ];
            }
        }

        // Insert all flowers
        foreach ($flowerData as $flower) {
            DB::table('flowers')->insert($flower);
        }

        $this->command->info('Created ' . count($flowerData) . ' flowers across ' . $categories->count() . ' categories.');
    }

    private function generateFlowerName($categoryName, $index)
    {
        $variations = [
            'Bouquet', 'Collection', 'Arrangement', 'Display', 'Bundle',
            'Premium', 'Deluxe', 'Classic', 'Elegant', 'Luxury'
        ];

        $variation = $variations[array_rand($variations)];
        return $categoryName . ' ' . $variation . ' ' . $index;
    }

    private function generateDescription($categoryName)
    {
        $descriptions = [
            "Beautiful {$categoryName} perfect for any special occasion.",
            "Elegant {$categoryName} arrangement with premium quality blooms.",
            "Stunning {$categoryName} collection handpicked for freshness.",
            "Luxurious {$categoryName} display ideal for celebrations.",
            "Classic {$categoryName} bouquet with timeless beauty.",
            "Premium {$categoryName} arrangement for sophisticated tastes.",
            "Deluxe {$categoryName} collection featuring rare varieties.",
            "Exquisite {$categoryName} display perfect for gifting.",
            "Artistic {$categoryName} arrangement crafted with care.",
            "Signature {$categoryName} collection for memorable moments."
        ];

        return $descriptions[array_rand($descriptions)];
    }
}
