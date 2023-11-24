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
                'lien_photo' => 'https://i.pinimg.com/originals/39/af/74/39af745176aeb9583f504da4cfe3a9e0.png',
                'role' => 'Acteur'
            ],
            [
                'id' => 2,
                'nom' => 'Christopher McQuarrie',
                'date_naissance' => '1968-10-25',
                'lien_photo' => 'http://www.btlnews.com/wp-content/uploads/2020/09/ChristopherMcQuarrieLMGI.jpg',
                'role' => 'Réalisateur'
            ],
            [
                'id' => 3,
                'nom' => 'James Cameron',
                'date_naissance' => '1954-08-16',
                'lien_photo' => 'https://static.hollywoodreporter.com/sites/default/files/2014/04/james_cameron_-_h_-_2014.jpg.jpg',
                'role' => 'Réalisateur'
            ],
            [
                'id' => 4,
                'nom' => 'Sam Worthington',
                'date_naissance' => '1976-08-02',
                'lien_photo' => 'http://static1.dienanh.net/upload/2015/03/15/sam-worthington-22941.jpg',
                'role' => 'Acteur'
            ],
            [
                'id' => 5,
                'nom' => 'Dennis Dugan',
                'date_naissance' => '1946-11-05',
                'lien_photo' => 'https://m.media-amazon.com/images/M/MV5BY2YwY2FjYzQtNzg4My00MTRjLWI5YWQtMDJiYjU1ZTgzY2QxXkEyXkFqcGdeQXVyMjg1MjAwMA@@._V1_.jpg',
                'role' => 'Réalisateur'
            ],
            [
                'id' => 6,
                'nom' => 'Adam Sandler',
                'date_naissance' => '1966-09-09',
                'lien_photo' => 'https://www.themoviedb.org/t/p/original/rKviEgBCe5mYoyQuWvBzNpYHPko.jpg',
                'role' => 'Producteur'
            ],
            [
                'id' => 7,
                'nom' => 'Rob Schneider',
                'date_naissance' => '1963-10-31',
                'lien_photo' => 'https://live.staticflickr.com/7847/40595353293_bcdd667f84_b.jpg',
                'role' => 'Acteur'
            ],
            [
                'id' => 8,
                'nom' => 'George Lucas',
                'date_naissance' => '1944-05-14',
                'lien_photo' => 'https://www.hollywoodreporter.com/wp-content/uploads/2012/02/lucas_replace.jpg',
                'role' => 'Réalisateur'
            ],
            [
                'id' => 9,
                'nom' => 'Ewan McGregor',
                'date_naissance' => '1971-03-31',
                'lien_photo' => 'https://i.pinimg.com/736x/48/59/c8/4859c86093dd34782d4d7fd5884f41a6.jpg',
                'role' => 'Acteur'
            ],
            [
                'id' => 10,
                'nom' => 'Gorō Taniguchi',
                'date_naissance' => '1966-10-18',
                'lien_photo' => 'https://www.themoviedb.org/t/p/w500/ivwYu0E0k2zVvhmkZDIDC1K0A2g.jpg',
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
                'lien_photo' => 'https://i.redd.it/ljqbdxj4mla21.jpg',
                'role' => 'Doubleuse'
            ],
            [
                'id' => 13,
                'nom' => 'Chris Buck',
                'date_naissance' => '1958-02-24',
                'lien_photo' => 'https://m.media-amazon.com/images/M/MV5BMTQ1ODk1Njg5M15BMl5BanBnXkFtZTcwMTIxNzUzOA@@._V1_FMjpg_UX1000_.jpg',
                'role' => 'Réalisateur'
            ],
            [
                'id' => 14,
                'nom' => 'Peter Del Vecho',
                'date_naissance' => '1958-04-06',
                'lien_photo' => 'https://m.media-amazon.com/images/M/MV5BMTUwNTEyMjg4Nl5BMl5BanBnXkFtZTcwNTMwODIyMw@@._V1_.jpg',
                'role' => 'Producteur'
            ],
            [
                'id' => 15,
                'nom' => 'Kristen Bell',
                'date_naissance' => '1980-07-18',
                'lien_photo' => 'https://openingact.org/wp-content/uploads/2015/02/F2_Kristen_Seamless_1255_CR3_Photo-by-Ricky-Middlesworth-5-2-3-2-1-1-1-732x915.jpg',
                'role' => 'Actrice'
            ],
            [
                'id' => 16,
                'nom' => 'Cal Brunker',
                'date_naissance' => '1978-11-16',
                'lien_photo' => 'https://m.media-amazon.com/images/M/MV5BM2E1OTNhMTEtOTM4NC00NzdkLThkMDAtYmI4NDVkZDNhMWJiXkEyXkFqcGdeQXVyMjQwMDg0Ng@@._V1_.jpg',
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
                'lien_photo' => 'https://wwd.com/wp-content/uploads/2021/07/DSC06074.jpeg?w=640',
                'role' => 'Actrice'
            ],
            [
                'id' => 19,
                'nom' => 'Frank Darabont',
                'date_naissance' => '1959-01-28',
                'lien_photo' => 'https://imgsrc.cineserie.com/1959/01/415211.jpg?ver=1',
                'role' => 'Réalisateur'
            ],
            [
                'id' => 20,
                'nom' => 'Tom Hanks',
                'date_naissance' => '1956-07-09',
                'lien_photo' => 'https://i.pinimg.com/originals/be/29/2f/be292f53bb1d4d50a2729e5519ee7bc8.jpg',
                'role' => 'Acteur'
            ],
            [
                'id' => 21,
                'nom' => 'Robert Zemeckis',
                'date_naissance' => '1952-05-14',
                'lien_photo' => 'https://www.hollywoodreporter.com/wp-content/uploads/2012/11/zemeckis_a_0.jpg',
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
                'lien_photo' => 'https://www.archivesfoundation.org/site/uploads/2013/09/Spielberg-Steven_1_CB2356.jpg',
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
                'lien_photo' => 'https://m.media-amazon.com/images/M/MV5BNDYxNGM5MDktMGRjOC00ZTRlLTllNDgtMDkyMTUzZWQ4Y2U3XkEyXkFqcGdeQXVyNDQxNjcxNQ@@._V1_.jpg',
                'role' => 'Doubleur'
            ],
            [
                'id' => 27,
                'nom' => 'Logan Lerman',
                'date_naissance' => '1992-01-19',
                'lien_photo' => 'https://media.gq.com/photos/5e60208eae81da0009cda97b/master/w_1600%2Cc_limit/logan-lerman-gq1707.jpg',
                'role' => 'Acteur'
            ],
            [
                'id' => 28,
                'nom' => 'Emma Watson',
                'date_naissance' => '1990-04-15',
                'lien_photo' => 'https://www.designscene.net/wp-content/uploads/2023/07/5-Times-Emma-Watson-Showed-Us-That-Sustainability-Can-Be-Stylish-2.jpg',
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
                'lien_photo' => 'https://i.pinimg.com/originals/96/94/b8/9694b87ad5a4c1c6589c8d7f892497e1.jpg',
                'role' => 'Producteur'
            ],
            [
                'id' => 32,
                'nom' => 'Daniel Radcliffe' ,                
                'date_naissance' => '1989-07-23',
                'lien_photo' => 'https://i.guim.co.uk/img/media/808b031d10688602deb60849458557ee2a714992/1141_94_4025_2415/master/4025.jpg?width=1200&height=1200&quality=85&auto=format&fit=crop&s=26fb24ef5ee6c8a55083613588f3bc16',
                'role' => 'Acteur'
             ],
             [
                'id' => 33 ,
                'nom' => 'Rupert Grint',
                'date_naissance' => '1988-08-24',
                'lien_photo' => 'https://i.pinimg.com/736x/d4/3f/62/d43f6224afaea6420dacca086eee8eee.jpg',
                'role' => 'Acteur'
            ],
             [
                'id' => 34 ,
                'nom' => 'Chris Columbus',
                'date_naissance' => '1958-09-10',
                'lien_photo' => 'https://tisch.nyu.edu/content/dam/tisch/external-affairs/Gala2018/Chris-Columbus-headshot.png',
                'role' => 'Réalisateur' 
            ],
             [
                'id' => 35 ,
                'nom' => 'Alfonso Cuarón',
                'date_naissance' => '1961-11-28',
                'lien_photo' => 'https://deadline.com/wp-content/uploads/2023/01/Alfonso-Cuaron_White_00266.jpg?w=768',
                'role' => 'Réalisateur'
            ],
             [
                'id' => 36 ,
                'nom' => 'Mike Newell',
                'date_naissance' => '1942-03-28',
                'lien_photo' => 'https://m.media-amazon.com/images/M/MV5BMTgzNDI1ODc4N15BMl5BanBnXkFtZTYwNjg3NTc1._V1_.jpg',
                'role' => 'Réalisateur'
            ],
             [
                'id' => 37,
                'nom' => 'David Yates',
                'date_naissance' => '1963-10-08',
                'lien_photo' => 'https://www.hollywoodreporter.com/wp-content/uploads/2011/07/yates_a.jpg',
                'role' => 'Réalisateur'
            ],
             [
                'id' => 38,
                'nom' => 'David Heyman',
                'date_naissance' => '1961-07-26',
                'lien_photo' => 'https://m.media-amazon.com/images/M/MV5BMTYwNzE2MDgxM15BMl5BanBnXkFtZTcwMTIwMDY4NQ@@._V1_.jpg',
                'role' => 'Producteur' 
            ],
            [
                'id' => 39 ,
                'prenom' => 'Ryan Reynolds',
                'ddn' => '1976-10-23',
                'lien_photo' => 'https://image.tmdb.org/t/p/original/52GxBTYdLLc3x3UVSplZdHqj4RR.jpg',
                'role' => 'Acteur'
            ],
            [
                'id' => 40,
                'nom' => 'David Spade',
                'date_naissance' => '1964-07-22',
                'lien_photo' => 'https://hips.hearstapps.com/hmg-prod/images/rsz-spade-headshot-bbs-high-res-1650926384.jpg',
                'role'=> 'Acteur'
            ],
            [
                'id' => 41,
                'nom' => 'Jon Heder',
                'date_naissance' => '1977-10-26',
                'lien_photo' => 'https://d2c0db5b8fb27c1c9887-9b32efc83a6b298bb22e7a1df0837426.ssl.cf2.rackcdn.com/19476427-jon-heder-headshot-400x400.jpeg',
                'role'=> 'Acteur'
            ],
            [
                'id' => 42,
                'nom' => 'Jon Lovitz',
                'date_naissance' => '1957-07-21',
                'lien_photo' => 'https://www.itsalldowntown.com/wp-content/uploads/2023/06/Jon-Lovitz.png',
                'role'=> 'Acteur'
            ],
            [
                'id' => 43,
                'nom' => 'Craig Kilborn',
                'date_naissance' => '1962-08-24',
                'lien_photo' => 'https://m.media-amazon.com/images/M/MV5BMjAwNzA3MDg4OF5BMl5BanBnXkFtZTcwMTM0Mjk2Mw@@._V1_.jpg',
                'role'=> 'Acteur'
            ],
            [
                'id' => 44,
                'nom' => 'Terry Crews',
                'date_naissance' => '1968-06-30',
                'lien_photo' => 'https://hips.hearstapps.com/hmg-prod/images/upfront-portrait-studio-pictured-terry-crews-brooklyn-nine-news-photo-1144009858-1558454704.jpg?crop=0.393xw:0.277xh;0.284xw,0.0170xh&resize=1200:*',
                'role'=> 'Acteur'
            ],
            [
                'id' => 45,
                'nom' => 'Liam Neeson',
                'date_naissance' => '1952-06-07',
                'lien_photo' => 'https://i.pinimg.com/originals/47/3a/17/473a173f170c74bd4954583e756944a9.jpg',
                'role'=> 'Acteur'
            ],
            [
                'id' => 46,
                'nom' => 'Natalie Portman',
                'date_naissance' => '1981-06-09',
                'lien_photo' => 'https://images.mubicdn.net/images/cast_member/3138/cache-488404-1615052280/image-w856.jpg',
                'role'=> 'Acteur'
            ],
            [
                'id' => 47,
                'nom' => 'Jake Lloyd',
                'date_naissance' => '1989-03-05',
                'lien_photo' => 'https://m.media-amazon.com/images/M/MV5BMTk2MDExNzQwN15BMl5BanBnXkFtZTgwMzM2NzQwNjE@._V1_.jpg',
                'role'=> 'Acteur'
            ],
            [
                'id' => 48,
                'nom' => 'Ian McDiarmid',
                'date_naissance' => '1944-08-11',
                'lien_photo' => 'https://i.guim.co.uk/img/media/ddaf393fb3194b1849ef6b2f87b9c712f1828c72/0_448_6720_4032/master/6720.jpg?width=1200&height=1200&quality=85&auto=format&fit=crop&s=c96e63dce93ebec4d69cbd0c87d8c69c',
                'role'=> 'Acteur'
            ],
            [
                'id' => 49 ,
                'prenom' => 'Tim Miller',
                'ddn' => '1964-10-10',
                'lien_photo' => 'https://m.media-amazon.com/images/M/MV5BOGFlZTUwYmMtOGEyYy00ZmFlLThlZGEtYzcxZjNiMjQzMzE1XkEyXkFqcGdeQXVyODk4OTc3MTY@._V1_.jpg',
                'role' => 'Réalisateur'
            ]
        ]);
    }
}
