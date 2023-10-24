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
                'id' => 1,
                'nom' => 'Tom Cruise',
                'date_naissance' => '1962-07-03',
                'lien_photo' => 'https://images.mubicdn.net/images/cast_member/2184/cache-2992-1547409411/image-w856.jpg',
            ],
            [
                'id' => 2,
                'nom' => 'Christopher McQuarrie',
                'date_naissance' => '1968-10-25',
                'lien_photo' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/d/de/Christopher_McQuarrie_2022.jpg/220px-Christopher_McQuarrie_2022.jpg',
            ],
            [
                'id' => 3,
                'nom' => 'James Cameron',
                'date_naissance' => '1954-08-16',
                'lien_photo' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/f/fe/James_Cameron_by_Gage_Skidmore.jpg/290px-James_Cameron_by_Gage_Skidmore.jpg',
            ],
            [
                'id' => 4,
                'nom' => 'Sam Worthington',
                'date_naissance' => '1976-08-02',
                'lien_photo' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/2/2b/Avatar_The_Way_of_Water_Tokyo_Press_Conference_Sam_Worthington_%2852563252594%29_%28cropped%29.jpg/220px-Avatar_The_Way_of_Water_Tokyo_Press_Conference_Sam_Worthington_%2852563252594%29_%28cropped%29.jpg',
            ],
            [
                'id' => 5,
                'nom' => 'Dennis Dugan',
                'date_naissance' => '1946-11-05',
                'lien_photo' => 'https://t3.gstatic.com/licensed-image?q=tbn:ANd9GcRoLYikryCjcZgftaJpfyDNBL5Tt0V2h1_JZ79YyLOVa23uL0d4gUj8GfnDJP4Ufyph',
            ],
            [
                'id' => 6,
                'nom' => 'Adam Sandler',
                'date_naissance' => '1966-09-09',
                'lien_photo' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/c/c5/Adam_Sandler_2018_%28Lc9jYc07e54%29.jpg/220px-Adam_Sandler_2018_%28Lc9jYc07e54%29.jpg',
            ],
            [
                'id' => 7,
                'nom' => 'Rob Schneider',
                'date_naissance' => '1963-10-31',
                'lien_photo' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/8/80/Rob_Schneider_Photo_Op_GalaxyCon_Raleigh_2019.jpg/220px-Rob_Schneider_Photo_Op_GalaxyCon_Raleigh_2019.jpg',
            ],
            [
                'id' => 8,
                'nom' => 'George Lucas',
                'date_naissance' => '1944-05-14',
                'lien_photo' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/a/a0/George_Lucas_cropped_2009.jpg/290px-George_Lucas_cropped_2009.jpg',
            ],
            [
                'id' => 9,
                'nom' => 'Ewan McGregor',
                'date_naissance' => '1971-03-31',
                'lien_photo' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/f/f6/Ewan_McGregor_%282013_Citro%C3%ABn_advertisement%29.png/220px-Ewan_McGregor_%282013_Citro%C3%ABn_advertisement%29.png',
            ],
            [
                'id' => 10,
                'nom' => 'Gorō Taniguchi',
                'date_naissance' => '1966-10-18',
                'lien_photo' => 'https://www.nautiljon.com/images/people/00/34/taniguchi_goro_3643.webp',
            ],
            [
                'id' => 11,
                'nom' => 'Eiichirō Oda',
                'date_naissance' => '1975-01-01',
                'lien_photo' => 'https://animeland.fr/wp-content/uploads/2016/05/odavatar.jpg',
            ],
            [
                'id' => 12,
                'nom' => 'Mayumi Tanaka',
                'date_naissance' => '1955-01-15',
                'lien_photo' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/2/28/Mayumi_Tanaka_2023.jpg/260px-Mayumi_Tanaka_2023.jpg',
            ],
            [
                'id' => 13,
                'nom' => 'Chris Buck',
                'date_naissance' => '1958-02-24',
                'lien_photo' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/3/33/Frozenfeverdirectors_%28cropped%29.JPG/220px-Frozenfeverdirectors_%28cropped%29.JPG',
            ],
            [
                'id' => 14,
                'nom' => 'Peter Del Vecho',
                'date_naissance' => '1958-04-06',
                'lien_photo' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/e/e9/Frozen_premier_Peter_Del_Vecho.jpg/220px-Frozen_premier_Peter_Del_Vecho.jpg',
            ],
            [
                'id' => 15,
                'nom' => 'Kristen Bell',
                'date_naissance' => '1980-07-18',
                'lien_photo' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/3/3f/Kristen_Bell_Paris_Fashion_Week_Spring_Summer_2020_%28cropped%29.jpg/220px-Kristen_Bell_Paris_Fashion_Week_Spring_Summer_2020_%28cropped%29.jpg',
            ],
            [
                'id' => 16,
                'nom' => 'Cal Brunker',
                'date_naissance' => '1978-11-16',
                'lien_photo' => 'https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcR4Thnr-qo0vSLC1rmIOY2zlI6-55JCmIdZ2_hDvvy6-7zCdHgd',
            ],
            [
                'id' => 17,
                'nom' => 'Toni Stevens',
                'date_naissance' => '1961-05-05',
                'lien_photo' => 'https://static.wikia.nocookie.net/polly-and-the-zhu-zhu-pets/images/f/fe/Toni_Stevens.jpg/revision/latest?cb=20170517010443',
            ],
            [
                'id' => 18,
                'nom' => 'Mckenna Grace',
                'date_naissance' => '2006-06-25',
                'lien_photo' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/d/de/I_Tonya_14_%2836989840836%29_%28cropped%29.jpg/220px-I_Tonya_14_%2836989840836%29_%28cropped%29.jpg',
            ],
            [
                'id' => 19,
                'nom' => 'Frank Darabont',
                'date_naissance' => '1959-01-28',
                'lien_photo' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/1/19/Frank_Darabont_at_the_PaleyFest_2011_-_The_Walking_Dead_panel.jpg/260px-Frank_Darabont_at_the_PaleyFest_2011_-_The_Walking_Dead_panel.jpg',
            ],
            [
                'id' => 20,
                'nom' => 'Tom Hanks',
                'date_naissance' => '1956-07-09',
                'lien_photo' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/e/e7/Tom_Hanks_at_the_Elvis_Premiere_2022.jpg/220px-Tom_Hanks_at_the_Elvis_Premiere_2022.jpg',
            ],
            [
                'id' => 21,
                'nom' => 'Robert Zemeckis',
                'date_naissance' => '1952-05-14',
                'lien_photo' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/d/d7/Robert_Zemeckis_%22The_Walk%22_at_Opening_Ceremony_of_the_28th_Tokyo_International_Film_Festival_%2821835891403%29_%28cropped%29.jpg/220px-Robert_Zemeckis_%22The_Walk%22_at_Opening_Ceremony_of_the_28th_Tokyo_International_Film_Festival_%2821835891403%29_%28cropped%29.jpg',
            ],
            [
                'id' => 22,
                'nom' => 'Wendy Finerman',
                'date_naissance' => '1961-08-02',
                'lien_photo' => 'https://encrypted-tbn1.gstatic.com/images?q=tbn:ANd9GcQ0AumXB9cBCozg_2YXneZq-uhyshPQOw2Xu0TZrxN8OJv8GG9I',
            ],
            [
                'id' => 23,
                'nom' => 'Steven Spielberg',
                'date_naissance' => '1946-12-18',
                'lien_photo' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/4/4d/MKr25402_Steven_Spielberg_%28Berlinale_2023%29.jpg/260px-MKr25402_Steven_Spielberg_%28Berlinale_2023%29.jpg',
            ],
        ]);
            
            
    }
}
