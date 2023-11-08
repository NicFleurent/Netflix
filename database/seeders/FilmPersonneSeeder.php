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
        ]);
    }
}
