<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsagersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('usagers')->insert([
            [
                'id' => 1,
                'nomUsager' => 'admin',
                'nom' => 'admin',
                'prenom' => 'admin',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('Secret1234!'),
                'role' => 'admin'
            ],
            [
                'id' => 2,
                'nomUsager' => 'Mirolie10',
                'nom' => 'Théroux',
                'prenom' => 'Mirolie',
                'email' => 'mirolie010@gmail.com',
                'password' => Hash::make('Secret1234!'),
                'role' => 'normal'
            ],
            [
                'id' => 3,
                'nomUsager' => 'Nidoking',
                'nom' => 'Fleurent',
                'prenom' => 'Nicolas',
                'email' => 'nicolas.fleurent@gmail.com',
                'password' => Hash::make('Secret1234!'),
                'role' => 'enfant'
            ],
        ]);
    }
}
