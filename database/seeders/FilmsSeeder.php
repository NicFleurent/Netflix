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
                'acteurprincipal_id' => 1,
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
                'acteurprincipal_id' => 4,
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
                'acteurprincipal_id' => 7,
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
                'acteurprincipal_id' => 9,
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
                'lien_film' => 'https://www.youtube.com/embed/n3IEcbRJKS0?si=lwHY1rN5ZIuXE24C',
                'lien_pochette' => 'https://wafuu.com/cdn/shop/products/one-piece-film-red-special-movie-linked-edition-978102.jpg?v=1695256138',
                'realisateur_id' => 10,
                'producteur_id' => 11,
                'acteurprincipal_id' => 12,
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
                'acteurprincipal_id' => 15,
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
                'acteurprincipal_id' => 18,
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
                'acteurprincipal_id' => 20,
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
                'acteurprincipal_id' => 20,
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
                'acteurprincipal_id' => 20,
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
                'acteurprincipal_id' => 26,
                'type' => 'anime',
                'genre' => 'shonen',
                'brand' => 'Ufotable',
                'cote' => 8.8,
                'rating' => 'PG-13'
            ],
            [
                'id' => 12,
                'titre' => 'Percy Jackson : Le voleur de foudre',
                'resume' => "Percy est un adolescent de 12 ans. Après avoir passé une année dans une école de laquelle il s'est fait renvoyer, Percy doit partir à cause d'une attaque de monstre, c'est alors qu'un minotaure agresse sa mère et lui. Rejoint par son ami Grover, en réalité un satyre apprenti protecteur, il se réfugie dans une colonie où il découvre qu'il est le fils de Poséidon et que Zeus et d'autres monstres l'accusent d'avoir volé son éclair.",
                'duree' => 119,
                'annee_sortie' => '2010',
                'lien_film' => 'https://www.youtube.com/embed/n5eVOZ6aGkM?si=YnU7aeho0kt7RmAI',
                'lien_pochette' => 'https://media.senscritique.com/media/000018796152/source_big/Percy_Jackson_Le_Voleur_de_foudre.jpg',
                'realisateur_id' => 34,
                'producteur_id' => 34,
                'acteurprincipal_id' => 27,
                'type' => 'film',
                'genre' => 'Fantasy',
                'brand' => '20th Century Fox',
                'cote' => 4.8,
                'rating' => 'PG'
            ],
            [
                'id' => 13,
                'titre' => 'Harry Potter : À l\'école des sorciers',
                'resume' => "Orphelin, Harry Potter a été recueilli à contrecœur par son oncle Vernon et sa tante Pétunia, aussi cruels que mesquins, qui n'hésitent pas à le faire dormir dans le placard sous l'escalier. Constamment maltraité, il doit en outre supporter les jérémiades de son cousin Dudley, garçon cupide et archi-gâté par ses parents. De leur côté, Vernon et Pétunia détestent leur neveu dont la présence leur rappelle sans cesse le tempérament \"imprévisible\" des parents du garçon et leur mort mystérieuse.",
                'duree' => 152,
                'annee_sortie' => '1998',
                'lien_film' => 'https://www.youtube.com/embed/P1BGgqhVGAI?si=sIMDY4Anj2SDVHJV',
                'lien_pochette' => 'https://th.bing.com/th/id/R.05d82c56505c85530a0cff4ded40caa7?rik=N7p6doAu6Vt72A&riu=http%3a%2f%2femmawatson45170.e-monsite.com%2fmedias%2fimages%2f4bud3nugd2xnhlkyncxhfjpheh5.jpg&ehk=QvPuPONSypmhm6Rd6l2Hq9nxaj2I9rMbsTzkRgUPKjA%3d&risl=&pid=ImgRaw&r=0',
                'realisateur_id' => 34,
                'producteur_id' => 34,
                'acteurprincipal_id' => 32,
                'type' => 'film',
                'genre' => 'Fantasy',
                'brand' => 'Warner Bros. Pictures',
                'cote' => 8.1,
                'rating' => 'PG'
            ],
            [
                'id' => 14,
                'titre' => 'Les Animaux Fantastiques',
                'resume' => "Orphelin, Harry Potter a été recueilli à contrecœur par son oncle Vernon et sa tante Pétunia, aussi cruels que mesquins, qui n'hésitent pas à le faire dormir dans le placard sous l'escalier. Constamment maltraité, il doit en outre supporter les jérémiades de son cousin Dudley, garçon cupide et archi-gâté par ses parents. De leur côté, Vernon et Pétunia détestent leur neveu dont la présence leur rappelle sans cesse le tempérament \"imprévisible\" des parents du garçon et leur mort mystérieuse.",
                'duree' => 133,
                'annee_sortie' => '2016',
                'lien_film' => 'https://www.youtube.com/embed/jC8xuFcMq20?si=6mSY8BQQu2e4Dp6S',
                'lien_pochette' => 'https://www.themoviedb.org/t/p/original/yCGJdfWSL22nVOjztf6cPKgy5mU.jpg',
                'realisateur_id' => 34,
                'producteur_id' => 34,
                'acteurprincipal_id' => 29,
                'type' => 'film',
                'genre' => 'Fantasy',
                'brand' => 'Warner Bros. Pictures',
                'cote' => 7.4,
                'rating' => 'PG-13'
            ],
            [
                'id' => 15,
                'titre' => 'Le Monde de Charlie',
                'resume' => "Au lycée où il vient d'arriver, on trouve Charlie bizarre. Sa sensibilité et ses goûts sont en décalage avec ceux de ses camarades de classe. Pour son prof de Lettres, c'est sans doute un prodige, pour les autres, c'est juste un \"loser\". En attendant, il reste en marge - jusqu'au jour où deux terminales, Patrick et la jolie Sam, le prennent sous leur aile. Grâce à eux, il va découvrir la musique, les fêtes, le sexe… pour Charlie, un nouveau monde s'offre à lui.",
                'duree' => 103,
                'annee_sortie' => '2012',
                'lien_film' => 'https://www.youtube.com/embed/EcwoEkF5tko?si=d_C_piCsLfsv25uj',
                'lien_pochette' => 'https://th.bing.com/th/id/R.3d44e2c03a7f234f008ef2f87b90152e?rik=XZXDfjjtBo4wKg&riu=http%3a%2f%2ffr.web.img6.acsta.net%2fmedias%2fnmedia%2f18%2f93%2f52%2f64%2f20261429.jpg&ehk=mFxWdmRzbuO%2bmcxKkgf9qXOQEyOAR7YUM8jQz2FIdCE%3d&risl=&pid=ImgRaw&r=0',
                'realisateur_id' => 30,
                'producteur_id' => 31,
                'acteurprincipal_id' => 29,
                'type' => 'film',
                'genre' => 'Comédie',
                'brand' => 'Summit Entertainment',
                'cote' => 8.5,
                'rating' => 'PG-13'
            ],
            [
                'id' => 16,
                'titre' => 'Harry Potter et le Prisonner d\'Azkaban',
                'resume' => "Sirius Black, un dangereux sorcier criminel, s'échappe de la sombre prison d'Azkaban avec un seul et unique but : retrouver Harry Potter, en troisième année à l'école de Poudlard. Selon la légende, Black aurait jadis livré les parents du jeune sorcier à leur assassin, Lord Voldemort, et serait maintenant déterminé à tuer Harry…",
                'duree' => 142,
                'annee_sortie' => '2004',
                'lien_film' => 'https://www.youtube.com/embed/CLncEeVf4ks?si=K7hAKGJ-2Oo3tvx6',
                'lien_pochette' => 'https://image.tmdb.org/t/p/original/2mKjlNF8PUBihENBlBu7IGEvfNn.jpg',
                'realisateur_id' => 35,
                'producteur_id' => 34,
                'acteurprincipal_id' => 32,
                'type' => 'film',
                'genre' => 'Fantasy',
                'brand' => 'Warner Bros. Pictures',
                'cote' => 9.0,
                'rating' => 'PG'
            ],
            [
                'id' => 17,
                'titre' => 'Harry Potter et l\'Ordre du Phénix',
                'resume' => "Alors qu'il entame sa cinquième année d,étude à Poudlard, Harry Potter découvre qu'une bonne partie de la communauté des sorciers feint d'ignorer sa récente confrontation avec Lord Voldemort, et préfèrent nier cette aveuglante évidence : le Seigneur des Ténèbres est bel et bien vivant. De plus, la communauté magique lit les mensonges de Rita Skeeter dans la Gazette du Sorcier sous contrôle du Ministère de la Magie. Craignant que le puissant Albus Dumbledore ne mente à propos du retour de Voldemort dans le but de saper son autorité et de lui ravir son poste, le Ministre de la Magie Cornélius Fudge nomme un nouveau Professeur de Défense contre les Forces du Mal, qu'il charge de surveiller le vieux doyen et ses étudiants. Mais celle-ci, Dolores Ombrage, se révèle incapable de préparer les collégiens à affronter les nouvelles menaces qui planent sur Poudlard…",
                'duree' => 138,
                'annee_sortie' => '2007',
                'lien_film' => 'https://www.youtube.com/embed/S8-SXEGMmi4?si=mpd7-CW0bsI4bG_R',
                'lien_pochette' => 'https://image.tmdb.org/t/p/original/g6n8G0xPnBVUIKKK41sNmbZB5h4.jpg',
                'realisateur_id' => 37,
                'producteur_id' => 38,
                'acteurprincipal_id' => 32,
                'type' => 'film',
                'genre' => 'Fantasy',
                'brand' => 'Warner Bros. Pictures',
                'cote' => 7.8,
                'rating' => 'PG-13'
            ],
            [
                'id' => 18,
                'titre' => 'Deadpool',
                'resume' => "Deadpool, est l'anti-héros le plus atypique de l'univers Marvel. A l'origine, il s'appelle Wade Wilson : un ancien militaire des Forces Spéciales devenu mercenaire. Après avoir subi une expérimentation hors norme qui va accélérer ses pouvoirs de guérison, il va devenir Deadpool. Armé de ses nouvelles capacités et d'un humour noir survolté, Deadpool va traquer l'homme qui a bien failli anéantir sa vie.",
                'duree' => 108,
                'annee_sortie' => '2016',
                'lien_film' => 'https://www.youtube.com/embed/XWtH7anz7io?si=G4yo6a0W9AqqYZhf',
                'lien_pochette' => 'https://image.tmdb.org/t/p/original/3E53WEZJqP6aM84D8CckXx4pIHw.jpg',
                'realisateur_id' => 37,
                'producteur_id' => 39,
                'acteurprincipal_id' => 39,
                'type' => 'film',
                'genre' => 'Comédie',
                'brand' => '20th Century Fox',
                'cote' => 8.5,
                'rating' => 'PG-13'
            ]
        ]);
    }
}
