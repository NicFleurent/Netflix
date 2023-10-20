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
                'titre' => 'Mission impossible : Dead Reckoning, partie 1',
                'resume' => "Ethan Hunt, au service de Mission Impossible depuis des décennies, fait face à ennemi d'un nouveau genre: une intelligence artificielle nommée « l'Entité », intangible, omniprésente, capable d'influencer comme jamais notre monde d'aujourd'hui. Entré en possession d'un indice qui pourrait permettre à quiconque parvenant à suivre la piste de contrôler le destin de cette I.A., Ethan Hunt ne suit plus les ordres, mais s'assigne lui-même une mission: mettre un terme à la menace de l'Entité par tous les moyens. Mais alors qu'il est traqué par le monde entier, Ethan va découvrir que cette Entité connaît tout de lui, s'est alliée à des ennemis de son passé d'avant Mission Impossible, et que pour la vaincre et sauver l'avenir, il devra sacrifier ce qu'il a de plus cher au monde.",
                'duree' => 163,
                'date_sortie' => '2023-07-12',
                'lien_film' => 'https://www.youtube.com/watch?v=kz34RaRBczI',
                'lien_pochette' => 'https://th.bing.com/th/id/OIP.VXKWtfSFWdVwkpcP3qbtYgHaFj?pid=ImgDet&rs=1',
                'realisateur' => 1,
                'producteur' => 1,
                'acteur_principal' => 1,
            ],
        ]);
    }
}
