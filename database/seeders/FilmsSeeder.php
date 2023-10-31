<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\facades\DB;

class FilmsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('films')->insert([
            [
                'id' => 1,
                'titre' => 'Mission impossible : Dead Reckoning, partie 1',
                'resume' => "Ethan Hunt et l'équipe du FMI doivent traquer une nouvelle arme terrifiante qui menace toute l'humanité si elle tombe entre de mauvaises mains. Avec le contrôle de l'avenir et le destin du monde en jeu, une course mortelle autour du globe commence. Confronté à un ennemi mystérieux et tout-puissant, Ethan est obligé de considérer que rien ne compte plus que la mission, pas même la vie de ceux qui lui tiennent le plus à coeur.",
                'duree' => 163,
                'annee_sortie' => '2023',
                'lien_film' => 'https://www.youtube.com/embed/kz34RaRBczI?si=_N5acsOBOJFFySye',
                'lien_pochette' => 'https://i.ebayimg.com/images/g/hB0AAOSwB01kZhhD/s-l1600.jpg',
                'realisateur_id' => 2,
                'producteur_id' => 1,
                'acteurPrincipal_id' => 1,
                'type' => 'film',
                'genre' => 'Action',
                'brand' => 'Skydance Media',
                'cote' => 9.6,
                'rating' => 'PG-13',
            ],
            [
                'id' => 2,
                'titre' => 'Avatar : La Voie de l\'eau',
                'resume' => "Jake Sully et Ney'tiri ont formé une famille et font tout pour rester aussi soudés que possible. Ils sont cependant contraints de quitter leur foyer et d'explorer les différentes régions encore mystérieuses de Pandora. Lorsqu'une ancienne menace refait surface, Jake va devoir mener une guerre difficile contre les humains.",
                'duree' => 192,
                'annee_sortie' => '2022',
                'lien_film' => 'https://www.youtube.com/embed/nMUHueJfy_Y?si=xS5c3uSn1gO5FKLA',
                'lien_pochette' => 'https://m.media-amazon.com/images/I/71pieM7cJtL.jpg',
                'realisateur_id' => 3,
                'producteur_id' => 3,
                'acteurPrincipal_id' => 4,
                'type' => 'film',
                'genre' => 'Science-Fiction',
                'brand' => '20th Century Studios',
                'cote' => 7.6,
                'rating' => 'PG-13'
            ],
            [
                'id' => 3,
                'titre' => 'Les benchwarmers',
                'resume' => "Gus et ses deux amis Richie et Clark délaissés sont engagés par un millionnaire qui veut former une équipe de baseball et affronter les plus méchants joueurs des plus méchantes équipes des ligues mineures. Gus est si doué pour le baseball qui devient vite un modèle pour les exclus comme lui...",
                'duree' => 85,
                'annee_sortie' => '2006',
                'lien_film' => 'https://youtube.com/embed/DgLZGPfxpkM?si=sk2tbVTNmSqFjSgZ',
                'lien_pochette' => 'https://m.media-amazon.com/images/I/A1gAxNF-tGL._AC_UF1000,1000_QL80_.jpg',
                'realisateur_id' => 5,
                'producteur_id' => 6,
                'acteurPrincipal_id' => 7,
                'type' => 'film',
                'genre' => 'Comédie',
                'brand' => '20th Century Studios',
                'cote' => 9.9,
                'rating' => 'PG-13'
            ],
            [
                'id' => 4,
                'titre' => 'Star Wars, épisode I : La Menace fantôme',
                'resume' => "Avant de devenir un célèbre chevalier Jedi, et bien avant de se révéler l'âme la plus noire de la galaxie, Anakin Skywalker est un jeune esclave sur la planète Tatooine. La Force est déjà puissante en lui et il est un remarquable pilote de Podracer. Le maître Jedi Qui-Gon Jinn le découvre et entrevoit alors son immense potentiel. Pendant ce temps, l'armée de droïdes de l'insatiable Fédération du Commerce a envahi Naboo dans le cadre d'un plan secret des Sith visant à accroître leur pouvoir.",
                'duree' => 136,
                'annee_sortie' => '1999',
                'lien_film' => 'https://www.youtube.com/embed/G9e3R-vkj_A?si=MytZMDPcIGuqeInu',
                'lien_pochette' => 'https://prod-ripcut-delivery.disney-plus.net/v1/variant/disney/6FD65E249C6F0D04AD04962D1AF6C0B578DD853F796541145EDCCB51B5D1EDD4/scale?width=506&aspectRatio=2.00&format=jpeg',
                'realisateur_id' => 8,
                'producteur_id' => 8,
                'acteurPrincipal_id' => 9,
                'type' => 'film',
                'genre' => 'Science-Fiction',
                'brand' => '20th Century Fox',
                'cote' => 5.2,
                'rating' => 'PG'
            ],
            [
                'id' => 5,
                'titre' => 'One Piece Film: Red',
                'resume' => "L'histoire se déroule sur l'île d'Élégia où l'équipage au Chapeau de paille va voir un concert. Ils sont impatients d'écouter la chanteuse la plus connue du monde, Uta, qui se trouve être la fille du légendaire pirate Shanks Le Roux et une amie d'enfance de Luffy.",
                'duree' => 115,
                'annee_sortie' => '2022',
                'lien_film' => 'https://www.youtube.com/embed/89JWRYEIG-s?si=LV9HlhJ8uYq7zpai',
                'lien_pochette' => 'https://wafuu.com/cdn/shop/products/one-piece-film-red-special-movie-linked-edition-978102.jpg?v=1695256138',
                'realisateur_id' => 10,
                'producteur_id' => 11,
                'acteurPrincipal_id' => 12,
                'type' => 'film',
                'genre' => 'Anime Japonais',
                'brand' => 'Crunchyroll',
                'cote' => 9.5,
                'rating' => 'PG-13'
            ],
            [
                'id' => 6,
                'titre' => 'La Reine des neiges',
                'resume' => "Anna, une jeune fille aussi audacieuse qu'optimiste, se lance dans un incroyable voyage en compagnie de Kristoff, un montagnard expérimenté, et de son fidèle renne Sven, à la recherche de sa soeur, Elsa, la reine des neiges qui a plongé le royaume d'Arendelle dans un hiver éternel. En chemin, ils vont rencontrer de mystérieux trolls et un drôle de bonhomme de neige nommé Olaf, braver les conditions extrêmes des sommets escarpés et glacés, et affronter la magie qui les guette à chaque pas.",
                'duree' => 102,
                'annee_sortie' => '2013',
                'lien_film' => 'https://www.youtube.com/embed/uyP70r9PS6A?si=B5wJ9VPAw56jDZe7',
                'lien_pochette' => 'https://m.media-amazon.com/images/I/81mhAyD0VOL._AC_UF894,1000_QL80_.jpg',
                'realisateur_id' => 13,
                'producteur_id' => 14,
                'acteurPrincipal_id' => 15,
                'type' => 'film',
                'genre' => 'Animation Américaine',
                'brand' => 'Disney',
                'cote' => 9.0,
                'rating' => 'PG'
            ],
            [
                'id' => 7,
                'titre' => 'La Pat\'Patrouille : La Super Patrouille, le film',
                'resume' => "Lorsqu'une météorite magique s'écrase sur Aventureville, elle donne à la Pat' Patrouille des pouvoirs, les transformant en Super Patrouille. Pour Stella, la plus petite membre de l'équipe, avoir des pouvoirs est un rêve qui devient réalité. Cependant, les choses dégénèrent lorsque Monsieur Hellinger, l'ennemi juré de la Pat' Patrouille, s'évade de prison et s'associe à un savant fou afin de voler et de s'accaparer ses nouveaux pouvoirs.",
                'duree' => 92,
                'annee_sortie' => '2023',
                'lien_film' => 'https://www.youtube.com/embed/CIutKromqmY?si=E2-wx1dPL7EjjQdT',
                'lien_pochette' => 'https://i.ebayimg.com/images/g/fOkAAOSwNEZkx-ks/s-l1200.webp',
                'realisateur_id' => 16,
                'producteur_id' => 17,
                'acteurPrincipal_id' => 18,
                'type' => 'film',
                'genre' => 'Animation Américaine',
                'brand' => 'Paramount Pictures',
                'cote' => 7.2,
                'rating' => 'PG'
            ],
            [
                'id' => 8,
                'titre' => 'La Ligne verte',
                'resume' => "Paul Edgecomb, pensionnaire centenaire d'une maison de retraite, est hanté par ses souvenirs. Gardien-chef du pénitencier de Cold Mountain, en 1935, en Louisiane, il était chargé de veiller au bon déroulement des exécutions capitales au bloc E (la ligne verte) en s'efforçant d'adoucir les derniers moments des condamnés. Parmi eux se trouvait un colosse du nom de John Coffey, accusé du viol et du meurtre de deux fillettes.",
                'duree' => 188,
                'annee_sortie' => '1999',
                'lien_film' => 'https://www.youtube.com/embed/xYM4wJJpR9M?si=OCQ8XMSsH4Dc9cPl',
                'lien_pochette' => 'https://fr.web.img4.acsta.net/medias/nmedia/18/66/15/78/19254683.jpg',
                'realisateur_id' => 19,
                'producteur_id' => 19,
                'acteurPrincipal_id' => 20,
                'type' => 'film',
                'genre' => 'Drame',
                'brand' => 'Warner Bros. Pictures',
                'cote' => 7.9,
                'rating' => 'R',
            ],
            [
                'id' => 9,
                'titre' => 'Forrest Gump',
                'resume' => "Sur un banc, à Savannah, en Géorgie, Forrest Gump attend le bus. Comme celui-ci tarde à venir, le jeune homme raconte sa vie à ses compagnons d'ennui. A priori, ses capacités intellectuelles plutôt limitées ne le destinaient pas à de grandes choses. Qu'importe. Forrest Gump, sans jamais rien y comprendre, s'associa à tous les grands événements de l'Histoire de son pays.",
                'duree' => 142,
                'annee_sortie' => '1994',
                'lien_film' => 'https://www.youtube.com/embed/7pDDuroFBGM?si=xOfu5kPab9N3W5fK',
                'lien_pochette' => 'https://www.themoviedb.org/t/p/original/tqfdw48d74spVGmqlZ6rRyOywUM.jpg',
                'realisateur_id' => 21,
                'producteur_id' => 22,
                'acteurPrincipal_id' => 20,
                'type' => 'film',
                'genre' => 'Comédie',
                'brand' => 'Paramount Pictures',
                'cote' => 7.1,
                'rating' => 'PG-13',
            ],
            [
                'id' => 10,
                'titre' => 'Il faut sauver le soldat Ryan',
                'resume' => "Tandis que les forces alliées débarquent à Omaha Beach, Miller doit conduire son escouade derrière les lignes ennemies pour une mission particulièrement dangereuse: trouver et ramener sain et sauf le simple soldat James Ryan, dont les trois frères sont morts au combat en l'espace de trois jours. Pendant que l'escouade progresse en territoire ennemi, les hommes de Miller se posent des questions et se demandent s'il faut vraiment risquer la vie de huit hommes pour en sauver un seul.",
                'duree' => 163,
                'annee_sortie' => '1998',
                'lien_film' => 'https://www.youtube.com/embed/7VBsDfsXJfQ?si=39KdGeyBblmSA1fS',
                'lien_pochette' => 'https://images.affiches-et-posters.com/albums/3/2895/affiche-film-faut-sauver-soldat-ryan-432.jpg',
                'realisateur_id' => 23,
                'producteur_id' => 23,
                'acteurPrincipal_id' => 20,
                'type' => 'film',
                'genre' => 'Historique',
                'brand' => 'DreamWorks',
                'cote' => 9.4,
                'rating' => 'R'
            ],
            [
                'id' => 11,
                'titre' => 'Demon Slayer',
                'resume' => "Depuis les temps anciens, il existe des rumeurs concernant des démons mangeurs d'hommes qui se cachent dans les bois. Pour cette raison, les citadins locaux ne s'y aventurent jamais la nuit. La légende raconte aussi qu'un tueur déambule la nuit, chassant ces démons assoiffés de sang.",
                'duree' => 23,
                'annee_sortie' => '2019',
                'lien_film' => 'https://www.youtube.com/embed/VQGCKyvzIM4?si=xCE7Kwd8t_E3PtAa',
                'lien_pochette' => 'https://i.pinimg.com/736x/0e/52/37/0e5237897dbefb7b67443ed28adbee3d.jpg',
                'realisateur_id' => 24,
                'producteur_id' => 25,
                'acteurPrincipal_id' => 26,
                'type' => 'anime',
                'genre' => 'shonen',
                'brand' => 'Ufotable',
                'cote' => 8.8,
                'rating' => 'PG-13'
            ],
        ]);
    }
}
