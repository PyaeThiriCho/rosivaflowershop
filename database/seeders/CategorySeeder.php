<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            // Roses
            'Red Roses', 'Pink Roses', 'White Roses', 'Yellow Roses', 'Orange Roses', 'Purple Roses', 'Peach Roses', 'Lavender Roses',
            'Coral Roses', 'Burgundy Roses', 'Ivory Roses', 'Salmon Roses', 'Mauve Roses', 'Cream Roses', 'Apricot Roses',

            // Lilies
            'White Lilies', 'Pink Lilies', 'Yellow Lilies', 'Orange Lilies', 'Red Lilies', 'Purple Lilies', 'Tiger Lilies', 'Easter Lilies',
            'Stargazer Lilies', 'Casa Blanca Lilies', 'Asiatic Lilies', 'Oriental Lilies', 'Trumpet Lilies', 'Day Lilies',

            // Tulips
            'Red Tulips', 'Yellow Tulips', 'Pink Tulips', 'White Tulips', 'Purple Tulips', 'Orange Tulips', 'Peach Tulips', 'Coral Tulips',
            'Burgundy Tulips', 'Ivory Tulips', 'Salmon Tulips', 'Mauve Tulips', 'Cream Tulips', 'Apricot Tulips',

            // Daisies
            'White Daisies', 'Yellow Daisies', 'Pink Daisies', 'Purple Daisies', 'Orange Daisies', 'Red Daisies', 'Gerbera Daisies',
            'Shasta Daisies', 'African Daisies', 'Oxeye Daisies', 'English Daisies', 'Crown Daisies',

            // Orchids
            'White Orchids', 'Pink Orchids', 'Purple Orchids', 'Yellow Orchids', 'Orange Orchids', 'Red Orchids', 'Phalaenopsis Orchids',
            'Cattleya Orchids', 'Dendrobium Orchids', 'Cymbidium Orchids', 'Oncidium Orchids', 'Vanda Orchids',

            // Peonies
            'Pink Peonies', 'White Peonies', 'Red Peonies', 'Purple Peonies', 'Yellow Peonies', 'Coral Peonies', 'Salmon Peonies',
            'Burgundy Peonies', 'Ivory Peonies', 'Mauve Peonies', 'Cream Peonies', 'Apricot Peonies',

            // Sunflowers
            'Yellow Sunflowers', 'Orange Sunflowers', 'Red Sunflowers', 'Burgundy Sunflowers', 'Cream Sunflowers', 'Dwarf Sunflowers',
            'Giant Sunflowers', 'Teddy Bear Sunflowers', 'Autumn Beauty Sunflowers', 'Lemon Queen Sunflowers',

            // Carnations
            'Pink Carnations', 'Red Carnations', 'White Carnations', 'Yellow Carnations', 'Purple Carnations', 'Orange Carnations',
            'Peach Carnations', 'Coral Carnations', 'Burgundy Carnations', 'Ivory Carnations', 'Salmon Carnations',

            // Hydrangeas
            'Blue Hydrangeas', 'Pink Hydrangeas', 'White Hydrangeas', 'Purple Hydrangeas', 'Green Hydrangeas', 'Red Hydrangeas',
            'Lacecap Hydrangeas', 'Mophead Hydrangeas', 'Panicle Hydrangeas', 'Smooth Hydrangeas',

            // Chrysanthemums
            'Yellow Chrysanthemums', 'White Chrysanthemums', 'Pink Chrysanthemums', 'Purple Chrysanthemums', 'Red Chrysanthemums',
            'Orange Chrysanthemums', 'Coral Chrysanthemums', 'Burgundy Chrysanthemums', 'Ivory Chrysanthemums',

            // Alstroemerias
            'Pink Alstroemerias', 'Yellow Alstroemerias', 'White Alstroemerias', 'Purple Alstroemerias', 'Orange Alstroemerias',
            'Red Alstroemerias', 'Coral Alstroemerias', 'Salmon Alstroemerias', 'Burgundy Alstroemerias',

            // Irises
            'Purple Irises', 'Blue Irises', 'White Irises', 'Yellow Irises', 'Pink Irises', 'Orange Irises', 'Red Irises',
            'Bearded Irises', 'Siberian Irises', 'Japanese Irises', 'Dutch Irises', 'Dwarf Irises',

            // Gardenias
            'White Gardenias', 'Cream Gardenias', 'Ivory Gardenias', 'Yellow Gardenias', 'Pink Gardenias',

            // Anemones
            'White Anemones', 'Pink Anemones', 'Purple Anemones', 'Blue Anemones', 'Red Anemones', 'Yellow Anemones',
            'Coral Anemones', 'Salmon Anemones', 'Burgundy Anemones', 'Ivory Anemones',

            // Camellias
            'Pink Camellias', 'White Camellias', 'Red Camellias', 'Yellow Camellias', 'Purple Camellias', 'Coral Camellias',
            'Salmon Camellias', 'Burgundy Camellias', 'Ivory Camellias', 'Mauve Camellias',

            // Freesias
            'White Freesias', 'Yellow Freesias', 'Pink Freesias', 'Purple Freesias', 'Orange Freesias', 'Red Freesias',
            'Coral Freesias', 'Salmon Freesias', 'Burgundy Freesias', 'Ivory Freesias',

            // Gladiolus
            'Red Gladiolus', 'Pink Gladiolus', 'White Gladiolus', 'Yellow Gladiolus', 'Purple Gladiolus', 'Orange Gladiolus',
            'Coral Gladiolus', 'Salmon Gladiolus', 'Burgundy Gladiolus', 'Ivory Gladiolus',

            // Heather
            'Purple Heather', 'Pink Heather', 'White Heather', 'Red Heather', 'Yellow Heather', 'Orange Heather',
            'Coral Heather', 'Salmon Heather', 'Burgundy Heather', 'Ivory Heather',

            // Lavender
            'Purple Lavender', 'Pink Lavender', 'White Lavender', 'Blue Lavender', 'Violet Lavender', 'Lilac Lavender',
            'English Lavender', 'French Lavender', 'Spanish Lavender', 'Hidcote Lavender',

            // Magnolias
            'White Magnolias', 'Pink Magnolias', 'Purple Magnolias', 'Yellow Magnolias', 'Coral Magnolias',
            'Salmon Magnolias', 'Burgundy Magnolias', 'Ivory Magnolias', 'Mauve Magnolias', 'Cream Magnolias',

            // Marigolds
            'Orange Marigolds', 'Yellow Marigolds', 'Red Marigolds', 'White Marigolds', 'Pink Marigolds', 'Purple Marigolds',
            'Coral Marigolds', 'Salmon Marigolds', 'Burgundy Marigolds', 'Ivory Marigolds',

            // Pansies
            'Purple Pansies', 'Yellow Pansies', 'White Pansies', 'Pink Pansies', 'Orange Pansies', 'Red Pansies',
            'Blue Pansies', 'Coral Pansies', 'Salmon Pansies', 'Burgundy Pansies',

            // Petunias
            'Purple Petunias', 'Pink Petunias', 'White Petunias', 'Yellow Petunias', 'Orange Petunias', 'Red Petunias',
            'Blue Petunias', 'Coral Petunias', 'Salmon Petunias', 'Burgundy Petunias',

            // Ranunculus
            'Pink Ranunculus', 'White Ranunculus', 'Yellow Ranunculus', 'Purple Ranunculus', 'Orange Ranunculus', 'Red Ranunculus',
            'Coral Ranunculus', 'Salmon Ranunculus', 'Burgundy Ranunculus', 'Ivory Ranunculus',

            // Snapdragons
            'Pink Snapdragons', 'White Snapdragons', 'Yellow Snapdragons', 'Purple Snapdragons', 'Orange Snapdragons', 'Red Snapdragons',
            'Coral Snapdragons', 'Salmon Snapdragons', 'Burgundy Snapdragons', 'Ivory Snapdragons',

            // Sweet Peas
            'Pink Sweet Peas', 'White Sweet Peas', 'Purple Sweet Peas', 'Yellow Sweet Peas', 'Orange Sweet Peas', 'Red Sweet Peas',
            'Coral Sweet Peas', 'Salmon Sweet Peas', 'Burgundy Sweet Peas', 'Ivory Sweet Peas',

            // Violets
            'Purple Violets', 'White Violets', 'Pink Violets', 'Yellow Violets', 'Blue Violets', 'Red Violets',
            'Coral Violets', 'Salmon Violets', 'Burgundy Violets', 'Ivory Violets',

            // Zinnias
            'Pink Zinnias', 'White Zinnias', 'Yellow Zinnias', 'Purple Zinnias', 'Orange Zinnias', 'Red Zinnias',
            'Coral Zinnias', 'Salmon Zinnias', 'Burgundy Zinnias', 'Ivory Zinnias',

            // Amaryllis
            'Red Amaryllis', 'White Amaryllis', 'Pink Amaryllis', 'Yellow Amaryllis', 'Orange Amaryllis', 'Purple Amaryllis',
            'Coral Amaryllis', 'Salmon Amaryllis', 'Burgundy Amaryllis', 'Ivory Amaryllis',

            // Begonias
            'Pink Begonias', 'White Begonias', 'Yellow Begonias', 'Orange Begonias', 'Red Begonias', 'Purple Begonias',
            'Coral Begonias', 'Salmon Begonias', 'Burgundy Begonias', 'Ivory Begonias',

            // Calla Lilies
            'White Calla Lilies', 'Yellow Calla Lilies', 'Pink Calla Lilies', 'Purple Calla Lilies', 'Orange Calla Lilies',
            'Red Calla Lilies', 'Coral Calla Lilies', 'Salmon Calla Lilies', 'Burgundy Calla Lilies', 'Ivory Calla Lilies',

            // Cosmos
            'Pink Cosmos', 'White Cosmos', 'Yellow Cosmos', 'Purple Cosmos', 'Orange Cosmos', 'Red Cosmos',
            'Coral Cosmos', 'Salmon Cosmos', 'Burgundy Cosmos', 'Ivory Cosmos',

            // Delphiniums
            'Blue Delphiniums', 'Purple Delphiniums', 'White Delphiniums', 'Pink Delphiniums', 'Yellow Delphiniums',
            'Red Delphiniums', 'Coral Delphiniums', 'Salmon Delphiniums', 'Burgundy Delphiniums', 'Ivory Delphiniums',

            // Forget-Me-Nots
            'Blue Forget-Me-Nots', 'Pink Forget-Me-Nots', 'White Forget-Me-Nots', 'Purple Forget-Me-Nots', 'Yellow Forget-Me-Nots',
            'Red Forget-Me-Nots', 'Coral Forget-Me-Nots', 'Salmon Forget-Me-Nots', 'Burgundy Forget-Me-Nots', 'Ivory Forget-Me-Nots',

            // Foxgloves
            'Purple Foxgloves', 'Pink Foxgloves', 'White Foxgloves', 'Yellow Foxgloves', 'Orange Foxgloves', 'Red Foxgloves',
            'Coral Foxgloves', 'Salmon Foxgloves', 'Burgundy Foxgloves', 'Ivory Foxgloves',

            // Gerberas
            'Pink Gerberas', 'White Gerberas', 'Yellow Gerberas', 'Orange Gerberas', 'Red Gerberas', 'Purple Gerberas',
            'Coral Gerberas', 'Salmon Gerberas', 'Burgundy Gerberas', 'Ivory Gerberas',

            // Hibiscus
            'Red Hibiscus', 'Pink Hibiscus', 'White Hibiscus', 'Yellow Hibiscus', 'Orange Hibiscus', 'Purple Hibiscus',
            'Coral Hibiscus', 'Salmon Hibiscus', 'Burgundy Hibiscus', 'Ivory Hibiscus',

            // Impatiens
            'Pink Impatiens', 'White Impatiens', 'Yellow Impatiens', 'Orange Impatiens', 'Red Impatiens', 'Purple Impatiens',
            'Coral Impatiens', 'Salmon Impatiens', 'Burgundy Impatiens', 'Ivory Impatiens',

            // Jasmine
            'White Jasmine', 'Yellow Jasmine', 'Pink Jasmine', 'Purple Jasmine', 'Orange Jasmine', 'Red Jasmine',
            'Coral Jasmine', 'Salmon Jasmine', 'Burgundy Jasmine', 'Ivory Jasmine',

            // Kalanchoe
            'Pink Kalanchoe', 'White Kalanchoe', 'Yellow Kalanchoe', 'Orange Kalanchoe', 'Red Kalanchoe', 'Purple Kalanchoe',
            'Coral Kalanchoe', 'Salmon Kalanchoe', 'Burgundy Kalanchoe', 'Ivory Kalanchoe',

            // Larkspur
            'Purple Larkspur', 'Pink Larkspur', 'White Larkspur', 'Yellow Larkspur', 'Orange Larkspur', 'Red Larkspur',
            'Coral Larkspur', 'Salmon Larkspur', 'Burgundy Larkspur', 'Ivory Larkspur',

            // Morning Glory
            'Purple Morning Glory', 'Pink Morning Glory', 'White Morning Glory', 'Blue Morning Glory', 'Red Morning Glory',
            'Coral Morning Glory', 'Salmon Morning Glory', 'Burgundy Morning Glory', 'Ivory Morning Glory', 'Yellow Morning Glory',

            // Nasturtium
            'Orange Nasturtium', 'Yellow Nasturtium', 'Red Nasturtium', 'Pink Nasturtium', 'White Nasturtium', 'Purple Nasturtium',
            'Coral Nasturtium', 'Salmon Nasturtium', 'Burgundy Nasturtium', 'Ivory Nasturtium',

            // Oleander
            'Pink Oleander', 'White Oleander', 'Yellow Oleander', 'Orange Oleander', 'Red Oleander', 'Purple Oleander',
            'Coral Oleander', 'Salmon Oleander', 'Burgundy Oleander', 'Ivory Oleander',

            // Primroses
            'Pink Primroses', 'White Primroses', 'Yellow Primroses', 'Purple Primroses', 'Orange Primroses', 'Red Primroses',
            'Coral Primroses', 'Salmon Primroses', 'Burgundy Primroses', 'Ivory Primroses',

            // Queen Anne's Lace
            'White Queen Anne\'s Lace', 'Pink Queen Anne\'s Lace', 'Purple Queen Anne\'s Lace', 'Yellow Queen Anne\'s Lace',
            'Orange Queen Anne\'s Lace', 'Red Queen Anne\'s Lace', 'Coral Queen Anne\'s Lace', 'Salmon Queen Anne\'s Lace',
            'Burgundy Queen Anne\'s Lace', 'Ivory Queen Anne\'s Lace',

            // Rhododendrons
            'Pink Rhododendrons', 'White Rhododendrons', 'Purple Rhododendrons', 'Yellow Rhododendrons', 'Orange Rhododendrons',
            'Red Rhododendrons', 'Coral Rhododendrons', 'Salmon Rhododendrons', 'Burgundy Rhododendrons', 'Ivory Rhododendrons',

            // Scabiosa
            'Purple Scabiosa', 'Pink Scabiosa', 'White Scabiosa', 'Yellow Scabiosa', 'Orange Scabiosa', 'Red Scabiosa',
            'Coral Scabiosa', 'Salmon Scabiosa', 'Burgundy Scabiosa', 'Ivory Scabiosa',

            // Tansy
            'Yellow Tansy', 'White Tansy', 'Pink Tansy', 'Purple Tansy', 'Orange Tansy', 'Red Tansy',
            'Coral Tansy', 'Salmon Tansy', 'Burgundy Tansy', 'Ivory Tansy',

            // Verbena
            'Purple Verbena', 'Pink Verbena', 'White Verbena', 'Yellow Verbena', 'Orange Verbena', 'Red Verbena',
            'Coral Verbena', 'Salmon Verbena', 'Burgundy Verbena', 'Ivory Verbena',

            // Wisteria
            'Purple Wisteria', 'Pink Wisteria', 'White Wisteria', 'Blue Wisteria', 'Lavender Wisteria', 'Violet Wisteria',
            'Coral Wisteria', 'Salmon Wisteria', 'Burgundy Wisteria', 'Ivory Wisteria',

            // Xeranthemum
            'Purple Xeranthemum', 'Pink Xeranthemum', 'White Xeranthemum', 'Yellow Xeranthemum', 'Orange Xeranthemum',
            'Red Xeranthemum', 'Coral Xeranthemum', 'Salmon Xeranthemum', 'Burgundy Xeranthemum', 'Ivory Xeranthemum',

            // Yarrow
            'White Yarrow', 'Yellow Yarrow', 'Pink Yarrow', 'Purple Yarrow', 'Orange Yarrow', 'Red Yarrow',
            'Coral Yarrow', 'Salmon Yarrow', 'Burgundy Yarrow', 'Ivory Yarrow',

            // Aster
            'Purple Aster', 'Pink Aster', 'White Aster', 'Yellow Aster', 'Orange Aster', 'Red Aster',
            'Coral Aster', 'Salmon Aster', 'Burgundy Aster', 'Ivory Aster',

            // Bouvardia
            'Pink Bouvardia', 'White Bouvardia', 'Yellow Bouvardia', 'Orange Bouvardia', 'Red Bouvardia', 'Purple Bouvardia',
            'Coral Bouvardia', 'Salmon Bouvardia', 'Burgundy Bouvardia', 'Ivory Bouvardia',

            // Clematis
            'Purple Clematis', 'Pink Clematis', 'White Clematis', 'Yellow Clematis', 'Orange Clematis', 'Red Clematis',
            'Coral Clematis', 'Salmon Clematis', 'Burgundy Clematis', 'Ivory Clematis',

            // Dahlia
            'Pink Dahlia', 'White Dahlia', 'Yellow Dahlia', 'Orange Dahlia', 'Red Dahlia', 'Purple Dahlia',
            'Coral Dahlia', 'Salmon Dahlia', 'Burgundy Dahlia', 'Ivory Dahlia',

            // Echinacea
            'Purple Echinacea', 'Pink Echinacea', 'White Echinacea', 'Yellow Echinacea', 'Orange Echinacea', 'Red Echinacea',
            'Coral Echinacea', 'Salmon Echinacea', 'Burgundy Echinacea', 'Ivory Echinacea',

            // Flannel Flower
            'White Flannel Flower', 'Pink Flannel Flower', 'Yellow Flannel Flower', 'Orange Flannel Flower', 'Red Flannel Flower',
            'Purple Flannel Flower', 'Coral Flannel Flower', 'Salmon Flannel Flower', 'Burgundy Flannel Flower', 'Ivory Flannel Flower',

            // Gaillardia
            'Yellow Gaillardia', 'Orange Gaillardia', 'Red Gaillardia', 'Pink Gaillardia', 'White Gaillardia', 'Purple Gaillardia',
            'Coral Gaillardia', 'Salmon Gaillardia', 'Burgundy Gaillardia', 'Ivory Gaillardia',

            // Heliconia
            'Red Heliconia', 'Orange Heliconia', 'Yellow Heliconia', 'Pink Heliconia', 'White Heliconia', 'Purple Heliconia',
            'Coral Heliconia', 'Salmon Heliconia', 'Burgundy Heliconia', 'Ivory Heliconia',

            // Ixora
            'Red Ixora', 'Pink Ixora', 'White Ixora', 'Yellow Ixora', 'Orange Ixora', 'Purple Ixora',
            'Coral Ixora', 'Salmon Ixora', 'Burgundy Ixora', 'Ivory Ixora',

            // Jacobinia
            'Pink Jacobinia', 'White Jacobinia', 'Yellow Jacobinia', 'Orange Jacobinia', 'Red Jacobinia', 'Purple Jacobinia',
            'Coral Jacobinia', 'Salmon Jacobinia', 'Burgundy Jacobinia', 'Ivory Jacobinia',

            // Kangaroo Paw
            'Red Kangaroo Paw', 'Yellow Kangaroo Paw', 'Orange Kangaroo Paw', 'Pink Kangaroo Paw', 'White Kangaroo Paw',
            'Purple Kangaroo Paw', 'Coral Kangaroo Paw', 'Salmon Kangaroo Paw', 'Burgundy Kangaroo Paw', 'Ivory Kangaroo Paw',

            // Liatris
            'Purple Liatris', 'Pink Liatris', 'White Liatris', 'Yellow Liatris', 'Orange Liatris', 'Red Liatris',
            'Coral Liatris', 'Salmon Liatris', 'Burgundy Liatris', 'Ivory Liatris',

            // Monarda
            'Red Monarda', 'Pink Monarda', 'White Monarda', 'Yellow Monarda', 'Orange Monarda', 'Purple Monarda',
            'Coral Monarda', 'Salmon Monarda', 'Burgundy Monarda', 'Ivory Monarda',

            // Nemesia
            'Pink Nemesia', 'White Nemesia', 'Yellow Nemesia', 'Orange Nemesia', 'Red Nemesia', 'Purple Nemesia',
            'Coral Nemesia', 'Salmon Nemesia', 'Burgundy Nemesia', 'Ivory Nemesia',

            // Osteospermum
            'White Osteospermum', 'Pink Osteospermum', 'Yellow Osteospermum', 'Orange Osteospermum', 'Red Osteospermum',
            'Purple Osteospermum', 'Coral Osteospermum', 'Salmon Osteospermum', 'Burgundy Osteospermum', 'Ivory Osteospermum',

            // Phlox
            'Pink Phlox', 'White Phlox', 'Purple Phlox', 'Yellow Phlox', 'Orange Phlox', 'Red Phlox',
            'Coral Phlox', 'Salmon Phlox', 'Burgundy Phlox', 'Ivory Phlox',

            // Quince Blossom
            'Pink Quince Blossom', 'White Quince Blossom', 'Yellow Quince Blossom', 'Orange Quince Blossom', 'Red Quince Blossom',
            'Purple Quince Blossom', 'Coral Quince Blossom', 'Salmon Quince Blossom', 'Burgundy Quince Blossom', 'Ivory Quince Blossom',

            // Russelia
            'Red Russelia', 'Pink Russelia', 'White Russelia', 'Yellow Russelia', 'Orange Russelia', 'Purple Russelia',
            'Coral Russelia', 'Salmon Russelia', 'Burgundy Russelia', 'Ivory Russelia',

            // Salvia
            'Purple Salvia', 'Pink Salvia', 'White Salvia', 'Yellow Salvia', 'Orange Salvia', 'Red Salvia',
            'Coral Salvia', 'Salmon Salvia', 'Burgundy Salvia', 'Ivory Salvia',

            // Tuberose
            'White Tuberose', 'Pink Tuberose', 'Yellow Tuberose', 'Orange Tuberose', 'Red Tuberose', 'Purple Tuberose',
            'Coral Tuberose', 'Salmon Tuberose', 'Burgundy Tuberose', 'Ivory Tuberose',

            // Ursinia
            'Yellow Ursinia', 'Orange Ursinia', 'Red Ursinia', 'Pink Ursinia', 'White Ursinia', 'Purple Ursinia',
            'Coral Ursinia', 'Salmon Ursinia', 'Burgundy Ursinia', 'Ivory Ursinia',

            // Viola
            'Purple Viola', 'Pink Viola', 'White Viola', 'Yellow Viola', 'Orange Viola', 'Red Viola',
            'Coral Viola', 'Salmon Viola', 'Burgundy Viola', 'Ivory Viola',

            // Waxflower
            'Pink Waxflower', 'White Waxflower', 'Purple Waxflower', 'Yellow Waxflower', 'Orange Waxflower', 'Red Waxflower',
            'Coral Waxflower', 'Salmon Waxflower', 'Burgundy Waxflower', 'Ivory Waxflower',

            // Xylobium Orchid
            'White Xylobium Orchid', 'Pink Xylobium Orchid', 'Yellow Xylobium Orchid', 'Orange Xylobium Orchid',
            'Red Xylobium Orchid', 'Purple Xylobium Orchid', 'Coral Xylobium Orchid', 'Salmon Xylobium Orchid',
            'Burgundy Xylobium Orchid', 'Ivory Xylobium Orchid',

            // Yellow Archangel
            'Yellow Archangel', 'White Yellow Archangel', 'Pink Yellow Archangel', 'Orange Yellow Archangel',
            'Red Yellow Archangel', 'Purple Yellow Archangel', 'Coral Yellow Archangel', 'Salmon Yellow Archangel',
            'Burgundy Yellow Archangel', 'Ivory Yellow Archangel',

            // Zephyranthes
            'White Zephyranthes', 'Pink Zephyranthes', 'Yellow Zephyranthes', 'Orange Zephyranthes', 'Red Zephyranthes',
            'Purple Zephyranthes', 'Coral Zephyranthes', 'Salmon Zephyranthes', 'Burgundy Zephyranthes', 'Ivory Zephyranthes',

            // Balloon Flower
            'Blue Balloon Flower', 'Pink Balloon Flower', 'White Balloon Flower', 'Purple Balloon Flower', 'Yellow Balloon Flower',
            'Orange Balloon Flower', 'Red Balloon Flower', 'Coral Balloon Flower', 'Salmon Balloon Flower', 'Burgundy Balloon Flower',

            // Bottlebrush
            'Red Bottlebrush', 'Pink Bottlebrush', 'White Bottlebrush', 'Yellow Bottlebrush', 'Orange Bottlebrush',
            'Purple Bottlebrush', 'Coral Bottlebrush', 'Salmon Bottlebrush', 'Burgundy Bottlebrush', 'Ivory Bottlebrush',

            // Calendula
            'Orange Calendula', 'Yellow Calendula', 'Red Calendula', 'Pink Calendula', 'White Calendula', 'Purple Calendula',
            'Coral Calendula', 'Salmon Calendula', 'Burgundy Calendula', 'Ivory Calendula',

            // Dutch Iris
            'Purple Dutch Iris', 'Blue Dutch Iris', 'White Dutch Iris', 'Yellow Dutch Iris', 'Orange Dutch Iris',
            'Red Dutch Iris', 'Coral Dutch Iris', 'Salmon Dutch Iris', 'Burgundy Dutch Iris', 'Ivory Dutch Iris',

            // Eryngium
            'Blue Eryngium', 'Purple Eryngium', 'White Eryngium', 'Pink Eryngium', 'Yellow Eryngium', 'Orange Eryngium',
            'Red Eryngium', 'Coral Eryngium', 'Salmon Eryngium', 'Burgundy Eryngium',

            // Flax
            'Blue Flax', 'Purple Flax', 'White Flax', 'Pink Flax', 'Yellow Flax', 'Orange Flax',
            'Red Flax', 'Coral Flax', 'Salmon Flax', 'Burgundy Flax',

            // Grevillea
            'Red Grevillea', 'Pink Grevillea', 'White Grevillea', 'Yellow Grevillea', 'Orange Grevillea', 'Purple Grevillea',
            'Coral Grevillea', 'Salmon Grevillea', 'Burgundy Grevillea', 'Ivory Grevillea',

            // Honesty Flower
            'Purple Honesty Flower', 'Pink Honesty Flower', 'White Honesty Flower', 'Yellow Honesty Flower', 'Orange Honesty Flower',
            'Red Honesty Flower', 'Coral Honesty Flower', 'Salmon Honesty Flower', 'Burgundy Honesty Flower', 'Ivory Honesty Flower',

            // Indian Paintbrush
            'Red Indian Paintbrush', 'Pink Indian Paintbrush', 'White Indian Paintbrush', 'Yellow Indian Paintbrush',
            'Orange Indian Paintbrush', 'Purple Indian Paintbrush', 'Coral Indian Paintbrush', 'Salmon Indian Paintbrush',
            'Burgundy Indian Paintbrush', 'Ivory Indian Paintbrush',

            // Japanese Anemone
            'Pink Japanese Anemone', 'White Japanese Anemone', 'Purple Japanese Anemone', 'Yellow Japanese Anemone',
            'Orange Japanese Anemone', 'Red Japanese Anemone', 'Coral Japanese Anemone', 'Salmon Japanese Anemone',
            'Burgundy Japanese Anemone', 'Ivory Japanese Anemone',

            // Kniphofia
            'Red Kniphofia', 'Orange Kniphofia', 'Yellow Kniphofia', 'Pink Kniphofia', 'White Kniphofia', 'Purple Kniphofia',
            'Coral Kniphofia', 'Salmon Kniphofia', 'Burgundy Kniphofia', 'Ivory Kniphofia',

            // Leucadendron
            'Yellow Leucadendron', 'Orange Leucadendron', 'Red Leucadendron', 'Pink Leucadendron', 'White Leucadendron',
            'Purple Leucadendron', 'Coral Leucadendron', 'Salmon Leucadendron', 'Burgundy Leucadendron', 'Ivory Leucadendron',

            // Mimosa
            'Yellow Mimosa', 'Pink Mimosa', 'White Mimosa', 'Orange Mimosa', 'Red Mimosa', 'Purple Mimosa',
            'Coral Mimosa', 'Salmon Mimosa', 'Burgundy Mimosa', 'Ivory Mimosa',

            // Nerine
            'Pink Nerine', 'White Nerine', 'Red Nerine', 'Yellow Nerine', 'Orange Nerine', 'Purple Nerine',
            'Coral Nerine', 'Salmon Nerine', 'Burgundy Nerine', 'Ivory Nerine',

            // Oxalis
            'Pink Oxalis', 'White Oxalis', 'Yellow Oxalis', 'Orange Oxalis', 'Red Oxalis', 'Purple Oxalis',
            'Coral Oxalis', 'Salmon Oxalis', 'Burgundy Oxalis', 'Ivory Oxalis',

            // Pentas
            'Pink Pentas', 'White Pentas', 'Red Pentas', 'Purple Pentas', 'Yellow Pentas', 'Orange Pentas',
            'Coral Pentas', 'Salmon Pentas', 'Burgundy Pentas', 'Ivory Pentas',

            // Quillaja
            'White Quillaja', 'Pink Quillaja', 'Yellow Quillaja', 'Orange Quillaja', 'Red Quillaja', 'Purple Quillaja',
            'Coral Quillaja', 'Salmon Quillaja', 'Burgundy Quillaja', 'Ivory Quillaja',

            // Rafflesia
            'Red Rafflesia', 'Pink Rafflesia', 'White Rafflesia', 'Yellow Rafflesia', 'Orange Rafflesia', 'Purple Rafflesia',
            'Coral Rafflesia', 'Salmon Rafflesia', 'Burgundy Rafflesia', 'Ivory Rafflesia',

            // Sedum
            'Pink Sedum', 'White Sedum', 'Yellow Sedum', 'Orange Sedum', 'Red Sedum', 'Purple Sedum',
            'Coral Sedum', 'Salmon Sedum', 'Burgundy Sedum', 'Ivory Sedum',

            // Thunbergia
            'Orange Thunbergia', 'Yellow Thunbergia', 'Red Thunbergia', 'Pink Thunbergia', 'White Thunbergia', 'Purple Thunbergia',
            'Coral Thunbergia', 'Salmon Thunbergia', 'Burgundy Thunbergia', 'Ivory Thunbergia',

            // Urn Plant
            'Pink Urn Plant', 'White Urn Plant', 'Yellow Urn Plant', 'Orange Urn Plant', 'Red Urn Plant', 'Purple Urn Plant',
            'Coral Urn Plant', 'Salmon Urn Plant', 'Burgundy Urn Plant', 'Ivory Urn Plant'
        ];

        foreach ($categories as $index => $name) {

            Category::create([
                'name' => $name,
            ]);
        }
    }
}
