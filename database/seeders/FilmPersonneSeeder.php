<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\facades\DB;

class FilmPersonneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('film_personne')->insert([
            [
                'id' => 5,
                'film_id' => 3,
                'personne_id' => 40,
            ],
            [
                'id' => 6,
                'film_id' => 3,
                'personne_id' => 41,
            ],
            [
                'id' => 7,
                'film_id' => 3,
                'personne_id' => 42,
            ],
            [
                'id' => 8,
                'film_id' => 4,
                'personne_id' => 45,
            ],
            [
                'id' => 9,
                'film_id' => 4,
                'personne_id' => 46,
            ],
            [
                'id' => 30,
                'film_id' => 3,
                'personne_id' => 43,
            ],
            [
                'id' => 31,
                'film_id' => 3,
                'personne_id' => 44,
            ],
            [
                'id' => 32,
                'film_id' => 4,
                'personne_id' => 46,
            ],
            [
                'id' => 33,
                'film_id' => 4,
                'personne_id' => 47,
            ],
            [
                'id' => 34,
                'film_id' => 13,
                'personne_id' => 28,
            ],
            [
                'id' => 35,
                'film_id' => 15,
                'personne_id' => 29,
            ],
            [
                'id' => 36,
                'film_id' => 15,
                'personne_id' => 28,
            ],
            [
                'id' => 37,
                'film_id' => 13,
                'personne_id' => 33,
            ],
            [
                'id' => 38,
                'film_id' => 16,
                'personne_id' => 28,
            ],
            [
                'id' => 39,
                'film_id' => 16,
                'personne_id' => 33,
            ],
            [
                'id' => 40,
                'film_id' => 17,
                'personne_id' => 28,
            ],
            [
                'id' => 41,
                'film_id' => 17,
                'personne_id' => 33,
            ]
        ]);
    }
}
