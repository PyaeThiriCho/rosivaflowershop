<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Category;

class OccationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Get all category IDs from the categories table
        $categoryIds = Category::pluck('id')->toArray();

        // If no categories exist, create some default ones
        if (empty($categoryIds)) {
            $defaultCategories = [
                'Red Roses', 'Pink Roses', 'White Roses', 'Yellow Roses', 'Orange Roses',
                'Purple Roses', 'Peach Roses', 'Lavender Roses', 'Coral Roses', 'Burgundy Roses'
            ];

            foreach ($defaultCategories as $categoryName) {
                $category = Category::create(['name' => $categoryName]);
                $categoryIds[] = $category->id;
            }
        }

        $occasionData = [
            // Wedding Occasions
            ['name' => 'Bridal Rose Bouquet', 'price' => 85000, 'description' => 'Elegant white roses perfect for bridal bouquets'],
            ['name' => 'Wedding Peony Collection', 'price' => 95000, 'description' => 'Romantic peonies in soft pink for wedding ceremonies'],
            ['name' => 'Bridal Lily Arrangement', 'price' => 78000, 'description' => 'Pure white lilies symbolizing purity and devotion'],
            ['name' => 'Wedding Orchid Display', 'price' => 120000, 'description' => 'Exotic orchids for sophisticated wedding decor'],
            ['name' => 'Bridal Hydrangea Bouquet', 'price' => 65000, 'description' => 'Full hydrangea bouquets in soft blue tones']
        ];

        foreach ($occasionData as $index => $occasion) {
            DB::table('occations')->insert([
                'name' => $occasion['name'],
                'price' => $occasion['price'],
                'image' => "images/occations/occasion_" . ($index + 1) . ".jpg",
                'description' => $occasion['description'],
                'category_id' => $categoryIds[array_rand($categoryIds)],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
