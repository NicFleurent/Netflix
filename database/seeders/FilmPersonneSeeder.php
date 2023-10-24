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
                'id' => 1,
                'film_id' => 1,
                'personne_id' => 1,
            ],
            [
                'id' => 2,
                'film_id' => 1,
                'personne_id' => 2,
            ],
            [
                'id' => 3,
                'film_id' => 2,
                'personne_id' => 3,
            ],
            [
                'id' => 4,
                'film_id' => 2,
                'personne_id' => 4,
            ],
            [
                'id' => 5,
                'film_id' => 3,
                'personne_id' => 5,
            ],
            [
                'id' => 6,
                'film_id' => 3,
                'personne_id' => 6,
            ],
            [
                'id' => 7,
                'film_id' => 3,
                'personne_id' => 7,
            ],
            [
                'id' => 8,
                'film_id' => 4,
                'personne_id' => 8,
            ],
            [
                'id' => 9,
                'film_id' => 4,
                'personne_id' => 9,
            ],
            [
                'id' => 10,
                'film_id' => 5,
                'personne_id' => 10,
            ],
            [
                'id' => 11,
                'film_id' => 5,
                'personne_id' => 11,
            ],
            [
                'id' => 12,
                'film_id' => 5,
                'personne_id' => 12,
            ],
            [
                'id' => 13,
                'film_id' => 6,
                'personne_id' => 13,
            ],
            [
                'id' => 14,
                'film_id' => 6,
                'personne_id' => 14,
            ],
            [
                'id' => 15,
                'film_id' => 6,
                'personne_id' => 15,
            ],
            [
                'id' => 17,
                'film_id' => 7,
                'personne_id' => 16,
            ],
            [
                'id' => 18,
                'film_id' => 7,
                'personne_id' => 17,
            ],
            [
                'id' => 19,
                'film_id' => 7,
                'personne_id' => 18,
            ],
            [
                'id' => 20,
                'film_id' =>8,
                'personne_id' => 19,
            ],
            [
                'id' => 21,
                'film_id' => 8,
                'personne_id' => 20,
            ],
            [
                'id' => 22,
                'film_id' => 9,
                'personne_id' => 20,
            ],
            [
                'id' => 23,
                'film_id' => 9,
                'personne_id' => 21,
            ],
            [
                'id' => 24,
                'film_id' => 9,
                'personne_id' => 22,
            ],
            [
                'id' => 25,
                'film_id' => 10,
                'personne_id' => 20,
            ],
            [
                'id' => 26,
                'film_id' => 10,
                'personne_id' => 23,
            ],
        ]);
    }
}
