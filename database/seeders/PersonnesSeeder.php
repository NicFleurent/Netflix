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
                'role' => 'Acteur'
            ],
            [
                'id' => 2,
                'nom' => 'Christopher McQuarrie',
                'date_naissance' => '1968-10-25',
                'lien_photo' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/d/de/Christopher_McQuarrie_2022.jpg/220px-Christopher_McQuarrie_2022.jpg',
                'role' => 'Réalisateur'
            ],
            [
                'id' => 3,
                'nom' => 'James Cameron',
                'date_naissance' => '1954-08-16',
                'lien_photo' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/f/fe/James_Cameron_by_Gage_Skidmore.jpg/290px-James_Cameron_by_Gage_Skidmore.jpg',
                'role' => 'Réalisateur'
            ],
            [
                'id' => 4,
                'nom' => 'Sam Worthington',
                'date_naissance' => '1976-08-02',
                'lien_photo' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/2/2b/Avatar_The_Way_of_Water_Tokyo_Press_Conference_Sam_Worthington_%2852563252594%29_%28cropped%29.jpg/220px-Avatar_The_Way_of_Water_Tokyo_Press_Conference_Sam_Worthington_%2852563252594%29_%28cropped%29.jpg',
                'role' => 'Acteur'
            ],
            [
                'id' => 5,
                'nom' => 'Dennis Dugan',
                'date_naissance' => '1946-11-05',
                'lien_photo' => 'https://t3.gstatic.com/licensed-image?q=tbn:ANd9GcRoLYikryCjcZgftaJpfyDNBL5Tt0V2h1_JZ79YyLOVa23uL0d4gUj8GfnDJP4Ufyph',
                'role' => 'Réalisateur'
            ],
            [
                'id' => 6,
                'nom' => 'Adam Sandler',
                'date_naissance' => '1966-09-09',
                'lien_photo' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/c/c5/Adam_Sandler_2018_%28Lc9jYc07e54%29.jpg/220px-Adam_Sandler_2018_%28Lc9jYc07e54%29.jpg',
                'role' => 'Producteur'
            ],
            [
                'id' => 7,
                'nom' => 'Rob Schneider',
                'date_naissance' => '1963-10-31',
                'lien_photo' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/8/80/Rob_Schneider_Photo_Op_GalaxyCon_Raleigh_2019.jpg/220px-Rob_Schneider_Photo_Op_GalaxyCon_Raleigh_2019.jpg',
                'role' => 'Acteur'
            ],
            [
                'id' => 8,
                'nom' => 'George Lucas',
                'date_naissance' => '1944-05-14',
                'lien_photo' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/a/a0/George_Lucas_cropped_2009.jpg/290px-George_Lucas_cropped_2009.jpg',
                'role' => 'Réalisateur'
            ],
            [
                'id' => 9,
                'nom' => 'Ewan McGregor',
                'date_naissance' => '1971-03-31',
                'lien_photo' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/f/f6/Ewan_McGregor_%282013_Citro%C3%ABn_advertisement%29.png/220px-Ewan_McGregor_%282013_Citro%C3%ABn_advertisement%29.png',
                'role' => 'Acteur'
            ],
            [
                'id' => 10,
                'nom' => 'Gorō Taniguchi',
                'date_naissance' => '1966-10-18',
                'lien_photo' => 'https://www.nautiljon.com/images/people/00/34/taniguchi_goro_3643.webp',
                'role' => 'Réalisateur'
            ],
            [
                'id' => 11,
                'nom' => 'Eiichirō Oda',
                'date_naissance' => '1975-01-01',
                'lien_photo' => 'https://animeland.fr/wp-content/uploads/2016/05/odavatar.jpg',
                'role' => 'Producteur'
            ],
            [
                'id' => 12,
                'nom' => 'Mayumi Tanaka',
                'date_naissance' => '1955-01-15',
                'lien_photo' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/2/28/Mayumi_Tanaka_2023.jpg/260px-Mayumi_Tanaka_2023.jpg',
                'role' => 'Doubleuse'
            ],
            [
                'id' => 13,
                'nom' => 'Chris Buck',
                'date_naissance' => '1958-02-24',
                'lien_photo' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/3/33/Frozenfeverdirectors_%28cropped%29.JPG/220px-Frozenfeverdirectors_%28cropped%29.JPG',
                'role' => 'Réalisateur'
            ],
            [
                'id' => 14,
                'nom' => 'Peter Del Vecho',
                'date_naissance' => '1958-04-06',
                'lien_photo' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/e/e9/Frozen_premier_Peter_Del_Vecho.jpg/220px-Frozen_premier_Peter_Del_Vecho.jpg',
                'role' => 'Producteur'
            ],
            [
                'id' => 15,
                'nom' => 'Kristen Bell',
                'date_naissance' => '1980-07-18',
                'lien_photo' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/3/3f/Kristen_Bell_Paris_Fashion_Week_Spring_Summer_2020_%28cropped%29.jpg/220px-Kristen_Bell_Paris_Fashion_Week_Spring_Summer_2020_%28cropped%29.jpg',
                'role' => 'Actrice'
            ],
            [
                'id' => 16,
                'nom' => 'Cal Brunker',
                'date_naissance' => '1978-11-16',
                'lien_photo' => 'https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcR4Thnr-qo0vSLC1rmIOY2zlI6-55JCmIdZ2_hDvvy6-7zCdHgd',
                'role' => 'Réalisateur'
            ],
            [
                'id' => 17,
                'nom' => 'Toni Stevens',
                'date_naissance' => '1961-05-05',
                'lien_photo' => 'https://static.wikia.nocookie.net/polly-and-the-zhu-zhu-pets/images/f/fe/Toni_Stevens.jpg/revision/latest?cb=20170517010443',
                'role' => 'Producteur'
            ],
            [
                'id' => 18,
                'nom' => 'Mckenna Grace',
                'date_naissance' => '2006-06-25',
                'lien_photo' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/d/de/I_Tonya_14_%2836989840836%29_%28cropped%29.jpg/220px-I_Tonya_14_%2836989840836%29_%28cropped%29.jpg',
                'role' => 'Actrice'
            ],
            [
                'id' => 19,
                'nom' => 'Frank Darabont',
                'date_naissance' => '1959-01-28',
                'lien_photo' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/1/19/Frank_Darabont_at_the_PaleyFest_2011_-_The_Walking_Dead_panel.jpg/260px-Frank_Darabont_at_the_PaleyFest_2011_-_The_Walking_Dead_panel.jpg',
                'role' => 'Réalisateur'
            ],
            [
                'id' => 20,
                'nom' => 'Tom Hanks',
                'date_naissance' => '1956-07-09',
                'lien_photo' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/e/e7/Tom_Hanks_at_the_Elvis_Premiere_2022.jpg/220px-Tom_Hanks_at_the_Elvis_Premiere_2022.jpg',
                'role' => 'Acteur'
            ],
            [
                'id' => 21,
                'nom' => 'Robert Zemeckis',
                'date_naissance' => '1952-05-14',
                'lien_photo' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/d/d7/Robert_Zemeckis_%22The_Walk%22_at_Opening_Ceremony_of_the_28th_Tokyo_International_Film_Festival_%2821835891403%29_%28cropped%29.jpg/220px-Robert_Zemeckis_%22The_Walk%22_at_Opening_Ceremony_of_the_28th_Tokyo_International_Film_Festival_%2821835891403%29_%28cropped%29.jpg',
                'role' => 'Réalisateur'
            ],
            [
                'id' => 22,
                'nom' => 'Wendy Finerman',
                'date_naissance' => '1961-08-02',
                'lien_photo' => 'https://encrypted-tbn1.gstatic.com/images?q=tbn:ANd9GcQ0AumXB9cBCozg_2YXneZq-uhyshPQOw2Xu0TZrxN8OJv8GG9I',
                'role' => 'Producteur'
            ],
            [
                'id' => 23,
                'nom' => 'Steven Spielberg',
                'date_naissance' => '1946-12-18',
                'lien_photo' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/4/4d/MKr25402_Steven_Spielberg_%28Berlinale_2023%29.jpg/260px-MKr25402_Steven_Spielberg_%28Berlinale_2023%29.jpg',
                'role' => 'Réalisateur'
            ],
            [
                'id' => 24,
                'nom' => 'Akira Matsushima',
                'date_naissance' => '1976-11-08',
                'lien_photo' => 'https://www.freeboard.co.jp/wp-content/uploads/2019/12/MatsushimaAkira_2011_Artist-rotated-e1578131871401.jpg',
                'role' => 'Réalisateur'
            ],
            [
                'id' => 25,
                'nom' => 'Hikaru Kondo',
                'date_naissance' => '1969-12-02',
                'lien_photo' => 'https://cdn.myanimelist.net/images/voiceactors/3/21563.jpg',
                'role' => 'Producteur'
            ],
            [
                'id' => 26,
                'nom' => 'Natsuki Hanae',
                'date_naissance' => '1991-06-26',
                'lien_photo' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/c/ce/Natsuki_Hanae_%E8%8A%B1%E6%B1%9F%E5%A4%8F%E6%A8%B9_2020.jpg/260px-Natsuki_Hanae_%E8%8A%B1%E6%B1%9F%E5%A4%8F%E6%A8%B9_2020.jpg',
                'role' => 'Doubleur'
            ],
            [
                'id' => 27,
                'nom' => 'Logan Lerman',
                'date_naissance' => '1992-01-19',
                'lien_photo' => 'https://pisco.meaww.com/138e7544-9186-4423-a2b9-0695a8e3cba7.jpg',
                'role' => 'Acteur'
            ],
            [
                'id' => 28,
                'nom' => 'Emma Watson',
                'date_naissance' => '1990-04-15',
                'lien_photo' => 'https://4.bp.blogspot.com/-R6uIXcosewA/Uzf0cDaS8yI/AAAAAAAAUWQ/HOiv3NdG64w/s3300/Emma+Watson+photo.filmcelebritiesactresses.blogspot-517.jpg',
                'role' => 'Actrice'
            ],
            [
                'id' => 29,
                'nom' => 'Ezra Miller',
                'date_naissance' => '1992-09-30',
                'lien_photo' => 'https://i.pinimg.com/originals/39/64/37/396437a6d652eb9a70aa0b9120ae210b.jpg',
                'role' => 'Acteur'
            ],
            [
                'id' => 30,
                'nom' => 'Stephen Chbosky',
                'date_naissance' => '1970-01-25',
                'lien_photo' => 'https://i.dailymail.co.uk/1s/2019/10/25/16/20186398-7608881-image-a-9_1572016965775.jpg',
                'role' => 'Réalisateur'
            ],
            [
                'id' => 31,
                'nom' => 'John Malkovich',
                'date_naissance' => '1953-12-09',
                'lien_photo' => 'https://www.ecranlarge.com/uploads/image/000/979/j3kjurh51bolb4wnqx4egabepv7-168.jpg',
                'role' => 'Producteur'
            ],
            [
                'id' => 32,
                'nom' => 'Daniel Radcliffe' ,                
                'date_naissance' => '1989-07-23',
                'lien_photo' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/1/12/DanielRadcliffe.jpg/220px-DanielRadcliffe.jpg',
                'role' => 'Acteur'
             ],
             [
                'id' => 33 ,
                'nom' => 'Rupert Brint',
                'date_naissance' => '1988-08-24',
                'lien_photo' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/9/93/RupertGrint2018.jpg/220px-RupertGrint2018.jpg',
                'role' => 'Acteur'
            ],
             [
                'id' => 34 ,
                'nom' => 'Chris Columbus',
                'date_naissance' => '1958-09-10',
                'lien_photo' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/1/14/Chris_Columbus.jpg/220px-Chris_Columbus.jpg',
                'role' => 'Réalisateur' 
            ],
             [
                'id' => 35 ,
                'nom' => 'Alfonso Cuarón',
                'date_naissance' => '1961-11-28',
                'lien_photo' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/0/00/Alfonso_Cuar%C3%B3n_%282013%29_cropped.jpg/220px-Alfonso_Cuar%C3%B3n_%282013%29_cropped.jpg',
                'role' => 'Réalisateur'
            ],
             [
                'id' => 36 ,
                'nom' => 'Mike Newell',
                'date_naissance' => '1942-03-28',
                'lien_photo' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/5/58/Mike_Newell.jpg/200px-Mike_Newell.jpg',
                'role' => 'Réalisateur'
            ],
             [
                'id' => 37,
                'nom' => 'David Yates',
                'date_naissance' => '1963-10-08',
                'lien_photo' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/0/00/Alfonso_Cuar%C3%B3n_%282013%29_cropped.jpg/220px-Alfonso_Cuar%C3%B3n_%282013%29_cropped.jpg',
                'role' => 'Réalisateur'
            ],
             [
                'id' => 38,
                'nom' => 'David Heyman',
                'date_naissance' => '1961-07-26',
                'lien_photo' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/7/77/David_Heyman1.jpg/220px-David_Heyman1.jpg',
                'role' => 'Producteur' 
            ],
            [
                'id' => 39 ,
                'prenom' => 'Ryan Reynolds',
                'ddn' => '1976-10-23',
                'lien_photo' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/1/14/Deadpool_2_Japan_Premiere_Red_Carpet_Ryan_Reynolds_%28cropped%29.jpg/220px-Deadpool_2_Japan_Premiere_Red_Carpet_Ryan_Reynolds_%28cropped%29.jpg',
                'role' => 'Acteur'
            ],
            [
                'id' => 40,
                'nom' => 'David Spade',
                'date_naissance' => '1964-07-22',
                'lien_photo' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/4/40/David_Spade2_%28cropped%29.jpg/220px-David_Spade2_%28cropped%29.jpg',
                'role'=> 'Acteur'
            ],
            [
                'id' => 41,
                'nom' => 'Jon Heder',
                'date_naissance' => '1977-10-26',
                'lien_photo' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/5/5e/Jon_Heder_by_Gage_Skidmore_2.jpg/220px-Jon_Heder_by_Gage_Skidmore_2.jpg',
                'role'=> 'Acteur'
            ],
            [
                'id' => 42,
                'nom' => 'Jon Lovitz',
                'date_naissance' => '1957-07-21',
                'lien_photo' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/5/55/Jon_Lovitz_Mercedes-Benz_Carousel_of_Hope_Gala_2014_%28cropped%29.jpg/220px-Jon_Lovitz_Mercedes-Benz_Carousel_of_Hope_Gala_2014_%28cropped%29.jpg',
                'role'=> 'Acteur'
            ],
            [
                'id' => 43,
                'nom' => 'Craig Kilborn',
                'date_naissance' => '1962-08-24',
                'lien_photo' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/1/12/Kilborn_in_Beverly_Hills%2C_2019.jpg/220px-Kilborn_in_Beverly_Hills%2C_2019.jpg',
                'role'=> 'Acteur'
            ],
            [
                'id' => 44,
                'nom' => 'Terry Crews',
                'date_naissance' => '1968-06-30',
                'lien_photo' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/5/58/Terry_Crews_by_Gage_Skidmore_5.jpg/220px-Terry_Crews_by_Gage_Skidmore_5.jpg',
                'role'=> 'Acteur'
            ],
            [
                'id' => 45,
                'nom' => 'Liam Neeson',
                'date_naissance' => '1952-06-07',
                'lien_photo' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/b/b9/Liam_Neeson_Deauville_2012.jpg/240px-Liam_Neeson_Deauville_2012.jpg',
                'role'=> 'Acteur'
            ],
            [
                'id' => 46,
                'nom' => 'Natalie Portman',
                'date_naissance' => '1981-06-09',
                'lien_photo' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/d/d3/Natalie_Portman_%2848470988352%29_%28cropped%29.jpg/220px-Natalie_Portman_%2848470988352%29_%28cropped%29.jpg',
                'role'=> 'Acteur'
            ],
            [
                'id' => 47,
                'nom' => 'Jake Lloyd',
                'date_naissance' => '1989-03-05',
                'lien_photo' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/8/8b/10.2.10JakeLloydByLuigiNovi.jpg/220px-10.2.10JakeLloydByLuigiNovi.jpg',
                'role'=> 'Acteur'
            ],
            [
                'id' => 48,
                'nom' => 'Ian McDiarmid',
                'date_naissance' => '1944-08-11',
                'lien_photo' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/f/f1/Ian_McDiarmid_Brussels_Comic_Con_2020.jpg/220px-Ian_McDiarmid_Brussels_Comic_Con_2020.jpg',
                'role'=> 'Acteur'
            ],
        ]);
    }
}
