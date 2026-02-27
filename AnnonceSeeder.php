<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AnnonceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         DB::table('annonces')->insert([
    [
        'titre' => 'Appartement moderne à Maarif',
        'description' => 'Appartement bien ensoleillé proche de toutes commodités.',
        'type' => 'Appartement',
        'ville' => 'Casablanca',
        'superficie' => 85,
        'neuf' => true,
        'prix' => 950000,
        'created_at' => now(),
        'updated_at' => now(),
    ],
    [
        'titre' => 'Villa avec piscine',
        'description' => 'Magnifique villa avec jardin et piscine privée.',
        'type' => 'Villa',
        'ville' => 'Marrakech',
        'superficie' => 350,
        'neuf' => false,
        'prix' => 4200000,
        'created_at' => now(),
        'updated_at' => now(),
    ],
    [
        'titre' => 'Maison traditionnelle',
        'description' => 'Maison spacieuse dans un quartier calme.',
        'type' => 'Maison',
        'ville' => 'Fès',
        'superficie' => 180,
        'neuf' => false,
        'prix' => 1200000,
        'created_at' => now(),
        'updated_at' => now(),
    ],
    [
        'titre' => 'Magasin commercial centre ville',
        'description' => 'Local commercial idéal pour boutique ou café.',
        'type' => 'Magasin',
        'ville' => 'Rabat',
        'superficie' => 60,
        'neuf' => true,
        'prix' => 780000,
        'created_at' => now(),
        'updated_at' => now(),
    ],
    [
        'titre' => 'Terrain agricole titré',
        'description' => 'Terrain agricole avec puits et accès route principale.',
        'type' => 'Terrain',
        'ville' => 'Agadir',
        'superficie' => 5000,
        'neuf' => false,
        'prix' => 1500000,
        'created_at' => now(),
        'updated_at' => now(),
    ],
    [
        'titre' => 'Appartement économique',
        'description' => 'Idéal pour jeune couple, proche tramway.',
        'type' => 'Appartement',
        'ville' => 'Tanger',
        'superficie' => 70,
        'neuf' => true,
        'prix' => 620000,
        'created_at' => now(),
        'updated_at' => now(),
    ],
    [
        'titre' => 'Villa luxueuse vue mer',
        'description' => 'Villa haut standing avec vue panoramique sur mer.',
        'type' => 'Villa',
        'ville' => 'Tétouan',
        'superficie' => 420,
        'neuf' => true,
        'prix' => 6800000,
        'created_at' => now(),
        'updated_at' => now(),
    ],
    [
        'titre' => 'Terrain constructible',
        'description' => 'Terrain pour projet immobilier R+2.',
        'type' => 'Terrain',
        'ville' => 'Oujda',
        'superficie' => 300,
        'neuf' => true,
        'prix' => 450000,
        'created_at' => now(),
        'updated_at' => now(),
    ],
]);
    }
}
