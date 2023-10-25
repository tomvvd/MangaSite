<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SeriesSeeder extends Seeder
{
    public function run()
    {
        DB::table('series')->insert([
            [
                'id' => 1,
                'titre' => 'One Piece',
                'auteur' => 'Eiichiro Oda',
                'nombre_volumes' => 100,
                'date_premiere_parution' => '1997-07-22',
                'couverture' => 'one-piece.jpg',
                'serie_finie' => false,
            ],
            [
                'id' => 2,
                'titre' => 'Naruto',
                'auteur' => 'Masashi Kishimoto',
                'nombre_volumes' => 72,
                'date_premiere_parution' => '1999-09-21',
                'couverture' => 'naruto.jpg',
                'serie_finie' => true,
            ],
            [
                'id' => 3,
                'titre' => 'Attack on Titan',
                'auteur' => 'Hajime Isayama',
                'nombre_volumes' => 34,
                'date_premiere_parution' => '2009-09-09',
                'couverture' => 'attack-on-titan.jpg',
                'serie_finie' => true,
            ],
            [
                'id' => 4,
                'titre' => 'Death Note',
                'auteur' => 'Tsugumi Ohba',
                'nombre_volumes' => 12,
                'date_premiere_parution' => '2003-12-01',
                'couverture' => 'death-note.jpg',
                'serie_finie' => true,
            ],
            [
                'id' => 5,
                'titre' => 'My Hero Academia',
                'auteur' => 'Kōhei Horikoshi',
                'nombre_volumes' => 31,
                'date_premiere_parution' => '2014-07-07',
                'couverture' => 'my-hero-academia.jpg',
                'serie_finie' => false,
            ],
            [
                'id' => 6,
                'titre' => 'Demon Slayer: Kimetsu no Yaiba',
                'auteur' => 'Koyoharu Gotouge',
                'nombre_volumes' => 23,
                'date_premiere_parution' => '2016-02-15',
                'couverture' => 'demon-slayer.jpg',
                'serie_finie' => true,
            ],
        ]);
    }
}
