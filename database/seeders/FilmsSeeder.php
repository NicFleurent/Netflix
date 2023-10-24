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
                'resume' => "Ethan Hunt, au service de Mission Impossible depuis des décennies, fait face à ennemi d'un nouveau genre: une intelligence artificielle nommée « l'Entité », intangible, omniprésente, capable d'influencer comme jamais notre monde d'aujourd'hui. Entré en possession d'un indice qui pourrait permettre à quiconque parvenant à suivre la piste de contrôler le destin de cette I.A., Ethan Hunt ne suit plus les ordres, mais s'assigne lui-même une mission: mettre un terme à la menace de l'Entité par tous les moyens. Mais alors qu'il est traqué par le monde entier, Ethan va découvrir que cette Entité connaît tout de lui, s'est alliée à des ennemis de son passé d'avant Mission Impossible, et que pour la vaincre et sauver l'avenir, il devra sacrifier ce qu'il a de plus cher au monde.",
                'duree' => 163,
                'date_sortie' => '2023-07-12',
                'lien_film' => 'https://www.youtube.com/watch?v=kz34RaRBczI',
                'lien_pochette' => 'https://th.bing.com/th/id/OIP.VXKWtfSFWdVwkpcP3qbtYgHaFj?pid=ImgDet&rs=1',
                'realisateur' => 2,
                'producteur' => 1,
                'acteur_principal' => 1,
            ],
            [
                'id' => 2,
                'titre' => 'Avatar : La Voie de l\'eau',
                'resume' => "Sur Pandora, plus d'une décennie après la guerre entre le peuple autochtone des Na'vi et les humains de la Ressource Development Administration (RDA), Jake Sully assume désormais son rôle de chef des Omaticaya. Avec sa compagne, Neytiri, ils s'occupent de leur famille : Neteyam, leur fils aîné, Lo'ak, leur fils cadet, Kiri, leur fille adoptive (mystérieusement née de l'avatar inerte de la Dre Grace Augustine), Spider, un garçon humain abandonné sur la planète, et Tuk, leur fille benjamine. C'est alors que la RDA et ses troupes reviennent en force sur Pandora. Leur mission est de préparer la planète à devenir une nouvelle Terre et accueillir leur exode. Jake, Neytiri et les Omaticaya sont les premiers à s'opposer à eux. Cependant, les humains ont également dans leurs rangs une escouade de « recombinés » : des avatars Na'vi avec les souvenirs de soldats décédés. Leur chef n'est autre que le colonel Quaritch, qui avait pris soin de faire une sauvegarde de sa mémoire et de sa personnalité avant la bataille où il perdit la vie.",
                'duree' => 192,
                'date_sortie' => '2022-12-16',
                'lien_film' => 'https://www.youtube.com/watch?v=nMUHueJfy_Y',
                'lien_pochette' => 'https://m.media-amazon.com/images/S/pv-target-images/980e6c5e3ea5e4d4b76d968631a714520ea54fc8a7760842322d3b81eb829174.jpg',
                'realisateur' => 3,
                'producteur' => 3,
                'acteur_principal' => 4,
            ],
            [
                'id' => 3,
                'titre' => 'Les benchwarmers',
                'resume' => "Gus et ses deux amis Richie et Clark délaissés sont engagés par un millionnaire qui veut former une équipe de baseball et affronter les plus méchants joueurs des plus méchantes équipes des ligues mineures. Gus est si doué pour le baseball qui devient vite un modèle pour les exclus comme lui...",
                'duree' => 85,
                'date_sortie' => '2006-04-07',
                'lien_film' => 'https://www.youtube.com/watch?v=DgLZGPfxpkM&t=21s',
                'lien_pochette' => 'https://occ-0-1123-32.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABcRz42EZIIFBqCXiFv54jbr5DMyVPkIZC8l3HNov-SFFv5HsNk8o0ndQD3JOC9y2BcHH1OgMsWUOwlf--fpuu7gXN_Ju5NHFn5p9.jpg?r=382',
                'realisateur' => 5,
                'producteur' => 6,
                'acteur_principal' => 7,
            ],
            [
                'id' => 4,
                'titre' => 'Star Wars, épisode I : La Menace fantôme',
                'resume' => "Avant de devenir un célèbre chevalier Jedi, et bien avant de se révéler l'âme la plus noire de la galaxie, Anakin Skywalker est un jeune esclave sur la planète Tatooine. La Force est déjà puissante en lui et il est un remarquable pilote de Podracer. Le maître Jedi Qui-Gon Jinn le découvre et entrevoit alors son immense potentiel. Pendant ce temps, l'armée de droïdes de l'insatiable Fédération du Commerce a envahi Naboo dans le cadre d'un plan secret des Sith visant à accroître leur pouvoir.",
                'duree' => 136,
                'date_sortie' => '1999-05-19',
                'lien_film' => 'https://www.youtube.com/watch?v=G9e3R-vkj_A',
                'lien_pochette' => 'https://thumb.canalplus.pro/http/unsafe/1440x810/filters:quality(80)/img-hapi.canalplus.pro:80/ServiceImage/ImageID/111172018',
                'realisateur' => 8,
                'producteur' => 8,
                'acteur_principal' => 9,
            ],
            [
                'id' => 5,
                'titre' => 'One Piece Film: Red',
                'resume' => "L'histoire se déroule sur l'île d'Élégia où l'équipage au Chapeau de paille va voir un concert. Ils sont impatients d'écouter la chanteuse la plus connue du monde, Uta, qui se trouve être la fille du légendaire pirate Shanks Le Roux et une amie d'enfance de Luffy.",
                'duree' => 115,
                'date_sortie' => '2022-08-06',
                'lien_film' => 'https://www.youtube.com/watch?v=89JWRYEIG-s',
                'lien_pochette' => 'https://www.hindustantimes.com/ht-img/img/2023/04/19/1600x900/one_piece_film_red_1681910427977_1681910453047.jpeg',
                'realisateur' => 10,
                'producteur' => 11,
                'acteur_principal' => 12,
            ],
            [
                'id' => 6,
                'titre' => 'La Reine des neiges',
                'resume' => "L'histoire se déroule sur l'île d'Élégia où l'équipage au Chapeau de paille va voir un concert. Ils sont impatients d'écouter la chanteuse la plus connue du monde, Uta, qui se trouve être la fille du légendaire pirate Shanks Le Roux et une amie d'enfance de Luffy.",
                'duree' => 102,
                'date_sortie' => '2013-11-27',
                'lien_film' => 'https://www.youtube.com/watch?v=uyP70r9PS6A',
                'lien_pochette' => 'https://prod-ripcut-delivery.disney-plus.net/v1/variant/disney/5A04BBDD5CFD81AAD009775FE215D3DD8EE604E161603EF230644143815F2A81/scale?width=1200&aspectRatio=1.78&format=jpeg',
                'realisateur' => 13,
                'producteur' => 14,
                'acteur_principal' => 15,
            ],
            [
                'id' => 7,
                'titre' => 'La Pat\'Patrouille : La Super Patrouille, le film',
                'resume' => "Après qu'une savante « zin zin » ait attiré une météorite jusque sur AventureVille avec un aimant géant, elle se fait arrêter par la police et l'objet venu de l'espace se retrouve entre les pattes de la Pat' Patrouille. Les chiots obtiennent soudainement des super-pouvoirs, ce qui les aide grandement dans leur mission de secourir la veuve et l'orphelin. Stella tentera de tirer profit de cette nouvelle opportunité afin de prouver qu'elle peut être un atout pour l'équipe. Mais, quand ladite savante « zin zin » s'évade de prison avec le maire Hellinger, les choses se compliqueront pour Stella et le reste de la bande.",
                'duree' => 92,
                'date_sortie' => '2023-09-29',
                'lien_film' => 'https://www.youtube.com/watch?v=CIutKromqmY',
                'lien_pochette' => 'https://cf-images.us-east-1.prod.boltdns.net/v1/static/1049394751001/6fc94d68-13cc-4bc2-bde6-7e3fba167220/8927ab3d-9e25-45e0-a9c4-675e5d139e3e/1280x720/match/image.jpg',
                'realisateur' => 16,
                'producteur' => 17,
                'acteur_principal' => 18,
            ],
            [
                'id' => 8,
                'titre' => 'La Ligne verte',
                'resume' => "Paul Edgecomb, pensionnaire centenaire d'une maison de retraite, est hanté par ses souvenirs. Gardien-chef du pénitencier de Cold Mountain, en 1935, en Louisiane, il était chargé de veiller au bon déroulement des exécutions capitales au bloc E (la ligne verte) en s'efforçant d'adoucir les derniers moments des condamnés. Parmi eux se trouvait un colosse du nom de John Coffey, accusé du viol et du meurtre de deux fillettes.",
                'duree' => 188,
                'date_sortie' => '1999-12-06',
                'lien_film' => 'https://www.youtube.com/watch?v=xYM4wJJpR9M',
                'lien_pochette' => 'https://material.asset.catchplay.com/NBC-IN-001-A0131/artworks/posters/NBC-IN-001-A0131-P544.jpg?hash=1656562678',
                'realisateur' => 19,
                'producteur' => 19,
                'acteur_principal' => 20,
            ],
            [
                'id' => 9,
                'titre' => 'Forrest Gump',
                'resume' => "Sur un banc, à Savannah, en Géorgie, Forrest Gump attend le bus. Comme celui-ci tarde à venir, le jeune homme raconte sa vie à ses compagnons d'ennui. A priori, ses capacités intellectuelles plutôt limitées ne le destinaient pas à de grandes choses. Qu'importe. Forrest Gump, sans jamais rien y comprendre, s'associa à tous les grands événements de l'Histoire de son pays.",
                'duree' => 142,
                'date_sortie' => '1994-07-06',
                'lien_film' => 'https://www.youtube.com/watch?v=7pDDuroFBGM',
                'lien_pochette' => 'https://img.20mn.fr/bpCVn2t9S0yu0k_GgTbc7w/1200x768_affiche-film-forrest-gump-tom-hanks',
                'realisateur' => 21,
                'producteur' => 22,
                'acteur_principal' => 20,
            ],
            [
                'id' => 10,
                'titre' => 'Il faut sauver le soldat Ryan',
                'resume' => "Tandis que les forces alliées débarquent à Omaha Beach, Miller doit conduire son escouade derrière les lignes ennemies pour une mission particulièrement dangereuse: trouver et ramener sain et sauf le simple soldat James Ryan, dont les trois frères sont morts au combat en l'espace de trois jours. Pendant que l'escouade progresse en territoire ennemi, les hommes de Miller se posent des questions et se demandent s'il faut vraiment risquer la vie de huit hommes pour en sauver un seul.",
                'duree' => 163,
                'date_sortie' => '1998-07-24',
                'lien_film' => 'https://www.youtube.com/watch?v=7VBsDfsXJfQ',
                'lien_pochette' => 'https://shatpod.com/movies/wp-content/uploads/Saving-Private-Ryan-Poster-1998.jpg',
                'realisateur' => 23,
                'producteur' => 23,
                'acteur_principal' => 20,
            ],
        ]);
    }
}
