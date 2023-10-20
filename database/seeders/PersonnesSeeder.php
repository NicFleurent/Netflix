<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\facades\DB;

class PersonnesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('personnes')->insert([
            [
                'nom' => 'Tom Cruise',
                'date_naissance' => '1962-07-03',
                'lien_photo' => 'https://images.mubicdn.net/images/cast_member/2184/cache-2992-1547409411/image-w856.jpg',
            ],
            [
                'nom' => 'Tom Hanks',
                'date_naissance' => '1956-07-09',
                'lien_photo' => 'https://cdn.amomama.com/570b18e2790e13270591301ca087cd6d.jpeg',
            ],
            [
                'nom' => 'Terry Crews',
                'date_naissance' => '1968-07-30',
                'lien_photo' => 'https://th.bing.com/th/id/OIP.eTy77GAM79eEQ5BEzc5IYAHaEK?pid=ImgDet&rs=1',
            ],
            [
                'nom' => 'Scarlett Johansson',
                'date_naissance' => '1984-11-22',
                'lien_photo' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/2/2a/Scarlett_Johansson_by_Gage_Skidmore_2_%28cropped%2C_2%29.jpg/220px-Scarlett_Johansson_by_Gage_Skidmore_2_%28cropped%2C_2%29.jpg',
            ],
            [
                'nom' => 'Leonardo DiCaprio',
                'date_naissance' => '1974-11-11',
                'lien_photo' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/4/46/Leonardo_Dicaprio_Cannes_2019.jpg/220px-Leonardo_Dicaprio_Cannes_2019.jpg',
            ],
            [
                'nom' => 'Adam Sandler',
                'date_naissance' => '1966-09-09',
                'lien_photo' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/c/c5/Adam_Sandler_2018_%28Lc9jYc07e54%29.jpg/220px-Adam_Sandler_2018_%28Lc9jYc07e54%29.jpg',
            ],
            [
                'nom' => 'Robert Downey Jr.',
                'date_naissance' => '1965-04-04',
                'lien_photo' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/9/94/Robert_Downey_Jr_2014_Comic_Con_%28cropped%29.jpg/220px-Robert_Downey_Jr_2014_Comic_Con_%28cropped%29.jpg',
            ],
            [
                'nom' => 'Chris Hemsworth',
                'date_naissance' => '1983-08-11',
                'lien_photo' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/3/32/Chris_Hemsworth_in_2017_by_Gage_Skidmore_%281%29.jpg/220px-Chris_Hemsworth_in_2017_by_Gage_Skidmore_%281%29.jpg',
            ],
            [
                'nom' => 'Christian Bale',
                'date_naissance' => '1974-01-30',
                'lien_photo' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/9/94/MJK_35690_Christian_Bale_%28Vice%2C_Berlinale_2019%29.jpg/220px-MJK_35690_Christian_Bale_%28Vice%2C_Berlinale_2019%29.jpg',
            ],
            [
                'nom' => 'Chris Pratt',
                'date_naissance' => '1979-06-21',
                'lien_photo' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/9/99/Chris_Pratt_2018.jpg/220px-Chris_Pratt_2018.jpg',
            ],
        ]);
            
            
    }
}
