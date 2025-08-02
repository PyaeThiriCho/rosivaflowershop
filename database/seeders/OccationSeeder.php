<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class OccationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
    $ids = [3, 5, 6, 8, 9];
    $flowers = [];
        $flowerNames = [
            'Roses', 'Tulips', 'Lilies', 'Daisies', 'Orchids', 'Peonies', 'Sunflowers', 'Carnations',
            'Hydrangeas', 'Chrysanthemums', 'Alstroemerias', 'Irises', 'Gardenias', 'Anemones', 'Camellias',
            'Freesias', 'Gladiolus', 'Heather', 'Lavender', 'Magnolias', 'Marigolds', 'Pansies', 'Petunias',
            'Ranunculus', 'Snapdragons', 'Sweet Peas', 'Violets', 'Zinnias', 'Amaryllis', 'Begonias',
        ];

       $flowers = [];
        $flowerNames = [
            'Roses', 'Tulips', 'Lilies', 'Daisies', 'Orchids', 'Peonies', 'Sunflowers', 'Carnations',
            'Hydrangeas', 'Chrysanthemums', 'Alstroemerias', 'Irises', 'Gardenias', 'Anemones', 'Camellias',
            'Freesias', 'Gladiolus', 'Heather', 'Lavender', 'Magnolias', 'Marigolds', 'Pansies', 'Petunias',
            'Ranunculus', 'Snapdragons', 'Sweet Peas', 'Violets', 'Zinnias', 'Amaryllis', 'Begonias',
            'Calla Lilies', 'Cosmos', 'Delphiniums', 'Forget-Me-Nots', 'Foxgloves', 'Gerberas', 'Hibiscus',
            'Impatiens', 'Jasmine', 'Kalanchoe', 'Larkspur', 'Morning Glory', 'Nasturtium', 'Oleander',
            'Primroses', 'Queen Anne’s Lace', 'Rhododendrons', 'Scabiosa', 'Tansy', 'Verbena', 'Wisteria',
            'Xeranthemum', 'Yarrow', 'Aster', 'Bouvardia', 'Clematis', 'Dahlia', 'Echinacea', 'Flannel Flower',
            'Gaillardia', 'Heliconia', 'Ixora', 'Jacobinia', 'Kangaroo Paw', 'Liatris', 'Monarda', 'Nemesia',
            'Osteospermum', 'Phlox', 'Quince Blossom', 'Russelia', 'Salvia', 'Tuberose', 'Ursinia', 'Viola',
            'Waxflower', 'Xylobium Orchid', 'Yellow Archangel', 'Zephyranthes', 'Balloon Flower', 'Bottlebrush',
            'Calendula', 'Dutch Iris', 'Eryngium', 'Flax', 'Grevillea', 'Honesty Flower', 'Indian Paintbrush',
            'Japanese Anemone', 'Kniphofia', 'Leucadendron', 'Mimosa', 'Nerine', 'Oxalis', 'Pentas', 'Quillaja',
            'Rafflesia', 'Sedum', 'Thunbergia', 'Urn Plant'
        ];

        foreach ($flowerNames as $index => $name) {
            $flowers[] = [
                'name' => $name,
                'price' => rand(20000, 80000),
                'image' => "https://www.flower.com/images/flowers/".strtolower(str_replace(' ', '-', $name)).".jpg",
                'description' => "Beautiful {$name} bouquet, perfect for any occasion.",
                'category_id' => $ids[array_rand($ids)],
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }

        DB::table('occations')->insert($flowers);



    }
}
